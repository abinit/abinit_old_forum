#chkexit 1 
#wfoptalg 1
 ecut 30.0
 ecutsm 0.5 
# ngfft  96     96     96
 dilatmx 1.5 
# iprcel 45
# diemix 1.0 #  model DIElectric MIXing factor 

usepawu 1
pawecutdg 50.0
pawovlp 100
lpawu 2 2 -1 -1 -1
upawu 7 7 0 0 0
jpawu 1 1 0 0 0
vdw_xc 2

nband=128
occopt 7
tsmear 0.01
 kptopt    1
 ngkpt 4 4 4


# computational optimization
autoparal 2 
paral_kgb 1
#paral_atom 42
#npband 2
#bandpp 1
#npkpt 16
#npfft 1
use_slk 1
#np_slk 4
# system
 chkprim 0
# spgroup 161
# SPGAXOR 2
 symmorphi  0

 znucl 26 26 6 1 53 
 natom 42
 ntypat 5
 typat  1*1 1*2 21*3 16*4 4*5
acell 7.5234700000   7.6805600000  9.5337297652 angstrom
angdeg 80.0206048445 89.9841898422 87.5977600000
xred  
-0.04070 0.00000 0.01079 
0.53763 0.51863 0.49165 
0.17137 -0.06968 0.88712 
0.82373 0.77858 0.10147 
0.71523 0.56511 0.64970 
0.33541 0.71716 0.46195 
0.23501 0.02677 -0.00950 
-0.09017 0.85239 0.21013 
0.80868 0.54724 0.52222 
0.44649 0.73311 0.33921 
0.14473 0.19614 -0.03452 
0.83560 0.02787 0.20216 
0.77968 0.37506 0.49184 
0.43944 0.57396 0.28187 
0.02610 0.20376 0.84749 
0.70883 0.06268 0.08823 
0.66764 0.28808 0.60092 
0.32260 0.46098 0.36973 
0.04194 0.03849 0.79848 
0.70172 -0.09190 0.02468 
0.62502 0.40631 0.69776 
0.25899 0.54806 0.48169 
0.71316 0.68027 0.70215 
0.31687 0.81247 0.53355 
0.33360 -0.02055 0.07347 
0.01496 0.78875 0.28283 
0.88144 0.64981 0.45560 
0.52880 0.84396 0.29883 
0.15913 0.29789 0.03072 
0.87480 0.12228 0.26788 
0.82852 0.32109 0.40013 
0.51081 0.54376 0.18932 
-0.06832 0.31217 0.80682 
0.63236 0.18674 0.05542 
-0.03086 -0.00043 0.71137 
0.62192 0.89029 -0.06664 
0.54118 0.38047 0.79182 
0.17092 0.49370 0.56683 
0.27509 0.68238 0.85816 
0.85669 0.51878 0.06734 
0.59147 0.02699 0.62021 
0.25251 0.21039 0.33912

ndtset 1 #Number of DaTaSETs
 jdtset     1 

#
 restartxf1=-1 
# nband1 34
 nline1 5
 nstep1 200 #scf steps
 kptopt1 1
 getwfk1 0
 prtden1 -1
 toldfe1 1.0d-11
 iscf1 7
 ionmov1 2
 optcell1 2
 strfact=1d0
 ntime1 200

 getcell2 -1
 getxred2 -1
# nband2 34
 nline2 5
 nstep2 200 #scf steps
 kptopt2 1
 #getwfk2 -1
 prtden2 1
 toldfe2 1.0d-11
 iscf2 7
 ionmov2 0
 optcell2 0
#
 getcell3 2
 getxred3 2
# nband3 34
 nstep3 500 #scf steps
 kptopt3 1
 getwfk3 2
 getden3 2
 tolwfr3 1.0d-22
 iscf3 -2
 berryopt3 -1
 rfdir3 1 1 1
# polcen3 -0.5 -0.5 -0.5

#
#getcell4 2
#getxred4 2
# nband4 34
 nline4 6
 nstep4 500 #scf steps
 kptopt4 1
 #getwfk4 2
 #berryopt4 16 # reduced D 
 #red_efield4  1e-6 1e-6 1e-6
 #red_dfield4 0.0 0.0 0.0
 berryopt4 6 # reduced D 
 efield4  0 0 -1e-8
 dfield4 0.0 0.0 0.0
 rfdir4 1 1 1 
 polcen4  -0.5 -0.5 -0.5
#toldfe4 1d-5
 toldff4 1.0d-6 # TOLerance on the DiFference of Forces
 tolmxf4  1.0d-7 #  TOLerance on the MaXimal Force
 iscf4 7
 ionmov4 2
 optcell4 2
 ntime4 200
 berrysav4 0
 ddamp4 0.10
 maxestep4 0.02 
