#LiBH4
#Response function calculation for:
#    * rigid-atom elastic tensor
#    * rigid-atom piezoelectric tensor
#    * interatomic force constants at gamma
#    * Born effective charges

   ndtset   3

# Set 1 : Initial self-consistent run
    iscf1   5
  kptopt1   1
  tolvrs1   1.0d-18  #need excellent convergence of GS quantities for RF runs

# Set 2 : Calculate the ddk wf's - needed for piezoelectric tensor and 
#         Born effective charges in dataset 3

  getwfk2  -1
    iscf2  -3        #this option is needed for ddk
  kptopt2   2        #use time-reversal symmetry only for k points
    nqpt2   1        #one wave vector will be specified
     qpt2   0 0 0    #need to specify gamma point
  rfelfd2   2        #set for ddk wf's only
   rfdir2   1 1 1    #full set of directions needed
  tolwfr2   1.0d-18  #only wf convergence can be monitored here
# Set 3 : response-function calculations for all needed perturbations

  getddk3  -1
  getwfk3  -2
    iscf3   3
  kptopt3   2        #use time-reversal symmetry only for k points
    nqpt3   1
     qpt3   0 0 0
  rfphon3   1        #do atomic displacement perturbation
 rfatpol3   1 24      #do for all atoms
  rfstrs3   1        #do strain perturbation
   rfdir3   1 1 1    #the full set of directions is needed
  tolvrs3   1.0d-10  #need reasonable convergence of 1st-order quantities


#calcul des constantes élastiques en utilisant les parametres des mailles et positions atomiques relaxées de LiBH4

#Definition de la maille elementaire
#**********************************
   acell 13.325731846634  8.236003928614 12.627796873193 bohr
   angdeg 90.0 90.0 90.0
occup
#Definition des atomes
#*********************
   natom 24
   ntypat 3
   znucl 3 5 1
   typat 1 1 1 1 2 2 2 2 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3
   xred  
              1.5874508662E-01  2.5000000000E-01  1.0900390291E-01
              8.4125491338E-01  7.5000000000E-01  8.9099609709E-01
              6.5874508662E-01  2.5000000000E-01  3.9099609709E-01
              3.4125491338E-01  7.5000000000E-01  6.0900390291E-01
              3.0819854781E-01  2.5000000000E-01  4.2338792046E-01
              6.9180145219E-01  7.5000000000E-01  5.7661207954E-01
              8.0819854781E-01  2.5000000000E-01  7.6612079543E-02
              1.9180145219E-01  7.5000000000E-01  9.2338792046E-01
              9.1054465637E-01  2.5000000000E-01  9.2965423947E-01
              8.9455343633E-02  7.5000000000E-01  7.0345760527E-02
              4.1054465637E-01  2.5000000000E-01  5.7034576053E-01
              5.8945534363E-01  7.5000000000E-01  4.2965423947E-01
              4.0357322395E-01  2.5000000000E-01  2.7043669825E-01
              5.9642677605E-01  7.5000000000E-01  7.2956330175E-01
              9.0357322395E-01  2.5000000000E-01  2.2956330175E-01
              9.6426776045E-02  7.5000000000E-01  7.7043669825E-01
              2.0588376729E-01  2.4809484419E-02  4.2302417245E-01
              7.9411623271E-01  9.7519051558E-01  5.7697582755E-01
              7.0588376729E-01  2.4809484419E-02  7.6975827555E-02
              2.9411623271E-01  9.7519051558E-01  9.2302417245E-01
              2.9411623271E-01  5.2480948442E-01  9.2302417245E-01
              7.0588376729E-01  4.7519051558E-01  7.6975827555E-02
              7.9411623271E-01  5.2480948442E-01  5.7697582755E-01
              2.0588376729E-01  4.7519051558E-01  4.2302417245E-01 
ixc 11


#Definition de la procedure scf
#******************************
   iscf 3
   nstep  5000

#Definition de la base d'ondes planes
#************************************
   ecut  50
   ngkpt 4 4 4
kptopt 1
#mkmem 0
#Structural relaxation
ecutsm 0.5
ntime 5000
  
