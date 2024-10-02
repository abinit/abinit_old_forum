# Crystalline Ga4P3Ti
# Calculation of the GW-corrected band structure.


# Part-4: Sigma Calculation  

 optdriver   4     # Sigma run.
    irdscr   1     # read the pre-calculated screening file
 gwcalctyp   0     # G0W0 calculation with the plasmon-pole approximation.
   ppmodel   1     # PP model of Godby and Needs
    gwpara   2     # Parallelization over bands.
  symsigma   1     # To enable the symmetrization of the self-energy matrix elements.
   ecuteps   8 
   ecutwfn   12    # Cutoff for the wavefunctions.
  ecutsigx   12    # Cutoff in the exchange part.
     nband   64    # Number of bands for the correlation part.
  icutcoul   6     # 

# List of k-points for GW corrections.
    nkptgw   10    # number of kpts at which GW will be calculated
     kptgw         # List of kpts, must be corresponding to those used for the preparation of _WFK and _SCR 
           0.00000000E+00  0.00000000E+00  0.00000000E+00
           2.50000000E-01  0.00000000E+00  0.00000000E+00
           5.00000000E-01  0.00000000E+00  0.00000000E+00
           2.50000000E-01  2.50000000E-01  0.00000000E+00
           5.00000000E-01  2.50000000E-01  0.00000000E+00
           5.00000000E-01  5.00000000E-01  0.00000000E+00
           2.50000000E-01  2.50000000E-01  2.50000000E-01
           5.00000000E-01  2.50000000E-01  2.50000000E-01
           5.00000000E-01  5.00000000E-01  2.50000000E-01
           5.00000000E-01  5.00000000E-01  5.00000000E-01

     
      bdgw          # bands for which GW will be alculated
            1 27    # calculate GW corrections for bands 1 to 27 for each kpt
            1 27
            1 27
            1 27
            1 27
            1 27    # calculate GW corrections for bands 1 to 27 for each kpt
            1 27
            1 27
            1 27
            1 27

########################################
#Common input variables

#Definition iof the unit cell
   acell  3*10.33   # From structural optimization with optcell1, iscf7 
                           # ionmove3, occopt3, ngkpt888, tsmear0.01, ecut40, nband40, tolmxf-8, toldfe-12
   rprim  1.0 0.0 0.0      # Cartesian components of primitive vectors 
          0.0 1.0 0.0      # of the simple cubic lattice
          0.0 0.0 1.0 

#Definition of the atomic types, number, and and positions
  ntypat  3           # There are three types of atom in a unit cell
   znucl  31 15 22    # the atomic number of Ga, P and Ti, respectively.
                      # The pseudopotentials mentioned in the "files" file must correspond
                      # to the types of atom.
   natom  8           # There are 4 Ga, 3 P and 1 Ti atoms.
   typat 1 1 1 1 3 2 2 2  # 1=Ga, 2=P, 3=Ti (doping position)
    xred                  # From structural optimization with optcell1, iscf7 
                          # ionmove3, occopt3, ngkpt888, tsmear0.01, ecut40, 
                          # nband40, tolmxf-8, toldfe-12
        -1.2013454966E-02 -1.2013454966E-02 -1.2013454966E-02
         5.1201345497E-01  5.1201345497E-01 -1.2013454966E-02
         5.1201345497E-01 -1.2013454966E-02  5.1201345497E-01
        -1.2013454966E-02  5.1201345497E-01  5.1201345497E-01
         2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
         2.5000000000E-01  7.5000000000E-01  7.5000000000E-01
         7.5000000000E-01  2.5000000000E-01  7.5000000000E-01
         7.5000000000E-01  7.5000000000E-01  2.5000000000E-01 

#State occupation
  occopt  3      #metallic    
  tsmear  0.01

#Default k-points grid for k-centered wfk, scr, sigma calculations
    kptopt  1            # Option for the automatic generation of k points, taking
                         # into account the symmetry
     ngkpt  4 4 4        # Density of k point grids
   nshiftk  1
    shiftk  0.0 0.0 0.0  # This grid contains the Gamma point, which is the point at which
    istwfk *1            # For the GW computations, do not take advantage of the 
                          # specificities of k points to reduce the number of components of the
                          # wavefunction.

#Include non-symmorphic operations
 symmorphi  1    #This is just to emphasize using of the default value.

#Exchange-correlation functional
       ixc  7    # coresponding to the fhi psp used

#Definition of the planewave basis set
      ecut  16            # Maximal kinetic energy cut-off, in Hartree
    ecutsm  0.5
   dilatmx  1.05

#Definition of the SCF procedure
     iscf  7     # Self-consistent calculation, using algorithm 7
    nstep  300   # Maximal number of SCF cycles
#   diemac  4.0   # USe the default value for metals
   tolwfr  1.0d-10
                       
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1

#data printing option
    prtvol 1


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tgw1_9.out, tolnlines= 70, tolabs=  7.000e-02, tolrel=  3.000e-02, fld_options= -ridiculous
#%% psp_files = 14si.pspnc
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% authors = 
#%% keywords = GW
#%% description = 
#%%<END TEST_INFO>
