
    #Definition of the unit cell

acell 3*10.00  
 diemix 0.333333333333d0
 ecut 30
 enunit 2
 intxc 0
 kpt   2 2 2  kptnrm 4
 kptopt 0
 ntime 20
 nkpt  1
 nline 4
 nnsclo 1
 nsym 1
 occopt  1
 ortalg -2
 prtcml 1
 rprim   1 0 0 0 1 0 0 0 1
 
   #Definition of the atom types
    ntypat 3         
    znucl 32 51 52 
    #Definition of the atoms
    natom  63
    typat 3 1 3 3 3 1 2 2       
  
   xred 0.000 0.000 0.000
     0.250 0.250 0.250
     0.250 0.250 0.000
     0.250 0.000 0.250
     0.000 0.250 0.250
     0.000 0.000 0.250
     0.000 0.250 0.000
     0.250 0.000 0.000
    natrd 8  # Eight coordinates to be read
 nobj 1   # Just one object
 objan 8  # Eight atoms in this object
 objaat 1 2 3 4 5 6 7 8 # Here are the ID numbers of the atoms of the object
 objarf 2 2 2 # Repeated 8 times
 objatr  0.00 0.00 0.00#No initial translation
         5.00 0.00 0.00#Translation of the first repetition factor
         0.00 5.00 0.00#Translation of the second repetition factor
         0.00 0.00 5.00#Translation of the third repetition factor
 vacnum 1 #One atom will be subtracted
 vaclst 2  #The atom to be subtracted  is number 2.
    
  

 toldfe 1.0d-6
 iscf 7
 ixc 1



# Definition of the SCF procedure
nstep 200           
diemac 35
 

optcell 3  ionmov 3 .
ndtset 2
    

#Definition of the atomic positions without relaxing the lattice parameters 
optcell1 0
ionmov1 3


#Definition of the basis of the geometry determined by dataset 1 (so using getxcart 1)
getxcart2 1
optcell2 3
ionmov2 3
dilatmx2 2.0
ecutsm2 0.5









