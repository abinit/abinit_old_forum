
# Structure Optimization

ndtset 11
dilatmx 1.2
chkdilatmx 0
#dtion  100
ionmov  2
optcell 2
ntime 200
tolmxf 5.d-6

Strtarget1   0.00003398 0.00003398  0.00003398  0.00003398  0.00003398  0.00003398 
Strtarget2   0.00002719 0.00002719  0.00002719  0.00002719  0.00002719  0.00002719 
Strtarget3   0.00002039 0.00002039  0.00002039  0.00002039  0.00002039  0.00002039
Strtarget4   0.00001359 0.00001359  0.00001359  0.00001359  0.00001359  0.00001359
Strtarget5   0.00000679 0.00000679  0.00000679  0.00000679  0.00000679  0.00000679
Strtarget6   0 0 0 0 0 0 
Strtarget7  -0.00000679 -0.00000679 -0.00000679  -0.00000679 -0.00000679 -0.00000679
Strtarget8  -0.00001359 -0.00001359 -0.00001359  -0.00001359 -0.00001359 -0.00001359
Strtarget9  -0.00002039 -0.00002039 -0.00002039  -0.00002039 -0.00002039 -0.00002039
Strtarget10 -0.00002719 -0.00002719 -0.00002719  -0.00002719 -0.00002719 -0.00002719
Strtarget11 -0.00003398 -0.00003398 -0.00003398  -0.00003398 -0.00003398 -0.00003398

#Definition of the atom types
acell 5.42649 5.42649 5.42649 Angstrom 
rprim  0 0 1
       1 0 0
       0 1 0
ntypat 3          # There is only one type of atom
znucl 53 3 82     # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
#xred  #0.0 0.0 0.0
       #0.5 0.5 0.5
       #0.5 0.5 0.0
       #0.0 0.5 0.5
       #0.5 0.0 0.5 

xangst   
       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
       2.7132463248E+00  2.7132463248E+00  2.7132463248E+00
       2.7132463248E+00  2.7132463248E+00  0.0000000000E+00
       0.0000000000E+00  2.7132463248E+00  2.7132463248E+00
       2.7132463248E+00  0.0000000000E+00  2.7132463248E+00

#Definition of the atoms
natom 5           # There are two atoms
typat 1 2 3 3 3   # They both are of type 1, that is, Silicon.
#Definition of the planewave basis set
ecut 20.0
ecutsm 0.5
pawecutdg 90

#Definition of the k-point grid
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
ngkpt 8 8 8   
nshiftk 1         # of the reciprocal space (that form a BCC lattice !),
                  # repeated four times, with different shifts :
shiftk 0.5 0.5 0.5
       
                  # In cartesian coordinates, this grid is simple cubic, and
                  # actually corresponds to the
                  # so-called 4x4x4 Monkhorst-Pack grid

#Definition of the SCF procedure
nstep    100
tolvrs   1.0d-10
diemac   12.0     # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner

#Definition of Strprecon
#strprecon 0.1
prtcif 1
prtgeo 1
autoparal 1




