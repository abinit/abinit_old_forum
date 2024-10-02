#                   ##################
#                   # Ba3 Si6 O9 N4 #
#                   ##################

# Dataset 1: Calculation of the density file
# Dataset 2: calculation of the kss file for k-points in IBZ
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 4: calculation of the Self-Energy matrix elements (GW corrections)
# Dataset 5: DFT calculation at Gamma and X

ndtset  1           # 4 dataset
jdtset 4 
mqgrid 25000
# ---------------------------------------------
#| Dataset 1: Calculation of the density file |
# ---------------------------------------------

# Definition of the k-point grid
# ------------------------------

# Shifted to optimize the calculation of density

kptopt 1      # Option for the automatic generation of k points

ngkpt  16 16 16

nshiftk 1
shiftk 0 0 1/2

nbdbuf  5    
nband  90    # Specify slightly more than the occupied bands
             # to help convergence, so including the buffering bands

# -----------------------------------
#| Dataset 4 : Calculation of Sigma |
# -----------------------------------

optdriver4  4        # Calculation of the Self-Energy matrix elements (GW corrections)
nband4     450
kptopt4     1
ngkpt4    6 6 4
nshiftk4    1
shiftk4  0.0 0.0 0.0

gwcomp4    1                                                                     
gwencomp4  2 # Ha
ecuteps4   6
ecutwfn4   30        # Planewaves to be used to represent the wavefunctions
ecutsigx4  60        # Dimension of the G sum in Sigma_x
                     # (the dimension in Sigma_c is controlled by npweps)

getkss4     2        # Obtain KSS file from dataset 7
getscr4     3
ppmodel4    1        # Use Godby-Needs plasmon-pole model
ppmfrq4    23.89 eV  # Imaginary frequency where to calculate the screening
                     # Adapted after a first run of screening
gwcalctyp4  0
gwmem4     00
gwpara4     2        # Use parallellism over bands
symsigma    1        # To enable the symmetrization of the self-energy matrix elements.

nkptgw4      1       # number of k-point where to calculate the GW correction
bdgw4 70 86
kptgw4               

                       1.66666667E-01  1.66666667E-01  0.00000000E+00

# ==================================================================
# ||                                                              ||
# ||   THE INPUT VARIABLES BELOW ARE IDENTICAL FOR ALL DATASETS   ||
# ||                                                              ||
# ==================================================================

# Atoms in the base
# -----------------

ntypat 4
znucl 56.0 14.0 7.0 8.0

natom 22
typat 3*1 6*2 4*3 9*4

xred
 *****
 *****
 *****
# Definition of the unit cell
# ---------------------------

acell     1.3838603279E+01  1.3838603279E+01  1.2969356189E+01 Bohr
angdeg 90 90 120

# Optimisation in ecut
# --------------------

ecut 35         # Maximal plane-wave kinetic energy cut-off, in Hartree

pawecutdg 70       # Value adviced by Marc Torrent / > to the double of ecut - To be test again fo

ecutsm  0.5

# Other
# -----

enunit 2
istwfk *1       # Bug of abinit related to symmetry
ixc 11          # GGA calculus
timopt -1
