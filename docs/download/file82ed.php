output_file = "relax.out"


pseudos = "/SCRATCH/acad/leds/jbouq/psps_paw_pbe/Eu.GGA_PBE-JTH.xml,
           /SCRATCH/acad/leds/jbouq/psps_paw_pbe/Sr.GGA_PBE-JTH.xml,
           /SCRATCH/acad/leds/jbouq/psps_paw_pbe/Al.GGA_PBE-JTH.xml,
           /SCRATCH/acad/leds/jbouq/psps_paw_pbe/O.GGA_PBE-JTH.xml,
           /SCRATCH/acad/leds/jbouq/psps_paw_pbe/N.GGA_PBE-JTH.xml,
           /SCRATCH/acad/leds/jbouq/psps_paw_pbe/Li.GGA_PBE-JTH.xml"


## paral
autoparal 1

### to help convergence

nnsclo 3
nline 15
tolrde 0.001

#######################################################################
#Common input variables

# Define the 4f7 electronic configuration
tolsym 1.0d-5
 occopt       2
 occ          528*1 7*1 20*0

              528*1 7*0 20*0

#Definition of the unit cell

acell    3*15.142961054391002  

rprim    1.000000000000000   0.000000000000000   0.000000000000000 
         0.000406637852814   0.999941264900934   0.000000000000000 
         0.000000000000000   0.000000000000000   4.798119628468135 
natom    216
ntypat   6 
typat    1*1 23*2 48*3 48*4 48*5 48*6 
znucl    63 38 13 8 7 3

xred     0.500000000000000   0.000000000000000   0.041666500000000 
         0.500000000000000   0.000000000000000   0.541666500000000 
         0.000000000000000   0.500000000000000  -0.000008500000000 
         0.000000000000000   0.500000000000000   0.499991500000000 
         0.500000000000000   0.000000000000000   0.374986000000000 
         0.500000000000000   0.000000000000000   0.874986000000000 
         0.500000000000000   0.000000000000000   0.458289000000000 
         0.500000000000000   0.000000000000000   0.958289000000000 
         0.500000000000000   0.000000000000000   0.125044500000000 
         0.500000000000000   0.000000000000000   0.625044500000000 
         0.500000000000000   0.000000000000000   0.208347500000000 
         0.500000000000000   0.000000000000000   0.708347500000000 
         0.500000000000000   0.000000000000000   0.291666500000000 
         0.500000000000000   0.000000000000000   0.791666500000000 
         0.000000000000000   0.500000000000000   0.333333333333333 
         0.000000000000000   0.500000000000000   0.833333333333333 
         0.000000000000000   0.500000000000000   0.416644000000000 
         0.000000000000000   0.500000000000000   0.916644000000000 
         0.000000000000000   0.500000000000000   0.083342000000000 
         0.000000000000000   0.500000000000000   0.583342000000000 
         0.000000000000000   0.500000000000000   0.166666666666667 
         0.000000000000000   0.500000000000000   0.666666666666667 
         0.000000000000000   0.500000000000000   0.250006000000000 
         0.000000000000000   0.500000000000000   0.750006000000000 
         0.353094000000000   0.684087000000000  -0.000001000000000 
         0.353094000000000   0.684087000000000   0.499999000000000 
         0.683990000000000   0.646852000000000   0.041666500000000 
         0.683990000000000   0.646852000000000   0.541666500000000 
         0.646906000000000   0.315913000000000  -0.000001000000000 
         0.646906000000000   0.315913000000000   0.499999000000000 
         0.316010000000000   0.353148000000000   0.041666500000000 
         0.316010000000000   0.353148000000000   0.541666500000000 
         0.353335000000000   0.684128000000000   0.333333333333333 
         0.353335000000000   0.684128000000000   0.833333333333333 
         0.353318000000000   0.684133000000000   0.416642500000000 
         0.353318000000000   0.684133000000000   0.916642500000000 
         0.353094000000000   0.684087000000000   0.083334500000000 
         0.353094000000000   0.684087000000000   0.583334500000000 
         0.353318000000000   0.684133000000000   0.166666666666667 
         0.353318000000000   0.684133000000000   0.666666666666667 
         0.353335000000000   0.684128000000000   0.250005000000000 
         0.353335000000000   0.684128000000000   0.750005000000000 
         0.684103000000000   0.646644000000000   0.374982500000000 
         0.684103000000000   0.646644000000000   0.874982500000000 
         0.684092000000000   0.646599000000000   0.458283000000000 
         0.684092000000000   0.646599000000000   0.958283000000000 
         0.684092000000000   0.646599000000000   0.125050500000000 
         0.684092000000000   0.646599000000000   0.625050500000000 
         0.684103000000000   0.646644000000000   0.208351000000000 
         0.684103000000000   0.646644000000000   0.708351000000000 
         0.684103000000000   0.646635000000000   0.291666500000000 
         0.684103000000000   0.646635000000000   0.791666500000000 
         0.646665000000000   0.315872000000000   0.333333333333333 
         0.646665000000000   0.315872000000000   0.833333333333333 
         0.646682000000000   0.315867000000000   0.416642500000000 
         0.646682000000000   0.315867000000000   0.916642500000000 
         0.646906000000000   0.315913000000000   0.083334500000000 
         0.646906000000000   0.315913000000000   0.583334500000000 
         0.646682000000000   0.315867000000000   0.166666666666667 
         0.646682000000000   0.315867000000000   0.666666666666667 
         0.646665000000000   0.315872000000000   0.250005000000000 
         0.646665000000000   0.315872000000000   0.750005000000000 
         0.315897000000000   0.353356000000000   0.374982500000000 
         0.315897000000000   0.353356000000000   0.874982500000000 
         0.315908000000000   0.353401000000000   0.458283000000000 
         0.315908000000000   0.353401000000000   0.958283000000000 
         0.315908000000000   0.353401000000000   0.125050500000000 
         0.315908000000000   0.353401000000000   0.625050500000000 
         0.315897000000000   0.353356000000000   0.208351000000000 
         0.315897000000000   0.353356000000000   0.708351000000000 
         0.315897000000000   0.353365000000000   0.291666500000000 
         0.315897000000000   0.353365000000000   0.791666500000000 
         0.255238000000000   0.892525000000000   0.499888500000000 
         0.255238000000000   0.892525000000000  -0.000111500000000 
         0.892749000000000   0.743514000000000   0.041666500000000 
         0.892749000000000   0.743514000000000   0.541666500000000 
         0.744762000000000   0.107475000000000   0.499888500000000 
         0.744762000000000   0.107475000000000  -0.000111500000000 
         0.107251000000000   0.256486000000000   0.041666500000000 
         0.107251000000000   0.256486000000000   0.541666500000000 
         0.256419000000000   0.892910000000000   0.333333333333333 
         0.256419000000000   0.892910000000000   0.833333333333333 
         0.256385000000000   0.892900000000000   0.416636000000000 
         0.256385000000000   0.892900000000000   0.916636000000000 
         0.255238000000000   0.892525000000000   0.083445000000000 
         0.255238000000000   0.892525000000000   0.583445000000000 
         0.256385000000000   0.892900000000000   0.166666666666667 
         0.256385000000000   0.892900000000000   0.666666666666667 
         0.256419000000000   0.892910000000000   0.250005500000000 
         0.256419000000000   0.892910000000000   0.750005500000000 
         0.892845000000000   0.743508000000000   0.374982500000000 
         0.892845000000000   0.743508000000000   0.874982500000000 
         0.892751000000000   0.743468000000000   0.458305000000000 
         0.892751000000000   0.743468000000000   0.958305000000000 
         0.892751000000000   0.743468000000000   0.125028000000000 
         0.892751000000000   0.743468000000000   0.625028000000000 
         0.892845000000000   0.743508000000000   0.208351000000000 
         0.892845000000000   0.743508000000000   0.708351000000000 
         0.892850000000000   0.743492000000000   0.291666500000000 
         0.892850000000000   0.743492000000000   0.791666500000000 
         0.743581000000000   0.107090000000000   0.333333333333333 
         0.743581000000000   0.107090000000000   0.833333333333333 
         0.743614000000000   0.107100000000000   0.416636000000000 
         0.743614000000000   0.107100000000000   0.916636000000000 
         0.744762000000000   0.107475000000000   0.083445000000000 
         0.744762000000000   0.107475000000000   0.583445000000000 
         0.743614000000000   0.107100000000000   0.166666666666667 
         0.743614000000000   0.107100000000000   0.666666666666667 
         0.743581000000000   0.107090000000000   0.250005500000000 
         0.743581000000000   0.107090000000000   0.750005500000000 
         0.107155000000000   0.256492000000000   0.374982500000000 
         0.107155000000000   0.256492000000000   0.874982500000000 
         0.107249000000000   0.256532000000000   0.458305000000000 
         0.107249000000000   0.256532000000000   0.958305000000000 
         0.107249000000000   0.256532000000000   0.125028000000000 
         0.107249000000000   0.256532000000000   0.625028000000000 
         0.107155000000000   0.256492000000000   0.208351000000000 
         0.107155000000000   0.256492000000000   0.708351000000000 
         0.107150000000000   0.256508000000000   0.291666500000000 
         0.107150000000000   0.256508000000000   0.791666500000000 
         0.584417000000000   0.728744000000000  -0.000051500000000 
         0.584417000000000   0.728744000000000   0.499948500000000 
         0.729042000000000   0.415539000000000   0.041666500000000 
         0.729042000000000   0.415539000000000   0.541666500000000 
         0.415583000000000   0.271256000000000  -0.000051500000000 
         0.415583000000000   0.271256000000000   0.499948500000000 
         0.270958000000000   0.584461000000000   0.041666500000000 
         0.270958000000000   0.584461000000000   0.541666500000000 
         0.584563000000000   0.728982000000000   0.333333333333333 
         0.584563000000000   0.728982000000000   0.833333333333333 
         0.584543000000000   0.729002000000000   0.416637000000000 
         0.584543000000000   0.729002000000000   0.916637000000000 
         0.584417000000000   0.728744000000000   0.083385000000000 
         0.584417000000000   0.728744000000000   0.583385000000000 
         0.584543000000000   0.729002000000000   0.166666666666667 
         0.584543000000000   0.729002000000000   0.666666666666667 
         0.584563000000000   0.728982000000000   0.250009500000000 
         0.584563000000000   0.728982000000000   0.750009500000000 
         0.728984000000000   0.415393000000000   0.374987000000000 
         0.728984000000000   0.415393000000000   0.874987000000000 
         0.729003000000000   0.415397000000000   0.458302500000000 
         0.729003000000000   0.415397000000000   0.958302500000000 
         0.729003000000000   0.415397000000000   0.125031000000000 
         0.729003000000000   0.415397000000000   0.625031000000000 
         0.728984000000000   0.415393000000000   0.208346000000000 
         0.728984000000000   0.415393000000000   0.708346000000000 
         0.728964000000000   0.415374000000000   0.291666500000000 
         0.728964000000000   0.415374000000000   0.791666500000000 
         0.415437000000000   0.271018000000000   0.333333333333333 
         0.415437000000000   0.271018000000000   0.833333333333333 
         0.415457000000000   0.270998000000000   0.416637000000000 
         0.415457000000000   0.270998000000000   0.916637000000000 
         0.415583000000000   0.271256000000000   0.083385000000000 
         0.415583000000000   0.271256000000000   0.583385000000000 
         0.415457000000000   0.270998000000000   0.166666666666667 
         0.415457000000000   0.270998000000000   0.666666666666667 
         0.415437000000000   0.271018000000000   0.250009500000000 
         0.415437000000000   0.271018000000000   0.750009500000000 
         0.271016000000000   0.584607000000000   0.374987000000000 
         0.271016000000000   0.584607000000000   0.874987000000000 
         0.270997000000000   0.584603000000000   0.458302500000000 
         0.270997000000000   0.584603000000000   0.958302500000000 
         0.270997000000000   0.584603000000000   0.125031000000000 
         0.270997000000000   0.584603000000000   0.625031000000000 
         0.271016000000000   0.584607000000000   0.208346000000000 
         0.271016000000000   0.584607000000000   0.708346000000000 
         0.271036000000000   0.584626000000000   0.291666500000000 
         0.271036000000000   0.584626000000000   0.791666500000000 
         0.125984000000000   0.822953000000000   0.041666500000000 
         0.125984000000000   0.822953000000000   0.541666500000000 
         0.823232000000000   0.873737000000000  -0.000013500000000 
         0.823232000000000   0.873737000000000   0.499986500000000 
         0.874016000000000   0.177047000000000   0.041666500000000 
         0.874016000000000   0.177047000000000   0.541666500000000 
         0.176768000000000   0.126263000000000  -0.000013500000000 
         0.176768000000000   0.126263000000000   0.499986500000000 
         0.126331000000000   0.823021000000000   0.374980000000000 
         0.126331000000000   0.823021000000000   0.874980000000000 
         0.126057000000000   0.822871000000000   0.458249500000000 
         0.126057000000000   0.822871000000000   0.958249500000000 
         0.126057000000000   0.822871000000000   0.125084000000000 
         0.126057000000000   0.822871000000000   0.625084000000000 
         0.126331000000000   0.823021000000000   0.208353500000000 
         0.126331000000000   0.823021000000000   0.708353500000000 
         0.126339000000000   0.823010000000000   0.291666500000000 
         0.126339000000000   0.823010000000000   0.791666500000000 
         0.823021000000000   0.873639000000000   0.333333333333333 
         0.823021000000000   0.873639000000000   0.833333333333333 
         0.822976000000000   0.873651000000000   0.416641500000000 
         0.822976000000000   0.873651000000000   0.916641500000000 
         0.823232000000000   0.873737000000000   0.083347000000000 
         0.823232000000000   0.873737000000000   0.583347000000000 
         0.822976000000000   0.873651000000000   0.166666666666667 
         0.822976000000000   0.873651000000000   0.666666666666667 
         0.823021000000000   0.873639000000000   0.250008500000000 
         0.823021000000000   0.873639000000000   0.750008500000000 
         0.873669000000000   0.176979000000000   0.374980000000000 
         0.873669000000000   0.176979000000000   0.874980000000000 
         0.873943000000000   0.177129000000000   0.458249500000000 
         0.873943000000000   0.177129000000000   0.958249500000000 
         0.873943000000000   0.177129000000000   0.125084000000000 
         0.873943000000000   0.177129000000000   0.625084000000000 
         0.873669000000000   0.176979000000000   0.208353500000000 
         0.873669000000000   0.176979000000000   0.708353500000000 
         0.873661000000000   0.176990000000000   0.291666500000000 
         0.873661000000000   0.176990000000000   0.791666500000000 
         0.176979000000000   0.126361000000000   0.333333333333333 
         0.176979000000000   0.126361000000000   0.833333333333333 
         0.177024000000000   0.126349000000000   0.416641500000000 
         0.177024000000000   0.126349000000000   0.916641500000000 
         0.176768000000000   0.126263000000000   0.083347000000000 
         0.176768000000000   0.126263000000000   0.583347000000000 
         0.177024000000000   0.126349000000000   0.166666666666667 
         0.177024000000000   0.126349000000000   0.666666666666667 
         0.176979000000000   0.126361000000000   0.250008500000000 
         0.176979000000000   0.126361000000000   0.750008500000000 

#Definition of the: planewave basis set

ecut 20
pawecutdg 40
ecutsm 0.5

#Gives the number of band, explicitely 
  nband   *555


#Definition of the k-point grid
kptopt 0
nkpt 1
kpt 0 0 0 


# Define the SCF
 nstep   1000
 toldff   5.0d-5
 diemac   4.0



# Define the spin polarization

  spinat   0 0 7 645*0 
  nsppol   2
  nspden   2


# DFT+U
 usepawu   1
 lpawu  3 -1 -1 -1 -1 -1 
 upawu  7 0 0 0 0 0  eV
 jpawu  0.7 0 0 0 0 0  eV



