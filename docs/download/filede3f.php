# Crystalline AlAs : computation of the set of q point needed 
# for the Fourier interpolation
kptrlatt 2 0 0 0 4 0 0 0 4
#  ngkpt  2 8 8
# kptrlatt -2  2  2
#           2 -2  2
#           2  2 -2
  
  nshiftk 1
  shiftk 3*0.0   
# Note the dummy values of nstep and nline
    nstep   1         # Maximal number of SCF cycles
    nline   1         # Maximal number of SCF cycles

#######################################################################
#Common input variables

#Definition of the unit cell
acell     6.1751299030E+01  7.1916802673E+00  7.9924668599E+00 Bohr
         # This is equivalent to   10.61 10.61 10.61
rprim     9.9999999292E-01  0.0000000000E+00 -1.1899496579E-04
          0.0000000000E+00  1.0000000000E+00  0.0000000000E+00
         -1.2422665590E-04  0.0000000000E+00  9.9999999228E-01

#Definition of the atom types
   ntypat   2         # There are two types of atom
    znucl   32 34     # The keyword "znucl" refers to the atomic number of the 
                      # possible type(s) of atom. The pseudopotential(s) 
                      # mentioned in the "files" file must correspond
                      # to the type(s) of atom. Here, type 1 is the Aluminum,
                      # type 2 is the Arsenic.

#Definition of the atoms
    natom   8         # There are two atoms
    typat   1 1 1 1 2 2 2 2       # The first is of type 1 (Al), the second is of type 2 (As).
xred     2.0781545355E-01  2.5000000000E-01  9.5583551927E-02
                       2.8698833336E-01  7.5000000000E-01  5.9274556981E-01
                       1.2551787978E-01  7.5000000000E-01  9.0441644807E-01
                       4.6344999977E-02  2.5000000000E-01  4.0725443019E-01
                       1.2141593181E-01  2.5000000000E-01  4.9388515323E-01
                       4.9488883215E-02  7.5000000000E-01 -3.8427889174E-03
                       2.1191740152E-01  7.5000000000E-01  5.0611484677E-01
                       2.8384445012E-01  2.5000000000E-01  1.0038427889E+00
#Gives the number of band, explicitely (do not take the default)
    nband   30         

#Exchange-correlation functional

      ixc   1             # LDA Teter Pade parametrization

#Definition of the planewave basis set

     ecut   40.0           # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure (dummy)
     iscf   5          # Self-consistent calculation, using algorithm 5
   diemac   9.0        # Although this is not mandatory, it is worth to
                       # precondition the SCF cycle. The model dielectric
                       # function used as the standard preconditioner
                       # is described in the "dielng" input variable section.
                       # The dielectric constant of AlAs is smaller that the one of Si (=12).
  tolvrs    1.0d-18    # SCF stopping criterion (dummy)
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1

