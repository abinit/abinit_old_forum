# Crystalline silicon
# Calculation of the GW corrections

# Convergence with respect to the number of planewaves to represent the wavefunctions
ndtset     5
ecutwfn:  3.0
ecutwfn+  1.0

# Calculation of the Self-Energy matrix elements (GW corrections)
optdriver  4
getkss     1
getscr     1
nband      100
ecutsigx    6.0
ppmfrq    16.7 eV
nkptgw      1
kptgw      0.000    0.000    0.000
bdgw       4  5 


# Definition of the unit cell: fcc
acell  3*10.217        # This is equivalent to   10.217 10.217 10.217
rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5
       0.5  0.5  0.0

# Definition of the atom types
ntypat  1         # There is only one type of atom
znucl 14          # The keyword "znucl" refers to the atomic number of the
                  # possible type(s) of atom. The pseudopotential(s)
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.

# Definition of the atoms
natom 2           # There are two atoms
typat  1 1        # They both are of type 1, that is, Silicon.
xred              # Reduced coordinate of atoms
      0.0  0.0  0.0
      0.25 0.25 0.25

# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut 8.0          # Maximal kinetic energy cut-off, in Hartree

# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  iscf 5

# Sampling of the BZ
ngkpt   1 1 1 
nshiftk 1
shiftk  0.0 0.0 0.0
istwfk  *1         # This is mandatory in all the GW steps.


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain = tgw1_2.in, tgw1_3.in, tgw1_4.in, tgw1_5.in, tgw1_6.in, tgw1_7.in, tgw1_8.in
#%% [files]
#%% files_to_test = 
#%%   tgw1_3.out, tolnlines= 70, tolabs=  9.000e-03, tolrel=  3.000e-02
#%% psp_files = 14si.pspnc
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% author = 
#%% keywords = GW
#%% description = 
#%%<END TEST_INFO>
