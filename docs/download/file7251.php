#occopt 1
#tsmear 0.1
# Datasets definition
#  ndtset 3
ndtset 2

  positron1  0  ! Dataset 1 is a simple electronic GS calculation

  positron2  1  ! Dataset 2 is a positronic GS calculation
  getden2    1  !   in presence of the previous electronic density
#  positron3 -1  ! Dataset 4 is an electronic/positronic GS calculation
                !   without storage of the wave-functions
  kptopt2    0  !   Use only k=gamma point

  ! For testing purpose, several electron-positron correlations are used
    ixcpositron2  1
#    ixcpositron3  1

chkprim1 0
chkprim2 0

#Definition of the unit cell
diemac 6.3  ! Dielectical constant for the material
acell   3*16.98 angstrom  #Valor para ZnSe
rprim 1.0 0.0 0.0
0.0 1.0 0.0
0.0 0.0 1.0
#angdeg 90 90 90
ntypat   2
znucl   30 34
natom 64
typat 32*1 32*2
xred
0.000     0.0000    0.0000
0.7500    0.7500    0.5000
0.2500    0.0000    0.2500
0.2500    0.2500    0.0000
0.5000    0.0000    0.0000
0.5000    0.2500    0.2500
0.7500    0.0000    0.2500
0.7500    0.2500    0.0000
0.0000    0.5000    0.0000
0.0000    0.7500    0.2500
0.2500    0.5000    0.2500
0.2500    0.7500    0.0000
0.0000    0.0000    0.5000
0.0000    0.2500    0.7500
0.2500    0.0000    0.7500
0.2500    0.2500    0.5000
0.5000    0.5000    0.0000
0.5000    0.7500    0.2500
0.7500    0.5000    0.2500
0.7500    0.7500    0.0000
0.5000    0.0000    0.5000
0.5000    0.2500    0.7500
0.7500    0.0000    0.7500
0.7500    0.2500    0.5000
0.0000    0.5000    0.5000
0.0000    0.7500    0.7500
0.2500    0.5000    0.7500
0.2500    0.7500    0.5000
0.5000    0.5000    0.5000
0.5000    0.7500    0.7500
0.7500    0.5000    0.7500
0.0000    0.2500    0.2500
0.8750    0.8750    0.6250
0.6250    0.6250    0.6250
0.6250    0.8750    0.8750
0.8750    0.6250    0.8750
0.6250    0.1250    0.1250
0.6250    0.3750    0.3750
0.8750    0.1250    0.3750
0.8750    0.3750    0.1250
0.1250    0.6250    0.1250
0.1250    0.8750    0.3750
0.3750    0.6250    0.3750
0.3750    0.8750    0.1250
0.1250    0.1250    0.6250
0.1250    0.3750    0.8750
0.3750    0.1250    0.8750
0.3750    0.3750    0.6250
0.6250    0.6250    0.1250
0.6250    0.8750    0.3750
0.8750    0.6250    0.3750
0.8750    0.8750    0.1250
0.6250    0.1250    0.6250
0.6250    0.3750    0.8750
0.8750    0.1250    0.8750
0.8750    0.3750    0.6250
0.1250    0.6250    0.6250
0.1250    0.8750    0.8750
0.3750    0.6250    0.8750
0.3750    0.8750    0.6250
0.1250    0.1250    0.1250
0.1250    0.3750    0.3750
0.3750    0.1250    0.3750
0.3750    0.3750    0.1250


kptopt 1
occopt 1
ngkpt 4 4 4



  ! K-points and occupations
    kptopt 1
    ngkpt 4 4 4
    occopt 1
!    occopt 7
!    nband 20
    posocc 1.0  ! Occupation number for the positron 

  ! Convergence parameters
    ecut 8. pawecutdg 15.
    iscf 17   ! iscf>=10 recommended for electron-positron calculation
              ! (although not mandatory)
    nstep 50  tolvrs 1.d-10
    postoldfe 1.d-6  !  Only used for automatic electron-positron
    posnstep  20     !  calculations (datasets 4 and 5)

!   Miscelaneous
    prtwf 0 prteig 0           ! To save disk space
    optforces 0 optstress 0    ! Not relevant here

