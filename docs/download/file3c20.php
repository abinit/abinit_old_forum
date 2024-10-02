
.Version 8.8.4 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel15.0 computer) 

.Copyright (C) 1998-2018 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Wed  2 Sep 2020.
- ( at 00h24 )
  
- The starting date is more than 2 years after the initial release
- of this version of ABINIT, namely Jul 2018.
- Note that the use beyond 3 years after the release will not be supported.
- Action: please, switch to a more recent version of ABINIT.
 
- input  file    -> SnSe.in
- output file    -> SnSe.out
- root for input  files -> SnSe.i
- root for output files -> SnSe.o
 
 
 Symmetries : space group Pm n 2_1 (# 31); Bravais oP (primitive ortho.)
================================================================================
 Values of the parameters that define the memory need of the present run
     intxc =       0    ionmov =       0      iscf =       7    lmnmax =       6
     lnmax =       6     mgfft =     200  mpssoang =       3    mqgrid =    9801
     natom =       4  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       4    n1xccc =       0    ntypat =       2
    occopt =       1   xclevel =       2
-    mband =          30        mffmem =           1         mkmem =           1
       mpw =       23328          nfft =      405000          nkpt =          16
================================================================================
P This job should need less than                     137.119 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    170.861 Mbytes ; DEN or POT disk file :      3.092 Mbytes.
================================================================================
 
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.8897261329E+00  1.8897261329E+00  1.8897261329E+00 Bohr
              amu      1.18710000E+02  7.89600000E+01
      chksymbreak           0
           diemac      9.00000000E+00
             ecut      3.30743929E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
-          fftalg         312
              ixc     -101130
              kpt      6.25000000E-02  6.25000000E-02  5.00000000E-01
                       1.87500000E-01  6.25000000E-02  5.00000000E-01
                       3.12500000E-01  6.25000000E-02  5.00000000E-01
                       4.37500000E-01  6.25000000E-02  5.00000000E-01
                       6.25000000E-02  1.87500000E-01  5.00000000E-01
                       1.87500000E-01  1.87500000E-01  5.00000000E-01
                       3.12500000E-01  1.87500000E-01  5.00000000E-01
                       4.37500000E-01  1.87500000E-01  5.00000000E-01
                       6.25000000E-02  3.12500000E-01  5.00000000E-01
                       1.87500000E-01  3.12500000E-01  5.00000000E-01
                       3.12500000E-01  3.12500000E-01  5.00000000E-01
                       4.37500000E-01  3.12500000E-01  5.00000000E-01
                       6.25000000E-02  4.37500000E-01  5.00000000E-01
                       1.87500000E-01  4.37500000E-01  5.00000000E-01
                       3.12500000E-01  4.37500000E-01  5.00000000E-01
                       4.37500000E-01  4.37500000E-01  5.00000000E-01
         kptrlatt        8    0    0      0    8    0      0    0    1
          kptrlen      6.48285223E+01
P           mkmem           1
            natom           4
            nband          30
            ngfft          45      45     200
             nkpt          16
            nstep          60
             nsym           4
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
            rprim      4.2882220553E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  4.4179894154E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  2.0032233702E+01
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup          31
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0 -1
                       1  0  0   0  1  0   0  0 -1      -1  0  0   0  1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000    -0.0000000  0.5000000 -0.0000000
                       0.5000000  0.5000000 -0.0000000     0.5000000  0.0000000  0.0000000
           toldfe      1.00000000E-07 Hartree
           tolsym      1.00000000E-05
            typat      1  1  2  2
              wtk        0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250
           xangst      3.2161665072E+00  3.9998112749E+00  8.6354394028E+00
                       1.0720554795E+00  1.7908165672E+00  1.1396794300E+01
                       1.0720554795E+00  2.0387852167E+00  8.6813854880E+00
                       3.2161665072E+00  4.2477799244E+00  1.1350848214E+01
            xcart      6.0776738964E+00  7.5585478927E+00  1.6318615509E+01
                       2.0258912556E+00  3.3841528662E+00  2.1536820019E+01
                       2.0258912556E+00  3.8527457033E+00  1.6405441026E+01
                       6.0776738964E+00  8.0271407299E+00  2.1449994501E+01
             xred      7.4999999200E-01  9.0534650466E-01  4.3107720942E-01
                       2.4999999200E-01  4.0534650466E-01  5.6892279058E-01
                       2.4999999200E-01  4.6147354034E-01  4.3337081710E-01
                       7.4999999200E-01  9.6147354034E-01  5.6662918290E-01
            znucl       50.00000   34.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency.
 
================================================================================
== DATASET  1 ==================================================================
-   nproc =   16
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  8.1035653  0.0000000  0.0000000  G(1)=  0.1234025  0.0000000  0.0000000
 R(2)=  0.0000000  8.3487901  0.0000000  G(2)=  0.0000000  0.1197778  0.0000000
 R(3)=  0.0000000  0.0000000 37.8554355  G(3)=  0.0000000  0.0000000  0.0264163
 Unit cell volume ucvol=  2.5611082E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45 200
         ecut(hartree)=     33.074   => boxcut(ratio)=   2.03572
 
--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is Sn.psp8
- pspatm: opening atomic psp file    Sn.psp8
- Sn    ONCVPSP  r_core=  2.82  2.96  3.37
- 50.00000  14.00000    200901                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
     extension_switch     0
  pspatm : epsatm=   46.05661996
         --- l  ekb(1:nproj) -->
             0    5.145721    1.207520
             1    3.135465    0.248245
             2   -2.615085   -1.509805
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is Se.psp8
- pspatm: opening atomic psp file    Se.psp8
- Se    ONCVPSP  r_core=  2.63  2.73  3.38
- 34.00000   6.00000    200901                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
     extension_switch     0
  pspatm : epsatm=    4.88801495
         --- l  ekb(1:nproj) -->
             0    6.168520    0.370505
             1    3.190458    0.325034
             2    1.195645    0.061781
 pspatm: atomic psp has been read  and splines computed
 
   4.07557079E+03                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------
 
_setup2: Arith. and geom. avg. npw (full set) are   23272.750   23272.722
 
================================================================================
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -134.58435089316    -1.346E+02 2.042E-01 1.328E+04
 ETOT  2  -135.90122358767    -1.317E+00 3.103E-03 2.604E+03
 ETOT  3  -135.94565954560    -4.444E-02 2.285E-03 1.100E+03
 ETOT  4  -135.97461251291    -2.895E-02 2.581E-03 6.367E+02
 ETOT  5  -135.96317826373     1.143E-02 1.087E-04 4.363E+02
 ETOT  6  -135.95883506349     4.343E-03 1.384E-03 2.198E+02
 ETOT  7  -135.95993578433    -1.101E-03 3.494E-03 9.979E+01
 ETOT  8  -135.95981475522     1.210E-04 8.312E-04 3.081E+01
 ETOT  9  -135.96096809319    -1.153E-03 5.040E-03 6.579E+00
 ETOT 10  -135.96098534160    -1.725E-05 4.021E-04 2.948E+00
 ETOT 11  -135.96118211470    -1.968E-04 1.617E-03 9.983E-01
 ETOT 12  -135.96114540112     3.671E-05 1.166E-03 3.080E-01
 ETOT 13  -135.96116261083    -1.721E-05 4.607E-04 3.109E-02
 ETOT 14  -135.96115323159     9.379E-06 5.254E-04 6.205E-03
 ETOT 15  -135.96114339234     9.839E-06 6.362E-04 2.825E-03
 ETOT 16  -135.96113313728     1.026E-05 1.155E-04 3.556E-04
 ETOT 17  -135.96113258563     5.516E-07 6.684E-05 1.707E-04
 ETOT 18  -135.96113218212     4.035E-07 1.066E-05 7.449E-05
 ETOT 19  -135.96113223250    -5.038E-08 6.117E-06 6.146E-05
 ETOT 20  -135.96113394811    -1.716E-06 1.010E-06 6.062E-05
 ETOT 21  -135.96113309900     8.491E-07 6.464E-07 6.311E-05
 ETOT 22  -135.96113328411    -1.851E-07 1.151E-06 1.941E-05
 ETOT 23  -135.96113287305     4.111E-07 3.674E-06 7.714E-07
 ETOT 24  -135.96113294920    -7.615E-08 6.448E-06 1.109E-07
 ETOT 25  -135.96113316066    -2.115E-07 2.053E-05 3.132E-08
 ETOT 26  -135.96113310568     5.498E-08 3.447E-05 1.693E-08
 ETOT 27  -135.96113313366    -2.798E-08 1.055E-04 2.546E-09
 
 At SCF step   27, etot is converged : 
  for the second time, diff in etot=  2.798E-08 < toldfe=  1.000E-07
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.24594985E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.80726993E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.09898778E-03  sigma(2 1)=  0.00000000E+00
 
 Integrated electronic density in atomic spheres:
 ------------------------------------------------
 Atom  Sphere_radius  Integrated_density
    1        2.00000          9.97160184
    2        2.00000          9.97018682
    3        2.00000          2.97788455
    4        2.00000          2.98128000
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   2.1990E-07; max=  1.0555E-04
 reduced coordinates (array xred) for    4 atoms
       0.749999992000      0.905346491161      0.431077209417
       0.249999992000      0.405346491161      0.568922790583
       0.249999992000      0.461473526839      0.433370817100
       0.749999992000      0.961473526839      0.566629182900
 rms dE/dt=  1.4248E+00; max dE/dt=  1.4719E+00; dE/dt below (all hartree)
    1       0.000000000000      0.577264947079     -1.366010141418
    2       0.000000000000      0.577264947079      1.366010141418
    3       0.000000000000     -2.795334271626     -1.471901433599
    4       0.000000000000     -2.795334271626      1.471901433599
 
 cartesian coordinates (angstrom) at end:
    1      3.21616650719351     3.99981121521081     8.63543940284819
    2      1.07205547952732     1.79081650751430    11.39679429963997
    3      1.07205547952732     2.03878515706051     8.68138548798983
    4      3.21616650719351     4.24777986475702    11.35084821449833
 
 cartesian forces (hartree/bohr) at end:
    1      0.00000000000000    -0.20198131688915     0.03608491415769
    2      0.00000000000000    -0.20198131688915    -0.03608491415769
    3      0.00000000000000     0.20198131688915     0.03888216878455
    4      0.00000000000000     0.20198131688915    -0.03888216878455
 frms,max,avg= 1.1860779E-01 2.0198132E-01   0.000E+00  1.328E-01  0.000E+00 h/b
 
 cartesian forces (eV/Angstrom) at end:
    1      0.00000000000000   -10.38629604072255     1.85556073610250
    2      0.00000000000000   -10.38629604072255    -1.85556073610250
    3      0.00000000000000    10.38629604072255     1.99940134029009
    4      0.00000000000000    10.38629604072255    -1.99940134029009
 frms,max,avg= 6.0990573E+00 1.0386296E+01   0.000E+00  6.831E+00  0.000E+00 e/A
 length scales=  1.889726132886  1.889726132886  1.889726132886 bohr
              =  1.000000000000  1.000000000000  1.000000000000 angstroms
 prteigrs : about to open file SnSe.o_EIG
 Fermi (or HOMO) energy (hartree) =  -0.06524   Average Vxc (hartree)=  -0.18634
 Eigenvalues (hartree) for nkpt=  16  k points:
 kpt#   1, nband= 30, wtk=  0.06250, kpt=  0.0625  0.0625  0.5000 (reduced coord)
  -0.96298   -0.96257   -0.96093   -0.96059   -0.91922   -0.91891   -0.91612   -0.91599
  -0.90727   -0.90705   -0.57415   -0.54348   -0.32632   -0.29315   -0.21415   -0.20651
  -0.16140   -0.13496   -0.12332   -0.09022   -0.03752   -0.01792   -0.00738    0.03295
   0.03967    0.05524    0.06797    0.08420    0.10015    0.11114
 prteigrs : prtvol=0 or 1, do not print more k-points.
 
 
--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :
 
    Kinetic energy  =  7.10220332713952E+01
    Hartree energy  =  2.84765471447212E+02
    XC energy       = -2.08052954059269E+01
    Ewald energy    =  1.60261097956119E+02
    PspCore energy  =  1.59133098500700E+00
    Loc. psp. energy= -6.05718905270019E+02
    NL   psp  energy= -2.70768661174497E+01
    >>>>>>>>> Etotal= -1.35961133133663E+02
 
 Other information on the energy :
    Total energy(eV)= -3.69969058374066E+03 ; Band energy (Ha)=  -2.4018761503E+01
--------------------------------------------------------------------------------
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.24594985E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.80726993E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.09898778E-03  sigma(2 1)=  0.00000000E+00
 
-Cartesian components of stress tensor (GPa)         [Pressure=  1.9501E+01 GPa]
- sigma(1 1)=  2.13183169E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.12013730E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -6.17543422E+01  sigma(2 1)=  0.00000000E+00
 
== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      1.8897261329E+00  1.8897261329E+00  1.8897261329E+00 Bohr
              amu      1.18710000E+02  7.89600000E+01
      chksymbreak           0
           diemac      9.00000000E+00
             ecut      3.30743929E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           etotal     -1.3596113313E+02
            fcart      0.0000000000E+00 -2.0198131689E-01  3.6084914158E-02
                       0.0000000000E+00 -2.0198131689E-01 -3.6084914158E-02
                       0.0000000000E+00  2.0198131689E-01  3.8882168785E-02
                       0.0000000000E+00  2.0198131689E-01 -3.8882168785E-02
-          fftalg         312
              ixc     -101130
              kpt      6.25000000E-02  6.25000000E-02  5.00000000E-01
                       1.87500000E-01  6.25000000E-02  5.00000000E-01
                       3.12500000E-01  6.25000000E-02  5.00000000E-01
                       4.37500000E-01  6.25000000E-02  5.00000000E-01
                       6.25000000E-02  1.87500000E-01  5.00000000E-01
                       1.87500000E-01  1.87500000E-01  5.00000000E-01
                       3.12500000E-01  1.87500000E-01  5.00000000E-01
                       4.37500000E-01  1.87500000E-01  5.00000000E-01
                       6.25000000E-02  3.12500000E-01  5.00000000E-01
                       1.87500000E-01  3.12500000E-01  5.00000000E-01
                       3.12500000E-01  3.12500000E-01  5.00000000E-01
                       4.37500000E-01  3.12500000E-01  5.00000000E-01
                       6.25000000E-02  4.37500000E-01  5.00000000E-01
                       1.87500000E-01  4.37500000E-01  5.00000000E-01
                       3.12500000E-01  4.37500000E-01  5.00000000E-01
                       4.37500000E-01  4.37500000E-01  5.00000000E-01
         kptrlatt        8    0    0      0    8    0      0    0    1
          kptrlen      6.48285223E+01
P           mkmem           1
            natom           4
            nband          30
            ngfft          45      45     200
             nkpt          16
            nstep          60
             nsym           4
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
            rprim      4.2882220553E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  4.4179894154E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  2.0032233702E+01
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup          31
           strten      7.2459498483E-05  3.8072699271E-05 -2.0989877800E-03
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0 -1
                       1  0  0   0  1  0   0  0 -1      -1  0  0   0  1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000    -0.0000000  0.5000000 -0.0000000
                       0.5000000  0.5000000 -0.0000000     0.5000000  0.0000000  0.0000000
           toldfe      1.00000000E-07 Hartree
           tolsym      1.00000000E-05
            typat      1  1  2  2
              wtk        0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250
           xangst      3.2161665072E+00  3.9998112152E+00  8.6354394028E+00
                       1.0720554795E+00  1.7908165075E+00  1.1396794300E+01
                       1.0720554795E+00  2.0387851571E+00  8.6813854880E+00
                       3.2161665072E+00  4.2477798648E+00  1.1350848214E+01
            xcart      6.0776738964E+00  7.5585477800E+00  1.6318615509E+01
                       2.0258912556E+00  3.3841527535E+00  2.1536820019E+01
                       2.0258912556E+00  3.8527455906E+00  1.6405441026E+01
                       6.0776738964E+00  8.0271406172E+00  2.1449994501E+01
             xred      7.4999999200E-01  9.0534649116E-01  4.3107720942E-01
                       2.4999999200E-01  4.0534649116E-01  5.6892279058E-01
                       2.4999999200E-01  4.6147352684E-01  4.3337081710E-01
                       7.4999999200E-01  9.6147352684E-01  5.6662918290E-01
            znucl       50.00000   34.00000
 
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
 For information on why they are suggested, see also https://www.abinit.org/about/?text=acknowledgments.
-
- [1] Libxc: A library of exchange and correlation functionals for density functional theory.
- M.A.L. Marques, M.J.T. Oliveira, T. Burnus, Computer Physics Communications 183, 2227 (2012).
- Comment : to be cited when LibXC is used (negative value of ixc)
- Strong suggestion to cite this paper.
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
- B.Xue, A.Zhou, J.W.Zwanziger.
- Comment : the fourth generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/about/ABINIT16.pdf .
- The licence allows the authors to put it on the Web.
-
- [3] Optimized norm-conserving Vanderbilt pseudopotentials.
- D.R. Hamann, Phys. Rev. B 88, 085117 (2013).
- Comment: Some pseudopotential generated using the ONCVPSP code were used.
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
-
- Proc.   0 individual time (sec): cpu=        340.7  wall=        342.1
 
================================================================================
 
 Calculation completed.
.Delivered   0 WARNINGs and   0 COMMENTs to log file.
+Overall time at end (sec) : cpu=       5463.1  wall=       5472.9
