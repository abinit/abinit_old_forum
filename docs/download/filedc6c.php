!Input file for the anaddb code. Analysis of the AlAs DDB                       

!Flags
 ifcflag   1     ! Interatomic force constant flag

!Wavevector grid number 1 (coarse grid, from DDB)
  brav    3      ! Bravais Lattice : 1-S.C., 2-F.C., 3-B.C., 4-Hex.)
  ngqpt   4  4  4   ! Monkhorst-Pack indices
  nqshft  1         ! number of q-points in repeated basic q-cell
  q1shft  3*0.0

!Effective charges
     asr   1     ! Acoustic Sum Rule. 1 => imposed asymetrically
  chneut   1     ! Charge neutrality requirement for effective charges.

!Interatomic force constant info
  dipdip  1      ! Dipole-dipole interaction treatment
  ifcana  1      ! Analysis of the IFCs
  ifcout 20      ! Number of IFC's written in the output, per atom
  natifc  46      ! Number of atoms in the cell for which ifc's are analysed
   atifc  1 2 3 4 5 6 7 8 9 10
   11 12 13 14 15 16 17 18 19 20
   21 22 23 24 25 26 27 28 29 30 
   31 32 33 34 35 36 37 38 39 40 
   41 42 43 44 45 46     ! List of atoms
  
# This line added when defaults were changed (v5.3) to keep the previous, old #behaviour
  symdynmat 0

