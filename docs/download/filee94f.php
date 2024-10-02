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
- ( at 11h32 )
  

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

 instrng :   103 lines of input have been read
  m_ab6_invars_f90 (ab6_invars_load) : token%timopt=           1

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /home/linux/Desktop/abinit-6.12.3/tests/Psps_for_tests/14-Si.nlcc.UPF
  Reading pseudopotential file in UPF format...
  ...done
 upf2abinit: XC string from pseudopotential is :
>   SLA  PW  NOGX  NO<

 inpspheads : deduce mpsang  =   4, n1xccc  =2501.

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oP (primitive orthorhombic)
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  3, is more symmetric
  than the real one, iholohedry=  2, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is mP (primitive monoclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symplanes : the symmetry operation no.   2 is a mirror plane
 symspgr : spgroup=   6  Pm   (=Cs^1)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    3.487792E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=  258 and mkqmem =   258, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=  258 and mk1mem =   258, ground state wf handled in core.

 Symmetries : space group Pm (#  6); Bravais mP (primitive monocl.)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    3.487792E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
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
  0.00  0.00  0.00  0.00

 chkneu: nelect_occ=  0.18800000E+03, zval=  0.18800000E+03,
         and input value of charge=  0.00000000000000E+00,
   nelec_occ is computed from occ and wtk
   zval is nominal charge of all nuclei, computed from zion (read in psp),
   charge is an input variable (usually 0).

 WARNING - These should obey zval-nelect_occ=charge to better than  0.10E-10
   Action : check input file for occ,wtk, and charge.
   Note that wtk is NOT automatically normalized when occopt=2,
   but IS automatically normalized otherwise.

 For input ecut=  4.000000E+01 best grid ngfft=     108     225     180
       max ecut=  4.029578E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   108  225  180
  Augmented FFT divisions ...................   109  225  180
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=  251974

 getdim_nloc : deduce lmnmax  =  11, lnmax  =   3,
                      lmnmaxso=  11, lnmaxso=   3.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :    10804.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         2    iscf =         7 xclevel =         1
  lmnmax =         3   lnmax =         3   mband =       100  mffmem =         1
P  mgfft =       225   mkmem =         0 mpssoang=         4     mpw =    251974
  mqgrid =     10804   natom =        47    nfft =   4374000    nkpt =       258
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         2  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                    1702.196 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :  99196.309 Mbytes ; DEN or POT disk file :     33.373 Mbytes.
  mkmem==0 => use of 2 WF temporary disk files
================================================================================

 Biggest array : f_fftgr(disk), with    533.9375 MBytes.
 memana : allocated an array of    533.938 Mbytes, for testing purposes.
 memana : allocated    1702.196 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =    1
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (relo_OUT.nc)

            acell      1.8897259887E+01  3.7947398604E+01  2.9064930567E+01 Bohr
              amu      2.80855000E+01
           diemac      1.20000000E+01
             ecut      4.00000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           getwfk          -1
           ionmov           2
              ixc           7
              kpt     -8.33333333E-02 -1.66666667E-01  0.00000000E+00
                      -1.66666667E-01 -8.33333333E-02  0.00000000E+00
                      -8.33333333E-02 -8.33333333E-02  8.33333333E-02
                      -8.33333333E-02 -3.33333333E-01  0.00000000E+00
                      -1.66666667E-01 -2.50000000E-01  0.00000000E+00
                      -8.33333333E-02 -2.50000000E-01  8.33333333E-02
                      -2.50000000E-01 -1.66666667E-01  0.00000000E+00
                      -1.66666667E-01 -1.66666667E-01  8.33333333E-02
                      -8.33333333E-02 -1.66666667E-01  1.66666667E-01
                      -3.33333333E-01 -8.33333333E-02  0.00000000E+00
                      -2.50000000E-01 -8.33333333E-02  8.33333333E-02
                      -1.66666667E-01 -8.33333333E-02  1.66666667E-01
                      -8.33333333E-02 -8.33333333E-02  2.50000000E-01
                      -8.33333333E-02  5.00000000E-01  0.00000000E+00
                      -1.66666667E-01 -4.16666667E-01  0.00000000E+00
                      -8.33333333E-02 -4.16666667E-01  8.33333333E-02
                      -2.50000000E-01 -3.33333333E-01  0.00000000E+00
                      -1.66666667E-01 -3.33333333E-01  8.33333333E-02
                      -8.33333333E-02 -3.33333333E-01  1.66666667E-01
                      -3.33333333E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -2.50000000E-01  8.33333333E-02
                      -1.66666667E-01 -2.50000000E-01  1.66666667E-01
                      -8.33333333E-02 -2.50000000E-01  2.50000000E-01
                      -4.16666667E-01 -1.66666667E-01  0.00000000E+00
                      -3.33333333E-01 -1.66666667E-01  8.33333333E-02
                      -2.50000000E-01 -1.66666667E-01  1.66666667E-01
                      -1.66666667E-01 -1.66666667E-01  2.50000000E-01
                      -8.33333333E-02 -1.66666667E-01  3.33333333E-01
                       5.00000000E-01 -8.33333333E-02  0.00000000E+00
                      -4.16666667E-01 -8.33333333E-02  8.33333333E-02
                      -3.33333333E-01 -8.33333333E-02  1.66666667E-01
                      -2.50000000E-01 -8.33333333E-02  2.50000000E-01
                      -1.66666667E-01 -8.33333333E-02  3.33333333E-01
                      -8.33333333E-02 -8.33333333E-02  4.16666667E-01
                      -8.33333333E-02  4.16666667E-01  8.33333333E-02
                      -2.50000000E-01  5.00000000E-01  0.00000000E+00
                      -1.66666667E-01  5.00000000E-01  8.33333333E-02
                      -8.33333333E-02  5.00000000E-01  1.66666667E-01
                      -3.33333333E-01 -4.16666667E-01  0.00000000E+00
                      -2.50000000E-01 -4.16666667E-01  8.33333333E-02
                      -1.66666667E-01 -4.16666667E-01  1.66666667E-01
                      -8.33333333E-02 -4.16666667E-01  2.50000000E-01
                      -4.16666667E-01 -3.33333333E-01  0.00000000E+00
                      -3.33333333E-01 -3.33333333E-01  8.33333333E-02
                      -2.50000000E-01 -3.33333333E-01  1.66666667E-01
                      -1.66666667E-01 -3.33333333E-01  2.50000000E-01
                      -8.33333333E-02 -3.33333333E-01  3.33333333E-01
                       5.00000000E-01 -2.50000000E-01  0.00000000E+00
                      -4.16666667E-01 -2.50000000E-01  8.33333333E-02
                      -3.33333333E-01 -2.50000000E-01  1.66666667E-01
                       outvar1 : Printing only first  50 k-points.
          kptrlen      3.48779167E+02
         kptrlatt     12  0  0  -6  6  6  -6 -6  6
P           mkmem           0
            natom          47
            nband         100
            ngfft         108     225     180
             nkpt         258
            nstep         200
             nsym           2
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
                       0.000000  0.000000  0.000000  0.000000
           shiftk      0.00000000E+00  5.00000000E-01  5.00000000E-01
          spgroup           6
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.0000001  0.0000000  0.0000000
           toldfe      1.00000000E-12 Hartree
           tolmxf      1.00000000E-05
           tsmear      1.00000000E-02 Hartree
            typat      1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1
              wtk        0.00463    0.00463    0.00463    0.00463    0.00463    0.00463
                         0.00463    0.00463    0.00463    0.00463    0.00463    0.00463
                         0.00463    0.00231    0.00463    0.00463    0.00463    0.00463
                         0.00463    0.00463    0.00463    0.00463    0.00463    0.00463
                         0.00463    0.00463    0.00463    0.00463    0.00231    0.00463
                         0.00463    0.00463    0.00463    0.00463    0.00463    0.00231
                         0.00463    0.00463    0.00463    0.00463    0.00463    0.00463
                         0.00463    0.00463    0.00463    0.00463    0.00463    0.00231
                         0.00463    0.00463
                       outvars : Printing only first  50 k-points.
           xangst      5.0000000000E+00  1.7860920000E+01  0.0000000000E+00
                       5.0000000000E+00  1.0100000000E-01  0.0000000000E+00
                       5.0000000000E+00  1.2109950000E+00  1.9225677400E+00
                       5.0000000000E+00  3.4309850000E+00  1.9225677400E+00
                       5.0000000000E+00  4.5409800000E+00  0.0000000000E+00
                       5.0000000000E+00  6.7609700000E+00  0.0000000000E+00
                       5.0000000000E+00  7.8709650000E+00  1.9225677400E+00
                       5.0000000000E+00  1.0090955000E+01  1.9225677400E+00
                       5.0000000000E+00  1.1200950000E+01  0.0000000000E+00
                       5.0000000000E+00  1.3420940000E+01  0.0000000000E+00
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
                       9.4486306644E+00  8.5812085749E+00  0.0000000000E+00
                       9.4486306644E+00  1.2776381693E+01  0.0000000000E+00
                       9.4486306644E+00  1.4873968252E+01  3.6331265005E+00
                       9.4486306644E+00  1.9069141369E+01  3.6331265005E+00
                       9.4486306644E+00  2.1166727928E+01  0.0000000000E+00
                       9.4486306644E+00  2.5361901046E+01  0.0000000000E+00
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
             xred      5.0000003815E-01  8.8944825003E-01  0.0000000000E+00
                       5.0000003815E-01  5.0296554294E-03  0.0000000000E+00
                       5.0000003815E-01  6.0305817592E-02  1.2500035024E-01
                       5.0000003815E-01  1.7085814192E-01  1.2500035024E-01
                       5.0000003815E-01  2.2613430408E-01  0.0000000000E+00
                       5.0000003815E-01  3.3668662840E-01  0.0000000000E+00
                       5.0000003815E-01  3.9196279057E-01  1.2500035024E-01
                       5.0000003815E-01  5.0251511489E-01  1.2500035024E-01
                       5.0000003815E-01  5.5779127705E-01  0.0000000000E+00
                       5.0000003815E-01  6.6834360138E-01  0.0000000000E+00
                       5.0000003815E-01  7.2361976354E-01  1.2500035024E-01
                       5.0000003815E-01  8.3417208786E-01  1.2500035024E-01
                       5.0000003815E-01  8.8944825003E-01  2.5000069983E-01
                       5.0000003815E-01  5.0296554294E-03  2.5000069983E-01
                       5.0000003815E-01  6.0305817592E-02  3.7500105006E-01
                       5.0000003815E-01  1.7085814192E-01  3.7500105006E-01
                       5.0000003815E-01  2.2613430408E-01  2.5000069983E-01
                       5.0000003815E-01  3.3668662840E-01  2.5000069983E-01
                       5.0000003815E-01  3.9196279057E-01  3.7500105006E-01
                       5.0000003815E-01  5.5779127705E-01  2.5000069983E-01
                       5.0000003815E-01  6.6834360138E-01  2.5000069983E-01
                       5.0000003815E-01  7.2361976354E-01  3.7500105006E-01
                       5.0000003815E-01  8.3417208786E-01  3.7500105006E-01
                       5.0000003815E-01  8.8944825003E-01  5.0000139965E-01
                       5.0000003815E-01  5.0296554294E-03  5.0000139965E-01
                       5.0000003815E-01  6.0305817592E-02  6.2500174989E-01
                       5.0000003815E-01  1.7085814192E-01  6.2500174989E-01
                       5.0000003815E-01  2.2613430408E-01  5.0000139965E-01
                       5.0000003815E-01  3.3668662840E-01  5.0000139965E-01
                       5.0000003815E-01  3.9196279057E-01  6.2500174989E-01
                       5.0000003815E-01  5.0251511489E-01  6.2500174989E-01
                       5.0000003815E-01  5.5779127705E-01  5.0000139965E-01
                       5.0000003815E-01  6.6834360138E-01  5.0000139965E-01
                       5.0000003815E-01  7.2361976354E-01  6.2500174989E-01
                       5.0000003815E-01  8.3417208786E-01  6.2500174989E-01
                       5.0000003815E-01  8.8944825003E-01  7.5000210013E-01
                       5.0000003815E-01  5.0296554294E-03  7.5000210013E-01
                       5.0000003815E-01  6.0305817592E-02  8.7500244972E-01
                       5.0000003815E-01  1.7085814192E-01  8.7500244972E-01
                       5.0000003815E-01  2.2613430408E-01  7.5000210013E-01
                       5.0000003815E-01  3.3668662840E-01  7.5000210013E-01
                       5.0000003815E-01  3.9196279057E-01  8.7500244972E-01
                       5.0000003815E-01  5.0251511489E-01  8.7500244972E-01
                       5.0000003815E-01  5.5779127705E-01  7.5000210013E-01
                       5.0000003815E-01  6.6834360138E-01  7.5000210013E-01
                       5.0000003815E-01  7.2361976354E-01  8.7500244972E-01
                       5.0000003815E-01  8.3417208786E-01  8.7500244972E-01
            znucl       14.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    47)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (   258) of the index (     1)  differs from its standard size (     1)
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

dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    47)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (   258) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :    10804.

 getdim_nloc : deduce lmnmax  =  11, lnmax  =   3,
                      lmnmaxso=  11, lnmaxso=   3.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)

 Unit cell volume ucvol=  2.0842516E+04 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 108 225 180
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.00738
- pspatm: opening atomic psp file    /home/linux/Desktop/abinit-6.12.3/tests/Psps_for_tests/14-Si.nlcc.UPF
  Reading pseudopotential file in UPF format...
  ...done
 upf2abinit: XC string from pseudopotential is :
>   SLA  PW  NOGX  NO<
 cc_derivatives : enter
 pspatm: epsatm=    9.10637364
         --- l  ekb(1:nproj) -->
             0    0.371816
             1    0.174226
             3   -0.371736
 pspatm: atomic psp has been read  and splines computed

   8.04639175E+04                                ecore*ucvol(ha*bohr**3)
 inwffil about to open unit  11 for file=tmp_WF1
 wfconv:   100 bands initialized randomly with npw=251809, for ikpt=     1
 wfconv:   100 bands initialized randomly with npw=251778, for ikpt=     2
 wfconv:   100 bands initialized randomly with npw=251819, for ikpt=     3
 wfconv:   100 bands initialized randomly with npw=251779, for ikpt=     4
 wfconv:   100 bands initialized randomly with npw=251866, for ikpt=     5
 wfconv:   100 bands initialized randomly with npw=251812, for ikpt=     6
 wfconv:   100 bands initialized randomly with npw=251852, for ikpt=     7
 wfconv:   100 bands initialized randomly with npw=251814, for ikpt=     8
 wfconv:   100 bands initialized randomly with npw=251820, for ikpt=     9
 wfconv:   100 bands initialized randomly with npw=251848, for ikpt=    10
 wfconv:   100 bands initialized randomly with npw=251849, for ikpt=    11
 wfconv:   100 bands initialized randomly with npw=251832, for ikpt=    12
 wfconv:   100 bands initialized randomly with npw=251796, for ikpt=    13
 wfconv:   100 bands initialized randomly with npw=251830, for ikpt=    14
 wfconv:   100 bands initialized randomly with npw=251893, for ikpt=    15
 wfconv:   100 bands initialized randomly with npw=251834, for ikpt=    16
 wfconv:   100 bands initialized randomly with npw=251916, for ikpt=    17
 wfconv:   100 bands initialized randomly with npw=251868, for ikpt=    18
 wfconv:   100 bands initialized randomly with npw=251843, for ikpt=    19
