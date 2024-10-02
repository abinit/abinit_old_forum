
# Se-G.S: 27 atoms for PAW
#----------------------------------
 #Structure and Atom
  acell  13.06551  13.06551  14.84835 angstrom
 angdeg 90 90 120
 ntypat 1
  znucl 34  #Se
  natom 27
  typat 27*1
   xred 0.072333333333333                   0   0.055555555555556
   0.072333333333333                   0   0.388888888888889
   0.072333333333333                   0   0.722222222222222
   0.072333333333333   0.333333333333333   0.055555555555556
   0.072333333333333   0.333333333333333   0.388888888888889
   0.072333333333333   0.333333333333333   0.722222222222222
   0.072333333333333   0.666666666666667   0.055555555555556
   0.072333333333333   0.666666666666667   0.388888888888889
   0.072333333333333   0.666666666666667   0.722222222222222
   0.405666666666667                   0   0.055555555555556
   0.405666666666667                   0   0.388888888888889
   0.405666666666667                   0   0.722222222222222
   0.405666666666667   0.333333333333333   0.055555555555556
   0.405666666666667   0.333333333333333   0.388888888888889
   0.405666666666667   0.333333333333333   0.722222222222222
   0.405666666666667   0.666666666666667   0.055555555555556
   0.405666666666667   0.666666666666667   0.388888888888889
   0.405666666666667   0.666666666666667   0.722222222222222
   0.739000000000000                   0   0.055555555555556
   0.739000000000000                   0   0.388888888888889
   0.739000000000000                   0   0.722222222222222
   0.739000000000000   0.333333333333333   0.055555555555556
   0.739000000000000   0.333333333333333   0.388888888888889
   0.739000000000000   0.333333333333333   0.722222222222222
   0.739000000000000   0.666666666666667   0.055555555555556
   0.739000000000000   0.666666666666667   0.388888888888889
   0.739000000000000   0.666666666666667   0.722222222222222


#----------------------------------
#K-Points
 kptopt 1
  ngkpt 6 6 6
nshiftk 1
 shiftk   0.0 0.0 0.0

#-------------------------------
# Structural Optimization
  optcell 1
   ionmov 2
    ntime 1
  dilatmx 1.05
   tolmxf 1.0d-6

chksymbreak 0
  chkprim 0
  maxnsym 1000
 
#-------------------------------
# Grid 
     ecut 12
   ecutsm 0.5
pawecutdg 24
#-------------------------------
# I/O
 nstep 20
tolvrs 1.0d-10   
diemac 7.0
   ixc 1
irdden 1
  iscf 17 #for PAW
istwfk 28*1  
#------------------------------
# DoS: PAW 
   prtdos 3
pawprtdos 1
   natsph 1 
   iatsph 1
   ratsph 4.0
#-------------------------------
# File Control
prtden 1

# Occupation 
occopt 7     
tsmear 0.005
nband  100
