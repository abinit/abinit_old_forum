
.Version 6.4.2  of ANADDB 
.(MPI version, prepared for a x86_64_linux_intel11.0 computer) 

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

.Starting date : Fri 30 Dec 2011.
- ( at  4h30 )
  

================================================================================

 -outvars9: echo values of input variables ----------------------

 Miscellaneous information :
       eivec         3
         asr         1
 First list of wavevector (reduced coord.) :
       nph1l         1
       qph1l
                     0.00000000E+00  0.00000000E+00  0.00000000E+00    1.000E+00

================================================================================

 read the DDB information and perform some checks

-begin at tcpu      0.064  and twall      0.063 sec

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  7.4882933  0.0000000  0.0000000  G(1)=  0.1335418  0.0000000  0.0000000
 R(2)=  0.0000000  7.4882933  0.0000000  G(2)=  0.0000000  0.1335418  0.0000000
 R(3)=  0.0000000  0.0000000  7.5786899  G(3)=  0.0000000  0.0000000  0.1319489
 Unit cell volume ucvol=  4.2497152E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 Now the whole DDB is in central memory

================================================================================

 Treat the first list of vectors 

-begin at tcpu      0.098  and twall      0.098 sec
 
  Phonon wavevector (reduced coordinates) :  0.00000  0.00000  0.00000
 Phonon energies in Hartree :
  -4.191533E-04 -4.188997E-04 -4.880787E-08  0.000000E+00  0.000000E+00
   7.719975E-04  7.957215E-04  7.957316E-04  1.187906E-03  1.248984E-03
   1.249196E-03  1.249866E-03  2.146217E-03  2.146233E-03  2.299988E-03
 Phonon frequencies in cm-1    :
- -9.199352E+01 -9.193786E+01 -1.071209E-02  0.000000E+00  0.000000E+00
-  1.694339E+02  1.746407E+02  1.746429E+02  2.607153E+02  2.741204E+02
-  2.741669E+02  2.743138E+02  4.710401E+02  4.710437E+02  5.047890E+02

 Analysis of degeneracies and characters (maximum tolerance=1.00E-06 a.u.)
 Symmetry characters of vibration mode #   1
        degenerate with vibration mode #   2
  2.0  0.0 -2.0  0.0  0.0  0.0  0.0  0.0
 Symmetry characters of vibration mode #   3
       degenerate with vibration modes #   4 to    5
  3.0  1.0 -1.0  1.0  1.0  1.0  1.0  1.0
 Symmetry characters of vibration mode #   6
  1.0  1.0  1.0  1.0  1.0  1.0  1.0  1.0
 Symmetry characters of vibration mode #   7
        degenerate with vibration mode #   8
  2.0  0.0 -2.0  0.0  0.0  0.0  0.0  0.0
 Symmetry characters of vibration mode #   9
  1.0  1.0  1.0  1.0  1.0  1.0  1.0  1.0
 Symmetry characters of vibration mode #  10
       degenerate with vibration modes #  11 to   12
  3.0  1.0 -1.0  1.0 -1.0 -1.0 -1.0 -1.0
 Symmetry characters of vibration mode #  13
        degenerate with vibration mode #  14
  2.0  0.0 -2.0  0.0  0.0  0.0  0.0  0.0
 Symmetry characters of vibration mode #  15
  1.0  1.0  1.0  1.0  1.0  1.0  1.0  1.0

================================================================================

+Total cpu time      0.105  and wall time      0.104 sec

 anaddb : the run completed succesfully.
