# Finite electric field calculation of alas at clamped atomic positions
# (after M. Veithen, 04.5.2005)

#Definition of the elementary cell
#*********************************
acell 6.0907877939E+00  6.0907877939E+00  9.9216853526E+00 Bohr
rprim   0.5 -0.866025403784439  0.0
        0.5  0.866025403784439  0.0
        0.0                0.0  1.0

#Definition of the atoms
#***********************
   natom 4
   ntypat 2
   znucl 31 7
   typat 1 1 2 2
xred      3.3333333333E-01  6.6666666667E-01  0.0000000000E+00
          6.6666666667E-01  3.3333333333E-01  5.0000000000E-01
          3.3333333333E-01  6.6666666667E-01  3.7676031547E-01
          6.6666666667E-01  3.3333333333E-01  8.7676031547E-01

#Definition of the SCF procedure
#*******************************
   toldfe 1.0d-12 # ultratight convergence so all test
                  # platforms show same convergence
                  # behavior in the 10 allowed steps
   nstep 100
   nband 18
   nbdbuf 0


#Definition of the plane wave basis set
#**************************************
   ecut  800 eV
#  pawecutdg 16

#  kptopt 1
#  symmorphi 0
  ngkpt   16 16 16 # do not expect converged results with such
               # coarse k point mesh!!
nshiftk 1
shiftk 0.0 0.0 0.5


# ndtset  11
  ndtset   5
jdtset  11  21 22  31 32 #23  24  25     # The additional 8 values of the field have been suppressed to spare CPU time
        #31   32   #33  34  35

 berryopt11 -1       rfdir11    1 1 1

 berryopt21  4       efield21   0.0000001  0.0000001  0.0000001   getwfk21  11 #kptopt21 2
 berryopt22  4       efield22   0.0000002  0.0000002  0.0000002    getwfk22  21 #kptopt22 2
#berryopt23  4       efield23   0.00003  0.00003  0.00003     getwfk23  22 #kptopt23 2
#berryopt24  4       efield24   0.00004  0.00004  0.00004     getwfk24  23 #kptopt24 2
#berryopt25  4       efield25   0.00005  0.00005  0.00005     getwfk25  24 #kptopt25 2

 berryopt31  4       efield31  -0.0000001 -0.0000001 -0.0000001   getwfk31  11 #kptopt31 2
 berryopt32  4       efield32  -0.0000002 -0.0000002 -0.0000002    getwfk32  31 #kptopt32 2
#berryopt33  4       efield33  -0.00003 -0.00003 -0.00003     getwfk33  32 #kptopt33 2
#berryopt34  4       efield34  -0.00004 -0.00004 -0.00004     getwfk34  33 #kptopt34 2
#berryopt35  4       efield35  -0.00005 -0.00005 -0.00005     getwfk35  34 #kptopt35 2

bfield 3*0.0

## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   t43.out, tolnlines = 0, tolabs = 0.0, tolrel = 0.0, fld_options = -easy
#%% psp_files = al_ps.abinit.paw, as_ps.paw
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% authors = J. Zwanziger
#%% keywords = PAW, DFPT
#%% description = 
#%%   PAW Berrys Phase calculation of Born effective charge in AlAs by
#%%   finite electric fields (contributed by J. Zwanziger, adapted from efield tutorial.)
#%%   Cannot be executed with more than 1 MPI node.
#%% topics = Berry
#%%<END TEST_INFO>
