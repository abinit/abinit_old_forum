  ABINIT 
  
  Give name for formatted input file: 
test1.in
  Give name for formatted output file:
test1.out
  Give root name for generic input files:
test1i
  Give root name for generic output files:
test1o
  Give root name for generic temporary files:
testx

 isfile : WARNING -
  Finds that output file test1.out
 already exists.
 new name assigned:test1.outA


 isfile : WARNING -
  Finds that output file test1.outA
 already exists.
 new name assigned:test1.outB


 isfile : WARNING -
  Finds that output file test1.outB
 already exists.
 new name assigned:test1.outC


 isfile : WARNING -
  Finds that output file test1.outC
 already exists.
 new name assigned:test1.outD


 isfile : WARNING -
  Finds that output file test1.outD
 already exists.
 new name assigned:test1.outE


 isfile : WARNING -
  Finds that output file test1.outE
 already exists.
 new name assigned:test1.outF


 isfile : WARNING -
  Finds that output file test1.outF
 already exists.
 new name assigned:test1.outG

 leave_test : synchronization done...

.Version 6.10.3 of ABINIT 
.(MPI version, prepared for a i686_cygwin_gnu4.5 computer) 

.Copyright (C) 1998-2011 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Fri 30 Dec 2011.
- ( at 11h35 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.10.3
  Build target  : i686_cygwin_gnu4.5
  Build date    : 20111210

 === Compiler Suite === 
  C compiler       : gnu
  CFLAGS           : -mfpmath=sse -msse2 -O2 -Wstrict-aliasing=2 -static
  C++ compiler     : gnu4.5
  CXXFLAGS         : -mfpmath=sse -msse2 -O2 -Wstrict-aliasing=2 -static
  Fortran compiler : gnu4.5
  FCFLAGS          : -mfpmath=sse -msse2 -O2 -ffree-line-length-none -Wstrict-aliasing=2 -static
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : no
  Optimization level : standard
  Architecture       : _

 === MPI === 
  Parallel build : yes
  Parallel I/O   : no
  Time tracing   : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc+atompaw+bigdft+wannier90
  FFT flavor    : none
  LINALG flavor : netlib
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf+etsf_io

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes

 === Bazaar branch information === 
  Branch ID : gonze@testf.pcpm.ucl.ac.be-20111210210011-pymrf96h88sja0c5
  Revision  : 855
  Committed : 0

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   --- None ---


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

           HAVE_BZR_BRANCH          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT

            HAVE_DFT_LIBXC        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...

           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH

             HAVE_FC_GAMMA            HAVE_FC_GETENV          HAVE_FC_INT_QUAD

     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES              HAVE_FC_NULL

         HAVE_FC_STREAM_IO          HAVE_FORTRAN2003               HAVE_GW_DPC

               HAVE_LINALG        HAVE_LINALG_SERIAL                  HAVE_MPI

                 HAVE_MPI1 HAVE_MPI_TYPE_CREATE_S...           HAVE_OS_WINDOWS

              HAVE_STDIO_H                HAVE_TIMER         HAVE_TIMER_ABINIT

            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL         HAVE_TRIO_ETSF_IO

          HAVE_TRIO_NETCDF              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> test1.in
- output file    -> test1.outG
- root for input  files -> test1i
- root for output files -> test1o

 instrng :    65 lines of input have been read

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 20ca.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is 15p.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   3 , psp file is 8o.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   4 , psp file is 9f.pspnc
  read the values zionpsp=  2.0 , pspcod=   1 , lmax=   2
  read the values zionpsp=  5.0 , pspcod=   1 , lmax=   2
  read the values zionpsp=  6.0 , pspcod=   1 , lmax=   1
  read the values zionpsp=  7.0 , pspcod=   1 , lmax=   1

 inpspheads : deduce mpsang  =   3, n1xccc  =2501.
 leave_test : synchronization done...

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 inread : ERROR -
  Attempted to read ndig=     8 integer digits,
   from string(1:ndig)= 9.430723, to initialize an integer variable

 inarray : 
  An error occurred reading data for keyword " ACELL",
    looking for        3 array elements.

 inarray : ERROR -
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
  ==== Using MPI-1 specifications ==== 
  MPI-IO support is OFF
  xmpi_tag_ub ................   2147483647
  xmpi_bsize_ch ..............            1
  xmpi_bsize_int .............            4
  xmpi_bsize_sp ..............            4
  xmpi_bsize_dp ..............            8
  xmpi_bsize_spc .............            8
  xmpi_bsize_dpc .............           16
  xmpio_bsize_frm ............            0
  xmpi_address_kind ..........            4
  xmpi_offset_kind ...........            4

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.10.3
  Build target  : i686_cygwin_gnu4.5
  Build date    : 20111210

 === Compiler Suite === 
  C compiler       : gnu
  CFLAGS           : -mfpmath=sse -msse2 -O2 -Wstrict-aliasing=2 -static
  C++ compiler     : gnu4.5
  CXXFLAGS         : -mfpmath=sse -msse2 -O2 -Wstrict-aliasing=2 -static
  Fortran compiler : gnu4.5
  FCFLAGS          : -mfpmath=sse -msse2 -O2 -ffree-line-length-none -Wstrict-aliasing=2 -static
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : no
  Optimization level : standard
  Architecture       : _

 === MPI === 
  Parallel build : yes
  Parallel I/O   : no
  Time tracing   : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc+atompaw+bigdft+wannier90
  FFT flavor    : none
  LINALG flavor : netlib
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf+etsf_io

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes

 === Bazaar branch information === 
  Branch ID : gonze@testf.pcpm.ucl.ac.be-20111210210011-pymrf96h88sja0c5
  Revision  : 855
  Committed : 0

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

