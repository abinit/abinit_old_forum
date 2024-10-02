# =======================================
# Input for PAW1 tutorial
# Diamond at experimental volume
# =======================================

#Cell and atoms definition
 acell 3*12.250
 rprim 0.0 1/2 1/2
       1/2 0.0 1/2
       1/2 1/2 0.0
 ntypat 2  natom 2  typat 1 2
 xred 0.0 0.0 0.0
      1/4 1/4 1/4
 znucl 48 52

#Grid definitions
 ecut 8.
 ecutsm 0.5
 pawecutdg 50.

ndtset 2

#Dataset 1 : usual self-consistent calculation
kptopt1 1          # Option for the automatic generation of k points,
                   # taking into account the symmetry
nshiftk1 4
shiftk1  0.5 0.5 0.5  # These shifts will be the same for all grids
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
ngkpt1  6 6 6
prtden1  1         # Print the density, for use by dataset 2
toldfe1  1.0d-6    # This value is way too large for most realistic studies of materials

#Dataset 2 : the band structure
iscf2    -2
getden2  -1
kptopt2  -3
nband2   32
ndivk2   10 12 17      # 10, 12 and 17 divisions of the 3 segments, delimited
                       # by 4 points.
kptbounds2  0.5  0.0  0.0 # L point
            0.0  0.0  0.0 # Gamma point
            0.0  0.5  0.5 # X point
            1.0  1.0  1.0 # Gamma point in another cell.
tolwfr2  1.0d-12
enunit2  1             # Will output the eigenenergies in eV 

#I/O parameters
 optforces 2 optstress 1
 prtwf 0 prtden 0  prteig 1

