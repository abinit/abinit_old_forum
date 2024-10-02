
.Version 7.6.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel13.1 computer) 

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

.Starting date : Sat 29 Mar 2014.
- ( at 14h48 )
  
- input  file    -> /home/weitong/setup/abinit/AbinitGUI/MySims/tets1_1_parallel/input/test1.in
- output file    -> /home/weitong/setup/abinit/AbinitGUI/MySims/tets1_1_parallel/output/test1.out
- root for input  files -> /home/weitong/setup/abinit/AbinitGUI/MySims/tets1_1_parallel/wholedata/test1/test1i
- root for output files -> /home/weitong/setup/abinit/AbinitGUI/MySims/tets1_1_parallel/wholedata/test1/test1o


 Symmetries : space group R3 c (#161); Bravais hR (rhombohedral)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        42  mffmem =         1
P  mgfft =        32   mkmem =         1 mpssoang=         4     mpw =       206
  mqgrid =      3001   natom =        10    nfft =      8192    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         6  n1xccc =      2501  ntypat =         3  occopt =         1
================================================================================
P This job should need less than                       4.998 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      1.058 Mbytes ; DEN or POT disk file :      0.065 Mbytes.
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
        accesswff           1
            acell      1.0391549200E+01  1.0391549200E+01  1.0391549200E+01 Bohr
              amu      9.29063800E+01  6.94100000E+00  1.59994000E+01
           diemac      1.00000000E+01
             ecut      8.00000000E+00 Hartree
           ecutsm      5.00000000E-01 Hartree
           fftalg         401
      fft_opt_lob           2
           iprcch           6
              ixc           7
              kpt      2.50000000E-01  2.50000000E-01  2.50000000E-01
                      -2.50000000E-01  2.50000000E-01  2.50000000E-01
         kptrlatt        2    0    0      0    2    0      0    0    2
          kptrlen      1.94683329E+01
P           mkmem           1
            natom          10
            nband          42
           nbdbuf           2
            ngfft          32      32      32
             nkpt           2
            npfft           4
-           npkpt           2
            nstep         100
             nsym           6
           ntypat           3
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
           ortalg          -2
        paral_kgb           1
            rprim      5.4082634987E-01  0.0000000000E+00  8.4113426947E-01
                      -2.7041317494E-01  4.6836935803E-01  8.4113426947E-01
                      -2.7041317494E-01 -4.6836935803E-01  8.4113426947E-01
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         161
           symrel      1  0  0   0  1  0   0  0  1       0  1  0   1  0  0   0  0  1
                       0  0  1   1  0  0   0  1  0       1  0  0   0  0  1   0  1  0
                       0  1  0   0  0  1   1  0  0       0  0  1   0  1  0   1  0  0
            tnons      0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.5000000
           toldfe      1.00000000E-12 Hartree
            typat      1  1  2  2  3  3  3  3  3  3
         wfoptalg          14
              wtk        0.25000    0.75000
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  6.9380594306E+00
                       0.0000000000E+00  0.0000000000E+00  3.9255540258E+00
                       0.0000000000E+00  0.0000000000E+00  1.0863613456E+01
                      -1.5292397120E+00 -6.3683896031E-01  7.8279811869E+00
                       1.3161385738E+00 -1.0059409589E+00  7.8279811869E+00
                       2.1310113826E-01  1.6427799192E+00  7.8279811869E+00
                      -1.2738930683E+00  9.3276959717E-01  5.5152947101E+00
                      -1.7085563285E-01 -1.5696085575E+00  5.5152947101E+00
                       1.4447487012E+00  6.3683896031E-01  5.5152947101E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.3111032218E+01
                       0.0000000000E+00  0.0000000000E+00  7.4182220287E+00
                       0.0000000000E+00  0.0000000000E+00  2.0529254246E+01
                      -2.8898442472E+00 -1.2034512257E+00  1.4792740617E+01
                       2.4871414573E+00 -1.9009529182E+00  1.4792740617E+01
                       4.0270278992E-01  3.1044041440E+00  1.4792740617E+01
                      -2.4073090218E+00  1.7626790837E+00  1.0422396544E+01
                      -3.2287035435E-01 -2.9661303095E+00  1.0422396544E+01
                       2.7301793761E+00  1.2034512257E+00  1.0422396544E+01
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       2.8290000000E-01  2.8290000000E-01  2.8290000000E-01
                       7.8290000000E-01  7.8290000000E-01  7.8290000000E-01
                       2.2133000000E-01  6.1190333300E-01  8.5916666700E-01
                       8.5916666700E-01  2.2133000000E-01  6.1190333300E-01
                       6.1190333300E-01  8.5916666700E-01  2.2133000000E-01
                       1.1190333300E-01  7.2133000000E-01  3.5916666700E-01
                       3.5916666700E-01  1.1190333300E-01  7.2133000000E-01
                       7.2133000000E-01  3.5916666700E-01  1.1190333300E-01
            znucl       41.00000    3.00000    8.00000

================================================================================

 chkinp: Checking input parameters for consistency.

================================================================================
== DATASET  1 ==================================================================
-   nproc =    8

 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  5.6200236  0.0000000  8.7406881  G(1)=  0.1186235  0.0000000  0.0381358
 R(2)= -2.8100118  4.8670832  8.7406881  G(2)= -0.0593117  0.1027309  0.0381358
 R(3)= -2.8100118 -4.8670832  8.7406881  G(3)= -0.0593117 -0.1027309  0.0381358
 Unit cell volume ucvol=  7.1725535E+02 bohr^3
 Angles (23,13,12)=  5.58570000E+01  5.58570000E+01  5.58570000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  32
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.41858

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   11.699049 Hartrees makes boxcut=2


--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is /home/weitong/setup/abinit/AbinitGUI/MySims/tets1_1_parallel/pseudopot/41-Nb.LDA.fhi
- pspatm: opening atomic psp file    /home/weitong/setup/abinit/AbinitGUI/MySims/tets1_1_parallel/pseudopot/41-Nb.LDA.fhi
- niobium, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 1 local
- 41.00000   5.00000     11001                znucl, zion, pspdat
    6    7    3    1       539   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   89.44912083
         --- l  ekb(1:nproj) -->
             0   -0.251650
             2   -3.507499
             3   -1.813148
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is /home/weitong/setup/abinit/AbinitGUI/MySims/tets1_1_parallel/pseudopot/03-Li.LDA.fhi
- pspatm: opening atomic psp file    /home/weitong/setup/abinit/AbinitGUI/MySims/tets1_1_parallel/pseudopot/03-Li.LDA.fhi
- lithium, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 2 local
-  3.00000   1.00000     21003                znucl, zion, pspdat
    6    7    3    2       433   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    4.76300000000000    1.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    1.34693440
         --- l  ekb(1:nproj) -->
             0    0.955158
             1   -0.608253
             3   -0.770176
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is /home/weitong/setup/abinit/AbinitGUI/MySims/tets1_1_parallel/pseudopot/08-O.LDA.fhi
- pspatm: opening atomic psp file    /home/weitong/setup/abinit/AbinitGUI/MySims/tets1_1_parallel/pseudopot/08-O.LDA.fhi
- oxygen, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 2 local
-  8.00000   6.00000     21003                znucl, zion, pspdat
    6    7    3    2       473   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    3.67996594
         --- l  ekb(1:nproj) -->
             0    2.914750
             1   -2.952330
             3   -3.448613
 pspatm: atomic psp has been read  and splines computed

   9.77625149E+03                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating     42 bands with npw=     206 for ikpt=   1 by node    0
P newkpt: treating     42 bands with npw=     199 for ikpt=   2 by node    1
 
_setup2: Arith. and geom. avg. npw (full set) are     200.750     200.727

================================================================================

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -96.680943421047    -9.668E+01 4.956E-03 2.681E+03
 ETOT  2  -97.887586727741    -1.207E+00 3.973E-04 2.248E+03
 ETOT  3  -100.03700204144    -2.149E+00 2.605E-03 1.634E+02
 ETOT  4  -100.01510213365     2.190E-02 1.466E-05 1.993E+02
 ETOT  5  -100.15228421805    -1.372E-01 7.666E-05 1.356E+01
 ETOT  6  -100.16032362193    -8.039E-03 5.983E-06 2.165E+00
 ETOT  7  -100.16157844177    -1.255E-03 1.989E-06 9.095E-02
 ETOT  8  -100.16163254200    -5.410E-05 1.124E-07 5.296E-03
 ETOT  9  -100.16163714867    -4.607E-06 2.902E-09 5.011E-04
 ETOT 10  -100.16163563123     1.517E-06 6.399E-10 5.543E-06
 ETOT 11  -100.16163860302    -2.972E-06 9.278E-12 1.121E-07
 ETOT 12  -100.16163509771     3.505E-06 3.462E-10 7.078E-09
 ETOT 13  -100.16163726478    -2.167E-06 4.257E-13 3.008E-09
 ETOT 14  -100.16163623997     1.025E-06 9.659E-11 5.316E-10
 ETOT 15  -100.16164050067    -4.261E-06 2.846E-13 2.850E-09
 ETOT 16  -100.16163565283     4.848E-06 3.790E-11 6.457E-11
 ETOT 17  -100.16163378424     1.869E-06 1.394E-13 1.971E-10
 ETOT 18                   NaN       NaN 2.435E-10       NaN
 ETOT 19                   NaN       NaN 0.000E+00       NaN
 ETOT 20                   NaN       NaN 0.000E+00       NaN
 ETOT 21                   NaN       NaN 0.000E+00       NaN
 ETOT 22                   NaN       NaN 0.000E+00       NaN
 ETOT 23                   NaN       NaN 0.000E+00       NaN
 ETOT 24                   NaN       NaN 0.000E+00       NaN
 ETOT 25                   NaN       NaN 0.000E+00       NaN
 ETOT 26                   NaN       NaN 0.000E+00       NaN
 ETOT 27                   NaN       NaN 0.000E+00       NaN
 ETOT 28                   NaN       NaN 0.000E+00       NaN
 ETOT 29                   NaN       NaN 0.000E+00       NaN
 ETOT 30                   NaN       NaN 0.000E+00       NaN
 ETOT 31                   NaN       NaN 0.000E+00       NaN
 ETOT 32                   NaN       NaN 0.000E+00       NaN
 ETOT 33                   NaN       NaN 0.000E+00       NaN
 ETOT 34                   NaN       NaN 0.000E+00       NaN
 ETOT 35                   NaN       NaN 0.000E+00       NaN
 ETOT 36                   NaN       NaN 0.000E+00       NaN
 ETOT 37                   NaN       NaN 0.000E+00       NaN
 ETOT 38                   NaN       NaN 0.000E+00       NaN
 ETOT 39                   NaN       NaN 0.000E+00       NaN
 ETOT 40                   NaN       NaN 0.000E+00       NaN
 ETOT 41                   NaN       NaN 0.000E+00       NaN
 ETOT 42                   NaN       NaN 0.000E+00       NaN
 ETOT 43                   NaN       NaN 0.000E+00       NaN
 ETOT 44                   NaN       NaN 0.000E+00       NaN
 ETOT 45                   NaN       NaN 0.000E+00       NaN
 ETOT 46                   NaN       NaN 0.000E+00       NaN
 ETOT 47                   NaN       NaN 0.000E+00       NaN
 ETOT 48                   NaN       NaN 0.000E+00       NaN
 ETOT 49                   NaN       NaN 0.000E+00       NaN
 ETOT 50                   NaN       NaN 0.000E+00       NaN
 ETOT 51                   NaN       NaN 0.000E+00       NaN
 ETOT 52                   NaN       NaN 0.000E+00       NaN
 ETOT 53                   NaN       NaN 0.000E+00       NaN
 ETOT 54                   NaN       NaN 0.000E+00       NaN
 ETOT 55                   NaN       NaN 0.000E+00       NaN
 ETOT 56                   NaN       NaN 0.000E+00       NaN
 ETOT 57                   NaN       NaN 0.000E+00       NaN
 ETOT 58                   NaN       NaN 0.000E+00       NaN
 ETOT 59                   NaN       NaN 0.000E+00       NaN
 ETOT 60                   NaN       NaN 0.000E+00       NaN
 ETOT 61                   NaN       NaN 0.000E+00       NaN
 ETOT 62                   NaN       NaN 0.000E+00       NaN
 ETOT 63                   NaN       NaN 0.000E+00       NaN
 ETOT 64                   NaN       NaN 0.000E+00       NaN
 ETOT 65                   NaN       NaN 0.000E+00       NaN
 ETOT 66                   NaN       NaN 0.000E+00       NaN
 ETOT 67                   NaN       NaN 0.000E+00       NaN
 ETOT 68                   NaN       NaN 0.000E+00       NaN
 ETOT 69                   NaN       NaN 0.000E+00       NaN
 ETOT 70                   NaN       NaN 0.000E+00       NaN
 ETOT 71                   NaN       NaN 0.000E+00       NaN
 ETOT 72                   NaN       NaN 0.000E+00       NaN
 ETOT 73                   NaN       NaN 0.000E+00       NaN
 ETOT 74                   NaN       NaN 0.000E+00       NaN
 ETOT 75                   NaN       NaN 0.000E+00       NaN
 ETOT 76                   NaN       NaN 0.000E+00       NaN
 ETOT 77                   NaN       NaN 0.000E+00       NaN
 ETOT 78                   NaN       NaN 0.000E+00       NaN
 ETOT 79                   NaN       NaN 0.000E+00       NaN
 ETOT 80                   NaN       NaN 0.000E+00       NaN
 ETOT 81                   NaN       NaN 0.000E+00       NaN
 ETOT 82                   NaN       NaN 0.000E+00       NaN
 ETOT 83                   NaN       NaN 0.000E+00       NaN
 ETOT 84                   NaN       NaN 0.000E+00       NaN
 ETOT 85                   NaN       NaN 0.000E+00       NaN
 ETOT 86                   NaN       NaN 0.000E+00       NaN
 ETOT 87                   NaN       NaN 0.000E+00       NaN
 ETOT 88                   NaN       NaN 0.000E+00       NaN
 ETOT 89                   NaN       NaN 0.000E+00       NaN
 ETOT 90                   NaN       NaN 0.000E+00       NaN
 ETOT 91                   NaN       NaN 0.000E+00       NaN
 ETOT 92                   NaN       NaN 0.000E+00       NaN
 ETOT 93                   NaN       NaN 0.000E+00       NaN
 ETOT 94                   NaN       NaN 0.000E+00       NaN
 ETOT 95                   NaN       NaN 0.000E+00       NaN
 ETOT 96                   NaN       NaN 0.000E+00       NaN
 ETOT 97                   NaN       NaN 0.000E+00       NaN
 ETOT 98                   NaN       NaN 0.000E+00       NaN
 ETOT 99                   NaN       NaN 0.000E+00       NaN
 ETOT  100                   NaN       NaN 0.000E+00       NaN

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=             NaN  sigma(3 2)=             NaN
  sigma(2 2)=             NaN  sigma(3 1)=             NaN
  sigma(3 3)=             NaN  sigma(2 1)=             NaN
 
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=          NaN; max=  0.0000E+00
   0.2500  0.2500  0.2500    1    -Infinity kpt; spin; max resid(k); each band:
       NaN      NaN      NaN      NaN      NaN      NaN      NaN      NaN
       NaN      NaN      NaN      NaN      NaN      NaN      NaN      NaN
       NaN      NaN      NaN      NaN      NaN      NaN      NaN      NaN
       NaN      NaN      NaN      NaN      NaN      NaN      NaN      NaN
       NaN      NaN      NaN      NaN      NaN      NaN      NaN      NaN
       NaN      NaN
  -0.2500  0.2500  0.2500    1    -Infinity kpt; spin; max resid(k); each band:
       NaN      NaN      NaN      NaN      NaN      NaN      NaN      NaN
       NaN      NaN      NaN      NaN      NaN      NaN      NaN      NaN
       NaN      NaN      NaN      NaN      NaN      NaN      NaN      NaN
       NaN      NaN      NaN      NaN      NaN      NaN      NaN      NaN
       NaN      NaN      NaN      NaN      NaN      NaN      NaN      NaN
       NaN      NaN
 reduced coordinates (array xred) for   10 atoms
       0.000000000000      0.000000000000      0.000000000000
       0.500000000000      0.500000000000      0.500000000000
       0.282900000000      0.282900000000      0.282900000000
       0.782900000000      0.782900000000      0.782900000000
       0.221330000000      0.611903333000      0.859166667000
       0.859166667000      0.221330000000      0.611903333000
       0.611903333000      0.859166667000      0.221330000000
       0.111903333000      0.721330000000      0.359166667000
       0.359166667000      0.111903333000      0.721330000000
       0.721330000000      0.359166667000      0.111903333000
 rms dE/dt=         NaN; max dE/dt=         NaN; dE/dt below (all hartree)
    1                  NaN                 NaN                 NaN
    2                  NaN                 NaN                 NaN
    3                  NaN                 NaN                 NaN
    4                  NaN                 NaN                 NaN
    5                  NaN                 NaN                 NaN
    6                  NaN                 NaN                 NaN
    7                  NaN                 NaN                 NaN
    8                  NaN                 NaN                 NaN
    9                  NaN                 NaN                 NaN
   10                  NaN                 NaN                 NaN
 
 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      0.00000000000000     0.00000000000000     6.93805943062798
    3      0.00000000000000     0.00000000000000     3.92555402584931
    4      0.00000000000000     0.00000000000000    10.86361345647728
    5     -1.52923971201762    -0.63683896030850     7.82798118692986
    6      1.31613857375564    -1.00594095892901     7.82798118692986
    7      0.21310113826198     1.64277991923750     7.82798118692986
    8     -1.27389306834591     0.93276959716793     5.51529471005386
    9     -0.17085563285225    -1.56960855747643     5.51529471005387
   10      1.44474870119816     0.63683896030850     5.51529471005386

 cartesian forces (hartree/bohr) at end:
    1                   NaN                  NaN                  NaN
    2                   NaN                  NaN                  NaN
    3                   NaN                  NaN                  NaN
    4                   NaN                  NaN                  NaN
    5                   NaN                  NaN                  NaN
    6                   NaN                  NaN                  NaN
    7                   NaN                  NaN                  NaN
    8                   NaN                  NaN                  NaN
    9                   NaN                  NaN                  NaN
   10                   NaN                  NaN                  NaN
 frms,max,avg=           NaN           NaN         NaN        NaN        NaN h/b

 cartesian forces (eV/Angstrom) at end:
    1                   NaN                  NaN                  NaN
    2                   NaN                  NaN                  NaN
    3                   NaN                  NaN                  NaN
    4                   NaN                  NaN                  NaN
    5                   NaN                  NaN                  NaN
    6                   NaN                  NaN                  NaN
    7                   NaN                  NaN                  NaN
    8                   NaN                  NaN                  NaN
    9                   NaN                  NaN                  NaN
   10                   NaN                  NaN                  NaN
 frms,max,avg=           NaN           NaN         NaN        NaN        NaN e/A
 length scales= 10.391549200000 10.391549200000 10.391549200000 bohr
              =  5.498970998582  5.498970998582  5.498970998582 angstroms
 prteigrs : about to open file /home/weitong/setup/abinit/AbinitGUI/MySims/tets1_1_parallel/wholedata/test1/test1o_EIG
 Fermi (or HOMO) energy (hartree) =**********   Average Vxc (hartree)=       NaN
 Eigenvalues (hartree) for nkpt=   2  k points:
 kpt#   1, nband= 42, wtk=  0.25000, kpt=  0.2500  0.2500  0.2500 (reduced coord)
       NaN       NaN       NaN       NaN       NaN       NaN       NaN       NaN
       NaN       NaN       NaN       NaN       NaN       NaN       NaN       NaN
       NaN       NaN       NaN       NaN       NaN       NaN       NaN       NaN
       NaN       NaN       NaN       NaN       NaN       NaN       NaN       NaN
       NaN       NaN       NaN       NaN       NaN       NaN       NaN       NaN
       NaN       NaN
 kpt#   2, nband= 42, wtk=  0.75000, kpt= -0.2500  0.2500  0.2500 (reduced coord)
       NaN       NaN       NaN       NaN       NaN       NaN       NaN       NaN
       NaN       NaN       NaN       NaN       NaN       NaN       NaN       NaN
       NaN       NaN       NaN       NaN       NaN       NaN       NaN       NaN
       NaN       NaN       NaN       NaN       NaN       NaN       NaN       NaN
       NaN       NaN       NaN       NaN       NaN       NaN       NaN       NaN
       NaN       NaN
 Total charge density [el/Bohr^3]
,     Maximum=           NaN  at reduced coord.    0.0000    0.0000    0.0000
,Next maximum=           NaN  at reduced coord.    0.0313    0.0000    0.0000
,     Minimum=           NaN  at reduced coord.    0.0000    0.0000    0.0000
,Next minimum=           NaN  at reduced coord.    0.0313    0.0000    0.0000
,  Integrated=           NaN

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =                   NaN
    Hartree energy  =                   NaN
    XC energy       =                   NaN
    Ewald energy    = -8.24270911519143E+01
    PspCore energy  =  1.36300852151760E+01
    Loc. psp. energy=                   NaN
    NL   psp  energy=                   NaN
    >>>>>>>>> Etotal=                   NaN

 Other information on the energy :
    Total energy(eV)=                   NaN ; Band energy (Ha)=                NaN
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=             NaN  sigma(3 2)=             NaN
  sigma(2 2)=             NaN  sigma(3 1)=             NaN
  sigma(3 3)=             NaN  sigma(2 1)=             NaN

-Cartesian components of stress tensor (GPa)         [Pressure=         NaN GPa]
- sigma(1 1)=             NaN  sigma(3 2)=             NaN
- sigma(2 2)=             NaN  sigma(3 1)=             NaN
- sigma(3 3)=             NaN  sigma(2 1)=             NaN

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
        accesswff           1
            acell      1.0391549200E+01  1.0391549200E+01  1.0391549200E+01 Bohr
              amu      9.29063800E+01  6.94100000E+00  1.59994000E+01
           diemac      1.00000000E+01
             ecut      8.00000000E+00 Hartree
           ecutsm      5.00000000E-01 Hartree
           etotal                   NaN
            fcart                   NaN               NaN               NaN
                                    NaN               NaN               NaN
                                    NaN               NaN               NaN
                                    NaN               NaN               NaN
                                    NaN               NaN               NaN
                                    NaN               NaN               NaN
                                    NaN               NaN               NaN
                                    NaN               NaN               NaN
                                    NaN               NaN               NaN
                                    NaN               NaN               NaN
           fftalg         401
      fft_opt_lob           2
           iprcch           6
              ixc           7
              kpt      2.50000000E-01  2.50000000E-01  2.50000000E-01
                      -2.50000000E-01  2.50000000E-01  2.50000000E-01
         kptrlatt        2    0    0      0    2    0      0    0    2
          kptrlen      1.94683329E+01
P           mkmem           1
            natom          10
            nband          42
           nbdbuf           2
            ngfft          32      32      32
             nkpt           2
            npfft           4
-           npkpt           2
            nstep         100
             nsym           6
           ntypat           3
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
           ortalg          -2
        paral_kgb           1
            rprim      5.4082634987E-01  0.0000000000E+00  8.4113426947E-01
                      -2.7041317494E-01  4.6836935803E-01  8.4113426947E-01
                      -2.7041317494E-01 -4.6836935803E-01  8.4113426947E-01
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         161
           strten                   NaN               NaN               NaN
                                    NaN               NaN               NaN
           symrel      1  0  0   0  1  0   0  0  1       0  1  0   1  0  0   0  0  1
                       0  0  1   1  0  0   0  1  0       1  0  0   0  0  1   0  1  0
                       0  1  0   0  0  1   1  0  0       0  0  1   0  1  0   1  0  0
            tnons      0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.5000000
           toldfe      1.00000000E-12 Hartree
            typat      1  1  2  2  3  3  3  3  3  3
         wfoptalg          14
              wtk        0.25000    0.75000
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  6.9380594306E+00
                       0.0000000000E+00  0.0000000000E+00  3.9255540258E+00
                       0.0000000000E+00  0.0000000000E+00  1.0863613456E+01
                      -1.5292397120E+00 -6.3683896031E-01  7.8279811869E+00
                       1.3161385738E+00 -1.0059409589E+00  7.8279811869E+00
                       2.1310113826E-01  1.6427799192E+00  7.8279811869E+00
                      -1.2738930683E+00  9.3276959717E-01  5.5152947101E+00
                      -1.7085563285E-01 -1.5696085575E+00  5.5152947101E+00
                       1.4447487012E+00  6.3683896031E-01  5.5152947101E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.3111032218E+01
                       0.0000000000E+00  0.0000000000E+00  7.4182220287E+00
                       0.0000000000E+00  0.0000000000E+00  2.0529254246E+01
                      -2.8898442472E+00 -1.2034512257E+00  1.4792740617E+01
                       2.4871414573E+00 -1.9009529182E+00  1.4792740617E+01
                       4.0270278992E-01  3.1044041440E+00  1.4792740617E+01
                      -2.4073090218E+00  1.7626790837E+00  1.0422396544E+01
                      -3.2287035435E-01 -2.9661303095E+00  1.0422396544E+01
                       2.7301793761E+00  1.2034512257E+00  1.0422396544E+01
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       2.8290000000E-01  2.8290000000E-01  2.8290000000E-01
                       7.8290000000E-01  7.8290000000E-01  7.8290000000E-01
                       2.2133000000E-01  6.1190333300E-01  8.5916666700E-01
                       8.5916666700E-01  2.2133000000E-01  6.1190333300E-01
                       6.1190333300E-01  8.5916666700E-01  2.2133000000E-01
                       1.1190333300E-01  7.2133000000E-01  3.5916666700E-01
                       3.5916666700E-01  1.1190333300E-01  7.2133000000E-01
                       7.2133000000E-01  3.5916666700E-01  1.1190333300E-01
            znucl       41.00000    3.00000    8.00000

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

 [1] Large scale ab initio calculations based on three levels of parallelization
 F. Bottin, S. Leroux, A. Knyazev, G. Zerah, Comput. Mat. Science 42, 329, (2008).
 Comment : in case paral_kgb is non-zero. Strong suggestion to cite this paper in your publications.
 This paper is also available at http://www.arxiv.org/abs/0707.3405

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
- Proc.   0 individual time (sec): cpu=         17.6  wall=         17.7

================================================================================

 Calculation completed.
.Delivered    0 WARNINGs and   2 COMMENTs to log file.
+Overall time at end (sec) : cpu=        140.6  wall=        141.8
