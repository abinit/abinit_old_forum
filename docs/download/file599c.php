
.Version 9.4.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel19.0 computer) 

.Copyright (C) 1998-2021 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Thu 10 Jun 2021.
- ( at 00h31 )
  
- input  file    -> telast_2.in
- output file    -> telast_2.abo
- root for input  files -> telast_2i
- root for output files -> telast_2o
 
- inpspheads : Reading pseudopotential header in XML form from 
-   /home/gswylq/qe_soft/JTH-PBE-atomicdata/JTH-PBE-atomicdata-1.1/ATOMICDATA/Se.GGA_PBE-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from 
-   /home/gswylq/qe_soft/JTH-PBE-atomicdata/JTH-PBE-atomicdata-1.1/ATOMICDATA/Mo.GGA_PBE-JTH.xml
 
 DATASET    1 : space group P-6 m 2 (#187); Bravais hP (primitive hexag.)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
     intxc =       0    ionmov =       0      iscf =       7    lmnmax =      18
     lnmax =       6     mgfft =     160  mpssoang =       3    mqgrid =   10896
     natom =       3  nloc_mem =       2    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      12    n1xccc =       1    ntypat =       2
    occopt =       1   xclevel =       2
-    mband =          14        mffmem =           1         mkmem =           1
       mpw =        6311          nfft =      144000          nkpt =          10
Pmy_natom=         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=       225    nfftf =    360000
================================================================================
P This job should need less than                     106.351 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     13.484 Mbytes ; DEN or POT disk file :      2.749 Mbytes.
================================================================================
 
 
 DATASET    2 : space group P-6 m 2 (#187); Bravais hP (primitive hexag.)
================================================================================
 Values of the parameters that define the memory need for DATASET  2 (RF).
     intxc =       0      iscf =      -3    lmnmax =      18     lnmax =       6
     mgfft =     160  mpssoang =       3    mqgrid =    7705     natom =       3
  nloc_mem =       2    nspden =       1   nspinor =       1    nsppol =       1
      nsym =      12    n1xccc =       1    ntypat =       2    occopt =       1
   xclevel =       2
-    mband =          14        mffmem =           1         mkmem =           3
-   mkqmem =           3        mk1mem =           3           mpw =        6311
      nfft =      144000          nkpt =          38
Pmy_natom=         1
================================================================================
P This job should need less than                      65.021 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     51.233 Mbytes ; DEN or POT disk file :      1.101 Mbytes.
================================================================================
 
 
 DATASET    3 : space group P-6 m 2 (#187); Bravais hP (primitive hexag.)
================================================================================
 Values of the parameters that define the memory need for DATASET  3 (RF).
     intxc =       0      iscf =       7    lmnmax =      18     lnmax =       6
     mgfft =     160  mpssoang =       3    mqgrid =    7705     natom =       3
  nloc_mem =       2    nspden =       1   nspinor =       1    nsppol =       1
      nsym =      12    n1xccc =       1    ntypat =       2    occopt =       1
   xclevel =       2
-    mband =          14        mffmem =           1         mkmem =           3
-   mkqmem =           3        mk1mem =           3           mpw =        6311
      nfft =      144000          nkpt =          38
Pmy_natom=         1
================================================================================
P This job should need less than                     311.006 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     51.233 Mbytes ; DEN or POT disk file :      1.101 Mbytes.
================================================================================
 
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =512 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.8897261329E+00  1.8897261329E+00  1.8897261329E+00 Bohr
              amu      7.89600000E+01  9.59400000E+01
       chkdilatmx           0
          chkprim           0
           diemac      8.00000000E+00
          dilatmx      1.10000000E+00
             ecut      2.00000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
-          fftalg         512
           getddk1          0
           getddk2          0
           getddk3          2
           getden1          0
           getden2          1
           getden3          0
           getwfk1          0
           getwfk2          1
           getwfk3          1
             iscf1          7
             iscf2         -3
             iscf3          7
           istwfk1       2    0    0    0    0    0    0    0    0    0
           istwfk2       1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0
           istwfk3       1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0
              ixc     -101130
           jdtset        1    2    3
              kpt1     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  2.00000000E-01  0.00000000E+00
                       4.00000000E-01  2.00000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  3.33333333E-01
                       2.00000000E-01  0.00000000E+00  3.33333333E-01
                       4.00000000E-01  0.00000000E+00  3.33333333E-01
                       2.00000000E-01  2.00000000E-01  3.33333333E-01
                       4.00000000E-01  2.00000000E-01  3.33333333E-01
              kpt2     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  2.00000000E-01  0.00000000E+00
                       2.00000000E-01  2.00000000E-01  0.00000000E+00
                       4.00000000E-01  2.00000000E-01  0.00000000E+00
                      -4.00000000E-01  2.00000000E-01  0.00000000E+00
                      -2.00000000E-01  2.00000000E-01  0.00000000E+00
                       0.00000000E+00  4.00000000E-01  0.00000000E+00
                       2.00000000E-01  4.00000000E-01  0.00000000E+00
                       4.00000000E-01  4.00000000E-01  0.00000000E+00
                      -4.00000000E-01  4.00000000E-01  0.00000000E+00
                      -2.00000000E-01  4.00000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  3.33333333E-01
                       2.00000000E-01  0.00000000E+00  3.33333333E-01
                       4.00000000E-01  0.00000000E+00  3.33333333E-01
                      -4.00000000E-01  0.00000000E+00  3.33333333E-01
                      -2.00000000E-01  0.00000000E+00  3.33333333E-01
                       0.00000000E+00  2.00000000E-01  3.33333333E-01
                       2.00000000E-01  2.00000000E-01  3.33333333E-01
                       4.00000000E-01  2.00000000E-01  3.33333333E-01
                      -4.00000000E-01  2.00000000E-01  3.33333333E-01
                      -2.00000000E-01  2.00000000E-01  3.33333333E-01
                       0.00000000E+00  4.00000000E-01  3.33333333E-01
                       2.00000000E-01  4.00000000E-01  3.33333333E-01
                       4.00000000E-01  4.00000000E-01  3.33333333E-01
                      -4.00000000E-01  4.00000000E-01  3.33333333E-01
                      -2.00000000E-01  4.00000000E-01  3.33333333E-01
                       0.00000000E+00 -4.00000000E-01  3.33333333E-01
                       2.00000000E-01 -4.00000000E-01  3.33333333E-01
                       4.00000000E-01 -4.00000000E-01  3.33333333E-01
                      -4.00000000E-01 -4.00000000E-01  3.33333333E-01
                      -2.00000000E-01 -4.00000000E-01  3.33333333E-01
                       0.00000000E+00 -2.00000000E-01  3.33333333E-01
                       2.00000000E-01 -2.00000000E-01  3.33333333E-01
                       4.00000000E-01 -2.00000000E-01  3.33333333E-01
                      -4.00000000E-01 -2.00000000E-01  3.33333333E-01
                      -2.00000000E-01 -2.00000000E-01  3.33333333E-01
              kpt3     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  2.00000000E-01  0.00000000E+00
                       2.00000000E-01  2.00000000E-01  0.00000000E+00
                       4.00000000E-01  2.00000000E-01  0.00000000E+00
                      -4.00000000E-01  2.00000000E-01  0.00000000E+00
                      -2.00000000E-01  2.00000000E-01  0.00000000E+00
                       0.00000000E+00  4.00000000E-01  0.00000000E+00
                       2.00000000E-01  4.00000000E-01  0.00000000E+00
                       4.00000000E-01  4.00000000E-01  0.00000000E+00
                      -4.00000000E-01  4.00000000E-01  0.00000000E+00
                      -2.00000000E-01  4.00000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  3.33333333E-01
                       2.00000000E-01  0.00000000E+00  3.33333333E-01
                       4.00000000E-01  0.00000000E+00  3.33333333E-01
                      -4.00000000E-01  0.00000000E+00  3.33333333E-01
                      -2.00000000E-01  0.00000000E+00  3.33333333E-01
                       0.00000000E+00  2.00000000E-01  3.33333333E-01
                       2.00000000E-01  2.00000000E-01  3.33333333E-01
                       4.00000000E-01  2.00000000E-01  3.33333333E-01
                      -4.00000000E-01  2.00000000E-01  3.33333333E-01
                      -2.00000000E-01  2.00000000E-01  3.33333333E-01
                       0.00000000E+00  4.00000000E-01  3.33333333E-01
                       2.00000000E-01  4.00000000E-01  3.33333333E-01
                       4.00000000E-01  4.00000000E-01  3.33333333E-01
                      -4.00000000E-01  4.00000000E-01  3.33333333E-01
                      -2.00000000E-01  4.00000000E-01  3.33333333E-01
                       0.00000000E+00 -4.00000000E-01  3.33333333E-01
                       2.00000000E-01 -4.00000000E-01  3.33333333E-01
                       4.00000000E-01 -4.00000000E-01  3.33333333E-01
                      -4.00000000E-01 -4.00000000E-01  3.33333333E-01
                      -2.00000000E-01 -4.00000000E-01  3.33333333E-01
                       0.00000000E+00 -2.00000000E-01  3.33333333E-01
                       2.00000000E-01 -2.00000000E-01  3.33333333E-01
                       4.00000000E-01 -2.00000000E-01  3.33333333E-01
                      -4.00000000E-01 -2.00000000E-01  3.33333333E-01
                      -2.00000000E-01 -2.00000000E-01  3.33333333E-01
           kptopt1          1
           kptopt2          2
           kptopt3          2
         kptrlatt        5    0    0      0    5    0      0    0    3
          kptrlen      3.02421015E+01
P           mkmem1          1
P           mkmem2          3
P           mkmem3          3
P          mkqmem1          1
P          mkqmem2          3
P          mkqmem3          3
P          mk1mem1          1
P          mk1mem2          3
P          mk1mem3          3
            natom           3
            nband1         14
            nband2         14
            nband3         14
           ndtset           3
            ngfft          30      30     160
          ngfftdg          40      40     225
             nkpt1         10
             nkpt2         38
             nkpt3         38
             nqpt1          0
             nqpt2          1
             nqpt3          1
            nstep          40
             nsym          12
            ntime         300
           ntypat           2
              occ1     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  0.000000
              occ2     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  0.000000
              occ3     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  0.000000
        optdriver1          0
        optdriver2          1
        optdriver3          1
        optforces1          1
        optforces2          2
        optforces3          2
        pawecutdg      4.00000000E+01 Hartree
         pawxcdev           0
           prtcif1          1
           prtcif2          0
           prtcif3          0
           prtgeo1          1
           prtgeo2          0
           prtgeo3          0
        prtposcar1          1
        prtposcar2          0
        prtposcar3          0
          rfatpol1          1       1
          rfatpol2          1       1
          rfatpol3          1       3
            rfdir1          0       0       0
            rfdir2          1       1       1
            rfdir3          1       1       1
           rfelfd1          0
           rfelfd2          2
           rfelfd3          0
           rfphon1          0
           rfphon2          0
           rfphon3          1
           rfstrs1          0
           rfstrs2          0
           rfstrs3          3
            rprim      2.7718755350E+00 -1.6003430863E+00  0.0000000000E+00
                       0.0000000000E+00  3.2006861726E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.8410000000E+01
          spgroup         187
           symrel      1  0  0   0  1  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                      -1 -1  0   1  0  0   0  0 -1      -1  0  0   1  1  0   0  0  1
                       0  1  0  -1 -1  0   0  0  1       1  1  0   0 -1  0   0  0 -1
                       1  0  0   0  1  0   0  0 -1       0 -1  0  -1  0  0   0  0  1
                      -1 -1  0   1  0  0   0  0  1      -1  0  0   1  1  0   0  0 -1
                       0  1  0  -1 -1  0   0  0 -1       1  1  0   0 -1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000 -0.0000000
                      -0.0000000  0.0000000 -0.0000000    -0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000 -0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.0000000  0.0000000
                      -0.0000000  0.0000000  0.0000000    -0.0000000  0.0000000 -0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.0000000  0.0000000
           toldfe1     1.00000000E-12 Hartree
           toldfe2     0.00000000E+00 Hartree
           toldfe3     1.00000000E-12 Hartree
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-18
           tolwfr3     0.00000000E+00
            typat      1  1  2
           useylm           1
              wtk1       0.01333    0.08000    0.08000    0.08000    0.08000    0.02667
                         0.16000    0.16000    0.16000    0.16000
              wtk2       0.01333    0.02667    0.02667    0.02667    0.02667    0.02667
                         0.02667    0.02667    0.02667    0.02667    0.02667    0.02667
                         0.02667    0.02667    0.02667    0.02667    0.02667    0.02667
                         0.02667    0.02667    0.02667    0.02667    0.02667    0.02667
                         0.02667    0.02667    0.02667    0.02667    0.02667    0.02667
                         0.02667    0.02667    0.02667    0.02667    0.02667    0.02667
                         0.02667    0.02667
              wtk3       0.01333    0.02667    0.02667    0.02667    0.02667    0.02667
                         0.02667    0.02667    0.02667    0.02667    0.02667    0.02667
                         0.02667    0.02667    0.02667    0.02667    0.02667    0.02667
                         0.02667    0.02667    0.02667    0.02667    0.02667    0.02667
                         0.02667    0.02667    0.02667    0.02667    0.02667    0.02667
                         0.02667    0.02667    0.02667    0.02667    0.02667    0.02667
                         0.02667    0.02667
           xangst      1.8479170233E+00  1.5708515059E-14  7.6007733124E+00
                       1.8479170233E+00  1.5708515059E-14 -7.6007733124E+00
                       9.2395851167E-01  1.6003430863E+00  9.2050000000E+00
            xcart      3.4920570904E+00  2.9684791416E-14  1.4363379959E+01
                       3.4920570904E+00  2.9684791416E-14 -1.4363379959E+01
                       1.7460285452E+00  3.0242101518E+00  1.7394929053E+01
             xred      6.6666666667E-01  3.3333333333E-01  4.1286112506E-01
                       6.6666666667E-01  3.3333333333E-01 -4.1286112506E-01
                       3.3333333333E-01  6.6666666667E-01  5.0000000000E-01
            znucl       34.00000   42.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency, jdtset=   1.
 
 chkinp: Checking input parameters for consistency, jdtset=   2.
 
 chkinp: Checking input parameters for consistency, jdtset=   3.
 
================================================================================
== DATASET  1 ==================================================================
-   mpi_nproc: 20, omp_nthreads: -1 (-1 if OMP is not activated)
-    --> not optimal distribution: autoparal keyword recommended in input file <--
 

--- !DatasetInfo
iteration_state: {dtset: 1, }
dimensions: {natom: 3, nkpt: 10, mband: 14, nsppol: 1, nspinor: 1, nspden: 1, mpw: 6311, }
cutoff_energies: {ecut:  20.0, pawecutdg:  40.0, }
electrons: {nelect:   2.60000000E+01, charge:   0.00000000E+00, occopt:   1.00000000E+00, tsmear:   1.00000000E-02, }
meta: {optdriver: 0, ionmov: 0, optcell: 0, iscf: 7, paral_kgb: 0, }
...

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  5.2380856 -3.0242102  0.0000000  G(1)=  0.1909094  0.0000000  0.0000000
 R(2)=  0.0000000  6.0484203  0.0000000  G(2)=  0.0954547  0.1653324  0.0000000
 R(3)=  0.0000000  0.0000000 34.7898581  G(3)=  0.0000000  0.0000000  0.0287440
 Unit cell volume ucvol=  1.1022173E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 
 Coarse grid specifications (used for wave-functions):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30 160
         ecut(hartree)=     24.200   => boxcut(ratio)=   2.07680
 
 Fine grid specifications (used for densities):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  40  40 225
         ecut(hartree)=     48.400   => boxcut(ratio)=   2.05593
 
--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is /home/gswylq/qe_soft/JTH-PBE-atomicdata/JTH-PBE-atomicdata-1.1/ATOMICDATA/Se.GGA_PBE-JTH.xml
- pspatm: opening atomic psp file    /home/gswylq/qe_soft/JTH-PBE-atomicdata/JTH-PBE-atomicdata-1.1/ATOMICDATA/Se.GGA_PBE-JTH.xml
- pspatm : Reading pseudopotential header in XML form from /home/gswylq/qe_soft/JTH-PBE-atomicdata/JTH-PBE-atomicdata-1.1/ATOMICDATA/Se.GGA_PBE-JTH.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 2.20000000
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 928 , AA= 0.41548E-03 BB= 0.14126E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions =  2.02118167
 mmax=  928
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to  764 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is /home/gswylq/qe_soft/JTH-PBE-atomicdata/JTH-PBE-atomicdata-1.1/ATOMICDATA/Mo.GGA_PBE-JTH.xml
- pspatm: opening atomic psp file    /home/gswylq/qe_soft/JTH-PBE-atomicdata/JTH-PBE-atomicdata-1.1/ATOMICDATA/Mo.GGA_PBE-JTH.xml
- pspatm : Reading pseudopotential header in XML form from /home/gswylq/qe_soft/JTH-PBE-atomicdata/JTH-PBE-atomicdata-1.1/ATOMICDATA/Mo.GGA_PBE-JTH.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.20000000
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 846 , AA= 0.34789E-03 BB= 0.14611E-01
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions =  1.90088266
 mmax=  846
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to  751 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 pspatm: atomic psp has been read  and splines computed
 
   2.34253120E+03                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------
 
_setup2: Arith. and geom. avg. npw (full set) are    6267.880    6267.869
 
================================================================================

--- !BeginCycle
iteration_state: {dtset: 1, }
solver: {iscf: 7, nstep: 40, nline: 4, wfoptalg: 10, }
tolerances: {toldfe: 1.00E-12, }
...
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
 ETOT  1  -87.730816560749    -8.773E+01 2.905E-01 3.622E+03 5.685E-02 5.685E-02
 ETOT  2  -87.996423044290    -2.656E-01 6.668E-03 5.410E+03 6.989E-02 1.305E-02
 ETOT  3  -88.058226672125    -6.180E-02 1.187E-03 4.487E+02 2.175E-02 3.480E-02
 ETOT  4  -88.058799586172    -5.729E-04 9.079E-04 8.278E+02 1.559E-02 1.921E-02
 ETOT  5  -88.062861725715    -4.062E-03 4.610E-04 2.628E+02 1.640E-02 3.561E-02
 ETOT  6  -88.063919094920    -1.057E-03 3.220E-04 8.602E+01 2.512E-03 3.812E-02
 ETOT  7  -88.064074955088    -1.559E-04 1.540E-04 3.794E+01 1.878E-03 4.000E-02
 ETOT  8  -88.064156470550    -8.152E-05 1.797E-04 1.614E+01 1.079E-04 4.011E-02
 ETOT  9  -88.064184513396    -2.804E-05 5.749E-05 3.738E+00 7.059E-04 4.082E-02
 ETOT 10  -88.064188422358    -3.909E-06 1.080E-04 1.520E+00 1.161E-04 4.070E-02
 ETOT 11  -88.064189420568    -9.982E-07 2.505E-05 2.718E-01 1.172E-04 4.082E-02
 ETOT 12  -88.064189801400    -3.808E-07 9.430E-05 1.280E-01 4.675E-05 4.077E-02
 ETOT 13  -88.064189977057    -1.757E-07 1.532E-05 2.637E-02 1.966E-05 4.075E-02
 ETOT 14  -88.064190095811    -1.188E-07 5.552E-05 1.040E-02 1.137E-05 4.074E-02
 ETOT 15  -88.064190144564    -4.875E-08 8.730E-06 3.325E-03 1.059E-05 4.075E-02
 ETOT 16  -88.064190197397    -5.283E-08 3.128E-05 1.135E-03 2.505E-05 4.072E-02
 ETOT 17  -88.064190219764    -2.237E-08 4.945E-06 7.323E-05 1.875E-06 4.073E-02
 ETOT 18  -88.064190230544    -1.078E-08 1.764E-05 2.127E-05 6.986E-06 4.073E-02
 ETOT 19  -88.064190236884    -6.340E-09 2.787E-06 2.308E-06 3.722E-06 4.073E-02
 ETOT 20  -88.064190240446    -3.563E-09 9.964E-06 8.091E-07 2.042E-06 4.073E-02
 ETOT 21  -88.064190242548    -2.102E-09 1.570E-06 9.284E-08 2.055E-06 4.073E-02
 ETOT 22  -88.064190243750    -1.202E-09 5.630E-06 1.470E-08 6.574E-07 4.073E-02
 ETOT 23  -88.064190244460    -7.095E-10 8.858E-07 2.477E-09 6.284E-07 4.073E-02
 ETOT 24  -88.064190244860    -3.995E-10 3.185E-06 2.290E-09 4.268E-07 4.073E-02
 ETOT 25  -88.064190245099    -2.392E-10 5.006E-07 6.779E-10 3.078E-07 4.073E-02
 ETOT 26  -88.064190245230    -1.316E-10 1.804E-06 3.506E-10 1.794E-07 4.073E-02
 ETOT 27  -88.064190245312    -8.181E-11 2.833E-07 7.496E-11 1.540E-07 4.073E-02
 ETOT 28  -88.064190245352    -3.999E-11 1.023E-06 3.518E-11 9.367E-08 4.073E-02
 ETOT 29  -88.064190245384    -3.214E-11 1.606E-07 1.825E-11 6.987E-08 4.073E-02
 ETOT 30  -88.064190245396    -1.137E-11 5.809E-07 1.182E-11 4.941E-08 4.073E-02
 ETOT 31  -88.064190245409    -1.296E-11 9.113E-08 6.341E-12 3.713E-08 4.073E-02
 ETOT 32  -88.064190245411    -2.942E-12 3.300E-07 6.428E-12 2.882E-08 4.073E-02
 ETOT 33  -88.064190245414    -2.530E-12 5.176E-08 4.060E-12 1.768E-08 4.073E-02
 ETOT 34  -88.064190245419    -5.173E-12 1.877E-07 2.159E-12 8.993E-09 4.073E-02
 ETOT 35  -88.064190245419     2.558E-13 2.942E-08 1.507E-13 1.263E-08 4.073E-02
 ETOT 36  -88.064190245419     3.411E-13 1.068E-07 1.265E-12 8.196E-09 4.073E-02
 
 At SCF step   36, etot is converged : 
  for the second time, diff in etot=  3.411E-13 < toldfe=  1.000E-12
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.94930101E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.94930101E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.23341562E-04  sigma(2 1)=  0.00000000E+00
 

--- !ResultsGS
iteration_state: {dtset: 1, }
comment   : Summary of ground state results
lattice_vectors:
- [  5.2380856,  -3.0242102,   0.0000000, ]
- [  0.0000000,   6.0484203,   0.0000000, ]
- [  0.0000000,   0.0000000,  34.7898581, ]
lattice_lengths: [   6.04842,    6.04842,   34.78986, ]
lattice_angles: [ 90.000,  90.000, 120.000, ] # degrees, (23, 13, 12)
lattice_volume:   1.1022173E+03
convergence: {deltae:  3.411E-13, res2:  1.265E-12, residm:  1.068E-07, diffor:  8.196E-09, }
etotal    :  -8.80641902E+01
entropy   :   0.00000000E+00
fermie    :  -7.64001439E-02
cartesian_stress_tensor: # hartree/bohr^3
- [ -1.94930101E-04,   0.00000000E+00,   0.00000000E+00, ]
- [  0.00000000E+00,  -1.94930101E-04,   0.00000000E+00, ]
- [  0.00000000E+00,   0.00000000E+00,  -2.23341562E-04, ]
pressure_GPa:   6.0137E+00
xred      :
- [  6.6667E-01,   3.3333E-01,   4.1286E-01, Se]
- [  6.6667E-01,   3.3333E-01,  -4.1286E-01, Se]
- [  3.3333E-01,   6.6667E-01,   5.0000E-01, Mo]
cartesian_forces: # hartree/bohr
- [ -8.03205303E-31,  -9.27461596E-31,  -4.07300318E-02, ]
- [  1.20480795E-30,   1.15932700E-30,   4.07300318E-02, ]
- [ -4.01602652E-31,  -2.31865399E-31,   0.00000000E+00, ]
force_length_stats: {min:   4.63730798E-31, max:   4.07300318E-02, mean:   2.71533545E-02, }
...

 bonds_lgth_angles : about to open file telast_2o_DS1_GEO
 
 Integrated electronic density in atomic spheres:
 ------------------------------------------------
 Atom  Sphere_radius  Integrated_density
    1        2.20000          4.04830887
    2        2.20000          4.04830887
    3        2.20000         11.36236692
 
 PAW TEST:
 ==== Compensation charge inside spheres ============
 The following values must be close to each other ...
 Compensation charge over spherical meshes =      3.501837893964593
 Compensation charge over fine fft grid    =      3.501853762580308
 
 ==== Results concerning PAW augmentation regions ====
 
 Total pseudopotential strength Dij (hartree):
 Atom #  1
   0.34678  -0.70332   0.00000   0.00132   0.00000   0.00000  -0.00527   0.00000
  -0.70332   1.15101   0.00000  -0.00293   0.00000   0.00000   0.01171   0.00000
   0.00000   0.00000  -0.01746   0.00000   0.00000   0.02654   0.00000   0.00000
   0.00132  -0.00293   0.00000  -0.01763   0.00000   0.00000   0.02718   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.01746   0.00000   0.00000   0.02654
   0.00000   0.00000   0.02654   0.00000   0.00000  -0.40681   0.00000   0.00000
  -0.00527   0.01171   0.00000   0.02718   0.00000   0.00000  -0.40920   0.00000
   0.00000   0.00000   0.00000   0.00000   0.02654   0.00000   0.00000  -0.40681
 Atom #  3
  -0.72575   0.16669   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00003   0.00000 ...
   0.16669   0.04807   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.88397   0.00000   0.00000   0.35327   0.00000   0.00000  -0.00024   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.88392   0.00000   0.00000   0.35336   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.88397   0.00000   0.00000   0.35327   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.35327   0.00000   0.00000   1.18351   0.00000   0.00000   0.00038   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.35336   0.00000   0.00000   1.18319   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.35327   0.00000   0.00000   1.18351   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00024   0.00000   0.00000   0.00038   0.00000   0.00000  -0.13357   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.13357   0.00000   0.00000 ...
   0.00003   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.13349   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.13357 ...
   ...  only 12  components have been written...
 
 
 Augmentation waves occupancies Rhoij:
 Atom #  1
   1.97602   0.01652   0.00000  -0.11410   0.00000   0.00000   0.00582   0.00000
   0.01652   0.00165   0.00000   0.03884   0.00000   0.00000   0.00059   0.00000
   0.00000   0.00000   1.53705   0.00000   0.00000   0.02505   0.00000   0.00000
  -0.11410   0.03884   0.00000   1.69123   0.00000   0.00000   0.02705   0.00000
   0.00000   0.00000   0.00000   0.00000   1.53705   0.00000   0.00000   0.02505
   0.00000   0.00000   0.02505   0.00000   0.00000   0.00073   0.00000   0.00000
   0.00582   0.00059   0.00000   0.02705   0.00000   0.00000   0.00077   0.00000
   0.00000   0.00000   0.00000   0.00000   0.02505   0.00000   0.00000   0.00073
 Atom #  3
   1.99739  -0.03416   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.00043   0.00000 ...
  -0.03416   1.16670   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.12761   0.00000 ...
   0.00000   0.00000   2.01329   0.00000   0.00000  -0.03052   0.00000   0.00000  -0.01761   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   2.01593   0.00000   0.00000  -0.03580   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   2.01329   0.00000   0.00000  -0.03052   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.03052   0.00000   0.00000   0.03780   0.00000   0.00000   0.02823   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.03580   0.00000   0.00000   0.04727   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.03052   0.00000   0.00000   0.03780   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.01761   0.00000   0.00000   0.02823   0.00000   0.00000   0.96081   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.92819   0.00000   0.00000 ...
  -0.00043   0.12761   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.99243   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.92819 ...
   ...  only 12  components have been written...
 
 
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   78.658E-11; max=  10.676E-08
 reduced coordinates (array xred) for    3 atoms
       0.666666666667      0.333333333333      0.412861125063
       0.666666666667      0.333333333333     -0.412861125063
       0.333333333333      0.666666666667      0.500000000000
 rms dE/dt=  6.6798E-01; max dE/dt=  1.4170E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      1.416992026476
    2      -0.000000000000     -0.000000000000     -1.416992026476
    3       0.000000000000      0.000000000000      0.000000000000
 
 cartesian coordinates (angstrom) at end:
    1      1.84791702334059     0.00000000000002     7.60077331241185
    2      1.84791702334059     0.00000000000002    -7.60077331241185
    3      0.92395851167029     1.60034308629872     9.20500000000000
 
 cartesian forces (hartree/bohr) at end:
    1     -0.00000000000000    -0.00000000000000    -0.04073003178517
    2      0.00000000000000     0.00000000000000     0.04073003178517
    3     -0.00000000000000    -0.00000000000000     0.00000000000000
 frms,max,avg= 1.9200321E-02 4.0730032E-02   0.000E+00  0.000E+00  0.000E+00 h/b
 
 cartesian forces (eV/Angstrom) at end:
    1     -0.00000000000000    -0.00000000000000    -2.09442226827820
    2      0.00000000000000     0.00000000000000     2.09442226827820
    3     -0.00000000000000    -0.00000000000000     0.00000000000000
 frms,max,avg= 9.8732013E-01 2.0944223E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales=  1.889726132886  1.889726132886  1.889726132886 bohr
              =  1.000000000000  1.000000000000  1.000000000000 angstroms
 prteigrs : about to open file telast_2o_DS1_EIG
 Fermi (or HOMO) energy (hartree) =  -0.07640   Average Vxc (hartree)=  -0.16411
 Eigenvalues (hartree) for nkpt=  10  k points:
 kpt#   1, nband= 14, wtk=  0.01333, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -2.29816   -1.35179   -1.34177   -1.34177   -0.61082   -0.56421   -0.28517   -0.15692
  -0.15692   -0.13940   -0.11392   -0.11392   -0.07930    0.05241
 prteigrs : prtvol=0 or 1, do not print more k-points.
 

--- !EnergyTerms
iteration_state     : {dtset: 1, }
comment             : Components of total free energy in Hartree
kinetic             :  1.70389142173992E+01
hartree             :  2.42658535836308E+02
xc                  : -1.67361004525362E+01
Ewald energy        :  1.65353861114505E+02
psp_core            :  2.12528985708277E+00
local_psp           : -5.13660597848037E+02
spherical_terms     :  1.51559070298595E+01
total_energy        : -8.80641902454186E+01
total_energy_eV     : -2.39634848508815E+03
...


--- !EnergyTermsDC
iteration_state     : {dtset: 1, }
comment             : '"Double-counting" decomposition of free energy'
band_energy         : -1.73382436965998E+01
Ewald energy        :  1.65353861114505E+02
psp_core            :  2.12528985708277E+00
xc_dc               : -2.46888192454259E+02
spherical_terms     :  8.68309481614489E+00
total_energy_dc     : -8.80641903631259E+01
total_energy_dc_eV  : -2.39634848829113E+03
...

 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.94930101E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.94930101E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.23341562E-04  sigma(2 1)=  0.00000000E+00
 
-Cartesian components of stress tensor (GPa)         [Pressure=  6.0137E+00 GPa]
- sigma(1 1)= -5.73504060E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -5.73504060E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -6.57093451E+00  sigma(2 1)=  0.00000000E+00
 
================================================================================
== DATASET  2 ==================================================================
-   mpi_nproc: 20, omp_nthreads: -1 (-1 if OMP is not activated)
 

--- !DatasetInfo
iteration_state: {dtset: 2, }
dimensions: {natom: 3, nkpt: 38, mband: 14, nsppol: 1, nspinor: 1, nspden: 1, mpw: 6311, }
cutoff_energies: {ecut:  20.0, pawecutdg:  40.0, }
electrons: {nelect:   2.60000000E+01, charge:   0.00000000E+00, occopt:   1.00000000E+00, tsmear:   1.00000000E-02, }
meta: {optdriver: 1, rfelfd: 2, }
...

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.
 
 mkfilename : getden/=0, take file _DEN from output of DATASET   1.
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  5.2380856 -3.0242102  0.0000000  G(1)=  0.1909094  0.0000000  0.0000000
 R(2)=  0.0000000  6.0484203  0.0000000  G(2)=  0.0954547  0.1653324  0.0000000
 R(3)=  0.0000000  0.0000000 34.7898581  G(3)=  0.0000000  0.0000000  0.0287440
 Unit cell volume ucvol=  1.1022173E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 setup1 : take into account q-point for computing boxcut.
 
 Coarse grid specifications (used for wave-functions):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30 160
         ecut(hartree)=     24.200   => boxcut(ratio)=   2.07680
 
 Fine grid specifications (used for densities):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  40  40 225
         ecut(hartree)=     48.400   => boxcut(ratio)=   2.05593
--------------------------------------------------------------------------------
 
-inwffil : will read wavefunctions from disk file telast_2o_DS1_WFK
 
 ==>  initialize data related to q vector <== 
 
 The list of irreducible perturbations for this q vector is:
    1)    idir= 1    ipert=   4
    2)    idir= 2    ipert=   4
    3)    idir= 3    ipert=   4
 
================================================================================
 
--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : derivative vs k along direction   1
 The set of symmetries contains only one element for this perturbation.
 symkpt : not enough symmetry to change the number of k points.
 
--------------------------------------------------------------------------------
 
-inwffil : will read wavefunctions from disk file telast_2o_DS1_WFK
--------------------------------------------------------------------------------
 
 Initialisation of the first-order wave-functions :
  ireadwf=   0

--- !BeginCycle
iteration_state: {dtset: 2, }
solver: {iscf: -3, nstep: 40, nline: 4, wfoptalg: 10, }
tolerances: {tolwfr: 1.00E-18, }
...
 
     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1  -43.714659384665     -4.371E+01 2.402E-01 0.000E+00
 ETOT  2  -43.885496597934     -1.708E-01 3.240E-01 0.000E+00
 ETOT  3  -43.890896887948     -5.400E-03 3.995E-02 0.000E+00
 ETOT  4  -43.891239747971     -3.429E-04 4.740E-02 0.000E+00
 ETOT  5  -43.891273994507     -3.425E-05 3.171E-02 0.000E+00
 ETOT  6  -43.891281595786     -7.601E-06 3.171E-02 0.000E+00
 ETOT  7  -43.891285035306     -3.440E-06 3.171E-02 0.000E+00
 ETOT  8  -43.891287088347     -2.053E-06 3.171E-02 0.000E+00
 ETOT  9  -43.891288400554     -1.312E-06 3.171E-02 0.000E+00
 ETOT 10  -43.891289266472     -8.659E-07 3.171E-02 0.000E+00
 ETOT 11  -43.891289842931     -5.765E-07 3.171E-02 0.000E+00
 ETOT 12  -43.891290231456     -3.885E-07 3.171E-02 0.000E+00
 ETOT 13  -43.891290494046     -2.626E-07 3.171E-02 0.000E+00
 ETOT 14  -43.891290672874     -1.788E-07 3.171E-02 0.000E+00
 ETOT 15  -43.891290794831     -1.220E-07 3.171E-02 0.000E+00
 ETOT 16  -43.891290878455     -8.362E-08 3.171E-02 0.000E+00
 ETOT 17  -43.891290935849     -5.739E-08 3.171E-02 0.000E+00
 ETOT 18  -43.891290975403     -3.955E-08 3.171E-02 0.000E+00
 ETOT 19  -43.891291002683     -2.728E-08 3.171E-02 0.000E+00
 ETOT 20  -43.891291021560     -1.888E-08 3.171E-02 0.000E+00
 ETOT 21  -43.891291034630     -1.307E-08 3.171E-02 0.000E+00
 ETOT 22  -43.891291043704     -9.074E-09 3.171E-02 0.000E+00
 ETOT 23  -43.891291050008     -6.304E-09 3.171E-02 0.000E+00
 ETOT 24  -43.891291054397     -4.389E-09 3.171E-02 0.000E+00
 ETOT 25  -43.891291057454     -3.057E-09 3.171E-02 0.000E+00
 ETOT 26  -43.891291059587     -2.133E-09 3.171E-02 0.000E+00
 ETOT 27  -43.891291061077     -1.490E-09 3.171E-02 0.000E+00
 ETOT 28  -43.891291062119     -1.042E-09 3.171E-02 0.000E+00
 ETOT 29  -43.891291062848     -7.289E-10 3.171E-02 0.000E+00
 ETOT 30  -43.891291063358     -5.107E-10 3.171E-02 0.000E+00
 ETOT 31  -43.891291063716     -3.579E-10 3.171E-02 0.000E+00
 ETOT 32  -43.891291063967     -2.512E-10 3.171E-02 0.000E+00
 ETOT 33  -43.891291064144     -1.763E-10 3.171E-02 0.000E+00
 ETOT 34  -43.891291064268     -1.239E-10 3.171E-02 0.000E+00
 ETOT 35  -43.891291064355     -8.705E-11 3.171E-02 0.000E+00
 ETOT 36  -43.891291064416     -6.128E-11 3.171E-02 0.000E+00
 ETOT 37  -43.891291064459     -4.312E-11 3.171E-02 0.000E+00
 ETOT 38  -43.891291064489     -3.038E-11 3.171E-02 0.000E+00
 ETOT 39  -43.891291064511     -2.134E-11 3.171E-02 0.000E+00
 ETOT 40  -43.891291064526     -1.513E-11 3.171E-02 0.000E+00
 
 scprqt:  WARNING -
  nstep=   40 was not enough SCF cycles to converge;
  maximum residual=  3.171E-02 exceeds tolwfr=  1.000E-18
 
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   50.373E-04; max=  31.708E-03
 dfpt_looppert : ek2=    7.4820032378E+01
          f-sum rule ratio=    8.6709992055E-01 (note : ecutsm/=0)
 prteigrs : about to open file telast_2t_1WF1_EIG
 Expectation of eigenvalue derivatives (hartree) for nkpt=  38  k points:
  (in case of degenerate eigenvalues, averaged derivative)
 kpt#   1, nband= 14, wtk=  0.01333, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -0.00000   -0.00000   -0.00000   -0.00000   -0.00000    0.00000   -0.00000    0.00000
   0.00000   -0.00000   -0.00000   -0.00000   -0.00000   -0.00000
 prteigrs : prtvol=0 or 1, do not print more k-points.
 
 
 Nine components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   8.59706516E+01 eigvalue=   1.67315240E+01  local=  -7.03836782E+01
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
     kin1=  -6.48764441E+01  Hartree=   0.00000000E+00     xc=   0.00000000E+00
 7,8,9: eventually, occupation + non-local contributions
    edocc=   5.52764178E+00     enl0=  -4.41972166E-01   enl1=  -1.64190138E+01
 10: eventually, PAW "on-site" Hxc contribution: epaw1=   0.00000000E+00
 1-10 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -4.38912911E+01
 11 Contribution from 1st-order change of wavefunctions overlap
 eovl1 =  -3.24348414E+00
  No Ewald or frozen-wf contrib.: the relaxation energy is the total one
 2DEtotal=   -0.4389129106E+02 Ha. Also 2DEtotal=   -0.119434276927E+04 eV
    (  non-var. 2DEtotal :   -4.3891213121E+01 Ha)
 
--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : derivative vs k along direction   2
 The set of symmetries contains only one element for this perturbation.
 symkpt : not enough symmetry to change the number of k points.
 
--------------------------------------------------------------------------------
 
-inwffil : will read wavefunctions from disk file telast_2o_DS1_WFK
--------------------------------------------------------------------------------
 
 Initialisation of the first-order wave-functions :
  ireadwf=   0

--- !BeginCycle
iteration_state: {dtset: 2, }
solver: {iscf: -3, nstep: 40, nline: 4, wfoptalg: 10, }
tolerances: {tolwfr: 1.00E-18, }
...
 
     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1  -43.716328747474     -4.372E+01 2.402E-01 0.000E+00
 ETOT  2  -43.885541830164     -1.692E-01 3.240E-01 0.000E+00
 ETOT  3  -43.890899289742     -5.357E-03 3.995E-02 0.000E+00
 ETOT  4  -43.891239918845     -3.406E-04 4.740E-02 0.000E+00
 ETOT  5  -43.891274015537     -3.410E-05 3.700E-02 0.000E+00
 ETOT  6  -43.891281600826     -7.585E-06 3.700E-02 0.000E+00
 ETOT  7  -43.891285037018     -3.436E-06 3.700E-02 0.000E+00
 ETOT  8  -43.891287089105     -2.052E-06 3.700E-02 0.000E+00
 ETOT  9  -43.891288400955     -1.312E-06 3.700E-02 0.000E+00
 ETOT 10  -43.891289266757     -8.658E-07 3.700E-02 0.000E+00
 ETOT 11  -43.891289843168     -5.764E-07 3.700E-02 0.000E+00
 ETOT 12  -43.891290231679     -3.885E-07 3.700E-02 0.000E+00
 ETOT 13  -43.891290494262     -2.626E-07 3.700E-02 0.000E+00
 ETOT 14  -43.891290673089     -1.788E-07 3.700E-02 0.000E+00
 ETOT 15  -43.891290795046     -1.220E-07 3.700E-02 0.000E+00
 ETOT 16  -43.891290878670     -8.362E-08 3.700E-02 0.000E+00
 ETOT 17  -43.891290936064     -5.739E-08 3.700E-02 0.000E+00
 ETOT 18  -43.891290975618     -3.955E-08 3.700E-02 0.000E+00
 ETOT 19  -43.891291002899     -2.728E-08 3.700E-02 0.000E+00
 ETOT 20  -43.891291021775     -1.888E-08 3.700E-02 0.000E+00
 ETOT 21  -43.891291034846     -1.307E-08 3.700E-02 0.000E+00
 ETOT 22  -43.891291043920     -9.074E-09 3.700E-02 0.000E+00
 ETOT 23  -43.891291050224     -6.304E-09 3.700E-02 0.000E+00
 ETOT 24  -43.891291054612     -4.389E-09 3.700E-02 0.000E+00
 ETOT 25  -43.891291057669     -3.057E-09 3.700E-02 0.000E+00
 ETOT 26  -43.891291059803     -2.133E-09 3.700E-02 0.000E+00
 ETOT 27  -43.891291061293     -1.490E-09 3.700E-02 0.000E+00
 ETOT 28  -43.891291062334     -1.042E-09 3.700E-02 0.000E+00
 ETOT 29  -43.891291063063     -7.289E-10 3.700E-02 0.000E+00
 ETOT 30  -43.891291063574     -5.107E-10 3.700E-02 0.000E+00
 ETOT 31  -43.891291063932     -3.579E-10 3.700E-02 0.000E+00
 ETOT 32  -43.891291064183     -2.512E-10 3.700E-02 0.000E+00
 ETOT 33  -43.891291064359     -1.763E-10 3.700E-02 0.000E+00
 ETOT 34  -43.891291064483     -1.239E-10 3.700E-02 0.000E+00
 ETOT 35  -43.891291064570     -8.707E-11 3.700E-02 0.000E+00
 ETOT 36  -43.891291064632     -6.127E-11 3.700E-02 0.000E+00
 ETOT 37  -43.891291064675     -4.309E-11 3.700E-02 0.000E+00
 ETOT 38  -43.891291064705     -3.040E-11 3.700E-02 0.000E+00
 ETOT 39  -43.891291064726     -2.137E-11 3.700E-02 0.000E+00
 ETOT 40  -43.891291064741     -1.508E-11 3.700E-02 0.000E+00
 
 scprqt:  WARNING -
  nstep=   40 was not enough SCF cycles to converge;
  maximum residual=  3.700E-02 exceeds tolwfr=  1.000E-18
 
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   50.369E-04; max=  37.004E-03
 dfpt_looppert : ek2=    7.4820032378E+01
          f-sum rule ratio=    8.6710009068E-01 (note : ecutsm/=0)
 prteigrs : about to open file telast_2t_1WF1_EIG
 Expectation of eigenvalue derivatives (hartree) for nkpt=  38  k points:
  (in case of degenerate eigenvalues, averaged derivative)
 kpt#   1, nband= 14, wtk=  0.01333, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -0.00000   -0.00000    0.00000    0.00000   -0.00000   -0.00000   -0.00000    0.00000
   0.00000    0.00000   -0.00000   -0.00000   -0.00000   -0.00000
 prteigrs : prtvol=0 or 1, do not print more k-points.
 
 
 Nine components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   8.59998984E+01 eigvalue=   1.67409927E+01  local=  -7.04095679E+01
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
     kin1=  -6.48764569E+01  Hartree=   0.00000000E+00     xc=   0.00000000E+00
 7,8,9: eventually, occupation + non-local contributions
    edocc=   5.51673544E+00     enl0=  -4.43872269E-01   enl1=  -1.64190207E+01
 10: eventually, PAW "on-site" Hxc contribution: epaw1=   0.00000000E+00
 1-10 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -4.38912911E+01
 11 Contribution from 1st-order change of wavefunctions overlap
 eovl1 =  -3.24348414E+00
  No Ewald or frozen-wf contrib.: the relaxation energy is the total one
 2DEtotal=   -0.4389129106E+02 Ha. Also 2DEtotal=   -0.119434276927E+04 eV
    (  non-var. 2DEtotal :   -4.3891222907E+01 Ha)
 
--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : derivative vs k along direction   3
 The set of symmetries contains only one element for this perturbation.
 symkpt : not enough symmetry to change the number of k points.
 
--------------------------------------------------------------------------------
 
-inwffil : will read wavefunctions from disk file telast_2o_DS1_WFK
--------------------------------------------------------------------------------
 
 Initialisation of the first-order wave-functions :
  ireadwf=   0

--- !BeginCycle
iteration_state: {dtset: 2, }
solver: {iscf: -3, nstep: 40, nline: 4, wfoptalg: 10, }
tolerances: {tolwfr: 1.00E-18, }
...
 
     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1 -0.99578477384480     -9.958E-01 2.120E-03 0.000E+00
 ETOT  2 -0.99899038890451     -3.206E-03 8.473E-04 0.000E+00
 ETOT  3 -0.99908614317832     -9.575E-05 7.804E-04 0.000E+00
 ETOT  4 -0.99909303759169     -6.894E-06 7.803E-04 0.000E+00
 ETOT  5 -0.99909385366235     -8.161E-07 7.803E-04 0.000E+00
 ETOT  6 -0.99909407491153     -2.212E-07 7.803E-04 0.000E+00
 ETOT  7 -0.99909418697365     -1.121E-07 7.803E-04 0.000E+00
 ETOT  8 -0.99909425714126     -7.017E-08 7.803E-04 0.000E+00
 ETOT  9 -0.99909430322958     -4.609E-08 7.803E-04 0.000E+00
 ETOT 10 -0.99909433419586     -3.097E-08 7.803E-04 0.000E+00
 ETOT 11 -0.99909435512497     -2.093E-08 7.803E-04 0.000E+00
 ETOT 12 -0.99909436939909     -1.427E-08 7.803E-04 0.000E+00
 ETOT 13 -0.99909437915668     -9.758E-09 7.803E-04 0.000E+00
 ETOT 14 -0.99909438586500     -6.708E-09 7.803E-04 0.000E+00
 ETOT 15 -0.99909439048389     -4.619E-09 7.803E-04 0.000E+00
 ETOT 16 -0.99909439367715     -3.193E-09 7.803E-04 0.000E+00
 ETOT 17 -0.99909439588740     -2.210E-09 7.803E-04 0.000E+00
 ETOT 18 -0.99909439742198     -1.535E-09 7.803E-04 0.000E+00
 ETOT 19 -0.99909439848847     -1.066E-09 7.803E-04 0.000E+00
 ETOT 20 -0.99909439923143     -7.430E-10 7.803E-04 0.000E+00
 ETOT 21 -0.99909439974942     -5.180E-10 7.803E-04 0.000E+00
 ETOT 22 -0.99909440011126     -3.618E-10 7.803E-04 0.000E+00
 ETOT 23 -0.99909440036418     -2.529E-10 7.803E-04 0.000E+00
 ETOT 24 -0.99909440054125     -1.771E-10 7.803E-04 0.000E+00
 ETOT 25 -0.99909440066528     -1.240E-10 7.803E-04 0.000E+00
 ETOT 26 -0.99909440075227     -8.699E-11 7.803E-04 0.000E+00
 ETOT 27 -0.99909440081332     -6.105E-11 7.803E-04 0.000E+00
 ETOT 28 -0.99909440085620     -4.288E-11 7.803E-04 0.000E+00
 ETOT 29 -0.99909440088634     -3.014E-11 7.803E-04 0.000E+00
 ETOT 30 -0.99909440090754     -2.120E-11 7.803E-04 0.000E+00
 ETOT 31 -0.99909440092245     -1.492E-11 7.803E-04 0.000E+00
 ETOT 32 -0.99909440093296     -1.051E-11 7.803E-04 0.000E+00
 ETOT 33 -0.99909440094036     -7.400E-12 7.803E-04 0.000E+00
 ETOT 34 -0.99909440094558     -5.217E-12 7.803E-04 0.000E+00
 ETOT 35 -0.99909440094926     -3.679E-12 7.803E-04 0.000E+00
 ETOT 36 -0.99909440095185     -2.596E-12 7.803E-04 0.000E+00
 ETOT 37 -0.99909440095368     -1.832E-12 7.803E-04 0.000E+00
 ETOT 38 -0.99909440095498     -1.294E-12 7.803E-04 0.000E+00
 ETOT 39 -0.99909440095589     -9.144E-13 7.803E-04 0.000E+00
 ETOT 40 -0.99909440095654     -6.461E-13 7.803E-04 0.000E+00
 
 scprqt:  WARNING -
  nstep=   40 was not enough SCF cycles to converge;
  maximum residual=  7.803E-04 exceeds tolwfr=  1.000E-18
 
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   11.575E-05; max=  78.030E-05
 dfpt_looppert : ek2=    1.6961246485E+00
          f-sum rule ratio=    8.6535701625E-01 (note : ecutsm/=0)
 prteigrs : about to open file telast_2t_1WF1_EIG
 Expectation of eigenvalue derivatives (hartree) for nkpt=  38  k points:
  (in case of degenerate eigenvalues, averaged derivative)
 kpt#   1, nband= 14, wtk=  0.01333, kpt=  0.0000  0.0000  0.0000 (reduced coord)
   0.00000    0.00000   -0.00000   -0.00000    0.00000   -0.00000   -0.00000    0.00000
   0.00000   -0.00000    0.00000    0.00000   -0.00000    0.00000
 prteigrs : prtvol=0 or 1, do not print more k-points.
 
 
 Nine components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   1.90410091E+00 eigvalue=   4.04878227E-01  local=  -1.52671970E+00
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
     kin1=  -1.46775336E+00  Hartree=   0.00000000E+00     xc=   0.00000000E+00
 7,8,9: eventually, occupation + non-local contributions
    edocc=   6.83194494E-02     enl0=  -4.68415137E-03   enl1=  -3.77235773E-01
 10: eventually, PAW "on-site" Hxc contribution: epaw1=   0.00000000E+00
 1-10 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -9.99094401E-01
 11 Contribution from 1st-order change of wavefunctions overlap
 eovl1 =  -7.65985843E-02
  No Ewald or frozen-wf contrib.: the relaxation energy is the total one
 2DEtotal=   -0.9990944010E+00 Ha. Also 2DEtotal=   -0.271867412568E+02 eV
    (  non-var. 2DEtotal :   -9.9909315308E-01 Ha)
================================================================================
 
 ---- first-order wavefunction calculations are completed ----
 
 
 respfn : d/dk was computed, but no 2DTE, so no DDB output.
 
================================================================================
== DATASET  3 ==================================================================
-   mpi_nproc: 20, omp_nthreads: -1 (-1 if OMP is not activated)
 

--- !DatasetInfo
iteration_state: {dtset: 3, }
dimensions: {natom: 3, nkpt: 38, mband: 14, nsppol: 1, nspinor: 1, nspden: 1, mpw: 6311, }
cutoff_energies: {ecut:  20.0, pawecutdg:  40.0, }
electrons: {nelect:   2.60000000E+01, charge:   0.00000000E+00, occopt:   1.00000000E+00, tsmear:   1.00000000E-02, }
meta: {optdriver: 1, rfphon: 1, rfstrs: 3, }
...

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.
 
 mkfilename : getddk/=0, take file _1WF from output of DATASET   2.
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  5.2380856 -3.0242102  0.0000000  G(1)=  0.1909094  0.0000000  0.0000000
 R(2)=  0.0000000  6.0484203  0.0000000  G(2)=  0.0954547  0.1653324  0.0000000
 R(3)=  0.0000000  0.0000000 34.7898581  G(3)=  0.0000000  0.0000000  0.0287440
 Unit cell volume ucvol=  1.1022173E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 setup1 : take into account q-point for computing boxcut.
 
 Coarse grid specifications (used for wave-functions):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30 160
         ecut(hartree)=     24.200   => boxcut(ratio)=   2.07680
 
 Fine grid specifications (used for densities):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  40  40 225
         ecut(hartree)=     48.400   => boxcut(ratio)=   2.05593
--------------------------------------------------------------------------------
 
-inwffil : will read wavefunctions from disk file telast_2o_DS1_WFK
-open ddk wf file :telast_2o_DS2_1WF10
-open ddk wf file :telast_2o_DS2_1WF11
-open ddk wf file :telast_2o_DS2_1WF12
 symkchk : k-point set has full space-group symmetry.
 
 ==>  initialize data related to q vector <== 
 
 The list of irreducible perturbations for this q vector is:
    1)    idir= 1    ipert=   1
    2)    idir= 3    ipert=   1
    3)    idir= 1    ipert=   3
    4)    idir= 3    ipert=   3
    5)    idir= 1    ipert=   6
    6)    idir= 2    ipert=   6
    7)    idir= 3    ipert=   6
    8)    idir= 1    ipert=   7
    9)    idir= 2    ipert=   7
   10)    idir= 3    ipert=   7
 
================================================================================
 
 The perturbation idir=   2  ipert=   1 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.
 
 
 The perturbation idir=   1  ipert=   2 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.
 
 
 The perturbation idir=   2  ipert=   2 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.
 
 
 The perturbation idir=   3  ipert=   2 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.
 
 
 The perturbation idir=   2  ipert=   3 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.
 
 
--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : displacement of atom   1   along direction   1
 The set of symmetries contains only one element for this perturbation.
 symkpt : not enough symmetry to change the number of k points.
 
--------------------------------------------------------------------------------
 
-inwffil : will read wavefunctions from disk file telast_2o_DS1_WFK
--------------------------------------------------------------------------------
 
 Initialisation of the first-order wave-functions :
  ireadwf=   0

--- !BeginCycle
iteration_state: {dtset: 3, }
solver: {iscf: 7, nstep: 40, nline: 4, wfoptalg: 10, }
tolerances: {toldfe: 1.00E-12, }
...
 
     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1  -701760.65247417     -6.984E+05 3.645E+01 2.897E+17
 ETOT  2  -49209390380.263     -4.921E+10 7.120E+05 2.045E+22
 ETOT  3  -10552868127.241      3.866E+10 8.377E+05 1.082E+22
 ETOT  4  -765158638.97658      9.788E+09 1.616E+05 1.174E+21
 ETOT  5  -328606905.80232      4.366E+08 2.190E+05 2.164E+20
 ETOT  6  -285982265.96698      4.262E+07 2.339E+04 1.552E+20
 ETOT  7  -126967387.93959      1.590E+08 5.587E+04 7.697E+19
 ETOT  8  -53706375.221736      7.326E+07 1.250E+04 2.930E+19
 ETOT  9  -57720945.789142     -4.015E+06 2.587E+04 3.018E+19
 ETOT 10  -94194367867.836     -9.414E+10 1.713E+07 3.913E+22
 ETOT 11  -384991891410.32     -2.908E+11 6.568E+07 1.496E+23
 ETOT 12  -36551214042.881      3.484E+11 2.122E+07 4.576E+22
 ETOT 13  -205481270109.56     -1.689E+11 5.039E+06 9.851E+22
 ETOT 14  -89283335120.502      1.162E+11 1.997E+07 6.265E+22
 ETOT 15  -803690232494.15     -7.144E+11 9.567E+06 3.450E+23
 ETOT 16  -450853856217.79      3.528E+11 3.788E+07 2.767E+23
 ETOT 17  -2121346612896.9     -1.670E+12 3.431E+08 8.809E+23
 ETOT 18 -7.34499723495663E+14 -7.324E+14 4.176E+10 3.065E+26
 ETOT 19 -5.63337223721916E+14  1.712E+14 1.541E+11 3.093E+26
 ETOT 20 -1.82127807321210E+14  3.812E+14 6.711E+10 9.866E+25
 ETOT 21 -1.38585260115070E+15 -1.204E+15 1.148E+11 5.971E+26
 ETOT 22 -1.85799200262427E+15 -4.721E+14 9.617E+10 8.497E+26
 ETOT 23 -1.22152216435784E+16 -1.036E+16 4.086E+11 5.449E+27
 ETOT 24 -4.72721586153121E+16 -3.506E+16 6.590E+11 2.157E+28
 ETOT 25 -1.13397096852396E+17 -6.612E+16 3.492E+12 4.856E+28
 ETOT 26 -1.56161417490567E+19 -1.550E+19 3.997E+14 6.457E+30
 ETOT 27 -1.52792414370269E+18  1.409E+19 4.666E+14 1.734E+30
 ETOT 28 -3.27796815393749E+18 -1.750E+18 1.481E+15 1.566E+30
 ETOT 29 -5.63493846164628E+19 -5.307E+19 1.581E+16 2.231E+31
 ETOT 30 -4.66932036183611E+19  9.656E+18 7.006E+15 2.440E+31
 ETOT 31 -8.28079591771165E+20 -7.814E+20 2.533E+16 3.597E+32
 ETOT 32 -4.75626230752273E+21 -3.928E+21 1.053E+17 2.005E+33
 ETOT 33 -6.93628489422145E+21 -2.180E+21 1.750E+17 3.311E+33
 ETOT 34 -5.71010084387757E+22 -5.016E+22 4.875E+18 2.420E+34
 ETOT 35 -1.37611319784882E+22  4.334E+22 3.745E+18 1.049E+34
 ETOT 36 -2.12580639293762E+23 -1.988E+23 1.409E+19 8.999E+34
 ETOT 37 -1.86232926681585E+24 -1.650E+24 2.852E+20 7.471E+35
 ETOT 38 -1.97315995886578E+24 -1.108E+23 6.801E+20 1.054E+36
 ETOT 39 -9.26233829865064E+25 -9.065E+25 3.149E+21 3.864E+37
 ETOT 40 -1.63474793427571E+26 -7.085E+25 2.236E+21 7.441E+37
-open ddk wf file :telast_2o_DS2_1WF10
-open ddk wf file :telast_2o_DS2_1WF11
-open ddk wf file :telast_2o_DS2_1WF12
 
 scprqt:  WARNING -
  nstep=   40 was not enough SCF cycles to converge;
  maximum energy difference=  7.085E+25 exceeds toldfe=  1.000E-12
 
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   19.274E+19; max=  22.365E+20
 
 Fourteen components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   2.74607991E+23 eigvalue=   3.89349776E+22  local=  -2.11855565E+22
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
 loc psp =  -1.29485447E+13  Hartree=   4.46508621E+22     xc=  -1.63819784E+26
 note that "loc psp" includes a xc core correction that could be resolved
 7,8,9: eventually, occupation + non-local contributions
    edocc=   4.00619531E+21     enl0=   4.18198067E+21   enl1=  -2.08088159E+09
 10: eventually, PAW "on-site" Hxc contribution: epaw1=  -2.06091073E+20
 1-10 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -1.63474793E+26
 11,12,13 Non-relaxation  contributions : frozen-wavefunctions and Ewald
 fr.local=   3.93338800E+01 fr.nonlo=   2.27092217E+01  Ewald=   2.30249777E+01
 14,15 Frozen wf xc core corrections (1) and (2)
 frxc 1  =  -3.52019884E+03  frxc 2 =   1.07659565E+02
 16 Contribution from 1st-order change of wavefunctions overlap
 eovl1 =   1.94217951E+09
 Resulting in :
 2DEtotal=   -0.1634747934E+27 Ha. Also 2DEtotal=   -0.444837535539E+28 eV
    (2DErelax=   -1.6347479343E+26 Ha. 2DEnonrelax=    0.0000000000E+00 Ha)
    (  non-var. 2DEtotal :   -6.4733706143E+12 Ha)
 
 
--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : displacement of atom   1   along direction   3
 Found     6 symmetries that leave the perturbation invariant.
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to    12 .
 
--------------------------------------------------------------------------------
 
-inwffil : will read wavefunctions from disk file telast_2o_DS1_WFK
--------------------------------------------------------------------------------
 
 Initialisation of the first-order wave-functions :
  ireadwf=   0

--- !BeginCycle
iteration_state: {dtset: 3, }
solver: {iscf: 7, nstep: 40, nline: 4, wfoptalg: 10, }
tolerances: {toldfe: 1.00E-12, }
...
 
     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1  -1037909307.4337     -1.038E+09 5.840E+04 4.320E+20
 ETOT  2 -1.03282047141665E+14 -1.033E+14 2.530E+11 4.337E+25
 ETOT  3  -28256109110534.      7.503E+13 6.907E+10 1.546E+25
 ETOT  4  -6779055822271.0      2.148E+13 5.338E+09 5.443E+24
 ETOT  5  -1232993875674.2      5.546E+12 4.804E+09 2.241E+24
