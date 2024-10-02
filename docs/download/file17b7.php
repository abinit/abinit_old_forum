PE 0: MPICH Warning: For one-sided operations, XPMEM will not be used for a specific
RMA window if that window's memory is no more than 4K.
Updating to CLE 5.2UP02 or beyond will resolve this issue.
  ABINIT 8.4.4
  
  Give name for formatted input file: 
alas.in
  Give name for formatted output file:
alas.out
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

.Starting date : Wed  1 Aug 2018.
- ( at 08h11 )
  

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

- input  file    -> alas.in
- output file    -> alas.out
- root for input  files -> input_data/idat
- root for output files -> out_data/odat

-instrng: 77 lines of input have been read from file alas.in


 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is ../../Al.psp8

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is ../../As.psp8
  read the values zionpsp=  3.0 , pspcod=   8 , lmax=   2
  read the values zionpsp= 15.0 , pspcod=   8 , lmax=   2

 inpspheads: deduce mpsang = 3, n1xccc = 2501.
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart
  symfind : exit, nsym=          24
    symrel matrices, symafm and tnons are :
   1       1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
   2       0  -1   1     0  -1   0     1  -1   0       1      0.0000  0.0000  0.0000
   3      -1   0   0    -1   0   1    -1   1   0       1      0.0000  0.0000  0.0000
   4       0   1  -1     1   0  -1     0   0  -1       1      0.0000  0.0000  0.0000
   5      -1   0   0    -1   1   0    -1   0   1       1      0.0000  0.0000  0.0000
   6       0  -1   1     1  -1   0     0  -1   0       1      0.0000  0.0000  0.0000
   7       1   0   0     0   0   1     0   1   0       1      0.0000  0.0000  0.0000
   8       0   1  -1     0   0  -1     1   0  -1       1      0.0000  0.0000  0.0000
   9      -1   0   1    -1   1   0    -1   0   0       1      0.0000  0.0000  0.0000
  10       0  -1   0     1  -1   0     0  -1   1       1      0.0000  0.0000  0.0000
  11       1   0  -1     0   0  -1     0   1  -1       1      0.0000  0.0000  0.0000
  12       0   1   0     0   0   1     1   0   0       1      0.0000  0.0000  0.0000
  13       1   0  -1     0   1  -1     0   0  -1       1      0.0000  0.0000  0.0000
  14       0  -1   0     0  -1   1     1  -1   0       1      0.0000  0.0000  0.0000
  15      -1   0   1    -1   0   0    -1   1   0       1      0.0000  0.0000  0.0000
  16       0   1   0     1   0   0     0   0   1       1      0.0000  0.0000  0.0000
  17       0   0  -1     0   1  -1     1   0  -1       1      0.0000  0.0000  0.0000
  18       1  -1   0     0  -1   1     0  -1   0       1      0.0000  0.0000  0.0000
  19       0   0   1     1   0   0     0   1   0       1      0.0000  0.0000  0.0000
  20      -1   1   0    -1   0   0    -1   0   1       1      0.0000  0.0000  0.0000
  21       0   0   1     0   1   0     1   0   0       1      0.0000  0.0000  0.0000
  22       1  -1   0     0  -1   0     0  -1   1       1      0.0000  0.0000  0.0000
  23       0   0  -1     1   0  -1     0   1  -1       1      0.0000  0.0000  0.0000
  24      -1   1   0    -1   0   1    -1   0   0       1      0.0000  0.0000  0.0000

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
 symspgr : optical characteristics = isotropic
 ingeo : angdeg(1:3)=   60.00000000   60.00000000   60.00000000
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart
  symfind : exit, nsym=           4
    symrel matrices, symafm and tnons are :
   1       1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
   2      -1   0   0    -1   0   1    -1   1   0       1      0.0000  0.0000  0.0000
   3      -1   0   0    -1   1   0    -1   0   1       1      0.0000  0.0000  0.0000
   4       1   0   0     0   0   1     0   1   0       1      0.0000  0.0000  0.0000

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)

--- !COMMENT
src_file: symbrav.F90
src_line: 201
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  7, is more symmetric
    than the real one, iholohedry=  3, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is oI (body-centered orthorhombic)
 symspgr : spgroup=  44  Im m 2   (=C2v^20)
 ingeo : angdeg(1:3)=   60.00000000   60.00000000   60.00000000
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart
  symfind : exit, nsym=           4
    symrel matrices, symafm and tnons are :
   1       1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
   2      -1   0   0    -1   0   1    -1   1   0       1      0.0000  0.0000  0.0000
   3      -1   0   0    -1   1   0    -1   0   1       1      0.0000  0.0000  0.0000
   4       1   0   0     0   0   1     0   1   0       1      0.0000  0.0000  0.0000

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)

--- !COMMENT
src_file: symbrav.F90
src_line: 201
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  7, is more symmetric
    than the real one, iholohedry=  3, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is oI (body-centered orthorhombic)
 symspgr : spgroup=  44  Im m 2   (=C2v^20)
 ingeo : angdeg(1:3)=   60.00000000   60.00000000   60.00000000

--- !ERROR
src_file: m_dtset.F90
src_line: 278
mpi_rank: 0
message: |
    Initialization of occ, with occopt=   1
    There are not enough bands to get charge balance right
    Action: modify input file ... 
    (check the pseudopotential charges, the variable charge,
    and the declared number of bands, nband)
...

Rank 225 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 225

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 257 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 257

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 285 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 285

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 54 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 54

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 46 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 46

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 44 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 44

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 142 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 142

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 481 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 481

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 282 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 282

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 92 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 92

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 411 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 411

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 354 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 354

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 189 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 189

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 156 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 156

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 179 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 179

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 435 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 435

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 510 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 510

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 202 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 202

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 74 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 74

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 395 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 395

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 187 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 187

Program received signal SIGABRT: Process abort signal.
Rank 138 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 138

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 488 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 488

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 326 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 326

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 294 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 294

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 449 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 449

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:

 leave_new: decision taken to exit ...
Rank 70 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 70

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 409 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 409

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 165 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 165

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 56 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 56

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 150 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 150

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 15 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 15

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 508 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 508

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 336 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 336

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 262 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 262

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 303 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 303

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 233 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 233

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 462 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 462

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 72 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 72

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 413 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 413

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 367 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 367

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 177 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 177

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 136 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 136

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 102 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 102

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 6 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 6

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 496 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 496

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 348 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 348

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 287 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 287

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 307 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 307

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 237 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 237

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 450 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 450

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 218 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 218

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 68 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 68

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 387 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 387

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 361 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 361

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:

Backtrace for this error:
Rank 158 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 158

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 109 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 109

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 11 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 11

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 504 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 504

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 328 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 328

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 283 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 283

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 290 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 290

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 249 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 249

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 479 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 479

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 199 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 199

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 82 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 82

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 389 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 389

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 383 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 383

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 162 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 162

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 139 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 139

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 98 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 98

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 17 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 17

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 505 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 505

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 342 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 342

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 256 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 256

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 291 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 291

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 254 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 254

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 470 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 470

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 201 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 201

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 66 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 66

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 403 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 403

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 355 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 355

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 175 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 175

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 129 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 129

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 100 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 100

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 16 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 16

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 511 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 511

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 344 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 344

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 258 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 258

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 318 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 318

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 250 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 250

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 454 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 454

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 204 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 204

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 75 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 75

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 399 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 399

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 173 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 173

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 32 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 32

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 131 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 131

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 103 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 103

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 27 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 27

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 500 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 500

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 340 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 340

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 227 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 227

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 466 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 466

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 205 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 205

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 94 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 94

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 407 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 407

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 169 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 169

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 144 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 144

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 108 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 108

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 29 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 29

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 495 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 495

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 325 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 325

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 255 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 255

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 448 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 448

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 195 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 195

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 73 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 73

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 385 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 385

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 167 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 167

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 42 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 42

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 130 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 130

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 112 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 112

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 30 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 30

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 498 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 498

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 346 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 346

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 264 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 264

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 231 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 231

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 452 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 452

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 219 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 219

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 90 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 90

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 181 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 181

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 447 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 447
Rank 55 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 55

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 134 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 134

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 114 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 114

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 22 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 22

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 482 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 482

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 337 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 337

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 453 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 453

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 220 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 220

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 93 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 93

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 390 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 390

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 161 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 161

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 422 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 422

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 33 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 33

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 140 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 140

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 118 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 118

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 21 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 21

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 480 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 480

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 324 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 324

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 461 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 461

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 221 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 221

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 69 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 69

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 163 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 163

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 426 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 426

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 35 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 35

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 146 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 146

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 122 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 122

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 9 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 9

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 503 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 503

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 349 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 349

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 469 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 469

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 208 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 208

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 78 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 78

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 164 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 164

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 439 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 439

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 39 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 39

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 152 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 152

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 124 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 124

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 483 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 483

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 266 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 266

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 301 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 301

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 473 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 473

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 213 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 213

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 84 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 84

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 405 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 405

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 178 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 178

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 41 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 41

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 132 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 132

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 127 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 127

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 491 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 491

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 327 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 327

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 265 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 265

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 312 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 312

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 451 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 451

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 214 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 214

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 76 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 76

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 402 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 402

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 362 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 362

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 183 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 183

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 427 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 427

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 43 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 43

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 148 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 148

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 99 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 99

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 494 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 494

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 267 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 267

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 297 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 297

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 456 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 456

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 217 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 217

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 95 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 95

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 392 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 392

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 368 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 368

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 185 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 185

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 442 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 442

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 47 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 47

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 133 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 133

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 104 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 104

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 497 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 497

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 269 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 269

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 313 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 313

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 242 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 242

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 460 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 460

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 203 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 203

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 88 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 88

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 404 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 404

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 371 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 371

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 191 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 191

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 446 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 446

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 49 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 49

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 135 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 135

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 105 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 105

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 20 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 20

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 507 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 507

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 275 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 275

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 292 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 292

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 224 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 224

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 468 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 468

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 194 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 194

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 80 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 80

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 410 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 410

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 380 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 380

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 171 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 171

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 419 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 419

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 59 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 59

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 154 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 154

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 107 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 107

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 499 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 499

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 277 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 277

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 314 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 314

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 230 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 230

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 474 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 474

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 86 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 86

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 400 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 400

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 353 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 353

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 180 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 180

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 437 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 437

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 61 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 61

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 153 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 153

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 119 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 119

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 7 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 7

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 509 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 509

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 261 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 261

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 304 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 304

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 246 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 246

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 478 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 478

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 85 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 85

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 358 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 358

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 170 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 170

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 420 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 420

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 45 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 45

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 159 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 159

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 115 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 115

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 351 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 351

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 263 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 263

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 316 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 316

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 228 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 228

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 463 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 463

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 210 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 210

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 65 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 65

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 391 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 391

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 377 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 377

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 176 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 176

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 430 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 430

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 51 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 51

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 157 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 157

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 120 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 120

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 5 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 5

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 506 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 506

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 345 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 345

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 268 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 268

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 300 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 300

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 239 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 239

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 467 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 467

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 216 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 216

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 77 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 77

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 415 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 415

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 352 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 352

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 166 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 166

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 445 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 445

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 53 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 53

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 143 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 143

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 121 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 121

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 18 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 18

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 485 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 485

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 320 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 320

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 276 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 276

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 288 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 288

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 244 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 244

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 476 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 476

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 89 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 89

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 408 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 408

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 379 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 379

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 190 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 190

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 429 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 429

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 57 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 57

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 155 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 155

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 125 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 125

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 487 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 487

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 259 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 259

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 295 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 295

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 238 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 238

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 477 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 477

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 67 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 67

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 388 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 388

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 382 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 382

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 182 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 182

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 433 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 433

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 38 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 38

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 141 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 141

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 106 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 106

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 0 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 0

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 270 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 270

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 305 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 305

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 243 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 243

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 471 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 471

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 71 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 71

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 384 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 384

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 370 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 370

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 186 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 186

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 418 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 418

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 63 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 63

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 151 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 151

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 116 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 116

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 3 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 3

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 284 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 284

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 309 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 309

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 245 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 245

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 459 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 459

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 79 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 79

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 394 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 394

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 374 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 374

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 160 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 160

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 438 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 438

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 37 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 37

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 147 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 147

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 126 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 126

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 1 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 1

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 286 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 286

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 317 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 317

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 234 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 234

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 91 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 91

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 412 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 412

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 356 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 356

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 184 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 184

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 416 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 416

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 48 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 48

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 137 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 137

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 101 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 101

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 25 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 25

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 484 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 484

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 332 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 332

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 281 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 281

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 299 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 299

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 241 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 241

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 207 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 207

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 87 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 87

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 393 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 393

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 365 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 365

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 174 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 174

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 436 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 436

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 52 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 52

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 145 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 145

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 110 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 110

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 26 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 26

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 490 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 490

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 334 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 334

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 279 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 279

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 308 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 308

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 251 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 251

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 197 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 197

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 81 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 81

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 396 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 396

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 376 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 376

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 168 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 168

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 434 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 434

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 36 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 36

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 149 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 149

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 111 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 111

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 4 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 4

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 501 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 501

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 343 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 343

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 278 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 278

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 311 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 311

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 253 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 253

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 198 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 198

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 83 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 83

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 398 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 398

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 378 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 378

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 172 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 172

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 424 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 424

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 40 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 40

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 128 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 128

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 113 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 113

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 24 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 24

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 486 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 486

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 331 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 331

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 280 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 280

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 319 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 319

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 248 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 248

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 209 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 209

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 64 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 64

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 406 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 406

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 357 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 357

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 188 [Wed Aug  1 08:11:37 2018] [c3-0c2s3n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 188

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 425 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 425

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 58 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 58

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 97 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 97

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 28 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 28

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 339 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 339

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 260 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 260

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 306 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 306

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 226 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 226

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 196 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 196

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 401 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 401

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 359 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 359

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 441 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 441

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 34 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 34

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 123 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 123

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 8 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 8

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 335 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 335

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 271 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 271

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 296 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 296

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 247 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 247

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 222 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 222

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 397 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 397

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 375 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 375

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 423 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 423

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 50 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 50

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 117 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 117

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 31 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 31

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 341 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 341

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 273 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 273

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 302 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 302

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 252 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 252

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 192 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 192

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 414 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 414

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 369 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 369

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 431 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 431

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 62 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 62

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 96 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 96

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 10 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 10

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 347 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 347

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 272 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 272

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 298 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 298

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 236 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 236

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 200 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 200

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 386 [Wed Aug  1 08:11:37 2018] [c7-0c2s4n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 386

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 364 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 364

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 443 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 443

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 60 [Wed Aug  1 08:11:37 2018] [c3-0c2s2n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 60

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 14 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 14

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 321 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 321

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 274 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 274

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 289 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 289

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 240 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 240

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 206 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 206

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 366 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 366

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 417 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 417

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 2 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 2

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 492 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 492

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 322 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 322

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 293 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 293

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 229 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 229

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 458 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 458

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 223 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 223

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 372 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 372

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 444 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 444

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 12 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 12

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 323 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 323

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 315 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 315

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 232 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 232

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 464 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 464

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 215 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 215

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 373 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 373

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 421 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 421

Program received signal SIGABRT: Process abort signal.
Rank 13 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 13

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 502 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 502

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 329 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 329

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 235 [Wed Aug  1 08:11:37 2018] [c3-0c2s6n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 235

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 472 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 472

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 193 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 193

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 381 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 381

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 432 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 432

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 19 [Wed Aug  1 08:11:37 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 19

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 330 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 330

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 310 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 310

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 475 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 475

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 211 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 211

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 363 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 363

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:

Backtrace for this error:
Rank 489 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 489

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 338 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 338

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 457 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 457

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 212 [Wed Aug  1 08:11:37 2018] [c3-0c2s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 212

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 360 [Wed Aug  1 08:11:37 2018] [c5-0c2s15n3] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 360

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 428 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 428

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 493 [Wed Aug  1 08:11:37 2018] [c10-0c0s5n0] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 493

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 350 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 350

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 455 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 455

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 440 [Wed Aug  1 08:11:37 2018] [c7-0c2s15n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 440

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 465 [Wed Aug  1 08:11:37 2018] [c9-0c0s15n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 465

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
Rank 333 [Wed Aug  1 08:11:37 2018] [c3-0c2s8n2] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 333

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
Rank 23 [Wed Aug  1 08:11:38 2018] [c3-0c1s13n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 23

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#0  0x20ee444f in ???
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/nptl/../sysdeps/unix/sysv/linux/x86_64/sigaction.c:0
#1  0x244e176b in raise
	at ../sysdeps/unix/sysv/linux/pt-raise.c:36
#2  0x245662f9 in abort
	at /home/abuild/rpmbuild/BUILD/glibc-2.22/stdlib/abort.c:78
#3  0x24368e31 in ???
#4  0x2432e7fa in ???
#5  0x20ee5624 in ???
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#6  0x20ebfafd in __m_xmpi_MOD_xmpi_abort
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/12_hide_mpi/m_xmpi.F90:822
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#7  0x20e9bee8 in __m_errors_MOD_msg_hndl
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/16_hideleave/m_errors.F90:933
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#8  0x20a50e3b in __m_dtset_MOD_dtset_chkneu
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/54_abiutil/m_dtset.F90:278
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#9  0x20972b81 in invars2_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2.F90:2774
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
#10  0x2097f37e in invars2m_
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/invars2m.F90:111
#11  0x20917e13 in __m_ab7_invars_MOD_ab7_invars_load
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/57_iovars/m_ab7_invars_f90.F90:787
#12  0x200134e1 in abinit
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:294
#13  0x20012a3c in main
	at /tmp/abinit.8.4.4-2017-09-22.1506134574.gnu.haswell.build.mQQEL/abinit-8.4.4/src/98_main/abinit.F90:94
srun: error: nid00716: tasks 128-150,152,154-159: Aborted
srun: Terminating job step 13957962.0
srun: error: nid00714: tasks 64-67,69-70,72-85,87,89-93,95: Aborted
srun: error: nid00724: tasks 192-216,218,220-223: Aborted
srun: error: nid00736: tasks 288-292,294-308,310-315,317,319: Aborted
srun: error: nid00712: tasks 32-51,53-55,57-60,62-63: Aborted
srun: error: nid01940: tasks 480-506,508,510-511: Aborted
srun: error: nid01533: tasks 416,422-423,425-433,435-438,441,443,447: Aborted
srun: error: nid00718: tasks 160-188,190-191: Aborted
srun: error: nid00738: tasks 320,322,324,326-340,342,344,346-348,351: Aborted
srun: error: nid01151: tasks 352-361,363-373,375-376,382-383: Aborted
srun: error: nid00730: tasks 256,260,262,264-274,278,286-287: Aborted
srun: error: nid01790: tasks 448-450,452-466,468-470,474-476,478-479: Aborted
srun: error: nid00715: tasks 96-117,119-122,124,126-127: Aborted
srun: error: nid00738: tasks 321,323,341,345,349-350: Aborted
srun: error: nid00730: tasks 257-259,261,275-277,279-285: Aborted
srun: error: nid00718: task 189: Aborted
srun: error: nid01151: tasks 362,374,377-381: Aborted
srun: error: nid01533: tasks 417-421,424,434,439-440,442,444-446: Aborted
srun: error: nid01489: tasks 384-415: Aborted
srun: error: nid00712: tasks 52,56,61: Aborted
srun: error: nid00716: tasks 151,153: Aborted
srun: error: nid00728: tasks 224-255: Aborted
srun: error: nid00714: tasks 68,71,86,88,94: Aborted
srun: error: nid01940: tasks 507,509: Aborted
srun: error: nid00736: tasks 293,309,316,318: Aborted
srun: error: nid00724: tasks 217,219: Aborted
srun: error: nid01790: tasks 451,467,471-473,477: Aborted
srun: error: nid00693: tasks 0-31: Aborted
srun: error: nid00715: tasks 118,123,125: Aborted
srun: error: nid00730: task 263: Aborted
srun: error: nid00738: tasks 325,343: Aborted
