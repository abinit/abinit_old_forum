# Linear and nonlinear response calculation for O6Li2I2
# Perturbations: electric fields & atomic displacements
# (M. Veithen, 21.4.2005)

#Definition of lattice parameters
#********************************
   acell 1.0 1.0 1.0
   rprim 10.47772787831160504149 0.0000000000 0.0000000000
         -5.23886393915579307211 9.07397851655827902295 0.0000000000
         0.0000000000 0.0000000000 9.91340216177724524086
#Definition of atomic positions and types
#*************************************
   natom 10
   ntypat 3
   znucl 3 53 8
   typat 1 1  2 2 3 3 3 3 3 3
   xred 0.000000000         0.000000000         0.420231998
     0.000000000         0.000000000         0.920231953
     0.666666971         0.333332997         0.497346010
     0.333332999         0.666666987         0.997346010
     0.244930988         0.340423996         0.159573998
     0.659576000         0.904507016         0.159573998
     0.755068994         0.659576013         0.659573953
     0.340424007         0.095492999         0.659573953
     0.904507049         0.244931003         0.659573953
     0.095492999         0.755069006         0.159573998

   ixc 3

#Parameters of the SCF cycles
#****************************
   nstep       200


#Plane wave basis and k-point grid
#*********************************
   ecut        35
   ecutsm      0.5
   dilatmx     1.05
#chkdilatmx  0
#chksymbreak 0
   ngkpt       8 8 8
   nshiftk     1
   shiftk      0 0 0.5

ndtset 5     jdtset 1 2 3 4 5  #five datasets

#DATASET1 : scf calculation: GS WF in the BZ (self-consistent calculation in the IBZ)
#********************************************
   prtden1    1           # >=1, provide output of electron density in real space rho if ionmov ==0, the name of
                          # the density file will be the root output name, followed by _DEN
   kptopt1    1           # Rely on ngkpt or kptrlatt. Take fully into account the symmetry to generate the k point
                          # in the Irreducible Brillouin Zone (IBZ) only
   toldfe1    1.0d-12     # Tolerance on the Difference of total energy

#DATASET2 : non scf calculation: GS WF in the whole BZ (non self-consistent calculations to get the wave-functions)
#*****************************************************
   getden2    1        # if positive, its value gives the index of the datasets from which the output density is to
                       #be used as input;
   kptopt2    2        # Rely on ngkpt as Datasets1;
     iscf2   -2        # -2: a non-self-consistent calculations is to be done; in this case an electron density
                       #rho(r) on a real space grid (produced in a previous calculation) will be read from a disk f
                       #ile
   getwfk2    1        # If positive, its value gives the index of the dataset from which the output density is to 
                       #be used as input
   tolwfr2    1.0d-22  # Tolerance on wavefunction squared residual
    nband2    28        #


#DATASET3 : ddk on the MP grid of k-points (ddk calculation)
#*****************************************
   getwfk3    2        
    rfdir3    1 1 1    # Give the directions to be considered for response function calculations
   rfelfd3    2        # Response Function with respect to the Electric Field. 2: only the drivative of ground
                       #state wavefuntios with respective to k
   tolwfr3    1.0d-22
    nband3    28
   kptopt3    2

#DATASET4 : ddE on the MP grid of k-points (derivatives with respect to electric field and atomic displacements)
#*****************************************
   prtden4    1           # If >=1, provide output of electron density in real space rho(r)
   getwfk4    2           # 
   getddk4    3           # 
    rfdir4    1 1 1       
   rfphon4    1           # Response function with respect to Phonons. Must be 1 to run phonon response function calculations
  rfatpol4    1 2         # Response function: atomic polarisation
   tolvrs4    1.0d-12     # Tolerance on the potential V(r) Residual
   rfelfd4    3           # 3: only the generation of the first-order response to the electric field
    nband4    28
   kptopt4    2
  prepanl4    1           # Prepare non-linear response calculation

#DATASET5 : 3DTE calculation (specific features be specified for the preparation of non-linear response)
#***************************
   getden5    1      # If positive, its value gives the index of the dataset from which ... as input
  get1den5    4      # Get the first-order density from *_1DEN file
   getwfk5    2      #
   get1wf5    4      #
    nband5    28      
   kptopt5    2
optdriver5    5      # 5: non-linear response functions, using the 2n+1 theorem, routine "nonlinear"
  d3e_pert1_elfd5    1     # 3rd derivative of energy, mixed Perturbation 1: electric field
  d3e_pert1_phon5    1     # 3rd derivative of energy, mixed Perturbation 1: phonons
 d3e_pert1_atpol5    1 2   # 3rd derivative of energy, mixed Perturbation 1: limits of atomic polarisations
   d3e_pert1_dir5    1 1 1 # 3rd derivative of energy, mixed Perturbation 1: directions
  d3e_pert2_elfd5    1
   d3e_pert2_dir5    1 1 1
  d3e_pert3_elfd5    1
   d3e_pert3_dir5    1 1 1

nbdbuf 0


## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain = tnlo_2.in, tnlo_3.in, tnlo_4.in, tnlo_5.in
#%% [files]
#%% files_to_test = 
#%%   tnlo_2.out, tolnlines=  9, tolabs=  9.000e-07, tolrel=  6.000e-05
#%% psp_files =  13al.pspnc, 33as.pspnc
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors =  M. Veithen
#%% keywords = NC, DFPT, NONLINEAR
#%% description = 
#%%   Linear and nonlinear response calculation for AlAs
#%%   Perturbations: electric fields & atomic displacements
#%%<END TEST_INFO>
