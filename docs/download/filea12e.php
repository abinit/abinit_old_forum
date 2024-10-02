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

--- !WARNING
message: |
    Finds that output file Ga4P3Ti_lda_gw_band-5.out
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:Ga4P3Ti_lda_gw_band-5.outA


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

.Starting date : Wed 28 May 2014.
- ( at 08h55 )
  

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
- output file    -> Ga4P3Ti_lda_gw_band-5.outA
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
npfft, npband, npspinor and npkpt:     1    1    1    8

--- !WARNING
message: |
    nkpt*nsppol (10) is not a multiple of nproc_kpt (8)
    The k-point parallelisation is not efficient.
src_file: distrb2.F90
src_line: 112
...

mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=2 and mkmem  = 10, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.

--- !WARNING
message: |
    Your number of k-points (10) will not distribute correctly
    with the current number of processors (8).
    You will leave some empty.
    ACTION: you can reduce number of processors to 5without losing speed.
src_file: mpi_setup.F90
src_line: 601
...

mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=2 and mkqmem = 10, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.

--- !WARNING
message: |
    Your number of k-points (10) will not distribute correctly
    with the current number of processors (8).
    You will leave some empty.
    ACTION: you can reduce number of processors to 5without losing speed.
src_file: mpi_setup.F90
src_line: 601
...

mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=2 and mk1mem = 10, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

--- !WARNING
message: |
    Your number of k-points (10) will not distribute correctly
    with the current number of processors (8).
    You will leave some empty.
    ACTION: you can reduce number of processors to 5without losing speed.
src_file: mpi_setup.F90
src_line: 601
...

 For input ecut=  1.764000E+01 best grid ngfft=      40      40      40
       max ecut=  1.849818E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    40   40   40
  Augmented FFT divisions ...................    41   41   40
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    3948

 Symmetries : space group P-4 3 m (#215); Bravais cP (primitive cubic)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        64  mffmem =         1
P  mgfft =        40   mkmem =         2 mpssoang=         4     mpw =      3948
  mqgrid =      3001   natom =         8    nfft =     64000    nkpt =        10
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =         0  ntypat =         3  occopt =         3
================================================================================
P This job should need less than                      28.852 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     38.557 Mbytes ; DEN or POT disk file :      0.490 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      7.8145 MBytes.
 memana : allocated an array of      7.815 Mbytes, for testing purposes.
 memana : allocated      28.852 Mbytes, for testing purposes.
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
             ecut      1.60000000E+01 Hartree
          ecuteps      8.00000000E+00 Hartree
         ecutsigx      1.20000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
          ecutwfn      1.20000000E+01 Hartree
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
P           mkmem           2
            natom           8
            nband          64
            ngfft          40      40      40
             nkpt          10
           nkptgw          10
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
        optdriver           8
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
-   nproc =    8


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)

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


--- !ERROR
message: |
    Unknown value for the variable optdriver: 8
    This is not allowed. 
    Action : modify optdriver in the input file.
src_file: driver.F90
src_line: 684
...


 leave_new : decision taken to exit ...
calling XMPI_ABORT...
 MPI_ERROR_STRING: MPI_ERR_UNKNOWN: unknown error
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 7 in communicator MPI_COMM_WORLD 
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------
--------------------------------------------------------------------------
mpirun has exited due to process rank 1 with PID 6032 on
node compute-0-0.local exiting improperly. There are two reasons this could occur:

1. this process did not call "init" before exiting, but others in
the job did. This can cause a job to hang indefinitely while it waits
for all processes to call "init". By rule, if one process calls "init",
then ALL processes must call "init" prior to termination.

2. this process called "init", but exited without calling "finalize".
By rule, all processes that call "init" MUST call "finalize" prior to
exiting or it will be considered an "abnormal termination"

This may have caused other processes in the application to be
terminated by signals sent by mpirun (as reported here).
--------------------------------------------------------------------------
[compute-0-0.local:06030] 7 more processes have sent help message help-mpi-api.txt / mpi-abort
[compute-0-0.local:06030] Set MCA parameter "orte_base_help_aggregate" to 0 to see all help / error messages
