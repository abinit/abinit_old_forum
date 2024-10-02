
.Version 9.0.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel18.0 computer) 

.Copyright (C) 1998-2020 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Thu 11 Feb 2021.
- ( at 10h44 )
  
- input  file    -> AlAs.in
- output file    -> AlAs.out
- root for input  files -> AlAs_i
- root for output files -> AlAs_o
 
 
 DATASET    1 : space group F-4 3 m (#216); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
     intxc =       0    ionmov =       0      iscf =       7    lmnmax =       2
     lnmax =       2     mgfft =      45  mpssoang =       3    mqgrid =    3001
     natom =       2  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      24    n1xccc =    2501    ntypat =       2
    occopt =       1   xclevel =       1
-    mband =           5        mffmem =           1         mkmem =           1
       mpw =        3636          nfft =       91125          nkpt =          29
================================================================================
P This job should need less than                      26.902 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      8.047 Mbytes ; DEN or POT disk file :      0.697 Mbytes.
================================================================================
 
 
 DATASET    2 : space group F-4 3 m (#216); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  2 (RF).
     intxc =       0      iscf =       7    lmnmax =       2     lnmax =       2
     mgfft =      45  mpssoang =       3    mqgrid =    3001     natom =       2
  nloc_mem =       1    nspden =       1   nspinor =       1    nsppol =       1
      nsym =      24    n1xccc =    2501    ntypat =       2    occopt =       1
   xclevel =       1
-    mband =           5        mffmem =           1         mkmem =           9
-   mkqmem =           9        mk1mem =           9           mpw =        3695
      nfft =       91125          nkpt =         260
================================================================================
P This job should need less than                      28.610 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     73.298 Mbytes ; DEN or POT disk file :      0.697 Mbytes.
================================================================================
 
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  3 , fftalg0 =512 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.0610000000E+01  1.0610000000E+01  1.0610000000E+01 Bohr
              amu      2.69815390E+01  7.49215900E+01
             ecut      4.00000000E+01 Hartree
           enunit           1
-          fftalg         512
           getwfk1          0
           getwfk2          1
           istwfk1       2    0    0    0    3    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         7    0    0    0    0    0    0    0    0
           istwfk2       1    0    0    0    1    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    1
                         0    0    0    1    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                       outvar_i_n : Printing only first  50 k-points.
           jdtset        1    2
              kpt1     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       3.75000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  1.25000000E-01  0.00000000E+00
                       3.75000000E-01  1.25000000E-01  0.00000000E+00
                       5.00000000E-01  1.25000000E-01  0.00000000E+00
                      -3.75000000E-01  1.25000000E-01  0.00000000E+00
                      -2.50000000E-01  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       3.75000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -3.75000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                       3.75000000E-01  3.75000000E-01  0.00000000E+00
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  3.75000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       3.75000000E-01  2.50000000E-01  1.25000000E-01
                       5.00000000E-01  2.50000000E-01  1.25000000E-01
                      -3.75000000E-01  2.50000000E-01  1.25000000E-01
                       5.00000000E-01  3.75000000E-01  1.25000000E-01
                      -3.75000000E-01  3.75000000E-01  1.25000000E-01
                      -2.50000000E-01  3.75000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  1.25000000E-01
                      -2.50000000E-01  5.00000000E-01  2.50000000E-01
              kpt2     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       3.75000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  1.25000000E-01  0.00000000E+00
                       1.25000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  1.25000000E-01  0.00000000E+00
                       3.75000000E-01  1.25000000E-01  0.00000000E+00
                       5.00000000E-01  1.25000000E-01  0.00000000E+00
                      -3.75000000E-01  1.25000000E-01  0.00000000E+00
                      -2.50000000E-01  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.25000000E-01  0.00000000E+00
                       0.00000000E+00  2.50000000E-01  0.00000000E+00
                       1.25000000E-01  2.50000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       3.75000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -3.75000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  3.75000000E-01  0.00000000E+00
                       1.25000000E-01  3.75000000E-01  0.00000000E+00
                       2.50000000E-01  3.75000000E-01  0.00000000E+00
                       3.75000000E-01  3.75000000E-01  0.00000000E+00
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  3.75000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  3.75000000E-01  0.00000000E+00
                       0.00000000E+00  5.00000000E-01  0.00000000E+00
                       1.25000000E-01  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  5.00000000E-01  0.00000000E+00
                       3.75000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  1.25000000E-01
                       1.25000000E-01  0.00000000E+00  1.25000000E-01
                       2.50000000E-01  0.00000000E+00  1.25000000E-01
                       3.75000000E-01  0.00000000E+00  1.25000000E-01
                       5.00000000E-01  0.00000000E+00  1.25000000E-01
                      -3.75000000E-01  0.00000000E+00  1.25000000E-01
                      -2.50000000E-01  0.00000000E+00  1.25000000E-01
                      -1.25000000E-01  0.00000000E+00  1.25000000E-01
                       0.00000000E+00  1.25000000E-01  1.25000000E-01
                       1.25000000E-01  1.25000000E-01  1.25000000E-01
                       2.50000000E-01  1.25000000E-01  1.25000000E-01
                       3.75000000E-01  1.25000000E-01  1.25000000E-01
                       5.00000000E-01  1.25000000E-01  1.25000000E-01
                      -3.75000000E-01  1.25000000E-01  1.25000000E-01
                      -2.50000000E-01  1.25000000E-01  1.25000000E-01
                      -1.25000000E-01  1.25000000E-01  1.25000000E-01
                       outvar_i_n : Printing only first  50 k-points.
           kptopt1          1
           kptopt2          2
         kptrlatt        8    0    0      0    8    0      0    0    8
          kptrlen      6.00192236E+01
P           mkmem1          1
P           mkmem2          9
P          mkqmem1          1
P          mkqmem2          9
P          mk1mem1          1
P          mk1mem2          9
            natom           2
            nband1          5
            nband2          5
           ndtset           2
            ngfft          45      45      45
             nkpt1         29
             nkpt2        260
             nqpt1          0
             nqpt2          1
            nstep         150
             nsym          24
           ntypat           2
              occ1     2.000000  2.000000  2.000000  2.000000  0.000000
              occ2     2.000000  2.000000  2.000000  2.000000  0.000000
        optdriver1          0
        optdriver2          1
          rfatpol1          1       1
          rfatpol2          1       2
            rfdir1          0       0       0
            rfdir2          1       1       1
           rfphon1          0
           rfphon2          1
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
          spgroup         216
           symrel      1  0  0   0  1  0   0  0  1       0 -1  1   0 -1  0   1 -1  0
                      -1  0  0  -1  0  1  -1  1  0       0  1 -1   1  0 -1   0  0 -1
                      -1  0  0  -1  1  0  -1  0  1       0 -1  1   1 -1  0   0 -1  0
                       1  0  0   0  0  1   0  1  0       0  1 -1   0  0 -1   1  0 -1
                      -1  0  1  -1  1  0  -1  0  0       0 -1  0   1 -1  0   0 -1  1
                       1  0 -1   0  0 -1   0  1 -1       0  1  0   0  0  1   1  0  0
                       1  0 -1   0  1 -1   0  0 -1       0 -1  0   0 -1  1   1 -1  0
                      -1  0  1  -1  0  0  -1  1  0       0  1  0   1  0  0   0  0  1
                       0  0 -1   0  1 -1   1  0 -1       1 -1  0   0 -1  1   0 -1  0
                       0  0  1   1  0  0   0  1  0      -1  1  0  -1  0  0  -1  0  1
                       0  0  1   0  1  0   1  0  0       1 -1  0   0 -1  0   0 -1  1
                       0  0 -1   1  0 -1   0  1 -1      -1  1  0  -1  0  1  -1  0  0
           tolvrs1     1.00000000E-19
           tolvrs2     1.00000000E-17
            typat      1  2
              wtk1       0.00195    0.01563    0.01563    0.01563    0.00781    0.01172
                         0.04688    0.04688    0.04688    0.04688    0.04688    0.02344
                         0.01172    0.04688    0.04688    0.04688    0.02344    0.01172
                         0.04688    0.02344    0.00586    0.04688    0.09375    0.04688
                         0.04688    0.09375    0.04688    0.02344    0.01172
              wtk2       0.00195    0.00391    0.00391    0.00391    0.00195    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00195
                         0.00391    0.00391    0.00391    0.00195    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391
                       outvars : Printing only first  50 k-points.
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.4036425458E+00  1.4036425458E+00  1.4036425458E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.6525000000E+00  2.6525000000E+00  2.6525000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl       13.00000   33.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency, jdtset=   1.
 
 chkinp: Checking input parameters for consistency, jdtset=   2.
 
================================================================================
== DATASET  1 ==================================================================
-   mpi_nproc: 32, omp_nthreads: -1 (-1 if OMP is not activated)
-    --> not optimal distribution: autoparal keyword recommended in input file <--
 

--- !DatasetInfo
iteration_state: {dtset: 1, }
dimensions: {natom: 2, nkpt: 29, mband: 5, nsppol: 1, nspinor: 1, nspden: 1, mpw: 3636, }
cutoff_energies: {ecut:  40.0, pawecutdg:  -1.0, }
electrons: {nelect:   8.00000000E+00, charge:   0.00000000E+00, occopt:   1.00000000E+00, tsmear:   1.00000000E-02, }
meta: {optdriver: 0, ionmov: 0, optcell: 0, iscf: 7, paral_kgb: 0, }
...

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.3050000  5.3050000  G(1)= -0.0942507  0.0942507  0.0942507
 R(2)=  5.3050000  0.0000000  5.3050000  G(2)=  0.0942507 -0.0942507  0.0942507
 R(3)=  5.3050000  5.3050000  0.0000000  G(3)=  0.0942507  0.0942507 -0.0942507
 Unit cell volume ucvol=  2.9859750E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.05995
 
--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is ./Al.pspnc
- pspatm: opening atomic psp file    ./Al.pspnc
-  Troullier-Martins psp for element  Al        Thu Oct 27 17:31:05 EDT 1994
- 13.00000   3.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   4.657  11.889    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   1.829   2.761    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.09673076353074    0.12648111154518    1.01742091001718   rchrg,fchrg,qchrg
  pspatm : epsatm=    0.22155260
         --- l  ekb(1:nproj) -->
             0    2.540658
             1    1.353815
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is ./As.pspnc
- pspatm: opening atomic psp file    ./As.pspnc
-  Troullier-Martins psp for element  As        Thu Oct 27 17:37:14 EDT 1994
- 33.00000   5.00000    940714                znucl, zion, pspdat
    1    1    1    1      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   4.772  10.829    1   2.5306160        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   2.745   5.580    0   2.5306160        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.05731715564010    0.36322996461007    2.76014815959125   rchrg,fchrg,qchrg
  pspatm : epsatm=   27.20579911
         --- l  ekb(1:nproj) -->
             0    0.838751
 pspatm: atomic psp has been read  and splines computed
 
   2.19418814E+02                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------
 
_setup2: Arith. and geom. avg. npw (full set) are    3606.002    3605.987
 
================================================================================

--- !BeginCycle
iteration_state: {dtset: 1, }
solver: {iscf: 7, nstep: 150, nline: 4, wfoptalg: 0, }
tolerances: {tolvrs: 1.00E-19, }
...
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -10.134013527041    -1.013E+01 2.580E-02 7.722E+01
 ETOT  2  -10.143530687279    -9.517E-03 2.161E-03 2.664E+00
 ETOT  3  -10.143752624106    -2.219E-04 7.294E-05 2.322E-01
 ETOT  4  -10.143766481959    -1.386E-05 5.592E-07 7.186E-03
 ETOT  5  -10.143766724620    -2.427E-07 2.400E-06 4.413E-05
 ETOT  6  -10.143766726292    -1.671E-09 1.929E-07 1.187E-06
 ETOT  7  -10.143766726322    -3.000E-11 1.991E-06 4.453E-08
 ETOT  8  -10.143766726324    -2.103E-12 2.232E-07 1.772E-10
 ETOT  9  -10.143766726324     3.197E-14 1.634E-06 4.491E-13
 ETOT 10  -10.143766726324     2.309E-14 1.773E-07 7.172E-16
 ETOT 11  -10.143766726324     2.629E-13 1.679E-06 1.009E-17
 ETOT 12  -10.143766726324    -2.309E-14 1.786E-07 4.774E-20
 
 At SCF step   12       vres2   =  4.77E-20 < tolvrs=  1.00E-19 =>converged.
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -5.74916909E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -5.74916909E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -5.74916909E-06  sigma(2 1)=  0.00000000E+00
 

--- !ResultsGS
iteration_state: {dtset: 1, }
comment   : Summary of ground state results
lattice_vectors:
- [  0.0000000,   5.3050000,   5.3050000, ]
- [  5.3050000,   0.0000000,   5.3050000, ]
- [  5.3050000,   5.3050000,   0.0000000, ]
lattice_lengths: [   7.50240,    7.50240,    7.50240, ]
lattice_angles: [ 60.000,  60.000,  60.000, ] # degrees, (23, 13, 12)
lattice_volume:   2.9859750E+02
convergence: {deltae: -2.309E-14, res2:  4.774E-20, residm:  1.786E-07, diffor: null, }
etotal    :  -1.01437667E+01
entropy   :   0.00000000E+00
fermie    :   8.61794984E-02
cartesian_stress_tensor: # hartree/bohr^3
- [ -5.74916909E-06,   0.00000000E+00,   0.00000000E+00, ]
- [  0.00000000E+00,  -5.74916909E-06,   0.00000000E+00, ]
- [  0.00000000E+00,   0.00000000E+00,  -5.74916909E-06, ]
pressure_GPa:   1.6915E-01
xred      :
- [  0.0000E+00,   0.0000E+00,   0.0000E+00, Al]
- [  2.5000E-01,   2.5000E-01,   2.5000E-01, As]
cartesian_forces: # hartree/bohr
- [  0.00000000E+00,   0.00000000E+00,   0.00000000E+00, ]
- [  0.00000000E+00,   0.00000000E+00,   0.00000000E+00, ]
force_length_stats: {min:   0.00000000E+00, max:   0.00000000E+00, mean:   0.00000000E+00, }
...

 Integrated electronic density in atomic spheres:
 ------------------------------------------------
 Atom  Sphere_radius  Integrated_density
    1        2.00000          0.91535754
    2        2.00000          2.51317990
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   12.315E-10; max=  17.857E-08
 reduced coordinates (array xred) for    2 atoms
       0.000000000000      0.000000000000      0.000000000000
       0.250000000000      0.250000000000      0.250000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
    2       0.000000000000      0.000000000000      0.000000000000
 
 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      1.40364254578497     1.40364254578497     1.40364254578497
 
 cartesian forces (hartree/bohr) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 h/b
 
 cartesian forces (eV/Angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales= 10.610000000000 10.610000000000 10.610000000000 bohr
              =  5.614570183140  5.614570183140  5.614570183140 angstroms
 prteigrs : about to open file AlAs_o_DS1_EIG
 Fermi (or HOMO) energy (eV) =   2.34506   Average Vxc (eV)=  -9.38096
 Eigenvalues (   eV  ) for nkpt=  29  k points:
 kpt#   1, nband=  5, wtk=  0.00195, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -9.71036    2.34506    2.34506    2.34506    4.30085
 prteigrs : prtvol=0 or 1, do not print more k-points.
 

--- !EnergyTerms
iteration_state     : {dtset: 1, }
comment             : Components of total free energy in Hartree
kinetic             :  2.96807599748629E+00
hartree             :  8.03163525538707E-01
xc                  : -4.34721827691220E+00
Ewald energy        : -8.47989583509473E+00
psp_core            :  7.34831393936634E-01
local_psp           : -2.41659309074511E+00
non_local_psp       :  5.93869559466870E-01
total_energy        : -1.01437667263235E+01
total_energy_eV     : -2.76025930176285E+02
band_energy         : -7.09422317094329E-01
...

 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -5.74916909E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -5.74916909E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -5.74916909E-06  sigma(2 1)=  0.00000000E+00
 
-Cartesian components of stress tensor (GPa)         [Pressure=  1.6915E-01 GPa]
- sigma(1 1)= -1.69146366E-01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -1.69146366E-01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -1.69146366E-01  sigma(2 1)=  0.00000000E+00
 
================================================================================
== DATASET  2 ==================================================================
-   mpi_nproc: 32, omp_nthreads: -1 (-1 if OMP is not activated)
 

--- !DatasetInfo
iteration_state: {dtset: 2, }
dimensions: {natom: 2, nkpt: 260, mband: 5, nsppol: 1, nspinor: 1, nspden: 1, mpw: 3695, }
cutoff_energies: {ecut:  40.0, pawecutdg:  -1.0, }
electrons: {nelect:   8.00000000E+00, charge:   0.00000000E+00, occopt:   1.00000000E+00, tsmear:   1.00000000E-02, }
meta: {optdriver: 1, rfphon: 1, }
...

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.
 
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.3050000  5.3050000  G(1)= -0.0942507  0.0942507  0.0942507
 R(2)=  5.3050000  0.0000000  5.3050000  G(2)=  0.0942507 -0.0942507  0.0942507
 R(3)=  5.3050000  5.3050000  0.0000000  G(3)=  0.0942507  0.0942507 -0.0942507
 Unit cell volume ucvol=  2.9859750E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 setup1 : take into account q-point for computing boxcut.
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.05995
--------------------------------------------------------------------------------
 
-inwffil : will read wavefunctions from disk file AlAs_o_DS1_WFK.nc
 
 ==>  initialize data related to q vector <== 
 
 The list of irreducible perturbations for this q vector is:
    1)    idir= 1    ipert=   1
    2)    idir= 1    ipert=   2
 
================================================================================
 
 The perturbation idir=   2  ipert=   1 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.
 
 
 The perturbation idir=   3  ipert=   1 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.
 
 
 The perturbation idir=   2  ipert=   2 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.
 
 
 The perturbation idir=   3  ipert=   2 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.
 
 
--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : displacement of atom   1   along direction   1
 Found     2 symmetries that leave the perturbation invariant.
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to   150 .
 
--------------------------------------------------------------------------------
 
-inwffil : will read wavefunctions from disk file AlAs_o_DS1_WFK.nc
--------------------------------------------------------------------------------
 
 Initialisation of the first-order wave-functions :
  ireadwf=   0

--- !BeginCycle
iteration_state: {dtset: 2, }
solver: {iscf: 7, nstep: 150, nline: 4, wfoptalg: 0, }
tolerances: {tolvrs: 1.00E-17, }
...
 
     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1   7.0999303483408     -1.989E+01 1.379E+00 9.811E+03
 ETOT  2   5.6704301463337     -1.430E+00 1.207E-01 2.119E+02
 ETOT  3   5.6453573076817     -2.507E-02 2.557E-01 5.986E+00
 ETOT  4   5.6448405212591     -5.168E-04 9.759E-02 1.945E-01
 ETOT  5   5.6448237579615     -1.676E-05 2.012E-01 3.031E-03
 ETOT  6   5.6448235226153     -2.353E-07 7.629E-02 7.498E-05
 ETOT  7   5.6448235167207     -5.895E-09 1.729E-01 9.814E-07
 ETOT  8   5.6448235166328     -8.782E-11 5.619E-02 5.273E-09
 ETOT  9   5.6448235166323     -5.116E-13 1.700E-01 8.477E-11
 ETOT 10   5.6448235166324      2.842E-14 5.102E-02 1.270E-12
 ETOT 11   5.6448235166323     -2.842E-14 1.754E-01 3.447E-14
 ETOT 12   5.6448235166323     -3.553E-15 5.123E-02 4.059E-16
 ETOT 13   5.6448235166323     -7.105E-15 1.816E-01 2.956E-18
 
 At SCF step   13       vres2   =  2.96E-18 < tolvrs=  1.00E-17 =>converged.
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   24.212E-05; max=  18.159E-02
 
 Thirteen components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   2.44991131E+01 eigvalue=   6.79547203E-01  local=  -1.53532365E+01
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
 loc psp =   8.79690941E-01  Hartree=   3.70110223E+00     xc=  -1.69079672E+00
 note that "loc psp" includes a xc core correction that could be resolved
 7,8,9: eventually, occupation + non-local contributions
    edocc=   4.37713976E-01     enl0=   9.06774930E+00   enl1=  -4.35620761E+01
 1-9 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -2.13411926E+01
 10,11,12 Non-relaxation  contributions : frozen-wavefunctions and Ewald
 fr.local=  -1.34911485E+01 fr.nonlo=   2.95897938E+01  Ewald=   1.18438931E+01
 13,14 Frozen wf xc core corrections (1) and (2)
 frxc 1  =  -4.70733196E+00  frxc 2 =   3.75080963E+00
 Resulting in :
 2DEtotal=    0.5644823517E+01 Ha. Also 2DEtotal=    0.153603459533E+03 eV
    (2DErelax=   -2.1341192588E+01 Ha. 2DEnonrelax=    2.6986016104E+01 Ha)
    (  non-var. 2DEtotal :    5.6448235166E+00 Ha)
 
 
--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : displacement of atom   2   along direction   1
 Found     2 symmetries that leave the perturbation invariant.
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to   150 .
 
--------------------------------------------------------------------------------
 
-inwffil : will read wavefunctions from disk file AlAs_o_DS1_WFK.nc
--------------------------------------------------------------------------------
 
 Initialisation of the first-order wave-functions :
  ireadwf=   0

--- !BeginCycle
iteration_state: {dtset: 2, }
solver: {iscf: 7, nstep: 150, nline: 4, wfoptalg: 0, }
tolerances: {tolvrs: 1.00E-17, }
...
 
     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1   39.358669559137     -5.446E+01 1.486E+00 1.901E+05
 ETOT  2   5.9556288925766     -3.340E+01 1.551E-01 1.253E+03
 ETOT  3   5.6552414591379     -3.004E-01 7.656E-01 9.482E+01
 ETOT  4   5.6448607740710     -1.038E-02 1.269E-01 1.622E+00
 ETOT  5   5.6447373948322     -1.234E-04 5.666E-01 1.721E-02
 ETOT  6   5.6447362689030     -1.126E-06 9.514E-02 2.552E-04
 ETOT  7   5.6447362469797     -2.192E-08 4.586E-01 5.070E-06
 ETOT  8   5.6447362464557     -5.241E-10 5.896E-02 5.676E-08
 ETOT  9   5.6447362464524     -3.340E-12 4.722E-01 7.138E-10
 ETOT 10   5.6447362464470     -5.372E-12 5.901E-02 2.546E-11
 ETOT 11   5.6447362464472      2.416E-13 4.960E-01 2.760E-13
 ETOT 12   5.6447362464459     -1.364E-12 6.179E-02 2.635E-15
 ETOT 13   5.6447362464477      1.805E-12 5.196E-01 3.551E-17
 ETOT 14   5.6447362464470     -6.253E-13 6.466E-02 3.652E-19
 
 At SCF step   14       vres2   =  3.65E-19 < tolvrs=  1.00E-17 =>converged.
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   86.219E-06; max=  64.664E-03
 
 Thirteen components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   9.25144591E+01 eigvalue=   7.47517306E-01  local=  -4.28153733E+01
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
 loc psp =  -1.40823423E+02  Hartree=   3.64011041E+01     xc=  -1.12444934E+01
 note that "loc psp" includes a xc core correction that could be resolved
 7,8,9: eventually, occupation + non-local contributions
    edocc=   4.34148746E+00     enl0=   8.22991412E+00   enl1=  -3.55258075E+01
 1-9 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -8.81746154E+01
 10,11,12 Non-relaxation  contributions : frozen-wavefunctions and Ewald
 fr.local=   6.13300628E+01 fr.nonlo=   1.78464199E+01  Ewald=   1.18438931E+01
 13,14 Frozen wf xc core corrections (1) and (2)
 frxc 1  =  -1.85403100E+01  frxc 2 =   2.13392858E+01
 Resulting in :
 2DEtotal=    0.5644736246E+01 Ha. Also 2DEtotal=    0.153601084791E+03 eV
    (2DErelax=   -8.8174615402E+01 Ha. 2DEnonrelax=    9.3819351649E+01 Ha)
    (  non-var. 2DEtotal :    5.6447362465E+00 Ha)
 
================================================================================
 
 ---- first-order wavefunction calculations are completed ----
 
 
 ==> Compute Derivative Database <==
  
  2nd-order matrix (non-cartesian coordinates, masses not included,
   asr not included )
     j1       j2             matrix element
  dir pert dir pert     real part     imaginary part
  
   1    1   1    1         5.6448224568         0.0000000000
   1    1   2    1         2.8224112284         0.0000000000
   1    1   3    1         2.8224112284         0.0000000000
   1    1   1    2        -5.6447992789        -0.0000000000
   1    1   2    2        -2.8223996395         0.0000000000
   1    1   3    2        -2.8223996395         0.0000000000
   1    1   2    4         0.0000000000         0.0000000000
   1    1   3    4         0.0000000000         0.0000000000
  
   2    1   1    1         2.8224112284         0.0000000000
   2    1   2    1         5.6448224568         0.0000000000
   2    1   3    1         2.8224112284         0.0000000000
   2    1   1    2        -2.8223996395         0.0000000000
   2    1   2    2        -5.6447992789        -0.0000000000
   2    1   3    2        -2.8223996395         0.0000000000
   2    1   1    4         0.0000000000         0.0000000000
   2    1   3    4         0.0000000000         0.0000000000
  
   3    1   1    1         2.8224112284         0.0000000000
   3    1   2    1         2.8224112284         0.0000000000
   3    1   3    1         5.6448224568         0.0000000000
   3    1   1    2        -2.8223996395         0.0000000000
   3    1   2    2        -2.8223996395         0.0000000000
   3    1   3    2        -5.6447992789         0.0000000000
   3    1   1    4         0.0000000000         0.0000000000
   3    1   2    4         0.0000000000         0.0000000000
  
   1    2   1    1        -5.6447992788         0.0000000000
   1    2   2    1        -2.8223996394        -0.0000000000
   1    2   3    1        -2.8223996394        -0.0000000000
   1    2   1    2         5.6447035175         0.0000000000
   1    2   2    2         2.8223517587         0.0000000000
   1    2   3    2         2.8223517587         0.0000000000
   1    2   2    4         0.0000000000         0.0000000000
   1    2   3    4         0.0000000000         0.0000000000
  
   2    2   1    1        -2.8223996394        -0.0000000000
   2    2   2    1        -5.6447992788         0.0000000000
   2    2   3    1        -2.8223996394        -0.0000000000
   2    2   1    2         2.8223517587         0.0000000000
   2    2   2    2         5.6447035175         0.0000000000
   2    2   3    2         2.8223517587         0.0000000000
   2    2   1    4         0.0000000000         0.0000000000
   2    2   3    4         0.0000000000         0.0000000000
  
   3    2   1    1        -2.8223996394        -0.0000000000
   3    2   2    1        -2.8223996394        -0.0000000000
   3    2   3    1        -5.6447992788        -0.0000000000
   3    2   1    2         2.8223517587         0.0000000000
   3    2   2    2         2.8223517587         0.0000000000
   3    2   3    2         5.6447035175         0.0000000000
   3    2   1    4         0.0000000000         0.0000000000
   3    2   2    4         0.0000000000         0.0000000000
  
   1    4   2    1         0.0000000000         0.0000000000
   1    4   3    1         0.0000000000         0.0000000000
   1    4   2    2         0.0000000000         0.0000000000
   1    4   3    2         0.0000000000         0.0000000000
  
   2    4   1    1         0.0000000000         0.0000000000
   2    4   3    1         0.0000000000         0.0000000000
   2    4   1    2         0.0000000000         0.0000000000
   2    4   3    2         0.0000000000         0.0000000000
  
   3    4   1    1         0.0000000000         0.0000000000
   3    4   2    1         0.0000000000         0.0000000000
   3    4   1    2         0.0000000000         0.0000000000
   3    4   2    2         0.0000000000         0.0000000000
  
  
  Dynamical matrix, in cartesian coordinates,
   if specified in the inputs, asr has been imposed
     j1       j2             matrix element
  dir pert dir pert     real part    imaginary part
  
   1    1   1    1         0.1002881257         0.0000000000
   1    1   2    1         0.0000000000         0.0000000000
   1    1   3    1        -0.0000000000         0.0000000000
   1    1   1    2        -0.1002877139        -0.0000000000
   1    1   2    2        -0.0000000000         0.0000000000
   1    1   3    2         0.0000000000        -0.0000000000
  
   2    1   1    1         0.0000000000         0.0000000000
   2    1   2    1         0.1002881257         0.0000000000
   2    1   3    1        -0.0000000000         0.0000000000
   2    1   1    2        -0.0000000000         0.0000000000
   2    1   2    2        -0.1002877139         0.0000000000
   2    1   3    2         0.0000000000        -0.0000000000
  
   3    1   1    1         0.0000000000         0.0000000000
   3    1   2    1        -0.0000000000         0.0000000000
   3    1   3    1         0.1002881257         0.0000000000
   3    1   1    2         0.0000000000        -0.0000000000
   3    1   2    2         0.0000000000        -0.0000000000
   3    1   3    2        -0.1002877139        -0.0000000000
  
   1    2   1    1        -0.1002877139         0.0000000000
   1    2   2    1         0.0000000000        -0.0000000000
   1    2   3    1         0.0000000000         0.0000000000
   1    2   1    2         0.1002860126         0.0000000000
   1    2   2    2         0.0000000000         0.0000000000
   1    2   3    2         0.0000000000         0.0000000000
  
   2    2   1    1         0.0000000000        -0.0000000000
   2    2   2    1        -0.1002877139        -0.0000000000
   2    2   3    1         0.0000000000         0.0000000000
   2    2   1    2         0.0000000000         0.0000000000
   2    2   2    2         0.1002860126         0.0000000000
   2    2   3    2        -0.0000000000         0.0000000000
  
   3    2   1    1         0.0000000000         0.0000000000
   3    2   2    1         0.0000000000         0.0000000000
   3    2   3    1        -0.1002877139         0.0000000000
   3    2   1    2         0.0000000000         0.0000000000
   3    2   2    2        -0.0000000000         0.0000000000
   3    2   3    2         0.1002860126         0.0000000000
 
  Phonon wavevector (reduced coordinates) :  0.00000  0.00000  0.00000
 Phonon energies in meV     :
- -7.169620E-02 -7.169619E-02 -7.169616E-02  4.531600E+01  4.531600E+01
-  4.531600E+01
 Phonon frequencies in Thz     :
- -1.733607E-02 -1.733606E-02 -1.733606E-02  1.095736E+01  1.095736E+01
-  1.095736E+01
 
== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      1.0610000000E+01  1.0610000000E+01  1.0610000000E+01 Bohr
              amu      2.69815390E+01  7.49215900E+01
             ecut      4.00000000E+01 Hartree
           enunit           1
           etotal1    -1.0143766726E+01
           etotal2     5.6447362464E+00
            fcart1     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            fcart2     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
-          fftalg         512
           getwfk1          0
           getwfk2          1
           istwfk1       2    0    0    0    3    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         7    0    0    0    0    0    0    0    0
           istwfk2       1    0    0    0    1    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    1
                         0    0    0    1    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                       outvar_i_n : Printing only first  50 k-points.
           jdtset        1    2
              kpt1     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       3.75000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  1.25000000E-01  0.00000000E+00
                       3.75000000E-01  1.25000000E-01  0.00000000E+00
                       5.00000000E-01  1.25000000E-01  0.00000000E+00
                      -3.75000000E-01  1.25000000E-01  0.00000000E+00
                      -2.50000000E-01  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       3.75000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -3.75000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                       3.75000000E-01  3.75000000E-01  0.00000000E+00
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  3.75000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       3.75000000E-01  2.50000000E-01  1.25000000E-01
                       5.00000000E-01  2.50000000E-01  1.25000000E-01
                      -3.75000000E-01  2.50000000E-01  1.25000000E-01
                       5.00000000E-01  3.75000000E-01  1.25000000E-01
                      -3.75000000E-01  3.75000000E-01  1.25000000E-01
                      -2.50000000E-01  3.75000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  1.25000000E-01
                      -2.50000000E-01  5.00000000E-01  2.50000000E-01
              kpt2     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       3.75000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  1.25000000E-01  0.00000000E+00
                       1.25000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  1.25000000E-01  0.00000000E+00
                       3.75000000E-01  1.25000000E-01  0.00000000E+00
                       5.00000000E-01  1.25000000E-01  0.00000000E+00
                      -3.75000000E-01  1.25000000E-01  0.00000000E+00
                      -2.50000000E-01  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.25000000E-01  0.00000000E+00
                       0.00000000E+00  2.50000000E-01  0.00000000E+00
                       1.25000000E-01  2.50000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       3.75000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -3.75000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  3.75000000E-01  0.00000000E+00
                       1.25000000E-01  3.75000000E-01  0.00000000E+00
                       2.50000000E-01  3.75000000E-01  0.00000000E+00
                       3.75000000E-01  3.75000000E-01  0.00000000E+00
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  3.75000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  3.75000000E-01  0.00000000E+00
                       0.00000000E+00  5.00000000E-01  0.00000000E+00
                       1.25000000E-01  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  5.00000000E-01  0.00000000E+00
                       3.75000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  1.25000000E-01
                       1.25000000E-01  0.00000000E+00  1.25000000E-01
                       2.50000000E-01  0.00000000E+00  1.25000000E-01
                       3.75000000E-01  0.00000000E+00  1.25000000E-01
                       5.00000000E-01  0.00000000E+00  1.25000000E-01
                      -3.75000000E-01  0.00000000E+00  1.25000000E-01
                      -2.50000000E-01  0.00000000E+00  1.25000000E-01
                      -1.25000000E-01  0.00000000E+00  1.25000000E-01
                       0.00000000E+00  1.25000000E-01  1.25000000E-01
                       1.25000000E-01  1.25000000E-01  1.25000000E-01
                       2.50000000E-01  1.25000000E-01  1.25000000E-01
                       3.75000000E-01  1.25000000E-01  1.25000000E-01
                       5.00000000E-01  1.25000000E-01  1.25000000E-01
                      -3.75000000E-01  1.25000000E-01  1.25000000E-01
                      -2.50000000E-01  1.25000000E-01  1.25000000E-01
                      -1.25000000E-01  1.25000000E-01  1.25000000E-01
                       outvar_i_n : Printing only first  50 k-points.
           kptopt1          1
           kptopt2          2
         kptrlatt        8    0    0      0    8    0      0    0    8
          kptrlen      6.00192236E+01
P           mkmem1          1
P           mkmem2          9
P          mkqmem1          1
P          mkqmem2          9
P          mk1mem1          1
P          mk1mem2          9
            natom           2
            nband1          5
            nband2          5
           ndtset           2
            ngfft          45      45      45
             nkpt1         29
             nkpt2        260
             nqpt1          0
             nqpt2          1
            nstep         150
             nsym          24
           ntypat           2
              occ1     2.000000  2.000000  2.000000  2.000000  0.000000
              occ2     2.000000  2.000000  2.000000  2.000000  0.000000
        optdriver1          0
        optdriver2          1
          rfatpol1          1       1
          rfatpol2          1       2
            rfdir1          0       0       0
            rfdir2          1       1       1
           rfphon1          0
           rfphon2          1
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
          spgroup         216
           strten1    -5.7491690891E-06 -5.7491690891E-06 -5.7491690891E-06
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten2     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1       0 -1  1   0 -1  0   1 -1  0
                      -1  0  0  -1  0  1  -1  1  0       0  1 -1   1  0 -1   0  0 -1
                      -1  0  0  -1  1  0  -1  0  1       0 -1  1   1 -1  0   0 -1  0
                       1  0  0   0  0  1   0  1  0       0  1 -1   0  0 -1   1  0 -1
                      -1  0  1  -1  1  0  -1  0  0       0 -1  0   1 -1  0   0 -1  1
                       1  0 -1   0  0 -1   0  1 -1       0  1  0   0  0  1   1  0  0
                       1  0 -1   0  1 -1   0  0 -1       0 -1  0   0 -1  1   1 -1  0
                      -1  0  1  -1  0  0  -1  1  0       0  1  0   1  0  0   0  0  1
                       0  0 -1   0  1 -1   1  0 -1       1 -1  0   0 -1  1   0 -1  0
                       0  0  1   1  0  0   0  1  0      -1  1  0  -1  0  0  -1  0  1
                       0  0  1   0  1  0   1  0  0       1 -1  0   0 -1  0   0 -1  1
                       0  0 -1   1  0 -1   0  1 -1      -1  1  0  -1  0  1  -1  0  0
           tolvrs1     1.00000000E-19
           tolvrs2     1.00000000E-17
            typat      1  2
              wtk1       0.00195    0.01563    0.01563    0.01563    0.00781    0.01172
                         0.04688    0.04688    0.04688    0.04688    0.04688    0.02344
                         0.01172    0.04688    0.04688    0.04688    0.02344    0.01172
                         0.04688    0.02344    0.00586    0.04688    0.09375    0.04688
                         0.04688    0.09375    0.04688    0.02344    0.01172
              wtk2       0.00195    0.00391    0.00391    0.00391    0.00195    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00195
                         0.00391    0.00391    0.00391    0.00195    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391
                       outvars : Printing only first  50 k-points.
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.4036425458E+00  1.4036425458E+00  1.4036425458E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.6525000000E+00  2.6525000000E+00  2.6525000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl       13.00000   33.00000
 
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
 For information on why they are suggested, see also https://docs.abinit.org/theory/acknowledgments.
-
- [1] Specification of an extensible and portable file format for electronic structure and crystallographic data
- X. Gonze, C.-O. Almbladh, A. Cucca, D. Caliste, C. Freysoldt, M. Marques, V. Olevano, Y. Pouillon, M.J. Verstraete,
- Comput. Material Science 43, 1056 (2008).
- Comment: to be cited in case the ETSF_IO file format is used, i.e. iomode=3.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#gonze2008
-
- [2] The Abinit project: Impact, environment and recent developments.
- Computer Phys. Comm. 248, 107042 (2020).
- X.Gonze, B. Amadon, G. Antonius, F.Arnardi, L.Baguet, J.-M.Beuken,
- J.Bieder, F.Bottin, J.Bouchet, E.Bousquet, N.Brouwer, F.Bruneval,
- G.Brunin, T.Cavignac, J.-B. Charraud, Wei Chen, M.Cote, S.Cottenier,
- J.Denier, G.Geneste, Ph.Ghosez, M.Giantomassi, Y.Gillet, O.Gingras,
- D.R.Hamann, G.Hautier, Xu He, N.Helbig, N.Holzwarth, Y.Jia, F.Jollet,
- W.Lafargue-Dit-Hauret, K.Lejaeghere, M.A.L.Marques, A.Martin, C.Martins,
- H.P.C. Miranda, F.Naccarato, K. Persson, G.Petretto, V.Planes, Y.Pouillon,
- S.Prokhorenko, F.Ricci, G.-M.Rignanese, A.H.Romero, M.M.Schmitt, M.Torrent,
- M.J.van Setten, B.Van Troeye, M.J.Verstraete, G.Zerah and J.W.Zwanzig
- Comment: the fifth generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/sites/default/files/ABINIT20.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#gonze2020
-
- [3] First-principles responses of solids to atomic displacements and homogeneous electric fields:,
- implementation of a conjugate-gradient algorithm. X. Gonze, Phys. Rev. B55, 10337 (1997).
- Comment: Non-vanishing rfphon and/or rfelfd, in the norm-conserving case.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#gonze1997
-
- [4] Dynamical matrices, Born effective charges, dielectric permittivity tensors, and ,
- interatomic force constants from density-functional perturbation theory,
- X. Gonze and C. Lee, Phys. Rev. B55, 10355 (1997).
- Comment: Non-vanishing rfphon and/or rfelfd, in the norm-conserving case.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#gonze1997a
-
- [5] Recent developments in the ABINIT software package.
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
- Comment: the fourth generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/sites/default/files/ABINIT16.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#gonze2016
-
- [6] ABINIT: First-principles approach of materials and nanosystem properties.
- Computer Phys. Comm. 180, 2582-2615 (2009).
- X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
- D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
- S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
- M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
- M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
- Comment: the third generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/sites/default/files/ABINIT_CPC_v10.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#gonze2009
-
- Proc.   0 individual time (sec): cpu=         28.9  wall=         37.3
 
================================================================================
 
 Calculation completed.
.Delivered   0 WARNINGs and   0 COMMENTs to log file.
+Overall time at end (sec) : cpu=       1068.6  wall=       1190.9
