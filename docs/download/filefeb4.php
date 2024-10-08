!Input file for the anaddb code. Analysis of the CsH2PO4 DDB

!Flags
 ifcflag   1     ! Interatomic force constant flag

!Wavevector grid number 1 (coarse grid, from DDB)
  brav    1         ! Bravais Lattice : 1-S.C., 2-F.C., 3-B.C., 4-Hex.)
  ngqpt   4  4  4   ! Monkhorst-Pack indices
  nqshft  1         ! number of q-points in repeated basic q-cell
  q1shft  0.5 0.5 0.5 

!Effective charges
     asr   2     ! Acoustic Sum Rule. 1 => imposed asymetrically
  chneut   1     ! Charge neutrality requirement for effective charges.

!Wavevector list number 2 (Cartesian directions for non-analytic gamma phonons)

  nph2l    3     ! number of directions in list 2

  qph2l   1.0  0.0  0.0    0.0
          0.0  1.0  0.0    0.0
          0.0  0.0  1.0    0.0

!Interatomic force constant info
  dipdip  1      ! Dipole-dipole interaction treatment
#  ifcana  1      ! Analysis of the IFCs
#  ifcout 20      ! Number of IFC's written in the output, per atom
#  natifc  1      ! Number of atoms in the cell for which ifc's are analysed
#   atifc  1      ! List of atoms
# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  symdynmat 0


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = anaddb
#%% test_chain = trf2_1.in, trf2_3.in, trf2_4.in, trf2_5.in, trf2_6.in, trf2_7.in
#%% input_ddb = trf2_3.ddb.out
#%% [files]
#%% files_to_test =
#%%   trf2_4.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00, fld_options=-easy
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% author =
#%% keywords =
#%% description =
#%%<END TEST_INFO>
