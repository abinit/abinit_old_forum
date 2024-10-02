

   ndtset  3
   ecut 14  
pawecutdg 28.



  nstep   1000
toldff 5.0d-5
 occopt   7
 tsmear   0.04
chkprim 0
 ntypat   1 
  znucl   22
    iprcel 45  
  chksymbreak 0
  prtpot 1 
  
  nsppol 2
  spinat  
  0. 0. 3.
  0. 0. 3.
  0. 0. 3.
  0. 0. 3.
  0. 0. 3.
  0. 0. 3.



  
#Definition of the unit cell
# dataset 1 001 surface plane

acell1 5.54896 5.54896 59.80435
angdeg1 90.0000 90.0000 60.0000
natom1 6
typat1 1 1 1 1 1 1  
xred1
0.66667   0.66667  -0.00000  
0.66667   0.66667   0.14713   
0.66667   0.66667   0.29426   
0.33333   0.33333   0.07356   
0.33333   0.33333   0.22069   
0.33333   0.33333   0.36782




# dataset 2 100 surface plane

acell2  5.54896 8.79887 49.02004
angdeg2 90.0000 90.0000 90.0000

natom2 6
typat2 1 1 1 1 1 1 

xred2
0.00000   0.25000   0.00000   
0.50000   0.25000   0.09803  
0.00000   0.25000   0.19606   
0.50000   0.75000   0.03268  
0.00000   0.75000   0.13071   
0.50000   0.75000   0.22874 




# dataset 3 110 surface plane

acell3 8.79887 9.61115 43.35614
angdeg3 90.0000 90.0000 90.0000

natom3 6
typat3 1 1 1 1 1 1 

xred3 
0.25000   0.33333   0.00000   
0.25000   0.83333   0.06399   
0.25000   0.33333   0.12799   
0.75000   0.66667  -0.00000   
0.75000   0.16667   0.06399   
0.75000   0.66667   0.12799 


ngkpt 6  6 1


nshiftk 2       # These shifts will be the same for all surface grids
shiftk 
0.5 0.0 0.0
0.0 0.5 0.0 

getwfk -1

 prteig 0 prtden 0

