# Gd2SiO5        (structurall param. from   
# 
# DOS 
ndtset   10

nsppol   2
nspden   2
nspinor  1
spinat   0  0  7
         0  0  7
         0  0  0
         0  0  0
         0  0  0
         0  0  0
         0  0  0
         0  0  0

#set1
toldfe1   1.0d-6

prtden1    1

#set2
iscf2    -3
getden2   1
getwfk2   1
prtdos2   2
dosdeltae2   0.003
tolwfr2    1.0d-10


#set3
iscf3    -3
getden3   1
getwfk3    1
prtdos3    3
pawprtdos3  1
natsph3  1
iatsph3    1
ratsph3     3.50 3.50 3.50 # Atomic radi : 3.40  #Ionic radi : 2.25
dosdeltae3   0.003
tolwfr3     1.0d-10

#set4
iscf4    -3
prtdos4    3
pawprtdos4  1
getden4    1
getwfk4    1
natsph4    1
iatsph4    2
ratsph4    3.50 3.50 3.50 # Atomic radi : 3.40  #Ionic radi : 2.25
dosdeltae4   0.003
tolwfr4     1.0d-10

#set5
iscf5    -3
prtdos5    3
pawprtdos5  1
getden5    1
getwfk5    1
natsph5   1
iatsph5   3
ratsph5   3.00 3.00 3.00 #Atomic radi : 2.08  #Ionic radi : 0.76
dosdeltae5   0.003
tolwfr5   1.0d-10

#set6
iscf6  -3
prtdos6 3
pawprtdos6  1
getden6 1
getwfk6  1
natsph6  1
iatsph6  4
ratsph6  2.60 2.60 2.60 #Atomic radi : 1.13  # Ionic radi : 2.38
dosdeltae6   0.003
tolwfr6  1.0d-10

#set7
iscf7  -3
prtdos7 3
pawprtdos7  1
getden7 1
getwfk7  1
natsph7  1
iatsph7  5
ratsph7  2.60 2.60 2.60 #Atomic radi : 1.13  # Ionic radi : 2.38
dosdeltae7   0.003
tolwfr7  1.0d-10

#set8
iscf8  -3
prtdos8 3
pawprtdos8  1
getden8 1
getwfk8  1
natsph8  1
iatsph8  6
ratsph8  2.60 2.60 2.60 #Atomic radi : 1.13  # Ionic radi : 2.38
dosdeltae8   0.003
tolwfr8  1.0d-10

#set9
iscf9  -3
prtdos9 3
pawprtdos9  1
getden9 1
getwfk9  1
natsph9  1
iatsph9  7
ratsph9  2.60 2.60 2.60 #Atomic radi : 1.13  # Ionic radi : 2.38
dosdeltae9   0.003
tolwfr9  1.0d-10

#set10
iscf10  -3
prtdos10 3
pawprtdos10  1
getden10 1
getwfk10  1
natsph10  1
iatsph10  8
ratsph10  2.60 2.60 2.60 #Atomic radi : 1.13  # Ionic radi : 2.38
dosdeltae10   0.003
tolwfr10  1.0d-10

#-----------------------------------------------------------------------

enunit   1
kptopt   1


fband   1.5
nbdbuf   4

ngkpt  2 3 3

acell      1.6990191391E+01  1.3013858526E+01  1.2782794118E+01 
angdeg    90    107.1411    90  
spgroup   14
spgaxor   1
spgorig   1
#chkprim   0
# brvltt   -1

znucl  64.0  14.0  8.0
ntypat  3

natom  32
natrd  8
typat 1 1 2 3 3 3 3 3 




xred                   1.1191138139E-01  1.4264731883E-01  4.1284517832E-01
                       5.2351429183E-01  6.2585840920E-01  2.3694193010E-01
                       2.0291016317E-01  5.8922712618E-01  4.6015350870E-01
                       2.0517060985E-01  4.3243190319E-01  6.4302611257E-01
                       1.3312064386E-01  4.5856789930E-01  2.5536334208E-01
                       3.8766447380E-01  6.3905167909E-01  5.0537729432E-01
                       9.8096252468E-02  7.7746730217E-01  4.4813684140E-01
                       3.8395835037E-01  3.8065121438E-01  5.5024631216E-02

#-------------------------------------------------------------------------------------               
pawovlp  30
ecut       20
ecutsm     0.5
pawecutdg  50


diemac  12
nstep   100
chksymbreak  0

#Lda+u--------------------------------------------------------------------------------  

usepawu   2
lpawu     3 -1 -1
upawu     9.2 0.0 0.0 eV   #Rare earth oxide alloys and stacked layers: An ab initio study
jpawu     1.2 0.0 0.0 eV   #Rare earth oxide alloys and stacked layers: An ab initio study

  

