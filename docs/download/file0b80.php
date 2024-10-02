
.Version 7.10.5 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel16.0 computer) 

.Copyright (C) 1998-2014 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Mon  5 Dec 2016.
- ( at 13h26 )
  
- input  file    -> abinit.in
- output file    -> abinit.out
- root for input  files -> abi
- root for output files -> abo
 
 
 Symmetries : space group Fm -3 m (#225); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         2    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =         6  mffmem =         1
P  mgfft =        45   mkmem =        57 mpssoang=         4     mpw =      3146
  mqgrid =      3001   natom =         1    nfft =     91125    nkpt =       455
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         0  ntypat =         1  occopt =         6
================================================================================
P This job should need less than                      47.590 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    131.053 Mbytes ; DEN or POT disk file :      0.697 Mbytes.
================================================================================
 
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.8897261329E+00  1.8897261329E+00  1.8897261329E+00 Bohr
              amu      2.69815390E+01
        autoparal           1
          dilatmx      1.80000000E+00
        dosdeltae      1.83746627E-03 Hartree
             ecut      2.20495952E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           enunit           1
-          fftalg         312
           ionmov           2
           istwfk        2    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                       outvar_i_n : Printing only first  50 k-points.
              ixc     -263267
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       4.00000000E-02  0.00000000E+00  0.00000000E+00
                       8.00000000E-02  0.00000000E+00  0.00000000E+00
                       1.20000000E-01  0.00000000E+00  0.00000000E+00
                       1.60000000E-01  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.40000000E-01  0.00000000E+00  0.00000000E+00
                       2.80000000E-01  0.00000000E+00  0.00000000E+00
                       3.20000000E-01  0.00000000E+00  0.00000000E+00
                       3.60000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.40000000E-01  0.00000000E+00  0.00000000E+00
                       4.80000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-02  4.00000000E-02  0.00000000E+00
                       8.00000000E-02  4.00000000E-02  0.00000000E+00
                       1.20000000E-01  4.00000000E-02  0.00000000E+00
                       1.60000000E-01  4.00000000E-02  0.00000000E+00
                       2.00000000E-01  4.00000000E-02  0.00000000E+00
                       2.40000000E-01  4.00000000E-02  0.00000000E+00
                       2.80000000E-01  4.00000000E-02  0.00000000E+00
                       3.20000000E-01  4.00000000E-02  0.00000000E+00
                       3.60000000E-01  4.00000000E-02  0.00000000E+00
                       4.00000000E-01  4.00000000E-02  0.00000000E+00
                       4.40000000E-01  4.00000000E-02  0.00000000E+00
                       4.80000000E-01  4.00000000E-02  0.00000000E+00
                      -4.80000000E-01  4.00000000E-02  0.00000000E+00
                      -4.40000000E-01  4.00000000E-02  0.00000000E+00
                      -4.00000000E-01  4.00000000E-02  0.00000000E+00
                      -3.60000000E-01  4.00000000E-02  0.00000000E+00
                      -3.20000000E-01  4.00000000E-02  0.00000000E+00
                      -2.80000000E-01  4.00000000E-02  0.00000000E+00
                      -2.40000000E-01  4.00000000E-02  0.00000000E+00
                      -2.00000000E-01  4.00000000E-02  0.00000000E+00
                      -1.60000000E-01  4.00000000E-02  0.00000000E+00
                      -1.20000000E-01  4.00000000E-02  0.00000000E+00
                      -8.00000000E-02  4.00000000E-02  0.00000000E+00
                      -4.00000000E-02  4.00000000E-02  0.00000000E+00
                       8.00000000E-02  8.00000000E-02  0.00000000E+00
                       1.20000000E-01  8.00000000E-02  0.00000000E+00
                       1.60000000E-01  8.00000000E-02  0.00000000E+00
                       2.00000000E-01  8.00000000E-02  0.00000000E+00
                       2.40000000E-01  8.00000000E-02  0.00000000E+00
                       2.80000000E-01  8.00000000E-02  0.00000000E+00
                       3.20000000E-01  8.00000000E-02  0.00000000E+00
                       3.60000000E-01  8.00000000E-02  0.00000000E+00
                       4.00000000E-01  8.00000000E-02  0.00000000E+00
                       4.40000000E-01  8.00000000E-02  0.00000000E+00
                       4.80000000E-01  8.00000000E-02  0.00000000E+00
                      -4.80000000E-01  8.00000000E-02  0.00000000E+00
                      -4.40000000E-01  8.00000000E-02  0.00000000E+00
                       outvar_i_n : Printing only first  50 k-points.
         kptrlatt       25    0    0      0   25    0      0    0   25
          kptrlen      1.33790846E+02
P           mkmem          57
            natom           1
            nband           6
            ngfft          45      45      45
             nkpt         455
-           npkpt           8
            nstep          50
             nsym          48
            ntime          30
           ntypat           1
              occ      2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       prtocc : prtvol=0, do not print more k-points.
           occopt           6
          optcell           1
           prtden           0
           prtdos           2
        prtposcar           1
            prtwf           0
            rprim      0.0000000000E+00  2.0025000000E+00  2.0025000000E+00
                       2.0025000000E+00  0.0000000000E+00  2.0025000000E+00
                       2.0025000000E+00  2.0025000000E+00  0.0000000000E+00
          spgroup         225
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                       0 -1  1   0 -1  0   1 -1  0       0  1 -1   0  1  0  -1  1  0
                      -1  0  0  -1  0  1  -1  1  0       1  0  0   1  0 -1   1 -1  0
                       0  1 -1   1  0 -1   0  0 -1       0 -1  1  -1  0  1   0  0  1
                      -1  0  0  -1  1  0  -1  0  1       1  0  0   1 -1  0   1  0 -1
                       0 -1  1   1 -1  0   0 -1  0       0  1 -1  -1  1  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                       0  1 -1   0  0 -1   1  0 -1       0 -1  1   0  0  1  -1  0  1
                      -1  0  1  -1  1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
                       0 -1  0   1 -1  0   0 -1  1       0  1  0  -1  1  0   0  1 -1
                       1  0 -1   0  0 -1   0  1 -1      -1  0  1   0  0  1   0 -1  1
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       1  0 -1   0  1 -1   0  0 -1      -1  0  1   0 -1  1   0  0  1
                       0 -1  0   0 -1  1   1 -1  0       0  1  0   0  1 -1  -1  1  0
                      -1  0  1  -1  0  0  -1  1  0       1  0 -1   1  0  0   1 -1  0
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0  0 -1   0  1 -1   1  0 -1       0  0  1   0 -1  1  -1  0  1
                       1 -1  0   0 -1  1   0 -1  0      -1  1  0   0  1 -1   0  1  0
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                      -1  1  0  -1  0  0  -1  0  1       1 -1  0   1  0  0   1  0 -1
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       1 -1  0   0 -1  0   0 -1  1      -1  1  0   0  1  0   0  1 -1
                       0  0 -1   1  0 -1   0  1 -1       0  0  1  -1  0  1   0 -1  1
                      -1  1  0  -1  0  1  -1  0  0       1 -1  0   1  0 -1   1  0  0
           toldfe      3.67493254E-08 Hartree
           tolmxf      1.00000000E-08
           tsmear      7.34986508E-03 Hartree
            typat      1
          usekden           1
              wtk        0.00006    0.00051    0.00051    0.00051    0.00051    0.00051
                         0.00051    0.00051    0.00051    0.00051    0.00051    0.00051
                         0.00051    0.00038    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00077    0.00038    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154
                       outvars : Printing only first  50 k-points.
            znucl       13.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency.
 
================================================================================
== DATASET  1 ==================================================================
-   nproc =    8
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  3.7841766  3.7841766  G(1)= -0.1321291  0.1321291  0.1321291
 R(2)=  3.7841766  0.0000000  3.7841766  G(2)=  0.1321291 -0.1321291  0.1321291
 R(3)=  3.7841766  3.7841766  0.0000000  G(3)=  0.1321291  0.1321291 -0.1321291
 Unit cell volume ucvol=  1.0837876E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     71.441   => boxcut(ratio)=   2.16087
 
--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is 13-Al.GGA.fhi
- pspatm: opening atomic psp file    13-Al.GGA.fhi
- aluminium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
- 13.00000   3.00000     21003                znucl, zion, pspdat
    6   11    3    2       493   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   -2.68844188
         --- l  ekb(1:nproj) -->
             0    2.856913
             1    1.400534
             3   -1.215994
 pspatm: atomic psp has been read  and splines computed
 
  -8.06532564E+00                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------
 
P newkpt: treating      6 bands with npw=    1560 for ikpt=   1 by node    0
P newkpt: treating      6 bands with npw=    3125 for ikpt=   2 by node    0
P newkpt: treating      6 bands with npw=    3125 for ikpt=   3 by node    0
P newkpt: treating      6 bands with npw=    3119 for ikpt=   4 by node    0
P newkpt: treating      6 bands with npw=    3119 for ikpt=   5 by node    0
P newkpt: treating      6 bands with npw=    3116 for ikpt=   6 by node    0
P newkpt: treating      6 bands with npw=    3119 for ikpt=   7 by node    0
P newkpt: treating      6 bands with npw=    3125 for ikpt=   8 by node    0
P newkpt: treating      6 bands with npw=    3124 for ikpt=   9 by node    0
P newkpt: treating      6 bands with npw=    3124 for ikpt=  10 by node    0
P newkpt: treating      6 bands with npw=    3121 for ikpt=  11 by node    0
P newkpt: treating      6 bands with npw=    3133 for ikpt=  12 by node    0
P newkpt: treating      6 bands with npw=    3139 for ikpt=  13 by node    0
P newkpt: treating      6 bands with npw=    3127 for ikpt=  14 by node    0
P newkpt: treating      6 bands with npw=    3124 for ikpt=  15 by node    0
P newkpt: treating      6 bands with npw=    3127 for ikpt=  16 by node    0
P newkpt: treating      6 bands with npw=    3118 for ikpt=  17 by node    0
P newkpt: treating      6 bands with npw=    3117 for ikpt=  18 by node    0
P newkpt: treating      6 bands with npw=    3121 for ikpt=  19 by node    0
P newkpt: treating      6 bands with npw=    3116 for ikpt=  20 by node    0
P newkpt: treating      6 bands with npw=    3122 for ikpt=  21 by node    0
P newkpt: treating      6 bands with npw=    3127 for ikpt=  22 by node    0
P newkpt: treating      6 bands with npw=    3119 for ikpt=  23 by node    0
P newkpt: treating      6 bands with npw=    3128 for ikpt=  24 by node    0
P newkpt: treating      6 bands with npw=    3132 for ikpt=  25 by node    0
P newkpt: treating      6 bands with npw=    3133 for ikpt=  26 by node    0
P newkpt: treating      6 bands with npw=    3131 for ikpt=  27 by node    0
P newkpt: treating      6 bands with npw=    3129 for ikpt=  28 by node    0
P newkpt: treating      6 bands with npw=    3124 for ikpt=  29 by node    0
P newkpt: treating      6 bands with npw=    3116 for ikpt=  30 by node    0
P newkpt: treating      6 bands with npw=    3123 for ikpt=  31 by node    0
P newkpt: treating      6 bands with npw=    3128 for ikpt=  32 by node    0
P newkpt: treating      6 bands with npw=    3123 for ikpt=  33 by node    0
P newkpt: treating      6 bands with npw=    3118 for ikpt=  34 by node    0
P newkpt: treating      6 bands with npw=    3118 for ikpt=  35 by node    0
P newkpt: treating      6 bands with npw=    3131 for ikpt=  36 by node    0
P newkpt: treating      6 bands with npw=    3129 for ikpt=  37 by node    0
P newkpt: treating      6 bands with npw=    3123 for ikpt=  38 by node    0
P newkpt: treating      6 bands with npw=    3126 for ikpt=  39 by node    0
P newkpt: treating      6 bands with npw=    3129 for ikpt=  40 by node    0
P newkpt: treating      6 bands with npw=    3119 for ikpt=  41 by node    0
P newkpt: treating      6 bands with npw=    3126 for ikpt=  42 by node    0
P newkpt: treating      6 bands with npw=    3125 for ikpt=  43 by node    0
P newkpt: treating      6 bands with npw=    3114 for ikpt=  44 by node    0
P newkpt: treating      6 bands with npw=    3115 for ikpt=  45 by node    0
P newkpt: treating      6 bands with npw=    3116 for ikpt=  46 by node    0
P newkpt: treating      6 bands with npw=    3130 for ikpt=  47 by node    0
P newkpt: treating      6 bands with npw=    3128 for ikpt=  48 by node    0
P newkpt: treating      6 bands with npw=    3131 for ikpt=  49 by node    0
P newkpt: treating      6 bands with npw=    3132 for ikpt=  50 by node    0
 newkpt: prtvol=0 or 1, do not print more k-points.
 
_setup2: Arith. and geom. avg. npw (full set) are    3125.823    3125.816
 
================================================================================
 
=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================
 
--- Iteration: ( 1/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -2.0670471037127    -2.067E+00 3.095E-02 1.659E+02
 ETOT  2  -2.0698443961822    -2.797E-03 5.761E-03 4.574E+01
 ETOT  3  -2.0698907776368    -4.638E-05 1.041E-03 5.529E+00
 ETOT  4  -2.0699020356632    -1.126E-05 4.983E-04 2.938E-01
 ETOT  5  -2.0699026295599    -5.939E-07 6.790E-04 1.705E-02
 ETOT  6  -2.0699027134081    -8.385E-08 7.178E-04 5.322E-04
 ETOT  7  -2.0699027213879    -7.980E-09 7.325E-04 5.576E-05
 ETOT  8  -2.0699027225736    -1.186E-09 3.973E-04 6.112E-06
 
 At SCF step    8, etot is converged : 
  for the second time, diff in etot=  1.186E-09 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.58733246E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.58733246E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.58733246E-04  sigma(2 1)=  0.00000000E+00
 
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.88972613288564E+00  1.88972613288564E+00  1.88972613288564E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.78417658110350E+00  3.78417658110350E+00
  3.78417658110350E+00  0.00000000000000E+00  3.78417658110350E+00
  3.78417658110350E+00  3.78417658110350E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.08378759740405E+02
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.35163384341122E+00  5.35163384341122E+00  5.35163384341122E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  4.58733246359845E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  4.58733246359845E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  4.58733246359845E-04
 Total energy (etotal) [Ha]= -2.06990272257357E+00
 
--- Iteration: ( 2/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -2.0693363518821    -2.069E+00 2.474E-03 3.122E+01
 ETOT  2  -2.0693469896727    -1.064E-05 2.759E-03 1.569E-01
 ETOT  3  -2.0693483356153    -1.346E-06 1.895E-04 4.384E-02
 ETOT  4  -2.0693485403450    -2.047E-07 1.923E-03 3.843E-03
 ETOT  5  -2.0693485829053    -4.256E-08 1.254E-04 1.283E-04
 ETOT  6  -2.0693485862246    -3.319E-09 1.143E-03 2.575E-05
 ETOT  7  -2.0693485866614    -4.368E-10 6.991E-05 1.826E-06
 
 At SCF step    7, etot is converged : 
  for the second time, diff in etot=  4.368E-10 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.79493580E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.79493580E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  3.79493580E-04  sigma(2 1)=  0.00000000E+00
 
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.86371972677555E+00  1.86371972677555E+00  1.86371972677555E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.73209875286805E+00  3.73209875286805E+00
  3.73209875286805E+00  0.00000000000000E+00  3.73209875286805E+00
  3.73209875286805E+00  3.73209875286805E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.03965531029765E+02
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.27798467242170E+00  5.27798467242170E+00  5.27798467242170E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  3.79493580095109E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.79493580095109E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  3.79493580095109E-04
 Total energy (etotal) [Ha]= -2.06934858666141E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 5.54136E-04
           Relative     = 2.67747E-04
 
--- Iteration: ( 3/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -2.0605990026786    -2.061E+00 8.636E+00 2.491E+02
 ETOT  2  -2.0606885498093    -8.955E-05 1.166E+00 1.672E+00
 ETOT  3  -2.0606989033215    -1.035E-05 3.564E-01 3.881E-01
 ETOT  4  -2.0607007072262    -1.804E-06 6.488E-02 7.937E-03
 ETOT  5  -2.0607009605600    -2.533E-07 7.455E-04 6.046E-03
 ETOT  6  -2.0607009977810    -3.722E-08 2.340E-03 3.444E-05
 ETOT  7  -2.0607010039562    -6.175E-09 8.702E-05 7.379E-05
 ETOT  8  -2.0607010045171    -5.610E-10 5.662E-04 8.042E-07
 
 At SCF step    8, etot is converged : 
  for the second time, diff in etot=  5.610E-10 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.42223448E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -2.42223448E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.42223448E-04  sigma(2 1)=  0.00000000E+00
 
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.76373975878127E+00  1.76373975878127E+00  1.76373975878127E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.53188886695950E+00  3.53188886695950E+00
  3.53188886695950E+00  0.00000000000000E+00  3.53188886695950E+00
  3.53188886695950E+00  3.53188886695950E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  8.81152514736457E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  4.99484513644867E+00  4.99484513644867E+00  4.99484513644867E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -2.42223447969212E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -2.42223447969213E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -2.42223447969213E-04
 Total energy (etotal) [Ha]= -2.06070100451712E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 8.64758E-03
           Relative     = 4.18764E-03
 
--- Iteration: ( 4/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -2.0651120788454    -2.065E+00 4.736E-05 3.861E+01
 ETOT  2  -2.0651231537224    -1.107E-05 8.498E-06 2.710E-01
 ETOT  3  -2.0651243057363    -1.152E-06 3.273E-06 3.157E-02
 ETOT  4  -2.0651244965143    -1.908E-07 4.900E-06 9.844E-04
 ETOT  5  -2.0651245206248    -2.411E-08 2.087E-06 2.044E-04
 ETOT  6  -2.0651245232032    -2.578E-09 5.255E-06 7.207E-06
 
 At SCF step    6, etot is converged : 
  for the second time, diff in etot=  2.578E-09 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.98632420E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.98632420E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  3.98632420E-05  sigma(2 1)=  0.00000000E+00
 
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79883855082566E+00  1.79883855082566E+00  1.79883855082566E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.60217419802839E+00  3.60217419802839E+00
  3.60217419802839E+00  0.00000000000000E+00  3.60217419802839E+00
  3.60217419802839E+00  3.60217419802839E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.34811677654040E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.09424360488218E+00  5.09424360488218E+00  5.09424360488218E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  3.98632419913781E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.98632419913787E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  3.98632419913783E-05
 Total energy (etotal) [Ha]= -2.06512452320318E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)=-4.42352E-03
           Relative     =-2.14431E-03
 
--- Iteration: ( 5/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -2.0645735058847    -2.065E+00 6.040E-04 9.470E-01
 ETOT  2  -2.0645737402344    -2.343E-07 1.330E-03 5.467E-03
 ETOT  3  -2.0645737666417    -2.641E-08 7.628E-04 7.984E-04
 ETOT  4  -2.0645737709897    -4.348E-09 2.718E-03 2.070E-05
 
 At SCF step    4, etot is converged : 
  for the second time, diff in etot=  4.348E-09 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.85488734E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  2.85488734E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.85488734E-06  sigma(2 1)=  0.00000000E+00
 
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79362139454971E+00  1.79362139454971E+00  1.79362139454971E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59172684258579E+00  3.59172684258579E+00
  3.59172684258579E+00  0.00000000000000E+00  3.59172684258579E+00
  3.59172684258579E+00  3.59172684258579E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26701565618417E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07946881312431E+00  5.07946881312431E+00  5.07946881312431E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  2.85488734054007E-06  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  2.85488734054018E-06  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.85488734054007E-06
 Total energy (etotal) [Ha]= -2.06457377098974E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 5.50752E-04
           Relative     = 2.66728E-04
 
--- Iteration: ( 6/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -2.0645302214626    -2.065E+00 1.745E-02 5.859E-03
 ETOT  2  -2.0645302235402    -2.078E-09 2.344E-02 5.803E-05
 ETOT  3  -2.0645302238229    -2.826E-10 6.697E-03 7.771E-06
 
 At SCF step    3, etot is converged : 
  for the second time, diff in etot=  2.826E-10 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.57310083E-07  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.57310083E-07  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.57310083E-07  sigma(2 1)=  0.00000000E+00
 
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79322269269637E+00  1.79322269269637E+00  1.79322269269637E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59092844212449E+00  3.59092844212449E+00
  3.59092844212449E+00  0.00000000000000E+00  3.59092844212449E+00
  3.59092844212449E+00  3.59092844212449E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26083716988511E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07833970436374E+00  5.07833970436374E+00  5.07833970436374E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.57310082602911E-07  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.57310082603019E-07  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.57310082602043E-07
 Total energy (etotal) [Ha]= -2.06453022382287E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 4.35472E-05
           Relative     = 2.10928E-05
 
--- Iteration: ( 7/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -2.0645325018318    -2.065E+00 4.294E-03 2.310E-05
 ETOT  2  -2.0645325018600    -2.814E-11 2.485E-03 1.101E-06
 ETOT  3  -2.0645325018652    -5.220E-12 7.676E-03 6.759E-08
 
 At SCF step    3, etot is converged : 
  for the second time, diff in etot=  5.220E-12 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.03307795E-08  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.03307795E-08  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  3.03307795E-08  sigma(2 1)=  0.00000000E+00
 
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79324350148766E+00  1.79324350148766E+00  1.79324350148766E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59097011172904E+00  3.59097011172904E+00
  3.59097011172904E+00  0.00000000000000E+00  3.59097011172904E+00
  3.59097011172904E+00  3.59097011172904E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26115956553315E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07839863408364E+00  5.07839863408364E+00  5.07839863408364E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  3.03307795482136E-08  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.03307795482136E-08  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  3.03307795484304E-08
 Total energy (etotal) [Ha]= -2.06453250186520E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)=-2.27804E-06
           Relative     =-1.10342E-06
 
--- Iteration: ( 8/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -2.0645321336737    -2.065E+00 3.962E-03 5.523E-07
 ETOT  2  -2.0645321336742    -5.560E-13 1.914E-03 1.998E-08
 ETOT  3  -2.0645321336744    -1.421E-13 2.925E-04 1.604E-09
 
 At SCF step    3, etot is converged : 
  for the second time, diff in etot=  1.421E-13 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.37627939E-09  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.37627939E-09  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.37627939E-09  sigma(2 1)=  0.00000000E+00
 
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79324013779985E+00  1.79324013779985E+00  1.79324013779985E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59096337594419E+00  3.59096337594419E+00
  3.59096337594419E+00  0.00000000000000E+00  3.59096337594419E+00
  3.59096337594419E+00  3.59096337594419E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26110745059541E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07838910824535E+00  5.07838910824535E+00  5.07838910824535E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  1.37627938592063E-09  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.37627938613747E-09  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  1.37627938624589E-09
 Total energy (etotal) [Ha]= -2.06453213367435E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 3.68191E-07
           Relative     = 1.78341E-07
 
--- Iteration: ( 9/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -2.0645321161745    -2.065E+00 1.353E-04 9.353E-10
 ETOT  2  -2.0645321161744     2.531E-14 6.210E-05 1.483E-10
 ETOT  3  -2.0645321161745    -4.619E-14 1.935E-04 5.054E-12
 
 At SCF step    3, etot is converged : 
  for the second time, diff in etot=  4.619E-14 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.97348856E-10  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.97348855E-10  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  7.97348855E-10  sigma(2 1)=  0.00000000E+00
 
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79323997791634E+00  1.79323997791634E+00  1.79323997791634E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59096305577748E+00  3.59096305577748E+00
  3.59096305577748E+00  0.00000000000000E+00  3.59096305577748E+00
  3.59096305577748E+00  3.59096305577748E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26110497346230E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07838865546124E+00  5.07838865546124E+00  5.07838865546124E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  7.97348855561056E-10  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  7.97348855452636E-10  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  7.97348855344215E-10
 Total energy (etotal) [Ha]= -2.06453211617448E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 1.74999E-08
           Relative     = 8.47643E-09
 
--- Iteration: (10/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -2.0645320920904    -2.065E+00 8.916E-05 1.763E-09
 ETOT  2  -2.0645320920904    -1.821E-14 4.095E-05 1.660E-11
 ETOT  3  -2.0645320920904     1.021E-14 5.916E-06 2.298E-12
 
 At SCF step    3, etot is converged : 
  for the second time, diff in etot=  1.021E-14 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -8.62916040E-10  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -8.62916039E-10  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -8.62916039E-10  sigma(2 1)=  0.00000000E+00
 
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79323975771229E+00  1.79323975771229E+00  1.79323975771229E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59096261481887E+00  3.59096261481887E+00
  3.59096261481887E+00  0.00000000000000E+00  3.59096261481887E+00
  3.59096261481887E+00  3.59096261481887E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26110156176181E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07838803185160E+00  5.07838803185160E+00  5.07838803185160E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -8.62916039621672E-10  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -8.62916039404832E-10  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -8.62916039079571E-10
 Total energy (etotal) [Ha]= -2.06453209209044E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 2.40840E-08
           Relative     = 1.16656E-08
 
--- Iteration: (11/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -2.0645321046335    -2.065E+00 2.696E-06 4.688E-10
 ETOT  2  -2.0645321046335     4.041E-14 1.227E-06 4.124E-12
 ETOT  3  -2.0645321046335    -6.350E-14 3.934E-06 5.531E-13
 
 At SCF step    3, etot is converged : 
  for the second time, diff in etot=  6.350E-14 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.54238493E-12  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.54238514E-12  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.54238525E-12  sigma(2 1)=  0.00000000E+00
 
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79323987216245E+00  1.79323987216245E+00  1.79323987216245E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59096284400530E+00  3.59096284400530E+00
  3.59096284400530E+00  0.00000000000000E+00  3.59096284400530E+00
  3.59096284400530E+00  3.59096284400530E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26110333497909E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07838835597016E+00  5.07838835597016E+00  5.07838835597016E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.54238492637571E-12  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.54238514321614E-12  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.54238525163636E-12
 Total energy (etotal) [Ha]= -2.06453210463353E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)=-1.25431E-08
           Relative     =-6.07552E-09
 
 At Broyd/MD step  11, gradients are converged : 
  max grad (force/stress) = 1.5424E-10 < tolmxf= 1.0000E-08 ha/bohr (free atoms)
 
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   1.4411E-09; max=  3.9339E-06
   0.0000  0.0000  0.0000    1  3.12420E-19 kpt; spin; max resid(k); each band:
  2.79E-20 7.92E-20 7.92E-20 7.92E-20 3.12E-19 3.12E-19
   0.0400  0.0000  0.0000    1  9.99409E-12 kpt; spin; max resid(k); each band:
  3.77E-20 1.17E-18 8.51E-20 8.51E-20 1.35E-18 9.99E-12
   0.0800  0.0000  0.0000    1  6.28926E-19 kpt; spin; max resid(k); each band:
  4.09E-19 2.11E-19 9.95E-20 1.02E-19 6.29E-19 4.15E-19
   0.1200  0.0000  0.0000    1  3.01630E-18 kpt; spin; max resid(k); each band:
  7.34E-19 2.88E-19 1.05E-19 1.05E-19 3.02E-18 1.99E-19
   0.1600  0.0000  0.0000    1  3.96340E-18 kpt; spin; max resid(k); each band:
  1.07E-18 3.65E-19 1.12E-19 1.10E-19 3.96E-18 2.54E-18
   0.2000  0.0000  0.0000    1  3.10548E-18 kpt; spin; max resid(k); each band:
  1.36E-18 4.46E-19 1.12E-19 1.13E-19 1.18E-18 3.11E-18
   0.2400  0.0000  0.0000    1  1.61485E-18 kpt; spin; max resid(k); each band:
  1.61E-18 5.38E-19 1.12E-19 1.11E-19 1.46E-18 7.98E-19
   0.2800  0.0000  0.0000    1  1.82485E-18 kpt; spin; max resid(k); each band:
  1.81E-18 6.38E-19 1.17E-19 1.15E-19 1.82E-18 2.75E-19
   0.3200  0.0000  0.0000    1  1.66006E-18 kpt; spin; max resid(k); each band:
  7.74E-19 7.38E-19 1.17E-19 1.17E-19 1.66E-18 1.66E-18
   0.3600  0.0000  0.0000    1  1.51071E-18 kpt; spin; max resid(k); each band:
  8.66E-19 8.15E-19 1.21E-19 1.21E-19 1.51E-18 1.51E-18
   0.4000  0.0000  0.0000    1  9.39370E-19 kpt; spin; max resid(k); each band:
  9.39E-19 8.72E-19 1.31E-19 1.31E-19 1.98E-19 1.98E-19
   0.4400  0.0000  0.0000    1  9.72965E-19 kpt; spin; max resid(k); each band:
  9.73E-19 8.91E-19 1.41E-19 1.41E-19 1.54E-19 1.54E-19
   0.4800  0.0000  0.0000    1  7.56310E-19 kpt; spin; max resid(k); each band:
  7.56E-19 6.91E-19 1.63E-19 1.63E-19 1.23E-19 1.23E-19
   0.0400  0.0400  0.0000    1  1.12623E-18 kpt; spin; max resid(k); each band:
  1.95E-19 1.13E-18 9.23E-20 9.23E-20 7.74E-19 3.96E-19
   0.0800  0.0400  0.0000    1  5.22815E-19 kpt; spin; max resid(k); each band:
  4.32E-19 1.58E-19 1.00E-19 1.50E-19 4.62E-19 5.23E-19
   0.1200  0.0400  0.0000    1  8.44470E-19 kpt; spin; max resid(k); each band:
  7.43E-19 2.44E-19 1.04E-19 2.61E-19 8.44E-19 6.10E-19
   0.1600  0.0400  0.0000    1  1.02693E-18 kpt; spin; max resid(k); each band:
  1.03E-18 3.24E-19 1.02E-19 3.70E-19 9.88E-19 5.69E-19
   0.2000  0.0400  0.0000    1  1.39125E-18 kpt; spin; max resid(k); each band:
  1.27E-18 4.07E-19 9.98E-20 4.71E-19 1.39E-18 1.01E-18
   0.2400  0.0400  0.0000    1  1.54160E-18 kpt; spin; max resid(k); each band:
  1.54E-18 5.00E-19 9.79E-20 5.22E-19 8.58E-19 1.10E-18
   0.2800  0.0400  0.0000    1  1.82102E-18 kpt; spin; max resid(k); each band:
  1.75E-18 6.03E-19 9.92E-20 5.59E-19 1.82E-18 1.63E-18
   0.3200  0.0400  0.0000    1  2.26804E-18 kpt; spin; max resid(k); each band:
  1.90E-18 7.16E-19 1.00E-19 5.94E-19 1.66E-18 2.27E-18
   0.3600  0.0400  0.0000    1  1.65728E-18 kpt; spin; max resid(k); each band:
  1.10E-18 8.23E-19 1.01E-19 6.21E-19 1.66E-18 4.39E-19
   0.4000  0.0400  0.0000    1  1.68264E-18 kpt; spin; max resid(k); each band:
  1.15E-18 9.09E-19 1.04E-19 6.21E-19 1.65E-19 1.68E-18
   0.4400  0.0400  0.0000    1  1.99660E-18 kpt; spin; max resid(k); each band:
  1.17E-18 9.65E-19 1.11E-19 5.16E-19 2.00E-18 2.34E-19
   0.4800  0.0400  0.0000    1  2.07763E-18 kpt; spin; max resid(k); each band:
  1.11E-18 9.08E-19 1.16E-19 4.18E-19 2.08E-18 1.85E-19
  -0.4800  0.0400  0.0000    1  2.10560E-18 kpt; spin; max resid(k); each band:
  6.25E-19 2.79E-19 3.71E-19 1.30E-19 2.11E-18 1.59E-19
  -0.4400  0.0400  0.0000    1  2.13842E-18 kpt; spin; max resid(k); each band:
  1.24E-18 9.93E-19 3.51E-19 1.54E-19 1.38E-19 2.14E-18
  -0.4000  0.0400  0.0000    1  2.23313E-18 kpt; spin; max resid(k); each band:
  1.15E-18 9.83E-19 3.38E-19 1.84E-19 1.24E-19 2.23E-18
  -0.3600  0.0400  0.0000    1  2.36203E-18 kpt; spin; max resid(k); each band:
  1.16E-18 9.09E-19 3.31E-19 1.87E-19 1.40E-19 2.36E-18
  -0.3200  0.0400  0.0000    1  2.54839E-18 kpt; spin; max resid(k); each band:
  1.27E-18 8.10E-19 3.24E-19 1.52E-19 2.17E-19 2.55E-18
  -0.2800  0.0400  0.0000    1  2.56660E-18 kpt; spin; max resid(k); each band:
  1.79E-18 6.80E-19 3.22E-19 1.40E-19 1.52E-18 2.57E-18
  -0.2400  0.0400  0.0000    1  1.97129E-18 kpt; spin; max resid(k); each band:
  1.71E-18 5.62E-19 3.17E-19 1.35E-19 4.02E-19 1.97E-18
  -0.2000  0.0400  0.0000    1  1.47779E-18 kpt; spin; max resid(k); each band:
  1.45E-18 4.63E-19 3.07E-19 1.30E-19 1.45E-18 1.48E-18
  -0.1600  0.0400  0.0000    1  6.98524E-18 kpt; spin; max resid(k); each band:
  1.14E-18 3.75E-19 2.95E-19 1.24E-19 1.09E-18 6.99E-18
  -0.1200  0.0400  0.0000    1  8.21543E-19 kpt; spin; max resid(k); each band:
  7.87E-19 2.89E-19 2.78E-19 1.06E-19 8.22E-19 3.29E-19
  -0.0800  0.0400  0.0000    1  5.61067E-19 kpt; spin; max resid(k); each band:
  4.03E-19 2.01E-19 2.56E-19 9.13E-20 2.98E-19 5.61E-19
  -0.0400  0.0400  0.0000    1  7.68674E-19 kpt; spin; max resid(k); each band:
  8.42E-20 1.28E-19 1.94E-19 8.01E-20 3.51E-19 7.69E-19
   0.0800  0.0800  0.0000    1  8.65608E-19 kpt; spin; max resid(k); each band:
  5.91E-19 8.66E-19 9.90E-20 9.52E-20 8.49E-19 6.08E-19
   0.1200  0.0800  0.0000    1  2.97653E-18 kpt; spin; max resid(k); each band:
  9.92E-19 1.38E-19 9.83E-20 1.96E-19 1.92E-18 2.98E-18
   0.1600  0.0800  0.0000    1  2.42188E-18 kpt; spin; max resid(k); each band:
  1.16E-18 2.24E-19 9.31E-20 4.26E-19 1.73E-18 2.42E-18
   0.2000  0.0800  0.0000    1  1.40223E-18 kpt; spin; max resid(k); each band:
  1.30E-18 3.26E-19 9.09E-20 6.62E-19 5.05E-19 1.40E-18
   0.2400  0.0800  0.0000    1  1.40234E-18 kpt; spin; max resid(k); each band:
  1.40E-18 4.43E-19 8.75E-20 8.38E-19 4.53E-19 1.26E-18
   0.2800  0.0800  0.0000    1  1.77303E-18 kpt; spin; max resid(k); each band:
  1.62E-18 5.59E-19 8.62E-20 1.00E-18 1.77E-18 1.55E-18
   0.3200  0.0800  0.0000    1  4.73201E-12 kpt; spin; max resid(k); each band:
  1.34E-18 6.82E-19 8.54E-20 2.29E-18 3.46E-19 4.73E-12
   0.3600  0.0800  0.0000    1  2.00358E-18 kpt; spin; max resid(k); each band:
  1.43E-18 8.10E-19 8.57E-20 2.00E-18 3.61E-19 1.80E-19
   0.4000  0.0800  0.0000    1  1.48625E-18 kpt; spin; max resid(k); each band:
  1.49E-18 9.27E-19 8.75E-20 8.32E-19 2.98E-19 4.76E-19
   0.4400  0.0800  0.0000    1  1.89153E-18 kpt; spin; max resid(k); each band:
  1.50E-18 1.02E-18 9.02E-20 6.86E-19 4.30E-19 1.89E-18
   0.4800  0.0800  0.0000    1  2.80053E-18 kpt; spin; max resid(k); each band:
  1.48E-18 1.04E-18 6.17E-19 9.61E-20 2.80E-18 1.78E-18
  -0.4800  0.0800  0.0000    1  2.81350E-18 kpt; spin; max resid(k); each band:
  1.09E-18 2.82E-19 5.90E-19 1.01E-19 2.81E-18 2.19E-19
  -0.4400  0.0800  0.0000    1  2.82304E-18 kpt; spin; max resid(k); each band:
  1.35E-18 1.06E-18 5.76E-19 1.09E-19 2.82E-18 1.89E-19
 outwf : prtvol=0 or 1, do not print more k-points.
 
 reduced coordinates (array xred) for    1 atoms
       0.000000000000      0.000000000000      0.000000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
 
 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 
 cartesian forces (hartree/bohr) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 h/b
 
 cartesian forces (eV/Angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales=  1.793239872162  1.793239872162  1.793239872162 bohr
              =  0.948941669883  0.948941669883  0.948941669883 angstroms
 prteigrs : about to open file abo_EIG
 Fermi (or HOMO) energy (eV) =  10.85547   Average Vxc (eV)= -10.42331
 Eigenvalues (   eV  ) for nkpt= 455  k points:
 kpt#   1, nband=  6, wtk=  0.00006, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -2.25001  25.34044  25.34044  25.34044  28.11246  28.11246
 kpt#   2, nband=  6, wtk=  0.00051, kpt=  0.0400  0.0000  0.0000 (reduced coord)
  -2.19864  24.36573  25.21732  25.21732  28.31703  28.31703
 kpt#   3, nband=  6, wtk=  0.00051, kpt=  0.0800  0.0000  0.0000 (reduced coord)
  -2.04467  22.60890  24.92920  24.92920  28.25257  28.84558
 kpt#   4, nband=  6, wtk=  0.00051, kpt=  0.1200  0.0000  0.0000 (reduced coord)
  -1.78843  20.73289  24.59588  24.59588  28.02553  29.55151
 kpt#   5, nband=  6, wtk=  0.00051, kpt=  0.1600  0.0000  0.0000 (reduced coord)
  -1.43052  18.86249  24.28349  24.28349  27.76360  30.03768
 kpt#   6, nband=  6, wtk=  0.00051, kpt=  0.2000  0.0000  0.0000 (reduced coord)
  -0.97175  17.03490  24.02151  24.02151  27.51821  29.37620
 kpt#   7, nband=  6, wtk=  0.00051, kpt=  0.2400  0.0000  0.0000 (reduced coord)
  -0.41319  15.26625  23.82334  23.82334  27.31933  28.50913
 kpt#   8, nband=  6, wtk=  0.00051, kpt=  0.2800  0.0000  0.0000 (reduced coord)
   0.24385  13.56536  23.69544  23.69544  27.18496  27.68407
 kpt#   9, nband=  6, wtk=  0.00051, kpt=  0.3200  0.0000  0.0000 (reduced coord)
   0.99771  11.93805  23.64074  23.64074  26.93037  26.93037
 kpt#  10, nband=  6, wtk=  0.00051, kpt=  0.3600  0.0000  0.0000 (reduced coord)
   1.84627  10.38888  23.65975  23.65975  26.25839  26.25839
 kpt#  11, nband=  6, wtk=  0.00051, kpt=  0.4000  0.0000  0.0000 (reduced coord)
   2.78618   8.92258  23.74960  23.74960  25.67605  25.67605
 kpt#  12, nband=  6, wtk=  0.00051, kpt=  0.4400  0.0000  0.0000 (reduced coord)
   3.80961   7.54783  23.89803  23.89803  25.19820  25.19820
 kpt#  13, nband=  6, wtk=  0.00051, kpt=  0.4800  0.0000  0.0000 (reduced coord)
   4.86733   6.31435  24.05253  24.05253  24.87870  24.87870
 kpt#  14, nband=  6, wtk=  0.00038, kpt=  0.0400  0.0400  0.0000 (reduced coord)
  -2.18153  24.73956  24.80139  24.80139  27.90499  28.75356
 kpt#  15, nband=  6, wtk=  0.00154, kpt=  0.0800  0.0400  0.0000 (reduced coord)
  -2.06177  23.19143  24.34725  24.92188  27.93585  28.93068
 kpt#  16, nband=  6, wtk=  0.00154, kpt=  0.1200  0.0400  0.0000 (reduced coord)
  -1.83964  21.36285  23.91847  24.82619  28.37692  28.75524
 kpt#  17, nband=  6, wtk=  0.00154, kpt=  0.1600  0.0400  0.0000 (reduced coord)
  -1.51565  19.50035  23.54303  24.60784  28.49689  29.02963
 kpt#  18, nband=  6, wtk=  0.00154, kpt=  0.2000  0.0400  0.0000 (reduced coord)
  -1.09054  17.66489  23.23374  24.37017  28.20525  28.55440
 kpt#  19, nband=  6, wtk=  0.00154, kpt=  0.2400  0.0400  0.0000 (reduced coord)
  -0.56530  15.88062  22.99694  24.16366  27.52255  28.11134
 kpt#  20, nband=  6, wtk=  0.00154, kpt=  0.2800  0.0400  0.0000 (reduced coord)
   0.05886  14.15977  22.83608  24.00959  26.68235  27.94541
 kpt#  21, nband=  6, wtk=  0.00154, kpt=  0.3200  0.0400  0.0000 (reduced coord)
   0.78040  12.50968  22.75312  23.91352  25.91387  27.86462
 kpt#  22, nband=  6, wtk=  0.00154, kpt=  0.3600  0.0400  0.0000 (reduced coord)
   1.59736  10.93562  22.74927  23.86408  25.25180  27.44653
 kpt#  23, nband=  6, wtk=  0.00154, kpt=  0.4000  0.0400  0.0000 (reduced coord)
   2.50696   9.44231  22.82526  23.80437  24.76100  26.82505
 kpt#  24, nband=  6, wtk=  0.00154, kpt=  0.4400  0.0400  0.0000 (reduced coord)
   3.50367   8.03637  22.98132  23.59932  24.58032  26.28513
 kpt#  25, nband=  6, wtk=  0.00154, kpt=  0.4800  0.0400  0.0000 (reduced coord)
   4.56508   6.74094  23.21691  23.26258  24.69797  25.82931
 kpt#  26, nband=  6, wtk=  0.00154, kpt= -0.4800  0.0400  0.0000 (reduced coord)
   5.18388   6.06359  22.92946  23.52947  24.97909  25.46109
 kpt#  27, nband=  6, wtk=  0.00154, kpt= -0.4400  0.0400  0.0000 (reduced coord)
   4.20822   7.15624  22.65390  23.90956  25.19021  25.36909
 kpt#  28, nband=  6, wtk=  0.00154, kpt= -0.4000  0.0400  0.0000 (reduced coord)
   3.16240   8.49445  22.45153  24.31207  25.06145  25.85013
 kpt#  29, nband=  6, wtk=  0.00154, kpt= -0.3600  0.0400  0.0000 (reduced coord)
   2.19372   9.93046  22.32764  24.54760  25.26317  26.41090
 kpt#  30, nband=  6, wtk=  0.00154, kpt= -0.3200  0.0400  0.0000 (reduced coord)
   1.31458  11.45101  22.28411  24.58942  25.81996  27.02410
 kpt#  31, nband=  6, wtk=  0.00154, kpt= -0.2800  0.0400  0.0000 (reduced coord)
   0.52918  13.05052  22.32140  24.63446  26.53084  27.50249
 kpt#  32, nband=  6, wtk=  0.00154, kpt= -0.2400  0.0400  0.0000 (reduced coord)
  -0.16009  14.72407  22.43918  24.73273  27.33770  27.69739
 kpt#  33, nband=  6, wtk=  0.00154, kpt= -0.2000  0.0400  0.0000 (reduced coord)
  -0.75143  16.46547  22.63650  24.88857  27.88556  28.21694
 kpt#  34, nband=  6, wtk=  0.00154, kpt= -0.1600  0.0400  0.0000 (reduced coord)
  -1.24342  18.26511  22.91192  25.09139  28.11103  29.09133
 kpt#  35, nband=  6, wtk=  0.00154, kpt= -0.1200  0.0400  0.0000 (reduced coord)
  -1.63492  20.10447  23.26433  25.31180  28.35312  29.07915
 kpt#  36, nband=  6, wtk=  0.00154, kpt= -0.0800  0.0400  0.0000 (reduced coord)
  -1.92503  21.93612  23.69981  25.48097  28.49622  28.55771
 kpt#  37, nband=  6, wtk=  0.00077, kpt= -0.0400  0.0400  0.0000 (reduced coord)
  -2.11308  23.55031  24.31375  25.47465  28.20212  28.57818
 kpt#  38, nband=  6, wtk=  0.00038, kpt=  0.0800  0.0800  0.0000 (reduced coord)
  -1.97629  23.56089  23.79654  23.79654  27.35606  30.06005
 kpt#  39, nband=  6, wtk=  0.00154, kpt=  0.1200  0.0800  0.0000 (reduced coord)
  -1.78842  21.97526  23.30302  23.97190  27.27122  29.43566
 kpt#  40, nband=  6, wtk=  0.00154, kpt=  0.1600  0.0800  0.0000 (reduced coord)
  -1.49861  20.16786  22.87833  23.98877  27.66188  28.32713
 kpt#  41, nband=  6, wtk=  0.00154, kpt=  0.2000  0.0800  0.0000 (reduced coord)
  -1.10752  18.34860  22.52814  23.84251  27.27540  28.40379
 kpt#  42, nband=  6, wtk=  0.00154, kpt=  0.2400  0.0800  0.0000 (reduced coord)
  -0.61604  16.56249  22.25545  23.64640  26.30598  29.35111
 kpt#  43, nband=  6, wtk=  0.00154, kpt=  0.2800  0.0800  0.0000 (reduced coord)
  -0.02533  14.83022  22.06200  23.45642  25.43115  29.62557
 kpt#  44, nband=  6, wtk=  0.00154, kpt=  0.3200  0.0800  0.0000 (reduced coord)
   0.66318  13.16310  21.94892  23.27523  24.68370  29.43935
 kpt#  45, nband=  6, wtk=  0.00154, kpt=  0.3600  0.0800  0.0000 (reduced coord)
   1.44769  11.56832  21.91700  23.03943  24.14457  28.72345
 kpt#  46, nband=  6, wtk=  0.00154, kpt=  0.4000  0.0800  0.0000 (reduced coord)
   2.32575  10.05139  21.96693  22.65838  23.91368  28.07842
 kpt#  47, nband=  6, wtk=  0.00154, kpt=  0.4400  0.0800  0.0000 (reduced coord)
   3.29312   8.61829  22.09931  22.19272  23.93555  27.50975
 kpt#  48, nband=  6, wtk=  0.00154, kpt=  0.4800  0.0800  0.0000 (reduced coord)
   4.33728   7.28260  21.74397  22.31471  24.11140  27.02006
 kpt#  49, nband=  6, wtk=  0.00154, kpt= -0.4800  0.0800  0.0000 (reduced coord)
   5.31020   6.19284  21.35458  22.61363  24.39992  26.61043
 kpt#  50, nband=  6, wtk=  0.00154, kpt= -0.4400  0.0800  0.0000 (reduced coord)
   4.69374   6.86729  21.03968  22.99645  24.78589  26.28111
 prteigrs : prtvol=0 or 1, do not print more k-points.
 
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,Next maximum=    3.8461E-02  at reduced coord.    0.5111    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,Next minimum=    3.8155E-03  at reduced coord.    0.0222    0.0000    0.0000
,  Integrated=    3.0000E+00
 
--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :
 
    Kinetic energy  =  9.55082092476604E-01
    Hartree energy  =  6.13285247214898E-03
    XC energy       = -8.46627147147138E-01
    Ewald energy    = -2.87275032209741E+00
    PspCore energy  = -8.70881724561949E-02
    Loc. psp. energy=  3.09013052530055E-01
    NL   psp  energy=  4.71706270626037E-01
    >>>>> Internal E= -2.06453137359590E+00
 
    -kT*entropy     = -7.31037637443723E-07
    >>>>>>>>> Etotal= -2.06453210463353E+00
 
 Other information on the energy :
    Total energy(eV)= -5.61787755904768E+01 ; Band energy (Ha)=   6.1815750871E-01
--------------------------------------------------------------------------------
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.54238493E-12  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.54238514E-12  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.54238525E-12  sigma(2 1)=  0.00000000E+00
 
-Cartesian components of stress tensor (GPa)         [Pressure=  4.5379E-08 GPa]
- sigma(1 1)= -4.53785236E-08  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -4.53785300E-08  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -4.53785332E-08  sigma(2 1)=  0.00000000E+00
 
== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      1.7932398722E+00  1.7932398722E+00  1.7932398722E+00 Bohr
              amu      2.69815390E+01
        autoparal           1
          dilatmx      1.80000000E+00
        dosdeltae      1.83746627E-03 Hartree
             ecut      2.20495952E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           enunit           1
           etotal     -2.0645321046E+00
            fcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
-          fftalg         312
           ionmov           2
           istwfk        2    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                       outvar_i_n : Printing only first  50 k-points.
              ixc     -263267
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       4.00000000E-02  0.00000000E+00  0.00000000E+00
                       8.00000000E-02  0.00000000E+00  0.00000000E+00
                       1.20000000E-01  0.00000000E+00  0.00000000E+00
                       1.60000000E-01  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.40000000E-01  0.00000000E+00  0.00000000E+00
                       2.80000000E-01  0.00000000E+00  0.00000000E+00
                       3.20000000E-01  0.00000000E+00  0.00000000E+00
                       3.60000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.40000000E-01  0.00000000E+00  0.00000000E+00
                       4.80000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-02  4.00000000E-02  0.00000000E+00
                       8.00000000E-02  4.00000000E-02  0.00000000E+00
                       1.20000000E-01  4.00000000E-02  0.00000000E+00
                       1.60000000E-01  4.00000000E-02  0.00000000E+00
                       2.00000000E-01  4.00000000E-02  0.00000000E+00
                       2.40000000E-01  4.00000000E-02  0.00000000E+00
                       2.80000000E-01  4.00000000E-02  0.00000000E+00
                       3.20000000E-01  4.00000000E-02  0.00000000E+00
                       3.60000000E-01  4.00000000E-02  0.00000000E+00
                       4.00000000E-01  4.00000000E-02  0.00000000E+00
                       4.40000000E-01  4.00000000E-02  0.00000000E+00
                       4.80000000E-01  4.00000000E-02  0.00000000E+00
                      -4.80000000E-01  4.00000000E-02  0.00000000E+00
                      -4.40000000E-01  4.00000000E-02  0.00000000E+00
                      -4.00000000E-01  4.00000000E-02  0.00000000E+00
                      -3.60000000E-01  4.00000000E-02  0.00000000E+00
                      -3.20000000E-01  4.00000000E-02  0.00000000E+00
                      -2.80000000E-01  4.00000000E-02  0.00000000E+00
                      -2.40000000E-01  4.00000000E-02  0.00000000E+00
                      -2.00000000E-01  4.00000000E-02  0.00000000E+00
                      -1.60000000E-01  4.00000000E-02  0.00000000E+00
                      -1.20000000E-01  4.00000000E-02  0.00000000E+00
                      -8.00000000E-02  4.00000000E-02  0.00000000E+00
                      -4.00000000E-02  4.00000000E-02  0.00000000E+00
                       8.00000000E-02  8.00000000E-02  0.00000000E+00
                       1.20000000E-01  8.00000000E-02  0.00000000E+00
                       1.60000000E-01  8.00000000E-02  0.00000000E+00
                       2.00000000E-01  8.00000000E-02  0.00000000E+00
                       2.40000000E-01  8.00000000E-02  0.00000000E+00
                       2.80000000E-01  8.00000000E-02  0.00000000E+00
                       3.20000000E-01  8.00000000E-02  0.00000000E+00
                       3.60000000E-01  8.00000000E-02  0.00000000E+00
                       4.00000000E-01  8.00000000E-02  0.00000000E+00
                       4.40000000E-01  8.00000000E-02  0.00000000E+00
                       4.80000000E-01  8.00000000E-02  0.00000000E+00
                      -4.80000000E-01  8.00000000E-02  0.00000000E+00
                      -4.40000000E-01  8.00000000E-02  0.00000000E+00
                       outvar_i_n : Printing only first  50 k-points.
         kptrlatt       25    0    0      0   25    0      0    0   25
          kptrlen      1.33790846E+02
P           mkmem          57
            natom           1
            nband           6
            ngfft          45      45      45
             nkpt         455
-           npkpt           8
            nstep          50
             nsym          48
            ntime          30
           ntypat           1
              occ      2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000 -0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.004727  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.378372  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000 -0.000211  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000 -0.000006  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       prtocc : prtvol=0, do not print more k-points.
           occopt           6
          optcell           1
           prtden           0
           prtdos           2
        prtposcar           1
            prtwf           0
            rprim      0.0000000000E+00  2.0025000000E+00  2.0025000000E+00
                       2.0025000000E+00  0.0000000000E+00  2.0025000000E+00
                       2.0025000000E+00  2.0025000000E+00  0.0000000000E+00
          spgroup         225
           strten     -1.5423849264E-12 -1.5423851432E-12 -1.5423852516E-12
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                       0 -1  1   0 -1  0   1 -1  0       0  1 -1   0  1  0  -1  1  0
                      -1  0  0  -1  0  1  -1  1  0       1  0  0   1  0 -1   1 -1  0
                       0  1 -1   1  0 -1   0  0 -1       0 -1  1  -1  0  1   0  0  1
                      -1  0  0  -1  1  0  -1  0  1       1  0  0   1 -1  0   1  0 -1
                       0 -1  1   1 -1  0   0 -1  0       0  1 -1  -1  1  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                       0  1 -1   0  0 -1   1  0 -1       0 -1  1   0  0  1  -1  0  1
                      -1  0  1  -1  1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
                       0 -1  0   1 -1  0   0 -1  1       0  1  0  -1  1  0   0  1 -1
                       1  0 -1   0  0 -1   0  1 -1      -1  0  1   0  0  1   0 -1  1
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       1  0 -1   0  1 -1   0  0 -1      -1  0  1   0 -1  1   0  0  1
                       0 -1  0   0 -1  1   1 -1  0       0  1  0   0  1 -1  -1  1  0
                      -1  0  1  -1  0  0  -1  1  0       1  0 -1   1  0  0   1 -1  0
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0  0 -1   0  1 -1   1  0 -1       0  0  1   0 -1  1  -1  0  1
                       1 -1  0   0 -1  1   0 -1  0      -1  1  0   0  1 -1   0  1  0
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                      -1  1  0  -1  0  0  -1  0  1       1 -1  0   1  0  0   1  0 -1
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       1 -1  0   0 -1  0   0 -1  1      -1  1  0   0  1  0   0  1 -1
                       0  0 -1   1  0 -1   0  1 -1       0  0  1  -1  0  1   0 -1  1
                      -1  1  0  -1  0  1  -1  0  0       1 -1  0   1  0 -1   1  0  0
           toldfe      3.67493254E-08 Hartree
           tolmxf      1.00000000E-08
           tsmear      7.34986508E-03 Hartree
            typat      1
          usekden           1
              wtk        0.00006    0.00051    0.00051    0.00051    0.00051    0.00051
                         0.00051    0.00051    0.00051    0.00051    0.00051    0.00051
                         0.00051    0.00038    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00077    0.00038    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154
                       outvars : Printing only first  50 k-points.
            znucl       13.00000
 
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

 [1] Libxc: A library of exchange and correlation functionals for density functional theory.
 M.A.L. Marques, M.J.T. Oliveira, T. Burnus, Computer Physics Communications 183, 2227 (2012).
 Comment : to be cited when LibXC is used (negative value of ixc)
 Strong suggestion to cite this paper.

 [2] Ab initio pseudopotentials for electronic structure calculations of poly-atomic systems, 
 using density-functional theory.
 M. Fuchs, M. Scheffler, Comput. Phys. Commun. 119, 67 (1999).
 Comment : Some pseudopotential generated using the FHI code were used.

 [3] ABINIT : First-principles approach of materials and nanosystem properties.
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

 [4] A brief introduction to the ABINIT software package.
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

 [5] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.
-
- Proc.   0 individual time (sec): cpu=       1714.6  wall=       1713.8
 
================================================================================
 
 Calculation completed.
.Delivered    0 WARNINGs and  11 COMMENTs to log file.
+Overall time at end (sec) : cpu=      13717.2  wall=      13710.1
