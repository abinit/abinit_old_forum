!Input file for the anaddb code. Analysis of the GaN DDB

!Flags
 ifcflag   0     ! Interatomic force constant flag


!Effective charges
     asr   1     ! Acoustic Sum Rule. 1 => imposed asymetrically
  chneut   1     ! Charge neutrality requirement for effective charges.

!Interatomic force constant info
  dipdip  0      ! Dipole-dipole interaction treatment

!Phonon band structure output for band2eps - See note near end for
! dealing with gamma LO-TO splitting issue.
   eivec  1

!Wavevector list number 1 (Reduced coordinates and normalization factor)
   nph1l    1      ! number of phonons in list 1
   qph1l   0.0000  0.0000  0.0000   1.0    !(gamma point)
~                                                                
