
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
- ( at 11h17 )
  
-  nproc =   48
 
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
-           100      9.90000E-15      6.09580E-01     -1.89911E-03
-           200      1.99000E-14      5.16532E-01     -1.66992E-03
-           300      2.99000E-14      4.89166E-01     -1.63261E-03
-           400      3.99000E-14      4.71373E-01     -1.59549E-03
-           500      4.99000E-14      4.52820E-01     -1.55842E-03
-           600      5.99000E-14      4.23754E-01     -1.48179E-03
-           700      6.99000E-14      4.18970E-01     -1.53475E-03
-           800      7.99000E-14      3.93910E-01     -1.48197E-03
-           900      8.99000E-14      3.90370E-01     -1.49650E-03
-          1000      9.99000E-14      3.75619E-01     -1.45517E-03
-          1100      1.09900E-13      3.60171E-01     -1.43874E-03
-          1200      1.19900E-13      3.57274E-01     -1.44647E-03
-          1300      1.29900E-13      3.41139E-01     -1.43522E-03
-          1400      1.39900E-13      3.18043E-01     -1.39213E-03
-          1500      1.49900E-13      3.45607E-01     -1.42752E-03
-          1600      1.59900E-13      3.41548E-01     -1.36553E-03
-          1700      1.69900E-13      3.40717E-01     -1.39830E-03
-          1800      1.79900E-13      3.59945E-01     -1.40475E-03
-          1900      1.89900E-13      3.69244E-01     -1.41150E-03
-          2000      1.99900E-13      3.52519E-01     -1.42053E-03
-          2100      2.09900E-13      3.59955E-01     -1.40140E-03
-          2200      2.19900E-13      3.57631E-01     -1.38032E-03
-          2300      2.29900E-13      3.57339E-01     -1.42720E-03
-          2400      2.39900E-13      3.49965E-01     -1.40029E-03
-          2500      2.49900E-13      3.80285E-01     -1.45538E-03
-          2600      2.59900E-13      3.74937E-01     -1.47014E-03
-          2700      2.69900E-13      3.67571E-01     -1.41773E-03
-          2800      2.79900E-13      3.59753E-01     -1.42952E-03
-          2900      2.89900E-13      3.44127E-01     -1.43999E-03
-          3000      2.99900E-13      3.34213E-01     -1.41456E-03
-          3100      3.09900E-13      3.29380E-01     -1.41743E-03
-          3200      3.19900E-13      3.06984E-01     -1.38492E-03
-          3300      3.29900E-13      3.02922E-01     -1.40389E-03
-          3400      3.39900E-13      3.09819E-01     -1.43557E-03
-          3500      3.49900E-13      3.16239E-01     -1.42409E-03
-          3600      3.59900E-13      3.49912E-01     -1.45087E-03
-          3700      3.69900E-13      3.39362E-01     -1.44873E-03
-          3800      3.79900E-13      3.17357E-01     -1.40272E-03
-          3900      3.89900E-13      3.21415E-01     -1.39771E-03
-          4000      3.99900E-13      3.11862E-01     -1.40292E-03
-          4100      4.09900E-13      3.19857E-01     -1.39208E-03
-          4200      4.19900E-13      3.03703E-01     -1.42154E-03
-          4300      4.29900E-13      2.94542E-01     -1.36659E-03
-          4400      4.39900E-13      2.94357E-01     -1.38086E-03
-          4500      4.49900E-13      3.21677E-01     -1.44201E-03
-          4600      4.59900E-13      3.34432E-01     -1.42841E-03
-          4700      4.69900E-13      3.32043E-01     -1.38417E-03
-          4800      4.79900E-13      3.18181E-01     -1.40299E-03
-          4900      4.89900E-13      3.14268E-01     -1.37226E-03
-          5000      4.99900E-13      3.12310E-01     -1.33048E-03
-          5100      5.09900E-13      3.22572E-01     -1.39854E-03
-          5200      5.19900E-13      2.96036E-01     -1.37399E-03
-          5300      5.29900E-13      2.91174E-01     -1.35080E-03
-          5400      5.39900E-13      3.12336E-01     -1.34796E-03
-          5500      5.49900E-13      3.21306E-01     -1.41573E-03
-          5600      5.59900E-13      3.31492E-01     -1.40928E-03
-          5700      5.69900E-13      3.19807E-01     -1.44064E-03
-          5800      5.79900E-13      3.31020E-01     -1.46238E-03
-          5900      5.89900E-13      3.24460E-01     -1.43747E-03
-          6000      5.99900E-13      3.15703E-01     -1.43991E-03
-          6100      6.09900E-13      3.33395E-01     -1.42871E-03
-          6200      6.19900E-13      3.23164E-01     -1.36083E-03
-          6300      6.29900E-13      3.11251E-01     -1.35480E-03
-          6400      6.39900E-13      2.97055E-01     -1.34350E-03
-          6500      6.49900E-13      2.97797E-01     -1.39526E-03
-          6600      6.59900E-13      3.11295E-01     -1.38203E-03
-          6700      6.69900E-13      3.00125E-01     -1.34206E-03
-          6800      6.79900E-13      3.35651E-01     -1.41930E-03
-          6900      6.89900E-13      3.37318E-01     -1.36771E-03
-          7000      6.99900E-13      3.53060E-01     -1.42993E-03
-          7100      7.09900E-13      3.14269E-01     -1.38061E-03
-          7200      7.19900E-13      3.28609E-01     -1.42996E-03
-          7300      7.29900E-13      3.23753E-01     -1.37442E-03
-          7400      7.39900E-13      3.09089E-01     -1.38492E-03
-          7500      7.49900E-13      2.94250E-01     -1.48312E-03
-          7600      7.59900E-13      2.72913E-01     -1.39814E-03
-          7700      7.69900E-13      2.61984E-01     -1.32325E-03
-          7800      7.79900E-13      2.72891E-01     -1.38928E-03
-          7900      7.89900E-13      2.67403E-01     -1.37740E-03
-          8000      7.99900E-13      2.57911E-01     -1.40330E-03
-          8100      8.09900E-13      2.41539E-01     -1.33260E-03
-          8200      8.19900E-13      2.60109E-01     -1.37480E-03
-          8300      8.29900E-13      2.95406E-01     -1.37016E-03
-          8400      8.39900E-13      2.76410E-01     -1.38970E-03
-          8500      8.49900E-13      2.95756E-01     -1.38810E-03
-          8600      8.59900E-13      2.75980E-01     -1.36027E-03
-          8700      8.69900E-13      2.63105E-01     -1.37370E-03
-          8800      8.79900E-13      2.56661E-01     -1.32252E-03
-          8900      8.89900E-13      2.54704E-01     -1.33783E-03
-          9000      8.99900E-13      2.40438E-01     -1.37663E-03
-          9100      9.09900E-13      2.23357E-01     -1.30295E-03
-          9200      9.19900E-13      2.15154E-01     -1.32276E-03
-          9300      9.29900E-13      2.13683E-01     -1.30633E-03
-          9400      9.39900E-13      2.32177E-01     -1.28880E-03
-          9500      9.49900E-13      2.25505E-01     -1.32123E-03
-          9600      9.59900E-13      2.49629E-01     -1.37649E-03
-          9700      9.69900E-13      2.73905E-01     -1.36313E-03
-          9800      9.79900E-13      2.68831E-01     -1.36677E-03
-          9900      9.89900E-13      2.82005E-01     -1.36732E-03
-         10000      9.99900E-13      2.95699E-01     -1.37879E-03
Measurement run:
-           100      9.90000E-15      3.17639E-01     -1.44476E-03
-           200      1.99000E-14      3.13880E-01     -1.42413E-03
-           300      2.99000E-14      3.08917E-01     -1.41608E-03
-           400      3.99000E-14      2.89361E-01     -1.41465E-03
-           500      4.99000E-14      2.94205E-01     -1.43385E-03
-           600      5.99000E-14      2.61510E-01     -1.35474E-03
-           700      6.99000E-14      2.82746E-01     -1.39285E-03
-           800      7.99000E-14      2.86310E-01     -1.40661E-03
-           900      8.99000E-14      2.87726E-01     -1.36745E-03
-          1000      9.99000E-14      2.70882E-01     -1.38461E-03
-          1100      1.09900E-13      2.51411E-01     -1.33933E-03
-          1200      1.19900E-13      2.44008E-01     -1.32752E-03
-          1300      1.29900E-13      2.48873E-01     -1.35071E-03
-          1400      1.39900E-13      2.56214E-01     -1.37373E-03
-          1500      1.49900E-13      2.54224E-01     -1.34831E-03
-          1600      1.59900E-13      2.46081E-01     -1.30301E-03
-          1700      1.69900E-13      2.49367E-01     -1.34915E-03
-          1800      1.79900E-13      2.23736E-01     -1.31004E-03
-          1900      1.89900E-13      2.24986E-01     -1.31708E-03
-          2000      1.99900E-13      2.12904E-01     -1.31664E-03
-          2100      2.09900E-13      2.08424E-01     -1.36171E-03
-          2200      2.19900E-13      2.04365E-01     -1.33125E-03
-          2300      2.29900E-13      1.95916E-01     -1.33875E-03
-          2400      2.39900E-13      1.86740E-01     -1.29712E-03
-          2500      2.49900E-13      2.10224E-01     -1.31981E-03
-          2600      2.59900E-13      1.81918E-01     -1.36628E-03
-          2700      2.69900E-13      1.68936E-01     -1.28411E-03
-          2800      2.79900E-13      1.55048E-01     -1.29120E-03
-          2900      2.89900E-13      1.62008E-01     -1.25630E-03
-          3000      2.99900E-13      1.74410E-01     -1.27230E-03
-          3100      3.09900E-13      1.63064E-01     -1.29330E-03
-          3200      3.19900E-13      1.63618E-01     -1.30244E-03
-          3300      3.29900E-13      1.71965E-01     -1.29506E-03
-          3400      3.39900E-13      1.82653E-01     -1.31177E-03
-          3500      3.49900E-13      1.83454E-01     -1.30121E-03
-          3600      3.59900E-13      1.90835E-01     -1.39570E-03
-          3700      3.69900E-13      1.93576E-01     -1.35123E-03
-          3800      3.79900E-13      1.88528E-01     -1.30779E-03
-          3900      3.89900E-13      1.99206E-01     -1.29984E-03
-          4000      3.99900E-13      1.94316E-01     -1.33993E-03
-          4100      4.09900E-13      1.99493E-01     -1.37473E-03
-          4200      4.19900E-13      1.81184E-01     -1.31267E-03
-          4300      4.29900E-13      1.83581E-01     -1.29504E-03
-          4400      4.39900E-13      1.97295E-01     -1.28747E-03
-          4500      4.49900E-13      1.99980E-01     -1.34551E-03
-          4600      4.59900E-13      2.00901E-01     -1.33650E-03
-          4700      4.69900E-13      1.96890E-01     -1.30875E-03
-          4800      4.79900E-13      2.04039E-01     -1.33704E-03
-          4900      4.89900E-13      2.09997E-01     -1.33629E-03
-          5000      4.99900E-13      2.15999E-01     -1.32233E-03
-          5100      5.09900E-13      2.25650E-01     -1.32244E-03
-          5200      5.19900E-13      2.28401E-01     -1.34954E-03
-          5300      5.29900E-13      2.36798E-01     -1.39639E-03
-          5400      5.39900E-13      2.49059E-01     -1.45173E-03
-          5500      5.49900E-13      2.70131E-01     -1.37641E-03
-          5600      5.59900E-13      2.65229E-01     -1.38389E-03
-          5700      5.69900E-13      2.84196E-01     -1.41957E-03
-          5800      5.79900E-13      3.02635E-01     -1.39773E-03
-          5900      5.89900E-13      3.03509E-01     -1.35754E-03
-          6000      5.99900E-13      2.86109E-01     -1.41799E-03
-          6100      6.09900E-13      2.86585E-01     -1.40123E-03
-          6200      6.19900E-13      2.64702E-01     -1.40706E-03
-          6300      6.29900E-13      2.84062E-01     -1.37871E-03
-          6400      6.39900E-13      2.89894E-01     -1.36953E-03
-          6500      6.49900E-13      2.88842E-01     -1.35051E-03
-          6600      6.59900E-13      2.66317E-01     -1.31564E-03
-          6700      6.69900E-13      2.77968E-01     -1.33695E-03
-          6800      6.79900E-13      2.90576E-01     -1.33413E-03
-          6900      6.89900E-13      2.65272E-01     -1.30295E-03
-          7000      6.99900E-13      2.57513E-01     -1.37197E-03
-          7100      7.09900E-13      2.74155E-01     -1.37000E-03
-          7200      7.19900E-13      2.53678E-01     -1.31357E-03
-          7300      7.29900E-13      2.43981E-01     -1.26926E-03
-          7400      7.39900E-13      2.63698E-01     -1.35302E-03
-          7500      7.49900E-13      2.60703E-01     -1.37675E-03
-          7600      7.59900E-13      2.54465E-01     -1.36152E-03
-          7700      7.69900E-13      2.49498E-01     -1.37394E-03
-          7800      7.79900E-13      2.42349E-01     -1.36693E-03
-          7900      7.89900E-13      2.29652E-01     -1.35320E-03
-          8000      7.99900E-13      2.33455E-01     -1.34093E-03
-          8100      8.09900E-13      2.25475E-01     -1.35421E-03
-          8200      8.19900E-13      2.20244E-01     -1.37767E-03
-          8300      8.29900E-13      1.98075E-01     -1.33344E-03
-          8400      8.39900E-13      2.09245E-01     -1.35081E-03
-          8500      8.49900E-13      2.02388E-01     -1.35795E-03
-          8600      8.59900E-13      2.27486E-01     -1.35387E-03
-          8700      8.69900E-13      2.26706E-01     -1.35386E-03
-          8800      8.79900E-13      2.31141E-01     -1.34880E-03
-          8900      8.89900E-13      2.42105E-01     -1.35109E-03
-          9000      8.99900E-13      2.51476E-01     -1.38327E-03
-          9100      9.09900E-13      2.77479E-01     -1.44474E-03
-          9200      9.19900E-13      2.69564E-01     -1.39908E-03
-          9300      9.29900E-13      2.65460E-01     -1.36986E-03
-          9400      9.39900E-13      2.80914E-01     -1.41028E-03
-          9500      9.49900E-13      2.55464E-01     -1.35626E-03
-          9600      9.59900E-13      2.50496E-01     -1.34638E-03
-          9700      9.69900E-13      2.45308E-01     -1.37462E-03
-          9800      9.79900E-13      2.73928E-01     -1.42048E-03
-          9900      9.89900E-13      2.79164E-01     -1.46022E-03
-         10000      9.99900E-13      2.86356E-01     -1.36947E-03
-         10100      1.00990E-12      2.87215E-01     -1.40264E-03
-         10200      1.01990E-12      2.90945E-01     -1.37810E-03
-         10300      1.02990E-12      2.81927E-01     -1.40016E-03
-         10400      1.03990E-12      2.71091E-01     -1.33104E-03
-         10500      1.04990E-12      2.86781E-01     -1.35103E-03
-         10600      1.05990E-12      2.84970E-01     -1.37950E-03
-         10700      1.06990E-12      3.09303E-01     -1.37020E-03
-         10800      1.07990E-12      3.18922E-01     -1.42614E-03
-         10900      1.08990E-12      2.99291E-01     -1.41986E-03
-         11000      1.09990E-12      2.94596E-01     -1.38553E-03
-         11100      1.10990E-12      2.64255E-01     -1.36648E-03
-         11200      1.11990E-12      2.48185E-01     -1.34675E-03
-         11300      1.12990E-12      2.69823E-01     -1.32588E-03
-         11400      1.13990E-12      2.88905E-01     -1.40048E-03
-         11500      1.14990E-12      2.77595E-01     -1.36108E-03
-         11600      1.15990E-12      2.80929E-01     -1.35998E-03
-         11700      1.16990E-12      2.92475E-01     -1.39722E-03
-         11800      1.17990E-12      2.98412E-01     -1.38605E-03
-         11900      1.18990E-12      2.98229E-01     -1.36607E-03
-         12000      1.19990E-12      2.91004E-01     -1.39832E-03
-         12100      1.20990E-12      2.77030E-01     -1.37808E-03
-         12200      1.21990E-12      2.68295E-01     -1.35296E-03
-         12300      1.22990E-12      2.57557E-01     -1.31873E-03
-         12400      1.23990E-12      2.50726E-01     -1.33596E-03
-         12500      1.24990E-12      2.39797E-01     -1.35961E-03
-         12600      1.25990E-12      2.46506E-01     -1.36678E-03
-         12700      1.26990E-12      2.48107E-01     -1.35733E-03
-         12800      1.27990E-12      2.55190E-01     -1.35913E-03
-         12900      1.28990E-12      2.42680E-01     -1.38391E-03
-         13000      1.29990E-12      2.40119E-01     -1.30655E-03
-         13100      1.30990E-12      2.67075E-01     -1.34628E-03
-         13200      1.31990E-12      2.79345E-01     -1.32266E-03
-         13300      1.32990E-12      2.83548E-01     -1.36627E-03
-         13400      1.33990E-12      2.98572E-01     -1.39875E-03
-         13500      1.34990E-12      2.70356E-01     -1.34628E-03
-         13600      1.35990E-12      2.70869E-01     -1.31387E-03
-         13700      1.36990E-12      2.92294E-01     -1.38899E-03
-         13800      1.37990E-12      2.99857E-01     -1.38281E-03
-         13900      1.38990E-12      2.76644E-01     -1.36484E-03
-         14000      1.39990E-12      2.69339E-01     -1.36913E-03
-         14100      1.40990E-12      2.76615E-01     -1.40738E-03
-         14200      1.41990E-12      2.71086E-01     -1.36580E-03
-         14300      1.42990E-12      2.80470E-01     -1.39918E-03
-         14400      1.43990E-12      2.48344E-01     -1.41170E-03
-         14500      1.44990E-12      2.49390E-01     -1.39640E-03
-         14600      1.45990E-12      2.75850E-01     -1.37945E-03
-         14700      1.46990E-12      2.64585E-01     -1.36126E-03
-         14800      1.47990E-12      2.72371E-01     -1.39938E-03
-         14900      1.48990E-12      2.59757E-01     -1.34100E-03
-         15000      1.49990E-12      2.67988E-01     -1.39165E-03
-         15100      1.50990E-12      2.92698E-01     -1.40138E-03
-         15200      1.51990E-12      2.84325E-01     -1.38615E-03
-         15300      1.52990E-12      2.89281E-01     -1.38255E-03
-         15400      1.53990E-12      2.80864E-01     -1.38941E-03
-         15500      1.54990E-12      3.00496E-01     -1.38705E-03
-         15600      1.55990E-12      2.98048E-01     -1.33872E-03
-         15700      1.56990E-12      3.13142E-01     -1.39668E-03
-         15800      1.57990E-12      2.97482E-01     -1.35433E-03
-         15900      1.58990E-12      3.00396E-01     -1.38998E-03
-         16000      1.59990E-12      3.13196E-01     -1.42345E-03
-         16100      1.60990E-12      3.10010E-01     -1.41297E-03
-         16200      1.61990E-12      3.05796E-01     -1.40175E-03
-         16300      1.62990E-12      2.99696E-01     -1.40795E-03
-         16400      1.63990E-12      3.00807E-01     -1.36900E-03
-         16500      1.64990E-12      3.10385E-01     -1.37079E-03
-         16600      1.65990E-12      3.12286E-01     -1.38395E-03
-         16700      1.66990E-12      3.17686E-01     -1.37218E-03
-         16800      1.67990E-12      3.11344E-01     -1.37373E-03
-         16900      1.68990E-12      3.00098E-01     -1.36867E-03
-         17000      1.69990E-12      2.91052E-01     -1.34886E-03
-         17100      1.70990E-12      2.57851E-01     -1.35253E-03
-         17200      1.71990E-12      2.80833E-01     -1.37853E-03
-         17300      1.72990E-12      2.64429E-01     -1.37699E-03
-         17400      1.73990E-12      2.73778E-01     -1.40996E-03
-         17500      1.74990E-12      2.52925E-01     -1.37228E-03
-         17600      1.75990E-12      2.53546E-01     -1.33495E-03
-         17700      1.76990E-12      2.25662E-01     -1.27164E-03
-         17800      1.77990E-12      2.26320E-01     -1.34670E-03
-         17900      1.78990E-12      1.99071E-01     -1.32890E-03
-         18000      1.79990E-12      2.10559E-01     -1.34404E-03
-         18100      1.80990E-12      2.10762E-01     -1.33865E-03
-         18200      1.81990E-12      2.21292E-01     -1.32804E-03
-         18300      1.82990E-12      2.28251E-01     -1.36628E-03
-         18400      1.83990E-12      2.36987E-01     -1.35605E-03
-         18500      1.84990E-12      2.23832E-01     -1.34460E-03
-         18600      1.85990E-12      2.13059E-01     -1.35134E-03
-         18700      1.86990E-12      1.96490E-01     -1.31806E-03
-         18800      1.87990E-12      2.04973E-01     -1.33795E-03
-         18900      1.88990E-12      2.07957E-01     -1.33485E-03
-         19000      1.89990E-12      1.97113E-01     -1.30664E-03
-         19100      1.90990E-12      2.05928E-01     -1.32344E-03
-         19200      1.91990E-12      2.16703E-01     -1.33479E-03
-         19300      1.92990E-12      2.19521E-01     -1.37803E-03
-         19400      1.93990E-12      2.12023E-01     -1.31646E-03
-         19500      1.94990E-12      2.26823E-01     -1.33989E-03
-         19600      1.95990E-12      2.29085E-01     -1.37524E-03
-         19700      1.96990E-12      2.31378E-01     -1.34852E-03
-         19800      1.97990E-12      2.24208E-01     -1.32559E-03
-         19900      1.98990E-12      2.14588E-01     -1.33850E-03
-         20000      1.99990E-12      2.20352E-01     -1.37690E-03
--------------------------------------------------------------------------------
  Summary of spin dynamics:
    At the end of the run, the average spin at each sublattice is
      Sublattice       <M_i>(x)  <M_i>(y)  <M_i>(z)  ||<M_i>||
-        0001          -0.07199  -0.10522   0.17973   0.22035
 
 
# Temperature              Cv             chi        BinderU4             Mst
    600.00000     6.89298E+03     2.08381E-01     0.63673E+00     2.51990E-01
================================================================================
 
================================================================================
 
-
- Proc.   0 individual time (sec): cpu=         16.6  wall=         16.6
 
================================================================================
 
+Total cpu time    796.239  and wall time    796.561 sec
 
 multibinit : the run completed succesfully.
