# Siver 
#
# Computation of the band structure.
# First, a SCF density computation, then a non-SCF band structure calculation.

ndtset 2

#Dataset 1 : usual self-consistent calculation
kptopt1 1          # Option for the automatic generation of k points,
                   # taking into account the symmetry
nshiftk1 4
shiftk1  0.5 0.5 0.5  # These shifts will be the same for all grids
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
ngkpt1  20 20 20  
prtden1  1         # Print the density, for use by dataset 2
toldfe1  1.0d-6    # This value is way too large for most realistic studies of materials

#Dataset 2 : the band structure
iscf2     -2
getden2  -1
kptopt2   -5
nband2   20
ndivk2   20 20 20 20 20      
                            
kptbounds2  0.25  0.5  0.75 # W point
            0.5   0.5   0.5 # L point
            0.0   0.0   0.0 # G point
            0.0  0.5  0.5 # X point
            0.25  0.5  0.75 # W point
            0.375  0.375  0.75 # K point
            
tolwfr2  1.0d-12
enunit2  1             # Will output the eigenenergies in eV 


#Definition of the unit cell
acell 3*7.7201      
rprim  0.0  0.5  0.5   
       0.5  0.0  0.5   
       0.5  0.5  0.0

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 47          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                 
                         

#Definition of the atoms
natom 1           
typat 1          
xred              # This keyword indicate that the location of the atoms
0.0  0.0  0.0  # Triplet giving the REDUCED coordinate of atom 1.
 
#Definition of the planewave basis set
ecut 10.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 200          # Maximal number of SCF cycles
diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1
