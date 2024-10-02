# Germanium : computation of the total energy
#

#Definition of the unit cell
nspinor 2
ionmov  2
optcell 2
ngfft 0 0 0

ecutsm  0.5
dilatmx 1.0
ntime   0
strfact 100
restartxf 0 

#commonn inputs
acell 3*5.658 Angstr
rprim  1 0 0
       0 1 0
       0 0 1

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 32          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 2           # There are two atoms
typat 1  1       # They both are of type 1, that is, Silicon.
xred 0.25 0.25 0.25
     0.0 0.0 0.0

#Definition of the planewave basis set
ecut 20


#Definition of the k-point grid
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
ngkpt 6 6 6
nshiftk 4         # of the reciprocal space (that form a BCC lattice !),
                  # repeated four times, with different shifts :
shiftk 0.5 0.5 0.5
       0.5 0.0 0.0
       0.0 0.5 0.0
       0.0 0.0 0.5
                  # In cartesian coordinates, this grid is simple cubic, and
                  # actually corresponds to the
                  # so-called 4x4x4 Monkhorst-Pack grid

#Definition of the SCF procedure
nstep    1000
tolrff   0.0
toldff   0.0
tolwfr   0.0 
tolmxf   5e-05
toldfe   1.0d-22
tolmxde  0.0
diemac   12.0    # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner

#Definition of Strprecon
strprecon 1.0
strtarget 0.0, 0.0, 0.0, 0.0, 0.0, 0.0
iprcfc 0
tolvrs   0.0

prtcif 1
prtgeo 1

