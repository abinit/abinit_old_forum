# Crystalline Zinc : SADECE KSS FİLE VE SCR DOSYALAIR OLUŞTURULACAK 

# nband ı 1. ve 2. döngüde program hesaplıyor  ***********
ndtset 3

#Optimization of the lattice parameters
#optcell 1
#ionmov  3
#ntime  10
#dilatmx 1.05
#ecutsm  0.5



#***********************usual self consistenet calculation and density ****************************

kptopt   1            # Option for the automatic generation of k points,

ngkpt   4 4 4
  
nshiftk 1

shiftk  0.0 0.0 0.0 

        
# Definition of the SCF procedure

toldfe1  1.0d-6    # Will stop when this tolerance is achieved on total energy
prtden1  1         # Print out density
#*************************************************************************************************************

#Dataset 2 : the band structure


enunit2  1             # Will output the eigenenergies in eV 

iscf2    -2             # Non self-consistent calculation
getden2  -1             # Read previous density file
kssform2     3
nbandkss2   100       # Number of bands in KSS file (-1 means the maximum possible)
nband2      100       # Number of (occ and empty) bands to be computed
nbdbuf2      5        # bir ara buna bir dön bak gerekirse bir test yap 
tolwfr2  1.0d-18     # Will stop when this tolerance is achieved 


#**************************************************************************

# Calculation of the screening (epsilon^-1 matrix)
optdriver3  3        # Screening calculation
getkss3     -1       # Obtain KSS file from previous dataset
nband3      100       # Bands to be used in the screening calculation
ecutwfn3    60      # Cut-off energy of the planewave set to represent the wavefunctions. It would be more convenient to keep the default ecut value.
ecuteps3    60      # Cut-off energy of the planewave set to represent the dielectric matrix. It is important to adjust this parameter.
ppmfrq3    16.7 eV   # Imaginary frequency where to calculate the screening
awtr3       0        # Note : the default awtr 1 is better
enunit3    1
********************************



#******************************************************************


# Calculation of the Self-Energy matrix elements (GW corrections)
#optdriver3  4        # Self-Energy calculation
#getkss3     -2       # Obtain KSS file from dataset 1
#getscr3     -1       # Obtain SCR file from previous dataset
#nband3      20       # Bands to be used in the Self-Energy calculation
#ecutwfn3     40     # Planewaves to be used to represent the wavefunctions. It would be ore convenient to keep the default ecut value.
#ecutsigx3    40     # Dimension of the G sum in Sigma_x. It would be better to keep the default ecut value.
                     # (the dimension in Sigma_c is controlled by ecuteps)
#nkptgw3      1       # number of k-point where to calculate the GW correction
#kptgw3               # k-points
#   0.00    0.000    0.000
#bdgw3     18 19       # calculate GW corrections for bands from 4 to 5
#*********************************************************************


#kptopt   1
#nshiftk  1
#shiftk   0.5 0.5 0.5
#shiftk   0.0 0.0 0.5
#shiftk    0.0 0.0 0.0

#ngkpt 4 4 4

#Starting approximation for the unit cell
  acell   6.0569963903E+00  6.0569963903E+00  9.6994373165E+00             #this is a guess, with the c/a
                                                                           #ratio based on ideal tetrahedral
                                                                           #bond angles

  rprim   0.866025403784439  0.5  0.0   #hexagonal primitive vectors must be
         -0.866025403784439  0.5  0.0   #specified with high accuracy to be
          0.0                0.0  1.0   #and preserved in the optimization
                                        #process
#Definition of the atom types
ntypat 2          # There is only one type of atom
znucl  30 8       # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         
#Definition of the atoms
natom    4

 

typat 1 1 2 2

#Starting approximation for atomic positions in REDUCED coordinates
#based on ideal tetrahedral bond angles
   xred   1/3  2/3  0.0
          2/3  1/3  0.5
          1/3  2/3  0.375
          2/3  1/3  0.875
#Definition of the plane wave basis set
   ecut    60            # Maximum kinetic energy cutoff (Hartree)
                         # Smoothing energy needed for lattice paramete
                         # optimization.  This will be retained for
                         # consistency throughout.


#******** k point için izin verdirtiyorum***************

#chksymbreak 1
istwfk  *1         # This is mandatory in all the GW steps.

# Use only symmorphic operations
symmorphi 0
#*******************************************************

#Definition of the SCF procedure


nstep 20          # Maximal number of SCF cycles
#toldfe 1.0d-12     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
diemac 9          # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.


 
  


                         # accurate wave functions in the RF calculations
# enforce calculation of forces at each SCF step
 optforces 1

