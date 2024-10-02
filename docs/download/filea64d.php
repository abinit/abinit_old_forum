ndtset 2
gwpara 2
enunit 1
gw_qprange -14
#Dataset 1:
occopt 3
tsmear 0.002
#Kpoint grid definition
kptopt 1
ngkpt 6 6 6
nshiftk 1
nband 50
shiftk 0 0 0
istwfk *1
tolvrs  1.0d-15
#Common to all Hybrid Calculations
getwfk -1
ecutwfn 25
ecutsigx 30
getqps -1
#awtr 1
#HSE06
#optdriver2 4
#gwcalctyp2 125
#icutcoul2 5
#rcut2 9.090909

#PBE0
#optdriver2 4
#gwcalctyp2 215
#icutcoul2 6


#Dataset2: calculation of the B3LYP band gap
optdriver2 4
gwcalctyp2 315
icutcoul2 6
nband2 55

#definition of the plan waves 
ecut 50
pawecutdg 52
nsppol 2
ecutsm 0.5

#Definition of the SCF procedure
nstep 200
diemac 10

# Definition of the unit cell

rprim  1 0 0
       0 1 0
       0 0 1
#pawovlp 20 %
# Definition of the atom types
ntypat  3
znucl 55 82 17
                
                         
# Definition of the atoms
natom 5
typat  1 2 3 3 3
prtcif1 1


acell   3*5.6593742403 Angstr
xangst                 0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.8296869041E+00  2.8296869041E+00  2.8296869041E+00
                       2.8296869041E+00  0.0000000000E+00  2.8296869041E+00
                       2.8296869041E+00  2.8296869041E+00  0.0000000000E+00
                       0.0000000000E+00  2.8296869041E+00  2.8296869041E+00














