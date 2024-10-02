# Crystalline STANNUM 
#
# Computation of the band structure.
# First, a SCF density computation, then a non-SCF band structure calculation.

ndtset 2

#Dataset 1 : usual self-consistent calculation
kptopt1 1          # Option for the automatic generation of k points,
                   # taking into account the symmetry
nshiftk1 1
shiftk1  0.0 0.0 0.0
ngkpt1  25 25 1  
prtden1  1         # Print the density, for use by dataset 2
toldfe1  1.0d-6    # This value is way too large for most realistic studies of materials

#Dataset 2 : the band structure
iscf2    -2
getden2  -1
kptopt2  -3
nband2   35
ndivk2   10 12 17      # 10, 12 and 17 divisions of the 3 segments, delimited
                       # by 4 points.
kptbounds2  0.5  0.0  0.0 # L point
            0.0  0.0  0.0 # Gamma point
            0.0  0.5  0.5 # X point
            1.0  1.0  1.0 # Gamma point in another cell.
tolwfr2  1.0d-12
enunit2  1             # Will output the eigenenergies in eV 


#Definition of the unit cell
acell  8.757  9.36  20  angstrom        # This is equivalent to   10.216 10.216 10.216
rprim   1.0    0.0   0.0   # In lessons 1 and 2, these primitive vectors 
       0.0    1.0   0.0 # (to be scaled by acell) were 1 0 0  0 1 0  0 0 1 
       0.0    0.0   1.0

#Definition of the atom types
ntypat 2         # There is only one type of atom
znucl 01 50        # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms         
natom 15          # There are two atoms
typat 2 2 2 2 2 2 2 2 1 1 1 1 1 1 1 1           # They both are of type 1, that is, Silicon.
xred              # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom
  -2.4443748200E-03  4.9867030236E-01  0
   3.2608340376E-01  4.9868669603E-01  0
   4.9783060947E-01  2.5131342910E-01  0
   8.2644372054E-01  2.5132956100E-01  0
  -2.4444556100E-03  9.9867038528E-01  0
   3.2608327060E-01  9.9868660766E-01  0
   4.9783069678E-01  7.5131327419E-01  0
   8.2644380929E-01  7.5132974439E-01  0
  -2.4443748200E-03  4.9867030236E-01 -5.3333/100  
   3.2608340376E-01  4.9868669603E-01  5.3333/100
   8.2644372054E-01  2.5132956100E-01 -5.3333/100
  -2.4444556100E-03  9.9867038528E-01  5.3333/100
   3.2608327060E-01  9.9868660766E-01 -5.3333/100  
   4.9783069678E-01  7.5131327419E-01  5.3333/100
   8.2644380929E-01  7.5132974439E-01 -5.3333/100


#Definition of the planewave basis set
ecut 28         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 10          # Maximal number of SCF cycles
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
