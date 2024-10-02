# Crystalline aluminum
#
# Determination of the surface energy of aluminum :
# a minimal slab.

#Definition of occupation numbers
occopt 4
tsmear 0.02

#Definition of the k-point grid 
ngkpt  4 2 1  
nshiftk 2
shiftk  0.5 0.0 0.0
        0.0 0.5 0.0


#Definition of the unit cell
acell 0.3310084838E+01  0.5336862695E+01  0.2866617559E+02 angstrom       
angdeg 90 90 90

#Definition of the atom types
chkprim  0
chksymbreak 0        
ntypat 5
znucl 30 8 1 6 7           
#Definition of the atoms
natom 28
typat  2 2 2 2 2 2 2 2 1 1 1 1 1 1 1 1 3 4 3 3 5 3 4 5 3 5 3 3
natfix 4
iatfix 1 3 9 11
xred       
5.0000863450E-01  4.9809525780E-01  3.3303340280E-02
                       5.2617060315E-01  4.5334774005E-01  2.3346538550E-01
                      -8.8767845660E-06 -1.9019657390E-03  6.6696689070E-02
                       2.5688407335E-02 -5.3171561124E-02  2.6828450218E-01
                       6.8542054926E-03  4.7438286116E-01  1.3439431438E-01
                       3.1922982741E-02  4.3965749002E-01  3.3267923166E-01
                       5.0572675982E-01 -3.3718919874E-02  1.6721476833E-01
                       5.3590151222E-01 -6.7942196599E-02  3.7071379219E-01
                       4.9999655030E-01  8.7688671560E-01  3.3367290210E-02
                       5.2553844676E-01  8.3230578066E-01  2.3449653013E-01
                       3.3683789230E-06  3.7689952230E-01  6.6632536810E-02
                       2.6486399399E-02  3.2675241249E-01  2.6625997710E-01
                       4.5136689986E-03  8.5195149341E-01  1.3417130599E-01
                       3.6459552054E-02  8.2085541315E-01  3.3624408117E-01
                       5.0573272215E-01  3.4566561178E-01  1.6673924080E-01
                       5.2860553310E-01  2.9671260741E-01  3.6299900137E-01
                       2.7045783214E-01 -1.6768932595E-02  5.3354269098E-01
                       4.2958049386E-01  1.6134427456E-01  5.3137600732E-01
                       6.8537985416E-01  1.5222943913E-01  5.5541592607E-01
                       2.2336589439E-01  3.0721541976E-01  5.4371473250E-01
                       5.5609288716E-01  2.0206915077E-01  4.8349941273E-01
                       4.0293794100E-01  1.0387938890E-01  4.5877715106E-01
                       6.2720683316E-01  4.4413515006E-01  4.6759038437E-01
                       5.8612901087E-01  4.9864971656E-01  4.2462147282E-01
                       6.1830709281E-01  6.8418190111E-01  4.1378632577E-01
                       7.6787932910E-01  6.1040886725E-01  5.0158721349E-01
                       6.0621436594E-01  6.0621691142E-01  5.3152910911E-01
                       7.8420439132E-01  7.8702483484E-01  4.8873449403E-01
 
#The relaxation
#ionmov 3
iprcel 45
#tolmxf 5.0d-4
#ntime 500
prtcif 1
prtden 1
prtdos 3
#prtwf 1
#Definition of the planewave basis set
ecut  45.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 1000          # Maximal number of SCF cycles
toldfe 5.0d-7

#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tbase4_5.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00, fld_options=-easy
#%% psp_files =  13al.981214.fhi
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = 
#%% keywords = 
#%% description = 
#%%<END TEST_INFO>
