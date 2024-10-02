optcell 2
dilatmx 1.1
#spgroup 127
angdeg 90 90 90
#tsmear 0.02

ndtset 10

#relaxation
ionmov  2              
ntime   100             

#natfixx 1
#iatfixx 1
#Cell and atoms definition
acell 5.73892378 5.73892378 5.73892378 Angstr
rprim 0.0 0 1
       1 0.0 0
       0 1 0
ntypat 3  natom 5  typat 1 2 3 3 3
xred  0.0 0.0 0.00
                       0.5 0.5 0.5
                       0.5 0.5 0.0
                       0.0 0.5 0.5
                       0.5 0.0 0.50
znucl 55 82 17  nband 25

#Basis definitions
ecut 45
ecutsm 0.5
pawecutdg 100

#SCF cycle parameters
tolmxf 1.0d-5
nstep 200
tolvrs 1.0d-15
#K-points and sym
       
occopt 1
ngkpt 4 4 4
nshiftk 1
shiftk 0.5 0.5 0.5
        
nsym 0
#I/O parameters
prtwf 1 prtden 1  prteig 1
getwfk -1
prtcif 1
prtgeo 1
strtarget1 -3.39892892272001E-05 -3.39892892272001E-05 -3.39892892272001E-05 0 0 0
strtarget2 -6.79785784544003E-05 -6.79785784544003E-05 -6.79785784544003E-05 0 0 0
strtarget3 -0.0001019679 -0.0001019679 -0.0001019679 0 0 0
strtarget4 -0.0001359572 -0.0001359572 -0.0001359572 0 0 0
strtarget5 -0.0001699464 -0.0001699464 -0.0001699464 0 0 0
strtarget6 -0.0002039357 -0.0002039357 -0.0002039357 0 0 0
strtarget7 -0.000237925 -0.000237925 -0.000237925 0 0 0
strtarget8 -0.0002719143 -0.0002719143 -0.0002719143 0 0 0
strtarget9 -0.0003059036 -0.0003059036 -0.0003059036 0 0 0
strtarget10 -0.0003398929 -0.0003398929 -0.0003398929 0 0 0
strfact 100
