
.Version 6.10.1 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel10.1 computer) 

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

.Starting date : Tue 15 Nov 2011.
- ( at 22h16 )
  
- input  file    -> Al.scf.in
- output file    -> Al.scf.out
- root for input  files -> ./tmp/ali
- root for output files -> ./tmp/alo


 DATASET    1 : space group P1 (#  1); Bravais aP (primitive triclinic)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         3 xclevel =         1
  lmnmax =         3   lnmax =         3   mband =        40  mffmem =         1
P  mgfft =        27   mkmem =         1 mpssoang=         2     mpw =        40
  mqgrid =      3001   natom =         1    nfft =     19683    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       4.739 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.026 Mbytes ; DEN or POT disk file :      0.152 Mbytes.
================================================================================


 DATASET    2 : space group P1 (#  1); Bravais aP (primitive triclinic)
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
  lmnmax =         3   lnmax =         3   mband =        40  mffmem =         1
P  mgfft =        27   mkmem =         1 mpssoang=         2     mpw =        40
  mqgrid =      3001   natom =         1    nfft =     19683    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       4.139 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.026 Mbytes ; DEN or POT disk file :      0.152 Mbytes.
================================================================================


 DATASET    3 : space group P1 (#  1); Bravais aP (primitive triclinic)
================================================================================
 Values of the parameters that define the memory need for DATASET  3 (RF).
   intxc =         0    iscf =        -3 xclevel =         1  lmnmax =         3
   lnmax =         3   mband =        40  mffmem =         1   mgfft =        27
P  mkmem =         1  mkqmem =         1  mk1mem =         1 mpssoang=         2
     mpw =        80  mqgrid =      3001   natom =         1    nfft =     19683
    nkpt =         1  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =         1  n1xccc =         0  ntypat =         1
  occopt =         3
================================================================================
P This job should need less than                       5.040 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.051 Mbytes ; DEN or POT disk file :      0.152 Mbytes.
================================================================================


 DATASET    4 : space group P1 (#  1); Bravais aP (primitive triclinic)
================================================================================
 Values of the parameters that define the memory need for DATASET  4 (RF).
   intxc =         0    iscf =        -3 xclevel =         1  lmnmax =         3
   lnmax =         3   mband =        40  mffmem =         1   mgfft =        27
P  mkmem =         1  mkqmem =         1  mk1mem =         1 mpssoang=         2
     mpw =        80  mqgrid =      3001   natom =         1    nfft =     19683
    nkpt =         1  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =         1  n1xccc =         0  ntypat =         1
  occopt =         3
================================================================================
P This job should need less than                       5.040 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.051 Mbytes ; DEN or POT disk file :      0.152 Mbytes.
================================================================================


 DATASET    5 : space group P1 (#  1); Bravais aP (primitive triclinic)
================================================================================
 Values of the parameters that define the memory need for DATASET  5 (RF).
   intxc =         0    iscf =        -3 xclevel =         1  lmnmax =         3
   lnmax =         3   mband =        40  mffmem =         1   mgfft =        27
P  mkmem =         1  mkqmem =         1  mk1mem =         1 mpssoang=         2
     mpw =        80  mqgrid =      3001   natom =         1    nfft =     19683
    nkpt =         1  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =         1  n1xccc =         0  ntypat =         1
  occopt =         3
================================================================================
P This job should need less than                       5.040 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.051 Mbytes ; DEN or POT disk file :      0.152 Mbytes.
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
            acell      7.6557000000E+00  7.6557000000E+00  7.6557000000E+00 Bohr
              amu      2.69800000E+01
             ecut      2.50000000E+01 Hartree
           enunit           2
      fft_opt_lob           2
           getden1          0
           getden2          1
           getden3          0
           getden4          0
           getden5          0
           getwfk1          0
           getwfk2          1
           getwfk3          2
           getwfk4          2
           getwfk5          2
           iprcch           6
             iscf1          3
             iscf2         -2
             iscf3         -3
             iscf4         -3
             iscf5         -3
           istwfk1       2
           istwfk2       2
           istwfk3       1
           istwfk4       1
           istwfk5       1
           jdtset        1    2    3    4    5
           kptopt           0
P           mkmem           1
P          mkqmem           1
P          mk1mem           1
            natom           1
            nband          40
           nbdbuf1          0
           nbdbuf2          2
           nbdbuf3          2
           nbdbuf4          2
           nbdbuf5          2
           ndtset           5
            ngfft          27      27      27
             nkpt           1
           npband           8
             nqpt1          0
             nqpt2          0
             nqpt3          1
             nqpt4          1
             nqpt5          1
             nsym           1
           ntypat           1
              occ      2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
           occopt           3
        optdriver1          0
        optdriver2          0
        optdriver3          1
        optdriver4          1
        optdriver5          1
        optforces           1
           ortalg          -2
        paral_kgb           1
           prtvol           1
            rfdir1          0       0       0
            rfdir2          0       0       0
            rfdir3          1       0       0
            rfdir4          0       1       0
            rfdir5          0       0       1
           rfelfd1          0
           rfelfd2          0
           rfelfd3          2
           rfelfd4          2
           rfelfd5          2
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
          spgroup           1
           toldfe1     1.00000000E-10 Hartree
           toldfe2     0.00000000E+00 Hartree
           toldfe3     0.00000000E+00 Hartree
           toldfe4     0.00000000E+00 Hartree
           toldfe5     0.00000000E+00 Hartree
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-22
           tolwfr3     1.00000000E-22
           tolwfr4     1.00000000E-22
           tolwfr5     1.00000000E-22
           tsmear      2.00000000E-04 Hartree
            typat      1
         wfoptalg          14
            znucl       13.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.

 chkinp: Checking input parameters for consistency, jdtset=   3.

 chkinp: Checking input parameters for consistency, jdtset=   4.

 chkinp: Checking input parameters for consistency, jdtset=   5.

================================================================================
== DATASET  1 ==================================================================

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  3.8278500  3.8278500  G(1)= -0.1306216  0.1306216  0.1306216
 R(2)=  3.8278500  0.0000000  3.8278500  G(2)=  0.1306216 -0.1306216  0.1306216
 R(3)=  3.8278500  3.8278500  0.0000000  G(3)=  0.1306216  0.1306216 -0.1306216
 Unit cell volume ucvol=  1.1217465E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  27  27  27
         ecut(hartree)=     25.000   => boxcut(ratio)=   2.13703

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is ../../../PPs/13al.psphgh
- pspatm: opening atomic psp file    ../../../PPs/13al.psphgh
 HGH psp for aluminium, from PRB58, 3641 (1998)
- 13.00000   3.00000     10221                znucl, zion, pspdat
    3    1    1    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.4500000
 cc1 =  -8.4913510; cc2 =   0.0000000; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.4601040; h11s=   5.0883400; h22s=   2.6797000; h33s=   0.0000000
 rrp =   0.5367440; h11p=   2.1934380; h22p=   0.0000000; h33p=   0.0000000
                    k11p=   0.0061540; k22p=   0.0039470; k33p=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   -8.36960928
         --- l  ekb(1:nproj) -->
             0    0.792147    1.890012
             1    0.692782
 pspatm: atomic psp has been read  and splines computed

  -2.51088278E+01                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating     40 bands with npw=      40 for ikpt=   1 by node    0
 
 setup2: Arith. and geom. avg. npw (full set) are      79.000      79.000

================================================================================

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
 ETOT  1  -1.9633309344990    -1.963E+00 1.711E-04 5.490E+00 0.000E+00 0.000E+00
 ETOT  2  -1.9635020244991    -1.711E-04 1.272E-06 8.458E-02 0.000E+00 0.000E+00
 ETOT  3  -1.9635055011521    -3.477E-06 1.350E-07 3.481E-04 0.000E+00 0.000E+00
 ETOT  4  -1.9635418616802    -3.636E-05 1.268E-08 2.999E-02 0.000E+00 0.000E+00
 ETOT  5  -1.9635057340640     3.613E-05 2.051E-09 5.798E-03 0.000E+00 0.000E+00
 ETOT  6  -1.9633996224626     1.061E-04 3.100E-10 2.564E-01 0.000E+00 0.000E+00
 ETOT  7  -1.9639568493683    -5.572E-04 1.296E-09 3.815E-01 0.000E+00 0.000E+00
 ETOT  8  -1.9634193703900     5.375E-04 8.177E-09 3.256E+00 0.000E+00 0.000E+00
 ETOT  9  -1.9653505200731    -1.931E-03 1.705E-08 2.030E+00 0.000E+00 0.000E+00
 ETOT 10  -1.9668247320806    -1.474E-03 1.335E-07 9.222E-01 0.000E+00 0.000E+00
 ETOT 11  -1.9670264343258    -2.017E-04 5.653E-08 3.992E-01 0.000E+00 0.000E+00
 ETOT 12  -1.9670486374731    -2.220E-05 4.134E-08 3.360E-03 0.000E+00 0.000E+00
 ETOT 13  -1.9670503745566    -1.737E-06 2.341E-09 1.278E-03 0.000E+00 0.000E+00
 ETOT 14  -1.9670504253092    -5.075E-08 7.419E-11 2.500E-04 0.000E+00 0.000E+00
 ETOT 15  -1.9670504392170    -1.391E-08 1.053E-10 2.015E-06 0.000E+00 0.000E+00
 ETOT 16  -1.9670504393369    -1.199E-10 5.479E-13 2.523E-08 0.000E+00 0.000E+00
 ETOT 17  -1.9670504393436    -6.678E-12 4.827E-14 9.722E-10 0.000E+00 0.000E+00
 ETOT 18  -1.9670504393518    -8.212E-12 4.872E-15 2.758E-11 0.000E+00 0.000E+00

 At SCF step   18, etot is converged : 
  for the second time, diff in etot=  8.212E-12 < toldfe=  1.000E-10

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.65304427E-04  sigma(3 2)=  3.35297918E-03
  sigma(2 2)=  1.65302430E-04  sigma(3 1)= -3.35297651E-03
  sigma(3 3)=  1.65304898E-04  sigma(2 1)=  3.35297963E-03
 
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   2.3501E-16; max=  4.8719E-15
   0.0000  0.0000  0.0000    1  4.87194E-15 kpt; spin; max resid(k); each band:
  3.74E-20 5.99E-19 4.00E-19 5.94E-20 1.17E-20 1.61E-21 2.80E-21 2.19E-20
  7.01E-21 2.83E-20 5.01E-19 2.84E-21 3.08E-21 5.73E-21 1.10E-18 2.52E-19
  2.22E-19 7.85E-20 1.45E-19 1.28E-19 6.79E-20 3.01E-17 1.04E-16 1.23E-16
  8.96E-18 4.55E-18 4.40E-18 8.53E-19 2.79E-18 3.17E-18 4.67E-17 6.55E-17
  5.18E-17 1.99E-18 2.35E-18 4.53E-18 1.14E-17 3.83E-15 2.30E-16 4.87E-15
 reduced coordinates (array xred) for    1 atoms
       0.000000000000      0.000000000000      0.000000000000
 rms dE/dt=  2.4033E-13; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
 
 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000

 cartesian forces (hartree/bohr) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   6.600E-14  3.277E-14 -2.185E-14 h/b

 cartesian forces (eV/Angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   3.394E-12  1.685E-12 -1.124E-12 e/A
 length scales=  7.655700000000  7.655700000000  7.655700000000 bohr
              =  4.051221955802  4.051221955802  4.051221955802 angstroms
 prteigrs : about to open file ./tmp/alo_DS1_EIG
 Fermi (or HOMO) energy (hartree) =   0.81470   Average Vxc (hartree)=  -0.33936
 Eigenvalues (hartree) for nkpt=   1  k points:
 kpt#   1, nband= 40, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -0.04784   0.81470   0.82588   0.82588   0.86160   0.86272   0.86272   0.97491
   1.07090   1.07090   1.14622   1.24678   1.25937   1.25937   1.36420   1.74950
   2.19894   2.21672   2.21672   2.35547   2.35547   2.39163   2.40142   2.40142
   2.46115   2.46115   2.46487   3.01712   3.07466   3.07466   3.11024   3.11723
   3.11723   3.22657   3.23638   3.23638   3.39108   3.40127   3.40127   3.42221
      occupation numbers for kpt#   1
   2.00000   1.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
 Fermi (or HOMO) energy (eV) =  22.16920   Average Vxc (eV)=  -9.23444
 Eigenvalues (   eV  ) for nkpt=   1  k points:
 kpt#   1, nband= 40, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -1.30183  22.16920  22.47335  22.47335  23.44545  23.47575  23.47575  26.52861
  29.14055  29.14055  31.19013  33.92658  34.26912  34.26912  37.12189  47.60624
  59.83617  60.32006  60.32006  64.09546  64.09546  65.07948  65.34593  65.34593
  66.97143  66.97143  67.07244  82.09990  83.66569  83.66569  84.63383  84.82410
  84.82410  87.79941  88.06629  88.06629  92.27611  92.55337  92.55337  93.12316
 Total charge density [el/Bohr^3]
,     Maximum=    6.6679E-02  at reduced coord.    0.1111    0.6296    0.1111
,Next maximum=    6.6679E-02  at reduced coord.    0.8889    0.3704    0.8889
,     Minimum=    4.0186E-05  at reduced coord.    0.0000    0.0370    0.0370
,Next minimum=    4.0186E-05  at reduced coord.    0.0000    0.9630    0.9630
,  Integrated=    5.6278E-06

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  1.19739621435899E+00
    Hartree energy  =  1.41675239042327E-02
    XC energy       = -8.15602389759250E-01
    Ewald energy    = -2.69496967403532E+00
    PspCore energy  = -2.23836914378345E-01
    Loc. psp. energy=  3.22204738845825E-01
    NL   psp  energy=  2.33867320584279E-01
    >>>>> Internal E= -1.96677318047959E+00

    -kT*entropy     = -2.77258872223357E-04
    >>>>>>>>> Etotal= -1.96705043935181E+00

 Other information on the energy :
    Total energy(eV)= -5.35261645771839E+01 ; Band energy (Ha)=   7.1902022045E-01
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.65304427E-04  sigma(3 2)=  3.35297918E-03
  sigma(2 2)=  1.65302430E-04  sigma(3 1)= -3.35297651E-03
  sigma(3 3)=  1.65304898E-04  sigma(2 1)=  3.35297963E-03

-Cartesian components of stress tensor (GPa)         [Pressure= -4.8634E+00 GPa]
- sigma(1 1)=  4.86342332E+00  sigma(3 2)=  9.86480366E+01
- sigma(2 2)=  4.86336457E+00  sigma(3 1)= -9.86479580E+01
- sigma(3 3)=  4.86343718E+00  sigma(2 1)=  9.86480500E+01

================================================================================
== DATASET  2 ==================================================================

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.

 mkfilename : getden/=0, take file _DEN from output of DATASET   1.

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  3.8278500  3.8278500  G(1)= -0.1306216  0.1306216  0.1306216
 R(2)=  3.8278500  0.0000000  3.8278500  G(2)=  0.1306216 -0.1306216  0.1306216
 R(3)=  3.8278500  3.8278500  0.0000000  G(3)=  0.1306216  0.1306216 -0.1306216
 Unit cell volume ucvol=  1.1217465E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  27  27  27
         ecut(hartree)=     25.000   => boxcut(ratio)=   2.13703
--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file ./tmp/alo_DS1_WFK
