# ICE Ih
# Calculation of the GW corrections
# Dataset 1: ground state calculation and calculation of the KSS file for 10 k-points in IBZ
# Dataset 2: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 3: calculation of the Self-Energy matrix elements (GW corrections)

ndtset      3

# Definition of parameters for the calculation of the KSS file
kssform1     3
#nbandkss1    -1       # Number of bands in KSS file (-1 means the maximum possible)
#nband1       150       # Number of (occ and empty) bands to be computed
nbdbuf1      5
tolwfr1  1.0d-8 # 1.0d-18     # Will stop when this tolerance is achieved 

# Calculation of the screening (epsilon^-1 matrix)
optdriver2  3        # Screening calculation
getkss2     -1       # Obtain KSS file from previous dataset
#nband2      17      # Bands to be used in the screening calculation
ecutwfn2    2.1      # Cut-off energy of the planewave set to represent the wavefunctions. It would be more convenient to keep the default ecut value.
ecuteps2    3.6      # Cut-off energy of the planewave set to represent the dielectric matrix. It is important to adjust this parameter.
ppmfrq2    16.7 eV   # Imaginary frequency where to calculate the screening
awtr2       0        # Note : the default awtr 1 is better

# Calculation of the Self-Energy matrix elements (GW corrections)
optdriver3  4        # Self-Energy calculation
getkss3     -2       # Obtain KSS file from dataset 1
getscr3     -1       # Obtain SCR file from previous dataset
#nband3       10       # Bands to be used in the Self-Energy calculation
ecutwfn3     5.0     # Planewaves to be used to represent the wavefunctions. It would be ore convenient to keep the default ecut value.
ecutsigx3    6.0     # Dimension of the G sum in Sigma_x. It would be better to keep the default ecut value.
                     # (the dimension in Sigma_c is controlled by ecuteps)
#nkptgw3      1       # number of k-point where to calculate the GW correction
#kptgw3               # k-points
#  -0.125    0.000    0.000
bdgw3       78  83     # calculate GW corrections for bands from 4 to 5
icutcoul3   3        # old deprecated value of icutcoul, only used for legacy



# Data common to the three different datasets

# Definition of the unit cell: fcc -- nun hexagonal
#acell  3*10.217        # This is equivalent to   10.217 10.217 10.217
#rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
#       0.5  0.0  0.5   
#
acell   7.82  7.82  7.36 Angstrom
#rprim  7.82000000  -3.91000000  0.00000000
#       0.00000000   6.77231866  0.00000000
#       0.00000000   0.00000000  7.36000000
Angdeg   90  90 120
ntypat 2
typat 2 2 2 2 2 2 2 2 2 2 2 2 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1
znucl 8 1      

xangst 
      2.257439552549E+00 -1.303333333344E+00  4.600000000000E-01
     -2.257439552549E+00  1.303333333344E+00 -3.220000000000E+00
      2.220446049250E-16  2.606666666688E+00  4.600000000000E-01
     -2.257439552549E+00 -1.303333333344E+00  4.600000000000E-01
      2.257439552549E+00  1.303333333344E+00 -3.220000000000E+00
     -2.220446049250E-16 -2.606666666688E+00 -3.220000000000E+00
     -2.257439552531E+00  1.303333333333E+00 -4.600000000000E-01
      2.257439552531E+00 -1.303333333333E+00  3.220000000000E+00
      0.000000000000E+00 -2.606666666666E+00 -4.600000000000E-01
      2.257439552531E+00  1.303333333333E+00 -4.600000000000E-01
     -2.257439552531E+00 -1.303333333333E+00  3.220000000000E+00
      0.000000000000E+00  2.606666666666E+00  3.220000000000E+00
      2.257439552549E+00 -1.303333333344E+00  1.280640000000E+00
     -2.257439552549E+00  1.303333333344E+00 -2.399360000000E+00
      2.220446049250E-16  2.606666666688E+00  1.280640000000E+00
     -2.257439552549E+00 -1.303333333344E+00  1.280640000000E+00
      2.257439552549E+00  1.303333333344E+00 -2.399360000000E+00
     -2.220446049250E-16 -2.606666666688E+00 -2.399360000000E+00
      2.966275572026E+00 -1.712580000000E+00  1.913600000000E-01
     -2.966275572026E+00  1.712580000000E+00 -3.488640000000E+00
      4.440892098501E-16  3.425160000000E+00  1.913600000000E-01
     -2.966275572026E+00 -1.712580000000E+00  1.913600000000E-01
      2.966275572026E+00  1.712580000000E+00 -3.488640000000E+00
     -4.440892098501E-16 -3.425160000000E+00 -3.488640000000E+00
     -1.544088653932E+00  1.712580000000E+00 -1.840000000000E-01
      1.544088653932E+00 -1.712580000000E+00  3.496000000000E+00
     -7.110934590474E-01 -2.193510000000E+00 -1.840000000000E-01
      2.255182112979E+00  4.809300000000E-01 -1.840000000000E-01
     -2.255182112979E+00 -4.809300000000E-01  3.496000000000E+00
      7.110934590474E-01  2.193510000000E+00  3.496000000000E+00
      2.255182112979E+00 -4.809300000000E-01  3.496000000000E+00
     -1.544088653932E+00 -1.712580000000E+00  3.496000000000E+00
     -7.110934590474E-01  2.193510000000E+00  3.496000000000E+00
      7.110934590474E-01 -2.193510000000E+00 -1.840000000000E-01
      1.544088653932E+00  1.712580000000E+00 -1.840000000000E-01
     -2.255182112979E+00  4.809300000000E-01 -1.840000000000E-01
natom 36
                     
#-------------------------------------------------------
# Definition of the k-point grid
####nkpt    10
#ngkpt   4 4 4  
#nshiftk 4
#shiftk  0.5 0.5 0.5  # These shifts will be the same for all grids
#        0.5 0.0 0.0
#        0.0 0.5 0.0
#        0.0 0.0 0.5
istwfk  *1         # This is mandatory in all the GW steps.

# Use only symmorphic operations
symmorphi 0

# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut 8.0          # Maximal kinetic energy cut-off, in Hartree

# Definition of the SCF procedure
nstep   30        # Maximal number of SCF cycles
#toldfe  1.0d-6    # Will stop when this tolerance is achieved on total energy
diemac  3.0      # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.


# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  iscf 5


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tgw1_1.out, tolnlines= 70, tolabs=  1.010e-03, tolrel=  3.000e-02
#%% psp_files = 14si.pspnc
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% authors = 
#%% keywords = GW 
#%% description = 
#%%<END TEST_INFO>
