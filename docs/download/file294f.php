  
ndtset   95


#
# DATASET 1 : make ground state wavefunctions and density
# 

prtden1 1
nline1 8
kptopt1   1          
tolwfr1 1.0d-22 


#
# OTHER DATASETS: construct the wavefunctions at k+q and calculate full dynamical matrix at each q
# 
   
iscf2 -3   tolwfr2 1.0d-22    getden2 1   kptopt2 2   nqpt2 1   qpt2 0.00000000E+00  0.00000000E+00  0.00000000E+00
rfatpol3  1 1    rfdir3  1 1 1    rfphon3 1    tolvrs3 1.0d-8    getwfk3 1    getwfq3 2    kptopt3 2    nqpt3 1    qpt3 0.00000000E+00  0.00000000E+00  0.00000000E+00
    
iscf4 -3    tolwfr4 1.0d-22     getden4 1    kptopt4 3    nqpt4 1    qpt4 1.00000000E-01  0.00000000E+00  0.00000000E+00
rfatpol5 1 1    rfdir5  1 1 1    rfphon5  1    tolvrs5 1.0d-8   getwfk5 1    getwfq5  4     kptopt5 3     nqpt5 1     qpt5 1.00000000E-01  0.00000000E+00  0.00000000E+00
    
iscf6 -3    tolwfr6 1.0d-22     getden6 1    kptopt6 3    nqpt6 1    qpt6 2.00000000E-01  0.00000000E+00  0.00000000E+00
rfatpol7 1 1    rfdir7  1 1 1    rfphon7  1    tolvrs7 1.0d-8   getwfk7 1    getwfq7  6     kptopt7 3     nqpt7 1     qpt7 2.00000000E-01  0.00000000E+00  0.00000000E+00
    
iscf8 -3    tolwfr8 1.0d-22     getden8 1    kptopt8 3    nqpt8 1    qpt8 3.00000000E-01  0.00000000E+00  0.00000000E+00
rfatpol9 1 1    rfdir9  1 1 1    rfphon9  1    tolvrs9 1.0d-8   getwfk9 1    getwfq9  8     kptopt9 3     nqpt9 1     qpt9 3.00000000E-01  0.00000000E+00  0.00000000E+00
    
iscf10 -3    tolwfr10 1.0d-22     getden10 1    kptopt10 3    nqpt10 1    qpt10 4.00000000E-01  0.00000000E+00  0.00000000E+00
rfatpol11 1 1    rfdir11  1 1 1    rfphon11  1    tolvrs11 1.0d-8   getwfk11 1    getwfq11  10     kptopt11 3     nqpt11 1     qpt11 4.00000000E-01  0.00000000E+00  0.00000000E+00
    
iscf12 -3    tolwfr12 1.0d-22     getden12 1    kptopt12 3    nqpt12 1    qpt12 5.00000000E-01  0.00000000E+00  0.00000000E+00
rfatpol13 1 1    rfdir13  1 1 1    rfphon13  1    tolvrs13 1.0d-8   getwfk13 1    getwfq13  12     kptopt13 3     nqpt13 1     qpt13 5.00000000E-01  0.00000000E+00  0.00000000E+00
    
iscf14 -3    tolwfr14 1.0d-22     getden14 1    kptopt14 3    nqpt14 1    qpt14 1.00000000E-01  1.00000000E-01  0.00000000E+00
rfatpol15 1 1    rfdir15  1 1 1    rfphon15  1    tolvrs15 1.0d-8   getwfk15 1    getwfq15  14     kptopt15 3     nqpt15 1     qpt15 1.00000000E-01  1.00000000E-01  0.00000000E+00
    
iscf16 -3    tolwfr16 1.0d-22     getden16 1    kptopt16 3    nqpt16 1    qpt16 2.00000000E-01  1.00000000E-01  0.00000000E+00
rfatpol17 1 1    rfdir17  1 1 1    rfphon17  1    tolvrs17 1.0d-8   getwfk17 1    getwfq17  16     kptopt17 3     nqpt17 1     qpt17 2.00000000E-01  1.00000000E-01  0.00000000E+00
    
iscf18 -3    tolwfr18 1.0d-22     getden18 1    kptopt18 3    nqpt18 1    qpt18 3.00000000E-01  1.00000000E-01  0.00000000E+00
rfatpol19 1 1    rfdir19  1 1 1    rfphon19  1    tolvrs19 1.0d-8   getwfk19 1    getwfq19  18     kptopt19 3     nqpt19 1     qpt19 3.00000000E-01  1.00000000E-01  0.00000000E+00
    
iscf20 -3    tolwfr20 1.0d-22     getden20 1    kptopt20 3    nqpt20 1    qpt20 4.00000000E-01  1.00000000E-01  0.00000000E+00
rfatpol21 1 1    rfdir21  1 1 1    rfphon21  1    tolvrs21 1.0d-8   getwfk21 1    getwfq21  20     kptopt21 3     nqpt21 1     qpt21 4.00000000E-01  1.00000000E-01  0.00000000E+00
    
iscf22 -3    tolwfr22 1.0d-22     getden22 1    kptopt22 3    nqpt22 1    qpt22 5.00000000E-01  1.00000000E-01  0.00000000E+00
rfatpol23 1 1    rfdir23  1 1 1    rfphon23  1    tolvrs23 1.0d-8   getwfk23 1    getwfq23  22     kptopt23 3     nqpt23 1     qpt23 5.00000000E-01  1.00000000E-01  0.00000000E+00
    
iscf24 -3    tolwfr24 1.0d-22     getden24 1    kptopt24 3    nqpt24 1    qpt24 -4.00000000E-01  1.00000000E-01  0.00000000E+00
rfatpol25 1 1    rfdir25  1 1 1    rfphon25  1    tolvrs25 1.0d-8   getwfk25 1    getwfq25  24     kptopt25 3     nqpt25 1     qpt25 -4.00000000E-01  1.00000000E-01  0.00000000E+00
    
iscf26 -3    tolwfr26 1.0d-22     getden26 1    kptopt26 3    nqpt26 1    qpt26 -3.00000000E-01  1.00000000E-01  0.00000000E+00
rfatpol27 1 1    rfdir27  1 1 1    rfphon27  1    tolvrs27 1.0d-8   getwfk27 1    getwfq27  26     kptopt27 3     nqpt27 1     qpt27 -3.00000000E-01  1.00000000E-01  0.00000000E+00
    
iscf28 -3    tolwfr28 1.0d-22     getden28 1    kptopt28 3    nqpt28 1    qpt28 -2.00000000E-01  1.00000000E-01  0.00000000E+00
rfatpol29 1 1    rfdir29  1 1 1    rfphon29  1    tolvrs29 1.0d-8   getwfk29 1    getwfq29  28     kptopt29 3     nqpt29 1     qpt29 -2.00000000E-01  1.00000000E-01  0.00000000E+00
    
iscf30 -3    tolwfr30 1.0d-22     getden30 1    kptopt30 3    nqpt30 1    qpt30 -1.00000000E-01  1.00000000E-01  0.00000000E+00
rfatpol31 1 1    rfdir31  1 1 1    rfphon31  1    tolvrs31 1.0d-8   getwfk31 1    getwfq31  30     kptopt31 3     nqpt31 1     qpt31 -1.00000000E-01  1.00000000E-01  0.00000000E+00
    
iscf32 -3    tolwfr32 1.0d-22     getden32 1    kptopt32 3    nqpt32 1    qpt32 2.00000000E-01  2.00000000E-01  0.00000000E+00
rfatpol33 1 1    rfdir33  1 1 1    rfphon33  1    tolvrs33 1.0d-8   getwfk33 1    getwfq33  32     kptopt33 3     nqpt33 1     qpt33 2.00000000E-01  2.00000000E-01  0.00000000E+00
    
iscf34 -3    tolwfr34 1.0d-22     getden34 1    kptopt34 3    nqpt34 1    qpt34 3.00000000E-01  2.00000000E-01  0.00000000E+00
rfatpol35 1 1    rfdir35  1 1 1    rfphon35  1    tolvrs35 1.0d-8   getwfk35 1    getwfq35  34     kptopt35 3     nqpt35 1     qpt35 3.00000000E-01  2.00000000E-01  0.00000000E+00
    
iscf36 -3    tolwfr36 1.0d-22     getden36 1    kptopt36 3    nqpt36 1    qpt36 4.00000000E-01  2.00000000E-01  0.00000000E+00
rfatpol37 1 1    rfdir37  1 1 1    rfphon37  1    tolvrs37 1.0d-8   getwfk37 1    getwfq37  36     kptopt37 3     nqpt37 1     qpt37 4.00000000E-01  2.00000000E-01  0.00000000E+00
    
iscf38 -3    tolwfr38 1.0d-22     getden38 1    kptopt38 3    nqpt38 1    qpt38 5.00000000E-01  2.00000000E-01  0.00000000E+00
rfatpol39 1 1    rfdir39  1 1 1    rfphon39  1    tolvrs39 1.0d-8   getwfk39 1    getwfq39  38     kptopt39 3     nqpt39 1     qpt39 5.00000000E-01  2.00000000E-01  0.00000000E+00
    
iscf40 -3    tolwfr40 1.0d-22     getden40 1    kptopt40 3    nqpt40 1    qpt40 -4.00000000E-01  2.00000000E-01  0.00000000E+00
rfatpol41 1 1    rfdir41  1 1 1    rfphon41  1    tolvrs41 1.0d-8   getwfk41 1    getwfq41  40     kptopt41 3     nqpt41 1     qpt41 -4.00000000E-01  2.00000000E-01  0.00000000E+00
    
iscf42 -3    tolwfr42 1.0d-22     getden42 1    kptopt42 3    nqpt42 1    qpt42 -3.00000000E-01  2.00000000E-01  0.00000000E+00
rfatpol43 1 1    rfdir43  1 1 1    rfphon43  1    tolvrs43 1.0d-8   getwfk43 1    getwfq43  42     kptopt43 3     nqpt43 1     qpt43 -3.00000000E-01  2.00000000E-01  0.00000000E+00
    
iscf44 -3    tolwfr44 1.0d-22     getden44 1    kptopt44 3    nqpt44 1    qpt44 -2.00000000E-01  2.00000000E-01  0.00000000E+00
rfatpol45 1 1    rfdir45  1 1 1    rfphon45  1    tolvrs45 1.0d-8   getwfk45 1    getwfq45  44     kptopt45 3     nqpt45 1     qpt45 -2.00000000E-01  2.00000000E-01  0.00000000E+00
    
iscf46 -3    tolwfr46 1.0d-22     getden46 1    kptopt46 3    nqpt46 1    qpt46 3.00000000E-01  3.00000000E-01  0.00000000E+00
rfatpol47 1 1    rfdir47  1 1 1    rfphon47  1    tolvrs47 1.0d-8   getwfk47 1    getwfq47  46     kptopt47 3     nqpt47 1     qpt47 3.00000000E-01  3.00000000E-01  0.00000000E+00
    
iscf48 -3    tolwfr48 1.0d-22     getden48 1    kptopt48 3    nqpt48 1    qpt48 4.00000000E-01  3.00000000E-01  0.00000000E+00
rfatpol49 1 1    rfdir49  1 1 1    rfphon49  1    tolvrs49 1.0d-8   getwfk49 1    getwfq49  48     kptopt49 3     nqpt49 1     qpt49 4.00000000E-01  3.00000000E-01  0.00000000E+00
    
iscf50 -3    tolwfr50 1.0d-22     getden50 1    kptopt50 3    nqpt50 1    qpt50 5.00000000E-01  3.00000000E-01  0.00000000E+00
rfatpol51 1 1    rfdir51  1 1 1    rfphon51  1    tolvrs51 1.0d-8   getwfk51 1    getwfq51  50     kptopt51 3     nqpt51 1     qpt51 5.00000000E-01  3.00000000E-01  0.00000000E+00
    
iscf52 -3    tolwfr52 1.0d-22     getden52 1    kptopt52 3    nqpt52 1    qpt52 -4.00000000E-01  3.00000000E-01  0.00000000E+00
rfatpol53 1 1    rfdir53  1 1 1    rfphon53  1    tolvrs53 1.0d-8   getwfk53 1    getwfq53  52     kptopt53 3     nqpt53 1     qpt53 -4.00000000E-01  3.00000000E-01  0.00000000E+00
    
iscf54 -3    tolwfr54 1.0d-22     getden54 1    kptopt54 3    nqpt54 1    qpt54 -3.00000000E-01  3.00000000E-01  0.00000000E+00
rfatpol55 1 1    rfdir55  1 1 1    rfphon55  1    tolvrs55 1.0d-8   getwfk55 1    getwfq55  54     kptopt55 3     nqpt55 1     qpt55 -3.00000000E-01  3.00000000E-01  0.00000000E+00
    
iscf56 -3    tolwfr56 1.0d-22     getden56 1    kptopt56 3    nqpt56 1    qpt56 4.00000000E-01  4.00000000E-01  0.00000000E+00
rfatpol57 1 1    rfdir57  1 1 1    rfphon57  1    tolvrs57 1.0d-8   getwfk57 1    getwfq57  56     kptopt57 3     nqpt57 1     qpt57 4.00000000E-01  4.00000000E-01  0.00000000E+00
    
iscf58 -3    tolwfr58 1.0d-22     getden58 1    kptopt58 3    nqpt58 1    qpt58 5.00000000E-01  4.00000000E-01  0.00000000E+00
rfatpol59 1 1    rfdir59  1 1 1    rfphon59  1    tolvrs59 1.0d-8   getwfk59 1    getwfq59  58     kptopt59 3     nqpt59 1     qpt59 5.00000000E-01  4.00000000E-01  0.00000000E+00
    
iscf60 -3    tolwfr60 1.0d-22     getden60 1    kptopt60 3    nqpt60 1    qpt60 -4.00000000E-01  4.00000000E-01  0.00000000E+00
rfatpol61 1 1    rfdir61  1 1 1    rfphon61  1    tolvrs61 1.0d-8   getwfk61 1    getwfq61  60     kptopt61 3     nqpt61 1     qpt61 -4.00000000E-01  4.00000000E-01  0.00000000E+00
    
iscf62 -3    tolwfr62 1.0d-22     getden62 1    kptopt62 3    nqpt62 1    qpt62 5.00000000E-01  5.00000000E-01  0.00000000E+00
rfatpol63 1 1    rfdir63  1 1 1    rfphon63  1    tolvrs63 1.0d-8   getwfk63 1    getwfq63  62     kptopt63 3     nqpt63 1     qpt63 5.00000000E-01  5.00000000E-01  0.00000000E+00
    
iscf64 -3    tolwfr64 1.0d-22     getden64 1    kptopt64 3    nqpt64 1    qpt64 3.00000000E-01  2.00000000E-01  1.00000000E-01
rfatpol65 1 1    rfdir65  1 1 1    rfphon65  1    tolvrs65 1.0d-8   getwfk65 1    getwfq65  64     kptopt65 3     nqpt65 1     qpt65 3.00000000E-01  2.00000000E-01  1.00000000E-01
    
iscf66 -3    tolwfr66 1.0d-22     getden66 1    kptopt66 3    nqpt66 1    qpt66 4.00000000E-01  2.00000000E-01  1.00000000E-01
rfatpol67 1 1    rfdir67  1 1 1    rfphon67  1    tolvrs67 1.0d-8   getwfk67 1    getwfq67  66     kptopt67 3     nqpt67 1     qpt67 4.00000000E-01  2.00000000E-01  1.00000000E-01
    
iscf68 -3    tolwfr68 1.0d-22     getden68 1    kptopt68 3    nqpt68 1    qpt68 5.00000000E-01  2.00000000E-01  1.00000000E-01
rfatpol69 1 1    rfdir69  1 1 1    rfphon69  1    tolvrs69 1.0d-8   getwfk69 1    getwfq69  68     kptopt69 3     nqpt69 1     qpt69 5.00000000E-01  2.00000000E-01  1.00000000E-01
    
iscf70 -3    tolwfr70 1.0d-22     getden70 1    kptopt70 3    nqpt70 1    qpt70 -4.00000000E-01  2.00000000E-01  1.00000000E-01
rfatpol71 1 1    rfdir71  1 1 1    rfphon71  1    tolvrs71 1.0d-8   getwfk71 1    getwfq71  70     kptopt71 3     nqpt71 1     qpt71 -4.00000000E-01  2.00000000E-01  1.00000000E-01
    
iscf72 -3    tolwfr72 1.0d-22     getden72 1    kptopt72 3    nqpt72 1    qpt72 4.00000000E-01  3.00000000E-01  1.00000000E-01
rfatpol73 1 1    rfdir73  1 1 1    rfphon73  1    tolvrs73 1.0d-8   getwfk73 1    getwfq73  72     kptopt73 3     nqpt73 1     qpt73 4.00000000E-01  3.00000000E-01  1.00000000E-01
    
iscf74 -3    tolwfr74 1.0d-22     getden74 1    kptopt74 3    nqpt74 1    qpt74 5.00000000E-01  3.00000000E-01  1.00000000E-01
rfatpol75 1 1    rfdir75  1 1 1    rfphon75  1    tolvrs75 1.0d-8   getwfk75 1    getwfq75  74     kptopt75 3     nqpt75 1     qpt75 5.00000000E-01  3.00000000E-01  1.00000000E-01
    
iscf76 -3    tolwfr76 1.0d-22     getden76 1    kptopt76 3    nqpt76 1    qpt76 -4.00000000E-01  3.00000000E-01  1.00000000E-01
rfatpol77 1 1    rfdir77  1 1 1    rfphon77  1    tolvrs77 1.0d-8   getwfk77 1    getwfq77  76     kptopt77 3     nqpt77 1     qpt77 -4.00000000E-01  3.00000000E-01  1.00000000E-01
    
iscf78 -3    tolwfr78 1.0d-22     getden78 1    kptopt78 3    nqpt78 1    qpt78 -3.00000000E-01  3.00000000E-01  1.00000000E-01
rfatpol79 1 1    rfdir79  1 1 1    rfphon79  1    tolvrs79 1.0d-8   getwfk79 1    getwfq79  78     kptopt79 3     nqpt79 1     qpt79 -3.00000000E-01  3.00000000E-01  1.00000000E-01
    
iscf80 -3    tolwfr80 1.0d-22     getden80 1    kptopt80 3    nqpt80 1    qpt80 -2.00000000E-01  3.00000000E-01  1.00000000E-01
rfatpol81 1 1    rfdir81  1 1 1    rfphon81  1    tolvrs81 1.0d-8   getwfk81 1    getwfq81  80     kptopt81 3     nqpt81 1     qpt81 -2.00000000E-01  3.00000000E-01  1.00000000E-01
    
iscf82 -3    tolwfr82 1.0d-22     getden82 1    kptopt82 3    nqpt82 1    qpt82 5.00000000E-01  4.00000000E-01  1.00000000E-01
rfatpol83 1 1    rfdir83  1 1 1    rfphon83  1    tolvrs83 1.0d-8   getwfk83 1    getwfq83  82     kptopt83 3     nqpt83 1     qpt83 5.00000000E-01  4.00000000E-01  1.00000000E-01
    
iscf84 -3    tolwfr84 1.0d-22     getden84 1    kptopt84 3    nqpt84 1    qpt84 -4.00000000E-01  4.00000000E-01  1.00000000E-01
rfatpol85 1 1    rfdir85  1 1 1    rfphon85  1    tolvrs85 1.0d-8   getwfk85 1    getwfq85  84     kptopt85 3     nqpt85 1     qpt85 -4.00000000E-01  4.00000000E-01  1.00000000E-01
    
iscf86 -3    tolwfr86 1.0d-22     getden86 1    kptopt86 3    nqpt86 1    qpt86 -3.00000000E-01  4.00000000E-01  1.00000000E-01
rfatpol87 1 1    rfdir87  1 1 1    rfphon87  1    tolvrs87 1.0d-8   getwfk87 1    getwfq87  86     kptopt87 3     nqpt87 1     qpt87 -3.00000000E-01  4.00000000E-01  1.00000000E-01
    
iscf88 -3    tolwfr88 1.0d-22     getden88 1    kptopt88 3    nqpt88 1    qpt88 -4.00000000E-01  5.00000000E-01  1.00000000E-01
rfatpol89 1 1    rfdir89  1 1 1    rfphon89  1    tolvrs89 1.0d-8   getwfk89 1    getwfq89  88     kptopt89 3     nqpt89 1     qpt89 -4.00000000E-01  5.00000000E-01  1.00000000E-01
    
iscf90 -3    tolwfr90 1.0d-22     getden90 1    kptopt90 3    nqpt90 1    qpt90 -4.00000000E-01  4.00000000E-01  2.00000000E-01
rfatpol91 1 1    rfdir91  1 1 1    rfphon91  1    tolvrs91 1.0d-8   getwfk91 1    getwfq91  90     kptopt91 3     nqpt91 1     qpt91 -4.00000000E-01  4.00000000E-01  2.00000000E-01
    
iscf92 -3    tolwfr92 1.0d-22     getden92 1    kptopt92 3    nqpt92 1    qpt92 -3.00000000E-01  4.00000000E-01  2.00000000E-01
rfatpol93 1 1    rfdir93  1 1 1    rfphon93  1    tolvrs93 1.0d-8   getwfk93 1    getwfq93  92     kptopt93 3     nqpt93 1     qpt93 -3.00000000E-01  4.00000000E-01  2.00000000E-01
    
iscf94 -3    tolwfr94 1.0d-22     getden94 1    kptopt94 3    nqpt94 1    qpt94 -3.00000000E-01  5.00000000E-01  2.00000000E-01
rfatpol95 1 1    rfdir95  1 1 1    rfphon95  1    tolvrs95 1.0d-8   getwfk95 1    getwfq95  94     kptopt95 3     nqpt95 1     qpt95 -3.00000000E-01  5.00000000E-01  2.00000000E-01
    
#######################################################################
#Common input variables

  
acell   3*6.7446534176
rprim 0.0 0.5 0.5
      0.5 0.0 0.5
      0.5 0.5 0.0

ntypat  1
znucl  29
natom   1
typat   1
xred  0.0 0.0 0.0


occopt 4
tsmear 0.01


ecut  40

ngkpt  10 10 10
nshiftk  4
shiftk 0.5 0.5 0.5
       0.5 0.0 0.0
       0.0 0.5 0.0
       0.0 0.0 0.5
        
iscf 3
nstep 35 


#######################################################################
# Parallel run (de-activated for the moment)


paral_kgb 0

npband 2
npfft 1
npkpt 2

wfoptalg 4
fftalg 401 
fft_opt_lob 2 
nloalg 4

istwfk 110*1



