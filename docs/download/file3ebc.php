# Carbon Dimer

#Definition of occupation numbers
occopt 1
tsmear 0.004

#Non-primitive unit cell
nsym 1
chkprim 1

#Output options
prtwf  0
prtden 0

#Definition of the unit cell 
acell  37.794538   18.897269   18.897269    
rprim  1.0   0.0   0.0
       0.0   1.0   0.0
       0.0   0.0   1.0

#Definition of the atom types
ntypat 1      
znucl  6 

#Definition of the atoms
natom  2 
       
xangst    8.55   10.0   10.0
         11.45   10.0   10.0

typat   1  1  

#Do not move the atoms 
ionmov  0

#Options to improve the convergence
diemac 5.5  
nband  4  

#Setting the wavelet option for the basis set:
ecut        15
usewvl      1
wvl_hgrid   0.25
wvl_crmult  5.0
wvl_frmult  5.0
wvl_cpmult  10.0
wvl_fpmult  10.0
icoulomb    1
optstress   0

#Exchange-correlation functional
ixc 1             # LDA Perdew-Wang parametrization
iscf 2

#Definition of the k-point grid
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
ngkpt 2 2 1     
nshiftk 1        
shiftk 0.5  0.5  0.0

# Definition of the SCF procedure
nstep 40          # Maximal number of SCF cycles
toldfe  1.0d-6    # Will stop when, twice in a row, the difference 


