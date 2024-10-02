# Supercell BaTiO3 
#
# Computation of the band structure.
# First, a SCF density computation, then a non-SCF band structure calculation.

ndtset 2

#Dataset 1 : usual self-consistent calculation
kptopt1 1          # Option for the automatic generation of k points,
                  # taking into account the symmetry
nshiftk1 1
shiftk1  0.5 0.5 0.5  # These shifts will be the same for all grids
         
ngkpt1  6 6 6  
prtden1  1         # Print the density, for use by dataset 2
toldfe1  1.0d-6    # This value is way too large for most realistic studies of materials
prtdos1 3
enunit1 1
dosdeltae 0.005
nband1   200
#Dataset 2 : the band structure
iscf2    -2
getden2  -1
kptopt2  -5
nband2   200
ndivk2   10 10 10 10 10  # 10, 12 and 17 divisions of the 3 segments, delimited by 4 points.
kptbounds2  0.5  0.5  0.0 # M point
            0.0  0.5  0.0 # X point
            0.5  0.5  0.5 # R point
            0.0  0.0  0.0 # Gamma point in another cell.
            0.5  0.5  0.0 # M point
            0.5  0.5  0.5 # R point
            
tolwfr2  1.0d-12
enunit2  1             # Will output the eigenenergies in eV 

#Definition of the unit cell
chkprim  0
occopt 1
acell 3*15.134         
angdeg 3*90.0

#Definition of the atom types
ntypat 3          # There is only one type of atom
znucl 56 22  8            # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 40           # There are two atoms
typat 8*1 8*2 24*3        # They both are of type 1, that is, Silicon
xred  0.00 0.00 0.00  #Ba1
      0.50 0.00 0.00  #Ba2
      0.00 0.50 0.00  #Ba3
      0.00 0.00 0.50  #Ba4
      0.50 0.50 0.00  #Ba5
      0.50 0.00 0.50  #Ba6
      0.00 0.50 0.50  #Ba7
      0.50 0.50 0.50  #Ba8
      0.25 0.25 0.25  #Ti1
      0.75 0.25 0.25  #Ti2
      0.25 0.75 0.25  #Ti3
      0.25 0.25 0.75  #Ti4
      0.75 0.75 0.25  #Ti5
      0.75 0.25 0.75  #Ti6
      0.25 0.75 0.75  #Ti7
      0.75 0.75 0.75  #Ti8 
      0.25 0.25 0.00  #O1
      0.75 0.25 0.00  #O2
      0.25 0.75 0.00  #O3
      0.25 0.25 0.50  #O4
      0.75 0.75 0.00  #O5
      0.75 0.25 0.50  #O6
      0.25 0.75 0.50  #O7
      0.75 0.75 0.50  #O8
      0.25 0.00 0.25  #O9
      0.75 0.00 0.25  #O10
      0.25 0.50 0.25  #O11
      0.25 0.00 0.75  #O12
      0.75 0.50 0.25  #O13
      0.75 0.00 0.75  #O14
      0.25 0.50 0.75  #O15
      0.75 0.50 0.75  #O16
      0.00 0.25 0.25  #O17
      0.50 0.25 0.25  #O18
      0.00 0.75 0.25  #O19
      0.00 0.25 0.75  #O20
      0.50 0.75 0.25  #O21
      0.50 0.25 0.75  #O22
      0.00 0.75 0.75  #O23
      0.50 0.75 0.75  #O24  


#Definition of the planewave basis set
ecut 44.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 1000          # Maximal number of SCF cycles
diemac 4.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
