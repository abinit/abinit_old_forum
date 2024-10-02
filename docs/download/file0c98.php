
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
  
- input  file    -> /root/abinit-6.0.2/tests/cuda_test2/tT.in
- output file    -> tT4.out
- root for input  files -> tT.i
- root for output files -> tT4.o


 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =        12    iscf =         7 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =        20  mffmem =         1
P  mgfft =         8   mkmem =         1 mpssoang=         1     mpw =        43
  mqgrid =      3001   natom =         4    nfft =       256    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       1.231 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.028 Mbytes ; DEN or POT disk file :      0.004 Mbytes.
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
            ngfft          8       8       8
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
fine grid =    8  8  8

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

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=   8   8   8
         ecut(hartree)=      5.000   => boxcut(ratio)=   1.11487

 getcut : WARNING -
  Note that boxcut < 1.5; this usually means
  that the forces are being fairly strongly affected by  the smallness of the fft box.
  Be sure to test with larger ngfft(1:3) values.


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
 ETOT  1  -7.6816646203640    -7.682E+00 0.000E+00 1.536E+01 6.187E-08 6.187E-08
 ETOT  2  -7.8327979578865    -1.511E-01 0.000E+00 6.003E-01 2.253E-07 2.871E-07
 ETOT  3  -23895.787697987    -2.389E+04 0.000E+00 8.554E-03 8.401E-08 2.031E-07

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  = -4.85005800702927E+03
    Hartree energy  =  1.26721427485358E-02
    XC energy       = -2.01163225781018E+00
    Ewald energy    = -5.14520060060964E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -7.31370953152338E-01
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -4.85793384471155E+03

    -kT*entropy     = -1.90378538532756E+04
    >>>>>>>>> Etotal= -2.38957876979872E+04

 Other information on the energy :
    Total energy(eV)= -6.50237451686995E+05 ; Band energy (Ha)=  -4.8533798970E+03
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  8.93219696E+00  sigma(3 2)= -9.36550063E-13
  sigma(2 2)=  8.93219696E+00  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  8.93219696E+00  sigma(2 1)=  0.00000000E+00


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  2.389E+04 exceeds toldfe=  1.000E-20

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
 Cartesian forces (hart/bohr); max,rms= 2.03113E-07 1.17267E-07 (free atoms)
 -3.75616127300622E-14 -4.25057554728318E-11 -2.03113051978398E-07
 -3.79185306539036E-14 -4.25039689056005E-11 -2.03113049553123E-07
  3.69390282713153E-14  4.25035870779387E-11  2.03113050975149E-07
  3.85411151126505E-14  4.25061373004936E-11  2.03113050556371E-07

 At the end of Moldyn step     0, POT.En.= -2.38957876979872E+04 Ha.
                              KIN+POT.En.= -2.38767868054688E+04 Ha.

 MOLDYN STEP NUMBER    1  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
 ETOT  1  -6.9601171758964    -6.960E+00 0.000E+00 1.047E+00 7.310E-01 7.310E-01
 ETOT  2  -6.9309362647828     2.918E-02 0.000E+00 2.320E-01 5.441E-03 7.364E-01
 ETOT  3  -265656.94614959    -2.657E+05 0.000E+00 2.700E-03 3.779E-03 7.402E-01

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  = -5.29354731330675E+04
    Hartree energy  =  4.64458782399964E-02
    XC energy       = -2.01952873439982E+00
    Ewald energy    = -3.68424128725398E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.24740084927366E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -5.29423781640736E+04

    -kT*entropy     = -2.12714567985516E+05
    >>>>>>>>> Etotal= -2.65656946149589E+05

 Other information on the energy :
    Total energy(eV)= -7.22889313675182E+06 ; Band energy (Ha)=  -5.2939259533E+04
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  9.74227314E+01  sigma(3 2)= -4.24241301E-04
  sigma(2 2)=  9.74154065E+01  sigma(3 1)= -1.44318474E-04
  sigma(3 3)=  9.74172523E+01  sigma(2 1)=  6.57094479E-05


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  2.657E+05 exceeds toldfe=  1.000E-20

 Cartesian coordinates (bohr)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.56437964620509E+00  3.56437964620509E+00  0.00000000000000E+00
  3.56437964620509E+00  0.00000000000000E+00  3.56437964620509E+00
  0.00000000000000E+00  3.56437964620509E+00  3.56437964620509E+00
 Velocities (bohr/(atomic time unit))
 -1.72850586778767E-02 -2.75844474013993E-02 -4.40148152495289E-03
  7.67171060386721E-03 -1.03564710264258E-02  2.27739808408395E-02
  3.74624800856072E-02  5.50792742764875E-03 -6.49088933065865E-03
 -2.78491320115977E-02  3.24329910001763E-02 -1.18816099852279E-02
 Cartesian forces (hart/bohr); max,rms= 7.40191E-01 3.23484E-01 (free atoms)
  1.90901319392756E-01  4.32655285128168E-02 -2.04990310932627E-01
 -2.65637408826528E-01 -1.42343299302512E-01 -1.33887195557983E-01
 -1.12008940210813E-01  7.40191245807576E-01  2.07291561373055E-01
  1.86745029644586E-01 -6.41113475017881E-01  1.31585945117556E-01

 At the end of Moldyn step     1, POT.En.= -2.65656946149589E+05 Ha.
                              KIN+POT.En.= -2.65637945257071E+05 Ha.

 MOLDYN STEP NUMBER    2  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
 ETOT  1  -7.3064687768587    -7.306E+00 0.000E+00 4.429E-01 7.383E-01 2.799E-01
 ETOT  2  -7.3076549333181    -1.186E-03 0.000E+00 9.176E-02 3.811E-03 2.761E-01
 ETOT  3  -268136.80649189    -2.681E+05 0.000E+00 2.691E-03 2.660E-03 2.736E-01

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  = -5.37721436412094E+04
    Hartree energy  =  3.51038703291100E-02
    XC energy       = -2.01673262371554E+00
    Ewald energy    = -4.25216720944707E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.07194787117257E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -5.37794496910568E+04

    -kT*entropy     = -2.14357356800837E+05
    >>>>>>>>> Etotal= -2.68136806491893E+05

 Other information on the energy :
    Total energy(eV)= -7.29637356844545E+06 ; Band energy (Ha)=  -5.3775771927E+04
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  9.89587548E+01  sigma(3 2)=  2.51552640E-04
  sigma(2 2)=  9.89564595E+01  sigma(3 1)=  7.80600710E-05
  sigma(3 3)=  9.89602274E+01  sigma(2 1)= -1.20120793E-04


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  2.681E+05 exceeds toldfe=  1.000E-20

 Cartesian coordinates (bohr)
 -8.75255678046362E-01 -1.35256272389437E+00 -1.79974161529773E-01
  3.98345282876592E+00  3.08339347151779E+00  1.13329541243483E+00
  5.41030541557720E+00  1.43393827347716E-01  3.21276331755350E+00
 -1.38974327388657E+00  5.25453471743905E+00  2.96267472395162E+00
 Velocities (bohr/(atomic time unit))
 -1.66873535959462E-02 -2.79289062986667E-02 -5.86410945947814E-03
  6.37762671900914E-03 -1.02453574543758E-02  2.29730375563681E-02
  3.87511004384896E-02  8.16185688932168E-03 -5.57059693203020E-03
 -2.84413735615525E-02  3.00124068637208E-02 -1.15383311648598E-02
 Cartesian forces (hart/bohr); max,rms= 2.73597E-01 1.62163E-01 (free atoms)
  8.17229924534505E-02  1.48106761431058E-02 -1.95183370278701E-01
 -1.54352378964272E-01  2.35974112668646E-01  6.19471939116770E-02
  2.73597033998576E-01 -3.34971457955095E-03  9.71809609300198E-02
 -2.00967647487754E-01 -2.47435074232201E-01  3.60552154370042E-02

 At the end of Moldyn step     2, POT.En.= -2.68136806491893E+05 Ha.
                              KIN+POT.En.= -2.68117805599375E+05 Ha.
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   0.0000E+00; max=  0.0000E+00
   0.0000  0.0000  0.0000    1  0.00000E+00 kpt; spin; max resid(k); each band:
 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00
 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00
 0.00E+00 0.00E+00 0.00E+00 0.00E+00
 reduced coordinates (array xred) for    4 atoms
      -0.242154856597     -0.386593439573     -0.061807462161
       0.607373351122      0.354764387759      0.319119093460
       1.025002703867      0.077621093701      0.409143458043
      -0.390221198392      0.954207958114      0.333544910658
 rms dE/dt=  1.1561E+00; max dE/dt=  1.7377E+00; dE/dt below (all hartree)
    1      -0.581447538218     -0.131771335560      1.388360884584
    2       1.101476959485     -1.708392238833     -0.444661014251
    3      -1.949271394855     -0.002310281442     -0.695834058290
    4       1.433785988140      1.737715494323     -0.260083332101

 cartesian coordinates (angstrom) at end:
    1     -0.91349939767669    -1.45837617778747    -0.23316104516424
    2      2.29124122560459     1.33830499660396     1.20383751026025
    3      3.86669656664983     0.29281602417190     1.54344334752861
    4     -1.47206145151008     3.59963210007926     1.25825713044302

 cartesian forces (hartree/bohr) at end:
    1      0.08172299245345     0.01481067614311    -0.19518337027870
    2     -0.15435237896427     0.23597411266865     0.06194719391168
    3      0.27359703399858    -0.00334971457955     0.09718096093002
    4     -0.20096764748775    -0.24743507423220     0.03605521543700
 frms,max,avg= 1.6216330E-01 2.7359703E-01  -1.594E-04  3.674E-03  4.285E-04 h/b

 cartesian forces (eV/Angstrom) at end:
    1      4.20236488219903     0.76159552455036   -10.03673160054274
    2     -7.93711778497102    12.13427573337627     3.18545251990725
    3     14.06892397147999    -0.17224923478559     4.99724551402459
    4    -10.33417106870800   -12.72362202314104     1.85403356661090
 frms,max,avg= 8.3387715E+00 1.4068924E+01  -8.194E-03  1.889E-01  2.203E-02 e/A
 length scales=  7.128759292410  7.128759292410  7.128759292410 bohr
              =  3.772376943068  3.772376943068  3.772376943068 angstroms
 Total charge density [el/Bohr^3]
,     Maximum=    5.6355E-02  at reduced coord.    0.6250    0.0000    0.3750
,Next maximum=    5.2858E-02  at reduced coord.    0.6250    0.3750    0.3750
,     Minimum=    1.7641E-02  at reduced coord.    0.1250    0.2500    0.3750
,Next minimum=    1.7736E-02  at reduced coord.    0.2500    0.7500    0.2500

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  = -5.37721436412094E+04
    Hartree energy  =  3.51038703291100E-02
    XC energy       = -2.01673262371554E+00
    Ewald energy    = -4.25216720944707E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.07194787117257E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -5.37794496910568E+04

    -kT*entropy     = -2.14357356800837E+05
    >>>>>>>>> Etotal= -2.68136806491893E+05

 Other information on the energy :
    Total energy(eV)= -7.29637356844545E+06 ; Band energy (Ha)=  -5.3775771927E+04
--------------------------------------------------------------------------------
 rms coord change=  2.9191E-01   atom, delta coord (reduced):
     1       -0.242154856597     -0.386593439573     -0.061807462161
     2        0.107373351122     -0.145235612241      0.319119093460
     3        0.525002703867      0.077621093701     -0.090856541957
     4       -0.390221198392      0.454207958114     -0.166455089342

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  9.89587548E+01  sigma(3 2)=  2.51552640E-04
  sigma(2 2)=  9.89564595E+01  sigma(3 1)=  7.80600710E-05
  sigma(3 3)=  9.89602274E+01  sigma(2 1)= -1.20120793E-04

-Cartesian components of stress tensor (GPa)         [Pressure= -2.9115E+06 GPa]
- sigma(1 1)=  2.91146659E+06  sigma(3 2)=  7.40093293E+00
- sigma(2 2)=  2.91139906E+06  sigma(3 1)=  2.29660619E+00
- sigma(3 3)=  2.91150992E+06  sigma(2 1)= -3.53407514E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell     7.1287592924E+00  7.1287592924E+00  7.1287592924E+00 Bohr
              amu     4.00260200E+00
        boxcutmin     1.00000000E+00
            dtion     5.00000000E+01
             ecut     5.00000000E+00 Hartree
           enunit          2
           etotal    -2.6813680649E+05
           fftalg        401
      fft_opt_lob          2
            fcart     8.1722992453E-02  1.4810676143E-02 -1.9518337028E-01
                    -1.5435237896E-01  2.3597411267E-01  6.1947193912E-02
                     2.7359703400E-01 -3.3497145796E-03  9.7180960930E-02
                    -2.0096764749E-01 -2.4743507423E-01  3.6055215437E-02
           ionmov         12
           iprcch          0
           istwfk       1
           kptopt          0
          mdftemp     1.00000000E+06
          mditemp     1.00000000E+06
P           mkmem          1
            natom          4
            nband         20
            ngfft          8       8       8
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
           strten     9.8958754764E+01  9.8956459495E+01  9.8960227370E+01
                     2.5155263956E-04  7.8060071018E-05 -1.2012079263E-04
        tfkinfunc          2
           timopt         -1
           toldfe     1.00000000E-20 Hartree
           tsmear     3.16682970E+00 Hartree
            typat     1  1  1  1
           useylm          1
              vel    -1.6687353596E-02 -2.7928906299E-02 -5.8641094595E-03
                     6.3776267190E-03 -1.0245357454E-02  2.2973037556E-02
                     3.8751100438E-02  8.1618568893E-03 -5.5705969320E-03
                    -2.8441373562E-02  3.0012406864E-02 -1.1538331165E-02
         wfoptalg          4
           xangst    -9.1349939768E-01 -1.4583761778E+00 -2.3316104516E-01
                     2.2912412256E+00  1.3383049966E+00  1.2038375103E+00
                     3.8666965666E+00  2.9281602417E-01  1.5434433475E+00
                    -1.4720614515E+00  3.5996321001E+00  1.2582571304E+00
            xcart    -1.7262636842E+00 -2.7559315747E+00 -4.4061052022E-01
                     4.3298184208E+00  2.5290299259E+00  2.2749232029E+00
                     7.3069975499E+00  5.5334209301E-01  2.9166852285E+00
                    -2.7817929941E+00  6.8023188483E+00  2.3777613813E+00
             xred    -2.4215485660E-01 -3.8659343957E-01 -6.1807462161E-02
                     6.0737335112E-01  3.5476438776E-01  3.1911909346E-01
                     1.0250027039E+00  7.7621093701E-02  4.0914345804E-01
                    -3.9022119839E-01  9.5420795811E-01  3.3354491066E-01
            znucl       2.00000

================================================================================

 Test the timer : 
  a combined call timab(*,1,tsec) + timab(*,2,tsec) is 
- CPU time =    1.1941E-05 sec,    Wall time =    1.1941E-05 sec

- Total cpu        time (s,m,h):         19.3        0.32      0.005
- Total wall clock time (s,m,h):         19.3        0.32      0.005
-
- For major independent code sections, cpu and wall times (sec),
-  as well as % of the time and number of calls for node 0-
- routine                        cpu     %       wall     %      number of calls 
- invars2                        0.159   0.8      0.160   0.8              1
- ewald                          0.139   0.7      0.139   0.7              3
- timing timab                   0.136   0.7      0.136   0.7              7
- stress                         0.116   0.6      0.117   0.6              3
- ewald2                         0.112   0.6      0.111   0.6              3
- abinit(2)                      0.044   0.2      0.044   0.2              1
- fourdp                         0.008   0.0      0.009   0.0             47
- status                         0.008   0.0      0.011   0.1            133
- scfcv-scprqt                   0.003   0.0      0.003   0.0              9
- xc:pot/=fourdp                 0.002   0.0      0.004   0.0             12
- pspini                         0.002   0.0      0.002   0.0              1
- forces                         0.001   0.0      0.003   0.0              9
- vtowfk(ssdiag)                 0.000   0.0      0.000   0.0             -1
- vtorho  (1)                    0.000   0.0      0.000   0.0              9
- kpgsph                         0.000   0.0      0.000   0.0              1
- getghc-other                   0.000   0.0      0.000   0.0             -1
- vtowfk3(contrib)               0.000   0.0      0.000   0.0             -1
- cgwf3-O(npw)                   0.000   0.0      0.000   0.0             -1
- 53   others                    0.000   0.0      0.000   0.0
-
- subtotal                       0.730   3.8      0.739   3.8

- For major independent code sections, cpu and wall times (sec),
- as well as % of the total time and number of calls 

- routine                         cpu     %       wall     %      number of calls 
-                                                                  (-1=no count)
- invars2                        0.632   3.3      0.634   3.3              4
- timing timab                   0.514   2.7      0.517   2.7             32
- ewald                          0.469   2.4      0.467   2.4             12
- stress                         0.301   1.6      0.307   1.6             12
- ewald2                         0.289   1.5      0.287   1.5             12
- abinit(2)                      0.173   0.9      0.173   0.9              4
- fourdp                         0.056   0.3      0.051   0.3            161
- scfcv-scprqt                   0.024   0.1      0.026   0.1             36
- status                         0.015   0.1      0.016   0.1            529
- pspini                         0.008   0.0      0.007   0.0              4
- xc:pot/=fourdp                 0.005   0.0      0.010   0.1             48
- forces                         0.002   0.0      0.012   0.1             36
- vtowfk(ssdiag)                 0.000   0.0      0.000   0.0             -4
- vtorho  (1)                    0.000   0.0      0.000   0.0             36
- kpgsph                         0.000   0.0      0.000   0.0              4
- getghc-other                   0.000   0.0      0.000   0.0             -4
- vtowfk3(contrib)               0.000   0.0      0.000   0.0             -4
- cgwf3-O(npw)                   0.000   0.0      0.000   0.0             -4
- 53   others                    0.000   0.0      0.000   0.0

- subtotal                       2.488  12.9      2.507  13.0

 Partitioning of abinit 
- abinit                        19.283 100.0     19.284 100.0              4
 
- abinit(1)                      0.093   0.5      0.093   0.5              4
- abinit(2)                      0.173   0.9      0.173   0.9              4
- invars2m                       0.645   3.3      0.648   3.4              4
- abinit(4)                      0.007   0.0      0.004   0.0              4
- abinit(5)                      0.937   4.9      0.939   4.9              4
- driver                        16.903  87.7     16.901  87.6              4
- abinit(6)                      0.009   0.0      0.008   0.0              4
- timing timab                   0.514   2.7      0.517   2.7             32

- subtotal                      19.281 100.0     19.283 100.0

 Partitioning of driver 
- driver                        16.903  87.7     16.901  87.6              4
 
- gstateimg                     16.657  86.4     16.661  86.4              4

- subtotal                      16.657  86.4     16.661  86.4

 Partitioning of gstateimg+gstate 
- gstateimg                     16.657  86.4     16.661  86.4              4
 
- gstate->kpgsph                 0.007   0.0      0.007   0.0              8
- gstate(pspini)                 0.008   0.0      0.008   0.0              4
- gstate  (2)                    0.000   0.0      0.004   0.0              4
- test_ionmov                   16.549  85.8     16.548  85.8              4
- gstate  (3)                    0.093   0.5      0.093   0.5              4

- subtotal                      16.657  86.4     16.660  86.4

 Partitioning of scfcv 
- scfcv                         16.534  85.7     16.536  85.7             12
 
- scfcv   (1)                    0.002   0.0      0.002   0.0             12
- setvtr                         0.508   2.6      0.508   2.6             12
- scfcv-read                     0.001   0.0      0.006   0.0             36
- vtorho                        15.389  79.8     15.388  79.8             36
- etotfor/=forces                0.002   0.0      0.015   0.1             72
- scfcv-scprqt                   0.024   0.1      0.026   0.1             36
- newvtr/newrho                  0.020   0.1      0.011   0.1             24
- scfcv   (6)                    0.304   1.6      0.309   1.6             24
- scfcv :synchro                 0.193   1.0      0.190   1.0             12
- stress                         0.301   1.6      0.307   1.6             12

- subtotal                      16.744  86.8     16.762  86.9

 Partitioning of etotfor/rhotov 
- etotfor/=forces                0.002   0.0      0.015   0.1             72
- rhotov                         0.008   0.0      0.019   0.1             36
- forces                         0.002   0.0      0.012   0.1             36

- subtotal                       0.012   0.1      0.046   0.2

 Partitioning of vtorho 
- vtorho                        15.389  79.8     15.388  79.8             36
 
- vtorho  (1)                    0.000   0.0      0.000   0.0             36

- subtotal                       0.000   0.0      0.000   0.0

 Partitioning of sg_fourwf (disabled) 



 Partitioning of vtorhorec 
- vtorhorec                     15.390  79.8     15.389  79.8             36
 
- Definitions                    0.038   0.2      0.039   0.2              8
- green_kernel                   0.004   0.0      0.002   0.0              4
- noden 1                        1.280   6.6      1.284   6.7           5049
- recursion(other)               1.972  10.2      2.025  10.5          48128
- recursion (den)                3.111  16.1      3.116  16.2           3465
- fermisolverec                  5.426  28.1      5.411  28.1            412
- entropyrec                     2.446  12.7      3.500  18.1           1536
- gran_potrec                    0.761   3.9     -0.283  -1.5           1536
- noden 2                        0.004   0.0      0.000   0.0             36

- subtotal                      15.042  78.0     15.094  78.3
-
-Synchronisation (=leave_test) and MPI calls 
- communic.MPI                   0.232   1.2      0.228   1.2            508
-
- scfcv :synchro                 0.193   1.0      0.190   1.0             12
-
- subtotal                       0.193   1.0      0.190   1.0

 Additional information 
- total timab                    1.125   5.8      1.131   5.9         154723
- mklocl(2)                      0.002   0.0      0.005   0.0             36
- status                         0.015   0.1      0.016   0.1            529


 Detailed analysis of some time consuming routines 
                                  tcpu    ncalls  tcpu/ncalls    ndata tcpu/ncalls/ndata
                                 (sec)                (msec)              (microsec)
- fourwf(pot)                    0.000         0
- fourwf(den)                    0.000         0
- fourdp                         0.056       161       0.348       256       1.359
- nonlop(apply)                  0.000         0
- nonlop(forces)                 0.000         0
- nonlop(forstr)                 0.000         0
- projbd                         0.000         0
- xc:pot/=fourdp                 0.005        48       0.104       256       0.407

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
- Proc.   0 individual time (sec): cpu=          4.9  wall=          4.9

================================================================================

 Calculation completed.
.Delivered   12 WARNINGs and   6 COMMENTs to log file.
+Overall time at end (sec) : cpu=         19.4  wall=         19.4
