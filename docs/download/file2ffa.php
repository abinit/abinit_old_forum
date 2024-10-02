optcell 1
dilatmx 1.1
#spgroup 123
angdeg 90 90 90
#tsmear 0.02

ndtset 12

#relaxation
ionmov  2              
ntime   100             

natfix 5
iatfix 1 2 3 4 5
#natfix 5
#iatfixy 1 2 3 4 5
#natfixz 4
#iatfixz 1 3 4 5
#Cell and atoms definition
acell 5.59 5.59 5.63 angstrom
rprim 0.0 0 1
       1 0.0 0
       0 1 0
ntypat 3  natom 5  typat 2 1 3 3 3
xred                   0.0 0.0 0.00
                       0.5 0.5 0.5
                       0.5 0.0 0.0
                       0.0 0.5 0.0
                       0.0 0.0 0.50
znucl 55 82 17  nband 25

#Basis definitions
ecut 45
ecutsm 0.5
pawecutdg 100

#SCF cycle parameters
tolmxf 1.0d-7
nstep 200
tolvrs 1.0d-12
#K-points and sym
       
occopt 1
ngkpt 4 4 6
nshiftk 1
shiftk 0.5 0.5 0.5
        
nsym 0

#I/O parameters
prtwf 1 prtden 1  prteig 1
getwfk -1
prtcif 1
prtgeo 1
strtarget1 3.39892892272001E-05 3.39892892272001E-05 3.39892892272001E-05 0 0 0
strtarget2 0 0 0 0 0 0
strtarget3 -3.39892892272001E-05 -3.39892892272001E-05 -3.39892892272001E-05 0 0 0
strtarget4 -6.79785784544003E-05 -6.79785784544003E-05 -6.79785784544003E-05 0 0 0
strtarget5 -0.0001019679 -0.0001019679 -0.0001019679 0 0 0
strtarget6 -0.0001359572 -0.0001359572 -0.0001359572 0 0 0
strtarget7 -0.0001699464 -0.0001699464 -0.0001699464 0 0 0
strtarget8 -0.0002039357 -0.0002039357 -0.0002039357 0 0 0
strtarget9 -0.000237925 -0.000237925 -0.000237925 0 0 0
strtarget10 -0.0002719143 -0.0002719143 -0.0002719143 0 0 0
strtarget11 -0.0003059036 -0.0003059036 -0.0003059036 0 0 0
strtarget12 -0.0003398929 -0.0003398929 -0.0003398929 0 0 0
strfact 100
