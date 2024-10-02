
 Version 4.6.5  of ANADDB 
 (sequential version, prepared for a P6/DOS/Windows computer) 

 Copyright (C) 1998-2005 ABINIT group . 
 ANADDB comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~ABINIT/Infos/copyright or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~ABINIT/Infos/contributors.
 Please read ~ABINIT/Infos/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

 Starting date : Wed 18 Jan 2012.
  
  Give name for      formatted input file : 
 libh4elast.in
  Give name for     formatted output file : 
 libh4elast.out
  Give name for input derivative database : 
 libh4o_DS3_DDB
  Give name for output molecular dynamics - optional : 
 dummy_moldyn
  Give name for input elphon matrix elements  (GKK file) - optional : 
 dummy_GKK
  Give root name for elphon output files - optional : 
 you


 Read the input file

-begin at tcpu      0.016  and twall      0.016 sec
 inprep8 : open file libh4o_DS3_DDB
  inprep8 : nband(1)= 19
        occ  0.20000000000000D+01  0.20000000000000D+01  0.20000000000000D+01
             0.20000000000000D+01  0.20000000000000D+01  0.20000000000000D+01
             0.20000000000000D+01  0.20000000000000D+01  0.20000000000000D+01
             0.20000000000000D+01  0.20000000000000D+01  0.20000000000000D+01
             0.20000000000000D+01  0.20000000000000D+01  0.20000000000000D+01
             0.20000000000000D+01  0.00000000000000D+00  0.00000000000000D+00
             0.00000000000000D+00
 instrng :    11 lines of input have been read
 will read the inputs completely
 read the inputs completely

================================================================================

 -outvars9: echo values of input variables ----------------------

 Flags :
     elaflag         3
   instrflag         1
   piezoflag         3
 Miscellaneous information :
      chneut         1

================================================================================

 read the DDB information and perform some checks

-begin at tcpu      0.219  and twall      0.219 sec

 Unit cell volume ucvol=  1.3859106E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 symatm: atom number    1 is reached starting at atom
   1  2  2  1  4  3  3  4
 symatm: atom number    2 is reached starting at atom
   2  1  1  2  3  4  4  3
 symatm: atom number    3 is reached starting at atom
   3  4  4  3  2  1  1  2
 symatm: atom number    4 is reached starting at atom
   4  3  3  4  1  2  2  1
 symatm: atom number    5 is reached starting at atom
   5  6  6  5  8  7  7  8
 symatm: atom number    6 is reached starting at atom
   6  5  5  6  7  8  8  7
 symatm: atom number    7 is reached starting at atom
   7  8  8  7  6  5  5  6
 symatm: atom number    8 is reached starting at atom
   8  7  7  8  5  6  6  5
 symatm: atom number    9 is reached starting at atom
   9 10 10  9 12 11 11 12
 symatm: atom number   10 is reached starting at atom
  10  9  9 10 11 12 12 11
 symatm: atom number   11 is reached starting at atom
  11 12 12 11 10  9  9 10
 symatm: atom number   12 is reached starting at atom
  12 11 11 12  9 10 10  9
 symatm: atom number   13 is reached starting at atom
  13 14 14 13 16 15 15 16
 symatm: atom number   14 is reached starting at atom
  14 13 13 14 15 16 16 15
 symatm: atom number   15 is reached starting at atom
  15 16 16 15 14 13 13 14
 symatm: atom number   16 is reached starting at atom
  16 15 15 16 13 14 14 13
 symatm: atom number   17 is reached starting at atom
  17 18 23 24 20 19 22 21
 symatm: atom number   18 is reached starting at atom
  18 17 24 23 19 20 21 22
 symatm: atom number   19 is reached starting at atom
  19 20 21 22 18 17 24 23
 symatm: atom number   20 is reached starting at atom
  20 19 22 21 17 18 23 24
 symatm: atom number   21 is reached starting at atom
  21 22 19 20 24 23 18 17
 symatm: atom number   22 is reached starting at atom
  22 21 20 19 23 24 17 18
 symatm: atom number   23 is reached starting at atom
  23 24 17 18 22 21 20 19
 symatm: atom number   24 is reached starting at atom
  24 23 18 17 21 22 19 20


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
 symq3 : found symmetry   7 preserves q
 symq3 : found symmetry    7 + TimeReversal preserves q
 symq3 : found symmetry   8 preserves q
 symq3 : found symmetry    8 + TimeReversal preserves q
 symq3 : able to use time-reversal symmetry.
  (except for gamma, not yet able to use time-reversal symmetry)
 Now the whole DDB is in central memory
 gtblk9 : enter gtblk9
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1   26    1   26 6826
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2   26    2   26 6917
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    3   26    3   26 7008
 gtblk9 :
  Unable to find block corresponding to the following specifications :
 Type (rfmeth) =  1
 ider qphon(3)         qphnrm   rfphon rfelfd rfstrs
   1  0.00  0.00  0.00  0.00      1      2      0
   2 -0.00 -0.00 -0.00  0.00      1      2      0

================================================================================

 Calculation of the internal-strain  tensor

-begin at tcpu      0.235   and twall      0.235sec
 anaddb : instrflag=1, so extract the internal strain constant from the 2DTE
 gtblk9 : enter gtblk9
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1   27    1   28 7369
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1   27    2   28 7459
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1   27    3   28 7549
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2   27    1   28 7370
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2   27    2   28 7460
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2   27    3   28 7550
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    3   27    1   28 7371
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    3   27    2   28 7461
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    3   27    3   28 7551
 gtblk9 :
  Unable to find block corresponding to the following specifications :
 Type (rfmeth) =  1
 ider qphon(3)         qphnrm   rfphon rfelfd rfstrs
   1  0.00  0.00  0.00  0.00      0      0      3
   2 -0.00 -0.00 -0.00  0.00      0      0      3

 Force-response internal strain tensor(Unit:Hartree/bohr)

 Atom dir   strainxx    strainyy    strainzz    strainyz    strainxz    strainxy
  1  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  1  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  1  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  2  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  2  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  2  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  3  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  3  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  3  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  4  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  4  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  4  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  5  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  5  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  5  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  6  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  6  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  6  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  7  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  7  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  7  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  8  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  8  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  8  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  9  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  9  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
  9  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 10  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 10  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 10  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 11  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 11  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 11  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 12  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 12  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 12  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 13  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 13  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 13  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 14  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 14  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 14  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 15  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 15  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 15  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 16  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 16  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 16  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 17  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 17  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 17  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 18  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 18  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 18  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 19  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 19  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 19  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 20  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 20  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 20  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 21  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 21  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 21  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 22  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 22  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 22  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 23  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 23  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 23  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 24  x    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 24  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000
 24  z    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000

 Displacement-response internal strain tensor (Unit:Bohr)

 Atom dir   strainxx    strainyy    strainzz    strainyz    strainxz    strainxy
  1  x           NaN         NaN         NaN         NaN         NaN         NaN
  1  y           NaN         NaN         NaN         NaN         NaN         NaN
  1  z           NaN         NaN         NaN         NaN         NaN         NaN
  2  x           NaN         NaN         NaN         NaN         NaN         NaN
  2  y           NaN         NaN         NaN         NaN         NaN         NaN
  2  z           NaN         NaN         NaN         NaN         NaN         NaN
  3  x           NaN         NaN         NaN         NaN         NaN         NaN
  3  y           NaN         NaN         NaN         NaN         NaN         NaN
  3  z           NaN         NaN         NaN         NaN         NaN         NaN
  4  x           NaN         NaN         NaN         NaN         NaN         NaN
  4  y           NaN         NaN         NaN         NaN         NaN         NaN
  4  z           NaN         NaN         NaN         NaN         NaN         NaN
  5  x           NaN         NaN         NaN         NaN         NaN         NaN
  5  y           NaN         NaN         NaN         NaN         NaN         NaN
  5  z           NaN         NaN         NaN         NaN         NaN         NaN
  6  x           NaN         NaN         NaN         NaN         NaN         NaN
  6  y           NaN         NaN         NaN         NaN         NaN         NaN
  6  z           NaN         NaN         NaN         NaN         NaN         NaN
  7  x           NaN         NaN         NaN         NaN         NaN         NaN
  7  y           NaN         NaN         NaN         NaN         NaN         NaN
  7  z           NaN         NaN         NaN         NaN         NaN         NaN
  8  x           NaN         NaN         NaN         NaN         NaN         NaN
  8  y           NaN         NaN         NaN         NaN         NaN         NaN
  8  z           NaN         NaN         NaN         NaN         NaN         NaN
  9  x           NaN         NaN         NaN         NaN         NaN         NaN
  9  y           NaN         NaN         NaN         NaN         NaN         NaN
  9  z           NaN         NaN         NaN         NaN         NaN         NaN
 10  x           NaN         NaN         NaN         NaN         NaN         NaN
 10  y           NaN         NaN         NaN         NaN         NaN         NaN
 10  z           NaN         NaN         NaN         NaN         NaN         NaN
 11  x           NaN         NaN         NaN         NaN         NaN         NaN
 11  y           NaN         NaN         NaN         NaN         NaN         NaN
 11  z           NaN         NaN         NaN         NaN         NaN         NaN
 12  x           NaN         NaN         NaN         NaN         NaN         NaN
 12  y           NaN         NaN         NaN         NaN         NaN         NaN
 12  z           NaN         NaN         NaN         NaN         NaN         NaN
 13  x           NaN         NaN         NaN         NaN         NaN         NaN
 13  y           NaN         NaN         NaN         NaN         NaN         NaN
 13  z           NaN         NaN         NaN         NaN         NaN         NaN
 14  x           NaN         NaN         NaN         NaN         NaN         NaN
 14  y           NaN         NaN         NaN         NaN         NaN         NaN
 14  z           NaN         NaN         NaN         NaN         NaN         NaN
 15  x           NaN         NaN         NaN         NaN         NaN         NaN
 15  y           NaN         NaN         NaN         NaN         NaN         NaN
 15  z           NaN         NaN         NaN         NaN         NaN         NaN
 16  x           NaN         NaN         NaN         NaN         NaN         NaN
 16  y           NaN         NaN         NaN         NaN         NaN         NaN
 16  z           NaN         NaN         NaN         NaN         NaN         NaN
 17  x           NaN         NaN         NaN         NaN         NaN         NaN
 17  y           NaN         NaN         NaN         NaN         NaN         NaN
 17  z           NaN         NaN         NaN         NaN         NaN         NaN
 18  x           NaN         NaN         NaN         NaN         NaN         NaN
 18  y           NaN         NaN         NaN         NaN         NaN         NaN
 18  z           NaN         NaN         NaN         NaN         NaN         NaN
 19  x           NaN         NaN         NaN         NaN         NaN         NaN
 19  y           NaN         NaN         NaN         NaN         NaN         NaN
 19  z           NaN         NaN         NaN         NaN         NaN         NaN
 20  x           NaN         NaN         NaN         NaN         NaN         NaN
 20  y           NaN         NaN         NaN         NaN         NaN         NaN
 20  z           NaN         NaN         NaN         NaN         NaN         NaN
 21  x           NaN         NaN         NaN         NaN         NaN         NaN
 21  y           NaN         NaN         NaN         NaN         NaN         NaN
 21  z           NaN         NaN         NaN         NaN         NaN         NaN
 22  x           NaN         NaN         NaN         NaN         NaN         NaN
 22  y           NaN         NaN         NaN         NaN         NaN         NaN
 22  z           NaN         NaN         NaN         NaN         NaN         NaN
 23  x           NaN         NaN         NaN         NaN         NaN         NaN
 23  y           NaN         NaN         NaN         NaN         NaN         NaN
 23  z           NaN         NaN         NaN         NaN         NaN         NaN
 24  x           NaN         NaN         NaN         NaN         NaN         NaN
 24  y           NaN         NaN         NaN         NaN         NaN         NaN
 24  z           NaN         NaN         NaN         NaN         NaN         NaN

================================================================================

 Calculation of the elastic and compliances tensor (Voigt notation)

-begin at tcpu      0.563   and twall      0.563sec
 anaddb : so extract the elastic constant from the 2DTE
 gtblk9 : enter gtblk9
 gtblk9 : COMMENT -
  The blok     1 with type 1,
  does not match the requirement rftyp= 4.
 gtblk9 :
  Unable to find block corresponding to the following specifications :
 Type (rfmeth) =  4
 ider qphon(3)         qphnrm   rfphon rfelfd rfstrs
   1  0.00  0.00  0.00  0.00      0      0      0
 gtblk9 : enter gtblk9
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1   27    1   28 7369
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1   27    2   28 7459
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    1   27    3   28 7549
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2   27    1   28 7370
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2   27    2   28 7460
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    2   27    3   28 7550
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    3   27    1   28 7371
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    3   27    2   28 7461
 gtblk9 : COMMENT -
  The blok     1 does not match the requirement
  because it lacks the element with
  idir1,ipert1,idir2,ipert2,index=    3   27    3   28 7551
 gtblk9 :
  Unable to find block corresponding to the following specifications :
 Type (rfmeth) =  1
 ider qphon(3)         qphnrm   rfphon rfelfd rfstrs
   1  0.00  0.00  0.00  0.00      0      0      3
   2 -0.00 -0.00 -0.00  0.00      0      0      3

 Elastic Tensor (clamped ion) (unit:10^2GP):

   0.0000000   0.0000000   0.0000000   0.0000000   0.0000000   0.0000000
   0.0000000   0.0000000   0.0000000   0.0000000   0.0000000   0.0000000
   0.0000000   0.0000000   0.0000000   0.0000000   0.0000000   0.0000000
   0.0000000   0.0000000   0.0000000   0.0000000   0.0000000   0.0000000
   0.0000000   0.0000000   0.0000000   0.0000000   0.0000000   0.0000000
   0.0000000   0.0000000   0.0000000   0.0000000   0.0000000   0.0000000

 Elastic Tensor (relaxed ion) (unit:10^2GP):
  (at fixed electric field boundary condition)

         NaN         NaN         NaN         NaN         NaN         NaN
         NaN         NaN         NaN         NaN         NaN         NaN
         NaN         NaN         NaN         NaN         NaN         NaN
         NaN         NaN         NaN         NaN         NaN         NaN
         NaN         NaN         NaN         NaN         NaN         NaN
         NaN         NaN         NaN         NaN         NaN         NaN

  The LAPACK routine dgetrf failed.
  Action : Contact ABINIT group

 leave_new : decision taken to exit ...
