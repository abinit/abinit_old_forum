  ABINIT 
  
  Give name for formatted input file: 
Ga4P3Ti_lda_gw_band-4.in
  Give name for formatted output file:
Ga4P3Ti_lda_gw_band-4.out
  Give root name for generic input files:
Ga4P3Ti_lda_gw_band-4i
  Give root name for generic output files:
Ga4P3Ti_lda_gw_band-4o
  Give root name for generic temporary files:
Ga4P3Ti_lda_gw_band-4

.Version 7.6.4 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.4 computer) 

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

.Starting date : Mon 26 May 2014.
- ( at 10h09 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.6.4
  Build target  : x86_64_linux_gnu4.4
  Build date    : 20140520

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           : -m64 -g -O2 -mtune=native -march=native  -fPIC
  C++ compiler     : gnu4.4
  CXXFLAGS         : -m64 -g -O2 -mtune=native -march=native  -fPIC
  Fortran compiler : gnu4.4
  FCFLAGS          : -m64 -g -ffree-line-length-none -fPIC
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown

 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  openMP support : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : fftw3
  LINALG flavor : atlas
  MATH flavor   : gsl
  TIMER flavor  : abinit
  TRIO flavor   : netcdf+etsf_io-fallback+fox-fallback

 === Experimental features === 
  Bindings            : no
  Exports             : yes
  GW double-precision : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -mtune=native -march=native


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

                 HAVE_ALGO          HAVE_ALGO_LEVMAR          HAVE_ALGO_SERIAL

                 HAVE_CLIB          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT

            HAVE_DFT_LIBXC        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...

  HAVE_FC_COMMAND_ARGUMENT           HAVE_FC_CPUTIME              HAVE_FC_EXIT

             HAVE_FC_FLUSH             HAVE_FC_GAMMA            HAVE_FC_GETENV

          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING

        HAVE_FC_LONG_LINES              HAVE_FC_NULL         HAVE_FC_STREAM_IO

            HAVE_FC_SYSTEM                  HAVE_FFT            HAVE_FFT_FFTW3

              HAVE_FFT_MPI           HAVE_FFT_SERIAL          HAVE_FORTRAN2003

               HAVE_GW_DPC        HAVE_LIBPAW_ABINIT               HAVE_LINALG

        HAVE_LINALG_SERIAL                 HAVE_MATH             HAVE_MATH_GSL

          HAVE_MATH_SERIAL                  HAVE_MPI                 HAVE_MPI2

               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX

                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI

         HAVE_TIMER_SERIAL         HAVE_TRIO_ETSF_IO             HAVE_TRIO_FOX

          HAVE_TRIO_NETCDF              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> Ga4P3Ti_lda_gw_band-4.in
- output file    -> Ga4P3Ti_lda_gw_band-4.out
- root for input  files -> Ga4P3Ti_lda_gw_band-4i
- root for output files -> Ga4P3Ti_lda_gw_band-4o

-instrng :   126 lines of input have been read from file Ga4P3Ti_lda_gw_band-4.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /home/thanusit/psp/31-Ga.LDA.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is /home/thanusit/psp/15-P.LDA.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   3 , psp file is /home/thanusit/psp/22-Ti.LDA.fhi
  read the values zionpsp=  3.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  5.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  4.0 , pspcod=   6 , lmax=   3

 inpspheads : deduce mpsang  =   4, n1xccc  =   0.

 invars1m : enter jdtset=0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cP (primitive cubic)

 symlatt : the Bravais lattice is cP (primitive cubic)
 symspgr : spgroup= 215  P-4 3 m   (=Td^1)
 getkgrid : length of smallest supercell vector (bohr)=    4.132000E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.132000E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   31.000000000000000     
 chkneu : initialized the occupation numbers for occopt=    3
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 setshells : ecut_trial =    12.00

--- !WARNING
message: |
    The value ecutwfn=  0.120000E+02 given in the input file leads to
     the same values for nshwfn and npwwfn as ecutwfn=  0.118388E+02
     This value will be adopted for the calculation.

src_file: m_gsphere.F90
src_line: 2710
...

 setshells : ecut_trial =     8.00
 setshells : ecut_trial =    12.00

--- !WARNING
message: |
    The value ecutsigx=  0.120000E+02 given in the input file leads to
     the same values for nshsigx and npwsigx as ecutsigx=  0.118388E+02
     This value will be adopted for the calculation.

src_file: m_gsphere.F90
src_line: 2710
...

npfft, npband, npspinor and npkpt:     1    1    1   16

--- !WARNING
message: |
    nproc_kpt=16 >= nkpt=10* nsppol=1
    The number of processors is larger than nkpt. This is a waste.
src_file: distrb2.F90
src_line: 106
...

mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 10, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.

--- !WARNING
message: |
    Your number of k-points (10) will not distribute correctly
    with the current number of processors (16).
    You will leave some empty.
    ACTION: you can reduce number of processors to 10without losing speed.
src_file: mpi_setup.F90
src_line: 601
...

mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 10, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.

--- !WARNING
message: |
    Your number of k-points (10) will not distribute correctly
    with the current number of processors (16).
    You will leave some empty.
    ACTION: you can reduce number of processors to 10without losing speed.
src_file: mpi_setup.F90
src_line: 601
...

mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 10, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

--- !WARNING
message: |
    Your number of k-points (10) will not distribute correctly
    with the current number of processors (16).
    You will leave some empty.
    ACTION: you can reduce number of processors to 10without losing speed.
src_file: mpi_setup.F90
src_line: 601
...

 For input ecut=  1.305232E+01 best grid ngfft=      36      36      36
       max ecut=  1.498353E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    36   36   36
  Augmented FFT divisions ...................    37   37   36
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    2517

 Symmetries : space group P-4 3 m (#215); Bravais cP (primitive cubic)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        64  mffmem =         1
P  mgfft =        36   mkmem =         1 mpssoang=         4     mpw =      2517
  mqgrid =      3001   natom =         8    nfft =     46656    nkpt =        10
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =         0  ntypat =         3  occopt =         3
================================================================================
P This job should need less than                      18.224 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     24.582 Mbytes ; DEN or POT disk file :      0.358 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      5.6973 MBytes.
 memana : allocated an array of      5.697 Mbytes, for testing purposes.
 memana : allocated      18.224 Mbytes, for testing purposes.
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
 
 These variables are accessible in NetCDF format (Ga4P3Ti_lda_gw_band-4o_OUT.nc)

            acell      1.0330000000E+01  1.0330000000E+01  1.0330000000E+01 Bohr
              amu      6.97230000E+01  3.09737620E+01  4.78800000E+01
             bdgw           1      27       1      27       1      27       1      27
                            1      27       1      27       1      27       1      27
                            1      27       1      27
          dilatmx      1.05000000E+00
             ecut      1.18388378E+01 Hartree
          ecuteps      7.95421917E+00 Hartree
         ecutsigx      1.18388378E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
          ecutwfn      1.18388378E+01 Hartree
           gwpara           2
           irdscr           1
           istwfk        1    0    1    0    0    1    0    0    0    1
              ixc           7
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
            kptgw      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        4    0    0      0    4    0      0    0    4
          kptrlen      4.13200000E+01
P           mkmem           1
            natom           8
            nband          64
            ngfft          36      36      36
             nkpt          10
           nkptgw          10
           npweps        1213
          npwsigx        2109
           npwwfn        2109
           nsheps          79
          nshsigx         128
            nstep         300
             nsym          24
           ntypat           3
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
           occopt           3
        optdriver           4
        optforces           1
           prtvol           1
          spgroup         215
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0 -1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0 -1
                       0  1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0 -1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0 -1
                       0  0  1   1  0  0   0  1  0       0  0 -1   1  0  0   0 -1  0
                       0  0 -1  -1  0  0   0  1  0       0  0  1  -1  0  0   0 -1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0  1   0 -1  0
                      -1  0  0   0  0 -1   0  1  0       1  0  0   0  0 -1   0 -1  0
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0  1  -1  0  0
                       0 -1  0   0  0 -1   1  0  0       0  1  0   0  0 -1  -1  0  0
                       0  0  1   0  1  0   1  0  0       0  0 -1   0  1  0  -1  0  0
                       0  0 -1   0 -1  0   1  0  0       0  0  1   0 -1  0  -1  0  0
         symsigma        1
            tnons      0.0000000  0.0000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.5000000  0.5000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.5000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.0000000
                       0.5000000  0.0000000  0.5000000     0.0000000  0.5000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.5000000  0.5000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.5000000  0.5000000     0.5000000  0.5000000  0.0000000
           tolwfr      1.00000000E-10
           tsmear      1.00000000E-02 Hartree
            typat      1  1  1  1  3  2  2  2
              wtk        0.01563    0.09375    0.04688    0.18750    0.18750    0.04688
                         0.12500    0.18750    0.09375    0.01563
           xangst     -6.5670357011E-02 -6.5670357011E-02 -6.5670357011E-02
                       2.7988706394E+00  2.7988706394E+00 -6.5670357011E-02
                       2.7988706394E+00 -6.5670357011E-02  2.7988706394E+00
                      -6.5670357011E-02  2.7988706394E+00  2.7988706394E+00
                       1.3666001412E+00  1.3666001412E+00  1.3666001412E+00
                       1.3666001412E+00  4.0998004236E+00  4.0998004236E+00
                       4.0998004236E+00  1.3666001412E+00  4.0998004236E+00
                       4.0998004236E+00  4.0998004236E+00  1.3666001412E+00
            xcart     -1.2409898980E-01 -1.2409898980E-01 -1.2409898980E-01
                       5.2890989898E+00  5.2890989898E+00 -1.2409898980E-01
                       5.2890989898E+00 -1.2409898980E-01  5.2890989898E+00
                      -1.2409898980E-01  5.2890989898E+00  5.2890989898E+00
                       2.5825000000E+00  2.5825000000E+00  2.5825000000E+00
                       2.5825000000E+00  7.7475000000E+00  7.7475000000E+00
                       7.7475000000E+00  2.5825000000E+00  7.7475000000E+00
                       7.7475000000E+00  7.7475000000E+00  2.5825000000E+00
             xred     -1.2013454966E-02 -1.2013454966E-02 -1.2013454966E-02
                       5.1201345497E-01  5.1201345497E-01 -1.2013454966E-02
                       5.1201345497E-01 -1.2013454966E-02  5.1201345497E-01
                      -1.2013454966E-02  5.1201345497E-01  5.1201345497E-01
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
                       2.5000000000E-01  7.5000000000E-01  7.5000000000E-01
                       7.5000000000E-01  2.5000000000E-01  7.5000000000E-01
                       7.5000000000E-01  7.5000000000E-01  2.5000000000E-01
            znucl       31.00000   15.00000   22.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
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
  MPI_WTICK ..................   9.99999999999999955E-007

================================================================================
== DATASET  1 ==================================================================
-   nproc =   16


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)

 SIGMA: Calculation of the GW corrections

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using double precision arithmetic ; gwpc =  8

 Unit cell volume ucvol=  1.1023029E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  36
         ecut(hartree)=     13.052   => boxcut(ratio)=   2.14286

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    36   36   36
  Augmented FFT divisions ...................    37   37   36
  FFT algorithm .............................   312
  FFT cache size ............................    16
- pspini: atom type   1  psp file is /home/thanusit/psp/31-Ga.LDA.fhi
- pspatm: opening atomic psp file    /home/thanusit/psp/31-Ga.LDA.fhi
- gallium, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 0 local
- 31.00000   3.00000     11001                znucl, zion, pspdat
    6    7    3    0       529   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   19.71263028
         --- l  ekb(1:nproj) -->
             1    2.478044
             2   39.361656
             3   -1.913945
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is /home/thanusit/psp/15-P.LDA.fhi
- pspatm: opening atomic psp file    /home/thanusit/psp/15-P.LDA.fhi
- phosphorus, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 2 local
- 15.00000   5.00000     21003                znucl, zion, pspdat
    6    7    3    2       499   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    0.61944233
         --- l  ekb(1:nproj) -->
             0    4.240950
             1    2.313694
             3   -1.435698
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is /home/thanusit/psp/22-Ti.LDA.fhi
- pspatm: opening atomic psp file    /home/thanusit/psp/22-Ti.LDA.fhi
- titanium, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 1 local
- 22.00000   4.00000     21003                znucl, zion, pspdat
    6    7    3    1       515   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   58.87618897
         --- l  ekb(1:nproj) -->
             0   -0.518582
             2   -5.296591
             3   -1.216009
 pspatm: atomic psp has been read  and splines computed

   4.32713615E+03                                ecore*ucvol(ha*bohr**3)

 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Max number of Kleinman-Bylander energies    4
  Number of pseudopotentials ..    3
  Number of types of atoms   ..    3
  Calculation without spin-orbit
  Nonlocal part applied using Legendre polynomials
  Highest angular momentum +1 .......   4
  Max number of (l,n)   components ..   4
  Max number of (l,m,n) components ..   4

 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   3001
  Number of q-points for vlspl ...................   3001
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is   7
 XC functional for type   2 is   7
 XC functional for type   3 is   7

--- !WARNING
message: |
    Using WFK fileGa4P3Ti_lda_gw_band-4i_WFK
src_file: setup_sigma.F90
src_line: 317
...


 Sorting g-vecs for an output of states on an unique "big" PW basis.
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of G-vectors is:  4785
   1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4
   2  4  1  3  2  4  1  3  4  2  3  1  3  1  4  2  3  1  4  2  4  2  3  1
   3  1  4  2  4  2  3  1  2  4  1  3  2  4  1  3  4  2  3  1  3  1  4  2
   4  2  3  1  3  1  4  2  3  1  4  2  4  2  3  1  2  4  1  3  2  4  1  3
   5  5  5  5  5  5  5  5  5  5  5  5  5  5  5  5  5  5  5  5  5  5  5  5
   6  6  6  6  7  7  7  7  7  7  7  7  6  6  6  6  8  8  8  8  8  8  8  8
   7  7  7  7  6  6  6  6  8  8  8  8  8  8  8  8  6  6  6  6  7  7  7  7
   8  8  8  8  8  8  8  8  6  6  6  6  7  7  7  7  7  7  7  7  6  6  6  6
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)= 10.3300000  0.0000000  0.0000000  G(1)=  0.0968054  0.0000000  0.0000000
 R(2)=  0.0000000 10.3300000  0.0000000  G(2)=  0.0000000  0.0968054  0.0000000
 R(3)=  0.0000000  0.0000000 10.3300000  G(3)=  0.0000000  0.0000000  0.0968054
 Unit cell volume ucvol=  1.1023029E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1    -1  0  0   0.500  1    -1  0  0   0.500  1     1  0  0   0.000  1
  0  1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.500  1     0 -1  0   0.500  1
  0  0  1   0.000  1     0  0 -1   0.500  1     0  0  1   0.000  1     0  0 -1   0.500  1


  0  1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.500  1     0 -1  0   0.500  1
  1  0  0   0.000  1    -1  0  0   0.500  1    -1  0  0   0.500  1     1  0  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.500  1     0  0  1   0.000  1     0  0 -1   0.500  1


  0  1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.500  1     0 -1  0   0.500  1
  0  0  1   0.000  1     0  0 -1   0.500  1     0  0  1   0.000  1     0  0 -1   0.500  1
  1  0  0   0.000  1    -1  0  0   0.500  1    -1  0  0   0.500  1     1  0  0   0.000  1


  1  0  0   0.000  1    -1  0  0   0.500  1    -1  0  0   0.500  1     1  0  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.500  1     0  0  1   0.000  1     0  0 -1   0.500  1
  0  1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.500  1     0 -1  0   0.500  1


  0  0  1   0.000  1     0  0 -1   0.500  1     0  0  1   0.000  1     0  0 -1   0.500  1
  1  0  0   0.000  1    -1  0  0   0.500  1    -1  0  0   0.500  1     1  0  0   0.000  1
  0  1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.500  1     0 -1  0   0.500  1


  0  0  1   0.000  1     0  0 -1   0.500  1     0  0  1   0.000  1     0  0 -1   0.500  1
  0  1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.500  1     0 -1  0   0.500  1
  1  0  0   0.000  1    -1  0  0   0.500  1    -1  0  0   0.500  1     1  0  0   0.000  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :    10
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.09375
     3)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.04688
     4)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.18750
     5)     5.00000000E-01  2.50000000E-01  0.00000000E+00       0.18750
     6)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.04688
     7)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.12500
     8)     5.00000000E-01  2.50000000E-01  2.50000000E-01       0.18750
     9)     5.00000000E-01  5.00000000E-01  2.50000000E-01       0.09375
    10)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.01563

 Together with 24 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.
     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00
     3)    -2.50000000E-01  0.00000000E+00  0.00000000E+00
     4)     0.00000000E+00  2.50000000E-01  0.00000000E+00
     5)     0.00000000E+00 -2.50000000E-01  0.00000000E+00
     6)     0.00000000E+00  0.00000000E+00  2.50000000E-01
     7)     0.00000000E+00  0.00000000E+00 -2.50000000E-01
     8)     5.00000000E-01  0.00000000E+00  0.00000000E+00
     9)     0.00000000E+00  5.00000000E-01  0.00000000E+00
    10)     0.00000000E+00  0.00000000E+00  5.00000000E-01
    11)     2.50000000E-01  2.50000000E-01  0.00000000E+00
    12)    -2.50000000E-01  2.50000000E-01  0.00000000E+00
    13)    -2.50000000E-01 -2.50000000E-01  0.00000000E+00
    14)     2.50000000E-01 -2.50000000E-01  0.00000000E+00
    15)     2.50000000E-01  0.00000000E+00  2.50000000E-01
    16)     2.50000000E-01  0.00000000E+00 -2.50000000E-01
    17)    -2.50000000E-01  0.00000000E+00 -2.50000000E-01
    18)    -2.50000000E-01  0.00000000E+00  2.50000000E-01
    19)     0.00000000E+00  2.50000000E-01  2.50000000E-01
    20)     0.00000000E+00 -2.50000000E-01  2.50000000E-01
    21)     0.00000000E+00 -2.50000000E-01 -2.50000000E-01
    22)     0.00000000E+00  2.50000000E-01 -2.50000000E-01
    23)     5.00000000E-01  2.50000000E-01  0.00000000E+00
    24)    -5.00000000E-01 -2.50000000E-01  0.00000000E+00
    25)     2.50000000E-01  5.00000000E-01  0.00000000E+00
    26)    -2.50000000E-01 -5.00000000E-01  0.00000000E+00
    27)     2.50000000E-01  0.00000000E+00  5.00000000E-01
    28)    -2.50000000E-01  0.00000000E+00 -5.00000000E-01
    29)     5.00000000E-01  0.00000000E+00  2.50000000E-01
    30)    -5.00000000E-01  0.00000000E+00 -2.50000000E-01
    31)     0.00000000E+00  5.00000000E-01  2.50000000E-01
    32)     0.00000000E+00 -5.00000000E-01 -2.50000000E-01
    33)     0.00000000E+00  2.50000000E-01  5.00000000E-01
    34)     0.00000000E+00 -2.50000000E-01 -5.00000000E-01
    35)     5.00000000E-01  5.00000000E-01  0.00000000E+00
    36)     5.00000000E-01  0.00000000E+00  5.00000000E-01
    37)     0.00000000E+00  5.00000000E-01  5.00000000E-01
    38)     2.50000000E-01  2.50000000E-01  2.50000000E-01
    39)    -2.50000000E-01  2.50000000E-01 -2.50000000E-01
    40)    -2.50000000E-01 -2.50000000E-01  2.50000000E-01
    41)     2.50000000E-01 -2.50000000E-01 -2.50000000E-01
    42)    -2.50000000E-01 -2.50000000E-01 -2.50000000E-01
    43)     2.50000000E-01 -2.50000000E-01  2.50000000E-01
    44)     2.50000000E-01  2.50000000E-01 -2.50000000E-01
    45)    -2.50000000E-01  2.50000000E-01  2.50000000E-01
    46)     5.00000000E-01  2.50000000E-01  2.50000000E-01
    47)    -5.00000000E-01  2.50000000E-01 -2.50000000E-01
    48)    -5.00000000E-01 -2.50000000E-01  2.50000000E-01
    49)     5.00000000E-01 -2.50000000E-01 -2.50000000E-01
    50)     2.50000000E-01  5.00000000E-01  2.50000000E-01
 prtvol=1, do not print more points.


 metallic scheme, calling newocc with spinmagntarget = -99.99000
 newocc : new Fermi energy is       0.073378 , with nelect=     31.000000
  Number of bissection calls =  51
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.832 1.832 1.832 0.914 0.914 0.516 0.002 0.002 0.002 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.832 1.638 1.638 0.647 0.100 0.015 0.003 0.001 0.001 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 1.999 1.897 1.227 1.227 0.302 0.063 0.009 0.006 0.006 0.005 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.905 1.676 1.351 0.104 0.062 0.032 0.005 0.003 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 1.999 1.951 1.335 1.129 0.116 0.062 0.011 0.008 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999
 1.999 1.990 1.028 1.028 0.107 0.014 0.008 0.002 0.002 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.936 1.525 1.525 0.112 0.034 0.034 0.012 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.897 1.392 1.362 0.054 0.032 0.020 0.003 0.001 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999
 1.998 1.873 1.440 1.439 0.052 0.016 0.003 0.003 0.002 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 1.999 1.999 1.998 1.998
 1.998 1.865 1.865 1.865 0.033 0.033 0.006 0.006 0.006 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 Fermi energy         [eV]   2.00



  >>>> For spin  1
   Minimum optical gap =   0.5960 [eV], located at k-point      :   0.5000  0.0000  0.0000
   Fundamental gap     =   0.0624 [eV], Top of valence bands at :   0.5000  0.5000  0.0000
                                        Bottom of conduction at :   0.0000  0.0000  0.0000


  >>>> For spin  1
   Minimum optical gap =   0.5960 [eV], located at k-point      :   0.5000  0.0000  0.0000
   Fundamental gap     =   0.0624 [eV], Top of valence bands at :   0.5000  0.5000  0.0000
                                        Bottom of conduction at :   0.0000  0.0000  0.0000

--- !COMMENT
message: |
    Not all the degenerate states at ikcalc= 3, spin= 1
    were included in the bdgw set. bdgw has been changed to:  1 28
src_file: setup_sigma.F90
src_line: 650
...

 setshells : ecut_trial =     8.10
 init_Er_from_file : testing file Ga4P3Ti_lda_gw_band-4i_SCR

 ===============================================================================
 ECHO of the ABINIT-SCR file header 
 SCR file: epsilon^-1 , calculated using inclvkb = 2
 TESTPARTICLE RPA
 Identifier                       4
 Kxc kernel                       0
 Treatment of q-->0 limit         0
 headform                        56
 fform                         1002
 gwcalctyp                       -1
 Number of components             1       1
 Number of q-points              10
 Number of q-directions           0
 Number of frequencies            2
 Number of bands used            64
 Dimension of matrix           1213
 Number of planewaves used     2109
 Spectral method                  0
 Test_type                        0
 Time-ordering                    1
 Scissor Energy                 0.000000E+00
 Spectral smearing              0.000000E+00
 Complex Imaginary Shift        3.674933E-03

 q-points [r.l.u.]:
    1    0.000000    0.000000    0.000000
    2    0.250000    0.000000    0.000000
    3    0.500000    0.000000    0.000000
    4    0.250000    0.250000    0.000000
    5    0.500000    0.250000    0.000000
    6    0.500000    0.500000    0.000000
    7    0.250000    0.250000    0.250000
    8    0.500000    0.250000    0.250000
    9    0.500000    0.500000    0.250000
   10    0.500000    0.500000    0.500000

 Frequencies used [eV]:
  1   0.00   0.00
  2   0.00  16.70
 End the ECHO of the ABINIT-SCR file header 
 ===============================================================================
 ===============================================================================
 ECHO of the ABINIT file header 
 
 First record :
.codvsn,headform,fform = 7.6.4    57 1002
 
 Second record :
 bantot,intxc,ixc,natom  =   640     0     7     8
 ngfft(1:3),nkpt         =    36    36    36    10
 nspden,nspinor          =     1     1
 nsppol,nsym,npsp,ntypat =     1    24     3     3
 occopt,pertcase,usepaw  =     3     0     0
 ecut,ecutdg,ecutsm      =  1.1838837841E+01  1.1838837841E+01  5.0000000000E-01
 ecut_eff                =  1.3052318720E+01
 qptn(1:3)               =  0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,1)           =  1.0330000000E+01  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,2)           =  0.0000000000E+00  1.0330000000E+01  0.0000000000E+00
 rprimd(1:3,3)           =  0.0000000000E+00  0.0000000000E+00  1.0330000000E+01
 stmbias,tphysel,tsmear  =  0.0000000000E+00  0.0000000000E+00  1.0000000000E-02

 Third record :
 istwfk=   1   1   1   1   1   1   1   1   1   1
 nband =  64  64  64  64  64  64  64  64  64  64
 npwarr= 2109 2109 2109 2109 2109 2109 2109 2109 2109 2109
 so_psp=   1   1   1
 symafm=
          1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
 symrel=
           1   0   0   0   1   0   0   0   1    -1   0   0   0   1   0   0   0  -1
          -1   0   0   0  -1   0   0   0   1     1   0   0   0  -1   0   0   0  -1
           0   1   0   1   0   0   0   0   1     0  -1   0   1   0   0   0   0  -1
           0  -1   0  -1   0   0   0   0   1     0   1   0  -1   0   0   0   0  -1
           0   0   1   1   0   0   0   1   0     0   0  -1   1   0   0   0  -1   0
           0   0  -1  -1   0   0   0   1   0     0   0   1  -1   0   0   0  -1   0
           1   0   0   0   0   1   0   1   0    -1   0   0   0   0   1   0  -1   0
          -1   0   0   0   0  -1   0   1   0     1   0   0   0   0  -1   0  -1   0
           0   1   0   0   0   1   1   0   0     0  -1   0   0   0   1  -1   0   0
           0  -1   0   0   0  -1   1   0   0     0   1   0   0   0  -1  -1   0   0
           0   0   1   0   1   0   1   0   0     0   0  -1   0   1   0  -1   0   0
           0   0  -1   0  -1   0   1   0   0     0   0   1   0  -1   0  -1   0   0
 type  =   1   1   1   1   3   2   2   2
 kptns =                 (max 50 k-points will be written)
            0.000000E+00    0.000000E+00    0.000000E+00
            2.500000E-01    0.000000E+00    0.000000E+00
            5.000000E-01    0.000000E+00    0.000000E+00
            2.500000E-01    2.500000E-01    0.000000E+00
            5.000000E-01    2.500000E-01    0.000000E+00
            5.000000E-01    5.000000E-01    0.000000E+00
            2.500000E-01    2.500000E-01    2.500000E-01
            5.000000E-01    2.500000E-01    2.500000E-01
            5.000000E-01    5.000000E-01    2.500000E-01
            5.000000E-01    5.000000E-01    5.000000E-01
 wtk =
          0.02  0.09  0.05  0.19  0.19  0.05  0.13  0.19  0.09  0.02
   occ =
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  1.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  1.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  1.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  1.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  1.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  1.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 tnons =
          0.000000  0.000000  0.000000    0.500000  0.000000  0.500000
          0.500000  0.500000  0.000000    0.000000  0.500000  0.500000
          0.000000  0.000000  0.000000    0.000000  0.500000  0.500000
          0.500000  0.500000  0.000000    0.500000  0.000000  0.500000
          0.000000  0.000000  0.000000    0.000000  0.500000  0.500000
          0.500000  0.000000  0.500000    0.500000  0.500000  0.000000
          0.000000  0.000000  0.000000    0.500000  0.500000  0.000000
          0.500000  0.000000  0.500000    0.000000  0.500000  0.500000
          0.000000  0.000000  0.000000    0.500000  0.500000  0.000000
          0.000000  0.500000  0.500000    0.500000  0.000000  0.500000
          0.000000  0.000000  0.000000    0.500000  0.000000  0.500000
          0.000000  0.500000  0.500000    0.500000  0.500000  0.000000
  znucl= 31.00 15.00 22.00

 Pseudopotential info :
 title=gallium, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 0 local
  znuclpsp= 31.00, zionpsp=  3.00, pspso=  0, pspdat= 11001, pspcod=  6, pspxc=  7
  lmnmax  =  4
 title=phosphorus, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 2 local
  znuclpsp= 15.00, zionpsp=  5.00, pspso=  0, pspdat= 21003, pspcod=  6, pspxc=  7
  lmnmax  =  4
 title=titanium, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 1 local
  znuclpsp= 22.00, zionpsp=  4.00, pspso=  0, pspdat= 21003, pspcod=  6, pspxc=  7
  lmnmax  =  4
 
 Last record :
 residm,etot,fermie=    1.000000E+20    1.000000000000E+20    1.000000E+20
 xred =
           -1.201345E-02   -1.201345E-02   -1.201345E-02
            5.120135E-01    5.120135E-01   -1.201345E-02
            5.120135E-01   -1.201345E-02    5.120135E-01
           -1.201345E-02    5.120135E-01    5.120135E-01
            2.500000E-01    2.500000E-01    2.500000E-01
            2.500000E-01    7.500000E-01    7.500000E-01
            7.500000E-01    2.500000E-01    7.500000E-01
            7.500000E-01    7.500000E-01    2.500000E-01
 End the ECHO of the ABINIT file header 
 ===============================================================================
 ==== Q-mesh for screening function ====
 Number of points in the irreducible wedge :    10
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.09375
     3)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.04688
     4)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.18750
     5)     5.00000000E-01  2.50000000E-01  0.00000000E+00       0.18750
     6)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.04688
     7)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.12500
     8)     5.00000000E-01  2.50000000E-01  2.50000000E-01       0.18750
     9)     5.00000000E-01  5.00000000E-01  2.50000000E-01       0.09375
    10)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.01563

 Together with 24 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.
     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00
     3)    -2.50000000E-01  0.00000000E+00  0.00000000E+00
     4)     0.00000000E+00  2.50000000E-01  0.00000000E+00
     5)     0.00000000E+00 -2.50000000E-01  0.00000000E+00
     6)     0.00000000E+00  0.00000000E+00  2.50000000E-01
     7)     0.00000000E+00  0.00000000E+00 -2.50000000E-01
     8)     5.00000000E-01  0.00000000E+00  0.00000000E+00
     9)     0.00000000E+00  5.00000000E-01  0.00000000E+00
    10)     0.00000000E+00  0.00000000E+00  5.00000000E-01
    11)     2.50000000E-01  2.50000000E-01  0.00000000E+00
    12)    -2.50000000E-01  2.50000000E-01  0.00000000E+00
    13)    -2.50000000E-01 -2.50000000E-01  0.00000000E+00
    14)     2.50000000E-01 -2.50000000E-01  0.00000000E+00
    15)     2.50000000E-01  0.00000000E+00  2.50000000E-01
    16)     2.50000000E-01  0.00000000E+00 -2.50000000E-01
    17)    -2.50000000E-01  0.00000000E+00 -2.50000000E-01
    18)    -2.50000000E-01  0.00000000E+00  2.50000000E-01
    19)     0.00000000E+00  2.50000000E-01  2.50000000E-01
    20)     0.00000000E+00 -2.50000000E-01  2.50000000E-01
    21)     0.00000000E+00 -2.50000000E-01 -2.50000000E-01
    22)     0.00000000E+00  2.50000000E-01 -2.50000000E-01
    23)     5.00000000E-01  2.50000000E-01  0.00000000E+00
    24)    -5.00000000E-01 -2.50000000E-01  0.00000000E+00
    25)     2.50000000E-01  5.00000000E-01  0.00000000E+00
    26)    -2.50000000E-01 -5.00000000E-01  0.00000000E+00
    27)     2.50000000E-01  0.00000000E+00  5.00000000E-01
    28)    -2.50000000E-01  0.00000000E+00 -5.00000000E-01
    29)     5.00000000E-01  0.00000000E+00  2.50000000E-01
    30)    -5.00000000E-01  0.00000000E+00 -2.50000000E-01
    31)     0.00000000E+00  5.00000000E-01  2.50000000E-01
    32)     0.00000000E+00 -5.00000000E-01 -2.50000000E-01
    33)     0.00000000E+00  2.50000000E-01  5.00000000E-01
    34)     0.00000000E+00 -2.50000000E-01 -5.00000000E-01
    35)     5.00000000E-01  5.00000000E-01  0.00000000E+00
    36)     5.00000000E-01  0.00000000E+00  5.00000000E-01
    37)     0.00000000E+00  5.00000000E-01  5.00000000E-01
    38)     2.50000000E-01  2.50000000E-01  2.50000000E-01
    39)    -2.50000000E-01  2.50000000E-01 -2.50000000E-01
    40)    -2.50000000E-01 -2.50000000E-01  2.50000000E-01
    41)     2.50000000E-01 -2.50000000E-01 -2.50000000E-01
    42)    -2.50000000E-01 -2.50000000E-01 -2.50000000E-01
    43)     2.50000000E-01 -2.50000000E-01  2.50000000E-01
    44)     2.50000000E-01  2.50000000E-01 -2.50000000E-01
    45)    -2.50000000E-01  2.50000000E-01  2.50000000E-01
    46)     5.00000000E-01  2.50000000E-01  2.50000000E-01
    47)    -5.00000000E-01  2.50000000E-01 -2.50000000E-01
    48)    -5.00000000E-01 -2.50000000E-01  2.50000000E-01
    49)     5.00000000E-01 -2.50000000E-01 -2.50000000E-01
    50)     2.50000000E-01  5.00000000E-01  2.50000000E-01
 prtvol=1, do not print more points.


 optimal value for ng0sh =  1 1 1

 integrate q->0 : numerical BZ geometry factor =     8.6962

 vcoul_init : cutoff-mode = AUXILIARY_FUNCTION
 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030

 setmesh: npwwfn        =     2109; Max (m1,m2,m3)   =      8     8     8
          npweps/npwsigx=     2109; Max (mm1,mm2,mm3)=      9     9     9
          mG0 added     =   1  1  1
 calculated ecutwfn          =  11.839 [Ha]
 calculated ecutsigx/ecuteps =  11.839 [Ha]
 using method =  2 with ecuteff =  47.355 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  2  2  2
 setmesh: FFT mesh size selected  =  36x 36x 36
          total number of points  =    46656


 setmesh: npwwfn        =     2109; Max (m1,m2,m3)   =      8     8     8
          npweps/npwsigx=     1213; Max (mm1,mm2,mm3)=      7     7     7
          mG0 added     =   1  1  1
 calculated ecutwfn          =  11.839 [Ha]
 calculated ecutsigx/ecuteps =   7.954 [Ha]
 using method =  2 with ecuteff =  39.201 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  2  2  2
 setmesh: FFT mesh size selected  =  30x 30x 30
          total number of points  =    27000

  screening after setup_sigma : Er%Hscr%headform=          57

 ==== FFT mesh for oscillator strengths used for Sigma_c ====
  FFT mesh divisions ........................    30   30   30
  Augmented FFT divisions ...................    31   31   30
  FFT algorithm .............................   312
  FFT cache size ............................    16

 ==== FFT mesh for oscillator strengths used for Sigma_x ====
  FFT mesh divisions ........................    36   36   36
  Augmented FFT divisions ...................    37   37   36
  FFT algorithm .............................   312
  FFT cache size ............................    16

--- !WARNING
message: |
    Using k-centered G-spheres.
src_file: m_wfs.F90
src_line: 1035
...

 Memory needed for Fourier components ug =         10.0 [Mb]
 Memory needed for real space ur =        124.0 [Mb]

--- !WARNING
message: |
    Wfd is init using WFK file
src_file: sigma.F90
src_line: 769
...

 wfd_read_wfk : about to read Ga4P3Ti_lda_gw_band-4i_WFK
wfd_read_wfk: will read 301 (b,k,s) states
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          64
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          64
 in buffered bmask
 nb_tot          31 nblocks           1 nbxblock          64
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          64
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          64
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          64
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          64
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          64
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          64
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          64
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

--- !COMMENT
message: |
    Changing FFT mesh
src_file: m_wfs.F90
src_line: 4926
...

 planewave contribution to nelect:   30.9858
  Number of electrons per unit cell       =    30.985815839305985     
  Charge density outside the cutoff region=    30.556988757835779     
 Number of electrons calculated from density =   30.9858; Expected =   31.0000
 average of density, n =  0.028110
 r_s =    2.0402
 omega_plasma =   16.1728 [eV]

 Total charge density [el/Bohr^3]
,     Maximum=    1.8714E-01  at reduced coord.    0.1944    0.3056    0.3056
,     Minimum=    6.9846E-04  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    3.0986E+01

 ewald : nr and ng are    3 and   15
 calc_vhxc_braket : calculating v_xc[n_val] (excluding non-linear core corrections)
 For spin  1 Min density rhor =     0.698465E-03
 E_xc[n_val]  =  -9.4328 [Ha]. <V_xc[n_val]> =  -0.3264 [Ha].
 Will calculate 20 <b,k,s|O|b',k,s> matrix elements in calc_vhxc_me.

 === Matrix elements in the KS basis set [eV] ===
 kpt= (  0.00000000E+00  0.00000000E+00  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   1 -11.06881 -11.06881   7.98044
   2 -11.99074 -11.99074  11.42866
   3 -11.99074 -11.99074  11.42866
   4 -10.37997 -10.37997   4.63125
   5 -10.37997 -10.37997   4.63125
   6 -10.37997 -10.37997   4.63126
   7  -9.37824  -9.37824  -0.74131
   8 -10.93662 -10.93662   7.16961
   9 -10.93662 -10.93662   7.16961
  10 -10.93662 -10.93662   7.16961
  11 -11.04266 -11.04266   7.26923
  12 -11.04266 -11.04266   7.26923
  13 -11.04266 -11.04266   7.26928
  14 -10.95430 -10.95430   2.26256
  15 -10.95430 -10.95430   2.26256
  16 -10.95424 -10.95424   2.26245
  17  -9.32932  -9.32932  -0.91947
  18  -9.32932  -9.32932  -0.91947
  19  -9.61321  -9.61321   4.44342
  20  -9.84859  -9.84859   3.10602
  21  -9.84859  -9.84859   3.10602
  22  -9.84861  -9.84861   3.10602
  23  -9.88480  -9.88480   0.81387
  24  -9.88480  -9.88480   0.81385
  25  -9.88480  -9.88480   0.81385
  26 -10.01953 -10.01953   1.32796
  27 -10.01953 -10.01953   1.32796
 kpt= (  2.50000000E-01  0.00000000E+00  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   1 -11.11998 -11.11998   8.17876
   2 -11.66584 -11.66584  10.16477
   3 -12.02310 -12.02310  11.55348
   4 -10.41558 -10.41558   4.68321
   5 -10.41558 -10.41558   4.68321
   6 -10.54409 -10.54409   5.13951
   7 -10.61701 -10.61701   5.19578
   8 -10.55147 -10.55147   5.66227
   9 -10.68643 -10.68643   6.36350
  10 -10.68643 -10.68643   6.36350
  11  -9.73759  -9.73759   1.34231
  12 -11.03526 -11.03526   7.45367
  13 -11.03526 -11.03526   7.45369
  14 -10.77724 -10.77724   2.00070
  15 -11.11536 -11.11536   2.49565
  16 -11.11532 -11.11532   2.49560
  17  -9.39998  -9.39998  -0.39849
  18  -9.96614  -9.96614   0.78870
  19  -9.98956  -9.98956   3.73870
  20  -9.72729  -9.72729   3.22815
  21  -9.97160  -9.97160   2.01235
  22 -10.29627 -10.29627   1.27387
  23 -10.29627 -10.29627   1.27380
  24  -9.79180  -9.79180   3.55216
  25  -9.79182  -9.79182   3.55223
  26 -10.11044 -10.11044   1.64123
  27  -9.82729  -9.82729   1.34943
 kpt= (  5.00000000E-01  0.00000000E+00  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   1 -11.23582 -11.23582   8.66010
   2 -11.38044 -11.38044   9.02898
   3 -12.05745 -12.05745  11.68585
   4 -10.46032 -10.46032   4.74691
   5 -10.46032 -10.46032   4.74691
   6 -10.53001 -10.53001   4.50297
   7 -10.89508 -10.89508   7.62350
   8 -10.31886 -10.31886   4.76357
   9 -10.45957 -10.45957   5.77842
  10 -10.45957 -10.45957   5.77843
  11 -11.12600 -11.12600   7.63024
  12 -11.12600 -11.12600   7.63026
  13 -10.08267 -10.08267   0.44033
  14  -9.82585  -9.82585   1.66488
  15 -11.14666 -11.14666   2.97224
  16 -11.14660 -11.14660   2.97218
  17  -9.84486  -9.84486  -0.40651
  18 -10.09624 -10.09624   1.00915
  19 -10.54698 -10.54698   1.86232
  20 -10.27250 -10.27250   0.48413
  21 -10.27253 -10.27253   0.48413
  22  -9.85760  -9.85760   3.08392
  23  -9.56422  -9.56422   3.33269
  24 -10.79192 -10.79192   4.20238
  25 -10.52160 -10.52160   6.32997
  26 -10.52160 -10.52160   6.32997
  27  -9.89024  -9.89024   4.10481
  28  -9.89024  -9.89024   4.10480
 kpt= (  2.50000000E-01  2.50000000E-01  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   1 -11.17392 -11.17392   8.38205
   2 -11.66263 -11.66263  10.15476
   3 -11.81755 -11.81755  10.75581
   4 -10.31853 -10.31853   4.17390
   5 -10.47637 -10.47637   5.04489
   6 -10.74427 -10.74427   5.70802
   7 -10.44646 -10.44646   5.46827
   8 -10.63443 -10.63443   5.82931
   9 -10.66145 -10.66145   6.23885
  10 -10.78827 -10.78827   6.67503
  11 -10.46135 -10.46135   5.37499
  12 -11.10111 -11.10111   7.73698
  13 -10.20153 -10.20153   2.08029
  14 -10.30564 -10.30564   1.68615
  15 -10.64985 -10.64985   1.67431
  16 -11.38809 -11.38809   2.91274
  17  -9.95876  -9.95876   0.56516
  18 -10.41049 -10.41049   1.07424
  19  -9.58425  -9.58425  -0.27386
  20  -9.99010  -9.99010   4.68851
  21 -10.67228 -10.67228   1.15659
  22 -10.08580 -10.08580   1.39537
  23  -9.93775  -9.93775   4.26037
  24 -10.09709 -10.09709   4.41831
  25 -10.05786 -10.05786   3.74643
  26  -9.84972  -9.84972   1.47871
  27  -9.93020  -9.93020   3.09612
 kpt= (  5.00000000E-01  2.50000000E-01  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   1 -11.29497 -11.29497   8.86751
   2 -11.44705 -11.44705   9.30357
   3 -11.82004 -11.82004  10.77063
   4 -10.24646 -10.24646   3.72755
   5 -10.58824 -10.58824   5.57125
   6 -10.58588 -10.58588   5.01100
   7 -10.83336 -10.83336   6.79501
   8 -10.30668 -10.30668   5.14083
   9 -10.53701 -10.53701   5.85065
  10 -10.66404 -10.66404   6.22261
  11 -10.91472 -10.91472   6.92585
  12 -10.95714 -10.95714   7.54957
  13 -10.24933 -10.24933   0.90754
  14  -9.95743  -9.95743   1.64085
  15 -10.83651 -10.83651   2.19171
  16 -11.32953 -11.32953   3.02213
  17  -9.49216  -9.49216  -0.86489
  18 -10.51501 -10.51501   0.82217
  19 -10.48688 -10.48688   1.47624
  20 -10.87622 -10.87622   1.50616
  21 -10.24129 -10.24129   1.29296
  22 -10.37823 -10.37823   5.49606
  23  -9.99158  -9.99158   5.20117
  24  -9.78757  -9.78757   3.66200
  25  -9.73143  -9.73143   2.83261
  26 -10.07009 -10.07009   4.00209
  27 -10.28538 -10.28538   5.41943
 kpt= (  5.00000000E-01  5.00000000E-01  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   1 -11.45081 -11.45081   9.47067
   2 -11.52648 -11.52648   9.63149
   3 -11.52648 -11.52648   9.63149
   4 -10.04939 -10.04939   2.91200
   5 -10.77383 -10.77383   7.16254
   6 -10.73047 -10.73047   5.43887
   7 -10.73047 -10.73047   5.43888
   8 -10.35121 -10.35121   5.80458
   9 -10.40066 -10.40066   5.25290
  10 -10.40067 -10.40067   5.25291
  11 -11.44838 -11.44838   9.49821
  12 -10.00136 -10.00136   0.29830
  13 -11.31647 -11.31647   8.14766
  14  -9.69544  -9.69544   0.47277
  15 -11.35078 -11.35078   2.94417
  16 -11.35074 -11.35074   2.94415
  17 -10.33449 -10.33449  -0.30766
  18 -10.36377 -10.36377   1.14726
  19 -10.58220 -10.58220   1.47698
  20 -10.36033 -10.36033   1.61592
  21 -10.36032 -10.36032   1.61596
  22  -9.62431  -9.62431   3.45942
  23  -9.62430  -9.62430   3.45940
  24 -10.59915 -10.59915   6.48431
  25  -9.66034  -9.66034   4.20651
  26 -10.18109 -10.18109   5.14016
  27 -10.18109 -10.18109   5.14016
 kpt= (  2.50000000E-01  2.50000000E-01  2.50000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -11.23206 -11.23206   8.59605
   2 -11.71005 -11.71005  10.33600
   3 -11.71005 -11.71005  10.33601
   4 -10.18745 -10.18745   4.01625
   5 -10.56832 -10.56832   5.06917
   6 -10.56832 -10.56832   5.06917
   7 -10.47734 -10.47734   5.41240
   8 -10.51307 -10.51307   5.91440
   9 -10.51307 -10.51307   5.91440
  10 -11.10323 -11.10323   7.73017
  11  -9.86989  -9.86989   0.44429
  12 -11.21441 -11.21441   7.99445
  13 -11.21441 -11.21441   7.99445
  14  -9.78430  -9.78430   0.94393
  15 -11.10529 -11.10529   2.36744
  16 -11.10529 -11.10529   2.36744
  17 -10.53542 -10.53542   1.70878
  18 -10.26555 -10.26555   1.04572
  19 -10.26555 -10.26555   1.04572
  20  -9.81522  -9.81522   2.75014
  21  -9.80996  -9.80996   0.68639
  22  -9.80996  -9.80996   0.68639
  23 -10.33265 -10.33265   4.06222
  24 -10.33265 -10.33265   4.06222
  25 -10.17729 -10.17729   5.55735
  26 -10.02504 -10.02504   3.65889
  27 -10.02504 -10.02504   3.65889
 kpt= (  5.00000000E-01  2.50000000E-01  2.50000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -11.36061 -11.36061   9.09414
   2 -11.50655 -11.50655   9.54167
   3 -11.76293 -11.76293  10.53814
   4 -10.23726 -10.23726   4.25655
   5 -10.39637 -10.39637   4.46408
   6 -10.30356 -10.30356   4.38732
   7 -10.61628 -10.61628   5.71041
   8 -10.56271 -10.56271   6.14674
   9 -10.75255 -10.75255   6.18098
  10 -10.71959 -10.71959   6.10126
  11  -9.95763  -9.95763   1.85515
  12 -11.06370 -11.06370   7.54198
  13 -11.25033 -11.25033   8.08809
  14 -10.51002 -10.51002   1.69912
  15 -11.31104 -11.31104   2.96486
  16 -11.09316 -11.09316   2.57817
  17  -9.95473  -9.95473   0.78217
  18 -10.26493 -10.26493   0.56350
  19 -10.07262 -10.07262   0.53999
  20 -10.81544 -10.81544   2.12944
  21  -9.86858  -9.86858   3.78429
  22 -10.05032 -10.05032   0.92362
  23 -10.51690 -10.51690   5.78409
  24 -10.45464 -10.45464   5.42152
  25  -9.51725  -9.51725   2.51155
  26  -9.60048  -9.60048   2.63741
  27  -9.94096  -9.94096   3.91951
 kpt= (  5.00000000E-01  5.00000000E-01  2.50000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -11.52923 -11.52923   9.71406
   2 -11.57588 -11.57588   9.81931
   3 -11.57588 -11.57588   9.81931
   4 -10.19202 -10.19202   4.22243
   5 -10.25860 -10.25860   4.66239
   6 -10.35838 -10.35838   4.39016
   7 -10.35838 -10.35838   4.39017
   8 -10.43702 -10.43702   5.02550
   9  -9.80313  -9.80313   1.75399
  10 -10.90643 -10.90643   6.69155
  11 -10.90643 -10.90643   6.69156
  12 -11.47205 -11.47205   9.53108
  13 -11.38895 -11.38895   8.53231
  14 -10.91424 -10.91424   1.89150
  15 -11.34924 -11.34924   3.12709
  16 -11.34921 -11.34921   3.12707
  17 -10.06718 -10.06718  -0.13810
  18 -10.40829 -10.40829   0.97108
  19  -9.89778  -9.89778   2.99111
  20  -9.89778  -9.89778   2.99105
  21  -9.92256  -9.92256   0.95538
  22 -10.23549 -10.23549   2.53839
  23 -10.23548 -10.23548   2.53836
  24 -10.64864 -10.64864   5.74387
  25  -9.70859  -9.70859   3.17239
  26  -9.70859  -9.70859   3.17239
  27  -9.76699  -9.76699   3.37007
 kpt= (  5.00000000E-01  5.00000000E-01  5.00000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -11.63189 -11.63189  10.03270
   2 -11.63189 -11.63189  10.03270
   3 -11.63189 -11.63189  10.03270
   4 -10.15839 -10.15839   4.77530
   5 -10.16563 -10.16563   3.78662
   6 -10.16563 -10.16563   3.78662
   7 -10.16563 -10.16563   3.78662
   8  -9.08797  -9.08797  -1.62743
   9 -11.49920 -11.49920   9.58191
  10 -11.49920 -11.49920   9.58191
  11 -11.47322 -11.47322   8.96680
  12 -11.47322 -11.47322   8.96680
  13 -11.47322 -11.47322   8.96680
  14 -11.13629 -11.13629   2.33442
  15 -11.13629 -11.13629   2.33442
  16 -11.13624 -11.13624   2.33442
  17 -10.24648 -10.24648   0.44912
  18 -10.24648 -10.24648   0.44912
  19  -9.77788  -9.77788   3.21238
  20  -9.77788  -9.77788   3.21238
  21  -9.77787  -9.77787   3.21230
  22 -10.48254 -10.48254   2.00954
  23 -10.48253 -10.48253   2.00952
  24 -10.48253 -10.48253   2.00952
  25  -9.64175  -9.64175   3.00637
  26  -9.64175  -9.64175   3.00637
  27  -9.64175  -9.64175   3.00637
 Er%ID:           4
 Er%Hscr%ID:           4
 Memory needed for Er%epsm1 =        449.0 [Mb]
mkdump_Erread_screening with MPI_IO
 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.006969754280
            omega twiddle min location =   682 1148

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.006235316647
            omega twiddle min location =   363  935

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.004620284034
            omega twiddle min location =   997  462

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.017448095859
            omega twiddle min location =   578  292

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.007571978899
            omega twiddle min location =   656  332

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.005824337099
            omega twiddle min location =   742 1175

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.004186107584
            omega twiddle min location =   236  854

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.002806763511
            omega twiddle min location =   457  865

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.012409917188
            omega twiddle min location =   652  184

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.007597082469
            omega twiddle min location =   137  916


--- !WARNING
message: |
    Checking if PPm em1 is output, nfreqre is: -1 freqremax is:     0.00 eV
src_file: sigma.F90
src_line: 2068
...

 SIGMA fundamental parameters:
 PLASMON POLE MODEL  1
 number of plane-waves for SigmaX                 2109
 number of plane-waves for SigmaC and W           1213
 number of plane-waves for wavefunctions          2109
 number of bands                                    64
 number of independent spin polarizations            1
 number of spinorial components                      1
 number of k-points in IBZ                          10
 number of q-points in IBZ                          10
 number of symmetry operations                      24
 number of k-points in BZ                           64
 number of q-points in BZ                           64
 number of frequencies for dSigma/dE                 9
 frequency step for dSigma/dE [eV]                0.25
 number of omega for Sigma on real axis              0
 max omega for Sigma on real axis  [eV]           0.00
 zcut for avoiding poles [eV]                     0.10

 EPSILON^-1 parameters (SCR file):
 dimension of the eps^-1 matrix on file           1213
 dimension of the eps^-1 matrix used              1213
 number of plane-waves for wavefunctions          2109
 number of bands                                    64
 number of q-points in IBZ                          10
 number of frequencies                               2
 number of real frequencies                          1
 number of imag frequencies                          1

 matrix elements of self-energy operator (all in [eV])

 Perturbative Calculation
 ==== Info on the Wfd% object ====
  Number of irreducible k-points ........ 10
  Number of spinorial components ........ 1
  Number of spin-density components ..... 1
  Number of spin polarizations .......... 1
  Plane wave cutoff energy ..............  11.8
  Max number of G-vectors ............... 2176
  Total number of FFT points ............ 46656
  Number of FFT points treated by me .... 46656
  Parallelism over k-b-g (paral_kgb) .... 0


 ==== FFT mesh for wavefunctions ====
  FFT mesh divisions ........................    36   36   36
  Augmented FFT divisions ...................    37   37   36
  FFT algorithm .............................   312
  FFT cache size ............................    16
 standard GW with PPM
 Perturbative Calculation

 Calculating <nk|Sigma_x|nk> at k=    0.000   0.000   0.000
 bands n = from   1 to  27

 Will sum   12 (b,k,s) occupied states in Sigma_x.

 ==== Little Group Info ==== 
  External point   0.00000000E+00  0.00000000E+00  0.00000000E+00
  Number of points in the IBZ defined by little group     10/   64
  Number of operations in the little group :  48/ 24

  No time-reversal symmetry with zero umklapp: 24
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp: 24
  time-reversal symmetry with non-zero umklapp:  0


 calc_sigx_me: calculation status (     10 to be completed):
 calc_sigx_me : ik_bz    1/  64 done by processor   0
 calc_sigx_me : ik_bz    3/  64 done by processor   0
 calc_sigx_me : ik_bz    8/  64 done by processor   0
 calc_sigx_me : ik_bz   13/  64 done by processor   0
 calc_sigx_me : ik_bz   24/  64 done by processor   0
 calc_sigx_me : ik_bz   35/  64 done by processor   0
 calc_sigx_me : ik_bz   42/  64 done by processor   0
 calc_sigx_me : ik_bz   49/  64 done by processor   0
 calc_sigx_me : ik_bz   59/  64 done by processor   0
 calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.250   0.000   0.000
 bands n = from   1 to  27

 Will sum   29 (b,k,s) occupied states in Sigma_x.

 ==== Little Group Info ==== 
  External point   2.50000000E-01  0.00000000E+00  0.00000000E+00
  Number of points in the IBZ defined by little group     24/   64
  Number of operations in the little group :   8/ 24

  No time-reversal symmetry with zero umklapp:  4
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  4
  time-reversal symmetry with non-zero umklapp:  0


 calc_sigx_me: calculation status (     24 to be completed):
 calc_sigx_me : ik_bz    1/  64 done by processor   0
 calc_sigx_me : ik_bz    2/  64 done by processor   0
 calc_sigx_me : ik_bz    3/  64 done by processor   0
 calc_sigx_me : ik_bz    5/  64 done by processor   0
 calc_sigx_me : ik_bz    8/  64 done by processor   0
 calc_sigx_me : ik_bz    9/  64 done by processor   0
 calc_sigx_me : ik_bz   13/  64 done by processor   0
 calc_sigx_me : ik_bz   14/  64 done by processor   0
 calc_sigx_me : ik_bz   21/  64 done by processor   0
 calc_sigx_me : ik_bz   24/  64 done by processor   0
 calc_sigx_me : ik_bz   25/  64 done by processor   0
 calc_sigx_me : ik_bz   26/  64 done by processor   0
 calc_sigx_me : ik_bz   32/  64 done by processor   0
 calc_sigx_me : ik_bz   35/  64 done by processor   0
 calc_sigx_me : ik_bz   37/  64 done by processor   0
 calc_sigx_me : ik_bz   41/  64 done by processor   0
 calc_sigx_me : ik_bz   42/  64 done by processor   0
 calc_sigx_me : ik_bz   48/  64 done by processor   0
 calc_sigx_me : ik_bz   51/  64 done by processor   0
 calc_sigx_me : ik_bz   53/  64 done by processor   0
 calc_sigx_me : ik_bz   59/  64 done by processor   0
 calc_sigx_me : ik_bz   62/  64 done by processor   0
 calc_sigx_me : ik_bz   63/  64 done by processor   0
 calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.500   0.000   0.000
 bands n = from   1 to  28

 Will sum   21 (b,k,s) occupied states in Sigma_x.

 ==== Little Group Info ==== 
  External point   5.00000000E-01  0.00000000E+00  0.00000000E+00
  Number of points in the IBZ defined by little group     18/   64
  Number of operations in the little group :  16/ 24

  No time-reversal symmetry with zero umklapp:  4
  No time-reversal symmetry with non-zero umklapp:  4


  time-reversal symmetry with zero umklapp:  4
  time-reversal symmetry with non-zero umklapp:  4


 calc_sigx_me: calculation status (     18 to be completed):
 calc_sigx_me : ik_bz    1/  64 done by processor   0
 calc_sigx_me : ik_bz    2/  64 done by processor   0
 calc_sigx_me : ik_bz    5/  64 done by processor   0
 calc_sigx_me : ik_bz    8/  64 done by processor   0
 calc_sigx_me : ik_bz    9/  64 done by processor   0
 calc_sigx_me : ik_bz   14/  64 done by processor   0
 calc_sigx_me : ik_bz   21/  64 done by processor   0
 calc_sigx_me : ik_bz   24/  64 done by processor   0
 calc_sigx_me : ik_bz   25/  64 done by processor   0
 calc_sigx_me : ik_bz   32/  64 done by processor   0
 calc_sigx_me : ik_bz   35/  64 done by processor   0
 calc_sigx_me : ik_bz   37/  64 done by processor   0
 calc_sigx_me : ik_bz   41/  64 done by processor   0
 calc_sigx_me : ik_bz   49/  64 done by processor   0
 calc_sigx_me : ik_bz   51/  64 done by processor   0
 calc_sigx_me : ik_bz   59/  64 done by processor   0
 calc_sigx_me : ik_bz   62/  64 done by processor   0
 calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.250   0.250   0.000
 bands n = from   1 to  27

 Will sum   36 (b,k,s) occupied states in Sigma_x.

 ==== Little Group Info ==== 
  External point   2.50000000E-01  2.50000000E-01  0.00000000E+00
  Number of points in the IBZ defined by little group     30/   64
  Number of operations in the little group :   4/ 24

  No time-reversal symmetry with zero umklapp:  2
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  2
  time-reversal symmetry with non-zero umklapp:  0


 calc_sigx_me: calculation status (     30 to be completed):
 calc_sigx_me : ik_bz    1/  64 done by processor   0
 calc_sigx_me : ik_bz    3/  64 done by processor   0
 calc_sigx_me : ik_bz    4/  64 done by processor   0
 calc_sigx_me : ik_bz    7/  64 done by processor   0
 calc_sigx_me : ik_bz    8/  64 done by processor   0
 calc_sigx_me : ik_bz   10/  64 done by processor   0
 calc_sigx_me : ik_bz   11/  64 done by processor   0
 calc_sigx_me : ik_bz   12/  64 done by processor   0
 calc_sigx_me : ik_bz   13/  64 done by processor   0
 calc_sigx_me : ik_bz   17/  64 done by processor   0
 calc_sigx_me : ik_bz   22/  64 done by processor   0
 calc_sigx_me : ik_bz   23/  64 done by processor   0
 calc_sigx_me : ik_bz   26/  64 done by processor   0
 calc_sigx_me : ik_bz   28/  64 done by processor   0
 calc_sigx_me : ik_bz   29/  64 done by processor   0
 calc_sigx_me : ik_bz   33/  64 done by processor   0
 calc_sigx_me : ik_bz   35/  64 done by processor   0
 calc_sigx_me : ik_bz   37/  64 done by processor   0
 calc_sigx_me : ik_bz   39/  64 done by processor   0
 calc_sigx_me : ik_bz   42/  64 done by processor   0
 calc_sigx_me : ik_bz   44/  64 done by processor   0
 calc_sigx_me : ik_bz   46/  64 done by processor   0
 calc_sigx_me : ik_bz   53/  64 done by processor   0
 calc_sigx_me : ik_bz   54/  64 done by processor   0
 calc_sigx_me : ik_bz   56/  64 done by processor   0
 calc_sigx_me : ik_bz   57/  64 done by processor   0
 calc_sigx_me : ik_bz   59/  64 done by processor   0
 calc_sigx_me : ik_bz   60/  64 done by processor   0
 calc_sigx_me : ik_bz   63/  64 done by processor   0
 calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.500   0.250   0.000
 bands n = from   1 to  27

 Will sum   43 (b,k,s) occupied states in Sigma_x.

 ==== Little Group Info ==== 
  External point   5.00000000E-01  2.50000000E-01  0.00000000E+00
  Number of points in the IBZ defined by little group     36/   64
  Number of operations in the little group :   4/ 24

  No time-reversal symmetry with zero umklapp:  1
  No time-reversal symmetry with non-zero umklapp:  1


  time-reversal symmetry with zero umklapp:  1
  time-reversal symmetry with non-zero umklapp:  1


 calc_sigx_me: calculation status (     36 to be completed):
 calc_sigx_me : ik_bz    1/  64 done by processor   0
 calc_sigx_me : ik_bz    2/  64 done by processor   0
 calc_sigx_me : ik_bz    4/  64 done by processor   0
 calc_sigx_me : ik_bz    5/  64 done by processor   0
 calc_sigx_me : ik_bz    7/  64 done by processor   0
 calc_sigx_me : ik_bz    8/  64 done by processor   0
 calc_sigx_me : ik_bz    9/  64 done by processor   0
 calc_sigx_me : ik_bz   10/  64 done by processor   0
 calc_sigx_me : ik_bz   11/  64 done by processor   0
 calc_sigx_me : ik_bz   14/  64 done by processor   0
 calc_sigx_me : ik_bz   16/  64 done by processor   0
 calc_sigx_me : ik_bz   21/  64 done by processor   0
 calc_sigx_me : ik_bz   22/  64 done by processor   0
 calc_sigx_me : ik_bz   23/  64 done by processor   0
 calc_sigx_me : ik_bz   24/  64 done by processor   0
 calc_sigx_me : ik_bz   26/  64 done by processor   0
 calc_sigx_me : ik_bz   27/  64 done by processor   0
 calc_sigx_me : ik_bz   30/  64 done by processor   0
 calc_sigx_me : ik_bz   32/  64 done by processor   0
 calc_sigx_me : ik_bz   33/  64 done by processor   0
 calc_sigx_me : ik_bz   34/  64 done by processor   0
 calc_sigx_me : ik_bz   35/  64 done by processor   0
 calc_sigx_me : ik_bz   36/  64 done by processor   0
 calc_sigx_me : ik_bz   37/  64 done by processor   0
 calc_sigx_me : ik_bz   41/  64 done by processor   0
 calc_sigx_me : ik_bz   44/  64 done by processor   0
 calc_sigx_me : ik_bz   47/  64 done by processor   0
 calc_sigx_me : ik_bz   49/  64 done by processor   0
 calc_sigx_me : ik_bz   53/  64 done by processor   0
 calc_sigx_me : ik_bz   54/  64 done by processor   0
 calc_sigx_me : ik_bz   55/  64 done by processor   0
 calc_sigx_me : ik_bz   59/  64 done by processor   0
 calc_sigx_me : ik_bz   60/  64 done by processor   0
 calc_sigx_me : ik_bz   61/  64 done by processor   0
 calc_sigx_me : ik_bz   62/  64 done by processor   0
 calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.500   0.500   0.000
 bands n = from   1 to  27

 Will sum   21 (b,k,s) occupied states in Sigma_x.

 ==== Little Group Info ==== 
  External point   5.00000000E-01  5.00000000E-01  0.00000000E+00
  Number of points in the IBZ defined by little group     18/   64
  Number of operations in the little group :  16/ 24

  No time-reversal symmetry with zero umklapp:  2
  No time-reversal symmetry with non-zero umklapp:  6


  time-reversal symmetry with zero umklapp:  2
  time-reversal symmetry with non-zero umklapp:  6


 calc_sigx_me: calculation status (     18 to be completed):
 calc_sigx_me : ik_bz    1/  64 done by processor   0
 calc_sigx_me : ik_bz    4/  64 done by processor   0
 calc_sigx_me : ik_bz    7/  64 done by processor   0
 calc_sigx_me : ik_bz    9/  64 done by processor   0
 calc_sigx_me : ik_bz   10/  64 done by processor   0
 calc_sigx_me : ik_bz   11/  64 done by processor   0
 calc_sigx_me : ik_bz   22/  64 done by processor   0
 calc_sigx_me : ik_bz   25/  64 done by processor   0
 calc_sigx_me : ik_bz   32/  64 done by processor   0
 calc_sigx_me : ik_bz   33/  64 done by processor   0
 calc_sigx_me : ik_bz   35/  64 done by processor   0
 calc_sigx_me : ik_bz   37/  64 done by processor   0
 calc_sigx_me : ik_bz   44/  64 done by processor   0
 calc_sigx_me : ik_bz   51/  64 done by processor   0
 calc_sigx_me : ik_bz   54/  64 done by processor   0
 calc_sigx_me : ik_bz   59/  64 done by processor   0
 calc_sigx_me : ik_bz   62/  64 done by processor   0
 calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.250   0.250   0.250
 bands n = from   1 to  27

 Will sum   24 (b,k,s) occupied states in Sigma_x.

 ==== Little Group Info ==== 
  External point   2.50000000E-01  2.50000000E-01  2.50000000E-01
  Number of points in the IBZ defined by little group     20/   64
  Number of operations in the little group :   6/ 24

  No time-reversal symmetry with zero umklapp:  6
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  0
  time-reversal symmetry with non-zero umklapp:  0


 calc_sigx_me: calculation status (     20 to be completed):
 calc_sigx_me : ik_bz    1/  64 done by processor   0
 calc_sigx_me : ik_bz    3/  64 done by processor   0
 calc_sigx_me : ik_bz    6/  64 done by processor   0
 calc_sigx_me : ik_bz    9/  64 done by processor   0
 calc_sigx_me : ik_bz   13/  64 done by processor   0
 calc_sigx_me : ik_bz   18/  64 done by processor   0
 calc_sigx_me : ik_bz   19/  64 done by processor   0
 calc_sigx_me : ik_bz   28/  64 done by processor   0
 calc_sigx_me : ik_bz   29/  64 done by processor   0
 calc_sigx_me : ik_bz   36/  64 done by processor   0
 calc_sigx_me : ik_bz   38/  64 done by processor   0
 calc_sigx_me : ik_bz   40/  64 done by processor   0
 calc_sigx_me : ik_bz   42/  64 done by processor   0
 calc_sigx_me : ik_bz   45/  64 done by processor   0
 calc_sigx_me : ik_bz   46/  64 done by processor   0
 calc_sigx_me : ik_bz   52/  64 done by processor   0
 calc_sigx_me : ik_bz   57/  64 done by processor   0
 calc_sigx_me : ik_bz   58/  64 done by processor   0
 calc_sigx_me : ik_bz   63/  64 done by processor   0
 calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.500   0.250   0.250
 bands n = from   1 to  27

 Will sum   36 (b,k,s) occupied states in Sigma_x.

 ==== Little Group Info ==== 
  External point   5.00000000E-01  2.50000000E-01  2.50000000E-01
  Number of points in the IBZ defined by little group     30/   64
  Number of operations in the little group :   4/ 24

  No time-reversal symmetry with zero umklapp:  2
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  0
  time-reversal symmetry with non-zero umklapp:  2


 calc_sigx_me: calculation status (     30 to be completed):
 calc_sigx_me : ik_bz    1/  64 done by processor   0
 calc_sigx_me : ik_bz    2/  64 done by processor   0
 calc_sigx_me : ik_bz    5/  64 done by processor   0
 calc_sigx_me : ik_bz    6/  64 done by processor   0
 calc_sigx_me : ik_bz    8/  64 done by processor   0
 calc_sigx_me : ik_bz   10/  64 done by processor   0
 calc_sigx_me : ik_bz   14/  64 done by processor   0
 calc_sigx_me : ik_bz   15/  64 done by processor   0
 calc_sigx_me : ik_bz   19/  64 done by processor   0
 calc_sigx_me : ik_bz   20/  64 done by processor   0
 calc_sigx_me : ik_bz   21/  64 done by processor   0
 calc_sigx_me : ik_bz   24/  64 done by processor   0
 calc_sigx_me : ik_bz   28/  64 done by processor   0
 calc_sigx_me : ik_bz   29/  64 done by processor   0
 calc_sigx_me : ik_bz   31/  64 done by processor   0
 calc_sigx_me : ik_bz   34/  64 done by processor   0
 calc_sigx_me : ik_bz   35/  64 done by processor   0
 calc_sigx_me : ik_bz   37/  64 done by processor   0
 calc_sigx_me : ik_bz   38/  64 done by processor   0
 calc_sigx_me : ik_bz   41/  64 done by processor   0
 calc_sigx_me : ik_bz   43/  64 done by processor   0
 calc_sigx_me : ik_bz   46/  64 done by processor   0
 calc_sigx_me : ik_bz   48/  64 done by processor   0
 calc_sigx_me : ik_bz   49/  64 done by processor   0
 calc_sigx_me : ik_bz   52/  64 done by processor   0
 calc_sigx_me : ik_bz   55/  64 done by processor   0
 calc_sigx_me : ik_bz   58/  64 done by processor   0
 calc_sigx_me : ik_bz   61/  64 done by processor   0
 calc_sigx_me : ik_bz   62/  64 done by processor   0
 calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.500   0.500   0.250
 bands n = from   1 to  27

 Will sum   29 (b,k,s) occupied states in Sigma_x.

 ==== Little Group Info ==== 
  External point   5.00000000E-01  5.00000000E-01  2.50000000E-01
  Number of points in the IBZ defined by little group     24/   64
  Number of operations in the little group :   8/ 24

  No time-reversal symmetry with zero umklapp:  2
  No time-reversal symmetry with non-zero umklapp:  2


  time-reversal symmetry with zero umklapp:  0
  time-reversal symmetry with non-zero umklapp:  4


 calc_sigx_me: calculation status (     24 to be completed):
 calc_sigx_me : ik_bz    1/  64 done by processor   0
 calc_sigx_me : ik_bz    4/  64 done by processor   0
 calc_sigx_me : ik_bz    6/  64 done by processor   0
 calc_sigx_me : ik_bz    7/  64 done by processor   0
 calc_sigx_me : ik_bz    9/  64 done by processor   0
 calc_sigx_me : ik_bz   10/  64 done by processor   0
 calc_sigx_me : ik_bz   11/  64 done by processor   0
 calc_sigx_me : ik_bz   19/  64 done by processor   0
 calc_sigx_me : ik_bz   22/  64 done by processor   0
 calc_sigx_me : ik_bz   25/  64 done by processor   0
 calc_sigx_me : ik_bz   31/  64 done by processor   0
 calc_sigx_me : ik_bz   32/  64 done by processor   0
 calc_sigx_me : ik_bz   33/  64 done by processor   0
 calc_sigx_me : ik_bz   35/  64 done by processor   0
 calc_sigx_me : ik_bz   37/  64 done by processor   0
 calc_sigx_me : ik_bz   38/  64 done by processor   0
 calc_sigx_me : ik_bz   44/  64 done by processor   0
 calc_sigx_me : ik_bz   50/  64 done by processor   0
 calc_sigx_me : ik_bz   51/  64 done by processor   0
 calc_sigx_me : ik_bz   56/  64 done by processor   0
 calc_sigx_me : ik_bz   58/  64 done by processor   0
 calc_sigx_me : ik_bz   59/  64 done by processor   0
 calc_sigx_me : ik_bz   62/  64 done by processor   0
 calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.500   0.500   0.500
 bands n = from   1 to  27

 Will sum   12 (b,k,s) occupied states in Sigma_x.

 ==== Little Group Info ==== 
  External point   5.00000000E-01  5.00000000E-01  5.00000000E-01
  Number of points in the IBZ defined by little group     10/   64
  Number of operations in the little group :  48/ 24

  No time-reversal symmetry with zero umklapp:  6
  No time-reversal symmetry with non-zero umklapp: 18


  time-reversal symmetry with zero umklapp:  0
  time-reversal symmetry with non-zero umklapp: 24


 calc_sigx_me: calculation status (     10 to be completed):
 calc_sigx_me : ik_bz    1/  64 done by processor   0
 calc_sigx_me : ik_bz    6/  64 done by processor   0
 calc_sigx_me : ik_bz   10/  64 done by processor   0
 calc_sigx_me : ik_bz   19/  64 done by processor   0
 calc_sigx_me : ik_bz   33/  64 done by processor   0
 calc_sigx_me : ik_bz   37/  64 done by processor   0
 calc_sigx_me : ik_bz   38/  64 done by processor   0
 calc_sigx_me : ik_bz   54/  64 done by processor   0
 calc_sigx_me : ik_bz   62/  64 done by processor   0
 calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_c(omega)|nk> at k =    0.000   0.000   0.000
 bands n = from   1 to  27


--- !COMMENT
message: |
    Changing FFT mesh
src_file: m_wfs.F90
src_line: 4926
...

 standard GW with PPM
 Will sum 47 (b,k,s) states in Sigma_c.

 ==== Little Group Info ==== 
  External point   0.00000000E+00  0.00000000E+00  0.00000000E+00
  Number of points in the IBZ defined by little group     10/   64
  Number of operations in the little group :  48/ 24

  No time-reversal symmetry with zero umklapp: 24
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp: 24
  time-reversal symmetry with non-zero umklapp:  0


 calculation status (     10 to be completed):
 csigme : ik_bz    1/  64 done by processor   0
 csigme : ik_bz    3/  64 done by processor   0
 csigme : ik_bz    8/  64 done by processor   0
 csigme : ik_bz   13/  64 done by processor   0
 csigme : ik_bz   24/  64 done by processor   0
 csigme : ik_bz   35/  64 done by processor   0
 csigme : ik_bz   42/  64 done by processor   0
 csigme : ik_bz   49/  64 done by processor   0
 csigme : ik_bz   59/  64 done by processor   0
 csigme : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_c(omega)|nk> at k =    0.250   0.000   0.000
 bands n = from   1 to  27

 standard GW with PPM
 Will sum 113 (b,k,s) states in Sigma_c.

 ==== Little Group Info ==== 
  External point   2.50000000E-01  0.00000000E+00  0.00000000E+00
  Number of points in the IBZ defined by little group     24/   64
  Number of operations in the little group :   8/ 24

  No time-reversal symmetry with zero umklapp:  4
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  4
  time-reversal symmetry with non-zero umklapp:  0


 calculation status (     24 to be completed):
 csigme : ik_bz    1/  64 done by processor   0
 csigme : ik_bz    2/  64 done by processor   0
 csigme : ik_bz    3/  64 done by processor   0
 csigme : ik_bz    5/  64 done by processor   0
 csigme : ik_bz    8/  64 done by processor   0
 csigme : ik_bz    9/  64 done by processor   0
 csigme : ik_bz   13/  64 done by processor   0
 csigme : ik_bz   14/  64 done by processor   0
 csigme : ik_bz   21/  64 done by processor   0
 csigme : ik_bz   24/  64 done by processor   0
 csigme : ik_bz   25/  64 done by processor   0
 csigme : ik_bz   26/  64 done by processor   0
 csigme : ik_bz   32/  64 done by processor   0
 csigme : ik_bz   35/  64 done by processor   0
 csigme : ik_bz   37/  64 done by processor   0
 csigme : ik_bz   41/  64 done by processor   0
 csigme : ik_bz   42/  64 done by processor   0
 csigme : ik_bz   48/  64 done by processor   0
 csigme : ik_bz   51/  64 done by processor   0
 csigme : ik_bz   53/  64 done by processor   0
 csigme : ik_bz   59/  64 done by processor   0
 csigme : ik_bz   62/  64 done by processor   0
 csigme : ik_bz   63/  64 done by processor   0
 csigme : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_c(omega)|nk> at k =    0.500   0.000   0.000
 bands n = from   1 to  28

 standard GW with PPM
 Will sum 85 (b,k,s) states in Sigma_c.

 ==== Little Group Info ==== 
  External point   5.00000000E-01  0.00000000E+00  0.00000000E+00
  Number of points in the IBZ defined by little group     18/   64
  Number of operations in the little group :  16/ 24

  No time-reversal symmetry with zero umklapp:  4
  No time-reversal symmetry with non-zero umklapp:  4


  time-reversal symmetry with zero umklapp:  4
  time-reversal symmetry with non-zero umklapp:  4


 calculation status (     18 to be completed):
 csigme : ik_bz    1/  64 done by processor   0
 csigme : ik_bz    2/  64 done by processor   0
 csigme : ik_bz    5/  64 done by processor   0
 csigme : ik_bz    8/  64 done by processor   0
 csigme : ik_bz    9/  64 done by processor   0
 csigme : ik_bz   14/  64 done by processor   0
 csigme : ik_bz   21/  64 done by processor   0
 csigme : ik_bz   24/  64 done by processor   0
 csigme : ik_bz   25/  64 done by processor   0
 csigme : ik_bz   32/  64 done by processor   0
 csigme : ik_bz   35/  64 done by processor   0
 csigme : ik_bz   37/  64 done by processor   0
 csigme : ik_bz   41/  64 done by processor   0
 csigme : ik_bz   49/  64 done by processor   0
 csigme : ik_bz   51/  64 done by processor   0
 csigme : ik_bz   59/  64 done by processor   0
 csigme : ik_bz   62/  64 done by processor   0
 csigme : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_c(omega)|nk> at k =    0.250   0.250   0.000
 bands n = from   1 to  27

 standard GW with PPM
 Will sum 141 (b,k,s) states in Sigma_c.

 ==== Little Group Info ==== 
  External point   2.50000000E-01  2.50000000E-01  0.00000000E+00
  Number of points in the IBZ defined by little group     30/   64
  Number of operations in the little group :   4/ 24

  No time-reversal symmetry with zero umklapp:  2
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  2
  time-reversal symmetry with non-zero umklapp:  0


 calculation status (     30 to be completed):
 csigme : ik_bz    1/  64 done by processor   0
 csigme : ik_bz    3/  64 done by processor   0
 csigme : ik_bz    4/  64 done by processor   0
 csigme : ik_bz    7/  64 done by processor   0
 csigme : ik_bz    8/  64 done by processor   0
 csigme : ik_bz   10/  64 done by processor   0
 csigme : ik_bz   11/  64 done by processor   0
 csigme : ik_bz   12/  64 done by processor   0
 csigme : ik_bz   13/  64 done by processor   0
 csigme : ik_bz   17/  64 done by processor   0
 csigme : ik_bz   22/  64 done by processor   0
 csigme : ik_bz   23/  64 done by processor   0
 csigme : ik_bz   26/  64 done by processor   0
 csigme : ik_bz   28/  64 done by processor   0
 csigme : ik_bz   29/  64 done by processor   0
 csigme : ik_bz   33/  64 done by processor   0
 csigme : ik_bz   35/  64 done by processor   0
 csigme : ik_bz   37/  64 done by processor   0
 csigme : ik_bz   39/  64 done by processor   0
 csigme : ik_bz   42/  64 done by processor   0
 csigme : ik_bz   44/  64 done by processor   0
 csigme : ik_bz   46/  64 done by processor   0
 csigme : ik_bz   53/  64 done by processor   0
 csigme : ik_bz   54/  64 done by processor   0
 csigme : ik_bz   56/  64 done by processor   0
 csigme : ik_bz   57/  64 done by processor   0
 csigme : ik_bz   59/  64 done by processor   0
 csigme : ik_bz   60/  64 done by processor   0
 csigme : ik_bz   63/  64 done by processor   0
 csigme : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_c(omega)|nk> at k =    0.500   0.250   0.000
 bands n = from   1 to  27

 standard GW with PPM
 Will sum 169 (b,k,s) states in Sigma_c.

 ==== Little Group Info ==== 
  External point   5.00000000E-01  2.50000000E-01  0.00000000E+00
  Number of points in the IBZ defined by little group     36/   64
  Number of operations in the little group :   4/ 24

  No time-reversal symmetry with zero umklapp:  1
  No time-reversal symmetry with non-zero umklapp:  1


  time-reversal symmetry with zero umklapp:  1
  time-reversal symmetry with non-zero umklapp:  1


 calculation status (     36 to be completed):
 csigme : ik_bz    1/  64 done by processor   0
 csigme : ik_bz    2/  64 done by processor   0
 csigme : ik_bz    4/  64 done by processor   0
 csigme : ik_bz    5/  64 done by processor   0
 csigme : ik_bz    7/  64 done by processor   0
 csigme : ik_bz    8/  64 done by processor   0
 csigme : ik_bz    9/  64 done by processor   0
 csigme : ik_bz   10/  64 done by processor   0
 csigme : ik_bz   11/  64 done by processor   0
 csigme : ik_bz   14/  64 done by processor   0
 csigme : ik_bz   16/  64 done by processor   0
 csigme : ik_bz   21/  64 done by processor   0
 csigme : ik_bz   22/  64 done by processor   0
 csigme : ik_bz   23/  64 done by processor   0
 csigme : ik_bz   24/  64 done by processor   0
 csigme : ik_bz   26/  64 done by processor   0
 csigme : ik_bz   27/  64 done by processor   0
 csigme : ik_bz   30/  64 done by processor   0
 csigme : ik_bz   32/  64 done by processor   0
 csigme : ik_bz   33/  64 done by processor   0
 csigme : ik_bz   34/  64 done by processor   0
 csigme : ik_bz   35/  64 done by processor   0
 csigme : ik_bz   36/  64 done by processor   0
 csigme : ik_bz   37/  64 done by processor   0
 csigme : ik_bz   41/  64 done by processor   0
 csigme : ik_bz   44/  64 done by processor   0
 csigme : ik_bz   47/  64 done by processor   0
 csigme : ik_bz   49/  64 done by processor   0
 csigme : ik_bz   53/  64 done by processor   0
 csigme : ik_bz   54/  64 done by processor   0
 csigme : ik_bz   55/  64 done by processor   0
 csigme : ik_bz   59/  64 done by processor   0
 csigme : ik_bz   60/  64 done by processor   0
 csigme : ik_bz   61/  64 done by processor   0
 csigme : ik_bz   62/  64 done by processor   0
 csigme : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_c(omega)|nk> at k =    0.500   0.500   0.000
 bands n = from   1 to  27

 standard GW with PPM
 Will sum 85 (b,k,s) states in Sigma_c.

 ==== Little Group Info ==== 
  External point   5.00000000E-01  5.00000000E-01  0.00000000E+00
  Number of points in the IBZ defined by little group     18/   64
  Number of operations in the little group :  16/ 24

  No time-reversal symmetry with zero umklapp:  2
  No time-reversal symmetry with non-zero umklapp:  6


  time-reversal symmetry with zero umklapp:  2
  time-reversal symmetry with non-zero umklapp:  6


 calculation status (     18 to be completed):
 csigme : ik_bz    1/  64 done by processor   0
 csigme : ik_bz    4/  64 done by processor   0
 csigme : ik_bz    7/  64 done by processor   0
 csigme : ik_bz    9/  64 done by processor   0
 csigme : ik_bz   10/  64 done by processor   0
 csigme : ik_bz   11/  64 done by processor   0
 csigme : ik_bz   22/  64 done by processor   0
 csigme : ik_bz   25/  64 done by processor   0
 csigme : ik_bz   32/  64 done by processor   0
 csigme : ik_bz   33/  64 done by processor   0
 csigme : ik_bz   35/  64 done by processor   0
 csigme : ik_bz   37/  64 done by processor   0
 csigme : ik_bz   44/  64 done by processor   0
 csigme : ik_bz   51/  64 done by processor   0
 csigme : ik_bz   54/  64 done by processor   0
 csigme : ik_bz   59/  64 done by processor   0
 csigme : ik_bz   62/  64 done by processor   0
 csigme : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_c(omega)|nk> at k =    0.250   0.250   0.250
 bands n = from   1 to  27

 standard GW with PPM
 Will sum 94 (b,k,s) states in Sigma_c.

 ==== Little Group Info ==== 
  External point   2.50000000E-01  2.50000000E-01  2.50000000E-01
  Number of points in the IBZ defined by little group     20/   64
  Number of operations in the little group :   6/ 24

  No time-reversal symmetry with zero umklapp:  6
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  0
  time-reversal symmetry with non-zero umklapp:  0


 calculation status (     20 to be completed):
 csigme : ik_bz    1/  64 done by processor   0
 csigme : ik_bz    3/  64 done by processor   0
 csigme : ik_bz    6/  64 done by processor   0
 csigme : ik_bz    9/  64 done by processor   0
 csigme : ik_bz   13/  64 done by processor   0
 csigme : ik_bz   18/  64 done by processor   0
 csigme : ik_bz   19/  64 done by processor   0
 csigme : ik_bz   28/  64 done by processor   0
 csigme : ik_bz   29/  64 done by processor   0
 csigme : ik_bz   36/  64 done by processor   0
 csigme : ik_bz   38/  64 done by processor   0
 csigme : ik_bz   40/  64 done by processor   0
 csigme : ik_bz   42/  64 done by processor   0
 csigme : ik_bz   45/  64 done by processor   0
 csigme : ik_bz   46/  64 done by processor   0
 csigme : ik_bz   52/  64 done by processor   0
 csigme : ik_bz   57/  64 done by processor   0
 csigme : ik_bz   58/  64 done by processor   0
 csigme : ik_bz   63/  64 done by processor   0
 csigme : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_c(omega)|nk> at k =    0.500   0.250   0.250
 bands n = from   1 to  27

 standard GW with PPM
 Will sum 141 (b,k,s) states in Sigma_c.

 ==== Little Group Info ==== 
  External point   5.00000000E-01  2.50000000E-01  2.50000000E-01
  Number of points in the IBZ defined by little group     30/   64
  Number of operations in the little group :   4/ 24

  No time-reversal symmetry with zero umklapp:  2
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  0
  time-reversal symmetry with non-zero umklapp:  2


 calculation status (     30 to be completed):
 csigme : ik_bz    1/  64 done by processor   0
 csigme : ik_bz    2/  64 done by processor   0
 csigme : ik_bz    5/  64 done by processor   0
 csigme : ik_bz    6/  64 done by processor   0
 csigme : ik_bz    8/  64 done by processor   0
 csigme : ik_bz   10/  64 done by processor   0
 csigme : ik_bz   14/  64 done by processor   0
 csigme : ik_bz   15/  64 done by processor   0
 csigme : ik_bz   19/  64 done by processor   0
 csigme : ik_bz   20/  64 done by processor   0
 csigme : ik_bz   21/  64 done by processor   0
 csigme : ik_bz   24/  64 done by processor   0
 csigme : ik_bz   28/  64 done by processor   0
 csigme : ik_bz   29/  64 done by processor   0
 csigme : ik_bz   31/  64 done by processor   0
 csigme : ik_bz   34/  64 done by processor   0
 csigme : ik_bz   35/  64 done by processor   0
 csigme : ik_bz   37/  64 done by processor   0
 csigme : ik_bz   38/  64 done by processor   0
 csigme : ik_bz   41/  64 done by processor   0
 csigme : ik_bz   43/  64 done by processor   0
 csigme : ik_bz   46/  64 done by processor   0
 csigme : ik_bz   48/  64 done by processor   0
 csigme : ik_bz   49/  64 done by processor   0
 csigme : ik_bz   52/  64 done by processor   0
 csigme : ik_bz   55/  64 done by processor   0
 csigme : ik_bz   58/  64 done by processor   0
 csigme : ik_bz   61/  64 done by processor   0
 csigme : ik_bz   62/  64 done by processor   0
 csigme : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_c(omega)|nk> at k =    0.500   0.500   0.250
 bands n = from   1 to  27

 standard GW with PPM
 Will sum 113 (b,k,s) states in Sigma_c.

 ==== Little Group Info ==== 
  External point   5.00000000E-01  5.00000000E-01  2.50000000E-01
  Number of points in the IBZ defined by little group     24/   64
  Number of operations in the little group :   8/ 24

  No time-reversal symmetry with zero umklapp:  2
  No time-reversal symmetry with non-zero umklapp:  2


  time-reversal symmetry with zero umklapp:  0
  time-reversal symmetry with non-zero umklapp:  4


 calculation status (     24 to be completed):
 csigme : ik_bz    1/  64 done by processor   0
 csigme : ik_bz    4/  64 done by processor   0
 csigme : ik_bz    6/  64 done by processor   0
 csigme : ik_bz    7/  64 done by processor   0
 csigme : ik_bz    9/  64 done by processor   0
 csigme : ik_bz   10/  64 done by processor   0
 csigme : ik_bz   11/  64 done by processor   0
 csigme : ik_bz   19/  64 done by processor   0
 csigme : ik_bz   22/  64 done by processor   0
 csigme : ik_bz   25/  64 done by processor   0
 csigme : ik_bz   31/  64 done by processor   0
 csigme : ik_bz   32/  64 done by processor   0
 csigme : ik_bz   33/  64 done by processor   0
 csigme : ik_bz   35/  64 done by processor   0
 csigme : ik_bz   37/  64 done by processor   0
 csigme : ik_bz   38/  64 done by processor   0
 csigme : ik_bz   44/  64 done by processor   0
 csigme : ik_bz   50/  64 done by processor   0
 csigme : ik_bz   51/  64 done by processor   0
 csigme : ik_bz   56/  64 done by processor   0
 csigme : ik_bz   58/  64 done by processor   0
 csigme : ik_bz   59/  64 done by processor   0
 csigme : ik_bz   62/  64 done by processor   0
 csigme : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_c(omega)|nk> at k =    0.500   0.500   0.500
 bands n = from   1 to  27

 standard GW with PPM
 Will sum 47 (b,k,s) states in Sigma_c.

 ==== Little Group Info ==== 
  External point   5.00000000E-01  5.00000000E-01  5.00000000E-01
  Number of points in the IBZ defined by little group     10/   64
  Number of operations in the little group :  48/ 24

  No time-reversal symmetry with zero umklapp:  6
  No time-reversal symmetry with non-zero umklapp: 18


  time-reversal symmetry with zero umklapp:  0
  time-reversal symmetry with non-zero umklapp: 24


 calculation status (     10 to be completed):
 csigme : ik_bz    1/  64 done by processor   0
 csigme : ik_bz    6/  64 done by processor   0
 csigme : ik_bz   10/  64 done by processor   0
 csigme : ik_bz   19/  64 done by processor   0
 csigme : ik_bz   33/  64 done by processor   0
 csigme : ik_bz   37/  64 done by processor   0
 csigme : ik_bz   38/  64 done by processor   0
 csigme : ik_bz   54/  64 done by processor   0
 csigme : ik_bz   62/  64 done by processor   0
 csigme : ik_bz   64/  64 done by processor   0

--- !WARNING
message: |
    Values of Re Sig_c are not linear 
    band index = 1 spin|component = 1
    root mean square=      0.004089432693301
    estimated slope =     -1.612493852347472
    Omega [eV] SigC [eV]
src_file: m_dyson_solver.F90
src_line: 234
...

-11.8692 11.9187
-11.6192 11.3908
-11.3692 10.8312
-11.1192 10.4090
-10.8692 10.0225
-10.6192  9.6190
-10.3692  9.2685
-10.1192  8.9616
 -9.8692  8.6726

 k =    0.000   0.000   0.000
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    1 -10.869 -11.069 -18.292  10.023   0.383  -1.612  -9.997   1.071  -9.798
    1   0.000   0.000   0.000   0.124   0.000   0.000   0.047   0.047   0.047
    2  -8.435 -11.991 -18.266   7.792   0.547  -0.828 -11.161   0.830  -7.605
    2   0.000   0.000   0.000   0.129   0.000   0.000   0.071   0.071   0.071
    3  -8.435 -11.991 -18.266   7.792   0.547  -0.828 -11.161   0.830  -7.605
    3   0.000   0.000   0.000   0.129   0.000   0.000   0.071   0.071   0.071
    4  -5.212 -10.380 -14.962   5.127   0.652  -0.533 -10.024   0.356  -4.856
    4   0.000   0.000   0.000  -0.003   0.000   0.000  -0.002  -0.002  -0.002
    5  -5.212 -10.380 -14.962   5.127   0.652  -0.533 -10.024   0.356  -4.856
    5   0.000   0.000   0.000  -0.003   0.000   0.000  -0.002  -0.002  -0.002
    6  -5.212 -10.380 -14.962   5.127   0.652  -0.533 -10.024   0.356  -4.856
    6   0.000   0.000   0.000  -0.003   0.000   0.000  -0.002  -0.002  -0.002
    7  -1.637  -9.378 -11.975   3.138   0.699  -0.431  -9.000   0.379  -1.258
    7   0.000   0.000   0.000   0.006   0.000   0.000   0.004   0.004   0.004
    8  -1.384 -10.937 -13.662   3.091   0.725  -0.379 -10.671   0.265  -1.118
    8   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
    9  -1.384 -10.937 -13.662   3.091   0.725  -0.379 -10.671   0.265  -1.118
    9   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   10  -1.384 -10.937 -13.662   3.091   0.725  -0.379 -10.671   0.265  -1.118
   10   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   11  -0.456 -11.043 -13.434   2.802   0.733  -0.365 -10.742   0.301  -0.155
   11   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
   12  -0.456 -11.043 -13.434   2.802   0.733  -0.365 -10.742   0.301  -0.155
   12   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
   13  -0.456 -11.043 -13.434   2.802   0.733  -0.365 -10.742   0.301  -0.155
   13   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
   14   1.347 -10.954 -10.332   0.853   0.697  -0.436  -9.927   1.028   2.374
   14   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   15   1.347 -10.954 -10.332   0.853   0.697  -0.436  -9.927   1.028   2.374
   15   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   16   1.347 -10.954 -10.332   0.853   0.697  -0.436  -9.927   1.027   2.374
   16   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   17   2.044  -9.329  -4.966  -3.368   0.723  -0.384  -8.610   0.719   2.763
   17   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   18   2.044  -9.329  -4.966  -3.368   0.723  -0.384  -8.610   0.719   2.763
   18   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   19   2.284  -9.613  -6.366  -2.405   0.769  -0.301  -8.965   0.648   2.932
   19   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   20   3.893  -9.849  -5.389  -3.301   0.751  -0.332  -8.979   0.869   4.763
   20   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   21   3.893  -9.849  -5.389  -3.301   0.751  -0.332  -8.979   0.869   4.763
   21   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   22   3.893  -9.849  -5.389  -3.301   0.751  -0.332  -8.979   0.869   4.763
   22   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   23   5.102  -9.885  -5.126  -4.139   0.717  -0.395  -9.440   0.445   5.546
   23   0.000   0.000   0.000  -0.007   0.000   0.000  -0.005  -0.005  -0.005
   24   5.102  -9.885  -5.126  -4.139   0.717  -0.395  -9.440   0.445   5.546
   24   0.000   0.000   0.000  -0.007   0.000   0.000  -0.005  -0.005  -0.005
   25   5.102  -9.885  -5.126  -4.139   0.717  -0.395  -9.440   0.445   5.546
   25   0.000   0.000   0.000  -0.007   0.000   0.000  -0.005  -0.005  -0.005
   26   5.727 -10.020  -2.783  -6.161   0.680  -0.472  -9.288   0.731   6.459
   26   0.000   0.000   0.000  -0.022   0.000   0.000  -0.015  -0.015  -0.015
   27   5.727 -10.020  -2.783  -6.161   0.680  -0.472  -9.288   0.731   6.459
   27   0.000   0.000   0.000  -0.022   0.000   0.000  -0.015  -0.015  -0.015

 E^0_gap          0.697
 E^GW_gap         0.389
 DeltaE^GW_gap   -0.308


 k =    0.250   0.000   0.000
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    1 -10.658 -11.120 -18.260   9.750   0.401  -1.495 -10.074   1.046  -9.611
    1   0.000   0.000   0.000   0.108   0.000   0.000   0.043   0.043   0.043
    2  -8.952 -11.666 -18.137   8.096   0.521  -0.918 -10.819   0.847  -8.105
    2   0.000   0.000   0.000   0.052   0.000   0.000   0.027   0.027   0.027
    3  -8.405 -12.023 -18.289   7.756   0.555  -0.803 -11.196   0.827  -7.578
    3   0.000   0.000   0.000   0.102   0.000   0.000   0.056   0.056   0.056
    4  -5.127 -10.416 -14.951   5.091   0.654  -0.528 -10.052   0.364  -4.763
    4   0.000   0.000   0.000   0.001   0.000   0.000   0.000   0.000   0.000
    5  -5.127 -10.416 -14.951   5.091   0.654  -0.528 -10.052   0.364  -4.763
    5   0.000   0.000   0.000   0.001   0.000   0.000   0.000   0.000   0.000
    6  -4.670 -10.544 -14.885   4.899   0.660  -0.516 -10.176   0.369  -4.302
    6   0.000   0.000   0.000   0.002   0.000   0.000   0.002   0.002   0.002
    7  -1.863 -10.617 -13.413   3.253   0.710  -0.409 -10.293   0.324  -1.539
    7   0.000   0.000   0.000   0.007   0.000   0.000   0.005   0.005   0.005
    8  -1.792 -10.551 -13.310   3.134   0.721  -0.388 -10.281   0.270  -1.522
    8   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
    9  -1.669 -10.686 -13.510   3.183   0.721  -0.387 -10.427   0.259  -1.410
    9   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   10  -1.669 -10.686 -13.510   3.183   0.721  -0.387 -10.427   0.259  -1.410
   10   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   11  -0.681  -9.738 -11.841   2.656   0.720  -0.388  -9.339   0.398  -0.282
   11   0.000   0.000   0.000   0.003   0.000   0.000   0.002   0.002   0.002
   12  -0.597 -11.035 -13.408   2.765   0.733  -0.363 -10.747   0.288  -0.309
   12   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   13  -0.597 -11.035 -13.408   2.765   0.733  -0.363 -10.747   0.288  -0.309
   13   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   14   1.347 -10.777 -10.330   0.874   0.702  -0.426  -9.850   0.927   2.274
   14   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   15   1.586 -11.115 -10.307   0.668   0.696  -0.436 -10.088   1.028   2.614
   15   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   16   1.586 -11.115 -10.307   0.668   0.696  -0.436 -10.088   1.028   2.614
   16   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   17   2.198  -9.400  -5.009  -3.404   0.727  -0.376  -8.683   0.717   2.915
   17   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   18   2.798  -9.966  -4.020  -4.808   0.701  -0.427  -9.168   0.798   3.596
   18   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   19   3.334  -9.990  -5.242  -3.755   0.738  -0.356  -9.257   0.732   4.066
   19   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   20   3.764  -9.727  -5.374  -3.291   0.756  -0.322  -8.924   0.804   4.567
   20   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   21   4.078  -9.972  -5.300  -3.872   0.721  -0.386  -9.395   0.577   4.654
   21   0.000   0.000   0.000  -0.002   0.000   0.000  -0.002  -0.002  -0.002
   22   4.246 -10.296  -5.298  -3.994   0.708  -0.413  -9.585   0.711   4.956
   22   0.000   0.000   0.000  -0.002   0.000   0.000  -0.001  -0.001  -0.001
   23   4.246 -10.296  -5.298  -3.994   0.708  -0.413  -9.585   0.711   4.956
   23   0.000   0.000   0.000  -0.002   0.000   0.000  -0.001  -0.001  -0.001
   24   4.882  -9.792  -5.279  -3.460   0.756  -0.323  -8.996   0.796   5.678
   24   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   25   4.882  -9.792  -5.279  -3.460   0.756  -0.323  -8.996   0.796   5.678
   25   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   26   5.904 -10.110  -3.863  -5.120   0.704  -0.421  -9.317   0.793   6.697
   26   0.000   0.000   0.000  -0.019   0.000   0.000  -0.014  -0.014  -0.014
   27   6.042  -9.827  -3.217  -5.595   0.701  -0.426  -9.115   0.712   6.754
   27   0.000   0.000   0.000  -0.030   0.000   0.000  -0.021  -0.021  -0.021

 E^0_gap          0.612
 E^GW_gap         0.301
 DeltaE^GW_gap   -0.310


 k =    0.500   0.000   0.000
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    1 -10.270 -11.236 -18.220   9.186   0.433  -1.308 -10.282   0.954  -9.316
    1   0.000   0.000   0.000   0.082   0.000   0.000   0.035   0.035   0.035
    2  -9.584 -11.380 -18.101   8.580   0.487  -1.054 -10.475   0.906  -8.678
    2   0.000   0.000   0.000   0.125   0.000   0.000   0.061   0.061   0.061
    3  -8.373 -12.057 -18.313   7.732   0.557  -0.795 -11.235   0.823  -7.551
    3   0.000   0.000   0.000   0.125   0.000   0.000   0.069   0.069   0.069
    4  -5.032 -10.460 -14.943   5.061   0.656  -0.525 -10.081   0.379  -4.652
    4   0.000   0.000   0.000   0.005   0.000   0.000   0.003   0.003   0.003
    5  -5.032 -10.460 -14.943   5.061   0.656  -0.525 -10.081   0.379  -4.652
    5   0.000   0.000   0.000   0.005   0.000   0.000   0.003   0.003   0.003
    6  -3.960 -10.530 -14.559   4.616   0.667  -0.500 -10.138   0.392  -3.569
    6   0.000   0.000   0.000   0.012   0.000   0.000   0.008   0.008   0.008
    7  -2.687 -10.895 -14.080   3.560   0.708  -0.412 -10.629   0.266  -2.422
    7   0.000   0.000   0.000  -0.002   0.000   0.000  -0.001  -0.001  -0.001
    8  -2.114 -10.319 -13.168   3.229   0.716  -0.396 -10.046   0.272  -1.841
    8   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
    9  -1.971 -10.460 -13.420   3.272   0.718  -0.394 -10.236   0.223  -1.748
    9   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   10  -1.971 -10.460 -13.420   3.272   0.718  -0.394 -10.236   0.223  -1.748
   10   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   11  -0.659 -11.126 -13.457   2.794   0.730  -0.370 -10.788   0.338  -0.321
   11   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
   12  -0.659 -11.126 -13.457   2.794   0.730  -0.370 -10.788   0.338  -0.321
   12   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
   13  -0.100 -10.083 -11.771   2.644   0.707  -0.414  -9.406   0.676   0.576
   13   0.000   0.000   0.000   0.003   0.000   0.000   0.002   0.002   0.002
   14   1.203  -9.826 -10.174   0.851   0.738  -0.355  -9.454   0.371   1.574
   14   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   15   1.871 -11.147 -10.271   0.427   0.704  -0.420 -10.229   0.917   2.788
   15   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   16   1.871 -11.147 -10.271   0.427   0.704  -0.420 -10.229   0.917   2.788
   16   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   17   2.467  -9.845  -5.512  -3.111   0.717  -0.394  -8.968   0.876   3.343
   17   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   18   2.931 -10.096  -4.116  -4.793   0.698  -0.433  -9.268   0.828   3.759
   18   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   19   3.465 -10.547  -3.108  -6.121   0.668  -0.497  -9.667   0.880   4.346
   19   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   20   3.556 -10.273  -5.026  -3.998   0.702  -0.424  -9.395   0.877   4.433
   20   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   21   3.556 -10.273  -5.026  -3.998   0.702  -0.424  -9.395   0.877   4.433
   21   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   22   3.647  -9.858  -4.865  -3.928   0.737  -0.357  -9.074   0.784   4.431
   22   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   23   4.456  -9.564  -5.164  -3.445   0.756  -0.323  -8.842   0.722   5.178
   23   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   24   6.173 -10.792  -5.075  -4.466   0.716  -0.397  -9.897   0.895   7.068
   24   0.000   0.000   0.000  -0.027   0.000   0.000  -0.019  -0.019  -0.019
   25   6.815 -10.522  -5.280  -4.089   0.733  -0.365  -9.677   0.844   7.659
   25   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   26   6.815 -10.522  -5.280  -4.089   0.733  -0.365  -9.677   0.844   7.659
   26   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   27   7.425  -9.890  -4.757  -3.988   0.743  -0.346  -9.039   0.851   8.276
   27   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   28   7.425  -9.890  -4.757  -3.988   0.743  -0.346  -9.039   0.851   8.276
   28   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

 E^0_gap          0.596
 E^GW_gap         0.555
 DeltaE^GW_gap   -0.041


 k =    0.250   0.250   0.000
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    1 -10.451 -11.174 -18.232   9.474   0.420  -1.384 -10.160   1.014  -9.438
    1   0.000   0.000   0.000   0.052   0.000   0.000   0.022   0.022   0.022
    2  -9.031 -11.663 -18.167   8.163   0.518  -0.930 -10.803   0.859  -8.171
    2   0.000   0.000   0.000   0.042   0.000   0.000   0.022   0.022   0.022
    3  -8.707 -11.818 -18.194   7.887   0.536  -0.865 -11.008   0.809  -7.898
    3   0.000   0.000   0.000   0.037   0.000   0.000   0.020   0.020   0.020
    4  -5.272 -10.319 -14.929   5.204   0.650  -0.538  -9.933   0.386  -4.886
    4   0.000   0.000   0.000   0.002   0.000   0.000   0.001   0.001   0.001
    5  -4.968 -10.476 -14.931   5.006   0.658  -0.520 -10.113   0.363  -4.605
    5   0.000   0.000   0.000   0.002   0.000   0.000   0.002   0.002   0.002
    6  -4.193 -10.744 -14.865   4.681   0.671  -0.490 -10.368   0.376  -3.817
    6   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
    7  -2.764 -10.446 -13.733   3.664   0.702  -0.424 -10.182   0.265  -2.499
    7   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
    8  -2.048 -10.634 -13.541   3.315   0.714  -0.401 -10.343   0.291  -1.757
    8   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
    9  -1.660 -10.661 -13.428   3.137   0.721  -0.387 -10.394   0.267  -1.393
    9   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   10  -1.237 -10.788 -13.346   2.931   0.728  -0.374 -10.517   0.271  -0.966
   10   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   11  -1.144 -10.461 -12.950   2.857   0.728  -0.373 -10.193   0.268  -0.875
   11   0.000   0.000   0.000   0.001   0.000   0.000   0.000   0.000   0.000
   12  -0.370 -11.101 -13.394   2.666   0.737  -0.357 -10.826   0.275  -0.095
   12   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   13  -0.267 -10.202 -12.046   2.615   0.714  -0.400  -9.651   0.551   0.284
   13   0.000   0.000   0.000   0.002   0.000   0.000   0.002   0.002   0.002
   14   1.181 -10.306 -10.646   1.205   0.719  -0.390  -9.684   0.622   1.803
   14   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   15   1.550 -10.650  -9.943   0.544   0.707  -0.415  -9.766   0.884   2.433
   15   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   16   1.797 -11.388  -9.964   0.187   0.690  -0.449 -10.277   1.111   2.908
   16   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   17   2.787  -9.959  -4.072  -4.725   0.701  -0.427  -9.145   0.814   3.601
   17   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   18   2.933 -10.410  -4.418  -4.566   0.690  -0.449  -9.426   0.984   3.918
   18   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   19   3.116  -9.584  -5.102  -3.600   0.726  -0.378  -8.944   0.641   3.757
   19   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   20   3.640  -9.990  -5.648  -3.369   0.752  -0.330  -9.259   0.731   4.372
   20   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   21   3.763 -10.672  -5.078  -4.194   0.689  -0.451  -9.707   0.965   4.729
   21   0.000   0.000   0.000  -0.002   0.000   0.000  -0.001  -0.001  -0.001
   22   4.444 -10.086  -4.548  -4.667   0.700  -0.428  -9.476   0.610   5.054
   22   0.000   0.000   0.000  -0.002   0.000   0.000  -0.002  -0.002  -0.002
   23   4.730  -9.938  -5.479  -3.435   0.755  -0.325  -9.165   0.773   5.503
   23   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   24   4.783 -10.097  -5.327  -3.629   0.747  -0.339  -9.245   0.852   5.635
   24   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   25   5.317 -10.058  -4.672  -4.315   0.727  -0.376  -9.280   0.778   6.096
   25   0.000   0.000   0.000  -0.003   0.000   0.000  -0.002  -0.002  -0.002
   26   6.320  -9.850  -4.182  -4.625   0.723  -0.382  -9.096   0.754   7.074
   26   0.000   0.000   0.000  -0.011   0.000   0.000  -0.008  -0.008  -0.008
   27   7.012  -9.930  -4.165  -4.746   0.716  -0.397  -9.201   0.729   7.742
   27   0.000   0.000   0.000  -0.010   0.000   0.000  -0.007  -0.007  -0.007

 E^0_gap          0.990
 E^GW_gap         0.693
 DeltaE^GW_gap   -0.297


 k =    0.500   0.250   0.000
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    1 -10.061 -11.295 -18.197   9.003   0.452  -1.214 -10.346   0.949  -9.113
    1   0.000   0.000   0.000   0.066   0.000   0.000   0.030   0.030   0.030
    2  -9.515 -11.447 -18.142   8.519   0.486  -1.057 -10.560   0.887  -8.628
    2   0.000   0.000   0.000   0.083   0.000   0.000   0.041   0.041   0.041
    3  -8.756 -11.820 -18.217   7.922   0.535  -0.871 -11.005   0.815  -7.940
    3   0.000   0.000   0.000   0.082   0.000   0.000   0.044   0.044   0.044
    4  -5.341 -10.246 -14.891   5.260   0.650  -0.538  -9.846   0.400  -4.941
    4   0.000   0.000   0.000   0.010   0.000   0.000   0.006   0.006   0.006
    5  -4.738 -10.588 -14.922   4.865   0.664  -0.506 -10.235   0.353  -4.385
    5   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
    6  -3.883 -10.586 -14.564   4.535   0.672  -0.487 -10.212   0.374  -3.509
    6   0.000   0.000   0.000   0.007   0.000   0.000   0.005   0.005   0.005
    7  -3.123 -10.833 -14.324   3.943   0.695  -0.439 -10.519   0.315  -2.809
    7   0.000   0.000   0.000  -0.002   0.000   0.000  -0.002  -0.002  -0.002
    8  -2.485 -10.307 -13.418   3.442   0.712  -0.404 -10.071   0.236  -2.249
    8   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
    9  -1.727 -10.537 -13.321   3.118   0.721  -0.387 -10.296   0.241  -1.487
    9   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   10  -1.368 -10.664 -13.220   2.959   0.725  -0.378 -10.371   0.293  -1.075
   10   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
   11  -0.723 -10.915 -13.189   2.676   0.731  -0.367 -10.621   0.294  -0.429
   11   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   12  -0.707 -10.957 -13.324   2.728   0.737  -0.357 -10.691   0.266  -0.441
   12   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   13  -0.021 -10.249 -11.901   2.671   0.704  -0.420  -9.532   0.718   0.697
   13   0.000   0.000   0.000   0.003   0.000   0.000   0.002   0.002   0.002
   14   0.993  -9.957 -10.745   1.269   0.732  -0.366  -9.605   0.353   1.346
   14   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   15   1.807 -10.837  -9.715   0.152   0.706  -0.416  -9.937   0.900   2.707
   15   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   16   1.926 -11.330  -9.980   0.130   0.696  -0.436 -10.299   1.030   2.956
   16   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   17   2.756  -9.492  -5.319  -3.226   0.729  -0.372  -8.802   0.690   3.447
   17   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   18   2.931 -10.515  -4.216  -4.795   0.681  -0.467  -9.490   1.025   3.956
   18   0.000   0.000   0.000  -0.001   0.000   0.000  -0.000  -0.000  -0.000
   19   3.404 -10.487  -3.066  -6.092   0.668  -0.497  -9.599   0.888   4.292
   19   0.000   0.000   0.000  -0.004   0.000   0.000  -0.003  -0.003  -0.003
   20   3.502 -10.876  -5.157  -4.160   0.685  -0.460  -9.808   1.068   4.570
   20   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   21   4.036 -10.241  -4.167  -4.962   0.691  -0.446  -9.472   0.769   4.805
   21   0.000   0.000   0.000  -0.004   0.000   0.000  -0.003  -0.003  -0.003
   22   4.532 -10.378  -5.897  -3.449   0.746  -0.340  -9.607   0.771   5.302
   22   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   23   4.733  -9.992  -5.532  -3.456   0.756  -0.322  -9.233   0.759   5.492
   23   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   24   5.499  -9.788  -4.907  -3.835   0.749  -0.336  -9.005   0.783   6.281
   24   0.000   0.000   0.000  -0.002   0.000   0.000  -0.002  -0.002  -0.002
   25   5.701  -9.731  -4.908  -3.807   0.747  -0.339  -8.972   0.759   6.460
   25   0.000   0.000   0.000  -0.004   0.000   0.000  -0.003  -0.003  -0.003
   26   6.922 -10.070  -4.881  -4.047   0.740  -0.352  -9.226   0.845   7.766
   26   0.000   0.000   0.000  -0.008   0.000   0.000  -0.006  -0.006  -0.006
   27   7.087 -10.285  -5.046  -4.086   0.735  -0.360  -9.437   0.848   7.935
   27   0.000   0.000   0.000  -0.002   0.000   0.000  -0.001  -0.001  -0.001

 E^0_gap          0.830
 E^GW_gap         0.490
 DeltaE^GW_gap   -0.340


 k =    0.500   0.500   0.000
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    1  -9.532 -11.451 -18.137   8.450   0.492  -1.032 -10.583   0.868  -8.665
    1   0.000   0.000   0.000   0.093   0.000   0.000   0.046   0.046   0.046
    2  -9.440 -11.526 -18.194   8.471   0.491  -1.037 -10.641   0.886  -8.554
    2   0.000   0.000   0.000   0.093   0.000   0.000   0.045   0.045   0.045
    3  -9.440 -11.526 -18.194   8.471   0.491  -1.037 -10.641   0.886  -8.554
    3   0.000   0.000   0.000   0.093   0.000   0.000   0.045   0.045   0.045
    4  -5.646 -10.049 -14.842   5.434   0.642  -0.557  -9.638   0.412  -5.235
    4   0.000   0.000   0.000   0.015   0.000   0.000   0.010   0.010   0.010
    5  -4.239 -10.774 -14.791   4.430   0.680  -0.470 -10.493   0.281  -3.958
    5   0.000   0.000   0.000  -0.004   0.000   0.000  -0.002  -0.002  -0.002
    6  -3.692 -10.730 -14.624   4.464   0.678  -0.476 -10.344   0.387  -3.305
    6   0.000   0.000   0.000   0.005   0.000   0.000   0.003   0.003   0.003
    7  -3.692 -10.730 -14.624   4.464   0.678  -0.476 -10.344   0.387  -3.305
    7   0.000   0.000   0.000   0.005   0.000   0.000   0.003   0.003   0.003
    8  -2.527 -10.351 -13.462   3.414   0.715  -0.399 -10.135   0.216  -2.311
    8   0.000   0.000   0.000   0.001   0.000   0.000   0.000   0.000   0.000
    9  -1.810 -10.401 -13.174   3.122   0.719  -0.390 -10.149   0.251  -1.559
    9   0.000   0.000   0.000  -0.001   0.000   0.000  -0.000  -0.000  -0.000
   10  -1.810 -10.401 -13.174   3.122   0.719  -0.390 -10.149   0.251  -1.559
   10   0.000   0.000   0.000  -0.001   0.000   0.000  -0.000  -0.000  -0.000
   11  -0.284 -11.448 -13.741   2.663   0.741  -0.349 -11.174   0.274  -0.010
   11   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   12  -0.058 -10.001 -11.783   2.673   0.711  -0.407  -9.368   0.633   0.575
   12   0.000   0.000   0.000   0.003   0.000   0.000   0.002   0.002   0.002
   13   0.025 -11.316 -13.253   2.399   0.736  -0.359 -10.976   0.340   0.365
   13   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   14   0.560  -9.695 -10.652   1.453   0.727  -0.376  -9.335   0.361   0.921
   14   0.000   0.000   0.000   0.001   0.000   0.000   0.000   0.000   0.000
   15   1.981 -11.351  -9.777  -0.049   0.694  -0.440 -10.292   1.059   3.040
   15   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   16   1.981 -11.351  -9.777  -0.049   0.694  -0.440 -10.292   1.059   3.040
   16   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   17   2.778 -10.334  -5.195  -3.616   0.696  -0.437  -9.274   1.061   3.838
   17   0.000   0.000   0.000  -0.001   0.000   0.000  -0.000  -0.000  -0.000
   18   3.343 -10.364  -3.232  -5.859   0.673  -0.487  -9.508   0.856   4.199
   18   0.000   0.000   0.000  -0.003   0.000   0.000  -0.002  -0.002  -0.002
   19   3.490 -10.582  -2.702  -6.473   0.659  -0.518  -9.655   0.927   4.417
   19   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   20   3.901 -10.360  -5.276  -3.991   0.708  -0.413  -9.587   0.774   4.674
   20   0.000   0.000   0.000  -0.002   0.000   0.000  -0.002  -0.002  -0.002
   21   3.901 -10.360  -5.276  -3.991   0.708  -0.413  -9.587   0.774   4.674
   21   0.000   0.000   0.000  -0.002   0.000   0.000  -0.002  -0.002  -0.002
   22   4.279  -9.624  -5.294  -3.360   0.763  -0.311  -8.884   0.740   5.019
   22   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   23   4.279  -9.624  -5.294  -3.360   0.763  -0.311  -8.884   0.740   5.019
   23   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   24   6.387 -10.599  -5.576  -3.938   0.737  -0.357  -9.800   0.799   7.187
   24   0.000   0.000   0.000  -0.002   0.000   0.000  -0.001  -0.001  -0.001
   25   6.614  -9.660  -4.611  -4.081   0.741  -0.349  -8.943   0.718   7.332
   25   0.000   0.000   0.000  -0.006   0.000   0.000  -0.004  -0.004  -0.004
   26   6.898 -10.181  -4.989  -4.064   0.737  -0.357  -9.349   0.832   7.730
   26   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   27   6.898 -10.181  -4.989  -4.064   0.737  -0.357  -9.349   0.832   7.730
   27   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000

 E^0_gap          0.796
 E^GW_gap         0.798
 DeltaE^GW_gap    0.002


 k =    0.250   0.250   0.250
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    1 -10.256 -11.232 -18.213   9.225   0.436  -1.293 -10.253   0.979  -9.277
    1   0.000   0.000   0.000   0.101   0.000   0.000   0.044   0.044   0.044
    2  -8.984 -11.710 -18.197   8.081   0.525  -0.906 -10.873   0.837  -8.148
    2   0.000   0.000   0.000   0.096   0.000   0.000   0.050   0.050   0.050
    3  -8.984 -11.710 -18.197   8.081   0.525  -0.906 -10.873   0.837  -8.148
    3   0.000   0.000   0.000   0.096   0.000   0.000   0.050   0.050   0.050
    4  -5.637 -10.187 -14.932   5.318   0.646  -0.547  -9.817   0.370  -5.267
    4   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
    5  -4.398 -10.568 -14.788   4.767   0.668  -0.497 -10.203   0.365  -4.033
    5   0.000   0.000   0.000   0.005   0.000   0.000   0.003   0.003   0.003
    6  -4.398 -10.568 -14.788   4.767   0.668  -0.497 -10.203   0.365  -4.033
    6   0.000   0.000   0.000   0.005   0.000   0.000   0.003   0.003   0.003
    7  -3.319 -10.477 -14.072   4.019   0.689  -0.451 -10.184   0.293  -3.026
    7   0.000   0.000   0.000   0.004   0.000   0.000   0.003   0.003   0.003
    8  -1.999 -10.513 -13.384   3.219   0.719  -0.390 -10.263   0.250  -1.749
    8   0.000   0.000   0.000  -0.001   0.000   0.000  -0.000  -0.000  -0.000
    9  -1.999 -10.513 -13.384   3.219   0.719  -0.390 -10.263   0.250  -1.749
    9   0.000   0.000   0.000  -0.001   0.000   0.000  -0.000  -0.000  -0.000
   10  -0.744 -11.103 -13.522   2.809   0.732  -0.366 -10.818   0.285  -0.459
   10   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   11  -0.528  -9.870 -11.853   2.748   0.709  -0.410  -9.328   0.542   0.014
   11   0.000   0.000   0.000   0.005   0.000   0.000   0.003   0.003   0.003
   12  -0.323 -11.214 -13.451   2.670   0.734  -0.362 -10.896   0.318  -0.005
   12   0.000   0.000   0.000   0.001   0.000   0.000   0.000   0.000   0.000
   13  -0.323 -11.214 -13.451   2.670   0.734  -0.362 -10.896   0.318  -0.005
   13   0.000   0.000   0.000   0.001   0.000   0.000   0.000   0.000   0.000
   14   1.068  -9.784 -10.532   1.281   0.736  -0.359  -9.392   0.392   1.460
   14   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   15   1.679 -11.105  -9.830   0.235   0.695  -0.440 -10.057   1.048   2.728
   15   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   16   1.679 -11.105  -9.830   0.235   0.695  -0.440 -10.057   1.048   2.728
   16   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   17   2.765 -10.535  -5.666  -3.362   0.706  -0.416  -9.471   1.064   3.829
   17   0.000   0.000   0.000  -0.001   0.000   0.000  -0.000  -0.000  -0.000
   18   3.098 -10.266  -3.891  -5.096   0.687  -0.456  -9.387   0.878   3.976
   18   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   19   3.098 -10.266  -3.891  -5.096   0.687  -0.456  -9.387   0.878   3.976
   19   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   20   3.388  -9.815  -5.398  -3.339   0.743  -0.346  -9.014   0.801   4.189
   20   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   21   4.092  -9.810  -4.861  -4.048   0.720  -0.388  -9.161   0.649   4.741
   21   0.000   0.000   0.000  -0.002   0.000   0.000  -0.002  -0.002  -0.002
   22   4.092  -9.810  -4.861  -4.048   0.720  -0.388  -9.161   0.649   4.741
   22   0.000   0.000   0.000  -0.002   0.000   0.000  -0.002  -0.002  -0.002
   23   4.979 -10.333  -5.057  -4.138   0.724  -0.380  -9.509   0.824   5.802
   23   0.000   0.000   0.000  -0.006   0.000   0.000  -0.004  -0.004  -0.004
   24   4.979 -10.333  -5.057  -4.138   0.724  -0.380  -9.509   0.824   5.802
   24   0.000   0.000   0.000  -0.006   0.000   0.000  -0.004  -0.004  -0.004
   25   6.475 -10.177  -5.239  -3.932   0.740  -0.350  -9.432   0.745   7.220
   25   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   26   6.886 -10.025  -4.551  -4.421   0.727  -0.376  -9.259   0.766   7.652
   26   0.000   0.000   0.000  -0.017   0.000   0.000  -0.012  -0.012  -0.012
   27   6.886 -10.025  -4.551  -4.421   0.727  -0.376  -9.259   0.766   7.652
   27   0.000   0.000   0.000  -0.017   0.000   0.000  -0.012  -0.012  -0.012

 E^0_gap          1.086
 E^GW_gap         1.102
 DeltaE^GW_gap    0.016


 k =    0.500   0.250   0.250
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    1  -9.879 -11.361 -18.192   8.836   0.463  -1.162 -10.433   0.927  -8.952
    1   0.000   0.000   0.000   0.060   0.000   0.000   0.028   0.028   0.028
    2  -9.453 -11.507 -18.178   8.477   0.487  -1.052 -10.626   0.880  -8.573
    2   0.000   0.000   0.000   0.049   0.000   0.000   0.024   0.024   0.024
    3  -8.936 -11.763 -18.231   8.080   0.526  -0.903 -10.916   0.847  -8.089
    3   0.000   0.000   0.000   0.046   0.000   0.000   0.024   0.024   0.024
    4  -5.642 -10.237 -14.972   5.308   0.647  -0.545  -9.866   0.372  -5.271
    4   0.000   0.000   0.000   0.002   0.000   0.000   0.001   0.001   0.001
    5  -4.605 -10.396 -14.713   4.855   0.664  -0.506 -10.039   0.357  -4.248
    5   0.000   0.000   0.000   0.002   0.000   0.000   0.001   0.001   0.001
    6  -4.314 -10.304 -14.469   4.668   0.668  -0.497  -9.968   0.336  -3.978
    6   0.000   0.000   0.000   0.003   0.000   0.000   0.002   0.002   0.002
    7  -3.713 -10.616 -14.452   4.310   0.683  -0.464 -10.292   0.324  -3.390
    7   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
    8  -2.053 -10.563 -13.451   3.241   0.719  -0.391 -10.308   0.254  -1.799
    8   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
    9  -1.048 -10.753 -13.134   2.812   0.726  -0.377 -10.440   0.313  -0.735
    9   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   10  -0.947 -10.720 -13.093   2.814   0.728  -0.373 -10.399   0.321  -0.626
   10   0.000   0.000   0.000   0.003   0.000   0.000   0.002   0.002   0.002
   11  -0.672  -9.958 -12.137   2.742   0.719  -0.391  -9.553   0.404  -0.268
   11   0.000   0.000   0.000   0.003   0.000   0.000   0.002   0.002   0.002
   12  -0.573 -11.064 -13.340   2.684   0.734  -0.363 -10.765   0.299  -0.274
   12   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   13  -0.371 -11.250 -13.462   2.673   0.733  -0.365 -10.913   0.338  -0.034
   13   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   14   1.205 -10.510 -10.639   1.178   0.712  -0.405  -9.763   0.747   1.952
   14   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   15   1.772 -11.311 -10.203   0.392   0.695  -0.439 -10.269   1.042   2.814
   15   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   16   1.790 -11.093  -9.852   0.177   0.699  -0.431 -10.102   0.991   2.782
   16   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   17   2.973  -9.955  -5.323  -3.509   0.720  -0.388  -9.146   0.809   3.782
   17   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   18   3.119 -10.265  -3.446  -5.473   0.681  -0.469  -9.349   0.916   4.036
   18   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   19   3.250 -10.073  -3.506  -5.353   0.687  -0.455  -9.239   0.834   4.084
   19   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   20   3.773 -10.815  -5.062  -4.354   0.688  -0.453  -9.853   0.963   4.735
   20   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   21   4.240  -9.869  -5.561  -3.386   0.750  -0.333  -9.177   0.692   4.932
   21   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   22   4.345 -10.050  -4.677  -4.467   0.704  -0.419  -9.412   0.639   4.983
   22   0.000   0.000   0.000  -0.009   0.000   0.000  -0.006  -0.006  -0.006
   23   4.815 -10.517  -5.685  -3.697   0.739  -0.353  -9.678   0.839   5.653
   23   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   24   5.413 -10.455  -5.447  -3.853   0.738  -0.355  -9.603   0.852   6.265
   24   0.000   0.000   0.000  -0.002   0.000   0.000  -0.002  -0.002  -0.002
   25   5.703  -9.517  -4.802  -3.675   0.757  -0.321  -8.730   0.788   6.491
   25   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   26   6.106  -9.600  -4.611  -3.945   0.749  -0.336  -8.819   0.782   6.887
   26   0.000   0.000   0.000  -0.002   0.000   0.000  -0.001  -0.001  -0.001
   27   6.768  -9.941  -4.719  -4.205   0.734  -0.362  -9.194   0.747   7.515
   27   0.000   0.000   0.000  -0.006   0.000   0.000  -0.004  -0.004  -0.004

 E^0_gap          1.183
 E^GW_gap         1.000
 DeltaE^GW_gap   -0.183


 k =    0.500   0.500   0.250
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    1  -9.438 -11.529 -18.186   8.444   0.494  -1.024 -10.646   0.883  -8.555
    1   0.000   0.000   0.000   0.104   0.000   0.000   0.051   0.051   0.051
    2  -9.387 -11.576 -18.223   8.409   0.496  -1.017 -10.702   0.874  -8.514
    2   0.000   0.000   0.000   0.093   0.000   0.000   0.046   0.046   0.046
    3  -9.387 -11.576 -18.223   8.409   0.496  -1.017 -10.702   0.874  -8.514
    3   0.000   0.000   0.000   0.093   0.000   0.000   0.046   0.046   0.046
    4  -5.823 -10.192 -14.997   5.369   0.641  -0.559  -9.830   0.362  -5.461
    4   0.000   0.000   0.000   0.004   0.000   0.000   0.003   0.003   0.003
    5  -4.685 -10.259 -14.567   4.773   0.665  -0.504  -9.950   0.309  -4.376
    5   0.000   0.000   0.000   0.003   0.000   0.000   0.002   0.002   0.002
    6  -4.308 -10.358 -14.542   4.690   0.669  -0.495 -10.020   0.339  -3.969
    6   0.000   0.000   0.000   0.002   0.000   0.000   0.001   0.001   0.001
    7  -4.308 -10.358 -14.542   4.690   0.669  -0.495 -10.020   0.339  -3.969
    7   0.000   0.000   0.000   0.002   0.000   0.000   0.001   0.001   0.001
    8  -1.443 -10.437 -13.033   3.016   0.721  -0.388 -10.134   0.303  -1.140
    8   0.000   0.000   0.000   0.004   0.000   0.000   0.003   0.003   0.003
    9  -1.139  -9.803 -12.212   2.865   0.717  -0.395  -9.476   0.327  -0.813
    9   0.000   0.000   0.000   0.003   0.000   0.000   0.002   0.002   0.002
   10  -0.849 -10.906 -13.203   2.764   0.728  -0.374 -10.567   0.340  -0.509
   10   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
   11  -0.849 -10.906 -13.203   2.764   0.728  -0.374 -10.567   0.340  -0.509
   11   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
   12  -0.252 -11.472 -13.739   2.644   0.741  -0.350 -11.192   0.280   0.028
   12   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   13   0.091 -11.389 -13.374   2.432   0.738  -0.356 -11.059   0.330   0.421
   13   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   14   1.265 -10.914 -10.698   1.171   0.697  -0.435  -9.948   0.967   2.232
   14   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   15   1.740 -11.349 -10.252   0.425   0.694  -0.440 -10.292   1.057   2.797
   15   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   16   1.740 -11.349 -10.252   0.425   0.694  -0.440 -10.292   1.057   2.797
   16   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   17   2.984 -10.067  -3.452  -5.291   0.685  -0.459  -9.160   0.907   3.892
   17   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   18   3.302 -10.408  -2.844  -6.192   0.668  -0.496  -9.491   0.917   4.219
   18   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   19   3.805  -9.898  -5.597  -3.317   0.747  -0.338  -9.163   0.735   4.540
   19   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   20   3.805  -9.898  -5.597  -3.317   0.747  -0.338  -9.163   0.735   4.540
   20   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   21   3.932  -9.923  -4.816  -4.218   0.712  -0.405  -9.290   0.632   4.564
   21   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   22   4.644 -10.235  -5.084  -4.122   0.717  -0.394  -9.497   0.738   5.383
   22   0.000   0.000   0.000  -0.006   0.000   0.000  -0.004  -0.004  -0.004
   23   4.644 -10.235  -5.084  -4.122   0.717  -0.394  -9.497   0.738   5.383
   23   0.000   0.000   0.000  -0.006   0.000   0.000  -0.004  -0.004  -0.004
   24   4.801 -10.649  -5.683  -3.788   0.732  -0.366  -9.787   0.862   5.663
   24   0.000   0.000   0.000  -0.003   0.000   0.000  -0.002  -0.002  -0.002
   25   6.110  -9.709  -4.878  -3.765   0.752  -0.329  -8.907   0.802   6.912
   25   0.000   0.000   0.000   0.001   0.000   0.000   0.000   0.000   0.000
   26   6.110  -9.709  -4.878  -3.765   0.752  -0.329  -8.907   0.802   6.912
   26   0.000   0.000   0.000   0.001   0.000   0.000   0.000   0.000   0.000
   27   6.414  -9.767  -4.829  -3.816   0.752  -0.329  -8.923   0.844   7.258
   27   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

 E^0_gap          1.244
 E^GW_gap         1.095
 DeltaE^GW_gap   -0.149


 k =    0.500   0.500   0.500
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    1  -9.332 -11.632 -18.257   8.407   0.508  -0.968 -10.727   0.905  -8.427
    1   0.000   0.000   0.000   0.102   0.000   0.000   0.052   0.052   0.052
    2  -9.332 -11.632 -18.257   8.407   0.508  -0.968 -10.727   0.905  -8.427
    2   0.000   0.000   0.000   0.102   0.000   0.000   0.052   0.052   0.052
    3  -9.332 -11.632 -18.257   8.407   0.508  -0.968 -10.727   0.905  -8.427
    3   0.000   0.000   0.000   0.102   0.000   0.000   0.052   0.052   0.052
    4  -6.126 -10.158 -15.049   5.410   0.629  -0.589  -9.831   0.327  -5.799
    4   0.000   0.000   0.000  -0.015   0.000   0.000  -0.009  -0.009  -0.009
    5  -4.721 -10.166 -14.549   4.875   0.661  -0.513  -9.841   0.325  -4.396
    5   0.000   0.000   0.000  -0.009   0.000   0.000  -0.006  -0.006  -0.006
    6  -4.721 -10.166 -14.549   4.875   0.661  -0.513  -9.841   0.325  -4.396
    6   0.000   0.000   0.000  -0.009   0.000   0.000  -0.006  -0.006  -0.006
    7  -4.721 -10.166 -14.549   4.875   0.661  -0.513  -9.841   0.325  -4.396
    7   0.000   0.000   0.000  -0.009   0.000   0.000  -0.006  -0.006  -0.006
    8  -1.878  -9.088 -11.907   3.315   0.696  -0.438  -8.743   0.345  -1.533
    8   0.000   0.000   0.000   0.008   0.000   0.000   0.005   0.005   0.005
    9  -0.218 -11.499 -13.746   2.631   0.740  -0.351 -11.215   0.284   0.066
    9   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   10  -0.218 -11.499 -13.746   2.631   0.740  -0.351 -11.215   0.284   0.066
   10   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   11   0.162 -11.473 -13.516   2.473   0.740  -0.352 -11.155   0.318   0.480
   11   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   12   0.162 -11.473 -13.516   2.473   0.740  -0.352 -11.155   0.318   0.480
   12   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   13   0.162 -11.473 -13.516   2.473   0.740  -0.352 -11.155   0.318   0.480
   13   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
   14   1.283 -11.136 -10.452   0.911   0.692  -0.445 -10.032   1.104   2.387
   14   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
   15   1.283 -11.136 -10.452   0.911   0.692  -0.445 -10.032   1.104   2.387
   15   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
   16   1.283 -11.136 -10.452   0.911   0.692  -0.445 -10.032   1.104   2.388
   16   0.000   0.000   0.000   0.001   0.000   0.000   0.001   0.001   0.001
   17   3.109 -10.246  -2.922  -5.966   0.673  -0.485  -9.332   0.914   4.023
   17   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   18   3.109 -10.246  -2.922  -5.966   0.673  -0.485  -9.332   0.914   4.023
   18   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001  -0.001  -0.001
   19   3.568  -9.778  -5.716  -3.046   0.756  -0.322  -9.009   0.769   4.337
   19   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   20   3.568  -9.778  -5.716  -3.046   0.756  -0.322  -9.009   0.769   4.337
   20   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   21   3.568  -9.778  -5.716  -3.046   0.756  -0.322  -9.009   0.769   4.337
   21   0.000   0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000
   22   5.122 -10.483  -4.966  -4.596   0.695  -0.438  -9.842   0.640   5.762
   22   0.000   0.000   0.000  -0.009   0.000   0.000  -0.006  -0.006  -0.006
   23   5.122 -10.483  -4.966  -4.596   0.695  -0.438  -9.842   0.640   5.762
   23   0.000   0.000   0.000  -0.009   0.000   0.000  -0.006  -0.006  -0.006
   24   5.122 -10.483  -4.966  -4.596   0.695  -0.438  -9.842   0.640   5.762
   24   0.000   0.000   0.000  -0.009   0.000   0.000  -0.006  -0.006  -0.006
   25   5.938  -9.642  -4.865  -3.680   0.758  -0.319  -8.811   0.831   6.769
   25   0.000   0.000   0.000  -0.001   0.000   0.000  -0.000  -0.000  -0.000
   26   5.938  -9.642  -4.865  -3.680   0.758  -0.319  -8.811   0.831   6.769
   26   0.000   0.000   0.000  -0.001   0.000   0.000  -0.000  -0.000  -0.000
   27   5.938  -9.642  -4.865  -3.680   0.758  -0.319  -8.811   0.831   6.769
   27   0.000   0.000   0.000  -0.001   0.000   0.000  -0.000  -0.000  -0.000

 E^0_gap          1.826
 E^GW_gap         1.636
 DeltaE^GW_gap   -0.190

 metallic scheme, calling newocc with spinmagntarget = -99.99000
 newocc : new Fermi energy is       0.108472 , with nelect=     31.000000
  Number of bissection calls =  51
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.786 1.786 1.786 1.333 1.333 1.036 0.003 0.003 0.003 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.847 1.552 1.552 1.067 0.171 0.033 0.005 0.004 0.001 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.987 1.291 1.291 0.383 0.098 0.012 0.009 0.009 0.009 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.971 1.741 1.080 0.168 0.056 0.099 0.011 0.003 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 1.999 1.995 1.422 0.992 0.279 0.049 0.014 0.005 0.002 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.999 0.839 0.839 0.074 0.020 0.009 0.004 0.004 0.001 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.992 1.390 1.390 0.076 0.045 0.045 0.021 0.003 0.003 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.951 1.248 1.303 0.090 0.037 0.031 0.003 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.868 1.277 1.277 0.061 0.019 0.006 0.006 0.005 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 1.777 1.777 1.777 0.038 0.038 0.012 0.012 0.012 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 Fermi energy         [eV]   2.95


 total number of electrons =  31.00
 input and calculated no. of electrons differ by -0.0000

 New Fermi energy :        1.084719E-01 Ha ,    2.951672E+00 eV
 New Exchange energy :    -7.955442E+00 Ha ,   -2.164786E+02 eV

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
 
 These variables are accessible in NetCDF format (Ga4P3Ti_lda_gw_band-4o_OUT.nc)

            acell      1.0330000000E+01  1.0330000000E+01  1.0330000000E+01 Bohr
              amu      6.97230000E+01  3.09737620E+01  4.78800000E+01
             bdgw           1      27       1      27       1      27       1      27
                            1      27       1      27       1      27       1      27
                            1      27       1      27
          dilatmx      1.05000000E+00
             ecut      1.18388378E+01 Hartree
          ecuteps      7.95421917E+00 Hartree
         ecutsigx      1.18388378E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
          ecutwfn      1.18388378E+01 Hartree
           etotal      0.0000000000E+00
            fcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           gwpara           2
           irdscr           1
           istwfk        1    0    1    0    0    1    0    0    0    1
              ixc           7
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
            kptgw      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        4    0    0      0    4    0      0    0    4
          kptrlen      4.13200000E+01
P           mkmem           1
            natom           8
            nband          64
            ngfft          36      36      36
             nkpt          10
           nkptgw          10
           npweps        1213
          npwsigx        2109
           npwwfn        2109
           nsheps          79
          nshsigx         128
            nstep         300
             nsym          24
           ntypat           3
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
           occopt           3
        optdriver           4
        optforces           1
           prtvol           1
          spgroup         215
           strten      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0 -1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0 -1
                       0  1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0 -1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0 -1
                       0  0  1   1  0  0   0  1  0       0  0 -1   1  0  0   0 -1  0
                       0  0 -1  -1  0  0   0  1  0       0  0  1  -1  0  0   0 -1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0  1   0 -1  0
                      -1  0  0   0  0 -1   0  1  0       1  0  0   0  0 -1   0 -1  0
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0  1  -1  0  0
                       0 -1  0   0  0 -1   1  0  0       0  1  0   0  0 -1  -1  0  0
                       0  0  1   0  1  0   1  0  0       0  0 -1   0  1  0  -1  0  0
                       0  0 -1   0 -1  0   1  0  0       0  0  1   0 -1  0  -1  0  0
         symsigma        1
            tnons      0.0000000  0.0000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.5000000  0.5000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.5000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.0000000
                       0.5000000  0.0000000  0.5000000     0.0000000  0.5000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.5000000  0.5000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.5000000  0.5000000     0.5000000  0.5000000  0.0000000
           tolwfr      1.00000000E-10
           tsmear      1.00000000E-02 Hartree
            typat      1  1  1  1  3  2  2  2
              wtk        0.01563    0.09375    0.04688    0.18750    0.18750    0.04688
                         0.12500    0.18750    0.09375    0.01563
           xangst     -6.5670357011E-02 -6.5670357011E-02 -6.5670357011E-02
                       2.7988706394E+00  2.7988706394E+00 -6.5670357011E-02
                       2.7988706394E+00 -6.5670357011E-02  2.7988706394E+00
                      -6.5670357011E-02  2.7988706394E+00  2.7988706394E+00
                       1.3666001412E+00  1.3666001412E+00  1.3666001412E+00
                       1.3666001412E+00  4.0998004236E+00  4.0998004236E+00
                       4.0998004236E+00  1.3666001412E+00  4.0998004236E+00
                       4.0998004236E+00  4.0998004236E+00  1.3666001412E+00
            xcart     -1.2409898980E-01 -1.2409898980E-01 -1.2409898980E-01
                       5.2890989898E+00  5.2890989898E+00 -1.2409898980E-01
                       5.2890989898E+00 -1.2409898980E-01  5.2890989898E+00
                      -1.2409898980E-01  5.2890989898E+00  5.2890989898E+00
                       2.5825000000E+00  2.5825000000E+00  2.5825000000E+00
                       2.5825000000E+00  7.7475000000E+00  7.7475000000E+00
                       7.7475000000E+00  2.5825000000E+00  7.7475000000E+00
                       7.7475000000E+00  7.7475000000E+00  2.5825000000E+00
             xred     -1.2013454966E-02 -1.2013454966E-02 -1.2013454966E-02
                       5.1201345497E-01  5.1201345497E-01 -1.2013454966E-02
                       5.1201345497E-01 -1.2013454966E-02  5.1201345497E-01
                      -1.2013454966E-02  5.1201345497E-01  5.1201345497E-01
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
                       2.5000000000E-01  7.5000000000E-01  7.5000000000E-01
                       7.5000000000E-01  2.5000000000E-01  7.5000000000E-01
                       7.5000000000E-01  7.5000000000E-01  2.5000000000E-01
            znucl       31.00000   15.00000   22.00000

================================================================================
  

================================================================================

 Suggested references for the acknowledgment of ABINIT usage.

 The users of ABINIT have little formal obligations with respect to the ABINIT group
 (those specified in the GNU General Public License, http://www.gnu.org/copyleft/gpl.txt).
 However, it is common practice in the scientific literature,
 to acknowledge the efforts of people that have made the research possible.
 In this spirit, please find below suggested citations of work written by ABINIT developers,
 corresponding to implementations inside of ABINIT that you have used in the present run.
 Note also that it will be of great value to readers of publications presenting these results,
 to read papers enabling them to understand the theoretical formalism and details
 of the ABINIT implementation.
 For information on why they are suggested, see also http://www.abinit.org/about/?text=acknowledgments.

 [1] Ab initio pseudopotentials for electronic structure calculations of poly-atomic systems, 
 using density-functional theory.
 M. Fuchs, M. Scheffler, Comput. Phys. Commun. 119, 67 (1999).
 Comment : Some pseudopotential generated using the FHI code were used.

 [2] ABINIT : First-principles approach of materials and nanosystem properties.
 X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
 D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
 S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
 M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
 M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
 Computer Phys. Comm. 180, 2582-2615 (2009).
 Comment : the third generic paper describing the ABINIT project.
 Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
 is available at http://www.abinit.org/about/ABINIT_CPC_v10.pdf .
 The licence allows the authors to put it on the Web.

 [3] A brief introduction to the ABINIT software package.
 X. Gonze, G.-M. Rignanese, M. Verstraete, J.-M. Beuken, Y. Pouillon, R. Caracas, F. Jollet,
 M. Torrent, G. Zerah, M. Mikami, Ph. Ghosez, M. Veithen, J.-Y. Raty, V. Olevano, F. Bruneval,
 L. Reining, R. Godby, G. Onida, D.R. Hamann, and D.C. Allan.
 Z. Kristallogr. 220, 558-562 (2005).
 Comment : the second generic paper describing the ABINIT project. Note that this paper
 should be cited especially if you are using the GW part of ABINIT, as several authors
 of this part are not in the list of authors of the first or third paper.
 The .pdf of the latter paper is available at http://www.abinit.org/about/zfk_0505-06_558-562.pdf.
 Note that it should not redistributed (Copyright by Oldenburg Wissenshaftverlag,
 the licence allows the authors to put it on the Web).


 And optionally :

 [4] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.

 [5] Fast radix 2, 3, 4 and 5 kernels for Fast Fourier Transformations
 on computers with overlapping multiply-add instructions.
 S. Goedecker, SIAM J. on Scientific Computing 18, 1605 (1997).
 Proc.   0 individual time (sec): cpu=       9717.2  wall=       9737.6

 Calculation completed.
.Delivered    0 WARNINGs and   0 COMMENTs to log file.
--- !FinalSummary
start_date: Mon May 26 10: 9:39 2014
end_date: Mon May 26 12:51:57 2014
overall_cpu_time:      155473.3
overall_wall_time:      155801.5
...
