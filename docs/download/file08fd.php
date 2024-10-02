# Prepare the computation of linear and non-linear optic properties
# of GaAs crystal : ground-state with few bands,
# then non-SCF with a larger number of bands, then ddk for different directions
# Note that the k point sampling shoud be finer for significant results. The cut-off energy is also too low.

 ndtset 6

#First dataset : SC run with kpoints in the IBZ
  nband1  45     
  nstep1 200   
 kptopt1 1
 nbdbuf1 0
 prtden1 1   getden1 0   getwfk1 0    # Usual file handling data

#Second dataset : NSC run with large number of bands, and points in the IBZ
    iscf2 -2  
   nband2 45  # This number of bands might be too low for non-linear optics and real part of linear optics
   nstep2 200
  kptopt2  1
  getwfk2  1   getden2 1   # Usual file handling data

#Third dataset : NSC run with large number of bands, and points in the the full BZ
    iscf3 -2  
   nband3 45  # This number of bands might be too low for non-linear optics and real part of linear optics 
   nstep3 200
  kptopt3  3
  getwfk3 2   getden3 1   # Usual file handling data


#Fourth dataset : ddk response function along axis 1
   iscf4 -3
  nband4 45   # This number of bands might be too low for non-linear optics and real part of linear optics
  nstep4  200  #nline4  0  prtwf4  3
 kptopt4  3

   nqpt4  1  qpt4  0.0d0 0.0d0 0.0d0 
  rfdir4  1 0 0
 rfelfd4  2
 getwfk4  3  

#Fifth dataset : ddk response function along axis 2
   iscf5 -3
  nband5 45   # This number of bands might be too low for non-linear optics and real part of linear optics
  nstep5 200  #nline5  0   prtwf5  3
 kptopt5  3

   nqpt5  1  qpt5  0.0d0 0.0d0 0.0d0
  rfdir5  0 1 0
 rfelfd5  2
 getwfk5  3

#Sixth dataset : ddk response function along axis 3
   iscf6 -3
  nband6 45   # This number of bands might be too low for non-linear optics and real part of linear optics
  nstep6 200  #nline6  0    prtwf6  3
 kptopt6  3

   nqpt6  1  qpt6  0.0d0 0.0d0 0.0d0
  rfdir6  0 0 1
 rfelfd6  2
 getwfk6  3

#Data common to all datasets
 nshiftk 4
 shiftk  0.5 0.5 0.5
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5

 ngkpt 20 20 20            # This is much too low : should be at least 24x24x24

 acell 3*6.00212 Angstrom
 amu 132.9054  207.2  79.904
 diemac 12.0
 ecut 52.51291             # This is also too low
 ixc 11
 natom 5  nbdbuf 2
 ntypat 3
 rprim 1 0 0
       0 1 0
       0 0 1 
        
 xred 0.0 0.0 0.00
      0.5 0.5 0.50
      0.5 0.5 0.00
      0.0 0.5 0.50
      0.5 0.0 0.50

 tnons 0 #72*0.0
 typat  1 2 3 3 3   tolwfr  1.e-18
 znucl 55 82 35
 #autoparal 2
 #paral_kgb 0
 #occopt 1
