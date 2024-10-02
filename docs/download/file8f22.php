  ABINIT 
  
  Give name for formatted input file: 
Ga4P3Ti_lda_gw_band-5.in
  Give name for formatted output file:
Ga4P3Ti_lda_gw_band-5.out
  Give root name for generic input files:
Ga4P3Ti_lda_gw_band-5i
  Give root name for generic output files:
Ga4P3Ti_lda_gw_band-5o
  Give root name for generic temporary files:
Ga4P3Ti_lda_gw_band-5

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
- ( at 12h51 )
  

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

- input  file    -> Ga4P3Ti_lda_gw_band-5.in
- output file    -> Ga4P3Ti_lda_gw_band-5.out
- root for input  files -> Ga4P3Ti_lda_gw_band-5i
- root for output files -> Ga4P3Ti_lda_gw_band-5o

-instrng :   128 lines of input have been read from file Ga4P3Ti_lda_gw_band-5.in


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
 
 These variables are accessible in NetCDF format (Ga4P3Ti_lda_gw_band-5o_OUT.nc)

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
        gwcalctyp          20
           gwpara           2
        gw_sctype           4
      gw_toldfeig      3.67493254E-03 Hartree
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
           ppmfrq      6.13713734E-01 Hartree
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
    SC-GW with symmetries is still under development. Use at your own risk!
src_file: setup_sigma.F90
src_line: 246
...


--- !WARNING
message: |
    Using WFK fileGa4P3Ti_lda_gw_band-5i_WFK
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
 init_Er_from_file : testing file Ga4P3Ti_lda_gw_band-5i_SCR

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

 wfd_read_wfk : about to read Ga4P3Ti_lda_gw_band-5i_WFK
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
[compute-0-1:21722] *** Process received signal ***
[compute-0-1:21724] *** Process received signal ***
[compute-0-1:21724] Signal: Segmentation fault (11)
[compute-0-1:21724] Signal code: Address not mapped (1)
[compute-0-1:21724] Failing at address: 0x100000018
[compute-0-1:21722] Signal: Segmentation fault (11)
[compute-0-1:21722] Signal code: Address not mapped (1)
[compute-0-1:21722] Failing at address: 0x100000018
[compute-0-1:21725] *** Process received signal ***
[compute-0-1:21725] Signal: Segmentation fault (11)
[compute-0-1:21725] Signal code: Address not mapped (1)
[compute-0-1:21725] Failing at address: 0x100000018
[compute-0-2:04257] *** Process received signal ***
[compute-0-2:04257] Signal: Segmentation fault (11)
[compute-0-2:04257] Signal code: Address not mapped (1)
[compute-0-2:04257] Failing at address: 0x100000018
[compute-0-1:21724] [ 0] /lib64/libpthread.so.0() [0x35a640f710]
[compute-0-1:21724] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2abcaad487db]
[compute-0-1:21724] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2abcaad48bc3]
[compute-0-1:21724] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-1:21724] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-1:21724] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-1:21724] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-1:21724] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-1:21724] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-1:21724] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-1:21724] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x35a5c1ed1d]
[compute-0-1:21724] [11] abinit() [0x46bd99]
[compute-0-1:21724] *** End of error message ***
[compute-0-1:21725] [ 0] /lib64/libpthread.so.0() [0x35a640f710]
[compute-0-1:21722] [ 0] /lib64/libpthread.so.0() [0x35a640f710]
[compute-0-1:21722] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2ba4d15777db]
[compute-0-1:21722] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2ba4d1577bc3]
[compute-0-1:21722] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-1:21722] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-1:21722] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-1:21722] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-1:21722] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-1:21722] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-1:21722] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-1:21722] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x35a5c1ed1d]
[compute-0-1:21722] [11] abinit() [0x46bd99]
[compute-0-1:21722] *** End of error message ***
[compute-0-1:21725] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2b976f3a27db]
[compute-0-1:21725] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2b976f3a2bc3]
[compute-0-1:21725] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-1:21725] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-1:21725] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-1:21725] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-1:21725] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-1:21725] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-1:21725] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-1:21725] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x35a5c1ed1d]
[compute-0-1:21725] [11] abinit() [0x46bd99]
[compute-0-1:21725] *** End of error message ***
[compute-0-2:04257] [ 0] /lib64/libpthread.so.0() [0x3d7d00f710]
[compute-0-2:04257] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2b81574427db]
[compute-0-2:04257] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2b8157442bc3]
[compute-0-2:04257] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-2:04257] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-2:04257] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-2:04257] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-2:04257] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-2:04257] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-2:04257] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-2:04257] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3d7c81ed1d]
[compute-0-2:04257] [11] abinit() [0x46bd99]
[compute-0-2:04257] *** End of error message ***
[compute-0-0:23446] *** Process received signal ***
 Finding the little group of k-point:   0.0000  0.0000  0.0000
[compute-0-0:23446] Signal: Segmentation fault (11)
[compute-0-0:23446] Signal code: Address not mapped (1)
[compute-0-0:23446] Failing at address: 0x100000018
[compute-0-0:23445] *** Process received signal ***
[compute-0-0:23447] *** Process received signal ***
[compute-0-0:23447] Signal: Segmentation fault (11)
[compute-0-0:23447] Signal code: Address not mapped (1)
[compute-0-0:23447] Failing at address: 0x100000018

 symlatt : the Bravais lattice is cP (primitive cubic)
 symptgroup returned point group:  -43m
 iholohedry  7
 center      0
 gprimd in the axes of the conventional bravais lattice (*2 if center/=0)  1  0  0  0  1  0  0  0  1
 sym_axis   0  0  0
[compute-0-0:23445] Signal: Segmentation fault (11)
[compute-0-0:23445] Signal code: Address not mapped (1)
[compute-0-0:23445] Failing at address: 0x100000018
[compute-0-0:23445] [ 0] /lib64/libpthread.so.0() [0x3ba1a0f710]
[compute-0-0:23445] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2ae4c2de77db]
[compute-0-0:23445] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2ae4c2de7bc3]
[compute-0-0:23445] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-0:23445] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-0:23445] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-0:23445] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-0:23445] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-0:23445] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-0:23445] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-0:23445] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3ba121ed1d]
[compute-0-0:23445] [11] abinit() [0x46bd99]
[compute-0-0:23445] *** End of error message ***
[compute-0-0:23446] [ 0] /lib64/libpthread.so.0() [0x3ba1a0f710]
[compute-0-0:23446] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2b80449747db]
[compute-0-0:23446] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2b8044974bc3]
[compute-0-0:23446] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-0:23446] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-0:23446] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-0:23446] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-0:23446] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-0:23446] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-0:23446] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-0:23446] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3ba121ed1d]
[compute-0-0:23446] [11] abinit() [0x46bd99]
[compute-0-0:23446] *** End of error message ***
[compute-0-0:23447] [ 0] /lib64/libpthread.so.0() [0x3ba1a0f710]
[compute-0-0:23447] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2b486a60e7db]
[compute-0-0:23447] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2b486a60ebc3]
[compute-0-0:23447] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-0:23447] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-0:23447] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-0:23447] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-0:23447] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-0:23447] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-0:23447] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-0:23447] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3ba121ed1d]
[compute-0-0:23447] [11] abinit() [0x46bd99]
[compute-0-0:23447] *** End of error message ***
[compute-0-1:21723] *** Process received signal ***
[compute-0-1:21723] Signal: Segmentation fault (11)
[compute-0-1:21723] Signal code: Address not mapped (1)
[compute-0-1:21723] Failing at address: 0x100000018
[compute-0-1:21723] [ 0] /lib64/libpthread.so.0() [0x35a640f710]
[compute-0-1:21723] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2b0faa03e7db]
[compute-0-1:21723] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2b0faa03ebc3]
[compute-0-1:21723] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-1:21723] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-1:21723] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-1:21723] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-1:21723] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-1:21723] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-1:21723] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-1:21723] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x35a5c1ed1d]
[compute-0-1:21723] [11] abinit() [0x46bd99]
[compute-0-1:21723] *** End of error message ***
[compute-0-2:04258] *** Process received signal ***
[compute-0-2:04258] Signal: Segmentation fault (11)
[compute-0-2:04258] Signal code: Address not mapped (1)
[compute-0-2:04258] Failing at address: 0x100000018
[compute-0-2:04258] [ 0] /lib64/libpthread.so.0() [0x3d7d00f710]
[compute-0-2:04258] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2b4dc42957db]
[compute-0-2:04258] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2b4dc4295bc3]
[compute-0-2:04258] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-2:04258] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-2:04258] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-2:04258] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-2:04258] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-2:04258] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-2:04258] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-2:04258] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3d7c81ed1d]
[compute-0-2:04258] [11] abinit() [0x46bd99]
[compute-0-2:04258] *** End of error message ***
[compute-0-2:04256] *** Process received signal ***
[compute-0-2:04256] Signal: Segmentation fault (11)
[compute-0-2:04256] Signal code: Address not mapped (1)
[compute-0-2:04256] Failing at address: 0x100000018
[compute-0-2:04256] [ 0] /lib64/libpthread.so.0() [0x3d7d00f710]
[compute-0-2:04256] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2abc5e2087db]
[compute-0-2:04256] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2abc5e208bc3]
[compute-0-2:04256] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-2:04256] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-2:04256] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-2:04256] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-2:04256] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-2:04256] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-2:04256] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-2:04256] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3d7c81ed1d]
[compute-0-2:04256] [11] abinit() [0x46bd99]
[compute-0-2:04256] *** End of error message ***
[compute-0-2:04255] *** Process received signal ***
[compute-0-2:04255] Signal: Segmentation fault (11)
[compute-0-2:04255] Signal code: Address not mapped (1)
[compute-0-2:04255] Failing at address: 0x100000018
[compute-0-2:04255] [ 0] /lib64/libpthread.so.0() [0x3d7d00f710]
[compute-0-2:04255] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2b0e571917db]
[compute-0-2:04255] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2b0e57191bc3]
[compute-0-2:04255] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-2:04255] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-2:04255] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-2:04255] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-2:04255] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-2:04255] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-2:04255] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-2:04255] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3d7c81ed1d]
[compute-0-2:04255] [11] abinit() [0x46bd99]
[compute-0-2:04255] *** End of error message ***
[compute-0-0:23444] *** Process received signal ***
[compute-0-0:23444] Signal: Segmentation fault (11)
[compute-0-0:23444] Signal code: Address not mapped (1)
[compute-0-0:23444] Failing at address: 0x100000018
[compute-0-0:23444] [ 0] /lib64/libpthread.so.0() [0x3ba1a0f710]
[compute-0-0:23444] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2b4f393257db]
[compute-0-0:23444] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2b4f39325bc3]
[compute-0-0:23444] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-0:23444] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-0:23444] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-0:23444] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-0:23444] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-0:23444] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-0:23444] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-0:23444] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3ba121ed1d]
[compute-0-0:23444] [11] abinit() [0x46bd99]
[compute-0-0:23444] *** End of error message ***
 maximum error on \sum_R \chi^*_a(R)\chi_b(R) = N_R \delta_{ab}:   1.48E-09
 maximum error on the unitary of representions matrices:   9.99E-16

 ===== Character of bands at k-point:   0.0000  0.0000  0.0000 ===== 
   Total number of bands analyzed ..................   27
   Number of degenerate sets detected ..............  12
   Number of operations in the little group of k ... 24
   Number of classes (irreps) in the group of k ....  5 ( 1 3 8 6 6 )
  Found 3 states with character A1: 1 7 19
  Found 6 states with character E: 2 3 17 18 26 27
  Found 3 states with character T1: 8 9 10
  Found 15 states with character T2: 4 5 6 11 12 13 14 15 16 20 21 22

 Calculated character table
 1- 1 | 1.00 0.00| 1.00 0.00| 1.00 0.00| 1.00 0.00| 1.00 0.00|
 2- 3 | 2.00-0.00| 2.00-0.00|-1.00-0.00|-1.00-0.00|-1.00-0.00|
 4- 6 | 3.00 0.00|-1.00 0.00|-0.00-0.00|-0.00-0.00|-0.00-0.00|
 7- 7 | 1.00 0.00| 1.00 0.00| 1.00-0.00| 1.00 0.00| 1.00 0.00|
 8-10 | 3.00 0.00|-1.00 0.00| 0.00-0.00|-0.00 0.00|-0.00 0.00|
11-13 | 3.00 0.00|-1.00 0.00|-0.00-0.00|-0.00 0.00|-0.00 0.00|
14-16 | 3.00-0.00|-1.00-0.00|-0.00 0.00|-0.00 0.00|-0.00 0.00|
17-18 | 2.00 0.00| 2.00-0.00|-1.00 0.00|-1.00 0.00|-1.00 0.00|
19-19 | 1.00 0.00| 1.00 0.00| 1.00 0.00| 1.00 0.00| 1.00 0.00|
20-22 | 3.00 0.00|-1.00 0.00|-0.00 0.00|-0.00-0.00|-0.00-0.00|
23-25 | 3.00 0.00|-1.00 0.00|-0.00 0.00|-0.00 0.00|-0.00 0.00|
26-27 | 2.00-0.00| 2.00 0.00|-1.00 0.00|-1.00 0.00|-1.00 0.00|
 Finding the little group of k-point:   0.2500  0.0000  0.0000

 symlatt : the Bravais lattice is cP (primitive cubic)
[compute-0-0:23441] *** Process received signal ***
[compute-0-0:23441] Signal: Segmentation fault (11)
[compute-0-0:23441] Signal code: Address not mapped (1)
[compute-0-0:23441] Failing at address: 0x100000018
[compute-0-0:23441] [ 0] /lib64/libpthread.so.0() [0x3ba1a0f710]
[compute-0-0:23441] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2ad9cc7c27db]
[compute-0-0:23441] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2ad9cc7c2bc3]
[compute-0-0:23441] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-0:23441] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-0:23441] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-0:23441] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-0:23441] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-0:23441] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-0:23441] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-0:23441] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3ba121ed1d]
[compute-0-0:23441] [11] abinit() [0x46bd99]
[compute-0-0:23441] *** End of error message ***
[compute-0-0:23448] *** Process received signal ***
[compute-0-0:23448] Signal: Segmentation fault (11)
[compute-0-0:23448] Signal code: Address not mapped (1)
[compute-0-0:23448] Failing at address: 0x100000018
[compute-0-0:23448] [ 0] /lib64/libpthread.so.0() [0x3ba1a0f710]
[compute-0-0:23448] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2b1dcd9887db]
[compute-0-0:23448] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2b1dcd988bc3]
[compute-0-0:23448] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-0:23448] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-0:23448] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-0:23448] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-0:23448] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-0:23448] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-0:23448] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-0:23448] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3ba121ed1d]
[compute-0-0:23448] [11] abinit() [0x46bd99]
[compute-0-0:23448] *** End of error message ***
[compute-0-0:23442] *** Process received signal ***
[compute-0-0:23442] Signal: Segmentation fault (11)
[compute-0-0:23442] Signal code: Address not mapped (1)
[compute-0-0:23442] Failing at address: 0x100000018
[compute-0-0:23442] [ 0] /lib64/libpthread.so.0() [0x3ba1a0f710]
[compute-0-0:23442] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2ad4adc5d7db]
[compute-0-0:23442] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2ad4adc5dbc3]
[compute-0-0:23442] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-0:23442] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-0:23442] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-0:23442] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-0:23442] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-0:23442] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-0:23442] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-0:23442] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3ba121ed1d]
[compute-0-0:23442] [11] abinit() [0x46bd99]
[compute-0-0:23442] *** End of error message ***
[compute-0-0:23443] *** Process received signal ***
[compute-0-0:23443] Signal: Segmentation fault (11)
[compute-0-0:23443] Signal code: Address not mapped (1)
[compute-0-0:23443] Failing at address: 0x100000018
[compute-0-0:23443] [ 0] /lib64/libpthread.so.0() [0x3ba1a0f710]
[compute-0-0:23443] [ 1] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_int_free+0x2db) [0x2b9e3e64c7db]
[compute-0-0:23443] [ 2] /opt/openmpi/lib/libmpi.so.1(opal_memory_ptmalloc2_free+0xd3) [0x2b9e3e64cbc3]
[compute-0-0:23443] [ 3] abinit(symbrav_+0x3c2) [0x12f2802]
[compute-0-0:23443] [ 4] abinit(__m_bands_sym_MOD_init_bands_symmetries+0x1532) [0xb24072]
[compute-0-0:23443] [ 5] abinit(classify_bands_+0x5f4) [0x84eed4]
[compute-0-0:23443] [ 6] abinit(sigma_+0x6a60) [0x4b8200]
[compute-0-0:23443] [ 7] abinit(driver_+0x62cf) [0x47528f]
[compute-0-0:23443] [ 8] abinit(MAIN__+0xb50) [0x46c9b0]
[compute-0-0:23443] [ 9] abinit(main+0x2a) [0x1955caa]
[compute-0-0:23443] [10] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3ba121ed1d]
[compute-0-0:23443] [11] abinit() [0x46bd99]
[compute-0-0:23443] *** End of error message ***
--------------------------------------------------------------------------
WARNING: A process refused to die!

Host: compute-0-0.local
PID:  23441

This process may still be running and/or consuming resources.

--------------------------------------------------------------------------
[compute-0-0.local:23434] 4 more processes have sent help message help-odls-default.txt / odls-default:could-not-kill
[compute-0-0.local:23434] Set MCA parameter "orte_base_help_aggregate" to 0 to see all help / error messages
--------------------------------------------------------------------------
mpirun noticed that process rank 14 with PID 4257 on node compute-0-2.local exited on signal 11 (Segmentation fault).
--------------------------------------------------------------------------
