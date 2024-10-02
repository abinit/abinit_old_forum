#
#Response function calculation for:
#    * rigid-atom elastic tensor
#    * rigid-atom piezoelectric tensor
#    * interatomic force constants at gamma
#    * Born effective charges

   ndtset   2

# Set 1 : Initial self-consistent run
    iscf1   5
  kptopt1   1
  tolvrs1   1.0d-18  #need excellent convergence of GS quantities for RF runs

# Set 2 : Calculate the ddk wf's - needed for piezoelectric tensor and 
#         Born effective charges in dataset 3

# Set 3 : response-function calculations for all needed perturbations

 # getddk2  -1
 getwfk2  -1
#irdwfk2 1
    iscf2   3
  kptopt2   2        #use time-reversal symmetry only for k points
    nqpt2   1
     qpt2   0 0 0
  rfphon2   1        #do atomic displacement perturbation
 rfatpol2   1 6      #do for all atoms
  rfstrs2   3        #do strain perturbation
   rfdir2   1 1 1    #the full set of directions is needed
  tolvrs2   1.0d-10  #need reasonable convergence of 1st-order quantities


#calcul des constantes élastiques en utilisant les parametres des mailles et positions atomiques relaxées de fetih

#Definition de la maille elementaire
#**********************************
acell 2.956 4.543 4.388 Angstrom
angdeg 90.0 90.0 90.0
spgroup 17

#Definition des atomes
#*********************
ntypat  3
znucl   26 22 1
#brvltt -1
natom   6
natrd   3
typat   1 2 3
xred    0.0 0.206 0.25
0.5 0.25 0.75
0.0 0.0 0.0   
ixc 11

nband 40
#Definition de la procedure scf
#******************************
   iscf 3
   nstep  20

#Definition de la base d'ondes planes
#************************************
   ecut  15
   ngkpt 12 12 12
kptopt 1
#mkmem 0
#Structural relaxation
ecutsm 0.5
ntime 20
  
