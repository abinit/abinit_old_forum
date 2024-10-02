# changed 2010-06-07 11:05h
# TODO find more economical k-point grid
# Tetragonal ZrO2 -- Vanderbilt ultrasoft PP
# Calculation of the GW correction to the band gap
# Dataset 1: ground state calculation 
# Dataset 2: calculation of the kss file 
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 4: calculation of the Self-Energy matrix elements (GW corrections)

ndtset 4

# Definition of the planewave basis set (at convergence ca. 30.0 Hartree)
ecut   15            # Maximal kinetic energy cut-off, in Hartree

pawecutdg 17         # Must be larger or equal to ecut
 
#xc functional (exchange and correlation) 
ixc      7           # 1  LDA or LSD, Teter Pade parametrization
                     #    (4/93, published in S. Goedecker, M. Teter, J. Huetter,
                     #    Phys.Rev.B54, 1703 (1996)), which reproduces Perdew-Wang
                     #    (which reproduces Ceperley-Alder)
                     # 2  LDA, Perdew-Zunger-Ceperley-Alder (no spin-polarization)
                     # 7  LDA or LSD, Perdew-Wang 92 functional

kptopt   1           # Option for the automatic generation of k points
ngkpt    4 4 4       # Density of k points

# Dataset1: usual self-consistent ground-state calculation
# Definition of the k-point grid
nkpt1    36
nshiftk1  4
shiftk1  0.5 0.5 0.5 # This grid is the most economical
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
prtden1  1           # Print out density

# Dataset2: calculation of kss file
# Definition of k-points
nkpt2    39          # A set of 39 k-points containing Gamma
nshiftk2  4
shiftk2  0.0 0.0 0.0 # This grid contains the Gamma point
         0.0 0.5 0.5
         0.5 0.0 0.5
         0.5 0.5 0.0
istwfk2  39*1        # Option needed for Gamma
iscf2    -2          # Non self-consistent calculation
getden2  -1          # Read previous density file
nband2   50
nbandkss2 100        # Number of bands to store in KSS file
kssform2  3 

gwpara   2           # Parallelisation over bands
 
awtr     0           # no time-reversal symmetry

# Dataset3: Calculation of the screening (epsilon^-1 matrix)
optdriver3  3        # Screening calculation
getkss3     -1       # Obtain KSS file from previous dataset
nband3      50       # Bands to be used in the screening calculation
ecutwfn3 11          # Planewaves to be used to represent the wavefunctions
ecuteps3 6           # Dimension of the screening matrix
ppmfrq3    13.8 eV   # Imaginary frequency where to calculate the screening
                     # Volume plasmon energy acc. to K. O. Axelsson, K. E. Keck, B. Kasemo: 
                     # Surface Science Volume 164, Issue 1, 1 December 1985, Pages 109-126
                     # http://dx.doi.org/10.1016/0039-6028(85)90702-2
                     # If the plasmon-pole approximation is good, then, the choice of
                     # ppmfrq should have no influence on the final result.

nshiftk3  4
shiftk3  0.0 0.0 0.0 # This grid contains the Gamma point
         0.0 0.5 0.5 # IMPORTANT NOTE: we have to use the same k-mesh
         0.5 0.0 0.5 # as that reported in the KSS file otherwise the code stops!
         0.5 0.5 0.0
istwfk3  39*1
inclvkb3  0                    

# Dataset4: Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4  4        # Self-Energy calculation
getkss4     -2       # Obtain KSS file from dataset 1
getscr4     -1       # Obtain SCR file from previous dataset
nband4      100      # Bands to be used in the Self-Energy calculation
ecutwfn4    15       # Planewaves to be used to represent the wavefunctions
ecutsigx4   15       # Dimension of the G sum in Sigma_x
                     # (the dimension in Sigma_c is controlled by npweps)
nkptgw4      1       # number of k-point where to calculate the GW correction
kptgw4               # k-points
       0.0  0.0  0.0 # (Gamma)
bdgw4       24  25   # calculate GW corrections for bands from 24 to 25

nshiftk4  4
shiftk4  0.0 0.0 0.0 # This grid contains the Gamma point
         0.0 0.5 0.5 # IMPORTANT NOTE: we have to use the same k-mesh
         0.5 0.0 0.5 # as that reported in the KSS file otherwise the code stops!
         0.5 0.5 0.0
istwfk4  39*1                    

# Definition of the unit cell
acell   6.723592404411  6.723592404411  9.658257022778  bohr  

rprim  1.0  0.0  0.0 # primitive vectors (to be scaled by acell)
       0.0  1.0  0.0
       0.0  0.0  1.0

# Definition of the atom types
ntypat       2       # There are two types of atoms
znucl       8 40     # The keyword "znucl" refers to the atomic number of the 
                     # possible type(s) of atom. IMPORTANT: The pseudopotential(s) 
                     # mentioned in the "files" file must correspond
                     # to the type(s) of atom.
                         
# Definition of the atoms
natom  6             # There are six atoms
typat  1 1 1 1 2 2   # They are of type 1 (oxygen) and of type 2 (zirconium)
xred                 # Reduced coordinates
                     # obtained by structural optimization
                     # see ~/high-k/pawgeo 
      -0.500000000000      0.000000000000      0.207176862754
       0.500000000000      0.000000000000      0.707176862754
       1.000000000000      0.500000000000      0.292823137246
       0.000000000000     -0.500000000000     -0.207176862754
       0.000000000000      0.000000000000      0.500000000000
       0.500000000000      0.500000000000      1.000000000000

# Definition of the SCF procedure
nstep        300     # Maximal number of SCF cycles
diemac       20.0    # Although this is not mandatory, it is worth to
                     # precondition the SCF cycle. The model dielectric
                     # function used as the standard preconditioner
                     # is described in the "dielng" input variable section.
tolwfr    1.0d-15
