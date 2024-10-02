  ABINIT 
  
  Give name for formatted input file: 
si_relaxedion.in
  Give name for formatted output file:
si_relaxedion.out
  Give root name for generic input files:
reli
  Give root name for generic output files:
relo
  Give root name for generic temporary files:
tmp

.Version 6.12.3 of ABINIT 
.(sequential version, prepared for a i686_linux_gnu4.4 computer) 

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

.Starting date : Sun 23 Dec 2012.
- ( at 14h30 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.12.3
  Build target  : i686_linux_gnu4.4
  Build date    : 20120716

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
  Architecture       : unknown_unknown

 === MPI === 
  Parallel build : no
  Parallel I/O   : no
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

            HAVE_FC_GETENV     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES

              HAVE_FC_NULL         HAVE_FC_STREAM_IO          HAVE_FORTRAN2003

             HAVE_OS_LINUX                HAVE_TIMER         HAVE_TIMER_ABINIT

         HAVE_TIMER_SERIAL         HAVE_TRIO_ETSF_IO          HAVE_TRIO_NETCDF

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> si_relaxedion.in
- output file    -> si_relaxedion.out
- root for input  files -> reli
- root for output files -> relo

 instrng :   104 lines of input have been read
  m_ab6_invars_f90 (ab6_invars_load) : token%timopt=           1

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /home/linux/Desktop/abinit-6.12.3/tests/Psps_for_tests/Si_ps.abinit.paw
  read the values zionpsp=  4.0 , pspcod=   7 , lmax=   2
 3 0.                                   : shape_type,rshape                      

 inpspheads : deduce mpsang  =   3, n1xccc  =   1.

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is aP (primitive triclinic)
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is aP (primitive triclinic)

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    1.570974E+02
       Simple Lattice Grid
  inkpts : exit 
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=  432 and mkqmem =   432, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=  432 and mk1mem =   432, ground state wf handled in core.

 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    1.570974E+02
       Simple Lattice Grid
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00

 chkneu: nelect_occ=  0.18800000E+03, zval=  0.18800000E+03,
         and input value of charge=  0.00000000000000E+00,
   nelec_occ is computed from occ and wtk
   zval is nominal charge of all nuclei, computed from zion (read in psp),
   charge is an input variable (usually 0).

 WARNING - These should obey zval-nelect_occ=charge to better than  0.10E-10
   Action : check input file for occ,wtk, and charge.
   Note that wtk is NOT automatically normalized when occopt=2,
   but IS automatically normalized otherwise.


 getng is called for the coarse grid:
 For input ecut=  1.500000E+01 best grid ngfft=      48      96      72
       max ecut=  1.514558E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    48   96   72
  Augmented FFT divisions ...................    49   97   72
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=   14493

 getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  4.000000E+01 best grid ngfft=      80     160     120
       max ecut=  4.206915E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    80  160  120
  Augmented FFT divisions ...................    81  161  120
  FFT algorithm .............................   112
  FFT cache size ............................    16

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3820.
 setmqgrid : COMMENT -
  The number of points "mqgriddg" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     6238.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         2    iscf =        17 xclevel =         1
  lmnmax =        18   lnmax =         6   mband =       258  mffmem =         1
P  mgfft =        96   mkmem =         0 mpssoang=         3     mpw =     14493
  mqgrid =      6238   natom =        47    nfft =    331776    nkpt =       432
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         1  ntypat =         1  occopt =         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=       160    nfftf =   1536000
================================================================================
P This job should need less than                    2079.207 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :  24648.009 Mbytes ; DEN or POT disk file :     11.721 Mbytes.
  mkmem==0 => use of 2 WF temporary disk files
================================================================================

 Biggest array : pawfgrtab%gylm(gr), with    315.0851 MBytes.
 memana : allocated an array of    315.085 Mbytes, for testing purposes.
 memana : allocated    2079.207 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-   nproc =    1
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (relo_OUT.nc)

            acell      1.8897261329E+01  3.7947401502E+01  2.9064932787E+01 Bohr
              amu      2.80855000E+01
           diemac      1.20000000E+01
             ecut      1.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           getwfk          -1
           ionmov           2
              ixc           7
              kpt      0.00000000E+00 -8.33333333E-02  0.00000000E+00
                       0.00000000E+00 -2.50000000E-01  0.00000000E+00
                       8.33333333E-02 -1.66666667E-01  0.00000000E+00
                       1.66666667E-01 -8.33333333E-02  0.00000000E+00
                       0.00000000E+00 -1.66666667E-01  8.33333333E-02
                       8.33333333E-02 -8.33333333E-02  8.33333333E-02
                       0.00000000E+00 -8.33333333E-02  1.66666667E-01
                       0.00000000E+00 -4.16666667E-01  0.00000000E+00
                       8.33333333E-02 -3.33333333E-01  0.00000000E+00
                       1.66666667E-01 -2.50000000E-01  0.00000000E+00
                       2.50000000E-01 -1.66666667E-01  0.00000000E+00
                       3.33333333E-01 -8.33333333E-02  0.00000000E+00
                       0.00000000E+00 -3.33333333E-01  8.33333333E-02
                       8.33333333E-02 -2.50000000E-01  8.33333333E-02
                       1.66666667E-01 -1.66666667E-01  8.33333333E-02
                       2.50000000E-01 -8.33333333E-02  8.33333333E-02
                       0.00000000E+00 -2.50000000E-01  1.66666667E-01
                       8.33333333E-02 -1.66666667E-01  1.66666667E-01
                       1.66666667E-01 -8.33333333E-02  1.66666667E-01
                       0.00000000E+00 -1.66666667E-01  2.50000000E-01
                       8.33333333E-02 -8.33333333E-02  2.50000000E-01
                       0.00000000E+00 -8.33333333E-02  3.33333333E-01
                       8.33333333E-02  5.00000000E-01  0.00000000E+00
                       1.66666667E-01 -4.16666667E-01  0.00000000E+00
                       2.50000000E-01 -3.33333333E-01  0.00000000E+00
                       3.33333333E-01 -2.50000000E-01  0.00000000E+00
                       4.16666667E-01 -1.66666667E-01  0.00000000E+00
                       5.00000000E-01 -8.33333333E-02  0.00000000E+00
                       0.00000000E+00  5.00000000E-01  8.33333333E-02
                       8.33333333E-02 -4.16666667E-01  8.33333333E-02
                       1.66666667E-01 -3.33333333E-01  8.33333333E-02
                       2.50000000E-01 -2.50000000E-01  8.33333333E-02
                       3.33333333E-01 -1.66666667E-01  8.33333333E-02
                       4.16666667E-01 -8.33333333E-02  8.33333333E-02
                       0.00000000E+00 -4.16666667E-01  1.66666667E-01
                       8.33333333E-02 -3.33333333E-01  1.66666667E-01
                       1.66666667E-01 -2.50000000E-01  1.66666667E-01
                       2.50000000E-01 -1.66666667E-01  1.66666667E-01
                       3.33333333E-01 -8.33333333E-02  1.66666667E-01
                       0.00000000E+00 -3.33333333E-01  2.50000000E-01
                       8.33333333E-02 -2.50000000E-01  2.50000000E-01
                       1.66666667E-01 -1.66666667E-01  2.50000000E-01
                       2.50000000E-01 -8.33333333E-02  2.50000000E-01
                       0.00000000E+00 -2.50000000E-01  3.33333333E-01
                       8.33333333E-02 -1.66666667E-01  3.33333333E-01
                       1.66666667E-01 -8.33333333E-02  3.33333333E-01
                       0.00000000E+00 -1.66666667E-01  4.16666667E-01
                       8.33333333E-02 -8.33333333E-02  4.16666667E-01
                       0.00000000E+00 -8.33333333E-02  5.00000000E-01
                       8.33333333E-02  3.33333333E-01  0.00000000E+00
                       outvar1 : Printing only first  50 k-points.
          kptrlen      1.57097433E+02
         kptrlatt     12  0  0  -6  6  6   6 -6  6
P           mkmem           0
            natom          47
            nband         258
            ngfft          48      96      72
          ngfftdg          80     160     120
             nkpt         432
            nstep         200
             nsym           1
            ntime         100
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
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
        pawecutdg      4.00000000E+01 Hartree
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      0.00000000E+00  5.00000000E-01  5.00000000E-01
          spgroup           1
           toldfe      1.00000000E-12 Hartree
           tolmxf      1.00000000E-05
           tsmear      1.00000000E-02 Hartree
            typat      1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1
           useylm           1
              wtk        0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231
                       outvars : Printing only first  50 k-points.
           xangst      5.0000000000E+00  1.7860920000E+01  0.0000000000E+00
                       5.0000000000E+00  1.0100000000E-01  0.0000000000E+00
                       5.0000000000E+00  1.2109950000E+00  1.9225677400E+00
                       5.0000000000E+00  3.4309850000E+00  1.9225677400E+00
                       5.0000000000E+00  4.5409800000E+00  2.9375236054E-17
                       5.0000000000E+00  6.7609700000E+00 -1.1750094422E-16
                       5.0000000000E+00  7.8709650000E+00  1.9225677400E+00
                       5.0000000000E+00  1.0090955000E+01  1.9225677400E+00
                       5.0000000000E+00  1.1200950000E+01  0.0000000000E+00
                       5.0000000000E+00  1.3420940000E+01 -4.7000377687E-16
                       5.0000000000E+00  1.4530935000E+01  1.9225677400E+00
                       5.0000000000E+00  1.6750925000E+01  1.9225677400E+00
                       5.0000000000E+00  1.7860920000E+01  3.8451354700E+00
                       5.0000000000E+00  1.0100000000E-01  3.8451354700E+00
                       5.0000000000E+00  1.2109950000E+00  5.7677032100E+00
                       5.0000000000E+00  3.4309850000E+00  5.7677032100E+00
                       5.0000000000E+00  4.5409800000E+00  3.8451354700E+00
                       5.0000000000E+00  6.7609700000E+00  3.8451354700E+00
                       5.0000000000E+00  7.8709650000E+00  5.7677032100E+00
                       5.0000000000E+00  1.1200950000E+01  3.8451354700E+00
                       5.0000000000E+00  1.3420940000E+01  3.8451354700E+00
                       5.0000000000E+00  1.4530935000E+01  5.7677032100E+00
                       5.0000000000E+00  1.6750925000E+01  5.7677032100E+00
                       5.0000000000E+00  1.7860920000E+01  7.6902709400E+00
                       5.0000000000E+00  1.0100000000E-01  7.6902709400E+00
                       5.0000000000E+00  1.2109950000E+00  9.6128386800E+00
                       5.0000000000E+00  3.4309850000E+00  9.6128386800E+00
                       5.0000000000E+00  4.5409800000E+00  7.6902709400E+00
                       5.0000000000E+00  6.7609700000E+00  7.6902709400E+00
                       5.0000000000E+00  7.8709650000E+00  9.6128386800E+00
                       5.0000000000E+00  1.0090955000E+01  9.6128386800E+00
                       5.0000000000E+00  1.1200950000E+01  7.6902709400E+00
                       5.0000000000E+00  1.3420940000E+01  7.6902709400E+00
                       5.0000000000E+00  1.4530935000E+01  9.6128386800E+00
                       5.0000000000E+00  1.6750925000E+01  9.6128386800E+00
                       5.0000000000E+00  1.7860920000E+01  1.1535406420E+01
                       5.0000000000E+00  1.0100000000E-01  1.1535406420E+01
                       5.0000000000E+00  1.2109950000E+00  1.3457974150E+01
                       5.0000000000E+00  3.4309850000E+00  1.3457974150E+01
                       5.0000000000E+00  4.5409800000E+00  1.1535406420E+01
                       5.0000000000E+00  6.7609700000E+00  1.1535406420E+01
                       5.0000000000E+00  7.8709650000E+00  1.3457974150E+01
                       5.0000000000E+00  1.0090955000E+01  1.3457974150E+01
                       5.0000000000E+00  1.1200950000E+01  1.1535406420E+01
                       5.0000000000E+00  1.3420940000E+01  1.1535406420E+01
                       5.0000000000E+00  1.4530935000E+01  1.3457974150E+01
                       5.0000000000E+00  1.6750925000E+01  1.3457974150E+01
            xcart      9.4486306644E+00  3.3752247281E+01  0.0000000000E+00
                       9.4486306644E+00  1.9086233942E-01  0.0000000000E+00
                       9.4486306644E+00  2.2884488983E+00  3.6331265005E+00
                       9.4486306644E+00  6.4836220160E+00  3.6331265005E+00
                       9.4486306644E+00  8.5812085749E+00  5.5511151231E-17
                       9.4486306644E+00  1.2776381693E+01 -2.2204460493E-16
                       9.4486306644E+00  1.4873968252E+01  3.6331265005E+00
                       9.4486306644E+00  1.9069141369E+01  3.6331265005E+00
                       9.4486306644E+00  2.1166727928E+01  0.0000000000E+00
                       9.4486306644E+00  2.5361901046E+01 -8.8817841970E-16
                       9.4486306644E+00  2.7459487605E+01  3.6331265005E+00
                       9.4486306644E+00  3.1654660723E+01  3.6331265005E+00
                       9.4486306644E+00  3.3752247281E+01  7.2662529821E+00
                       9.4486306644E+00  1.9086233942E-01  7.2662529821E+00
                       9.4486306644E+00  2.2884488983E+00  1.0899379483E+01
                       9.4486306644E+00  6.4836220160E+00  1.0899379483E+01
                       9.4486306644E+00  8.5812085749E+00  7.2662529821E+00
                       9.4486306644E+00  1.2776381693E+01  7.2662529821E+00
                       9.4486306644E+00  1.4873968252E+01  1.0899379483E+01
                       9.4486306644E+00  2.1166727928E+01  7.2662529821E+00
                       9.4486306644E+00  2.5361901046E+01  7.2662529821E+00
                       9.4486306644E+00  2.7459487605E+01  1.0899379483E+01
                       9.4486306644E+00  3.1654660723E+01  1.0899379483E+01
                       9.4486306644E+00  3.3752247281E+01  1.4532505964E+01
                       9.4486306644E+00  1.9086233942E-01  1.4532505964E+01
                       9.4486306644E+00  2.2884488983E+00  1.8165632465E+01
                       9.4486306644E+00  6.4836220160E+00  1.8165632465E+01
                       9.4486306644E+00  8.5812085749E+00  1.4532505964E+01
                       9.4486306644E+00  1.2776381693E+01  1.4532505964E+01
                       9.4486306644E+00  1.4873968252E+01  1.8165632465E+01
                       9.4486306644E+00  1.9069141369E+01  1.8165632465E+01
                       9.4486306644E+00  2.1166727928E+01  1.4532505964E+01
                       9.4486306644E+00  2.5361901046E+01  1.4532505964E+01
                       9.4486306644E+00  2.7459487605E+01  1.8165632465E+01
                       9.4486306644E+00  3.1654660723E+01  1.8165632465E+01
                       9.4486306644E+00  3.3752247281E+01  2.1798758965E+01
                       9.4486306644E+00  1.9086233942E-01  2.1798758965E+01
                       9.4486306644E+00  2.2884488983E+00  2.5431885447E+01
                       9.4486306644E+00  6.4836220160E+00  2.5431885447E+01
                       9.4486306644E+00  8.5812085749E+00  2.1798758965E+01
                       9.4486306644E+00  1.2776381693E+01  2.1798758965E+01
                       9.4486306644E+00  1.4873968252E+01  2.5431885447E+01
                       9.4486306644E+00  1.9069141369E+01  2.5431885447E+01
                       9.4486306644E+00  2.1166727928E+01  2.1798758965E+01
                       9.4486306644E+00  2.5361901046E+01  2.1798758965E+01
                       9.4486306644E+00  2.7459487605E+01  2.5431885447E+01
                       9.4486306644E+00  3.1654660723E+01  2.5431885447E+01
             xred      1.2860920000E+00 -6.4045535808E-01  1.4863574006E+00
                      -4.8990000000E-01  2.4396316898E-01  3.3165371737E-01
                      -1.8664372600E-01  2.8442812523E-01  2.7882235688E-01
                       3.5355274000E-02  1.7387580935E-01  4.2316031728E-01
                      -4.5902000000E-02  2.2858537217E-02  6.2032963818E-01
                       1.7609700000E-01 -8.7693778665E-02  7.6466759858E-01
                       4.7935327400E-01 -4.7228822413E-02  7.1183623809E-01
                       7.0135227400E-01 -1.5778113830E-01  8.5617419850E-01
                       6.2009500000E-01 -3.0879841043E-01  1.0533435194E+00
                       8.4209400000E-01 -4.1935072631E-01  1.1976814798E+00
                       1.1453502740E+00 -3.7888577006E-01  1.1448501193E+00
                       1.3673492740E+00 -4.8943808594E-01  1.2891880797E+00
                       1.6706055470E+00 -4.4897313019E-01  1.2363567199E+00
                      -1.0538645300E-01  4.3544539687E-01  8.1653036637E-02
                       1.9786982100E-01  4.7591035312E-01  2.8821676148E-02
                       4.1986882100E-01  3.6535803724E-01  1.7315963655E-01
                       3.3861154700E-01  2.1434076511E-01  3.7032895745E-01
                       5.6061054700E-01  1.0378844922E-01  5.1466691785E-01
                       8.6386682100E-01  1.4425340547E-01  4.6183555736E-01
                       1.0046085470E+00 -1.1731618254E-01  8.0334283866E-01
                       1.2266075470E+00 -2.2786849842E-01  9.4768079906E-01
                       1.5298638210E+00 -1.8740354217E-01  8.9484943857E-01
                       1.7518628210E+00 -2.9795585805E-01  1.0391873990E+00
                       2.0551190940E+00 -2.5749090230E-01  9.8635603914E-01
                       2.7912709400E-01  6.2692762476E-01 -1.6834764409E-01
                       5.8238336800E-01  6.6739258101E-01 -2.2117900458E-01
                       8.0438236800E-01  5.5684026513E-01 -7.6841044179E-02
                       7.2312509400E-01  4.0582299299E-01  1.2032827671E-01
                       9.4512409400E-01  2.9527067711E-01  2.6466623712E-01
                       1.2483803680E+00  3.3573563336E-01  2.1183487663E-01
                       1.4703793680E+00  2.2518331748E-01  3.5617283703E-01
                       1.3891220940E+00  7.4166045347E-02  5.5334215793E-01
                       1.6111210940E+00 -3.6386270536E-02  6.9768011833E-01
                       1.9143773680E+00  4.0786857163E-03  6.4484875784E-01
                       2.1363763680E+00 -1.0647363017E-01  7.8918671825E-01
                       2.4396326420E+00 -6.6008673914E-02  7.3635535776E-01
                       6.6364064200E-01  8.1840985314E-01 -4.1834832548E-01
                       9.6689691500E-01  8.5887480890E-01 -4.7117968532E-01
                       1.1888959150E+00  7.4832249302E-01 -3.2684172491E-01
                       1.1076386420E+00  5.9730522138E-01 -1.2967240467E-01
                       1.3296376420E+00  4.8675290550E-01  1.4665555736E-02
                       1.6328939150E+00  5.2721786125E-01 -3.8165804103E-02
                       1.8548929150E+00  4.1666554537E-01  1.0617215630E-01
                       1.7736356420E+00  2.6564827373E-01  3.0334147654E-01
                       1.9956346420E+00  1.5509595785E-01  4.4767943695E-01
                       2.2988909150E+00  1.9556091360E-01  3.9484807711E-01
                       2.5208899150E+00  8.5008597722E-02  5.3918603752E-01
            znucl       14.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    47)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (   432) of the index (     1)  differs from its standard size (     1)
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

================================================================================
== DATASET  1 ==================================================================

