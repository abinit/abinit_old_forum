
.Version 6.4.3  of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.4 computer) 

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

.Starting date : Mon  7 Mar 2011.
- ( at  9h26 )
  
- input  file    -> si_spgroup.in
- output file    -> si_spgroup.out
- root for input  files -> si_spgroupxi
- root for output files -> si_spgroupxo


 Symmetries : space group Fd -3 m (#227); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =         5  mffmem =         1
P  mgfft =        30   mkmem =         2 mpssoang=         3     mpw =      1152
  mqgrid =      3001   natom =         2    nfft =     27000    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       8.575 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.178 Mbytes ; DEN or POT disk file :      0.208 Mbytes.
================================================================================

 -outvars: echo values of preprocessed input variables --------
            acell    1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu    2.80855000E+01
           diemac    1.20000000E+01
             ecut    2.00000000E+01 Hartree
              kpt   -2.50000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01  0.00000000E+00  0.00000000E+00
          kptrlen    2.05224258E+01
         kptrlatt    2 -2  2  -2  2  2  -2 -2  2
P           mkmem         2
            natom         2
            nband         5
            ngfft        30      30      30
             nkpt         2
            nstep        10
             nsym        48
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  0.000000
           prtcif         1
            rprim    0.0000000000E+00  5.1306064508E+00  5.1306064508E+00
                     5.1306064508E+00  0.0000000000E+00  5.1306064508E+00
                     5.1306064508E+00  5.1306064508E+00  0.0000000000E+00
           shiftk    5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup       227
           symrel    1  0  0   0  1  0   0  0  1       0  1  0   0  0  1   1  0  0
                     0  1 -1   1  0 -1   0  0 -1       0 -1  1   0 -1  0   1 -1  0
                    -1  0  1   0 -1  1   0  0  1      -1  0  0   0 -1  0   0  0 -1
                     0  0  1   1  0  0   0  1  0      -1  0  1  -1  1  0  -1  0  0
                     1  0 -1   0  0 -1   0  1 -1       1 -1  0   1  0 -1   1  0  0
                     0 -1  0   0  0 -1  -1  0  0      -1  0  0  -1  0  1  -1  1  0
                     0 -1  0  -1  0  0   0  0 -1       0 -1  1  -1  0  1   0  0  1
                     0 -1  0   1 -1  0   0 -1  1       1  0 -1   1  0  0   1 -1  0
                     0  1 -1   0  1  0  -1  1  0       0 -1  1   0  0  1  -1  0  1
                     0  1  0   0  1 -1  -1  1  0       1  0 -1   0  1 -1   0  0 -1
                     1 -1  0   0 -1  1   0 -1  0      -1  1  0  -1  0  0  -1  0  1
                     0  1 -1  -1  1  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                     0  0 -1   0 -1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
                     0  0 -1   0  1 -1   1  0 -1      -1  1  0   0  1  0   0  1 -1
                    -1  0  1   0  0  1   0 -1  1       0  0  1  -1  0  1   0 -1  1
                    -1  1  0  -1  0  1  -1  0  0       1  0  0   1  0 -1   1 -1  0
                    -1  0  0   0  0 -1   0 -1  0       0  1  0   1  0  0   0  0  1
                     0  1  0  -1  1  0   0  1 -1       1  0  0   1 -1  0   1  0 -1
                    -1  0  1  -1  0  0  -1  1  0       0  1 -1   0  0 -1   1  0 -1
                     0 -1  0   0 -1  1   1 -1  0      -1  1  0   0  1 -1   0  1  0
                     1 -1  0   1  0  0   1  0 -1       0 -1  1   1 -1  0   0 -1  0
                     0  0  1   0  1  0   1  0  0       0  0  1   0 -1  1  -1  0  1
                     1 -1  0   0 -1  0   0 -1  1       0  0 -1   1  0 -1   0  1 -1
                     1  0  0   0  0  1   0  1  0      -1  0  0  -1  1  0  -1  0  1
            tnons    0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
           toldfe    1.00000000E-06 Hartree
            typat    1  1
              wtk      0.75000    0.25000
           xangst    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     1.3575000000E+00  1.3575000000E+00  1.3575000000E+00
            xcart    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.5653032254E+00  2.5653032254E+00  2.5653032254E+00
             xred    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl     14.00000

================================================================================

 chkinp: Checking input parameters for consistency.

================================================================================
== DATASET  1 ==================================================================

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.1306065  5.1306065  G(1)= -0.0974544  0.0974544  0.0974544
 R(2)=  5.1306065  0.0000000  5.1306065  G(2)=  0.0974544 -0.0974544  0.0974544
 R(3)=  5.1306065  5.1306065  0.0000000  G(3)=  0.0974544  0.0974544 -0.0974544
 Unit cell volume ucvol=  2.7010716E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30  30
         ecut(hartree)=     20.000   => boxcut(ratio)=   2.05608

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is /opt/abinit-6.4.3/share/abinit/Psps_for_tests/14si.pspnc
- pspatm: opening atomic psp file    /opt/abinit-6.4.3/share/abinit/Psps_for_tests/14si.pspnc
  Troullier-Martins psp for element  Si        Thu Oct 27 17:31:21 EDT 1994
  14.00000   4.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   5.907  14.692    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   2.617   4.181    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1.80626423934776    0.22824404341771    1.17378968127746   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.43386982
         --- l  ekb(1:nproj) -->
             0    3.287949
             1    1.849886
 pspatm: atomic psp has been read  and splines computed

   2.29419171E+01                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating      5 bands with npw=    1150 for ikpt=   1 by node    0
P newkpt: treating      5 bands with npw=    1152 for ikpt=   2 by node    0

 setup2: Arith. and geom. avg. npw (full set) are    1150.500    1150.500

================================================================================

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
 ETOT  1  -8.8642746496104    -8.864E+00 1.427E-03 2.090E+01 0.000E+00 0.000E+00
 ETOT  2  -8.8704176923297    -6.143E-03 3.202E-07 5.411E-01 0.000E+00 0.000E+00
 ETOT  3  -8.8704910825276    -7.339E-05 7.432E-07 1.294E-02 0.000E+00 0.000E+00
 ETOT  4  -8.8704922848034    -1.202E-06 2.029E-08 6.154E-05 0.000E+00 0.000E+00
 ETOT  5  -8.8704922922617    -7.458E-09 4.341E-10 3.013E-08 0.000E+00 0.000E+00
 ETOT  6  -8.8704922922655    -3.752E-12 3.662E-13 1.260E-10 0.000E+00 0.000E+00

 At SCF step    6, etot is converged : 
  for the second time, diff in etot=  3.752E-12 < toldfe=  1.000E-06

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.41750172E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.41750172E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.41750172E-05  sigma(2 1)=  0.00000000E+00

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   4.3351E-14; max=  3.6625E-13
  -0.2500  0.5000  0.0000    1  2.85461E-14 kpt; spin; max resid(k); each band:
  4.64E-15 5.29E-15 5.91E-15 1.62E-15 2.85E-14
  -0.2500  0.0000  0.0000    1  3.66245E-13 kpt; spin; max resid(k); each band:
  1.23E-14 6.65E-15 1.14E-15 1.14E-15 3.66E-13
 reduced coordinates (array xred) for    2 atoms
       0.000000000000      0.000000000000      0.000000000000
       0.250000000000      0.250000000000      0.250000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
    2       0.000000000000      0.000000000000      0.000000000000

 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      1.35750000000000     1.35750000000000     1.35750000000000

 cartesian forces (hartree/bohr) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 h/b

 cartesian forces (eV/Angstrom) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales=  1.000000000000  1.000000000000  1.000000000000 bohr
              =  0.529177208590  0.529177208590  0.529177208590 angstroms
 prteigrs : about to open file si_spgroupxo_EIG
 Fermi (or HOMO) energy (hartree) =   0.18511   Average Vxc (hartree)=  -0.35220
 Eigenvalues (hartree) for nkpt=   2  k points:
 kpt#   1, nband=  5, wtk=  0.75000, kpt= -0.2500  0.5000  0.0000 (reduced coord)
  -0.12733  -0.02245   0.08172   0.13166   0.26443
 kpt#   2, nband=  5, wtk=  0.25000, kpt= -0.2500  0.0000  0.0000 (reduced coord)
  -0.19818   0.06755   0.18511   0.18511   0.28174
 Total charge density [el/Bohr^3]
,     Maximum=    8.5940E-02  at reduced coord.    0.1000    0.1000    0.7000
,Next maximum=    8.5940E-02  at reduced coord.    0.1000    0.7000    0.1000
,     Minimum=    3.1532E-03  at reduced coord.    0.5000    0.5000    0.5000
,Next minimum=    3.1994E-03  at reduced coord.    0.7667    0.7333    0.7333

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  3.02978359638260E+00
    Hartree energy  =  5.54649963625712E-01
    XC energy       = -3.53577349600040E+00
    Ewald energy    = -8.39947182979608E+00
    PspCore energy  =  8.49363517011973E-02
    Loc. psp. energy= -2.47771225824467E+00
    NL   psp  energy=  1.87309538006616E+00
    >>>>>>>>> Etotal= -8.87049229226548E+00

 Other information on the energy :
    Total energy(eV)= -2.41378370792007E+02 ; Band energy (Ha)=   2.1521317634E-01
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.41750172E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.41750172E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.41750172E-05  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -1.2997E+00 GPa]
- sigma(1 1)=  1.29967366E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.29967366E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  1.29967366E+00  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell    1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu    2.80855000E+01
           diemac    1.20000000E+01
             ecut    2.00000000E+01 Hartree
           etotal   -8.8704922923E+00
            fcart   -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
                    -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
              kpt   -2.50000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01  0.00000000E+00  0.00000000E+00
          kptrlen    2.05224258E+01
         kptrlatt    2 -2  2  -2  2  2  -2 -2  2
P           mkmem         2
            natom         2
            nband         5
            ngfft        30      30      30
             nkpt         2
            nstep        10
             nsym        48
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  0.000000
           prtcif         1
            rprim    0.0000000000E+00  5.1306064508E+00  5.1306064508E+00
                     5.1306064508E+00  0.0000000000E+00  5.1306064508E+00
                     5.1306064508E+00  5.1306064508E+00  0.0000000000E+00
           shiftk    5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup       227
           strten    4.4175017172E-05  4.4175017172E-05  4.4175017172E-05
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel    1  0  0   0  1  0   0  0  1       0  1  0   0  0  1   1  0  0
                     0  1 -1   1  0 -1   0  0 -1       0 -1  1   0 -1  0   1 -1  0
                    -1  0  1   0 -1  1   0  0  1      -1  0  0   0 -1  0   0  0 -1
                     0  0  1   1  0  0   0  1  0      -1  0  1  -1  1  0  -1  0  0
                     1  0 -1   0  0 -1   0  1 -1       1 -1  0   1  0 -1   1  0  0
                     0 -1  0   0  0 -1  -1  0  0      -1  0  0  -1  0  1  -1  1  0
                     0 -1  0  -1  0  0   0  0 -1       0 -1  1  -1  0  1   0  0  1
                     0 -1  0   1 -1  0   0 -1  1       1  0 -1   1  0  0   1 -1  0
                     0  1 -1   0  1  0  -1  1  0       0 -1  1   0  0  1  -1  0  1
                     0  1  0   0  1 -1  -1  1  0       1  0 -1   0  1 -1   0  0 -1
                     1 -1  0   0 -1  1   0 -1  0      -1  1  0  -1  0  0  -1  0  1
                     0  1 -1  -1  1  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                     0  0 -1   0 -1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
                     0  0 -1   0  1 -1   1  0 -1      -1  1  0   0  1  0   0  1 -1
                    -1  0  1   0  0  1   0 -1  1       0  0  1  -1  0  1   0 -1  1
                    -1  1  0  -1  0  1  -1  0  0       1  0  0   1  0 -1   1 -1  0
                    -1  0  0   0  0 -1   0 -1  0       0  1  0   1  0  0   0  0  1
                     0  1  0  -1  1  0   0  1 -1       1  0  0   1 -1  0   1  0 -1
                    -1  0  1  -1  0  0  -1  1  0       0  1 -1   0  0 -1   1  0 -1
                     0 -1  0   0 -1  1   1 -1  0      -1  1  0   0  1 -1   0  1  0
                     1 -1  0   1  0  0   1  0 -1       0 -1  1   1 -1  0   0 -1  0
                     0  0  1   0  1  0   1  0  0       0  0  1   0 -1  1  -1  0  1
                     1 -1  0   0 -1  0   0 -1  1       0  0 -1   1  0 -1   0  1 -1
                     1  0  0   0  0  1   0  1  0      -1  0  0  -1  1  0  -1  0  1
            tnons    0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
           toldfe    1.00000000E-06 Hartree
            typat    1  1
              wtk      0.75000    0.25000
           xangst    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     1.3575000000E+00  1.3575000000E+00  1.3575000000E+00
            xcart    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.5653032254E+00  2.5653032254E+00  2.5653032254E+00
             xred    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl     14.00000

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

 [1] ABINIT : First-principles approach of materials and nanosystem properties.
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

 [2] A brief introduction to the ABINIT software package.
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

 [3] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.

 [4] Fast radix 2, 3, 4 and 5 kernels for Fast Fourier Transformations
 on computers with overlapping multiply-add instructions.
 S. Goedecker, SIAM J. on Scientific Computing 18, 1605 (1997).
-
- Proc.   0 individual time (sec): cpu=          1.3  wall=          1.3

================================================================================

 Calculation completed.
.Delivered    0 WARNINGs and   0 COMMENTs to log file.
+Overall time at end (sec) : cpu=          1.3  wall=          1.3
