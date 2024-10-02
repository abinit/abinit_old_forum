#-----------------------------------------------------------
acell    42.52  9.4486  6.8596  Bohr #  (22.5  5  3.63   Angstrom) , This is a Supercell of the primitive cell ,  1 Angstrom = 1.8897259886 Bohr Atomic Unit (a.u.)

angdeg 90 90 120
ntypat 3
znucl 5 7 6
natom 41
typat 1 1 1 2 2 2 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3

rprim   0.866025403784439  0.5  0.0   #hexagonal primitive vectors #must be
        -0.866025403784439  0.5  0.0   #specified with high accuracy #to be
         0.0                0.0  1.0   #sure that the symmetry is #recognized and preserved in the optimization process

 
xangst     17.500002    1.443374    2.722500  # B  Atom,  # This is equivalent to xcart but in Angstrom  # This is a Supercell of the primitive cell
           20.000000    1.443374    2.722500  # B Atom,
           18.750000    3.608438    2.722500  # B Atom, 
           18.750002    0.721685    2.722500  # N  Atom, 
           17.500000    2.886749    2.722500  # N Atom, 
           20.000000    2.886749    2.722500  # N  Atom,
           1.250000    0.721685    0.907500  # C Atom,
          -0.000000    2.886749    0.907500  # C Atom,
           3.750000    0.721685    0.907500  # C Atom,
           2.500000    2.886749    0.907500  # C Atom,
           6.250000    0.721685    0.907500  # C Atom,
           5.000000    2.886749    0.907500  # C Atom,
           8.750000    0.721685    0.907500  # C Atom,
           7.500000    2.886749    0.907500  # C Atom,
          11.250000    0.721685    0.907500  # C Atom,
          10.000000    2.886749    0.907500  # C Atom,
          13.750001    0.721685    0.907500  # C Atom,
          12.500001    2.886749    0.907500  # C Atom,
          16.250000    0.721685    0.907500  # C Atom,
          14.999999    2.886749    0.907500  # C Atom,
          18.750002    0.721685    0.907500  # C Atom,
          17.500000    2.886749    0.907500  # C Atom,
          20.000000    2.886749    0.907500  # C Atom,
           0.000000    1.443374    0.907500  # C Atom,
          -1.250000    3.608438    0.907500  # C Atom,
           2.500000    1.443374    0.907500  # C Atom,
           1.250000    3.608438    0.907500  # C Atom,
           5.000000    1.443374    0.907500  # C Atom,
           3.750000    3.608438    0.907500  # C Atom,
           7.500000    1.443374    0.907500  # C Atom,
           6.250000    3.608438    0.907500  # C Atom,
          10.000000    1.443374    0.907500  # C Atom,
           8.750000    3.608438    0.907500  # C Atom,
          12.500001    1.443374    0.907500  # C Atom,
          11.250000    3.608438    0.907500  # C Atom,
          15.000001    1.443374    0.907500  # C Atom,
          13.750000    3.608438    0.907500  # C Atom,
          17.500002    1.443374    0.907500  # C Atom,
          16.250002    3.608438    0.907500  # C Atom,
          20.000000    1.443374    0.907500  # C Atom,
          18.750000    3.608438    0.907500  # C Atom,

chksymbreak 1

strprecon 0.1 # Stress reconditioner , for reducing the step of manipulating rprim

#-----------------------------------------------------------
ecut 60 # 95 # 76 # 61.5 # 
# ngfft 36 36 36 # Number of Grid points for Fast Fourier Transform. The default is 0 0 0 . 
ixc 1 ## Previously 3
iscf 1 # 2 # 7
nstep 12
iprcel 21 # 45
nband 88  # 192   ## We increased nband for geeting enough nband for charge balance for the Supercell ##  Including Conducting Bands  ## Previously nband 24
occopt 1  # 4
tsmear 0.04


# kptopt 1
# ngkpt 36 36 1

# Definition of the k-point grid
#   ngkpt   3 3 3  # 3x3x3 Monkhorst-Pack grid, c/b=3
#   nshiftk   1    # Use one copy of grid only (default)
#   shiftk   0.0 0.0 0.5  # This choice of origin for the k point grid preserves the hexagonal symmetry of the grid, which would have been otherwise broken by the default choice.

 kptrlatt -2  2  2      # In cartesian coordinates, this grid is simple cubic, and
          2 -2  2      # actually corresponds to the so-called 8x8x8 Monkhorst-Pack grid.
          2  2 -2      # It might as well be obtained through the use of
                       # ngkpt, nshiftk and shiftk .

# ngfft 50 50 50 

 diemac 11

#-----------------------------------------------------------
getwfk -1
optcell 0 # 9
ionmov 1 # 2 # 3
ntime 12  # 1000
# chkdilatmx == 0
dilatmx 1.10
ecutsm 0.5 eV

tolmxf 0.5d-10  # Sets a maximal absolute force tolerance (in hartree/Bohr) below which BFGS structural relaxation iterations will stop. 
               # A value of about 5.0d-5 hartree/Bohr or smaller is suggested (this corresponds to about 2.5d-3 eV/Angstrom).     

toldff 0.5d-11  # A value ten times smaller than tolmxf is suggested

prtden 1
prtwf 1
prtcif 1

