# Crystalline cubic SnSe
#

nband 30     
nstep 60   
kptopt 1
iscf 7
optforces 2  #calculation of forces at the end of the SCF iterations (like the stresses)
toldfe   1.0d-7 # Tolerance on the difference of total energy
prtden 1   getden 0   getwfk 0    # Usual file handling data

#Data common to all datasets
ngkpt
 8 8 1
nshiftk 1
shiftk
     0.5 0.5 0.5

#Definition of the atom types
ntypat 2                  
znucl 50.0 34.0

#Definition of the planewave basis set
ecut  900 eV      

nsppol  1         #1 unpolarized / 2 polarized
nspden  1
nspinor 1

#Definition of the atoms
natom  4             
ecutsm 0.5     
typat 2*1 2*2
acell  1.0000000000  1.0000000000  1.0000000000  angstrom   # In unit of angstrom  1Bohr=0.5291772108 Anstrong
#Definition of the unit cell
rprim
     4.2882220553323833    0.0000000000000000    0.0000000000000000
     0.0000000000000000    4.4179894153930297    0.0000000000000000
     0.0000000000000000    0.0000000000000000   20.0322337024881669
xred
  0.7499999839999987  0.9053465316606122  0.4310772094165216
  0.2500000000000000  0.4053465046606135  0.5689227905834784
  0.2500000000000000  0.4614735353393868  0.4333708171002186
  0.7499999839999987  0.9614735723393864  0.5666291828997814

#Exchange-correlation functional
ixc -101130
occopt 1
#tsmear 0.01 eV

#paral_kgb 1
#npband 2 
#npfft 2
#npkpt 16
#bandpp 1

#optforces 2  #calculation of forces at the end of the SCF iterations (like the stresses)
#nstep 60
#ntime 0
#prtden 1
#prtdensph 1
diemac 9.0
#chksymbreak 0    # The k point grid is not symmetric, but the calculations being for the ground-state, this is not a problem.
#chkprim  0       # 0: do not check if uc primitive
nsym  0
#tolsym 1.e-5
#nbdbuf 2
#diemac 12.0
#diemix 0.9
#npulayit 7  # default
