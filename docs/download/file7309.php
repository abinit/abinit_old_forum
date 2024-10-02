# << Project: Eu-LDA+DMFT >>

AUTOPARAL 0
ndtset 1        # how many running data set
jdtset 4   

#Definition of the Structure  ======================
chkprim 0              # check primitive cell, default: 1 (stop) / 0 (warn)
nsym 0                 # number of symmetry, default: 0 (autocheck) / 1 (nosymm)

ntypat 1
znucl 63 
natom 1
typat 1*1 
acell 3*1.0 angstrom
rprim
   -2.31952    2.31952    2.31952
    2.31952   -2.31952    2.31952
    2.31952    2.31952   -2.31952
xred
  0.00000      0.00000      0.00000  # Eu


# Spin-orbit =======================================
nspinor 1     # spinor
nspden 2      # spin density
nsppol 2      # spin polarizaton
spinat 0 0 0  # initial moments
pawspnorb 0   # turn on paw SOC
spnorbscl 1.0 # scaling of SOC

# Correlated Orbital ================================
usepawu   1      # Full localized doubling counting
dmatpuopt  1     # The density matrix: the simplest expression.
lpawu   3        # f-orb
upawu 0.0 eV # only for DS 1~3
jpawu 0.0 eV  

#Convergence  ==========================
ecut  10        # Maximal kinetic energy cut-off, in Hartree
pawecutdg 15    # ecut for paw double grid
occopt 3        # smearing of the energy levels
tsmear 1200 K
diemac 1.0e+6   # large value for metal
nband 50

# k-mesh ===========================================
kptopt 4       # kpt generation, if SOC, no TRS allowed
ngkpt 10 10 10    # k-mesh along each axis
nshiftk 1      # how many k-shift
shiftk         # shift vector
0.5 0.5 0.5
istwfk *1

# DS1: DFT SCF ===========================================
nstep1 100      # Maximal number of SCF cycles
nline1 10
nnsclo1 10
tolvrs1 1.0d-3

# DS2: FATBAND ==========================================
iscf2 -2           # conventional nscf calculation
getden2 1          # get den from n-th dataset
tolwfr2 1.0d-8     # nscf's only acceptable convergence criterion
pawfatbnd2 2       # print fat band infomation up to (L,M)
natsph2 1          # total projected atom
iatsph2 1          # indexs of projected atoms
kptopt2 -5         # minus: k deffined by kptbounds, total 8 segments
ndivk2             # divide of k of each segment
 23 26 26 19 19 
kptbounds2         # k-path
   0.0000   0.0000   0.0000   # G
  -0.5000   0.5000   0.5000   # H
   0.0000   0.5000   0.0000   # N
   0.0000   0.0000   0.0000   # G
   0.2500   0.2500   0.2500   # P
  -0.5000   0.5000   0.5000   # H

# DS3: PDOS ==============================================
iscf3 -3            # nscf run (use -3 if occopt~=3~7)
tolwfr3 1.0d-8      # nscf's only acceptable convergence criterion
getden3 1           # fetch dataset-1 density
prtdos3 3           # calculate projected dos
prtdosm3 0          # print pdos to m-component
pawprtdos3 1        # calculate three contributions respectively
natsph3 1           # total projected atom
iatsph3 1           # indexs of projected atoms

# DS4: DMFT ==============================================
usedmft4 1
nline4 10
nnsclo4 10

getwfk4 1
nstep4   50 
tolvrs4 1.0d-3

upawu4  0.0  eV
jpawu4  0.0  eV

dmft_solv4 5 # CTQMC
dmftbandi4 5 # initial band (NSOC/NM: 6)
dmftbandf4 29 # final band (NSOC/NM: 12)

dmft_iter4 3
dmft_mxsf4 0.5
dmft_tollc4 1e-5

dmft_dc4 1
dmft_nwlo4 600
dmft_nwli4 100000

dmftqmc_l4 300
dmftqmc_n4 1e+6
dmftqmc_therm4 10000 #10000
dmftctqmc_gmove4 0
dmftctqmc_order4 50 #50



