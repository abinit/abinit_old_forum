# Graphene
# Structural optimization
# FHI-Pseudopotential, see http://www.abinit.org/downloads/psp-links
# First, a SCF optimization of the ionic positions only, then a full 
# optimization of cell geometry, taking into account the symmetry.



#Definition of the planewave basis set
ecut 12.0         # Maximal kinetic energy cut-off, in Hartree


# Definition of the k-point grid
kptopt  1          # Option for the automatic generation of k points,
                   # taking into account the symmetry
#nshiftk 1
#shiftk  0.0 0.0 0.0
ngkpt   12 12 1 
#nkpt 1

# Dataset1: usual self-consistent ground-state calculation with
# optimization of ionic positions
ionmov 2
optcell 2
ecutsm 0.5
dilatmx 1.1
ntime 50
prtgeo 1
natfixy  2
iatfixy  1 2

#Definition of the unit cell
acell  1.41475 1.47134 30  Angstrom      
rprim  1.5 -0.866 0.0   # primitive vectors (to be scaled by acell)
       1.5 0.866 0.0
       0.0 0.0 1.0
       


#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 6           # The keyword "znucl" refers to the atomic number of the
                  # possible type(s) of atom. The pseudopotential(s)
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Carbon.


#Definition of the atoms
natom 2           # There are two atoms
typat 2*1          # They both are of type 1, that is, Carbon.
xangst 0.0 0.0 0.0
       1.41475 0.0 0.0

#Definition of the SCF procedure
nstep 100          # Maximal number of SCF cycles
diemac 12        # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle.
                  # dielectric constant of graphene acc. to
                  # Phys. Rev. B 75, 205418 (2007)
toldff  1.0d-8    # tolerance for differences, stopping criterion
