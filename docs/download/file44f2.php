#                   #####################
#                   # Ba3 Si6 O12 N2 Eu #
#                   #####################

 ndtset 1
 jdtset   4       

 occopt 1

# Dataset 1: Calculation of the density file
# ------------------------------------------
# Shifted to optimize the calculation of density

 kptopt1   1          # Option for the automatic generation of k points
# tolvrs1   1.0d-16
 tolvrs1   1.0d-12
 nstep1    300
 diemac1   4.0
 iscf1     17
# nbdbuf     2 # For all other dataset
# nbdbuf1    0
 nband     79  # Valence bands 
 prtden1    1
 prtvol1    3  # No kpt limit

#Response Function calculation : d/dk
  rfelfd2   2             # Activate the calculation of the d/dk perturbation
   rfdir2   1 1 1         # Need to consider the perturbation in the x-direction only
                          # This is rather specific, due to the high symmetry of the AlAs crystal
                          # In general, just use rfdir 1 1 1
                          # In the present version of ABINIT (v4.6), symmetry cannot be used
                          # to reduce the number of ddk perturbations

    nqpt2   1
     qpt2   0.0 0.0 0.0   # This is a calculation at the Gamma point

  getwfk2   1            # Uses as input the output wf of the previous dataset

  kptopt2   2             # Automatic generation of k points,
                          # using only the time-reversal symmetry to decrease
                          # the size of the k point set.

    iscf2  -3             # The d/dk perturbation must be treated 
                          # in a non-self-consistent way
  tolwfr2   1.0d-10       # Must use tolwfr for non-self-consistent calculations
                          # Here, the value of tolwfr is very low.

#Response Function calculation : electric field perturbation and phonons
  rfphon3   1             # Activate the calculation of the atomic dispacement perturbations
 rfatpol3   1 22           # All the atoms will be displaced
  rfelfd3   3             # Activate the calculation of the electric field perturbation
   rfdir3   1 1 1         # All directions are selected. However, symmetries will be used to decrease
                          # the number of perturbations, so only the x electric field is needed
                          # (and this explains why in the second dataset, rfdir was set to 1 0 0).

    nqpt3   1
     qpt3   0.0 0.0 0.0   # This is a calculation at the Gamma point

  getwfk3   1            # Uses as input wfs the output wfs of the dataset 1
  getddk3   2            # Uses as input ddk wfs the output of the dataset 2

  kptopt3   2             # Automatic generation of k points,
                          # using only the time-reversal symmetry to decrease
                          # the size of the k point set.
  tolvrs3   1.0d-12
    iscf3  -3             # Self-consistent calculation, using algorithm 5

#Response Function calculation : electric field perturbation and phonons
  rfphon4   1             # Activate the calculation of the atomic dispacement perturbations
 rfatpol4   1 22           # All the atoms will be displaced
  rfelfd4   3             # Activate the calculation of the electric field perturbation
   rfdir4   1 1 1         # All directions are selected. However, symmetries will be used to decrease
                          # the number of perturbations, so only the x electric field is needed
                          # (and this explains why in the second dataset, rfdir was set to 1 0 0).

    nqpt4   1
     qpt4   0.0 0.0 0.0   # This is a calculation at the Gamma point

  getwfk4   1            # Uses as input wfs the output wfs of the dataset 1
  getddk4   2            # Uses as input ddk wfs the output of the dataset 2

  kptopt4   2             # Automatic generation of k points,
                          # using only the time-reversal symmetry to decrease
                          # the size of the k point set.
  tolvrs4   1.0d-14
    iscf4   7             # Self-consistent calculation, using algorithm 5



# ==================================================================
# ||                                                              ||
# ||   THE INPUT VARIABLES BELOW ARE IDENTICAL FOR ALL DATASETS   ||
# ||                                                              ||
# ==================================================================
# K-points sampling
 ngkpt    2 2 2 
 nshiftk  1 
 shiftk   0 0 1/2
# tolwfr   1.0d-21
 tolwfr   1.0d-16

# Atoms in the base
# -----------------

ntypat 4
znucl 56.0 14.0 8.0 7.0

natom 22
typat 3*1 6*2 9*3 4*4

xred
# Ba
  6.66666666670000E-01  3.33333333330000E-01  7.36658004014740E-01
  3.33333360913457E-12 -3.33333360913457E-12  5.61246884482935E-01
  3.33333333336667E-01  6.66666666663333E-01  6.75324530487012E-01
# Si
  7.45772227844545E-01  9.60451728572809E-01  3.60844051205931E-02
  9.26078495117710E-01  3.76119121538392E-01  2.50146640440245E-01
  2.14679500738264E-01  2.54227772155455E-01  3.60844051205931E-02
  4.50040626430682E-01  7.39215048822899E-02  2.50146640440245E-01
  3.95482714271906E-02  7.85320499261736E-01  3.60844051205931E-02
  6.23880878461608E-01  5.49959373569318E-01  2.50146640440245E-01
# O
  1.18674153199231E-01  4.11133191925177E-01  9.66599949141545E-02
  7.07441136627294E-01  9.90867838824060E-01  8.07477194832836E-01
  9.85075447631961E-01  3.75041302581280E-01  4.78017216643877E-01
  2.92459038735946E-01  8.81325846800769E-01  9.66599949141545E-02
  2.83426702206765E-01  2.92558863372706E-01  8.07477194832836E-01
  3.89965854959319E-01  1.49245523680395E-02  4.78017216643877E-01
  5.88866808074823E-01  7.07540961264054E-01  9.66599949141545E-02
  9.13216117594034E-03  7.16573297793235E-01  8.07477194832836E-01
  6.24958697418720E-01  6.10034145040681E-01  4.78017216643877E-01
# N
  7.05169143151122E-01  1.30231600604722E-01  1.86280845991426E-01
  3.33333360913457E-12 -3.33333360913457E-12  8.27894968459729E-02
  4.25062457463600E-01  2.94830856848878E-01  1.86280845991426E-01
  8.69768399395278E-01  5.74937542536400E-01  1.86280845991426E-01


# Definition of the unit cell
# ---------------------------

acell    13.8386023721818 13.8386023721818 12.969356153513 Bohr
angdeg 90 90 120

# Optimisation in ecut
# --------------------
pawovlp    12
#pawecutdg 70
pawecutdg 16
#ecut 35
ecut 8
ecutsm  0.5

# Other
# -----

enunit 2
ixc 11              #GGA calculus
timopt -1           # A full analysis of timings is delivered 

###########################
# Parallelisation options #
###########################

#timopt -1
#paral_kgb 1         # Parallelisation over band/FFT and k-points is activated
#npkpt  2            # Number of Processors at the K-Point Level
#npband 8            # Number of Processors at the BAND level 
#npfft  1            # Number of Processors at the FFT level 
#bandpp 12           # BAND Per Processor 
