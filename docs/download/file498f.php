# Crystalline AlAs : computation of the phonon spectrum

   ndtset   2
   jdtset   2 3  #2 3
#Set 1 : ground state self-consistency

  #getwfk1   0            # Cancel default
  #irdwfk1   1
  #kptopt1   1            # Automatic generation of k points, taking
                         # into account the symmetry
  #  nqpt1   0            # Cancel default
  #tolvrs1   1.0d-18      # SCF stopping criterion (modify default)
  #rfphon1   0            # Cancel default
 

#paral_kgb1  1
#npkpt1    80 # in total 800 kpts.
#npband1  4
#paral_rf1  0


#Q vectors for all datasets

#Complete set of symmetry-inequivalent qpt chosen to be commensurate
# with kpt mesh so that only one set of GS wave functions is needed.
#Generated automatically by running GS calculation with kptopt=1,
# nshift=0, shiftk=0 0 0 (to include gamma) and taking output kpt set
# file as qpt set. Set nstep=1 so only one iteration runs.

     nqpt   1            # One qpt for each dataset (only 0 or 1 allowed)
                         # This is the default for all datasets and must
                         #  be explicitly turned off for dataset 1.

      qpt2   0.00000000E+00  0.00000000E+00  0.00000000E+00
      qpt3   0.00000000E+00  0.00000000E+00  0.00000000E+00


#Set 2 : Response function calculation of d/dk wave function 

    iscf2   -3         # Need this non-self-consistent option for d/dk
  kptopt2   2          # Modify default to use time-reversal symmetry
  rfphon2   0          # Cancel default
  rfelfd2   2          # Calculate d/dk wave function only
  tolwfr2   1.0d-22    # Use wave function residual criterion instead
   prtwf2   1

#Set 3 : Response function calculation of Q=0 phonons and electric field pert.

  getddk3   2 #2          # d/dk wave functions from last dataset
  kptopt3   2 #2          # Modify default to use time-reversal symmetry
  rfelfd3   3          # Electric-field perturbation response only
   prtwf3   0

#Sets 4-10 : Finite-wave-vector phonon calculations (defaults for all datasets)

   getwfk   1          # Use GS wave functions from dataset1
   kptopt   3          # Need full k-point set for finite-Q response
   rfphon   1          # Do phonon response
  rfatpol   1 1  #1 5        # Treat displacements of all atoms
    rfdir   1 0 0      # Do all directions (symmetry will be used)
   tolvrs   1.0d-8     # This default is active for sets 3-10

#######################################################################
#Common input variables

#Definition of the unit cell
#    acell   3*10.61         # This is equivalent to   10.61 10.61 10.61
#    rprim   0.0  0.5  0.5   # In lessons 1 and 2, these primitive vectors 
#            0.5  0.0  0.5   # (to be scaled by acell) were 1 0 0  0 1 0  0 0 1 
#            0.5  0.5  0.0   # that is, the default.
#acell    1.12871385659739E+01  1.12868770223405E+01  4.72431497140000E+01
acell      1.1341716634E+01  1.1341573207E+01  4.7243149714E+01
#angdeg   9.00000000000000E+01  9.00000000000000E+01  1.20005584173749E+02
angdeg     9.00000000000000E+01  9.00000000000000E+01  1.20003080926007E+02

#Definition of the atom types
#   ntypat   3         # There are two types of atom
#    znucl   13 33     # The keyword "znucl" refers to the atomic number of the 
                      # possible type(s) of atom. The pseudopotential(s) 
                      # mentioned in the "files" file must correspond
                      # to the type(s) of atom. Here, type 1 is the Aluminum,
                      # type 2 is the Arsenic.

#Definition of the atoms
#    natom   2         # There are two atoms
#    typat   1 2       # The first is of type 1 (Al), the second is of type 2 (As).
 
ntypat 3
znucl 25  15  16   # Mn  P  S

natom 10
typat 1  1  2  2  3  3  3  3  3  3

                      
#           xangst     -1.4788199094E+00  4.3370155253E+00  8.0951454078E-05
#                       4.4942510592E+00  8.8886615674E-01 -8.0951454078E-05
#                       1.5076498001E+00  2.6128751605E+00  1.0948054484E+00
#                       1.5077813497E+00  2.6130065215E+00 -1.0948054484E+00
#                      -4.4771902949E-01  2.6129501304E+00 -1.6207815747E+00
#                       2.4855796187E+00  9.1948626041E-01 -1.6206603632E+00
#                       2.4854775381E+00  4.3064681189E+00 -1.6208860520E+00
#                       5.2995361173E-01  9.1941356317E-01  1.6208860520E+00
#                       3.4631501793E+00  2.6129315516E+00  1.6207815747E+00
#                       5.2985153112E-01  4.3063954216E+00  1.6206603632E+00

           xangst     -1.4859362420E+00  4.3581612778E+00  1.2482498411E-04
                       4.5160470228E+00  8.9323448513E-01 -1.2482498411E-04
                       1.5150349424E+00  2.6256186243E+00  1.0964752190E+00
                       1.5150758385E+00  2.6257771386E+00 -1.0964752190E+00
                      -4.3842412054E-01  2.6258641593E+00 -1.6311795918E+00
                       2.4919625711E+00  9.3407697994E-01 -1.6311931202E+00
                       2.4919162944E+00  4.3175112966E+00 -1.6311479066E+00
                       5.3819448645E-01  9.3388446633E-01  1.6311479066E+00
                       3.4685349014E+00  2.6255316037E+00  1.6311795918E+00
                       5.3814820971E-01  4.3173187830E+00  1.6311931202E+00


#Gives the number of band, explicitely (do not take the default)
  nband   56       

 nsppol   2
 spinmagntarget  0.0
 nspden 2
 spinat   0.0 0.0   5.0
          0.0 0.0  -5.0 # antiferromagnetic
          0.0 0.0   0.0
          0.0 0.0   0.0
          0.0  0.0  0.0
          0.0  0.0  0.0
          0.0  0.0  0.0
          0.0  0.0  0.0
          0.0  0.0  0.0
          0.0  0.0  0.0

 usepawu   1
 lpawu   2 -1 -1
 upawu  8.0 0.0 0.0 eV #originally 8.0, 0.8 eV
 jpawu  0.8 0.0 0.0 eV

usedmatpu 5

dmatpawu
   1.0   0.0   0.0  0.0  0.0
   0.0   1.0   0.0  0.0  0.0
   0.0   0.0   1.0  0.0  0.0
   0.0   0.0   0.0  1.0  0.0
   0.0   0.0   0.0  0.0  1.0
# occupation matrix for spin 1 atom2
   0.0   0.0   0.0  0.0  0.0
   0.0   0.0   0.0  0.0  0.0
   0.0   0.0   0.0  0.0  0.0
   0.0   0.0   0.0  0.0  0.0
   0.0   0.0   0.0  0.0  0.0
# occupation matrix for spin 1 atom2
   0.0   0.0   0.0  0.0  0.0
   0.0   0.0   0.0  0.0  0.0
   0.0   0.0   0.0  0.0  0.0
   0.0   0.0   0.0  0.0  0.0
   0.0   0.0   0.0  0.0  0.0
# occupation matrix for spin 1 atom2
   1.0   0.0   0.0  0.0  0.0
   0.0   1.0   0.0  0.0  0.0
   0.0   0.0   1.0  0.0  0.0
   0.0   0.0   0.0  1.0  0.0
   0.0   0.0   0.0  0.0  1.0


#Exchange-correlation functional

      ixc  -1012 #7   #LDA-PW          # GGA PBE

#Definition of the planewave basis set

#     ecut   42.0           # Maximal kinetic energy cut-off, in Hartree

pawecutdg 60.0
ecut  28.0

#Definition of the k-point grid
#    ngkpt   4  4  4          
#  nshiftk   4              # Use one copy of grid only (default)
#   shiftk   0.0 0.0 0.5    # This gives the usual fcc Monkhorst-Pack grid
#            0.0 0.5 0.0
#            0.5 0.0 0.0
#            0.5 0.5 0.5
ngkpt    16 16 4
nshiftk    1
shiftk    0.0  0.0  0.5

occopt     3
tsmear   0.0001

#Definition of the SCF procedure
    nstep   300 # 5000       # Maximal number of SCF cycles
   diemac   9.0              # Although this is not mandatory, it is worth to
                       # precondition the SCF cycle. The model dielectric
                       # function used as the standard preconditioner
                       # is described in the "dielng" input variable section.
                       # The dielectric constant of AlAs is smaller that the one of Si (=12).

    iscf    7
#   vdw_xc   5

#  paral_rf  1
#  nppert    10

  #prtwf  0

  nbdbuf 3


  istatr 1000

  autoparal 4


## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain = trf2_1.in, trf2_3.in, trf2_4.in, trf2_5.in, trf2_6.in, trf2_7.in
#%% [files]
#%% files_to_test = 
#%%   trf2_1.out, tolnlines= 14, tolabs=  5.000e-05, tolrel=  5.000e-04, fld_options=-medium
#%% psp_files =  13al.981214.fhi, 33as.pspnc 
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors = Unknown
#%% keywords = NC, DFPT
#%% description =  Crystalline AlAs : computation of the phonon spectrum
#%%<END TEST_INFO>
