
.Version 8.10.1 of ANADDB 
.(MPI version, prepared for a x86_64_linux_gnu4.8 computer) 

.Copyright (C) 1998-2018 ABINIT group . 
 ANADDB comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Tue 21 May 2019.
- ( at 04h13 )
  

================================================================================

 -outvars_anaddb: echo values of input variables ----------------------

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

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)= 12.5000000-12.5000000  0.0000000  G(1)=  0.0400000 -0.0400000  0.0000000
 R(2)= 12.5000000 12.5000000  0.0000000  G(2)=  0.0400000  0.0400000  0.0000000
 R(3)=  0.0000000  0.0000000 25.0000000  G(3)=  0.0000000  0.0000000  0.0400000
 Unit cell volume ucvol=  7.8125000E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 Now the whole DDB is in central memory

================================================================================

 Dielectric Tensor and Effective Charges 


 anaddb : Zero the imaginary part of the Dynamical Matrix at Gamma,
   and impose the ASR on the effective charges 

 The violation of the charge neutrality conditions
 by the effective charges is as follows :
    atom        electric field
 displacement     direction
       1               1        0.654863        0.000000
       1               2       -0.609243        0.000000
       1               3        0.000324        0.000000
       2               1       -0.609243        0.000000
       2               2        0.654863        0.000000
       2               3        0.000324        0.000000
       3               1        0.003009        0.000000
       3               2        0.003009        0.000000
       3               3        0.023231        0.000000

 Effective charge tensors after 
 imposition of the charge neutrality,
 and eventual restriction to some part :
   atom    displacement
         1         1    1.032859E+01   -5.320056E+00   -4.776931E-02
         1         2   -5.320056E+00    1.032859E+01   -4.776931E-02
         1         3    1.755601E+00    1.755601E+00    1.368376E-02
         2         1    2.275842E+01   -2.127315E+01   -3.698402E-02
         2         2   -2.127315E+01    2.275842E+01   -3.698402E-02
         2         3   -7.467383E+00   -7.467383E+00   -1.609854E-01
         3         1   -1.111612E+01    7.411455E+00    6.414715E-02
         3         2    7.411455E+00   -1.111612E+01    6.414715E-02
         3         3    2.518751E+00    2.518751E+00    7.047530E-02
         4         1   -1.153290E+01    1.727355E+01   -3.933764E-02
         4         2    1.908195E+00   -1.043799E+01    5.994381E-02
         4         3   -2.108016E+01    2.427319E+01    3.841316E-02
         5         1   -1.043799E+01    1.908195E+00    5.994381E-02
         5         2    1.727355E+01   -1.153290E+01   -3.933764E-02
         5         3    2.427319E+01   -2.108016E+01    3.841316E-02
 Now, the imaginary part of the dynamical matrix is zeroed
 

 Non-linear optical coefficients d (pm/V)
************************10749.279535************************************
************************10749.279535************************************
************************   -4.55224310749.27953510749.279535************
 

 The violation of the Raman sum rule
 by the first-order electronic dielectric tensors is as follows
     atom
  displacement
       1     -325.733363569      -45.461929137        0.037639343
              -45.461929137      429.423576520        0.030703924
                0.037639343        0.030703924       -0.001071150

       2      429.423576520      -45.461929137        0.030703924
              -45.461929137     -325.733363569        0.037639343
                0.030703924        0.037639343       -0.001071150

       3     -108.001719680      106.760948602       -0.063884756
              106.760948602     -108.001719680       -0.063884756
               -0.063884756       -0.063884756       -0.001944589

 

  First-order change in the electronic dielectric 
  susceptibility tensor (Bohr^-1)
  induced by an atomic displacement
  (after imposing the sum over all atoms to vanish)
   atom  displacement
    1          1    -9973.360036469     2473.010976758       -0.366348691
                     2473.010976758     4688.337762136       -2.487676935
                       -0.366348691       -2.487676935        0.001216100
    1          2     4688.337762136     2473.010976758       -2.487676935
                     2473.010976758    -9973.360036469       -0.366348691
                       -2.487676935       -0.366348691        0.001216100
    1          3    -1189.251951630     1157.185520831       -0.374496384
                     1157.185520831    -1189.251951630       -0.374496384
                       -0.374496384       -0.374496384       -0.010069486

    2          1      178.575696334    -1645.158812385       -5.263662270
                    -1645.158812385     1554.960478147       -6.655193045
                       -5.263662270       -6.655193045        0.005306700
    2          2     1554.960478147    -1645.158812385       -6.655193045
                    -1645.158812385      178.575696334       -5.263662270
                       -6.655193045       -5.263662270        0.005306700
    2          3     1635.843773722    -1765.541584975        0.031788370
                    -1765.541584975     1635.843773722        0.031788370
                        0.031788370        0.031788370        0.001694531

    3          1     9640.267908708     -983.951100229        1.880350309
                     -983.951100229    -6566.223674385        6.804870895
                        1.880350309        6.804870895       -0.002555573
    3          2    -6566.223674385     -983.951100229        6.804870895
                     -983.951100229     9640.267908708        1.880350309
                        6.804870895        1.880350309       -0.002555573
    3          3      100.876989566      627.452346685        5.124992357
                      627.452346685      100.876989566        5.124992357
                        5.124992357        5.124992357       -0.007835522

    4          1    -4293.532165877     1610.874893579       -0.558998477
                     1610.874893579     1498.995328502        2.534852395
                       -0.558998477        2.534852395       -0.002788376
    4          2    -1176.069894400    -1454.775957722       -0.196853310
                    -1454.775957722     4448.048597303        4.308659130
                       -0.196853310        4.308659130       -0.001178851
    4          3    -2636.153048002       -9.548141270       -0.909994637
                       -9.548141270     2088.684236344       -3.872289706
                       -0.909994637       -3.872289706        0.008105239

    5          1     4448.048597303    -1454.775957722        4.308659130
                    -1454.775957722    -1176.069894400       -0.196853310
                        4.308659130       -0.196853310       -0.001178851
    5          2     1498.995328502     1610.874893579        2.534852395
                     1610.874893579    -4293.532165877       -0.558998477
                        2.534852395       -0.558998477       -0.002788376
    5          3     2088.684236344       -9.548141270       -3.872289706
                       -9.548141270    -2636.153048002       -0.909994637
                       -3.872289706       -0.909994637        0.008105239


================================================================================

 Treat the first list of vectors 


  Phonon wavevector (reduced coordinates) :  0.00000  0.00000  0.00000
 Phonon energies in Hartree :
  -1.085235E-03 -8.274285E-04 -7.944772E-04 -5.457993E-04 -1.122273E-06
  -1.057115E-06 -9.550093E-08  2.850808E-05  2.136673E-04  3.020235E-04
   3.806852E-04  3.843199E-04  4.341595E-04  4.601886E-04  5.686120E-04
 Phonon frequencies in cm-1    :
- -2.381816E+02 -1.815996E+02 -1.743676E+02 -1.197891E+02 -2.463105E-01
- -2.320099E-01 -2.096003E-02  6.256800E+00  4.689454E+01  6.628650E+01
-  8.355074E+01  8.434847E+01  9.528699E+01  1.009997E+02  1.247959E+02

 Eigendisplacements 
 (will be given, for each mode : in cartesian coordinates
   for each atom the real part of the displacement vector,
   then the imaginary part of the displacement vector - absolute values smaller than 1.0d-7 are set to zero)
  Mode number    1   Energy   -1.085235E-03
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
;  1  8.65193875E-04  8.65193875E-04  1.93242777E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  6.49358362E-04  6.49358362E-04 -2.03049816E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -1.27787150E-03 -1.27787150E-03  9.75387816E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4  1.32945948E-03 -1.56664552E-03  4.30582658E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -1.56664552E-03  1.32945948E-03  4.30582658E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    2   Energy   -8.274285E-04
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
;  1  1.64553442E-03  1.64553442E-03  5.03875628E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2 -1.24782413E-04 -1.24782413E-04 -1.68640214E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -1.64698077E-03 -1.64698077E-03  8.52440862E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -1.25341756E-03  1.37949398E-03 -5.93123942E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5  1.37949398E-03 -1.25341756E-03 -5.93123942E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    3   Energy   -7.944772E-04
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
;  1  1.64110350E-04 -1.64110350E-04  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  2.18060712E-03 -2.18060712E-03  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3  2.81827568E-04 -2.81827568E-04  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -1.02894870E-03  1.59707358E-03 -1.13818365E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -1.59707358E-03  1.02894870E-03  1.13818365E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    4   Energy   -5.457993E-04
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
;  1  1.85909846E-03  1.85909846E-03  9.34998146E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2 -1.63772330E-03 -1.63772330E-03  3.38615631E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3  7.92701936E-04  7.92701936E-04 -1.73430418E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -4.21140551E-05 -9.72754775E-04  2.30466615E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -9.72754775E-04 -4.21140551E-05  2.30466615E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    5   Energy   -1.122273E-06
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
-  1  8.79156462E-04  8.79242116E-04 -1.40189919E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  8.94345854E-04  8.94432543E-04 -1.56433995E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  3  9.32292986E-04  9.32379375E-04 -1.46540885E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  4  8.82873833E-04  8.82911631E-04 -1.57642716E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  5  8.82825208E-04  8.82960542E-04 -1.57642699E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    6   Energy   -1.057115E-06
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
-  1  1.38596488E-03 -1.38592074E-03  0.00000000E+00
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  1.40270907E-03 -1.40266399E-03  0.00000000E+00
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  3  1.39786225E-03 -1.39781483E-03  0.00000000E+00
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  4  1.40303680E-03 -1.39835923E-03  2.71913262E-06
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  5  1.39840359E-03 -1.40299244E-03 -2.82858414E-06
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    7   Energy   -9.550093E-08
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
-  1  1.07301107E-03  1.07299790E-03  1.26789724E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  1.07295661E-03  1.07294328E-03  1.26403238E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  3  1.07396790E-03  1.07395462E-03  1.26618359E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  4  1.07364983E-03  1.07338109E-03  1.26536278E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  5  1.07339438E-03  1.07363650E-03  1.26536276E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    8   Energy    2.850808E-05
;  1  4.48874860E-04  4.48874860E-04 -3.05116144E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  5.18199125E-05  5.18199119E-05  1.17275718E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -9.36032447E-04 -9.36032447E-04 -1.38002482E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4  2.96461424E-04  3.14732496E-04  1.48467648E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5  3.14732497E-04  2.96461424E-04  1.48467648E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    9   Energy    2.136673E-04
;  1  2.15100489E-03 -2.15100489E-03  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2 -8.39056390E-04  8.39056390E-04  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -7.69092984E-05  7.69092983E-05  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -1.90169401E-03 -6.95779800E-04 -5.73537746E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5  6.95779801E-04  1.90169401E-03  5.73537746E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number   10   Energy    3.020235E-04
;  1  1.61838294E-03 -1.61838294E-03  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2 -7.26045695E-04  7.26045695E-04  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3  1.73560781E-04 -1.73560781E-04  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4  1.08671501E-03  2.14131570E-03  9.07544153E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -2.14131570E-03 -1.08671501E-03 -9.07544153E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number   11   Energy    3.806852E-04
;  1  8.08742964E-04  8.08742962E-04 -1.88212921E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  6.64135702E-04  6.64135701E-04  5.82024934E-05
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3  1.19680731E-03  1.19680732E-03  1.90468378E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -1.53934520E-03 -1.13179135E-03 -3.76072862E-05
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -1.13179135E-03 -1.53934520E-03 -3.76072854E-05
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number   12   Energy    3.843199E-04
;  1  7.51449589E-04 -7.51449590E-04  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  7.72433157E-04 -7.72433158E-04  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -2.75189357E-03  2.75189357E-03  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4  8.68377110E-04 -3.60756859E-04 -3.84416275E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5  3.60756861E-04 -8.68377107E-04  3.84416275E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number   13   Energy    4.341595E-04
;  1  1.70784117E-04  1.70784117E-04 -1.01270442E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2 -1.06779754E-03 -1.06779754E-03  2.12756443E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -2.70516094E-04 -2.70516094E-04  1.80233969E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4  1.39444300E-03 -2.25382196E-04 -1.45882734E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -2.25382196E-04  1.39444300E-03 -1.45882734E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number   14   Energy    4.601886E-04
;  1  8.84100590E-05 -8.84100590E-05  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  1.10266041E-03 -1.10266041E-03  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -3.52011226E-04  3.52011226E-04  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -1.08976786E-03 -2.46262691E-04  2.67776406E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5  2.46262691E-04  1.08976786E-03 -2.67776406E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number   15   Energy    5.686120E-04
;  1  2.11200788E-04  2.11200788E-04  9.57386709E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  1.76402002E-03  1.76402002E-03  2.30570124E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -6.22931199E-04 -6.22931199E-04 -1.52160665E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -3.02918285E-04 -1.04889990E-03 -8.69375966E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -1.04889990E-03 -3.02918285E-04 -8.69375966E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00

 Analysis of degeneracies and characters (maximum tolerance=1.00E-06 a.u.)
 Symmetry characters of vibration mode #   1
  1.0  1.0
 Symmetry characters of vibration mode #   2
  1.0  1.0
 Symmetry characters of vibration mode #   3
  1.0 -1.0
 Symmetry characters of vibration mode #   4
  1.0  1.0
 Symmetry characters of vibration mode #   5
       degenerate with vibration modes #   6 to    7
  3.0  1.0
 Symmetry characters of vibration mode #   8
  1.0  1.0
 Symmetry characters of vibration mode #   9
  1.0 -1.0
 Symmetry characters of vibration mode #  10
  1.0 -1.0
 Symmetry characters of vibration mode #  11
  1.0  1.0
 Symmetry characters of vibration mode #  12
  1.0 -1.0
 Symmetry characters of vibration mode #  13
  1.0  1.0
 Symmetry characters of vibration mode #  14
  1.0 -1.0
 Symmetry characters of vibration mode #  15
  1.0  1.0

================================================================================

 Treat the second list of vectors 


  Phonon at Gamma, with non-analyticity in the
  direction (cartesian coordinates)  1.00000  0.00000  0.00000
 Phonon energies in Hartree :
  -1.084788E-03 -8.274275E-04 -7.851038E-04 -5.457784E-04 -1.109177E-06
  -1.043005E-06 -9.514983E-08  2.892941E-05  2.180338E-04  3.040736E-04
   3.806867E-04  3.881839E-04  4.341883E-04  4.608176E-04  5.686413E-04
 Phonon frequencies in cm-1    :
- -2.380835E+02 -1.815993E+02 -1.723104E+02 -1.197845E+02 -2.434362E-01
- -2.289132E-01 -2.088297E-02  6.349271E+00  4.785288E+01  6.673645E+01
-  8.355107E+01  8.519651E+01  9.529332E+01  1.011378E+02  1.248023E+02

 Eigendisplacements 
 (will be given, for each mode : in cartesian coordinates
   for each atom the real part of the displacement vector,
   then the imaginary part of the displacement vector - absolute values smaller than 1.0d-7 are set to zero)
  Mode number    1   Energy   -1.084788E-03
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
;  1  8.62079882E-04  8.68102634E-04  1.92804125E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  6.34632652E-04  6.64699737E-04 -2.02986529E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -1.27687741E-03 -1.27991029E-03  9.75505782E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4  1.33798835E-03 -1.57444069E-03  4.41476346E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -1.55833006E-03  1.32104370E-03  4.19376264E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    2   Energy   -8.274275E-04
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
;  1  1.64604719E-03  1.64492346E-03  5.03894847E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2 -1.18990257E-04 -1.30725520E-04 -1.68520768E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -1.64630386E-03 -1.64739645E-03  8.52353215E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -1.25638907E-03  1.38370897E-03 -5.96409387E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5  1.37548490E-03 -1.25066391E-03 -5.89889421E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    3   Energy   -7.851038E-04
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
;  1  1.49072703E-04 -1.51750648E-04 -4.26908370E-06
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  2.18807456E-03 -2.17192576E-03 -9.62063625E-06
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3  2.97940379E-04 -3.13182230E-04  5.90272204E-06
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -1.00392477E-03  1.60451460E-03 -1.11168534E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -1.63061909E-03  1.03178768E-03  1.11965844E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    4   Energy   -5.457784E-04
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
;  1  1.85849858E-03  1.86000582E-03  9.34799148E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2 -1.63371506E-03 -1.64145948E-03  3.38566453E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3  7.94512241E-04  7.90226936E-04 -1.73426745E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -4.26623197E-05 -9.68713080E-04  2.30114926E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -9.77421451E-04 -4.08567008E-05  2.31029212E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    5   Energy   -1.109177E-06
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
-  1  1.14602178E-03  5.73021761E-04 -1.37558745E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  1.16434159E-03  5.83687200E-04 -1.53067837E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  3  1.19961418E-03  6.20862673E-04 -1.43621110E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  4  1.15354224E-03  5.73930587E-04 -1.54149753E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  5  1.15201298E-03  5.72508816E-04 -1.54297078E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    6   Energy   -1.043005E-06
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
-  1  1.17533882E-03 -1.53718080E-03  2.95241233E-04
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  1.18858461E-03 -1.55579609E-03  3.24084053E-04
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  3  1.17704707E-03 -1.55771928E-03  3.06502461E-04
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  4  1.19083625E-03 -1.54997587E-03  3.28761515E-04
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  5  1.18696295E-03 -1.55388424E-03  3.23738103E-04
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    7   Energy   -9.514983E-08
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
-  1  1.07251792E-03  1.07575145E-03  1.26597466E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  1.07246282E-03  1.07569504E-03  1.26211658E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  3  1.07348068E-03  1.07669599E-03  1.26426434E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  4  1.07316092E-03  1.07614780E-03  1.26345247E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  5  1.07288193E-03  1.07638047E-03  1.26344093E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    8   Energy    2.892941E-05
;  1  4.57123653E-04  4.38077211E-04 -3.04974391E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  4.82360972E-05  5.34063512E-05  1.17421367E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -9.41145489E-04 -9.32615401E-04 -1.37840746E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4  2.88320519E-04  3.03511052E-04  1.48111492E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5  3.24563622E-04  3.01712533E-04  1.49193597E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    9   Energy    2.180338E-04
;  1  2.18895449E-03 -2.18918558E-03  1.51222440E-05
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2 -8.58294249E-04  8.56827259E-04 -2.65942667E-06
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -6.74219794E-06  1.06908218E-05  6.14128696E-06
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -1.89392160E-03 -6.06854242E-04 -5.35237355E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5  5.98457464E-04  1.90010182E-03  5.16678701E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number   10   Energy    3.040736E-04
;  1  1.56846928E-03 -1.56908558E-03 -7.30359321E-06
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2 -6.90150095E-04  6.92478133E-04 -1.62918519E-06
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3  8.39848011E-05 -8.20169226E-05 -2.59394855E-06
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4  1.18767178E-03  2.14438464E-03  9.06804709E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -2.13918439E-03 -1.19657730E-03 -8.95289127E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number   11   Energy    3.806867E-04
;  1  7.97806152E-04  8.19583493E-04 -1.88190365E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  6.53481463E-04  6.74555543E-04  5.83604953E-05
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3  1.23623500E-03  1.15707772E-03  1.90463473E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -1.55318180E-03 -1.12771386E-03 -3.23018839E-05
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -1.13580989E-03 -1.52493413E-03 -4.32475767E-05
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number   12   Energy    3.881839E-04
;  1  7.65457836E-04 -7.36393499E-04 -2.60822883E-05
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  8.23118114E-04 -8.12855960E-04  1.52475427E-05
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -2.74618817E-03  2.77608647E-03  4.00673749E-05
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4  7.42996889E-04 -4.61797288E-04 -3.95488198E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5  4.15545281E-04 -7.65970455E-04  3.66349624E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number   13   Energy    4.341883E-04
;  1  1.64306843E-04  1.76614133E-04 -1.01302732E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2 -1.08098455E-03 -1.05552372E-03  2.12736508E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -2.49710263E-04 -2.91529072E-04  1.80205008E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4  1.40026975E-03 -2.16968331E-04 -1.46616532E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -2.32330868E-04  1.38891750E-03 -1.45067993E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number   14   Energy    4.608176E-04
;  1  6.92343324E-05 -7.01673343E-05 -7.37721972E-06
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  1.07076026E-03 -1.08670331E-03  9.53644509E-06
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -2.95456946E-04  2.92789706E-04  9.02791972E-06
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -1.07546503E-03 -2.22123897E-04  2.69395765E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5  2.26482977E-04  1.09065931E-03 -2.70515723E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number   15   Energy    5.686413E-04
;  1  2.09119313E-04  2.12996036E-04  9.56924358E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2  1.76220390E-03  1.76529672E-03  2.30648641E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  3 -6.18498408E-04 -6.27552416E-04 -1.52147724E-03
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  4 -3.02041210E-04 -1.04690396E-03 -8.63425744E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  5 -1.05031695E-03 -3.03360285E-04 -8.75779284E-04
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
 

 Raman susceptibility of zone-center phonons, with non-analyticity in the
  direction (cartesian coordinates)  1.00000  0.00000  0.00000
 -----------------------------------------------------------------------
 

 Mod  1   (-238.08 cm-1)
;     -1870.388007119    1600.059891177      -2.039036149
;      1600.059891177   -1745.020002199      -2.426966234
;        -2.039036149      -2.426966234      -0.002485937
 Spherical averages : G0=****************    G1=     0.000000000    G2=****************

 Mod  2   (-181.60 cm-1)
;      -563.172644724     455.821187160      -0.644212439
;       455.821187160    -568.460055335      -0.627134512
;        -0.644212439      -0.627134512      -0.000487905
 Spherical averages : G0=426864.557366561    G1=     0.000000000    G2=628993.230852827

 Mod  3   (-172.31 cm-1)
;      -299.323046962      74.941265931      -0.772805734
;        74.941265931    -101.197960801      -1.312153678
;        -0.772805734      -1.312153678      -0.011836047
 Spherical averages : G0= 53475.519656564    G1=     0.000000000    G2= 57596.818826699

 Mod  4   (-119.78 cm-1)
;     -1267.141515656    1338.508856907       0.577730440
;      1338.508856907   -1250.528787902       0.521078091
;         0.577730440       0.521078091      -0.000994171
 Spherical averages : G0=****************    G1=     0.000000000    G2=****************

 Mod  5   (  -0.24 cm-1)
-         3.241208862       8.277352191       0.067083993
-         8.277352191      -1.239068623       0.066591476
-         0.067083993       0.066591476      -0.000246052
 Spherical averages : G0=     1.335860112    G1=     0.000000000    G2=   147.751853855

 Mod  6   (  -0.23 cm-1)
-        11.228854926      -1.633037743      -0.014014118
-        -1.633037743     -11.094189691      -0.008196085
-        -0.014014118      -0.008196085       0.000060834
 Spherical averages : G0=     0.006050371    G1=     0.000000000    G2=   254.496329158

 Mod  7   (  -0.02 cm-1)
-        -0.278385483       0.449667156       0.001294842
-         0.449667156      -0.241769145       0.001214701
-         0.001294842       0.001214701      -0.000004679
 Spherical averages : G0=     0.090188568    G1=     0.000000000    G2=     0.450169635

 Mod  8   (   6.35 cm-1)
;       -21.158901791    -229.700979156      -1.850199891
;      -229.700979156     -27.243410487      -1.805657425
;        -1.850199891      -1.805657425       0.006799198
 Spherical averages : G0=   780.708562084    G1=     0.000000000    G2=105947.640951732

 Mod  9   (  47.85 cm-1)
;     -1416.139225961      27.940631340       0.844918658
;        27.940631340    1275.409165091      -1.551955235
;         0.844918658      -1.551955235      -0.004197355
 Spherical averages : G0=  6602.043812741    G1=     0.000000000    G2=****************

 Mod 10   (  66.74 cm-1)
;     -3747.114979845     -23.004412729      -0.696955767
;       -23.004412729    3864.260385413       1.288697772
;        -0.696955767       1.288697772       0.003472103
 Spherical averages : G0=  4574.619846621    G1=     0.000000000    G2=****************

 Mod 11   (  83.55 cm-1)
;       399.241429936    -290.412110492       0.257679987
;      -290.412110492     252.428706543       0.281934778
;         0.257679987       0.281934778       0.001487417
 Spherical averages : G0=141558.635130293    G1=     0.000000000    G2=250234.015749212

 Mod 12   (  85.20 cm-1)
;     -5245.308550787      33.474200448       1.207620893
;        33.474200448    5068.586683126      -2.122255681
;         1.207620893      -2.122255681      -0.005483844
 Spherical averages : G0= 10410.852256696    G1=     0.000000000    G2=****************

 Mod 13   (  95.29 cm-1)
;      -170.032532054     551.040884560       2.501773720
;       551.040884560    -264.482339444       2.604880622
;         2.501773720       2.604880622      -0.003088319
 Spherical averages : G0= 62935.285800873    G1=     0.000000000    G2=643244.885506059

 Mod 14   ( 101.14 cm-1)
;     -1010.692159067     -11.861875455       1.437011744
;       -11.861875455    1090.067031641      -0.977974343
;         1.437011744      -0.977974343       0.002441008
 Spherical averages : G0=  2100.252637141    G1=     0.000000000    G2=****************

 Mod 15   ( 124.80 cm-1)
;        62.764310204    -477.118864674      -3.159329680
;      -477.118864674      26.567350854      -3.081136852
;        -3.159329680      -3.081136852       0.002229272
 Spherical averages : G0=  2660.181320563    G1=     0.000000000    G2=457308.773043219

 The alphon input variable is non-zero, will mix the degenerate phonon modes
 in order to align the mode effective charges with the cartesian axes.
  
 Mode effective charges 
 Mode number.     x               y               z 
;   1          11.395          11.395          -0.035
;   2          -0.545          -0.545          -0.011
;   3          43.973         -43.973           0.000
;   4           1.692           1.692          -0.048
-   5           0.091           0.018           0.002
-   6           0.000           0.089           0.002
-   7           0.003           0.003           0.000
;   8          -1.819          -1.819          -0.083
;   9          15.916         -15.916          -0.000
;  10         -12.645          12.645           0.000
;  11           0.534           0.534           0.025
;  12          19.170         -19.170          -0.000
;  13          -1.716          -1.716          -0.102
;  14          -8.290           8.290           0.000
;  15          -2.025          -2.025          -0.196
  
 Length of mode effective charge for each phonon mode :
   1.611486E+01  7.703560E-01  6.218703E+01  2.393490E+00  9.282909E-02
   8.917055E-02  4.232438E-03  2.573806E+00  2.250904E+01  1.788314E+01
   7.552047E-01  2.711026E+01  2.429139E+00  1.172326E+01  2.871124E+00
  
 Oscillator strengths (in a.u. ; 1 a.u.=253.2638413 m3/s2). Set to zero if abs()<tol14.
 Mode number.       xx          yy          zz          xy          xz          yz 
;   1     Real    2.5362E-03  2.5362E-03  2.4244E-08  2.5362E-03 -7.8414E-06 -7.8414E-06
;         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
;   2     Real    5.7947E-06  5.7947E-06  2.1838E-09  5.7947E-06  1.1249E-07  1.1249E-07
;         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
;   3     Real    3.7768E-02  3.7768E-02  0.0000E+00 -3.7768E-02  0.0000E+00  0.0000E+00
;         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
;   4     Real    5.5926E-05  5.5926E-05  4.5934E-08  5.5926E-05 -1.6028E-06 -1.6028E-06
;         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
-   5     Real    1.6171E-07  6.4829E-09  1.1943E-10  3.2379E-08  4.3948E-09  8.7993E-10
-         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
-   6     Real    0.0000E+00  1.5523E-07  7.9585E-11  0.0000E+00  0.0000E+00  3.5148E-09
-         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
-   7     Real    1.7482E-10  1.7489E-10  1.8420E-13  1.7486E-10  5.6747E-12  5.6757E-12
-         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
;   8     Real    6.4629E-05  6.4629E-05  1.3406E-07  6.4629E-05  2.9435E-06  2.9435E-06
;         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
;   9     Real    4.9481E-03  4.9481E-03  0.0000E+00 -4.9481E-03  0.0000E+00  0.0000E+00
;         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
;  10     Real    3.1233E-03  3.1233E-03  0.0000E+00 -3.1233E-03  0.0000E+00  0.0000E+00
;         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
;  11     Real    5.5641E-06  5.5641E-06  1.1836E-08  5.5641E-06  2.5662E-07  2.5662E-07
;         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
;  12     Real    7.1779E-03  7.1779E-03  0.0000E+00 -7.1779E-03  0.0000E+00  0.0000E+00
;         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
;  13     Real    5.7527E-05  5.7527E-05  2.0267E-07  5.7527E-05  3.4145E-06  3.4145E-06
;         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
;  14     Real    1.3422E-03  1.3422E-03  0.0000E+00 -1.3422E-03  0.0000E+00  0.0000E+00
;         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
;  15     Real    8.0133E-05  8.0133E-05  7.4754E-07  8.0133E-05  7.7397E-06  7.7397E-06
;         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
  
 Trace of oscillator strength, for each phonon mode :
   5.072370E-03  1.159153E-05  7.553658E-02  1.118977E-04  1.683162E-07
   1.553104E-07  3.498960E-10  1.293926E-04  9.896274E-03  6.246620E-03
   1.114005E-05  1.435572E-02  1.152557E-04  2.684447E-03  1.610132E-04

 Electronic dielectric tensor
   4072.93389323  -3711.12116148      3.55711257
  -3711.12116148   4072.93389323      3.55711257
      3.57613481      3.57613481      1.78547640

