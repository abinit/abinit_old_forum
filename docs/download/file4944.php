 acell 3*7.128759292410183  #compression 4
 ngfft 3*14                 #need to be defined for recursion
 tsmear   3.1668297
 mditemp  1000000
 recptrott 10   #trotter parameter
 occopt 3
 enunit 2      #All units on output
 nline  5      #defaut +1
 nstep  20

 timopt -1  #time analysis (debugging option)

#recursion variables

 ecut   5          #no ecut needed
 nsym   1          #no symetries for recursion method
 chkprim 0         #need a cubic cell (not primitive)
 boxcutmin 1.0d0   #link between ecut <> ngfft
 nkpt 1            #recursion doesn't work with more  
 toldfe    1.e-20  #not the exit criteria for recursion

 tfkinfunc 2       #recursion method
 recnrec 50       #maximum recursion order
 recnpath 100   #discretisation path integral
 rectolden 1.0d-2 #convergence criterium for the density

# recrcut .d0     #Truncation radius (net used in the test)
# recefermi       #initial guess for fermi energy

#ions
 znucl  2
 natom  4         #cubic cell for recursion method 
 typat  4*1

 rprim      #cubic cell for recursion method for 4 ions
 1 0 0
 0 1 0 
 0 0 1  

 xred   #CFC for 4 ions
 3*0.0d0
 0.5 0.5 0.0
 0.5 0.0 0.5
 0.0 0.5 0.5

 kptopt 0



#Parallelization variables
 wfoptalg 4
 nloalg 4
 fftalg 401
 iprcch 0
 intxc 0
 istwfk 1
 fft_opt_lob 2
 paral_kgb 1
  
#molecular dynamic
 ionmov 12
 dtion 50 
 ntime 2

 
#more paralellization  variables
 nband  20
 npband  2
 npfft 2
 npkpt 1
 accesswff 0 # Only for testing purposes 
