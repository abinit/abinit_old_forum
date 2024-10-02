 ndtset 5


#Second dataset : NSC run with large number of bands, and points in the IBZ
    iscf1 -2  
   nband1 60  ! This number of bands might be too low for non-linear optics and real part of linear optics
   nstep1 300
  kptopt1  1 
  irdden1 1   ! Usual file handling data
  irdwfk1  1  
  tolwfr1  1.e-17 


#Third dataset : NSC run with large number of bands, and points in the the full BZ
    iscf2 -2  
   nband2 60  ! This number of bands might be too low for non-linear optics and real part of linear optics 
   nstep2 300
  kptopt2  3
  irdden2 1   ! Usual file handling data
  getwfk2  1
   tolwfr2  1.0e-17  


#Fourth dataset : ddk response function along axis 1
   iscf3 -3
  nband3 60   ! This number of bands might be too low for non-linear optics and real part of linear optics
  nstep3  1  nline3  0
 kptopt3  3
   tolwfr3  1.0e-17
   nqpt3  1  qpt3  0.0d0 0.0d0 0.0d0 
  rfdir3  1 0 0
 rfelfd3  2
 getwfk3  2
 rfatpol3 4 13
 
#Fifth dataset : ddk response function along axis 2
   iscf4 -3
  nband4 60   ! This number of bands might be too low for non-linear optics and real part of linear optics
  nstep4  1  nline4  0
 kptopt4  3
   tolwfr4  1.0e-17
   nqpt4  1  qpt4  0.0d0 0.0d0 0.0d0
  rfdir4  0 1 0
 rfelfd4  2
 getwfk4  2
 rfatpol4 4 13

#Sixth dataset : ddk response function along axis 3
   iscf5 -3
  nband5 60   ! This number of bands might be too low for non-linear optics and real part of linear optics
  nstep5  1  nline5  0
 kptopt5  3
   tolwfr5  1.0e-17  
   nqpt5  1  qpt5  0.0d0 0.0d0 0.0d0
  rfdir5  0 0 1
 rfelfd5  2
 getwfk5  2
 rfatpol5 4 13


#Data common to all datasets
 nshiftk 4
 shiftk  0.5 0.5 0.5
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
 ngkpt  4 6 2        ! This is much too low : should be at least 24x24x24
 ngfft        30      30     180
 occopt 3
 tsmear 0.001
acell    7.3022920000E+00  7.3022920000E+00  1.0327000000E+01 Bohr
 #amu 69.72  74.9216
 #diemac 10.0
 ecut 20.00             ! This is also too low
# iscf 3
 ixc 11
 nbdbuf 2
            rprim    1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  1.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  4.0000000000E+00

chkprim 0
ntypat 3          # There is only one type of atom
znucl 31 15 14

natom 16           # Three atoms per cell: three aluminum layers and some vacuum
typat 2 1 2 1 2 1 2 9*3


             xred    0.0000000000E+00  0.0000000000E+00 -4.2927101389E-03
                     0.0000000000E+00  5.0000000000E-01  6.0268031303E-02
                     5.0000000000E-01  5.0000000000E-01  1.2351008304E-01
                     5.0000000000E-01  1.0000000000E+00  1.8750000000E-01
                     0.0000000000E+00  0.0000000000E+00  2.5148991696E-01
                     0.0000000000E+00  5.0000000000E-01  3.1473196870E-01
                     5.0000000000E-01  5.0000000000E-01  3.7929271014E-01
                     5.0000000000E-01  1.0000000000E+00  4.3727216486E-01
                     0.0000000000E+00  0.0000000000E+00  4.9918664961E-01
                     0.0000000000E+00  5.0000000000E-01  5.6168046817E-01
                     5.0000000000E-01  5.0000000000E-01  6.2460120594E-01
                     5.0000000000E-01  1.0000000000E+00  6.8750000000E-01
                     0.0000000000E+00  0.0000000000E+00  7.5039879406E-01
                     0.0000000000E+00  5.0000000000E-01  8.1331953183E-01
                     5.0000000000E-01  5.0000000000E-01  8.7581335039E-01
                     5.0000000000E-01  1.0000000000E+00  9.3772783514E-01


