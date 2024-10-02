
.Version 9.2.1 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu7.5 computer) 

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

.Starting date : Sat  1 May 2021.
- ( at 01h30 )
  
- input  file    -> tgw1_1.abi
- output file    -> tgw1_1.abo
- root for input  files -> tgw1_1i
- root for output files -> tgw1_1o


 DATASET    1 : space group Pn m a (# 62); Bravais oP (primitive ortho.)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
     intxc =       0    ionmov =       0      iscf =       7    lmnmax =       8
     lnmax =       8     mgfft =     150  mpssoang =       4    mqgrid =    7227
     natom =      20  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       8    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =         100        mffmem =           1         mkmem =          18
       mpw =       95519          nfft =     1620000          nkpt =          18
================================================================================
P This job should need less than                    3166.860 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :   2623.510 Mbytes ; DEN or POT disk file :     12.362 Mbytes.
================================================================================


 DATASET    2 : space group Pn m a (# 62); Bravais oP (primitive ortho.)
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
     intxc =       0    ionmov =       0      iscf =      -2    lmnmax =       8
     lnmax =       8     mgfft =     150  mpssoang =       4    mqgrid =    7227
     natom =      20  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       8    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =         200        mffmem =           1         mkmem =          18
       mpw =       95519          nfft =     1620000          nkpt =          18
================================================================================
P This job should need less than                    5583.535 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :   5247.017 Mbytes ; DEN or POT disk file :     12.362 Mbytes.
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
            acell      1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu      1.32905430E+02  1.18710000E+02  1.26904470E+02
           diemac      1.20000000E+01
             ecut      4.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
-          fftalg         112
           getden1          0
           getden2         -1
             iscf1          7
             iscf2         -2
              ixc          11
           jdtset        1    2
              kpt      8.33333333E-02  8.33333333E-02  1.25000000E-01
                       2.50000000E-01  8.33333333E-02  1.25000000E-01
                       4.16666667E-01  8.33333333E-02  1.25000000E-01
                       8.33333333E-02  2.50000000E-01  1.25000000E-01
                       2.50000000E-01  2.50000000E-01  1.25000000E-01
                       4.16666667E-01  2.50000000E-01  1.25000000E-01
                       8.33333333E-02  4.16666667E-01  1.25000000E-01
                       2.50000000E-01  4.16666667E-01  1.25000000E-01
                       4.16666667E-01  4.16666667E-01  1.25000000E-01
                       8.33333333E-02  8.33333333E-02  3.75000000E-01
                       2.50000000E-01  8.33333333E-02  3.75000000E-01
                       4.16666667E-01  8.33333333E-02  3.75000000E-01
                       8.33333333E-02  2.50000000E-01  3.75000000E-01
                       2.50000000E-01  2.50000000E-01  3.75000000E-01
                       4.16666667E-01  2.50000000E-01  3.75000000E-01
                       8.33333333E-02  4.16666667E-01  3.75000000E-01
                       2.50000000E-01  4.16666667E-01  3.75000000E-01
                       4.16666667E-01  4.16666667E-01  3.75000000E-01
         kptrlatt        6    0    0      0    6    0      0    0    4
          kptrlen      9.57190275E+01
P           mkmem          18
            natom          20
            nband1        100
            nband2        200
           nbdbuf1          0
           nbdbuf2         10
           ndtset           2
            ngfft         100     108     150
             nkpt          18
            nstep          20
             nsym           8
           ntypat           3
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
            rprim      1.6503301389E+01  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  1.6766047020E+01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  2.3929756874E+01
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup          62
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0 -1      -1  0  0   0  1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000    -0.0000000 -0.0000000 -0.0000000
                       0.5000000  0.5000000 -0.0000000     0.5000000  0.5000000  0.0000000
                      -0.0000000 -0.0000000  0.5000000     0.0000000  0.0000000  0.5000000
                       0.5000000  0.5000000  0.5000000     0.5000000  0.5000000  0.5000000
           tolsym      1.00000000E-08
           tolvrs1     1.00000000E-10
           tolvrs2     0.00000000E+00
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-12
            typat      1  1  1  1  2  2  2  2  3  3  3  3  3  3  3  3  3  3  3  3
              wtk        0.05556    0.05556    0.05556    0.05556    0.05556    0.05556
                         0.05556    0.05556    0.05556    0.05556    0.05556    0.05556
                         0.05556    0.05556    0.05556    0.05556    0.05556    0.05556
           xangst      4.0897439614E-02  2.0701527503E-01  9.4973114585E+00
                       4.4074829205E+00  4.2290897056E+00  9.4973114585E+00
                       8.6922735222E+00  8.6651946862E+00  3.1657704862E+00
                       4.3256880413E+00  4.6431202556E+00  3.1657704862E+00
                       4.3665854809E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  4.4361049806E+00  6.3315409723E+00
                       0.0000000000E+00  4.4361049806E+00  0.0000000000E+00
                       4.3665854809E+00  0.0000000000E+00  6.3315409723E+00
                       6.1402750369E+00  6.2431257278E+00  1.2567298393E+01
                       2.5928959249E+00  2.6290842334E+00  6.2357574205E+00
                       6.1402750369E+00  6.2431257278E+00  6.4273245242E+00
                       2.5928959249E+00  2.6290842334E+00  9.5783551829E-02
                       4.3897109176E+00  8.6949254618E+00  3.1657704862E+00
                       1.7736895560E+00  7.0651892140E+00  6.4273245242E+00
                       8.7100455251E+00  4.2588204812E+00  9.4973114585E+00
                       6.9594814058E+00  1.8070207472E+00  6.2357574205E+00
                       6.9594814058E+00  1.8070207472E+00  9.5783551829E-02
                       4.3434600442E+00  1.7728449945E-01  9.4973114585E+00
                       2.3125436707E-02  4.6133894801E+00  3.1657704862E+00
                       1.7736895560E+00  7.0651892140E+00  1.2567298393E+01
            xcart      7.7284960407E-02  3.9120217512E-01  1.7947317655E+01
                       8.3289356552E+00  7.9918213350E+00  1.7947317655E+01
                       1.6426016429E+01  1.6374844845E+01  5.9824392184E+00
                       8.1743657343E+00  8.7742256852E+00  5.9824392184E+00
                       8.2516506947E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  8.3830235101E+00  1.1964878437E+01
                       0.0000000000E+00  8.3830235101E+00  0.0000000000E+00
                       8.2516506947E+00  0.0000000000E+00  1.1964878437E+01
                       1.1603438200E+01  1.1797797839E+01  2.3748752193E+01
                       4.8998631891E+00  4.9682491814E+00  1.1783873756E+01
                       1.1603438200E+01  1.1797797839E+01  1.2145883118E+01
                       4.8998631891E+00  4.9682491814E+00  1.8100468099E-01
                       8.2953514368E+00  1.6431027869E+01  5.9824392184E+00
                       3.3517875056E+00  1.3351272692E+01  1.2145883118E+01
                       1.6459600647E+01  8.0480043585E+00  1.7947317655E+01
                       1.3151513884E+01  3.4147743287E+00  1.1783873756E+01
                       1.3151513884E+01  3.4147743287E+00  1.8100468099E-01
                       8.2079499527E+00  3.3501915156E-01  1.7947317655E+01
                       4.3700742079E-02  8.7180426617E+00  5.9824392184E+00
                       3.3517875056E+00  1.3351272692E+01  2.3748752193E+01
             xred      4.6830000000E-03  2.3333000000E-02  7.5000000000E-01
                       5.0468300000E-01  4.7666700000E-01  7.5000000000E-01
                       9.9531700000E-01  9.7666700000E-01  2.5000000000E-01
                       4.9531700000E-01  5.2333300000E-01  2.5000000000E-01
                       5.0000000000E-01  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       0.0000000000E+00  5.0000000000E-01  0.0000000000E+00
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       7.0309800000E-01  7.0367200000E-01  9.9243600000E-01
                       2.9690200000E-01  2.9632800000E-01  4.9243600000E-01
                       7.0309800000E-01  7.0367200000E-01  5.0756400000E-01
                       2.9690200000E-01  2.9632800000E-01  7.5640000000E-03
                       5.0264800000E-01  9.8001800000E-01  2.5000000000E-01
                       2.0309800000E-01  7.9632800000E-01  5.0756400000E-01
                       9.9735200000E-01  4.8001800000E-01  7.5000000000E-01
                       7.9690200000E-01  2.0367200000E-01  4.9243600000E-01
                       7.9690200000E-01  2.0367200000E-01  7.5640000000E-03
                       4.9735200000E-01  1.9982000000E-02  7.5000000000E-01
                       2.6480000000E-03  5.1998200000E-01  2.5000000000E-01
                       2.0309800000E-01  7.9632800000E-01  9.9243600000E-01
            znucl       55.00000   50.00000   53.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.

================================================================================
== DATASET  1 ==================================================================
-   mpi_nproc: 1, omp_nthreads: -1 (-1 if OMP is not activated)


--- !DatasetInfo
iteration_state: {dtset: 1, }
dimensions: {natom: 20, nkpt: 18, mband: 100, nsppol: 1, nspinor: 1, nspden: 1, mpw: 95519, }
cutoff_energies: {ecut:  45.0, pawecutdg:  -1.0, }
electrons: {nelect:   1.76000000E+02, charge:   0.00000000E+00, occopt:   1.00000000E+00, tsmear:   1.00000000E-02, }
meta: {optdriver: 0, ionmov: 0, optcell: 0, iscf: 7, paral_kgb: 0, }
...

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)= 16.5033014  0.0000000  0.0000000  G(1)=  0.0605939  0.0000000  0.0000000
 R(2)=  0.0000000 16.7660470  0.0000000  G(2)=  0.0000000  0.0596444  0.0000000
 R(3)=  0.0000000  0.0000000 23.9297569  G(3)=  0.0000000  0.0000000  0.0417890
 Unit cell volume ucvol=  6.6212471E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 100 108 150
         ecut(hartree)=     45.000   => boxcut(ratio)=   2.00659

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is /home/max/Downloads/abinit-9.4.1/tests//Psps_for_tests/Perovskites/Cs.psp8
- pspatm: opening atomic psp file    /home/max/Downloads/abinit-9.4.1/tests//Psps_for_tests/Perovskites/Cs.psp8
- Cs    ONCVPSP-3.2.3.1  r_core=   2.27353   1.85623   2.01788   1.90105
- 55.00000   9.00000    170703                znucl, zion, pspdat
    8   11    3    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    5.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2     2
     extension_switch     1
  pspatm : epsatm=   22.81663475
         --- l  ekb(1:nproj) -->
             0    6.176104    0.756334
             1    6.263084    0.786397
             2    3.737592    0.906929
             3   -9.272327   -2.535859
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is /home/max/Downloads/abinit-9.4.1/tests//Psps_for_tests/Perovskites/Sn.psp8
- pspatm: opening atomic psp file    /home/max/Downloads/abinit-9.4.1/tests//Psps_for_tests/Perovskites/Sn.psp8
- Sn    ONCVPSP-3.2.3.1  r_core=   2.27326   2.62311   1.85601
- 50.00000  14.00000    170510                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    6.50000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
     extension_switch     1
  pspatm : epsatm=   32.65096653
         --- l  ekb(1:nproj) -->
             0    5.582184    0.748969
             1    4.193379    0.727317
             2   -5.282748   -1.526429
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is /home/max/Downloads/abinit-9.4.1/tests//Psps_for_tests/Perovskites/I.psp8
- pspatm: opening atomic psp file    /home/max/Downloads/abinit-9.4.1/tests//Psps_for_tests/Perovskites/I.psp8
- I     ONCVPSP-3.2.3.1  r_core=   2.02042   2.17032   2.27639
- 53.00000   7.00000    170510                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    4.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
     extension_switch     1
  pspatm : epsatm=   19.17050482
         --- l  ekb(1:nproj) -->
             0    5.955518    0.916455
             1    4.011347    0.742302
             2    4.134838    0.711910
 pspatm: atomic psp has been read  and splines computed

   7.95372975E+04                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

_setup2: Arith. and geom. avg. npw (full set) are   95463.389   95463.384

================================================================================

--- !BeginCycle
iteration_state: {dtset: 1, }
solver: {iscf: 7, nstep: 20, nline: 4, wfoptalg: 0, }
tolerances: {tolvrs: 1.00E-10, }
...

     iter   Etot(hartree)      deltaE(h)  residm     vres2