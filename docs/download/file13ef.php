
.Version 7.0.4 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel11.1 computer) 

.Copyright (C) 1998-2012 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Fri 25 Jan 2013.
- ( at 10h30 )
  
- input  file    -> tbasepar_2.in
- output file    -> tbasepar_2.out
- root for input  files -> tbasepar_2i
- root for output files -> tbasepar_2o


 Symmetries : space group P-4 3 m (#215); Bravais cP (primitive cubic)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         6   lnmax =         6   mband =        40  mffmem =         1
P  mgfft =        36   mkmem =         1 mpssoang=         3     mpw =       675
  mqgrid =      3001   natom =         4    nfft =     46656    nkpt =         1
  nloalg =         4  nspden =         2 nspinor =         1  nsppol =         2
    nsym =        24  n1xccc =         0  ntypat =         1  occopt =         7
================================================================================
P This job should need less than                      20.017 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.826 Mbytes ; DEN or POT disk file :      0.714 Mbytes.
================================================================================

--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
        accesswff           1
            acell      7.0000000000E+00  7.0000000000E+00  7.0000000000E+00 Bohr
              amu      5.58470000E+01
           bandpp           2
             ecut      3.00000000E+01 Hartree
           fftalg         401
      fft_opt_lob           2
           iprcch           6
             iscf           5
              kpt      2.50000000E-01  2.50000000E-01  2.50000000E-01
         kptrlatt        2    0    0      0    2    0      0    0    2
          kptrlen      1.40000000E+01
P           mkmem           1
            natom           4
            nband          40
            ngfft          36      36      36
             nkpt           1
            nline           5
           npband           4
            npkpt           2
           nspden           2
           nsppol           2
            nstep           5
             nsym          24
           ntypat           1
              occ      1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
           occopt           7
        optforces           1
           ortalg          -2
        paral_kgb           1
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         215
           spinat      0.0000000000E+00  0.0000000000E+00  3.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0 -1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0 -1
                       0  1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0 -1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0 -1
                       0  0  1   1  0  0   0  1  0       0  0 -1   1  0  0   0 -1  0
                       0  0 -1  -1  0  0   0  1  0       0  0  1  -1  0  0   0 -1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0  1   0 -1  0
                      -1  0  0   0  0 -1   0  1  0       1  0  0   0  0 -1   0 -1  0
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0  1  -1  0  0
                       0 -1  0   0  0 -1   1  0  0       0  1  0   0  0 -1  -1  0  0
                       0  0  1   0  1  0   1  0  0       0  0 -1   0  1  0  -1  0  0
                       0  0 -1   0 -1  0   1  0  0       0  0  1   0 -1  0  -1  0  0
            tnons      0.0000000  0.0000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.5000000  0.5000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.5000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.0000000
                       0.5000000  0.0000000  0.5000000     0.0000000  0.5000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.5000000  0.5000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.5000000  0.5000000     0.5000000  0.5000000  0.0000000
           tolvrs      1.00000000E-13
            typat      1  1  1  1
         wfoptalg          14
           xangst      3.7042404601E-02  3.7042404601E-02  3.7042404601E-02
                       1.8150778255E+00  1.8150778255E+00  3.7042404601E-02
                       1.8150778255E+00  3.7042404601E-02  1.8150778255E+00
                       3.7042404601E-02  1.8150778255E+00  1.8150778255E+00
            xcart      7.0000000000E-02  7.0000000000E-02  7.0000000000E-02
                       3.4300000000E+00  3.4300000000E+00  7.0000000000E-02
                       3.4300000000E+00  7.0000000000E-02  3.4300000000E+00
                       7.0000000000E-02  3.4300000000E+00  3.4300000000E+00
             xred      1.0000000000E-02  1.0000000000E-02  1.0000000000E-02
                       4.9000000000E-01  4.9000000000E-01  1.0000000000E-02
                       4.9000000000E-01  1.0000000000E-02  4.9000000000E-01
                       1.0000000000E-02  4.9000000000E-01  4.9000000000E-01
            znucl       26.00000

================================================================================

 chkinp: Checking input parameters for consistency.

================================================================================
== DATASET  1 ==================================================================
-   nproc =    8

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  7.0000000  0.0000000  0.0000000  G(1)=  0.1428571  0.0000000  0.0000000
 R(2)=  0.0000000  7.0000000  0.0000000  G(2)=  0.0000000  0.1428571  0.0000000
 R(3)=  0.0000000  0.0000000  7.0000000  G(3)=  0.0000000  0.0000000  0.1428571
 Unit cell volume ucvol=  3.4300000E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  36
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.08583

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is /home/users/kananm26/abinit-7.0.4/tests/Psps_for_tests/HGH/26fe.8.hgh
- pspatm: opening atomic psp file    /home/users/kananm26/abinit-7.0.4/tests/Psps_for_tests/HGH/26fe.8.hgh
- Hartwigsen-Goedecker-Hutter psp for Fe,  from PRB58, 3641 (1998)
- 26.00000   8.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.6100000
 cc1 =   0.0000000; cc2 =   0.0000000; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.4544820; h11s=   3.0166400; h22s=   2.5830380; h33s=   3.2576350
 rrp =   0.6389030; h11p=   1.4996420; h22p=   0.3268740; h33p=   0.0000000
                    k11p=  -0.0149090; k22p=   0.0497930; k33p=   0.0000000
 rrd =   0.3087320; h11d=  -9.1453540; h22d=   0.0000000; h33d=   0.0000000
                    k11d=   0.0057220; k22d=   0.0000000; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   18.70378602
         --- l  ekb(1:nproj) -->
             0    0.268589    0.812381    1.866551
             1    0.234598    1.143985
             2   -0.034669
 pspatm: atomic psp has been read  and splines computed

   2.39408461E+03                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating     40 bands with npw=     675 for ikpt=   1 by node    0
P newkpt: treating     40 bands with npw=     675 for ikpt=   1 by node    1
 
 setup2: Arith. and geom. avg. npw (full set) are     675.000     675.000

================================================================================

     iter   Etot(hartree)     deltaE(h) residm    vres2   diffor   maxfor   magn
 ETOT  1  -71.132598471493    -7.11E+01 1.59E-05 2.95E+04 2.6E-02 2.65E-02 8.000
 ETOT  2  -70.863785363230     2.69E-01 2.00E-05 2.75E+04 7.0E-02 4.31E-02 2.724
 ETOT  3  -80.017346567538    -9.15E+00 2.23E-03 2.42E+02 2.2E-02 2.12E-02 9.534
 ETOT  4  -80.087342509481    -7.00E-02 2.84E-05 6.56E+01 2.5E-02 4.11E-03 10.56
 ETOT  5  -74.906894709358     5.18E+00 6.65E-02 2.60E+04 1.5E-01 1.50E-01 10.54

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -9.13362800E-03  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -9.13362800E-03  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -9.13362800E-03  sigma(2 1)=  0.00000000E+00
 

 scprqt:  WARNING -
  nstep=    5 was not enough SCF cycles to converge;
  potential residual=  2.604E+04 exceeds tolvrs=  1.000E-13

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   1.7744E-03; max=  6.6511E-02
   0.2500  0.2500  0.2500    1  6.65110E-02 kpt; spin; max resid(k); each band:
  1.26E-04 1.11E-05 1.11E-05 7.58E-05 3.63E-06 3.63E-06 6.94E-05 6.65E-02
  4.63E-04 5.77E-04 5.76E-04 1.11E-03 1.11E-03 2.50E-05 2.50E-05 3.48E-02
  1.65E-05 1.66E-05 1.45E-05 1.44E-05 1.75E-03 1.49E-02 1.20E-06 1.20E-06
  9.72E-04 1.66E-06 1.63E-06 5.62E-04 3.03E-06 2.97E-06 1.72E-04 2.19E-05
  2.81E-06 2.56E-06 9.12E-04 2.62E-06 2.55E-06 2.81E-04 2.51E-05 2.47E-05
   0.2500  0.2500  0.2500    2  2.47094E-03 kpt; spin; max resid(k); each band:
  1.76E-05 4.10E-05 7.71E-05 7.73E-05 1.35E-04 1.39E-04 1.39E-04 6.23E-04
  1.39E-04 1.64E-04 3.81E-04 2.93E-04 3.73E-04 1.07E-04 4.23E-04 4.45E-04
  6.74E-04 7.24E-04 7.93E-04 4.05E-04 3.39E-04 1.47E-05 3.86E-04 2.87E-04
  8.97E-04 3.89E-04 3.54E-04 5.45E-04 2.47E-03 7.86E-04 8.17E-04 3.79E-05
  7.37E-04 1.94E-04 1.77E-04 1.20E-03 3.63E-04 3.41E-04 1.26E-04 1.16E-04
 reduced coordinates (array xred) for    4 atoms
       0.010000000000      0.010000000000      0.010000000000
       0.490000000000      0.490000000000      0.010000000000
       0.490000000000      0.010000000000      0.490000000000
       0.010000000000      0.490000000000      0.490000000000
 rms dE/dt=  1.0469E+00; max dE/dt=  1.0469E+00; dE/dt below (all hartree)
    1       1.046882810383      1.046882810383      1.046882810383
    2      -1.046882810383     -1.046882810383      1.046882810383
    3      -1.046882810383      1.046882810383     -1.046882810383
    4       1.046882810383     -1.046882810383     -1.046882810383
 
 cartesian coordinates (angstrom) at end:
    1      0.03704240460130     0.03704240460130     0.03704240460130
    2      1.81507782546370     1.81507782546370     0.03704240460130
    3      1.81507782546370     0.03704240460130     1.81507782546370
    4      0.03704240460130     1.81507782546370     1.81507782546370

 cartesian forces (hartree/bohr) at end:
    1     -0.14955468719760    -0.14955468719760    -0.14955468719760
    2      0.14955468719760     0.14955468719760    -0.14955468719760
    3      0.14955468719760    -0.14955468719760     0.14955468719760
    4     -0.14955468719760     0.14955468719760     0.14955468719760
 frms,max,avg= 1.4955469E-01 1.4955469E-01   0.000E+00  0.000E+00  0.000E+00 h/b

 cartesian forces (eV/Angstrom) at end:
    1     -7.69041057576860    -7.69041057576860    -7.69041057576860
    2      7.69041057576860     7.69041057576860    -7.69041057576860
    3      7.69041057576860    -7.69041057576860     7.69041057576860
    4     -7.69041057576860     7.69041057576860     7.69041057576860
 frms,max,avg= 7.6904106E+00 7.6904106E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales=  7.000000000000  7.000000000000  7.000000000000 bohr
              =  3.704240460130  3.704240460130  3.704240460130 angstroms
 prteigrs : about to open file tbasepar_2o_EIG
 Fermi (or HOMO) energy (hartree) =   0.25983   Average Vxc (hartree)=  -0.42347
 Magnetisation (Bohr magneton)=  1.05434045E+01
 Total spin up =  2.12717022E+01   Total spin down =  1.07282978E+01
 Eigenvalues (hartree) for nkpt=   1  k points, SPIN UP:
 kpt#   1, nband= 40, wtk=  1.00000, kpt=  0.2500  0.2500  0.2500 (reduced coord)
  -0.48163  -0.48163  -0.48132  -0.47381  -0.47380  -0.47144  -0.47144  -0.45908
  -0.41203  -0.40515  -0.40514  -0.40117  -0.40117  -0.39333  -0.39333  -0.38592
  -0.38454  -0.38453  -0.35407  -0.13448   0.05643   0.29261   0.29261   0.31519
   0.54841   0.54841   0.55098   0.68696   0.70544   0.70544   0.81007   0.92787
   0.92787   0.94717   0.97500   1.02144   1.02144   1.08365   1.17086   1.17086
      occupation numbers for kpt#   1
   1.00000   1.00000   1.00000   1.00000   1.00000   1.00000   1.00000   1.00000
   1.00000   1.00000   1.00000   1.00000   1.00000   1.00000   1.00000   1.00000
   1.00000   1.00000   1.00000   1.00000   1.00000   0.12327   0.12327   0.02516
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
 Eigenvalues (hartree) for nkpt=   1  k points, SPIN DOWN:
 kpt#   1, nband= 40, wtk=  1.00000, kpt=  0.2500  0.2500  0.2500 (reduced coord)
  -0.34948  -0.15041  -0.14761  -0.14761   0.04545   0.04657   0.04657   0.16982
   0.17095   0.17097   0.24279   0.34080   0.34115   0.40044   0.41388   0.41391
   0.46908   0.46916   0.47303   0.53078   0.53085   0.54066   0.54204   0.54215
   0.55323   0.57545   0.57817   0.57827   0.68155   0.73753   0.73765   0.75898
   0.77470   0.77475   0.77526   0.80820   0.81146   0.81148   0.95133   0.95135
      occupation numbers for kpt#   1
   1.00000   1.00000   1.00000   1.00000   1.00000   1.00000   1.00000   0.99927
   0.99916   0.99916   0.72659   0.00210   0.00202   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
 Total charge density [el/Bohr^3]
,     Maximum=    1.3722E+00  at reduced coord.    0.5000    0.5556    0.9444
,Next maximum=    1.3722E+00  at reduced coord.    0.0000    0.9444    0.9444
,     Minimum=    1.3980E-02  at reduced coord.    0.0000    0.0000    0.0000
,Next minimum=    1.3980E-02  at reduced coord.    0.5000    0.5000    0.0000
,  Integrated=    3.2000E+01
 Spin up density      [el/Bohr^3]
,     Maximum=    1.3121E+00  at reduced coord.    0.5000    0.5556    0.9444
,Next maximum=    1.3121E+00  at reduced coord.    0.0000    0.9444    0.9444
,     Minimum=    9.6231E-04  at reduced coord.    0.2500    0.2500    0.2500
,Next minimum=    1.0153E-03  at reduced coord.    0.3056    0.1944    0.1944
,  Integrated=    2.1272E+01
 Spin down density    [el/Bohr^3]
,     Maximum=    7.4382E-02  at reduced coord.    0.7500    0.7500    0.7500
,Next maximum=    7.3051E-02  at reduced coord.    0.7500    0.7500    0.7778
,     Minimum=    5.9983E-04  at reduced coord.    0.0000    0.0000    0.0000
,Next minimum=    5.9983E-04  at reduced coord.    0.5000    0.5000    0.0000
,  Integrated=    1.0728E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
,     Maximum=    1.2810E+00  at reduced coord.    0.0000    0.0000    0.9167
,Next maximum=    1.2810E+00  at reduced coord.    0.5000    0.5000    0.9167
,     Minimum=   -5.8356E-02  at reduced coord.    0.7500    0.7500    0.2500
,Next minimum=   -5.8356E-02  at reduced coord.    0.7500    0.2500    0.7500
,  Integrated=    1.0543E+01
 Relative magnetization (=zeta, between -1 and 1)
,     Maximum=    9.6300E-01  at reduced coord.    0.0000    0.3889    0.5000
,Next maximum=    9.6300E-01  at reduced coord.    0.1111    0.5000    0.5000
,     Minimum=   -9.4510E-01  at reduced coord.    0.2500    0.2500    0.2500
,Next minimum=   -9.4125E-01  at reduced coord.    0.2500    0.2500    0.2222

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  1.57704767360493E+02
    Hartree energy  =  1.82744721367767E+01
    XC energy       = -2.01317375494705E+01
    Ewald energy    = -8.36499227815283E+01
    PspCore energy  =  6.97983851565236E+00
    Loc. psp. energy= -5.37285622189003E+01
    NL   psp  energy= -1.00332543896596E+02
    >>>>> Internal E= -7.48836884335736E+01

    -kT*entropy     = -2.32062757842293E-02
    >>>>>>>>> Etotal= -7.49068947093578E+01

 Other information on the energy :
    Total energy(eV)= -2.03832026569694E+03 ; Band energy (Ha)=  -8.0798749642E+00
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -9.13362800E-03  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -9.13362800E-03  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -9.13362800E-03  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  2.6872E+02 GPa]
- sigma(1 1)= -2.68720568E+02  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -2.68720568E+02  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -2.68720568E+02  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
        accesswff           1
            acell      7.0000000000E+00  7.0000000000E+00  7.0000000000E+00 Bohr
              amu      5.58470000E+01
           bandpp           2
             ecut      3.00000000E+01 Hartree
           etotal     -7.4906894709E+01
            fcart     -1.4955468720E-01 -1.4955468720E-01 -1.4955468720E-01
                       1.4955468720E-01  1.4955468720E-01 -1.4955468720E-01
                       1.4955468720E-01 -1.4955468720E-01  1.4955468720E-01
                      -1.4955468720E-01  1.4955468720E-01  1.4955468720E-01
           fftalg         401
      fft_opt_lob           2
           iprcch           6
             iscf           5
              kpt      2.50000000E-01  2.50000000E-01  2.50000000E-01
         kptrlatt        2    0    0      0    2    0      0    0    2
          kptrlen      1.40000000E+01
P           mkmem           1
            natom           4
            nband          40
            ngfft          36      36      36
             nkpt           1
            nline           5
           npband           4
            npkpt           2
           nspden           2
           nsppol           2
            nstep           5
             nsym          24
           ntypat           1
              occ      1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  0.123273  0.123272  0.025157
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.999269  0.999162  0.999160  0.726587  0.002100
                       0.002018  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
           occopt           7
        optforces           1
           ortalg          -2
        paral_kgb           1
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         215
           spinat      0.0000000000E+00  0.0000000000E+00  3.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.0000000000E+00
           strten     -9.1336280045E-03 -9.1336280045E-03 -9.1336280045E-03
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0 -1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0 -1
                       0  1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0 -1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0 -1
                       0  0  1   1  0  0   0  1  0       0  0 -1   1  0  0   0 -1  0
                       0  0 -1  -1  0  0   0  1  0       0  0  1  -1  0  0   0 -1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0  1   0 -1  0
                      -1  0  0   0  0 -1   0  1  0       1  0  0   0  0 -1   0 -1  0
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0  1  -1  0  0
                       0 -1  0   0  0 -1   1  0  0       0  1  0   0  0 -1  -1  0  0
                       0  0  1   0  1  0   1  0  0       0  0 -1   0  1  0  -1  0  0
                       0  0 -1   0 -1  0   1  0  0       0  0  1   0 -1  0  -1  0  0
            tnons      0.0000000  0.0000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.5000000  0.5000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.5000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.0000000
                       0.5000000  0.0000000  0.5000000     0.0000000  0.5000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.5000000  0.5000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.5000000  0.5000000     0.5000000  0.5000000  0.0000000
           tolvrs      1.00000000E-13
            typat      1  1  1  1
         wfoptalg          14
           xangst      3.7042404601E-02  3.7042404601E-02  3.7042404601E-02
                       1.8150778255E+00  1.8150778255E+00  3.7042404601E-02
                       1.8150778255E+00  3.7042404601E-02  1.8150778255E+00
                       3.7042404601E-02  1.8150778255E+00  1.8150778255E+00
            xcart      7.0000000000E-02  7.0000000000E-02  7.0000000000E-02
                       3.4300000000E+00  3.4300000000E+00  7.0000000000E-02
                       3.4300000000E+00  7.0000000000E-02  3.4300000000E+00
                       7.0000000000E-02  3.4300000000E+00  3.4300000000E+00
             xred      1.0000000000E-02  1.0000000000E-02  1.0000000000E-02
                       4.9000000000E-01  4.9000000000E-01  1.0000000000E-02
                       4.9000000000E-01  1.0000000000E-02  4.9000000000E-01
                       1.0000000000E-02  4.9000000000E-01  4.9000000000E-01
            znucl       26.00000

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
- Proc.   0 individual time (sec): cpu=         12.4  wall=         13.0

================================================================================

 Calculation completed.
.Delivered    2 WARNINGs and   6 COMMENTs to log file.
+Overall time at end (sec) : cpu=         99.6  wall=        104.1
