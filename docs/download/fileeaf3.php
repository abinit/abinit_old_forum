# hybrid functional calculation for C in the diamond structure
# with a perturbative approach
# Dataset 1: ground state calculation with KSS output
# Dataset 2: calculation of the HSE06 band gap
# Dataset 3: calculation of the PBE0  band gap
# Dataset 4: calculation of the B3LYP band gap
#
ndtset   4
#jdtset   2 3 4
gwpara   2
enunit   1

# Dataset1: usual self-consistent ground-state calculation
# Definition of the k-point grid
ngkpt     4 4 4
nshiftk   1
shiftk   0.0 0.0 0.0  # This grid contains the Gamma point
tolvrs   1.0d-10
nband       40
kssform     3
nbandkss    35
istwfk     *1           # Option needed for Gamma


# Common to all hybrid calculations
getkss      1        # Obtain KSS file from previous dataset
ecutwfn     15     # Planewaves to be used to represent the wavefunctions
ecutsigx    14.5     # Planewaves to be used to represent the exchange operator
nkptgw      1           
bdgw        30 34  
kptgw       0.0 0.0 0.0
symsigma    1

# Dataset2: Calculation of the HSE06 band gap
optdriver2  4 
gwcalctyp2  115
 icutcoul2  5          # short-range exchange only
     rcut2  9.090909   # corresponds to omega = 1/rc = 0.11 bohr^1

# Dataset3: Calculation of the PBE0  band gap
optdriver3  4
gwcalctyp3  215
 icutcoul3  6          # full range exchange

# Dataset4: Calculation of the B3LYP band gap
optdriver4  4
gwcalctyp4  315
 icutcoul4  6          # full range exchange


#Definition des atomes
acell   3*7.7970098886

rprim     0.500000000000000  -1.759331071255453   0.000000000000000 
          0.500000000000000   1.759331071255453   0.000000000000000 
          0.000000000000000   0.000000000000000   1.410809500727096 
        
natom    12
ntypat   3
typat    1 1 2 2 3 3 3 3 3 3 3 3 
znucl    56 12 9 
xred     0.648340000000000   0.351660000000000   0.346220000000000 
         0.351660000000000   0.648340000000000   0.846220000000000 
         0.914780000000000   0.085220000000000   0.311100000000000 
         0.085220000000000   0.914780000000000   0.811100000000000 
         0.975630000000000   0.024370000000000   0.000000000000000 
         0.024370000000000   0.975630000000000   0.500000000000000 
         0.833333333333333   0.166666666666667   0.577000000000000 
         0.166666666666667   0.833333333333333   0.077000000000000 
         0.803820000000000   0.196180000000000   0.113400000000000 
         0.196180000000000   0.803820000000000   0.613400000000000 
         0.421440000000000   0.578560000000000   0.302800000000000 
         0.578560000000000   0.421440000000000   0.802800000000000 
# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut 45.0          # Maximal kinetic energy cut-off, in Hartree

# Definition of the SCF procedure
nstep   250        # Maximal number of SCF cycles
diemac  12.0      # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   t41.out, tolnlines = 18, tolabs = 1.1e-3, tolrel = 3.0e-3, fld_options = -medium
#%% psp_files = 6c.pspnc
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% authors = F. Bruneval
#%% keywords = GW
#%% description = 
#%%  Diamond: hybrid functional calculation with the GW code
#%%  Perturbative approach to the HSE06, PBE0, and B3LYP band gaps
#%%  HSE06 and PBE0 tests temporarily disabled, waiting for the next version of the libxc)
#%%<END TEST_INFO>
