
#  10/12/20    slabbulkPdlab11layer092820.in

#This run is a calculation of effect of slab thickness and bulk thickness 
#run simultaneously on WF for slab thickness of 10 layers.

chkprim  0
chksymbreak 0
accuracy 6
#Definition of the planewave basis set
ndtset 2
ecut 60

#Definition of occupation numbers
occopt 4       #Cold smearing of N Mazari
tsmear 0.0005

#Definition of the unit cell

#7.78019136  Bohr or 4.1171 A  fcc lattice constant; The experimental value is 3.8907 A
#5.14431208  Bohr  in-plane distance
#4.49189558  Bohr  interlayer distance

acell1  2*5.144312078066  49.41085138 #This is acell for a slab of 11 atoms.
acell2  2*5.144312078066  80.85412044 #this acell for a slab of 11 layers and 7 vacuum layers#

angdeg 90 90 120
#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 46          # The keyword "znucl" refers to the atomic number of the
                  # possible type(s) of atom. The pseudopotential(s)
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Pd.

#Definition of the atoms
xred1             # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom
   0.0  0.0  0.0  # Triplet giving the REDUCED coordinate of atom 1.
   1/3  2/3  1/11
   2/3  1/3  2/11
   0.0  0.0  3/11
   1/3  2/3  4/11
   2/3  1/3  5/11
   0.0  0.0  6/11
   1/3  2/3  7/11
   2/3  1/3  8/11
   0.0  0.0  9/11
   1/3  2/3  10/11
   
#Dataset 1 is for 15 Pd layers.

natom1 11
typat1 11*1
ngkpt1 4 4 4
#Dataset 2 for 18 Pd layers and 7 vacuum layers

natom2 11
typat2 11*1
xred2
   0.0  0.0  0.0
   1/3  2/3  1/18
   2/3  1/3  2/18
   0.0  0.0  3/18
   1/3  2/3  4/18
   2/3  1/3  5/18
   0.0  0.0  6/18
   1/3  2/3  7/18
   2/3  1/3  8/18
   0.0  0.0  9/18
   1/3  2/3  10/18

#Exchange-correlation functional
ixc 11             # GGA Perdew-Burke-Ernzerhof GGA functional

#Definition of the k-point grid for slab plus vacuum
ngkpt2 4 4 1       

shiftk 0 0 0

#Definition of the SCF procedure
nstep 240          # Maximal number of SCF cycles
tolvrs 1.0d-12     # Will stop when the the potential residuals
                  # is less than tolvrs (in Hartree)

#These parameters improve precision and convergence
iprcel 45
iscf 7
npulayit 30
diemac 1e6
diemix .6
nnsclo 3
timopt 1
nband 300 #Changed nband from 30 to 300 becauae there were not enough bands to get charge balance right for occopt 4
ngfft 30 30 270  
nline 7   
optforces 0
nbdbuf 3
dielng .6

prtden 1 prtgeo 12 prtpot 0  prtwf 0 prteig 1   prtebands 0 prt1DM 1  prtdos 1

## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test =
#%%   tbase4_1.out, tolnlines=  6, tolabs=  1.2e-07, tolrel=  1.2e-03
#%% psp_files =  13al.981214.fhi
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = Unknown
#%% keywords =
#%% description =
#%%   Crystalline aluminum : optimization of the lattice parameter
#%%   at fixed number of k points and broadening.
#%%<END TEST_INFO>
