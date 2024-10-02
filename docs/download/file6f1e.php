
    #Definition of the unit cell
    #***********************************
    acell 3*11.360406666906172 bohr
    rprim 0.5 0 0  0 0.5 0  0 0 0.5
    chkprim 0

   natrd 12
   nobj 2
   objaat 1 2 3 4 5 6 7 8
   objbat 9 10 11 12 
   objan 8 
   objbn 4    
   objarf 2 2 2
   objbrf 2 2 2
   objatr
   0.0 0.0 0.0
   5.68 0.0 0.0
   0.0 5.68 0.0
   0.0 0.0 5.68
   objbtr
   0.0 0.0 0.0
   5.68 0.0 0.0
   0.0 5.68 0.0
   0.0  0.0 5.68
   
    vacnum 1
    vaclst 3

    #Definition of the atom types
    ntypat 3         
    znucl 32 51 52            

    #Definition of the atoms
    #************************
    natom 64           
    typat 16*1 16*2 32*3          
    xred                                         
      0.25 0.25 0.25 #ge
      0.25 0.25 0.75 #ge
      0.25 0.75 0.25#-v-
      0.25 0.75 0.75#ge
      0.75 0.25 0.25#sb
      0.75 0.75 0.25#sb
      0.75 0.25 0.75#sb
      0.75 0.75 0.75 # sb   
      0  0  0 #te
      0.5 0 0.5#te
      0.5 0.5 0#te
      0 0.5 0.5 #te

    #Definition of the planewave basis set
    ecut 60.0         

    #Definition of the SCF procedure
    nstep 100         
    diemac 2.0       

    # k-points grid
   #***********************
    kptopt 1 
    nshiftk 4
    shiftk    0.5 0.5 0.5
              0.5 0.0 0.0
              0.0 0.5 0.0
              0.0 0.0 0.5
    ngkpt   2 2 2
    toldfe  1.0d-12
