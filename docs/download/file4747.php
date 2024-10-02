#Band structeure


ndtset 2

kptopt1 1                    
chkprim1 0
chksymbreak1 0
ngkpt1 1 1 5
nband1 85
prtden1 1
toldfe1 1.0d-6
tsmear 0.01

ngkpt2 1 1 5
iscf2    -2
getden2  -1
kptopt2  -3
chksymbreak2 0
chkprim2 0
nband2 85
ndivk2 100 200 300
kptbounds2 0.0  0.0  0.5 # A point
           0.0  0.0  0.0 # Gamma point
           2/3  1/3  0 # K point
           1.0  1.0  1.0 # Gamma point in another cell.
           
tolwfr2  1.0d-6
enunit2  1 
prtbltztrp2 1
prtwf2 0
prtden2 1

#optimized cell characteristics
diemac 3.0
ecut 27
nstep 500
optforces 1
chkprim 0
#cell definition
acell 2.5000000000E+01  2.5000000000E+01  6.7498000000E+00 Bohr
     
natom 54
ntypat 2
znucl 6 1

rprim 1.0 0.0 0.0
      0.0 1.0 0.0
      0.0 0.0 1.0
typat 34*1 20*2         

xcart

  5.31348621676879E-01 -1.08561613801037E+00 -5.04190304807311E-01
  2.70368155480768E+00  3.03714556459898E+00 -5.81314124132970E-01
  3.82735783726761E+00 -2.80506472525551E-03  2.80438962607895E+00
  1.68707632289645E+00  9.78545433477046E-01  1.11650366642396E+00
 -1.53517729997005E+00  1.48734797857597E-01 -2.20728032221180E+00
 -5.35158709450139E+00  3.36501954336104E+00 -1.81255920682663E+00
 -2.36114310934841E+00  3.35848274718421E+00 -5.50042553664543E+00
 -3.41901429714129E-01  2.25111061586752E+00 -3.89255340005545E+00
  4.95639485521083E+00  2.15116029810514E+00 -2.26888714464353E+00
  9.42737084320171E-01  4.25893950406667E+00 -2.32462400728340E+00
  3.65898885451713E+00  5.00531130831549E+00 -5.72272177324666E+00
  5.82799485397169E+00  4.39449998527589E+00 -4.03545874679243E+00
 -4.51674640181835E+00  4.67508823935136E+00 -4.18041052089646E+00
  2.23654055131650E+00  6.43764354268943E+00 -3.70525994539458E+00
  5.55191692408330E-01 -6.06712671878124E+00  4.71073991017124E+00
 -3.75728517481860E+00 -4.20976433995682E+00  4.36124271980745E+00
 -6.46432124456574E-01 -3.15251535156304E+00  1.18308940803134E+00
  1.25113562087904E+00 -4.15720240910730E+00  3.11130283844894E+00
  7.28769397543232E+00 -3.83578203755259E+00  4.69086804300742E+00
  2.80116537505386E+00 -2.18017395335826E+00  4.47056661045817E+00
  6.00937318523984E+00 -9.78098875040615E-01  1.17294113022046E+00
  7.96236618090420E+00 -1.93197846938963E+00  3.05909147223984E+00
 -3.56977674085749E+00  1.43807705132087E+00 -5.64890521291244E-01
 -2.81416038003674E+00 -1.94604553769520E+00  2.79926816850593E+00
 -4.69193195251109E+00 -5.05503218001624E-01  1.21074640887019E+00
  7.08870121072522E+00  1.17810588256299E+00 -5.14777775504598E-01
 -1.80324624677607E+00 -5.31412276741892E+00  6.12020291556866E+00
  4.94124228470238E+00 -3.21405326384489E+00  6.11922931852980E+00
  9.33935277174344E+00 -9.52952216684571E-02  4.73288449773743E+00
  8.00008853528666E+00  3.56809167676065E+00  9.89882284211988E-01
  5.20167542668096E+00  7.21873940483151E+00 -3.17084065507840E+00
 -6.36855029793105E+00  5.05584253238504E+00  2.53850058823884E-01
 -5.82713246047283E+00 -5.59728487632615E+00  3.94004856410243E+00
 -7.11324313983945E+00 -3.94764612892848E-01  1.88102922701148E+00
  1.06583166102695E+01  1.30058463919664E+00  4.03772893915311E+00
  1.03692927850273E+01 -1.20680377130647E+00  6.13170169405853E+00
  8.37425376765769E+00  5.05951845336162E+00 -3.90317940694394E-01
  9.77338922144854E+00  3.27595834199268E+00  1.95454095845896E+00
  5.70069743435463E+00  8.51666092203499E+00 -4.71172840315981E+00
  6.01086087706851E+00  8.17659943860610E+00 -1.52614093896630E+00
 -1.32215314009128E+00  4.76520036977900E+00 -6.88061196474676E+00
  4.28160911570177E+00  6.46567700577137E+00 -6.88055309094482E+00
 -3.92399005330656E+00  6.58493448220658E+00 -3.58722249145021E+00
  1.02189671994689E+00  8.00028872573973E+00 -4.30957971274127E+00
  1.99958116832169E+00 -6.83376559338498E+00  5.95375153059234E+00
  8.77755535137345E+00 -4.54169883149674E+00  5.93522763152183E+00
 -2.63268811225315E+00 -6.79140376361880E+00  7.29308656777318E+00
  4.30554515511945E+00 -4.72941443992035E+00  7.37039473045102E+00
 -6.11252173844340E+00 -7.30118738460422E+00  5.04672957756812E+00
 -7.21417557168050E+00 -5.18476104660186E+00  2.50688738991684E+00
 -7.87661979106480E+00 -1.63940786043938E+00  3.28726987127349E+00
 -8.35503354489305E+00  9.02939830677699E-01  9.54749109235261E-01
 -8.30946503221599E+00  4.66730740182051E+00  8.08398945334253E-01
 -6.33530888549174E+00  7.04192554114931E+00 -3.54437552511874E-01
