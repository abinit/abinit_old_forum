# Gd2SiO5      (structurall param. from "Luminescence and structural properties...")   
# Struc. Opt.(Paper data, alpha=90,Beta=107.58,Gama=90)
#-----------------------------------------------------------------------------------

#spin-------------------------------------------------------------------------------
nsppol     2
nspden     2
nspinor    1
spinat     0  0  7
           0  0  7
           0  0  0
           0  0  0
           0  0  0
           0  0  0
           0  0  0
           0  0  0

#OPt---------------------------------------------------------------------------------

optcell    1
ionmov     3
dilatmx    1.1
tolmxf     1.94d-4

#Kpoint------------------------------------------------------------------------------

kptopt     1

#Parameter---------------------------------------------------------------------------

acell     17.23430  13.34147  12.71786
angdeg    90    107.58    90

spgroup    14
spgaxor    1
spgorig    1
#chkprim    0

#npsp       4
znucl      64 14 8
ntypat     3
#ntypalch   1
#mixalch    0.5 0.5

natom      32
natrd      8 #use it when we use the spgroup
typat      1 1 2 3 3 3 3 3 

xred   0.11796  0.1440  0.4238                
       0.52206  0.6254  0.2256
       0.19811  0.5805  0.4774
       0.19092  0.4746  0.6541
       0.13651  0.4847  0.3289
       0.36432  0.6061  0.5009
       0.11861  0.7538  0.5078
       0.36811  0.4158  0.0118
     
           
#-------------------------------------------------------------------------------------               
pawovlp    25
ecut       30
ecutsm     0.5
pawecutdg  70
#ixc       1        #defult 
toldfe     1.0d-6


diemac     12
nstep      100
ntime      100
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
#optforces 1
nbdbuf     4

#Lda+u--------------------------------------------------------------------------------  

usepawu   2
lpawu     3 -1 -1
upawu     9.2 0.0 0.0 eV   #Rare earth oxide alloys and stacked layers: An ab initio study
jpawu     1.2 0.0 0.0 eV   #Rare earth oxide alloys and stacked layers: An ab initio study
