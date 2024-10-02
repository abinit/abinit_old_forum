
 inarray.F90:192:ERROR
   There is a problem with the input file : maybe  
  a disagreement between the declared dimension of the array,
  and the number of data actually provided. 
  Action : correct your input file !
  ABINIT 
  
  Give name for formatted input file: 
tspin_3.in
  Give name for formatted output file:
tspin_3.out
  Give root name for generic input files:
tspin_3i
  Give root name for generic output files:
tspin_3o
  Give root name for generic temporary files:
tspin_3

 isfile : WARNING -
  Finds that output file tspin_3.out
 already exists.
 new name assigned:tspin_3.outA


.Version 7.0.5 of ABINIT 
.(sequential version, prepared for a i686_linux_gnu4.6 computer) 

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

.Starting date : Fri  6 Sep 2013.
- ( at 23h28 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.0.5
  Build target  : i686_linux_gnu4.6
  Build date    : 20130313

 === Compiler Suite === 
  C compiler       : gnu4.6
  CFLAGS           :  -g -O2 -mtune=native -march=native -mfpmath=sse
  C++ compiler     : gnu4.6
  CXXFLAGS         :  -g -O2 -mtune=native -march=native -mfpmath=sse
  Fortran compiler : gnu4.6
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

- input  file    -> tspin_3.in
- output file    -> tspin_3.outA
- root for input  files -> tspin_3i
- root for output files -> tspin_3o

-instrng :   153 lines of input have been read from file tspin_3.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is o_lda_v1.01_abinit.paw

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is n_lda_v1.01_abinit.paw

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   3 , psp file is w_lda_v1_abinit.paw
  read the values zionpsp=  6.0 , pspcod=   7 , lmax=   2
 3 0.                                   : shape_type,rshape                      
  read the values zionpsp=  5.0 , pspcod=   7 , lmax=   1
 3 0.                                   : shape_type,rshape                      
  read the values zionpsp= 14.0 , pspcod=   7 , lmax=   3
 3 0.                                   : shape_type,rshape                      

 inpspheads : deduce mpsang  =   4, n1xccc  =   1.

 invars1m : enter jdtset=     1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is mP (primitive monoclinic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is mP (primitive monoclinic)

 symlatt : the Bravais lattice is mP (primitive monoclinic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  2, is more symmetric
  than the real one, iholohedry=  1, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
 getkgrid : length of smallest supercell vector (bohr)=    5.812508E+01
       Simple Lattice Grid

 invars1m : enter jdtset=     2

 inread : ERROR -
  Attempted to read ndig=     6 floating point digits,
   from string(1:ndig) NGKPT3, to initialize a floating variable.

 inarray : 
  An error occurred reading data for keyword " RATSPH2",
    looking for        3 array elements.

 inarray.F90:192:ERROR
   There is a problem with the input file : maybe  
  a disagreement between the declared dimension of the array,
  and the number of data actually provided. 
  Action : correct your input file !

 leave_new : decision taken to exit ...
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
  MPI-IO support is OFF

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.0.5
  Build target  : i686_linux_gnu4.6
  Build date    : 20130313

 === Compiler Suite === 
  C compiler       : gnu4.6
  CFLAGS           :  -g -O2 -mtune=native -march=native -mfpmath=sse
  C++ compiler     : gnu4.6
  CXXFLAGS         :  -g -O2 -mtune=native -march=native -mfpmath=sse
  Fortran compiler : gnu4.6
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

