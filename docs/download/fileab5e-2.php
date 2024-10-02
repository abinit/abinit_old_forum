# Crystalline BiCrO3 : computation of kpoint convergence
#

  ndtset  2

#Ground state calculation
#  kptopt1   1             # Automatic generation of k points, taking
                          # into account the symmetry
#  tolvrs1   1.0d-18       # SCF stopping criterion
#    iscf1   7             # Self-consistent calculation, using algorithm 5

#Response Function calculation : d/dk
  rfelfd1   2             # Activate the calculation of the d/dk perturbation
   rfdir1   1 1 1

    nqpt1   1
     qpt1   0.0 0.0 0.0   # This is a calculation at the Gamma point

  irdwfk1   1            # Uses as input the output wf of the previous dataset

  kptopt1   2             # Automatic generation of k points,
                          # using only the time-reversal symmetry to decrease
                          # the size of the k point set.

    iscf1  -3             # The d/dk perturbation must be treated 
                          # in a non-self-consistent way
  tolwfr1   1.0d-22       # Must use tolwfr for non-self-consistent calculations
                          # Here, the value of tolwfr is very low.

#Response Function calculation : electric field perturbation and phonons
  rfphon2   1             # Activate the calculation of the atomic dispacement perturbations
 rfatpol2   1 20          # All the atoms will be displaced
  rfelfd2   3             # Activate the calculation of the electric field perturbation
   rfdir2   1 1 1         # All directions are selected. However, symmetries will be used to decrease
                          # the number of perturbations, so only the x electric field is needed
                          # (and this explains why in the second dataset, rfdir was set to 1 0 0).

    nqpt2   1
     qpt2   0.0 0.0 0.0   # This is a calculation at the Gamma point

  getwfk2   -1            # Uses as input wfs the output wfs of the dataset 1
  getddk2   -1            # Uses as input ddk wfs the output of the dataset 2

  kptopt2   2             # Automatic generation of k points,
                          # using only the time-reversal symmetry to decrease
                          # the size of the k point set.
  tolvrs2   1.0d-8
    iscf2   7             # Self-consistent calculation, using algorithm 5


#######################################################################
#Common input variables

#Definition of the unit cell
acell 9.58500000    5.46782932   5.46782932 angstrom
angdeg 119.86479125    74.00339764   105.99660236

#Definition of the atom types
ntypat 3               # There are two types of atom
znucl 24 83 8          # The keyword "znucl" refers to the atomic number of the 
                       # possible type(s) of atom.

#Definition of the atoms
natom 20
typat 4*1 4*2 12*3
xred                   # This keyword indicate that the location of the atoms
                       # will follow, one triplet of number for each atom
 0.25, 0.759, 0.759                   #Cr1
 0.75, 0.241, 0.241                   #Cr1
 0.5, 0.5, 0.0                        #Cr2
 0.0, 0.0, 0.5                        #Cr2
 0.86924, 0.65322, 0.92098            #Bi
 0.63076, 0.92098, 0.65322            #Bi
 0.13076, 0.34678, 0.07902            #Bi
 0.36924, 0.07902, 0.34678            #Bi
 0.4122, 0.7109, 0.8857               #O
 0.0878, 0.8857, 0.7109               #O
 0.5878, 0.2891, 0.1143               #O
 0.9122, 0.1143, 0.2891               #O
 0.635, 0.3186, 0.627                 #O
 0.865, 0.627, 0.3186                 #O
 0.365, 0.6814, 0.373                 #O
 0.135, 0.373, 0.6814                 #O
 0.8419, 0.1216, 0.8358               #O
 0.6581, 0.8358, 0.1216               #O
 0.1581, 0.8784, 0.1642               #O
 0.3419, 0.1642, 0.8784               #O


#antiferromagnetic
prtdos 2
prtdensph 1
nsppol 2
nspden 2
spinat
 0 0 -2.5
 0 0 -2.5
 0 0 2.5
 0 0 2.5
 0 0 0
 0 0 0
 0 0 0
 0 0 0
 0 0 0
 0 0 0
 0 0 0
 0 0 0
 0 0 0
 0 0 0
 0 0 0
 0 0 0
 0 0 0
 0 0 0
 0 0 0
 0 0 0

#Definition of the planewave basis set
ecut    35.0           # Maximal kinetic energy cut-off, in Hartree
pawecutdg 45.
pawxcdev 0

kptrlen 50

#Definition of the SCF procedure
nstep 1000               # Maximal number of SCF cycles

usepawu 1
lpawu 2 -1 -1
upawu 3.0 0.0 0.0 eV
jpawu 0.8 0.0 0.0 eV

pawovlp 10.
