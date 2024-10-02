
.Version 8.10.3 of ABINIT 
.(sequential version, prepared for a x86_64_cygwin_gnu7.4 computer) 

.Copyright (C) 1998-2018 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Thu  1 Aug 2019.
- ( at 15h17 )
  
- input  file    -> t56.in
- output file    -> t56.out
- root for input  files -> t56i
- root for output files -> t56o


 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)
================================================================================
 Values of the parameters that define the memory need of the present run
     intxc =       0    ionmov =       0      iscf =       7    lmnmax =       4
     lnmax =       4     mgfft =     288  mpssoang =       4    mqgrid =    3822
     natom =       6  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       1    n1xccc =       0    ntypat =       2
    occopt =       4   xclevel =       1
-    mband =          17        mffmem =           1         mkmem =           8
       mpw =       13050          nfft =      259200          nkpt =           8
 For the susceptibility and dielectric matrices, or tddft :
   mgfft =       162  nbnd_in_blk=     6    nfft =     52488     npw =       225
================================================================================
P This job should need less than                      99.292 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     27.083 Mbytes ; DEN or POT disk file :      1.980 Mbytes.
================================================================================

--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      8.1768000000E+00  8.1768000000E+00  8.1768000000E+00 Bohr
              amu      4.78800000E+01  1.40067400E+01
             ecut      3.00000000E+01 Hartree
-          fftalg         112
           iprcel          45
              kpt      1.25000000E-01  1.25000000E-01  5.00000000E-01
                       3.75000000E-01  1.25000000E-01  5.00000000E-01
                      -3.75000000E-01  1.25000000E-01  5.00000000E-01
                      -1.25000000E-01  1.25000000E-01  5.00000000E-01
                       1.25000000E-01  3.75000000E-01  5.00000000E-01
                       3.75000000E-01  3.75000000E-01  5.00000000E-01
                      -3.75000000E-01  3.75000000E-01  5.00000000E-01
                      -1.25000000E-01  3.75000000E-01  5.00000000E-01
         kptrlatt        4    0    0      0    4    0      0    0    1
          kptrlen      2.31274829E+01
P           mkmem           8
            natom           6
            nband          17
            ngfft          30      30     288
             nkpt           8
            nstep          80
             nsym           1
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
           occopt           4
           prtpot           1
            rprim      7.0710678120E-01  0.0000000000E+00  0.0000000000E+00
                      -3.5355339060E-01  6.1237243570E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  7.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           1
           toldfe      1.00000000E-06 Hartree
           tsmear      4.00000000E-02 Hartree
            typat      2  1  2  1  2  1
              wtk        0.12500    0.12500    0.12500    0.12500    0.12500    0.12500
                         0.12500    0.12500
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       7.6947144071E-01  5.4087202482E-01  1.2490904367E+00
                      -6.2454521841E-01  1.0817440499E+00  2.4981808734E+00
                       0.0000000000E+00  0.0000000000E+00  3.7472713101E+00
                       7.6947144071E-01  5.4087202482E-01  4.9963617451E+00
                      -6.2454521841E-01  1.0817440499E+00  2.9039742956E+01
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.4540902900E+00  1.0220999998E+00  2.3604388406E+00
                      -1.1802194204E+00  2.0442000002E+00  4.7208776812E+00
                       0.0000000000E+00  0.0000000000E+00  7.0813165218E+00
                       1.4540902900E+00  1.0220999998E+00  9.4417553591E+00
                      -1.1802194204E+00  2.0442000002E+00  5.4877161156E+01
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.5355339060E-01  2.0412414520E-01  4.1239304943E-02
                       3.1046525818E-18  4.0824829050E-01  8.2478609886E-02
                       0.0000000000E+00  0.0000000000E+00  1.2371791483E-01
                       3.5355339060E-01  2.0412414520E-01  1.6495721971E-01
                       3.1046525818E-18  4.0824829050E-01  9.5876069500E-01
            znucl       22.00000    7.00000

================================================================================

 chkinp: Checking input parameters for consistency.

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  5.7818707  0.0000000  0.0000000  G(1)=  0.1729544  0.0998553  0.0000000
 R(2)= -2.8909354  5.0072469  0.0000000  G(2)=  0.0000000  0.1997105  0.0000000
 R(3)=  0.0000000  0.0000000 57.2376000  G(3)=  0.0000000  0.0000000  0.0174710
 Unit cell volume ucvol=  1.6571003E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30 288
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.04073

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is 22-Ti.GGA.fhi
- pspatm: opening atomic psp file    22-Ti.GGA.fhi
- titanium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 1 local
- 22.00000   4.00000     21003                znucl, zion, pspdat
    6   11    3    1       515   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
  pspatm : epsatm=   60.97115254
         --- l  ekb(1:nproj) -->
             0   -0.505327
             2   -5.310617
             3   -1.218759
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 07-N.GGA.fhi
- pspatm: opening atomic psp file    07-N.GGA.fhi
- nitrogen, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  7.00000   5.00000     21003                znucl, zion, pspdat
    6   11    3    2       467   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
  pspatm : epsatm=    3.15895891
         --- l  ekb(1:nproj) -->
             0    3.289579
             1   -2.246919
             3   -2.603757
 pspatm: atomic psp has been read  and splines computed

   5.19453903E+03                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

_setup2: Arith. and geom. avg. npw (full set) are   12994.250   12994.180

================================================================================

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -38.439838469043    -3.844E+01 7.939E-02 2.086E+05
 ETOT  2  -21.811997178984     1.663E+01 3.088E-02 3.387E+06
 ETOT  3  -39.501552732799    -1.769E+01 1.176E-02 8.189E+04
 ETOT  4  -39.555519676721    -5.397E-02 4.518E-03 9.197E+04
 ETOT  5  -39.933492265588    -3.780E-01 2.050E-03 7.625E+03
 ETOT  6  -39.681652966703     2.518E-01 2.067E-03 6.060E+04
 ETOT  7  -39.436420534284     2.452E-01 7.612E-04 1.095E+05
 ETOT  8  -39.704641917021    -2.682E-01 5.590E-04 6.003E+04
 ETOT  9  -39.818185093904    -1.135E-01 2.468E-04 3.871E+04
 ETOT 10  -39.879004894077    -6.082E-02 1.865E-04 2.728E+04
 ETOT 11  -39.978437736239    -9.943E-02 1.501E-04 8.549E+03
 ETOT 12  -40.017674280369    -3.924E-02 1.722E-04 1.185E+03
 ETOT 13  -40.023998602604    -6.324E-03 1.760E-04 1.371E+00
 ETOT 14  -40.024016010312    -1.741E-05 2.012E-04 2.171E-02
 ETOT 15  -40.024018510602    -2.500E-06 1.992E-04 6.228E-03
 ETOT 16  -40.024019811497    -1.301E-06 2.210E-04 4.753E-03
 ETOT 17  -40.024020516411    -7.049E-07 2.077E-04 3.031E-02
 ETOT 18  -40.024021334381    -8.180E-07 2.203E-04 1.453E-03

 At SCF step   18, etot is converged : 
  for the second time, diff in etot=  8.180E-07 < toldfe=  1.000E-06

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.68685123E-04  sigma(3 2)= -5.57741264E-05
  sigma(2 2)= -2.27087629E-04  sigma(3 1)= -3.81711118E-04
  sigma(3 3)= -7.76114636E-04  sigma(2 1)= -3.82138453E-05

 Integrated electronic density in atomic spheres:
 ------------------------------------------------
 Atom  Sphere_radius  Integrated_density
    1        2.00000          5.34612789
    2        2.00000          2.21131034
    3        2.00000          5.19565092
    4        2.00000          2.32117381
    5        2.00000          4.88144034
    6        2.00000          1.87620559
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   22.281E-07; max=  22.026E-05
 reduced coordinates (array xred) for    6 atoms
       0.000000000000      0.000000000000      0.000000000000
       0.353553390600      0.204124145200      0.041239304943
       0.000000000000      0.408248290500      0.082478609886
       0.000000000000      0.000000000000      0.123717914829
       0.353553390600      0.204124145200      0.164957219714
       0.000000000000      0.408248290500      0.958760695000
 rms dE/dt=  3.7759E+00; max dE/dt=  8.5636E+00; dE/dt below (all hartree)
    1       0.612757162859      0.452885096604      8.563615878419
    2      -0.925061608823      0.113120748243    -10.294625440917
    3       0.286757938183     -0.719244962907      5.029532834938
    4       0.437703760993      0.593895439865     -2.913018756485
    5      -0.584834096934     -0.063563942628     -4.684274722373
    6       0.172681460179     -0.377073776950      4.298728712058

 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      0.76947144071069     0.54087202481894     1.24909043671468
    3     -0.62454521841328     1.08174404990286     2.49818087342937
    4      0.00000000000000     0.00000000000000     3.74727131014405
    5      0.76947144071069     0.54087202481894     4.99636174512795
    6     -0.62454521841328     1.08174404990286    29.03974295594550

 cartesian forces (hartree/bohr) at end:
    1     -0.10597891620567    -0.15163226484208    -0.14961533666935
    2      0.15999361135318     0.06978156779032     0.17985762025645
    3     -0.04959591492753     0.11500720589288    -0.08787125509569
    4     -0.07570265959505    -0.16231351205262     0.05089332607862
    5      0.10114976515456     0.07109385276752     0.08183899755836
    6     -0.02986588577949     0.05806315044398    -0.07510335212840
 frms,max,avg= 1.0785441E-01 1.7985762E-01  -1.331E-07 -6.960E-07  1.208E-07 h/b

 cartesian forces (eV/Angstrom) at end:
    1     -5.44965452617154    -7.79724390468967    -7.69352929673707
    2      8.22720159335542     3.58831218856628     9.24864991443019
    3     -2.55032427147977     5.91390780898509    -4.51852123231060
    4     -3.89278694551607    -8.34649567372191     2.61703982967753
    5      5.20132961565659     3.65579258959008     4.20833010403441
    6     -1.53576546584463     2.98572699127013    -3.86196931909444
 frms,max,avg= 5.5460963E+00 9.2486499E+00  -6.843E-06 -3.579E-05  6.213E-06 e/A
 length scales=  8.176800000000  8.176800000000  8.176800000000 bohr
              =  4.326976199199  4.326976199199  4.326976199199 angstroms
 prteigrs : about to open file t56o_EIG
 Fermi (or HOMO) energy (hartree) =  -0.18943   Average Vxc (hartree)=  -0.13030
 Eigenvalues (hartree) for nkpt=   8  k points:
 kpt#   1, nband= 17, wtk=  0.12500, kpt=  0.1250  0.1250  0.5000 (reduced coord)
  -0.77527   -0.73803   -0.62135   -0.42319   -0.40447   -0.37969   -0.35577   -0.34858
  -0.31853   -0.25932   -0.23831   -0.22088   -0.21005   -0.19090   -0.17965   -0.15506
  -0.14633
      occupation numbers for kpt#   1
   2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000
   2.00014    2.07141    2.14184    1.99312    1.69982    0.90399    0.46778    0.02881
   0.00298
 prteigrs : prtvol=0 or 1, do not print more k-points.


--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  3.82930127877899E+01
    Hartree energy  =  4.26939044324326E+02
    XC energy       = -1.12152202029545E+01
    Ewald energy    =  3.91146276710204E+02
    PspCore energy  =  3.13471607961478E+00
    Loc. psp. energy= -8.69376709827624E+02
    NL   psp  energy= -1.89387920002519E+01
    >>>>> Internal E= -4.00176721288947E+01

    -kT*entropy     = -6.34920548674753E-03
    >>>>>>>>> Etotal= -4.00240213343814E+01

 Other information on the energy :
    Total energy(eV)= -1.08910900815068E+03 ; Band energy (Ha)=  -1.0817275891E+01
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.68685123E-04  sigma(3 2)= -5.57741264E-05
  sigma(2 2)= -2.27087629E-04  sigma(3 1)= -3.81711118E-04
  sigma(3 3)= -7.76114636E-04  sigma(2 1)= -3.82138453E-05

-Cartesian components of stress tensor (GPa)         [Pressure=  1.2473E+01 GPa]
- sigma(1 1)= -7.90498792E+00  sigma(3 2)= -1.64093117E+00
- sigma(2 2)= -6.68114757E+00  sigma(3 1)= -1.12303269E+01
- sigma(3 3)= -2.28340771E+01  sigma(2 1)= -1.12428996E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      8.1768000000E+00  8.1768000000E+00  8.1768000000E+00 Bohr
              amu      4.78800000E+01  1.40067400E+01
             ecut      3.00000000E+01 Hartree
           etotal     -4.0024021334E+01
            fcart     -1.0597891621E-01 -1.5163226484E-01 -1.4961533667E-01
                       1.5999361135E-01  6.9781567790E-02  1.7985762026E-01
                      -4.9595914928E-02  1.1500720589E-01 -8.7871255096E-02
                      -7.5702659595E-02 -1.6231351205E-01  5.0893326079E-02
                       1.0114976515E-01  7.1093852768E-02  8.1838997558E-02
                      -2.9865885779E-02  5.8063150444E-02 -7.5103352128E-02
-          fftalg         112
           iprcel          45
              kpt      1.25000000E-01  1.25000000E-01  5.00000000E-01
                       3.75000000E-01  1.25000000E-01  5.00000000E-01
                      -3.75000000E-01  1.25000000E-01  5.00000000E-01
                      -1.25000000E-01  1.25000000E-01  5.00000000E-01
                       1.25000000E-01  3.75000000E-01  5.00000000E-01
                       3.75000000E-01  3.75000000E-01  5.00000000E-01
                      -3.75000000E-01  3.75000000E-01  5.00000000E-01
                      -1.25000000E-01  3.75000000E-01  5.00000000E-01
         kptrlatt        4    0    0      0    4    0      0    0    1
          kptrlen      2.31274829E+01
P           mkmem           8
            natom           6
            nband          17
            ngfft          30      30     288
             nkpt           8
            nstep          80
             nsym           1
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000001  2.000144  2.071410  2.141837  1.993124
                       1.699822  0.903988  0.467778  0.028811  0.002980
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000001  2.043524  2.119426  1.670811
                       1.433678  0.934267  0.035052  0.003975  0.004301
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000001  2.000002  2.034062  2.084583  1.788721
                       1.643356  1.102677  0.204381  0.011591  0.004239
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000001  2.000061  2.002699  2.086291  2.113030  2.132386
                       1.748969  0.839031  0.499582  0.295402  0.084838
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000002  2.000078  2.014057  2.136157  1.907039
                       1.584804  1.016124  0.092727  0.005035  0.004532
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000026  2.009151  2.111995  1.662133
                       1.425666  0.952729  0.077194  0.003389  0.004470
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000013  2.000154  2.009334  2.141840  2.029548
                       1.809560  1.278801  0.341628  0.002895  0.004406
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000002  2.000139  2.014828  2.141410  2.121504
                       1.767927  1.025608  0.069422  0.000114  0.002724
           occopt           4
           prtpot           1
            rprim      7.0710678120E-01  0.0000000000E+00  0.0000000000E+00
                      -3.5355339060E-01  6.1237243570E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  7.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           1
           strten     -2.6868512347E-04 -2.2708762861E-04 -7.7611463610E-04
                      -5.5774126357E-05 -3.8171111835E-04 -3.8213845316E-05
           toldfe      1.00000000E-06 Hartree
           tsmear      4.00000000E-02 Hartree
            typat      2  1  2  1  2  1
              wtk        0.12500    0.12500    0.12500    0.12500    0.12500    0.12500
                         0.12500    0.12500
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       7.6947144071E-01  5.4087202482E-01  1.2490904367E+00
                      -6.2454521841E-01  1.0817440499E+00  2.4981808734E+00
                       0.0000000000E+00  0.0000000000E+00  3.7472713101E+00
                       7.6947144071E-01  5.4087202482E-01  4.9963617451E+00
                      -6.2454521841E-01  1.0817440499E+00  2.9039742956E+01
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.4540902900E+00  1.0220999998E+00  2.3604388406E+00
                      -1.1802194204E+00  2.0442000002E+00  4.7208776812E+00
                       0.0000000000E+00  0.0000000000E+00  7.0813165218E+00
                       1.4540902900E+00  1.0220999998E+00  9.4417553591E+00
                      -1.1802194204E+00  2.0442000002E+00  5.4877161156E+01
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.5355339060E-01  2.0412414520E-01  4.1239304943E-02
                       3.1046525818E-18  4.0824829050E-01  8.2478609886E-02
                       0.0000000000E+00  0.0000000000E+00  1.2371791483E-01
                       3.5355339060E-01  2.0412414520E-01  1.6495721971E-01
                       3.1046525818E-18  4.0824829050E-01  9.5876069500E-01
            znucl       22.00000    7.00000

================================================================================

- Total cpu        time (s,m,h):        126.8        2.11      0.035
- Total wall clock time (s,m,h):        127.9        2.13      0.036
-
- For major independent code sections, cpu and wall times (sec),
-  as well as % of the time and number of calls for node 0-
-<BEGIN_TIMER mpi_nprocs = 1, omp_nthreads = 1, mpi_rank = 0>
- cpu_time =          126.8, wall_time =          127.9
-
- routine                        cpu     %       wall     %      number of calls  Gflops    Speedup Efficacity
-                                                                  (-1=no count)
- fourwf%(pot)                  56.139  44.3     56.154  43.9          13600      -1.00        1.00       1.00
- nonlop(apply)                 31.417  24.8     31.421  24.6          13600      -1.00        1.00       1.00
- projbd                        12.117   9.6     12.183   9.5          21760      -1.00        0.99       0.99
- fourwf%(den)                   6.180   4.9      6.179   4.8           2444      -1.00        1.00       1.00
- ewald                          2.621   2.1      2.620   2.0              1      -1.00        1.00       1.00
- stress                         2.293   1.8      2.294   1.8              1      -1.00        1.00       1.00
- ewald2 (+vdw_dftd)             2.262   1.8      2.262   1.8              1      -1.00        1.00       1.00
- vtowfk(ssdiag)                 2.203   1.7      2.201   1.7             -1      -1.00        1.00       1.00
- fourwf%(r->G)                  1.874   1.5      1.868   1.5           2447      -1.00        1.00       1.00
- getghc-other                   1.075   0.8      1.056   0.8             -1      -1.00        1.02       1.02
- pspini                         0.982   0.8      0.982   0.8              1      -1.00        1.00       1.00
- nonlop(forstr)                 0.749   0.6      0.765   0.6            136      -1.00        0.98       0.98
- others (101)                   1.966   1.6      1.966   1.5             -1      -1.00        1.00       1.00
-<END_TIMER>
-
- subtotal                     121.878  96.1    121.951  95.3                                  1.00       1.00

- For major independent code sections, cpu and wall times (sec),
- as well as % of the total time and number of calls 

-<BEGIN_TIMER mpi_nprocs = 1, omp_nthreads = 1, mpi_rank = world>
- cpu_time =         126.8, wall_time =         127.9
-
- routine                         cpu     %       wall     %      number of calls Gflops    Speedup Efficacity
-                                                                  (-1=no count)
- fourwf%(pot)                  56.139  44.3     56.154  43.9          13600      -1.00        1.00       1.00
- nonlop(apply)                 31.417  24.8     31.421  24.6          13600      -1.00        1.00       1.00
- projbd                        12.117   9.6     12.183   9.5          21760      -1.00        0.99       0.99
- fourwf%(den)                   6.180   4.9      6.179   4.8           2444      -1.00        1.00       1.00
- ewald                          2.621   2.1      2.620   2.0              1      -1.00        1.00       1.00
- stress                         2.293   1.8      2.294   1.8              1      -1.00        1.00       1.00
- ewald2 (+vdw_dftd)             2.262   1.8      2.262   1.8              1      -1.00        1.00       1.00
- vtowfk(ssdiag)                 2.203   1.7      2.201   1.7             -1      -1.00        1.00       1.00
- fourwf%(r->G)                  1.874   1.5      1.868   1.5           2447      -1.00        1.00       1.00
- getghc-other                   1.075   0.8      1.056   0.8             -1      -1.00        1.02       1.02
- pspini                         0.982   0.8      0.982   0.8              1      -1.00        1.00       1.00
- nonlop(forstr)                 0.749   0.6      0.765   0.6            136      -1.00        0.98       0.98
- others (101)                   1.966   1.6      1.966   1.5             -1      -1.00        1.00       1.00
-<END_TIMER>

- subtotal                     121.878  96.1    121.951  95.3                                  1.00       1.00

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
 For information on why they are suggested, see also https://docs.abinit.org/theory/acknowledgments.
-
- [1] Preconditioning of self-consistent-field cycles in density functional theory : the extrapolar method
- P.-M. Anglade, X. Gonze, Phys. Rev. B 78, 045126 (2008).
- Comment : to be cited in case the extrapolar conditioner is used, i.e. non-vanishing iprcel.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#anglade2008
-
- [2] Recent developments in the ABINIT software package.
- Computer Phys. Comm. 205, 106 (2016).
- X.Gonze, F.Jollet, F.Abreu Araujo, D.Adams, B.Amadon, T.Applencourt,
- C.Audouze, J.-M.Beuken, J.Bieder, A.Bokhanchuk, E.Bousquet, F.Bruneval
- D.Caliste, M.Cote, F.Dahm, F.Da Pieve, M.Delaveau, M.Di Gennaro,
- B.Dorado, C.Espejo, G.Geneste, L.Genovese, A.Gerossier, M.Giantomassi,
- Y.Gillet, D.R.Hamann, L.He, G.Jomard, J.Laflamme Janssen, S.Le Roux,
- A.Levitt, A.Lherbier, F.Liu, I.Lukacevic, A.Martin, C.Martins,
- M.J.T.Oliveira, S.Ponce, Y.Pouillon, T.Rangel, G.-M.Rignanese,
- A.H.Romero, B.Rousseau, O.Rubel, A.A.Shukri, M.Stankovski, M.Torrent,
- M.J.Van Setten, B.Van Troeye, M.J.Verstraete, D.Waroquier, J.Wiktor,
- B.Xu, A.Zhou, J.W.Zwanziger.
- Comment : the fourth generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/about/ABINIT16.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#gonze2016
-
- [3] Ab initio pseudopotentials for electronic structure calculations of poly-atomic systems, 
- using density-functional theory.
- M. Fuchs, M. Scheffler, Comput. Phys. Commun. 119, 67 (1999).
- Comment : Some pseudopotential generated using the FHI code were used.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#fuchs1999
-
- [4] ABINIT : First-principles approach of materials and nanosystem properties.
- Computer Phys. Comm. 180, 2582-2615 (2009).
- X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
- D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
- S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
- M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
- M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
- Comment : the third generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/about/ABINIT_CPC_v10.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#gonze2009
-
- [5] A brief introduction to the ABINIT software package.
- Z. Kristallogr. 220, 558-562 (2005).
- X. Gonze, G.-M. Rignanese, M. Verstraete, J.-M. Beuken, Y. Pouillon, R. Caracas, F. Jollet,
- M. Torrent, G. Zerah, M. Mikami, Ph. Ghosez, M. Veithen, J.-Y. Raty, V. Olevano, F. Bruneval,
- L. Reining, R. Godby, G. Onida, D.R. Hamann, and D.C. Allan.
- Comment : the second generic paper describing the ABINIT project. Note that this paper
- should be cited especially if you are using the GW part of ABINIT, as several authors
- of this part are not in the list of authors of the first or third paper.
- The .pdf of the latter paper is available at https://www.abinit.org/about/zfk_0505-06_558-562.pdf.
- Note that it should not redistributed (Copyright by Oldenburg Wissenshaftverlag,
- the licence allows the authors to put it on the Web).
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#gonze2005
-
- Proc.   0 individual time (sec): cpu=        126.8  wall=        127.9

================================================================================

 Calculation completed.
.Delivered   6 WARNINGs and   3 COMMENTs to log file.
+Overall time at end (sec) : cpu=        126.8  wall=        127.9
