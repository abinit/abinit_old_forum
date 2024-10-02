#*****************************************************************************************
#                              Optimization Lu2SiO5                                      *    
#      (structurall param. "Lu2SiO5 by single-crystal X-ray and neutron diffraction")    *
#*****************************************************************************************

optcell   1
ionmov    3
dilatmx   1.1
tolmxf    1.94d-4

#-------------------------------------------------------------------------------------

#K-points and sym
kptopt    1

#------------------------------------------------------------------------------------

# Structural parameters
acell     26.98038 12.54740 19.36308              
#rprim    1.0000000000 0.0000000000 0.00000000000                              
         0.0000000000 1.0000000000 0.00000000000
        -0.3202657984 0.0000000000 0.94732772491

spgroup   15
spgaxor   1
spgorig   1
#chkprim   0
       
natom     64
natrd     8  
typat     1 1 2 3 3 3 3 3  
znucl     71 14 8
ntypat    3
xred         0.53734 0.75593 0.46705
             0.14093 0.37735 -0.16362
             0.31792 0.59171 0.19311
             0.41117 0.50618 0.36201
             0.38016 0.78834 0.17623
             0.20230 0.64896 0.17684 
             0.29842 0.42890 0.06298
             0.01773 0.40340 -0.10250    

#------------------------------------------------------------------------------------             

#Basic definitions
ecut        60         #"Electronic properties and 4f / 5d transitions in Ce-doped Lu2SiO5: a theoretical investigation"
ecutsm      0.5
#pawecutdg   40
#pawovlp     15

#-----------------------------------------------------------------------------------

#SCF cycle parameters
toldfe      1.0d-6
nstep       100
ntime       100

#ixc        1        #defult 
diemac      12

# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
# optforces 1
nbdbuf      4

  

