!Flags
 ifcflag   1     ! Interatomic force constant flag
 eivec     1     ! Write the phonon eigenvectors

!Effective charges
     asr   1     ! Acoustic Sum Rule. 1 => imposed asymetrically
  chneut   2     ! Charge neutrality requirement for effective charges.
                 !        2=> imposed with weights proportional to screening)
 
!Interatomic force constant info
  dipdip  1         ! no Dipole-dipole interaction treatment
  ifcana  1         ! Analysis of the IFCs
  ifcout 24         ! Number of IFC's written in the output, per atom
  natifc  1         ! Number of atoms in the cell for which ifc's are analysed
   atifc  1         ! List of atoms
 
!Wavevector grid number 1 (coarse grid, from DDB)
  brav    3         ! Bravais Lattice : 1-S.C., 2-F.C., 3-B.C., 4-Hex.)
  ngqpt   1 1 1     ! Monkhorst-Pack indices
  nqshft  2         ! number of q-points in repeated basic q-cell
  q1shft  0.25  0.25  0.25
         -0.25 -0.25 -0.25
 
!Wavevector grid number 2 (series of fine grids, extrapol. from intrat forces)
  ng2qpt   128 128 128  ! sample the BZ up to ngqpt2
  ngrids   3            ! number of grids of increasing size
  q2shft   0.5 0.5 0.5

!Wavevector list number 2 (Cartesian coordinates and normalization factor)
# nph2l 3                   ! number of phonons in list 2
# qph2l 1.0 0.0 0.0  0.0
#       0.0 1.0 0.0  0.0
#       0.0 0.0 1.0  0.0

!Wavevector list number 1 (Reduced coordinates and normalization factor)
  nph1l 72                    ! number of phonons in list 1
  qph1l
 0.00  0.00  0.00  1
 0.05  0.00  0.00  1
 0.10  0.00  0.00  1
 0.15  0.00  0.00  1
 0.20  0.00  0.00  1
 0.25  0.00  0.00  1
 0.30  0.00  0.00  1
 0.35  0.00  0.00  1
 0.40  0.00  0.00  1
 0.45  0.00  0.00  1
 0.50  0.00  0.00  1
 0.50  0.05  0.00  1
 0.50  0.10  0.00  1
 0.50  0.15  0.00  1
 0.50  0.20  0.00  1
 0.50  0.25  0.00  1
 0.50  0.30  0.00  1
 0.50  0.35  0.00  1
 0.50  0.40  0.00  1
 0.50  0.45  0.00  1
 0.50  0.50  0.00  1
 0.50  0.50  0.00  1
 0.50  0.50  0.05  1
 0.50  0.50  0.10  1
 0.50  0.50  0.15  1
 0.50  0.50  0.20  1
 0.50  0.50  0.25  1
 0.50  0.50  0.30  1
 0.50  0.50  0.35  1
 0.50  0.50  0.40  1
 0.50  0.50  0.45  1
 0.50  0.50  0.50  1
 0.45  0.45  0.45  1
 0.40  0.40  0.40  1
 0.35  0.35  0.35  1
 0.30  0.30  0.30  1
 0.25  0.25  0.25  1
 0.20  0.20  0.20  1
 0.15  0.15  0.15  1
 0.10  0.10  0.10  1
 0.05  0.05  0.05  1
 0.00  0.00  0.00  1
 0.05  0.00  0.05  1
 0.10  0.00  0.10  1
 0.15  0.00  0.15  1
 0.20  0.00  0.20  1
 0.25  0.00  0.25  1
 0.30  0.00  0.30  1
 0.35  0.00  0.35  1
 0.40  0.00  0.40  1
 0.45  0.00  0.45  1
 0.50  0.00  0.50  1
 0.45  0.05  0.50  1
 0.40  0.10  0.50  1
 0.35  0.15  0.50  1
 0.30  0.20  0.50  1
 0.25  0.25  0.50  1
 0.20  0.30  0.50  1
 0.15  0.35  0.50  1
 0.10  0.40  0.50  1
 0.05  0.45  0.50  1
 0.00  0.50  0.50  1
 0.05  0.45  0.45  1
 0.10  0.40  0.40  1
 0.15  0.35  0.35  1
 0.20  0.30  0.30  1
 0.25  0.25  0.25  1
 0.30  0.20  0.20  1
 0.35  0.15  0.15  1
 0.40  0.10  0.10  1
 0.45  0.05  0.05  1
 0.50  0.00  0.00  1
