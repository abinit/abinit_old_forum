## Magnesium: Structural Optimization

ndtset 3

# Output parameters 
prteig 0
prtden1 1
prtden2 0
prtden3 0
prtwf1 1
prtwf2 0
prtwf3 0

## Optimization parameters
#optcell2 0
#ionmov2 2
#ntime2 50
#dilatmx2 1.3
#ecutsm2 0.5
#tolmxf2 5.0d-6
#chksymbreak2 0

# Occupation options 
occopt 3
tsmear 0.0333
#occopt 4
#tsmear 0.04
nband 20

#Definition of the unit cell
acell 6.64609341803 11.5111722022 10.8298710081                 
angdeg 84 90 96     
chkprim 0

#Definition of the atom types
ntypat 1          
znucl 12          

#Definition of the atoms
natom 4           
typat 1 1 1 1 
#xred
#0.0 0.0 0.0
#0.5 0.5 0.0
#0.0 2/3 0.5
#0.5 1/6 0.5
xcart
-5.2471376477E-02  8.2590621535E-02  1.8577841423E-02
2.6689527622E+00  5.8066470198E+00  1.8577841423E-02
-7.4969205066E-01  8.1186172313E+00  5.3663654762E+00
3.1749772287E+00  2.3945608330E+00  5.3663654762E+00

#Definition of the planewave basis set
ecut  20.0         # Maximal kinetic energy cut-off, in Hartree

#Exchange-correlation functional
ixc 7            # Perdew_Wang LDA

#Definition of the k-point grid
kptopt 1
ngkpt 8 8 8
nshiftk 1
shiftk 0.0 0.0 0.0  
ngfft 36 64 60

#Definition of the SCF procedure
nstep 100          # Maximal number of SCF cycles
toldfe 1.0d-10
getwfk1 0
getwfk2 0
getwfk3 1
getden1 0
getden2 1
getden3 0
