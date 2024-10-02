# Crystalline LiNi0.5Co0.5PO4 
#
# Computation of the Density of states.
# First, a SCF density computation.

#Spin
nsppol 2
nspden 2
nspinor 1
spinat 0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0 
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 1
       0 0 1
       0 0 -1
       0 0 -1
   
#Parameters
nstep  500
ecut 50            # Maximal kinetic energy cut-off, in Hartree
pawecutdg 200
toldfe 1.0d-6
nband  102
occopt 7  tsmear 0.015
pawovlp -1       
       
#Definition of the unit cell
acell  10.407200000 6.061880000 4.733570000 90.000000000 90.000000000 90.00000000000            
rprim  1.000000000  0.000000000     0.000000000       
       0.000000000  0.582498000     0.000000000   
       0.000000000  0.000000000     0.454836000

#Definition of the atom types
ntypat 4                        # There is only four type of atom
znucl 3 8 15 27                  # The keyword "znucl" refers to the atomic number of the 
                                # possible type(s) of atom. The pseudopotential(s) 
                                # mentioned in the "files" file must correspond
                                # to the type(s) of atom.
                         
#Definition of the atoms
natom 28                        # There are twenty eight atoms
typat 1 1 1 1 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 3 3 3 3 4 4 4 4
xred                   
  -1.37512105963824E-01  3.65589181104988E-01  2.07313707224390E+00
   1.73811981731753E-01 -1.78358605822296E-01  7.94117564138705E-01
   5.73269786936377E-01  7.18809115344759E-01  3.57748502093406E-01
   3.96422765489396E-01 -6.29624393486021E-01  3.45771087693198E+00
   3.56751369760749E-01  3.38354311262661E+00 -2.35011296395222E+01
   1.34132479667898E+00  1.45888805957236E+00 -2.18985669716431E+01
   1.69086018013464E+00  1.52211841575469E+00  2.32478735757196E+01
   8.71501463392628E-01  4.99009161853295E-01 -2.16210572476717E+00
   1.50590365536411E+00  1.29856456771736E+00  2.60654874600713E+01
  -4.01708218797704E-01  2.30414506842414E+00  2.59196474767196E+01
  -8.03737239778097E-02  9.22866466395965E-01 -2.52060025767726E+01
   1.47917733503900E+00  2.47802231628587E-01  3.34564894019824E+00
  -1.48003669436332E+00 -7.03436383190063E-01 -1.21660037807152E+01
   2.89187387675883E+00  5.13393021924943E-01 -1.08895852338712E+01
   3.18595203496976E+00  7.77175663838538E-01  1.27058881526689E+01
  -1.45483137537143E+00  3.67067916668818E-01  1.20846708154383E+01
   1.78237263986452E+00 -3.17765548700478E+00 -2.89152191177812E+00
  -1.34511378969805E+00 -2.51102199938083E+00 -1.71989569623778E+00
  -1.35360966613608E+00  5.80333394944403E+00 -2.41193116481678E+00
  -5.47233497964053E-01 -2.75498916177169E+00  3.18999697438659E+00
  -1.70002470903014E-01  3.62299193411574E+00  1.33876702872955E+00
   9.07226634218137E-01  3.31199705461226E+00  7.94977935476858E-01
   8.58487813620468E-01 -2.80251566640950E+00  6.63827958392253E-01
  -8.05287878577882E-01 -2.60402637523169E+00  6.98196558596629E-01
  -2.63884636535663E-02  3.71250092379872E-02 -4.87012350180834E-01
   1.56320298167848E+00 -1.23409541196127E+00 -1.97249891660030E-01
   1.33950639777235E+00  1.67886215648841E+00 -4.78752631365890E-01
   2.84452171996573E-01  7.62441397504640E-01  2.72060681525100E-01


ndtset 2
 
#Dataset 1 : SCF calculation
ngkpt1   2 2 2   # Use a rather loose grid for SCF calculation
toldfe1  1.0d-10
prtden1  1  

#Dataset 2 : PDOS calculation
iscf2   -3
getden2  1
getwfk2  1
prtdos2  4
natsph2  1
iatsph2  2
ratsph2  80
         80 
         80
         80
dosdeltae 0.001   # This is also the default value for prtdos2=1,
                    # but the presence of dosdeltae is there for checking purposes
ngkpt2   4 4 4      # This is not sufficient for a nice DOS.
                    # One should use ngkpt2 8 8 8
tolwfr2  1.0d-16
nshiftk2 4
shiftk2  0.5 0.5 0.5  # These shifts will be the same for all grids
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5  
# Kpoint Grid
ngkpt 8 8 8
chksymbreak 0  # The k point grid is not symmetric, but the calculations being for the ground-state, this is not a problem.
               
# Exchange-correlation functional
ixc 11             # GGA Perdew-Burke-Ernzerhof GGA functional 
# GGA+U
usepawu   1
lpawu   -1 -1  -1   2 
upawu  0.0 0.0 0.0 4.3 eV
jpawu  0.0 0.0 0.0 0.59 eV

#Density matrix
usedmatpu 5
dmatpawu
#Calculated occupation matrix for spin up =  10.23084 and atom  25.  
     2.03376    0.04409   -0.17067   -0.13027    0.01558
     0.04409    2.11829    0.01785    0.18367    0.13164
    -0.17067    0.01785    1.84856   -0.04530    0.01140
    -0.13027    0.18367   -0.04530    2.20735    0.16641
     0.01558    0.13164    0.01140    0.16641    2.02288

#Calculated occupation matrix for spin down =  10.22815 and atom  25. 
     2.03343    0.04434   -0.17073   -0.13008    0.01574
     0.04434    2.11757    0.01767    0.18352    0.13153
    -0.17073    0.01767    1.84835   -0.04536    0.01133
    -0.13008    0.18352   -0.04536    2.20665    0.16632
     0.01574    0.13153    0.01133    0.16632    2.02215

#Calculated occupation matrix for spin up =  12.38801 and atom  26. 
     2.50804    0.02891    0.06628   -0.08823    0.03326
     0.02891    2.68496    0.01126   -0.01336   -0.01620
     0.06628    0.01126    2.05739    0.03924    0.09821
    -0.08823   -0.01336    0.03924    2.65565   -0.10803
     0.03326   -0.01620    0.09821   -0.10803    2.48197

#Calculated occupation matrix for spin down =  12.38864 and atom  26.  
     2.50793    0.02864    0.06659   -0.08869    0.03298
     0.02864    2.68489    0.01139   -0.01349   -0.01638
     0.06659    0.01139    2.05726    0.03926    0.09809
    -0.08869   -0.01349    0.03926    2.65587   -0.10837
     0.03298   -0.01638    0.09809   -0.10837    2.48269
     
#Calculated occupation matrix for spin up =  12.49423 and Atom  27.
     2.27373    0.03910    0.01494   -0.11202   -0.20501
     0.03910    2.96843    0.00840    0.21288   -0.12519
     0.01494    0.00840    1.97785    0.06517   -0.11588
    -0.11202    0.21288    0.06517    2.65766   -0.26674
    -0.20501   -0.12519   -0.11588   -0.26674    2.61657

#Calculated occupation matrix for spin down =  12.50692 and atom  27.
     2.27571    0.03806    0.01487   -0.11285   -0.20381
     0.03806    2.97356    0.00798    0.21529   -0.12706
     0.01487    0.00798    1.97850    0.06524   -0.11597
    -0.11285    0.21529    0.06524    2.66015   -0.26809
    -0.20381   -0.12706   -0.11597   -0.26809    2.61900
    
#Calculated occupation matrix for spin up =  11.47428 and atom  28.
     2.34302   -0.03887   -0.04783    0.09974    0.19075
    -0.03887    2.57301   -0.12947    0.12111   -0.27757
    -0.04783   -0.12947    1.97521    0.03526    0.06826
     0.09974    0.12111    0.03526    2.15461   -0.18311
     0.19075   -0.27757    0.06826   -0.18311    2.42843

#Calculated occupation matrix for spin down =  11.48862 and atom  28.
     2.34634   -0.03922   -0.04844    0.09940    0.19139
    -0.03922    2.57913   -0.13048    0.12285   -0.27985
    -0.04844   -0.13048    1.97613    0.03518    0.06848
     0.09940    0.12285    0.03518    2.15642   -0.18407
     0.19139   -0.27985    0.06848   -0.18407    2.43061


## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   LNCP_DOS.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00
#%% psp_files =  Li.GGA_PBE-JTH.xml O.GGA_PBE-JTH.xml P.GGA_PBE-JTH.xml Co.GGA_PBE-JTH.xml
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = Unknown
#%% keywords = 
#%% description = 
#%%   Crystalline LiNi0.5Co0.5PO4 
#%%  
#%%   Computation of the band structure.
#%%   First, a SCF density computation, then a non-SCF band structure calculation.
#%%<END TEST_INFO>
