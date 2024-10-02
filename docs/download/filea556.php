
.Version 6.4.3  of ABINIT 
.(MPI version, prepared for a i686_cygwin_gnu4.3 computer) 

.Copyright (C) 1998-2010 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Wed  7 Nov 2012.
- ( at 21h19 )
  
- input  file    -> t31.in
- output file    -> t3x.out
- root for input  files -> t3xi
- root for output files -> t3xo


 Symmetries : space group P6_3 m c (#186); Bravais hP (primitive hexag.)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        19  mffmem =         1
P  mgfft =       160   mkmem =        21 mpssoang=         4     mpw =     85422
  mqgrid =      3001   natom =         4    nfft =   1600000    nkpt =        21
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =         0  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                    1030.194 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :    520.073 Mbytes ; DEN or POT disk file :     12.209 Mbytes.
================================================================================

 -outvars: echo values of preprocessed input variables --------
            acell    6.5200000000E+00  6.5200000000E+00  9.8260000000E+00 Bohr
              amu    1.59994000E+01  6.53900000E+01
           diemac    1.20000000E+01
             ecut    2.90000000E+02 Hartree
              ixc        11
              kpt    0.00000000E+00  0.00000000E+00  8.33333333E-02
                     1.66666667E-01  0.00000000E+00  8.33333333E-02
                     3.33333333E-01  0.00000000E+00  8.33333333E-02
                     5.00000000E-01  0.00000000E+00  8.33333333E-02
                     1.66666667E-01  1.66666667E-01  8.33333333E-02
                     3.33333333E-01  1.66666667E-01  8.33333333E-02
                     3.33333333E-01  3.33333333E-01  8.33333333E-02
                     0.00000000E+00  0.00000000E+00  2.50000000E-01
                     1.66666667E-01  0.00000000E+00  2.50000000E-01
                     3.33333333E-01  0.00000000E+00  2.50000000E-01
                     5.00000000E-01  0.00000000E+00  2.50000000E-01
                     1.66666667E-01  1.66666667E-01  2.50000000E-01
                     3.33333333E-01  1.66666667E-01  2.50000000E-01
                     3.33333333E-01  3.33333333E-01  2.50000000E-01
                     0.00000000E+00  0.00000000E+00  4.16666667E-01
                     1.66666667E-01  0.00000000E+00  4.16666667E-01
                     3.33333333E-01  0.00000000E+00  4.16666667E-01
                     5.00000000E-01  0.00000000E+00  4.16666667E-01
                     1.66666667E-01  1.66666667E-01  4.16666667E-01
                     3.33333333E-01  1.66666667E-01  4.16666667E-01
                     3.33333333E-01  3.33333333E-01  4.16666667E-01
          kptrlen    3.91200000E+01
         kptrlatt    6  0  0   0  6  0   0  0  6
P           mkmem        21
            natom         4
            nband        19
            ngfft       100     100     160
             nkpt        21
            nstep        10
             nsym        12
           ntypat         2
              occ    2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     0.000000
            rprim    1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                    -5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
           shiftk    0.00000000E+00  0.00000000E+00  5.00000000E-01
          spgroup       186
           symrel    1  0  0   0  1  0   0  0  1       1  1  0  -1  0  0   0  0  1
                     0  1  0   1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                    -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                    -1  0  0   0 -1  0   0  0  1      -1 -1  0   0  1  0   0  0  1
                     1  0  0  -1 -1  0   0  0  1       0 -1  0   1  1  0   0  0  1
                    -1 -1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
            tnons    0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.5000000
                     0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.5000000
                     0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.5000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
           toldfe    1.00000000E-06 Hartree
            typat    1  1  2  2
              wtk      0.00926    0.05556    0.05556    0.02778    0.05556    0.11111
                       0.01852    0.00926    0.05556    0.05556    0.02778    0.05556
                       0.11111    0.01852    0.00926    0.05556    0.05556    0.02778
                       0.05556    0.11111    0.01852
           xangst    1.7252902118E+00  9.9589756876E-01  2.5998476258E+00
                    -1.7251177000E-04  1.9920939367E+00  0.0000000000E+00
                     1.7252902118E+00  9.9589756876E-01  4.5497333452E+00
                    -1.7251177000E-04  1.9920939367E+00  1.9498857194E+00
            xcart    3.2603260000E+00  1.8819736614E+00  4.9130000000E+00
                    -3.2600000000E-04  3.7645119713E+00  0.0000000000E+00
                     3.2603260000E+00  1.8819736614E+00  8.5977500000E+00
                    -3.2600000000E-04  3.7645119713E+00  3.6847500000E+00
             xred    6.6670000000E-01  3.3330000000E-01  5.0000000000E-01
                     3.3330000000E-01  6.6670000000E-01  0.0000000000E+00
                     6.6670000000E-01  3.3330000000E-01  8.7500000000E-01
                     3.3330000000E-01  6.6670000000E-01  3.7500000000E-01
            znucl      8.00000   30.00000

================================================================================

 chkinp: Checking input parameters for consistency.

================================================================================
== DATASET  1 ==================================================================

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  6.5200000  0.0000000  0.0000000  G(1)=  0.1533742  0.0885507  0.0000000
 R(2)= -3.2600000  5.6464856  0.0000000  G(2)=  0.0000000  0.1771013  0.0000000
 R(3)=  0.0000000  0.0000000  9.8260000  G(3)=  0.0000000  0.0000000  0.1017708
 Unit cell volume ucvol=  3.6174504E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 100 100 160
         ecut(hartree)=    290.000   => boxcut(ratio)=   2.00073

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is ../../../Psps_for_tests/08-O.GGA.fhi
- pspatm: opening atomic psp file    ../../../Psps_for_tests/08-O.GGA.fhi
 oxygen, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
   8.00000   6.00000     21003                znucl, zion, pspdat
    6   11    3    2       473   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    3.69310156
         --- l  ekb(1:nproj) -->
             0    2.919212
             1   -2.890047
             3   -3.320245
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is ../../../Psps_for_tests/30-Zn.GGA.fhi
- pspatm: opening atomic psp file    ../../../Psps_for_tests/30-Zn.GGA.fhi
 zinc, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 0 local
  30.00000  12.00000     11001                znucl, zion, pspdat
    6   11    3    0       527   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   53.99353552
         --- l  ekb(1:nproj) -->
             1    2.110422
             2  -11.206824
             3   -1.161357
 pspatm: atomic psp has been read  and splines computed

   4.15343787E+03                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating     19 bands with npw=   85203 for ikpt=   1 by node    0
P newkpt: treating     19 bands with npw=   85301 for ikpt=   2 by node    0
P newkpt: treating     19 bands with npw=   85297 for ikpt=   3 by node    0
P newkpt: treating     19 bands with npw=   85384 for ikpt=   4 by node    0
P newkpt: treating     19 bands with npw=   85311 for ikpt=   5 by node    0
P newkpt: treating     19 bands with npw=   85355 for ikpt=   6 by node    0
P newkpt: treating     19 bands with npw=   85386 for ikpt=   7 by node    0
P newkpt: treating     19 bands with npw=   85197 for ikpt=   8 by node    0
P newkpt: treating     19 bands with npw=   85297 for ikpt=   9 by node    0
P newkpt: treating     19 bands with npw=   85312 for ikpt=  10 by node    0
P newkpt: treating     19 bands with npw=   85346 for ikpt=  11 by node    0
P newkpt: treating     19 bands with npw=   85330 for ikpt=  12 by node    0
P newkpt: treating     19 bands with npw=   85349 for ikpt=  13 by node    0
P newkpt: treating     19 bands with npw=   85422 for ikpt=  14 by node    0
P newkpt: treating     19 bands with npw=   85210 for ikpt=  15 by node    0
P newkpt: treating     19 bands with npw=   85265 for ikpt=  16 by node    0
P newkpt: treating     19 bands with npw=   85352 for ikpt=  17 by node    0
P newkpt: treating     19 bands with npw=   85328 for ikpt=  18 by node    0
P newkpt: treating     19 bands with npw=   85311 for ikpt=  19 by node    0
P newkpt: treating     19 bands with npw=   85335 for ikpt=  20 by node    0
P newkpt: treating     19 bands with npw=   85341 for ikpt=  21 by node    0

 setup2: Arith. and geom. avg. npw (full set) are   85325.981   85325.974
