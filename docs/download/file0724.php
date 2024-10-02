# Computation of the band structure.
# First, a SCF density computation, then a non-SCF band structure calculation.

ndtset 2

#Dataset 1 : usual self-consistent calculation
kptopt1 1          # Option for the automatic generation of k points,
                   # taking into account the symmetry
nshiftk1 1
shiftk1  0.0 0.0 0.0  # These shifts will be the same for all grids
ngkpt1 12 12 1 
prtden1  1         # Print the density, for use by dataset 2
toldfe1  1.0d-6    # This value is way too large for most realistic studies of materials

#Dataset 2 : the band structure
iscf2    -2
getden2  -1
kptopt2  -3
nband2   10
ndivk2   20 24 34     # 10, 12 and 17 divisions of the 3 segments, delimited
                       # by 4 points.
kptbounds   0.0  0.0   0.0 # Gamma point
            2/3  1/3   0.0 # K point
            0.5  0.5   0.0 # M point
            1.0  1.0  0.0 #Gamma  point in another cell.
tolwfr2  1.0d-12
enunit2  1             # Will output the eigenenergies in eV


#Definition of the unit cell
acell  1.41475 1.41475  20 Angstrom
rprim  7.5    -4.33012702   0.0   # FCC primitive vectors (to be scaled by acell)
       7.5     4.33012702   0.0
       0.0     0.0   1.0
chkprim 0
#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 6          # The keyword "znucl" refers to the atomic number of the
                  # possible type(s) of atom. The pseudopotential(s)
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.


#Definition of the atoms
natom 50     # There are two atoms

typat 50*1    # They both are of type 1, that is, Silicon.

#Definition of the planewave basis set
xangst    0.00000000   0.00000000   0.00000000
          1.41475000   0.00000000   0.00000000
          2.12212500   1.22517350   0.00000000
          3.53687500   1.22517350   0.00000000
          4.24425000   2.45034700   0.00000000
          5.65900000   2.45034700   0.00000000
          6.36637500   3.67552050   0.00000000
          7.78112500   3.67552050   0.00000000
          8.48850000   4.90069400   0.00000000
          9.90325000   4.90069400   0.00000000
          2.12212500  -1.22517350   0.00000000
          3.53687500  -1.22517350   0.00000000
          4.24425000   0.00000000   0.00000000
          5.65900000   0.00000000   0.00000000
          6.36637500   1.22517350   0.00000000
          7.78112500   1.22517350   0.00000000
          8.48850000   2.45034700   0.00000000
          9.90325000   2.45034700   0.00000000
         10.61062500   3.67552050   0.00000000
         12.02537500   3.67552050   0.00000000
          4.24425000  -2.45034700   0.00000000
          5.65900000  -2.45034700   0.00000000
          6.36637500  -1.22517350   0.00000000
          7.78112500  -1.22517350   0.00000000
          8.48850000   0.00000000   0.00000000
          9.90325000   0.00000000   0.00000000
         10.61062500   1.22517350   0.00000000
         12.02537500   1.22517350   0.00000000
         12.73275000   2.45034700   0.00000000
         14.14750000   2.45034700   0.00000000
          6.36637500  -3.67552050   0.00000000
          7.78112500  -3.67552050   0.00000000
          8.48850000  -2.45034700   0.00000000
          9.90325000  -2.45034700   0.00000000
         10.61062500  -1.22517350   0.00000000
         12.02537500  -1.22517350   0.00000000
         12.73275000   0.00000000   0.00000000
         14.14750000   0.00000000   0.00000000
         14.85487500   1.22517350   0.00000000
         16.26962500   1.22517350   0.00000000
          8.48850000  -4.90069400   0.00000000
          9.90325000  -4.90069400   0.00000000
         10.61062500  -3.67552050   0.00000000
         12.02537500  -3.67552050   0.00000000
         12.73275000  -2.45034700   0.00000000
         14.14750000  -2.45034700   0.00000000
         14.85487500  -1.22517350   0.00000000
         16.26962500  -1.22517350   0.00000000
         16.97700000   0.00000000   0.00000000
         18.39175000   0.00000000   0.00000000
 
ecut 12.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 100          # Maximal number of SCF cycles
diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                 # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.







