#Optimization of the lattice parameters
optcell 2
ionmov  3
ntime   200
dilatmx 1.05
natfix  1
iatfix  1
natfixz 24
iatfixz 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25
ecutsm  0.5
#strprecon 0.1

nsppol 2

spinat 0 0 0
       0 0 1
       0 0 1
       0 0 1
       0 0 1
       0 0 1
       0 0 1
       0 0 1
       0 0 1
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


#Definition of the unit cell
chkprim 0
acell   18.17 18.17 5.401                        # lattice constants 15.7944*0.8
rprim   1.0   0.0   0.0                  # In lessons 1 and 2, these primitive vectors 
        0.0   1.0   0.0                  # (to be scaled by acell) were 1 0 0  0 1 0  0 0 1 
        0.0   0.0   1.0                  # that is, the default.

#Definition of the atom types
ntypat 3                 # There is only one type of atom
znucl  47  25  8          # The keyword "znucl" refers to the atomic number of the 
                              # possible type(s) of atom. The pseudopotential(s) 
                               # mentioned in the "files" file must correspond
                               # to the type(s) of atom. Here.
#spgroup 83                         

#Definition of the atoms
natom 25                                                # There are one atoms
typat 1*1
      8*2  
      16*3                                                  


xred  0           0           0
                                             
      0.6493      0.8321      0
      0.3507      0.1679      0
      0.1679      0.6493      0
      0.8321      0.3507      0
      0.1493      0.3321      0.5
      0.8507      0.6679      0.5 
      0.6679      0.1493      0.5
      0.3321      0.8507      0.5                                                 
      

      0.1599      0.2075      0
      0.8401      0.7925      0
      0.7925      0.1599      0
      0.2075      0.8401      0
      0.6599      0.7075      0.5
      0.3401      0.2925      0.5
      0.2925      0.6599      0.5
      0.7075      0.3401      0.5
      0.1311      0.4708      0
      0.8689      0.5292      0
      0.5292      0.1311      0
      0.4708      0.8689      0
      0.6311      0.9708      0.5
      0.3689      0.0292      0.5
      0.0292      0.6311      0.5
      0.9708      0.3689      0.5                                          


      
           
                  
                  

#Definition of the planewave basis set

ecut    20.0
pawecutdg 40

#Definition of the k-point grid
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
ngkpt 2 2 2       # This is a 2x2x2 grid based on the primitive vectors

getwfk -1

nshiftk 1         # of the reciprocal space (that form a FCC lattice !),
                  # repeated four times, with different shifts :
shiftk 0.5  0.5  0.5
       
       
      
       
     
                  # In cartesian coordinates, this grid is simple cubic, and
                  # actually corresponds to the
                  # so-called 4x4x4 Monkhorst-Pack grid

#Definition of the SCF procedure
nstep 200          # Maximal number of SCF cycles
toldfe 1.0d-4     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
diemac 2.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
optforces 1
