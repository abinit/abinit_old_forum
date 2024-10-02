# Crystalline Zinc : SADECE KSS FİLE VE SCR DOSYALAIR OLUŞTURULACAK 

# nband ı 1. ve 2. döngüde program hesaplıyor  ***********


ndtset 3





#***********************usual self consistenet calculation and density ****************************

kptopt   1            # Option for the automatic generation of k points,

ngkpt   5 5 5
  
nshiftk 1

shiftk  0.0 0.0 0.0 

        
# Definition of the SCF procedure

nbandkss1   300         # Number of bands in KSS file (-1 means the maximum possible)
nband1      20         # Number of (occ and empty) bands to be computed


#*************************************************************************************************************

#Dataset 2 : the band structure


optdriver2  3        # Screening calculation
getkss2     -1       # Obtain KSS file from previous dataset
nband2      100       # Bands to be used in the screening calculation
ecutwfn2    60      # Cut-off energy of the planewave set to represent the wavefunctions. It would be more convenient to keep the default ecut value.
ecuteps2    60      # Cut-off energy of the planewave set to represent the dielectric matrix. It is important to adjust this parameter.
ppmfrq2    16.7 eV  # Imaginary frequency where to calculate the screening
awtr2       0       # Note : the default awtr 1 is better
enunit2  1             # Will output the eigenenergies in eV 


#**************************************************************************
optdriver3  4        # Self-Energy calculation
getkss3     -2       # Obtain KSS file from dataset 1
getscr3     -1       # Obtain SCR file from previous dataset
nband3      100       # Bands to be used in the Self-Energy calculation
ecutwfn3     60     # Planewaves to be used to represent the wavefunctions. It would be ore convenient to keep the default ecut value.
ecutsigx3    60     # Dimension of the G sum in Sigma_x. It would be better to keep the default ecut value.
                     # (the dimension in Sigma_c is controlled by ecuteps)
nkptgw3      1                # number of k-point where to calculate the GW correction
kptgw3                       # k-points
 0.000    0.000    0.000
bdgw3       18 19             # calculate GW corrections for bands from 18 to 19
enunit3  1             # Will output the eigenenergies in eV 

********************************

#kptopt   1
#nshiftk  1
#shiftk   0.5 0.5 0.5
#shiftk   0.0 0.0 0.5
#shiftk    0.0 0.0 0.0

#ngkpt 4 4 4

#Starting approximation for the unit cell
acell   6.0574167984E+00  6.0574167984E+00  9.7608146780E+00 Bohr


rprim   0.866025403784439  0.5  0.0   #hexagonal primitive vectors must be
       -0.866025403784439  0.5  0.0   #specified with high accuracy to be
        0.0                0.0  1.0   #and preserved in the optimization

# Definition of the atom types

ntypat 2
znucl  8 30 25
natom    4
typat 2 2 1 1

npsp 3
ntypalch 1
mixalch 0.99 0.01
istwfk  *1         # This is mandatory in all the GW steps.
symmorphi 0

xred                   3.3333333333E-01  6.6666666667E-01 -1.9923817986E-03
                       6.6666666667E-01  3.3333333333E-01  4.9800761820E-01
                       3.3333333333E-01  6.6666666667E-01  3.7699238182E-01
                       6.6666666667E-01  3.3333333333E-01  8.7699238182E-01



# Definition of the k-point grid
 #nkpt    10


ecut 60
nstep   25
toldfe  1.0d-6
diemac  12.0






iscf 5
