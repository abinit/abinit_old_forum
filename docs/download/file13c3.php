#Fully doped Fe VI3 band structure for FM state: Charles Sun 9/12
ndtset 2
#Spin variables
spinat   0.0 0.0 2.0
         0.0 0.0 2.0
         0.0 0.0 0.0
         0.0 0.0 0.0
         0.0 0.0 0.0
         0.0 0.0 0.0
         0.0 0.0 0.0
         0.0 0.0 0.0
         0.0 0.0 4.0
nsppol   2
occopt 7
tsmear 0.001
#Charge Density
kptopt1 1
nshiftk1 1         # of the reciprocal space. For a FCC real space lattice,
                  # like the present one, it actually corresponds to the
                  # so-called 4x4x4 Monkhorst-Pack grid, if the following shifts
                  # are used :
shiftk1 0.0 0.0 0.5
ngkpt1 8 8 1
prtden1 1
toldff1 1.0d-6 
#Band Structure
iscf2    -2
getden2  -1
kptopt2  -3    # will have three segments in the band structure
nband2    50
ndivsm2   50   # 10 divisions of the smallest of the 3 segments, delimited
                       # by the 4 points defined by kptbounds.
kptbounds2  0.0  0.0  0.0 # Gamma point
            0.5  0.0  0.0 # M point
            2/3  1/3  0.0 # K point
            0.0  0.0  0.0 # Gamma point
tolwfr2  1.0d-12
enunit2  1             # Will output the eigenenergies in eV 
#Definition of the unit cell
acell   1.3149674502E+01  1.3149674502E+01  1.9437172038E+01 Bohr
rprim   0.5 0.86602540378 0.0
       -0.5 0.86602540378 0.0
        0.0  0.0  1.0
#Definition of the atom types
ntypat 3          # There is only one type of atom
znucl 23 53 26       # The keyword "znucl" refers to the atomic number of the
                  # possible type(s) of atom. The pseudopotential(s)
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Aluminum
#Definition of the atoms
natom 9              # There is only one atom per cell
typat 1 1 2 2 2 2 2 2 3       # This atom is of type 1, that is, Aluminum

#Defnition of the planewave basis set
ecut  23.0       # Maximal kinetic energy cut-off, in Hartree
pawecutdg  46.0
  xred      2.9824321864E-16  2.9976747230E-16  2.3716543040E-19
                       3.3333333333E-01  3.3333333333E-01  2.3716543040E-19
                       3.4717966529E-01 -1.3846331953E-02  1.4889831814E-01
                      -1.3846331953E-02  3.4717966529E-01 -1.4889831814E-01
                       6.6666666667E-01 -1.3846331953E-02 -1.4889831814E-01
                      -1.3846331953E-02  6.6666666667E-01  1.4889831814E-01
                       6.6666666667E-01  3.4717966529E-01  1.4889831814E-01
                       3.4717966529E-01  6.6666666667E-01 -1.4889831814E-01
                       6.6666666667E-01  6.6666666667E-01  2.3716543040E-19

#Definition of the SCF procedure
nstep  500       # Maximal number of SCF cycles
#diemac 12.0


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
