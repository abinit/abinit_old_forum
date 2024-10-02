
 ixc 2
 ecut 25.0
 ecutsm 0.5 
 #ngfft 64 64 64
 dilatmx 1.2 
 iprcel 45
 diemac 9.0 # model DIElectric MACroscopic constant 
 diemix 1.0 #  model DIElectric MIXing factor 

 occopt 1
 kptopt    2
 ngkpt 8 8 8 


# computational optimization
autoparal 1 
#max_ncpus 128
paral_kgb 1
#bandpp 2
#npband 34
#npkpt 54
#npfft 2
# system
# chkprim 0

# spgroup 161
# SPGAXOR 2
# symmorphi  0

 znucl 3 41 8
 natom 10
 ntypat 3
 typat  2*1 2*2 6*3
angdeg   5.51481012183313E+01  5.51481012183314E+01  5.51481012183314E+01
acell   1.02715029642356E+01  1.02715029642356E+01  1.02715029642356E+01
xred  
   0.28750000000000   0.28750000000000   0.28750000000000
   0.78750000000000   0.78750000000000   0.78750000000000
   0.01280000000000   0.01280000000000   0.01280000000000
   0.51280000000000   0.51280000000000   0.51280000000000
   0.14093333333333   0.36263333333333   0.74643333333333
   0.24643333333333   0.86263333333333   0.64093333333333
   0.36263333333333   0.74643333333333   0.14093333333333
   0.64093333333333   0.24643333333333   0.86263333333333
   0.74643333333333   0.14093333333333   0.36263333333333
   0.86263333333333   0.64093333333333   0.24643333333333
 ndtset 1 #Number of DaTaSETs
 jdtset   4

#
 restartxf1=-1 
 nband1 34
 nline1 5
 nstep1 50 #scf steps
 kptopt1 2
 getwfk1 0
 prtden1 1
 toldfe1 1.0d-11
 iscf1 7
 ionmov1 2
 optcell1 2
 ntime1 50

 #getcell2 -1
 #getxred2 -1
 nband2 34
 nline2 5
 nstep2 50 #scf steps
 kptopt2 2
 #getwfk2 -1
 prtden2 1
 toldfe2 1.0d-11
 iscf2 7
 ionmov2 0
 optcell2 0
#
 #getcell3 2
 #getxred3 2
 nband3 34
 nstep3 500 #scf steps
 kptopt3 2
 getwfk3 2
 getden3 2
 tolwfr3 1.0d-22
 iscf3 -2
 berryopt3 -1
 rfdir3 1 1 1
 polcen3 -0.5 -0.5 -0.5

#
#getcell4 2
#getxred4 2
 nband4 34
 nline4 6
 nstep4 500 #scf steps
 kptopt4 2
 #getwfk4 2
 #berryopt4 16 # reduced D 
 #red_efield4  1e-6 1e-6 1e-6
 #red_dfield4 0.0 0.0 0.0
 berryopt4 6 # reduced D 
 efield4  -1d-6 -1d-6 -1e-6
 dfield4 0.0 0.0 0.0
 rfdir4 1 1 1 
 polcen4  -0.5 -0.5 -0.5
toldfe4 1d-5
 #toldff4 1.0d-6 # TOLerance on the DiFference of Forces
 tolmxf4  1.0d-5 #  TOLerance on the MaXimal Force
 iscf4 7
 ionmov4 2
 optcell4 2
 ntime4 200
 berrysav4 0
 ddamp4 0.01 
 maxestep4 0.002
