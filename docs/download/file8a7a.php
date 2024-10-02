 tbasepar_1o_DS2_BLZTRP                                                          XXXXXXXX
 dos normalization:    1.0000000000000000     
 About to call read_input
=================== INPUT VARIABLES ======================
 Bandstyle: GENE     
Set fermi:   0
Debug:  0
FermiE: -0.1143. step size: 0.0005 Ecut: 1.5000. # val. e:   60.000
Run type: CALC
Fourier expansion factor: 13
Calc type: BOLTZ
Fermi level range: (Ry)  0.5000
Max temperature: (K)  900.0 Temp step: (K) 50.0
Range around Ef where bands are given individual output (Ry)  0.0000
HISTO used for calculation of DOS
    3 doping levels will be used
 Doping levels to be output for, in carriers / cm^3:
-0.100E+17 0.000E+00 0.100E+17
=========================================================
 Band style: GENE     
  1  0  0         1
  0  1  0
  0  0  1

  1  0  0         2
  0  1  0
  0  0  1

  1  0  0         3
  0  1  0
  0  0  1

  0 -1  0         4
  1 -1  0
  0  0  1

  0 -1  0         5
  1 -1  0
  0  0  1

  0 -1  0         6
  1 -1  0
  0  0  1

 -1  1  0         7
 -1  0  0
  0  0  1

 -1  1  0         8
 -1  0  0
  0  0  1

 -1  1  0         9
 -1  0  0
  0  0  1

 Number of kpts in IBZ:          256
 Input file read successfully
 NON-CENTROSYMMETRIC. ADDING i
 About to call subroutine bandana
==============  OUTPUT from BANDANA       ================
Egap:     0.050140 Energy range:    -1.052371 -     0.359346. Bands range:   31 -   80
VBM:    -0.114337 CBM:    -0.064198 Efermi:    -0.114337

==============  End BANDANA           ====================
 Subroutine bandana executed successfully
 Approx number of kpts in BZ :         4608
 About to enter gen_lattpoints
 ======= OUTPUT FROM gen_lattpoints ======================
  KXMAX,KYMAX,KZMAX          37          37          13
 GMAX   253.14529278906599     
    10000 LATTICE POINTS GENERATED 

        SIZE INCLUDING STAR MEMBERS =    59947
 USED TIME:   4.8999998718500137E-002
 =============== END gen_lattpoints ======================
 Allocating engre...
 engre allocated
 About to enter fite4...
fite4 matrix setup:     0.192
 inf =            1
