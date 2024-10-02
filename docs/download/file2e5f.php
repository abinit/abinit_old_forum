
.Version 5.8.4  of ANADDB 
.(sequential version, prepared for a x86_64_linux_gnu4.2 computer) 

.Copyright (C) 1998-2009 ABINIT group . 
 ANADDB comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Tue 23 Feb 2010.
  
  Give name for      formatted input file : 
-   ana1.in
  Give name for     formatted output file : 
-   ana1.out
  Give name for input derivative database : 
-   30_elast8o_DS3_DDB
  Give name for output molecular dynamics : 
-   dummy_moldyn
  Give name for input elphon matrix elements  (GKK file) : 
-   dummy_GKK
  Give root name for elphon output files : 
-   dummy.out
  Give name for file containing ddk filenames for elphon/transport : 
-   dummy.ddk


 Read the input file

-begin at tcpu      0.000  and twall      0.000 sec
 inprep8 : open file 30_elast8o_DS3_DDB
  inprep8 : nband(1)=          26
        occ  0.20000000000000D+01  0.20000000000000D+01  0.20000000000000D+01
             0.20000000000000D+01  0.20000000000000D+01  0.20000000000000D+01
             0.20000000000000D+01  0.20000000000000D+01  0.20000000000000D+01
             0.20000000000000D+01  0.20000000000000D+01  0.20000000000000D+01
             0.20000000000000D+01  0.20000000000000D+01  0.20000000000000D+01
             0.20000000000000D+01  0.20000000000000D+01  0.20000000000000D+01
             0.20000000000000D+01  0.20000000000000D+01  0.20000000000000D+01
             0.20000000000000D+01  0.20000000000000D+01  0.20000000000000D+01
             0.20000000000000D+01  0.20000000000000D+01
 instrng :    10 lines of input have been read
 will read the inputs completely
 read the inputs completely

================================================================================

 -outvars9: echo values of input variables ----------------------

 Flags :
     dieflag         1
     elaflag         3
   instrflag         1
   piezoflag         7
 Miscellaneous information :
         asr         1
      chneut         1
 Frequency information :
       nfreq         1
       frmin         0.00000000E+00
       frmax         1.00000000E+01

================================================================================

 read the DDB information and perform some checks

-begin at tcpu      0.054  and twall      0.054 sec

 Unit cell volume ucvol=  9.3014464E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 symatm: atom number    1 is reached starting at atom
   1  2  1  2  1  2
 symatm: atom number    2 is reached starting at atom
   2  1  2  1  2  1
 symatm: atom number    3 is reached starting at atom
   3  6  5  8  4  7
 symatm: atom number    4 is reached starting at atom
   4  7  3  6  5  8
 symatm: atom number    5 is reached starting at atom
   5  8  4  7  3  6
 symatm: atom number    6 is reached starting at atom
   6  5  8  4  7  3
 symatm: atom number    7 is reached starting at atom
   7  3  6  5  8  4
 symatm: atom number    8 is reached starting at atom
   8  4  7  3  6  5
 symatm: atom number    9 is reached starting at atom
   9 10  9 10  9 10
 symatm: atom number   10 is reached starting at atom
  10  9 10  9 10  9


 rdddb9 : read     1 blocks from the input DDB
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
 symq3 : able to use time-reversal symmetry.
  (except for gamma, not yet able to use time-reversal symmetry)
 Now the whole DDB is in central memory
 gtblk9 : enter gtblk9
 gtblk9 : found blok number     1 agree with specifications
 asria9 : imposition of the ASR for the interatomic forces.
 gtblk9 : enter gtblk9
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1   12    1   12 1618
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1   12    2   12 1666
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2   12    1   12 1619
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2   12    2   12 1667
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    3   12    3   12 1716
 gtblk9 :
  Unable to find block corresponding to the following specifications :
 Type (rfmeth) =  1
 ider qphon(3)         qphnrm   rfphon rfelfd rfstrs
   1  0.00  0.00  0.00  0.00      1      2      0
   2  0.00  0.00  0.00  0.00      1      2      0

================================================================================

 Treat the second list of vectors 

-begin at tcpu      0.067  and twall      0.066 sec
 gtblk9 : enter gtblk9
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1   12    1   12 1618
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1   12    2   12 1666
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2   12    1   12 1619
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2   12    2   12 1667
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    3   12    3   12 1716
 gtblk9 :
  Unable to find block corresponding to the following specifications :
 Type (rfmeth) =  1
 ider qphon(3)         qphnrm   rfphon rfelfd rfstrs
   1  0.00  0.00  0.00  0.00      1      2      0
   2  0.00  0.00  0.00  0.00      1      2      0
 asria9 : imposition of the ASR for the interatomic forces.
 anaddb : the frequency-dependent dielectric tensor (and also once more
 the phonons at gamma - without non-analytic part )

 The frequency-dependent dielectric tensor
 fxphas : BUG -
  The eigenvector number   1 has zero norm.
  Action : contact ABINIT group.

.Delivered    0 WARNINGs and  10 COMMENTs to log file.

 leave_new : decision taken to exit ...

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 5.8.4
  Build target  : x86_64_linux_gnu4.2
  Build date    : 20100222

 === Compiler Suite === 
  C compiler       : gnu4.2
  CFLAGS           :  -g -O2
  C++ compiler     : gnu4.2
  CXXFLAGS         :  -g -O2
  Fortran compiler : gnu4.2
  FCFLAGS          :  -g  -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : symbols
  Optimization level : standard
  Architecture       : unknown_unknown

 === MPI === 
  Parallel build : yes
  Parallel I/O   : no
  MPI CPPFLAGS   : -DMPI=1 -DMPI1=1

 === Linear algebra === 
  Library type  : abinit
  Use ScaLAPACK : no

 === Plug-ins === 
  BigDFT    : no
  ETSF I/O  : no
  LibXC     : no
  FoX       : no
  NetCDF    : no
  Wannier90 : no
  XMLF90    : no

 === Experimental features === 
  Bindings            : no
  Error handlers      : no
  Exports             : no
  GW double-precision : no
  Macroave build      : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

