
.Version 6.4.3  of ANADDB 
.(MPI version, prepared for a x86_64_linux_gnu4.5 computer) 

.Copyright (C) 1998-2010 ABINIT group . 
 ANADDB comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Fri 27 Oct 2017.
- ( at 11h 4 )
  

 herald :  WARNING -
  The starting date is more than 3 years after the initial release
  of this version of ABINIT, namely Jan 2010.
  This version of ABINIT is not supported anymore.
  Action : please, switch to a more recent version of ABINIT.

 herald :  WARNING -
  The starting date is more than 3 years after the initial release
  of this version of ABINIT, namely Jan 2010.
  This version of ABINIT is not supported anymore.
  Action : please, switch to a more recent version of ABINIT.
  Give name for      formatted input file : 
-   t89.in
  Give name for     formatted output file : 
-   t89.out
  Give name for input derivative database : 
-   telphon_2.ddb.out
  Give name for output molecular dynamics : 
-   moldyn
  Give name for input elphon matrix elements  (GKK file) : 
-   telphon_3o_GKK.bin
  Give root name for elphon output files : 
-   telphon.ep
  Give name for file containing ddk filenames for elphon/transport : 
-   t89.ddk


 Read the input file

-begin at tcpu      0.000  and twall      0.001 sec
 inprep8 : open file telphon_2.ddb.out
  inprep8 : nband(1)=          30
        occ  0.20000000000000D+01  0.00000000000000D+00  0.00000000000000D+00
             0.00000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
             0.00000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
             0.00000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
             0.00000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
             0.00000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
             0.00000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
             0.00000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
             0.00000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
             0.00000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
 instrng :    59 lines of input have been read
 will read the inputs completely
 read the inputs completely

================================================================================

 -outvars9: echo values of input variables ----------------------

 Flags :
     ifcflag         1
    elphflag         1
 Miscellaneous information :
       eivec         1
         asr         2
 Interatomic Force Constants Inputs :
      dipdip         0
      ifcana         1
      ifcout         0
 Description of grid 1 :
        brav         1
       ngqpt         2         2         2
      nqshft         1
      q1shft
                     0.00000000E+00  0.00000000E+00  0.00000000E+00
 Elphon calculation will be carried out
   elphsmear    0.100000E-01
    a2fsmear    0.200000E-04
      mustar    0.136000E+00
      nqpath         7
       qpath
                0.000000E+00     0.000000E+00     0.000000E+00
                0.500000E+00     0.500000E+00     0.000000E+00
                0.100000E+01     0.100000E+01     0.100000E+01
                0.500000E+00     0.500000E+00     0.500000E+00
                0.500000E+00     0.500000E+00     0.000000E+00
                0.500000E+00     0.750000E+00     0.250000E+00
                0.500000E+00     0.500000E+00     0.500000E+00
    telphint         1
 Smeared weight integration for elphon
 Will keep band dependency in gkk in memory.
 WARNING: the memory requirements will be multiplied by nbands**2 !!!
 scalar product will be performed when assembling the gamma matrices.
 WARNING: with this option you can not distinguish which 
    linewidth comes from which phonon mode !!!
 Will perform transport calculation in elphon to get
 resistivity and thermal conductivity as a function of T

 Minimum temperature for transport outputs:     0.000000E+00 K
 Maximum temperature for transport outputs:     1.000000E+03 K
 Number of temperature points for transport outputs:   1000

 First list of wavevector (reduced coord.) :
       nph1l         1
       qph1l
                     0.00000000E+00  0.00000000E+00  0.00000000E+00    1.000E+00

================================================================================


 herald :  WARNING -
  The starting date is more than 3 years after the initial release
  of this version of ABINIT, namely Jan 2010.
  This version of ABINIT is not supported anymore.
  Action : please, switch to a more recent version of ABINIT.
 read the DDB information and perform some checks

-begin at tcpu      0.019  and twall      0.020 sec

 Unit cell volume ucvol=  1.4513087E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 symatm: atom number    1 is reached starting at atom
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
 symatm: atom number    2 is reached starting at atom
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2


 rdddb9 : read     3 blocks from the input DDB
 symq3 : found symmetry   1 preserves q
 symq3 : found symmetry    1 + TimeReversal preserves q
 symq3 : found symmetry   2 preserves q
 symq3 : found symmetry    2 + TimeReversal preserves q
 symq3 : found symmetry   3 preserves q
 symq3 : found symmetry    3 + TimeReversal preserves q
 symq3 : found symmetry   4 preserves q
 symq3 : found symmetry    4 + TimeReversal preserves q
 symq3 : found symmetry   5 preserves q
 symq3 : found symmetry    5 + TimeReversal preserves q
 symq3 : found symmetry   6 preserves q
 symq3 : found symmetry    6 + TimeReversal preserves q
 symq3 : found symmetry   7 preserves q
 symq3 : found symmetry    7 + TimeReversal preserves q
 symq3 : found symmetry   8 preserves q
 symq3 : found symmetry    8 + TimeReversal preserves q
 symq3 : found symmetry   9 preserves q
 symq3 : found symmetry    9 + TimeReversal preserves q
 symq3 : found symmetry  10 preserves q
 symq3 : found symmetry   10 + TimeReversal preserves q
 symq3 : found symmetry  11 preserves q
 symq3 : found symmetry   11 + TimeReversal preserves q
 symq3 : found symmetry  12 preserves q
 symq3 : found symmetry   12 + TimeReversal preserves q
 symq3 : found symmetry  13 preserves q
 symq3 : found symmetry   13 + TimeReversal preserves q
 symq3 : found symmetry  14 preserves q
 symq3 : found symmetry   14 + TimeReversal preserves q
 symq3 : found symmetry  15 preserves q
 symq3 : found symmetry   15 + TimeReversal preserves q
 symq3 : found symmetry  16 preserves q
 symq3 : found symmetry   16 + TimeReversal preserves q
 symq3 : found symmetry  17 preserves q
 symq3 : found symmetry   17 + TimeReversal preserves q
 symq3 : found symmetry  18 preserves q
 symq3 : found symmetry   18 + TimeReversal preserves q
 symq3 : found symmetry  19 preserves q
 symq3 : found symmetry   19 + TimeReversal preserves q
 symq3 : found symmetry  20 preserves q
 symq3 : found symmetry   20 + TimeReversal preserves q
 symq3 : found symmetry  21 preserves q
 symq3 : found symmetry   21 + TimeReversal preserves q
 symq3 : found symmetry  22 preserves q
 symq3 : found symmetry   22 + TimeReversal preserves q
 symq3 : found symmetry  23 preserves q
 symq3 : found symmetry   23 + TimeReversal preserves q
 symq3 : found symmetry  24 preserves q
 symq3 : found symmetry   24 + TimeReversal preserves q
 symq3 : found symmetry  25 preserves q
 symq3 : found symmetry   25 + TimeReversal preserves q
 symq3 : found symmetry  26 preserves q
 symq3 : found symmetry   26 + TimeReversal preserves q
 symq3 : found symmetry  27 preserves q
 symq3 : found symmetry   27 + TimeReversal preserves q
 symq3 : found symmetry  28 preserves q
 symq3 : found symmetry   28 + TimeReversal preserves q
 symq3 : found symmetry  29 preserves q
 symq3 : found symmetry   29 + TimeReversal preserves q
 symq3 : found symmetry  30 preserves q
 symq3 : found symmetry   30 + TimeReversal preserves q
 symq3 : found symmetry  31 preserves q
 symq3 : found symmetry   31 + TimeReversal preserves q
 symq3 : found symmetry  32 preserves q
 symq3 : found symmetry   32 + TimeReversal preserves q
 symq3 : found symmetry  33 preserves q
 symq3 : found symmetry   33 + TimeReversal preserves q
 symq3 : found symmetry  34 preserves q
 symq3 : found symmetry   34 + TimeReversal preserves q
 symq3 : found symmetry  35 preserves q
 symq3 : found symmetry   35 + TimeReversal preserves q
 symq3 : found symmetry  36 preserves q
 symq3 : found symmetry   36 + TimeReversal preserves q
 symq3 : found symmetry  37 preserves q
 symq3 : found symmetry   37 + TimeReversal preserves q
 symq3 : found symmetry  38 preserves q
 symq3 : found symmetry   38 + TimeReversal preserves q
 symq3 : found symmetry  39 preserves q
 symq3 : found symmetry   39 + TimeReversal preserves q
 symq3 : found symmetry  40 preserves q
 symq3 : found symmetry   40 + TimeReversal preserves q
 symq3 : found symmetry  41 preserves q
 symq3 : found symmetry   41 + TimeReversal preserves q
 symq3 : found symmetry  42 preserves q
 symq3 : found symmetry   42 + TimeReversal preserves q
 symq3 : found symmetry  43 preserves q
 symq3 : found symmetry   43 + TimeReversal preserves q
 symq3 : found symmetry  44 preserves q
 symq3 : found symmetry   44 + TimeReversal preserves q
 symq3 : found symmetry  45 preserves q
 symq3 : found symmetry   45 + TimeReversal preserves q
 symq3 : found symmetry  46 preserves q
 symq3 : found symmetry   46 + TimeReversal preserves q
 symq3 : found symmetry  47 preserves q
 symq3 : found symmetry   47 + TimeReversal preserves q
 symq3 : found symmetry  48 preserves q
 symq3 : found symmetry   48 + TimeReversal preserves q
 symq3 : able to use time-reversal symmetry.
  (except for gamma, not yet able to use time-reversal symmetry)
 symq3 : found symmetry   1 preserves q
 symq3 : found symmetry    1 + TimeReversal preserves q
 symq3 : found symmetry   2 preserves q
 symq3 : found symmetry    2 + TimeReversal preserves q
 symq3 : found symmetry  13 preserves q
 symq3 : found symmetry   13 + TimeReversal preserves q
 symq3 : found symmetry  14 preserves q
 symq3 : found symmetry   14 + TimeReversal preserves q
 symq3 : found symmetry  21 preserves q
 symq3 : found symmetry   21 + TimeReversal preserves q
 symq3 : found symmetry  22 preserves q
 symq3 : found symmetry   22 + TimeReversal preserves q
 symq3 : found symmetry  25 preserves q
 symq3 : found symmetry   25 + TimeReversal preserves q
 symq3 : found symmetry  26 preserves q
 symq3 : found symmetry   26 + TimeReversal preserves q
 symq3 : found symmetry  35 preserves q
 symq3 : found symmetry   35 + TimeReversal preserves q
 symq3 : found symmetry  36 preserves q
 symq3 : found symmetry   36 + TimeReversal preserves q
 symq3 : found symmetry  43 preserves q
 symq3 : found symmetry   43 + TimeReversal preserves q
 symq3 : found symmetry  44 preserves q
 symq3 : found symmetry   44 + TimeReversal preserves q
 symq3 : found symmetry   1 preserves q
 symq3 : found symmetry    1 + TimeReversal preserves q
 symq3 : found symmetry   2 preserves q
 symq3 : found symmetry    2 + TimeReversal preserves q
 symq3 : found symmetry   3 preserves q
 symq3 : found symmetry    3 + TimeReversal preserves q
 symq3 : found symmetry   4 preserves q
 symq3 : found symmetry    4 + TimeReversal preserves q
 symq3 : found symmetry   5 preserves q
 symq3 : found symmetry    5 + TimeReversal preserves q
 symq3 : found symmetry   6 preserves q
 symq3 : found symmetry    6 + TimeReversal preserves q
 symq3 : found symmetry   7 preserves q
 symq3 : found symmetry    7 + TimeReversal preserves q
 symq3 : found symmetry   8 preserves q
 symq3 : found symmetry    8 + TimeReversal preserves q
 symq3 : found symmetry  25 preserves q
 symq3 : found symmetry   25 + TimeReversal preserves q
 symq3 : found symmetry  26 preserves q
 symq3 : found symmetry   26 + TimeReversal preserves q
 symq3 : found symmetry  27 preserves q
 symq3 : found symmetry   27 + TimeReversal preserves q
 symq3 : found symmetry  28 preserves q
 symq3 : found symmetry   28 + TimeReversal preserves q
 symq3 : found symmetry  29 preserves q
 symq3 : found symmetry   29 + TimeReversal preserves q
 symq3 : found symmetry  30 preserves q
 symq3 : found symmetry   30 + TimeReversal preserves q
 symq3 : found symmetry  31 preserves q
 symq3 : found symmetry   31 + TimeReversal preserves q
 symq3 : found symmetry  32 preserves q
 symq3 : found symmetry   32 + TimeReversal preserves q
 Now the whole DDB is in central memory
 gtblk9 : enter gtblk9
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1    1    1    4  217
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1    1    2    4  241
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1    1    3    4  265
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2    1    1    4  218
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2    1    2    4  242
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2    1    3    4  266
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    3    1    1    4  219
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    3    1    2    4  243
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    3    1    3    4  267
 gtblk9 : COMMENT -
  The blok     2 with gamma(1)= 1,
  does not match the requirement blkgam= 0.
 gtblk9 : COMMENT -
  The blok     3 with gamma(1)= 1,
  does not match the requirement blkgam= 0.
 gtblk9 :
  Unable to find block corresponding to the following specifications :
 Type (rfmeth) =  1
 ider qphon(3)         qphnrm   rfphon rfelfd rfstrs
   1  0.00  0.00  0.00  0.00      1      2      0
   2 -0.00 -0.00 -0.00  0.00      1      2      0

================================================================================

 Dielectric Tensor and Effective Charges 

-begin at tcpu      0.022  and twall      0.022 sec
 The Gamma block is :      4

 Metallic case : effective charges are set to 0

================================================================================

 Calculation of the interatomic forces 

-begin at tcpu      0.022  and twall      0.022 sec
 mkifc9 : enter chkrp9 
 mkifc9 : exit chkrp9 
 mkifc9 : enter smpbz 
       Homogeneous q point set in the B.Z.
       Simple Lattice Grid
 Grid q points  :        8
  1)   0.00000000E+00  0.00000000E+00  0.00000000E+00
  2)   5.00000000E-01  0.00000000E+00  0.00000000E+00
  3)   0.00000000E+00  5.00000000E-01  0.00000000E+00
  4)   5.00000000E-01  5.00000000E-01  0.00000000E+00
  5)   0.00000000E+00  0.00000000E+00  5.00000000E-01
  6)   5.00000000E-01  0.00000000E+00  5.00000000E-01
  7)   0.00000000E+00  5.00000000E-01  5.00000000E-01
  8)   5.00000000E-01  5.00000000E-01  5.00000000E-01
 mkifc9 : exit smpbz 
 mkifc9 : enter symdm9 
 symdm9 : ERROR -
  Informations are missing in the DDB.
  In blok     1 the following element is missing :
  idir1,ipert1,idir2,ipert2=   1   2   1   2
  Action : add the required information in the DDB,
  or modify your input file.

 leave_new : decision taken to exit ...

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.4.3
  Build target  : x86_64_linux_gnu4.5
  Build date    : 20110525

 === Compiler Suite === 
  C compiler       : gnu4.5
  CFLAGS           : -m64 -g -O2 -mtune=native -march=native -mfpmath=sse
  C++ compiler     : gnu4.5
  CXXFLAGS         : -m64 -g -O2 -mtune=native -march=native -mfpmath=sse
  Fortran compiler : gnu4.5
  FCFLAGS          : -m64 -g -ffree-line-length-none -Wstrict-aliasing=2
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes

 === Linear algebra === 
  Library flavor : @linalg_flavor@
  Use ScaLAPACK  : no

 === Plug-ins === 
  BigDFT    : no
  ETSF I/O  : no
  LibXC     : no
  FoX       : no
  NetCDF    : no
  Wannier90 : no

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no
  Macroave build      : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

