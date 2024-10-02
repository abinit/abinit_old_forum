#Dont check if primitive
prtwf  1
prtden 0
prteig 0

chkprim  0 
pawovlp 50

 
# Optimization of the lattice parameters and atomic coordinates
optcell 0    # 0=none, 1=only vol, 2=all, 3=const vol, (4,5,6)=opt acell(1,2,3)
ionmov  0    # 0=none, 1=dampMD, 2=BFGS for P/=0, 3=BFGS for P=0, 4=CG
ntime   1    # max number of iterations
dilatmx 1.05  # max permitted scaling of lat. param. for optcell/=0. Effective ecut=ecut*dilatmx^2
 
 
# Definition of the planewave basis set
ecut 16.0       # Maximal kinetic energy cut-off, in Hartree
boxcutmin 1.7

# Definition of the SCF procedure
nstep 2           # Maximal number of SCF cycles
toldfe   1.0d-9    # Tolerance for differences of forces (in hartree/Bohr) that, TWICE successively will top SCF
diemac 12.0        # model DIElectric MACroscopic constant. 12 for Silicon(Semiconductors, 1.d6 for matals
optforces 2

#We are performing a PAW calculation
pawecutdg 50.0

#Parallelization over bands
#paral_kgb -24
# For dataset=   1  a possible choice for less than   24 processors is:
#  nproc     npkpt  npspinor    npband     npfft    bandpp    weight
#    24       2         1         4         3         4        0.25
#    24       2         1         6         2         4        0.75
#    24       2         1        12         1         4        1.00
#    18       2         1         3         3         4        0.25
#    16       2         1         8         1         4        1.00
#    16       2         1         4         2         4        0.50
#    12       2         1         6         1         4        1.00
#    12       2         1         3         2         4        0.25
#     8       2         1         4         1         4        1.00
#     8       2         1         2         2         4        0.25
#     6       2         1         3         1         4        1.00
#     4       2         1         2         1         4        1.00

wfoptalg 14
nband 96
paral_kgb 1
npkpt 2
npspinor 1
npband 2
npfft 1
bandpp 4


# Definition of the k-point mesh
kptopt   1   # Option for the automatic generation of k points, taking into account the symmetry
ngkpt       2     2     1  # Number of gridpoints in each dimension
nshiftk  1
shiftk  0.5 0.5 0.5  # These shifts will be the same for all grids
 
 
# Definition of the unit cell
 natom
          24
 ntypat
           2
 znucl
          20           9
 typat
           1           1           1           1           1           1
           1           1           2           2           2           2
           2           2           2           2           2           2
           2           2           2           2           2           2
  
  
 acell
   14.0559048437736        13.6168060696379        18.8972613288564     
 rprim
     1.000000000000000E+00     0.000000000000000E+00     0.000000000000000E+00
    -2.113348208432762E-03     9.999977668771816E-01     0.000000000000000E+00
     0.000000000000000E+00     0.000000000000000E+00     1.000000000000000E+00
 xred
     2.101448193884138E-02     4.795924379632280E-01     4.612409028580053E-01
     5.050205445245997E-01     4.946071346546178E-01     4.624519491728268E-01
     4.864728124236629E-01     9.828483104490227E-01     4.604954130286457E-01
     9.686083558581745E-01     9.750453931467048E-01     4.657630944105710E-01
     2.546685275404814E-01     2.301443251705861E-01     1.824157699999998E-01
     2.509911129611956E-01     7.312264124162248E-01     1.778423299999997E-01
     7.496468213256026E-01     2.295761670191286E-01     1.857543899999998E-01
     7.489058544830631E-01     7.305444767148004E-01     1.799310699999997E-01
     2.870214682519203E-01     2.788000743038599E-01     5.367929507173929E-01
     7.558549032391310E-01     7.142018397610378E-01     5.357138499848341E-01
     2.837141976297386E-01     7.495456563451347E-01     5.317924213459965E-01
     7.604671027303234E-01     1.828464099416552E-01     5.388594168926633E-01
     2.506243902879046E-01     4.793859010287861E-01     4.497137099999996E-02
     5.039476843476206E-01     2.305792586590720E-01     3.307283399999998E-01
     2.501875863744980E-01     4.812836925212445E-01     3.064405399999998E-01
     4.963370579993558E-01     7.320381635664028E-01     3.076021199999997E-01
     7.500954182018073E-01     4.783641582013348E-01     4.772281599999994E-02
     7.552941780437581E-01     4.850811724619321E-01     3.113292699999998E-01
     3.211382026463460E-03     2.326170667120872E-01     3.294786499999995E-01
     4.757769360423453E-03     7.286229931733460E-01     3.358159999999996E-01
     2.506920041589759E-01     9.809798877585848E-01     4.287042599999996E-02
     2.498992490973540E-01     9.801226627316093E-01     3.015132899999997E-01
     7.498741509133103E-01     9.814607461483158E-01     4.549331699999993E-02
     7.581381657684647E-01     9.754448626590740E-01     3.059289899999997E-01
