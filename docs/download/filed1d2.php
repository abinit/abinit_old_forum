  ABINIT 
  
  Give name for formatted input file: 
1.in
  Give name for formatted output file:
1.out
  Give root name for generic input files:
1xi
  Give root name for generic output files:
1xo
  Give root name for generic temporary files:
1x
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file 1.out
-P-0000  already exists.
-P-0000  new name assigned:1.outA
-P-0000
-P-0000  leave_test : synchronization done...
-P-0003  leave_test : synchronization done...
-P-0002  leave_test : synchronization done...
-P-0001  leave_test : synchronization done...
-P-0004  leave_test : synchronization done...

.Version 6.4.2  of ABINIT 
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

.Starting date : Tue  7 Dec 2010.
- ( at 13h27 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.4.2
  Build target  : x86_64_linux_gnu4.4
  Build date    : 20101207

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           : -m64 -g   -O3
  C++ compiler     : gnu4.4
  CXXFLAGS         : -m64 -g   -O3
  Fortran compiler : gnu4.4
  FCFLAGS          : -m64 -g -ffree-line-length-none -O3
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : yes
  Architecture       : intel_xeon

 === MPI === 
  Parallel build : yes
  Parallel I/O   : no

 === Linear algebra === 
  Library flavor : @linalg_flavor@
  Use ScaLAPACK  : no

 === Plug-ins === 
  BigDFT    : yes
  ETSF I/O  : yes
  LibXC     : yes
  FoX       : no
  NetCDF    : yes
  Wannier90 : no

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes
  Macroave build      : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   --- None ---


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

               HAVE_BIGDFT              HAVE_ETSF_IO              HAVE_FC_EXIT

             HAVE_FC_FLUSH             HAVE_FC_GAMMA            HAVE_FC_GETENV

          HAVE_FC_INT_QUAD     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES

              HAVE_FC_NULL          HAVE_FORTRAN2003               HAVE_GW_DPC

                HAVE_LIBXC                  HAVE_MPI                 HAVE_MPI2

               HAVE_NETCDF             HAVE_OS_LINUX              HAVE_STDIO_H

              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> 1.in
- output file    -> 1.outA
- root for input  files -> 1xi
- root for output files -> 1xo

 instrng :    51 lines of input have been read

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 14-Si.LDA.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is 01-H.LDA.fhi
-P-0000   read the values zionpsp=  4.0 , pspcod=   6 , lmax=   3
-P-0000   read the values zionpsp=  1.0 , pspcod=   6 , lmax=   3
-P-0000
-P-0000  inpspheads : deduce mpsang  =   4, n1xccc  =   0.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is cP (primitive cubic)

 symlatt : the Bravais lattice is cP (primitive cubic)
 symspgr : the symmetry operation no.   1 is the identity
 symaxes : the symmetry operation no.   2 is a 2-axis
 symaxes : the symmetry operation no.   3 is a 2-axis
 symaxes : the symmetry operation no.   4 is a 2-axis
 symplanes : the symmetry operation no.   5 is a mirror plane
 symspgr : the symmetry operation no.   6 is a -4 axis
 symplanes : the symmetry operation no.   7 is a mirror plane
 symspgr : the symmetry operation no.   8 is a -4 axis
 symaxes : the symmetry operation no.   9 is a 3-axis
 symaxes : the symmetry operation no.  10 is a 3-axis
 symaxes : the symmetry operation no.  11 is a 3-axis
 symaxes : the symmetry operation no.  12 is a 3-axis
 symplanes : the symmetry operation no.  13 is a mirror plane
 symspgr : the symmetry operation no.  14 is a -4 axis
 symspgr : the symmetry operation no.  15 is a -4 axis
 symplanes : the symmetry operation no.  16 is a mirror plane
 symaxes : the symmetry operation no.  17 is a 3-axis
 symaxes : the symmetry operation no.  18 is a 3-axis
 symaxes : the symmetry operation no.  19 is a 3-axis
 symaxes : the symmetry operation no.  20 is a 3-axis
 symplanes : the symmetry operation no.  21 is a mirror plane
 symplanes : the symmetry operation no.  22 is a mirror plane
 symspgr : the symmetry operation no.  23 is a -4 axis
 symspgr : the symmetry operation no.  24 is a -4 axis
 symspgr : spgroup= 215  P-4 3 m   (=Td^1)
 inkpts: Sum of    1 k point weights is    1.000000
 npfft, npband and npkpt           1           5           1
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           5           5
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.

 WARNING in invars1m For dataset=   1  a possible choice for less than    0 processors is:
  nproc    npkpt    npband     npfft    bandpp    weight

 Symmetries : space group P-4 3 m (#215); Bravais cP (primitive cubic)
 inkpts: Sum of    1 k point weights is    1.000000
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 npfft, npband and npkpt           1           5           1
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           5           5
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0

 getng.F90:195:WARNING
   The second and third dimension of the FFT grid,    0    0  were imposed to be multiple of the number of processors for the FFT,    1
 For input ecut=  1.000000E+01 best grid ngfft=     100     100     100
       max ecut=  1.066270E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   100  100  100
  Augmented FFT divisions ...................   101  101  100
  FFT algorithm .............................   401
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    5959

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        40  mffmem =         1
P  mgfft =       100   mkmem =         1 mpssoang=         4     mpw =      5959
  mqgrid =      3001   natom =        26    nfft =   1000000    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =         0  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                     274.958 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      3.639 Mbytes ; DEN or POT disk file :      7.631 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with    122.0723 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of    122.072 Mbytes, for testing purposes.
 memana : allocated     274.958 Mbytes, for testing purposes.
 The job will continue.
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
 -outvars: echo values of preprocessed input variables --------
            acell    3.4015067794E+01  3.4015067794E+01  3.4015067794E+01 Bohr
              amu    2.80855000E+01  1.00794000E+00
           diemac    2.00000000E+00
             ecut    1.00000000E+01 Hartree
           fftalg       401
      fft_opt_lob         2
           istwfk      2
              ixc         7
           kptopt         0
P           mkmem         1
            natom        26
            nband        40
            ngfft       100     100     100
             nkpt         1
           npband         5
            nstep        50
             nsym        24
           ntypat         2
              occ    2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
        paral_kgb         1
          spgroup       215
           symrel    1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0 -1
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
           toldfe    5.00000000E-09 Hartree
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
            typat    1  1  1  1  1  1  1  1  1  1  2  2  2  2  2  2  2  2  2  2
                     2  2  2  2  2  2
         wfoptalg         4
           xangst   -1.3388430000E+00 -1.3388430000E+00 -1.3388430000E+00
                     0.0000000000E+00 -2.6678990000E+00  0.0000000000E+00
                     1.3388430000E+00 -1.3388430000E+00  1.3388430000E+00
                    -2.6678990000E+00  0.0000000000E+00  0.0000000000E+00
                    -1.3388430000E+00  1.3388430000E+00  1.3388430000E+00
                     0.0000000000E+00  0.0000000000E+00  2.6678990000E+00
                     0.0000000000E+00  0.0000000000E+00 -2.6678990000E+00
                     1.3388430000E+00  1.3388430000E+00 -1.3388430000E+00
                     2.6678990000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  2.6678990000E+00  0.0000000000E+00
                    -2.2082200000E+00 -2.2082200000E+00 -2.2082200000E+00
                    -8.5918800000E-01 -3.5520260000E+00  8.5918800000E-01
                     8.5918800000E-01 -3.5520260000E+00 -8.5918800000E-01
                     2.2082200000E+00 -2.2082200000E+00  2.2082200000E+00
                    -3.5520260000E+00 -8.5918800000E-01  8.5918800000E-01
                    -3.5520260000E+00  8.5918800000E-01 -8.5918800000E-01
                    -2.2082200000E+00  2.2082200000E+00  2.2082200000E+00
                     8.5918800000E-01  8.5918800000E-01  3.5520260000E+00
                    -8.5918800000E-01 -8.5918800000E-01  3.5520260000E+00
                    -8.5918800000E-01  8.5918800000E-01 -3.5520260000E+00
                     8.5918800000E-01 -8.5918800000E-01 -3.5520260000E+00
                     2.2082200000E+00  2.2082200000E+00 -2.2082200000E+00
                     3.5520260000E+00  8.5918800000E-01  8.5918800000E-01
                     3.5520260000E+00 -8.5918800000E-01 -8.5918800000E-01
                     8.5918800000E-01  3.5520260000E+00  8.5918800000E-01
                    -8.5918800000E-01  3.5520260000E+00 -8.5918800000E-01
            xcart   -2.5300466049E+00 -2.5300466049E+00 -2.5300466049E+00
                     0.0000000000E+00 -5.0415984602E+00  0.0000000000E+00
                     2.5300466049E+00 -2.5300466049E+00  2.5300466049E+00
                    -5.0415984602E+00  0.0000000000E+00  0.0000000000E+00
                    -2.5300466049E+00  2.5300466049E+00  2.5300466049E+00
                     0.0000000000E+00  0.0000000000E+00  5.0415984602E+00
                     0.0000000000E+00  0.0000000000E+00 -5.0415984602E+00
                     2.5300466049E+00  2.5300466049E+00 -2.5300466049E+00
                     5.0415984602E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  5.0415984602E+00  0.0000000000E+00
                    -4.1729310412E+00 -4.1729310412E+00 -4.1729310412E+00
                    -1.6236300167E+00 -6.7123563569E+00  1.6236300167E+00
                     1.6236300167E+00 -6.7123563569E+00 -1.6236300167E+00
                     4.1729310412E+00 -4.1729310412E+00  4.1729310412E+00
                    -6.7123563569E+00 -1.6236300167E+00  1.6236300167E+00
                    -6.7123563569E+00  1.6236300167E+00 -1.6236300167E+00
                    -4.1729310412E+00  4.1729310412E+00  4.1729310412E+00
                     1.6236300167E+00  1.6236300167E+00  6.7123563569E+00
                    -1.6236300167E+00 -1.6236300167E+00  6.7123563569E+00
                    -1.6236300167E+00  1.6236300167E+00 -6.7123563569E+00
                     1.6236300167E+00 -1.6236300167E+00 -6.7123563569E+00
                     4.1729310412E+00  4.1729310412E+00 -4.1729310412E+00
                     6.7123563569E+00  1.6236300167E+00  1.6236300167E+00
                     6.7123563569E+00 -1.6236300167E+00 -1.6236300167E+00
                     1.6236300167E+00  6.7123563569E+00  1.6236300167E+00
                    -1.6236300167E+00  6.7123563569E+00 -1.6236300167E+00
             xred   -7.4380172348E-02 -7.4380172348E-02 -7.4380172348E-02
                     0.0000000000E+00 -1.4821662243E-01  0.0000000000E+00
                     7.4380172348E-02 -7.4380172348E-02  7.4380172348E-02
                    -1.4821662243E-01  0.0000000000E+00  0.0000000000E+00
                    -7.4380172348E-02  7.4380172348E-02  7.4380172348E-02
                     0.0000000000E+00  0.0000000000E+00  1.4821662243E-01
                     0.0000000000E+00  0.0000000000E+00 -1.4821662243E-01
                     7.4380172348E-02  7.4380172348E-02 -7.4380172348E-02
                     1.4821662243E-01  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  1.4821662243E-01  0.0000000000E+00
                    -1.2267889826E-01 -1.2267889826E-01 -1.2267889826E-01
                    -4.7732670312E-02 -1.9733479285E-01  4.7732670312E-02
                     4.7732670312E-02 -1.9733479285E-01 -4.7732670312E-02
                     1.2267889826E-01 -1.2267889826E-01  1.2267889826E-01
                    -1.9733479285E-01 -4.7732670312E-02  4.7732670312E-02
                    -1.9733479285E-01  4.7732670312E-02 -4.7732670312E-02
                    -1.2267889826E-01  1.2267889826E-01  1.2267889826E-01
                     4.7732670312E-02  4.7732670312E-02  1.9733479285E-01
                    -4.7732670312E-02 -4.7732670312E-02  1.9733479285E-01
                    -4.7732670312E-02  4.7732670312E-02 -1.9733479285E-01
                     4.7732670312E-02 -4.7732670312E-02 -1.9733479285E-01
                     1.2267889826E-01  1.2267889826E-01 -1.2267889826E-01
                     1.9733479285E-01  4.7732670312E-02  4.7732670312E-02
                     1.9733479285E-01 -4.7732670312E-02 -4.7732670312E-02
                     4.7732670312E-02  1.9733479285E-01  4.7732670312E-02
                    -4.7732670312E-02  1.9733479285E-01 -4.7732670312E-02
            znucl     14.00000    1.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    26)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: WARNING -
  When k-points/bands/FFT parallelism is activated
  (paral_kgb=1), only MPI-IO input/output is allowed !
  accesswff/=1 in your input file
  You will not be able to perform input/output !
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
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    26)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)

 npfft, npband and npkpt           1           5           1
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           5           5
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0
 Unit cell volume ucvol=  3.9356278E+04 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 100 100 100
         ecut(hartree)=     10.000   => boxcut(ratio)=   2.06521
-P-0000  leave_test : synchronization done...
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    14-Si.LDA.fhi
 silicon, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 2 local
  14.00000   4.00000     21003                znucl, zion, pspdat
    6    7    3    2       495   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   -1.09879859
         --- l  ekb(1:nproj) -->
             0    3.561079
             1    1.887246
             3   -1.290084
 pspatm: atomic psp has been read  and splines computed

- pspatm: opening atomic psp file    01-H.LDA.fhi
 hydrogen, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 2 local
   1.00000   1.00000     21003                znucl, zion, pspdat
    6    7    3    2       387   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    0.05883876
         --- l  ekb(1:nproj) -->
             0   -6.128487
             1  -23.813107
             3   -5.034799
 pspatm: atomic psp has been read  and splines computed

  -5.62607678E+02                                ecore*ucvol(ha*bohr**3)
-P-0000  wfconv:    40 bands initialized randomly with npw=  5959, for ikpt=     1
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE

 setup2: Arith. and geom. avg. npw (full set) are   11917.000   11917.000
 symatm: atom number    1 is reached starting at atom
   1  3  8  5  1  3  8  5  1  3  8  5  1  3  8  5  1  3  8  5  1  3  8  5
 symatm: atom number    2 is reached starting at atom
   2  2 10 10  4  9  9  4  7  6  7  6  7  6  7  6  4  9  9  4  2  2 10 10
 symatm: atom number    3 is reached starting at atom
   3  1  5  8  5  8  3  1  8  5  1  3  8  5  1  3  5  8  3  1  3  1  5  8
 symatm: atom number    4 is reached starting at atom
   4  9  9  4  2  2 10 10  2  2 10 10  4  9  9  4  7  6  7  6  7  6  7  6
 symatm: atom number    5 is reached starting at atom
   5  8  3  1  3  1  5  8  3  1  5  8  5  8  3  1  8  5  1  3  8  5  1  3
 symatm: atom number    6 is reached starting at atom
   6  7  6  7  6  7  6  7  9  4  4  9 10 10  2  2 10 10  2  2  9  4  4  9
 symatm: atom number    7 is reached starting at atom
   7  6  7  6  7  6  7  6  4  9  9  4  2  2 10 10  2  2 10 10  4  9  9  4
 symatm: atom number    8 is reached starting at atom
   8  5  1  3  8  5  1  3  5  8  3  1  3  1  5  8  3  1  5  8  5  8  3  1
 symatm: atom number    9 is reached starting at atom
   9  4  4  9 10 10  2  2 10 10  2  2  9  4  4  9  6  7  6  7  6  7  6  7
 symatm: atom number   10 is reached starting at atom
  10 10  2  2  9  4  4  9  6  7  6  7  6  7  6  7  9  4  4  9 10 10  2  2
 symatm: atom number   11 is reached starting at atom
  11 14 22 17 11 14 22 17 11 14 22 17 11 14 22 17 11 14 22 17 11 14 22 17
 symatm: atom number   12 is reached starting at atom
  12 13 25 26 15 24 23 16 21 19 20 18 20 18 21 19 16 23 24 15 13 12 26 25
 symatm: atom number   13 is reached starting at atom
  13 12 26 25 16 23 24 15 20 18 21 19 21 19 20 18 15 24 23 16 12 13 25 26
 symatm: atom number   14 is reached starting at atom
  14 11 17 22 17 22 14 11 22 17 11 14 22 17 11 14 17 22 14 11 14 11 17 22
 symatm: atom number   15 is reached starting at atom
  15 24 23 16 12 13 25 26 13 12 26 25 16 23 24 15 20 18 21 19 21 19 20 18
 symatm: atom number   16 is reached starting at atom
  16 23 24 15 13 12 26 25 12 13 25 26 15 24 23 16 21 19 20 18 20 18 21 19
 symatm: atom number   17 is reached starting at atom
  17 22 14 11 14 11 17 22 14 11 17 22 17 22 14 11 22 17 11 14 22 17 11 14
 symatm: atom number   18 is reached starting at atom
  18 20 19 21 18 20 19 21 23 16 15 24 25 26 12 13 25 26 12 13 23 16 15 24
 symatm: atom number   19 is reached starting at atom
  19 21 18 20 19 21 18 20 24 15 16 23 26 25 13 12 26 25 13 12 24 15 16 23
 symatm: atom number   20 is reached starting at atom
  20 18 21 19 21 19 20 18 15 24 23 16 12 13 25 26 13 12 26 25 16 23 24 15
 symatm: atom number   21 is reached starting at atom
  21 19 20 18 20 18 21 19 16 23 24 15 13 12 26 25 12 13 25 26 15 24 23 16
 symatm: atom number   22 is reached starting at atom
  22 17 11 14 22 17 11 14 17 22 14 11 14 11 17 22 14 11 17 22 17 22 14 11
 symatm: atom number   23 is reached starting at atom
  23 16 15 24 25 26 12 13 25 26 12 13 23 16 15 24 18 20 19 21 18 20 19 21
 symatm: atom number   24 is reached starting at atom
  24 15 16 23 26 25 13 12 26 25 13 12 24 15 16 23 19 21 18 20 19 21 18 20
 symatm: atom number   25 is reached starting at atom
  25 26 12 13 23 16 15 24 18 20 19 21 18 20 19 21 23 16 15 24 25 26 12 13
 symatm: atom number   26 is reached starting at atom
  26 25 13 12 24 15 16 23 19 21 18 20 19 21 18 20 24 15 16 23 26 25 13 12
 initro : for itypat=  1, take decay length=      1.1000,
 initro : indeed, coreel=     10.0000, nval=  4 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      0.6000,
 initro : indeed, coreel=      0.0000, nval=  1 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 100 100 100
         ecut(hartree)=     10.000   => boxcut(ratio)=   2.06521
  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    3 and   15
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1           0           0

 mkdenpos : WARNING -
  Density went < 0 at         4 points
  and was set to  1.00E-14.  Lowest was  -0.10E-13.
  Likely due to too low boxcut or too low ecut for pseudopotential core charge.
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 starting lobpcg, with nblockbd,mpi_enreg%nproc_band           8           5
 orthonormalize WFs
 orthonormalize WFs
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    2.1890E-01  at reduced coord.    0.1200    0.1200    0.8800
,     Minimum=    1.5311E-07  at reduced coord.    0.5300    0.4500    0.2700
 ETOT  1  -48.534897912467    -4.853E+01 1.904E-03 7.831E+02 3.565E-02 3.565E-02
 scprqt: <Vxc>= -3.2689408E-02 hartree

Simple mixing update:
  residual square of the potential :   259.66344400996365

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 starting lobpcg, with nblockbd,mpi_enreg%nproc_band           8           5
 orthonormalize WFs
 orthonormalize WFs
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    2.1993E-01  at reduced coord.    0.1200    0.1200    0.8800
,     Minimum=    1.2169E-09  at reduced coord.    0.5600    0.4400    0.1300
 ETOT  2  -48.637555882925    -1.027E-01 9.979E-05 1.271E+02 5.089E-02 1.525E-02
 scprqt: <Vxc>= -2.9897657E-02 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.742      0.258

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 starting lobpcg, with nblockbd,mpi_enreg%nproc_band           8           5
 orthonormalize WFs
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    2.0782E-01  at reduced coord.    0.1200    0.1200    0.8800
,     Minimum=    1.3729E-09  at reduced coord.    0.5100    0.3800    0.3600
 ETOT  3  -48.651680110592    -1.412E-02 1.778E-05 5.729E+01 2.494E-02 9.689E-03
 scprqt: <Vxc>= -2.9939701E-02 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.654      0.369     -0.231E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 starting lobpcg, with nblockbd,mpi_enreg%nproc_band           8           5
 orthonormalize WFs
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    2.1261E-01  at reduced coord.    0.1200    0.1200    0.8800
,     Minimum=    1.6525E-09  at reduced coord.    0.6600    0.3400    0.2600
 ETOT  4  -48.663911929338    -1.223E-02 3.705E-06 1.839E+00 9.183E-03 1.011E-03
 scprqt: <Vxc>= -2.9781903E-02 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.31     -0.103     -0.183     -0.249E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 starting lobpcg, with nblockbd,mpi_enreg%nproc_band           8           5
 orthonormalize WFs
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    2.1292E-01  at reduced coord.    0.1200    0.1200    0.8800
,     Minimum=    1.1745E-09  at reduced coord.    0.4300    0.3700    0.2900
 ETOT  5  -48.664188135820    -2.762E-04 1.847E-06 6.942E-01 9.787E-04 2.265E-04
 scprqt: <Vxc>= -2.9809833E-02 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.832      0.344     -0.888E-01 -0.965E-01  0.995E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 starting lobpcg, with nblockbd,mpi_enreg%nproc_band           8           5
 orthonormalize WFs
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    2.1254E-01  at reduced coord.    0.1200    0.1200    0.8800
,     Minimum=    1.2184E-09  at reduced coord.    0.5100    0.3800    0.3600
 ETOT  6  -48.664225766955    -3.763E-05 4.243E-07 1.086E-01 5.490E-04 3.225E-04
 scprqt: <Vxc>= -2.9798306E-02 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.47     -0.460     -0.276E-02 -0.919E-02 -0.228E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 starting lobpcg, with nblockbd,mpi_enreg%nproc_band           8           5
 orthonormalize WFs
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    2.1253E-01  at reduced coord.    0.1200    0.1200    0.8800
,     Minimum=    1.2009E-09  at reduced coord.    0.4300    0.3700    0.2900
 ETOT  7  -48.664229324062    -3.557E-06 1.936E-07 3.035E-03 1.407E-04 4.484E-04
 scprqt: <Vxc>= -2.9784446E-02 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.887      0.202     -0.929E-01  0.532E-02 -0.263E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 starting lobpcg, with nblockbd,mpi_enreg%nproc_band           8           5
 orthonormalize WFs
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    2.1251E-01  at reduced coord.    0.1200    0.1200    0.8800
,     Minimum=    1.2068E-09  at reduced coord.    0.5600    0.4400    0.1300
 ETOT  8  -48.664230055513    -7.315E-07 5.704E-08 2.387E-04 9.847E-05 5.469E-04
 scprqt: <Vxc>= -2.9781816E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.03      0.583E-01 -0.131      0.377E-01  0.246E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 starting lobpcg, with nblockbd,mpi_enreg%nproc_band           8           5
 orthonormalize WFs
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    2.1250E-01  at reduced coord.    0.1200    0.1200    0.8800
,     Minimum=    1.2044E-09  at reduced coord.    0.5600    0.4400    0.1300
 ETOT  9  -48.664230128749    -7.324E-08 2.722E-08 2.260E-05 2.622E-05 5.207E-04
 scprqt: <Vxc>= -2.9781562E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.978      0.930E-01 -0.638E-01 -0.108E-01  0.377E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 starting lobpcg, with nblockbd,mpi_enreg%nproc_band           8           5
 orthonormalize WFs
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    2.1251E-01  at reduced coord.    0.1200    0.1200    0.8800
,     Minimum=    1.2042E-09  at reduced coord.    0.5600    0.4400    0.1300
 ETOT 10  -48.664230137158    -8.409E-09 8.199E-09 2.385E-06 5.606E-06 5.263E-04
 scprqt: <Vxc>= -2.9781480E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.983      0.863E-01 -0.613E-01 -0.977E-02  0.160E-02

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 starting lobpcg, with nblockbd,mpi_enreg%nproc_band           8           5
 orthonormalize WFs
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    2.1250E-01  at reduced coord.    0.1200    0.1200    0.8800
,     Minimum=    1.2040E-09  at reduced coord.    0.5600    0.4400    0.1300
 ETOT 11  -48.664230137859    -7.012E-10 3.934E-09 3.358E-07 1.745E-06 5.261E-04
 scprqt: <Vxc>= -2.9781401E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.12     -0.230E-01 -0.913E-01 -0.141E-01  0.718E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 starting lobpcg, with nblockbd,mpi_enreg%nproc_band           8           5
 orthonormalize WFs
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    2.1250E-01  at reduced coord.    0.1200    0.1200    0.8800
,     Minimum=    1.2040E-09  at reduced coord.    0.5600    0.4400    0.1300
 ETOT 12  -48.664230137928    -6.941E-11 1.198E-09 1.021E-08 5.886E-07 5.255E-04
 scprqt: <Vxc>= -2.9781420E-02 hartree

 At SCF step   12, etot is converged : 
  for the second time, diff in etot=  6.941E-11 < toldfe=  5.000E-09
  forstrnps : usepaw=           0
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  6.71575124230803372E-003  6.71575124230802331E-003  6.71575124231112066E-003   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  strhar : after mpi_comm, harstr=  6.71575124230803372E-003  6.71575124230802331E-003  6.71575124231112066E-003   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  strhar : ehart,ucvol=   126.19728454711647        39356.278270931391     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  5.31250150E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  5.31250150E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  5.31250150E-06  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is 1xo_DEN
 ioarr: data written to disk file 1xo_DEN
-P-0000  leave_test : synchronization done...
================================================================================

 ----iterations are completed or convergence reached----

 outwf  : write wavefunction to file 1xo_WFK
-P-0000  leave_test : synchronization done...

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  5.31250150E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  5.31250150E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  5.31250150E-06  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -1.5630E-01 GPa]
- sigma(1 1)=  1.56299164E-01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.56299164E-01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  1.56299164E-01  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
  
 -outvars: echo values of variables after computation  --------
            acell    3.4015067794E+01  3.4015067794E+01  3.4015067794E+01 Bohr
              amu    2.80855000E+01  1.00794000E+00
           diemac    2.00000000E+00
             ecut    1.00000000E+01 Hartree
           etotal   -4.8664230138E+01
           fftalg       401
      fft_opt_lob         2
            fcart   -3.0583587202E-04 -3.0583587202E-04 -3.0583587202E-04
                     4.1700083557E-21 -5.2554477098E-04  2.0850041779E-21
                     3.0583587202E-04 -3.0583587202E-04  3.0583587202E-04
                    -5.2554477098E-04 -0.0000000000E+00  2.0850041779E-21
                    -3.0583587202E-04  3.0583587202E-04  3.0583587202E-04
                     4.1700083557E-21 -0.0000000000E+00  5.2554477098E-04
                     4.1700083557E-21 -0.0000000000E+00 -5.2554477098E-04
                     3.0583587202E-04  3.0583587202E-04 -3.0583587202E-04
                     5.2554477098E-04 -0.0000000000E+00  2.0850041779E-21
                     4.1700083557E-21  5.2554477098E-04  2.0850041779E-21
                     4.1417434814E-04  4.1417434814E-04  4.1417434814E-04
                     3.8078426787E-04  4.1163482512E-04 -3.8078426787E-04
                    -3.8078426787E-04  4.1163482512E-04  3.8078426787E-04
                    -4.1417434814E-04  4.1417434814E-04 -4.1417434814E-04
                     4.1163482512E-04  3.8078426787E-04 -3.8078426787E-04
                     4.1163482512E-04 -3.8078426787E-04  3.8078426787E-04
                     4.1417434814E-04 -4.1417434814E-04 -4.1417434814E-04
                    -3.8078426787E-04 -3.8078426787E-04 -4.1163482512E-04
                     3.8078426787E-04  3.8078426787E-04 -4.1163482512E-04
                     3.8078426787E-04 -3.8078426787E-04  4.1163482512E-04
                    -3.8078426787E-04  3.8078426787E-04  4.1163482512E-04
                    -4.1417434814E-04 -4.1417434814E-04  4.1417434814E-04
                    -4.1163482512E-04 -3.8078426787E-04 -3.8078426787E-04
                    -4.1163482512E-04  3.8078426787E-04  3.8078426787E-04
                    -3.8078426787E-04 -4.1163482512E-04 -3.8078426787E-04
                     3.8078426787E-04 -4.1163482512E-04  3.8078426787E-04
           istwfk      2
              ixc         7
           kptopt         0
P           mkmem         1
            natom        26
            nband        40
            ngfft       100     100     100
             nkpt         1
           npband         5
            nstep        50
             nsym        24
           ntypat         2
              occ    2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
        paral_kgb         1
          spgroup       215
           strten    5.3125014961E-06  5.3125014961E-06  5.3125014961E-06
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel    1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0 -1
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
           toldfe    5.00000000E-09 Hartree
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
            typat    1  1  1  1  1  1  1  1  1  1  2  2  2  2  2  2  2  2  2  2
                     2  2  2  2  2  2
         wfoptalg         4
           xangst   -1.3388430000E+00 -1.3388430000E+00 -1.3388430000E+00
                     0.0000000000E+00 -2.6678990000E+00  0.0000000000E+00
                     1.3388430000E+00 -1.3388430000E+00  1.3388430000E+00
                    -2.6678990000E+00  0.0000000000E+00  0.0000000000E+00
                    -1.3388430000E+00  1.3388430000E+00  1.3388430000E+00
                     0.0000000000E+00  0.0000000000E+00  2.6678990000E+00
                     0.0000000000E+00  0.0000000000E+00 -2.6678990000E+00
                     1.3388430000E+00  1.3388430000E+00 -1.3388430000E+00
                     2.6678990000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  2.6678990000E+00  0.0000000000E+00
                    -2.2082200000E+00 -2.2082200000E+00 -2.2082200000E+00
                    -8.5918800000E-01 -3.5520260000E+00  8.5918800000E-01
                     8.5918800000E-01 -3.5520260000E+00 -8.5918800000E-01
                     2.2082200000E+00 -2.2082200000E+00  2.2082200000E+00
                    -3.5520260000E+00 -8.5918800000E-01  8.5918800000E-01
                    -3.5520260000E+00  8.5918800000E-01 -8.5918800000E-01
                    -2.2082200000E+00  2.2082200000E+00  2.2082200000E+00
                     8.5918800000E-01  8.5918800000E-01  3.5520260000E+00
                    -8.5918800000E-01 -8.5918800000E-01  3.5520260000E+00
                    -8.5918800000E-01  8.5918800000E-01 -3.5520260000E+00
                     8.5918800000E-01 -8.5918800000E-01 -3.5520260000E+00
                     2.2082200000E+00  2.2082200000E+00 -2.2082200000E+00
                     3.5520260000E+00  8.5918800000E-01  8.5918800000E-01
                     3.5520260000E+00 -8.5918800000E-01 -8.5918800000E-01
                     8.5918800000E-01  3.5520260000E+00  8.5918800000E-01
                    -8.5918800000E-01  3.5520260000E+00 -8.5918800000E-01
            xcart   -2.5300466049E+00 -2.5300466049E+00 -2.5300466049E+00
                     0.0000000000E+00 -5.0415984602E+00  0.0000000000E+00
                     2.5300466049E+00 -2.5300466049E+00  2.5300466049E+00
                    -5.0415984602E+00  0.0000000000E+00  0.0000000000E+00
                    -2.5300466049E+00  2.5300466049E+00  2.5300466049E+00
                     0.0000000000E+00  0.0000000000E+00  5.0415984602E+00
                     0.0000000000E+00  0.0000000000E+00 -5.0415984602E+00
                     2.5300466049E+00  2.5300466049E+00 -2.5300466049E+00
                     5.0415984602E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  5.0415984602E+00  0.0000000000E+00
                    -4.1729310412E+00 -4.1729310412E+00 -4.1729310412E+00
                    -1.6236300167E+00 -6.7123563569E+00  1.6236300167E+00
                     1.6236300167E+00 -6.7123563569E+00 -1.6236300167E+00
                     4.1729310412E+00 -4.1729310412E+00  4.1729310412E+00
                    -6.7123563569E+00 -1.6236300167E+00  1.6236300167E+00
                    -6.7123563569E+00  1.6236300167E+00 -1.6236300167E+00
                    -4.1729310412E+00  4.1729310412E+00  4.1729310412E+00
                     1.6236300167E+00  1.6236300167E+00  6.7123563569E+00
                    -1.6236300167E+00 -1.6236300167E+00  6.7123563569E+00
                    -1.6236300167E+00  1.6236300167E+00 -6.7123563569E+00
                     1.6236300167E+00 -1.6236300167E+00 -6.7123563569E+00
                     4.1729310412E+00  4.1729310412E+00 -4.1729310412E+00
                     6.7123563569E+00  1.6236300167E+00  1.6236300167E+00
                     6.7123563569E+00 -1.6236300167E+00 -1.6236300167E+00
                     1.6236300167E+00  6.7123563569E+00  1.6236300167E+00
                    -1.6236300167E+00  6.7123563569E+00 -1.6236300167E+00
             xred   -7.4380172348E-02 -7.4380172348E-02 -7.4380172348E-02
                     0.0000000000E+00 -1.4821662243E-01  0.0000000000E+00
                     7.4380172348E-02 -7.4380172348E-02  7.4380172348E-02
                    -1.4821662243E-01  0.0000000000E+00  0.0000000000E+00
                    -7.4380172348E-02  7.4380172348E-02  7.4380172348E-02
                     0.0000000000E+00  0.0000000000E+00  1.4821662243E-01
                     0.0000000000E+00  0.0000000000E+00 -1.4821662243E-01
                     7.4380172348E-02  7.4380172348E-02 -7.4380172348E-02
                     1.4821662243E-01  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  1.4821662243E-01  0.0000000000E+00
                    -1.2267889826E-01 -1.2267889826E-01 -1.2267889826E-01
                    -4.7732670312E-02 -1.9733479285E-01  4.7732670312E-02
                     4.7732670312E-02 -1.9733479285E-01 -4.7732670312E-02
                     1.2267889826E-01 -1.2267889826E-01  1.2267889826E-01
                    -1.9733479285E-01 -4.7732670312E-02  4.7732670312E-02
                    -1.9733479285E-01  4.7732670312E-02 -4.7732670312E-02
                    -1.2267889826E-01  1.2267889826E-01  1.2267889826E-01
                     4.7732670312E-02  4.7732670312E-02  1.9733479285E-01
                    -4.7732670312E-02 -4.7732670312E-02  1.9733479285E-01
                    -4.7732670312E-02  4.7732670312E-02 -1.9733479285E-01
                     4.7732670312E-02 -4.7732670312E-02 -1.9733479285E-01
                     1.2267889826E-01  1.2267889826E-01 -1.2267889826E-01
                     1.9733479285E-01  4.7732670312E-02  4.7732670312E-02
                     1.9733479285E-01 -4.7732670312E-02 -4.7732670312E-02
                     4.7732670312E-02  1.9733479285E-01  4.7732670312E-02
                    -4.7732670312E-02  1.9733479285E-01 -4.7732670312E-02
            znucl     14.00000    1.00000

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

 [1] Large scale ab initio calculations based on three levels of parallelization
 F. Bottin, S. Leroux, A. Knyazev, G. Zerah, Comput. Mat. Science 42, 329, (2008).
 Comment : in case paral_kgb is non-zero. Strong suggestion to cite this paper in your publications.
 This paper is also available at http://www.arxiv.org/abs/0707.3405

 [2] Ab initio pseudopotentials for electronic structure calculations of poly-atomic systems, 
 using density-functional theory.
 M. Fuchs, M. Scheffler, Comput. Phys. Commun. 119, 67 (1999).
 Comment : Some pseudopotential generated using the FHI code were used.

 [3] ABINIT : First-principles approach of materials and nanosystem properties.
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

 [4] A brief introduction to the ABINIT software package.
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

 [5] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.
  testfi : enter 
 filnam(1)="1.in"
 nam="testin_1.in"
 nam="testin_2.in"
 nam="testin_3.in"
 nam="testin_bigdft.in"
 nam="testin_etsf_io.in"
 nam="testin_libxc.in"
 nam="testin_wannier90.in"
  testfi : testin=            0
 Proc.   0 individual time (sec): cpu=        108.9  wall=        108.9

 Calculation completed.
.Delivered    4 WARNINGs and   0 COMMENTs to log file.
