
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
ngkpt1  4 4 4  
prtden1  1         # Print the density, for use by dataset 2
toldfe1  1.0d-6    # This value is way too large for most realistic studies of materials

#Dataset 2 : the band structure
iscf2    -2
getden2  -1
kptopt2  -3
nband2   8
ndivk2   10 12 17      # 10, 12 and 17 divisions of the 3 segments, delimited
                       # by 4 points.

kptbounds2  0.5  0.0  0.0 # L point
            0.0  0.0  0.0 # Gamma point
            0.0  0.5  0.5 # X point
            1.0  1.0  1.0 # Gamma point in another cell.
tolwfr2  1.0d-12
enunit2  1             # Will output the eigenenergies in eV 


#Definition of the unit cell
acell 2*4.091 4.641         # This is equivalent to   10.216 10.216 10.216
rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5   
       0.5  0.5  0.0

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 48 16       # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 2           # There are two atoms
typat 1 2         # They both are of type 1, that is, Silicon.
xred              # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom
  0.6667        0.3333 	0.877
  0.3333 	0.6667 	0.377
  0.6667 	0.3333 	0.5
  0.3333 	0.6667 	0
#Definition of the planewave basis set
ecut 8.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 10          # Maximal number of SCF cycles
diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.


