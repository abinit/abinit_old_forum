# Iron Non magnetic ABCAB Fix height

# Number of dataset

# Definition of the primitive cell

 acell  4.7649949801 9.5299899602 15.7
 rprim 1    0    0
      -0.5  0.86602540378444 0
       0     0     1
# Definition of the atom type

  ntypat 2
  znucl 28 26 

# Definition of the magnetisation

  spinat 0.0 0.0 2.0 #Nickel
         0.0 0.0 4.0 #Fer
         0.0 0.0 2.0 #Nickel
         0.0 0.0 4.0 #Fer
         0.0 0.0 2.0 #Nickel
         0.0 0.0 4.0 #Fer
         0.0 0.0 2.0 #Nickel
         0.0 0.0 4.0 #Fer
         0.0 0.0 2.0 #Nickel
         0.0 0.0 4.0 #Fer
  nsppol 2
  nspden 2

# Definition of the atoms

  natom 10
  typat 1 2 1 2 1 2 1 2 1 2   # This atom is of type 1, that is, Aluminum

  xred                  0                         0                         0
                        0                       0.5                         0
                      1/3                       1/3                       1/5
            1/3                                  5/6                       1/5
            2/3                                  1/6                       2/5
            2/3                                  1/6                       2/5
            2/3                                  4/6                       2/5
              0                                    0                       3/5
              0                                  0.5                       3/5
            1/3                                  1/3                       4/5
            1/3                                  5/6                       4/5

  natfix 1
  iatfix 10
  natfixx 9
  iatfixx 1 2 3 4 5 6 7 8 9 
  natfixy 9
  iatfixy 1 2 3 4 5 6 7 8 9
  nsym 1
# Definition of ecut

  ecut 16
  pawecutdg 50

#Exchange-correlation functional

  ixc 11

# Definition of the k-point grid and occupation

  nband 60 # 45
  tsmear 0.01
  kptopt 1
  occopt 7
  nshiftk 1
  shiftk 0.5 0.5 0.5
  ngkpt 10 8 4
# Optimization of the cell

  ionmov 2
  ecutsm 0.5
  tolmxf 1.0d-5
  ntime 50
  optcell 0

# SCF
  nstep 50
  tolvrs 1.0d-12

