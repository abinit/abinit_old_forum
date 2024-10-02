
.Version 9.2.2 of MULTIBINIT 
.(MPI version, prepared for a x86_64_linux_intel18.0 computer) 

.Copyright (C) 1998-2020 ABINIT group . 
 MULTIBINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Wed 24 Feb 2021.
- ( at 11h07 )
  
-  nproc =    1
 
================================================================================
 
 Read the information in the reference structure in 
-tmulti5_1.xml
 to initialize the multibinit input

================================================================================

 -outvars_multibinit: echo values of input variables ----------------------

 Flags : 
     ifcflag         1
     strcpli        -1
 Spin Dynamics :
        spin_calc_thermo_obs           1
               spin_dynamics           1
            spin_temperature      600.00000
                spin_damping       -1.00000
              spin_ntime_pre     10000
                  spin_ntime     20000
                       ncell        16        16        16
                     spin_dt    1.00000E-16  second
              spin_mag_field    0.00000E+00    0.00000E+00    0.00000E+00   Tesla
                spin_sia_add           0
              spin_sia_k1amp    0.00000E+00
              spin_sia_k1dir    0.00000E+00    0.00000E+00    1.00000E+00
      spin_projection_qpoint    0.00000E+00    0.00000E+00    0.00000E+00
             spin_init_state           2
        spin_var_temperature           0
      spin_temperature_start        0.00000
        spin_temperature_end        0.00000
      spin_temperature_nstep           1
             spin_write_traj           0
 Miscellaneous information :
         asr         2
 Interatomic Force Constants Inputs :
      dipdip         1
dipdip_range        16        16        16
      ifcana         0
      ifcout   2000000
      natifc         1
       atifc         1
 Description of grid 1 :
        brav         1
       ngqpt         1         1         1
      nqshft         1
      q1shft
                     0.00000000E+00  0.00000000E+00  0.00000000E+00
 First list of wavevector (reduced coord.) :
       nph1l         1
       qph1l
                     0.00000000E+00  0.00000000E+00  0.00000000E+00    0.000E+00

================================================================================

 
================================================================================
 
reading spin terms.
 Initial spins set to reference configuration.
================================================================================
 Spin dynamic steps:
================================================================================
    Iteration          time(s)         Avg_Mst/Ms      ETOT(Ha/uc)
--------------------------------------------------------------------------------
Thermalization run:
-           100      9.90000E-15      6.52530E-01     -2.13916E-03
-           200      1.99000E-14      5.58122E-01     -1.82158E-03
-           300      2.99000E-14      5.28037E-01     -1.78953E-03
-           400      3.99000E-14      5.16548E-01     -1.80127E-03
-           500      4.99000E-14      4.85480E-01     -1.70535E-03
-           600      5.99000E-14      4.82619E-01     -1.73033E-03
-           700      6.99000E-14      4.69112E-01     -1.73637E-03
-           800      7.99000E-14      4.68077E-01     -1.70376E-03
-           900      8.99000E-14      4.71886E-01     -1.70166E-03
-          1000      9.99000E-14      4.74800E-01     -1.67807E-03
-          1100      1.09900E-13      4.73163E-01     -1.69567E-03
-          1200      1.19900E-13      4.49703E-01     -1.70770E-03
-          1300      1.29900E-13      4.42484E-01     -1.67931E-03
-          1400      1.39900E-13      4.49495E-01     -1.65141E-03
-          1500      1.49900E-13      4.66575E-01     -1.73908E-03
-          1600      1.59900E-13      4.62224E-01     -1.67191E-03
-          1700      1.69900E-13      4.69688E-01     -1.71223E-03
-          1800      1.79900E-13      4.43731E-01     -1.65660E-03
-          1900      1.89900E-13      4.29992E-01     -1.66040E-03
-          2000      1.99900E-13      4.18716E-01     -1.65026E-03
-          2100      2.09900E-13      4.12986E-01     -1.64216E-03
-          2200      2.19900E-13      4.20927E-01     -1.64411E-03
-          2300      2.29900E-13      4.04244E-01     -1.68011E-03
-          2400      2.39900E-13      4.06974E-01     -1.66447E-03
-          2500      2.49900E-13      4.06228E-01     -1.62766E-03
-          2600      2.59900E-13      4.03363E-01     -1.63282E-03
-          2700      2.69900E-13      3.85665E-01     -1.62242E-03
-          2800      2.79900E-13      3.91556E-01     -1.63512E-03
-          2900      2.89900E-13      3.91555E-01     -1.65258E-03
-          3000      2.99900E-13      3.92046E-01     -1.60821E-03
-          3100      3.09900E-13      4.03229E-01     -1.60341E-03
-          3200      3.19900E-13      4.12073E-01     -1.64209E-03
-          3300      3.29900E-13      4.21036E-01     -1.68707E-03
-          3400      3.39900E-13      4.09210E-01     -1.68371E-03
-          3500      3.49900E-13      3.97734E-01     -1.66482E-03
-          3600      3.59900E-13      3.79294E-01     -1.67413E-03
-          3700      3.69900E-13      3.79857E-01     -1.66315E-03
-          3800      3.79900E-13      3.80230E-01     -1.66068E-03
-          3900      3.89900E-13      3.93930E-01     -1.59451E-03
-          4000      3.99900E-13      4.14171E-01     -1.70102E-03
-          4100      4.09900E-13      4.06428E-01     -1.62001E-03
-          4200      4.19900E-13      4.21121E-01     -1.65830E-03
-          4300      4.29900E-13      4.08907E-01     -1.61005E-03
-          4400      4.39900E-13      4.26037E-01     -1.68836E-03
-          4500      4.49900E-13      4.06008E-01     -1.69154E-03
-          4600      4.59900E-13      3.83093E-01     -1.58468E-03
-          4700      4.69900E-13      3.89969E-01     -1.58882E-03
-          4800      4.79900E-13      4.18777E-01     -1.64597E-03
-          4900      4.89900E-13      4.06415E-01     -1.63612E-03
-          5000      4.99900E-13      4.24948E-01     -1.65758E-03
-          5100      5.09900E-13      4.34323E-01     -1.66653E-03
-          5200      5.19900E-13      4.39488E-01     -1.74289E-03
-          5300      5.29900E-13      4.21749E-01     -1.65792E-03
-          5400      5.39900E-13      4.13879E-01     -1.63693E-03
-          5500      5.49900E-13      4.23085E-01     -1.63333E-03
-          5600      5.59900E-13      4.08759E-01     -1.62961E-03
-          5700      5.69900E-13      4.13586E-01     -1.66867E-03
-          5800      5.79900E-13      4.03596E-01     -1.63376E-03
-          5900      5.89900E-13      4.13476E-01     -1.69556E-03
-          6000      5.99900E-13      4.11446E-01     -1.67988E-03
-          6100      6.09900E-13      4.20260E-01     -1.70830E-03
-          6200      6.19900E-13      4.17428E-01     -1.69435E-03
-          6300      6.29900E-13      4.14594E-01     -1.65160E-03
-          6400      6.39900E-13      4.23591E-01     -1.69993E-03
-          6500      6.49900E-13      4.04327E-01     -1.64240E-03
-          6600      6.59900E-13      3.95503E-01     -1.61366E-03
-          6700      6.69900E-13      3.83526E-01     -1.60755E-03
-          6800      6.79900E-13      3.97115E-01     -1.60031E-03
-          6900      6.89900E-13      4.01358E-01     -1.60543E-03
-          7000      6.99900E-13      3.95258E-01     -1.62752E-03
-          7100      7.09900E-13      4.18551E-01     -1.73232E-03
-          7200      7.19900E-13      4.16663E-01     -1.64364E-03
-          7300      7.29900E-13      3.91988E-01     -1.60389E-03
-          7400      7.39900E-13      3.97985E-01     -1.59714E-03
-          7500      7.49900E-13      3.88359E-01     -1.64408E-03
-          7600      7.59900E-13      3.89585E-01     -1.63015E-03
-          7700      7.69900E-13      3.83440E-01     -1.61797E-03
-          7800      7.79900E-13      3.78502E-01     -1.58884E-03
-          7900      7.89900E-13      3.78195E-01     -1.58251E-03
-          8000      7.99900E-13      3.78581E-01     -1.59549E-03
-          8100      8.09900E-13      3.81775E-01     -1.60819E-03
-          8200      8.19900E-13      3.67071E-01     -1.60742E-03
-          8300      8.29900E-13      3.73750E-01     -1.63407E-03
-          8400      8.39900E-13      3.75633E-01     -1.67064E-03
-          8500      8.49900E-13      3.82602E-01     -1.64314E-03
-          8600      8.59900E-13      4.11632E-01     -1.68672E-03
-          8700      8.69900E-13      4.26115E-01     -1.67418E-03
-          8800      8.79900E-13      4.37003E-01     -1.66743E-03
-          8900      8.89900E-13      4.46384E-01     -1.73422E-03
-          9000      8.99900E-13      4.65992E-01     -1.77370E-03
-          9100      9.09900E-13      4.49642E-01     -1.66879E-03
-          9200      9.19900E-13      4.51198E-01     -1.71987E-03
-          9300      9.29900E-13      4.71485E-01     -1.74957E-03
-          9400      9.39900E-13      4.63301E-01     -1.71626E-03
-          9500      9.49900E-13      4.36045E-01     -1.70770E-03
-          9600      9.59900E-13      4.77996E-01     -1.73845E-03
-          9700      9.69900E-13      4.80265E-01     -1.73854E-03
-          9800      9.79900E-13      4.63475E-01     -1.70073E-03
-          9900      9.89900E-13      4.46095E-01     -1.69188E-03
-         10000      9.99900E-13      4.46685E-01     -1.72475E-03
Measurement run:
-           100      9.90000E-15      4.45356E-01     -1.70973E-03
-           200      1.99000E-14      4.23270E-01     -1.68122E-03
-           300      2.99000E-14      4.07006E-01     -1.61948E-03
-           400      3.99000E-14      4.07140E-01     -1.65998E-03
-           500      4.99000E-14      4.06640E-01     -1.64919E-03
-           600      5.99000E-14      4.14103E-01     -1.67888E-03
-           700      6.99000E-14      4.08911E-01     -1.60668E-03
-           800      7.99000E-14      4.16814E-01     -1.65593E-03
-           900      8.99000E-14      3.86804E-01     -1.55285E-03
-          1000      9.99000E-14      3.88886E-01     -1.56831E-03
-          1100      1.09900E-13      3.93476E-01     -1.57733E-03
-          1200      1.19900E-13      3.88883E-01     -1.56581E-03
-          1300      1.29900E-13      4.11212E-01     -1.67147E-03
-          1400      1.39900E-13      4.17031E-01     -1.66404E-03
-          1500      1.49900E-13      4.07202E-01     -1.62892E-03
-          1600      1.59900E-13      3.96443E-01     -1.57973E-03
-          1700      1.69900E-13      4.04831E-01     -1.57460E-03
-          1800      1.79900E-13      4.10289E-01     -1.57246E-03
-          1900      1.89900E-13      4.04104E-01     -1.57316E-03
-          2000      1.99900E-13      4.00207E-01     -1.60392E-03
-          2100      2.09900E-13      4.24430E-01     -1.61889E-03
-          2200      2.19900E-13      4.21747E-01     -1.60581E-03
-          2300      2.29900E-13      4.24609E-01     -1.63025E-03
-          2400      2.39900E-13      4.24309E-01     -1.58363E-03
-          2500      2.49900E-13      4.11885E-01     -1.63400E-03
-          2600      2.59900E-13      4.30321E-01     -1.65626E-03
-          2700      2.69900E-13      4.37485E-01     -1.68114E-03
-          2800      2.79900E-13      4.29037E-01     -1.65489E-03
-          2900      2.89900E-13      4.27785E-01     -1.65493E-03
-          3000      2.99900E-13      4.31650E-01     -1.63608E-03
-          3100      3.09900E-13      4.38048E-01     -1.64230E-03
-          3200      3.19900E-13      4.40610E-01     -1.71074E-03
-          3300      3.29900E-13      4.39485E-01     -1.69496E-03
-          3400      3.39900E-13      4.19420E-01     -1.62813E-03
-          3500      3.49900E-13      4.20085E-01     -1.66810E-03
-          3600      3.59900E-13      4.11246E-01     -1.65726E-03
-          3700      3.69900E-13      4.10484E-01     -1.63397E-03
-          3800      3.79900E-13      3.95166E-01     -1.63700E-03
-          3900      3.89900E-13      4.04973E-01     -1.66237E-03
-          4000      3.99900E-13      4.15018E-01     -1.69377E-03
-          4100      4.09900E-13      4.24603E-01     -1.73921E-03
-          4200      4.19900E-13      4.19277E-01     -1.67922E-03
-          4300      4.29900E-13      4.23500E-01     -1.67907E-03
-          4400      4.39900E-13      4.16377E-01     -1.61110E-03
-          4500      4.49900E-13      4.34379E-01     -1.66631E-03
-          4600      4.59900E-13      4.33839E-01     -1.63812E-03
-          4700      4.69900E-13      4.44899E-01     -1.71241E-03
-          4800      4.79900E-13      4.18513E-01     -1.62502E-03
-          4900      4.89900E-13      4.19256E-01     -1.67156E-03
-          5000      4.99900E-13      4.07059E-01     -1.63963E-03
-          5100      5.09900E-13      4.11311E-01     -1.66223E-03
-          5200      5.19900E-13      4.14913E-01     -1.59093E-03
-          5300      5.29900E-13      4.16200E-01     -1.60885E-03
-          5400      5.39900E-13      4.24631E-01     -1.68629E-03
-          5500      5.49900E-13      4.30894E-01     -1.68017E-03
-          5600      5.59900E-13      4.27143E-01     -1.66980E-03
-          5700      5.69900E-13      4.34721E-01     -1.68477E-03
-          5800      5.79900E-13      4.45819E-01     -1.70947E-03
-          5900      5.89900E-13      4.32452E-01     -1.71951E-03
-          6000      5.99900E-13      4.23976E-01     -1.69046E-03
-          6100      6.09900E-13      4.20241E-01     -1.69251E-03
-          6200      6.19900E-13      4.18799E-01     -1.68831E-03
-          6300      6.29900E-13      4.10299E-01     -1.64182E-03
-          6400      6.39900E-13      4.25022E-01     -1.62799E-03
-          6500      6.49900E-13      4.43762E-01     -1.71264E-03
-          6600      6.59900E-13      4.34115E-01     -1.68705E-03
-          6700      6.69900E-13      4.34348E-01     -1.69859E-03
-          6800      6.79900E-13      4.46780E-01     -1.71385E-03
-          6900      6.89900E-13      4.58059E-01     -1.72580E-03
-          7000      6.99900E-13      4.35098E-01     -1.66648E-03
-          7100      7.09900E-13      4.24889E-01     -1.68181E-03
-          7200      7.19900E-13      4.31152E-01     -1.68614E-03
-          7300      7.29900E-13      4.39382E-01     -1.70248E-03
-          7400      7.39900E-13      4.12471E-01     -1.65526E-03
-          7500      7.49900E-13      4.10201E-01     -1.63642E-03
-          7600      7.59900E-13      4.16313E-01     -1.67259E-03
-          7700      7.69900E-13      4.07125E-01     -1.66628E-03
-          7800      7.79900E-13      3.97354E-01     -1.63312E-03
-          7900      7.89900E-13      4.05400E-01     -1.64354E-03
-          8000      7.99900E-13      3.90097E-01     -1.58893E-03
-          8100      8.09900E-13      3.78108E-01     -1.54483E-03
-          8200      8.19900E-13      3.87346E-01     -1.61194E-03
-          8300      8.29900E-13      4.03853E-01     -1.61180E-03
-          8400      8.39900E-13      4.18412E-01     -1.58982E-03
-          8500      8.49900E-13      4.07243E-01     -1.64900E-03
-          8600      8.59900E-13      3.95623E-01     -1.56176E-03
-          8700      8.69900E-13      4.06286E-01     -1.64104E-03
-          8800      8.79900E-13      4.06753E-01     -1.67290E-03
-          8900      8.89900E-13      3.89782E-01     -1.65566E-03
-          9000      8.99900E-13      3.91314E-01     -1.63684E-03
-          9100      9.09900E-13      3.75038E-01     -1.59976E-03
-          9200      9.19900E-13      3.81207E-01     -1.57582E-03
-          9300      9.29900E-13      3.73533E-01     -1.60469E-03
-          9400      9.39900E-13      3.73338E-01     -1.62949E-03
-          9500      9.49900E-13      3.62816E-01     -1.54985E-03
-          9600      9.59900E-13      3.66668E-01     -1.58498E-03
-          9700      9.69900E-13      3.76931E-01     -1.58336E-03
-          9800      9.79900E-13      3.41129E-01     -1.56546E-03
-          9900      9.89900E-13      3.30644E-01     -1.55214E-03
-         10000      9.99900E-13      3.62060E-01     -1.58482E-03
-         10100      1.00990E-12      3.64796E-01     -1.60696E-03
-         10200      1.01990E-12      3.53072E-01     -1.56455E-03
-         10300      1.02990E-12      3.47247E-01     -1.53557E-03
-         10400      1.03990E-12      3.60796E-01     -1.52933E-03
-         10500      1.04990E-12      3.70888E-01     -1.53436E-03
-         10600      1.05990E-12      3.98019E-01     -1.66028E-03
-         10700      1.06990E-12      3.98175E-01     -1.62294E-03
-         10800      1.07990E-12      3.99013E-01     -1.62947E-03
-         10900      1.08990E-12      3.96923E-01     -1.63079E-03
-         11000      1.09990E-12      3.83180E-01     -1.58442E-03
-         11100      1.10990E-12      3.66399E-01     -1.61034E-03
-         11200      1.11990E-12      3.78467E-01     -1.55637E-03
-         11300      1.12990E-12      3.96352E-01     -1.59611E-03
-         11400      1.13990E-12      3.95068E-01     -1.62404E-03
-         11500      1.14990E-12      3.87750E-01     -1.61178E-03
-         11600      1.15990E-12      3.97837E-01     -1.64030E-03
-         11700      1.16990E-12      3.78629E-01     -1.60669E-03
-         11800      1.17990E-12      3.76855E-01     -1.60301E-03
-         11900      1.18990E-12      3.83126E-01     -1.63314E-03
-         12000      1.19990E-12      3.93236E-01     -1.64772E-03
-         12100      1.20990E-12      4.03481E-01     -1.64434E-03
-         12200      1.21990E-12      4.15373E-01     -1.60046E-03
-         12300      1.22990E-12      4.09192E-01     -1.62054E-03
-         12400      1.23990E-12      4.01480E-01     -1.60126E-03
-         12500      1.24990E-12      3.86252E-01     -1.55421E-03
-         12600      1.25990E-12      3.67056E-01     -1.57270E-03
-         12700      1.26990E-12      3.87174E-01     -1.63428E-03
-         12800      1.27990E-12      3.96624E-01     -1.62256E-03
-         12900      1.28990E-12      3.86919E-01     -1.64515E-03
-         13000      1.29990E-12      3.94183E-01     -1.63884E-03
-         13100      1.30990E-12      4.06758E-01     -1.67181E-03
-         13200      1.31990E-12      4.07635E-01     -1.68042E-03
-         13300      1.32990E-12      4.08935E-01     -1.67852E-03
-         13400      1.33990E-12      3.98364E-01     -1.61774E-03
-         13500      1.34990E-12      4.27057E-01     -1.67287E-03
-         13600      1.35990E-12      4.35676E-01     -1.65458E-03
-         13700      1.36990E-12      4.32614E-01     -1.65317E-03
-         13800      1.37990E-12      4.27254E-01     -1.65021E-03
-         13900      1.38990E-12      4.27209E-01     -1.64035E-03
-         14000      1.39990E-12      4.17563E-01     -1.61715E-03
-         14100      1.40990E-12      4.15124E-01     -1.66681E-03
-         14200      1.41990E-12      4.18444E-01     -1.65505E-03
-         14300      1.42990E-12      3.96858E-01     -1.60266E-03
-         14400      1.43990E-12      4.12869E-01     -1.65433E-03
-         14500      1.44990E-12      4.17203E-01     -1.68105E-03
-         14600      1.45990E-12      4.28153E-01     -1.68645E-03
-         14700      1.46990E-12      4.14125E-01     -1.60189E-03
-         14800      1.47990E-12      4.25298E-01     -1.65480E-03
-         14900      1.48990E-12      4.38101E-01     -1.67347E-03
-         15000      1.49990E-12      4.41855E-01     -1.64978E-03
-         15100      1.50990E-12      4.26076E-01     -1.62109E-03
-         15200      1.51990E-12      4.26210E-01     -1.63763E-03
-         15300      1.52990E-12      4.24297E-01     -1.63202E-03
-         15400      1.53990E-12      4.32220E-01     -1.62474E-03
-         15500      1.54990E-12      4.42987E-01     -1.60088E-03
-         15600      1.55990E-12      4.63487E-01     -1.68653E-03
-         15700      1.56990E-12      4.57713E-01     -1.65487E-03
-         15800      1.57990E-12      4.57464E-01     -1.71839E-03
-         15900      1.58990E-12      4.19759E-01     -1.66698E-03
-         16000      1.59990E-12      4.26367E-01     -1.67631E-03
-         16100      1.60990E-12      3.92170E-01     -1.56575E-03
-         16200      1.61990E-12      3.92495E-01     -1.61256E-03
-         16300      1.62990E-12      3.96416E-01     -1.59408E-03
-         16400      1.63990E-12      4.07413E-01     -1.63519E-03
-         16500      1.64990E-12      4.02704E-01     -1.64354E-03
-         16600      1.65990E-12      4.10152E-01     -1.67156E-03
-         16700      1.66990E-12      4.10746E-01     -1.67281E-03
-         16800      1.67990E-12      4.30451E-01     -1.69641E-03
-         16900      1.68990E-12      4.24099E-01     -1.66364E-03
-         17000      1.69990E-12      4.38702E-01     -1.65659E-03
-         17100      1.70990E-12      4.24599E-01     -1.65778E-03
-         17200      1.71990E-12      4.22936E-01     -1.70187E-03
-         17300      1.72990E-12      4.06478E-01     -1.64853E-03
-         17400      1.73990E-12      4.20639E-01     -1.63875E-03
-         17500      1.74990E-12      4.13454E-01     -1.65712E-03
-         17600      1.75990E-12      4.15433E-01     -1.67950E-03
-         17700      1.76990E-12      4.10179E-01     -1.68673E-03
-         17800      1.77990E-12      3.98979E-01     -1.62491E-03
-         17900      1.78990E-12      3.86998E-01     -1.61815E-03
-         18000      1.79990E-12      3.80338E-01     -1.57407E-03
-         18100      1.80990E-12      3.96998E-01     -1.62986E-03
-         18200      1.81990E-12      3.95984E-01     -1.63544E-03
-         18300      1.82990E-12      3.85340E-01     -1.63412E-03
-         18400      1.83990E-12      3.80190E-01     -1.61853E-03
-         18500      1.84990E-12      3.91893E-01     -1.64210E-03
-         18600      1.85990E-12      4.05268E-01     -1.65330E-03
-         18700      1.86990E-12      4.27232E-01     -1.71206E-03
-         18800      1.87990E-12      4.07087E-01     -1.62035E-03
-         18900      1.88990E-12      4.11943E-01     -1.63591E-03
-         19000      1.89990E-12      4.31131E-01     -1.71402E-03
-         19100      1.90990E-12      4.31038E-01     -1.69590E-03
-         19200      1.91990E-12      4.22919E-01     -1.66722E-03
-         19300      1.92990E-12      4.33571E-01     -1.68075E-03
-         19400      1.93990E-12      4.14713E-01     -1.65309E-03
-         19500      1.94990E-12      4.14612E-01     -1.64713E-03
-         19600      1.95990E-12      4.22928E-01     -1.64652E-03
-         19700      1.96990E-12      4.12152E-01     -1.61979E-03
-         19800      1.97990E-12      4.09869E-01     -1.63869E-03
-         19900      1.98990E-12      4.00012E-01     -1.61279E-03
-         20000      1.99990E-12      4.10065E-01     -1.64200E-03
--------------------------------------------------------------------------------
  Summary of spin dynamics:
    At the end of the run, the average spin at each sublattice is
      Sublattice       <M_i>(x)  <M_i>(y)  <M_i>(z)  ||<M_i>||
-        0001          -0.14904   0.09100   0.37102   0.41007
 
 
# Temperature              Cv             chi        BinderU4             Mst
    600.00000     8.04504E+03     6.85781E-02     0.66265E+00     4.09780E-01
================================================================================
 
================================================================================
 
-
- Proc.   0 individual time (sec): cpu=         29.6  wall=         29.6
 
================================================================================
 
+Total cpu time     29.643  and wall time     29.650 sec
 
 multibinit : the run completed succesfully.
