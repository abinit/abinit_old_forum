
ndtset 2

###################
#   Set 1: GS     #
###################

#Definition of the k-point grids
kptopt1 4          # Option for the automatic generation of k points, taking
                  # into account the symmetry
nshiftk1 1
shiftk1  0.0 0.0 0.0  # These shifts will be the same for all grids

ngkpt1  9 9 9     # Definition of the different grids

prtden1 1        # print the density for use by dataset 2
toldfe1 1.0d-6

#getwfk -1         # This is to speed up the calculation, by restarting
                  # from previous wavefunctions, transferred from the old 
                  # to the new k-points.

#########################
#   Date set 2: BS	#
#########################

iscf2      -2
getden2    -1
kptopt2    -5
nband2      250
ndivsm2     10

kptbounds2  -2/3  -1/3   0.0  # -K point
             0.0   0.0   0.0  # Gamma point
             2/3   1/3   0.0  # K point
             1/2   0.0   0.0  # M point
             0.0   0.0   0.0  # Gamma point
            -1/2   0.0   0.0  # -M point
 

tolwfr2  1.0d-12
enunit2   1

#Definition of the unit cell
spgroup  194
acell 6.32 6.32 12.32 angstrom
angdeg 90.0 90.0 120.0


# Spin orbit coupling
#pawspnorb 1
#prtprocar 2
#prtdos 3

#Definition of the atom types
ntypat 2          # There is only one type of atom
znucl 42 16          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.


#Definition of the atoms
natom 24            # There are two atoms
natrd 24
typat 1 1 1 1 1 1 1 1 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2         

xred
     0.333333224         0.166666627         0.750000000
     0.333333224         0.666666627         0.750000000
     0.833333254         0.166666627         0.750000000
     0.833333254         0.666666627         0.750000000
     0.166666716         0.333333433         0.250000000
     0.166666716         0.833333433         0.250000000
     0.666666746         0.333333433         0.250000000
     0.666666746         0.833333433         0.250000000
     0.333333403         0.166666627         0.123063035
     0.333333403         0.666666627         0.123063035
     0.833333373         0.166666627         0.123063035
     0.833333373         0.666666627         0.123063035
     0.166666627         0.333333254         0.876937032
     0.166666597         0.833333254         0.876937032
     0.666666627         0.333333254         0.876937032
     0.666666627         0.833333254         0.876937032
     0.166666627         0.333333254         0.623063028
     0.166666597         0.833333254         0.623063028
     0.666666627         0.333333254         0.623063028
     0.666666627         0.833333254         0.623063028
     0.333333403         0.166666627         0.376937002
     0.333333403         0.666666627         0.376937002
     0.833333373         0.166666627         0.376937002
     0.833333373         0.666666627         0.376937002
 
#Definition of the planewave basis set
ecut  10.0         # Maximal kinetic energy cut-off, in Hartree
pawecutdg  15.0
pawovlp 5        #overlap percentage

#Definition of the SCF procedure
nstep 999          # Maximal number of SCF cycles
#toldfe1 1.0d-6     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.


 pp_dirpath "$ABI_PSPDIR"
 pseudos "Mo.GGA_PBE-JTH.xml,S.GGA_PBE-JTH.xml"

#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tbase3_3.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = Unknown
#%% keywords = 
#%% description = 
#%%   Crystalline silicon : computation of the total energy
#%%   Convergence with respect to the number of k points.
#%%<END TEST_INFO>
