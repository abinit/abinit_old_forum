ndtset 21

strtarget1 3*6.80D-4 3*0.0
strtarget2 3*6.12D-4 3*0.0
strtarget3 3*5.44D-4 3*0.0
strtarget4 3*4.76D-4 3*0.0
strtarget5 3*4.08D-4 3*0.0
strtarget6 3*3.40D-4 3*0.0
strtarget7 3*2.72D-4 3*0.0
strtarget8 3*2.04D-4 3*0.0
strtarget9 3*1.36D-4 3*0.0
strtarget10 3*6.80D-5 3*0.0
strtarget11 3*0.0 3*0.0
strtarget12 3*-6.80D-5 3*0.0
strtarget13 3*-1.36D-4 3*0.0
strtarget14 3*-2.04D-4 3*0.0
strtarget15 3*-2.72D-4 3*0.0
strtarget16 3*-3.40D-4 3*0.0
strtarget17 3*-4.08D-4 3*0.0
strtarget18 3*-4.76D-4 3*0.0
strtarget19 3*-5.44D-4 3*0.0
strtarget20 3*-6.12D-4 3*0.0
strtarget21 3*-6.80D-4 3*0.0





ionmov 2
optcell 1
ntime 20
tolvrs 1.0D-16

dilatmx 1.3

ecutsm 0.5
nband 18
ngkpt 6 6 6
nshiftk 4
shiftk 3*1/2
       1/2 0 0 
       0 1/2 0
       0 0 1/2







#Definition of the unit cell

acell 3*10.96
rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5   
       0.5  0.5  0.0

ntypat 2          
znucl 48 16         
natom 2               # There is only one atom per cell
typat 1 2               # This atom is of type 1
xred 0.0  0.0  0.0
     0.25 0.25 0.25    # This keyword indicate that the location of the atoms
ecut  30   # Maximal kinetic energy cut-off, in Hartree
nstep 25          # Maximal number of SCF cycles
#toldfe 1.0d-6     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
#getden=0
#getwfk=0
