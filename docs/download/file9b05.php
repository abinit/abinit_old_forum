!Input file for the anaddb code. Analysis of the SiO2 DDB                       

!Flags
 ifcflag   1     ! Interatomic force constant flag

!Wavevector grid number 1 (coarse grid, from DDB)
  brav    1      ! Bravais Lattice : 1-S.C., 2-F.C., 3-B.C., 4-Hex.)
  ngqpt   4  4  4   ! Monkhorst-Pack indices
  nqshft  1         ! number of q-points in repeated basic q-cell
  q1shft  3*0.0

!Effective charges
     asr   1     ! Acoustic Sum Rule. 1 => imposed asymetrically
  chneut   1     ! Charge neutrality requirement for effective charges.

!Interatomic force constant info
  dipdip  1      ! Dipole-dipole interaction treatment

!Phonon band structure output for band2eps - See note near end for
! dealing with gamma LO-TO splitting issue.
   eivec  4

!Wavevector list number 1 (Reduced coordinates and normalization factor)         
  nph1l    71      ! number of phonons in list 1                             

  qph1l   0.0000  0.0000  0.0000   1.0    !(gamma point)
          0.0500  0.0500  0.0000   1.0
          0.1000  0.1000  0.0000   1.0
          0.1500  0.1500  0.0000   1.0
          0.2000  0.2000  0.0000   1.0
          0.2500  0.2500  0.0000   1.0
          0.3000  0.3000  0.0000   1.0
          0.3500  0.3500  0.0000   1.0
          0.4000  0.4000  0.0000   1.0
          0.4500  0.4500  0.0000   1.0
          0.5000  0.5000  0.0000   1.0    !(M point)
          0.4500  0.5000  0.0000   1.0
          0.4000  0.5000  0.0000   1.0
          0.3500  0.5000  0.0000   1.0
          0.3000  0.5000  0.0000   1.0
          0.2500  0.5000  0.0000   1.0
          0.2000  0.5000  0.0000   1.0
          0.1500  0.5000  0.0000   1.0
          0.1000  0.5000  0.0000   1.0
          0.0500  0.5000  0.0000   1.0
          0.0000  0.5000  0.0000   1.0    !(X point)
          0.0000  0.4500  0.0000   1.0
          0.0000  0.4000  0.0000   1.0
          0.0000  0.3500  0.0000   1.0
          0.0000  0.3000  0.0000   1.0
          0.0000  0.2500  0.0000   1.0
          0.0000  0.2000  0.0000   1.0
          0.0000  0.1500  0.0000   1.0
          0.0000  0.1000  0.0000   1.0
          0.0000  0.0500  0.0000   1.0
          0.0000  0.0000  0.0000   1.0    !(gamma point)
          0.0000  0.0000  0.0500   1.0
          0.0000  0.0000  0.1000   1.0
          0.0000  0.0000  0.1500   1.0
          0.0000  0.0000  0.2000   1.0
          0.0000  0.0000  0.2500   1.0
          0.0000  0.0000  0.3000   1.0
          0.0000  0.0000  0.3500   1.0
          0.0000  0.0000  0.4000   1.0
          0.0000  0.0000  0.4500   1.0
          0.0000  0.0000  0.5000   1.0    !(Z point)
          0.0500  0.0000  0.5000   1.0
          0.1000  0.0000  0.5000   1.0
          0.1500  0.0000  0.5000   1.0
          0.2000  0.0000  0.5000   1.0
          0.2500  0.0000  0.5000   1.0
          0.3000  0.0000  0.5000   1.0
          0.3500  0.0000  0.5000   1.0
          0.4000  0.0000  0.5000   1.0
          0.4500  0.0000  0.5000   1.0
          0.5000  0.0000  0.5000   1.0    !(R point)
          0.5000  0.0500  0.5000   1.0
          0.5000  0.1000  0.5000   1.0
          0.5000  0.1500  0.5000   1.0
          0.5000  0.2000  0.5000   1.0
          0.5000  0.2500  0.5000   1.0
          0.5000  0.3000  0.5000   1.0
          0.5000  0.3500  0.5000   1.0
          0.5000  0.4000  0.5000   1.0
          0.5000  0.4500  0.5000   1.0
          0.5000  0.5000  0.5000   1.0    !(A point)
          0.4500  0.4500  0.4500   1.0
          0.4000  0.4000  0.4000   1.0
          0.3500  0.3500  0.3500   1.0
          0.3000  0.3000  0.3000   1.0
          0.2500  0.2500  0.2500   1.0
          0.2000  0.2000  0.2000   1.0
          0.1500  0.1500  0.1500   1.0
          0.1000  0.1000  0.1000   1.0
          0.0500  0.0500  0.0500   1.0
          0.0000  0.0000  0.0000   1.0    !(Gamma point)

!Wavevector list number 2 (Cartesian directions for non-analytic gamma phonons)

!The output for this calculation must be cut-and-pasted into the
! t59_out.freq file to be used as band2eps input to get proper LO-TO 
! splitting at gamma.  Note that gamma occurrs twice.

  nph2l    1       ! number of directions in list 2

  qph2l   0.0  0.0  1.0    0.0
# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  symdynmat 0
