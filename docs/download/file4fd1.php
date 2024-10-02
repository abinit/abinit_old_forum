  ABINIT 
  
  Give name for formatted input file: 
ne1.in
  Give name for formatted output file:
ne1.out
  Give root name for generic input files:
ne1_in
  Give root name for generic output files:
ne1_out
  Give root name for generic temporary files:
ne1_tmp

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

.Starting date : Sat  8 Aug 2015.
- ( at 12h18 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.10.4
  Build target  : x86_64_linux_gnu4.8
  Build date    : 20150808

 === Compiler Suite === 
  C compiler       : gnu4.8
  C++ compiler     : gnu4.8
  Fortran compiler : gnu4.8
  CFLAGS           : -m64 -g -O2 -mtune=native -march=native
  CXXFLAGS         : -m64 -g -O2 -mtune=native -march=native
  FCFLAGS          : -m64 -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown

 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : fftw3
  LINALG flavor : netlib-fallback
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf-fallback+etsf_io-fallback+fox-fallback

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
 
           HAVE_DFT_BIGDFT            HAVE_DFT_LIBXC        HAVE_DFT_WANNIER90
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC         HAVE_FC_BACKTRACE
 
  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS
 
           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV          HAVE_FC_INT_QUAD
 
             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES
 
        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED
 
         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM                  HAVE_FFT
 
            HAVE_FFT_FFTW3              HAVE_FFT_MPI           HAVE_FFT_SERIAL
 
          HAVE_FORTRAN2003               HAVE_GW_DPC        HAVE_LIBPAW_ABINIT
 
                  HAVE_MPI                 HAVE_MPI2       HAVE_MPI_IALLREDUCE
 
        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV               HAVE_MPI_IO
 
 HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX                HAVE_TIMER
 
         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL
 
         HAVE_TRIO_ETSF_IO             HAVE_TRIO_FOX          HAVE_TRIO_NETCDF
 
              USE_MACROAVE                                                      
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> ne1.in
- output file    -> ne1.out
- root for input  files -> ne1_in
- root for output files -> ne1_out

-instrng :   164 lines of input have been read from file ne1.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 10-Ne.GGA.fhi
  read the values zionpsp=  8.0 , pspcod=   6 , lmax=   3
nproj =      1     1     1     1
nprojso =      0     0     0

 inpspheads: deduce mpsang  =   4, n1xccc  =   0.

 invars1m : enter jdtset=1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cP (primitive cubic)

 symlatt : the Bravais lattice is cP (primitive cubic)

--- !COMMENT
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  7, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
src_file: symbrav.F90
src_line: 201
...


 symlatt : the Bravais lattice is hR (rhombohedral)

--- !COMMENT
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  5, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
src_file: symbrav.F90
src_line: 210
...


 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)

--- !COMMENT
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  2, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
src_file: symbrav.F90
src_line: 210
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   1  P1   (=C1^1)
       Simple Lattice Grid

 invars1m : enter jdtset=2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cP (primitive cubic)

 symlatt : the Bravais lattice is cP (primitive cubic)

--- !COMMENT
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  7, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
src_file: symbrav.F90
src_line: 201
...


 symlatt : the Bravais lattice is hR (rhombohedral)

--- !COMMENT
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  5, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
src_file: symbrav.F90
src_line: 210
...


 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)

--- !COMMENT
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  2, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
src_file: symbrav.F90
src_line: 210
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   1  P1   (=C1^1)
       Simple Lattice Grid

 invars1m : enter jdtset=3
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cP (primitive cubic)

 symlatt : the Bravais lattice is cP (primitive cubic)

--- !COMMENT
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  7, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
src_file: symbrav.F90
src_line: 201
...


 symlatt : the Bravais lattice is hR (rhombohedral)

--- !COMMENT
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  5, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
src_file: symbrav.F90
src_line: 210
...


 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)

--- !COMMENT
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  2, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
src_file: symbrav.F90
src_line: 210
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   1  P1   (=C1^1)
       Simple Lattice Grid

 invars1m : enter jdtset=4
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cP (primitive cubic)

 symlatt : the Bravais lattice is cP (primitive cubic)

--- !COMMENT
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  7, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
src_file: symbrav.F90
src_line: 201
...


 symlatt : the Bravais lattice is hR (rhombohedral)

--- !COMMENT
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  5, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
src_file: symbrav.F90
src_line: 210
...


 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)

--- !COMMENT
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  2, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
src_file: symbrav.F90
src_line: 210
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   1  P1   (=C1^1)
       Simple Lattice Grid

 invars1m : enter jdtset=5
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cP (primitive cubic)

 symlatt : the Bravais lattice is cP (primitive cubic)

--- !COMMENT
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  7, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
src_file: symbrav.F90
src_line: 201
...


 symlatt : the Bravais lattice is hR (rhombohedral)

--- !COMMENT
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  5, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
src_file: symbrav.F90
src_line: 210
...


 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)

--- !COMMENT
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  2, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
src_file: symbrav.F90
src_line: 210
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   1  P1   (=C1^1)
       Simple Lattice Grid
       Simple Lattice Grid
  dtset%nelect=   512.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    3
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
  2.00  2.00  2.00  2.00
       Simple Lattice Grid
  dtset%nelect=   512.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    3
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
  2.00  2.00  2.00  2.00
       Simple Lattice Grid
  dtset%nelect=   512.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    3
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
  2.00  2.00  2.00  2.00
       Simple Lattice Grid
  dtset%nelect=   512.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    3
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
  2.00  2.00  2.00  2.00
       Simple Lattice Grid
  dtset%nelect=   512.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    3
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
  2.00  2.00  2.00  2.00
 getmpw sequential formula gave:   126938

 Computing all possible proc distrib for this input with nproc less than 8
     npimage|       npkpt|    npspinor|       npfft|      npband|     bandpp |       nproc|      weight|
   1 ->    1|   1 ->    4|   1 ->    1|   1 ->    8|   1 ->    8|   1 ->   26|   2 ->    8|   1 ->    8|
           1|           4|           1|           2|           1|           1|           8|       7.24 |
           1|           4|           1|           1|           2|           1|           8|       7.24 |
           1|           2|           1|           4|           1|           1|           8|       6.72 |
           1|           2|           1|           2|           2|           1|           8|       6.72 |
           1|           2|           1|           1|           4|           1|           8|       6.72 |
npfft, npband, npspinor and npkpt:     2    1    1    4
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 4, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 4, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 4, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  3.000000E+01 best grid ngfft=     128     128     128
       max ecut=  3.160483E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   128  128  128
  Augmented FFT divisions ...................   129  129  128
  FFT algorithm .............................   312
  FFT cache size ............................    16
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 getmpw: optimal value of mpw=   63497
 getmpw sequential formula gave:   126938

 Computing all possible proc distrib for this input with nproc less than 8
     npimage|       npkpt|    npspinor|       npfft|      npband|     bandpp |       nproc|      weight|
   1 ->    1|   1 ->    4|   1 ->    1|   1 ->    8|   1 ->    8|   1 ->   26|   2 ->    8|   1 ->    8|
           1|           4|           1|           2|           1|           1|           8|       7.24 |
           1|           4|           1|           1|           2|           1|           8|       7.24 |
           1|           2|           1|           4|           1|           1|           8|       6.72 |
           1|           2|           1|           2|           2|           1|           8|       6.72 |
           1|           2|           1|           1|           4|           1|           8|       6.72 |
npfft, npband, npspinor and npkpt:     2    1    1    4
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 4, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 4, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 4, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  3.000000E+01 best grid ngfft=     128     128     128
       max ecut=  3.160483E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   128  128  128
  Augmented FFT divisions ...................   129  129  128
  FFT algorithm .............................   312
  FFT cache size ............................    16
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 getmpw: optimal value of mpw=   63497

 Computing all possible proc distrib for this input with nproc less than 8
      nppert|       npkpt|       nproc|      weight|
   1 ->    1|   3 ->    8|   2 ->    8|   1 ->    8|
           1|           8|           8|       7.77 |
           1|           7|           7|       4.79 |
           1|           6|           6|       4.56 |
           1|           5|           5|       4.28 |
           1|           4|           4|       3.91 |
npfft, npband, npspinor and npkpt:     1    1    1    8
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 4, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 4, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 4, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  3.000000E+01 best grid ngfft=     128     128     128
       max ecut=  3.160483E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   128  128  128
  Augmented FFT divisions ...................   129  129  128
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=  126963
 getmpw: optimal value of mpw=  126963

 Computing all possible proc distrib for this input with nproc less than 8
      nppert|       npkpt|       nproc|      weight|
   1 ->    1|   3 ->    8|   2 ->    8|   1 ->    8|
           1|           8|           8|       7.77 |
           1|           7|           7|       4.79 |
           1|           6|           6|       4.56 |
           1|           5|           5|       4.28 |
           1|           4|           4|       3.91 |
npfft, npband, npspinor and npkpt:     1    1    1    8
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 4, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 4, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 4, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  3.000000E+01 best grid ngfft=     128     128     128
       max ecut=  3.160483E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   128  128  128
  Augmented FFT divisions ...................   129  129  128
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=  126963
 getmpw: optimal value of mpw=  126963

 Computing all possible proc distrib for this input with nproc less than 8
      nppert|       npkpt|       nproc|      weight|
   1 ->    1|   3 ->    8|   2 ->    8|   1 ->    8|
           1|           8|           8|       7.77 |
           1|           7|           7|       4.79 |
           1|           6|           6|       4.56 |
           1|           5|           5|       4.28 |
           1|           4|           4|       3.91 |
npfft, npband, npspinor and npkpt:     1    1    1    8
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 4, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 4, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 4, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  3.000000E+01 best grid ngfft=     128     128     128
       max ecut=  3.160483E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   128  128  128
  Augmented FFT divisions ...................   129  129  128
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=  126963
 getmpw: optimal value of mpw=  126963

 DATASET    1 : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         3 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =       256  mffmem =         1
P  mgfft =       128   mkmem =         1 mpssoang=         4     mpw =     63497
  mqgrid =      6236   natom =        64    nfft =   1048576    nkpt =         4
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                     493.193 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :   1984.283 Mbytes ; DEN or POT disk file :      8.002 Mbytes.
================================================================================

 Biggest array : cg(disk), with    248.0372 MBytes.
 memana : allocated an array of    248.037 Mbytes, for testing purposes.
 memana : allocated     493.193 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    2 : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =       256  mffmem =         1
P  mgfft =       128   mkmem =         1 mpssoang=         4     mpw =     63497
  mqgrid =      6236   natom =        64    nfft =   1048576    nkpt =         4
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                     461.193 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :   1984.283 Mbytes ; DEN or POT disk file :      8.002 Mbytes.
================================================================================

 Biggest array : cg(disk), with    248.0372 MBytes.
 memana : allocated an array of    248.037 Mbytes, for testing purposes.
 memana : allocated     461.193 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    3 : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3 (RF).
   intxc =         0    iscf =        -3 xclevel =         2  lmnmax =         4
   lnmax =         4   mband =       256  mffmem =         1   mgfft =       128
P  mkmem =         1  mkqmem =         1  mk1mem =         1 mpssoang=         4
     mpw =    126963  mqgrid =      6236   natom =        64    nfft =   2097152
    nkpt =         4  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =         1  n1xccc =         0  ntypat =         1
  occopt =         3
================================================================================
P This job should need less than                    1957.822 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :   1983.799 Mbytes ; DEN or POT disk file :     16.002 Mbytes.
================================================================================

 Biggest array : cg(disk), with    495.9512 MBytes.
 memana : allocated an array of    495.951 Mbytes, for testing purposes.
 memana : allocated    1957.822 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    4 : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  4 (RF).
   intxc =         0    iscf =        -3 xclevel =         2  lmnmax =         4
   lnmax =         4   mband =       256  mffmem =         1   mgfft =       128
P  mkmem =         1  mkqmem =         1  mk1mem =         1 mpssoang=         4
     mpw =    126963  mqgrid =      6236   natom =        64    nfft =   2097152
    nkpt =         4  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =         1  n1xccc =         0  ntypat =         1
  occopt =         3
================================================================================
P This job should need less than                    1957.822 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :   1983.799 Mbytes ; DEN or POT disk file :     16.002 Mbytes.
================================================================================

 Biggest array : cg(disk), with    495.9512 MBytes.
 memana : allocated an array of    495.951 Mbytes, for testing purposes.
 memana : allocated    1957.822 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    5 : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  5 (RF).
   intxc =         0    iscf =        -3 xclevel =         2  lmnmax =         4
   lnmax =         4   mband =       256  mffmem =         1   mgfft =       128
P  mkmem =         1  mkqmem =         1  mk1mem =         1 mpssoang=         4
     mpw =    126963  mqgrid =      6236   natom =        64    nfft =   2097152
    nkpt =         4  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =         1  n1xccc =         0  ntypat =         1
  occopt =         3
================================================================================
P This job should need less than                    1957.822 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :   1983.799 Mbytes ; DEN or POT disk file :     16.002 Mbytes.
================================================================================

 Biggest array : cg(disk), with    495.9512 MBytes.
 memana : allocated an array of    495.951 Mbytes, for testing purposes.
 memana : allocated    1957.822 Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (ne1_out_OUT.nc)

        accesswff1          1
        accesswff2          1
        accesswff3          0
        accesswff4          0
        accesswff5          0
            acell      2.5289376569E+01  2.5289376569E+01  2.5289376569E+01 Bohr
              amu      2.01797000E+01
        autoparal           1
             ecut      3.00000000E+01 Hartree
           enunit           2
-          fftalg         312
      fft_opt_lob1          2
      fft_opt_lob2          2
      fft_opt_lob3          1
      fft_opt_lob4          1
      fft_opt_lob5          1
           getden1          0
           getden2          1
           getden3          0
           getden4          0
           getden5          0
           getwfk1          0
           getwfk2          1
           getwfk3          2
           getwfk4          2
           getwfk5          2
           iprcch1          6
           iprcch2          6
           iprcch3          2
           iprcch4          2
           iprcch5          2
             iscf1          3
             iscf2         -2
             iscf3         -3
             iscf4         -3
             iscf5         -3
              ixc          11
           jdtset        1    2    3    4    5
              kpt      2.50000000E-01  2.50000000E-01  2.50000000E-01
                      -2.50000000E-01  2.50000000E-01  2.50000000E-01
                       2.50000000E-01 -2.50000000E-01  2.50000000E-01
                      -2.50000000E-01 -2.50000000E-01  2.50000000E-01
         kptrlatt        2    0    0      0    2    0      0    0    2
          kptrlen      5.05787531E+01
P           mkmem           1
P          mkqmem           1
P          mk1mem           1
            natom          64
            nband         256
           nbdbuf1          0
           nbdbuf2          2
           nbdbuf3          2
           nbdbuf4          2
           nbdbuf5          2
           ndtset           5
            ngfft         128     128     128
             nkpt           4
-           npfft1          2
-           npfft2          2
-           npfft3          1
-           npfft4          1
-           npfft5          1
-           npkpt1          4
-           npkpt2          4
-           npkpt3          1
-           npkpt4          1
-           npkpt5          1
             nqpt1          0
             nqpt2          0
             nqpt3          1
             nqpt4          1
             nqpt5          1
            nstep         100
             nsym           1
           ntypat           1
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
                       2.000000  2.000000  2.000000  2.000000
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
                       2.000000  2.000000  2.000000  2.000000
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
                       2.000000  2.000000  2.000000  2.000000
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
                       2.000000  2.000000  2.000000  2.000000
           occopt           3
        optdriver1          0
        optdriver2          0
        optdriver3          1
        optdriver4          1
        optdriver5          1
           ortalg1         -2
           ortalg2         -2
           ortalg3          2
           ortalg4          2
           ortalg5          2
        paral_kgb1          1
        paral_kgb2          1
        paral_kgb3          0
        paral_kgb4          0
        paral_kgb5          0
           prtvol           1
            rfdir1          0       0       0
            rfdir2          0       0       0
            rfdir3          1       0       0
            rfdir4          0       1       0
            rfdir5          0       0       1
           rfelfd1          0
           rfelfd2          0
           rfelfd3          2
           rfelfd4          2
           rfelfd5          2
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           1
           toldfe1     1.00000000E-10 Hartree
           toldfe2     0.00000000E+00 Hartree
           toldfe3     0.00000000E+00 Hartree
           toldfe4     0.00000000E+00 Hartree
           toldfe5     0.00000000E+00 Hartree
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-22
           tolwfr3     1.00000000E-22
           tolwfr4     1.00000000E-22
           tolwfr5     1.00000000E-22
           tsmear      2.00000000E-04 Hartree
            typat      1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1
         wfoptalg1         14
         wfoptalg2         14
         wfoptalg3          0
         wfoptalg4          0
         wfoptalg5          0
              wtk        0.25000    0.25000    0.25000    0.25000
           xangst      2.7868539701E+00  1.9240741951E+00  6.0335747814E-01
                       7.5155363784E+00  8.3276924651E-01  2.8272070775E+00
                       5.1081919181E+00  5.4519137814E+00  3.5203683698E+00
                       9.2453186618E-01  2.8950414092E+00  3.1467019540E+00
                       2.1252174431E+00  4.7466632182E+00  1.2996691726E+01
                       7.2962746140E+00  5.4270837764E-01  1.2666800741E+01
                       8.2548555981E+00  6.1941779676E+00  1.3112730581E+01
                       9.0225265776E+00  3.2515196641E+00  3.3554171893E+00
                       8.4205567373E-01  7.9304572171E+00  1.3154039337E+01
                       2.6317147500E+00  6.7112025328E+00  1.8010007973E+00
                       8.8068146715E+00  9.7757049120E+00  5.0649069591E+00
                       1.2447713618E+01  1.1053362969E+01  3.0133380354E+00
                       3.8026522305E+00  9.7960987316E+00  1.6613959211E+00
                       8.1463639733E+00  1.2362727794E+01  9.0486819915E-01
                       1.1172947667E+01  1.0891146649E+01  8.2545714863E-01
                       9.3713073169E+00  9.6325002604E-01  4.3293450275E+00
                       2.0355398266E+00  2.5631888075E-02  1.2257130818E+01
                       4.0118438850E+00  1.4325752604E+00  6.3064640839E+00
                       6.2590539502E+00  1.2768269331E+01  4.5561801174E+00
                       3.8761867306E+00  1.2249329453E+01  9.1354878441E+00
                       1.1034202754E+01  4.7105546579E+00  4.3973371396E+00
                       1.9578813563E+00  7.3385735459E+00  6.9138586794E+00
                       8.7669656851E+00  3.4342626927E+00  8.4432227820E+00
                       1.0258456871E+01  7.6353883260E+00  2.9769523222E+00
                       1.0432173897E+00  9.9787433983E+00  3.7822283002E+00
                       6.5400367583E+00  9.0053552789E+00  3.0137700245E+00
                       7.6902835941E+00  9.9041409699E+00  7.1233818199E+00
                       1.1489771786E+01  9.5669271802E+00  4.9252067990E+00
                       2.8645773457E+00  1.2021093611E+01  4.3383319530E+00
                       4.0128608258E+00  7.2449037773E+00  5.1880008322E+00
                       8.4751115530E+00  1.2017959147E+01  6.3401055690E+00
                       1.0547880596E+01  1.2180073358E+01  4.0421191205E+00
                       2.0977892138E+00  4.4199135212E+00  8.9348021459E+00
                       5.6100031872E+00  3.0877556507E+00  6.7513993319E+00
                       8.2957814791E+00  4.3635381417E+00  1.1634319109E+01
                       1.3196695717E+01  5.8673941450E-01  1.0586892101E+01
                       2.7516365545E+00  1.0156753416E+01  6.9014600037E+00
                       5.0020430446E+00  4.9988784703E+00  8.1488226175E+00
                       1.0196126117E+01  6.2848528526E+00  8.7150323794E+00
                       1.5530436088E-01  1.3217080169E+01  4.8297736103E+00
                       4.5690273766E-01  1.0114342606E+01  6.0546565985E+00
                       7.2186541502E+00  7.2271412370E+00  5.7735963053E+00
                       6.3324382979E+00  7.3497589586E+00  7.9727218896E+00
                       1.2913497961E+01  7.1496853787E+00  6.9010090113E+00
                       5.3779666970E+00  1.0617708528E+01  7.5400375738E+00
                       5.9507402040E+00  9.1925785215E+00  1.2348834554E+01
                       6.6656232674E+00  1.3202008460E+01  7.9555899356E+00
                       1.1251130198E+01  1.1520912337E+01  7.4005372154E+00
                       1.1244096458E+01  2.9977464143E+00  5.1127488142E-01
                       2.3242189459E+00  2.6854466720E+00  1.0155756683E+01
                       8.4890039903E+00  1.1866711977E+01  1.1537951283E+01
                       9.4054751381E+00  2.8005887608E+00  1.0458169656E+01
                       7.7901363737E-02  3.4192807811E+00  1.1224996196E+01
                       4.2070178413E+00  5.2565464471E+00  1.0634267708E+01
                       8.3491390909E+00  7.0014512929E+00  1.0039659615E+01
                       1.2266987743E+01  7.0195455869E+00  9.8090472968E+00
                       9.4682774928E-01  1.1121900287E+01  1.0050848507E+01
                       5.5862214383E+00  6.2623563650E+00  1.5402334192E+00
                       1.0932215590E+01  8.8904697338E+00  1.0106453185E+01
                       1.0810101855E+01  6.9967934923E+00  6.9285148595E-01
                       1.2940008280E+01  1.2085727235E+01  1.2326291093E+01
                       5.7860374038E+00  1.1106723659E+01  8.3244712825E-01
                       7.5781145752E+00  8.7889295469E+00  1.0069182616E+00
                       1.2706844175E+01  9.7631924844E+00  1.2141918604E+01
            xcart      5.2663907758E+00  3.6359732881E+00  1.1401803939E+00
                       1.4202305497E+01  1.5737058078E+00  5.3426470974E+00
                       9.6530837595E+00  1.0302623947E+01  6.6525321057E+00
                       1.7471120282E+00  5.4708354067E+00  5.9464049150E+00
                       4.0160789403E+00  8.9698935275E+00  2.4560187996E+01
                       1.3787960811E+01  1.0255702038E+00  2.3936784379E+01
                       1.5599416347E+01  1.1705299977E+01  2.4779469652E+01
                       1.7050104258E+01  6.1444816809E+00  6.3408195493E+00
                       1.5912546120E+00  1.4986392249E+01  2.4857531888E+01
                       4.9732201374E+00  1.2682334809E+01  3.4033982721E+00
                       1.6642467832E+01  1.8473405040E+01  9.5712870412E+00
                       2.3522769720E+01  2.0887828859E+01  5.6943836328E+00
                       7.1859712943E+00  1.8511943773E+01  3.1395832891E+00
                       1.5394396888E+01  2.3362169787E+01  1.7099530827E+00
                       2.1113811187E+01  2.0581284439E+01  1.5598879453E+00
                       1.7709204336E+01  1.8202787467E+00  8.1812764367E+00
                       3.8466128048E+00  4.8437248731E-02  2.3162620420E+01
                       7.5812862305E+00  2.7071749070E+00  1.1917489985E+01
                       1.1827897817E+01  2.4128532226E+01  8.6099326340E+00
                       7.3249313607E+00  2.3147877978E+01  1.7263570116E+01
                       2.0851621300E+01  8.9016582374E+00  8.3097629078E+00
                       3.6998595641E+00  1.3867894208E+01  1.3065299426E+01
                       1.6567164161E+01  6.4898159577E+00  1.5955378737E+01
                       1.9385674031E+01  1.4428792854E+01  5.6256245997E+00
                       1.9713951635E+00  1.8857092173E+01  7.1473756594E+00
                       1.2358878372E+01  1.7017655206E+01  5.6951999738E+00
                       1.4532529877E+01  1.8716114015E+01  1.3461240780E+01
                       2.1712522004E+01  1.8078872304E+01  9.3072919979E+00
                       5.4132666699E+00  2.2716574742E+01  8.1982592646E+00
                       7.5832079702E+00  1.3690883998E+01  9.8039007501E+00
                       1.6015639781E+01  2.2710651464E+01  1.1981063179E+01
                       1.9932605608E+01  2.3017002925E+01  7.6384981342E+00
                       3.9642470986E+00  8.3524260860E+00  1.6884329107E+01
                       1.0601369628E+01  5.8350125451E+00  1.2758295751E+01
                       1.5676755054E+01  8.2458920583E+00  2.1985676860E+01
                       2.4938140764E+01  1.1087768048E+00  2.0006326670E+01
                       5.1998395053E+00  1.9193482356E+01  1.3041869324E+01
                       9.4524914593E+00  9.4465112804E+00  1.5399043053E+01
                       1.9267885978E+01  1.1876650677E+01  1.6469024436E+01
                       2.9348270930E-01  2.4976661795E+01  9.1269494073E+00
                       8.6342104355E-01  1.9113337540E+01  1.1441642800E+01
                       1.3641279392E+01  1.3657317662E+01  1.0910515819E+01
                       1.1966574136E+01  1.3889031574E+01  1.5066260905E+01
                       2.4402974564E+01  1.3510947302E+01  1.3041017072E+01
                       1.0162884209E+01  2.0064561276E+01  1.4248606046E+01
                       1.1245269273E+01  1.7371455861E+01  2.3335915367E+01
                       1.2596202480E+01  2.4948180393E+01  1.5033886204E+01
                       2.1261554760E+01  2.1771369119E+01  1.3984988573E+01
                       2.1248262917E+01  5.6649197388E+00  9.6616950451E-01
                       4.3921372807E+00  5.0747587546E+00  1.9191598803E+01
                       1.6041892683E+01  2.2424835735E+01  2.1803568059E+01
                       1.7773772161E+01  5.2923457688E+00  1.9763076502E+01
                       1.4721224284E-01  6.4615042477E+00  2.1212168654E+01
                       7.9501115562E+00  9.9334331897E+00  2.0095853592E+01
                       1.5777586327E+01  1.3230825476E+01  1.8972207139E+01
                       2.3181247310E+01  1.3265018737E+01  1.8536413015E+01
                       1.7892451412E+00  2.1017345619E+01  1.8993351081E+01
                       1.0556428636E+01  1.1834138476E+01  2.9106193431E+00
                       2.0658893490E+01  1.6800552990E+01  1.9098428694E+01
                       2.0428131975E+01  1.3222023509E+01  1.3092995592E+00
                       2.4453071807E+01  2.2838714591E+01  2.3293314401E+01
                       1.0934026088E+01  2.0988665949E+01  1.5730970925E+00
                       1.4320561151E+01  1.6608669845E+01  1.9027997527E+00
                       2.4012455505E+01  1.8449759978E+01  2.2944900890E+01
             xred      2.0824518000E-01  1.4377473000E-01  4.5085350000E-02
                       5.6159176000E-01  6.2227940000E-02  2.1126053000E-01
                       3.8170509000E-01  4.0738940000E-01  2.6305639000E-01
                       6.9084820000E-02  2.1632939000E-01  2.3513450000E-01
                       1.5880498000E-01  3.5469018000E-01  9.7116621000E-01
                       5.4520762000E-01  4.0553400000E-02  9.4651540000E-01
                       6.1683673000E-01  4.6285443000E-01  9.7983711000E-01
                       6.7420026000E-01  2.4296691000E-01  2.5073056000E-01
                       6.2921860000E-02  5.9259635000E-01  9.8292387000E-01
                       1.9665254000E-01  5.0148863000E-01  1.3457818000E-01
                       6.5808138000E-01  7.3048084000E-01  3.7847066000E-01
                       9.3014431000E-01  8.2595270000E-01  2.2516900000E-01
                       2.8414980000E-01  7.3200475000E-01  1.2414633000E-01
                       6.0872979000E-01  9.2379382000E-01  6.7615470000E-02
                       8.3488856000E-01  8.1383123000E-01  6.1681550000E-02
                       7.0026259000E-01  7.1978000000E-02  3.2350645000E-01
                       1.5210390000E-01  1.9153200000E-03  9.1590318000E-01
                       2.9978146000E-01  1.0704791000E-01  4.7124491000E-01
                       4.6770223000E-01  9.5409755000E-01  3.4045650000E-01
                       2.8964460000E-01  9.1532023000E-01  6.8264119000E-01
                       8.2452097000E-01  3.5199200000E-01  3.2858710000E-01
                       1.4630094000E-01  5.4836837000E-01  5.1663193000E-01
                       6.5510370000E-01  2.5662222000E-01  6.3091230000E-01
                       7.6655405000E-01  5.7054759000E-01  2.2245011000E-01
                       7.7953490000E-02  7.4565271000E-01  2.8262364000E-01
                       4.8869842000E-01  6.7291715000E-01  2.2520128000E-01
                       5.7464959000E-01  7.4007811000E-01  5.3228836000E-01
                       8.5856296000E-01  7.1488011000E-01  3.6803169000E-01
                       2.1405299000E-01  8.9826551000E-01  3.2417799000E-01
                       2.9985745000E-01  5.4136898000E-01  3.8766874000E-01
                       6.3329516000E-01  8.9803129000E-01  4.7375874000E-01
                       7.8818098000E-01  9.1014513000E-01  3.0204375000E-01
                       1.5675543000E-01  3.3027410000E-01  6.6764513000E-01
                       4.1920249000E-01  2.3072979000E-01  5.0449230000E-01
                       6.1989488000E-01  3.2606150000E-01  8.6936413000E-01
                       9.8611133000E-01  4.3843580000E-02  7.9109608000E-01
                       2.0561359000E-01  7.5895435000E-01  5.1570545000E-01
                       3.7377321000E-01  3.7353674000E-01  6.0891351000E-01
                       7.6189644000E-01  4.6963003000E-01  6.5122303000E-01
                       1.1604980000E-02  9.8763454000E-01  3.6090053000E-01
                       3.4141650000E-02  7.5578524000E-01  4.5242882000E-01
                       5.3940750000E-01  5.4004169000E-01  4.3142684000E-01
                       4.7318581000E-01  5.4920419000E-01  5.9575454000E-01
                       9.6494963000E-01  5.3425387000E-01  5.1567175000E-01
                       4.0186377000E-01  7.9339881000E-01  5.6342259000E-01
                       4.4466376000E-01  6.8690724000E-01  9.2275566000E-01
                       4.9808276000E-01  9.8650832000E-01  5.9447437000E-01
                       8.4073068000E-01  8.6088991000E-01  5.5299855000E-01
                       8.4020509000E-01  2.2400393000E-01  3.8204560000E-02
                       1.7367519000E-01  2.0066761000E-01  7.5887987000E-01
                       6.3433326000E-01  8.8672948000E-01  8.6216313000E-01
                       7.0281575000E-01  2.0927150000E-01  7.8147741000E-01
                       5.8211100000E-03  2.5550271000E-01  8.3877784000E-01
                       3.1436566000E-01  3.9279075000E-01  7.9463618000E-01
                       6.2388198000E-01  5.2317721000E-01  7.5020462000E-01
                       9.1663973000E-01  5.2452929000E-01  7.3297232000E-01
                       7.0750860000E-02  8.3107409000E-01  7.5104070000E-01
                       4.1742542000E-01  4.6794900000E-01  1.1509257000E-01
                       8.1690007000E-01  6.6433243000E-01  7.5519571000E-01
                       8.0777523000E-01  5.2282916000E-01  5.1772710000E-02
                       9.6693059000E-01  9.0309520000E-01  9.2107112000E-01
                       4.3235649000E-01  8.2994003000E-01  6.2203870000E-02
                       5.6626786000E-01  6.5674493000E-01  7.5241070000E-02
                       9.4950761000E-01  7.2954586000E-01  9.0729405000E-01
            znucl       10.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.

 chkinp: Checking input parameters for consistency, jdtset=   3.

 chkinp: Checking input parameters for consistency, jdtset=   4.

 chkinp: Checking input parameters for consistency, jdtset=   5.
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
  MPI_WTICK ..................    9.9999999999999995E-007

================================================================================
== DATASET  1 ==================================================================
-   nproc =    8


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Unit cell volume ucvol=  1.6173886E+04 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 128 128 128
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.05280
 Relative gap for number of plane waves between process:     0.00
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is 10-Ne.GGA.fhi
- pspatm: opening atomic psp file    10-Ne.GGA.fhi
- neon, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
- 10.00000   8.00000     21003                znucl, zion, pspdat
    6   11    3    2       481   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    4.16167186
         --- l  ekb(1:nproj) -->
             0    2.478387
             1   -4.482703
             3   -2.439846
 pspatm: atomic psp has been read  and splines computed

   1.36369664E+05                                ecore*ucvol(ha*bohr**3)
 wfconv:   256 bands initialized randomly with npw= 63497, for ikpt=     1

_setup2: Arith. and geom. avg. npw (full set) are   63497.000   63497.000
 initro : for itypat=  1, take decay length=      0.3500,
 initro : indeed, coreel=      2.0000, nval=  8 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 128 128 128
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.05280

--- !WARNING
message: |
    Density went too small (lower than xc_denpos) at112806 points
    and was set to xc_denpos=  1.00E-14. Lowest was  -0.34E-12.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
src_file: mkdenpos.F90
src_line: 176
...


 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
--------------------------------------------------------------------------
mpirun noticed that process rank 3 with PID 19531 on node myu1404-Lenovo exited on signal 9 (Killed).
--------------------------------------------------------------------------
