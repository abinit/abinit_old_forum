
.Version 5.8.4  of ANADDB 
.(sequential version, prepared for a x86_64_linux_intel11.1 computer) 

.Copyright (C) 1998-2009 ABINIT group . 
 ANADDB comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Mon 23 May 2011.
  

================================================================================

 -outvars9: echo values of input variables ----------------------

 Flags :
     dieflag         1
      nlflag         1
     elaflag         3
   instrflag         1
   piezoflag         3
 Miscellaneous information :
       eivec         1
         asr         1
      chneut         2
 Frequency information :
       nfreq         1
       frmin         0.00000000E+00
       frmax         1.00000000E+01
 Non-linear response information :
      alphon         1
      prtmbm         1
     ramansr         1
 First list of wavevector (reduced coord.) :
       nph1l         1
       qph1l
                     0.00000000E+00  0.00000000E+00  0.00000000E+00    1.000E+00
 Second list of wavevector (cart. coord.) :
       nph2l         1
       qph2l
                     1.00000000E+00  0.00000000E+00  0.00000000E+00    0.000E+00

================================================================================

 read the DDB information and perform some checks

-begin at tcpu      0.039  and twall      0.039 sec

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)= 13.1624815  0.0000000  0.0000000  G(1)=  0.0759735  0.0000000  0.0000000
 R(2)=  0.0000000  8.0528259  0.0000000  G(2)=  0.0000000  0.1241800  0.0000000
 R(3)=  0.0000000  0.0000000 12.2691870  G(3)=  0.0000000  0.0000000  0.0815050
 Unit cell volume ucvol=  1.3004746E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 Now the whole DDB is in central memory

================================================================================

 Dielectric Tensor and Effective Charges 

-begin at tcpu      2.689  and twall      2.688 sec

 anaddb : Zero the imaginary part of the Dynamical Matrix at Gamma,
   and impose the ASR on the effective charges 

 The violation of the charge neutrality conditions
 by the effective charges is as follows :
    atom        electric field
 displacement     direction
       1               1        0.000001        0.000000
       1               2        0.000000        0.000000
       1               3        0.000000        0.000000
       2               1        0.000000        0.000000
       2               2        0.000519        0.000000
       2               3        0.000000        0.000000
       3               1        0.000000        0.000000
       3               2        0.000000        0.000000
       3               3        0.000000        0.000000
 
 Effective charge tensors after
 imposition of the charge neutrality,
 and eventual restriction to some part :
   atom    displacement
         1         1   -1.965848E-01   -1.571011E-01   -2.989299E-02
         1         2   -1.467082E-01   -3.750765E-01    2.191281E-02
         1         3   -2.030189E-02    4.041993E-02   -1.536081E-01
         2         1   -1.965848E-01   -1.571011E-01    2.989299E-02
         2         2   -1.467082E-01   -3.750765E-01   -2.191281E-02
         2         3    2.030189E-02   -4.041993E-02   -1.536081E-01
         3         1   -1.965848E-01    1.571011E-01   -2.989299E-02
         3         2    1.467082E-01   -3.750765E-01   -2.191281E-02
         3         3   -2.030189E-02   -4.041993E-02   -1.536081E-01
         4         1   -1.965848E-01    1.571011E-01    2.989299E-02
         4         2    1.467082E-01   -3.750765E-01    2.191281E-02
         4         3    2.030189E-02    4.041993E-02   -1.536081E-01
         5         1   -1.965848E-01   -1.571011E-01   -2.989299E-02
         5         2   -1.467082E-01   -3.750765E-01    2.191281E-02
         5         3   -2.030189E-02    4.041993E-02   -1.536081E-01
         6         1   -1.965848E-01   -1.571011E-01    2.989299E-02
         6         2   -1.467082E-01   -3.750765E-01   -2.191281E-02
         6         3    2.030189E-02   -4.041993E-02   -1.536081E-01
         7         1   -1.965848E-01    1.571011E-01   -2.989299E-02
         7         2    1.467082E-01   -3.750765E-01   -2.191281E-02
         7         3   -2.030189E-02   -4.041993E-02   -1.536081E-01
         8         1   -1.965848E-01    1.571011E-01    2.989299E-02
         8         2    1.467082E-01   -3.750765E-01    2.191281E-02
         8         3    2.030189E-02    4.041993E-02   -1.536081E-01
         9         1   -2.396952E-01   -3.014584E-16    1.476609E-01
         9         2    2.180190E-17   -1.556548E-01    2.095293E-16
         9         3    1.411580E-01    1.623703E-16   -2.819322E-01
        10         1   -2.880861E-01   -2.007706E-16    1.018663E-01
        10         2   -2.943954E-16   -1.251834E-01    3.900220E-16
        10         3    9.893200E-02    2.601301E-16   -3.450023E-01
        11         1   -2.396952E-01    8.475756E-17   -1.476609E-01
        11         2    1.755214E-16   -1.556548E-01    2.848179E-16
        11         3   -1.411580E-01    3.489990E-16   -2.819322E-01
        12         1   -2.880861E-01    2.149789E-16   -1.018663E-01
        12         2    1.171240E-16   -1.251834E-01    2.882578E-16
        12         3   -9.893200E-02    2.106503E-16   -3.450023E-01
        13         1   -2.396952E-01    3.797766E-16    1.476609E-01
        13         2    2.575695E-16   -1.556548E-01   -2.879724E-16
        13         3    1.411580E-01   -2.906765E-16   -2.819322E-01
        14         1   -2.880861E-01    1.992463E-16    1.018663E-01
        14         2    3.139568E-16   -1.251834E-01   -3.887547E-16
        14         3    9.893200E-02   -1.676987E-16   -3.450023E-01
        15         1   -2.396952E-01   -1.577193E-16   -1.476609E-01
        15         2   -1.145418E-16   -1.556548E-01    2.492134E-18
        15         3   -1.411580E-01   -1.229229E-17   -2.819322E-01
        16         1   -2.880861E-01   -1.245836E-16   -1.018663E-01
        16         2   -4.524269E-17   -1.251834E-01   -2.747815E-16
        16         3   -9.893200E-02   -7.550029E-17   -3.450023E-01
        17         1    9.544588E-01   -4.218217E-18    1.373797E-01
        17         2   -9.756999E-17    1.058911E+00    2.087482E-16
        17         3    1.940705E-01    1.564943E-16    1.004483E+00
        18         1    9.544588E-01   -3.768397E-17   -1.373797E-01
        18         2    2.508963E-17    1.058911E+00    1.998487E-16
        18         3   -1.940705E-01    2.285740E-16    1.004483E+00
        19         1    9.544588E-01   -8.785245E-17    1.373797E-01
        19         2    5.345374E-17    1.058911E+00   -1.138753E-16
        19         3    1.940705E-01   -5.425940E-17    1.004483E+00
        20         1    9.544588E-01    1.355225E-17   -1.373797E-01
        20         2   -8.169831E-17    1.058911E+00   -1.167578E-16
        20         3   -1.940705E-01    4.169051E-17    1.004483E+00
        21         1   -3.350796E-02   -5.223481E-16   -1.072615E-01
        21         2   -4.755133E-16   -2.791935E-02   -9.792608E-17
        21         3   -1.006070E-01    1.452398E-16   -7.033260E-02
        22         1   -3.350796E-02    3.551656E-16    1.072615E-01
        22         2   -9.650361E-17   -2.791935E-02   -8.603975E-17
        22         3    1.006070E-01   -3.183869E-16   -7.033260E-02
        23         1   -3.350796E-02    1.873401E-16   -1.072615E-01
        23         2   -3.173986E-16   -2.791935E-02   -4.106051E-16
        23         3   -1.006070E-01   -1.314211E-17   -7.033260E-02
        24         1   -3.350796E-02    8.793129E-17    1.072615E-01
        24         2    3.914770E-16   -2.791935E-02   -5.416620E-16
        24         3    1.006070E-01   -8.861448E-16   -7.033260E-02
 Now, the imaginary part of the dynamical matrix is zeroed
