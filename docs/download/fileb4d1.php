

iprcch 6

diemac 1                          # DIElectric MACroscopic constant ( metal : 10^6 / SC : 12 [>1] )
diemix 0.85d0                      # DIElectric MIXing factor ( 1 [0:1] )
pawmixdg 1
occopt 1
toldfe 1.0d-8
nstep 99
ionmov 2                          # IONic MOVEs ( 2 (BFGS) [0:12] )
tolmxf 1.0d-4                     # TOLerance on the MaXimal Force (5.0d-5)
ntime 60                          # Number of TIME steps

optcell 9                         # c vector unchanged, with a and b perp
strfact 500



ecut 30 Ry                       # cutoff (default is in eV : 1 Ry = 1/2Ht = 13.606eV)
ecutsm 1 Ry
dilatmx 1.2

iscf 17                          # 4 for andersen mixing with 2 step history (+10 : mixing on density rather than potential (for paw))



pawecutdg 50 Ry                   # PAW - Energy CUToff for the Double Grid
pawovlp -1                        # PAW overlap : <0 means always allowed

############################################# K-POINTS ##############################################

kptopt 1                          # KPoinTs OPTion (4 pour avec spin-orbit : sans TR symetry)
ngkpt 1 1 1                       # Number of Grid points for K PoinTs generation

nshiftk 1                         # Number of SHIFTs for K point grids ( 1 [1:8] )

shiftk                            # SHIFT for K points
        0.0 0.0 0.0


############################################# GEOMETRY ##############################################

chkprim 0                         # 0 = non primitive cell

acell     1 1 1    Angstrom


rprim
14.7 4.25 0
-0.2 8.5 0
0 0 8


natom 34
ntypat 3
znucl 6 1 7
typat 6*1 4*2    6*1 4*2    6*1 4*2    1 1 3 3
xangst
          5.3921899               0            0   #   C
          4.6632290        1.195281            0   #   C
          4.6632290       -1.195281            0   #   C
          3.2840275       1.2044667            0   #   C
          3.2840275      -1.2044667            0   #   C
          2.5768084               0            0   #   C
          5.1880114       2.1565707            0   #   H
          5.1880114      -2.1565707            0   #   H
          2.7325410       2.1511559            0   #   H
          2.7325410      -2.1511559            0   #   H

          9.7134699               0            0   #   C
          8.9767633       1.1884804            0   #   C
          8.9767633      -1.1884804            0   #   C
          7.5968641       1.1884804            0   #   C
          7.5968641      -1.1884804            0   #   C
          6.8601575               0            0   #   C
          9.4932655       2.1546612            0   #   H
          9.4932655      -2.1546612            0   #   H
          7.0803619       2.1546612            0   #   H
          7.0803619      -2.1546612            0   #   H

         13.9968190               0            0   #   C
         13.2895999       1.2044667            0   #   C
         13.2895999      -1.2044667            0   #   C
         11.9103984        1.195281            0   #   C
         11.9103984       -1.195281            0   #   C
         11.1814375               0            0   #   C
         13.8410864       2.1511559            0   #   H
         13.8410864      -2.1511559            0   #   H
         11.3856160       2.1565707            0   #   H
         11.3856160      -2.1565707            0   #   H

         15.4116954               0            0   #   C
          1.1619320               0            0   #   C

         16.5736274               0            0   #   N
          0.0000000               0            0   #   N




iatfix 34
natfix
     1  2  3  4  5  6  7  8  9
 10 11 12 13 14 15 16 17 18 19
 20 21 22 23 24 25 26 27 28 29
 30 31 32 33 34


