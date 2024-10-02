# GQDs in a big box

#structural optimization
ionmov  2              # Use the modified Broyden algorithm
ntime   50             # Maximum number of Broyden "timesteps"
tolmxf  5.0d-4         # Stopping criterion for the geometry optimization : when 
xcart             # This keyword indicates that the location of the atoms
    -0.67266202     1.15569103     0.00000000
     0.67118198     1.14853096     0.00000000
    -1.40257299     0.02504600     0.00000000
     1.41374397     0.02811400     0.00000000
    -0.66550601    -1.09844303     0.00000000
     0.67266202    -1.09844303     0.00000000
     2.84572601     0.00313300    -0.00000000
    1.43175101     2.23711109    -0.00000000
    -1.34202695     2.25973606    -0.00000000
   -2.72352505     0.00986800    -0.00000000
   -1.38149798    -2.18079400    -0.00000000
     1.38677502    -2.33991003    -0.00000000
    3.49585891     1.18716002    -0.00000000
     3.43820906    -1.19489300    -0.00000000
     2.77998304     2.23711109    -0.00000000
     2.71356392    -2.32040501     0.00000000
     0.61180598    -3.32546401    -0.00000000
    -0.73022002    -3.32546401    -0.00000000
    -2.70378900    -2.18079400    -0.00000000
   -3.45374608    -1.09533095    -0.00000000
    -3.37480307     1.15453804    -0.00000000
    -3.33533096    -3.30572796    -0.00000000
    -2.62484694     2.20052910    -0.00000000
   -0.61180598     3.30572796    -0.00000000
    0.67101300     3.32546401    -0.00000000
   -1.46379805    -4.44857311     0.00000000
   -1.23507905     4.47144508     0.00000000
    1.31823802     4.41485405     0.00000000
   -3.17918611     3.35072398     0.00000000
   -4.70088720     1.13169503     0.00000000
   -4.75063181    -1.10682297     0.00000000
     3.43077588     3.39646792     0.00000000
    4.78021383     1.17789996     0.00000000
     4.78021383    -1.20077205     0.00000000
    3.36215997    -3.44221210     0.00000000
    1.18933594    -4.51718807     0.00000000
    5.37488222    -0.03430800     0.00000000
    5.39775419    -2.32149196     0.00000000
    4.71159887    -3.44221210     0.00000000
    2.49303102    -4.47144508     0.00000000
    0.52232099    -5.60872984     0.00000000
   -0.82078999    -5.63360310     0.00000000
    -2.81058311    -4.43972588     0.00000000
   -4.65114212    -3.37021303     0.00000000
    -5.42218685    -2.27582598     0.00000000
    -5.42218685    -0.01243600     0.00000000
   -5.29782486     2.32557106     0.00000000
    -4.50190687     3.37021303     0.00000000
    -2.53698707     4.41485405     0.00000000
    -0.54719299     5.50924015     0.00000000
    0.72130001     5.55898523     0.00000000
    2.61160398     4.34023714     0.00000000
    4.75063181     3.39508510     0.00000000
     5.47193193     2.32557106     0.00000000
     5.29983521     4.30910015     0.00000000
     6.44574499     2.35150290     0.00000000
    6.32637882    -2.27988410     0.00000000
    5.22821522    -4.33297300     0.00000000
    3.00801396    -5.43113708     0.00000000
    0.95492500    -6.45768213     0.00000000
    -1.33689499    -6.52930117     0.00000000
    -3.46160412    -5.38338995     0.00000000
    -5.29983521    -4.35684586     0.00000000
   -6.39799881    -2.27988410     0.00000000
    -6.49349117     0.01193700     0.00000000
    -5.06110287     4.28522682     0.00000000
    -3.12737989     5.38338995     0.00000000
   -1.00267100     6.40993500     0.00000000
    1.24140298     6.50542784     0.00000000
    3.15125299     5.24015188     0.00000000
    6.73222399    -0.03581000    -0.00000000
     7.13806820     1.15784705    -0.00000000
    7.63940287    -1.03848100    -0.00000000
    8.33172417    -0.41778001    -0.00000000
    -6.75609684     2.59023499    -0.00000000
    -7.37679911     1.82629502    -0.00000000
toldff  1.0d-5         
#Definition of the unit cell

acell 34 34 10  # The keyword "acell" refers to the
                  # lengths of the primitive vectors (in Bohr)
rprim 1 0 0  0 1 0  0 0 1 # This line, defining orthogonal primitive 

#Definition of the atom types
ntypat 3          # There is only one type of atom
znucl 6 1 8         # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  #                          

#Definition of the atoms
natom 76           # There are two atoms
typat 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 1 3 3 2 3 2   #Definition of the planewave basis set

ecut 35.0         # Maximal plane-wave kinetic energy cut-off, in Hartree

#Definition of the k-point grid
kptopt 0          # Enter the k points manually 
nkpt 1            # Only one k point is needed for isolated system,
                  # taken by default to be 0.0 0.0 0.0
enunit 1
#Definition of the SCF procedure
nstep 1000          # Maximal number of SCF cycles
# Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
diemac 2.0        # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescriptions for molecules 
                  # in a big box
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tbase1_1.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00
#%% psp_files =  01h.pspgth
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% authors = 
#%% keywords = 
#%% description = 
#%%<END TEST_INFO>

