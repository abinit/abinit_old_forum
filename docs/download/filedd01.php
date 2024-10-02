
.Version 8.10.2 of ABINIT 
.(sequential version, prepared for a x86_64_linux_gnu8.2 computer) 

.Copyright (C) 1998-2018 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Mon 25 Feb 2019.
- ( at 21h42 )
  
- input  file    -> tpaw1_1.in
- output file    -> tpaw1_1.out
- root for input  files -> tpaw1_1i
- root for output files -> tpaw1_1o

- inpspheads : Reading pseudopotential header in XML form from ./PSPs/C.LDA_PW-JTH.xml

 Symmetries : space group Fd -3 m (#227); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need of the present run
     intxc =       0    ionmov =       2      iscf =      17    lmnmax =       8
     lnmax =       4     mgfft =      18  mpssoang =       2    mqgrid =    3001
     natom =       2  nloc_mem =       2    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      48    n1xccc =       1    ntypat =       1
    occopt =       1   xclevel =       1
-    mband =           6        mffmem =           1         mkmem =           2
       mpw =         247          nfft =        5832          nkpt =           2
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        24    nfftf =     13824
================================================================================
P This job should need less than                       4.240 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.047 Mbytes ; DEN or POT disk file :      0.107 Mbytes.
================================================================================

--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =312 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      6.7406531160E+00  6.7406531160E+00  6.7406531160E+00 Bohr
              amu      1.20110000E+01
          dilatmx      1.05000000E+00
             ecut      1.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
-          fftalg         312
           ionmov           2
              ixc       -1012
              kpt     -2.50000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  0.00000000E+00  0.00000000E+00
         kptrlatt        2   -2    2     -2    2    2     -2   -2    2
          kptrlen      1.34813062E+01
P           mkmem           2
            natom           2
            nband           6
            ngfft          18      18      18
          ngfftdg          24      24      24
             nkpt           2
            nstep          20
             nsym          48
            ntime          50
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
          optcell           1
        pawecutdg      2.00000000E+01 Hartree
           prtcif           1
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         227
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
            tnons      0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
           tolmxf      5.00000000E-06
           tolvrs      1.00000000E-10
            typat      1  1
           useylm           1
              wtk        0.75000    0.25000
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       8.9175000000E-01  8.9175000000E-01  8.9175000000E-01
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.6851632790E+00  1.6851632790E+00  1.6851632790E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl        6.00000

================================================================================

 chkinp: Checking input parameters for consistency.

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  3.3703266  3.3703266  G(1)= -0.1483536  0.1483536  0.1483536
 R(2)=  3.3703266  0.0000000  3.3703266  G(2)=  0.1483536 -0.1483536  0.1483536
 R(3)=  3.3703266  3.3703266  0.0000000  G(3)=  0.1483536  0.1483536 -0.1483536
 Unit cell volume ucvol=  7.6567760E+01 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 Coarse grid specifications (used for wave-functions):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  18  18  18
         ecut(hartree)=     16.538   => boxcut(ratio)=   2.06929

 Fine grid specifications (used for densities):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24  24
         ecut(hartree)=     22.050   => boxcut(ratio)=   2.38207

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   31.279390 Hartrees makes boxcut=2


--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is ./PSPs/C.LDA_PW-JTH.xml
- pspatm: opening atomic psp file    ./PSPs/C.LDA_PW-JTH.xml
- pspatm : Reading pseudopotential header in XML form from ./PSPs/C.LDA_PW-JTH.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.50736703
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=2001 , AA= 0.94549E-03 BB= 0.56729E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions =  1.30052589
 mmax= 2001
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to 1756 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 pspatm: atomic psp has been read  and splines computed

   7.04281371E+01                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

_setup2: Arith. and geom. avg. npw (full set) are     243.250     243.240

================================================================================

=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================

--- Iteration: ( 1/50) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     nres2
 ETOT  1  -11.522004473167    -1.152E+01 1.227E-01 5.126E+00
 ETOT  2  -11.527436338107    -5.432E-03 4.834E-04 8.689E-01
 ETOT  3  -11.523316117126     4.120E-03 3.229E-04 3.275E-02
 ETOT  4  -11.523275902215     4.021E-05 1.157E-03 3.822E-03
 ETOT  5  -11.523280249720    -4.348E-06 3.465E-04 2.065E-04
 ETOT  6  -11.523280190292     5.943E-08 9.232E-04 6.910E-07
 ETOT  7  -11.523280190462    -1.696E-10 1.097E-04 1.778E-08
 ETOT  8  -11.523280190459     3.212E-12 2.281E-04 8.231E-10
 ETOT  9  -11.523280190452     7.216E-12 2.125E-05 1.336E-11

 At SCF step    9       nres2   =  1.34E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.85443645E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.85443645E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.85443645E-04  sigma(2 1)=  0.00000000E+00

