# Crystalline graphene 7/04/2017
#
# Computation of the band structure.
# First, a SCF density computation, then a non-SCF band structure calculation.
vdw_xc 5
##Van der Waals DFT-D2 tolerance
vdw_tol 1.e-4
#
#chksymbreak 0
#nsppol 2
#occopt 7
#ionmov1 3
#ntime1 10
#dilatmx1 .5 
#Dataset 1 : usual self-consistent calculation
#kptopt1 1          # Option for the automatic generation of k points,
AUTOPARAL 1


#### spin#####

#anti-ferromagnetic: nsppol=1,nspinor=1,nspden=2

#nsppol=1,nspinor=2,nspden=4
#nspinor 1
#nsppol  1   
#nspden  2  
# ##prtcif 1
occopt 3
tsmear 0.01

nspinor 1
nspden  2
nsppol  2




spinat
 
  
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1
0.0  0.0  1


#iscf 17
                   # taking into account the symmetry
nshiftk 1
shiftk   0.0 0.0 0.5   # These shifts will be the same for all grids
       
        
         
ngkpt  3 3 1
prtden 1         # Print the density, for use by dataset 2
toldfe  1.0d-7    # This value is way too large for most realistic studies of materials
getwfk  -1        # Will use the converged wavefunction from the
                  # previous dataset to start the new dataset computation
enunit  1   
          # Will output the eigenenergies in eV 
iscf2    -2
getden2  -1
kptopt1  1 
nband2   800
ndivk2   20 10

kptbounds 0   0   0  
          2/3 -1/3 0 
          1/2 0   0  
tolwfr2  1.0d-6 

#Definition of the unit cell
chkprim 0
#Definition of the unit cell
acell  12.3315432810000   12.3315432810000   10  angstrom  # This is equivalent to   10.216 10.216 10.216
rprim  
  
1.0  0.        0.0 
-1/2   sqrt(0.75)  0.0
 0.0   0.0       1.0

#Definition of the atom types
ntypat 2          # There is two types of atoms
znucl 6 1          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 51          # There are three atoms
typat 50*1 2        # They  are of type 1 Mo,type 2 sulphur .
#xred              # This keyword indicate that the location of the atoms
# 0.  0.  0.             # C
# 1/3 2/3  0.
#or 
 xangst 
   -1.8790271115E-07  1.7295281089E-03  3.8558270509E+00
   -1.8790271114E-07 -1.4583321683E+00  3.5075928909E+00
   -1.2436094872E+00  2.1345433510E+00  3.4211776146E+00
   -1.2644429640E+00  7.3173141754E-01  3.5075000502E+00
   -2.4686081609E+00  4.2740438675E+00  3.3164172622E+00
   -2.4724070239E+00  2.8510900071E+00  3.3321675938E+00
   -3.7001278692E+00  6.4071033805E+00  3.3164129361E+00
   -3.7009443827E+00  4.9845947610E+00  3.2952211878E+00
   -4.9404817459E+00  8.5377317034E+00  3.4212406990E+00
   -4.9343431019E+00  7.1152950900E+00  3.3322014537E+00
    2.4689001911E+00  1.2290566836E-02  3.4211798828E+00
    2.4694812825E+00 -1.4240365710E+00  3.4284147331E+00
    1.2436091114E+00  2.1345433510E+00  3.4211776146E+00
    1.2644425882E+00  7.3173141754E-01  3.5075000502E+00
   -1.8790271031E-07  4.2662840036E+00  3.3705088888E+00
   -1.8790271125E-07  2.8532119906E+00  3.4283993690E+00
   -1.2359947192E+00  6.4077202610E+00  3.3402149797E+00
   -1.2364418847E+00  4.9852300228E+00  3.3419195556E+00
   -2.4725360494E+00  8.5488535199E+00  3.3704908824E+00
   -2.4681341362E+00  7.1185915586E+00  3.3419035523E+00
    4.9342520228E+00  3.4242982498E-03  3.3163821961E+00
    4.9340797682E+00 -1.4192571984E+00  3.3418797668E+00
    3.7029238159E+00  2.1395994836E+00  3.3086483641E+00
    3.7038372447E+00  7.1819555060E-01  3.3321499557E+00
    2.4686077851E+00  4.2740438675E+00  3.3164172622E+00
    2.4724066481E+00  2.8510900071E+00  3.3321675938E+00
    1.2359943434E+00  6.4077202610E+00  3.3402149797E+00
    1.2364415089E+00  4.9852300228E+00  3.3419195556E+00
   -1.8790271125E-07  8.5485289311E+00  3.3401897185E+00
   -1.8790271125E-07  7.1213263490E+00  3.3477658256E+00
    7.3972908824E+00  3.4242982498E-03  3.3163821961E+00
    7.3974631370E+00 -1.4192571984E+00  3.3418797668E+00
    6.1657714526E+00  2.1396201457E+00  3.2767996630E+00
    6.1657714526E+00  7.1538678340E-01  3.2952127503E+00
    4.9343696499E+00  4.2724719815E+00  3.2767784989E+00
    4.9355991717E+00  2.8512839854E+00  3.2782960614E+00
    3.7001274934E+00  6.4071033805E+00  3.3164129361E+00
    3.7009440069E+00  4.9845947610E+00  3.2952211878E+00
    2.4725356736E+00  8.5488535199E+00  3.3704908824E+00
    2.4681337604E+00  7.1185915586E+00  3.3419035523E+00
    9.8626427141E+00  1.2290566836E-02  3.4211798828E+00
    9.8620616227E+00 -1.4240365710E+00  3.4284147331E+00
    8.6286190893E+00  2.1395994836E+00  3.3086483641E+00
    8.6277056605E+00  7.1819555060E-01  3.3321499557E+00
    7.3971732553E+00  4.2724719815E+00  3.2767784989E+00
    7.3959437335E+00  2.8512839854E+00  3.2782960614E+00
    6.1657714526E+00  6.4053798679E+00  3.3086847747E+00
    6.1657714526E+00  4.9820092026E+00  3.2782908735E+00
    4.9404813701E+00  8.5377317034E+00  3.4212406990E+00
    4.9343427261E+00  7.1152950900E+00  3.3322014537E+00
   -1.8790271115E-07  1.8574736607E-03  4.9805140631E+00
 
ndtset 1

 #relaxation 
#tolmxf 5.0d-5
#ionmov 2 
#ntime 300
#optcell 9
#natfix 2 
#iatfix 3 17 




#ecutsm 0.5 ev
#dilatmx 1.01


#Definition of the planewave basis set
ecut 50.0         # Maximal kinetic energy cut-off, in Hartree
#pawecutdg 35
#pawovlp 100
#Definition of the SCF procedure
nstep 1000          # Maximal number of SCF cycles
diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
#so_psp 0                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1

#prtdos 2

#prtden 1

#prteig 1

prtgeo 1

