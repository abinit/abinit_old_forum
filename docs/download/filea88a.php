# Crystalline graphene 
#
# Computation of the band structure.
# First, a SCF density computation, then a non-SCF band structure calculation.

ndtset 2

#Dataset 1 : usual self-consistent calculation
kptopt1 1          # Option for the automatic generation of k points,
                   # taking into account the symmetry
nshiftk1 1    #Number of SHIFTs for K point grids 
shiftk1  0.0 0.0 0.0  # These shifts will be the same for all grids

ngkpt1  1 20 1    # Number of Grid points for K PoinTs generation
prtden1  1         # Print the density, for use by dataset 2
toldfe1  1.0d-6    # Tolerace on the differene of total energy This value is way too large for most realistic studies of materials

#Dataset 2 : the band structure
iscf2    -2
getden2  -1
kptopt2  -3
nband2  16
ndivk2 35 40 
kptbounds2  1/2 0 0 # K point
            0 0 0  # gamma point           
            1/2 0 0 # M point

           
tolwfr2  1.0d-12 #TOLerance on WaveFunction squared Residual 
enunit2  1             # Will output the eigenenergies in eV 


#Definition of the unit cell
acell 4.6487259108 4.6487259108 4.6487259108
rprim  6.928406466512   0.0  0.0 
       0.0    1.0  0.0 
       0.0    0.0    100.0
#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl  6          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 16           # There are 16 atoms
typat 16*1        # They both are of type 1.
xangst            # # This keyword indicate that the location of the atoms
   0.71  0.614878036686  0.0  # Triplet giving the REDUCED coordinate of atom 1.
   1.42  1.844598036686  0.0  # Triplet giving the REDUCED coordinate of atom 2.
   2.84  1.844598036686  0.0 
   3.55  0.614878036686  0.0
   4.97  0.614878036686  0.0
   5.68  1.844598036686  0.0
   7.10  1.844598036686  0.0
   7.81  0.614878036686  0.0
   9.23  0.614878036686  0.0 
   9.94  1.844598036686  0.0
   11.36  1.844598036686  0.0 
   12.07  0.614878036686  0.0
   13.49  0.614878036686  0.0 
   14.20  1.844598036686  0.0
   15.62  1.844598036686  0.0 
   16.73  0.614878036686  0.0 

#Definition of the planewave basis set
ecut 18.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 30          # Maximal number of SCF cycles
diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
