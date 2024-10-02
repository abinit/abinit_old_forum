
.Version 6.1.2  of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel11.1 computer) 

.Copyright (C) 1998-2010 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Thu 22 Apr 2010.
  
- input  file    -> tT-2.in
- output file    -> tT4-2.outB
- root for input  files -> /tmp/boi
- root for output files -> /tmp/boo


 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =        12    iscf =         7 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =        20  mffmem =         1
P  mgfft =        16   mkmem =         1 mpssoang=         1     mpw =       179
  mqgrid =      3001   natom =         4    nfft =      4096    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       2.260 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.057 Mbytes ; DEN or POT disk file :      0.033 Mbytes.
================================================================================

 -outvars: echo values of preprocessed input variables --------
            acell    7.1287592924E+00  7.1287592924E+00  7.1287592924E+00 Bohr
              amu    4.00260200E+00
        boxcutmin    1.00000000E+00
            dtion    5.00000000E+01
             ecut    5.00000000E+00 Hartree
           enunit         2
           fftalg       401
      fft_opt_lob         2
           ionmov        12
           iprcch         0
           istwfk      1
           kptopt         0
          mdftemp    1.00000000E+06
          mditemp    1.00000000E+06
P           mkmem         1
            natom         4
            nband        20
            ngfft        16      16      16
             nkpt         1
            nline         5
            nstep        20
             nsym         1
            ntime         2
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000
           occopt         3
        paral_kgb         1
            prtwf         0
         recnpath       100
          recnrec        50
        recptrott        10
        rectolden    1.00000000E-02
          spgroup         1
        tfkinfunc         2
           timopt        -1
           toldfe    1.00000000E-20 Hartree
           tsmear    3.16682970E+00 Hartree
            typat    1  1  1  1
           useylm         1
         wfoptalg         4
           xangst    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     1.8861884715E+00  1.8861884715E+00  0.0000000000E+00
                     1.8861884715E+00  0.0000000000E+00  1.8861884715E+00
                     0.0000000000E+00  1.8861884715E+00  1.8861884715E+00
            xcart    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     3.5643796462E+00  3.5643796462E+00  0.0000000000E+00
                     3.5643796462E+00  0.0000000000E+00  3.5643796462E+00
                     0.0000000000E+00  3.5643796462E+00  3.5643796462E+00
             xred    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                     5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                     0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
            znucl      2.00000

================================================================================

 chkinp: Checking input parameters for consistency.

=== RECURSION METHOD ===========================================================
fine grid =   16 16 16

================================================================================
== DATASET  1 ==================================================================

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  7.1287593  0.0000000  0.0000000  G(1)=  0.1402769  0.0000000  0.0000000
 R(2)=  0.0000000  7.1287593  0.0000000  G(2)=  0.0000000  0.1402769  0.0000000
 R(3)=  0.0000000  0.0000000  7.1287593  G(3)=  0.0000000  0.0000000  0.1402769
 Unit cell volume ucvol=  3.6227791E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  16
         ecut(hartree)=      5.000   => boxcut(ratio)=   2.22975

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=    6.214724 Hartrees makes boxcut=2


--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is ~/6.1.2-mancini/tests/Psps_for_tests/2he.psphgh
- pspatm: opening atomic psp file    ~/6.1.2-mancini/tests/Psps_for_tests/2he.psphgh
 Hartwigsen-Goedecker-Hutter psp for Hydrogen,  from PRB58, 3641 (1998) paper
   2.00000   2.00000    991006                znucl, zion, pspdat
    3    1    0    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2000000
 cc1 =  -9.1120230; cc2 =   1.6983680; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.0000000; h11s=   0.0000000; h22s=   0.0000000; h33s=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   -0.00346443
         --- l  ekb(1:nproj) -->
 pspatm: atomic psp has been read  and splines computed

  -1.10861917E-01                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

 setup2: Arith. and geom. avg. npw (full set) are       0.000       0.000

================================================================================

 MOLDYN STEP NUMBER    0  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
 ETOT  1  -8.1094590916047    -8.109E+00 0.000E+00 4.816E+01 8.447E-11 8.447E-11
 ETOT  2  -8.3965002693913    -2.870E-01 0.000E+00 2.067E+00 2.097E-10 1.253E-10
 ETOT  3  -8.4587000869010    -6.220E-02 0.000E+00 1.716E-02 7.408E-11 6.451E-11
 ETOT  4  -202.82825755667    -1.944E+02 0.000E+00 3.328E-05 3.905E-10 3.260E-10

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  5.60759648455925E+00
    Hartree energy  =  2.15761398972401E-02
    XC energy       = -2.02806012932909E+00
    Ewald energy    = -5.14520060060964E+00
    PspCore energy  = -3.06013460762676E-04
    Loc. psp. energy= -1.30870682633947E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -2.85310094528251E+00

    -kT*entropy     = -1.99975156611390E+02
    >>>>>>>>> Etotal= -2.02828257556673E+02

 Other information on the energy :
    Total energy(eV)= -5.51923757402957E+03 ; Band energy (Ha)=   1.7006400233E+00
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.67362054E-03  sigma(3 2)= -3.05686470E-10
  sigma(2 2)= -2.67362027E-03  sigma(3 1)= -1.05314200E-10
  sigma(3 3)= -2.67361965E-03  sigma(2 1)=  5.05429950E-12
 

 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.944E+02 exceeds toldfe=  1.000E-20

 Rescaling or initializing velocities to initial temperature
 --- Scaling factor : 0.19363D+01 Asked T (K)  0.10000D+07
 --- Effective temperature 0.10000D+07 From variance 0.10000D+07
 Cartesian coordinates (bohr)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.56437964620509E+00  3.56437964620509E+00  0.00000000000000E+00
  3.56437964620509E+00  0.00000000000000E+00  3.56437964620509E+00
  0.00000000000000E+00  3.56437964620509E+00  3.56437964620509E+00
 Velocities (bohr/(atomic time unit))
 -1.75051134717685E-02 -2.70512543399619E-02 -3.59948251631659E-03
  8.38146360852743E-03 -9.61972344460439E-03  2.26659088291983E-02
  3.69185151994053E-02  2.86787653220175E-03 -7.03232723315978E-03
 -2.77948653361642E-02  3.38031012523645E-02 -1.20340990797219E-02
 Cartesian forces (hart/bohr); max,rms= 3.25972E-10 2.27001E-10 (free atoms)
 -3.25970719990442E-10 -2.13839503798008E-10  5.10290627960755E-11
 -3.25972234506369E-10 -2.13841018312876E-10  5.10289434582786E-11
  3.25970779658963E-10  2.13840958645201E-10 -5.10290031273028E-11
  3.25972174837848E-10  2.13839563465695E-10 -5.10290031270513E-11
 
 At the end of Moldyn step     0, POT.En.= -2.02828257556673E+02 Ha.
                              KIN+POT.En.= -1.83827365038302E+02 Ha.

 MOLDYN STEP NUMBER    1  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
 ETOT  1  -7.6073952799209    -7.607E+00 0.000E+00 1.037E+01 7.024E-01 7.024E-01
 ETOT  2  -7.5953747906651     1.202E-02 0.000E+00 2.227E+00 5.004E-03 7.074E-01
 ETOT  3  -201.64474931274    -1.940E+02 0.000E+00 7.890E-02 4.125E-03 7.115E-01

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  5.59973050971890E+00
    Hartree energy  =  6.12357389109601E-02
    XC energy       = -2.03813166588323E+00
    Ewald energy    = -3.68424126909917E+00
    PspCore energy  = -3.06013460762676E-04
    Loc. psp. energy= -1.90530210919781E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -1.96701480901112E+00

    -kT*entropy     = -1.99677734503730E+02
    >>>>>>>>> Etotal= -2.01644749312741E+02

 Other information on the energy :
    Total energy(eV)= -5.48703267690246E+03 ; Band energy (Ha)=   1.1570331023E+00
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  6.92303047E-04  sigma(3 2)= -4.19297913E-04
  sigma(2 2)= -6.49079751E-03  sigma(3 1)= -1.42677521E-04
  sigma(3 3)= -4.64303757E-03  sigma(2 1)=  6.20858091E-05
 

 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.940E+02 exceeds toldfe=  1.000E-20

 Cartesian coordinates (bohr)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.56437964620509E+00  3.56437964620509E+00  0.00000000000000E+00
  3.56437964620509E+00  0.00000000000000E+00  3.56437964620509E+00
  0.00000000000000E+00  3.56437964620509E+00  3.56437964620509E+00
 Velocities (bohr/(atomic time unit))
 -1.73047074876694E-02 -2.75807535954570E-02 -4.41785131047221E-03
  7.68522791297531E-03 -1.03375968726405E-02  2.27764813454284E-02
  3.74391828919130E-02  5.40697268202552E-03 -6.56896133379293E-03
 -2.78197033172189E-02  3.25113777860720E-02 -1.17896687011633E-02
 Cartesian forces (hart/bohr); max,rms= 7.11517E-01 3.13152E-01 (free atoms)
  1.83386049726994E-01  4.14291318315437E-02 -2.10132155150943E-01
 -2.60883726487253E-01 -1.37959828040075E-01 -1.30751898452226E-01
 -1.14775403987797E-01  7.11516812911960E-01  1.84060297621012E-01
  1.92273080748056E-01 -6.14986116703428E-01  1.56823755982156E-01
 
 At the end of Moldyn step     1, POT.En.= -2.01644749312741E+02 Ha.
                              KIN+POT.En.= -1.82643856794370E+02 Ha.

 MOLDYN STEP NUMBER    2  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
 ETOT  1  -7.8790136937216    -7.879E+00 0.000E+00 4.677E+00 7.078E-01 2.855E-01
 ETOT  2  -7.9036843726709    -2.467E-02 0.000E+00 8.908E-01 5.360E-03 2.801E-01
 ETOT  3  -202.11155177152    -1.942E+02 0.000E+00 6.194E-02 2.888E-03 2.773E-01

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  5.60135021640583E+00
    Hartree energy  =  4.68433183209672E-02
    XC energy       = -2.03332445937084E+00
    Ewald energy    = -4.24809042666978E+00
    PspCore energy  = -3.06013460762676E-04
    Loc. psp. energy= -1.66825425039624E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -2.30178161517085E+00

    -kT*entropy     = -1.99809770156354E+02
    >>>>>>>>> Etotal= -2.02111551771525E+02

 Other information on the energy :
    Total energy(eV)= -5.49973501779522E+03 ; Band energy (Ha)=   1.3778759145E+00
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.90430711E-03  sigma(3 2)=  2.77422163E-04
  sigma(2 2)= -5.15097788E-03  sigma(3 1)=  7.85692906E-05
  sigma(3 3)= -1.47088939E-03  sigma(2 1)= -1.16870975E-04
 

 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.942E+02 exceeds toldfe=  1.000E-20

 Cartesian coordinates (bohr)
 -8.75255673630696E-01 -1.35256271701375E+00 -1.79974125804296E-01
  3.98345282656912E+00  3.08339347394570E+00  1.13329544145108E+00
  5.41030540620257E+00  1.43393826644499E-01  3.21276328454382E+00
 -1.38974326673081E+00  5.25453470883374E+00  2.96267469221959E+00
 Velocities (bohr/(atomic time unit))
 -1.67657082270007E-02 -2.79083367084538E-02 -5.87645805649358E-03
  6.42973705477690E-03 -1.02036931821023E-02  2.29740793958878E-02
  3.87262666902763E-02  7.96134864549758E-03 -5.69748370961791E-03
 -2.83902955180524E-02  3.01506812450585E-02 -1.14001376297763E-02
 Cartesian forces (hart/bohr); max,rms= 2.77342E-01 1.62728E-01 (free atoms)
  7.16698551024458E-02  2.06345310596745E-02 -1.88864758528824E-01
 -1.47680222706392E-01  2.37738311014034E-01  5.91154707554821E-02
  2.77341852099116E-01 -2.73092222166060E-03  1.06589967240594E-01
 -2.01331484495170E-01 -2.55641919852047E-01  2.31593205327476E-02
 
 At the end of Moldyn step     2, POT.En.= -2.02111551771525E+02 Ha.
                              KIN+POT.En.= -1.83110659253153E+02 Ha.
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   0.0000E+00; max=  0.0000E+00
   0.0000  0.0000  0.0000    1  0.00000E+00 kpt; spin; max resid(k); each band:
  0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00
  0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00
  0.00E+00 0.00E+00 0.00E+00 0.00E+00
 reduced coordinates (array xred) for    4 atoms
      -0.242454099634     -0.386572200778     -0.062043105882
       0.607575411322      0.355021408122      0.319180926958
       1.024715007963      0.076190697143      0.408027747921
      -0.389836319652      0.955360095514      0.334834431003
 rms dE/dt=  1.1601E+00; max dE/dt=  1.8209E+00; dE/dt below (all hartree)
    1      -0.522288911898     -0.148639570528      1.368194443041
    2       1.041404993572     -1.696320159296     -0.399596920804
    3      -1.988475071677      0.017927121672     -0.738031178774
    4       1.423871924599      1.820868746183     -0.143274180784
 
 cartesian coordinates (angstrom) at end:
    1     -0.91462825521093    -1.45829605704715    -0.23404998210425
    2      2.29200347284727     1.33927457429422     1.20407076952211
    3      3.86561126925526     0.28742002917835     1.53923446838840
    4     -1.47060954382396     3.60397839664223     1.26312168726139

 cartesian forces (hartree/bohr) at end:
    1      0.07166985510245     0.02063453105967    -0.18886475852882
    2     -0.14768022270639     0.23773831101403     0.05911547075548
    3      0.27734185209912    -0.00273092222166     0.10658996724059
    4     -0.20133148449517    -0.25564191985205     0.02315932053275
 frms,max,avg= 1.6272849E-01 2.7734185E-01   1.595E-03  2.162E-04 -3.061E-03 h/b

 cartesian forces (eV/Angstrom) at end:
    1      3.68541181805555     1.06107016009250    -9.71181554785342
    2     -7.59402174424987    12.22499445217638     3.03983947282651
    3     14.26149024448934    -0.14042965505528     5.48107603110298
    4    -10.35288031829502   -13.14563495721360     1.19090004392393
 frms,max,avg= 8.3678347E+00 1.4261490E+01   8.203E-02  1.112E-02 -1.574E-01 e/A
 length scales=  7.128759292410  7.128759292410  7.128759292410 bohr
              =  3.772376943068  3.772376943068  3.772376943068 angstroms
 Total charge density [el/Bohr^3]
,     Maximum=    1.9000E-01  at reduced coord.    0.7500    0.6250    0.9375
,Next maximum=    1.7178E-01  at reduced coord.    0.6250    0.3750    0.3125
,     Minimum=    1.7752E-02  at reduced coord.    0.2500    0.4375    0.7500
,Next minimum=    1.7853E-02  at reduced coord.    0.3125    0.3125    0.8125

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  5.60135021640583E+00
    Hartree energy  =  4.68433183209672E-02
    XC energy       = -2.03332445937084E+00
    Ewald energy    = -4.24809042666978E+00
    PspCore energy  = -3.06013460762676E-04
    Loc. psp. energy= -1.66825425039624E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -2.30178161517085E+00

    -kT*entropy     = -1.99809770156354E+02
    >>>>>>>>> Etotal= -2.02111551771525E+02

 Other information on the energy :
    Total energy(eV)= -5.49973501779522E+03 ; Band energy (Ha)=   1.3778759145E+00
--------------------------------------------------------------------------------
 rms coord change=  2.9194E-01   atom, delta coord (reduced):
     1       -0.242454099634     -0.386572200778     -0.062043105882
     2        0.107575411322     -0.144978591878      0.319180926958
     3        0.524715007963      0.076190697143     -0.091972252079
     4       -0.389836319652      0.455360095514     -0.165165568997

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.90430711E-03  sigma(3 2)=  2.77422163E-04
  sigma(2 2)= -5.15097788E-03  sigma(3 1)=  7.85692906E-05
  sigma(3 3)= -1.47088939E-03  sigma(2 1)= -1.16870975E-04

-Cartesian components of stress tensor (GPa)         [Pressure=  9.3423E+01 GPa]
- sigma(1 1)= -8.54476508E+01  sigma(3 2)=  8.16204045E+00
- sigma(2 2)= -1.51546976E+02  sigma(3 1)=  2.31158795E+00
- sigma(3 3)= -4.32750526E+01  sigma(2 1)= -3.43846222E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell    7.1287592924E+00  7.1287592924E+00  7.1287592924E+00 Bohr
              amu    4.00260200E+00
        boxcutmin    1.00000000E+00
            dtion    5.00000000E+01
             ecut    5.00000000E+00 Hartree
           enunit         2
           etotal   -2.0211155177E+02
           fftalg       401
      fft_opt_lob         2
            fcart    7.1669855102E-02  2.0634531060E-02 -1.8886475853E-01
                    -1.4768022271E-01  2.3773831101E-01  5.9115470755E-02
                     2.7734185210E-01 -2.7309222217E-03  1.0658996724E-01
                    -2.0133148450E-01 -2.5564191985E-01  2.3159320533E-02
           ionmov        12
           iprcch         0
           istwfk      1
           kptopt         0
          mdftemp    1.00000000E+06
          mditemp    1.00000000E+06
P           mkmem         1
            natom         4
            nband        20
            ngfft        16      16      16
             nkpt         1
            nline         5
            nstep        20
             nsym         1
            ntime         2
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000
           occopt         3
        paral_kgb         1
            prtwf         0
         recnpath       100
          recnrec        50
        recptrott        10
        rectolden    1.00000000E-02
          spgroup         1
           strten   -2.9043071085E-03 -5.1509778841E-03 -1.4708893899E-03
                     2.7742216291E-04  7.8569290633E-05 -1.1687097511E-04
        tfkinfunc         2
           timopt        -1
           toldfe    1.00000000E-20 Hartree
           tsmear    3.16682970E+00 Hartree
            typat    1  1  1  1
           useylm         1
              vel   -1.6765708227E-02 -2.7908336708E-02 -5.8764580565E-03
                     6.4297370548E-03 -1.0203693182E-02  2.2974079396E-02
                     3.8726266690E-02  7.9613486455E-03 -5.6974837096E-03
                    -2.8390295518E-02  3.0150681245E-02 -1.1400137630E-02
         wfoptalg         4
           xangst   -9.1462825521E-01 -1.4582960570E+00 -2.3404998210E-01
                     2.2920034728E+00  1.3392745743E+00  1.2040707695E+00
                     3.8656112693E+00  2.8742002918E-01  1.5392344684E+00
                    -1.4706095438E+00  3.6039783966E+00  1.2631216873E+00
            xcart   -1.7283969157E+00 -2.7557801685E+00 -4.4229036758E-01
                     4.3312588593E+00  2.5308621622E+00  2.2753639990E+00
                     7.3049466351E+00  5.4314514025E-01  2.9087315996E+00
                    -2.7790492862E+00  6.8105321585E+00  2.3869540614E+00
             xred   -2.4245409963E-01 -3.8657220078E-01 -6.2043105882E-02
                     6.0757541132E-01  3.5502140812E-01  3.1918092696E-01
                     1.0247150080E+00  7.6190697143E-02  4.0802774792E-01
                    -3.8983631965E-01  9.5536009551E-01  3.3483443100E-01
            znucl      2.00000

================================================================================
 
 Test the timer : 
  a combined call timab(*,1,tsec) + timab(*,2,tsec) is 
- CPU time =    3.0752E-06 sec,    Wall time =    3.0961E-06 sec

- Total cpu        time (s,m,h):        431.9        7.20      0.120
- Total wall clock time (s,m,h):        431.9        7.20      0.120

- For major independent code sections, cpu and wall times (sec),
- as well as % of the total time and number of calls 

- routine                         cpu     %       wall     %      number of calls 
-                                                                  (-1=no count)
- invars2                        0.153   0.0      0.153   0.0              1
- timing timab                   0.118   0.0      0.119   0.0             10
- abinit(2)                      0.041   0.0      0.040   0.0              1
- ewald                          0.015   0.0      0.015   0.0              3
- stress                         0.012   0.0      0.012   0.0              3
- ewald2                         0.010   0.0      0.011   0.0              3
- fourdp                         0.010   0.0      0.009   0.0             52
- xc:pot/=fourdp                 0.006   0.0      0.006   0.0             13
- forces                         0.003   0.0      0.003   0.0             10
- scfcv-scprqt                   0.001   0.0      0.000   0.0             10
- pspini                         0.001   0.0      0.001   0.0              1
- status                         0.001   0.0      0.000   0.0            138
- vtowfk(ssdiag)                 0.000   0.0      0.000   0.0             -1
- vtorho  (1)                    0.000   0.0      0.000   0.0             10
- kpgsph                         0.000   0.0      0.000   0.0              1
- getghc-other                   0.000   0.0      0.000   0.0             -1
- vtowfk3(contrib)               0.000   0.0      0.000   0.0             -1
- cgwf3-O(npw)                   0.000   0.0      0.000   0.0             -1
- 51   others                    0.000   0.0      0.000   0.0

- subtotal                       0.371   0.1      0.369   0.1

 Partitioning of abinit 
- abinit                       431.911 100.0    431.911 100.0              1
 
- abinit(1)                      0.017   0.0      0.017   0.0              1
- abinit(2)                      0.041   0.0      0.040   0.0              1
- invars2m                       0.154   0.0      0.155   0.0              1
- abinit(4)                      0.001   0.0      0.001   0.0              1
- abinit(5)                      0.152   0.0      0.152   0.0              1
- driver                       431.425  99.9    431.426  99.9              1
- abinit(6)                      0.002   0.0      0.001   0.0              1
- timing timab                   0.118   0.0      0.119   0.0             10

- subtotal                     431.911 100.0    431.911 100.0

 Partitioning of driver 
- driver                       431.425  99.9    431.426  99.9              1
 
- gstateimg                    431.424  99.9    431.425  99.9              1

- subtotal                     431.424  99.9    431.425  99.9

 Partitioning of gstateimg+gstate 
- gstateimg                    431.424  99.9    431.425  99.9              1
 
- gstate->kpgsph                 0.005   0.0      0.005   0.0              2
- gstate(pspini)                 0.001   0.0      0.001   0.0              1
- gstate  (2)                    0.001   0.0      0.001   0.0              1
- test_ionmov                  431.415  99.9    431.415  99.9              1
- gstate  (3)                    0.003   0.0      0.003   0.0              1

- subtotal                     431.424  99.9    431.425  99.9

 Partitioning of scfcv 
- scfcv                        431.412  99.9    431.411  99.9              3
 
- scfcv   (1)                    0.001   0.0      0.001   0.0              3
- setvtr                         0.019   0.0      0.020   0.0              3
- scfcv-read                     0.000   0.0      0.000   0.0             10
- vtorho                       431.355  99.9    431.354  99.9             10
- etotfor/=forces                0.003   0.0      0.003   0.0             20
- scfcv-scprqt                   0.001   0.0      0.000   0.0             10
- newvtr/newrho                  0.005   0.0      0.005   0.0              7
- scfcv   (6)                    0.013   0.0      0.013   0.0              6
- scfcv :synchro                 0.000   0.0      0.000   0.0              3
- stress                         0.012   0.0      0.012   0.0              3

- subtotal                     431.409  99.9    431.408  99.9

 Partitioning of etotfor/rhotov 
- etotfor/=forces                0.003   0.0      0.003   0.0             20
- rhotov                         0.008   0.0      0.007   0.0             10
- forces                         0.003   0.0      0.003   0.0             10

- subtotal                       0.014   0.0      0.013   0.0

 Partitioning of vtorho 
- vtorho                       431.355  99.9    431.354  99.9             10
 
- vtorho  (1)                    0.000   0.0      0.000   0.0             10

- subtotal                       0.000   0.0      0.000   0.0

 Partitioning of sg_fourwf (disabled) 



 Partitioning of vtorhorec 
- vtorhorec                    431.354  99.9    431.354  99.9             10
 
- Definitions                    0.000   0.0      0.000   0.0              2
- getngrec                       0.000   0.0      0.000   0.0              1
- green_kernel                   0.002   0.0      0.002   0.0              1
- recursion (other)              4.034   0.9      4.024   0.9         393216
- recursion (cuda)             418.390  96.9    418.388  96.9             10
- fermisolverec                  0.001   0.0      0.002   0.0            106
- entropyrec                     4.066   0.9      4.077   0.9          12288
- gran_potrec                    3.836   0.9      3.834   0.9          12288
- sync. gpu (wait)               0.000   0.0      0.000   0.0             10

- subtotal                     430.330  99.6    430.327  99.6
-
-Synchronisation (=leave_test) and MPI calls 
- communic.MPI                   0.000   0.0      0.001   0.0            141
-
- scfcv :synchro                 0.000   0.0      0.000   0.0              3
-
- subtotal                       0.000   0.0      0.000   0.0

 Additional information 
- total timab                    1.405   0.3      1.414   0.3         456870
- mklocl(2)                      0.003   0.0      0.003   0.0             10
- status                         0.001   0.0      0.000   0.0            138


 Detailed analysis of some time consuming routines 
                                  tcpu    ncalls  tcpu/ncalls    ndata tcpu/ncalls/ndata
                                 (sec)                (msec)              (microsec)
- fourwf(pot)                    0.000         0
- fourwf(den)                    0.000         0
- fourdp                         0.010        52       0.185      4096       0.045
- nonlop(apply)                  0.000         0
- nonlop(forces)                 0.000         0
- nonlop(forstr)                 0.000         0
- projbd                         0.000         0
- xc:pot/=fourdp                 0.006        13       0.462      4096       0.113

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

 [1] Large scale ab initio calculations based on three levels of parallelization
 F. Bottin, S. Leroux, A. Knyazev, G. Zerah, Comput. Mat. Science 42, 329, (2008).
 Comment : in case paral_kgb is non-zero. Strong suggestion to cite this paper in your publications.
 This paper is also available at http://www.arxiv.org/abs/0707.3405

 [2] ABINIT : First-principles approach of materials and nanosystem properties.
 X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
 D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
 S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
 M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
 M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
 Computer Phys. Comm. 180, 2582-2615 (2009).
 Comment : the third generic paper describing the ABINIT project.
 Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
 is available at http://www.abinit.org/about/zfk_0505-06_558-562.pdf.
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
- Proc.   0 individual time (sec): cpu=        431.9  wall=        431.9

================================================================================

 Calculation completed.
.Delivered   12 WARNINGs and  10 COMMENTs to log file.
+Overall time at end (sec) : cpu=        431.9  wall=        431.9
