# Tetragonal ZrO2 -- Vanderbilt ultrasoft PP
# positively charged Oxygen vacancy (V+)
# Calculation of the GW correction to the band gap
# Dataset 1: ground state calculation 
# Dataset 2: calculation of the kss file 
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 4: calculation of the Self-Energy matrix elements (GW corrections)

ndtset 3

jdtset 2 3 4 

charge 1

# Definition of the planewave basis set (at convergence ca. 30.0 Hartree)
ecut 15              # Maximal kinetic energy cut-off, in Hartree

pawecutdg 40         # Must be larger or equal to ecut
 
#xc functional (exchange and correlation) 
ixc 7                # 1  LDA or LSD, Teter Pade parametrization
                     #    (4/93, published in S. Goedecker, M. Teter, J. Huetter,
                     #    Phys.Rev.B54, 1703 (1996)), which reproduces Perdew-Wang
                     #    (which reproduces Ceperley-Alder)
                     # 2  LDA, Perdew-Zunger-Ceperley-Alder (no spin-polarization)
                     # 7  LDA or LSD, Perdew-Wang 92 functional

kptopt   1           # Option for the automatic generation of k points
ngkpt    1 1 1       # Density of k points

# Dataset1: usual self-consistent ground-state calculation
# Definition of the k-point grid
nshiftk  1 
shiftk   0.0 0.0 0.0 
prtden1  1           # Print out density


# Dataset2: calculation of kss file
# Definition of k-points
istwfk    *1         # Option needed for Gamma
iscf2    -2          # Non self-consistent calculation
getden2 1            # Read previous density file
nband2 800
occopt 0
occ 380*2 1 *0 
nbandkss2 800        # Number of bands to store in KSS file
kssform2  3 

gwpara   2           # Parallelisation over bands
 
awtr     0           # no time-reversal symmetry

# Dataset3: Calculation of the screening (epsilon^-1 matrix)
optdriver3 3         # Screening calculation
getkss3 2            # Obtain KSS file from previous dataset
nband3 730           # Bands to be used in the screening calculation
ecutwfn3 10          # Planewaves to be used to represent the wavefunctions
ecuteps 11           # Dimension of the screening matrix
ppmfrq 23.9 eV       # Imaginary frequency where to calculate the screening
                     # FIXME reference needed
                     # If the plasmon-pole approximation is good, then, the choice of
                     # ppmfrq should have no influence on the final result.
inclvkb3 0                      

# Dataset4: Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4 4         # Self-Energy calculation
getkss4 2            # Obtain KSS file from dataset 1
getscr4 3            # Obtain SCR file from previous dataset
nband4 700           # Bands to be used in the Self-Energy calculation
ecutwfn4 20          # Planewaves to be used to represent the wavefunctions
ecutsigx4 22         # Dimension of the G sum in Sigma_x
                     # (the dimension in Sigma_c is controlled by npweps)
nkptgw4      1       # number of k-point where to calculate the GW correction
kptgw4               # k-points
       0.0  0.0  0.0 # (Gamma)
bdgw4 384 385        # calculate GW corrections for bands from 24 to 25

# ABINIT input data

# Definition of the unit cell
acell
  19.0092057454 19.0093228873 19.3154561563 bohr
rprim
   1.0000000000  0.0000164330 -0.0000260513 
  -0.0000164345  1.0000000000 -0.0000480532 
   0.0000268966  0.0000496139  1.0000000000 

# Definition of the atoms
natom 95
typat 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 
xred
   0.1237990000  0.1246260000  0.1479690000 
   0.1238460000  0.1246860000  0.6465790000 
   0.1237310000  0.6246360000  0.1469200000 
   0.1238380000  0.6246770000  0.6475080000 
   0.6238110000  0.1246000000  0.1469200000 
   0.6238240000  0.1247250000  0.6475080000 
   0.6237360000  0.6245990000  0.1500490000 
   0.1198980000  0.3764970000  0.3522650000 
   0.1243080000  0.3749490000  0.8519530000 
   0.1278110000  0.8736700000  0.3522930000 
   0.1233310000  0.8753050000  0.8519700000 
   0.6203180000  0.3747790000  0.3509110000 
   0.6237410000  0.3723820000  0.8521850000 
   0.6274380000  0.8753050000  0.3509440000 
   0.6239070000  0.8777790000  0.8521440000 
   0.1241290000  0.3746420000  0.1017640000 
   0.1249580000  0.3752310000  0.6014550000 
   0.1236880000  0.8747030000  0.1017820000 
   0.1228570000  0.8741570000  0.6014560000 
   0.6242120000  0.3755430000  0.1011970000 
   0.6306190000  0.3895940000  0.6029370000 
   0.6235450000  0.8736930000  0.1011900000 
   0.6171870000  0.8599410000  0.6028800000 
   0.1239280000  0.1250410000  0.3965990000 
   0.1239600000  0.1250650000  0.8980660000 
   0.1238870000  0.6250810000  0.3989740000 
   0.1239670000  0.6250790000  0.8976750000 
   0.6239310000  0.1250560000  0.3989740000 
   0.6239550000  0.1250360000  0.8976740000 
   0.6238180000  0.6250420000  0.4114620000 
   0.6239590000  0.6249960000  0.8905360000 
   0.3753810000  0.1209950000  0.3522870000 
   0.3738040000  0.1254890000  0.8519640000 
   0.3736390000  0.6213890000  0.3509510000 
   0.3712840000  0.6248950000  0.8521910000 
   0.8725530000  0.1289130000  0.3522710000 
   0.8741620000  0.1245060000  0.8519620000 
   0.8741650000  0.6285140000  0.3509070000 
   0.8766830000  0.6250590000  0.8521420000 
   0.3738020000  0.1249510000  0.1017740000 
   0.3743640000  0.1257800000  0.6014700000 
   0.3746800000  0.6250240000  0.1012110000 
   0.3886650000  0.6314570000  0.6029640000 
   0.8738630000  0.1245100000  0.1017730000 
   0.8732910000  0.1236730000  0.6014400000 
   0.8728320000  0.6243560000  0.1011750000 
   0.8590110000  0.6180210000  0.6028580000 
   0.3744110000  0.3752330000  0.1458050000 
   0.3750820000  0.3759310000  0.6446020000 
   0.3741810000  0.8745020000  0.1480530000 
   0.3703050000  0.8783750000  0.6479390000 
   0.8736910000  0.3749920000  0.1480160000 
   0.8775220000  0.3711520000  0.6479340000 
   0.8734610000  0.8742820000  0.1458080000 
   0.8727830000  0.8736260000  0.6446380000 
   0.3697450000  0.3708140000  0.3934630000 
   0.3741060000  0.3752830000  0.8963450000 
   0.3774380000  0.8714320000  0.3981570000 
   0.3755100000  0.8733440000  0.8969850000 
   0.8703510000  0.3785210000  0.3981410000 
   0.8722030000  0.3766500000  0.8970110000 
   0.8780180000  0.8790920000  0.3934960000 
   0.8735840000  0.8747530000  0.8963590000 
   0.4929710000  0.4938530000  0.4941380000 
   0.4993780000  0.5001540000  0.9992350000 
   0.4993300000  0.9984660000  0.5002770000 
   0.5007020000  0.9998310000  1.0002830000 
   0.9976260000  0.5001320000  0.5002840000 
   0.9990540000  0.5014910000  1.0002530000 
   1.0006750000  1.0014630000  0.5005010000 
   0.9988000000  0.9995820000  1.0000610000 
   0.4972310000  0.2479890000  0.2486780000 
   0.4976470000  0.2491780000  0.7507550000 
   0.4982730000  0.7506990000  0.2510480000 
   0.4933120000  0.7556280000  0.7538600000 
   0.9990180000  0.2499660000  0.2493380000 
   1.0003570000  0.2486660000  0.7502760000 
   1.0009590000  0.7517820000  0.2487300000 
   0.9998360000  0.7513750000  0.7507590000 
   0.2471840000  0.4980110000  0.2486380000 
   0.2483660000  0.4984630000  0.7507670000 
   0.2491880000  0.9997980000  0.2493460000 
   0.2478590000  1.0011640000  0.7503030000 
   0.7499360000  0.4990380000  0.2509640000 
   0.7547400000  0.4942060000  0.7538290000 
   0.7510060000  1.0017600000  0.2486920000 
   0.7505660000  1.0006480000  0.7507690000 
   0.2474470000  0.2482410000  0.5005190000 
   0.2494260000  0.2502060000  1.0000520000 
   0.2505290000  0.7496480000  0.5002920000 
   0.2491450000  0.7483260000  1.0002870000 
   0.7488440000  0.2513630000  0.5002990000 
   0.7475300000  0.2499200000  1.0002580000 
   0.7549870000  0.7558640000  0.4941760000 
   0.7488240000  0.7496010000  0.9991710000 

# Definition of the atom types
ntypat 2
znucl 8 40 

chkprim 0

# Use only symmorphic operations
# symmorphi    0

# Definition of the SCF procedure
nstep        300     # Maximal number of SCF cycles
diemac       20.0    # Although this is not mandatory, it is worth to
                     # precondition the SCF cycle. The model dielectric
                     # function used as the standard preconditioner
                     # is described in the "dielng" input variable section.
tolwfr    1.0d-15
