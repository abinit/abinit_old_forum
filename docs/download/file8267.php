ndtset 2

#Dataset 1 : usual self-consistent calculation
kptopt1  1            # Option for the automatic generation of k points,
                      # taking into account the symmetry
nshiftk1 1
shiftk1  0.0 0.0 0.0  # These shifts will be the same for all grids
ngkpt1  20 20 1  
prtden1  1            # Print the density, for use by dataset 2
tolvrs1  1.0d-18      # This value is way too large for most realistic studies of materials
nband1  10
occopt1 1
iscf1 7
#istwfk1 *1
#Dataset 2 : the band structure
iscf2   -2
getden2  1
kptopt2  1
ngkpt2   20 20 1
nband2   350
nbandkss2 350
kssform2 3
tolwfr2  1.0d-16
enunit2  1             # Will output the eigenenergies in eV 
symmorphi2 0
istwfk2 *1
nshiftk2 1
shiftk2 0.0 0.0 0.0
#Definition of the unit cell
acell    1.8897269 1.8897269 1.8897269                
rprim   -2.130421558318710      -1.229999460182690       0.000000000000000
         2.130421558318710      -1.229999460182690       0.000000000000000
         0.000000000000000       0.000000000000000      15.000000000000000
#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 6           # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                 
                         

#Definition of the atoms
natom 2           # There are two atoms
typat 1 1         
xred  0.6666666666666670   0.3333333333333340   0.5000000000000000
      0.3333333333333329   0.6666666666666669   0.5000000000000000
#Definition of the planewave basis set
ecut 30.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 1000        # Maximal number of SCF cycles
diemac 12 
#chksymbreak 0    
