ndtset 2
ecut   16
pawecutdg 24

ionmov 2 
ntime 50
tolmxf 1.0d-4
#set 1 for atomic position relaxation without changing acells and rprims
optcell1 0  # no changes in acell and rprim

#set 2 optimization by changing acells and rprims
optcell2 1 # 1 for optimization of volume only, 2 for full optimization of cell
strfact 100
ecutsm2 0.5
dilatmx2 1.5
getcell -1
getxred -1


nstep   100
tolvrs   1.0d-6
occopt   4
tsmear   0.04

symafm -1 -1 -1 -1 -1 -1 -1 -1 -1 -1 -1 -1 -1 -1 -1 -1 

nband 96

chkprim 0
acell  6.835538752  6.835538752  20.50661626

angdeg 90.0000 90.0000 90.0000
  
  ntypat  2 
  znucl   6 26
  natom   13
  typat   2 2 2 2 2 2 2 2 2 2 2 2 1
   xred   
0.00000   0.00000   0.00000
0.00000   0.50000   0.16667
0.50000   0.00000   0.16667
0.50000   0.50000   0.00000
0.00000   0.00000   0.33333
0.00000   0.50000   0.50000
0.50000   0.00000   0.50000
0.50000   0.50000   0.33333
0.00000   0.00000   0.66667
0.00000   0.50000   0.83333
0.50000   0.00000   0.83333
0.50000   0.50000   0.66667
0.50000   0.50000   0.50000


#antiferromagnetic order
nsppol   1
nspden   2
spinat  
 0. 0.  4.
 0. 0. -4.
 0. 0. -4.
 0. 0.  4.
 0. 0.  4.
 0. 0. -4.
 0. 0. -4.
 0. 0.  4.
 0. 0.  4.
 0. 0. -4.
 0. 0. -4.
 0. 0.  4.
 0. 0.  0.
  
ngkpt 10 10 6
nshiftk 1       
shiftk 0.5 0.5 0.5

 
 prtwf 0
 prteig 0 
 prtden 0






