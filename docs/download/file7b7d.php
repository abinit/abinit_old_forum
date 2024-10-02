
.Version 5.3.4  of ANADDB 
.(sequential version, prepared for a i686_linux_UNKNOWN computer) 

.Copyright (C) 1998-2007 ABINIT group . 
 ANADDB comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Sun  9 Mar 2014.
  

================================================================================

 -outvars9: echo values of input variables ----------------------

 Flags :
     elaflag         3
   instrflag         1
   piezoflag         3
 Miscellaneous information :
      chneut         1

================================================================================

 read the DDB information and perform some checks

-begin at tcpu      0.069  and twall      0.068 sec

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  5.5860304  0.0000000  0.0000000  G(1)=  0.1790180  0.0000000  0.0000000
 R(2)=  0.0000000  8.5850258  0.0000000  G(2)=  0.0000000  0.1164819  0.0000000
 R(3)=  0.0000000  0.0000000  8.2921182  G(3)=  0.0000000  0.0000000  0.1205964
 Unit cell volume ucvol=  3.9765861E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 Now the whole DDB is in central memory

================================================================================

 Calculation of the internal-strain  tensor

-begin at tcpu      0.085   and twall      0.085sec

 Force-response internal strain tensor(Unit:Hartree/bohr)

 Atom dir   strainxx    strainyy    strainzz    strainyz    strainxz    strainxy
  1  x     0.0000000   0.0000000   0.0000000  -0.0000026   0.0000000   0.1717034
  1  y     0.1279258   0.0185033  -0.0358833   0.0000017  -4.2769639  -0.0000022
  1  z    -0.0000000  -0.0000000  -0.0000000   0.3102453  -0.0000000   0.0000018
  2  x    -0.0000000  -0.0000000  -0.0000000   0.0000017   0.0000000  -0.0395720
  2  y    -0.1055875   0.1661330  -0.1910571   0.0000018  -5.4595455  -0.0000022
  2  z     0.0000000   0.0000000   0.0000000  -0.0942249   0.0000000  -0.0000009
  3  x    -0.0000015  -0.0000002   0.0000000   0.0000009  -0.0000000   0.0000000
  3  y     0.0000000   0.0000000   0.0000000  -0.0000000   9.7365123  -0.0000003
  3  z     0.0000000   0.0000000   0.0000000  -0.0000000  28.8141888  -0.0000009
  4  x    -0.0000000   0.0000000   0.0000000  -0.0000026   0.0000000  -0.1717034
  4  y    -0.1279258  -0.0185033   0.0358833  -0.0000017  -4.2769667   0.0000022
  4  z    -0.0000000  -0.0000000  -0.0000000  -0.3102453   0.0000000   0.0000018
  5  x     0.0000000  -0.0000000  -0.0000000   0.0000017  -0.0000000   0.0395720
  5  y     0.1055875  -0.1661330   0.1910571  -0.0000018  -5.4595485   0.0000022
  5  z     0.0000000   0.0000000   0.0000000   0.0942249   0.0000000  -0.0000009
  6  x     0.0000015   0.0000002  -0.0000000   0.0000009   0.0000000  -0.0000000
  6  y     0.0000000   0.0000000   0.0000000  -0.0000000   9.7365123   0.0000003
  6  z     0.0000000   0.0000000   0.0000000  -0.0000000 -28.8141888  -0.0000009

 instr9 : WARNING -
  Acoustic sum rule violation met : the eigenvalues of accoustic mode
  are too large at Gamma point.
  Increase cutoff energy or k-points sampling.
  The three eigenvalues are:    1.239002E+06   -8.522837E-03    1.794492E-02

 instr9 : WARNING -
  Unstable eigenvalue detected in force constant matrix at Gamma point
 The system under calculation is physically unstable.

 Displacement-response internal strain tensor (Unit:Bohr)

 Atom dir   strainxx    strainyy    strainzz    strainyz    strainxz    strainxy
  1  x    -0.0000131   0.0000005  -0.0000017  -0.0000385  -0.0003856   1.5020341
  1  y    -0.0000001   0.0000001  -0.0000001   0.0000019   0.0000174   0.0000055
  1  z     0.0000019  -0.0000013   0.0000013  -0.0539204  -0.0000465  -0.0000471
  2  x    -0.0000093   0.0000004  -0.0000013  -0.0000181  -0.0003515   0.6061908
  2  y     0.0000003  -0.0000002   0.0000002  -0.0000001   0.0000105  -0.0000066
  2  z    -0.0000000  -0.0000002   0.0000003  -0.0539872  -0.0000872   0.0000018
  3  x     0.0000189   0.0000022  -0.0000002  -0.0000405   0.0000664   0.9867229
  3  y    -0.0000001  -0.0000000   0.0000000  -0.0000064  -0.0000535   0.0000014
  3  z     0.0000004  -0.0000003   0.0000003   0.0000132   0.0000636  -0.0000020
  4  x    -0.0000001  -0.0000005   0.0000005   0.0000559   0.0006265  -3.0949183
  4  y    -0.0000005   0.0000002  -0.0000002  -0.0000072  -0.0000442   0.0000066
  4  z    -0.0000036   0.0000017  -0.0000017   0.1078858  -0.0004906   0.0000210
  5  x     0.0000002  -0.0000003   0.0000003   0.0000516   0.0003892  -0.0000825
  5  y     0.0000005  -0.0000002   0.0000001   0.0000063   0.0000839  -0.0000086
  5  z     0.0000014  -0.0000001  -0.0000001   0.0000030   0.0005852   0.0000210
  6  x     0.0000033  -0.0000023   0.0000024  -0.0000102  -0.0003450   0.0000531
  6  y    -0.0000001   0.0000001  -0.0000001   0.0000055  -0.0000141   0.0000018
  6  z    -0.0000002   0.0000002  -0.0000002   0.0000056  -0.0000245   0.0000052

================================================================================

 Calculation of the elastic and compliances tensor (Voigt notation)

-begin at tcpu      0.087   and twall      0.086sec

 elast9 : WARNING - :
  Acoustic sum rule violation met : the eigenvalues of accoustic mode
  are too large at Gamma point
  increase cutoff energy or k-points sampling.
  The three eigenvalues are:    1.239002E+06   -8.522837E-03    1.794492E-02

 elast9 : WARNING - :
  Unstable eigenvalue detected in force constant matrix at Gamma point.
  The system under calculation is physically unstable.

 Elastic Tensor (clamped ion) (unit:10^2GP):

  18.1943367   0.0949485   3.2256624   0.0000247   0.0000205  -0.0000308
   0.0951903   3.3820754   2.2510218   0.0000245   0.0000203  -0.0000305
   3.2261638   2.2513206   7.1100825   0.0000215   0.0000178  -0.0000268
  -0.0000000  -0.0000000  -0.0000000  -5.6247510  -0.0000000  -0.0000000
  -0.0000000  -0.0000000  -0.0000000  -0.0000000   3.0371707  -0.0000000
  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.3909591

 Elastic Tensor (relaxed ion) (unit:10^2GP):
  (at fixed electric field boundary condition)

  18.1943367   0.0949485   3.2256624   0.0000233   0.0000089  -0.0000294
   0.0951903   3.3820755   2.2510218   0.0000252   0.0000285  -0.0000306
   3.2261637   2.2513206   7.1100825   0.0000208   0.0000091  -0.0000266
  -0.0000014   0.0000007  -0.0000007  -5.5913743  -0.0001488   0.0000098
  -0.0000116   0.0000082  -0.0000087  -0.0001488   3.0360755   0.0001069
   0.0000014  -0.0000001   0.0000002   0.0000098   0.0001069  -0.9571863

 Compliance Tensor (clamped ion) (unit: 10^-2GP^-1):

   0.0609412   0.0211504  -0.0343436   0.0000002  -0.0000004  -0.0000041
   0.0211454   0.3819664  -0.1305221   0.0000013  -0.0000019  -0.0000225
  -0.0343472  -0.1305419   0.1975568   0.0000000  -0.0000001  -0.0000007
  -0.0000000  -0.0000000  -0.0000000  -0.1777856  -0.0000000   0.0000000
   0.0000000   0.0000000   0.0000000  -0.0000000   0.3292538  -0.0000000
  -0.0000000  -0.0000000   0.0000000   0.0000000  -0.0000000  -2.5578126

 Compliance Tensor (relaxed ion)  (unit: 10^-2GP^-1):
  (at fixed electric field boundary condition)

   0.0609412   0.0211504  -0.0343436   0.0000002  -0.0000003  -0.0000016
   0.0211454   0.3819664  -0.1305221   0.0000013  -0.0000033  -0.0000092
  -0.0343472  -0.1305419   0.1975568   0.0000000   0.0000007  -0.0000003
  -0.0000000   0.0000001  -0.0000000  -0.1788469  -0.0000088  -0.0000018
   0.0000001  -0.0000013   0.0000008  -0.0000088   0.3293726   0.0000368
   0.0000001  -0.0000000   0.0000000  -0.0000018   0.0000368  -1.0447287

================================================================================

 Calculation of the tensor related to piezoelectric effetc
  (Elastic indices in Voigt notation)

-begin at tcpu      0.099   and twall      0.098sec

 Proper piezoelectric constants (clamped ion) (unit:c/m^2)

      0.00000000      0.00000000      0.00000000
      0.00000000      0.00000000      0.00000000
      0.00000000      0.00000000      0.00000000
      0.00000000      0.00000000      0.00000000
      0.00000000      0.00000000      0.00000000
      0.00000000      0.00000000      0.00000000

 piezo9 : WARNING -
  Acoustic sum rule violation met : the eigenvalues of accoustic mode
  are too large at Gamma point
  Increase cutoff energy or k-points sampling.
  The three eigenvalues are:    1.239002E+06   -8.522837E-03    1.794492E-02

 piezo9 : WARNING -
  Unstable eigenvalue detected in force constant matrix at Gamma point
  The system under calculation is physically unstable.

 Proper piezoelectric constants (relaxed ion) (unit:c/m^2)

     -0.00001721     -0.00000031     -0.00000104
      0.00000006      0.00000015      0.00000029
     -0.00000166     -0.00000014     -0.00000025
      0.00003186     -0.00000264      0.03104988
      0.00025886      0.00001379     -0.00032597
     -1.34266028      0.00000556     -0.00001643

================================================================================

+Total cpu time      0.100  and wall time      0.100 sec

 anaddb : the run completed succesfully.
