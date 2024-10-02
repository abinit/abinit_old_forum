# HfS2 bulk PAWLDA SO 

prtwf 0
prtden 0
prteig 0
prtgeo 0

pawspnorb 1
#vdw_xc 6

# initial structure---------------------------------------------------------

acell  6.7199072919E+00  6.7199072919E+00  1.0728322452E+01
angdeg 90 90 120

rprim
1.0  0.0  0.0
-0.5 0.8660254037844386467637231707  0.0
0.0 0.0 1.0

ntypat 2          
znucl 72 16           
                  
natom 3
#spgroup 164
#natrd 2          
typat 1 2 2

             xred     -1.4459833242E-30 -3.4127342373E-30  2.3962857020E-18
                       6.6666666667E-01  3.3333333333E-01  2.5406340613E-01
                       3.3333333333E-01  6.6666666667E-01  7.4593659387E-01
#natfix 3
#iatfix 1 2 3
 
# base and k points---------------------------------------------------------

ecut 30.0
pawecutdg 70.0
ecutsm 0.5 
dilatmx 1.05   
kptopt 4          
ngkpt 12 12 6 
nshiftk 1         
shiftk      0.0 0.0 0.5

# electronic relaxation-----------------------------------------------------

nstep 200
ntime 200   
#toldfe 1.0d-6     
toldff 1.0d-11  
tolmxf 1.0d-10  
diemac 12 
 
ionmov 2 
optcell 2           # 2 - pelna relaksacja, 9 - nie zmienia acell_z    


                  
                  
                  
