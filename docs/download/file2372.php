[NotLiquidSide:07292] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ras_dash_host: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
[NotLiquidSide:07292] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ras_gridengine: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
[NotLiquidSide:07292] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ras_localhost: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
[NotLiquidSide:07292] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_hnp: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
[NotLiquidSide:07292] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_orted: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
[NotLiquidSide:07292] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_proxy: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
[NotLiquidSide:07292] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_iof_proxy: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
[NotLiquidSide:07292] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_iof_svc: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
  ABINIT 
  
  Give name for formatted input file: 
C4F_Icutcoul.in
  Give name for formatted output file:
C4F_Icutcoul.out
  Give root name for generic input files:
C4F7_GW_Fuller_i
  Give root name for generic output files:
C4F_Icutcoul_o
  Give root name for generic temporary files:
tmp
-P-0000  leave_test : synchronization done...
-P-0001  leave_test : synchronization done...
-P-0002  leave_test : synchronization done...
-P-0003  leave_test : synchronization done...

.Version 6.2.2  of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.4 computer) 

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

.Starting date : Sun 24 Oct 2010.
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.2.2
  Build target  : x86_64_linux_gnu4.4
  Build date    : 20101024

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g -O3 -fschedule-insns2 -march=nocona -mmmx -msse -msse2 -msse3 -mfpmath=sse
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g -O3 -fschedule-insns2 -march=nocona -mmmx -msse -msse2 -msse3 -mfpmath=sse
  Fortran compiler : gnu4.4
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : yes
  Optimization level : standard
  Architecture       : intel_xeon

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes

 === Linear algebra === 
  Library flavor : @linalg_flavor@
  Use ScaLAPACK  : no

 === Plug-ins === 
  BigDFT    : yes
  ETSF I/O  : yes
  LibXC     : yes
  FoX       : no
  NetCDF    : yes
  Wannier90 : yes

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no
  Macroave build      : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O3 -fschedule-insns2 -march=nocona -mmmx -msse -msse2 -msse3 -mfpmath=sse


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

               HAVE_BIGDFT              HAVE_ETSF_IO              HAVE_FC_EXIT

             HAVE_FC_FLUSH             HAVE_FC_GAMMA            HAVE_FC_GETENV

          HAVE_FC_INT_QUAD     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES

              HAVE_FC_NULL          HAVE_FORTRAN2003                HAVE_LIBXC

                  HAVE_MPI                 HAVE_MPI2               HAVE_MPI_IO

               HAVE_NETCDF             HAVE_OS_LINUX              HAVE_STDIO_H

            HAVE_WANNIER90              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> C4F_Icutcoul.in
- output file    -> C4F_Icutcoul.out
- root for input  files -> C4F7_GW_Fuller_i
- root for output files -> C4F_Icutcoul_o

 instrng :    78 lines of input have been read

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /estruct/users/jej7x/psuedopotentials/6C.PSPNC

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is /estruct/users/jej7x/psuedopotentials/9F.PSPNC
  read the values zionpsp=  4.0 , pspcod=   1 , lmax=   1
  read the values zionpsp=  7.0 , pspcod=   1 , lmax=   1

 inpspheads : deduce mpsang  =   2, n1xccc  =2501.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)
 symspgr : the symmetry operation no.   1 is the identity
 symplanes : the symmetry operation no.   2 is a tertiary m plane
 symaxes : the symmetry operation no.   3 is a 6-axis
 symplanes : the symmetry operation no.   4 is a secondary m plane
 symaxes : the symmetry operation no.   5 is a 3-axis
 symplanes : the symmetry operation no.   6 is a tertiary m plane
 symaxes : the symmetry operation no.   7 is a 2-axis
 symplanes : the symmetry operation no.   8 is a secondary m plane
 symaxes : the symmetry operation no.   9 is a 3-axis
 symplanes : the symmetry operation no.  10 is a tertiary m plane
 symaxes : the symmetry operation no.  11 is a 6-axis
 symplanes : the symmetry operation no.  12 is a secondary m plane
 symspgr : spgroup= 183  P6 m m   (=C6v^1)
 getkgrid : length of smallest supercell vector (bohr)=    1.301385E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 npfft, npband and npkpt           1           1           4
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           4           4
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    6 and mkmem  =    24, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    6 and mkqmem =    24, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    6 and mk1mem =    24, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 invars1m : enter jdtset=     2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)
 symspgr : the symmetry operation no.   1 is the identity
 symplanes : the symmetry operation no.   2 is a tertiary m plane
 symaxes : the symmetry operation no.   3 is a 6-axis
 symplanes : the symmetry operation no.   4 is a secondary m plane
 symaxes : the symmetry operation no.   5 is a 3-axis
 symplanes : the symmetry operation no.   6 is a tertiary m plane
 symaxes : the symmetry operation no.   7 is a 2-axis
 symplanes : the symmetry operation no.   8 is a secondary m plane
 symaxes : the symmetry operation no.   9 is a 3-axis
 symplanes : the symmetry operation no.  10 is a tertiary m plane
 symaxes : the symmetry operation no.  11 is a 6-axis
 symplanes : the symmetry operation no.  12 is a secondary m plane
 symspgr : spgroup= 183  P6 m m   (=C6v^1)
 getkgrid : length of smallest supercell vector (bohr)=    1.301385E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 npfft, npband and npkpt           1           1           4
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           4           4
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    6 and mkmem  =    24, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    6 and mkqmem =    24, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    6 and mk1mem =    24, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 DATASET    1 : space group P6 m m (#183); Bravais hP (primitive hexag.)
 getkgrid : length of smallest supercell vector (bohr)=    1.301385E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00
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
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 setshells : ecut_trial =     3.00
 setshells : ecut_trial =     3.00

 setshells.F90:98:COMMENT
  One of the three variables ecutsigx, npwsigx, or nshsigx
 must be non-null. Returning.
 For input ecut=  2.983871E+00 best grid ngfft=      16      16      30
       max ecut=  3.075708E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    16   16   30
  Augmented FFT divisions ...................    17   17   30
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     360
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           1           0           0           0

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =       200  mffmem =         1
P  mgfft =        30   mkmem =         6 mpssoang=         2     mpw =       360
  mqgrid =      3001   natom =        10    nfft =      7680    nkpt =        24
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      12.235 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :     26.369 Mbytes ; DEN or POT disk file :      0.061 Mbytes.
================================================================================

 Biggest array : cg(disk), with      6.5938 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      6.594 Mbytes, for testing purposes.
 memana : allocated      12.235 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group P6 m m (#183); Bravais hP (primitive hexag.)
 getkgrid : length of smallest supercell vector (bohr)=    1.301385E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00
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
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 setshells : ecut_trial =     4.00

 setshells.F90:98:COMMENT
  One of the three variables ecuteps, npweps, or nsheps
 must be non-null. Returning.
 setshells : ecut_trial =     3.00
 For input ecut=  3.959645E+00 best grid ngfft=      18      18      36
       max ecut=  4.429019E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    18   18   36
  Augmented FFT divisions ...................    19   19   36
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     544
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           1           0           0           0

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =       200  mffmem =         1
P  mgfft =        36   mkmem =         6 mpssoang=         2     mpw =       544
  mqgrid =      3001   natom =        10    nfft =     11664    nkpt =        24
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      16.784 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :     39.846 Mbytes ; DEN or POT disk file :      0.091 Mbytes.
================================================================================

 Biggest array : cg(disk), with      9.9629 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      9.963 Mbytes, for testing purposes.
 memana : allocated      16.784 Mbytes, for testing purposes.
 The job will continue.
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008  1.00000000000000002E-008
 -outvars: echo values of preprocessed input variables --------
            acell    1.0733643616E+01  1.0733643616E+01  1.9000000000E+01 Bohr
              amu    1.20110000E+01  1.89984032E+01
             bdgw2    22   26   22   26
             ecut1   2.98387125E+00 Hartree
             ecut2   3.95964475E+00 Hartree
          ecuteps1   2.98387125E+00 Hartree
          ecuteps2   0.00000000E+00 Hartree
         ecutsigx1   0.00000000E+00 Hartree
         ecutsigx2   2.98387125E+00 Hartree
          ecutwfn1   2.98387125E+00 Hartree
          ecutwfn2   3.95964475E+00 Hartree
        freqremax1   1.00000000E+00 Hartree
        freqremax2   0.00000000E+00 Hartree
        freqspmax1   0.00000000E+00 Hartree
        freqspmax2   1.00000000E+00 Hartree
           getscr1        0
           getscr2        1
           getkss         1
        gw_sctype         4
      gw_toldfeig    1.00000000E-05 Hartree
         icutcoul         2
           istwfk      1    0    0    0    0    0    0    1    0    0
                       0    0    0    0    0    0    0    0    0    0
                       0    0    0    0
           jdtset      1    2
              kpt    0.00000000E+00  0.00000000E+00  0.00000000E+00
                     7.14285714E-02  0.00000000E+00  0.00000000E+00
                     1.42857143E-01  0.00000000E+00  0.00000000E+00
                     2.14285714E-01  0.00000000E+00  0.00000000E+00
                     2.85714286E-01  0.00000000E+00  0.00000000E+00
                     3.57142857E-01  0.00000000E+00  0.00000000E+00
                     4.28571429E-01  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  0.00000000E+00  0.00000000E+00
                     1.42857143E-01  7.14285714E-02  0.00000000E+00
                     2.14285714E-01  7.14285714E-02  0.00000000E+00
                     2.85714286E-01  7.14285714E-02  0.00000000E+00
                     3.57142857E-01  7.14285714E-02  0.00000000E+00
                     4.28571429E-01  7.14285714E-02  0.00000000E+00
                     5.00000000E-01  7.14285714E-02  0.00000000E+00
                     2.85714286E-01  1.42857143E-01  0.00000000E+00
                     3.57142857E-01  1.42857143E-01  0.00000000E+00
                     4.28571429E-01  1.42857143E-01  0.00000000E+00
                     5.00000000E-01  1.42857143E-01  0.00000000E+00
                    -4.28571429E-01  1.42857143E-01  0.00000000E+00
                     4.28571429E-01  2.14285714E-01  0.00000000E+00
                     5.00000000E-01  2.14285714E-01  0.00000000E+00
                    -4.28571429E-01  2.14285714E-01  0.00000000E+00
                    -4.28571429E-01  2.85714286E-01  0.00000000E+00
                    -3.57142857E-01  2.85714286E-01  0.00000000E+00
            kptgw2   0.00000000E+00  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  0.00000000E+00  0.00000000E+00
          kptrlen    1.30138513E+02
         kptrlatt   14  0  0   0 14  0   0  0  1
P           mkmem         6
            natom        10
            nband       200
           ndtset         2
          nfreqim1        4
          nfreqim2        0
          nfreqre1       10
          nfreqre2        0
          nfreqsp1        0
          nfreqsp2      100
            ngfft1       16      16      30
            ngfft2       18      18      36
           nkptgw1        0
           nkptgw2        2
             nkpt        24
           npweps1      363
           npweps2        0
          npwsigx1        0
          npwsigx2      363
           npwwfn1      363
           npwwfn2      527
           nsheps1       66
           nsheps2        0
          nshsigx1        0
          nshsigx2       66
           nshwfn1       66
           nshwfn2       90
            nstep        50
             nsym        12
           ntypat         2
              occ    2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  0.000000
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
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000
        optdriver1        3
        optdriver2        4
             rcut    9.50000000E+00 Bohr
            rprim    4.3301270189E-01  7.5000000000E-01  0.0000000000E+00
                    -4.3301270189E-01  7.5000000000E-01  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
          spgroup       183
           symrel    1  0  0   0  1  0   0  0  1      -1  1  0   0  1  0   0  0  1
                     0  1  0  -1  1  0   0  0  1      -1  0  0  -1  1  0   0  0  1
                    -1  1  0  -1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                    -1  0  0   0 -1  0   0  0  1       1 -1  0   0 -1  0   0  0  1
                     0 -1  0   1 -1  0   0  0  1       1  0  0   1 -1  0   0  0  1
                     1 -1  0   1  0  0   0  0  1       0  1  0   1  0  0   0  0  1
           timopt         2
            tnons    0.0000000  0.0000000  0.0000000    -0.0000000  0.0000000  0.0000000
                    -0.0000000  0.0000000  0.0000000    -0.0000000  0.0000000  0.0000000
                    -0.0000000  0.0000000  0.0000000    -0.0000000 -0.0000000  0.0000000
                    -0.0000000 -0.0000000  0.0000000     0.0000000 -0.0000000  0.0000000
                     0.0000000 -0.0000000  0.0000000     0.0000000 -0.0000000  0.0000000
                     0.0000000 -0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008  1.00000000000000002E-008
            typat    1  1  1  1  1  1  1  1  2  2
          vcutgeo    1.0000000  1.0000000  0.0000000
              wtk      0.00510    0.03061    0.03061    0.03061    0.03061    0.03061
                       0.03061    0.01531    0.03061    0.06122    0.06122    0.06122
                       0.06122    0.06122    0.03061    0.06122    0.06122    0.06122
                       0.03061    0.03061    0.06122    0.06122    0.03061    0.03061
           xangst    0.0000000000E+00  1.3898598639E+00 -1.2881266453E-01
                     0.0000000000E+00  2.8399997833E+00  2.1724499275E-01
                     1.2558580093E+00  3.5650697430E+00 -1.2881266453E-01
                    -1.2558580093E+00  3.5650697430E+00 -1.2881266453E-01
                     1.2558580093E+00  4.9549296070E+00 -1.2881266453E-01
                    -1.2558580093E+00  4.9549296070E+00 -1.2881266453E-01
                     0.0000000000E+00  5.6799995667E+00  2.1724499275E-01
                     0.0000000000E+00  7.1301394862E+00 -1.2881266453E-01
                     0.0000000000E+00  2.8399997833E+00  1.6637172415E+00
                     0.0000000000E+00  5.6799995667E+00  1.6637172415E+00
            xcart    0.0000000000E+00  2.6264545058E+00 -2.4342065840E-01
                     0.0000000000E+00  5.3668218079E+00  4.1053354004E-01
                     2.3732276993E+00  6.7370054590E+00 -2.4342065840E-01
                    -2.3732276993E+00  6.7370054590E+00 -2.4342065840E-01
                     2.3732276993E+00  9.3634599650E+00 -2.4342065840E-01
                    -2.3732276993E+00  9.3634599650E+00 -2.4342065840E-01
                     0.0000000000E+00  1.0733643616E+01  4.1053354004E-01
                     0.0000000000E+00  1.3474010918E+01 -2.4342065840E-01
                     0.0000000000E+00  5.3668218079E+00  3.1439699490E+00
                     0.0000000000E+00  1.0733643616E+01  3.1439699490E+00
             xred    1.6312910445E-01  1.6312910445E-01 -1.2811613600E-02
                     3.3333333333E-01  3.3333333333E-01  2.1607028423E-02
                     6.7374179109E-01  1.6312910445E-01 -1.2811613600E-02
                     1.6312910445E-01  6.7374179109E-01 -1.2811613600E-02
                     8.3687089555E-01  3.2625820891E-01 -1.2811613600E-02
                     3.2625820891E-01  8.3687089555E-01 -1.2811613600E-02
                     6.6666666667E-01  6.6666666667E-01  2.1607028423E-02
                     8.3687089555E-01  8.3687089555E-01 -1.2811613600E-02
                     3.3333333333E-01  3.3333333333E-01  1.6547210258E-01
                     6.6666666667E-01  6.6666666667E-01  1.6547210258E-01
            znucl      6.00000    9.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset= 1.
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    10)
dtsetcopy : copying area  bdgw       the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    24) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset= 2.
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    10)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    24) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 DATA TYPE INFORMATION: 
 REAL:      Data type name: REAL(DP) 
            Kind value:      8
            Precision:      15
            Smallest nonnegligible quantity relative to 1: 0.22204460E-15
            Smallest positive number:                      0.22250739-307
            Largest representable number:                  0.17976931+309
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
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    10)
dtsetcopy : copying area  bdgw       the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    24) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.

  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           1           0           0           0

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 SCREENING: Calculation of the susceptibility and dielectric matrices

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Unit cell volume ucvol=  1.4218044E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  30
         ecut(hartree)=      2.984   => boxcut(ratio)=   2.03054

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    16   16   30
  Augmented FFT divisions ...................    17   17   30
  FFT algorithm .............................   112
  FFT cache size ............................    16
- pspatm: opening atomic psp file    /estruct/users/jej7x/psuedopotentials/6C.PSPNC
  Troullier-Martins psp for element  C         Thu Oct 27 17:29:33 EDT 1994
   6.00000   4.00000    940714                znucl, zion, pspdat
    1    1    1    1      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0  10.372  24.987    1   1.4850707        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1  15.431  21.987    0   1.4850707        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.83985002509544    0.99012430797080    0.51184907750884   rchrg,fchrg,qchrg
 pspatm: epsatm=    0.92590353
         --- l  ekb(1:nproj) -->
             0    4.921466
 pspatm: atomic psp has been read  and splines computed

- pspatm: opening atomic psp file    /estruct/users/jej7x/psuedopotentials/9F.PSPNC
  Troullier-Martins psp for element  F         Thu Oct 27 17:30:08 EDT 1994
   9.00000   7.00000    940714                znucl, zion, pspdat
    1    1    1    1      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   6.771  17.439    1   1.3876018        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1  24.372  32.350    0   1.3876018        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.49406148701180    6.36128955091623    0.66947621353748   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.80528525
         --- l  ekb(1:nproj) -->
             0    6.310228
 pspatm: atomic psp has been read  and splines computed

   5.06818742E+02                                ecore*ucvol(ha*bohr**3)

 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Max number of Kleinman-Bylander energies    1
  Number of pseudopotentials ..    2
  Number of types of atoms   ..    2
  Calculation without spin-orbit
  Nonlocal part applied using Legendre polynomials
  Highest angular momentum +1 .......   2
  Max number of (l,n)   components ..   1
  Max number of (l,m,n) components ..   1

 *** Pseudo-Core Charge Info *** 
  Number of radial points for pseudo-core charge .. 2501
  XC core-correction treatment (optnlxccc) ........    1
  Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius ..  2.5196
  - Atom type    2 has pseudo-core radius ..  1.4822

 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   3001
  Number of q-points for vlspl ...................   3001
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is   1
 XC functional for type   2 is   1

 GW calculation type              =    0
 zcut to avoid poles in chi0 [eV] =   0.100000

 reading Fortran Kohn-Sham structure file C4F_Icutcoul_o_DS1_KSS
 -----------------------------------------------
 KSS abinit double precision form
 generated by ABINIT 6.2.2  header version  57
 title of file:
 Results from ABINIT code
 Ab-initio plane waves calculation

 testkss: reading occupation numbers ...
 symatm: atom number    1 is reached starting at atom
   1  5  6  3  4  8  8  4  3  6  5  1
 symatm: atom number    2 is reached starting at atom
   2  7  7  2  2  7  7  2  2  7  7  2
 symatm: atom number    3 is reached starting at atom
   3  6  5  1  1  5  6  3  4  8  8  4
 symatm: atom number    4 is reached starting at atom
   4  8  8  4  3  6  5  1  1  5  6  3
 symatm: atom number    5 is reached starting at atom
   5  1  1  5  6  3  4  8  8  4  3  6
 symatm: atom number    6 is reached starting at atom
   6  3  4  8  8  4  3  6  5  1  1  5
 symatm: atom number    7 is reached starting at atom
   7  2  2  7  7  2  2  7  7  2  2  7
 symatm: atom number    8 is reached starting at atom
   8  4  3  6  5  1  1  5  6  3  4  8
 symatm: atom number    9 is reached starting at atom
   9 10 10  9  9 10 10  9  9 10 10  9
 symatm: atom number   10 is reached starting at atom
  10  9  9 10 10  9  9 10 10  9  9 10
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  4.6478040  8.0502327  0.0000000  G(1)=  0.1075777  0.0621100  0.0000000
 R(2)= -4.6478040  8.0502327  0.0000000  G(2)= -0.1075777  0.0621100  0.0000000
 R(3)=  0.0000000  0.0000000 19.0000000  G(3)=  0.0000000  0.0000000  0.0526316
 Unit cell volume ucvol=  1.4218044E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  6.00000000E+01 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1    -1  0  0  -0.000  1     0 -1  0  -0.000  1    -1 -1  0  -0.000  1
  0  1  0   0.000  1     1  1  0   0.000  1     1  1  0   0.000  1     0  1  0   0.000  1
  0  0  1   0.000  1     0  0  1   0.000  1     0  0  1   0.000  1     0  0  1   0.000  1


 -1 -1  0  -0.000  1     0 -1  0  -0.000  1    -1  0  0  -0.000  1     1  0  0   0.000  1
  1  0  0   0.000  1    -1  0  0  -0.000  1     0 -1  0  -0.000  1    -1 -1  0  -0.000  1
  0  0  1   0.000  1     0  0  1   0.000  1     0  0  1   0.000  1     0  0  1   0.000  1


  0  1  0   0.000  1     1  1  0   0.000  1     1  1  0   0.000  1     0  1  0   0.000  1
 -1 -1  0  -0.000  1     0 -1  0  -0.000  1    -1  0  0  -0.000  1     1  0  0   0.000  1
  0  0  1   0.000  1     0  0  1   0.000  1     0  0  1   0.000  1     0  0  1   0.000  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :    24
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.00510
     2)     7.14285714E-02  0.00000000E+00  0.00000000E+00       0.03061
     3)     1.42857143E-01  0.00000000E+00  0.00000000E+00       0.03061
     4)     2.14285714E-01  0.00000000E+00  0.00000000E+00       0.03061
     5)     2.85714286E-01  0.00000000E+00  0.00000000E+00       0.03061
     6)     3.57142857E-01  0.00000000E+00  0.00000000E+00       0.03061
     7)     4.28571429E-01  0.00000000E+00  0.00000000E+00       0.03061
     8)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.01531
     9)     1.42857143E-01  7.14285714E-02  0.00000000E+00       0.03061
    10)     2.14285714E-01  7.14285714E-02  0.00000000E+00       0.06122
    11)     2.85714286E-01  7.14285714E-02  0.00000000E+00       0.06122
    12)     3.57142857E-01  7.14285714E-02  0.00000000E+00       0.06122
    13)     4.28571429E-01  7.14285714E-02  0.00000000E+00       0.06122
    14)     5.00000000E-01  7.14285714E-02  0.00000000E+00       0.06122
    15)     2.85714286E-01  1.42857143E-01  0.00000000E+00       0.03061
    16)     3.57142857E-01  1.42857143E-01  0.00000000E+00       0.06122
    17)     4.28571429E-01  1.42857143E-01  0.00000000E+00       0.06122
    18)     5.00000000E-01  1.42857143E-01  0.00000000E+00       0.06122
    19)    -4.28571429E-01  1.42857143E-01  0.00000000E+00       0.03061
    20)     4.28571429E-01  2.14285714E-01  0.00000000E+00       0.03061
    21)     5.00000000E-01  2.14285714E-01  0.00000000E+00       0.06122
    22)    -4.28571429E-01  2.14285714E-01  0.00000000E+00       0.06122
    23)    -4.28571429E-01  2.85714286E-01  0.00000000E+00       0.03061
    24)    -3.57142857E-01  2.85714286E-01  0.00000000E+00       0.03061

 Together with 12 symmetry operations and time-reversal symmetry 
 yields   196 points in the full Brillouin Zone.


 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :    24
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.00510
     2)     7.14285714E-02  0.00000000E+00  0.00000000E+00       0.03061
     3)     1.42857143E-01  0.00000000E+00  0.00000000E+00       0.03061
     4)     2.14285714E-01  0.00000000E+00  0.00000000E+00       0.03061
     5)     2.85714286E-01  0.00000000E+00  0.00000000E+00       0.03061
     6)     3.57142857E-01  0.00000000E+00  0.00000000E+00       0.03061
     7)     4.28571429E-01  0.00000000E+00  0.00000000E+00       0.03061
     8)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.01531
     9)     1.42857143E-01  7.14285714E-02  0.00000000E+00       0.03061
    10)     2.14285714E-01  7.14285714E-02  0.00000000E+00       0.06122
    11)     2.85714286E-01  7.14285714E-02  0.00000000E+00       0.06122
    12)     3.57142857E-01  7.14285714E-02  0.00000000E+00       0.06122
    13)     4.28571429E-01  7.14285714E-02  0.00000000E+00       0.06122
    14)     5.00000000E-01  7.14285714E-02  0.00000000E+00       0.06122
    15)     2.85714286E-01  1.42857143E-01  0.00000000E+00       0.03061
    16)     3.57142857E-01  1.42857143E-01  0.00000000E+00       0.06122
    17)     4.28571429E-01  1.42857143E-01  0.00000000E+00       0.06122
    18)     5.00000000E-01  1.42857143E-01  0.00000000E+00       0.06122
    19)    -4.28571429E-01  1.42857143E-01  0.00000000E+00       0.03061
    20)     4.28571429E-01  2.14285714E-01  0.00000000E+00       0.03061
    21)     5.00000000E-01  2.14285714E-01  0.00000000E+00       0.06122
    22)    -4.28571429E-01  2.14285714E-01  0.00000000E+00       0.06122
    23)    -4.28571429E-01  2.85714286E-01  0.00000000E+00       0.03061
    24)    -3.57142857E-01  2.85714286E-01  0.00000000E+00       0.03061

 Together with 12 symmetry operations and time-reversal symmetry 
 yields   196 points in the full Brillouin Zone.


 optimal value for ng0sh =  1 1 0
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1

 setmesh: npwwfn        =      363; Max (m1,m2,m3)   =      3     3     7
          npweps/npwsigx=      363; Max (mm1,mm2,mm3)=      4     4     7
          mG0 added     =   1  1  0
 calculated ecutwfn          =   2.984 [Ha]
 calculated ecutsigx/ecuteps =   2.984 [Ha]
 using method =  2 with ecuteff =  11.935 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 setmesh: FFT mesh size selected  =  15x 15x 30
          total number of points  =     6750

 -6.75930533609480215E-006  1.17074602659876238E-005  9.92081890607303004E-006

 m_coulombian.F90:1758:ERROR
  Found q-points with non-zero component along non-periodic direction 
 This is not allowed, see Notes in cutoff_surface.F90 
 ACTION : Modify the q-point sampling
-P-0000
-P-0000  leave_new : decision taken to exit ...

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.2.2
  Build target  : x86_64_linux_gnu4.4
  Build date    : 20101024

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g -O3 -fschedule-insns2 -march=nocona -mmmx -msse -msse2 -msse3 -mfpmath=sse
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g -O3 -fschedule-insns2 -march=nocona -mmmx -msse -msse2 -msse3 -mfpmath=sse
  Fortran compiler : gnu4.4
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : yes
  Optimization level : standard
  Architecture       : intel_xeon

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes

 === Linear algebra === 
  Library flavor : @linalg_flavor@
  Use ScaLAPACK  : no

 === Plug-ins === 
  BigDFT    : yes
  ETSF I/O  : yes
  LibXC     : yes
  FoX       : no
  NetCDF    : yes
  Wannier90 : yes

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no
  Macroave build      : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

