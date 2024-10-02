ndtset   7     # Number of datasets in the input
#
# ZnO Geometry before optimisation
# ********************************
#acell    3*6.141609825  
#
#rprim    0.866025403784439  -0.500000000000000   0.000000000000000 
#         0.000000000000000   1.000000000000000   0.000000000000000 
#         0.000000000000000   0.000000000000000   1.602153846153846 
#       
#xred     0.333333333333333   0.666666666666667   0.000000000000000 
#         0.666666666666667   0.333333333333333   0.500000000000000 
#         0.333333333333333   0.666666666666667   0.382500000000000 
#         0.666666666666667   0.333333333333333   0.882500000000000 

natom    4  
ntypat   2  
typat    1 1 2 2  
znucl    30 8  

acell      6.0186817743E+00  6.0186817745E+00  9.7273849024E+00 Bohr
rprim      8.6602540378E-01 -5.0000000000E-01  0.0000000000E+00
          -3.8375667350E-27  1.0000000000E+00  0.0000000000E+00
           0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
 xred      3.3333333333E-01  6.6666666667E-01  1.9941178707E-03
           6.6666666667E-01  3.3333333333E-01  5.0199411787E-01
           3.3333333333E-01  6.6666666667E-01  3.8050588222E-01
           6.6666666667E-01  3.3333333333E-01  8.8050588222E-01




# k-points and energy cutoff and functional and global settings
# *************************************************************
ngkpt    11 11 6                # Monkhorst-Pack grid, density of ~0.2/A - see kptopt
nshiftk  1                      #
shiftk   0.0 0.0 0.5            # 
ecut     50                     # hartree
ixc       3                     # 1=LDA 11=PBE functional
nstep    60                     # Number of scf iterations
occopt    1                     # Semi-conductor (what about nband)
tolwfr    1.0d-28               #
getden    2                     # always get the highly converged density and wfn
getwfk    2                     #
kptopt    2                     # For all (tried with initial 1 but got an error)

# Data set 1 - optimisation of the structure
# ******************************************
 ecutsm1  0.5                    # Smoothing energy for optcell
                                 # switching off geometry optimisation - so the geometry above has to be converged
optcell1  0                      # Full geometry optimisation, use 0 for atoms only
 ionmov1  0                      # BFGS geometry optimisation
dilatmx1  1.05                    # Allow maximum change in unit cell to be 10% 
 tolvrs1  1.0d-10                # Wavefunction accuracy
 tolmxf1  1.0d-5                 # Tolerance on force and stress
   iscf1  7                      # Default scf procedure, use 17 for usepaw and 5 for CG
  ntime1  200                    # Number of optimisation steps
  nstep1  50                     # Number of scf cycles
  getden1 0                      # Override default
  getwfk1 0                      # Override default

# Data set 2 - refine converged wavefunction
# ******************************************
  getden2 1
  getwfk2 1

# Data set 3 - ddk using 1st order Sternheimer
#*******************************************
   rfddk3     1                  # Calculate ddk responses
    rfdir3    1 1 1              # Use all directions
    nstep3    1                  # Non self consistent
    nline3    100                # Non self consistent
    tolrde3   1.0d-30            # Should converge in one step

# Data set 4 - Phonons and electric field
#****************************************
   rfelfd4   3
   rfphon4   1
  rfatpol4   1 2
    rfdir4   1 1 1
   getddk4   3
   prtden4   1
  prepanl4   1

# Data set 5 - dkdk
#****************************************
   rf2_dkdk5  1                  # 2nd Order Sternheimer dk dk
     getddk5  3                  # get the ddk at all k-points from step 3
    prepanl5  1                  # Calculate the electric perturbation along all directions and keep all k-points
      nstep5  1                  # Non self consistent
      nline5  100

# Data set 6 - dkde
#*****************************************
  rf2_dkde6   1                  # 2nd Order Sternheimer dk dk
    getddk6   3                  # get the ddk at all k-points from step 3
   get1den6   4
  getdelfd6   4
   getdkdk6   5
   prepanl6   1                  # Calculate the electric perturbation along all directions and keep all k-points
     nstep6   1                  # Non self consistent
     nline6   100

# Data set 7 - 3DTE calculations (full dfpt)
#*******************************************
       optdriver7    5           # Non linear response using 2n+1 theorem
         usepead7    0           # Dont use PEAD
          getddk7    3           # get the ddk at all k-points from step 3
         get1den7    4
          get1wf7    4
         getdkde7    6
                                 # 3rd derivative options
  d3e_pert1_phon7    1           # 1st perturbation is phonons - atom displacements
 d3e_pert1_atpol7    1 2         # 3rd derivative of energy - atomic polarisation - atoms 1&2
  d3e_pert1_elfd7    1           # 1st perturbation is electric field (this looks wrong)
  d3e_pert2_elfd7    1           # Second perturbation is electric field
  d3e_pert3_elfd7    1           # 3rd perturbation is electric field
   d3e_pert1_dir7    1 1 1       # 1st perturbation directions
   d3e_pert2_dir7    1 1 1       # 2nd...
   d3e_pert3_dir7    1 1 1       # 3rd...


