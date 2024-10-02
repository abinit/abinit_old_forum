
.Version 6.0.2  of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.1 computer) 

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

.Starting date : Fri 26 Mar 2010.
  
- input  file    -> /root/abinit-6.0.2/tests/cuda_test/tT.in
- output file    -> tT4.out
- root for input  files -> tT.i
- root for output files -> tT4.o


 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =        12    iscf =         7 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =        20  mffmem =         1
P  mgfft =        12   mkmem =         1 mpssoang=         1     mpw =        43
  mqgrid =      3001   natom =         4    nfft =       864    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       1.404 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.028 Mbytes ; DEN or POT disk file :      0.009 Mbytes.
================================================================================

 -outvars: echo values of preprocessed input variables --------
            acell     7.1287592924E+00  7.1287592924E+00  7.1287592924E+00 Bohr
              amu     4.00260200E+00
        boxcutmin     1.00000000E+00
            dtion     5.00000000E+01
             ecut     5.00000000E+00 Hartree
           enunit          2
           fftalg        401
      fft_opt_lob          2
           ionmov         12
           iprcch          0
           istwfk       1
           kptopt          0
          mdftemp     1.00000000E+06
          mditemp     1.00000000E+06
P           mkmem          1
            natom          4
            nband         20
            ngfft         12      12      12
             nkpt          1
            nline          5
           npband          2
            npfft          2
            nstep         20
             nsym          1
            ntime          2
           ntypat          1
              occ     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000
           occopt          3
        paral_kgb          1
            prtwf          0
         recnpath        100
          recnrec         50
        recptrott         10
        rectolden     1.00000000E-02
          spgroup          1
        tfkinfunc          2
           timopt         -1
           toldfe     1.00000000E-20 Hartree
           tsmear     3.16682970E+00 Hartree
            typat     1  1  1  1
           useylm          1
         wfoptalg          4
           xangst     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     1.8861884715E+00  1.8861884715E+00  0.0000000000E+00
                     1.8861884715E+00  0.0000000000E+00  1.8861884715E+00
                     0.0000000000E+00  1.8861884715E+00  1.8861884715E+00
            xcart     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     3.5643796462E+00  3.5643796462E+00  0.0000000000E+00
                     3.5643796462E+00  0.0000000000E+00  3.5643796462E+00
                     0.0000000000E+00  3.5643796462E+00  3.5643796462E+00
             xred     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                     5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                     0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
            znucl       2.00000

================================================================================

 chkinp: Checking input parameters for consistency.

=== RECURSION METHOD ===========================================================
fine grid =   12 12 12

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

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  12  12  12
         ecut(hartree)=      5.000   => boxcut(ratio)=   1.67231

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is /root/abinit-6.0.2/tests/Psps_for_tests/2he.psphgh
- pspatm: opening atomic psp file    /root/abinit-6.0.2/tests/Psps_for_tests/2he.psphgh
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
 ETOT  1  -8.0110357000283    -8.011E+00 0.000E+00 2.286E+01 1.502E-06 1.502E-06
 ETOT  2  -8.2709368098434    -2.599E-01 0.000E+00 9.214E-01 4.466E-07 1.114E-06
 ETOT  3  -8.3276796202822    -5.674E-02 0.000E+00 1.017E-02 6.631E-07 1.718E-06
 ETOT  4  -187.00405743231    -1.787E+02 0.000E+00 1.537E-05 3.286E-07 1.525E-06

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  = -2.98158547250658E-01
    Hartree energy  =  1.97507608736737E-02
    XC energy       = -2.02411298076242E+00
    Ewald energy    = -5.14520060060964E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.18088280495432E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -8.62891018616415E+00

    -kT*entropy     = -1.78375147246142E+02
    >>>>>>>>> Etotal= -1.87004057432306E+02

 Other information on the energy :
    Total energy(eV)= -5.08863919016796E+03 ; Band energy (Ha)=  -4.0757651941E+00
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  8.06995365E-03  sigma(3 2)=  5.65671706E-12
  sigma(2 2)=  8.06995334E-03  sigma(3 1)= -5.01444394E-11
  sigma(3 3)=  8.06995849E-03  sigma(2 1)=  6.59137776E-12


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.787E+02 exceeds toldfe=  1.000E-20

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
 Cartesian forces (hart/bohr); max,rms= 1.52487E-06 8.76093E-07 (free atoms)
  9.94182705029727E-08 -9.21473560445790E-09 -1.52486660615722E-06
 -3.78456277344409E-08  2.11317735735140E-08 -1.50770636128877E-06
 -2.88988588531220E-08 -5.83559150245897E-09  1.51696995248772E-06
 -3.26737839154098E-08 -6.08144646659710E-09  1.51560301495826E-06

 At the end of Moldyn step     0, POT.En.= -1.87004057432306E+02 Ha.
                              KIN+POT.En.= -1.68003164913935E+02 Ha.

 MOLDYN STEP NUMBER    1  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
 ETOT  1  -7.3903965429475    -7.390E+00 0.000E+00 4.131E+00 6.942E-01 6.942E-01
 ETOT  2  -7.3686074162803     2.179E-02 0.000E+00 8.918E-01 4.849E-03 6.991E-01
 ETOT  3  -185.40037551768    -1.780E+02 0.000E+00 2.590E-02 4.096E-03 7.032E-01

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  2.22380259620802E-02
    Hartree energy  =  5.64281340228640E-02
    XC energy       = -2.03106799530093E+00
    Ewald energy    = -3.68424140660392E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.68164242366672E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -7.31859167904739E+00

    -kT*entropy     = -1.78081783838630E+02
    >>>>>>>>> Etotal= -1.85400375517677E+02

 Other information on the energy :
    Total energy(eV)= -5.04500078599966E+03 ; Band energy (Ha)=  -4.1961897501E+00
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.08009945E-02  sigma(3 2)= -4.16829654E-04
  sigma(2 2)=  3.52647062E-03  sigma(3 1)= -1.43486962E-04
  sigma(3 3)=  5.37113354E-03  sigma(2 1)=  6.99300294E-05


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.780E+02 exceeds toldfe=  1.000E-20

 Cartesian coordinates (bohr)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.56437964620509E+00  3.56437964620509E+00  0.00000000000000E+00
  3.56437964620509E+00  0.00000000000000E+00  3.56437964620509E+00
  0.00000000000000E+00  3.56437964620509E+00  3.56437964620509E+00
 Velocities (bohr/(atomic time unit))
 -1.72820383200570E-02 -2.75270000195374E-02 -4.38904788777719E-03
  7.69808393186700E-03 -1.03933110018431E-02  2.27873705588270E-02
  3.74181877378231E-02  5.37719624167884E-03 -6.54690715562477E-03
 -2.78342333496331E-02  3.25431147797017E-02 -1.18514155154250E-02
 Cartesian forces (hart/bohr); max,rms= 7.03180E-01 3.09346E-01 (free atoms)
  1.88856358153993E-01  5.52570277085302E-02 -2.02069192354945E-01
 -2.56683402740516E-01 -1.54635569509953E-01 -1.26218800534877E-01
 -1.18552965406658E-01  7.03180037656247E-01  1.90000974361175E-01
  1.86380009993181E-01 -6.03801495854824E-01  1.38287018528647E-01

 At the end of Moldyn step     1, POT.En.= -1.85400375517677E+02 Ha.
                              KIN+POT.En.= -1.66399482999306E+02 Ha.

 MOLDYN STEP NUMBER    2  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
 ETOT  1  -7.6763015666424    -7.676E+00 0.000E+00 1.828E+00 6.862E-01 2.898E-01
 ETOT  2  -7.6899496870284    -1.365E-02 0.000E+00 3.562E-01 4.475E-03 2.853E-01
 ETOT  3  -185.86495490264    -1.782E+02 0.000E+00 2.128E-02 2.736E-03 2.826E-01

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  1.98756936311248E-02
    Hartree energy  =  4.28627207918297E-02
    XC energy       = -2.02690118240145E+00
    Ewald energy    = -4.24470165523206E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.45985892840785E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -7.66902936507918E+00

    -kT*entropy     = -1.78195925537561E+02
    >>>>>>>>> Etotal= -1.85864954902640E+02

 Other information on the energy :
    Total energy(eV)= -5.05764263397732E+03 ; Band energy (Ha)=  -3.9945417652E+00
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.16892158E-03  sigma(3 2)=  2.62142353E-04
  sigma(2 2)=  4.89910393E-03  sigma(3 1)=  7.72357157E-05
  sigma(3 3)=  8.60144712E-03  sigma(2 1)= -1.15602925E-04


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.782E+02 exceeds toldfe=  1.000E-20

 Cartesian coordinates (bohr)
 -8.75255691094912E-01 -1.35256277195076E+00 -1.79974394157672E-01
  3.98345283668497E+00  3.08339345861478E+00  1.13329522788140E+00
  5.41030547406720E+00  1.43393831268855E-01  3.21276353055880E+00
 -1.38974332724707E+00  5.25453477447731E+00  2.96267492812766E+00
 Velocities (bohr/(atomic time unit))
 -1.66551056244612E-02 -2.78372962213090E-02 -5.87255114260469E-03
  6.41028016623451E-03 -1.03100202276179E-02  2.30122711873695E-02
  3.86851969187655E-02  7.94796927716728E-03 -5.64038593313024E-03
 -2.84403714605388E-02  3.01993471717596E-02 -1.14993341116346E-02
 Cartesian forces (hart/bohr); max,rms= 2.82649E-01 1.68317E-01 (free atoms)
  8.85082442468830E-02  6.12624835689831E-03 -2.05464882931009E-01
 -1.60138595912067E-01  2.38060693071174E-01  6.68094531488099E-02
  2.82649475634031E-01  1.20964121537536E-02  1.09579060209495E-01
 -2.11019123968846E-01 -2.56283353581826E-01  2.90763695727040E-02

 At the end of Moldyn step     2, POT.En.= -1.85864954902640E+02 Ha.
                              KIN+POT.En.= -1.66864062384269E+02 Ha.
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   0.0000E+00; max=  0.0000E+00
   0.0000  0.0000  0.0000    1  0.00000E+00 kpt; spin; max resid(k); each band:
 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00
 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00
 0.00E+00 0.00E+00 0.00E+00 0.00E+00
 reduced coordinates (array xred) for    4 atoms
      -0.242139770283     -0.385820236066     -0.061635383437
       0.607761636200      0.354228302687      0.319344171187
       1.024431422282      0.075767326116      0.408337251868
      -0.390053288200      0.955824607263      0.333953960382
 rms dE/dt=  1.2010E+00; max dE/dt=  1.8681E+00; dE/dt below (all hartree)
    1      -0.550349424040     -0.002564638788      1.455035644860
    2       1.222194048271     -1.655969466775     -0.485942558554
    3      -1.934335531331     -0.045124499432     -0.790836792321
    4       1.584909085459      1.868090249451     -0.216952488380

 cartesian coordinates (angstrom) at end:
    1     -0.91344248641436    -1.45545936270499    -0.23251189935504
    2      2.29270598328185     1.33628268163876     1.20468658828823
    3      3.86454147717204     0.28582291407662     1.54040203394157
    4     -1.47142803097188     3.60573071005726     1.25980022019289

 cartesian forces (hartree/bohr) at end:
    1      0.08850824424688     0.00612624835690    -0.20546488293101
    2     -0.16013859591207     0.23806069307117     0.06680945314881
    3      0.28264947563403     0.01209641215375     0.10957906020950
    4     -0.21101912396885    -0.25628335358183     0.02907636957270
 frms,max,avg= 1.6831719E-01 2.8264948E-01  -1.131E-02 -5.766E-03  1.357E-03 h/b

 cartesian forces (eV/Angstrom) at end:
    1      4.55127652869607     0.31502433013969   -10.56542819386138
    2     -8.23465699850445    12.24157200269071     3.43547992165607
    3     14.53441919730227     0.62202247016951     5.63478135863725
    4    -10.85103872749389   -13.17861880299990     1.49516691356806
 frms,max,avg= 8.6552171E+00 1.4534419E+01  -5.814E-01 -2.965E-01  6.978E-02 e/A
 length scales=  7.128759292410  7.128759292410  7.128759292410 bohr
              =  3.772376943068  3.772376943068  3.772376943068 angstroms
 Total charge density [el/Bohr^3]
,     Maximum=    1.1951E-01  at reduced coord.    0.0000    0.0833    0.4167
,Next maximum=    1.1172E-01  at reduced coord.    0.5833    0.3333    0.3333
,     Minimum=    1.7548E-02  at reduced coord.    0.2500    0.1667    0.3333
,Next minimum=    1.7661E-02  at reduced coord.    0.2500    0.5833    0.2500

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  1.98756936311248E-02
    Hartree energy  =  4.28627207918297E-02
    XC energy       = -2.02690118240145E+00
    Ewald energy    = -4.24470165523206E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.45985892840785E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -7.66902936507918E+00

    -kT*entropy     = -1.78195925537561E+02
    >>>>>>>>> Etotal= -1.85864954902640E+02

 Other information on the energy :
    Total energy(eV)= -5.05764263397732E+03 ; Band energy (Ha)=  -3.9945417652E+00
--------------------------------------------------------------------------------
 rms coord change=  2.9195E-01   atom, delta coord (reduced):
     1       -0.242139770283     -0.385820236066     -0.061635383437
     2        0.107761636200     -0.145771697313      0.319344171187
     3        0.524431422282      0.075767326116     -0.091662748132
     4       -0.390053288200      0.455824607263     -0.166046039618

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.16892158E-03  sigma(3 2)=  2.62142353E-04
  sigma(2 2)=  4.89910393E-03  sigma(3 1)=  7.72357157E-05
  sigma(3 3)=  8.60144712E-03  sigma(2 1)= -1.15602925E-04

-Cartesian components of stress tensor (GPa)         [Pressure= -2.0271E+02 GPa]
- sigma(1 1)=  2.10916919E+02  sigma(3 2)=  7.71249299E+00
- sigma(2 2)=  1.44136590E+02  sigma(3 1)=  2.27235283E+00
- sigma(3 3)=  2.53063269E+02  sigma(2 1)= -3.40115489E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell     7.1287592924E+00  7.1287592924E+00  7.1287592924E+00 Bohr
              amu     4.00260200E+00
        boxcutmin     1.00000000E+00
            dtion     5.00000000E+01
             ecut     5.00000000E+00 Hartree
           enunit          2
           etotal    -1.8586495490E+02
           fftalg        401
      fft_opt_lob          2
            fcart     8.8508244247E-02  6.1262483569E-03 -2.0546488293E-01
                    -1.6013859591E-01  2.3806069307E-01  6.6809453149E-02
                     2.8264947563E-01  1.2096412154E-02  1.0957906021E-01
                    -2.1101912397E-01 -2.5628335358E-01  2.9076369573E-02
           ionmov         12
           iprcch          0
           istwfk       1
           kptopt          0
          mdftemp     1.00000000E+06
          mditemp     1.00000000E+06
P           mkmem          1
            natom          4
            nband         20
            ngfft         12      12      12
             nkpt          1
            nline          5
           npband          2
            npfft          2
            nstep         20
             nsym          1
            ntime          2
           ntypat          1
              occ     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000
           occopt          3
        paral_kgb          1
            prtwf          0
         recnpath        100
          recnrec         50
        recptrott         10
        rectolden     1.00000000E-02
          spgroup          1
           strten     7.1689215828E-03  4.8991039252E-03  8.6014471209E-03
                     2.6214235281E-04  7.7235715715E-05 -1.1560292453E-04
        tfkinfunc          2
           timopt         -1
           toldfe     1.00000000E-20 Hartree
           tsmear     3.16682970E+00 Hartree
            typat     1  1  1  1
           useylm          1
              vel    -1.6655105624E-02 -2.7837296221E-02 -5.8725511426E-03
                     6.4102801662E-03 -1.0310020228E-02  2.3012271187E-02
                     3.8685196919E-02  7.9479692772E-03 -5.6403859331E-03
                    -2.8440371461E-02  3.0199347172E-02 -1.1499334112E-02
         wfoptalg          4
           xangst    -9.1344248641E-01 -1.4554593627E+00 -2.3251189936E-01
                     2.2927059833E+00  1.3362826816E+00  1.2046865883E+00
                     3.8645414772E+00  2.8582291408E-01  1.5404020339E+00
                    -1.4714280310E+00  3.6057307101E+00  1.2598002202E+00
            xcart    -1.7261561375E+00 -2.7504195931E+00 -4.3938381242E-01
                     4.3325864116E+00  2.5252083044E+00  2.2765277278E+00
                     7.3029250210E+00  5.4012703011E-01  2.9109379787E+00
                    -2.7805960028E+00  6.8138435509E+00  2.3806773983E+00
             xred    -2.4213977028E-01 -3.8582023607E-01 -6.1635383437E-02
                     6.0776163620E-01  3.5422830269E-01  3.1934417119E-01
                     1.0244314223E+00  7.5767326116E-02  4.0833725187E-01
                    -3.9005328820E-01  9.5582460726E-01  3.3395396038E-01
            znucl       2.00000

================================================================================

 Test the timer : 
  a combined call timab(*,1,tsec) + timab(*,2,tsec) is 
- CPU time =    1.0712E-05 sec,    Wall time =    1.0712E-05 sec

- Total cpu        time (s,m,h):         94.9        1.58      0.026
- Total wall clock time (s,m,h):         94.9        1.58      0.026
-
- For major independent code sections, cpu and wall times (sec),
-  as well as % of the time and number of calls for node 0-
- routine                        cpu     %       wall     %      number of calls 
- invars2                        0.156   0.2      0.156   0.2              1
- ewald                          0.151   0.2      0.152   0.2              3
- timing timab                   0.122   0.1      0.122   0.1              7
- stress                         0.106   0.1      0.107   0.1              3
- ewald2                         0.106   0.1      0.105   0.1              3
- abinit(2)                      0.053   0.1      0.052   0.1              1
- fourdp                         0.010   0.0      0.015   0.0             52
- status                         0.007   0.0      0.009   0.0            138
- xc:pot/=fourdp                 0.005   0.0      0.003   0.0             13
- pspini                         0.002   0.0      0.002   0.0              1
- forces                         0.001   0.0      0.002   0.0             10
- vtowfk(ssdiag)                 0.000   0.0      0.000   0.0             -1
- vtorho  (1)                    0.000   0.0      0.000   0.0             10
- kpgsph                         0.000   0.0      0.000   0.0              1
- scfcv-scprqt                   0.000   0.0      0.003   0.0             10
- getghc-other                   0.000   0.0      0.000   0.0             -1
- vtowfk3(contrib)               0.000   0.0      0.000   0.0             -1
- cgwf3-O(npw)                   0.000   0.0      0.000   0.0             -1
- 53   others                    0.000   0.0      0.000   0.0
-
- subtotal                       0.719   0.8      0.728   0.8

- For major independent code sections, cpu and wall times (sec),
- as well as % of the total time and number of calls 

- routine                         cpu     %       wall     %      number of calls 
-                                                                  (-1=no count)
- invars2                        0.630   0.7      0.630   0.7              4
- timing timab                   0.497   0.5      0.500   0.5             33
- ewald                          0.480   0.5      0.484   0.5             12
- stress                         0.288   0.3      0.288   0.3             12
- ewald2                         0.281   0.3      0.282   0.3             12
- abinit(2)                      0.197   0.2      0.194   0.2              4
- fourdp                         0.071   0.1      0.083   0.1            178
- xc:pot/=fourdp                 0.016   0.0      0.009   0.0             52
- status                         0.015   0.0      0.013   0.0            549
- scfcv-scprqt                   0.014   0.0      0.026   0.0             40
- pspini                         0.005   0.0      0.008   0.0              4
- forces                         0.004   0.0      0.008   0.0             40
- vtowfk(ssdiag)                 0.000   0.0      0.000   0.0             -4
- vtorho  (1)                    0.000   0.0      0.000   0.0             40
- kpgsph                         0.000   0.0      0.000   0.0              4
- getghc-other                   0.000   0.0      0.000   0.0             -4
- vtowfk3(contrib)               0.000   0.0      0.000   0.0             -4
- cgwf3-O(npw)                   0.000   0.0      0.000   0.0             -4
- 53   others                    0.000   0.0      0.000   0.0

- subtotal                       2.498   2.6      2.525   2.7

 Partitioning of abinit 
- abinit                        94.861 100.0     94.860 100.0              4
 
- abinit(1)                      0.106   0.1      0.105   0.1              4
- abinit(2)                      0.197   0.2      0.194   0.2              4
- invars2m                       0.648   0.7      0.651   0.7              4
- abinit(4)                      0.008   0.0      0.004   0.0              4
- abinit(5)                      0.952   1.0      0.956   1.0              4
- driver                        92.450  97.5     92.448  97.5              4
- abinit(6)                      0.002   0.0      0.001   0.0              4
- timing timab                   0.497   0.5      0.500   0.5             33

- subtotal                      94.860 100.0     94.859 100.0

 Partitioning of driver 
- driver                        92.450  97.5     92.448  97.5              4
 
- gstateimg                     92.192  97.2     92.191  97.2              4

- subtotal                      92.192  97.2     92.191  97.2

 Partitioning of gstateimg+gstate 
- gstateimg                     92.192  97.2     92.191  97.2              4
 
- gstate->kpgsph                 0.046   0.0      0.042   0.0              8
- gstate(pspini)                 0.005   0.0      0.008   0.0              4
- gstate  (2)                    0.004   0.0      0.004   0.0              4
- test_ionmov                   92.045  97.0     92.046  97.0              4
- gstate  (3)                    0.091   0.1      0.090   0.1              4

- subtotal                      92.191  97.2     92.190  97.2

 Partitioning of scfcv 
- scfcv                         92.029  97.0     92.029  97.0             12
 
- scfcv   (1)                    0.001   0.0      0.000   0.0             12
- setvtr                         0.532   0.6      0.537   0.6             12
- scfcv-read                     0.000   0.0      0.004   0.0             40
- vtorho                        90.900  95.8     90.897  95.8             40
- etotfor/=forces                0.004   0.0      0.008   0.0             80
- scfcv-scprqt                   0.014   0.0      0.026   0.0             40
- newvtr/newrho                  0.020   0.0      0.012   0.0             28
- scfcv   (6)                    0.289   0.3      0.289   0.3             24
- scfcv :synchro                 0.155   0.2      0.156   0.2             12
- stress                         0.288   0.3      0.288   0.3             12

- subtotal                      92.203  97.2     92.217  97.2

 Partitioning of etotfor/rhotov 
- etotfor/=forces                0.004   0.0      0.008   0.0             80
- rhotov                         0.039   0.0      0.022   0.0             40
- forces                         0.004   0.0      0.008   0.0             40

- subtotal                       0.047   0.0      0.038   0.0

 Partitioning of vtorho 
- vtorho                        90.900  95.8     90.897  95.8             40
 
- vtorho  (1)                    0.000   0.0      0.000   0.0             40

- subtotal                       0.000   0.0      0.000   0.0

 Partitioning of sg_fourwf (disabled) 



 Partitioning of vtorhorec 
- vtorhorec                     90.900  95.8     90.898  95.8             40
 
- Definitions                    0.041   0.0      0.039   0.0              8
- green_kernel                   0.008   0.0      0.009   0.0              4
- noden 1                        4.519   4.8      4.524   4.8          18206
- recursion(other)               8.075   8.5      9.130   9.6         162432
- recursion (den)               29.486  31.1     29.478  31.1          12970
- fermisolverec                 36.710  38.7     36.707  38.7            416
- entropyrec                     8.286   8.7      9.355   9.9           5184
- gran_potrec                    2.769   2.9     -0.317  -0.3           5184
- noden 2                        0.000   0.0      0.004   0.0             40

- subtotal                      89.894  94.8     88.929  93.7
-
-Synchronisation (=leave_test) and MPI calls 
- communic.MPI                   0.224   0.2      0.211   0.2            564
-
- scfcv :synchro                 0.155   0.2      0.156   0.2             12
-
- subtotal                       0.155   0.2      0.156   0.2

 Additional information 
- total timab                    2.449   2.6      2.464   2.6         389852
- mklocl(2)                      0.003   0.0      0.006   0.0             40
- status                         0.015   0.0      0.013   0.0            549


 Detailed analysis of some time consuming routines 
                                  tcpu    ncalls  tcpu/ncalls    ndata tcpu/ncalls/ndata
                                 (sec)                (msec)              (microsec)
- fourwf(pot)                    0.000         0
- fourwf(den)                    0.000         0
- fourdp                         0.071       178       0.399       864       0.462
- nonlop(apply)                  0.000         0
- nonlop(forces)                 0.000         0
- nonlop(forstr)                 0.000         0
- projbd                         0.000         0
- xc:pot/=fourdp                 0.016        52       0.308       864       0.356

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
- Proc.   0 individual time (sec): cpu=         23.7  wall=         23.7

================================================================================

 Calculation completed.
.Delivered    8 WARNINGs and   6 COMMENTs to log file.
+Overall time at end (sec) : cpu=         94.9  wall=         94.9
