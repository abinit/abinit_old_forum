ngkpt 18 18 1



ndtset 4
gwmem 00

############
# Dataset 1
############
# SCF-GS run
nband1  200
tolvrs1 1.0e-10

############
# Dataset 2
############
# Definition of parameters for the calculation of the WFK file
nband2      200       # Number of (occ and empty) bands to be computed
nbdbuf2      5
iscf2       -2
getden2     -1
tolwfr2  1.0d-20    # Will stop when this tolerance is achieved



##### GW type
gwcalctyp    22
gw_sctype 4

############
# Dataset 3
############
# Calculation of the screening (epsilon^-1 matrix)
optdriver3  3        # Screening calculation
getwfk3     -1       # Obtain WFK file from previous dataset
nband3      200       # Bands to be used in the screening calculation
ecuteps3    6      # Cut-off energy of the planewave set to represent the dielectric matrix.
                     # It is important to adjust this parameter.

nfreqim3      4
nfreqre3     10
freqremax3    1.

############
# Dataset 4
############
# Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4  4        # Self-Energy calculation
getwfk4     -2       # Obtain WFK file from dataset 2
getscr4     -1       # Obtain SCR file from previous dataset
nband4      200       # Bands to be used in the Self-Energy calculation
ecutsigx4   30       # Dimension of the G sum in Sigma_x.
                     # (the dimension in Sigma_c is controlled by ecuteps)
nkptgw4      1       # number of k-point where to calculate the GW correction
kptgw4               # k-points in reduced coordinates
  -1/3 1/3 0
bdgw4       4 5     # calculate GW corrections for bands from 4 to 5



#
#  Common data
#

acell 4.684613227 4.6382309174 20
rprim 1.0 0.0 0.0 # Hex. primitive vectors(to be scaled by acell)
0.5 0.8660254037844386 0.0
0.0 0.0 1.0

xred 0 0 0
1/3 1/3 0

#Exchange-correlation functional
 ixc 7             # PW92


#Definition of occupation numbers
 occopt 3
 tsmear 0.00095

#Definition of the atoms
natom        2
typat        1 1


#Definition of the atom types
ntypat 1          # number of atomtypes
znucl 6           # atomic number of the atoms

################################### general options
# nband        10 # not needed, ABINIT calculates it via fband

#DPWset : Definition of the plane wave basis set
 ecut 31

#Dkptgrid : Definition of the k-points grid
kptopt 1
nshiftk 1
shiftk 0.0 0.0 0.0

#Dkptgrid : Definition of the q-points grid
nqpt 0           # 1 qpoint at a time


#Definition of the SCF procedure
 nstep 200         # Maximal number of SCF cycles

istwfk  *1         # This is mandatory in all the GW steps.


