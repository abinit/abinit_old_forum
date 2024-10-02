  ABINIT 
  
  Give name for formatted input file: 
Al.in
  Give name for formatted output file:
Al.out
  Give root name for generic input files:
Al.i
  Give root name for generic output files:
Al.o
  Give root name for generic temporary files:
Al
-P-0000  leave_test : synchronization done...

.Version 6.12.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.4 computer) 

.Copyright (C) 1998-2012 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Sun 13 May 2012.
- ( at 15h27 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.12.2
  Build target  : x86_64_linux_gnu4.4
  Build date    : 20120324

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g -O2 -mtune=native -march=native -mfpmath=sse
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g -O2 -mtune=native -march=native -mfpmath=sse
  Fortran compiler : gnu4.4
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : none
  LINALG flavor : netlib-fallback
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf-fallback+etsf_io-fallback

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -mtune=native -march=native -mfpmath=sse


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT            HAVE_DFT_LIBXC

        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...           HAVE_FC_CPUTIME

              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA

            HAVE_FC_GETENV          HAVE_FC_INT_QUAD     HAVE_FC_ISO_C_BINDING

        HAVE_FC_LONG_LINES              HAVE_FC_NULL         HAVE_FC_STREAM_IO

          HAVE_FORTRAN2003                  HAVE_MPI                 HAVE_MPI2

               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...                HAVE_NUMPY

             HAVE_OS_LINUX                HAVE_TIMER         HAVE_TIMER_ABINIT

            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL         HAVE_TRIO_ETSF_IO

          HAVE_TRIO_NETCDF
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> Al.in
- output file    -> Al.out
- root for input  files -> Al.i
- root for output files -> Al.o

 instrng :    55 lines of input have been read
  m_ab6_invars_f90 (ab6_invars_load) : token%timopt=           0

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 13al.pspnc
-P-0000   read the values zionpsp=  3.0 , pspcod=   1 , lmax=   2
-P-0000
-P-0000  inpspheads : deduce mpsang  =   3, n1xccc  =2501.
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
  than the real one, iholohedry=  1, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is hR (rhombohedral)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  5, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  2, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.165359E+01
       Simple Lattice Grid
  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           1           1          36
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =          36          36
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =    36, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =    36, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =    36, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

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
  than the real one, iholohedry=  1, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is hR (rhombohedral)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  5, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  2, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.165359E+01
       Simple Lattice Grid
  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           1           1          36
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =          36          36
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =    36, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =    36, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =    36, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

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
  than the real one, iholohedry=  1, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is hR (rhombohedral)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  5, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  2, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
  inqpt : enter
  inqpt : exit 
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.165359E+01
       Simple Lattice Grid
  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           1           1          36
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =          36          36
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =    36, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =    36, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =    36, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 DATASET    1 : space group P1 (#  1); Bravais aP (primitive triclinic)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.165359E+01
       Simple Lattice Grid
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    3
    spin-unpolarized case :
  2.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 For input ecut=  6.000000E+00 best grid ngfft=      12      12      12
       max ecut=  6.062230E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    12   12   12
  Augmented FFT divisions ...................    13   13   12
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=      84

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         3 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        20  mffmem =         1
P  mgfft =        12   mkmem =         1 mpssoang=         3     mpw =        84
  mqgrid =      3001   natom =         1    nfft =      1728    nkpt =        36
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =      2501  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       1.717 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.925 Mbytes ; DEN or POT disk file :      0.015 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.0547 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.055 Mbytes, for testing purposes.
 memana : allocated       1.717 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group P1 (#  1); Bravais aP (primitive triclinic)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.165359E+01
       Simple Lattice Grid
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    3
    spin-unpolarized case :
  2.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 For input ecut=  6.000000E+00 best grid ngfft=      12      12      12
       max ecut=  6.062230E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    12   12   12
  Augmented FFT divisions ...................    13   13   12
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=      84

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        20  mffmem =         1
P  mgfft =        12   mkmem =         1 mpssoang=         3     mpw =        84
  mqgrid =      3001   natom =         1    nfft =      1728    nkpt =        36
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =      2501  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       1.665 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.925 Mbytes ; DEN or POT disk file :      0.015 Mbytes.
================================================================================

 Biggest array : cg(disk), with      0.0276 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.028 Mbytes, for testing purposes.
 memana : allocated       1.665 Mbytes, for testing purposes.
 The job will continue.

 DATASET    3 : space group P1 (#  1); Bravais aP (primitive triclinic)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.165359E+01
       Simple Lattice Grid
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    3
    spin-unpolarized case :
  2.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 For input ecut=  6.000000E+00 best grid ngfft=      12      12      12
       max ecut=  6.062230E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    12   12   12
  Augmented FFT divisions ...................    13   13   12
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=      84
 getmpw: optimal value of mpw=      84

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 symq3 : found symmetry   1 preserves q
  memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3 (RF).
   intxc =         0    iscf =        -3 xclevel =         1  lmnmax =         2
   lnmax =         2   mband =        20  mffmem =         1   mgfft =        12
P  mkmem =         1  mkqmem =         1  mk1mem =         1 mpssoang=         3
     mpw =        84  mqgrid =      3001   natom =         1    nfft =      1728
    nkpt =        36  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =         1  n1xccc =      2501  ntypat =         1
  occopt =         3
================================================================================
P This job should need less than                       2.078 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.925 Mbytes ; DEN or POT disk file :      0.015 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.0284 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.028 Mbytes, for testing purposes.
 memana : allocated       2.078 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =   36
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (Al.o_OUT.nc)

            acell      7.6557000000E+00  7.6557000000E+00  7.6557000000E+00 Bohr
              amu      2.69800000E+01
             ecut      6.00000000E+00 Hartree
           enunit           2
           getden1          0
           getden2          1
           getden3          0
           getwfk1          0
           getwfk2          1
           getwfk3          2
             iscf1          3
             iscf2         -2
             iscf3         -3
           istwfk        1    0    1    0    0    0    0    1    0    1
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    1    0    1    0
                         0    0    0    1    0    1
           jdtset        1    2    3
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  2.50000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
                      -2.50000000E-01  0.00000000E+00  2.50000000E-01
                       0.00000000E+00  2.50000000E-01  2.50000000E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                      -2.50000000E-01  2.50000000E-01  2.50000000E-01
                       0.00000000E+00  5.00000000E-01  2.50000000E-01
                       2.50000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                      -2.50000000E-01  5.00000000E-01  2.50000000E-01
                       0.00000000E+00 -2.50000000E-01  2.50000000E-01
                       2.50000000E-01 -2.50000000E-01  2.50000000E-01
                       5.00000000E-01 -2.50000000E-01  2.50000000E-01
                      -2.50000000E-01 -2.50000000E-01  2.50000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       0.00000000E+00  2.50000000E-01  5.00000000E-01
                       2.50000000E-01  2.50000000E-01  5.00000000E-01
                       5.00000000E-01  2.50000000E-01  5.00000000E-01
                      -2.50000000E-01  2.50000000E-01  5.00000000E-01
                       0.00000000E+00  5.00000000E-01  5.00000000E-01
                       2.50000000E-01  5.00000000E-01  5.00000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
          kptrlen      2.16535895E+01
         kptrlatt      4  0  0   0  4  0   0  0  4
P           mkmem           1
P          mkqmem           1
P          mk1mem           1
            natom           1
            nband          20
           nbdbuf1          0
           nbdbuf2          2
           nbdbuf3          2
           ndtset           3
            ngfft          12      12      12
             nkpt          36
             nqpt1          0
             nqpt2          0
             nqpt3          1
             nsym           1
           ntypat           1
              occ      2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
           occopt           3
        optdriver1          0
        optdriver2          0
        optdriver3          1
        optforces           1
           prtvol           1
              qpt1     0.00000000E+00  0.00000000E+00  0.00000000E+00
              qpt2     0.00000000E+00  0.00000000E+00  0.00000000E+00
              qpt3     2.50000000E-01  2.50000000E-01  2.50000000E-01
            rfdir1          0       0       0
            rfdir2          0       0       0
            rfdir3          1       0       0
           rfelfd1          0
           rfelfd2          0
           rfelfd3          2
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
          spgroup           1
           toldfe1     1.00000000E-10 Hartree
           toldfe2     0.00000000E+00 Hartree
           toldfe3     0.00000000E+00 Hartree
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-22
           tolwfr3     1.00000000E-22
           tsmear      2.00000000E-04 Hartree
            typat      1
              wtk        0.01563    0.03125    0.01563    0.03125    0.03125    0.03125
                         0.03125    0.01563    0.03125    0.01563    0.03125    0.03125
                         0.03125    0.03125    0.03125    0.03125    0.03125    0.03125
                         0.03125    0.03125    0.03125    0.03125    0.03125    0.03125
                         0.03125    0.03125    0.01563    0.03125    0.01563    0.03125
                         0.03125    0.03125    0.03125    0.01563    0.03125    0.01563
            znucl       13.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset=   1.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    36) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset=   2.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    36) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset=   3.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    36) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
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
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  1 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    36) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  1.1217465E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  12  12  12
         ecut(hartree)=      6.000   => boxcut(ratio)=   2.01034
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    13al.pspnc
  Troullier-Martins psp for element  Al        Thu Oct 27 17:31:05 EDT 1994
- 13.00000   3.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   4.657  11.889    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   1.829   2.761    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.09673076353074    0.12648111154518    1.01742091001718   rchrg,fchrg,qchrg
 pspatm: epsatm=    0.22155260
         --- l  ekb(1:nproj) -->
             0    2.540658
             1    1.353815
 pspatm: atomic psp has been read  and splines computed

   6.64657794E-01                                ecore*ucvol(ha*bohr**3)
-P-0000  wfconv:    20 bands initialized randomly with npw=    65, for ikpt=     1
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE

 setup2: Arith. and geom. avg. npw (full set) are      78.578      78.511
 initro : for itypat=  1, take decay length=      1.2500,
 initro : indeed, coreel=     10.0000, nval=  3 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  12  12  12
         ecut(hartree)=      6.000   => boxcut(ratio)=   2.01034
  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    3 and   11
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           0
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is       0.255379 , with nelect=      3.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.584 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.585 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.585 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.585 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.582 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.575 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.582 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.585 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.585 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.585 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.585 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.584 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2119E-02  at reduced coord.    0.8333    0.8333    0.4167
,     Minimum=    2.7102E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    3.2119E-02  at reduced coord.    0.8333    0.8333    0.4167
,     Minimum=    2.7102E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -2.4222158813478    -2.422E+00 8.322E-03 5.317E-01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.7102191E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        1728        1728

Simple mixing update:
  residual square of the potential :  0.27843871379900115

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is       0.252944 , with nelect=      3.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2371E-02  at reduced coord.    0.8333    0.4167    0.9167
,     Minimum=    3.1787E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    3.2371E-02  at reduced coord.    0.8333    0.4167    0.9167
,     Minimum=    3.1787E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -2.4226700542418    -4.542E-04 5.026E-04 2.382E-02 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.7073787E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        1728        1728

Anderson update:
  residual square of the potential:   1.21556026669865248E-002
  mixing of old trial potential    : -0.25316380463069138
  predicted best residual square on the line:   8.25667788149752474E-004

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is       0.253265 , with nelect=      3.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2461E-02  at reduced coord.    0.4167    0.8333    0.9167
,     Minimum=    3.2976E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    3.2461E-02  at reduced coord.    0.4167    0.8333    0.9167
,     Minimum=    3.2976E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -2.4226949890570    -2.493E-05 1.688E-04 3.040E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.7064918E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        1728        1728

Anderson update:
  residual square of the potential:   1.94156127933706559E-005
  mixing of old trial potential    : -8.33971845545802490E-003
  predicted best residual square on the line:   1.85853778647670224E-005

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is       0.253336 , with nelect=      3.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2465E-02  at reduced coord.    0.1667    0.5833    0.1667
,     Minimum=    3.2958E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    3.2465E-02  at reduced coord.    0.1667    0.5833    0.1667
,     Minimum=    3.2958E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  4  -2.4226950183482    -2.929E-08 2.185E-05 1.048E-06 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.7064683E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        1728        1728

Anderson update:
  residual square of the potential:   6.39194231678917015E-007
  mixing of old trial potential    : -0.19584682478516077
  predicted best residual square on the line:   1.21703969285672908E-007

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is       0.253334 , with nelect=      3.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2466E-02  at reduced coord.    0.5833    0.0833    0.1667
,     Minimum=    3.2954E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    3.2466E-02  at reduced coord.    0.5833    0.0833    0.1667
,     Minimum=    3.2954E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  5  -2.4226950193890    -1.041E-09 2.157E-05 7.286E-09 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.7064643E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        1728        1728

Anderson update:
  residual square of the potential:   4.32349019076209323E-009
  mixing of old trial potential    : -3.93434019881372318E-002
  predicted best residual square on the line:   3.41245790641121779E-009

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is       0.253334 , with nelect=      3.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2466E-02  at reduced coord.    0.5833    0.0833    0.1667
,     Minimum=    3.2953E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    3.2466E-02  at reduced coord.    0.5833    0.0833    0.1667
,     Minimum=    3.2953E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  6  -2.4226950193982    -9.240E-12 3.081E-06 1.791E-10 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.7064644E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        1728        1728

Anderson update:
  residual square of the potential:   1.10099051547086608E-010
  mixing of old trial potential    : -0.16427216599017297
  predicted best residual square on the line:   2.45168028042312218E-011

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is       0.253334 , with nelect=      3.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2466E-02  at reduced coord.    0.8333    0.9167    0.4167
,     Minimum=    3.2953E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    3.2466E-02  at reduced coord.    0.8333    0.9167    0.4167
,     Minimum=    3.2953E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  7  -2.4226950193981     1.221E-13 3.168E-06 1.282E-12 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.7064644E-01 hartree

 At SCF step    7, etot is converged : 
  for the second time, diff in etot=  1.221E-13 < toldfe=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  8.17490885506542828E-005  8.17490885599038013E-005  8.17490885457385779E-005 -1.32706986480892104E-015  1.90222699415342356E-015  1.59011104966951769E-014
  strhar : after mpi_comm, harstr=  8.17490885506542828E-005  8.17490885599038013E-005  8.17490885457385779E-005 -1.32706986480892104E-015  1.90222699415342356E-015  1.59011104966951769E-014
  strhar : ehart,ucvol=  4.37843628440802955E-003   112.17465139517327     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.24333588E-04  sigma(3 2)=  1.78283187E-12
  sigma(2 2)=  1.24333588E-04  sigma(3 1)=  1.95031870E-15
  sigma(3 3)=  1.24333589E-04  sigma(2 1)= -2.12157336E-12

 ioarr: writing density data
 ioarr: file name is Al.o_DS1_DEN
 ioarr: data written to disk file Al.o_DS1_DEN
-P-0000  leave_test : synchronization done...
================================================================================

 ----iterations are completed or convergence reached----

 outwf  : write wavefunction to file Al.o_DS1_WFK
-P-0000  leave_test : synchronization done...

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.24333588E-04  sigma(3 2)=  1.78283187E-12
  sigma(2 2)=  1.24333588E-04  sigma(3 1)=  1.95031870E-15
  sigma(3 3)=  1.24333589E-04  sigma(2 1)= -2.12157336E-12

-Cartesian components of stress tensor (GPa)         [Pressure= -3.6580E+00 GPa]
- sigma(1 1)=  3.65801983E+00  sigma(3 2)=  5.24527156E-08
- sigma(2 2)=  3.65801984E+00  sigma(3 1)=  5.73803474E-11
- sigma(3 3)=  3.65801985E+00  sigma(2 1)= -6.24188327E-08
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  2 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    36) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.

 mkfilename : getden/=0, take file _DEN from output of DATASET   1.

 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  1.1217465E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  12  12  12
         ecut(hartree)=      6.000   => boxcut(ratio)=   2.01034
kpgio: loop on k-points done in parallel
 inwffil : before hdr_check 
 inwffil : examine the header of disk file Al.o_DS1_WFK
-P-0000
-P-0000 ================================================================================
-P-0000
-P-0000           - hdr_check: checking restart file header for consistency -
-P-0000
-P-0000
-P-0000         current calculation                         restart file
-P-0000         -------------------                         ------------
-P-0000
-P-0000   calculation expects a wf_planewave    |  input file contains a wf_planewave
-P-0000 . ABINIT  code version 6.12.2           |  ABINIT  code version 6.12.2
-P-0000 . date 20120513 bantot  720 natom    1  |  date 20120513 bantot  720 natom    1
-P-0000   nkpt  36 nsym  1 ngfft  12,  12,  12  |  nkpt  36 nsym  1 ngfft  12,  12,  12
-P-0000   ntypat  1 ecut_eff   6.0000000        |  ntypat  1 ecut_eff   6.0000000
-P-0000   usepaw  0                             |  usepaw  0
-P-0000   usewvl  0                             |  usewvl  0
-P-0000   rprimd:                               |  rprimd:
-P-0000      0.0000000   3.8278500   3.8278500  |     0.0000000   3.8278500   3.8278500
-P-0000      3.8278500   0.0000000   3.8278500  |     3.8278500   0.0000000   3.8278500
-P-0000      3.8278500   3.8278500   0.0000000  |     3.8278500   3.8278500   0.0000000
-P-0000   nband:                                |  nband:
-P-0000     20  20  20  20  20  20  20  20  20  |    20  20  20  20  20  20  20  20  20
-P-0000     20  20  20  20  20  20  20  20  20  |    20  20  20  20  20  20  20  20  20
-P-0000     20  20  20  20  20  20  20  20  20  |    20  20  20  20  20  20  20  20  20
-P-0000     20  20  20  20  20  20  20  20  20  |    20  20  20  20  20  20  20  20  20
-P-0000   symafm:                               |  symafm:
-P-0000     1                                   |    1
-P-0000   symrel:                               |  symrel:
-P-0000     1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
-P-0000   typat:                                |  typat:
-P-0000     1                                   |    1
-P-0000   so_psp  :                             |  so_psp  :
-P-0000     1                                   |    1
-P-0000   istwfk:                               |  istwfk:
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000   kpt:                                  |  kpt:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.2500000   0.0000000   0.0000000  |     0.2500000   0.0000000   0.0000000
-P-0000      0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
-P-0000      0.0000000   0.2500000   0.0000000  |     0.0000000   0.2500000   0.0000000
-P-0000      0.2500000   0.2500000   0.0000000  |     0.2500000   0.2500000   0.0000000
-P-0000   wtk:                                  |  wtk:
-P-0000     0.016  0.031  0.016  0.031  0.031   |    0.016  0.031  0.016  0.031  0.031
-P-0000   occ:                                  |  occ:
-P-0000    2.0 1.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   2.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
-P-0000    0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
-P-0000    0.0 0.0 2.0 1.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 2.0 0.0 0.0 0.0 0.0 0.0 0.0
-P-0000    0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
-P-0000    0.0 0.0 0.0 0.0 2.0 1.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 2.0 2.0 0.0 0.0 0.0
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   band,k         2, input occ=  1.0000000E+00 disk occ=  0.0000000E+00
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   band,k        22, input occ=  1.0000000E+00 disk occ=  0.0000000E+00
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   band,k        42, input occ=  1.0000000E+00 disk occ=  2.0000000E+00
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   band,k        62, input occ=  1.0000000E+00 disk occ=  0.0000000E+00
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   band,k        82, input occ=  1.0000000E+00 disk occ=  0.0000000E+00
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   The number of warning messages is sufficient ... stop writing them.
-P-0000
-P-0000   tnons:                                |  tnons:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000    znucl:                               |   znucl:
-P-0000    13.00                                |   13.00
-P-0000   pseudopotential atom type  1:         |  pseudopotential atom type  1:
-P-0000   pspso   0 pspxc   1                   |  pspso   0 pspxc   1
-P-0000   pspdat 940714 pspcod    1 zion   3.0  |  pspdat 940714 pspcod    1 zion   3.0
-P-0000   xred:                                 |  xred:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000  hdr_check:  Wavefunction file is OK for direct restart of calculation
-P-0000 ================================================================================
-inwffil : will read wavefunctions from disk file Al.o_DS1_WFK
-P-0000  initwf : disk file gives npw=    65 nband=    20 for kpt number=    1
-P-0000  initwf :    20 bands have been initialized from disk
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points and spins done in parallel
 pareigocc : MPI_ALLREDUCE
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points done in parallel
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE

 ioarr: reading density data
 ioarr: file name is Al.o_DS1_DEN

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a density         |  input file contains a density
. ABINIT  code version 6.12.2           |  ABINIT  code version 6.12.2
. date 20120513 bantot  720 natom    1  |  date 20120513 bantot  720 natom    1
  nkpt  36 nsym  1 ngfft  12,  12,  12  |  nkpt  36 nsym  1 ngfft  12,  12,  12
  ntypat  1 ecut_eff   6.0000000        |  ntypat  1 ecut_eff   6.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   3.8278500   3.8278500  |     0.0000000   3.8278500   3.8278500
     3.8278500   0.0000000   3.8278500  |     3.8278500   0.0000000   3.8278500
     3.8278500   3.8278500   0.0000000  |     3.8278500   3.8278500   0.0000000
  nband:                                |  nband:
    20  20  20  20  20  20  20  20  20  |    20  20  20  20  20  20  20  20  20
    20  20  20  20  20  20  20  20  20  |    20  20  20  20  20  20  20  20  20
    20  20  20  20  20  20  20  20  20  |    20  20  20  20  20  20  20  20  20
    20  20  20  20  20  20  20  20  20  |    20  20  20  20  20  20  20  20  20
  symafm:                               |  symafm:
    1                                   |    1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
  typat:                                |  typat:
    1                                   |    1
  so_psp  :                             |  so_psp  :
    1                                   |    1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
  kpt:                                  |  kpt:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.0000000   0.0000000  |     0.2500000   0.0000000   0.0000000
     0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
     0.0000000   0.2500000   0.0000000  |     0.0000000   0.2500000   0.0000000
     0.2500000   0.2500000   0.0000000  |     0.2500000   0.2500000   0.0000000
  wtk:                                  |  wtk:
    0.016  0.031  0.016  0.031  0.031   |    0.016  0.031  0.016  0.031  0.031
  occ:                                  |  occ:
   2.0 1.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   2.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
   0.0 0.0 2.0 1.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 2.0 0.0 0.0 0.0 0.0 0.0 0.0
   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
   0.0 0.0 0.0 0.0 2.0 1.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 2.0 2.0 0.0 0.0 0.0

 hdr_check: WARNING -
  band,k         2, input occ=  1.0000000E+00 disk occ=  0.0000000E+00

 hdr_check: WARNING -
  band,k        22, input occ=  1.0000000E+00 disk occ=  0.0000000E+00

 hdr_check: WARNING -
  band,k        42, input occ=  1.0000000E+00 disk occ=  2.0000000E+00

 hdr_check: WARNING -
  band,k        62, input occ=  1.0000000E+00 disk occ=  0.0000000E+00

 hdr_check: WARNING -
  band,k        82, input occ=  1.0000000E+00 disk occ=  0.0000000E+00

 hdr_check: WARNING -
  The number of warning messages is sufficient ... stop writing them.

  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
   znucl:                               |   znucl:
   13.00                                |   13.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   3.0  |  pspdat 940714 pspcod    1 zion   3.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
 hdr_check:  Density/Potential file is OK for restart of calculation
================================================================================
 ioarr: data read from disk file Al.o_DS1_DEN

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  12  12  12
         ecut(hartree)=      6.000   => boxcut(ratio)=   2.01034
  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    3 and   11
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           0
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     
 vtorho : nnsclo_now= 30, note that nnsclo,dbl_nnsclo,istep=  0 0  1
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 ioarr: writing density data
 ioarr: file name is Al.o_DS2_DEN
 ioarr: data written to disk file Al.o_DS2_DEN
-P-0000  leave_test : synchronization done...
================================================================================

 ----iterations are completed or convergence reached----

 outwf  : write wavefunction to file Al.o_DS2_WFK
-P-0000  leave_test : synchronization done...

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   0.0000 [eV], located at k-point      :   0.5000 -0.2500  0.2500
   Fundamental gap     =  -3.5566 [eV], Top of valence bands at :   0.5000 -0.2500  0.2500
                                        Bottom of conduction at :   0.0000  0.0000  0.5000
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  3 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    36) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 mkfilename : getwfk/=0, take file _WFK from output of DATASET   2.

 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  1.1217465E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 setup1 : take into account q-point for computing boxcut.

 getcut: wavevector=  0.2500  0.2500  0.2500  ngfft=  12  12  12
         ecut(hartree)=      6.000   => boxcut(ratio)=   1.92749
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    13al.pspnc
  Troullier-Martins psp for element  Al        Thu Oct 27 17:31:05 EDT 1994
- 13.00000   3.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   4.657  11.889    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   1.829   2.761    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.09673076353074    0.12648111154518    1.01742091001718   rchrg,fchrg,qchrg
 pspatm: epsatm=    0.22155260
         --- l  ekb(1:nproj) -->
             0    2.540658
             1    1.353815
 pspatm: atomic psp has been read  and splines computed

 inwffil : before hdr_check 
 inwffil : examine the header of disk file Al.o_DS2_WFK
-P-0000
-P-0000 ================================================================================
-P-0000
-P-0000           - hdr_check: checking restart file header for consistency -
-P-0000
-P-0000
-P-0000         current calculation                         restart file
-P-0000         -------------------                         ------------
-P-0000
-P-0000   calculation expects a wf_planewave    |  input file contains a wf_planewave
-P-0000 . ABINIT  code version 6.12.2           |  ABINIT  code version 6.12.2
-P-0000 . date 20120513 bantot  720 natom    1  |  date 20120513 bantot  720 natom    1
-P-0000   nkpt  36 nsym  1 ngfft  12,  12,  12  |  nkpt  36 nsym  1 ngfft  12,  12,  12
-P-0000   ntypat  1 ecut_eff   6.0000000        |  ntypat  1 ecut_eff   6.0000000
-P-0000   usepaw  0                             |  usepaw  0
-P-0000   usewvl  0                             |  usewvl  0
-P-0000   rprimd:                               |  rprimd:
-P-0000      0.0000000   3.8278500   3.8278500  |     0.0000000   3.8278500   3.8278500
-P-0000      3.8278500   0.0000000   3.8278500  |     3.8278500   0.0000000   3.8278500
-P-0000      3.8278500   3.8278500   0.0000000  |     3.8278500   3.8278500   0.0000000
-P-0000   nband:                                |  nband:
-P-0000     20  20  20  20  20  20  20  20  20  |    20  20  20  20  20  20  20  20  20
-P-0000     20  20  20  20  20  20  20  20  20  |    20  20  20  20  20  20  20  20  20
-P-0000     20  20  20  20  20  20  20  20  20  |    20  20  20  20  20  20  20  20  20
-P-0000     20  20  20  20  20  20  20  20  20  |    20  20  20  20  20  20  20  20  20
-P-0000   symafm:                               |  symafm:
-P-0000     1                                   |    1
-P-0000   symrel:                               |  symrel:
-P-0000     1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
-P-0000   typat:                                |  typat:
-P-0000     1                                   |    1
-P-0000   so_psp  :                             |  so_psp  :
-P-0000     1                                   |    1
-P-0000   istwfk:                               |  istwfk:
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000   kpt:                                  |  kpt:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.2500000   0.0000000   0.0000000  |     0.2500000   0.0000000   0.0000000
-P-0000      0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
-P-0000      0.0000000   0.2500000   0.0000000  |     0.0000000   0.2500000   0.0000000
-P-0000      0.2500000   0.2500000   0.0000000  |     0.2500000   0.2500000   0.0000000
-P-0000   wtk:                                  |  wtk:
-P-0000     0.016  0.031  0.016  0.031  0.031   |    0.016  0.031  0.016  0.031  0.031
-P-0000   occ:                                  |  occ:
-P-0000    2.0 1.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   2.0 1.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
-P-0000    0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
-P-0000    0.0 0.0 2.0 1.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 2.0 1.0 0.0 0.0 0.0 0.0 0.0
-P-0000    0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
-P-0000    0.0 0.0 0.0 0.0 2.0 1.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 2.0 1.0 0.0 0.0 0.0
-P-0000   tnons:                                |  tnons:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000    znucl:                               |   znucl:
-P-0000    13.00                                |   13.00
-P-0000   pseudopotential atom type  1:         |  pseudopotential atom type  1:
-P-0000   pspso   0 pspxc   1                   |  pspso   0 pspxc   1
-P-0000   pspdat 940714 pspcod    1 zion   3.0  |  pspdat 940714 pspcod    1 zion   3.0
-P-0000   xred:                                 |  xred:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000  hdr_check:  Wavefunction file is OK for direct restart of calculation
-P-0000 ================================================================================
-inwffil : will read wavefunctions from disk file Al.o_DS2_WFK
-P-0000  initwf : disk file gives npw=    65 nband=    20 for kpt number=    1
-P-0000  initwf :    20 bands have been initialized from disk
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points and spins done in parallel
 pareigocc : MPI_ALLREDUCE
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points done in parallel
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE


 respfn : eigen0 array
 symatm: atom number    1 is reached starting at atom
   1
 symq3 : found symmetry   1 preserves q
 newocc : new Fermi energy is       0.253334 , with nelect=      3.000000
  Number of bissection calls =  50
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 1.583 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  12  12  12
         ecut(hartree)=      6.000   => boxcut(ratio)=   2.01034
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2466E-02  at reduced coord.    0.8333    0.8333    0.9167
,     Minimum=    3.2953E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015

 ==>  initialize data related to q vector <== 

At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
At line 1070 of file respfn.F90
Fortran runtime error: Expected INTEGER for item 17 in formatted transfer, got CHARACTER
(a,a,a,3es16.6,a,a,a,i2,a,i2,a,i2,a,i2,a,a,a)
                                    ^
--------------------------------------------------------------------------
mpiexec has exited due to process rank 35 with PID 10514 on
node n269 exiting without calling "finalize". This may
have caused other processes in the application to be
terminated by signals sent by mpiexec (as reported here).
--------------------------------------------------------------------------
