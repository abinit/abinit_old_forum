# Crystalline Ni : computation of the second drivative of the total energy
#

#Ni is a ferromagnatic material
#spin definition
  nsppol   2
  nspden   2
  spinat   0.0  0.0  4.0



#Response-function calculatio, with q=0
  rfphon   1            # Will consider phonon-type perturbation
 rfatpol   1 1          # all the  atoms wiil be displaced
   rfdir   1 1 1        # Along the first reduced coordinate axis
    nqpt   1            # One wavevector is to be considered
     qpt   0 0 0        # This wavevector is q=0 (Gamma)
  kptopt   2            # Automatic generation of k points, taking
                        # into account the time-reversal symmetry only
  tolvrs   1.0d-8       # SCF stopping criterion
    iscf   5            # Self-consistent calculation, using algorithm 5
  irdwfk   1            # Read the ground-state wavefunctions

#########################################################################
#common input variables

#Definition of the unit cell
acell 3*6.65   
rprim  0.0  0.5  0.5   # In lessons 1 and 2, these primitive vectors 
       0.5  0.0  0.5   # (to be scaled by acell) were 1 0 0  0 1 0  0 0 1 
       0.5  0.5  0.0   # that is, the default.

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl  28         # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 1           # There are two atoms
typat 1           # They both are of type 1, that is, Silicon.
xred              # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom
   0.0  0.0  0.0  # Triplet giving the REDUCED coordinate of atom 1.
                  # Triplet giving the REDUCED coordinate of atom 2.
                  # Note the use of fractions (remember the limited 
                  # interpreter capabilities of ABINIT)

#Definition of the planewave basis set
ecut  50.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the k-point grid

ngkpt 8 8 8        # This is a 8x8x8 grid based on the primitive vectors
nshiftk 4          # of the reciprocal space (that form a BCC lattice !),
                   # repeated four times, with different shifts :
shiftk 0.5 0.5 0.5
       0.5 0.0 0.0
       0.0 0.5 0.0
       0.0 0.0 0.5
                  # In cartesian coordinates, this grid is simple cubic, and
                  # actually corresponds to the
                  # so-called 4x4x4 Monkhorst-Pack grid

ixc    11
  

occopt 3
tsmear 0.05
nband  10
#Definition of the SCF procedure
nstep  80          # Maximal number of SCF cycles

                  
diemac 12.0        # Although this is not mandatory, it is worth to
                   # precondition the SCF cycle. The model dielectric
                   # function used as the standard preconditioner
                   # is described in the "dielng" input variable section.
                   # Here, we follow the prescription for bulk silicon.
