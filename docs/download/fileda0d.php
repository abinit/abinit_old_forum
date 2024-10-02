
.Version 7.6.4 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu0.0 computer) 

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

.Starting date : Mon  1 Sep 2014.
- ( at 17h07 )
  
- input  file    -> pto.in
- output file    -> pto.out
- root for input  files -> ipto
- root for output files -> opto


 Symmetries : space group P4/m m m (#123); Bravais tP (primitive tetrag.)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         3    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        22  mffmem =         1
P  mgfft =        40   mkmem =         6 mpssoang=         4     mpw =      3104
  mqgrid =      3001   natom =         5    nfft =     64000    nkpt =         6
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        16  n1xccc =         0  ntypat =         3  occopt =         1
================================================================================
P This job should need less than                      27.056 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      6.254 Mbytes ; DEN or POT disk file :      0.490 Mbytes.
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
            acell      7.6490629034E+00  7.6490629034E+00  7.6484728493E+00 Bohr
              amu      2.07200000E+02  4.78800000E+01  1.59994000E+01
         berryopt           6
          dilatmx      1.05000000E+00
             ecut      2.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           ionmov           3
              ixc          24
              kpt      1.25000000E-01  1.25000000E-01  1.25000000E-01
                       3.75000000E-01  1.25000000E-01  1.25000000E-01
                       3.75000000E-01  3.75000000E-01  1.25000000E-01
                       1.25000000E-01  1.25000000E-01  3.75000000E-01
                       3.75000000E-01  1.25000000E-01  3.75000000E-01
                       3.75000000E-01  3.75000000E-01  3.75000000E-01
         kptrlatt        4    0    0      0    4    0      0    0    4
          kptrlen      3.05938914E+01
P           mkmem           6
            natom           5
            nband          22
            ngfft          40      40      40
             nkpt           6
            nstep         625
             nsym          16
            ntime         125
           ntypat           3
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000
          optcell           2
        optforces           1
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         123
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0 -1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0 -1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0 -1       0 -1  0   1  0  0   0  0  1
           toldfe      1.00000000E-06 Hartree
            typat      1  2  3  3  3
              wtk        0.12500    0.25000    0.12500    0.12500    0.25000    0.12500
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.0238548778E+00  2.0238548778E+00  2.0236987562E+00
                       2.0238548778E+00  0.0000000000E+00  2.0236987562E+00
                       0.0000000000E+00  2.0238548778E+00  2.0236987562E+00
                       2.0238548778E+00  2.0238548778E+00  0.0000000000E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.8245314517E+00  3.8245314517E+00  3.8242364247E+00
                       3.8245314517E+00  0.0000000000E+00  3.8242364247E+00
                       0.0000000000E+00  3.8245314517E+00  3.8242364247E+00
                       3.8245314517E+00  3.8245314517E+00  0.0000000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
            znucl       82.00000   22.00000    8.00000

================================================================================

 chkinp: Checking input parameters for consistency.

 chkinp : WARNING -
  Constant unreduced D calculation with relaxation of cell parameters is allowed.
  But we strongly recommend users to use reduced d calculation (berryopt=16)
  with the relaxation of cell parameters, for internal consistency purpose.
  For more information, please refer to "M. Stengel, N.A. Spaldin and D.Vanderbilt,
  Nat. Phys., 5, 304,(2009)" and its supplementary notes.


================================================================================
== DATASET  1 ==================================================================
-   nproc =    1

 Exchange-correlation functional for the present dataset will be:
  GGA: C09x exchange functional - ixc=24
 Citation for XC functional:
  Valentino R. Cooper, PRB 81, 161104(R) (2010)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  7.6490629  0.0000000  0.0000000  G(1)=  0.1307350  0.0000000  0.0000000
 R(2)=  0.0000000  7.6490629  0.0000000  G(2)=  0.0000000  0.1307350  0.0000000
 R(3)=  0.0000000  0.0000000  7.6484728  G(3)=  0.0000000  0.0000000  0.1307451
 Unit cell volume ucvol=  4.4749810E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  40  40  40
         ecut(hartree)=     27.563   => boxcut(ratio)=   2.21272

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   33.737529 Hartrees makes boxcut=2


--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is pb.fhi
- pspatm: opening atomic psp file    pb.fhi
- OPIUM generated Pb potential
- 82.00000  14.00000    140826                znucl, zion, pspdat
    6   24    2    0      1189   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.013085          amesh (Hamman grid)
 pspatm: epsatm=   87.99615732
         --- l  ekb(1:nproj) -->
             1    7.084904
             2   -7.607718
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is ti.fhi
- pspatm: opening atomic psp file    ti.fhi
- OPIUM generated Ti potential
- 22.00000  12.00000    140826                znucl, zion, pspdat
    6   24    3    3      1156   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.013085          amesh (Hamman grid)
 pspatm: epsatm=   51.40759887
         --- l  ekb(1:nproj) -->
             0   -5.228138
             1   -6.904054
             2   -8.628309
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is o.fhi
- pspatm: opening atomic psp file    o.fhi
- OPIUM generated O potential
-  8.00000   6.00000    140826                znucl, zion, pspdat
    6   24    1    0      1130   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.013085          amesh (Hamman grid)
 pspatm: epsatm=    7.82871238
         --- l  ekb(1:nproj) -->
             1   -3.639130
 pspatm: atomic psp has been read  and splines computed

   7.16715531E+03                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating     22 bands with npw=    3077 for ikpt=   1 by node    0
P newkpt: treating     22 bands with npw=    3090 for ikpt=   2 by node    0
P newkpt: treating     22 bands with npw=    3104 for ikpt=   3 by node    0
P newkpt: treating     22 bands with npw=    3090 for ikpt=   4 by node    0
P newkpt: treating     22 bands with npw=    3104 for ikpt=   5 by node    0
P newkpt: treating     22 bands with npw=    3103 for ikpt=   6 by node    0

_setup2: Arith. and geom. avg. npw (full set) are    3095.250    3095.236
  initberry: for direction 1, nkstr =   4, nstr =     16
  initberry: for direction 2, nkstr =   4, nstr =     16
  initberry: for direction 3, nkstr =   4, nstr =     16

 initberry: COMMENT - 
  The estimation of critical electric field should be checked after calculation.
  It is printed out just after total energy.


================================================================================

=== [ionmov= 3] Broyden-Fletcher-Goldfard-Shanno method (forces,Tot energy) 
================================================================================

--- Iteration: (  1/125) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
