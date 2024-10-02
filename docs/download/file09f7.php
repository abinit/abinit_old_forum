
.Version 6.9.0  of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.4 computer) 

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

.Starting date : Tue  7 Jun 2011.
- ( at 22h35 )
  
- input  file    -> t75.in
- output file    -> t75.outL
- root for input  files -> t75i
- root for output files -> t75o


 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =        12    iscf =         7 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =        20  mffmem =         1
P  mgfft =        24   mkmem =         1 mpssoang=         1     mpw =        44
  mqgrid =      3001   natom =         4    nfft =     13824    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       4.574 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.015 Mbytes ; DEN or POT disk file :      0.107 Mbytes.
================================================================================

--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =401 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =    4
-
 -outvars: echo values of preprocessed input variables --------
        accesswff           1
            acell      7.1287592924E+00  7.1287592924E+00  7.1287592924E+00 Bohr
              amu      4.00260200E+00
        boxcutmin      1.00000000E+00
            dtion      5.00000000E+01
             ecut      5.00000000E+00 Hartree
           enunit           2
      fft_opt_lob           2
           ionmov          12
           iprcch           0
           istwfk        1
           kptopt           0
          mdftemp      1.00000000E+06
          mditemp      1.00000000E+06
P           mkmem           1
            natom           4
            nband          20
            ngfft          24      24      24
             nkpt           1
            nline           5
           npband           4
            nstep          20
             nsym           1
            ntime           2
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
           occopt           3
        paral_kgb           1
           prtvol           3
            prtwf           0
         recnpath        1000
          recnrec          50
        recptrott          15
        rectolden      1.00000000E-02
          spgroup           1
        tfkinfunc           2
           timopt          -1
           toldfe      1.00000000E-20 Hartree
           tsmear      3.16682970E+00 Hartree
            typat      1  1  1  1
           useylm           1
         wfoptalg           4
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.8861884715E+00  1.8861884715E+00  0.0000000000E+00
                       1.8861884715E+00  0.0000000000E+00  1.8861884715E+00
                       0.0000000000E+00  1.8861884715E+00  1.8861884715E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.5643796462E+00  3.5643796462E+00  0.0000000000E+00
                       3.5643796462E+00  0.0000000000E+00  3.5643796462E+00
                       0.0000000000E+00  3.5643796462E+00  3.5643796462E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
            znucl        2.00000

================================================================================

 chkinp: Checking input parameters for consistency.

=== RECURSION METHOD ===========================================================
fine grid =   24 24 24

================================================================================
== DATASET  1 ==================================================================

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  7.1287593  0.0000000  0.0000000  G(1)=  0.1402769  0.0000000  0.0000000
 R(2)=  0.0000000  7.1287593  0.0000000  G(2)=  0.0000000  0.1402769  0.0000000
 R(3)=  0.0000000  0.0000000  7.1287593  G(3)=  0.0000000  0.0000000  0.1402769
 Unit cell volume ucvol=  3.6227791E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24  24
         ecut(hartree)=      5.000   => boxcut(ratio)=   3.34462

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   13.983128 Hartrees makes boxcut=2


--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is /home/marco/6.7.2-private/build_cuda4/../tests/Psps_for_tests/2he.psphgh
- pspatm: opening atomic psp file    /home/marco/6.7.2-private/build_cuda4/../tests/Psps_for_tests/2he.psphgh
 Hartwigsen-Goedecker-Hutter psp for Hydrogen,  from PRB58, 3641 (1998) paper
-  2.00000   2.00000    991006                znucl, zion, pspdat
    3    1    0    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2000000
 cc1 =  -9.1120230; cc2 =   1.6983680; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.0000000; h11s=   0.0000000; h22s=   0.0000000; h33s=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   -0.00346443
         --- l  ekb(1:nproj) -->
 pspatm: atomic psp has been read  and splines computed

  -1.10861917E-01                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

 setup2: Arith. and geom. avg. npw (full set) are       0.000       0.000

================================================================================

=== [ionmov=12] Isokinetic ensemble molecular dynamics                      
================================================================================

--- Iteration: (1/2) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -8.0517970506995    -8.052E+00 0.000E+00 1.633E+02
 ETOT  2  -8.3177152292186    -2.659E-01 0.000E+00 7.204E+00
 ETOT  3  -8.3767635006260    -5.905E-02 0.000E+00 5.536E-02
 ETOT  4  -185.75404370062    -1.774E+02 0.000E+00 1.238E-04

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  4.01899819321270E+01
    Hartree energy  =  1.99721735400661E-02
    XC energy       = -2.02471045987411E+00
    Ewald energy    = -5.14520060060964E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.22843670537540E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E=  3.18113003263472E+01

    -kT*entropy     = -2.17565344026968E+02
    >>>>>>>>> Etotal= -1.85754043700621E+02

 Other information on the energy :
    Total energy(eV)= -5.05462458668482E+03 ; Band energy (Ha)=   3.6364513510E+01
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -6.63911507E-02  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -6.63911507E-02  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -6.63911507E-02  sigma(2 1)=  0.00000000E+00


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.774E+02 exceeds toldfe=  1.000E-20


---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   3.56437964620509E+00  3.56437964620509E+00  0.00000000000000E+00
   3.56437964620509E+00  0.00000000000000E+00  3.56437964620509E+00
   0.00000000000000E+00  3.56437964620509E+00  3.56437964620509E+00
 Reduced coordinates (xred)
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   5.00000000000000E-01  5.00000000000000E-01  0.00000000000000E+00
   5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
   0.00000000000000E+00  5.00000000000000E-01  5.00000000000000E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.94114E-14 1.27057E-14 (free atoms)
  -1.48716058737556E-14 -8.55329319414283E-15 -1.35514101447636E-14
   8.50062539296539E-15 -1.27424983473224E-14  9.76464405963350E-15
   1.43157888000284E-14  1.32489948635920E-14 -1.56246135513187E-14
  -7.94480831923824E-15  8.04679667787329E-15  1.94113796364488E-14
 Reduced forces (fred)
   8.81289585111969E-14  8.93445876727735E-14  1.18749067609744E-13
  -7.84860523157999E-14  1.19208422836315E-13 -4.74654704621913E-14
  -1.19940952490784E-13 -6.60786759146072E-14  1.33528435659280E-13
   3.87494860777875E-14 -2.89934572572056E-14 -1.16234726346837E-13
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Kinetic energy of ions (ekin) [Ha]=  0.00000000000000E+00
 Total energy (etotal) [Ha]= -1.85754043700621E+02

--- Iteration: (2/2) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -7.5529344456244    -7.553E+00 0.000E+00 3.431E+01
 ETOT  2  -7.5378578638676     1.508E-02 0.000E+00 7.386E+00
 ETOT  3  -184.56676224715    -1.770E+02 0.000E+00 2.477E-01

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  4.01940504698705E+01
    Hartree energy  =  5.95732659205743E-02
    XC energy       = -2.03573902429127E+00
    Ewald energy    = -3.68424126905121E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.84868727354218E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E=  3.26846501554456E+01

    -kT*entropy     = -2.17251412402594E+02
    >>>>>>>>> Etotal= -1.84566762247148E+02

 Other information on the energy :
    Total energy(eV)= -5.02231701530450E+03 ; Band energy (Ha)=   3.5808083096E+01
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -6.30017917E-02  sigma(3 2)= -4.20120276E-04
  sigma(2 2)= -7.02092082E-02  sigma(3 1)= -1.42865939E-04
  sigma(3 3)= -6.83775126E-02  sigma(2 1)=  6.27713331E-05


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.770E+02 exceeds toldfe=  1.000E-20


---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  -8.75255673588427E-01 -1.35256271699809E+00 -1.79974125815832E-01
   3.98345282663147E+00  3.08339347397487E+00  1.13329544145992E+00
   5.41030540617536E+00  1.43393826610090E-01  3.21276328454710E+00
  -1.38974326680821E+00  5.25453470882332E+00  2.96267469221900E+00
 Reduced coordinates (xred)
  -1.22778121365423E-01 -1.89733256730682E-01 -2.52462060273863E-02
   5.58786271668978E-01  4.32528767980381E-01  1.58975130871161E-01
   7.58940677368021E-01  2.01148363590783E-02  4.50676359344557E-01
  -1.94948827671575E-01  7.37089652391223E-01  4.15594715811669E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 7.23382E-01 3.17329E-01 (free atoms)
   1.85839087153156E-01  4.15469593922222E-02 -2.14266001710203E-01
  -2.64038207627412E-01 -1.40739751947734E-01 -1.31265767468005E-01
  -1.07004593646608E-01  7.23381974706688E-01  1.96291681677610E-01
   1.85203714120864E-01 -6.24189182151176E-01  1.49240087500598E-01
 Reduced forces (fred)
  -1.32413343055284E+00 -2.96259003831164E-01  1.52730592187803E+00
   1.88293351505849E+00  1.00321908351644E+00  9.35617230751733E-01
   7.63478680172078E-01 -5.15689670514480E+00 -1.39946097864324E+00
  -1.31960400914474E+00  4.44961370148963E+00 -1.06404148943115E+00
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 3.69185E-02 2.08334E-02 (free atoms)
  -1.75051134717685E-02 -2.70512543399619E-02 -3.59948251631659E-03
   8.38146360852743E-03 -9.61972344460439E-03  2.26659088291983E-02
   3.69185151994053E-02  2.86787653220175E-03 -7.03232723315978E-03
  -2.77948653361642E-02  3.38031012523645E-02 -1.20340990797219E-02
 Kinetic energy of ions (ekin) [Ha]=  1.90008925183712E+01
 Total energy (etotal) [Ha]= -1.84566762247148E+02

 Difference of energy with previous step (new-old):
            Absolute (Ha)= 1.18728E+00
            Relative     = 6.41218E-03
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   0.0000E+00; max=  0.0000E+00
   0.0000  0.0000  0.0000    1  0.00000E+00 kpt; spin; max resid(k); each band:
  0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00
  0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00 0.00E+00
  0.00E+00 0.00E+00 0.00E+00 0.00E+00
 reduced coordinates (array xred) for    4 atoms
      -0.122778121365     -0.189733256731     -0.025246206027
       0.558786271669      0.432528767980      0.158975130871
       0.758940677368      0.020114836359      0.450676359345
      -0.194948827672      0.737089652391      0.415594715812
 rms dE/dt=  2.2622E+00; max dE/dt=  4.4496E+00; dE/dt below (all hartree)
    1      -1.324133430553     -0.296259003831      1.527305921878
    2       1.882933515058      1.003219083516      0.935617230752
    3       0.763478680172     -5.156896705145     -1.399460978643
    4      -1.319604009145      4.449613701490     -1.064041489431

 cartesian coordinates (angstrom) at end:
    1     -0.46316535415208    -0.71574536302396    -0.09523820551765
    2      2.10795244734678     1.63166155154265     0.59971411821953
    3      2.86301031245926     0.07588074489457     1.70012110677708
    4     -0.73542046258632     2.78058000965439     1.56777992358869

 cartesian forces (hartree/bohr) at end:
    1      0.18583908715316     0.04154695939222    -0.21426600171020
    2     -0.26403820762741    -0.14073975194773    -0.13126576746800
    3     -0.10700459364661     0.72338197470669     0.19629168167761
    4      0.18520371412086    -0.62418918215118     0.14924008750060
 frms,max,avg= 3.1732920E-01 7.2338197E-01  -9.380E-05  1.132E-05  2.032E-05 h/b

 cartesian forces (eV/Angstrom) at end:
    1      9.55622928317492     2.13643037131164   -11.01799987988737
    2    -13.57738939777850    -7.23712841831442    -6.74995658971560
    3     -5.50239697635420    37.19779361548353    10.09372325933410
    4      9.52355709095778   -32.09709556848076     7.67423321026887
 frms,max,avg= 1.6317722E+01 3.7197794E+01  -4.823E-03  5.823E-04  1.045E-03 e/A
 length scales=  7.128759292410  7.128759292410  7.128759292410 bohr
              =  3.772376943068  3.772376943068  3.772376943068 angstroms
 Total charge density [el/Bohr^3]
,     Maximum=    1.9719E-01  at reduced coord.    0.7917    0.7500    0.4167
,Next maximum=    1.7876E-01  at reduced coord.    0.7500    0.0000    0.4583
,     Minimum=    1.7450E-02  at reduced coord.    0.2500    0.2917    0.7500
,Next minimum=    1.7480E-02  at reduced coord.    0.2500    0.1667    0.6250
,  Integrated=    8.0000E+00

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  4.01940504698705E+01
    Hartree energy  =  5.95732659205743E-02
    XC energy       = -2.03573902429127E+00
    Ewald energy    = -3.68424126905121E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.84868727354218E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E=  3.26846501554456E+01

    -kT*entropy     = -2.17251412402594E+02
    >>>>>>>>> Etotal= -1.84566762247148E+02

 Other information on the energy :
    Total energy(eV)= -5.02231701530450E+03 ; Band energy (Ha)=   3.5808083096E+01
--------------------------------------------------------------------------------
 rms coord change=  1.4612E-01   atom, delta coord (reduced):
     1       -0.122778121365     -0.189733256731     -0.025246206027
     2        0.058786271669     -0.067471232020      0.158975130871
     3        0.258940677368      0.020114836359     -0.049323640655
     4       -0.194948827672      0.237089652391     -0.084405284188

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -6.30017917E-02  sigma(3 2)= -4.20120276E-04
  sigma(2 2)= -7.02092082E-02  sigma(3 1)= -1.42865939E-04
  sigma(3 3)= -6.83775126E-02  sigma(2 1)=  6.27713331E-05

-Cartesian components of stress tensor (GPa)         [Pressure=  1.9770E+03 GPa]
- sigma(1 1)= -1.85357640E+03  sigma(3 2)= -1.23603632E+01
- sigma(2 2)= -2.06562587E+03  sigma(3 1)= -4.20326032E+00
- sigma(3 3)= -2.01173554E+03  sigma(2 1)=  1.84679607E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
        accesswff           1
            acell      7.1287592924E+00  7.1287592924E+00  7.1287592924E+00 Bohr
              amu      4.00260200E+00
        boxcutmin      1.00000000E+00
            dtion      5.00000000E+01
             ecut      5.00000000E+00 Hartree
           enunit           2
           etotal     -1.8456676225E+02
      fft_opt_lob           2
            fcart      1.8583908715E-01  4.1546959392E-02 -2.1426600171E-01
                      -2.6403820763E-01 -1.4073975195E-01 -1.3126576747E-01
                      -1.0700459365E-01  7.2338197471E-01  1.9629168168E-01
                       1.8520371412E-01 -6.2418918215E-01  1.4924008750E-01
           ionmov          12
           iprcch           0
           istwfk        1
           kptopt           0
          mdftemp      1.00000000E+06
          mditemp      1.00000000E+06
P           mkmem           1
            natom           4
            nband          20
            ngfft          24      24      24
             nkpt           1
            nline           5
           npband           4
            nstep          20
             nsym           1
            ntime           2
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
           occopt           3
        paral_kgb           1
           prtvol           3
            prtwf           0
         recnpath        1000
          recnrec          50
        recptrott          15
        rectolden      1.00000000E-02
          spgroup           1
           strten     -6.3001791743E-02 -7.0209208188E-02 -6.8377512603E-02
                      -4.2012027612E-04 -1.4286593857E-04  6.2771333098E-05
        tfkinfunc           2
           timopt          -1
           toldfe      1.00000000E-20 Hartree
           tsmear      3.16682970E+00 Hartree
            typat      1  1  1  1
           useylm           1
              vel     -1.7505113472E-02 -2.7051254340E-02 -3.5994825163E-03
                       8.3814636085E-03 -9.6197234446E-03  2.2665908829E-02
                       3.6918515199E-02  2.8678765322E-03 -7.0323272332E-03
                      -2.7794865336E-02  3.3803101252E-02 -1.2034099080E-02
         wfoptalg           4
           xangst     -4.6316535415E-01 -7.1574536302E-01 -9.5238205518E-02
                       2.1079524473E+00  1.6316615515E+00  5.9971411822E-01
                       2.8630103125E+00  7.5880744895E-02  1.7001211068E+00
                      -7.3542046259E-01  2.7805800097E+00  1.5677799236E+00
            xcart     -8.7525567359E-01 -1.3525627170E+00 -1.7997412582E-01
                       3.9834528266E+00  3.0833934740E+00  1.1332954415E+00
                       5.4103054062E+00  1.4339382661E-01  3.2127632845E+00
                      -1.3897432668E+00  5.2545347088E+00  2.9626746922E+00
             xred     -1.2277812137E-01 -1.8973325673E-01 -2.5246206027E-02
                       5.5878627167E-01  4.3252876798E-01  1.5897513087E-01
                       7.5894067737E-01  2.0114836359E-02  4.5067635934E-01
                      -1.9494882767E-01  7.3708965239E-01  4.1559471581E-01
            znucl        2.00000

================================================================================

 Test the timer : 
  a combined call timab(*,1,tsec) + timab(*,2,tsec) is 
- CPU time =    1.3302E-05 sec,    Wall time =    1.3433E-05 sec

- Total cpu        time (s,m,h):       1661.6       27.69      0.462
- Total wall clock time (s,m,h):       1661.6       27.69      0.462
-
- For major independent code sections, cpu and wall times (sec),
-  as well as % of the time and number of calls for node 0-
- routine                        cpu     %       wall     %      number of calls 
- invars2                        0.211   0.0      0.212   0.0              1
- abinit(2)                      0.101   0.0      0.100   0.0              1
- timing timab                   0.101   0.0      0.102   0.0              6
- fourdp                         0.030   0.0      0.031   0.0             30
- ewald                          0.025   0.0      0.023   0.0              2
- xc:pot/=fourdp                 0.019   0.0      0.020   0.0              9
- stress                         0.017   0.0      0.016   0.0              2
- ewald2                         0.014   0.0      0.014   0.0              2
- scfcv-scprqt                   0.002   0.0      0.000   0.0              7
- pspini                         0.001   0.0      0.001   0.0              1
- forces                         0.001   0.0      0.001   0.0              2
- status                         0.001   0.0      0.000   0.0            102
- vtowfk(ssdiag)                 0.000   0.0      0.000   0.0             -1
- vtorho  (1)                    0.000   0.0      0.000   0.0              7
- kpgsph                         0.000   0.0      0.000   0.0              1
- getghc-other                   0.000   0.0      0.000   0.0             -1
- vtowfk3(contrib)               0.000   0.0      0.000   0.0             -1
- cgwf3-O(npw)                   0.000   0.0      0.000   0.0             -1
- 52   others                    0.000   0.0      0.000   0.0
-
- subtotal                       0.523   0.0      0.520   0.0

- For major independent code sections, cpu and wall times (sec),
- as well as % of the total time and number of calls 

- routine                         cpu     %       wall     %      number of calls 
-                                                                  (-1=no count)
- invars2                        0.993   0.1      0.995   0.1              4
- timing timab                   0.471   0.0      0.471   0.0             28
- abinit(2)                      0.383   0.0      0.382   0.0              4
- fourdp                         0.117   0.0      0.126   0.0            120
- ewald                          0.094   0.0      0.088   0.0              8
- xc:pot/=fourdp                 0.078   0.0      0.078   0.0             36
- stress                         0.064   0.0      0.063   0.0              8
- ewald2                         0.054   0.0      0.054   0.0              8
- scfcv-scprqt                   0.008   0.0      0.000   0.0             28
- status                         0.008   0.0      0.001   0.0            405
- pspini                         0.004   0.0      0.004   0.0              4
- forces                         0.004   0.0      0.005   0.0              8
- vtowfk(ssdiag)                 0.000   0.0      0.000   0.0             -4
- vtorho  (1)                    0.000   0.0      0.000   0.0             28
- kpgsph                         0.000   0.0      0.000   0.0              4
- getghc-other                   0.000   0.0      0.000   0.0             -4
- vtowfk3(contrib)               0.000   0.0      0.000   0.0             -4
- cgwf3-O(npw)                   0.000   0.0      0.000   0.0             -4
- 52   others                    0.000   0.0      0.000   0.0

- subtotal                       2.278   0.1      2.267   0.1

 Partitioning of abinit 
- abinit                      1661.620 100.0   1661.618 100.0              4
 
- abinit(1)                      0.127   0.0      0.125   0.0              4
- abinit(2)                      0.383   0.0      0.382   0.0              4
- invars2m                       1.166   0.1      1.165   0.1              4
- abinit(4)                      0.036   0.0      0.036   0.0              4
- abinit(5)                      1.033   0.1      1.034   0.1              4
- driver                      1658.391  99.8   1658.393  99.8              4
- abinit(6)                      0.013   0.0      0.011   0.0              4
- timing timab                   0.471   0.0      0.471   0.0             28

- subtotal                    1661.620 100.0   1661.617 100.0

 Partitioning of driver 
- driver                      1658.391  99.8   1658.393  99.8              4
 
- gstateimg                   1658.381  99.8   1658.381  99.8              4

- subtotal                    1658.381  99.8   1658.381  99.8

 Partitioning of gstateimg+gstate 
- gstateimg                   1658.381  99.8   1658.381  99.8              4
 
- gstate->kpgsph                 0.058   0.0      0.058   0.0              8
- gstate(pspini)                 0.004   0.0      0.004   0.0              4
- gstate  (2)                    0.011   0.0      0.008   0.0              4
- test_ionmov                 1658.301  99.8   1658.303  99.8              4
- gstate  (3)                    0.007   0.0      0.007   0.0              4

- subtotal                    1658.381  99.8   1658.380  99.8

 Partitioning of scfcv 
- scfcv                       1658.291  99.8   1658.290  99.8              8
 
- scfcv   (1)                    0.004   0.0      0.002   0.0              8
- setvtr                         0.136   0.0      0.136   0.0              8
- scfcv-read                     0.000   0.0      0.000   0.0             28
- vtorho                      1657.252  99.7   1657.241  99.7             28
- etotfor/=forces                0.000   0.0      0.000   0.0             56
- scfcv-scprqt                   0.008   0.0      0.000   0.0             28
- newvtr/newrho                  0.067   0.0      0.064   0.0             20
- scfcv   (6)                    0.068   0.0      0.070   0.0             16
- scfcv :synchro                 0.451   0.0      0.448   0.0              8
- stress                         0.064   0.0      0.063   0.0              8

- subtotal                    1658.050  99.8   1658.024  99.8

 Partitioning of etotfor/rhotov 
- etotfor/=forces                0.000   0.0      0.000   0.0             56
- rhotov                         0.088   0.0      0.108   0.0             28
- forces                         0.004   0.0      0.005   0.0              8

- subtotal                       0.092   0.0      0.113   0.0

 Partitioning of vtorho 
- vtorho                      1657.252  99.7   1657.241  99.7             28
 
- vtorho  (1)                    0.000   0.0      0.000   0.0             28

- subtotal                       0.000   0.0      0.000   0.0

 Partitioning of sg_fourwf (disabled) 



 Partitioning of vtorhorec 
- vtorhorec                   1657.251  99.7   1657.241  99.7             28
 
- Definitions                    0.000   0.0      0.000   0.0              8
- getngrec                       0.000   0.0      0.000   0.0              4
- green_kernel                   0.036   0.0      0.036   0.0              4
- recursion (other)             55.335   3.3     55.399   3.3         912384
- recursion (den)             1481.275  89.1   1481.215  89.1          96768
- fermisolverec                  0.286   0.0      0.281   0.0            292
- entropyrec                    31.609   1.9     31.594   1.9          27648
- gran_potrec                   65.013   3.9     65.060   3.9          27648
- sync. cpu (wait)              17.043   1.0     17.044   1.0             28

- subtotal                    1650.597  99.3   1650.629  99.3
-
-Synchronisation (=leave_test) and MPI calls 
- communic.MPI                   0.509   0.0      0.509   0.0            400
-
- scfcv :synchro                 0.451   0.0      0.448   0.0              8
-
- subtotal                       0.451   0.0      0.448   0.0

 Additional information 
- total timab                   27.297   1.6     27.390   1.6        2583133
- mklocl(2)                      0.004   0.0      0.005   0.0              8
- status                         0.008   0.0      0.001   0.0            405


 Detailed analysis of some time consuming routines 
                                  tcpu    ncalls  tcpu/ncalls    ndata tcpu/ncalls/ndata
                                 (sec)                (msec)              (microsec)
- fourwf(pot)                    0.000         0
- fourwf(den)                    0.000         0
- fourdp                         0.117       120       0.975     13824       0.071
- nonlop(apply)                  0.000         0
- nonlop(forces)                 0.000         0
- nonlop(forstr)                 0.000         0
- projbd                         0.000         0
- xc:pot/=fourdp                 0.078        36       2.167     13824       0.157

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

 [1] Large scale ab initio calculations based on three levels of parallelization
 F. Bottin, S. Leroux, A. Knyazev, G. Zerah, Comput. Mat. Science 42, 329, (2008).
 Comment : in case paral_kgb is non-zero. Strong suggestion to cite this paper in your publications.
 This paper is also available at http://www.arxiv.org/abs/0707.3405

 [2] ABINIT : First-principles approach of materials and nanosystem properties.
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

 [3] A brief introduction to the ABINIT software package.
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

 [4] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.

 [5] Fast radix 2, 3, 4 and 5 kernels for Fast Fourier Transformations
 on computers with overlapping multiply-add instructions.
 S. Goedecker, SIAM J. on Scientific Computing 18, 1605 (1997).
-
- Proc.   0 individual time (sec): cpu=        415.4  wall=        415.4

================================================================================

 Calculation completed.
.Delivered    6 WARNINGs and  13 COMMENTs to log file.
+Overall time at end (sec) : cpu=       1661.7  wall=       1661.7
