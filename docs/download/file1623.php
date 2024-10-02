
.Version 6.6.1  of ABINIT 
.(MPI version, prepared for a powerpc_aix5.3.0.0_ibm12.1 computer) 

.Copyright (C) 1998-2011 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Thu  5 May 2011.
- ( at 16h 5 )
  
- input  file    -> graphene-gw.in
- output file    -> graphene-gw.out
- root for input  files -> graphene-gwi
- root for output files -> graphene-gwo


 DATASET    1 : space group Pm (#  6); Bravais mP (primitive monocl.)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        20  mffmem =         1
P  mgfft =       192   mkmem =         2 mpssoang=         4     mpw =      8931
  mqgrid =      3001   natom =         4    nfft =    184320    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         2  n1xccc =         0  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                      62.691 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      5.453 Mbytes ; DEN or POT disk file :      1.408 Mbytes.
================================================================================


 DATASET    2 : space group Pm (#  6); Bravais mP (primitive monocl.)
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        20  mffmem =         1
P  mgfft =       180   mkmem =         2 mpssoang=         4     mpw =      8929
  mqgrid =      3001   natom =         4    nfft =    172800    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         2  n1xccc =         0  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                      59.158 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      5.452 Mbytes ; DEN or POT disk file :      1.320 Mbytes.
================================================================================


 DATASET    3 : space group Pm (#  6); Bravais mP (primitive monocl.)
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        20  mffmem =         1
P  mgfft =       180   mkmem =         2 mpssoang=         4     mpw =      8929
  mqgrid =      3001   natom =         4    nfft =    172800    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         2  n1xccc =         0  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                      59.158 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      5.452 Mbytes ; DEN or POT disk file :      1.320 Mbytes.
================================================================================

 -outvars: echo values of preprocessed input variables --------
            acell    4.6390262670E+00  8.0775747800E+00  4.0000000000E+01 Bohr
              amu    1.20110000E+01
             bdgw3     2   16
      chksymbreak         0
           diemac    2.00000000E+00
             ecut1   2.50000000E+01 Hartree
             ecut2   2.49824361E+01 Hartree
             ecut3   2.49824361E+01 Hartree
          ecuteps1   0.00000000E+00 Hartree
          ecuteps2   2.99628373E+00 Hartree
          ecuteps3   0.00000000E+00 Hartree
         ecutsigx1   0.00000000E+00 Hartree
         ecutsigx2   0.00000000E+00 Hartree
         ecutsigx3   7.99874582E+00 Hartree
          ecutwfn1   0.00000000E+00 Hartree
          ecutwfn2   2.49824361E+01 Hartree
          ecutwfn3   2.49824361E+01 Hartree
           getscr1        0
           getscr2        0
           getscr3        2
           getkss1        0
           getkss2        1
           getkss3        1
           gw_eet1       -1
           gw_eet2        2
           gw_eet3        2
            gwmem         0
         icutcoul         2
          inclvkb         2
           istwfk      1    1
              ixc        11
           jdtset      1    2    3
              kpt    0.00000000E+00  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  0.00000000E+00  0.00000000E+00
            kptgw3   0.00000000E+00  0.00000000E+00  0.00000000E+00
          kptrlen    8.07757478E+00
         kptrlatt    2  0  0   0  1  0   0  0  1
          kssform1        3
          kssform2        1
          kssform3        1
P           mkmem         2
            natom         4
            nband        20
           ndtset         3
            ngfft1       24      40     192
            ngfft2       24      40     180
            ngfft3       24      40     180
           nkptgw1        0
           nkptgw2        0
           nkptgw3        1
             nkpt         2
           npweps1        0
           npweps2      375
           npweps3        0
          npwsigx1        0
          npwsigx2        0
          npwsigx3     1561
           npwwfn1        0
           npwwfn2     8931
           npwwfn3     8931
           nsheps1        0
           nsheps2      196
           nsheps3        0
          nshsigx1        0
          nshsigx2        0
          nshsigx3      802
           nshwfn1        0
           nshwfn2     4540
           nshwfn3     4540
            nstep      1200
             nsym         2
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000
        optdriver1        0
        optdriver2        3
        optdriver3        4
          ppmodel         2
           prtpot1        1
           prtpot2        0
           prtpot3        0
           prtvxc1        1
           prtvxc2        0
           prtvxc3        0
             rcut    2.00000000E+01 Bohr
          spgroup         6
        symmorphi         0
           symrel    1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0 -1
           toldfe    1.00000000E-10 Hartree
            typat    1  1  1  1
          vcutgeo    1.0000000  1.0000000  0.0000000
              wtk      0.50000    0.50000
           xangst    8.5905895062E+00  3.5515456535E+00  0.0000000000E+00
                     9.8181907544E+00  4.2665912580E+00  0.0000000000E+00
                     8.5904597857E+00  2.1292785330E+00  0.0000000000E+00
                     9.8181668072E+00  1.4145377489E+00  0.0000000000E+00
            xcart    1.6233861487E+01  6.7114486336E+00  0.0000000000E+00
                     1.8553691646E+01  8.0626889986E+00  0.0000000000E+00
                     1.6233616351E+01  4.0237532880E+00  0.0000000000E+00
                     1.8553646393E+01  2.6730889500E+00  0.0000000000E+00
             xred    3.4994114179E+00  8.3087421860E-01  0.0000000000E+00
                     3.9994797568E+00  9.9815714719E-01  0.0000000000E+00
                     3.4993585757E+00  4.9813878517E-01  0.0000000000E+00
                     3.9994700018E+00  3.3092716847E-01  0.0000000000E+00
            znucl      6.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset= 1.

 chkinp: Checking input parameters for consistency, jdtset= 2.

 chkinp: Checking input parameters for consistency, jdtset= 3.

================================================================================
== DATASET  1 ==================================================================

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  4.6390263  0.0000000  0.0000000  G(1)=  0.2155625  0.0000000  0.0000000
 R(2)=  0.0000000  8.0775748  0.0000000  G(2)=  0.0000000  0.1237995  0.0000000
 R(3)=  0.0000000  0.0000000 40.0000000  G(3)=  0.0000000  0.0000000  0.0250000
 Unit cell volume ucvol=  1.4988833E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  40 192
         ecut(hartree)=     25.000   => boxcut(ratio)=   2.13258

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is ../../pseudo/06-C.GGA.fhi
- pspatm: opening atomic psp file    ../../pseudo/06-C.GGA.fhi
 carbon, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  6.00000   4.00000     21003                znucl, zion, pspdat
    6   11    3    2       461   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    2.83374474
         --- l  ekb(1:nproj) -->
             0    3.092918
             1   -1.669563
             3   -2.046570
 pspatm: atomic psp has been read  and splines computed

   1.81359663E+02                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating     20 bands with npw=    8931 for ikpt=   1 by node    0
P newkpt: treating     20 bands with npw=    8926 for ikpt=   2 by node    0
 
 setup2: Arith. and geom. avg. npw (full set) are    8928.500    8928.500

================================================================================

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
 ETOT  1  -22.704245363311    -2.270E+01 1.768E-02 3.073E+02 3.242E-02 3.242E-02
 ETOT  2  -22.747096346850    -4.285E-02 5.166E-03 8.851E+01 6.851E-03 2.822E-02
 ETOT  3  -22.747923863441    -8.275E-04 9.603E-04 1.618E+01 2.200E-03 2.813E-02
 ETOT  4  -22.747273549421     6.503E-04 3.278E-03 4.180E+00 4.540E-03 3.119E-02
 ETOT  5  -22.747956405404    -6.829E-04 3.915E-04 6.544E-01 4.311E-03 2.839E-02
 ETOT  6  -22.747996367017    -3.996E-05 1.374E-05 1.744E-01 9.403E-04 2.777E-02
 ETOT  7  -22.747991161110     5.206E-06 1.432E-06 5.198E-02 8.553E-04 2.822E-02
 ETOT  8  -22.748001804754    -1.064E-05 5.991E-07 3.551E-02 5.914E-04 2.769E-02
 ETOT  9  -22.748002041111    -2.364E-07 1.036E-07 1.350E-02 2.763E-05 2.767E-02
 ETOT 10  -22.748002217502    -1.764E-07 4.616E-08 8.782E-03 5.408E-05 2.772E-02
 ETOT 11  -22.748002144614     7.289E-08 1.993E-08 1.111E-02 8.658E-06 2.773E-02
 ETOT 12  -22.748002199360    -5.475E-08 3.885E-09 4.705E-03 8.441E-06 2.773E-02
 ETOT 13  -22.748002219135    -1.978E-08 1.780E-09 4.929E-03 1.284E-05 2.774E-02
 ETOT 14  -22.748002226002    -6.867E-09 3.396E-10 3.075E-03 5.399E-06 2.773E-02
 ETOT 15  -22.748002226076    -7.338E-11 1.426E-10 2.175E-03 1.045E-06 2.773E-02
 ETOT 16  -22.748002222334     3.742E-09 1.324E-10 1.393E-03 9.400E-06 2.772E-02
 ETOT 17  -22.748002222261     7.326E-11 6.535E-10 2.933E-04 1.802E-05 2.774E-02
 ETOT 18  -22.748002225838    -3.578E-09 1.928E-10 1.527E-04 1.025E-05 2.773E-02
 ETOT 19  -22.748002225901    -6.212E-11 1.695E-12 1.023E-04 2.072E-08 2.773E-02
 ETOT 20  -22.748002226079    -1.786E-10 1.560E-12 1.622E-04 4.069E-07 2.773E-02
 ETOT 21  -22.748002226101    -2.149E-11 4.163E-13 1.794E-06 3.337E-07 2.773E-02
 ETOT 22  -22.748002226091     9.372E-12 5.619E-13 1.533E-07 2.455E-07 2.773E-02

 At SCF step   22, etot is converged : 
  for the second time, diff in etot=  9.372E-12 < toldfe=  1.000E-10

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.60551940E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.85674401E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.46636762E-05  sigma(2 1)= -2.42649507E-08
 

======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)
 number of Gamma centered plane waves   9571
 number of Gamma centered shells   4864
 number of bands     20
 maximum angular momentum components      4
 Conjugate gradient eigenvalues
   k    eigenvalues [Hartree]
   1     -0.8111 -0.6179 -0.5816 -0.3751 -0.3274 -0.2087 -0.2038 -0.1821 -0.0334
          0.0225  0.0507  0.0617  0.0911  0.1065  0.1604  0.1811  0.1842  0.2124
          0.2127  0.2570
   2     -0.6519 -0.6518 -0.4797 -0.4795 -0.4247 -0.4246 -0.1945 -0.1943  0.0096
          0.0097  0.2438  0.2438  0.2679  0.2679  0.2903  0.2903  0.3116  0.3116
          0.3321  0.3321
 Test on the normalization of the wavefunctions
  min sum_G |a(n,k,G)| =  1.000000
  max sum_G |a(n,k,G)| =  1.000000
 Test on the orthogonalization of the wavefunctions
  min sum_G a(n,k,G)* a(n',k,G) =  0.000000
  max sum_G a(n,k,G)* a(n',k,G) =  0.000000

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   2.1050E-13; max=  5.6186E-13
   0.0000  0.0000  0.0000    1  5.47003E-13 kpt; spin; max resid(k); each band:
  1.53E-13 5.21E-13 9.82E-14 1.26E-13 1.86E-13 4.26E-13 5.47E-13 4.02E-13
  3.42E-13 2.72E-14 4.30E-14 6.83E-14 1.06E-13 1.28E-13 1.57E-13 6.95E-14
  3.89E-13 4.91E-13 3.92E-13 8.81E-14
   0.5000  0.0000  0.0000    1  5.61855E-13 kpt; spin; max resid(k); each band:
  1.97E-13 1.64E-13 2.41E-13 2.32E-13 4.37E-14 6.07E-14 5.21E-13 4.00E-13
  4.47E-13 5.62E-13 2.82E-14 2.82E-14 6.47E-14 5.37E-14 6.91E-14 7.04E-14
  5.52E-14 5.22E-14 1.80E-13 1.89E-13
 reduced coordinates (array xred) for    4 atoms
       3.499411417918      0.830874218605      0.000000000000
       3.999479756825      0.998157147186      0.000000000000
       3.499358575747      0.498138785167      0.000000000000
       3.999470001836      0.330927168470      0.000000000000
 rms dE/dt=  1.2861E-01; max dE/dt=  2.2229E-01; dE/dt below (all hartree)
    1      -0.000987539298     -0.224961765892      0.000000000000
    2       0.001189062747      0.222290558997      0.000000000000
    3      -0.001643902022      0.221280913691      0.000000000000
    4       0.001700513820     -0.222448193189      0.000000000000
 
 cartesian coordinates (angstrom) at end:
    1      8.59058950620000     3.55154565350000     0.00000000000000
    2      9.81819075440000     4.26659125800000     0.00000000000000
    3      8.59045978570000     2.12927853300000     0.00000000000000
    4      9.81816680720000     1.41453774890000     0.00000000000000

 cartesian forces (hartree/bohr) at end:
    1      0.00022678748710     0.02773136125572     0.00000000000000
    2     -0.00024240624449    -0.02763826849958     0.00000000000000
    3      0.00036827466283    -0.02751327488045     0.00000000000000
    4     -0.00035265590544     0.02742018212431     0.00000000000000
 frms,max,avg= 1.5921995E-02 2.7731361E-02  -1.391E-05  1.188E-04  0.000E+00 h/b

 cartesian forces (eV/Angstrom) at end:
    1      0.01166188049263     1.42600381089799     0.00000000000000
    2     -0.01246502922232    -1.42121678930897     0.00000000000000
    3      0.01893744298414    -1.41478935952780     0.00000000000000
    4     -0.01813429425445     1.41000233793878     0.00000000000000
 frms,max,avg= 8.1874184E-01 1.4260038E+00  -7.153E-04  6.109E-03  0.000E+00 e/A
 length scales=  4.639026267000  8.077574780000 40.000000000000 bohr
              =  2.454866970547  4.274468474257 21.167088343600 angstroms
 prteigrs : about to open file graphene-gwo_DS1_EIG
 Fermi (or HOMO) energy (hartree) =  -0.18210   Average Vxc (hartree)=  -0.07561
 Eigenvalues (hartree) for nkpt=   2  k points:
 kpt#   1, nband= 20, wtk=  0.50000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -0.81109  -0.61790  -0.58163  -0.37510  -0.32744  -0.20868  -0.20382  -0.18210
  -0.03336   0.02251   0.05065   0.06170   0.09105   0.10649   0.16037   0.18109
   0.18420   0.21236   0.21267   0.25698
 kpt#   2, nband= 20, wtk=  0.50000, kpt=  0.5000  0.0000  0.0000 (reduced coord)
  -0.65193  -0.65181  -0.47967  -0.47950  -0.42470  -0.42464  -0.19445  -0.19433
   0.00958   0.00974   0.24379   0.24380   0.26792   0.26793   0.29034   0.29034
   0.31156   0.31156   0.33208   0.33209
 Total charge density [el/Bohr^3]
,     Maximum=    3.4233E-01  at reduced coord.    0.3333    0.8750    0.0000
,Next maximum=    3.4229E-01  at reduced coord.    0.3333    0.4500    0.0000
,     Minimum=    7.0633E-10  at reduced coord.    0.5000    0.5500    0.4323
,Next minimum=    7.0633E-10  at reduced coord.    0.5000    0.5500    0.5677

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  1.66165294020918E+01
    Hartree energy  =  1.21668964603802E+02
    XC energy       = -7.03414760077627E+00
    Ewald energy    =  1.03486074717276E+02
    PspCore energy  =  1.20996523081259E-01
    Loc. psp. energy= -2.58037834938894E+02
    NL   psp  energy=  4.31415067327521E-01
    >>>>>>>>> Etotal= -2.27480022260913E+01

 Other information on the energy :
    Total energy(eV)= -6.19004620622305E+02 ; Band energy (Ha)=  -6.8087937853E+00
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.60551940E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.85674401E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.46636762E-05  sigma(2 1)= -2.42649507E-08

-Cartesian components of stress tensor (GPa)         [Pressure=  6.6022E-01 GPa]
- sigma(1 1)= -4.72360035E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  2.31153350E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  4.31420176E-01  sigma(2 1)= -7.13899375E-04

================================================================================
== DATASET  2 ==================================================================

 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)
 
 SCREENING: Calculation of the susceptibility and dielectric matrices

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  4.6390263  0.0000000  0.0000000  G(1)=  0.2155625  0.0000000  0.0000000
 R(2)=  0.0000000  8.0775748  0.0000000  G(2)=  0.0000000  0.1237995  0.0000000
 R(3)=  0.0000000  0.0000000 40.0000000  G(3)=  0.0000000  0.0000000  0.0250000
 Unit cell volume ucvol=  1.4988833E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is ../../pseudo/06-C.GGA.fhi
- pspatm: opening atomic psp file    ../../pseudo/06-C.GGA.fhi
 carbon, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  6.00000   4.00000     21003                znucl, zion, pspdat
    6   11    3    2       461   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    2.83374474
         --- l  ekb(1:nproj) -->
             0    3.092918
             1   -1.669563
             3   -2.046570
 pspatm: atomic psp has been read  and splines computed

--------------------------------------------------------------------------------

 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :     2
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.50000
     2)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.50000

 Together with  2 symmetry operations and time-reversal symmetry 
 yields     2 points in the full Brillouin Zone.


 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :     2
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.50000
     2)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.50000

 Together with  2 symmetry operations and time-reversal symmetry 
 yields     2 points in the full Brillouin Zone.


 setmesh: FFT mesh size selected  =  15x 25x125
          total number of points  =    46875


 screening : taking advantage of time-reversal symmetry 
 Maximum band index for partially occupied states nbvw =     8
 Remaining bands to be divided among processors   nbcw =    12
 Number of bands treated by each node ~   12

 k       eigenvalues [eV]
  1        -22.07 -16.81 -15.83 -10.21  -8.91  -5.68  -5.55  -4.96  -0.91   0.61
             1.38   1.68   2.48   2.90   4.36   4.93   5.01   5.78   5.79   6.99

  2        -17.74 -17.74 -13.05 -13.05 -11.56 -11.56  -5.29  -5.29   0.26   0.27
             6.63   6.63   7.29   7.29   7.90   7.90   8.48   8.48   9.04   9.04


 test on the normalization of the wavefunctions
 min sum_G |a(n,k,G)| =  0.999976
 max sum_G |a(n,k,G)| =  0.999999
 test on the orthogonalization of the wavefunctions
 min sum_G a(n,k,G)* a(n",k,G) =  0.000000
 max sum_G a(n,k,G)* a(n",k,G) =  0.000004

 Number of electrons calculated from density =   15.9999; Expected =   16.0000
 average of density, n =  0.010675
 r_s =    2.8174
 omega_plasma =    9.9662 [eV]


 calculating chi0 at frequencies [eV] :
  1    0.000000E+00    0.000000E+00
  2    0.000000E+00    9.966226E+00


--------------------------------------------------------------------------------
  q-point number  1        q = ( 0.000000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2   0.000  -1.004   0.960  -1.871   1.712  -2.463   2.151  -2.719   2.260
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000   9.9662 [eV]
       1       2       3       4       5       6       7       8       9
    1   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2   0.000  -0.508   0.484  -0.983   0.892  -1.370   1.189  -1.630   1.357
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

 For q-point:  0.000010 0.000020 0.000030
  dielectric constant =   1.0005
  dielectric constant without local fields =   1.0006

  Average fulfillment of the sum rule on Im[epsilon] for q-point    1 :     48.50  [%]
  Heads and wings of the symmetrical epsilon^-1(G,G')

   Upper and lower wings at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
      0.999   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
      0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
       1       2       3       4       5       6       7       8       9
      0.999   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
      0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000


   Upper and lower wings at the    2 th omega   0.0000   9.9662 [eV]
       1       2       3       4       5       6       7       8       9
      1.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
      0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
       1       2       3       4       5       6       7       8       9
      1.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
      0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000




--------------------------------------------------------------------------------
  q-point number  2        q = ( 0.500000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -21.869 -21.254 -21.254 -19.533 -19.533 -17.036 -17.036 -14.195 -14.195
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2 -21.254 -21.606 -19.617 -20.788 -15.325 -19.034 -16.359 -16.659 -12.607
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000   9.9662 [eV]
       1       2       3       4       5       6       7       8       9
    1 -10.639 -10.510 -10.510 -10.107 -10.107  -9.394  -9.394  -8.388  -8.388
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2 -10.510 -10.935  -9.774 -11.064  -8.391 -10.847  -7.968 -10.260  -7.419
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    2 :      0.00  [%]

================================================================================
== DATASET  3 ==================================================================

 mkfilename : getscr/=0, take file _SCR from output of DATASET   2.

 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)
 
 SIGMA: Calculation of the GW corrections

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  4.6390263  0.0000000  0.0000000  G(1)=  0.2155625  0.0000000  0.0000000
 R(2)=  0.0000000  8.0775748  0.0000000  G(2)=  0.0000000  0.1237995  0.0000000
 R(3)=  0.0000000  0.0000000 40.0000000  G(3)=  0.0000000  0.0000000  0.0250000
 Unit cell volume ucvol=  1.4988833E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
--------------------------------------------------------------------------------

 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :     2
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.50000
     2)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.50000

 Together with  2 symmetry operations and time-reversal symmetry 
 yields     2 points in the full Brillouin Zone.


 ==== Q-mesh for screening function ====
 Number of points in the irreducible wedge :     2
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.50000
     2)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.50000

 Together with  2 symmetry operations and time-reversal symmetry 
 yields     2 points in the full Brillouin Zone.


 setmesh: FFT mesh size selected  =  18x 30x144
          total number of points  =    77760


 k       eigenvalues [eV]
  1        -22.07 -16.81 -15.83 -10.21  -8.91  -5.68  -5.55  -4.96  -0.91   0.61
             1.38   1.68   2.48   2.90   4.36   4.93   5.01   5.78   5.79   6.99

  2        -17.74 -17.74 -13.05 -13.05 -11.56 -11.56  -5.29  -5.29   0.26   0.27
             6.63   6.63   7.29   7.29   7.90   7.90   8.48   8.48   9.04   9.04


 test on the normalization of the wavefunctions
 min sum_G |a(n,k,G)| =  0.999976
 max sum_G |a(n,k,G)| =  0.999999
 test on the orthogonalization of the wavefunctions
 min sum_G a(n,k,G)* a(n",k,G) =  0.000000
 max sum_G a(n,k,G)* a(n",k,G) =  0.000004

 Number of electrons calculated from density =   15.9999; Expected =   16.0000
 average of density, n =  0.010675
 r_s =    2.8174
 omega_plasma =    9.9662 [eV]


 === KS Band Gaps ===
  >>>> For spin  1
   Minimum optical gap =   4.0474 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   4.0474 [eV], Top of valence bands at :   0.0000  0.0000  0.0000
                                        Bottom of conduction at :   0.0000  0.0000  0.0000
 SIGMA fundamental parameters:
 PLASMON POLE MODEL  2
 number of plane-waves for SigmaX                 1561
 number of plane-waves for SigmaC and W            375
 number of plane-waves for wavefunctions          8931
 number of bands                                    20
 number of independent spin polarizations            1
 number of spinorial components                      1
 number of k-points in IBZ                           2
 number of q-points in IBZ                           2
 number of symmetry operations                       2
 number of k-points in BZ                            2
 number of q-points in BZ                            2
 number of frequencies for dSigma/dE                 9
 frequency step for dSigma/dE [eV]                0.25
 number of omega for Sigma on real axis              0
 max omega for Sigma on real axis  [eV]           0.00
 zcut for avoiding poles [eV]                     0.10

 EPSILON^-1 parameters (SCR file):
 dimension of the eps^-1 matrix on file            375
 dimension of the eps^-1 matrix used               375
 number of plane-waves for wavefunctions          8931
 number of bands                                    20
 number of q-points in IBZ                           2
 number of frequencies                               2
 number of real frequencies                          1
 number of imag frequencies                          1

 matrix elements of self-energy operator (all in [eV])

 Perturbative Calculation

 k =    0.000   0.000   0.000
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    2 -16.814 -16.076 -23.436    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    3 -15.827 -15.592 -21.572    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    4 -10.207 -12.806 -16.012    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    5  -8.910 -16.985 -21.238    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    6  -5.679 -17.455 -20.688    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    7  -5.546 -17.576 -21.264    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    8  -4.955 -13.838 -15.232    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    9  -0.908 -13.134  -7.499    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   10   0.613  -3.002  -1.144    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   11   1.378  -1.458  -0.313    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   12   1.679  -0.304  -0.089    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   13   2.478  -0.896  -0.208    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   14   2.898  -0.885  -0.335    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   15   4.364  -1.133  -0.290    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   16   4.928  -1.249  -0.464    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell    4.6390262670E+00  8.0775747800E+00  4.0000000000E+01 Bohr
              amu    1.20110000E+01
             bdgw3     2   16
      chksymbreak         0
           diemac    2.00000000E+00
             ecut1   2.50000000E+01 Hartree
             ecut2   2.49824361E+01 Hartree
             ecut3   2.49824361E+01 Hartree
          ecuteps1   0.00000000E+00 Hartree
          ecuteps2   2.99628373E+00 Hartree
          ecuteps3   0.00000000E+00 Hartree
         ecutsigx1   0.00000000E+00 Hartree
         ecutsigx2   0.00000000E+00 Hartree
         ecutsigx3   7.99874582E+00 Hartree
          ecutwfn1   0.00000000E+00 Hartree
          ecutwfn2   2.49824361E+01 Hartree
          ecutwfn3   2.49824361E+01 Hartree
           etotal1  -2.2748002226E+01
           etotal2   0.0000000000E+00
           etotal3   0.0000000000E+00
            fcart1   2.2678748710E-04  2.7731361256E-02  0.0000000000E+00
                    -2.4240624449E-04 -2.7638268500E-02  0.0000000000E+00
                     3.6827466283E-04 -2.7513274880E-02  0.0000000000E+00
                    -3.5265590544E-04  2.7420182124E-02  0.0000000000E+00
            fcart2   0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            fcart3   0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           getscr1        0
           getscr2        0
           getscr3        2
           getkss1        0
           getkss2        1
           getkss3        1
           gw_eet1       -1
           gw_eet2        2
           gw_eet3        2
            gwmem         0
         icutcoul         2
          inclvkb         2
           istwfk      1    1
              ixc        11
           jdtset      1    2    3
              kpt    0.00000000E+00  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  0.00000000E+00  0.00000000E+00
            kptgw3   0.00000000E+00  0.00000000E+00  0.00000000E+00
          kptrlen    8.07757478E+00
         kptrlatt    2  0  0   0  1  0   0  0  1
          kssform1        3
          kssform2        1
          kssform3        1
P           mkmem         2
            natom         4
            nband        20
           ndtset         3
            ngfft1       24      40     192
            ngfft2       24      40     180
            ngfft3       24      40     180
           nkptgw1        0
           nkptgw2        0
           nkptgw3        1
             nkpt         2
           npweps1        0
           npweps2      375
           npweps3        0
          npwsigx1        0
          npwsigx2        0
          npwsigx3     1561
           npwwfn1        0
           npwwfn2     8931
           npwwfn3     8931
           nsheps1        0
           nsheps2      196
           nsheps3        0
          nshsigx1        0
          nshsigx2        0
          nshsigx3      802
           nshwfn1        0
           nshwfn2     4540
           nshwfn3     4540
            nstep      1200
             nsym         2
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000
        optdriver1        0
        optdriver2        3
        optdriver3        4
          ppmodel         2
           prtpot1        1
           prtpot2        0
           prtpot3        0
           prtvxc1        1
           prtvxc2        0
           prtvxc3        0
             rcut    2.00000000E+01 Bohr
          spgroup         6
           strten1  -1.6055193970E-04  7.8567440084E-05  1.4663676190E-05
                     0.0000000000E+00  0.0000000000E+00 -2.4264950658E-08
           strten2   0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten3   0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
        symmorphi         0
           symrel    1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0 -1
           toldfe    1.00000000E-10 Hartree
            typat    1  1  1  1
          vcutgeo    1.0000000  1.0000000  0.0000000
              wtk      0.50000    0.50000
           xangst    8.5905895062E+00  3.5515456535E+00  0.0000000000E+00
                     9.8181907544E+00  4.2665912580E+00  0.0000000000E+00
                     8.5904597857E+00  2.1292785330E+00  0.0000000000E+00
                     9.8181668072E+00  1.4145377489E+00  0.0000000000E+00
            xcart    1.6233861487E+01  6.7114486336E+00  0.0000000000E+00
                     1.8553691646E+01  8.0626889986E+00  0.0000000000E+00
                     1.6233616351E+01  4.0237532880E+00  0.0000000000E+00
                     1.8553646393E+01  2.6730889500E+00  0.0000000000E+00
             xred    3.4994114179E+00  8.3087421860E-01  0.0000000000E+00
                     3.9994797568E+00  9.9815714719E-01  0.0000000000E+00
                     3.4993585757E+00  4.9813878517E-01  0.0000000000E+00
                     3.9994700018E+00  3.3092716847E-01  0.0000000000E+00
            znucl      6.00000

================================================================================


- Timing analysis has been suppressed with timopt=0



================================================================================

 Suggested references for the acknowledgment of ABINIT usage.

 The users of ABINIT have little formal obligations with respect to the ABINIT group
 (those specified in the GNU General Public License, http://www.gnu.org/copyleft/gpl.txt).
 However, it is common practice in the scientific literature,
 to acknowledge the efforts of people that have made the research possible.
 In this spirit, please find below suggested citations of work written by ABINIT developers,
 corresponding to implementations inside of ABINIT that you have used in the present run.
 Note also that it will be of great value to readers of publications presenting these results,
 to read papers enabling them to understand the theoretical formalism and details
 of the ABINIT implementation.
 For information on why they are suggested, see also http://www.abinit.org/about/?text=acknowledgments.

 [1] Ab initio pseudopotentials for electronic structure calculations of poly-atomic systems, 
 using density-functional theory.
 M. Fuchs, M. Scheffler, Comput. Phys. Commun. 119, 67 (1999).
 Comment : Some pseudopotential generated using the FHI code were used.

 [2] ABINIT : First-principles approach of materials and nanosystem properties.
 X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
 D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
 S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
 M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
 M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
 Computer Phys. Comm. 180, 2582-2615 (2009).
 Comment : the third generic paper describing the ABINIT project.
 Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
 is available at http://www.abinit.org/about/ABINIT_CPC_v10.pdf .
 The licence allows the authors to put it on the Web.

 [3] A brief introduction to the ABINIT software package.
 X. Gonze, G.-M. Rignanese, M. Verstraete, J.-M. Beuken, Y. Pouillon, R. Caracas, F. Jollet,
 M. Torrent, G. Zerah, M. Mikami, Ph. Ghosez, M. Veithen, J.-Y. Raty, V. Olevano, F. Bruneval,
 L. Reining, R. Godby, G. Onida, D.R. Hamann, and D.C. Allan.
 Z. Kristallogr. 220, 558-562 (2005).
 Comment : the second generic paper describing the ABINIT project. Note that this paper
 should be cited especially if you are using the GW part of ABINIT, as several authors
 of this part are not in the list of authors of the first or third paper.
 The .pdf of the latter paper is available at http://www.abinit.org/about/zfk_0505-06_558-562.pdf.
 Note that it should not redistributed (Copyright by Oldenburg Wissenshaftverlag,
 the licence allows the authors to put it on the Web).


 And optionally :

 [4] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.

 [5] Fast radix 2, 3, 4 and 5 kernels for Fast Fourier Transformations
 on computers with overlapping multiply-add instructions.
 S. Goedecker, SIAM J. on Scientific Computing 18, 1605 (1997).
-
- Proc.   0 individual time (sec): cpu=        149.5  wall=        149.5

================================================================================

 Calculation completed.
.Delivered    3 WARNINGs and  12 COMMENTs to log file.
+Overall time at end (sec) : cpu=        149.5  wall=        149.5
