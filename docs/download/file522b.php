
.Version 6.10.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel11.1 computer) 

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

.Starting date : Thu  1 Dec 2011.
- ( at 10h23 )
  
- input  file    -> bismuth.in
- output file    -> bismuth.outC
- root for input  files -> bismuthi
- root for output files -> bismutho


 Symmetries : space group P3 (#143); Bravais hP (primitive hexag.)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         1  ionmov =         2    iscf =         7 xclevel =         1
  lmnmax =         9   lnmax =         9   mband =        48  mffmem =         1
P  mgfft =       144   mkmem =         1 mpssoang=         5     mpw =      8192
  mqgrid =      6974   natom =         9    nfft =    746496    nkpt =         2
  nloalg =         4  nspden =         4 nspinor =         2  nsppol =         1
    nsym =         3  n1xccc =         0  ntypat =         2  occopt =         7
================================================================================
P This job should need less than                     681.784 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :     12.002 Mbytes ; DEN or POT disk file :      5.697 Mbytes.
================================================================================

--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =401 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =    8
-
 -outvars: echo values of preprocessed input variables --------
        accesswff           1
            acell      9.2336153342E+00  9.2336153342E+00  2.0000000000E+01 Bohr
              amu      1.20110000E+01  2.08980370E+02
             ecut      6.00000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
      fft_opt_lob           2
            intxc           1
           ionmov           2
           iprcch           6
           istwfk        1    1
              kpt      5.00000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  0.00000000E+00
          kptrlen      1.84672307E+01
           kptopt           4
         kptrlatt      2  0  0  -2  2  0   0  0  1
P           mkmem           1
            natom           9
            nband          48
            ngfft          72      72     144
             nkpt           2
           npband           4
            npkpt           2
           nspden           4
          nspinor           2
            nstep           0
             nsym           3
            ntime          10
           ntypat           2
              occ      1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
           occopt           7
           ortalg          -2
        paral_kgb           1
            rprim      0.0000000000E+00  1.0000000000E+00  0.0000000000E+00
                       8.6602540378E-01  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00 -1.0000000000E+00
          spgroup         143
           symrel      1  0  0   0  1  0   0  0  1      -1  1  0  -1  0  0   0  0  1
                       0 -1  0   1 -1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000
           tolvrs      1.00000000E-14
           tsmear      1.00000000E-03 Hartree
            typat      1  1  1  1  2  1  1  1  1
         wfoptalg          14
              wtk        0.75000    0.25000
           xangst      7.0532112639E-01  1.2216519802E+00 -2.2208838927E-01
                       2.8209473860E+00  2.4431094170E+00 -2.2208838927E-01
                       7.0532108627E-01  3.6645667844E+00 -2.2208838927E-01
                       2.8210597324E+00  4.8862187878E+00 -2.0959287021E-01
                       2.8210597324E+00  4.8862187878E+00  2.9715385386E+00
                       1.4105298662E+00  2.4431093938E+00 -2.2100655081E-01
                       3.5274093059E+00  3.6627854937E+00 -2.1918878999E-01
                       1.4083606332E+00  4.8862187602E+00 -2.1918878999E-01
                       3.5274092582E+00  6.1096521094E+00 -2.1918878999E-01
            xcart      1.3328637646E+00  2.3085876723E+00 -4.1968623302E-01
                       5.3308179948E+00  4.6168077109E+00 -4.1968623302E-01
                       1.3328636888E+00  6.9250276181E+00 -4.1968623302E-01
                       5.3310302988E+00  9.2336153342E+00 -3.9607312410E-01
                       5.3310302988E+00  9.2336153342E+00  5.6153940312E+00
                       2.6655151494E+00  4.6168076671E+00 -4.1764185460E-01
                       6.6658375468E+00  6.9216614665E+00 -4.1420678448E-01
                       2.6614158930E+00  9.2336152821E+00 -4.1420678448E-01
                       6.6658374566E+00  1.1545569254E+01 -4.1420678448E-01
             xred      1.6667993666E-01  1.6667994614E-01  2.0984311651E-02
                       1.6667994614E-01  6.6664011720E-01  2.0984311651E-02
                       6.6664011720E-01  1.6667993666E-01  2.0984311651E-02
                       6.6666666667E-01  6.6666666667E-01  1.9803656205E-02
                       6.6666666667E-01  6.6666666667E-01 -2.8076970156E-01
                       3.3333333333E-01  3.3333333333E-01  2.0882092730E-02
                       3.3282070492E-01  8.3358965318E-01  2.0710339224E-02
                       8.3358964190E-01  3.3282070492E-01  2.0710339224E-02
                       8.3358965318E-01  8.3358964190E-01  2.0710339224E-02
            znucl        6.00000   83.00000

================================================================================

 chkinp: Checking input parameters for consistency.

================================================================================
== DATASET  1 ==================================================================

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  9.2336153  0.0000000  G(1)= -0.0625270  0.1082999  0.0000000
 R(2)=  7.9965454  4.6168077  0.0000000  G(2)=  0.1250540  0.0000000  0.0000000
 R(3)=  0.0000000  0.0000000-20.0000000  G(3)=  0.0000000  0.0000000 -0.0500000
 Unit cell volume ucvol=  1.4767405E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  72 144
         ecut(hartree)=     60.000   => boxcut(ratio)=   2.06487

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is ../../../../Pseudos/6c.4.hgh
- pspatm: opening atomic psp file    ../../../../Pseudos/6c.4.hgh
 Hartwigsen-Goedecker-Hutter psp for C,  from PRB58, 3641 (1998)
-  6.00000   4.00000     10605                znucl, zion, pspdat
    3    1    1    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.3488300
 cc1 =  -8.5137710; cc2 =   1.2284320; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.3045530; h11s=   9.5228420; h22s=   0.0000000; h33s=   0.0000000
 rrp =   0.2326770; h11p=   0.0000000; h22p=   0.0000000; h33p=   0.0000000
                    k11p=   0.0041040; k22p=   0.0000000; k33p=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   -0.16969744
         --- l  ekb(1:nproj) -->
             0    0.953587
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is ../../../../Pseudos/83bi.5.hgh
- pspatm: opening atomic psp file    ../../../../Pseudos/83bi.5.hgh
 Hartwigsen-Goedecker-Hutter psp for Bi,  from PRB58, 3641 (1998)
- 83.00000   5.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.6050000
 cc1 =   6.6794370; cc2 =   0.0000000; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.6788580; h11s=   1.3776340; h22s=  -0.5136970; h33s=  -0.4710280
 rrp =   0.7986730; h11p=   0.6555780; h22p=  -0.4029320; h33p=   0.0000000
                    k11p=   0.3053140; k22p=  -0.0231340; k33p=   0.0000000
 rrd =   0.9346830; h11d=   0.3784760; h22d=   0.0000000; h33d=   0.0000000
                    k11d=   0.0292170; k22d=   0.0000000; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   34.79471556
         --- l  ekb(1:nproj) -->
             0   -0.901401   -0.217891    1.555038
             1   -0.989901    1.571994
             2    3.344673
  spin-orbit 1   -0.053970    0.704109
  spin-orbit 2    0.258197
 pspatm: atomic psp has been read  and splines computed

   1.23717403E+03                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating     48 bands with npw=    8192 for ikpt=   1 by node    0
P newkpt: treating     48 bands with npw=    8187 for ikpt=   2 by node    1
 
 setup2: Arith. and geom. avg. npw (full set) are    8190.750    8190.750

================================================================================

=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================

--- Iteration: ( 1/10) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
