
.Version 9.2.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu9.3 computer) 

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

.Starting date : Thu 24 Dec 2020.
- ( at 16h31 )
  
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
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.0000000
                       0.5000000  0.5000000  0.0000000     0.5000000  0.0000000  0.0000000
           toldfe      1.00000000E-07 Hartree
            typat      1  1  2  2
              wtk        0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250
           xangst      3.2161665415E+00  3.9998113345E+00  8.6354394028E+00
                       1.0720555138E+00  1.7908166268E+00  1.1396794300E+01
                       1.0720555138E+00  2.0387852763E+00  8.6813854880E+00
                       3.2161665415E+00  4.2477799840E+00  1.1350848214E+01
            xcart      6.0776739612E+00  7.5585480054E+00  1.6318615509E+01
                       2.0258913204E+00  3.3841529789E+00  2.1536820019E+01
                       2.0258913204E+00  3.8527458161E+00  1.6405441026E+01
                       6.0776739612E+00  8.0271408426E+00  2.1449994501E+01
             xred      7.5000000000E-01  9.0534651816E-01  4.3107720942E-01
                       2.5000000000E-01  4.0534651816E-01  5.6892279058E-01
                       2.5000000000E-01  4.6147355384E-01  4.3337081710E-01
                       7.5000000000E-01  9.6147355384E-01  5.6662918290E-01
            znucl       50.00000   34.00000

================================================================================

 chkinp: Checking input parameters for consistency.

================================================================================
== DATASET  1 ==================================================================
-   mpi_nproc: 16, omp_nthreads: -1 (-1 if OMP is not activated)


--- !DatasetInfo
iteration_state: {dtset: 1, }
dimensions: {natom: 4, nkpt: 16, mband: 30, nsppol: 1, nspinor: 1, nspden: 1, mpw: 23328, }
cutoff_energies: {ecut:  33.1, pawecutdg:  -1.0, }
electrons: {nelect:   4.00000000E+01, charge:   0.00000000E+00, occopt:   1.00000000E+00, tsmear:   1.00000000E-02, }
meta: {optdriver: 0, ionmov: 0, optcell: 0, iscf: 7, paral_kgb: 0, }
...

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

--- !BeginCycle
iteration_state: {dtset: 1, }
solver: {iscf: 7, nstep: 60, nline: 4, wfoptalg: 0, }
tolerances: {toldfe: 1.00E-07, }
...

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -137.96949466271    -1.380E+02 2.042E-01 1.183E+04
 ETOT  2  -139.49568596057    -1.526E+00 2.614E-03 8.992E+02
 ETOT  3  -139.62888274581    -1.332E-01 2.139E-03 6.790E+01
 ETOT  4  -139.63395565608    -5.073E-03 8.329E-04 3.731E+01
 ETOT  5  -139.63413828999    -1.826E-04 1.678E-04 2.620E+01
 ETOT  6  -139.63416775635    -2.947E-05 5.579E-05 1.698E+01
 ETOT  7  -139.63417066353    -2.907E-06 1.254E-04 1.150E+01
 ETOT  8  -139.63417432267    -3.659E-06 8.644E-04 3.164E+00
 ETOT  9  -139.63416833599     5.987E-06 2.006E-04 8.435E-01
 ETOT 10  -139.63417634714    -8.011E-06 3.432E-04 3.546E-02
 ETOT 11  -139.63417638321    -3.607E-08 9.125E-05 5.501E-03
 ETOT 12  -139.63417647866    -9.545E-08 4.449E-05 5.838E-04

 At SCF step   12, etot is converged : 
  for the second time, diff in etot=  9.545E-08 < toldfe=  1.000E-07

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.88770946E-07  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  6.99210999E-07  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.23109093E-07  sigma(2 1)=  0.00000000E+00


--- !ResultsGS
iteration_state: {dtset: 1, }
comment   : Summary of ground state results
lattice_vectors:
- [  8.1035653,   0.0000000,   0.0000000, ]
- [  0.0000000,   8.3487901,   0.0000000, ]
- [  0.0000000,   0.0000000,  37.8554355, ]
lattice_lengths: [   8.10357,    8.34879,   37.85544, ]
lattice_angles: [ 90.000,  90.000,  90.000, ] # degrees, (23, 13, 12)
lattice_volume:   2.5611082E+03
convergence: {deltae: -9.545E-08, res2:  5.838E-04, residm:  4.449E-05, diffor: null, }
etotal    :  -1.39634176E+02
entropy   :   0.00000000E+00
fermie    :  -7.02622475E-02
cartesian_stress_tensor: # hartree/bohr^3
- [  1.88770946E-07,   0.00000000E+00,   0.00000000E+00, ]
- [  0.00000000E+00,   6.99210999E-07,   0.00000000E+00, ]
- [  0.00000000E+00,   0.00000000E+00,   1.23109093E-07, ]
pressure_GPa:  -9.9158E-03
xred      :
- [  7.5000E-01,   9.0535E-01,   4.3108E-01, Sn]
- [  2.5000E-01,   4.0535E-01,   5.6892E-01, Sn]
- [  2.5000E-01,   4.6147E-01,   4.3337E-01, Se]
- [  7.5000E-01,   9.6147E-01,   5.6663E-01, Se]
cartesian_forces: # hartree/bohr
- [ -0.00000000E+00,  -2.68460533E-06,   1.56338313E-04, ]
- [ -0.00000000E+00,  -2.68460533E-06,  -1.56338313E-04, ]
- [ -0.00000000E+00,   2.68460533E-06,  -1.47044582E-04, ]
- [ -0.00000000E+00,   2.68460533E-06,   1.47044582E-04, ]
force_length_stats: {min:   1.47069087E-04, max:   1.56361361E-04, mean:   1.51715224E-04, }
...

 Integrated electronic density in atomic spheres:
 ------------------------------------------------
 Atom  Sphere_radius  Integrated_density
    1        2.00000         10.33070373
    2        2.00000         10.32810529
    3        2.00000          3.23081342
    4        2.00000          3.23582038
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   25.754E-08; max=  44.493E-06
 reduced coordinates (array xred) for    4 atoms
       0.750000000000      0.905346518161      0.431077209417
       0.250000000000      0.405346518161      0.568922790583
       0.250000000000      0.461473553839      0.433370817100
       0.750000000000      0.961473553839      0.566629182900
 rms dE/dt=  3.3169E-03; max dE/dt=  5.9183E-03; dE/dt below (all hartree)
    1       0.000000000000      0.000035493635     -0.005918254943
    2       0.000000000000      0.000035493635      0.005918254943
    3       0.000000000000     -0.000009332777      0.005566436698
    4       0.000000000000     -0.000009332777     -0.005566436698

 cartesian coordinates (angstrom) at end:
    1      3.21616654149929     3.99981133449652     8.63543940284819
    2      1.07205551383310     1.79081662680001    11.39679429963997
    3      1.07205551383310     2.03878527634621     8.68138548798983
    4      3.21616654149929     4.24777998404273    11.35084821449834

 cartesian forces (hartree/bohr) at end:
    1     -0.00000000000000    -0.00000268460533     0.00015633831339
    2     -0.00000000000000    -0.00000268460533    -0.00015633831339
    3     -0.00000000000000     0.00000268460533    -0.00014704458212
    4     -0.00000000000000     0.00000268460533     0.00014704458212
 frms,max,avg= 8.7633890E-05 1.5633831E-04   0.000E+00 -1.567E-06  0.000E+00 h/b

 cartesian forces (eV/Angstrom) at end:
    1     -0.00000000000000    -0.00013804794479     0.00803923863044
    2     -0.00000000000000    -0.00013804794479    -0.00803923863044
    3     -0.00000000000000     0.00013804794479    -0.00756133579387
    4     -0.00000000000000     0.00013804794479     0.00756133579387
 frms,max,avg= 4.5063154E-03 8.0392386E-03   0.000E+00 -8.057E-05  0.000E+00 e/A
 length scales=  1.889726132886  1.889726132886  1.889726132886 bohr
              =  1.000000000000  1.000000000000  1.000000000000 angstroms
 prteigrs : about to open file SnSe.o_EIG
 Fermi (or HOMO) energy (hartree) =  -0.07026   Average Vxc (hartree)=  -0.12229
 Eigenvalues (hartree) for nkpt=  16  k points:
 kpt#   1, nband= 30, wtk=  0.06250, kpt=  0.0625  0.0625  0.5000 (reduced coord)
  -0.84662   -0.84623   -0.84613   -0.84612   -0.84596   -0.84537   -0.84504   -0.84498
  -0.84467   -0.84454   -0.55108   -0.51495   -0.29843   -0.26230   -0.18944   -0.17819
  -0.16569   -0.13335   -0.12020   -0.08628   -0.00720    0.06054    0.06117    0.07930
   0.08550    0.09772    0.11564    0.11669    0.13566    0.14737
 prteigrs : prtvol=0 or 1, do not print more k-points.


--- !EnergyTerms
iteration_state     : {dtset: 1, }
comment             : Components of total free energy in Hartree
kinetic             :  6.93006683294980E+01
hartree             :  2.85145748519955E+02
xc                  : -1.87893384639921E+01
Ewald energy        :  1.60261097956119E+02
psp_core            :  1.59133098500700E+00
local_psp           : -6.10056438027156E+02
non_local_psp       : -2.70872457780922E+01
total_energy        : -1.39634176478661E+02
total_energy_eV     : -3.79963917613584E+03
band_energy         : -2.19512196950816E+01
...


 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.88770946E-07  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  6.99210999E-07  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.23109093E-07  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -9.9158E-03 GPa]
- sigma(1 1)=  5.55383205E-03  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  2.05714943E-02  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  3.62199396E-03  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      1.8897261329E+00  1.8897261329E+00  1.8897261329E+00 Bohr
              amu      1.18710000E+02  7.89600000E+01
           diemac      9.00000000E+00
             ecut      3.30743929E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           etotal     -1.3963417648E+02
            fcart     -0.0000000000E+00 -2.6846053275E-06  1.5633831339E-04
                      -0.0000000000E+00 -2.6846053275E-06 -1.5633831339E-04
                      -0.0000000000E+00  2.6846053275E-06 -1.4704458212E-04
                      -0.0000000000E+00  2.6846053275E-06  1.4704458212E-04
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
           strten      1.8877094620E-07  6.9921099869E-07  1.2310909302E-07
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0 -1
                       1  0  0   0  1  0   0  0 -1      -1  0  0   0  1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.0000000
                       0.5000000  0.5000000  0.0000000     0.5000000  0.0000000  0.0000000
           toldfe      1.00000000E-07 Hartree
            typat      1  1  2  2
              wtk        0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250
           xangst      3.2161665415E+00  3.9998113345E+00  8.6354394028E+00
                       1.0720555138E+00  1.7908166268E+00  1.1396794300E+01
                       1.0720555138E+00  2.0387852763E+00  8.6813854880E+00
                       3.2161665415E+00  4.2477799840E+00  1.1350848214E+01
            xcart      6.0776739612E+00  7.5585480054E+00  1.6318615509E+01
                       2.0258913204E+00  3.3841529789E+00  2.1536820019E+01
                       2.0258913204E+00  3.8527458161E+00  1.6405441026E+01
                       6.0776739612E+00  8.0271408426E+00  2.1449994501E+01
             xred      7.5000000000E-01  9.0534651816E-01  4.3107720942E-01
                       2.5000000000E-01  4.0534651816E-01  5.6892279058E-01
                       2.5000000000E-01  4.6147355384E-01  4.3337081710E-01
                       7.5000000000E-01  9.6147355384E-01  5.6662918290E-01
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
 For information on why they are suggested, see also https://docs.abinit.org/theory/acknowledgments.
-
- [1] Libxc: A library of exchange and correlation functionals for density functional theory.
- M.A.L. Marques, M.J.T. Oliveira, T. Burnus, Computer Physics Communications 183, 2227 (2012).
- Comment: to be cited when LibXC is used (negative value of ixc)
- Strong suggestion to cite this paper.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#marques2012
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
- [3] Optimized norm-conserving Vanderbilt pseudopotentials.
- D.R. Hamann, Phys. Rev. B 88, 085117 (2013).
- Comment: Some pseudopotential generated using the ONCVPSP code were used.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#hamann2013
-
- [4] ABINIT: Overview, and focus on selected capabilities
- J. Chem. Phys. 152, 124102 (2020).
- A. Romero, D.C. Allan, B. Amadon, G. Antonius, T. Applencourt, L.Baguet,
- J.Bieder, F.Bottin, J.Bouchet, E.Bousquet, F.Bruneval,
- G.Brunin, D.Caliste, M.Cote,
- J.Denier, C. Dreyer, Ph.Ghosez, M.Giantomassi, Y.Gillet, O.Gingras,
- D.R.Hamann, G.Hautier, F.Jollet, G. Jomard,
- A.Martin, 
- H.P.C. Miranda, F.Naccarato, G.Petretto, N.A. Pike, V.Planes,
- S.Prokhorenko, T. Rangel, F.Ricci, G.-M.Rignanese, M.Royo, M.Stengel, M.Torrent,
- M.J.van Setten, B.Van Troeye, M.J.Verstraete, J.Wiktor, J.W.Zwanziger, and X.Gonze.
- Comment: a global overview of ABINIT, with focus on selected capabilities .
- Note that a version of this paper, that is not formatted for J. Chem. Phys 
- is available at https://www.abinit.org/sites/default/files/ABINIT20_JPC.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#romero2020
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
- Proc.   0 individual time (sec): cpu=         56.8  wall=         57.4

================================================================================

 Calculation completed.
.Delivered   0 WARNINGs and   0 COMMENTs to log file.
+Overall time at end (sec) : cpu=        914.2  wall=        917.4
