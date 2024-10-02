  ABINIT 
  
  Give name for formatted input file: 
DP.in
  Give name for formatted output file:
DP.out
  Give root name for generic input files:
DPi
  Give root name for generic output files:
DPo
  Give root name for generic temporary files:
/tmp/DP

.Version 7.8.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.9 computer) 

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

.Starting date : Wed 29 Oct 2014.
- ( at 11h13 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.8.2
  Build target  : x86_64_linux_gnu4.9
  Build date    : 20140925

 === Compiler Suite === 
  C compiler       : gnu4.9
  C++ compiler     : gnu4.9
  Fortran compiler : gnu4.9
  CFLAGS           : -m64 -g -O2 -mtune=native -march=native
  CXXFLAGS         : -m64 -g -O2 -mtune=native -march=native
  FCFLAGS          : -m64 -g -ffree-line-length-none  -fopenmp
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
  DFT flavor    : libxc+atompaw+bigdft+wannier90
  FFT flavor    : fftw3
  LINALG flavor : atlas+scalapack
  MATH flavor   : gsl
  TIMER flavor  : abinit
  TRIO flavor   : netcdf+etsf_io

 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : yes

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
 
        HAVE_FC_LONG_LINES           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED
 
         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM                  HAVE_FFT
 
            HAVE_FFT_FFTW3              HAVE_FFT_MPI           HAVE_FFT_SERIAL
 
          HAVE_FORTRAN2003               HAVE_GW_DPC        HAVE_LIBPAW_ABINIT
 
               HAVE_LINALG           HAVE_LINALG_MPI     HAVE_LINALG_SCALAPACK
 
        HAVE_LINALG_SERIAL                 HAVE_MATH             HAVE_MATH_GSL
 
          HAVE_MATH_SERIAL                  HAVE_MPI                 HAVE_MPI2
 
       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL               HAVE_MPI_IO
 
 HAVE_MPI_TYPE_CREATE_S...         HAVE_OMP_COLLAPSE               HAVE_OPENMP
 
             HAVE_OS_LINUX                HAVE_TIMER         HAVE_TIMER_ABINIT
 
            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL         HAVE_TRIO_ETSF_IO
 
          HAVE_TRIO_NETCDF              USE_MACROAVE                            
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> DP.in
- output file    -> DP.out
- root for input  files -> DPi
- root for output files -> DPo

-instrng :    56 lines of input have been read from file DP.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 38sr.10.hgh

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is 29cu.11.hgh

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   3 , psp file is 77ir.17.hgh

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   4 , psp file is 8o.6.hgh
  read the values zionpsp= 10.0 , pspcod=   3 , lmax=   2
  read the values zionpsp= 11.0 , pspcod=   3 , lmax=   2
  read the values zionpsp= 17.0 , pspcod=   3 , lmax=   2
  read the values zionpsp=  6.0 , pspcod=   3 , lmax=   1

 inpspheads: deduce mpsang  =   3, n1xccc  =   0.

 invars1m : enter jdtset=1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
  Describe the different generators (index,symrel,tnons,symafm)
  1    1  0  0  0  1  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  2    0  1  0 -1  0  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  added one more symmetry : nogen_new=           3
  added one more symmetry : nogen_new=           4

 symlatt : the Bravais lattice is tP (primitive tetragonal)

--- !COMMENT
message: |
    According to the symmetry finder, the unit cell is
      not primitive, with multiplicity=2.
      This is allowed, as the input variable chkprim is 0.
src_file: chkprimit.F90
src_line: 106
...

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

 invars1m : enter jdtset=2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
  Describe the different generators (index,symrel,tnons,symafm)
  1    1  0  0  0  1  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  2    0  1  0 -1  0  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  added one more symmetry : nogen_new=           3
  added one more symmetry : nogen_new=           4

 symlatt : the Bravais lattice is tP (primitive tetragonal)

--- !COMMENT
message: |
    According to the symmetry finder, the unit cell is
      not primitive, with multiplicity=2.
      This is allowed, as the input variable chkprim is 0.
src_file: chkprimit.F90
src_line: 106
...

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

 invars1m : enter jdtset=3
 invars1 : treat image number     1

 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
  Describe the different generators (index,symrel,tnons,symafm)
  1    1  0  0  0  1  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  2    0  1  0 -1  0  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  added one more symmetry : nogen_new=           3
  added one more symmetry : nogen_new=           4

 symlatt : the Bravais lattice is tP (primitive tetragonal)

--- !COMMENT
message: |
    According to the symmetry finder, the unit cell is
      not primitive, with multiplicity=2.
      This is allowed, as the input variable chkprim is 0.
src_file: chkprimit.F90
src_line: 106
...

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
  dtset%nelect=   168.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    3
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
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
  dtset%nelect=   168.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    3
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
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
  dtset%nelect=   168.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    3
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
npfft, npband, npspinor and npkpt:     2    2    1   14
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 14, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 14, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 14, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

--- !COMMENT
message: |
    The second and third dimension of the FFT grid: 0, 0
    were imposed to be multiple of the number of processors for the FFT: 2
src_file: getng.F90
src_line: 204
...

 For input ecut=  1.000000E+01 best grid ngfft=      30      30      48
       max ecut=  1.027849E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    30   30   48
  Augmented FFT divisions ...................    31   31   48
  FFT algorithm .............................   401
  FFT cache size ............................    16
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 getmpw: optimal value of mpw=     662
npfft, npband, npspinor and npkpt:     2    2    1   14
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 14, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 14, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 14, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  1.500000E+01 best grid ngfft=      40      40      60
       max ecut=  1.721380E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    40   40   60
  Augmented FFT divisions ...................    41   41   60
  FFT algorithm .............................   401
  FFT cache size ............................    16
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.02
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.02
 Relative gap for number of plane waves between process:     0.02
 Relative gap for number of plane waves between process:     0.02
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 getmpw: optimal value of mpw=    1217
npfft, npband, npspinor and npkpt:     2    2    1   14
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 14, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 14, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 14, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  2.000000E+01 best grid ngfft=      45      48      72
       max ecut=  2.211017E+01
 However, must be changed due to symmetry =>      48      48      72
       with max ecut=  0.247879E+02

 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   72
  Augmented FFT divisions ...................    49   49   72
  FFT algorithm .............................   401
  FFT cache size ............................    16
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 getmpw: optimal value of mpw=    1860

 DATASET    1 : the unit cell is not primitive

 getdim_nloc : deduce lmnmax  =  19, lnmax  =   7,
                      lmnmaxso=  38, lnmaxso=  12.
 For input ecut=  3.810104E+00 best grid ngfft=      20      20      30
       max ecut=  4.303449E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   30
  Augmented FFT divisions ...................    21   21   30
  FFT algorithm .............................   101
  FFT cache size ............................    16
 Relative gap for number of plane waves between process:     0.01
 getmpw: optimal value of mpw=      72
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         3 xclevel =         1
  lmnmax =         7   lnmax =         7   mband =       104  mffmem =         1
P  mgfft =        48   mkmem =         1 mpssoang=         3     mpw =       662
  mqgrid =      3001   natom =        20    nfft =     21600    nkpt =        14
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        16  n1xccc =         0  ntypat =         4  occopt =         3
 For the susceptibility and dielectric matrices, or tddft :
   mgfft =        30  nbnd_in_blk=    13    nfft =      6000     npw =        72
================================================================================
P This job should need less than                      12.458 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     29.417 Mbytes ; DEN or POT disk file :      0.167 Mbytes.
================================================================================

 Biggest array : cg(disk), with      1.0525 MBytes.
 memana : allocated an array of      1.053 Mbytes, for testing purposes.
 memana : allocated      12.458 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    2 : the unit cell is not primitive

 getdim_nloc : deduce lmnmax  =  19, lnmax  =   7,
                      lmnmaxso=  38, lnmaxso=  12.
 For input ecut=  5.323641E+00 best grid ngfft=      24      24      36
       max ecut=  6.196967E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24   36
  Augmented FFT divisions ...................    25   25   36
  FFT algorithm .............................   101
  FFT cache size ............................    16
 Relative gap for number of plane waves between process:     0.01
 getmpw: optimal value of mpw=      72
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =         3 xclevel =         1
  lmnmax =         7   lnmax =         7   mband =       104  mffmem =         1
P  mgfft =        60   mkmem =         1 mpssoang=         3     mpw =      1217
  mqgrid =      3001   natom =        20    nfft =     48000    nkpt =        14
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        16  n1xccc =         0  ntypat =         4  occopt =         3
 For the susceptibility and dielectric matrices, or tddft :
   mgfft =        36  nbnd_in_blk=    13    nfft =     10368     npw =        72
================================================================================
P This job should need less than                      20.860 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     54.078 Mbytes ; DEN or POT disk file :      0.368 Mbytes.
================================================================================

 Biggest array : cg(disk), with      1.9333 MBytes.
 memana : allocated an array of      1.933 Mbytes, for testing purposes.
 memana : allocated      20.860 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    3 : the unit cell is not primitive

 getdim_nloc : deduce lmnmax  =  19, lnmax  =   7,
                      lmnmaxso=  38, lnmaxso=  12.
 For input ecut=  6.795812E+00 best grid ngfft=      27      30      40
       max ecut=  7.650576E+00
 However, must be changed due to symmetry =>      30      30      40
       with max ecut=  0.765058E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    30   30   40
  Augmented FFT divisions ...................    31   31   40
  FFT algorithm .............................   101
  FFT cache size ............................    16
 Relative gap for number of plane waves between process:     0.01
 getmpw: optimal value of mpw=      72
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =         3 xclevel =         1
  lmnmax =         7   lnmax =         7   mband =       104  mffmem =         1
P  mgfft =        72   mkmem =         1 mpssoang=         3     mpw =      1860
  mqgrid =      3001   natom =        20    nfft =     82944    nkpt =        14
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        16  n1xccc =         0  ntypat =         4  occopt =         3
 For the susceptibility and dielectric matrices, or tddft :
   mgfft =        40  nbnd_in_blk=    13    nfft =     18000     npw =        72
================================================================================
P This job should need less than                      33.437 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     82.648 Mbytes ; DEN or POT disk file :      0.635 Mbytes.
================================================================================

 Biggest array : cg(disk), with      2.9537 MBytes.
 memana : allocated an array of      2.954 Mbytes, for testing purposes.
 memana : allocated      33.437 Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    1
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (DPo_OUT.nc)

        accesswff           1
            acell      1.0393493731E+01  1.0393493731E+01  1.6062672130E+01 Bohr
              amu      8.76200000E+01  6.35460000E+01  1.92220000E+02
                       1.59994000E+01
             ecut1     1.00000000E+01 Hartree
             ecut2     1.50000000E+01 Hartree
             ecut3     2.00000000E+01 Hartree
-          fftalg         401
      fft_opt_lob           2
           getwfk          -1
           iprcch           6
           iprcel          45
             iscf           3
           jdtset        1    2    3
              kpt      1.00000000E-01  1.00000000E-01  1.25000000E-01
                       3.00000000E-01  1.00000000E-01  1.25000000E-01
                       5.00000000E-01  1.00000000E-01  1.25000000E-01
                      -3.00000000E-01  1.00000000E-01  1.25000000E-01
                       3.00000000E-01  3.00000000E-01  1.25000000E-01
                       5.00000000E-01  3.00000000E-01  1.25000000E-01
                       5.00000000E-01  5.00000000E-01  1.25000000E-01
                       1.00000000E-01  1.00000000E-01  3.75000000E-01
                       3.00000000E-01  1.00000000E-01  3.75000000E-01
                       5.00000000E-01  1.00000000E-01  3.75000000E-01
                      -3.00000000E-01  1.00000000E-01  3.75000000E-01
                       3.00000000E-01  3.00000000E-01  3.75000000E-01
                       5.00000000E-01  3.00000000E-01  3.75000000E-01
                       5.00000000E-01  5.00000000E-01  3.75000000E-01
         kptrlatt        5    0    0      0    5    0      0    0    4
          kptrlen      5.19674687E+01
P           mkmem           1
            natom          20
            nband         104
           ndtset           3
            ngfft1         30      30      48
            ngfft2         40      40      60
            ngfft3         48      48      72
             nkpt          14
            nline           6
-          npband           2
-           npfft           2
-           npkpt          14
            nstep        1000
             nsym          16
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
           occopt           3
        optforces           1
           ortalg          -2
        paral_kgb           1
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
           symrel      1  0  0   0  1  0   0  0  1       0  1  0  -1  0  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       0 -1  0   1  0  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       0 -1  0   1  0  0   0  0 -1
                       1  0  0   0  1  0   0  0 -1       0  1  0  -1  0  0   0  0 -1
                       1  0  0   0  1  0   0  0  1       0  1  0  -1  0  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       0 -1  0   1  0  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       0 -1  0   1  0  0   0  0 -1
                       1  0  0   0  1  0   0  0 -1       0  1  0  -1  0  0   0  0 -1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                      -0.0000000 -0.0000000 -0.0000000    -0.0000000 -0.0000000 -0.0000000
                      -0.0000000 -0.0000000 -0.0000000    -0.0000000 -0.0000000 -0.0000000
                       0.5000000  0.5000000  0.5000000     0.5000000  0.5000000  0.5000000
                       0.5000000  0.5000000  0.5000000     0.5000000  0.5000000  0.5000000
                       0.5000000  0.5000000  0.5000000     0.5000000  0.5000000  0.5000000
                       0.5000000  0.5000000  0.5000000     0.5000000  0.5000000  0.5000000
           toldfe      5.00000000E-11 Hartree
           tsmear      1.00000000E-02 Hartree
            typat      1  2  3  4  4  1  4  4  4  1  4  1  2  3  4  4  4  4  4  4
         wfoptalg          14
              wtk        0.08000    0.08000    0.08000    0.08000    0.08000    0.08000
                         0.02000    0.08000    0.08000    0.08000    0.08000    0.08000
                         0.08000    0.02000
           xangst      0.0000000000E+00  2.7500000000E+00  2.1250000000E+00
                       0.0000000000E+00  0.0000000000E+00  4.2500000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.1000000000E+00  1.6500000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  2.0400000000E+00
                       2.7500000000E+00  0.0000000000E+00  2.1250000000E+00
                       3.8500000000E+00  1.1000000000E+00  0.0000000000E+00
                       4.4000000000E+00  3.8500000000E+00  0.0000000000E+00
                       1.6500000000E+00  4.4000000000E+00  0.0000000000E+00
                       0.0000000000E+00  2.7500000000E+00  6.3750000000E+00
                       0.0000000000E+00  0.0000000000E+00  6.4600000000E+00
                       2.7500000000E+00  0.0000000000E+00  6.3750000000E+00
                       2.7500000000E+00  2.7500000000E+00  0.0000000000E+00
                       2.7500000000E+00  2.7500000000E+00  4.2500000000E+00
                       3.8500000000E+00  4.4000000000E+00  4.2500000000E+00
                       2.7500000000E+00  2.7500000000E+00  6.2900000000E+00
                       1.1000000000E+00  3.8500000000E+00  4.2500000000E+00
                       1.6500000000E+00  1.1000000000E+00  4.2500000000E+00
                       4.4000000000E+00  1.6500000000E+00  4.2500000000E+00
                       2.7500000000E+00  2.7500000000E+00  2.2100000000E+00
            xcart      0.0000000000E+00  5.1967468654E+00  4.0156680324E+00
                       0.0000000000E+00  0.0000000000E+00  8.0313360648E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.0786987462E+00  3.1180481193E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.8550413111E+00
                       5.1967468654E+00  0.0000000000E+00  4.0156680324E+00
                       7.2754456116E+00  2.0786987462E+00  0.0000000000E+00
                       8.3147949847E+00  7.2754456116E+00  0.0000000000E+00
                       3.1180481193E+00  8.3147949847E+00  0.0000000000E+00
                       0.0000000000E+00  5.1967468654E+00  1.2047004097E+01
                       0.0000000000E+00  0.0000000000E+00  1.2207630818E+01
                       5.1967468654E+00  0.0000000000E+00  1.2047004097E+01
                       5.1967468654E+00  5.1967468654E+00  0.0000000000E+00
                       5.1967468654E+00  5.1967468654E+00  8.0313360648E+00
                       7.2754456116E+00  8.3147949847E+00  8.0313360648E+00
                       5.1967468654E+00  5.1967468654E+00  1.1886377376E+01
                       2.0786987462E+00  7.2754456116E+00  8.0313360648E+00
                       3.1180481193E+00  2.0786987462E+00  8.0313360648E+00
                       8.3147949847E+00  3.1180481193E+00  8.0313360648E+00
                       5.1967468654E+00  5.1967468654E+00  4.1762947537E+00
             xred      0.0000000000E+00  5.0000000000E-01  2.5000000000E-01
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E-01
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.0000000000E-01  3.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  2.4000000000E-01
                       5.0000000000E-01  0.0000000000E+00  2.5000000000E-01
                       7.0000000000E-01  2.0000000000E-01  0.0000000000E+00
                       8.0000000000E-01  7.0000000000E-01  0.0000000000E+00
                       3.0000000000E-01  8.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  5.0000000000E-01  7.5000000000E-01
                       0.0000000000E+00  0.0000000000E+00  7.6000000000E-01
                       5.0000000000E-01  0.0000000000E+00  7.5000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       7.0000000000E-01  8.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  7.4000000000E-01
                       2.0000000000E-01  7.0000000000E-01  5.0000000000E-01
                       3.0000000000E-01  2.0000000000E-01  5.0000000000E-01
                       8.0000000000E-01  3.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  2.6000000000E-01
            znucl       38.00000   29.00000   77.00000    8.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.

 chkinp: Checking input parameters for consistency, jdtset=   3.
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
-   nproc =   56


 getdim_nloc : deduce lmnmax  =  19, lnmax  =   7,
                      lmnmaxso=  38, lnmaxso=  12.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  1.7351655E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30  48
         ecut(hartree)=     10.000   => boxcut(ratio)=   2.02766
 Relative gap for number of plane waves between process:     0.00
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is 38sr.10.hgh
- pspatm: opening atomic psp file    38sr.10.hgh
- Hartwigsen-Goedecker-Hutter psp for Sr,  from PRB58, 3641 (1998)
- 38.00000  10.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.4800000
 cc1 =   5.5714550; cc2 =  -1.0799630; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.2754410; h11s=   9.9951350; h22s=   9.3366790; h33s=   0.0000000
 rrp =   0.3022430; h11p=   3.1691260; h22p=   4.0492310; h33p=   0.0000000
                    k11p=  -0.5762650; k22p=   0.9900620; k33p=   0.0000000
 rrd =   0.5020450; h11d=   0.4387280; h22d=   0.0000000; h33d=   0.0000000
                    k11d=   0.0089910; k22d=   0.0000000; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   18.53753599
         --- l  ekb(1:nproj) -->
             0    0.447053    0.985014
             1    0.032946    0.096133
             2    0.050010
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 29cu.11.hgh
- pspatm: opening atomic psp file    29cu.11.hgh
- Hartwigsen-Goedecker-Hutter psp for Cu,  from PRB58, 3641 (1998)
- 29.00000  11.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.5300000
 cc1 =   0.0000000; cc2 =   0.0000000; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.4237340; h11s=   3.8880500; h22s=   3.2765840; h33s=   2.2900910
 rrp =   0.5721770; h11p=   1.7512720; h22p=   0.3749430; h33p=   0.0000000
                    k11p=  -0.0240670; k22p=   0.0764810; k33p=   0.0000000
 rrd =   0.2661430; h11d= -12.6769570; h22d=   0.0000000; h33d=   0.0000000
                    k11d=   0.0104890; k22d=   0.0000000; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   19.41441428
         --- l  ekb(1:nproj) -->
             0    0.329015    0.743109    1.477839
             1    0.155196    0.769277
             2   -0.017001
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is 77ir.17.hgh
- pspatm: opening atomic psp file    77ir.17.hgh
- Hartwigsen-Goedecker-Hutter psp for Ir,  from PRB58, 3641 (1998)
- 77.00000  17.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.5100000
 cc1 =   4.9045090; cc2 =   1.3137860; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.4044690; h11s=   3.2432780; h22s=  -7.3155090; h33s=   2.9569780
 rrp =   0.4114260; h11p=  -0.3805740; h22p=  -3.5044030; h33p=   0.0000000
                    k11p=   0.9301210; k22p=  -0.3798650; k33p=  -0.2627160
 rrd =   0.3764280; h11d=   0.7543150; h22d=  -5.8755800; h33d=   0.0000000
                    k11d=   0.2195170; k22d=  -0.1121450; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   46.26315916
         --- l  ekb(1:nproj) -->
             0   -1.964398    0.756198    0.946602
             1   -0.342239    0.017539
             2   -0.102777    0.025006
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   4  psp file is 8o.6.hgh
- pspatm: opening atomic psp file    8o.6.hgh
- Hartwigsen-Goedecker-Hutter psp for O,  from PRB58, 3641 (1998)
-  8.00000   6.00000     10605                znucl, zion, pspdat
    3    1    1    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2476210
 cc1 = -16.5803180; cc2 =   2.3957010; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.2217860; h11s=  18.2669170; h22s=   0.0000000; h33s=   0.0000000
 rrp =   0.2568290; h11p=   0.0000000; h22p=   0.0000000; h33p=   0.0000000
                    k11p=   0.0044760; k22p=   0.0000000; k33p=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    0.06537478
         --- l  ekb(1:nproj) -->
             0    0.706436
 pspatm: atomic psp has been read  and splines computed

   3.46566844E+04                                ecore*ucvol(ha*bohr**3)
   1  6  1  6 10 12 10 12 12 10 12 10  6  1  6  1
   2  2  2  2  2  2  2  2 13 13 13 13 13 13 13 13
   3  3  3  3  3  3  3  3 14 14 14 14 14 14 14 14
   4  9  8  7  8  7  4  9 15 19 18 17 18 17 15 19
   5  5  5  5 11 11 11 11 16 16 16 16 20 20 20 20
   6  1  6  1 12 10 12 10 10 12 10 12  1  6  1  6
   7  4  9  8  9  8  7  4 17 15 19 18 19 18 17 15
   8  7  4  9  4  9  8  7 18 17 15 19 15 19 18 17
   9  8  7  4  7  4  9  8 19 18 17 15 17 15 19 18
  10 12 10 12  1  6  1  6  6  1  6  1 12 10 12 10
  11 11 11 11  5  5  5  5 20 20 20 20 16 16 16 16
  12 10 12 10  6  1  6  1  1  6  1  6 10 12 10 12
  13 13 13 13 13 13 13 13  2  2  2  2  2  2  2  2
  14 14 14 14 14 14 14 14  3  3  3  3  3  3  3  3
  15 19 18 17 18 17 15 19  4  9  8  7  8  7  4  9
  16 16 16 16 20 20 20 20  5  5  5  5 11 11 11 11
  17 15 19 18 19 18 17 15  7  4  9  8  9  8  7  4
  18 17 15 19 15 19 18 17  8  7  4  9  4  9  8  7
  19 18 17 15 17 15 19 18  9  8  7  4  7  4  9  8
  20 20 20 20 16 16 16 16 11 11 11 11  5  5  5  5
 wfconv:   104 bands initialized randomly with npw=   662, for ikpt=     1

_setup2: Arith. and geom. avg. npw (full set) are     656.420     656.416
 initro : for itypat=  1, take decay length=      0.8500,
 initro : indeed, coreel=     28.0000, nval= 10 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      0.6500,
 initro : indeed, coreel=     18.0000, nval= 11 and densty=  0.0000E+00.
 initro : for itypat=  3, take decay length=      0.8000,
 initro : indeed, coreel=     60.0000, nval= 17 and densty=  0.0000E+00.
 initro : for itypat=  4, take decay length=      0.5000,
 initro : indeed, coreel=      2.0000, nval=  6 and densty=  0.0000E+00.

================================================================================
 For input ecut=  3.810104E+00 best grid ngfft=      20      20      30
       max ecut=  4.303449E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   30
  Augmented FFT divisions ...................    21   21   30
  FFT algorithm .............................   100
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     287
   1  6  1  6 10 12 10 12 12 10 12 10  6  1  6  1
   2  2  2  2  2  2  2  2 13 13 13 13 13 13 13 13
   3  3  3  3  3  3  3  3 14 14 14 14 14 14 14 14
   4  9  8  7  8  7  4  9 15 19 18 17 18 17 15 19
   5  5  5  5 11 11 11 11 16 16 16 16 20 20 20 20
   6  1  6  1 12 10 12 10 10 12 10 12  1  6  1  6
   7  4  9  8  9  8  7  4 17 15 19 18 19 18 17 15
   8  7  4  9  4  9  8  7 18 17 15 19 15 19 18 17
   9  8  7  4  7  4  9  8 19 18 17 15 17 15 19 18
  10 12 10 12  1  6  1  6  6  1  6  1 12 10 12 10
  11 11 11 11  5  5  5  5 20 20 20 20 16 16 16 16
  12 10 12 10  6  1  6  1  1  6  1  6 10 12 10 12
  13 13 13 13 13 13 13 13  2  2  2  2  2  2  2  2
  14 14 14 14 14 14 14 14  3  3  3  3  3  3  3  3
  15 19 18 17 18 17 15 19  4  9  8  7  8  7  4  9
  16 16 16 16 20 20 20 20  5  5  5  5 11 11 11 11
  17 15 19 18 19 18 17 15  7  4  9  8  9  8  7  4
  18 17 15 19 15 19 18 17  8  7  4  9  4  9  8  7
  19 18 17 15 17 15 19 18  9  8  7  4  7  4  9  8
  20 20 20 20 16 16 16 16 11 11 11 11  5  5  5  5

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30  48
         ecut(hartree)=     10.000   => boxcut(ratio)=   2.02766

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.474646 , with nelect=    168.000000
  Number of bissection calls =  51
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999
 1.999 1.998 1.997 1.995 1.995 1.990 1.981 1.977 1.963 1.952 1.917 1.890
 1.016 0.862 0.690 0.544 0.126 0.083 0.040 0.020 0.017 0.011 0.007 0.005
 0.002 0.001 0.001 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.994 1.993 1.987 1.946 1.918 1.746 1.681
 0.549 0.311 0.300 0.108 0.099 0.046 0.033 0.019 0.006 0.003 0.002 0.002
 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.996 1.988 1.978 1.949 1.945 0.878 0.821
 0.352 0.307 0.229 0.197 0.186 0.129 0.042 0.038 0.023 0.017 0.002 0.001
 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.999 1.999 1.998 1.991 1.988 1.983 1.970 1.961 1.900 1.458
 0.496 0.348 0.311 0.164 0.082 0.059 0.038 0.018 0.004 0.003 0.003 0.001
 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.998 1.997 1.995 1.987 1.987 1.971 1.826 0.688
 0.563 0.539 0.427 0.089 0.038 0.017 0.015 0.003 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 1.999 1.998 1.995 1.995 1.980 1.975 0.785 0.770
 0.481 0.423 0.221 0.176 0.036 0.033 0.017 0.015 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 1.999 1.999 1.993 1.993 1.970 1.970 0.952 0.942
 0.504 0.495 0.117 0.114 0.032 0.031 0.003 0.002 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 1.999 1.998 1.998 1.998 1.995 1.993 1.989 1.984 1.965 1.941 1.799 1.777
 0.895 0.402 0.337 0.177 0.108 0.101 0.087 0.051 0.034 0.020 0.005 0.004
 0.003 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.999 1.998 1.996 1.995 1.991 1.958 1.954 1.947 1.639 1.175
 0.826 0.311 0.219 0.121 0.095 0.080 0.049 0.032 0.024 0.010 0.005 0.002
 0.001 0.001 0.001 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.991 1.982 1.973 1.960 1.899 0.766 0.675
 0.493 0.438 0.398 0.351 0.107 0.077 0.053 0.047 0.035 0.031 0.022 0.010
 0.004 0.003 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.999 1.999 1.998 1.996 1.989 1.982 1.954 1.905 1.597 1.381
 0.851 0.266 0.258 0.147 0.137 0.065 0.058 0.029 0.014 0.008 0.007 0.002
 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 1.999 1.999 1.998 1.996 1.993 1.954 1.946 1.130 1.037
 0.708 0.122 0.090 0.028 0.024 0.022 0.007 0.004 0.003 0.002 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 1.999 1.999 1.997 1.997 1.969 1.960 0.369 0.364
 0.249 0.212 0.054 0.037 0.028 0.019 0.009 0.007 0.002 0.002 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 1.999 1.999 1.998 1.998 1.983 1.983 0.195 0.193
 0.052 0.051 0.026 0.025 0.020 0.020 0.004 0.003 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.5917E+00  at reduced coord.    0.0000    0.0333    0.4583
,     Minimum=    2.7820E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.5917E+00  at reduced coord.    0.0000    0.0333    0.4583
,     Minimum=    2.7820E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT  1  -525.14742615553    -5.251E+02 2.695E-03 5.098E+04 1.691E-01 1.691E-01
 scprqt: <Vxc>= -4.5187018E-01 hartree

 dielmt : 15 largest eigenvalues of the hermitian RPA dielectric matrix
  1-5  : 1.48529E+01 1.19984E+01 7.51116E+00 6.76421E+00 6.51112E+00
  6-10 : 6.51112E+00 6.31274E+00 5.97301E+00 5.97301E+00 5.91363E+00
  11-15: 5.29037E+00 5.28556E+00 5.20790E+00 4.82889E+00 4.64212E+00

 dielmt : 5 smallest eigenvalues of the hermitian RPA dielectric matrix
  1-5  : 1.00000E+00 1.20462E+00 1.21354E+00 1.21505E+00 1.21505E+00

Simple mixing update:
  residual square of the potential :   2758.4780248519965

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.278638 , with nelect=    168.000000
  Number of bissection calls =  51
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.999
 1.986 1.951 1.884 1.837 1.731 1.667 1.529 1.491 1.455 1.384 1.289 1.015
 1.003 0.811 0.797 0.482 0.243 0.213 0.172 0.149 0.146 0.100 0.046 0.028
 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.998 1.998
 1.981 1.953 1.934 1.885 1.866 1.825 1.689 1.641 1.500 1.395 1.332 1.311
 0.869 0.789 0.594 0.373 0.255 0.168 0.132 0.116 0.078 0.057 0.039 0.032
 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.998 1.997
 1.975 1.972 1.950 1.949 1.862 1.855 1.719 1.718 1.429 1.412 1.177 1.134
 0.928 0.678 0.467 0.448 0.224 0.182 0.099 0.075 0.069 0.061 0.029 0.024
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.999 1.998
 1.970 1.942 1.909 1.893 1.867 1.825 1.693 1.646 1.472 1.405 1.321 1.153
 0.851 0.784 0.580 0.428 0.240 0.196 0.161 0.143 0.116 0.052 0.041 0.037
 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999
 1.986 1.976 1.957 1.957 1.904 1.843 1.840 1.784 1.668 1.611 1.225 1.165
 0.920 0.810 0.586 0.568 0.551 0.293 0.264 0.182 0.058 0.045 0.029 0.027
 0.002 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999
 1.992 1.992 1.979 1.972 1.911 1.906 1.848 1.811 1.763 1.645 1.273 1.174
 0.868 0.827 0.698 0.657 0.576 0.461 0.299 0.292 0.049 0.035 0.032 0.028
 0.007 0.007 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 1.998 1.998 1.986 1.985 1.922 1.918 1.866 1.866 1.853 1.846 1.450 1.396
 1.107 0.928 0.893 0.714 0.640 0.522 0.424 0.326 0.046 0.045 0.024 0.018
 0.015 0.015 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.999
 1.971 1.938 1.902 1.846 1.720 1.657 1.630 1.599 1.525 1.342 0.834 0.716
 0.704 0.551 0.372 0.313 0.208 0.191 0.132 0.126 0.103 0.097 0.062 0.045
 0.002 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.998 1.997
 1.981 1.970 1.935 1.918 1.806 1.747 1.687 1.643 1.532 1.499 1.156 0.962
 0.821 0.733 0.369 0.359 0.291 0.134 0.098 0.093 0.083 0.061 0.042 0.034
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.998 1.998 1.997 1.997
 1.984 1.983 1.959 1.957 1.815 1.791 1.713 1.694 1.635 1.556 1.050 0.969
 0.774 0.608 0.439 0.378 0.228 0.147 0.098 0.091 0.071 0.062 0.030 0.029
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.998 1.998
 1.977 1.961 1.925 1.913 1.760 1.721 1.711 1.684 1.568 1.527 1.374 1.116
 0.653 0.516 0.384 0.325 0.278 0.181 0.151 0.088 0.076 0.057 0.053 0.047
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.998 1.998
 1.990 1.988 1.949 1.931 1.893 1.829 1.803 1.782 1.704 1.686 1.463 1.382
 0.733 0.669 0.553 0.323 0.218 0.210 0.195 0.081 0.076 0.058 0.036 0.030
 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.999 1.999
 1.993 1.992 1.965 1.955 1.870 1.868 1.843 1.827 1.825 1.810 1.580 1.563
 0.714 0.679 0.573 0.482 0.269 0.244 0.123 0.115 0.071 0.070 0.054 0.034
 0.002 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 1.989 1.989 1.977 1.973 1.942 1.941 1.872 1.870 1.868 1.862 1.687 1.667
 0.806 0.781 0.750 0.725 0.167 0.156 0.128 0.118 0.051 0.049 0.039 0.037
 0.005 0.005 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.3097E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    2.5662E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.3097E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    2.5662E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT  2  -531.47796515846    -6.331E+00 2.839E-03 2.729E+04 2.474E-01 9.963E-02
 scprqt: <Vxc>= -4.2321333E-01 hartree

Anderson update:
  residual square of the potential:    3680.8156369541448
  mixing of old trial potential    :  0.54277389124657693
  predicted best residual square on the line:    504.53358687123693

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.425317 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.276
 0.505 0.009 0.006 0.004 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.794
 0.310 0.044 0.006 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.995 1.986
 0.132 0.091 0.002 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.798
 0.324 0.037 0.004 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.995 1.045
 0.074 0.024 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.826 1.750
 0.059 0.056 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 0.711 0.456
 0.046 0.034 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.995
 0.088 0.009 0.003 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.994
 0.371 0.207 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.998
 0.503 0.360 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.994
 0.188 0.138 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.994 1.945
 0.089 0.069 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.899 1.890
 0.137 0.119 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.139 0.900
 0.056 0.019 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.3098E+00  at reduced coord.    0.4333    0.5333    0.0000
,     Minimum=    3.3168E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.3098E+00  at reduced coord.    0.4333    0.5333    0.0000
,     Minimum=    3.3168E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT  3  -557.75038066164    -2.627E+01 9.205E-03 1.656E+04 2.117E-01 1.121E-01
 scprqt: <Vxc>= -4.3542139E-01 hartree

Anderson update:
  residual square of the potential:    893.20734839184115
  mixing of old trial potential    :  0.31429625347944984
  predicted best residual square on the line:    151.79554784579074

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.359149 , with nelect=    168.000000
  Number of bissection calls =  51
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.999 1.998 1.991 1.986 1.983 1.970 1.960 0.915
 0.803 0.072 0.045 0.040 0.034 0.026 0.019 0.007 0.006 0.002 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.996 1.991 1.928 1.927 1.888 1.179
 0.963 0.283 0.115 0.098 0.072 0.064 0.029 0.012 0.005 0.003 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.999 1.999 1.999 1.998 1.993 1.993 1.954 1.880 1.707 1.574
 0.700 0.620 0.167 0.097 0.092 0.062 0.032 0.029 0.004 0.003 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.999 1.999 1.999 1.998 1.995 1.990 1.975 1.944 1.912 0.976
 0.863 0.142 0.105 0.067 0.063 0.055 0.024 0.020 0.005 0.004 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.999 1.999 1.998 1.997 1.991 1.991 1.952 1.893 1.528 0.631
 0.607 0.175 0.094 0.071 0.063 0.034 0.010 0.004 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.995 1.990 1.989 1.920 1.777 0.696 0.577
 0.474 0.470 0.076 0.069 0.048 0.045 0.007 0.006 0.002 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.995 1.995 1.993 1.992 1.725 1.721 0.323 0.318
 0.079 0.076 0.061 0.060 0.041 0.037 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.999 1.998 1.996 1.995 1.994 1.975 1.952 1.944
 0.115 0.067 0.047 0.046 0.029 0.009 0.007 0.002 0.002 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.999 1.997 1.997 1.995 1.982 1.970 1.889 1.842
 0.851 0.478 0.160 0.156 0.085 0.061 0.010 0.008 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 1.999 1.999 1.999 1.997 1.996 1.967 1.946 1.858 1.841
 0.668 0.601 0.327 0.322 0.183 0.165 0.026 0.024 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 1.999 1.999 1.998 1.998 1.995 1.982 1.956 1.937 1.905
 0.491 0.258 0.115 0.097 0.086 0.083 0.028 0.023 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 1.999 1.999 1.996 1.993 1.988 1.981 1.962 1.525 1.442
 0.443 0.329 0.132 0.115 0.057 0.033 0.002 0.001 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 1.999 1.998 1.992 1.989 1.973 1.951 0.678 0.657
 0.508 0.463 0.131 0.130 0.089 0.071 0.003 0.002 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 1.997 1.996 1.996 1.996 1.921 1.919 0.228 0.225
 0.082 0.082 0.031 0.030 0.023 0.023 0.001 0.001 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.2365E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    2.4217E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.2365E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    2.4217E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT  4  -571.42790809429    -1.368E+01 6.864E-03 2.162E+03 7.734E-02 7.346E-02
 scprqt: <Vxc>= -4.3825812E-01 hartree

Anderson update:
  residual square of the potential:    76.778000452176542
  mixing of old trial potential    : -0.30163358606319990
  predicted best residual square on the line:    30.446954763244136

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 newocc : new Fermi energy is       0.349300 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.999 1.999 1.994 1.990 1.955 1.918 1.910 1.438 0.995 0.855
 0.803 0.248 0.233 0.191 0.140 0.087 0.070 0.034 0.026 0.018 0.008 0.004
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.995 1.992 1.982 1.937 1.890 1.868 1.852 1.693 1.594 1.499
 1.367 0.945 0.387 0.191 0.150 0.083 0.048 0.045 0.029 0.023 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 1.999 1.999 1.998 1.997 1.940 1.915 1.914 1.797 1.717 1.701 1.418 1.332
 1.220 0.999 0.353 0.286 0.221 0.198 0.128 0.122 0.022 0.022 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.998 1.996 1.987 1.953 1.920 1.855 1.839 1.504 1.407 1.042
 0.902 0.403 0.312 0.299 0.197 0.162 0.105 0.058 0.030 0.023 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.996 1.987 1.974 1.919 1.908 1.602 1.526 1.078 0.978 0.831
 0.761 0.562 0.305 0.267 0.108 0.090 0.066 0.032 0.026 0.014 0.003 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 1.999 1.999 1.994 1.992 1.969 1.941 1.828 1.702 1.459 1.302 0.766 0.697
 0.348 0.260 0.215 0.180 0.128 0.109 0.073 0.060 0.032 0.021 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.909 1.908 1.337 1.334 1.052 1.002 0.735 0.728
 0.237 0.235 0.109 0.107 0.053 0.053 0.042 0.042 0.021 0.021 0.004 0.004
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.999 1.999 1.997 1.983 1.966 1.951 1.908 1.851 1.509 1.290
 0.345 0.308 0.168 0.138 0.097 0.062 0.050 0.038 0.007 0.007 0.002 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.996 1.988 1.983 1.981 1.953 1.936 1.882 1.790 1.678 1.646
 1.506 1.263 0.459 0.268 0.184 0.132 0.041 0.034 0.002 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.997 1.993 1.992 1.889 1.841 1.759 1.750 1.514 1.494
 1.173 1.040 0.687 0.577 0.502 0.382 0.151 0.130 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.995 1.987 1.948 1.896 1.892 1.843 1.645 1.319
 0.793 0.708 0.374 0.296 0.216 0.145 0.134 0.100 0.002 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.989 1.980 1.974 1.945 1.798 1.646 1.416 1.133 1.075
 0.775 0.623 0.605 0.546 0.117 0.097 0.034 0.024 0.006 0.004 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.994 1.994 1.953 1.943 1.872 1.851 1.619 1.549 1.419 1.351
 0.364 0.359 0.307 0.275 0.153 0.127 0.058 0.057 0.002 0.002 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.995 1.995 1.968 1.966 1.387 1.386 1.282 1.262 0.573 0.570
 0.211 0.210 0.133 0.133 0.033 0.033 0.021 0.021 0.006 0.005 0.004 0.004
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1141E+00  at reduced coord.    0.5667    0.5000    0.0000
,     Minimum=    2.1944E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1141E+00  at reduced coord.    0.5667    0.5000    0.0000
,     Minimum=    2.1944E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT  5  -571.31998593151     1.079E-01 1.708E-03 2.357E+03 1.004E-01 8.399E-02
 scprqt: <Vxc>= -4.3844954E-01 hartree

 dielmt : 15 largest eigenvalues of the hermitian RPA dielectric matrix
  1-5  : 1.87571E+01 1.16863E+01 1.08947E+01 8.81418E+00 7.25370E+00
  6-10 : 7.25370E+00 7.02812E+00 6.82255E+00 6.82255E+00 6.14425E+00
  11-15: 6.07810E+00 6.02793E+00 5.81409E+00 5.31522E+00 4.50410E+00

 dielmt : 5 smallest eigenvalues of the hermitian RPA dielectric matrix
  1-5  :-1.49637E+00 1.00000E+00 1.12362E+00 1.12728E+00 1.13049E+00

Anderson update:
  residual square of the potential:    139.81456098917076
  mixing of old trial potential    :  0.61229282419980813
  predicted best residual square on the line:    34.587159029549127

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 newocc : new Fermi energy is       0.305007 , with nelect=    168.000000
  Number of bissection calls =  51
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.998 1.998 1.994
 1.994 1.992 1.989 1.985 1.977 1.975 1.955 1.852 1.819 1.655 1.050 0.925
 0.868 0.271 0.221 0.220 0.179 0.097 0.096 0.058 0.051 0.040 0.018 0.008
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.997 1.997 1.996
 1.996 1.990 1.983 1.979 1.961 1.881 1.830 1.828 1.746 1.592 1.515 1.432
 1.249 0.985 0.358 0.275 0.274 0.129 0.095 0.066 0.057 0.037 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.999 1.998 1.996
 1.995 1.993 1.973 1.966 1.935 1.927 1.851 1.811 1.687 1.667 1.440 1.373
 0.935 0.762 0.472 0.458 0.235 0.229 0.189 0.153 0.050 0.048 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.998 1.997 1.997
 1.996 1.991 1.985 1.981 1.959 1.931 1.883 1.807 1.755 1.590 1.542 0.988
 0.786 0.474 0.298 0.278 0.201 0.193 0.168 0.106 0.059 0.053 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.999 1.998
 1.994 1.990 1.989 1.972 1.961 1.921 1.903 1.730 1.507 1.039 1.013 0.776
 0.557 0.464 0.355 0.352 0.175 0.133 0.104 0.046 0.033 0.020 0.007 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.999 1.999
 1.994 1.993 1.990 1.988 1.924 1.911 1.891 1.863 1.407 1.374 0.758 0.671
 0.355 0.289 0.264 0.233 0.124 0.112 0.090 0.074 0.049 0.031 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.999 1.999
 1.997 1.997 1.989 1.989 1.914 1.914 1.621 1.621 1.054 1.052 0.888 0.887
 0.240 0.239 0.188 0.188 0.067 0.067 0.043 0.043 0.018 0.018 0.008 0.008
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.998 1.997 1.996
 1.995 1.991 1.983 1.981 1.975 1.968 1.954 1.950 1.802 1.768 1.242 1.071
 0.352 0.332 0.211 0.149 0.136 0.075 0.063 0.062 0.018 0.017 0.006 0.003
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.998 1.998 1.996 1.995
 1.995 1.989 1.978 1.975 1.965 1.956 1.905 1.894 1.848 1.679 1.541 1.518
 1.508 1.195 0.517 0.379 0.266 0.191 0.056 0.048 0.005 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.996 1.995
 1.990 1.989 1.985 1.982 1.955 1.952 1.897 1.874 1.822 1.745 1.551 1.489
 1.020 0.899 0.767 0.648 0.561 0.494 0.158 0.138 0.002 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.997 1.997
 1.994 1.989 1.981 1.981 1.963 1.959 1.933 1.904 1.869 1.731 1.639 1.214
 0.714 0.706 0.345 0.291 0.260 0.230 0.171 0.142 0.005 0.003 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.996 1.996
 1.993 1.988 1.983 1.972 1.972 1.940 1.865 1.839 1.700 1.440 1.273 1.113
 0.750 0.731 0.443 0.440 0.156 0.155 0.033 0.024 0.013 0.008 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.997 1.997
 1.994 1.994 1.979 1.977 1.946 1.943 1.878 1.871 1.695 1.693 1.396 1.333
 0.414 0.405 0.363 0.361 0.118 0.108 0.053 0.052 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.998 1.998
 1.993 1.993 1.991 1.991 1.908 1.908 1.701 1.701 1.224 1.224 0.833 0.833
 0.283 0.283 0.145 0.145 0.029 0.029 0.019 0.019 0.010 0.010 0.007 0.007
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1419E+00  at reduced coord.    0.5667    0.5000    0.0000
,     Minimum=    2.0817E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1419E+00  at reduced coord.    0.5667    0.5000    0.0000
,     Minimum=    2.0817E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT  6  -569.03246168095     2.288E+00 1.450E-03 4.019E+03 3.459E-02 4.940E-02
 scprqt: <Vxc>= -4.3481592E-01 hartree

Anderson update:
  residual square of the potential:    723.51266158833187
  mixing of old trial potential    :   1.6138724817255550
  predicted best residual square on the line:    41.077739888338158

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 newocc : new Fermi energy is       0.392408 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.986 1.978 1.966 1.933 1.927 0.838
 0.743 0.095 0.075 0.065 0.046 0.034 0.030 0.021 0.007 0.005 0.004 0.003
 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 1.999 1.999 1.996 1.994 1.968 1.933 1.899 1.885 1.265
 0.928 0.452 0.129 0.104 0.075 0.068 0.033 0.026 0.007 0.004 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 1.999 1.998 1.990 1.981 1.944 1.822 1.626 1.610
 0.645 0.619 0.214 0.123 0.105 0.090 0.082 0.058 0.005 0.004 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 1.998 1.994 1.976 1.958 1.910 1.906 0.908
 0.868 0.195 0.130 0.087 0.071 0.069 0.052 0.051 0.010 0.004 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 1.999 1.997 1.996 1.987 1.983 1.913 1.859 1.518 0.677
 0.526 0.211 0.114 0.085 0.058 0.035 0.025 0.006 0.004 0.003 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 1.994 1.987 1.978 1.966 1.839 1.464 0.631 0.463
 0.453 0.368 0.078 0.066 0.052 0.047 0.014 0.014 0.005 0.004 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 1.990 1.989 1.981 1.981 1.610 1.605 0.321 0.319
 0.073 0.073 0.055 0.055 0.046 0.046 0.005 0.005 0.001 0.001 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 1.999 1.999 1.996 1.994 1.992 1.974 1.890 1.853
 0.160 0.109 0.056 0.055 0.041 0.037 0.016 0.008 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 1.999 1.999 1.998 1.998 1.992 1.984 1.955 1.878 1.808
 1.104 0.699 0.194 0.189 0.098 0.070 0.022 0.021 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.995 1.994 1.966 1.931 1.755 1.692
 0.725 0.603 0.314 0.300 0.221 0.199 0.081 0.070 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 1.998 1.998 1.993 1.980 1.925 1.916 1.862
 0.514 0.300 0.158 0.145 0.131 0.106 0.067 0.063 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.999 1.996 1.992 1.989 1.960 1.959 1.546 1.467
 0.467 0.373 0.160 0.152 0.059 0.036 0.005 0.003 0.003 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 1.999 1.998 1.997 1.985 1.983 1.970 1.929 0.689 0.615
 0.457 0.337 0.135 0.126 0.096 0.074 0.010 0.007 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 1.996 1.996 1.994 1.994 1.910 1.910 0.265 0.265
 0.084 0.084 0.036 0.036 0.010 0.010 0.002 0.002 0.001 0.001 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1963E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    2.2334E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1963E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    2.2334E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT  7  -571.81162920102    -2.779E+00 3.644E-03 1.881E+03 1.007E-01 9.277E-02
 scprqt: <Vxc>= -4.4086994E-01 hartree

Anderson update:
  residual square of the potential:    55.920003821514840
  mixing of old trial potential    :  0.19907456680901942
  predicted best residual square on the line:    11.960354394733248

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 condition number of the Gram matrix=   3787362.3059808137     
 Lobpcgwf: restart performed
 newocc : new Fermi energy is       0.352403 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.999 1.999 1.996 1.992 1.957 1.902 1.860 1.421 1.106 1.053
 0.764 0.327 0.213 0.146 0.145 0.050 0.036 0.032 0.026 0.021 0.005 0.003
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.997 1.994 1.986 1.929 1.881 1.788 1.778 1.712 1.613 1.360
 1.108 0.912 0.658 0.271 0.187 0.103 0.052 0.035 0.017 0.017 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 1.999 1.999 1.998 1.997 1.945 1.935 1.888 1.784 1.624 1.620 1.453 1.266
 0.981 0.679 0.518 0.452 0.344 0.249 0.161 0.131 0.016 0.015 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.998 1.996 1.990 1.941 1.929 1.806 1.784 1.629 1.501 0.848
 0.824 0.621 0.289 0.210 0.194 0.159 0.126 0.071 0.022 0.016 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.998 1.985 1.975 1.939 1.911 1.523 1.363 1.186 1.002 0.821
 0.706 0.701 0.420 0.293 0.125 0.083 0.054 0.017 0.017 0.007 0.002 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 1.999 1.999 1.996 1.995 1.972 1.949 1.735 1.572 1.378 1.319 0.831 0.726
 0.410 0.392 0.207 0.169 0.119 0.101 0.045 0.042 0.018 0.014 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.919 1.919 1.291 1.289 1.055 1.053 0.732 0.730
 0.264 0.263 0.117 0.117 0.055 0.055 0.020 0.020 0.007 0.007 0.002 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.982 1.977 1.967 1.886 1.815 1.620 1.502
 0.261 0.241 0.177 0.100 0.085 0.050 0.035 0.028 0.006 0.005 0.002 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.989 1.985 1.984 1.970 1.914 1.843 1.717 1.709 1.504
 1.418 1.174 0.752 0.390 0.222 0.159 0.031 0.028 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.995 1.994 1.863 1.851 1.657 1.652 1.362 1.321
 1.209 1.004 0.887 0.741 0.661 0.546 0.167 0.134 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.996 1.988 1.952 1.885 1.845 1.819 1.624 1.482
 0.778 0.723 0.365 0.271 0.185 0.154 0.152 0.116 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.991 1.983 1.970 1.955 1.800 1.468 1.457 1.255 1.087
 0.731 0.721 0.644 0.544 0.127 0.111 0.014 0.009 0.005 0.003 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.995 1.995 1.968 1.951 1.823 1.809 1.666 1.571 1.289 1.265
 0.411 0.407 0.318 0.318 0.126 0.118 0.038 0.028 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.994 1.994 1.982 1.982 1.572 1.571 0.954 0.952 0.808 0.803
 0.217 0.217 0.133 0.133 0.012 0.012 0.007 0.007 0.006 0.006 0.002 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1306E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    2.1420E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1306E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    2.1420E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT  8  -572.96071609153    -1.149E+00 1.221E-02 7.207E+02 1.123E-01 6.105E-02
 scprqt: <Vxc>= -4.3903937E-01 hartree

Anderson update:
  residual square of the potential:    66.577416245390452
  mixing of old trial potential    :  0.52283430584421675
  predicted best residual square on the line:    2.7860188991844179

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 newocc : new Fermi energy is       0.359330 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.994 1.949 1.903 1.871 1.467 1.299 1.007
 0.663 0.284 0.179 0.130 0.119 0.041 0.034 0.025 0.021 0.014 0.004 0.003
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.997 1.995 1.989 1.947 1.859 1.813 1.788 1.774 1.560 1.388
 1.108 0.917 0.452 0.237 0.177 0.097 0.044 0.035 0.014 0.010 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.960 1.955 1.882 1.820 1.646 1.600 1.471 1.210
 1.028 0.727 0.457 0.430 0.325 0.239 0.148 0.120 0.010 0.010 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.997 1.993 1.951 1.928 1.800 1.789 1.746 1.549 0.843
 0.758 0.554 0.257 0.196 0.187 0.141 0.112 0.066 0.016 0.010 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.986 1.978 1.958 1.911 1.473 1.459 1.198 1.172 0.923
 0.732 0.634 0.350 0.231 0.105 0.077 0.043 0.014 0.010 0.005 0.002 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.997 1.996 1.972 1.947 1.731 1.570 1.365 1.307 0.984 0.907
 0.296 0.281 0.236 0.199 0.115 0.097 0.037 0.032 0.012 0.010 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.915 1.915 1.481 1.480 0.965 0.964 0.695 0.694
 0.215 0.215 0.106 0.106 0.056 0.056 0.014 0.014 0.005 0.005 0.002 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.996 1.982 1.981 1.973 1.891 1.810 1.716 1.611
 0.228 0.217 0.151 0.088 0.076 0.047 0.028 0.021 0.005 0.005 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.991 1.988 1.987 1.976 1.921 1.863 1.786 1.713 1.452
 1.420 1.137 0.670 0.374 0.194 0.152 0.031 0.028 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.995 1.995 1.881 1.874 1.712 1.687 1.411 1.278
 1.088 1.040 0.857 0.703 0.627 0.531 0.183 0.144 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.996 1.988 1.963 1.897 1.865 1.822 1.634 1.624
 0.696 0.695 0.345 0.257 0.167 0.158 0.140 0.113 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.992 1.986 1.975 1.961 1.829 1.589 1.558 1.243 0.979
 0.873 0.745 0.559 0.467 0.108 0.103 0.010 0.007 0.004 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.995 1.995 1.978 1.962 1.844 1.827 1.733 1.663 1.207 1.175
 0.379 0.372 0.294 0.292 0.145 0.142 0.032 0.022 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.987 1.987 1.708 1.708 1.055 1.054 0.724 0.723
 0.187 0.187 0.112 0.112 0.008 0.008 0.005 0.005 0.005 0.005 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1468E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9812E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1468E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9812E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT  9  -573.66629715831    -7.056E-01 4.743E-04 1.013E+02 3.806E-02 2.765E-02
 scprqt: <Vxc>= -4.3982211E-01 hartree

Anderson update:
  residual square of the potential:    17.309949700072963
  mixing of old trial potential    : -0.96585883704122144
  predicted best residual square on the line:    1.6328615413666867

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 newocc : new Fermi energy is       0.356621 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.996 1.993 1.952 1.896 1.863 1.402 1.198 1.034
 0.685 0.315 0.203 0.141 0.136 0.045 0.034 0.026 0.025 0.018 0.005 0.003
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.997 1.994 1.987 1.939 1.870 1.792 1.792 1.748 1.595 1.326
 1.033 1.006 0.547 0.257 0.176 0.097 0.047 0.036 0.016 0.012 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.953 1.944 1.884 1.800 1.622 1.593 1.511 1.258
 1.017 0.716 0.473 0.454 0.334 0.250 0.154 0.128 0.012 0.012 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.991 1.941 1.932 1.802 1.800 1.672 1.523 0.839
 0.758 0.619 0.279 0.203 0.201 0.158 0.117 0.067 0.019 0.012 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.985 1.977 1.946 1.910 1.462 1.332 1.278 1.059 0.874
 0.754 0.683 0.386 0.277 0.116 0.079 0.048 0.016 0.013 0.006 0.002 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.997 1.995 1.970 1.945 1.729 1.560 1.320 1.311 0.907 0.789
 0.375 0.343 0.239 0.189 0.123 0.101 0.043 0.038 0.014 0.012 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.911 1.911 1.339 1.339 1.002 1.002 0.710 0.710
 0.256 0.256 0.111 0.111 0.056 0.056 0.018 0.018 0.006 0.006 0.002 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.984 1.978 1.968 1.881 1.796 1.650 1.528
 0.251 0.232 0.168 0.096 0.082 0.048 0.032 0.025 0.005 0.005 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.990 1.987 1.987 1.971 1.917 1.856 1.744 1.721 1.480
 1.385 1.151 0.739 0.379 0.212 0.156 0.032 0.029 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.995 1.994 1.873 1.860 1.691 1.649 1.371 1.327
 1.169 1.029 0.885 0.721 0.679 0.550 0.187 0.147 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.996 1.988 1.958 1.890 1.859 1.820 1.610 1.538
 0.759 0.719 0.366 0.269 0.178 0.165 0.147 0.116 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.992 1.984 1.974 1.958 1.809 1.487 1.446 1.299 1.033
 0.831 0.738 0.631 0.516 0.122 0.107 0.013 0.008 0.005 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.995 1.995 1.971 1.957 1.823 1.822 1.685 1.605 1.229 1.200
 0.410 0.406 0.320 0.311 0.144 0.141 0.037 0.027 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.994 1.994 1.982 1.982 1.610 1.609 0.981 0.981 0.763 0.762
 0.206 0.206 0.127 0.127 0.010 0.010 0.006 0.006 0.005 0.005 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1365E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9653E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1365E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9653E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 10  -573.43203266073     2.343E-01 4.770E-05 3.252E+02 1.129E-02 3.428E-02
 scprqt: <Vxc>= -4.3957862E-01 hartree

Anderson update:
  residual square of the potential:    31.959131830864820
  mixing of old trial potential    :   3.1269606109205603
  predicted best residual square on the line:    4.6960690774041609

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 newocc : new Fermi energy is       0.347735 , with nelect=    168.000000
  Number of bissection calls =  51
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.999 1.999 1.995 1.990 1.957 1.911 1.880 1.407 1.141 1.023
 0.758 0.322 0.214 0.151 0.142 0.049 0.035 0.031 0.025 0.022 0.005 0.003
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.996 1.994 1.986 1.930 1.877 1.790 1.789 1.715 1.606 1.346
 1.081 0.912 0.610 0.265 0.184 0.100 0.052 0.037 0.018 0.016 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 1.999 1.999 1.998 1.997 1.948 1.933 1.892 1.788 1.629 1.614 1.464 1.277
 0.996 0.711 0.486 0.464 0.325 0.249 0.160 0.134 0.016 0.015 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.998 1.996 1.988 1.943 1.930 1.808 1.806 1.622 1.516 0.865
 0.805 0.610 0.288 0.208 0.205 0.158 0.122 0.069 0.022 0.016 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.997 1.986 1.978 1.938 1.920 1.498 1.345 1.231 0.979 0.835
 0.744 0.726 0.406 0.296 0.124 0.082 0.054 0.017 0.016 0.007 0.002 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 1.999 1.999 1.996 1.994 1.974 1.954 1.744 1.577 1.350 1.335 0.808 0.717
 0.410 0.385 0.233 0.185 0.127 0.105 0.046 0.042 0.017 0.014 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.997 1.929 1.929 1.263 1.262 1.042 1.042 0.753 0.753
 0.267 0.267 0.117 0.117 0.063 0.063 0.019 0.019 0.007 0.007 0.002 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.999 1.999 1.997 1.985 1.972 1.961 1.891 1.816 1.592 1.470
 0.265 0.243 0.178 0.100 0.086 0.050 0.034 0.028 0.006 0.006 0.002 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 1.997 1.989 1.986 1.985 1.966 1.915 1.852 1.719 1.715 1.494
 1.385 1.140 0.749 0.380 0.221 0.157 0.033 0.030 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.997 1.994 1.993 1.870 1.854 1.682 1.650 1.374 1.316
 1.201 0.987 0.865 0.730 0.677 0.543 0.185 0.147 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.995 1.987 1.952 1.884 1.857 1.819 1.608 1.470
 0.782 0.734 0.373 0.268 0.184 0.164 0.154 0.116 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.991 1.982 1.973 1.954 1.799 1.451 1.426 1.252 1.057
 0.798 0.716 0.682 0.542 0.128 0.110 0.014 0.009 0.005 0.003 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.995 1.995 1.967 1.953 1.831 1.820 1.664 1.576 1.269 1.232
 0.416 0.411 0.327 0.315 0.143 0.136 0.039 0.028 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.994 1.994 1.979 1.979 1.544 1.544 0.973 0.973 0.822 0.822
 0.217 0.217 0.130 0.130 0.012 0.012 0.007 0.007 0.007 0.007 0.002 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1349E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9726E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1349E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9726E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 11  -573.13326175121     2.988E-01 1.282E-04 6.109E+02 6.993E-03 4.033E-02
 scprqt: <Vxc>= -4.3878809E-01 hartree

Anderson update:
  residual square of the potential:    71.773403419153084
  mixing of old trial potential    :   2.9697064152900712
  predicted best residual square on the line:   0.68635483832144928

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 newocc : new Fermi energy is       0.379385 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 1.999 1.997 1.935 1.872 1.842 1.686 1.589 0.843
 0.559 0.209 0.128 0.113 0.110 0.036 0.032 0.023 0.015 0.008 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.994 1.971 1.905 1.854 1.803 1.798 1.677 1.494
 1.003 0.747 0.300 0.181 0.153 0.091 0.037 0.034 0.011 0.006 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.979 1.978 1.890 1.882 1.826 1.629 1.390 1.229
 1.066 0.758 0.387 0.329 0.274 0.209 0.128 0.102 0.006 0.006 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.996 1.974 1.911 1.884 1.822 1.798 1.686 0.811
 0.740 0.400 0.219 0.170 0.160 0.126 0.096 0.059 0.012 0.006 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.988 1.981 1.979 1.906 1.692 1.660 1.337 1.192 0.950
 0.700 0.449 0.260 0.170 0.079 0.070 0.032 0.012 0.007 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.970 1.943 1.727 1.683 1.583 1.223 1.004 0.875
 0.314 0.267 0.187 0.170 0.101 0.084 0.029 0.025 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.898 1.898 1.730 1.728 1.084 1.083 0.497 0.497
 0.161 0.161 0.087 0.087 0.046 0.046 0.011 0.011 0.003 0.003 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 1.997 1.990 1.984 1.980 1.898 1.851 1.771 1.703
 0.200 0.188 0.116 0.077 0.066 0.043 0.024 0.016 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.994 1.993 1.991 1.986 1.941 1.893 1.880 1.747 1.534
 1.363 1.029 0.508 0.326 0.155 0.142 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.997 1.928 1.916 1.818 1.794 1.495 1.368
 1.020 0.842 0.716 0.616 0.533 0.459 0.186 0.139 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.991 1.979 1.928 1.913 1.834 1.744 1.700
 0.632 0.565 0.293 0.241 0.165 0.139 0.129 0.104 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.994 1.992 1.982 1.972 1.896 1.762 1.760 1.164 1.079
 0.769 0.733 0.401 0.357 0.092 0.085 0.008 0.005 0.003 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.996 1.987 1.973 1.900 1.871 1.833 1.783 1.045 1.002
 0.361 0.312 0.259 0.249 0.174 0.151 0.025 0.018 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.992 1.992 1.856 1.856 1.373 1.372 0.485 0.484
 0.153 0.153 0.091 0.091 0.006 0.006 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1572E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    2.0260E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1572E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    2.0260E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 12  -573.66970701311    -5.364E-01 9.773E-04 9.376E+01 4.183E-02 4.871E-02
 scprqt: <Vxc>= -4.4118902E-01 hartree

Anderson update:
  residual square of the potential:    6.1183981310966704
  mixing of old trial potential    :  0.22445465579827276
  predicted best residual square on the line:   0.11631502802896909

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 newocc : new Fermi energy is       0.368727 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.995 1.941 1.878 1.844 1.562 1.412 0.943
 0.596 0.257 0.160 0.121 0.119 0.038 0.033 0.023 0.018 0.011 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.995 1.990 1.957 1.855 1.849 1.793 1.780 1.545 1.496
 1.089 0.855 0.392 0.216 0.163 0.093 0.040 0.034 0.012 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.968 1.965 1.875 1.847 1.718 1.605 1.454 1.203
 1.077 0.731 0.422 0.400 0.317 0.233 0.139 0.113 0.008 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.961 1.917 1.807 1.794 1.792 1.604 0.811
 0.736 0.507 0.236 0.185 0.185 0.139 0.104 0.062 0.014 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.985 1.977 1.966 1.900 1.557 1.520 1.208 1.177 0.979
 0.738 0.560 0.317 0.211 0.094 0.073 0.037 0.013 0.009 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.936 1.715 1.610 1.454 1.247 0.977 0.972
 0.277 0.266 0.222 0.208 0.109 0.091 0.034 0.030 0.010 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.893 1.893 1.570 1.569 0.989 0.989 0.613 0.612
 0.200 0.200 0.097 0.097 0.049 0.049 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.986 1.981 1.978 1.881 1.775 1.774 1.649
 0.212 0.208 0.137 0.083 0.071 0.045 0.027 0.019 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.980 1.928 1.872 1.824 1.724 1.471
 1.425 1.109 0.619 0.355 0.180 0.148 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.995 1.894 1.890 1.750 1.746 1.464 1.289
 1.085 0.990 0.824 0.675 0.613 0.517 0.186 0.142 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.989 1.970 1.910 1.881 1.822 1.674 1.658
 0.667 0.655 0.326 0.255 0.166 0.152 0.131 0.111 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.977 1.965 1.853 1.655 1.642 1.202 0.938
 0.903 0.771 0.496 0.428 0.100 0.098 0.010 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.981 1.966 1.858 1.831 1.761 1.706 1.136 1.105
 0.368 0.350 0.283 0.280 0.152 0.146 0.029 0.021 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.989 1.989 1.764 1.764 1.128 1.128 0.617 0.617
 0.173 0.173 0.107 0.107 0.008 0.008 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1471E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9680E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1471E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9680E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 13  -573.76765441813    -9.795E-02 5.818E-05 9.315E+00 1.979E-02 3.108E-02
 scprqt: <Vxc>= -4.4069401E-01 hartree

Anderson update:
  residual square of the potential:   0.74822023008689009
  mixing of old trial potential    :  0.25824136784131579
  predicted best residual square on the line:    7.5441586703572372E-003

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 newocc : new Fermi energy is       0.371016 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.840 1.593 1.448 0.928
 0.586 0.247 0.153 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.960 1.862 1.854 1.793 1.783 1.535 1.534
 1.072 0.831 0.371 0.209 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.875 1.857 1.743 1.607 1.447 1.203
 1.085 0.736 0.412 0.379 0.308 0.228 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.916 1.823 1.799 1.793 1.622 0.810
 0.739 0.483 0.230 0.181 0.179 0.135 0.102 0.061 0.014 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.588 1.548 1.234 1.182 0.997
 0.733 0.528 0.304 0.201 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.632 1.491 1.231 0.995 0.965
 0.283 0.257 0.213 0.211 0.107 0.089 0.033 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.602 1.602 1.020 1.020 0.579 0.579
 0.191 0.191 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.791 1.769 1.660
 0.206 0.205 0.132 0.081 0.070 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.835 1.727 1.487
 1.406 1.088 0.595 0.348 0.174 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.901 1.895 1.770 1.758 1.477 1.303
 1.078 0.964 0.798 0.655 0.598 0.506 0.185 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.887 1.822 1.690 1.666
 0.659 0.637 0.317 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.863 1.678 1.673 1.196 0.973
 0.870 0.777 0.469 0.407 0.097 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.866 1.839 1.779 1.723 1.108 1.074
 0.366 0.342 0.279 0.274 0.157 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.783 1.783 1.191 1.191 0.573 0.573
 0.169 0.169 0.104 0.104 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1493E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9651E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1493E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9651E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 14  -573.77863251040    -1.098E-02 7.881E-05 2.360E-02 4.434E-03 3.551E-02
 scprqt: <Vxc>= -4.4086020E-01 hartree

Anderson update:
  residual square of the potential:    9.2856504527801496E-004
  mixing of old trial potential    :  -1.3276360120604874E-002
  predicted best residual square on the line:    8.0025314749155945E-004

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 newocc : new Fermi energy is       0.370885 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.939 1.874 1.841 1.598 1.455 0.924
 0.584 0.244 0.151 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.863 1.854 1.793 1.784 1.542 1.532
 1.073 0.826 0.366 0.206 0.159 0.092 0.039 0.034 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.971 1.968 1.876 1.858 1.746 1.609 1.443 1.201
 1.088 0.738 0.412 0.378 0.306 0.227 0.135 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.826 1.801 1.793 1.625 0.809
 0.739 0.477 0.229 0.180 0.180 0.135 0.101 0.061 0.013 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.593 1.552 1.236 1.180 0.996
 0.733 0.526 0.301 0.199 0.089 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.937 1.717 1.635 1.499 1.233 0.997 0.962
 0.284 0.255 0.212 0.208 0.106 0.088 0.033 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.893 1.893 1.608 1.608 1.019 1.019 0.580 0.580
 0.189 0.189 0.093 0.093 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.794 1.770 1.663
 0.205 0.205 0.131 0.081 0.069 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.878 1.837 1.728 1.490
 1.406 1.087 0.589 0.346 0.172 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.902 1.896 1.774 1.760 1.478 1.306
 1.075 0.957 0.796 0.656 0.593 0.502 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.888 1.823 1.693 1.668
 0.656 0.631 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.682 1.678 1.194 0.976
 0.865 0.776 0.468 0.406 0.096 0.095 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.868 1.840 1.780 1.726 1.109 1.075
 0.364 0.339 0.277 0.272 0.158 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.786 1.786 1.194 1.194 0.574 0.574
 0.167 0.167 0.102 0.102 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1497E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9659E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1497E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9659E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 15  -573.77871327001    -8.076E-05 2.759E-05 1.698E-02 6.578E-04 3.591E-02
 scprqt: <Vxc>= -4.4084947E-01 hartree

Anderson update:
  residual square of the potential:    5.2041106690258203E-004
  mixing of old trial potential    :  0.41433681882668649
  predicted best residual square on the line:    1.1142652390854404E-004

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 newocc : new Fermi energy is       0.370875 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.841 1.596 1.452 0.926
 0.585 0.245 0.152 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.863 1.854 1.793 1.783 1.539 1.533
 1.073 0.828 0.368 0.207 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.876 1.857 1.745 1.608 1.445 1.202
 1.087 0.737 0.412 0.378 0.307 0.227 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.825 1.800 1.793 1.624 0.810
 0.739 0.480 0.229 0.181 0.179 0.135 0.102 0.061 0.014 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.591 1.551 1.235 1.181 0.996
 0.733 0.527 0.302 0.200 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.633 1.496 1.232 0.996 0.964
 0.284 0.255 0.213 0.210 0.107 0.089 0.033 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.605 1.605 1.020 1.020 0.580 0.580
 0.190 0.190 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.793 1.770 1.662
 0.205 0.205 0.131 0.081 0.070 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.837 1.727 1.489
 1.406 1.088 0.591 0.347 0.173 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.902 1.896 1.772 1.759 1.478 1.305
 1.076 0.960 0.797 0.656 0.595 0.504 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.888 1.823 1.692 1.668
 0.658 0.633 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.681 1.676 1.195 0.974
 0.867 0.776 0.468 0.407 0.096 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.867 1.840 1.780 1.725 1.108 1.074
 0.364 0.340 0.278 0.273 0.157 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.785 1.785 1.192 1.192 0.573 0.573
 0.168 0.168 0.103 0.103 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9658E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9658E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 16  -573.77873021859    -1.695E-05 5.139E-05 5.778E-04 3.552E-04 3.573E-02
 scprqt: <Vxc>= -4.4085186E-01 hartree

Anderson update:
  residual square of the potential:    3.9753669628535791E-005
  mixing of old trial potential    :  0.11199203283892839
  predicted best residual square on the line:    3.1985132472397289E-005

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 newocc : new Fermi energy is       0.370842 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.841 1.596 1.452 0.926
 0.586 0.245 0.152 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.863 1.854 1.793 1.783 1.539 1.533
 1.073 0.828 0.368 0.207 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.876 1.857 1.745 1.608 1.445 1.202
 1.086 0.737 0.412 0.378 0.307 0.227 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.825 1.800 1.793 1.624 0.810
 0.740 0.480 0.229 0.181 0.179 0.135 0.102 0.061 0.014 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.591 1.551 1.235 1.181 0.996
 0.733 0.527 0.303 0.200 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.633 1.496 1.232 0.996 0.963
 0.284 0.255 0.213 0.210 0.107 0.089 0.033 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.605 1.605 1.020 1.020 0.580 0.580
 0.190 0.190 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.793 1.770 1.662
 0.205 0.205 0.131 0.081 0.070 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.837 1.727 1.489
 1.406 1.087 0.591 0.347 0.173 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.902 1.896 1.772 1.759 1.478 1.305
 1.077 0.960 0.797 0.656 0.595 0.504 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.888 1.823 1.692 1.668
 0.658 0.633 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.681 1.676 1.195 0.974
 0.867 0.776 0.468 0.407 0.096 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.867 1.840 1.780 1.725 1.108 1.074
 0.364 0.340 0.278 0.273 0.157 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.785 1.785 1.192 1.192 0.573 0.573
 0.168 0.168 0.103 0.103 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9659E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9659E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 17  -573.77873006245     1.561E-07 2.044E-05 8.934E-04 3.280E-05 3.575E-02
 scprqt: <Vxc>= -4.4084822E-01 hartree

Anderson update:
  residual square of the potential:    1.9663353765534710E-004
  mixing of old trial potential    :   1.3470897476717869
  predicted best residual square on the line:    2.8598109908203049E-005

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 newocc : new Fermi energy is       0.370870 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.841 1.596 1.452 0.926
 0.585 0.245 0.151 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.863 1.854 1.793 1.783 1.539 1.533
 1.073 0.828 0.368 0.207 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.876 1.858 1.745 1.608 1.444 1.202
 1.087 0.737 0.412 0.378 0.307 0.227 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.825 1.800 1.793 1.624 0.810
 0.740 0.480 0.229 0.181 0.179 0.135 0.102 0.061 0.013 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.591 1.551 1.236 1.181 0.996
 0.733 0.527 0.302 0.200 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.634 1.496 1.232 0.997 0.963
 0.284 0.255 0.213 0.209 0.107 0.089 0.032 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.606 1.606 1.020 1.020 0.580 0.580
 0.190 0.190 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.793 1.770 1.662
 0.205 0.205 0.131 0.081 0.069 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.837 1.727 1.489
 1.406 1.087 0.591 0.347 0.173 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.902 1.896 1.772 1.760 1.478 1.305
 1.076 0.960 0.796 0.656 0.595 0.504 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.888 1.823 1.692 1.668
 0.657 0.633 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.681 1.676 1.195 0.974
 0.867 0.776 0.468 0.406 0.096 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.867 1.840 1.780 1.725 1.108 1.074
 0.364 0.340 0.277 0.273 0.158 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.785 1.785 1.193 1.193 0.573 0.573
 0.168 0.168 0.103 0.103 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9659E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9659E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 18  -573.77873063351    -5.711E-07 4.464E-05 3.971E-04 4.293E-05 3.579E-02
 scprqt: <Vxc>= -4.4085001E-01 hartree

Anderson update:
  residual square of the potential:    3.4456289342400744E-005
  mixing of old trial potential    : -0.41145491841651682
  predicted best residual square on the line:    1.9394753655343216E-005

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 newocc : new Fermi energy is       0.370858 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.841 1.595 1.452 0.926
 0.586 0.245 0.152 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.862 1.854 1.793 1.783 1.538 1.533
 1.073 0.829 0.368 0.208 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.876 1.857 1.745 1.608 1.445 1.202
 1.086 0.737 0.412 0.378 0.307 0.227 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.824 1.800 1.793 1.624 0.810
 0.739 0.480 0.229 0.181 0.179 0.135 0.102 0.061 0.014 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.591 1.550 1.235 1.181 0.996
 0.733 0.527 0.303 0.200 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.633 1.495 1.232 0.996 0.964
 0.284 0.255 0.213 0.210 0.107 0.089 0.033 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.605 1.605 1.019 1.019 0.580 0.580
 0.190 0.190 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.793 1.770 1.662
 0.205 0.205 0.131 0.081 0.070 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.836 1.727 1.489
 1.406 1.088 0.592 0.347 0.173 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.902 1.895 1.772 1.759 1.478 1.304
 1.077 0.961 0.797 0.656 0.596 0.504 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.888 1.823 1.692 1.667
 0.658 0.634 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.680 1.675 1.195 0.974
 0.868 0.776 0.468 0.407 0.096 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.867 1.840 1.780 1.724 1.108 1.075
 0.364 0.340 0.278 0.273 0.157 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.785 1.785 1.192 1.192 0.574 0.574
 0.168 0.168 0.103 0.103 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9659E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9659E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 19  -573.77872887979     1.754E-06 2.988E-05 1.971E-03 8.318E-05 3.571E-02
 scprqt: <Vxc>= -4.4084948E-01 hartree

Anderson update:
  residual square of the potential:    1.8712614407434105E-004
  mixing of old trial potential    :   1.2244971774676709
  predicted best residual square on the line:    2.9146120024033459E-005

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 newocc : new Fermi energy is       0.370835 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.841 1.595 1.451 0.926
 0.586 0.245 0.152 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.862 1.854 1.793 1.783 1.538 1.533
 1.073 0.829 0.368 0.208 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.876 1.857 1.744 1.608 1.445 1.202
 1.086 0.737 0.412 0.378 0.307 0.227 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.824 1.800 1.793 1.624 0.810
 0.739 0.480 0.229 0.181 0.179 0.135 0.102 0.061 0.014 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.590 1.550 1.235 1.181 0.996
 0.733 0.527 0.303 0.200 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.633 1.495 1.232 0.996 0.964
 0.284 0.256 0.213 0.210 0.107 0.089 0.033 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.605 1.605 1.019 1.019 0.580 0.580
 0.190 0.190 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.793 1.770 1.662
 0.205 0.205 0.131 0.081 0.070 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.836 1.727 1.489
 1.406 1.088 0.592 0.347 0.173 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.901 1.895 1.772 1.759 1.477 1.304
 1.077 0.961 0.797 0.656 0.596 0.504 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.887 1.823 1.692 1.667
 0.658 0.634 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.680 1.675 1.195 0.974
 0.868 0.776 0.469 0.407 0.096 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.867 1.840 1.780 1.724 1.108 1.075
 0.364 0.340 0.278 0.273 0.157 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.785 1.785 1.191 1.191 0.574 0.574
 0.168 0.168 0.103 0.103 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9659E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9659E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 20  -573.77872767378     1.206E-06 2.344E-05 3.123E-03 8.722E-06 3.572E-02
 scprqt: <Vxc>= -4.4084765E-01 hartree

Anderson update:
  residual square of the potential:    3.9667222752289239E-004
  mixing of old trial potential    :   3.0871767391578655
  predicted best residual square on the line:    1.0708545316555915E-005

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 newocc : new Fermi energy is       0.370915 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.841 1.596 1.453 0.926
 0.585 0.245 0.151 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.863 1.854 1.793 1.783 1.540 1.533
 1.073 0.828 0.367 0.207 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.876 1.858 1.745 1.608 1.444 1.202
 1.087 0.737 0.412 0.378 0.307 0.227 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.825 1.800 1.793 1.624 0.810
 0.739 0.480 0.229 0.181 0.179 0.135 0.102 0.061 0.013 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.592 1.551 1.236 1.181 0.996
 0.733 0.527 0.302 0.199 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.634 1.497 1.232 0.997 0.963
 0.284 0.255 0.213 0.209 0.107 0.089 0.032 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.606 1.606 1.020 1.020 0.579 0.579
 0.190 0.190 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.793 1.770 1.662
 0.205 0.205 0.131 0.081 0.069 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.837 1.727 1.490
 1.406 1.087 0.591 0.347 0.173 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.902 1.896 1.773 1.760 1.478 1.305
 1.076 0.960 0.796 0.655 0.595 0.504 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.888 1.823 1.692 1.668
 0.657 0.633 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.681 1.676 1.195 0.975
 0.867 0.776 0.468 0.406 0.096 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.867 1.840 1.780 1.725 1.108 1.074
 0.364 0.340 0.277 0.273 0.158 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.786 1.786 1.193 1.193 0.573 0.573
 0.168 0.168 0.103 0.103 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9660E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9660E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 21  -573.77872958995    -1.916E-06 1.347E-05 1.271E-03 9.460E-05 3.581E-02
 scprqt: <Vxc>= -4.4085274E-01 hartree

Anderson update:
  residual square of the potential:    5.4841844302786077E-005
  mixing of old trial potential    :  0.26481433842411972
  predicted best residual square on the line:    3.8790986210698013E-006

 ITER STEP NUMBER    22
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 22
 newocc : new Fermi energy is       0.370881 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.841 1.596 1.452 0.926
 0.585 0.245 0.152 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.863 1.854 1.793 1.783 1.539 1.533
 1.073 0.828 0.368 0.207 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.876 1.857 1.745 1.608 1.445 1.202
 1.087 0.737 0.412 0.378 0.307 0.227 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.825 1.800 1.793 1.624 0.810
 0.739 0.480 0.229 0.181 0.179 0.135 0.102 0.061 0.014 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.591 1.551 1.235 1.181 0.996
 0.733 0.527 0.303 0.200 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.633 1.496 1.232 0.996 0.964
 0.284 0.255 0.213 0.210 0.107 0.089 0.033 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.605 1.605 1.020 1.020 0.580 0.580
 0.190 0.190 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.793 1.770 1.662
 0.205 0.205 0.131 0.081 0.070 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.837 1.727 1.489
 1.406 1.087 0.591 0.347 0.173 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.902 1.896 1.772 1.759 1.478 1.305
 1.077 0.960 0.797 0.656 0.595 0.504 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.888 1.823 1.692 1.668
 0.658 0.633 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.681 1.676 1.195 0.974
 0.867 0.776 0.468 0.407 0.096 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.867 1.840 1.780 1.725 1.108 1.074
 0.364 0.340 0.278 0.273 0.157 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.785 1.785 1.192 1.192 0.573 0.573
 0.168 0.168 0.103 0.103 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9660E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9660E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 22  -573.77873036965    -7.797E-07 8.077E-06 5.263E-04 9.089E-05 3.573E-02
 scprqt: <Vxc>= -4.4085118E-01 hartree

Anderson update:
  residual square of the potential:    4.0285799213198874E-005
  mixing of old trial potential    :  0.46092446820121469
  predicted best residual square on the line:    7.1561921110032162E-007

 ITER STEP NUMBER    23
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 23
 newocc : new Fermi energy is       0.370891 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.841 1.596 1.452 0.926
 0.585 0.245 0.151 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.863 1.854 1.793 1.783 1.539 1.533
 1.073 0.828 0.368 0.207 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.876 1.858 1.745 1.608 1.445 1.202
 1.087 0.737 0.412 0.378 0.307 0.227 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.825 1.800 1.793 1.624 0.810
 0.739 0.480 0.229 0.181 0.179 0.135 0.102 0.061 0.014 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.591 1.551 1.235 1.181 0.996
 0.733 0.527 0.302 0.200 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.634 1.496 1.232 0.996 0.963
 0.284 0.255 0.213 0.209 0.107 0.089 0.033 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.606 1.606 1.020 1.020 0.580 0.580
 0.190 0.190 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.793 1.770 1.662
 0.205 0.205 0.131 0.081 0.070 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.837 1.727 1.489
 1.406 1.087 0.591 0.347 0.173 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.902 1.896 1.772 1.759 1.478 1.305
 1.076 0.960 0.797 0.656 0.595 0.504 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.888 1.823 1.692 1.668
 0.657 0.633 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.681 1.676 1.195 0.974
 0.867 0.776 0.468 0.407 0.096 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.867 1.840 1.780 1.725 1.108 1.074
 0.364 0.340 0.278 0.273 0.157 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.785 1.785 1.192 1.192 0.573 0.573
 0.168 0.168 0.103 0.103 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9660E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9660E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 23  -573.77873086370    -4.941E-07 7.562E-06 6.704E-05 2.800E-05 3.575E-02
 scprqt: <Vxc>= -4.4085175E-01 hartree

Anderson update:
  residual square of the potential:    6.2534218257145163E-006
  mixing of old trial potential    : -0.64530864504330432
  predicted best residual square on the line:    6.6498689898606165E-008

 ITER STEP NUMBER    24
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 24
 newocc : new Fermi energy is       0.370895 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.841 1.596 1.452 0.926
 0.585 0.245 0.151 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.863 1.854 1.793 1.783 1.539 1.533
 1.073 0.828 0.368 0.207 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.876 1.858 1.745 1.608 1.445 1.202
 1.087 0.737 0.412 0.378 0.307 0.227 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.825 1.800 1.793 1.624 0.810
 0.739 0.480 0.229 0.181 0.179 0.135 0.102 0.061 0.014 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.591 1.551 1.235 1.181 0.996
 0.733 0.527 0.302 0.200 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.634 1.496 1.232 0.996 0.963
 0.284 0.255 0.213 0.209 0.107 0.089 0.033 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.606 1.606 1.020 1.020 0.580 0.580
 0.190 0.190 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.793 1.770 1.662
 0.205 0.205 0.131 0.081 0.069 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.837 1.727 1.489
 1.406 1.087 0.591 0.347 0.173 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.902 1.896 1.772 1.759 1.478 1.305
 1.076 0.960 0.797 0.656 0.595 0.504 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.888 1.823 1.692 1.668
 0.657 0.633 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.681 1.676 1.195 0.974
 0.867 0.776 0.468 0.407 0.096 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.867 1.840 1.780 1.725 1.108 1.074
 0.364 0.340 0.278 0.273 0.157 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.785 1.785 1.192 1.192 0.573 0.573
 0.168 0.168 0.103 0.103 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9661E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9661E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 24  -573.77873091547    -5.177E-08 3.876E-06 1.704E-05 4.275E-06 3.576E-02
 scprqt: <Vxc>= -4.4085197E-01 hartree

Anderson update:
  residual square of the potential:    1.4088600606058498E-006
  mixing of old trial potential    : -0.88970426778501321
  predicted best residual square on the line:    2.9132123797667042E-008

 ITER STEP NUMBER    25
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 25
 newocc : new Fermi energy is       0.370899 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.841 1.596 1.452 0.926
 0.585 0.245 0.151 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.863 1.854 1.793 1.783 1.539 1.533
 1.073 0.828 0.368 0.207 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.876 1.858 1.745 1.608 1.445 1.202
 1.087 0.737 0.412 0.378 0.307 0.227 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.825 1.800 1.793 1.624 0.810
 0.739 0.480 0.229 0.181 0.179 0.135 0.102 0.061 0.014 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.591 1.551 1.235 1.181 0.996
 0.733 0.527 0.302 0.200 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.634 1.496 1.232 0.996 0.963
 0.284 0.255 0.213 0.209 0.107 0.089 0.033 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.606 1.606 1.020 1.020 0.580 0.580
 0.190 0.190 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.793 1.770 1.662
 0.205 0.205 0.131 0.081 0.069 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.837 1.727 1.489
 1.406 1.087 0.591 0.347 0.173 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.902 1.896 1.772 1.759 1.478 1.305
 1.076 0.960 0.797 0.656 0.595 0.504 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.888 1.823 1.692 1.668
 0.657 0.633 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.681 1.676 1.195 0.974
 0.867 0.776 0.468 0.407 0.096 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.867 1.840 1.780 1.725 1.108 1.074
 0.364 0.340 0.278 0.273 0.157 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.785 1.785 1.192 1.192 0.573 0.573
 0.168 0.168 0.103 0.103 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9661E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9661E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 25  -573.77873093154    -1.608E-08 2.892E-06 1.555E-06 6.295E-06 3.576E-02
 scprqt: <Vxc>= -4.4085227E-01 hartree

Anderson update:
  residual square of the potential:    1.1828230680260866E-007
  mixing of old trial potential    :  0.22384019830400828
  predicted best residual square on the line:    1.2057663784737522E-009

 ITER STEP NUMBER    26
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 26
 newocc : new Fermi energy is       0.370898 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.841 1.596 1.452 0.926
 0.585 0.245 0.151 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.863 1.854 1.793 1.783 1.539 1.533
 1.073 0.828 0.368 0.207 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.876 1.858 1.745 1.608 1.445 1.202
 1.087 0.737 0.412 0.378 0.307 0.227 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.825 1.800 1.793 1.624 0.810
 0.739 0.480 0.229 0.181 0.179 0.135 0.102 0.061 0.014 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.591 1.551 1.235 1.181 0.996
 0.733 0.527 0.302 0.200 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.634 1.496 1.232 0.996 0.963
 0.284 0.255 0.213 0.209 0.107 0.089 0.033 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.606 1.606 1.020 1.020 0.580 0.580
 0.190 0.190 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.793 1.770 1.662
 0.205 0.205 0.131 0.081 0.069 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.837 1.727 1.489
 1.406 1.087 0.591 0.347 0.173 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.902 1.896 1.772 1.759 1.478 1.305
 1.076 0.960 0.797 0.656 0.595 0.504 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.888 1.823 1.692 1.668
 0.657 0.633 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.681 1.676 1.195 0.974
 0.867 0.776 0.468 0.407 0.096 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.867 1.840 1.780 1.725 1.108 1.074
 0.364 0.340 0.278 0.273 0.157 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.785 1.785 1.192 1.192 0.573 0.573
 0.168 0.168 0.103 0.103 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9661E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9661E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 26  -573.77873093336    -1.811E-09 4.450E-06 1.622E-08 2.698E-06 3.576E-02
 scprqt: <Vxc>= -4.4085219E-01 hartree

Anderson update:
  residual square of the potential:    9.5517637743892062E-010
  mixing of old trial potential    :   7.7706750238300246E-002
  predicted best residual square on the line:    1.1635052404349681E-010

 ITER STEP NUMBER    27
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 27
 newocc : new Fermi energy is       0.370898 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.841 1.596 1.452 0.926
 0.585 0.245 0.151 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.863 1.854 1.793 1.783 1.539 1.533
 1.073 0.828 0.368 0.207 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.876 1.858 1.745 1.608 1.445 1.202
 1.087 0.737 0.412 0.378 0.307 0.227 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.825 1.800 1.793 1.624 0.810
 0.739 0.480 0.229 0.181 0.179 0.135 0.102 0.061 0.014 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.591 1.551 1.235 1.181 0.996
 0.733 0.527 0.302 0.200 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.634 1.496 1.232 0.996 0.963
 0.284 0.255 0.213 0.209 0.107 0.089 0.033 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.606 1.606 1.020 1.020 0.580 0.580
 0.190 0.190 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.793 1.770 1.662
 0.205 0.205 0.131 0.081 0.069 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.837 1.727 1.489
 1.406 1.087 0.591 0.347 0.173 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.902 1.896 1.772 1.759 1.478 1.305
 1.076 0.960 0.797 0.656 0.595 0.504 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.888 1.823 1.692 1.668
 0.657 0.633 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.681 1.676 1.195 0.974
 0.867 0.776 0.468 0.407 0.096 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.867 1.840 1.780 1.725 1.108 1.074
 0.364 0.340 0.278 0.273 0.157 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.785 1.785 1.192 1.192 0.573 0.573
 0.168 0.168 0.103 0.103 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9661E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9661E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 27  -573.77873093339    -3.286E-11 1.022E-06 3.672E-09 4.531E-07 3.576E-02
 scprqt: <Vxc>= -4.4085220E-01 hartree

Anderson update:
  residual square of the potential:    6.2984146361848221E-010
  mixing of old trial potential    :  0.44330816431551379
  predicted best residual square on the line:    6.5955068132386038E-011

 ITER STEP NUMBER    28
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 28
 newocc : new Fermi energy is       0.370898 , with nelect=    168.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.998 1.996 1.940 1.874 1.841 1.596 1.452 0.926
 0.585 0.245 0.151 0.118 0.117 0.038 0.032 0.023 0.017 0.010 0.004 0.002
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.996 1.991 1.961 1.863 1.854 1.793 1.783 1.539 1.533
 1.073 0.828 0.368 0.207 0.159 0.092 0.039 0.033 0.012 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.970 1.968 1.876 1.858 1.745 1.608 1.445 1.202
 1.087 0.737 0.412 0.378 0.307 0.227 0.136 0.110 0.008 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.995 1.964 1.915 1.825 1.800 1.793 1.624 0.810
 0.739 0.480 0.229 0.181 0.179 0.135 0.102 0.061 0.014 0.007 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.986 1.978 1.969 1.899 1.591 1.551 1.235 1.181 0.996
 0.733 0.527 0.302 0.200 0.090 0.072 0.036 0.013 0.008 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.997 1.967 1.938 1.716 1.634 1.496 1.232 0.996 0.963
 0.284 0.255 0.213 0.209 0.107 0.089 0.033 0.028 0.009 0.008 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.894 1.894 1.606 1.606 1.020 1.020 0.580 0.580
 0.190 0.190 0.094 0.094 0.048 0.048 0.013 0.013 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.999 1.997 1.987 1.981 1.979 1.883 1.793 1.770 1.662
 0.205 0.205 0.131 0.081 0.069 0.044 0.026 0.018 0.004 0.004 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.992 1.990 1.989 1.981 1.931 1.877 1.837 1.727 1.489
 1.406 1.087 0.591 0.347 0.173 0.146 0.029 0.026 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.998 1.998 1.996 1.996 1.902 1.896 1.772 1.759 1.478 1.305
 1.076 0.960 0.797 0.656 0.595 0.504 0.186 0.141 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.999 1.998 1.997 1.990 1.972 1.914 1.888 1.823 1.692 1.668
 0.657 0.633 0.316 0.249 0.165 0.148 0.130 0.108 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.997 1.993 1.989 1.978 1.966 1.864 1.681 1.676 1.195 0.974
 0.867 0.776 0.468 0.407 0.096 0.096 0.009 0.006 0.003 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.996 1.996 1.982 1.967 1.867 1.840 1.780 1.725 1.108 1.074
 0.364 0.340 0.278 0.273 0.157 0.149 0.028 0.020 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 1.993 1.993 1.990 1.990 1.785 1.785 1.192 1.192 0.573 0.573
 0.168 0.168 0.103 0.103 0.007 0.007 0.004 0.004 0.004 0.004 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9661E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 Total charge density [el/Bohr^3]
,     Maximum=    1.1496E+00  at reduced coord.    0.0000    0.0667    0.4792
,     Minimum=    1.9661E-03  at reduced coord.    0.5000    0.0000    0.2500
,  Integrated=    1.6800E+02
 ETOT 28  -573.77873093339    -4.547E-13 1.577E-06 4.411E-09 1.631E-08 3.576E-02
 scprqt: <Vxc>= -4.4085220E-01 hartree

 At SCF step   28, etot is converged : 
  for the second time, diff in etot=  4.547E-13 < toldfe=  5.000E-11

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.03016156E-02  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.03016156E-02  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.00005945E-02  sigma(2 1)=  0.00000000E+00

   1  6  1  6 10 12 10 12 12 10 12 10  6  1  6  1
   2  2  2  2  2  2  2  2 13 13 13 13 13 13 13 13
   3  3  3  3  3  3  3  3 14 14 14 14 14 14 14 14
   4  9  8  7  8  7  4  9 15 19 18 17 18 17 15 19
   5  5  5  5 11 11 11 11 16 16 16 16 20 20 20 20
   6  1  6  1 12 10 12 10 10 12 10 12  1  6  1  6
   7  4  9  8  9  8  7  4 17 15 19 18 19 18 17 15
   8  7  4  9  4  9  8  7 18 17 15 19 15 19 18 17
   9  8  7  4  7  4  9  8 19 18 17 15 17 15 19 18
  10 12 10 12  1  6  1  6  6  1  6  1 12 10 12 10
  11 11 11 11  5  5  5  5 20 20 20 20 16 16 16 16
  12 10 12 10  6  1  6  1  1  6  1  6 10 12 10 12
  13 13 13 13 13 13 13 13  2  2  2  2  2  2  2  2
  14 14 14 14 14 14 14 14  3  3  3  3  3  3  3  3
  15 19 18 17 18 17 15 19  4  9  8  7  8  7  4  9
  16 16 16 16 20 20 20 20  5  5  5  5 11 11 11 11
  17 15 19 18 19 18 17 15  7  4  9  8  9  8  7  4
  18 17 15 19 15 19 18 17  8  7  4  9  4  9  8  7
  19 18 17 15 17 15 19 18  9  8  7  4  7  4  9  8
  20 20 20 20 16 16 16 16 11 11 11 11  5  5  5  5
 ioarr: writing density data
ioarr: file name is DPo_DS1_DEN
ioarr: data written to disk file DPo_DS1_DEN
================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file DPo_DS1_WFK, with accesswff 1
 outwf with iomode: 1, cpu:     8.35, wall:     8.51

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.03016156E-02  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.03016156E-02  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.00005945E-02  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -3.0013E+02 GPa]
- sigma(1 1)=  3.03083943E+02  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  3.03083943E+02  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  2.94227598E+02  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =   56

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.


 getdim_nloc : deduce lmnmax  =  19, lnmax  =   7,
                      lmnmaxso=  38, lnmaxso=  12.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  1.7351655E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  40  40  60
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.14251
 Relative gap for number of plane waves between process:     0.01
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is 38sr.10.hgh
- pspatm: opening atomic psp file    38sr.10.hgh
- Hartwigsen-Goedecker-Hutter psp for Sr,  from PRB58, 3641 (1998)
- 38.00000  10.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.4800000
 cc1 =   5.5714550; cc2 =  -1.0799630; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.2754410; h11s=   9.9951350; h22s=   9.3366790; h33s=   0.0000000
 rrp =   0.3022430; h11p=   3.1691260; h22p=   4.0492310; h33p=   0.0000000
                    k11p=  -0.5762650; k22p=   0.9900620; k33p=   0.0000000
 rrd =   0.5020450; h11d=   0.4387280; h22d=   0.0000000; h33d=   0.0000000
                    k11d=   0.0089910; k22d=   0.0000000; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   18.53753599
         --- l  ekb(1:nproj) -->
             0    0.447053    0.985014
             1    0.032946    0.096133
             2    0.050010
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 29cu.11.hgh
- pspatm: opening atomic psp file    29cu.11.hgh
- Hartwigsen-Goedecker-Hutter psp for Cu,  from PRB58, 3641 (1998)
- 29.00000  11.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.5300000
 cc1 =   0.0000000; cc2 =   0.0000000; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.4237340; h11s=   3.8880500; h22s=   3.2765840; h33s=   2.2900910
 rrp =   0.5721770; h11p=   1.7512720; h22p=   0.3749430; h33p=   0.0000000
                    k11p=  -0.0240670; k22p=   0.0764810; k33p=   0.0000000
 rrd =   0.2661430; h11d= -12.6769570; h22d=   0.0000000; h33d=   0.0000000
                    k11d=   0.0104890; k22d=   0.0000000; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   19.41441428
         --- l  ekb(1:nproj) -->
             0    0.329015    0.743109    1.477839
             1    0.155196    0.769277
             2   -0.017001
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is 77ir.17.hgh
- pspatm: opening atomic psp file    77ir.17.hgh
- Hartwigsen-Goedecker-Hutter psp for Ir,  from PRB58, 3641 (1998)
- 77.00000  17.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.5100000
 cc1 =   4.9045090; cc2 =   1.3137860; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.4044690; h11s=   3.2432780; h22s=  -7.3155090; h33s=   2.9569780
 rrp =   0.4114260; h11p=  -0.3805740; h22p=  -3.5044030; h33p=   0.0000000
                    k11p=   0.9301210; k22p=  -0.3798650; k33p=  -0.2627160
 rrd =   0.3764280; h11d=   0.7543150; h22d=  -5.8755800; h33d=   0.0000000
                    k11d=   0.2195170; k22d=  -0.1121450; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   46.26315916
         --- l  ekb(1:nproj) -->
             0   -1.964398    0.756198    0.946602
             1   -0.342239    0.017539
             2   -0.102777    0.025006
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   4  psp file is 8o.6.hgh
- pspatm: opening atomic psp file    8o.6.hgh
- Hartwigsen-Goedecker-Hutter psp for O,  from PRB58, 3641 (1998)
-  8.00000   6.00000     10605                znucl, zion, pspdat
    3    1    1    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2476210
 cc1 = -16.5803180; cc2 =   2.3957010; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.2217860; h11s=  18.2669170; h22s=   0.0000000; h33s=   0.0000000
 rrp =   0.2568290; h11p=   0.0000000; h22p=   0.0000000; h33p=   0.0000000
                    k11p=   0.0044760; k22p=   0.0000000; k33p=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    0.06537478
         --- l  ekb(1:nproj) -->
             0    0.706436
 pspatm: atomic psp has been read  and splines computed

   1  6  1  6 10 12 10 12 12 10 12 10  6  1  6  1
   2  2  2  2  2  2  2  2 13 13 13 13 13 13 13 13
   3  3  3  3  3  3  3  3 14 14 14 14 14 14 14 14
   4  9  8  7  8  7  4  9 15 19 18 17 18 17 15 19
   5  5  5  5 11 11 11 11 16 16 16 16 20 20 20 20
   6  1  6  1 12 10 12 10 10 12 10 12  1  6  1  6
   7  4  9  8  9  8  7  4 17 15 19 18 19 18 17 15
   8  7  4  9  4  9  8  7 18 17 15 19 15 19 18 17
   9  8  7  4  7  4  9  8 19 18 17 15 17 15 19 18
  10 12 10 12  1  6  1  6  6  1  6  1 12 10 12 10
  11 11 11 11  5  5  5  5 20 20 20 20 16 16 16 16
  12 10 12 10  6  1  6  1  1  6  1  6 10 12 10 12
  13 13 13 13 13 13 13 13  2  2  2  2  2  2  2  2
  14 14 14 14 14 14 14 14  3  3  3  3  3  3  3  3
  15 19 18 17 18 17 15 19  4  9  8  7  8  7  4  9
  16 16 16 16 20 20 20 20  5  5  5  5 11 11 11 11
  17 15 19 18 19 18 17 15  7  4  9  8  9  8  7  4
  18 17 15 19 15 19 18 17  8  7  4  9  4  9  8  7
  19 18 17 15 17 15 19 18  9  8  7  4  7  4  9  8
  20 20 20 20 16 16 16 16 11 11 11 11  5  5  5  5
inwffil: examining the header of disk file DPo_DS1_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 7.8.2            |  ABINIT  code version 7.8.2
. date 20141029 bantot 1456 natom   20  |  date 20141029 bantot 1456 natom   20
  nkpt  14 nsym 16 ngfft  40,  40,  60  |  nkpt  14 nsym 16 ngfft  30,  30,  48
  ntypat  4 ecut_eff  15.0000000        |  ntypat  4 ecut_eff  10.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
    10.3934937   0.0000000   0.0000000  |    10.3934937   0.0000000   0.0000000
     0.0000000  10.3934937   0.0000000  |     0.0000000  10.3934937   0.0000000
     0.0000000   0.0000000  16.0626721  |     0.0000000   0.0000000  16.0626721

--- !WARNING
message: |
    input ecut_eff=   15.000000 /= disk file ecut_eff=   10.000000.
src_file: m_header.F90

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
src_line: 2991
...

  nband:                                |  nband:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
   104 104 104 104 104 104 104 104 104  |   104 104 104 104 104 104 104 104 104
   104 104 104 104 104                  |   104 104 104 104 104
  symafm:                               |  symafm:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Backtrace for this error:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1                          |    1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
    0  1  0 -1  0  0  0  0  1           |    0  1  0 -1  0  0  0  0  1
   -1  0  0  0 -1  0  0  0  1           |   -1  0  0  0 -1  0  0  0  1
    0 -1  0  1  0  0  0  0  1           |    0 -1  0  1  0  0  0  0  1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
    0 -1  0  1  0  0  0  0 -1           |    0 -1  0  1  0  0  0  0 -1
    1  0  0  0  1  0  0  0 -1           |    1  0  0  0  1  0  0  0 -1
    0  1  0 -1  0  0  0  0 -1           |    0  1  0 -1  0  0  0  0 -1
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
    0  1  0 -1  0  0  0  0  1           |    0  1  0 -1  0  0  0  0  1
   -1  0  0  0 -1  0  0  0  1           |   -1  0  0  0 -1  0  0  0  1
    0 -1  0  1  0  0  0  0  1           |    0 -1  0  1  0  0  0  0  1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
    0 -1  0  1  0  0  0  0 -1           |    0 -1  0  1  0  0  0  0 -1

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
    1  0  0  0  1  0  0  0 -1           |    1  0  0  0  1  0  0  0 -1
    0  1  0 -1  0  0  0  0 -1           |    0  1  0 -1  0  0  0  0 -1
  typat:                                |  typat:
    1  2  3  4  4  1  4  4  4  1  4  1  |    1  2  3  4  4  1  4  4  4  1  4  1

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Backtrace for this error:

Backtrace for this error:
    2  3  4  4  4  4  4  4              |    2  3  4  4  4  4  4  4
  so_psp  :                             |  so_psp  :
    1  1  1  1                          |    1  1  1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1                                |    1  1
  kpt:                                  |  kpt:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.
     0.1000000   0.1000000   0.1250000  |     0.1000000   0.1000000   0.1250000
     0.3000000   0.1000000   0.1250000  |     0.3000000   0.1000000   0.1250000
     0.5000000   0.1000000   0.1250000  |     0.5000000   0.1000000   0.1250000
    -0.3000000   0.1000000   0.1250000  |    -0.3000000   0.1000000   0.1250000
     0.3000000   0.3000000   0.1250000  |     0.3000000   0.3000000   0.1250000
  wtk:                                  |  wtk:
    0.080  0.080  0.080  0.080  0.080   |    0.080  0.080  0.080  0.080  0.080
  occ:                                  |  occ:
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

--- !WARNING
message: |
    band,k        64, input occ=  2.0000000E+00 disk occ=  1.9999984E+00
src_file: m_header.F90
src_line: 3278
...


Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Backtrace for this error:

--- !WARNING
message: |
    band,k        65, input occ=  2.0000000E+00 disk occ=  1.9999984E+00
src_file: m_header.F90
src_line: 3278
...


--- !WARNING
message: |
    band,k        66, input occ=  2.0000000E+00 disk occ=  1.9999935E+00
src_file: m_header.F90
src_line: 3278
...


--- !WARNING
message: |
    band,k        67, input occ=  2.0000000E+00 disk occ=  1.9999931E+00
src_file: m_header.F90
src_line: 3278
...


--- !WARNING
message: |
    band,k        68, input occ=  2.0000000E+00 disk occ=  1.9999903E+00
src_file: m_header.F90
src_line: 3278
...

The number of warning msgs is sufficient ... stop writing them.
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
    -0.0000000  -0.0000000  -0.0000000  |    -0.0000000  -0.0000000  -0.0000000
    -0.0000000  -0.0000000  -0.0000000  |    -0.0000000  -0.0000000  -0.0000000
    -0.0000000  -0.0000000  -0.0000000  |    -0.0000000  -0.0000000  -0.0000000

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
    -0.0000000  -0.0000000  -0.0000000  |    -0.0000000  -0.0000000  -0.0000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
   znucl:                               |   znucl:
   38.00 29.00 77.00  8.00              |   38.00 29.00 77.00  8.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
  pspdat  10605 pspcod    3 zion  10.0  |  pspdat  10605 pspcod    3 zion  10.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat  10605 pspcod    3 zion  11.0  |  pspdat  10605 pspcod    3 zion  11.0
  pseudopotential atom type  3:         |  pseudopotential atom type  3:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat  10605 pspcod    3 zion  17.0  |  pspdat  10605 pspcod    3 zion  17.0
  pseudopotential atom type  4:         |  pseudopotential atom type  4:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat  10605 pspcod    3 zion   6.0  |  pspdat  10605 pspcod    3 zion   6.0
  xred:                                 |  xred:
     0.0000000   0.5000000   0.2500000  |     0.0000000   0.5000000   0.2500000

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2000000   0.3000000   0.0000000  |     0.2000000   0.3000000   0.0000000
     0.0000000   0.0000000   0.2400000  |     0.0000000   0.0000000   0.2400000
     0.5000000   0.0000000   0.2500000  |     0.5000000   0.0000000   0.2500000

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Backtrace for this error:
     0.7000000   0.2000000   0.0000000  |     0.7000000   0.2000000   0.0000000
     0.8000000   0.7000000   0.0000000  |     0.8000000   0.7000000   0.0000000
     0.3000000   0.8000000   0.0000000  |     0.3000000   0.8000000   0.0000000
     0.0000000   0.5000000   0.7500000  |     0.0000000   0.5000000   0.7500000
     0.0000000   0.0000000   0.7600000  |     0.0000000   0.0000000   0.7600000
     0.5000000   0.0000000   0.7500000  |     0.5000000   0.0000000   0.7500000
     0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.7000000   0.8000000   0.5000000  |     0.7000000   0.8000000   0.5000000
     0.5000000   0.5000000   0.7400000  |     0.5000000   0.5000000   0.7400000

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
     0.2000000   0.7000000   0.5000000  |     0.2000000   0.7000000   0.5000000
     0.3000000   0.2000000   0.5000000  |     0.3000000   0.2000000   0.5000000
     0.8000000   0.3000000   0.5000000  |     0.8000000   0.3000000   0.5000000
     0.5000000   0.5000000   0.2600000  |     0.5000000   0.5000000   0.2600000

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

--- !WARNING
message: |
    Restart of self-consistent calculation need translated wavefunctions.
src_file: m_header.F90
src_line: 3453
...

  Indeed, critical differences between current calculation and
  restart file have been detected in:
        * the plane-wave cutoff
================================================================================
-inwffil : will read wavefunctions from disk file DPo_DS1_WFK
 Relative gap for number of plane waves between process:     0.00

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x2AF4BC319457
#1  0x2AF4BC319A6E
#2  0x33DB4302CF
#0  0x2B730604B457
#1  0x2B730604BA6E
#2  0x33DB4302CF
#0  0x2B0A814F2457
#1  0x2B0A814F2A6E
#2  0x33DB4302CF
#3  0xE21FCE in __m_fftcore_MOD_kpgsph
#4  0xD3CB00 in kpgio_
#5  0x4F74F4 in inwffil_
#6  0x4AA2DC in gstate_
#7  0x431E1E in gstateimg_
#8  0x422C57 in driver_
#9  0x418970 in MAIN__ at abinit.F90:0
#3  0xE21FCE in __m_fftcore_MOD_kpgsph
#4  0xD3CB00 in kpgio_
#5  0x4F74F4 in inwffil_
#6  0x4AA2DC in gstate_
#7  0x431E1E in gstateimg_
#8  0x422C57 in driver_
#9  0x418970 in MAIN__ at abinit.F90:0
#3  0xE21FCE in __m_fftcore_MOD_kpgsph
#4  0xD3CB00 in kpgio_
#5  0x4F74F4 in inwffil_
#6  0x4AA2DC in gstate_
#7  0x431E1E in gstateimg_
#8  0x422C57 in driver_
#9  0x418970 in MAIN__ at abinit.F90:0
#0  0x2ACC283A0457
#1  0x2ACC283A0A6E
#2  0x3FCD2302CF
#0  0x2AB105668457
#1  0x2AB105668A6E
#2  0x3FCD2302CF
#3  0xE21FCE in __m_fftcore_MOD_kpgsph
#4  0xD3CB00 in kpgio_
#5  0x4F74F4 in inwffil_
#3  0xE21FCE in __m_fftcore_MOD_kpgsph
#6  0x4AA2DC in gstate_
#4  0xD3CB00 in kpgio_
#7  0x431E1E in gstateimg_
#5  0x4F74F4 in inwffil_
#8  0x422C57 in driver_
#6  0x4AA2DC in gstate_
#9  0x418970 in MAIN__ at abinit.F90:0
#7  0x431E1E in gstateimg_
#8  0x422C57 in driver_
#9  0x418970 in MAIN__ at abinit.F90:0
#0  #0  0x2AD3A21AF457
#1  0x2AD3A21AFA6E
#0  0x2AC7B8A4E457
#1  0x2AC7B8A4EA6E
#2  0x3D5D4302CF
#0  0x2B0751877457
#1  0x2B0751877A6E
#2  #2  0x3D5D4302CF
0x3D5D4302CF
0x2B3449A3D457
#1  0x2B3449A3DA6E
#2  0x3D5D4302CF
#0  0x2AF58DE23457
#0  0x2AC99ADCE457
#1  0x2AC99ADCEA6E
#0  0x2B30FCDF7457
#1  0x2B30FCDF7A6E
#1  0x2AF58DE23A6E
#2  0x36146302CF
#2  0x333F8302CF
#2  0x36146302CF
#0  0x2AD4A0CF3457
#1  0x2AD4A0CF3A6E
#2  0x333F8302CF
#0  0x2B228C001457
#1  0x2B228C001A6E
#2  0x36146302CF
#0  0x2AF4FDAA4457
#1  0x2AF4FDAA4A6E
#2  0x333F8302CF
#0  #0  0x0x2AFF779314572BA1EC101457

#1  #1  0x0x2AFF77931A6E2BA1EC101A6E

#2  #2  0x0x36146302CF333F8302CF#0  0x2AB6DDCAB457
#1  0x2AB6DDCABA6E
#2  0x3CE2A302CF
#0  0x2AD918F1D457
#1  0x2AD918F1DA6E
#2  0x3CE2A302CF
#0  0x2B168ADD3457
#1  0x2B168ADD3A6E
#2  0x3CE2A302CF
#0  0x2B447B000457
#1  0x2B447B000A6E
#2  0x30BE6302CF
#0  0x2B928EF00457
#1  0x2B928EF00A6E
#2  0x30BE6302CF


#0  0x2B183B7AB457
#0  0x2AF7A4583457
#1  0x2AF7A4583A6E
#0  0x2B03B4D65457
#1  0x2B03B4D65A6E
#2  0x36186302CF
#2  0x36186302CF
#1  0x2B183B7ABA6E
#2  0x36186302CF
--------------------------------------------------------------------------
mpirun noticed that process rank 3 with PID 18534 on node compute-0-3 exited on signal 11 (Segmentation fault).
--------------------------------------------------------------------------
3 total processes killed (some possibly by mpirun during cleanup)

