optcell 2 
prtcif 1

prtgeo 1
#tsmear 0.02
ndtset 4
strtarget1 -3.39892892272001E-05 -3.39892892272001E-05 -3.39892892272001E-05 0 0 0 #1
strtarget2 -6.79785784544003E-05 -6.79785784544003E-05 -6.79785784544003E-05 0 0 0 #2
strtarget3 -0.0001019679         -0.0001019679         -0.0001019679 0 0 0 #3
strtarget4 -0.0001359572         -0.0001359572         -0.0001359572 0 0 0 #4

#relaxation
ionmov  2              
ntime   100             
tolmxf  5.0d-6
dilatmx 1.05
#Cell and atoms definition
 acell 3*5.73892378 angstrom
 rprim 0.0 0 1
       1 0.0 0
       0 1 0
 ntypat 3  natom 5  typat 1 2 3 3 3
 xred  0.0 0.0 0.00
                       0.5 0.5 0.50
                       0.5 0.5 0.00
                       0.0 0.5 0.50
                       0.5 0.0 0.50
 znucl 55 82 17  nband 40

#Basis definitions
 ecut 38
 ecutsm 0.5
pawecutdg 100

#SCF cycle parameters
 tolvrs 1.0d-15
 nstep 200
iscf    5
#K-points and sym
 #nsym 0       
 occopt 1
 ngkpt 6 6 6
 nshiftk 4
 shiftk 0.5 0.5 0.5
        0.5 0.0 0.0
        0.0 0.5 0.0
        0.0 0.0 0.5

#I/O parameters
prtwf 1 prtden 0  prteig 0
getwfk -1
timopt  2


