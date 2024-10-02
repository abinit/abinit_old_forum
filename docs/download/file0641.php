ecut 30
#Definition of the planewave basis set
kptopt 1
ngkpt 4 4 1  # only calculate one k point(0 0 0)

# Dataset1: usual self-consistent ground-state calculation with
# optimization of ionic positions

prtden  1         # Print the density, for use by dataset 2
ionmov  2         # Conduct structural optimization
optcell 0         # Optimization of the ionic positions only
ecutsm  0.5       # Energy cutoff smearing
ntime   20        # number of structural optimization steps
natfix  80  # there are 5 atoms fixed in the positions
iatfix  1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 34 35 36 37 38 49 50 51 51 53 54 55 56 57 58 59 60 61 62 63 64 65 66 67 68 69 70 71 72 73 74 75 80 81 82 84 85 86 87 88 89 90 91 92 93 94 95 96   # the index of the  atoms are fixed in the position.



#Definition of the unit cell
acell 14.7253 16.97692 13 Angstrom
rprim  1.0     0.0   0.0   # primitive vectors (to be scaled by acell)
       0.0     1.0   0.0
       0.0     0.0   1.0

chkprim 0
#Definition of the atom types
ntypat 2          # There is only one type of atom
znucl 6 1          # The keyword "znucl" refers to the atomic number of the
                  # possible type(s) of atom. The pseudopotential(s)
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Hydrogen.
natom 112          # There are two atoms


#Definition of the atoms
typat 99*1 1*2 1*1 1*2 1*1 1*2 1*1 2*2 2*1 3*2       # For the first dataset, both numbers will be read,
                  # while for the second dataset, only one number will be read
xangst   0.5000    1.2074         0
    0.5000    2.6221         0
    1.7252    3.3295         0
    1.7252    0.5000         0
    2.9504    1.2074         0
    5.4008    1.2074         0
    2.9504    2.6221         0
    5.4008    2.6221         0
    4.1756    3.3295         0
    6.6260    3.3295         0
    4.1756    0.5000         0
    6.6260    0.5000         0
    0.5000    5.4516         0
    0.5000    6.8663         0
    1.7252    7.5737         0
    1.7252    4.7442         0
    2.9504    5.4516         0
    5.4008    5.4516         0
    2.9504    6.8663         0
 5.4008    6.8663         0
    4.1756    7.5737         0
    6.6260    7.5737         0
    4.1756    4.7442         0
    6.6260    4.7442         0
    7.8512    1.2074         0
    7.8512    2.6221         0
    9.0764    3.3295         0
    9.0764    0.5000         0
   10.3016    1.2074         0
   12.7520    1.2074         0
   10.3016    2.6221         0
   12.7520    2.6221         0
   11.5268    3.3295         0
   13.9772    3.3295         0
   11.5268    0.5000         0
   13.9772    0.5000         0
    7.8512    5.4516         0
    7.8512    6.8663         0
9.0764    7.5737         0
    9.0764    4.7442         0
   10.3016    5.4516         0
   12.7520    5.4516         0
   10.3016    6.8663         0
   12.7520    6.8663         0
   11.5268    7.5737         0
   13.9772    7.5737         0
   11.5268    4.7442         0
   13.9772    4.7442         0
    0.5000    9.6958         0
    0.5000   11.1106         0
    1.7252   11.8179         0
    1.7252    8.9885         0
    2.9504    9.6958         0
    5.4008    9.6958         0
    2.9504   11.1106         0
    5.4008   11.1106         0
    4.1756   11.8179         0
6.6260   11.8179         0
    4.1756    8.9885         0
    6.6260    8.9885         0
    0.5000   13.9401         0
    0.5000   15.3548         0
    1.7252   16.0622         0
    1.7252   13.2327         0
    2.9504   13.9401         0
    5.4008   13.9401         0
    2.9504   15.3548         0
    5.4008   15.3548         0
    4.1756   16.0622         0
    6.6260   16.0622         0
    4.1756   13.2327         0
    6.6260   13.2327         0
    7.8512    9.6958         0
    7.8512   11.1106         0
    9.0764   11.8179         0
    9.0764    8.9885         0
 10.3016    9.6958         0
   12.7520    9.6958         0
   10.3016   11.1106         0
   12.7520   11.1106         0
   11.5268   11.8179         0
   13.9772   11.8179         0
   11.5268    8.9885         0
   13.9772    8.9885         0
    7.8512   13.9401         0
    7.8512   15.3548         0
    9.0764   16.0622         0
    9.0764   13.2327         0
   10.3016   13.9401         0
   12.7520   13.9401         0
   10.3016   15.3548         0
   12.7520   15.3548         0
   11.5268   16.0622         0
   13.9772   16.0622         0
   11.5268   13.2327         0
13.9772   13.2327         0
   11.5238    4.7408    3.392
   12.7409    5.4448    3.392
   10.3056    5.4478    3.392
   11.5233    3.7191    3.392
   12.7406    6.8523    3.392
   13.6260    4.9344    3.392
   10.3033    6.8534    3.392
    9.4203    4.9376    3.392
   11.5238    7.5693    3.392
   13.6273    7.3601    3.392
    9.4350    7.3448    3.392
   11.5574    9.0089    3.392
   10.4100    9.7870    3.392
   12.4655    9.4775    3.392
   10.4844   10.8055    3.392
   9.50876480    9.35899340    3.392

#Definition of the SCF procedure
nstep 100          # Maximal number of SCF cycles
diemac 4          # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle.
                  # dielectric constant of graphene acc. to
                  # Phys. Rev. B 75, 205418 (2007)
toldff  5.0d-6    # tolerance for differences, stopping criterion



