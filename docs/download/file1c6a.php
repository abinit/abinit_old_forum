
.Version 8.0.3 of ANADDB 
.(MPI version, prepared for a x86_64_linux_gnu5.3 computer) 

.Copyright (C) 1998-2016 ABINIT group . 
 ANADDB comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Mon  4 Apr 2016.
- ( at 09h53 )
  

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

-begin at tcpu      0.016  and twall      0.016 sec

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.2650000  5.2650000  G(1)= -0.0949668  0.0949668  0.0949668
 R(2)=  5.2650000  0.0000000  5.2650000  G(2)=  0.0949668 -0.0949668  0.0949668
 R(3)=  5.2650000  5.2650000  0.0000000  G(3)=  0.0949668  0.0949668 -0.0949668
 Unit cell volume ucvol=  2.9189397E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 Now the whole DDB is in central memory

================================================================================

 Dielectric Tensor and Effective Charges 


 anaddb : Zero the imaginary part of the Dynamical Matrix at Gamma,
   and impose the ASR on the effective charges 

 The violation of the charge neutrality conditions
 by the effective charges is as follows :
    atom        electric field
 displacement     direction
       1               1       -0.003810        0.000000
       1               2       -0.000000        0.000000
       1               3       -0.000000        0.000000
       2               1       -0.000000        0.000000
       2               2       -0.003810        0.000000
       2               3        0.000000        0.000000
       3               1        0.000000        0.000000
       3               2        0.000000        0.000000
       3               3       -0.003810        0.000000

 Effective charge tensors after 
 imposition of the charge neutrality,
 and eventual restriction to some part :
   atom    displacement
         1         1    2.043399E+00    3.273417E-17    3.273417E-17
         1         2    3.273417E-17    2.043399E+00   -3.273417E-17
         1         3   -3.273417E-17   -3.273417E-17    2.043399E+00
         2         1   -2.043399E+00   -3.273417E-17   -3.273417E-17
         2         2   -3.273417E-17   -2.043399E+00    3.273417E-17
         2         3    3.273417E-17    3.273417E-17   -2.043399E+00
 Now, the imaginary part of the dynamical matrix is zeroed
 

 Non-linear optical coefficients d (pm/V)
    0.000000   -0.000000    0.000000   21.175523    0.000000    0.000000
    0.000000    0.000000    0.000000    0.000000   21.175523   -0.000000
    0.000000    0.000000    0.000000    0.000000    0.000000   21.175523
 

 The violation of the Raman sum rule
 by the first-order electronic dielectric tensors is as follows
     atom
  displacement
       1       -0.000000000       -0.000000000       -0.000000000
                0.000000000        0.000000000       -0.000226015
               -0.000000000       -0.000226015        0.000000000

       2        0.000000000       -0.000000000       -0.000226015
               -0.000000000       -0.000000000       -0.000000000
               -0.000226015       -0.000000000       -0.000000000

       3       -0.000000000       -0.000226015       -0.000000000
               -0.000226015        0.000000000       -0.000000000
               -0.000000000       -0.000000000       -0.000000000

 

  First-order change in the electronic dielectric 
  susceptibility tensor (Bohr^-1)
  induced by an atomic displacement
  (after imposing the sum over all atoms to vanish)
   atom  displacement
    1          1       -0.000000000       -0.000000000       -0.000000000
                       -0.000000000       -0.000000000       -0.094488281
                       -0.000000000       -0.094488281        0.000000000
    1          2        0.000000000       -0.000000000       -0.094488281
                       -0.000000000       -0.000000000       -0.000000000
                       -0.094488281       -0.000000000       -0.000000000
    1          3       -0.000000000       -0.094488281       -0.000000000
                       -0.094488281       -0.000000000       -0.000000000
                       -0.000000000       -0.000000000       -0.000000000

    2          1        0.000000000        0.000000000        0.000000000
                       -0.000000000       -0.000000000        0.094488281
                        0.000000000        0.094488281       -0.000000000
    2          2       -0.000000000        0.000000000        0.094488281
                        0.000000000        0.000000000        0.000000000
                        0.094488281        0.000000000        0.000000000
    2          3        0.000000000        0.094488281        0.000000000
                        0.094488281       -0.000000000        0.000000000
                        0.000000000        0.000000000        0.000000000


================================================================================

 Treat the first list of vectors 

-begin at tcpu      0.132  and twall      0.132 sec
 
  Phonon wavevector (reduced coordinates) :  0.00000  0.00000  0.00000
 Phonon energies in Hartree :
   0.000000E+00  0.000000E+00  0.000000E+00  1.683277E-03  1.683277E-03
   1.683277E-03
 Phonon frequencies in cm-1    :
-  0.000000E+00  0.000000E+00  0.000000E+00  3.694366E+02  3.694366E+02
-  3.694366E+02

 Eigendisplacements 
 (will be given, for each mode : in cartesian coordinates
   for each atom the real part of the displacement vector,
   then the imaginary part of the displacement vector - absolute values smaller than 1.0d-7 are set to zero)
  Mode number    1   Energy    0.000000E+00
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
-  1  0.00000000E+00  0.00000000E+00 -2.32020405E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  0.00000000E+00  0.00000000E+00 -2.32020411E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    2   Energy    0.000000E+00
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
-  1  0.00000000E+00  2.32020405E-03  0.00000000E+00
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  0.00000000E+00  2.32020411E-03  0.00000000E+00
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    3   Energy    0.000000E+00
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
-  1  2.32020405E-03  0.00000000E+00  0.00000000E+00
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  2.32020411E-03  0.00000000E+00  0.00000000E+00
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    4   Energy    1.683277E-03
-  1  0.00000000E+00 -4.15669341E-07 -3.86630689E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  0.00000000E+00  1.49695144E-07  1.39237445E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    5   Energy    1.683277E-03
-  1  2.81458089E-07  3.86630688E-03 -4.15666216E-07
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2 -1.01361600E-07 -1.39237444E-03  1.49694019E-07
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    6   Energy    1.683277E-03
-  1  3.86630691E-03 -2.81453475E-07  0.00000000E+00
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2 -1.39237445E-03  1.01359938E-07  0.00000000E+00
-     0.00000000E+00  0.00000000E+00  0.00000000E+00

 Analysis of degeneracies and characters (maximum tolerance=1.00E-06 a.u.)
 Symmetry characters of vibration mode #   1
       degenerate with vibration modes #   2 to    3
  3.0 -1.0 -1.0 -1.0  1.0 -1.0  1.0 -1.0 -0.0  0.0 -0.0  0.0  1.0 -1.0 -1.0  1.0
 -0.0  0.0  0.0 -0.0  1.0  1.0 -1.0 -1.0
 Symmetry characters of vibration mode #   4
       degenerate with vibration modes #   5 to    6
  3.0 -1.0 -1.0 -1.0  1.0 -1.0  1.0 -1.0  0.0 -0.0  0.0 -0.0  1.0 -1.0 -1.0  1.0
  0.0  0.0 -0.0 -0.0  1.0  1.0 -1.0 -1.0

================================================================================

 Treat the second list of vectors 

-begin at tcpu      0.140  and twall      0.133 sec
 
  Phonon at Gamma, with non-analyticity in the
  direction (cartesian coordinates)  1.00000  0.00000  0.00000
 Phonon energies in Hartree :
   0.000000E+00  0.000000E+00  0.000000E+00  1.683277E-03  1.683277E-03
   1.836745E-03
 Phonon frequencies in cm-1    :
-  0.000000E+00  0.000000E+00  0.000000E+00  3.694366E+02  3.694366E+02
-  4.031189E+02

 Eigendisplacements 
 (will be given, for each mode : in cartesian coordinates
   for each atom the real part of the displacement vector,
   then the imaginary part of the displacement vector - absolute values smaller than 1.0d-7 are set to zero)
  Mode number    1   Energy    0.000000E+00
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
-  1  0.00000000E+00  0.00000000E+00 -2.32020405E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  0.00000000E+00  0.00000000E+00 -2.32020411E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    2   Energy    0.000000E+00
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
-  1  0.00000000E+00 -2.32020405E-03  0.00000000E+00
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  0.00000000E+00 -2.32020411E-03  0.00000000E+00
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    3   Energy    0.000000E+00
 Attention : low frequency mode.
   (Could be unstable or acoustic mode)
-  1  2.32020406E-03  0.00000000E+00  0.00000000E+00
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  2.32020411E-03  0.00000000E+00  0.00000000E+00
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    4   Energy    1.683277E-03
-  1  0.00000000E+00  4.15824535E-07  3.86630689E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  0.00000000E+00 -1.49751034E-07 -1.39237445E-03
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    5   Energy    1.683277E-03
-  1  0.00000000E+00  3.86630689E-03 -4.15824535E-07
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
-  2  0.00000000E+00 -1.39237445E-03  1.49751034E-07
-     0.00000000E+00  0.00000000E+00  0.00000000E+00
  Mode number    6   Energy    1.836745E-03
;  1  3.86630691E-03  0.00000000E+00  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
;  2 -1.39237446E-03  0.00000000E+00  0.00000000E+00
;     0.00000000E+00  0.00000000E+00  0.00000000E+00
 

 Raman susceptibility of zone-center phonons, with non-analyticity in the
  direction (cartesian coordinates)  1.00000  0.00000  0.00000
 -----------------------------------------------------------------------
 

 Mod  1   (   0.00 cm-1)
-        -0.000000000      -0.000000000       0.000000000
-        -0.000000000       0.000000000      -0.000000000
-         0.000000000      -0.000000000      -0.000000000
 Spherical averages : G0=     0.000000000    G1=     0.000000000    G2=     0.000000000

 Mod  2   (   0.00 cm-1)
-         0.000000000      -0.000000000      -0.000000000
-        -0.000000000      -0.000000000       0.000000000
-        -0.000000000       0.000000000      -0.000000000
 Spherical averages : G0=     0.000000000    G1=     0.000000000    G2=     0.000000000

 Mod  3   (   0.00 cm-1)
-         0.000000000       0.000000000       0.000000000
-         0.000000000      -0.000000000       0.000000000
-         0.000000000       0.000000000      -0.000000000
 Spherical averages : G0=     0.000000000    G1=     0.000000000    G2=     0.000000000

 Mod  4   ( 369.44 cm-1)
-        -0.000000000      -0.008489212      -0.000000913
-        -0.008489212      -0.000000000      -0.000000000
-        -0.000000913      -0.000000000      -0.000000000
 Spherical averages : G0=     0.000000000    G1=     0.000000000    G2=     0.000144133

 Mod  5   ( 369.44 cm-1)
-         0.000000000       0.000000913      -0.008489212
-         0.000000913      -0.000000000      -0.000000000
-        -0.008489212      -0.000000000      -0.000000000
 Spherical averages : G0=     0.000000000    G1=     0.000000000    G2=     0.000144133

 Mod  6   ( 403.12 cm-1)
;        -0.000000000      -0.000000000      -0.000000000
;        -0.000000000       0.000000000      -0.011466211
;        -0.000000000      -0.011466211       0.000000000
 Spherical averages : G0=     0.000000000    G1=     0.000000000    G2=     0.000262948

 The alphon input variable is non-zero, will mix the degenerate phonon modes
 in order to align the mode effective charges with the cartesian axes.
  
 Mode effective charges 
 Mode number.     x               y               z 
-   1          -0.000           0.000           0.000
-   2          -0.000          -0.000           0.000
-   3          -0.000          -0.000          -0.000
-   4          -0.000          -0.000          -2.615
-   5           0.000           2.615          -0.000
-   6           2.615          -0.000          -0.000
  
 Length of mode effective charge for each phonon mode :
   3.768241E-08  3.768241E-08  3.768241E-08  2.614889E+00  2.614889E+00
   2.614889E+00
  
 Oscillator strengths (in a.u. ; 1 a.u.=253.2638413 m3/s2). Set to zero if abs()<tol14.
 Mode number.       xx          yy          zz          xy          xz          yz 
-   1     Real    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
-         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
-   2     Real    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
-         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
-   3     Real    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
-         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
-   4     Real    0.0000E+00  0.0000E+00  1.1547E-04  0.0000E+00  0.0000E+00  0.0000E+00
-         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
-   5     Real    0.0000E+00  1.1547E-04  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
-         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
-   6     Real    1.1547E-04  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
-         Imag    0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00  0.0000E+00
  
 Trace of oscillator strength, for each phonon mode :
   0.000000E+00  0.000000E+00  0.000000E+00  1.154675E-04  1.154675E-04
   1.154675E-04

 Electronic dielectric tensor
      9.20200157     -0.00000000     -0.00000000
     -0.00000000      9.20200157     -0.00000000
     -0.00000000     -0.00000000      9.20200157
 

 Relaxed ion dielectric tensor
     10.95642097      0.00000000      0.00000000
      0.00000000     10.95642097      0.00000000
      0.00000000      0.00000000     10.95642097
 
 Full dielectric tensor at frequency  0.0000E+00 Hartree
  1.09564210E+01  0.00000000E+00  0.00000000E+00
  0.00000000E+00  1.09564210E+01  0.00000000E+00
  0.00000000E+00  0.00000000E+00  1.09564210E+01
 

 Generalized Lyddane-Sachs-Teller relation at zero frequency :
 Direction                     Dielectric constant
   1.00000   0.00000   0.00000    1.09564210E+01
 

  Raman susceptibilities of transverse zone-center phonon modes
  -------------------------------------------------------------
 

 Mod  1   (   0.00 cm-1)
-        -0.000000000      -0.000000000      -0.000000000
-        -0.000000000      -0.000000000      -0.000000000
-        -0.000000000      -0.000000000      -0.000000000
 Spherical averages : G0=     0.000000000    G1=     0.000000000    G2=     0.000000000

 Mod  2   (   0.00 cm-1)
-        -0.000000000      -0.000000000       0.000000000
-        -0.000000000       0.000000000       0.000000000
-         0.000000000       0.000000000       0.000000000
 Spherical averages : G0=     0.000000000    G1=     0.000000000    G2=     0.000000000

 Mod  3   (   0.00 cm-1)
-         0.000000000       0.000000000       0.000000000
-         0.000000000       0.000000000       0.000000000
-         0.000000000       0.000000000      -0.000000000
 Spherical averages : G0=     0.000000000    G1=     0.000000000    G2=     0.000000000

 Mod  4   ( 369.44 cm-1)
-         0.000000000       0.008489212       0.000000000
-         0.008489212       0.000000000       0.000000000
-         0.000000000       0.000000000       0.000000000
 Spherical averages : G0=     0.000000000    G1=     0.000000000    G2=     0.000144133

 Mod  5   ( 369.44 cm-1)
-         0.000000000      -0.000000000      -0.008489212
-        -0.000000000      -0.000000000      -0.000000000
-        -0.008489212      -0.000000000      -0.000000000
 Spherical averages : G0=     0.000000000    G1=     0.000000000    G2=     0.000144133

 Mod  6   ( 369.44 cm-1)
-        -0.000000000       0.000000000       0.000000000
-         0.000000000       0.000000000      -0.008489212
-         0.000000000      -0.008489212       0.000000000
 Spherical averages : G0=     0.000000000    G1=     0.000000000    G2=     0.000144133

 

 Output of the EO tensor (pm/V) in Voigt notations
 =================================================

 Mode by mode decomposition


Mode  4   ( 369.44 cm-1)
            0.000000000       0.000000000       0.000000001
            0.000000000       0.000000000       0.000000000
            0.000000000       0.000000000       0.000000001
            0.000000000       0.000000000       0.000000001
            0.000000000       0.000000000       0.000000001
            0.000000000       0.000000000       0.543837671

Mode  5   ( 369.44 cm-1)
           -0.000000000      -0.000000001       0.000000000
            0.000000000       0.000000001      -0.000000000
            0.000000000       0.000000001      -0.000000000
            0.000000000       0.000000001      -0.000000000
            0.000000000       0.543837671      -0.000000000
            0.000000000       0.000000001      -0.000000000

Mode  6   ( 369.44 cm-1)
            0.000000001      -0.000000000      -0.000000000
           -0.000000000       0.000000000       0.000000000
           -0.000000001       0.000000000       0.000000000
            0.543837670      -0.000000000      -0.000000000
           -0.000000000       0.000000000       0.000000000
           -0.000000000       0.000000000       0.000000000

 Electronic contribution to the EO tensor
           -0.000000006      -0.000000002      -0.000000001
            0.000000000      -0.000000001      -0.000000001
           -0.000000003      -0.000000002      -0.000000006
           -1.000298285      -0.000000001      -0.000000002
           -0.000000001      -1.000298285      -0.000000003
           -0.000000002       0.000000000      -1.000298285
 

 Total EO tensor (pm/V) in Voigt notations
           -0.000000005      -0.000000003      -0.000000000
            0.000000000       0.000000000      -0.000000001
           -0.000000004      -0.000000001      -0.000000005
           -0.456460615      -0.000000001      -0.000000001
           -0.000000001      -0.456460614      -0.000000002
           -0.000000002       0.000000001      -0.456460614

================================================================================

 Calculation of the internal-strain  tensor

-begin at tcpu      0.148   and twall      0.135sec

 Force-response internal strain tensor(Unit:Hartree/bohr)

 Atom dir   strainxx    strainyy    strainzz    strainyz    strainxz    strainxy
  1  x     0.0000000   0.0000000   0.0000000   0.1759596   0.0000000   0.0000000
  1  y     0.0000000   0.0000000   0.0000000   0.0000000   0.1759596  -0.0000000
  1  z    -0.0000000  -0.0000000  -0.0000000   0.0000000  -0.0000000   0.1759596
  2  x    -0.0000000  -0.0000000  -0.0000000  -0.1759596  -0.0000000  -0.0000000
  2  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.1759596   0.0000000
  2  z     0.0000000   0.0000000   0.0000000  -0.0000000   0.0000000  -0.1759596

 Displacement-response internal strain tensor (Unit:Bohr)

 Atom dir   strainxx    strainyy    strainzz    strainyz    strainxz    strainxy
  1  x     0.0000000   0.0000000   0.0000000   0.8586685   0.0000000   0.0000000
  1  y     0.0000000   0.0000000   0.0000000   0.0000000   0.8586686  -0.0000000
  1  z    -0.0000000  -0.0000000  -0.0000000   0.0000000  -0.0000000   0.8586686
  2  x    -0.0000000  -0.0000000  -0.0000000  -0.8586685  -0.0000000  -0.0000000
  2  y    -0.0000000  -0.0000000  -0.0000000  -0.0000000  -0.8586686   0.0000000
  2  z     0.0000000   0.0000000   0.0000000  -0.0000000   0.0000000  -0.8586686

================================================================================

 Calculation of the elastic and compliances tensor (Voigt notation)

-begin at tcpu      0.149   and twall      0.135sec

 Elastic Tensor (clamped ion) (unit:10^2GP):

   1.2241902   0.6348587   0.6348587  -0.0000000  -0.0000000  -0.0000000
   0.6348587   1.2241902   0.6348587  -0.0000000  -0.0000000  -0.0000000
   0.6348587   0.6348587   1.2241902  -0.0000000  -0.0000000  -0.0000000
  -0.0000000  -0.0000000  -0.0000000   0.8774857   0.0000000   0.0000000
   0.0000000   0.0000000   0.0000000   0.0000000   0.8774857  -0.0000000
   0.0000000   0.0000000   0.0000000   0.0000000  -0.0000000   0.8774857

 Elastic Tensor (relaxed ion) (unit:10^2GP):
  (at fixed electric field boundary condition)

   1.2241902   0.6348587   0.6348587  -0.0000000  -0.0000000  -0.0000000
   0.6348587   1.2241902   0.6348587  -0.0000000  -0.0000000  -0.0000000
   0.6348587   0.6348587   1.2241902  -0.0000000  -0.0000000  -0.0000000
  -0.0000000  -0.0000000  -0.0000000   0.5729059   0.0000000  -0.0000000
   0.0000000  -0.0000000  -0.0000000   0.0000000   0.5729059  -0.0000000
   0.0000000   0.0000000   0.0000000  -0.0000000  -0.0000000   0.5729059

 Compliance Tensor (clamped ion) (unit: 10^-2GP^-1):

   1.2648844  -0.4319536  -0.4319536   0.0000000   0.0000000   0.0000000
  -0.4319536   1.2648844  -0.4319536  -0.0000000   0.0000000   0.0000000
  -0.4319536  -0.4319536   1.2648844  -0.0000000   0.0000000   0.0000000
  -0.0000000   0.0000000   0.0000000   1.1396197  -0.0000000  -0.0000000
  -0.0000000   0.0000000   0.0000000  -0.0000000   1.1396197   0.0000000
  -0.0000000  -0.0000000   0.0000000  -0.0000000   0.0000000   1.1396197

 Compliance Tensor (relaxed ion)  (unit: 10^-2GP^-1):
  (at fixed electric field boundary condition)

   1.2648844  -0.4319536  -0.4319536   0.0000000   0.0000000   0.0000000
  -0.4319536   1.2648844  -0.4319536  -0.0000000   0.0000000   0.0000000
  -0.4319536  -0.4319536   1.2648844  -0.0000000   0.0000000   0.0000000
  -0.0000000   0.0000000   0.0000000   1.7454873  -0.0000000   0.0000000
  -0.0000000   0.0000000   0.0000000  -0.0000000   1.7454873   0.0000000
  -0.0000000  -0.0000000   0.0000000   0.0000000   0.0000000   1.7454873

================================================================================

 Calculation of the tensor related to piezoelectric effetc
  (Elastic indices in Voigt notation)

-begin at tcpu      0.156   and twall      0.136sec

 Proper piezoelectric constants (clamped ion) (unit:c/m^2)

      0.00000000      0.00000000      0.00000000
      0.00000000      0.00000000      0.00000000
      0.00000000      0.00000000      0.00000000
     -0.65029623      0.00000000      0.00000000
      0.00000000     -0.65029623      0.00000000
      0.00000000      0.00000000     -0.65029623

 ddb_piezo : WARNING -
  Acoustic sum rule violation met : the eigenvalues of accoustic mode
  are too large at Gamma point
  Increase cutoff energy or k-points sampling.
  The three eigenvalues are:    1.307478E-06    2.714604E-17    1.307478E-06

 Proper piezoelectric constants (relaxed ion) (unit:c/m^2)

      0.00000000      0.00000000     -0.00000000
      0.00000000      0.00000000     -0.00000000
      0.00000000      0.00000000     -0.00000000
      0.03754602      0.00000000      0.00000000
      0.00000000      0.03754602     -0.00000000
      0.00000000     -0.00000000      0.03754603
-
- Proc.   0 individual time (sec): cpu=          0.2  wall=          0.1

================================================================================

+Total cpu time      0.157  and wall time      0.136 sec

 anaddb : the run completed succesfully.
