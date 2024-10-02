#Common input variables
# lbo_optic 
#Definition of the unit cell
acell 1.5865743182E+01  1.3951103122E+01  9.8653919020E+00 Bohr
rprim         1.0000000000E+00  0.0000000000E+00 0.0000000000E+00
              0.0000000000E+00  1.0000000000E+00 0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00 1.0000000000E+00 

ntypat 3          
znucl 8 5 3     

spgroup 33
natom 36
natrd 9
typat    1  1  1  1  1  2  2  2  3 

xred    1.1772106811E-01  2.0534793873E-01  7.5152366775E-01
                     9.4423261837E-01  2.9562350124E-01  8.3269042269E-02
                     9.1789408549E-01  7.9569386154E-04  9.0454637921E-01
                     8.3799803203E-01  3.7271638898E-01  4.7598514007E-01
                     7.5899329392E-01  8.8977531537E-02  2.7973039703E-01
                     9.9303547888E-01  1.6263547929E-01  9.0912544950E-01
                     8.4276524339E-01  2.4660923257E-01  2.8329357597E-01
                     8.0576137672E-01  9.4121393155E-01  1.0150798690E-01
                     9.1891294241E-01  5.6725337339E-01  4.3628361314E-02

prtgeo 3

#Exchange-correlation functional
ixc 3                 # LDA, old Teter rational polynomial parametrization (4/91) fit to Ceperley-Alder data (no spin-polarization)

#Definition of the planewave basis set
ecut 28.0           # Maximal kinetic energy cut-off, in Hartree

#Definition of the k-point grid
kptopt 1

#Definition of the SCF procedure
iscf 3
nbdbuf 2
diemac 2.2            # Although this is not mandatory, it is worth to
                       # precondition the SCF cycle. The model dielectric
                       # function used as the standard preconditioner
                       # is described in the "dielng" input variable section.
                       # The dielectric constant of AlAs is smaller that the one of Si (=12).
# toldfe 1.0d-8
tolwfr  1.0e-20 

ndtset 6
#First dataset : SC run with kpoints in the IBZ
  iscf1   3
  nband1  80 
  nstep1  200   
  kptopt1 1
  nbdbuf1 0
  prtden1 1   getden1 0   getwfk1 0    ! Usual file handling data

#Second dataset : NSC run with large number of bands, and points in the IBZ
   iscf2  -2  
   nband2  160   ! This number of bands might be too low for non-linear optics and real part of linear optics
   nstep2  200
   kptopt2 1
   getwfk2 1   getden2 1   ! Usual file handling data

#Third dataset : NSC run with large number of bands, and points in the the full BZ
   iscf3  -2  
   nband3  160  ! This number of bands might be too low for non-linear optics and real part of linear optics 
   nstep3  200
   kptopt3 3
   getwfk3 2   getden3 1   ! Usual file handling data

#Fourth dataset : ddk response function along axis 1
  iscf4  -3
  nband4  160  ! This number of bands might be too low for non-linear optics and real part of linear optics
  nstep4  200  nline4  0
  kptopt4 3
  nqpt4   1  qpt4  0.0d0 0.0d0 0.0d0 
  rfdir4  1 0 0
  rfelfd4 2
  getwfk4 3

#Fifth dataset : ddk response function along axis 2
  iscf5  -3
  nband5  160   ! This number of bands might be too low for non-linear optics and real part of linear optics
  nstep5  200  nline5  0
  kptopt5 3
  nqpt5   1  qpt5  0.0d0 0.0d0 0.0d0
  rfdir5  0 1 0
  rfelfd5 2
  getwfk5 3

#Sixth dataset : ddk response function along axis 3
  iscf6  -3
  nband6  160   ! This number of bands might be too low for non-linear optics and real part of linear optics
  nstep6  200  nline6  0
  kptopt6 3
  nqpt6   1  qpt6  0.0d0 0.0d0 0.0d0
  rfdir6  0 0 1
  rfelfd6 2
  getwfk6 3
