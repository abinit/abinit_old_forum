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
nstep 1           # Maximal number of SCF cycles
toldfe   1.0d-2    # Tolerance for differences of forces (in hartree/Bohr) that, TWICE successively will top SCF
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


mkmem 2

# Definition of the k-point mesh
kptopt   1   # Option for the automatic generation of k points, taking into account the symmetry
ngkpt       2     2     1  # Number of gridpoints in each dimension
nshiftk  1
shiftk  0.5 0.5 0.5  # These shifts will be the same for all grids
 irdwfk 1            # This is to speed up the calculation, by restarting
                     # from previous wavefunctions, transferred from the old 
                     # to the new k-points.
                     # Careful: be sure to move the previous WFK file to the
                     # input file!!!
 
 
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
   14.0564427771698        13.6209041016863        18.8972613288564     
 rprim
     9.999999999876857E-01    -4.962727159319292E-06     0.000000000000000E+00
    -2.118634722943834E-03     9.999977556909369E-01     0.000000000000000E+00
     0.000000000000000E+00     0.000000000000000E+00     1.000000000000000E+00
 xred
     2.099482736241872E-02     4.795728894506930E-01     4.613233916014924E-01
     5.050023681475495E-01     4.946067125289543E-01     4.624960162983874E-01
     4.864843515166569E-01     9.828228437511047E-01     4.605682791972140E-01
     9.686419709763110E-01     9.750408368506548E-01     4.658257136517108E-01
     2.546685275404814E-01     2.301443251705863E-01     1.824157699999999E-01
     2.509911129611958E-01     7.312264124162248E-01     1.778423299999999E-01
     7.496468213256028E-01     2.295761670191286E-01     1.857543899999999E-01
     7.489058544830635E-01     7.305444767148004E-01     1.799310699999998E-01
     2.869649804267353E-01     2.788107077541995E-01     5.368199974294037E-01
     7.558404361772811E-01     7.142112065111932E-01     5.357069114452070E-01
     2.837324632422530E-01     7.495222517221874E-01     5.318138120352646E-01
     7.604444015231224E-01     1.828353528273311E-01     5.388717730741646E-01
     2.506243902879047E-01     4.793859010287861E-01     4.497137099999998E-02
     5.039476843476207E-01     2.305792586590720E-01     3.307283400000000E-01
     2.501875863744982E-01     4.812836925212446E-01     3.064405399999999E-01
     4.963370579993560E-01     7.320381635664031E-01     3.076021199999998E-01
     7.500954182018075E-01     4.783641582013348E-01     4.772281599999997E-02
     7.552941780437582E-01     4.850811724619322E-01     3.113292699999999E-01
     3.211382026463460E-03     2.326170667120872E-01     3.294786499999997E-01
     4.757769360423454E-03     7.286229931733462E-01     3.358159999999997E-01
     2.506920041589760E-01     9.809798877585850E-01     4.287042599999998E-02
     2.498992490973540E-01     9.801226627316096E-01     3.015132899999998E-01
     7.498741509133108E-01     9.814607461483161E-01     4.549331699999995E-02
     7.581381657684647E-01     9.754448626590745E-01     3.059289899999999E-01
