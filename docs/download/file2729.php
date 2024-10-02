# Naphthalene - Methylated
# Ground State Calculation + Screening (two are done, only one is needed)
#
# There are four datasets specified in this input:
# 1) Ground-state calculation to get the density.
# 2) NSCF run to generate the KSS file on a symmetric k-mesh (4x4x4, gamma-centered) 
# 3) NSCF run to generate another KSS file on a shifted 4x4x4 k-mesh that breaks the symmetry of the BZ sampling
# 4) SCR calculation with the KSS file generated in the second dataset 
#

# ==== K-POINT GRID ====

# When doing GW calculations with abinit, you have to specify the k-point mesh with ngkpt or kptrlatt. So the solution would be to just do like this :
istwfk *1          
kptopt 1           # only 1 k-point
ngkpt 1 1 1
nshiftk 1
shiftk 0.0 0.0 0.0 # Gamma-centered


# ====Dataset5: BSE Energies ====
optdriver     99  # BS calculation

irdkss  1 
irdscr  1

ecuteps   10    # energy cutoff for planewave set to represent susceptibility chi0_KS

bs_calctype    2  #  The transition space is constructed with Kohn-Sham orbitals but the energies are read from the external GW file 

bs_exchange_term  1       # Exchange term included.
bs_coulomb_term   10      # model screening function used; diagonal approximation for W_GG'
bs_coupling       0       # Tamm-Dancoff approximation. (1 turns off TD approximation)

#bs_loband         1       # lowest band to include for BS transitions (default 0)
nband             150


#bs_freq_mesh 0 6 0.02 eV   # Frequency mesh. default 0.0 0.0 0.01

bs_algorithm        1      # direct diagonalization of BSE matrix
#bs_haydock_niter   200     # Max number of iterations for the Haydock method.
#bs_haydock_tol     0.05 0  # Tolerance for the iterative method.
#zcut               0.15 eV # complex shift to avoid divergences in the continued fraction. - don't think this is really relevant for non-Haydock method...

ecut 10.0         # Maximal kinetic energy cut-off, in Hartree
ecutwfn 10.0

gwmem            0         # attempting to decrease memory usage





# ==== VARIABLES COMMON TO THE DIFFERENT DATASETS ====

#Definition of the unit cell
acell 15 15 15    # The keyword "acell" refers to the
                  # lengths of the primitive vectors (in Bohr)
#rprim 1 0 0  0 1 0  0 0 1 # This is the default primitive cell, so it's commented out

#Definition of the atom types
ntypat 2          # 2 types of atoms
znucl 6 1         # Carbon and Hydrogen
                         

#Definition of the atoms - naphthalene, ground state geom...
natom 21          # There are 21 atoms
typat 11*1 10*2 
xangst              # This keyword indicate that the location of the atoms (angst.)
  0.5558307 0.3998853 3.1391266
   -3.5504975 -3.8473463 5.1895577
   -3.1233653 -2.6225250 4.7146903
   -1.7506934 -2.3886731 4.4318399
   -0.8093041 -3.4515151 4.6495343
   -1.2796999 -4.6982881 5.1407836
   -2.6212624 -4.8941149 5.4045372
   -1.2784637 -1.1409098 3.9407533
   0.0600145 -0.9215759 3.6680379
   0.9814784 -1.9843142 3.8906119
   0.5618852 -3.2087183 4.3648220
   0.9774578 0.2874130 2.1279349
   1.3554752 0.8074272 3.7762549
   -4.6071939 -4.0117781 5.4060107
   -3.8386557 -1.8135523 4.5512340
   -2.9694210 -5.8564324 5.7832287
   -2.0023740 -0.3376506 3.7794787
   2.0397911 -1.8197918 3.6752799
   1.2829390 -4.0128196 4.5274977
   -0.5611425 -5.5040911 5.3059003
   -0.2526637 1.1409409 3.0877338


#Definition of the planewave basis set
#ecut 10.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 50          # Maximal number of SCF cycles
#toldfe is no more defined, as toldff is used above... 
diemac 2.0        # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescriptions for molecules
                  # in a big box


