  ABINIT 
  
  Give name for formatted input file: 
si_kpt_band_fft.in
  Give name for formatted output file:
all.out
  Give root name for generic input files:
alli
  Give root name for generic output files:
allo
  Give root name for generic temporary files:
all
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file all.out
-P-0000  already exists.
-P-0000  new name assigned:all.outA
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file all.outA
-P-0000  already exists.
-P-0000  new name assigned:all.outB
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file all.outB
-P-0000  already exists.
-P-0000  new name assigned:all.outC
-P-0000
-P-0000  leave_test : synchronization done...
-P-0002  leave_test : synchronization done...
-P-0001  leave_test : synchronization done...
-P-0003  leave_test : synchronization done...
-P-0004  leave_test : synchronization done...
-P-0005  leave_test : synchronization done...

.Version 6.0.2  of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel11.1 computer) 

.Copyright (C) 1998-2010 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Fri 26 Mar 2010.
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.0.2
  Build target  : x86_64_linux_intel11.1
  Build date    : 20100326
 
 === Compiler Suite === 
  C compiler       : gnu
  CFLAGS           :  -g  -O3 -fschedule-insns2 -march=nocona -mmmx -msse -msse2 -msse3 -mfpmath=sse
  C++ compiler     : gnu11.1
  CXXFLAGS         :  -g  -O3 -fschedule-insns2 -march=nocona -mmmx -msse -msse2 -msse3 -mfpmath=sse
  Fortran compiler : intel11.1
  FCFLAGS          :   -g  -extend-source -vec-report0
  FC_LDFLAGS       :     -static-libgcc -static-intel
 
 === Optimizations === 
  Debug level        : yes
  Optimization level : standard
  Architecture       : intel_xeon
 
 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes
 
 === Linear algebra === 
  Library type  : mkl
  Use ScaLAPACK : yes
 
 === Plug-ins === 
  BigDFT    : yes
  ETSF I/O  : yes
  LibXC     : yes
  FoX       : no
  NetCDF    : yes
  Wannier90 : yes
 
 === Experimental features === 
  Bindings            : no
  Error handlers      : no
  Exports             : no
  GW double-precision : no
  Macroave build      : yes
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                  FC_INTEL

              HAVE_FC_EXIT             HAVE_FC_FLUSH HAVE_FC_GET_ENVIRONMEN...

        HAVE_FC_LONG_LINES              HAVE_FC_NULL                  HAVE_MPI

                 HAVE_MPI2               HAVE_MPI_IO            HAVE_SCALAPACK

              HAVE_STDIO_H              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> si_kpt_band_fft.in
- output file    -> all.outC
- root for input  files -> alli
- root for output files -> allo

 instrng :    58 lines of input have been read
  invars0 : nimage, mxnimage =            1           1           1           1
           1           1           1           1           1           1
  invars0 : natom =            1           2           2           2           2
           2           2           2           2
  invars0 : mxnatom =            2

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /homes/jlow/abinit/abinit-6.0.2/tests/Psps_for_tests/14si.phoney_mod
  read the values zionpsp=  4.0 , pspcod=   5 , lmax=   2

 inpspheads : deduce mpsang  =   3, n1xccc  =   0.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  7, is more symmetric
  than the real one, iholohedry=  5, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symbrav : found invariant axis, jaxis= 12

 symlatt : the Bravais lattice is hR (rhombohedral)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symplanes : the symmetry operation no.   3 is a mirror plane
 symaxes : the symmetry operation no.   4 is a 2-axis
 symaxes : the symmetry operation no.   5 is a 3-axis
 symspgr : the symmetry operation no.   6 is a -3 axis
 symplanes : the symmetry operation no.   7 is a mirror plane
 symaxes : the symmetry operation no.   8 is a 2-axis
 symaxes : the symmetry operation no.   9 is a 3-axis
 symspgr : the symmetry operation no.  10 is a -3 axis
 symplanes : the symmetry operation no.  11 is a mirror plane
 symaxes : the symmetry operation no.  12 is a 2-axis
 symspgr : spgroup= 166  R-3 m   (=D3d^5)
 inkpts: Sum of    1 k point weights is    1.000000
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.

 WARNING in invars1m For dataset=   1  a possible choice for less than    0 processors is:
  nproc    npkpt    npband     npfft    bandpp    weight

 invars1m : enter jdtset=     2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  7, is more symmetric
  than the real one, iholohedry=  5, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symbrav : found invariant axis, jaxis= 12

 symlatt : the Bravais lattice is hR (rhombohedral)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symplanes : the symmetry operation no.   3 is a mirror plane
 symaxes : the symmetry operation no.   4 is a 2-axis
 symaxes : the symmetry operation no.   5 is a 3-axis
 symspgr : the symmetry operation no.   6 is a -3 axis
 symplanes : the symmetry operation no.   7 is a mirror plane
 symaxes : the symmetry operation no.   8 is a 2-axis
 symaxes : the symmetry operation no.   9 is a 3-axis
 symspgr : the symmetry operation no.  10 is a -3 axis
 symplanes : the symmetry operation no.  11 is a mirror plane
 symaxes : the symmetry operation no.  12 is a 2-axis
 symspgr : spgroup= 166  R-3 m   (=D3d^5)
 inkpts: Sum of    1 k point weights is    1.000000
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.

 WARNING in invars1m For dataset=   2  a possible choice for less than    0 processors is:
  nproc    npkpt    npband     npfft    bandpp    weight

 invars1m : enter jdtset=     3
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  7, is more symmetric
  than the real one, iholohedry=  5, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symbrav : found invariant axis, jaxis= 12

 symlatt : the Bravais lattice is hR (rhombohedral)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symplanes : the symmetry operation no.   3 is a mirror plane
 symaxes : the symmetry operation no.   4 is a 2-axis
 symaxes : the symmetry operation no.   5 is a 3-axis
 symspgr : the symmetry operation no.   6 is a -3 axis
 symplanes : the symmetry operation no.   7 is a mirror plane
 symaxes : the symmetry operation no.   8 is a 2-axis
 symaxes : the symmetry operation no.   9 is a 3-axis
 symspgr : the symmetry operation no.  10 is a -3 axis
 symplanes : the symmetry operation no.  11 is a mirror plane
 symaxes : the symmetry operation no.  12 is a 2-axis
 symspgr : spgroup= 166  R-3 m   (=D3d^5)
 getkgrid : length of smallest supercell vector (bohr)=    4.146400E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : after getkgrid, nkpt=           0
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=   30 and mkmem  =    30, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=   30 and mkqmem =    30, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=   30 and mk1mem =    30, ground state wf handled in core.

 WARNING in invars1m For dataset=   3  a possible choice for less than    0 processors is:
  nproc    npkpt    npband     npfft    bandpp    weight

 invars1m : enter jdtset=     4
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  7, is more symmetric
  than the real one, iholohedry=  5, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symbrav : found invariant axis, jaxis= 12

 symlatt : the Bravais lattice is hR (rhombohedral)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symplanes : the symmetry operation no.   3 is a mirror plane
 symaxes : the symmetry operation no.   4 is a 2-axis
 symaxes : the symmetry operation no.   5 is a 3-axis
 symspgr : the symmetry operation no.   6 is a -3 axis
 symplanes : the symmetry operation no.   7 is a mirror plane
 symaxes : the symmetry operation no.   8 is a 2-axis
 symaxes : the symmetry operation no.   9 is a 3-axis
 symspgr : the symmetry operation no.  10 is a -3 axis
 symplanes : the symmetry operation no.  11 is a mirror plane
 symaxes : the symmetry operation no.  12 is a 2-axis
 symspgr : spgroup= 166  R-3 m   (=D3d^5)
 getkgrid : length of smallest supercell vector (bohr)=    4.146400E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : after getkgrid, nkpt=           0
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=   30 and mkmem  =    30, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=   30 and mkqmem =    30, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=   30 and mk1mem =    30, ground state wf handled in core.

 WARNING in invars1m For dataset=   4  a possible choice for less than    0 processors is:
  nproc    npkpt    npband     npfft    bandpp    weight

 invars1m : enter jdtset=     5
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  7, is more symmetric
  than the real one, iholohedry=  5, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symbrav : found invariant axis, jaxis= 12

 symlatt : the Bravais lattice is hR (rhombohedral)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symplanes : the symmetry operation no.   3 is a mirror plane
 symaxes : the symmetry operation no.   4 is a 2-axis
 symaxes : the symmetry operation no.   5 is a 3-axis
 symspgr : the symmetry operation no.   6 is a -3 axis
 symplanes : the symmetry operation no.   7 is a mirror plane
 symaxes : the symmetry operation no.   8 is a 2-axis
 symaxes : the symmetry operation no.   9 is a 3-axis
 symspgr : the symmetry operation no.  10 is a -3 axis
 symplanes : the symmetry operation no.  11 is a mirror plane
 symaxes : the symmetry operation no.  12 is a 2-axis
 symspgr : spgroup= 166  R-3 m   (=D3d^5)
 inkpts: Sum of    1 k point weights is    1.000000
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.

 WARNING in invars1m For dataset=   5  a possible choice for less than    0 processors is:
  nproc    npkpt    npband     npfft    bandpp    weight

 invars1m : enter jdtset=     6
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  7, is more symmetric
  than the real one, iholohedry=  5, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symbrav : found invariant axis, jaxis= 12

 symlatt : the Bravais lattice is hR (rhombohedral)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symplanes : the symmetry operation no.   3 is a mirror plane
 symaxes : the symmetry operation no.   4 is a 2-axis
 symaxes : the symmetry operation no.   5 is a 3-axis
 symspgr : the symmetry operation no.   6 is a -3 axis
 symplanes : the symmetry operation no.   7 is a mirror plane
 symaxes : the symmetry operation no.   8 is a 2-axis
 symaxes : the symmetry operation no.   9 is a 3-axis
 symspgr : the symmetry operation no.  10 is a -3 axis
 symplanes : the symmetry operation no.  11 is a mirror plane
 symaxes : the symmetry operation no.  12 is a 2-axis
 symspgr : spgroup= 166  R-3 m   (=D3d^5)
 inkpts: Sum of    1 k point weights is    1.000000
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.

 WARNING in invars1m For dataset=   6  a possible choice for less than    0 processors is:
  nproc    npkpt    npband     npfft    bandpp    weight

 invars1m : enter jdtset=     7
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  7, is more symmetric
  than the real one, iholohedry=  5, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symbrav : found invariant axis, jaxis= 12

 symlatt : the Bravais lattice is hR (rhombohedral)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symplanes : the symmetry operation no.   3 is a mirror plane
 symaxes : the symmetry operation no.   4 is a 2-axis
 symaxes : the symmetry operation no.   5 is a 3-axis
 symspgr : the symmetry operation no.   6 is a -3 axis
 symplanes : the symmetry operation no.   7 is a mirror plane
 symaxes : the symmetry operation no.   8 is a 2-axis
 symaxes : the symmetry operation no.   9 is a 3-axis
 symspgr : the symmetry operation no.  10 is a -3 axis
 symplanes : the symmetry operation no.  11 is a mirror plane
 symaxes : the symmetry operation no.  12 is a 2-axis
 symspgr : spgroup= 166  R-3 m   (=D3d^5)
 getkgrid : length of smallest supercell vector (bohr)=    4.146400E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : after getkgrid, nkpt=           0
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=   30 and mkmem  =    30, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=   30 and mkqmem =    30, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=   30 and mk1mem =    30, ground state wf handled in core.

 WARNING in invars1m For dataset=   7  a possible choice for less than    0 processors is:
  nproc    npkpt    npband     npfft    bandpp    weight

 invars1m : enter jdtset=     8
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  7, is more symmetric
  than the real one, iholohedry=  5, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symbrav : found invariant axis, jaxis= 12

 symlatt : the Bravais lattice is hR (rhombohedral)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symplanes : the symmetry operation no.   3 is a mirror plane
 symaxes : the symmetry operation no.   4 is a 2-axis
 symaxes : the symmetry operation no.   5 is a 3-axis
 symspgr : the symmetry operation no.   6 is a -3 axis
 symplanes : the symmetry operation no.   7 is a mirror plane
 symaxes : the symmetry operation no.   8 is a 2-axis
 symaxes : the symmetry operation no.   9 is a 3-axis
 symspgr : the symmetry operation no.  10 is a -3 axis
 symplanes : the symmetry operation no.  11 is a mirror plane
 symaxes : the symmetry operation no.  12 is a 2-axis
 symspgr : spgroup= 166  R-3 m   (=D3d^5)
 getkgrid : length of smallest supercell vector (bohr)=    4.146400E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : after getkgrid, nkpt=           0
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=   30 and mkmem  =    30, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=   30 and mkqmem =    30, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=   30 and mk1mem =    30, ground state wf handled in core.

 WARNING in invars1m For dataset=   8  a possible choice for less than    0 processors is:
  nproc    npkpt    npband     npfft    bandpp    weight

 DATASET    1 : space group R-3 m (#166); Bravais hR (rhombohedral)
 inkpts: Sum of    1 k point weights is    1.000000
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0

 getng : WARNING -
  The second and third dimension of the FFT grid,    6    6  were imposed to be multiple of the number of processors for the FFT,    3
 For input ecut=  1.000000E+01 best grid ngfft=      24      24      24
       max ecut=  1.322634E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24   24
  Augmented FFT divisions ...................    25   25   24
  FFT algorithm .............................   401
  FFT cache size ............................    16
  FFT parallelization level .................     1
  Number of processors in my FFT group ......     3
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     8
  No of xy planes in G space treated by me ..     8
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=      73
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   4,
                      lmnmaxso=   8, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        12  mffmem =         1
P  mgfft =        24   mkmem =         1 mpssoang=         3     mpw =        73
  mqgrid =      3001   natom =         2    nfft =      4608    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =         0  ntypat =         1  occopt =         0
================================================================================
P This job should need less than                       2.132 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.042 Mbytes ; DEN or POT disk file :      0.037 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.5645 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.565 Mbytes, for testing purposes.
 memana : allocated       2.132 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group R-3 m (#166); Bravais hR (rhombohedral)
 inkpts: Sum of    1 k point weights is    1.000000
 chkneu : initialized the occupation numbers for occopt=    7
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0
 For input ecut=  1.000000E+01 best grid ngfft=      24      24      24
       max ecut=  1.322634E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24   24
  Augmented FFT divisions ...................    25   25   24
  FFT algorithm .............................   401
  FFT cache size ............................    16
  FFT parallelization level .................     1
  Number of processors in my FFT group ......     3
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     8
  No of xy planes in G space treated by me ..     8
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=      73
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   4,
                      lmnmaxso=   8, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        12  mffmem =         1
P  mgfft =        24   mkmem =         1 mpssoang=         3     mpw =        73
  mqgrid =      3001   natom =         2    nfft =      4608    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =         0  ntypat =         1  occopt =         7
================================================================================
P This job should need less than                       2.865 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.042 Mbytes ; DEN or POT disk file :      0.037 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.5645 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.565 Mbytes, for testing purposes.
 memana : allocated       2.865 Mbytes, for testing purposes.
 The job will continue.

 DATASET    3 : space group R-3 m (#166); Bravais hR (rhombohedral)
 getkgrid : length of smallest supercell vector (bohr)=    4.146400E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : after getkgrid, nkpt=          30
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0
 For input ecut=  1.000000E+01 best grid ngfft=      24      24      24
       max ecut=  1.322634E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24   24
  Augmented FFT divisions ...................    25   25   24
  FFT algorithm .............................   401
  FFT cache size ............................    16
  FFT parallelization level .................     1
  Number of processors in my FFT group ......     3
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     8
  No of xy planes in G space treated by me ..     8
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=      73
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   4,
                      lmnmaxso=   8, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        12  mffmem =         1
P  mgfft =        24   mkmem =        30 mpssoang=         3     mpw =        73
  mqgrid =      3001   natom =         2    nfft =      4608    nkpt =        30
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =         0  ntypat =         1  occopt =         0
================================================================================
P This job should need less than                       2.576 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      1.205 Mbytes ; DEN or POT disk file :      0.037 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.5645 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.565 Mbytes, for testing purposes.
 memana : allocated       2.576 Mbytes, for testing purposes.
 The job will continue.

 DATASET    4 : space group R-3 m (#166); Bravais hR (rhombohedral)
 getkgrid : length of smallest supercell vector (bohr)=    4.146400E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : after getkgrid, nkpt=          30
 chkneu : initialized the occupation numbers for occopt=    7
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0
 For input ecut=  1.000000E+01 best grid ngfft=      24      24      24
       max ecut=  1.322634E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24   24
  Augmented FFT divisions ...................    25   25   24
  FFT algorithm .............................   401
  FFT cache size ............................    16
  FFT parallelization level .................     1
  Number of processors in my FFT group ......     3
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     8
  No of xy planes in G space treated by me ..     8
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=      73
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   4,
                      lmnmaxso=   8, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  4.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        12  mffmem =         1
P  mgfft =        24   mkmem =        30 mpssoang=         3     mpw =        73
  mqgrid =      3001   natom =         2    nfft =      4608    nkpt =        30
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =         0  ntypat =         1  occopt =         7
================================================================================
P This job should need less than                       3.308 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      1.205 Mbytes ; DEN or POT disk file :      0.037 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.5645 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.565 Mbytes, for testing purposes.
 memana : allocated       3.308 Mbytes, for testing purposes.
 The job will continue.

 DATASET    5 : space group R-3 m (#166); Bravais hR (rhombohedral)
 inkpts: Sum of    1 k point weights is    1.000000
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0
 For input ecut=  1.000000E+01 best grid ngfft=      24      24      24
       max ecut=  1.322634E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24   24
  Augmented FFT divisions ...................    25   25   24
  FFT algorithm .............................   401
  FFT cache size ............................    16
  FFT parallelization level .................     1
  Number of processors in my FFT group ......     3
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     8
  No of xy planes in G space treated by me ..     8
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=      73
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   4,
                      lmnmaxso=   8, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  5.
   intxc =         0  ionmov =         3    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        12  mffmem =         1
P  mgfft =        24   mkmem =         1 mpssoang=         3     mpw =        73
  mqgrid =      3001   natom =         2    nfft =      4608    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =         0  ntypat =         1  occopt =         0
================================================================================
P This job should need less than                       2.132 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.042 Mbytes ; DEN or POT disk file :      0.037 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.5645 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.565 Mbytes, for testing purposes.
 memana : allocated       2.132 Mbytes, for testing purposes.
 The job will continue.

 DATASET    6 : space group R-3 m (#166); Bravais hR (rhombohedral)
 inkpts: Sum of    1 k point weights is    1.000000
 chkneu : initialized the occupation numbers for occopt=    7
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0
 For input ecut=  1.000000E+01 best grid ngfft=      24      24      24
       max ecut=  1.322634E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24   24
  Augmented FFT divisions ...................    25   25   24
  FFT algorithm .............................   401
  FFT cache size ............................    16
  FFT parallelization level .................     1
  Number of processors in my FFT group ......     3
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     8
  No of xy planes in G space treated by me ..     8
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=      73
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   4,
                      lmnmaxso=   8, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  6.
   intxc =         0  ionmov =         3    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        12  mffmem =         1
P  mgfft =        24   mkmem =         1 mpssoang=         3     mpw =        73
  mqgrid =      3001   natom =         2    nfft =      4608    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =         0  ntypat =         1  occopt =         7
================================================================================
P This job should need less than                       2.865 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.042 Mbytes ; DEN or POT disk file :      0.037 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.5645 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.565 Mbytes, for testing purposes.
 memana : allocated       2.865 Mbytes, for testing purposes.
 The job will continue.

 DATASET    7 : space group R-3 m (#166); Bravais hR (rhombohedral)
 getkgrid : length of smallest supercell vector (bohr)=    4.146400E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : after getkgrid, nkpt=          30
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0
 For input ecut=  1.000000E+01 best grid ngfft=      24      24      24
       max ecut=  1.322634E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24   24
  Augmented FFT divisions ...................    25   25   24
  FFT algorithm .............................   401
  FFT cache size ............................    16
  FFT parallelization level .................     1
  Number of processors in my FFT group ......     3
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     8
  No of xy planes in G space treated by me ..     8
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=      73
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   4,
                      lmnmaxso=   8, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  7.
   intxc =         0  ionmov =         3    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        12  mffmem =         1
P  mgfft =        24   mkmem =        30 mpssoang=         3     mpw =        73
  mqgrid =      3001   natom =         2    nfft =      4608    nkpt =        30
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =         0  ntypat =         1  occopt =         0
================================================================================
P This job should need less than                       2.576 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      1.205 Mbytes ; DEN or POT disk file :      0.037 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.5645 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.565 Mbytes, for testing purposes.
 memana : allocated       2.576 Mbytes, for testing purposes.
 The job will continue.

 DATASET    8 : space group R-3 m (#166); Bravais hR (rhombohedral)
 getkgrid : length of smallest supercell vector (bohr)=    4.146400E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : after getkgrid, nkpt=          30
 chkneu : initialized the occupation numbers for occopt=    7
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0
 For input ecut=  1.000000E+01 best grid ngfft=      24      24      24
       max ecut=  1.322634E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24   24
  Augmented FFT divisions ...................    25   25   24
  FFT algorithm .............................   401
  FFT cache size ............................    16
  FFT parallelization level .................     1
  Number of processors in my FFT group ......     3
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     8
  No of xy planes in G space treated by me ..     8
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=      73
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   4,
                      lmnmaxso=   8, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  8.
   intxc =         0  ionmov =         3    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        12  mffmem =         1
P  mgfft =        24   mkmem =        30 mpssoang=         3     mpw =        73
  mqgrid =      3001   natom =         2    nfft =      4608    nkpt =        30
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =         0  ntypat =         1  occopt =         7
================================================================================
P This job should need less than                       3.308 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      1.205 Mbytes ; DEN or POT disk file :      0.037 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.5645 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.565 Mbytes, for testing purposes.
 memana : allocated       3.308 Mbytes, for testing purposes.
 The job will continue.
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
  1.000000000000000E-008  1.000000000000000E-008  1.000000000000000E-008
  1.000000000000000E-008  1.000000000000000E-008  1.000000000000000E-008
  1.000000000000000E-008
 -outvars: echo values of preprocessed input variables --------
        accesswff         1
            acell    1.0366000000E+01  1.0366000000E+01  1.0366000000E+01 Bohr
              amu    2.80855000E+01
           diemac    1.20000000E+01
             ecut    1.00000000E+01 Hartree
           enunit         2
           fftalg       401
      fft_opt_lob         2
           ionmov1        0
           ionmov2        0
           ionmov3        0
           ionmov4        0
           ionmov5        3
           ionmov6        3
           ionmov7        3
           ionmov8        3
           iprcch         0
           istwfk1     1
           istwfk2     1
           istwfk5     1
           istwfk6     1
              ixc         3
           jdtset      1    2    3    4    5    6    7    8
              kpt1   0.00000000E+00  0.00000000E+00  0.00000000E+00
              kpt2   0.00000000E+00  0.00000000E+00  0.00000000E+00
              kpt3  -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                    -1.25000000E-01 -1.25000000E-01  1.25000000E-01
                    -1.25000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                    -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                    -2.50000000E-01 -2.50000000E-01  1.25000000E-01
                    -1.25000000E-01 -2.50000000E-01  2.50000000E-01
                    -1.25000000E-01 -1.25000000E-01  3.75000000E-01
                    -1.25000000E-01  2.50000000E-01  0.00000000E+00
                    -2.50000000E-01  3.75000000E-01  0.00000000E+00
                    -3.75000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01  5.00000000E-01  1.25000000E-01
                    -3.75000000E-01 -3.75000000E-01  1.25000000E-01
                    -2.50000000E-01 -3.75000000E-01  2.50000000E-01
                    -1.25000000E-01 -3.75000000E-01  3.75000000E-01
                    -2.50000000E-01 -2.50000000E-01  3.75000000E-01
                    -1.25000000E-01 -2.50000000E-01  5.00000000E-01
                    -1.25000000E-01 -1.25000000E-01 -3.75000000E-01
                    -1.25000000E-01  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  5.00000000E-01  1.25000000E-01
                    -3.75000000E-01  5.00000000E-01  2.50000000E-01
                    -3.75000000E-01 -3.75000000E-01  3.75000000E-01
                    -2.50000000E-01 -3.75000000E-01  5.00000000E-01
                    -1.25000000E-01 -3.75000000E-01 -3.75000000E-01
                    -2.50000000E-01 -2.50000000E-01 -3.75000000E-01
                    -1.25000000E-01 -2.50000000E-01 -2.50000000E-01
                    -1.25000000E-01 -1.25000000E-01 -1.25000000E-01
                    -3.75000000E-01  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  5.00000000E-01  3.75000000E-01
                    -3.75000000E-01 -3.75000000E-01 -3.75000000E-01
              kpt4  -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                    -1.25000000E-01 -1.25000000E-01  1.25000000E-01
                    -1.25000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                    -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                    -2.50000000E-01 -2.50000000E-01  1.25000000E-01
                    -1.25000000E-01 -2.50000000E-01  2.50000000E-01
                    -1.25000000E-01 -1.25000000E-01  3.75000000E-01
                    -1.25000000E-01  2.50000000E-01  0.00000000E+00
                    -2.50000000E-01  3.75000000E-01  0.00000000E+00
                    -3.75000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01  5.00000000E-01  1.25000000E-01
                    -3.75000000E-01 -3.75000000E-01  1.25000000E-01
                    -2.50000000E-01 -3.75000000E-01  2.50000000E-01
                    -1.25000000E-01 -3.75000000E-01  3.75000000E-01
                    -2.50000000E-01 -2.50000000E-01  3.75000000E-01
                    -1.25000000E-01 -2.50000000E-01  5.00000000E-01
                    -1.25000000E-01 -1.25000000E-01 -3.75000000E-01
                    -1.25000000E-01  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  5.00000000E-01  1.25000000E-01
                    -3.75000000E-01  5.00000000E-01  2.50000000E-01
                    -3.75000000E-01 -3.75000000E-01  3.75000000E-01
                    -2.50000000E-01 -3.75000000E-01  5.00000000E-01
                    -1.25000000E-01 -3.75000000E-01 -3.75000000E-01
                    -2.50000000E-01 -2.50000000E-01 -3.75000000E-01
                    -1.25000000E-01 -2.50000000E-01 -2.50000000E-01
                    -1.25000000E-01 -1.25000000E-01 -1.25000000E-01
                    -3.75000000E-01  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  5.00000000E-01  3.75000000E-01
                    -3.75000000E-01 -3.75000000E-01 -3.75000000E-01
              kpt5   0.00000000E+00  0.00000000E+00  0.00000000E+00
              kpt6   0.00000000E+00  0.00000000E+00  0.00000000E+00
              kpt7  -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                    -1.25000000E-01 -1.25000000E-01  1.25000000E-01
                    -1.25000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                    -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                    -2.50000000E-01 -2.50000000E-01  1.25000000E-01
                    -1.25000000E-01 -2.50000000E-01  2.50000000E-01
                    -1.25000000E-01 -1.25000000E-01  3.75000000E-01
                    -1.25000000E-01  2.50000000E-01  0.00000000E+00
                    -2.50000000E-01  3.75000000E-01  0.00000000E+00
                    -3.75000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01  5.00000000E-01  1.25000000E-01
                    -3.75000000E-01 -3.75000000E-01  1.25000000E-01
                    -2.50000000E-01 -3.75000000E-01  2.50000000E-01
                    -1.25000000E-01 -3.75000000E-01  3.75000000E-01
                    -2.50000000E-01 -2.50000000E-01  3.75000000E-01
                    -1.25000000E-01 -2.50000000E-01  5.00000000E-01
                    -1.25000000E-01 -1.25000000E-01 -3.75000000E-01
                    -1.25000000E-01  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  5.00000000E-01  1.25000000E-01
                    -3.75000000E-01  5.00000000E-01  2.50000000E-01
                    -3.75000000E-01 -3.75000000E-01  3.75000000E-01
                    -2.50000000E-01 -3.75000000E-01  5.00000000E-01
                    -1.25000000E-01 -3.75000000E-01 -3.75000000E-01
                    -2.50000000E-01 -2.50000000E-01 -3.75000000E-01
                    -1.25000000E-01 -2.50000000E-01 -2.50000000E-01
                    -1.25000000E-01 -1.25000000E-01 -1.25000000E-01
                    -3.75000000E-01  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  5.00000000E-01  3.75000000E-01
                    -3.75000000E-01 -3.75000000E-01 -3.75000000E-01
              kpt8  -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                    -1.25000000E-01 -1.25000000E-01  1.25000000E-01
                    -1.25000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                    -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                    -2.50000000E-01 -2.50000000E-01  1.25000000E-01
                    -1.25000000E-01 -2.50000000E-01  2.50000000E-01
                    -1.25000000E-01 -1.25000000E-01  3.75000000E-01
                    -1.25000000E-01  2.50000000E-01  0.00000000E+00
                    -2.50000000E-01  3.75000000E-01  0.00000000E+00
                    -3.75000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01  5.00000000E-01  1.25000000E-01
                    -3.75000000E-01 -3.75000000E-01  1.25000000E-01
                    -2.50000000E-01 -3.75000000E-01  2.50000000E-01
                    -1.25000000E-01 -3.75000000E-01  3.75000000E-01
                    -2.50000000E-01 -2.50000000E-01  3.75000000E-01
                    -1.25000000E-01 -2.50000000E-01  5.00000000E-01
                    -1.25000000E-01 -1.25000000E-01 -3.75000000E-01
                    -1.25000000E-01  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  5.00000000E-01  1.25000000E-01
                    -3.75000000E-01  5.00000000E-01  2.50000000E-01
                    -3.75000000E-01 -3.75000000E-01  3.75000000E-01
                    -2.50000000E-01 -3.75000000E-01  5.00000000E-01
                    -1.25000000E-01 -3.75000000E-01 -3.75000000E-01
                    -2.50000000E-01 -2.50000000E-01 -3.75000000E-01
                    -1.25000000E-01 -2.50000000E-01 -2.50000000E-01
                    -1.25000000E-01 -1.25000000E-01 -1.25000000E-01
                    -3.75000000E-01  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  5.00000000E-01  3.75000000E-01
                    -3.75000000E-01 -3.75000000E-01 -3.75000000E-01
          kptrlen1   3.00000000E+01
          kptrlen2   3.00000000E+01
          kptrlen3   4.14640000E+01
          kptrlen4   4.14640000E+01
          kptrlen5   3.00000000E+01
          kptrlen6   3.00000000E+01
          kptrlen7   4.14640000E+01
          kptrlen8   4.14640000E+01
           kptopt1        0
           kptopt2        0
           kptopt3        1
           kptopt4        1
           kptopt5        0
           kptopt6        0
           kptopt7        1
           kptopt8        1
         kptrlatt    4 -4  4  -4  4  4  -4 -4  4
P           mkmem1        1
P           mkmem2        1
P           mkmem3       30
P           mkmem4       30
P           mkmem5        1
P           mkmem6        1
P           mkmem7       30
P           mkmem8       30
            natom         2
            nband1    12
            nband2    12
            nband3    12
            nband4    12
            nband5    12
            nband6    12
            nband7    12
            nband8    12
           ndtset         8
            ngfft        24      24      24
             nkpt1        1
             nkpt2        1
             nkpt3       30
             nkpt4       30
             nkpt5        1
             nkpt6        1
             nkpt7       30
             nkpt8       30
           npband         2
            npfft         3
            nstep         2
             nsym        12
            ntime1        0
            ntime2        0
            ntime3        0
            ntime4        0
            ntime5        5
            ntime6        5
            ntime7        5
            ntime8        5
           ntypat         1
              occ1   2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
              occ2   2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
              occ3   2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
              occ4   2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
              occ5   2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
              occ6   2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
              occ7   2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
              occ8   2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
           occopt1        0
           occopt2        7
           occopt3        0
           occopt4        7
           occopt5        0
           occopt6        7
           occopt7        0
           occopt8        7
        paral_kgb         1
            rprim    0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                     5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                     5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk    5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup       166
           symrel    1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                     1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                     0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                     0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                     0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                     0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
           timopt        -1
            tnons    0.0000000  0.0000000  0.0000000     0.2200000  0.2200000  0.2200000
                     0.0000000  0.0000000  0.0000000     0.2200000  0.2200000  0.2200000
                     0.0000000  0.0000000  0.0000000     0.2200000  0.2200000  0.2200000
                     0.0000000  0.0000000  0.0000000     0.2200000  0.2200000  0.2200000
                     0.0000000  0.0000000  0.0000000     0.2200000  0.2200000  0.2200000
                     0.0000000  0.0000000  0.0000000     0.2200000  0.2200000  0.2200000
           toldfe1   1.00000000E-10 Hartree
           toldfe2   1.00000000E-10 Hartree
           toldfe3   1.00000000E-10 Hartree
           toldfe4   1.00000000E-10 Hartree
           toldfe5   0.00000000E+00 Hartree
           toldfe6   0.00000000E+00 Hartree
           toldfe7   0.00000000E+00 Hartree
           toldfe8   0.00000000E+00 Hartree
           toldff1   0.00000000E+00
           toldff2   0.00000000E+00
           toldff3   0.00000000E+00
           toldff4   0.00000000E+00
           toldff5   1.00000000E-06
           toldff6   1.00000000E-06
           toldff7   1.00000000E-07
           toldff8   1.00000000E-07
           tolmxf1   5.00000000E-05
           tolmxf2   5.00000000E-05
           tolmxf3   5.00000000E-05
           tolmxf4   5.00000000E-05
           tolmxf5   1.00000000E-05
           tolmxf6   1.00000000E-05
           tolmxf7   1.00000000E-05
           tolmxf8   1.00000000E-05
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
  1.000000000000000E-008  1.000000000000000E-008  1.000000000000000E-008
  1.000000000000000E-008  1.000000000000000E-008  1.000000000000000E-008
  1.000000000000000E-008
           tsmear1   4.00000000E-02 Hartree
           tsmear2   1.00000000E-03 Hartree
           tsmear3   4.00000000E-02 Hartree
           tsmear4   1.00000000E-03 Hartree
           tsmear5   4.00000000E-02 Hartree
           tsmear6   1.00000000E-03 Hartree
           tsmear7   4.00000000E-02 Hartree
           tsmear8   1.00000000E-03 Hartree
            typat    1  1
         wfoptalg         4
              wtk1     1.00000
              wtk2     1.00000
              wtk3     0.04688    0.02344    0.04688    0.04688    0.04688    0.02344
                       0.04688    0.02344    0.04688    0.04688    0.04688    0.04688
                       0.02344    0.04688    0.04688    0.02344    0.04688    0.02344
                       0.02344    0.02344    0.04688    0.02344    0.04688    0.02344
                       0.02344    0.02344    0.00781    0.02344    0.02344    0.00781
              wtk4     0.04688    0.02344    0.04688    0.04688    0.04688    0.02344
                       0.04688    0.02344    0.04688    0.04688    0.04688    0.04688
                       0.02344    0.04688    0.04688    0.02344    0.04688    0.02344
                       0.02344    0.02344    0.04688    0.02344    0.04688    0.02344
                       0.02344    0.02344    0.00781    0.02344    0.02344    0.00781
              wtk5     1.00000
              wtk6     1.00000
              wtk7     0.04688    0.02344    0.04688    0.04688    0.04688    0.02344
                       0.04688    0.02344    0.04688    0.04688    0.04688    0.04688
                       0.02344    0.04688    0.04688    0.02344    0.04688    0.02344
                       0.02344    0.02344    0.04688    0.02344    0.04688    0.02344
                       0.02344    0.02344    0.00781    0.02344    0.02344    0.00781
              wtk8     0.04688    0.02344    0.04688    0.04688    0.04688    0.02344
                       0.04688    0.02344    0.04688    0.04688    0.04688    0.04688
                       0.02344    0.04688    0.04688    0.02344    0.04688    0.02344
                       0.02344    0.02344    0.04688    0.02344    0.04688    0.02344
                       0.02344    0.02344    0.00781    0.02344    0.02344    0.00781
           xangst    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     1.2067992077E+00  1.2067992077E+00  1.2067992077E+00
            xcart    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.2805200000E+00  2.2805200000E+00  2.2805200000E+00
             xred    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.2000000000E-01  2.2000000000E-01  2.2000000000E-01
            znucl     14.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset= 1.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  istwfk     the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kpt        the actual size (    30) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  kptns      the actual size (    30) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   360) of the index (     1)  differs from its standard size (    12)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  wtk        the actual size (    30) of the index (     1)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset= 2.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  istwfk     the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kpt        the actual size (    30) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  kptns      the actual size (    30) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   360) of the index (     1)  differs from its standard size (    12)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  wtk        the actual size (    30) of the index (     1)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset= 3.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset= 4.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset= 5.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  istwfk     the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kpt        the actual size (    30) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  kptns      the actual size (    30) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   360) of the index (     1)  differs from its standard size (    12)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  wtk        the actual size (    30) of the index (     1)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset= 6.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  istwfk     the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kpt        the actual size (    30) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  kptns      the actual size (    30) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   360) of the index (     1)  differs from its standard size (    12)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  wtk        the actual size (    30) of the index (     1)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset= 7.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset= 8.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  1 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  istwfk     the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    30) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kpt        the actual size (    30) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  kptns      the actual size (    30) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   360) of the index (     1)  differs from its standard size (    12)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  wtk        the actual size (    30) of the index (     1)  differs from its standard size (     1)
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   4,
                      lmnmaxso=   8, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  LDA: old Teter (4/91) fit to Ceperley-Alder data - ixc=3
 
 npfft, npband and npkpt           3           2           1
 mpi_enreg%sizecart(1),np_fft           3           3
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0
 Unit cell volume ucvol=  2.7846693E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24  24
         ecut(hartree)=     10.000   => boxcut(ratio)=   2.30012

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   13.226344 Hartrees makes boxcut=2

-P-0000  leave_test : synchronization done...
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    /homes/jlow/abinit/abinit-6.0.2/tests/Psps_for_tests/14si.phoney_mod
 2 bohr rc 15 hartree ec psp for silicon 8 November 1991 (new)
  14.00000   4.00000    980710                znucl, zion, pspdat
    5    3    2    2       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    1.000000E-06    3.075239E-02              r1 and al (Hamman grid)
    0   0.000   0.000    2   2.0042666        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   0.000   0.000    2   2.0042666        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.0042666        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
 pspatm: epsatm=   -1.82035725
         --- l  ekb(1:nproj) -->
             0    3.773677   10.247662
             1    2.166328    2.055393
 pspatm: atomic psp has been read  and splines computed

  -2.91257160E+01                                ecore*ucvol(ha*bohr**3)
-P-0000  wfconv:    12 bands initialized randomly with npw=    73, for ikpt=     1
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 
 setup2: Arith. and geom. avg. npw (full set) are      73.000      73.000
 symatm: atom number    1 is reached starting at atom
   1  2  1  2  1  2  1  2  1  2  1  2
 symatm: atom number    2 is reached starting at atom
   2  1  2  1  2  1  2  1  2  1  2  1
 initro : for itypat=  1, take decay length=      1.1000,
 initro : indeed, coreel=     10.0000, nval=  4 and densty=  0.0000E+00.

================================================================================

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24  24
         ecut(hartree)=     10.000   => boxcut(ratio)=   2.30012

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   13.226344 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=  0.000000000000000E+000

 ewald : nr and ng are    3 and   11
  mklocl_recipspace : will add potential with strength vprtrb(:)=
  0.000000000000000E+000  0.000000000000000E+000
  setvtr : istep,n1xccc,moved_rhor=           1           0           0
  scfcv : after setvtr, energies%e_hartree=  0.000000000000000E+000

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 starting lobpcg, with nblockbd,mpi_enreg%nproc_band           6           2
Fatal error in MPI_Comm_size:
Invalid communicator, error stack:
MPI_Comm_size(112): MPI_Comm_size(comm=0x5b, size=0x1eec96c) failed
MPI_Comm_size(70).: Invalid communicator
Fatal error in MPI_Comm_size:
Invalid communicator, error stack:
MPI_Comm_size(112): MPI_Comm_size(comm=0x5b, size=0x1eec96c) failed
MPI_Comm_size(70).: Invalid communicator
Fatal error in MPI_Comm_size:
Invalid communicator, error stack:
MPI_Comm_size(112): MPI_Comm_size(comm=0x5b, size=0x1eec96c) failed
MPI_Comm_size(70).: Invalid communicator
Fatal error in MPI_Comm_size:
Invalid communicator, error stack:
MPI_Comm_size(112): MPI_Comm_size(comm=0x5b, size=0x1eec96c) failed
MPI_Comm_size(70).: Invalid communicator
Fatal error in MPI_Comm_size:
Invalid communicator, error stack:
MPI_Comm_size(112): MPI_Comm_size(comm=0x5b, size=0x1eec96c) failed
MPI_Comm_size(70).: Invalid communicator
Fatal error in MPI_Comm_size:
Invalid communicator, error stack:
MPI_Comm_size(112): MPI_Comm_size(comm=0x5b, size=0x1eec96c) failed
MPI_Comm_size(70).: Invalid communicator
