#source of parameters NinnoEtal_ElecPropZnOmetalinterface_JPhysConMatt_2014
#Definition of unit cell,lattice parameters a=6.1567 bohr  c=9.8643 bohr
spgroup 186
acell 24.566437852 24.566437852 9.826575141 #4 4 1 
angdeg 90. 90. 120.
natrd 2
nobj 1
objan 2
objaat 1 2
objarf 4 4 1
objatr
0.0 0.0 0.0
18.424828389 0.0 0.0   #extended in the x direction
0.0 18.424828389 0.0	#extendend in the y direction
0.0 0.0 0.0

#Definition of the atom types
ntypat 2 #two atom types
znucl 30 8 #zinc at no and oxygen at no
prtden 1 #Print the charge density that corresponds to optimized interatomic distance.
#Definition of the planewave basis set
ecut  8.0 # Maximal kinetic energy cut-off, in Hartree
#Definition of the SCF procedure
iscf 7
nstep 111  # Maximal number of SCF cycles
toldff 1.0e-8
npulayit 7    
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
optforces 1
#Definition of the k-point grid 
ngkpt  2 2 1
#Definition of the atom
natom 32     # There are 32 atoms
typat 
1 2 1 2 1 2 1 2 1 2 1 2 1 2 1 2
1 2 1 2 1 2 1 2 1 2 1 2 1 2 1 2
ionmov 3     # Use the modified Broyden algorithm
optcell 0
ntime 10    # Maximum number of Broyden "timesteps"
tolmxf 5.0e-4
xred
1/3 2/3 0
1/3 2/3 69/200
# The starting values of the atomic coordinates
pawecutdg 10.  #PAW energy cutoff
ixc 11 #GGA, Perdew-Burke-Ernzerhof GGA functional
nshiftk 1
shiftk 0.0 0.0 0.5 #defining the k point shift for a hexagonal lattice
chkprim 0
#chksymbreak 0
