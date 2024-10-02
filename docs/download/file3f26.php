# Crystalline CdSe
#
# Computation of the band structure.
# First, a SCF density computation, then a non-SCF band structure calculation.

ndtset 2

#Dataset 1 : usual self-consistent calculation
kptopt1 1          # Option for the automatic generation of k points,
                   # taking into account the symmetry
nshiftk1 4
shiftk1  0.5 0.5 0.5  # These shifts will be the same for all grids
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
ngkpt1  4 4 4  
prtden1  1         # Print the density, for use by dataset 2
toldfe1  1.0d-6    # This value is way too large for most realistic studies of materials

#Dataset 2 : the band structure
iscf2    -2
getden2  -1
kptopt2  -5
nband2   13

ndivsm 20
kptbounds2  0   0   0        #Gamma
           0   1/2 1/2     #X
           1/2 1/2 1/2    #L
           1/4 3/4 1/2    #W
           1/4 5/8 5/8    #U
           3/8 3/4 3/8    #K


tolwfr2  1.0d-12
enunit2  1             # Will output the eigenenergies in eV 


#Definition of the unit cell
acell 3*11.48         # This is equivalent to   10.216 10.216 10.216
rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5   
       0.5  0.5  0.0

#Definition of the atom types
ntypat 2          # There is only one type of atom
znucl 48 34          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 2           # There are two atoms
typat 1 2         # They both are of type 1, that is, Silicon.
xred              # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom
   0.0  0.0  0.0  # Triplet giving the REDUCED coordinate of atom 1.
   1/4  1/4  1/4  # Triplet giving the REDUCED coordinate of atom 2.

#Definition of the planewave basis set
ecut 25        # Maximal kinetic energy cut-off, in Hartree
ecutsm 0.5
pawecutdg 100

#Definition of the SCF procedure
nstep 100          # Maximal number of SCF cycles
diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tbase3_5.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00
#%% psp_files =  14si.pspnc
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = 
#%% keywords = 
#%% description = 
#%%<END TEST_INFO>
