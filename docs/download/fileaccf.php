
.Version 7.6.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel13.0 computer) 

.Copyright (C) 1998-2013 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Fri 16 May 2014.
- ( at 10h49 )
  
- input  file    -> G1d.in
- output file    -> G1d.out
- root for input  files -> temp/G1di
- root for output files -> temp/G1do

- inpspheads : Reading pseudopotential header in XML form from PP/C.GGA_PBE-JTH-paw.xml

 DATASET    1 : space group P6/m m m (#191); Bravais hP (primitive hexag.)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =        17 xclevel =         2
  lmnmax =         8   lnmax =         4   mband =        35  mffmem =         1
P  mgfft =       216   mkmem =         2 mpssoang=         2     mpw =      5349
  mqgrid =     15044   natom =         2    nfft =    124416    nkpt =         7
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =         1  ntypat =         1  occopt =         1
Pmy_natom=         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=       320    nfftf =    288000
================================================================================
P This job should need less than                      94.402 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     19.999 Mbytes ; DEN or POT disk file :      2.199 Mbytes.
================================================================================


 DATASET    2 : space group P6/m m m (#191); Bravais hP (primitive hexag.)
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        17 xclevel =         2
  lmnmax =         8   lnmax =         4   mband =        35  mffmem =         1
P  mgfft =       216   mkmem =         2 mpssoang=         2     mpw =      5336
  mqgrid =     15044   natom =         2    nfft =    124416    nkpt =         7
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =         1  ntypat =         1  occopt =         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=       320    nfftf =    288000
================================================================================
P This job should need less than                      94.757 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     19.950 Mbytes ; DEN or POT disk file :      2.199 Mbytes.
================================================================================


 DATASET    3 : space group P6/m m m (#191); Bravais hP (primitive hexag.)
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =        17 xclevel =         2
  lmnmax =         8   lnmax =         4   mband =        35  mffmem =         1
P  mgfft =       216   mkmem =         2 mpssoang=         2     mpw =      5336
  mqgrid =     15044   natom =         2    nfft =    124416    nkpt =         7
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =         1  ntypat =         1  occopt =         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=       320    nfftf =    288000
================================================================================
P This job should need less than                      94.757 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     19.950 Mbytes ; DEN or POT disk file :      2.199 Mbytes.
================================================================================

--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      4.6669205060E+00  4.6669205060E+00  4.7258979210E+01 Bohr
              amu      1.20110000E+01
             bdgw3          4       5       4       5       4       5
      chksymbreak           0
             ecut1     2.50000000E+01 Hartree
             ecut2     2.49480214E+01 Hartree
             ecut3     2.49480214E+01 Hartree
          ecuteps1     0.00000000E+00 Hartree
          ecuteps2     1.23691700E+01 Hartree
          ecuteps3     0.00000000E+00 Hartree
         ecutsigx1     0.00000000E+00 Hartree
         ecutsigx2     0.00000000E+00 Hartree
         ecutsigx3     2.49480214E+01 Hartree
          ecutwfn1     0.00000000E+00 Hartree
          ecutwfn2     2.49480214E+01 Hartree
          ecutwfn3     2.49480214E+01 Hartree
           getkss1          0
           getkss2         -1
           getkss3         -2
           getscr1          0
           getscr2          0
           getscr3         -1
           getwfk          -1
           istwfk        1    0    0    1    0    0    0
              ixc          11
           jdtset        1    2    3
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.66666667E-01  0.00000000E+00  0.00000000E+00
                       3.33333333E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       1.66666667E-01  1.66666667E-01  0.00000000E+00
                       3.33333333E-01  1.66666667E-01  0.00000000E+00
                       3.33333333E-01  3.33333333E-01  0.00000000E+00
            kptgw3     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       3.33333333E-01  3.33333333E-01  0.00000000E+00
                       3.33333333E-01  6.66666667E-01  0.00000000E+00
         kptrlatt        6    0    0      0    6    0      0    0    1
          kptrlen      2.80015230E+01
          kssform1          3
          kssform2          1
          kssform3          1
P           mkmem           2
            natom           2
            nband          35
         nbandkss1         -1
         nbandkss2          0
         nbandkss3          0
           ndtset           3
            ngfft          24      24     216
          ngfftdg          30      30     320
             nkpt           7
           nkptgw1          0
           nkptgw2          0
           nkptgw3          3
-           npkpt1          4
-           npkpt2          1
-           npkpt3          1
           npweps1          0
           npweps2       1911
           npweps3          0
          npwsigx1          0
          npwsigx2          0
          npwsigx3       5279
           npwwfn1          0
           npwwfn2       5279
           npwwfn3       5279
           nsheps1          0
           nsheps2        172
           nsheps3          0
          nshsigx1          0
          nshsigx2          0
          nshsigx3        398
            nstep         100
             nsym          24
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
        optdriver1          0
        optdriver2          3
        optdriver3          4
       paral_atom1          1
       paral_atom2          0
       paral_atom3          0
        pawecutdg      5.00000000E+01 Hartree
           ppmfrq1     0.00000000E+00 Hartree
           ppmfrq2     1.83746627E+00 Hartree
           ppmfrq3     0.00000000E+00 Hartree
            rprim      1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                      -5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                       6.1232339957E-17  1.0605752387E-16  1.0000000000E+00
          spgroup         191
        symmorphi           0
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       1  1  0  -1  0  0   0  0  1      -1 -1  0   1  0  0   0  0 -1
                      -1  0  0   1  1  0   0  0  1       1  0  0  -1 -1  0   0  0 -1
                       0  1  0  -1 -1  0   0  0  1       0 -1  0   1  1  0   0  0 -1
                      -1 -1  0   0  1  0   0  0  1       1  1  0   0 -1  0   0  0 -1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                      -1 -1  0   1  0  0   0  0  1       1  1  0  -1  0  0   0  0 -1
                       1  0  0  -1 -1  0   0  0  1      -1  0  0   1  1  0   0  0 -1
                       0 -1  0   1  1  0   0  0  1       0  1  0  -1 -1  0   0  0 -1
                       1  1  0   0 -1  0   0  0  1      -1 -1  0   0  1  0   0  0 -1
           toldfe      1.00000000E-06 Hartree
            typat      1  1
           useylm           1
              wtk        0.02778    0.16667    0.16667    0.08333    0.16667    0.33333
                         0.05556
           xangst      4.7000377687E-16  1.4258403710E+00  0.0000000000E+00
                       1.2348139830E+00  7.1292018551E-01  0.0000000000E+00
            xcart      8.8817841970E-16  2.6944478104E+00  0.0000000000E+00
                       2.3334602530E+00  1.3472239052E+00  0.0000000000E+00
             xred      3.3333333333E-01  6.6666666667E-01  0.0000000000E+00
                       6.6666666667E-01  3.3333333333E-01  0.0000000000E+00
            znucl        6.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.

 chkinp: Checking input parameters for consistency, jdtset=   3.

================================================================================
== DATASET  1 ==================================================================
-   nproc =    4

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  4.6669205  0.0000000  0.0000000  G(1)=  0.2142741  0.1237112  0.0000000
 R(2)= -2.3334603  4.0416717  0.0000000  G(2)=  0.0000000  0.2474224  0.0000000
 R(3)=  0.0000000  0.0000000 47.2589792  G(3)=  0.0000000  0.0000000  0.0211600
 Unit cell volume ucvol=  8.9140646E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 Coarse grid specifications (used for wave-functions):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24 216
         ecut(hartree)=     25.000   => boxcut(ratio)=   2.03065

 Fine grid specifications (used for densities):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30 320
         ecut(hartree)=     50.000   => boxcut(ratio)=   2.02098

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is PP/C.GGA_PBE-JTH-paw.xml
- pspatm: opening atomic psp file    PP/C.GGA_PBE-JTH-paw.xml
- pspatm : Reading pseudopotential header in XML form from PP/C.GGA_PBE-JTH-paw.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.55000000
 5 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 560 , AA= 0.20016E-02 BB= 0.12010E-01
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size= 555 , AA= 0.20016E-02 BB= 0.12010E-01
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size= 585 , AA= 0.20016E-02 BB= 0.12010E-01
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size= 710 , AA= 0.20016E-02 BB= 0.12010E-01
  - mesh 5: r(i)=AA*[exp(BB*(i-1))-1], size= 745 , AA= 0.20016E-02 BB= 0.12010E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions =  1.55000000
 mmax=  560
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 2
 Radial grid used for (t)core density is grid 3
 Radial grid used for Vloc is grid 4
 Radial grid used for pseudo valence density is grid 5
 Compensation charge density is not taken into account in XC energy/potential
 pspatm: atomic psp has been read  and splines computed

   6.33733746E+01                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating     35 bands with npw=    5279 for ikpt=   1 by node    0
P newkpt: treating     35 bands with npw=    5347 for ikpt=   2 by node    0
P newkpt: treating     35 bands with npw=    5349 for ikpt=   3 by node    1
P newkpt: treating     35 bands with npw=    5344 for ikpt=   4 by node    1
P newkpt: treating     35 bands with npw=    5325 for ikpt=   5 by node    2
P newkpt: treating     35 bands with npw=    5307 for ikpt=   6 by node    2
P newkpt: treating     35 bands with npw=    5313 for ikpt=   7 by node    3
 
_setup2: Arith. and geom. avg. npw (full set) are    5326.306    5326.270

================================================================================

     iter   Etot(hartree)      deltaE(h)  residm     nres2
 ETOT  1  -11.501857010786    -1.150E+01 1.506E-01 1.237E+01
 ETOT  2  -11.502422118177    -5.651E-04 2.065E-03 1.568E+00
 ETOT  3  -11.495115438103     7.307E-03 1.158E-03 7.965E-02
 ETOT  4  -11.494845724575     2.697E-04 4.536E-04 3.651E-02
 ETOT  5  -11.494139425510     7.063E-04 4.352E-04 9.756E-03
 ETOT  6  -11.493936806588     2.026E-04 1.104E-03 6.371E-03
 ETOT  7  -11.493647414540     2.894E-04 8.569E-04 2.294E-03
 ETOT  8  -11.493619182203     2.823E-05 4.207E-04 1.554E-03
 ETOT  9  -11.493587875293     3.131E-05 1.122E-04 8.483E-04
 ETOT 10  -11.493573550196     1.433E-05 1.240E-04 4.527E-04
 ETOT 11  -11.493574859547    -1.309E-06 9.448E-05 3.468E-04
 ETOT 12  -11.493582937376    -8.078E-06 1.593E-04 2.056E-04
 ETOT 13  -11.493589512787    -6.575E-06 3.416E-05 1.644E-04
 ETOT 14  -11.493592101859    -2.589E-06 5.467E-05 1.015E-04
 ETOT 15  -11.493594190718    -2.089E-06 3.411E-05 7.593E-05
 ETOT 16  -11.493594721509    -5.308E-07 2.546E-05 5.750E-05
 ETOT 17  -11.493594725489    -3.979E-09 1.151E-05 4.497E-05

 At SCF step   17, etot is converged : 
  for the second time, diff in etot=  3.979E-09 < toldfe=  1.000E-06

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.27948111E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.27948111E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -7.10879900E-06  sigma(2 1)=  0.00000000E+00
 

 PAW TEST:
 ==== Compensation charge inside spheres ============
 The following values must be close to each other ...
 Compensation charge over spherical meshes =      0.455118693945897
 Compensation charge over fine fft grid    =      0.455127195982668

 ==== Results concerning PAW augmentation regions ====
 
 Total pseudopotential strength Dij (hartree):
 Atom #  1
   0.52908   0.90845   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.90845   1.55825   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.12401   0.00000   0.00000  -0.15575   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.12242   0.00000   0.00000  -0.15396   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.12401   0.00000   0.00000  -0.15575
   0.00000   0.00000  -0.15575   0.00000   0.00000  -0.18921   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.15396   0.00000   0.00000  -0.18720   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.15575   0.00000   0.00000  -0.18921
 Atom #  2
   0.52908   0.90845   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.90845   1.55825   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.12401   0.00000   0.00000  -0.15575   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.12242   0.00000   0.00000  -0.15396   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.12401   0.00000   0.00000  -0.15575
   0.00000   0.00000  -0.15575   0.00000   0.00000  -0.18921   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.15396   0.00000   0.00000  -0.18720   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.15575   0.00000   0.00000  -0.18921
 
 
 Augmentation waves occupancies Rhoij:
 Atom #  1
   4.69720  -1.26367   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -1.26367   0.36757   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.19137   0.00000   0.00000  -0.12303   0.00000   0.00000
   0.00000   0.00000   0.00000   0.22092   0.00000   0.00000   0.16101   0.00000
   0.00000   0.00000   0.00000   0.00000   0.19137   0.00000   0.00000  -0.12303
   0.00000   0.00000  -0.12303   0.00000   0.00000   1.04099   0.00000   0.00000
   0.00000   0.00000   0.00000   0.16101   0.00000   0.00000   0.28036   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.12303   0.00000   0.00000   1.04099
 Atom #  2
   4.69720  -1.26367   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -1.26367   0.36757   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.19137   0.00000   0.00000  -0.12303   0.00000   0.00000
   0.00000   0.00000   0.00000   0.22092   0.00000   0.00000   0.16101   0.00000
   0.00000   0.00000   0.00000   0.00000   0.19137   0.00000   0.00000  -0.12303
   0.00000   0.00000  -0.12303   0.00000   0.00000   1.04099   0.00000   0.00000
   0.00000   0.00000   0.00000   0.16101   0.00000   0.00000   0.28036   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.12303   0.00000   0.00000   1.04099
 
 

======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)
 number of Gamma centered plane waves   6869
 number of Gamma centered shells    482
 number of bands     35
 maximum angular momentum components      2
 Conjugate gradient eigenvalues
   k    eigenvalues [Hartree]
   1     -0.8382 -0.4011 -0.2337 -0.2337  0.0022  0.0239  0.0275  0.0478  0.0591
          0.0963  0.1124  0.1650  0.1803  0.1803  0.1860  0.2535  0.2770  0.2945
          0.3326  0.3598  0.3862  0.4826  0.5145  0.6221  0.6621  0.7009  0.7769
          0.8279  0.9094  0.9094  0.9383  1.0111  1.0359  1.0359  1.0670
   2     -0.8143 -0.3727 -0.3178 -0.2750  0.0348  0.0574  0.0608  0.0809  0.0925
          0.1294  0.1454  0.1806  0.1978  0.2190  0.2194  0.2731  0.2861  0.3101
          0.3798  0.3915  0.4192  0.5124  0.5472  0.6440  0.6940  0.7303  0.7580
          0.7967  0.8208  0.8516  0.8611  0.8644  0.8719  0.8996  0.9001
   3     -0.7435 -0.4756 -0.3339 -0.2917  0.0565  0.1316  0.1571  0.1590  0.1607
          0.1805  0.1928  0.2286  0.2454  0.2961  0.3181  0.3815  0.4081  0.4564
          0.4700  0.4760  0.5162  0.5282  0.5590  0.5712  0.5744  0.5959  0.6044
          0.6231  0.6422  0.6569  0.6644  0.7010  0.7163  0.7267  0.7672
   4     -0.6466 -0.6073 -0.3570 -0.2091 -0.0614  0.1453  0.2892  0.2949  0.3200
          0.3255  0.3256  0.3265  0.3419  0.3464  0.3588  0.3593  0.3869  0.3952
          0.4094  0.4105  0.4463  0.4633  0.4790  0.4809  0.5168  0.5511  0.5626
          0.5672  0.6006  0.6043  0.6492  0.6567  0.6682  0.6685  0.7030
   5     -0.7669 -0.4073 -0.3572 -0.3175  0.0999  0.1100  0.1244  0.1270  0.1468
          0.1592  0.1951  0.2117  0.2428  0.2628  0.2857  0.2976  0.3487  0.3758
          0.4457  0.4841  0.5106  0.5211  0.5990  0.6110  0.6963  0.7125  0.7126
          0.7232  0.7282  0.7291  0.7385  0.7427  0.7542  0.7626  0.7648
   6     -0.6759 -0.5406 -0.4169 -0.2198 -0.0308  0.2275  0.2435  0.2549  0.2585
          0.2756  0.2926  0.3198  0.3441  0.3669  0.3861  0.4125  0.4159  0.4588
          0.4663  0.4774  0.4818  0.5004  0.5038  0.5079  0.5384  0.5524  0.5933
          0.6063  0.6079  0.6192  0.6366  0.6613  0.6642  0.6782  0.6850
   7     -0.5847 -0.5847 -0.5084 -0.1229 -0.1229  0.2672  0.3509  0.3509  0.3746
          0.4253  0.4253  0.4258  0.4261  0.4261  0.4356  0.4454  0.4454  0.4462
          0.4462  0.4555  0.4667  0.4727  0.4727  0.4948  0.4948  0.4967  0.5179
          0.5224  0.5224  0.5491  0.5625  0.5625  0.5896  0.5932  0.5932
 Test on the normalization of the wavefunctions
  min sum_G |a(n,k,G)| =  1.000000
  max sum_G |a(n,k,G)| =  1.000000
 Test on the orthogonalization of the wavefunctions
  min sum_G a(n,k,G)a(n',k,G) =  0.000000
  max sum_G a(n,k,G)a(n',k,G) =  0.000000

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   3.7746E-06; max=  1.1509E-05
   0.0000  0.0000  0.0000    1  1.15094E-05 kpt; spin; max resid(k); each band:
  6.94E-10 7.54E-09 6.64E-14 6.64E-14 7.64E-07 1.09E-05 4.38E-06 4.69E-06
  1.15E-05 5.27E-06 7.46E-06 7.85E-06 3.75E-13 3.75E-13 6.73E-06 6.36E-06
  7.13E-06 1.03E-12 5.82E-12 6.91E-06 6.56E-06 6.49E-06 6.75E-06 5.66E-06
  5.28E-06 2.35E-09 3.74E-06 3.59E-06 1.08E-10 1.08E-10 2.86E-06 3.38E-06
  9.95E-10 9.95E-10 1.81E-06
   0.1667  0.0000  0.0000    1  1.14508E-05 kpt; spin; max resid(k); each band:
  6.73E-10 7.20E-09 1.00E-10 1.08E-13 7.09E-07 1.09E-05 4.28E-06 4.77E-06
  1.15E-05 5.20E-06 7.41E-06 1.26E-07 7.80E-06 6.94E-08 6.66E-06 2.16E-12
  6.28E-06 7.10E-06 1.34E-08 6.82E-06 6.50E-06 5.19E-06 5.38E-06 3.07E-06
  3.63E-06 1.11E-06 9.69E-08 2.25E-10 2.69E-06 1.15E-06 4.15E-06 5.97E-06
  8.01E-07 8.68E-06 1.14E-06
   0.3333  0.0000  0.0000    1  1.13143E-05 kpt; spin; max resid(k); each band:
  5.89E-10 2.60E-10 1.19E-13 6.15E-09 9.25E-09 5.98E-07 3.38E-06 8.10E-06
  3.99E-06 4.95E-06 1.13E-05 5.02E-06 7.44E-06 7.75E-06 6.58E-06 6.00E-06
  5.72E-06 1.09E-07 1.16E-12 4.49E-06 3.42E-06 1.60E-06 9.61E-06 5.10E-06
  3.67E-06 3.14E-06 8.92E-06 2.39E-06 3.47E-06 3.53E-06 3.89E-06 1.67E-10
  3.59E-06 3.39E-06 3.18E-06
   0.5000  0.0000  0.0000    1  1.10384E-05 kpt; spin; max resid(k); each band:
  4.38E-10 4.02E-10 1.18E-13 4.03E-09 7.61E-09 1.03E-11 3.82E-07 4.84E-07
  1.77E-06 3.43E-06 1.10E-05 1.10E-05 5.75E-06 5.45E-06 1.07E-05 1.09E-05
  3.80E-06 4.80E-06 7.59E-06 7.61E-06 7.19E-06 6.82E-06 4.17E-06 4.94E-06
  3.90E-06 3.22E-06 3.70E-06 3.83E-06 3.25E-06 4.20E-14 2.62E-06 3.73E-06
  1.54E-10 3.00E-06 3.26E-06
   0.1667  0.1667  0.0000    1  1.13351E-05 kpt; spin; max resid(k); each band:
  6.07E-10 1.57E-10 1.25E-10 6.59E-09 6.34E-07 1.66E-09 1.10E-05 3.98E-06
  5.00E-06 1.13E-05 5.04E-06 7.42E-06 2.12E-07 7.77E-06 6.57E-06 6.78E-10
  6.05E-06 7.04E-06 4.92E-06 5.04E-06 8.15E-09 1.94E-06 2.81E-06 3.66E-06
  1.53E-07 2.58E-07 4.81E-07 2.76E-06 6.87E-06 7.35E-06 8.34E-07 1.48E-06
  3.75E-06 6.99E-06 1.01E-05
   0.3333  0.1667  0.0000    1  1.09879E-05 kpt; spin; max resid(k); each band:
  4.95E-10 3.10E-10 1.43E-10 4.96E-09 4.33E-09 4.66E-07 1.07E-07 2.17E-06
  1.10E-05 5.71E-06 1.10E-05 3.54E-06 7.52E-06 4.74E-06 2.65E-07 4.18E-06
  5.15E-06 1.03E-05 4.58E-06 3.99E-06 4.47E-06 7.00E-06 2.33E-06 6.18E-06
  3.18E-06 4.27E-06 3.97E-06 2.97E-06 3.42E-06 2.78E-06 5.73E-07 8.86E-06
  1.78E-06 2.73E-06 9.51E-06
   0.3333  0.3333  0.0000    1  1.07225E-05 kpt; spin; max resid(k); each band:
  3.52E-10 3.52E-10 2.40E-10 3.32E-09 3.32E-09 8.40E-08 1.42E-07 1.42E-07
  2.66E-07 3.08E-06 3.08E-06 1.02E-05 1.02E-05 1.07E-05 4.88E-06 4.80E-06
  4.80E-06 4.35E-06 4.35E-06 6.95E-06 1.96E-06 7.95E-06 7.95E-06 1.77E-06
  1.77E-06 4.98E-06 3.46E-06 3.44E-06 3.44E-06 2.42E-06 4.44E-06 4.44E-06
  3.63E-06 3.41E-06 3.41E-06
 reduced coordinates (array xred) for    2 atoms
       0.333333333333      0.666666666667      0.000000000000
       0.666666666667      0.333333333333      0.000000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
    2       0.000000000000      0.000000000000      0.000000000000
 
 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     1.42584037101250     0.00000000000000
    2      1.23481398303826     0.71292018550625     0.00000000000000

 cartesian forces (hartree/bohr) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 h/b

 cartesian forces (eV/Angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales=  4.666920506000  4.666920506000 47.258979210000 bohr
              =  2.469627966077  2.469627966077 25.008374699161 angstroms
 prteigrs : about to open file temp/G1do_DS1_EIG
 Fermi (or HOMO) energy (hartree) =  -0.12286   Average Vxc (hartree)=  -0.08132
 Eigenvalues (hartree) for nkpt=   7  k points:
 kpt#   1, nband= 35, wtk=  0.02778, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -0.83825  -0.40108  -0.23370  -0.23370   0.00218   0.02386   0.02749   0.04781
   0.05911   0.09632   0.11240   0.16502   0.18030   0.18030   0.18596   0.25352
   0.27704   0.29448   0.33257   0.35979   0.38624   0.48257   0.51453   0.62206
   0.66205   0.70089   0.77687   0.82787   0.90941   0.90941   0.93833   1.01106
   1.03585   1.03585   1.06704
 kpt#   2, nband= 35, wtk=  0.16667, kpt=  0.1667  0.0000  0.0000 (reduced coord)
  -0.81426  -0.37266  -0.31782  -0.27501   0.03477   0.05737   0.06076   0.08092
   0.09247   0.12939   0.14543   0.18058   0.19777   0.21899   0.21943   0.27314
   0.28608   0.31013   0.37981   0.39150   0.41917   0.51235   0.54719   0.64402
   0.69401   0.73025   0.75803   0.79668   0.82081   0.85161   0.86107   0.86441
   0.87190   0.89956   0.90010
 kpt#   3, nband= 35, wtk=  0.16667, kpt=  0.3333  0.0000  0.0000 (reduced coord)
  -0.74353  -0.47564  -0.33387  -0.29173   0.05654   0.13164   0.15709   0.15904
   0.16074   0.18047   0.19279   0.22861   0.24538   0.29609   0.31810   0.38154
   0.40809   0.45639   0.47000   0.47599   0.51618   0.52823   0.55904   0.57120
   0.57444   0.59593   0.60438   0.62310   0.64219   0.65694   0.66440   0.70101
   0.71633   0.72667   0.76725
 kpt#   4, nband= 35, wtk=  0.08333, kpt=  0.5000  0.0000  0.0000 (reduced coord)
  -0.64656  -0.60733  -0.35702  -0.20907  -0.06140   0.14535   0.28918   0.29486
   0.31997   0.32546   0.32558   0.32655   0.34190   0.34643   0.35881   0.35935
   0.38691   0.39519   0.40936   0.41051   0.44629   0.46333   0.47901   0.48086
   0.51678   0.55112   0.56256   0.56715   0.60056   0.60432   0.64916   0.65674
   0.66821   0.66846   0.70297
 kpt#   5, nband= 35, wtk=  0.16667, kpt=  0.1667  0.1667  0.0000 (reduced coord)
  -0.76689  -0.40732  -0.35718  -0.31752   0.09988   0.11001   0.12441   0.12701
   0.14681   0.15922   0.19511   0.21168   0.24280   0.26280   0.28565   0.29761
   0.34869   0.37579   0.44573   0.48412   0.51064   0.52108   0.59897   0.61103
   0.69634   0.71250   0.71256   0.72324   0.72824   0.72906   0.73846   0.74268
   0.75416   0.76264   0.76477
 kpt#   6, nband= 35, wtk=  0.33333, kpt=  0.3333  0.1667  0.0000 (reduced coord)
  -0.67590  -0.54064  -0.41695  -0.21979  -0.03082   0.22752   0.24349   0.25493
   0.25851   0.27561   0.29258   0.31977   0.34414   0.36688   0.38607   0.41248
   0.41586   0.45880   0.46631   0.47738   0.48182   0.50042   0.50377   0.50790
   0.53844   0.55243   0.59332   0.60626   0.60790   0.61920   0.63657   0.66133
   0.66419   0.67821   0.68496
 kpt#   7, nband= 35, wtk=  0.05556, kpt=  0.3333  0.3333  0.0000 (reduced coord)
  -0.58475  -0.58475  -0.50839  -0.12286  -0.12286   0.26722   0.35087   0.35087
   0.37458   0.42526   0.42526   0.42580   0.42614   0.42614   0.43559   0.44536
   0.44536   0.44621   0.44621   0.45547   0.46670   0.47266   0.47266   0.49484
   0.49484   0.49670   0.51786   0.52239   0.52239   0.54908   0.56252   0.56252
   0.58958   0.59324   0.59324
 Total charge density [el/Bohr^3]
,     Maximum=    3.0910E-01  at reduced coord.    0.4333    0.8667    0.0000
,Next maximum=    3.0910E-01  at reduced coord.    0.4333    0.5667    0.0000
,     Minimum=    6.6306E-12  at reduced coord.    0.0000    0.0000    0.4281
,Next minimum=    6.6306E-12  at reduced coord.    0.0000    0.0000    0.5719
,  Integrated=    8.0000E+00

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  6.16764481405743E+00
    Hartree energy  =  7.31187618090362E+01
    XC energy       = -4.16378283287330E+00
    Ewald energy    =  6.42272615538616E+01
    PspCore energy  =  7.10936903478773E-02
    Loc. psp. energy= -1.53225906234432E+02
    Spherical terms =  2.31297720047422E+00
    >>>>>>>>> Etotal= -1.14919499995277E+01

 "Double-counting" decomposition of free energy:
    Band energy     = -3.65822343013174E+00
    Ewald energy    =  6.42272615538616E+01
    PspCore energy  =  7.10936903478773E-02
    Dble-C XC-energy= -7.30320995515787E+01
    Spherical terms =  8.98373012012511E-01
    >>>> Etotal (DC)= -1.14935947254885E+01

  >Total energy in eV           = -3.12711862737076E+02
  >Total DC energy in eV        = -3.12756618006539E+02
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.27948111E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.27948111E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -7.10879900E-06  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  9.4812E-02 GPa]
- sigma(1 1)= -3.76436276E-02  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -3.76436276E-02  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -2.09148052E-01  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =    4

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.

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
 R(1)=  4.6669205  0.0000000  0.0000000  G(1)=  0.2142741  0.1237112  0.0000000
 R(2)= -2.3334603  4.0416717  0.0000000  G(2)=  0.0000000  0.2474224  0.0000000
 R(3)=  0.0000000  0.0000000 47.2589792  G(3)=  0.0000000  0.0000000  0.0211600
 Unit cell volume ucvol=  8.9140646E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is PP/C.GGA_PBE-JTH-paw.xml
- pspatm: opening atomic psp file    PP/C.GGA_PBE-JTH-paw.xml
- pspatm : Reading pseudopotential header in XML form from PP/C.GGA_PBE-JTH-paw.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.55000000
 5 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 560 , AA= 0.20016E-02 BB= 0.12010E-01
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size= 555 , AA= 0.20016E-02 BB= 0.12010E-01
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size= 585 , AA= 0.20016E-02 BB= 0.12010E-01
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size= 710 , AA= 0.20016E-02 BB= 0.12010E-01
  - mesh 5: r(i)=AA*[exp(BB*(i-1))-1], size= 745 , AA= 0.20016E-02 BB= 0.12010E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions =  1.55000000
 mmax=  560
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 2
 Radial grid used for (t)core density is grid 3
 Radial grid used for Vloc is grid 4
 Radial grid used for pseudo valence density is grid 5
 Compensation charge density is not taken into account in XC energy/potential
 pspatm: atomic psp has been read  and splines computed

--------------------------------------------------------------------------------

 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :     7
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.02778
     2)     1.66666667E-01  0.00000000E+00  0.00000000E+00       0.16667
     3)     3.33333333E-01  0.00000000E+00  0.00000000E+00       0.16667
     4)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.08333
     5)     1.66666667E-01  1.66666667E-01  0.00000000E+00       0.16667
     6)     3.33333333E-01  1.66666667E-01  0.00000000E+00       0.33333
     7)     3.33333333E-01  3.33333333E-01  0.00000000E+00       0.05556

 Together with 24 symmetry operations and time-reversal symmetry 
 yields    36 points in the full Brillouin Zone.


 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :     7
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.02778
     2)     1.66666667E-01  0.00000000E+00  0.00000000E+00       0.16667
     3)     3.33333333E-01  0.00000000E+00  0.00000000E+00       0.16667
     4)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.08333
     5)     1.66666667E-01  1.66666667E-01  0.00000000E+00       0.16667
     6)     3.33333333E-01  1.66666667E-01  0.00000000E+00       0.33333
     7)     3.33333333E-01  3.33333333E-01  0.00000000E+00       0.05556

 Together with 24 symmetry operations and time-reversal symmetry 
 yields    36 points in the full Brillouin Zone.


 setmesh: FFT mesh size selected  =  15x 15x192
          total number of points  =    43200

 ====================================
 ==== Info on PAW TABulated data ====
 ====================================

 
  ******************************
  **** Atom type    1 ****
  ******************************
  Number of (n,l) elements .......................    4
  Number of (l,m,n) elements .....................    8
  Number of (i,j) elements (packed form) .........   10
  Max L+1 leading to non-zero Gaunt ..............    3
  Max L+1 leading to non-zero Gaunt (pawlcutd) ...    3
  lmn2_size ......................................   36
  lmnmix_sz ......................................   36
  Size of radial mesh ............................  560
  No of Q-points for tcorespl and tvalespl ....... ****
  No of Q-points for the radial shape functions ..    0
  Radial shape function type .....................    3
  shape_lambda ...................................    0
  Use pseudized core density .....................    1
  Option for the use of hat density in XC terms ..    0
  Use LDA+U ......................................    0
  Use Local Exact exchange .......................    0
  Use potential zero .............................    0
  Has kij   ......................................    0
  Has tproj ......................................    0
  Has tvale ......................................    1
  Has vhtnzc .....................................    0
  Has vhnzc ......................................    0
  Has nabla ......................................    2
  Has shapefuncg .................................    0
  Has wvl ........................................    0
  beta ............................................ -4.37666339E+00
  1/q d(tNcore(q))/dq for q=0 ..................... -1.60338729E+00
  d^2(tNcore(q))/dq^2 for q=0 .....................  1.00000000E+00
  1/q d(tNvale(q))/dq for q=0 ..................... -1.90500531E+02
  XC energy for the core density .................. -3.47481452E+00
  Radius of the PAW sphere ........................  1.55000000E+00
  Compensation charge radius (if >rshp, g(r)=0) ...  1.55000000E+00

 screening : taking advantage of time-reversal symmetry 
 Maximum band index for partially occupied states nbvw =     4
 Remaining bands to be divided among processors   nbcw =    31
 Number of bands treated by each node ~    7

 k       eigenvalues [eV]
  1        -22.81 -10.91  -6.36  -6.36   0.06   0.65   0.75   1.30   1.61   2.62
             3.06   4.49   4.91   4.91   5.06   6.90   7.54   8.01   9.05   9.79
            10.51  13.13  14.00  16.93  18.02  19.07  21.14  22.53  24.75  24.75
            25.53  27.51  28.19  28.19  29.04
  2        -22.16 -10.14  -8.65  -7.48   0.95   1.56   1.65   2.20   2.52   3.52
             3.96   4.91   5.38   5.96   5.97   7.43   7.78   8.44  10.34  10.65
            11.41  13.94  14.89  17.52  18.88  19.87  20.63  21.68  22.34  23.17
            23.43  23.52  23.73  24.48  24.49
  3        -20.23 -12.94  -9.08  -7.94   1.54   3.58   4.27   4.33   4.37   4.91
             5.25   6.22   6.68   8.06   8.66  10.38  11.10  12.42  12.79  12.95
            14.05  14.37  15.21  15.54  15.63  16.22  16.45  16.96  17.47  17.88
            18.08  19.08  19.49  19.77  20.88
  4        -17.59 -16.53  -9.72  -5.69  -1.67   3.96   7.87   8.02   8.71   8.86
             8.86   8.89   9.30   9.43   9.76   9.78  10.53  10.75  11.14  11.17
            12.14  12.61  13.03  13.08  14.06  15.00  15.31  15.43  16.34  16.44
            17.66  17.87  18.18  18.19  19.13
  5        -20.87 -11.08  -9.72  -8.64   2.72   2.99   3.39   3.46   3.99   4.33
             5.31   5.76   6.61   7.15   7.77   8.10   9.49  10.23  12.13  13.17
            13.90  14.18  16.30  16.63  18.95  19.39  19.39  19.68  19.82  19.84
            20.09  20.21  20.52  20.75  20.81
  6        -18.39 -14.71 -11.35  -5.98  -0.84   6.19   6.63   6.94   7.03   7.50
             7.96   8.70   9.36   9.98  10.51  11.22  11.32  12.48  12.69  12.99
            13.11  13.62  13.71  13.82  14.65  15.03  16.14  16.50  16.54  16.85
            17.32  18.00  18.07  18.45  18.64
  7        -15.91 -15.91 -13.83  -3.34  -3.34   7.27   9.55   9.55  10.19  11.57
            11.57  11.59  11.60  11.60  11.85  12.12  12.12  12.14  12.14  12.39
            12.70  12.86  12.86  13.47  13.47  13.52  14.09  14.21  14.21  14.94
            15.31  15.31  16.04  16.14  16.14

 test on the normalization of the wavefunctions
 min sum_G |a(n,k,G)| =  0.999998
 max sum_G |a(n,k,G)| =  1.000001
 test on the orthogonalization of the wavefunctions (NB: this is not invariant for degenerate states)
- min sum_G a(n,k,G)a(n",k,G) =  0.000000
- max sum_G a(n,k,G)a(n",k,G) =  0.000001


 PAW TEST:
 ==== Compensation charge inside spheres ============
 The following values must be close...
 Compensation charge over spherical meshes =      0.455127298848754
 Compensation charge over fine fft grid    =      0.455127195982668


 Total number of electrons per unit cell =    8.0000 (Spherical mesh),    8.0000 (FFT mesh)
 average of density, n =  0.008975
 r_s =    2.9851
 omega_plasma =    9.1382 [eV]


 ==== Results concerning PAW augmentation regions ====
 
 Total pseudopotential strength Dij (hartree):
 Atom #  1
   0.52786   0.90628   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.90628   1.55439   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.12258   0.00000   0.00000  -0.15420   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.12100   0.00000   0.00000  -0.15242   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.12258   0.00000   0.00000  -0.15420
   0.00000   0.00000  -0.15420   0.00000   0.00000  -0.18754   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.15242   0.00000   0.00000  -0.18553   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.15420   0.00000   0.00000  -0.18754
 Atom #  2
   0.52786   0.90628   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.90628   1.55439   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.12258   0.00000   0.00000  -0.15420   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.12100   0.00000   0.00000  -0.15242   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.12258   0.00000   0.00000  -0.15420
   0.00000   0.00000  -0.15420   0.00000   0.00000  -0.18754   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.15242   0.00000   0.00000  -0.18553   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.15420   0.00000   0.00000  -0.18754
 
 
 Augmentation waves occupancies Rhoij:
 Atom #  1
   4.69720  -1.26367   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -1.26367   0.36757   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.19137   0.00000   0.00000  -0.12303   0.00000   0.00000
   0.00000   0.00000   0.00000   0.22092   0.00000   0.00000   0.16101   0.00000
   0.00000   0.00000   0.00000   0.00000   0.19137   0.00000   0.00000  -0.12303
   0.00000   0.00000  -0.12303   0.00000   0.00000   1.04099   0.00000   0.00000
   0.00000   0.00000   0.00000   0.16101   0.00000   0.00000   0.28036   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.12303   0.00000   0.00000   1.04099
 Atom #  2
   4.69720  -1.26367   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -1.26367   0.36757   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.19137   0.00000   0.00000  -0.12303   0.00000   0.00000
   0.00000   0.00000   0.00000   0.22092   0.00000   0.00000   0.16101   0.00000
   0.00000   0.00000   0.00000   0.00000   0.19137   0.00000   0.00000  -0.12303
   0.00000   0.00000  -0.12303   0.00000   0.00000   1.04099   0.00000   0.00000
   0.00000   0.00000   0.00000   0.16101   0.00000   0.00000   0.28036   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.12303   0.00000   0.00000   1.04099
 
 

 calculating chi0 at frequencies [eV] :
  1    0.000000E+00    0.000000E+00
  2    0.000000E+00    5.000000E+01


--------------------------------------------------------------------------------
  q-point number  1        q = ( 0.000000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000
       -0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000

    2   0.000  -0.270   0.262  -0.518   0.485  -0.716   0.650  -0.848   0.747
        0.000  -0.000  -0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  50.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000
        0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000

    2   0.000  -0.023   0.022  -0.046   0.042  -0.065   0.058  -0.079   0.068
        0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000

 For q-point:  0.000010 0.000020 0.000030
  dielectric constant =   1.5630
  dielectric constant without local fields =   1.5850

  Average fulfillment of the sum rule on Im[epsilon] for q-point    1 :     58.87  [%]
  Heads and wings of the symmetrical epsilon^-1(G,G')

   Upper and lower wings at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
      0.640   0.005  -0.005   0.004  -0.004   0.004  -0.004   0.003  -0.003
      0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000
       1       2       3       4       5       6       7       8       9
      0.640   0.005  -0.005   0.004  -0.004   0.004  -0.004   0.003  -0.003
      0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000


   Upper and lower wings at the    2 th omega   0.0000  50.0000 [eV]
       1       2       3       4       5       6       7       8       9
      0.980   0.001  -0.001   0.001  -0.001   0.001  -0.001   0.001  -0.001
     -0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000
       1       2       3       4       5       6       7       8       9
      0.980   0.001  -0.001   0.001  -0.001   0.001  -0.001   0.001  -0.001
     -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000




--------------------------------------------------------------------------------
  q-point number  2        q = ( 0.166667, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -5.027  -4.951  -4.951  -4.731  -4.731  -4.385  -4.385  -3.938  -3.938
       -0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000

    2  -4.951  -5.139  -4.624  -5.162  -4.191  -5.013  -3.690  -4.701  -3.157
        0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  50.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -0.114  -0.113  -0.113  -0.110  -0.110  -0.105  -0.105  -0.098  -0.098
        0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000

    2  -0.113  -0.136  -0.089  -0.155  -0.066  -0.169  -0.046  -0.176  -0.029
        0.000   0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    2 :     66.58  [%]


--------------------------------------------------------------------------------
  q-point number  3        q = ( 0.333333, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -7.830  -7.723  -7.723  -7.409  -7.409  -6.916  -6.916  -6.281  -6.281
        0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

    2  -7.723  -7.854  -7.387  -7.763  -6.882  -7.451  -6.252  -6.942  -5.541
       -0.000  -0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  50.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -0.410  -0.406  -0.406  -0.394  -0.393  -0.374  -0.374  -0.349  -0.349
       -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

    2  -0.406  -0.425  -0.379  -0.436  -0.347  -0.435  -0.312  -0.425  -0.277
       -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    3 :     50.30  [%]


--------------------------------------------------------------------------------
  q-point number  4        q = ( 0.500000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -9.564  -9.437  -9.437  -9.069  -9.068  -8.488  -8.488  -7.742  -7.741
       -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

    2  -9.437  -9.513  -9.118  -9.334  -8.588  -8.912  -7.890  -8.279  -7.078
       -0.000  -0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  50.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -0.749  -0.741  -0.741  -0.717  -0.717  -0.680  -0.680  -0.632  -0.632
        0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

    2  -0.741  -0.755  -0.710  -0.753  -0.668  -0.735  -0.616  -0.701  -0.560
       -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    4 :     41.68  [%]


--------------------------------------------------------------------------------
  q-point number  5        q = ( 0.166667, 0.166667, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -7.448  -7.344  -7.344  -7.041  -7.041  -6.563  -6.563  -5.949  -5.948
        0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

    2  -7.344  -7.489  -7.003  -7.417  -6.500  -7.128  -5.879  -6.643  -5.185
       -0.000  -0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  50.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -0.319  -0.315  -0.315  -0.306  -0.306  -0.291  -0.291  -0.272  -0.272
       -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

    2  -0.315  -0.336  -0.289  -0.349  -0.260  -0.353  -0.230  -0.348  -0.201
       -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    5 :     54.44  [%]


--------------------------------------------------------------------------------
  q-point number  6        q = ( 0.333333, 0.166667, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -9.668  -9.539  -9.538  -9.163  -9.162  -8.570  -8.570  -7.807  -7.807
        0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

    2  -9.539  -9.628  -9.202  -9.457  -8.651  -9.033  -7.933  -8.390  -7.101
       -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  50.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -0.630  -0.623  -0.623  -0.603  -0.603  -0.573  -0.573  -0.534  -0.534
        0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

    2  -0.623  -0.640  -0.594  -0.642  -0.555  -0.630  -0.510  -0.605  -0.461
       -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    6 :     42.08  [%]


--------------------------------------------------------------------------------
  q-point number  7        q = ( 0.333333, 0.333333, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -8.934  -8.822  -8.822  -8.494  -8.494  -7.979  -7.978  -7.315  -7.314
        0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

    2  -8.822  -8.896  -8.532  -8.744  -8.053  -8.375  -7.427  -7.818  -6.698
       -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  50.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -0.850  -0.841  -0.841  -0.815  -0.815  -0.773  -0.773  -0.720  -0.720
        0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

    2  -0.841  -0.854  -0.811  -0.848  -0.766  -0.825  -0.711  -0.785  -0.649
       -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    7 :     37.80  [%]

================================================================================
== DATASET  3 ==================================================================
-   nproc =    4

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   2.

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
 R(1)=  4.6669205  0.0000000  0.0000000  G(1)=  0.2142741  0.1237112  0.0000000
 R(2)= -2.3334603  4.0416717  0.0000000  G(2)=  0.0000000  0.2474224  0.0000000
 R(3)=  0.0000000  0.0000000 47.2589792  G(3)=  0.0000000  0.0000000  0.0211600
 Unit cell volume ucvol=  8.9140646E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
--------------------------------------------------------------------------------

 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :     7
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.02778
     2)     1.66666667E-01  0.00000000E+00  0.00000000E+00       0.16667
     3)     3.33333333E-01  0.00000000E+00  0.00000000E+00       0.16667
     4)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.08333
     5)     1.66666667E-01  1.66666667E-01  0.00000000E+00       0.16667
     6)     3.33333333E-01  1.66666667E-01  0.00000000E+00       0.33333
     7)     3.33333333E-01  3.33333333E-01  0.00000000E+00       0.05556

 Together with 24 symmetry operations and time-reversal symmetry 
 yields    36 points in the full Brillouin Zone.


 ==== Q-mesh for screening function ====
 Number of points in the irreducible wedge :     7
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.02778
     2)     1.66666667E-01  0.00000000E+00  0.00000000E+00       0.16667
     3)     3.33333333E-01  0.00000000E+00  0.00000000E+00       0.16667
     4)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.08333
     5)     1.66666667E-01  1.66666667E-01  0.00000000E+00       0.16667
     6)     3.33333333E-01  1.66666667E-01  0.00000000E+00       0.33333
     7)     3.33333333E-01  3.33333333E-01  0.00000000E+00       0.05556

 Together with 24 symmetry operations and time-reversal symmetry 
 yields    36 points in the full Brillouin Zone.


 setmesh: FFT mesh size selected  =  20x 20x216
          total number of points  =    86400

 ====================================
 ==== Info on PAW TABulated data ====
 ====================================

 
  ******************************
  **** Atom type    1 ****
  ******************************
  Number of (n,l) elements .......................    4
  Number of (l,m,n) elements .....................    8
  Number of (i,j) elements (packed form) .........   10
  Max L+1 leading to non-zero Gaunt ..............    3
  Max L+1 leading to non-zero Gaunt (pawlcutd) ...    3
  lmn2_size ......................................   36
  lmnmix_sz ......................................   36
  Size of radial mesh ............................  560
  No of Q-points for tcorespl and tvalespl ....... ****
  No of Q-points for the radial shape functions ..    0
  Radial shape function type .....................    3
  shape_lambda ...................................    0
  Use pseudized core density .....................    1
  Option for the use of hat density in XC terms ..    0
  Use LDA+U ......................................    0
  Use Local Exact exchange .......................    0
  Use potential zero .............................    0
  Has kij   ......................................    0
  Has tproj ......................................    0
  Has tvale ......................................    1
  Has vhtnzc .....................................    0
  Has vhnzc ......................................    0
  Has nabla ......................................    0
  Has shapefuncg .................................    0
  Has wvl ........................................    0
  beta ............................................ -4.37666339E+00
  1/q d(tNcore(q))/dq for q=0 ..................... -1.60338729E+00
  d^2(tNcore(q))/dq^2 for q=0 .....................  1.00000000E+00
  1/q d(tNvale(q))/dq for q=0 ..................... -1.90500531E+02
  XC energy for the core density .................. -3.47481452E+00
  Radius of the PAW sphere ........................  1.55000000E+00
  Compensation charge radius (if >rshp, g(r)=0) ...  1.55000000E+00

 k       eigenvalues [eV]
  1        -22.81 -10.91  -6.36  -6.36   0.06   0.65   0.75   1.30   1.61   2.62
             3.06   4.49   4.91   4.91   5.06   6.90   7.54   8.01   9.05   9.79
            10.51  13.13  14.00  16.93  18.02  19.07  21.14  22.53  24.75  24.75
            25.53  27.51  28.19  28.19  29.04
  2        -22.16 -10.14  -8.65  -7.48   0.95   1.56   1.65   2.20   2.52   3.52
             3.96   4.91   5.38   5.96   5.97   7.43   7.78   8.44  10.34  10.65
            11.41  13.94  14.89  17.52  18.88  19.87  20.63  21.68  22.34  23.17
            23.43  23.52  23.73  24.48  24.49
  3        -20.23 -12.94  -9.08  -7.94   1.54   3.58   4.27   4.33   4.37   4.91
             5.25   6.22   6.68   8.06   8.66  10.38  11.10  12.42  12.79  12.95
            14.05  14.37  15.21  15.54  15.63  16.22  16.45  16.96  17.47  17.88
            18.08  19.08  19.49  19.77  20.88
  4        -17.59 -16.53  -9.72  -5.69  -1.67   3.96   7.87   8.02   8.71   8.86
             8.86   8.89   9.30   9.43   9.76   9.78  10.53  10.75  11.14  11.17
            12.14  12.61  13.03  13.08  14.06  15.00  15.31  15.43  16.34  16.44
            17.66  17.87  18.18  18.19  19.13
  5        -20.87 -11.08  -9.72  -8.64   2.72   2.99   3.39   3.46   3.99   4.33
             5.31   5.76   6.61   7.15   7.77   8.10   9.49  10.23  12.13  13.17
            13.90  14.18  16.30  16.63  18.95  19.39  19.39  19.68  19.82  19.84
            20.09  20.21  20.52  20.75  20.81
  6        -18.39 -14.71 -11.35  -5.98  -0.84   6.19   6.63   6.94   7.03   7.50
             7.96   8.70   9.36   9.98  10.51  11.22  11.32  12.48  12.69  12.99
            13.11  13.62  13.71  13.82  14.65  15.03  16.14  16.50  16.54  16.85
            17.32  18.00  18.07  18.45  18.64
  7        -15.91 -15.91 -13.83  -3.34  -3.34   7.27   9.55   9.55  10.19  11.57
            11.57  11.59  11.60  11.60  11.85  12.12  12.12  12.14  12.14  12.39
            12.70  12.86  12.86  13.47  13.47  13.52  14.09  14.21  14.21  14.94
            15.31  15.31  16.04  16.14  16.14

 test on the normalization of the wavefunctions
 min sum_G |a(n,k,G)| =  0.999998
 max sum_G |a(n,k,G)| =  1.000001
 test on the orthogonalization of the wavefunctions (NB: this is not invariant for degenerate states)
- min sum_G a(n,k,G)a(n",k,G) =  0.000000
- max sum_G a(n,k,G)a(n",k,G) =  0.000001


 PAW TEST:
 ==== Compensation charge inside spheres ============
 The following values must be close...
 Compensation charge over spherical meshes =      0.455127298848754
 Compensation charge over fine fft grid    =      0.455127195982668


 Total number of electrons per unit cell =    8.0000 (Spherical mesh),    8.0000 (FFT mesh)
 average of density, n =  0.008975
 r_s =    2.9851
 omega_plasma =    9.1382 [eV]


 ==== Results concerning PAW augmentation regions ====
 
 Total pseudopotential strength Dij (hartree):
 Atom #  1
   0.52786   0.90628   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.90628   1.55439   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.12258   0.00000   0.00000  -0.15420   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.12100   0.00000   0.00000  -0.15242   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.12258   0.00000   0.00000  -0.15420
   0.00000   0.00000  -0.15420   0.00000   0.00000  -0.18754   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.15242   0.00000   0.00000  -0.18553   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.15420   0.00000   0.00000  -0.18754
 Atom #  2
   0.52786   0.90628   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.90628   1.55439   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.12258   0.00000   0.00000  -0.15420   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.12100   0.00000   0.00000  -0.15242   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.12258   0.00000   0.00000  -0.15420
   0.00000   0.00000  -0.15420   0.00000   0.00000  -0.18754   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.15242   0.00000   0.00000  -0.18553   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.15420   0.00000   0.00000  -0.18754
 
 
 Augmentation waves occupancies Rhoij:
 Atom #  1
   4.69720  -1.26367   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -1.26367   0.36757   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.19137   0.00000   0.00000  -0.12303   0.00000   0.00000
   0.00000   0.00000   0.00000   0.22092   0.00000   0.00000   0.16101   0.00000
   0.00000   0.00000   0.00000   0.00000   0.19137   0.00000   0.00000  -0.12303
   0.00000   0.00000  -0.12303   0.00000   0.00000   1.04099   0.00000   0.00000
   0.00000   0.00000   0.00000   0.16101   0.00000   0.00000   0.28036   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.12303   0.00000   0.00000   1.04099
 Atom #  2
   4.69720  -1.26367   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -1.26367   0.36757   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.19137   0.00000   0.00000  -0.12303   0.00000   0.00000
   0.00000   0.00000   0.00000   0.22092   0.00000   0.00000   0.16101   0.00000
   0.00000   0.00000   0.00000   0.00000   0.19137   0.00000   0.00000  -0.12303
   0.00000   0.00000  -0.12303   0.00000   0.00000   1.04099   0.00000   0.00000
   0.00000   0.00000   0.00000   0.16101   0.00000   0.00000   0.28036   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.12303   0.00000   0.00000   1.04099
 
 
 SIGMA fundamental parameters:
 PLASMON POLE MODEL  1
 number of plane-waves for SigmaX                 5279
 number of plane-waves for SigmaC and W           1911
 number of plane-waves for wavefunctions          5279
 number of bands                                    35
 number of independent spin polarizations            1
 number of spinorial components                      1
 number of k-points in IBZ                           7
 number of q-points in IBZ                           7
 number of symmetry operations                      24
 number of k-points in BZ                           36
 number of q-points in BZ                           36
 number of frequencies for dSigma/dE                 9
 frequency step for dSigma/dE [eV]                0.25
 number of omega for Sigma on real axis              0
 max omega for Sigma on real axis  [eV]           0.00
 zcut for avoiding poles [eV]                     0.10

 EPSILON^-1 parameters (SCR file):
 dimension of the eps^-1 matrix on file           1911
 dimension of the eps^-1 matrix used              1911
 number of plane-waves for wavefunctions          5279
 number of bands                                    35
 number of q-points in IBZ                           7
 number of frequencies                               2
 number of real frequencies                          1
 number of imag frequencies                          1

 matrix elements of self-energy operator (all in [eV])

 Perturbative Calculation

 k =    0.000   0.000   0.000
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    4  -6.359 -17.258 -21.116   3.194   0.818  -0.223 -17.801  -0.543  -6.902
    5   0.059  -3.105  -0.913  -1.560   0.915  -0.093  -2.527   0.578   0.637

 E^0_gap          6.418
 E^GW_gap         7.540
 DeltaE^GW_gap    1.121


 k =    0.333   0.333   0.000
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    4  -3.343 -13.935 -14.400   0.163   0.816  -0.226 -14.182  -0.246  -3.590
    5  -3.343 -13.935 -10.382  -0.780   0.816  -0.225 -11.672   2.263  -1.080

 k =    0.333   0.667   0.000
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    4  -7.938 -13.164 -16.825   2.622   0.791  -0.265 -13.985  -0.821  -8.759
    5   1.539 -13.978  -7.496  -3.164   0.799  -0.252 -11.328   2.650   4.188

 E^0_gap          9.477
 E^GW_gap        12.947
 DeltaE^GW_gap    3.470


== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      4.6669205060E+00  4.6669205060E+00  4.7258979210E+01 Bohr
              amu      1.20110000E+01
             bdgw3          4       5       4       5       4       5
      chksymbreak           0
             ecut1     2.50000000E+01 Hartree
             ecut2     2.49480214E+01 Hartree
             ecut3     2.49480214E+01 Hartree
          ecuteps1     0.00000000E+00 Hartree
          ecuteps2     1.23691700E+01 Hartree
          ecuteps3     0.00000000E+00 Hartree
         ecutsigx1     0.00000000E+00 Hartree
         ecutsigx2     0.00000000E+00 Hartree
         ecutsigx3     2.49480214E+01 Hartree
          ecutwfn1     0.00000000E+00 Hartree
          ecutwfn2     2.49480214E+01 Hartree
          ecutwfn3     2.49480214E+01 Hartree
           etotal1    -1.1493594725E+01
           etotal2     0.0000000000E+00
           etotal3     0.0000000000E+00
            fcart1     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            fcart2     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            fcart3     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           getkss1          0
           getkss2         -1
           getkss3         -2
           getscr1          0
           getscr2          0
           getscr3         -1
           getwfk          -1
           istwfk        1    0    0    1    0    0    0
              ixc          11
           jdtset        1    2    3
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.66666667E-01  0.00000000E+00  0.00000000E+00
                       3.33333333E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       1.66666667E-01  1.66666667E-01  0.00000000E+00
                       3.33333333E-01  1.66666667E-01  0.00000000E+00
                       3.33333333E-01  3.33333333E-01  0.00000000E+00
            kptgw3     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       3.33333333E-01  3.33333333E-01  0.00000000E+00
                       3.33333333E-01  6.66666667E-01  0.00000000E+00
         kptrlatt        6    0    0      0    6    0      0    0    1
          kptrlen      2.80015230E+01
          kssform1          3
          kssform2          1
          kssform3          1
P           mkmem           2
            natom           2
            nband          35
         nbandkss1         -1
         nbandkss2          0
         nbandkss3          0
           ndtset           3
            ngfft          24      24     216
          ngfftdg          30      30     320
             nkpt           7
           nkptgw1          0
           nkptgw2          0
           nkptgw3          3
-           npkpt1          4
-           npkpt2          1
-           npkpt3          1
           npweps1          0
           npweps2       1911
           npweps3          0
          npwsigx1          0
          npwsigx2          0
          npwsigx3       5279
           npwwfn1          0
           npwwfn2       5279
           npwwfn3       5279
           nsheps1          0
           nsheps2        172
           nsheps3          0
          nshsigx1          0
          nshsigx2          0
          nshsigx3        398
            nstep         100
             nsym          24
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
        optdriver1          0
        optdriver2          3
        optdriver3          4
       paral_atom1          1
       paral_atom2          0
       paral_atom3          0
        pawecutdg      5.00000000E+01 Hartree
           ppmfrq1     0.00000000E+00 Hartree
           ppmfrq2     1.83746627E+00 Hartree
           ppmfrq3     0.00000000E+00 Hartree
            rprim      1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                      -5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                       6.1232339957E-17  1.0605752387E-16  1.0000000000E+00
          spgroup         191
           strten1    -1.2794811099E-06 -1.2794811099E-06 -7.1087990037E-06
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten2     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten3     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
        symmorphi           0
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       1  1  0  -1  0  0   0  0  1      -1 -1  0   1  0  0   0  0 -1
                      -1  0  0   1  1  0   0  0  1       1  0  0  -1 -1  0   0  0 -1
                       0  1  0  -1 -1  0   0  0  1       0 -1  0   1  1  0   0  0 -1
                      -1 -1  0   0  1  0   0  0  1       1  1  0   0 -1  0   0  0 -1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                      -1 -1  0   1  0  0   0  0  1       1  1  0  -1  0  0   0  0 -1
                       1  0  0  -1 -1  0   0  0  1      -1  0  0   1  1  0   0  0 -1
                       0 -1  0   1  1  0   0  0  1       0  1  0  -1 -1  0   0  0 -1
                       1  1  0   0 -1  0   0  0  1      -1 -1  0   0  1  0   0  0 -1
           toldfe      1.00000000E-06 Hartree
            typat      1  1
           useylm           1
              wtk        0.02778    0.16667    0.16667    0.08333    0.16667    0.33333
                         0.05556
           xangst      4.7000377687E-16  1.4258403710E+00  0.0000000000E+00
                       1.2348139830E+00  7.1292018551E-01  0.0000000000E+00
            xcart      8.8817841970E-16  2.6944478104E+00  0.0000000000E+00
                       2.3334602530E+00  1.3472239052E+00  0.0000000000E+00
             xred      3.3333333333E-01  6.6666666667E-01  0.0000000000E+00
                       6.6666666667E-01  3.3333333333E-01  0.0000000000E+00
            znucl        6.00000

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

 [1] Implementation of the Projector Augmented-Wave Method in the ABINIT code.
 M. Torrent, F. Jollet, F. Bottin, G. Zerah, and X. Gonze Comput. Mat. Science 42, 337, (2008).
 Comment : PAW calculations. Strong suggestion to cite this paper.

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
- Proc.   0 individual time (sec): cpu=       1565.0  wall=       1571.8

================================================================================

 Calculation completed.
.Delivered    3 WARNINGs and   0 COMMENTs to log file.
+Overall time at end (sec) : cpu=       6266.3  wall=       6287.2
