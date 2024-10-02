# CsH2PO4 : computation of the response to homogeneous
# electric field and atomic displacements, at q=0
#
 ndtset  3

#Ground state calculation
  kptopt1   1             # Automatic generation of k points, taking
                          # into account the symmetry
#  tolvrs1   1.0d-18       # SCF stopping criterion
tolvrs1   1.0d-20
    iscf1   5             # Self-consistent calculation, using algorithm 5

#Response Function calculation : d/dk
  rfelfd2   2             # Activate the calculation of the d/dk perturbation
   rfdir2   1 1 1         # Need to consider the perturbation in the x-direction only
                          # This is rather specific, due to the high symmetry of the AlAs crystal
                          # In general, just use rfdir 1 1 1
                          # In the present version of ABINIT (v4.6), symmetry cannot be used
                          # to reduce the number of ddk perturbations

    nqpt2   1
     qpt2   0.0 0.0 0.0   # This is a calculation at the Gamma point

  getwfk2   -1            # Uses as input the output wf of the previous dataset

  kptopt2   2             # Automatic generation of k points,
                          # using only the time-reversal symmetry to decrease
                          # the size of the k point set.

    iscf2  -3             # The d/dk perturbation must be treated
                          # in a non-self-consistent way
  tolwfr2   1.0d-22       # Must use tolwfr for non-self-consistent calculations
                          # Here, the value of tolwfr is very low.

# 
#Response-function calculation, electric field perturbation and phonons

  rfphon3   1            # Will consider phonon-type perturbation
 rfatpol3   1 16         # All the atoms will be displaced
  rfelfd3   3            # Activate the calculation of the electric field perturbation
   rfdir3   1 1 1        # Along all reduced coordinate axis


    nqpt3   1            # One wavevector is to be considered
     qpt3   0.0 0.0 0.0        # This wavevector is q=0 (Gamma)
  getwfk3   -2            # Uses as input wfs the output wfs of the dataset 1
  getddk3   -1            # Uses as input ddk wfs the output of the dataset 2

  kptopt3   2            # Automatic generation of k points, taking
                        # into account the time-reversal symmetry only
tolvrs3   1.0d-9         # SCF stopping criterion
    iscf3   5            # Self-consistent calculation, using algorithm 5

#Definition of the unit cell
acell    1.5002189835E+01  1.1928533250E+01  9.3963893628E+00 Bohr
angdeg 90.0 108.47 90.0

#Definition of the atom types
ntypat 4          # There is only one type of atom
znucl 55 15 8 1   # The keyword "znucl" refers to the atomic number of the
                       # possible type(s) of atom. The pseudopotential(s)
                       # mentioned in the "files" file must correspond
                       # to the type(s) of atom. Here, type 55 is the Cs,
                       # type 15 is the P, type 8 is O, 1 is the H.
          
#Definition of the atoms
natom 16           # There are two atoms

typat 1 2 3 3 3 3 4 4  

natrd 8                #Minimal'ne chyslo atomiv dlja rozmnozhennja unit cell z$
spgroup 4             #Nomer space group
spgaxor 1              #orijentacija osej unit cell
spgorig 1              #pozycija centru unit cell
brvltt 1               #typ gratky Brave, 1 -prymityvna

# Definition of the different grids
ngkpt 4 4 4

nshiftk 1
shiftk 0.5 0.5 0.5

xred                     # This keyword indicate that the location of the atoms
                         # will follow, one triplet of number for each  
 
  2.6404644634E-01  2.4471363443E-01  2.2624913900E-02
  2.3590600142E-01  7.4471213755E-01  5.2009053606E-01
  3.8747954890E-01  7.4470776092E-01  3.7872904154E-01
  3.2295541529E-01  7.4470479620E-01  8.3818958977E-01
  1.2394523325E-01  5.4349898716E-01  4.1140222987E-01
  1.2395740680E-01  9.4593659279E-01  4.1141618878E-01
  3.4688700066E-01  7.4470905999E-01  1.5003747343E-01
  9.9999477299E-01  4.9471703096E-01  4.9999568191E-01


#Gives the number of band, explicitely (do not take the default)
nband  100               # For an insulator (if described correctly as an insulat$
                       # by DFT), there is no need to include conduction bands
                       # in response-function calculations

#Exchange-correlation functional
ixc 1             # LDA Teter Pade parametrization

#Defition of the planewave basis set
ecut 37.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 450         # Maximal number of SCF cycles

diemac 9.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1
 prtden 0
