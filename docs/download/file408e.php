# Crystalline silicon
# Calculation of the GW corrections
# Dataset 2: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 3: calculation of the Self-Energy matrix elements (GW corrections)

ndtset     2
#udtset     6  2

gwpara      2        # parallelization over bands instead of k-point

gwcalctyp   12       # scGW + contour integral

# Use in the Contour integral calculation
nfreqim?1     4
nfreqre?1    20
freqremax?1     2.0     # 2 Ha = 54.422 eV


# Calculation of the screening (epsilon^-1 matrix)
optdriver1  3        # Screening calculation
getkss1     1        # Obtain KSS file from previous dataset DS1
#getqps1    -1
            #nband1      17       # Bands to be used in the screening calculation
nband1      50       # Bands to be used in the screening calculation
            #ecutwfn1    2.1      # Cut-off energy of the planewave set to represent the wavefunctions
npwwfn1     169      # should correspond to a 5.1 ecutwfn
            #ecuteps1    3.6      # Cut-off energy of the planewave set to represent the dielectric matrix
npweps1     169
                     #ppmfrq1    16.7 eV   # Imaginary frequency where to calculate the screening
                     #awtr1       0        # Note : the default awtr 1 is better

# Calculation of the Self-Energy matrix elements (GW corrections)
optdriver2  4        # Self-Energy calculation
getkss2     1        # Obtain KSS file from dataset 1
getscr2     -1       # Obtain SCR file from previous dataset
#getqps2     -2
nband2      100      # Bands to be used in the Self-Energy calculation
            #ecutwfn2     5.0     # Planewaves to be used to represent the wavefunctions
npwwfn2     169     # Planewaves to be used to represent the wavefunctions
            #ecutsigx2    6.0     # Dimension of the G sum in Sigma_x
npwsigx2    169     # Dimension of the G sum in Sigma_x
                     # (the dimension in Sigma_c is controlled by npweps)

nkptgw2      19               # number of k-point where to calculate the GW correction
kptgw2                       # k-points
           -1.25000000E-01 -1.25000000E-01  0.00000000E+00
           -1.25000000E-01 -3.75000000E-01  0.00000000E+00
           -2.50000000E-01 -2.50000000E-01  0.00000000E+00
           -1.25000000E-01 -2.50000000E-01  1.25000000E-01
           -1.25000000E-01  3.75000000E-01  0.00000000E+00
           -2.50000000E-01  5.00000000E-01  0.00000000E+00
           -1.25000000E-01  5.00000000E-01  1.25000000E-01
           -3.75000000E-01 -3.75000000E-01  0.00000000E+00
           -2.50000000E-01 -3.75000000E-01  1.25000000E-01
           -1.25000000E-01 -3.75000000E-01  2.50000000E-01
           -1.25000000E-01  1.25000000E-01  0.00000000E+00
           -2.50000000E-01  2.50000000E-01  0.00000000E+00
           -3.75000000E-01  3.75000000E-01  0.00000000E+00
            5.00000000E-01  5.00000000E-01  0.00000000E+00
           -3.75000000E-01  5.00000000E-01  1.25000000E-01
           -2.50000000E-01  5.00000000E-01  2.50000000E-01
           -2.50000000E-01  0.00000000E+00  0.00000000E+00
            5.00000000E-01  0.00000000E+00  0.00000000E+00
            0.00000000E+00  0.00000000E+00  0.00000000E+00


bdgw2      1  30            # calculate GW corrections for bands from 1 to 30 in case of G0W0
            1  30            # In case of GWSC number of orbitals used to expande the quasiparticle wavefunction
            1  30
            1  30
            1  30
            1  30
            1  30
            1  30
            1  30
            1  30
            1  30
            1  30
            1  30
            1  30
            1  30
            1  30
            1  30
            1  30
            1  30

# Data common to the three different datasets

# Definition of the unit cell: fcc
acell  3*10.658             # The default unit is Bohr
rprim  0.0  0.5  0.5        # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5   
       0.5  0.5  0.0

# Definition of the atom types
ntypat  2         # There is only one type of atom
znucl 31 33       # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         
# Definition of the atoms
natom 2           # There are two atoms
typat  1 2        # They both are of type 1, that is, Silicon.
xred              # Reduced coordinate of atoms
      0.0  0.0  0.0
      0.25 0.25 0.25


# Definition of the k-point grid
kptopt 1

ngkpt   4 4 4
nshiftk 4
shiftk  0.0 0.0 0.0  # These shifts will be the same for all grids
        0.0 0.5 0.5
        0.5 0.0 0.5
        0.5 0.5 0.0
istwfk  *1         # This is mandatory in all the GW steps.

# symmorphic operations
symmorphi 1      # default 1: take advantage of the non-symmorphic symmetries

# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
#ecut 12.0          # Maximal kinetic energy cut-off, in Hartree

# Definition of the SCF procedure
nstep   10        # Maximal number of SCF cycles
toldfe  1.0d-6    # Will stop when this tolerance is achieved on total energy
diemac  12.0      # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.

