
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

 read the DDB information and perform some checks

-begin at tcpu      0.019  and twall      0.020 sec

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  4.1710296  4.1710296  G(1)= -0.1198745  0.1198745  0.1198745
 R(2)=  4.1710296  0.0000000  4.1710296  G(2)=  0.1198745 -0.1198745  0.1198745
 R(3)=  4.1710296  4.1710296  0.0000000  G(3)=  0.1198745  0.1198745 -0.1198745
 Unit cell volume ucvol=  1.4513087E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 Now the whole DDB is in central memory

================================================================================

 Dielectric Tensor and Effective Charges 

-begin at tcpu      0.022  and twall      0.022 sec

 Metallic case : effective charges are set to 0

================================================================================

 Calculation of the interatomic forces 

-begin at tcpu      0.022  and twall      0.022 sec
       Homogeneous q point set in the B.Z.
 Grid q points  :        8
  1)   0.00000000E+00  0.00000000E+00  0.00000000E+00
  2)   5.00000000E-01  0.00000000E+00  0.00000000E+00
  3)   0.00000000E+00  5.00000000E-01  0.00000000E+00
  4)   5.00000000E-01  5.00000000E-01  0.00000000E+00
  5)   0.00000000E+00  0.00000000E+00  5.00000000E-01
  6)   5.00000000E-01  0.00000000E+00  5.00000000E-01
  7)   0.00000000E+00  5.00000000E-01  5.00000000E-01
  8)   5.00000000E-01  5.00000000E-01  5.00000000E-01
