#
#  the sequence of datasets makes the ground states and
#   all of the explicit perturbations of the single
#   Al atom in all directions, for the irreducible
#   qpoints in a 2x2x2 grid.
#
#  Note that the q-point grid must be a sub-grid of the k-point grid (here 4x4x4)
#
ndtset 58
#jdtset 1 
#
# DATASET 1 : make ground state wavefunctions and density
# 
toldfe1  1.0d-13
#tolwfr1  1.0d-24
#tolvrs1 1.0e-24
#nline1   10       # This is to expedite the convergence of higher-lying bands
rfphon1  0       # for DS1 do _not_ do perturbation
nqpt1    0       # for DS1 do _not_ do perturbation
prtwf1   1       # need GS wavefunctions for further runs
getwfk1  0
kptopt1  4
# enforce calculation of forces at each SCF step
optforces 1

#qpt2   0.0 0.0 0.0
#qpt3   0.5 0.0 0.0
#qpt4   0.5 0.5 0.0
qpt2          0.00000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
qpt3          0.10000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
qpt4          0.20000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
qpt5          0.30000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
qpt6          0.40000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
qpt7          0.50000000000000D+00  0.00000000000000D+00  0.00000000000000D+00
qpt8          0.10000000000000D+00  0.10000000000000D+00  0.00000000000000D+00
qpt9          0.20000000000000D+00  0.10000000000000D+00  0.00000000000000D+00
qpt10         0.30000000000000D+00  0.10000000000000D+00  0.00000000000000D+00
qpt11         0.40000000000000D+00  0.10000000000000D+00  0.00000000000000D+00
qpt12         0.50000000000000D+00  0.10000000000000D+00  0.00000000000000D+00
qpt13        -0.40000000000000D+00  0.10000000000000D+00  0.00000000000000D+00
qpt14        -0.30000000000000D+00  0.10000000000000D+00  0.00000000000000D+00
qpt15         0.20000000000000D+00  0.20000000000000D+00  0.00000000000000D+00
qpt16         0.30000000000000D+00  0.20000000000000D+00  0.00000000000000D+00
qpt17         0.40000000000000D+00  0.20000000000000D+00  0.00000000000000D+00
qpt18         0.50000000000000D+00  0.20000000000000D+00  0.00000000000000D+00
qpt19         0.30000000000000D+00  0.30000000000000D+00  0.00000000000000D+00
qpt20         0.10000000000000D+00  0.10000000000000D+00  0.10000000000000D+00
qpt21         0.20000000000000D+00  0.10000000000000D+00  0.10000000000000D+00
qpt22         0.30000000000000D+00  0.10000000000000D+00  0.10000000000000D+00
qpt23         0.40000000000000D+00  0.10000000000000D+00  0.10000000000000D+00
qpt24        -0.10000000000000D+00  0.10000000000000D+00  0.10000000000000D+00
qpt25         0.20000000000000D+00  0.20000000000000D+00  0.10000000000000D+00
qpt26         0.30000000000000D+00  0.20000000000000D+00  0.10000000000000D+00
qpt27         0.40000000000000D+00  0.20000000000000D+00  0.10000000000000D+00
qpt28        -0.20000000000000D+00  0.20000000000000D+00  0.10000000000000D+00
qpt29         0.30000000000000D+00  0.30000000000000D+00  0.10000000000000D+00
qpt30        -0.30000000000000D+00  0.30000000000000D+00  0.10000000000000D+00
qpt31        -0.20000000000000D+00  0.30000000000000D+00  0.10000000000000D+00
qpt32        -0.40000000000000D+00  0.40000000000000D+00  0.10000000000000D+00
qpt33        -0.30000000000000D+00  0.40000000000000D+00  0.10000000000000D+00
qpt34        -0.20000000000000D+00  0.40000000000000D+00  0.10000000000000D+00
qpt35         0.50000000000000D+00  0.50000000000000D+00  0.10000000000000D+00
qpt36        -0.40000000000000D+00  0.50000000000000D+00  0.10000000000000D+00
qpt37        -0.30000000000000D+00  0.50000000000000D+00  0.10000000000000D+00
qpt38        -0.20000000000000D+00  0.50000000000000D+00  0.10000000000000D+00
qpt39        -0.40000000000000D+00 -0.40000000000000D+00  0.10000000000000D+00
qpt40         0.20000000000000D+00  0.20000000000000D+00  0.20000000000000D+00
qpt41         0.30000000000000D+00  0.20000000000000D+00  0.20000000000000D+00
qpt42        -0.20000000000000D+00  0.20000000000000D+00  0.20000000000000D+00
qpt43        -0.30000000000000D+00  0.30000000000000D+00  0.20000000000000D+00
qpt44        -0.40000000000000D+00  0.40000000000000D+00  0.20000000000000D+00
qpt45        -0.30000000000000D+00  0.40000000000000D+00  0.20000000000000D+00
qpt46         0.50000000000000D+00  0.50000000000000D+00  0.20000000000000D+00
qpt47        -0.40000000000000D+00  0.50000000000000D+00  0.20000000000000D+00
qpt48        -0.30000000000000D+00  0.50000000000000D+00  0.20000000000000D+00
qpt49        -0.40000000000000D+00 -0.40000000000000D+00  0.20000000000000D+00
qpt50        -0.30000000000000D+00  0.30000000000000D+00  0.30000000000000D+00
qpt51        -0.40000000000000D+00  0.40000000000000D+00  0.30000000000000D+00
qpt52         0.50000000000000D+00  0.50000000000000D+00  0.30000000000000D+00
qpt53        -0.40000000000000D+00  0.50000000000000D+00  0.30000000000000D+00
qpt54        -0.40000000000000D+00  0.40000000000000D+00  0.40000000000000D+00
qpt55         0.50000000000000D+00  0.50000000000000D+00  0.40000000000000D+00
qpt56         0.50000000000000D+00  0.50000000000000D+00  0.50000000000000D+00


#
#  DS5 get DDK perturbation (stored in GKK matrix element files)
#


tolwfr57  1.0d-24
qpt57     0.0 0.0 0.0
rfphon57  0
rfelfd57  2
prtwf57   0

# WF on full BZ
tolwfr58      1.0d-24
prtwf58       1
getwfk58      1
nstep58       1
nline58       1
nqpt58        0
rfphon58      0

# Compute the GKK correctly (no gauge problem)
# This step is very quick as NSCF+nstep 1

qpt59              0.00000000000000D+00  0.00000000000000D+00  0.00000000000000D+00    
qpt60              0.10000000000000D+00  0.00000000000000D+00  0.00000000000000D+00    
qpt61              0.20000000000000D+00  0.00000000000000D+00  0.00000000000000D+00    
qpt62              0.30000000000000D+00  0.00000000000000D+00  0.00000000000000D+00    
qpt63              0.40000000000000D+00  0.00000000000000D+00  0.00000000000000D+00    
qpt64              0.50000000000000D+00  0.00000000000000D+00  0.00000000000000D+00    
qpt65              0.10000000000000D+00  0.10000000000000D+00  0.00000000000000D+00    
qpt66              0.20000000000000D+00  0.10000000000000D+00  0.00000000000000D+00    
qpt67              0.30000000000000D+00  0.10000000000000D+00  0.00000000000000D+00    
qpt68              0.40000000000000D+00  0.10000000000000D+00  0.00000000000000D+00    
qpt69              0.50000000000000D+00  0.10000000000000D+00  0.00000000000000D+00    
qpt70             -0.40000000000000D+00  0.10000000000000D+00  0.00000000000000D+00    
qpt71             -0.30000000000000D+00  0.10000000000000D+00  0.00000000000000D+00    
qpt72              0.20000000000000D+00  0.20000000000000D+00  0.00000000000000D+00    
qpt73              0.30000000000000D+00  0.20000000000000D+00  0.00000000000000D+00    
qpt74              0.40000000000000D+00  0.20000000000000D+00  0.00000000000000D+00    
qpt75              0.50000000000000D+00  0.20000000000000D+00  0.00000000000000D+00    
qpt76              0.30000000000000D+00  0.30000000000000D+00  0.00000000000000D+00    
qpt77              0.10000000000000D+00  0.10000000000000D+00  0.10000000000000D+00    
qpt78              0.20000000000000D+00  0.10000000000000D+00  0.10000000000000D+00    
qpt79              0.30000000000000D+00  0.10000000000000D+00  0.10000000000000D+00    
qpt80              0.40000000000000D+00  0.10000000000000D+00  0.10000000000000D+00    
qpt81             -0.10000000000000D+00  0.10000000000000D+00  0.10000000000000D+00    
qpt82              0.20000000000000D+00  0.20000000000000D+00  0.10000000000000D+00    
qpt83              0.30000000000000D+00  0.20000000000000D+00  0.10000000000000D+00    
qpt84              0.40000000000000D+00  0.20000000000000D+00  0.10000000000000D+00    
qpt85             -0.20000000000000D+00  0.20000000000000D+00  0.10000000000000D+00    
qpt86              0.30000000000000D+00  0.30000000000000D+00  0.10000000000000D+00    
qpt87             -0.30000000000000D+00  0.30000000000000D+00  0.10000000000000D+00    
qpt88             -0.20000000000000D+00  0.30000000000000D+00  0.10000000000000D+00    
qpt89             -0.40000000000000D+00  0.40000000000000D+00  0.10000000000000D+00    
qpt90             -0.30000000000000D+00  0.40000000000000D+00  0.10000000000000D+00    
qpt91             -0.20000000000000D+00  0.40000000000000D+00  0.10000000000000D+00    
qpt92              0.50000000000000D+00  0.50000000000000D+00  0.10000000000000D+00    
qpt93             -0.40000000000000D+00  0.50000000000000D+00  0.10000000000000D+00    
qpt94             -0.30000000000000D+00  0.50000000000000D+00  0.10000000000000D+00    
qpt95             -0.20000000000000D+00  0.50000000000000D+00  0.10000000000000D+00    
qpt96             -0.40000000000000D+00 -0.40000000000000D+00  0.10000000000000D+00    
qpt97              0.20000000000000D+00  0.20000000000000D+00  0.20000000000000D+00    
qpt98              0.30000000000000D+00  0.20000000000000D+00  0.20000000000000D+00    
qpt99             -0.20000000000000D+00  0.20000000000000D+00  0.20000000000000D+00    
qpt100            -0.30000000000000D+00  0.30000000000000D+00  0.20000000000000D+00    
qpt101            -0.40000000000000D+00  0.40000000000000D+00  0.20000000000000D+00    
qpt102            -0.30000000000000D+00  0.40000000000000D+00  0.20000000000000D+00    
qpt103             0.50000000000000D+00  0.50000000000000D+00  0.20000000000000D+00    
qpt104            -0.40000000000000D+00  0.50000000000000D+00  0.20000000000000D+00    
qpt105            -0.30000000000000D+00  0.50000000000000D+00  0.20000000000000D+00    
qpt106            -0.40000000000000D+00 -0.40000000000000D+00  0.20000000000000D+00    
qpt107            -0.30000000000000D+00  0.30000000000000D+00  0.30000000000000D+00    
qpt108            -0.40000000000000D+00  0.40000000000000D+00  0.30000000000000D+00    
qpt109             0.50000000000000D+00  0.50000000000000D+00  0.30000000000000D+00    
qpt110            -0.40000000000000D+00  0.50000000000000D+00  0.30000000000000D+00    
qpt111            -0.40000000000000D+00  0.40000000000000D+00  0.40000000000000D+00    
qpt112             0.50000000000000D+00  0.50000000000000D+00  0.40000000000000D+00    
qpt113             0.50000000000000D+00  0.50000000000000D+00  0.50000000000000D+00    


get1den59  2  prtgkk59    1   iscf59  -2   tolwfr59  1.0d-24  nstep59  1   nline59 1    getwfk59  58
get1den60  3  prtgkk60    1   iscf60  -2   tolwfr60  1.0d-24  nstep60  1   nline60 1    getwfk60  58
get1den61  4  prtgkk61    1   iscf61  -2   tolwfr61  1.0d-24  nstep61  1   nline61 1    getwfk61  58
get1den62  5  prtgkk62    1   iscf62  -2   tolwfr62  1.0d-24  nstep62  1   nline62 1    getwfk62  58
get1den63  6  prtgkk63    1   iscf63  -2   tolwfr63  1.0d-24  nstep63  1   nline63 1    getwfk63  58
get1den64  7  prtgkk64    1   iscf64  -2   tolwfr64  1.0d-24  nstep64  1   nline64 1    getwfk64  58
get1den65  8  prtgkk65    1   iscf65  -2   tolwfr65  1.0d-24  nstep65  1   nline65 1    getwfk65  58
get1den66  9  prtgkk66    1   iscf66  -2   tolwfr66  1.0d-24  nstep66  1   nline66 1    getwfk66  58
get1den67  10  prtgkk67    1   iscf67  -2   tolwfr67  1.0d-24  nstep67  1   nline67 1    getwfk67  58
get1den68  11  prtgkk68    1   iscf68  -2   tolwfr68  1.0d-24  nstep68  1   nline68 1    getwfk68  58
get1den69  12  prtgkk69    1   iscf69  -2   tolwfr69  1.0d-24  nstep69  1   nline69 1    getwfk69  58
get1den70  13  prtgkk70    1   iscf70  -2   tolwfr70  1.0d-24  nstep70  1   nline70 1    getwfk70  58
get1den71  14  prtgkk71    1   iscf71  -2   tolwfr71  1.0d-24  nstep71  1   nline71 1    getwfk71  58
get1den72  15  prtgkk72    1   iscf72  -2   tolwfr72  1.0d-24  nstep72  1   nline72 1    getwfk72  58
get1den73  16  prtgkk73    1   iscf73  -2   tolwfr73  1.0d-24  nstep73  1   nline73 1    getwfk73  58
get1den74  17  prtgkk74    1   iscf74  -2   tolwfr74  1.0d-24  nstep74  1   nline74 1    getwfk74  58
get1den75  18  prtgkk75    1   iscf75  -2   tolwfr75  1.0d-24  nstep75  1   nline75 1    getwfk75  58
get1den76  19  prtgkk76    1   iscf76  -2   tolwfr76  1.0d-24  nstep76  1   nline76 1    getwfk76  58
get1den77  20  prtgkk77    1   iscf77  -2   tolwfr77  1.0d-24  nstep77  1   nline77 1    getwfk77  58
get1den78  21  prtgkk78    1   iscf78  -2   tolwfr78  1.0d-24  nstep78  1   nline78 1    getwfk78  58
get1den79  22  prtgkk79    1   iscf79  -2   tolwfr79  1.0d-24  nstep79  1   nline79 1    getwfk79  58
get1den80  23  prtgkk80    1   iscf80  -2   tolwfr80  1.0d-24  nstep80  1   nline80 1    getwfk80  58
get1den81  24  prtgkk81    1   iscf81  -2   tolwfr81  1.0d-24  nstep81  1   nline81 1    getwfk81  58
get1den82  25  prtgkk82    1   iscf82  -2   tolwfr82  1.0d-24  nstep82  1   nline82 1    getwfk82  58
get1den83  26  prtgkk83    1   iscf83  -2   tolwfr83  1.0d-24  nstep83  1   nline83 1    getwfk83  58
get1den84  27  prtgkk84    1   iscf84  -2   tolwfr84  1.0d-24  nstep84  1   nline84 1    getwfk84  58
get1den85  28  prtgkk85    1   iscf85  -2   tolwfr85  1.0d-24  nstep85  1   nline85 1    getwfk85  58
get1den86  29  prtgkk86    1   iscf86  -2   tolwfr86  1.0d-24  nstep86  1   nline86 1    getwfk86  58
get1den87  30  prtgkk87    1   iscf87  -2   tolwfr87  1.0d-24  nstep87  1   nline87 1    getwfk87  58
get1den88  31  prtgkk88    1   iscf88  -2   tolwfr88  1.0d-24  nstep88  1   nline88 1    getwfk88  58
get1den89  32  prtgkk89    1   iscf89  -2   tolwfr89  1.0d-24  nstep89  1   nline89 1    getwfk89  58
get1den90  33  prtgkk90    1   iscf90  -2   tolwfr90  1.0d-24  nstep90  1   nline90 1    getwfk90  58
get1den91  34  prtgkk91    1   iscf91  -2   tolwfr91  1.0d-24  nstep91  1   nline91 1    getwfk91  58
get1den92  35  prtgkk92    1   iscf92  -2   tolwfr92  1.0d-24  nstep92  1   nline92 1    getwfk92  58
get1den93  36  prtgkk93    1   iscf93  -2   tolwfr93  1.0d-24  nstep93  1   nline93 1    getwfk93  58
get1den94  37  prtgkk94    1   iscf94  -2   tolwfr94  1.0d-24  nstep94  1   nline94 1    getwfk94  58
get1den95  38  prtgkk95    1   iscf95  -2   tolwfr95  1.0d-24  nstep95  1   nline95 1    getwfk95  58
get1den96  39  prtgkk96    1   iscf96  -2   tolwfr96  1.0d-24  nstep96  1   nline96 1    getwfk96  58
get1den97  40  prtgkk97    1   iscf97  -2   tolwfr97  1.0d-24  nstep97  1   nline97 1    getwfk97  58
get1den98  41  prtgkk98    1   iscf98  -2   tolwfr98  1.0d-24  nstep98  1   nline98 1    getwfk98  58
get1den99  42  prtgkk99    1   iscf99  -2   tolwfr99  1.0d-24  nstep99  1   nline99 1    getwfk99  58
get1den100  43  prtgkk100    1   iscf100  -2   tolwfr100  1.0d-24  nstep100  1   nline100 1    getwfk100  58
get1den101  44  prtgkk101    1   iscf101  -2   tolwfr101  1.0d-24  nstep101  1   nline101 1    getwfk101  58
get1den102  45  prtgkk102    1   iscf102  -2   tolwfr102  1.0d-24  nstep102  1   nline102 1    getwfk102  58
get1den103  46  prtgkk103    1   iscf103  -2   tolwfr103  1.0d-24  nstep103  1   nline103 1    getwfk103  58
get1den104  47  prtgkk104    1   iscf104  -2   tolwfr104  1.0d-24  nstep104  1   nline104 1    getwfk104  58
get1den105  48  prtgkk105    1   iscf105  -2   tolwfr105  1.0d-24  nstep105  1   nline105 1    getwfk105  58
get1den106  49  prtgkk106    1   iscf106  -2   tolwfr106  1.0d-24  nstep106  1   nline106 1    getwfk106  58
get1den107  50  prtgkk107    1   iscf107  -2   tolwfr107  1.0d-24  nstep107  1   nline107 1    getwfk107  58
get1den108  51  prtgkk108    1   iscf108  -2   tolwfr108  1.0d-24  nstep108  1   nline108 1    getwfk108  58
get1den109  52  prtgkk109    1   iscf109  -2   tolwfr109  1.0d-24  nstep109  1   nline109 1    getwfk109  58
get1den110  53  prtgkk110    1   iscf110  -2   tolwfr110  1.0d-24  nstep110  1   nline110 1    getwfk110  58
get1den111  54  prtgkk111    1   iscf111  -2   tolwfr111  1.0d-24  nstep111  1   nline111 1    getwfk111  58
get1den112  55  prtgkk112    1   iscf112  -2   tolwfr112  1.0d-24  nstep112  1   nline112 1    getwfk112  58
get1den113  56  prtgkk113    1   iscf113  -2   tolwfr113  1.0d-24  nstep113  1   nline113 1    getwfk113  58
   

# DS12 get the ddk matrix elements on the full grid
prtgkk98     1
rfphon98     0             # no phonons here
rfelfd98     2             # Activate the calculation of the d/dk perturbation
qpt98        0.0 0.0 0.0   # This is a calculation at the Gamma point
iscf98      -3             # The d/dk perturbation must be treated non SC-ly
tolwfr98     1.0d-24       # Must use tolwfr for non-self-consistent calculations
#nstep98      1
#nline98      4
getwfk98     58
get1den98    57

#
# general data for all phonon calculations:
#
prepgkk 1        # flag to calculate all perturbations for el-phon calculations
use_nonscf_gkk 0 # enforce old default and scf-calculate all perturbations
nqpt 1           # 1 qpoint at a time
toldfe  1.0d-7
#tolvrs 1.e-20     # tolerance on 2DTE convergence: potential^(1) is what we need
getwfk 1         # all other DS get wf from DS1
prtwf 0
rfatpol 1 1      # all atoms are perturbed
rfdir 1 1 1      # all directions of perturbation
rfphon 1

#
#  Common data for GS and perturbation runs
#

# The kpoint grid is minimalistic to keep the calculation manageable.
ngkpt        30 30 30
kptopt       3

# As the kinetic energy cutoff

ecut         20
pawecutdg   20

# Use a centered grid for the kpoints
nshiftk      1
shiftk       0.0 0.0 0.0

#
#  Common data
#
#soc
nspinor 2


acell        3*6.1256712642

rprim     -5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
           5.0000000000E-01 -5.0000000000E-01  5.0000000000E-01
           5.0000000000E-01  5.0000000000E-01 -5.0000000000E-01



nband    18    
#nbdbuf 4

#  include metallic occupation function with a small smearing
occopt       7
tsmear       0.001
natom        1
typat        1
xred         0.00 0.00 0.00
nstep        200
nline       20
ntypat       1
znucl        41

## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain =  teph_1.in, teph_2.in, teph_3.in, teph_4.in, teph_5.in, teph_6.in
#%% [files]
#%% files_to_test = 
#%%   teph_1.out, tolnlines= 57, tolabs=  3.000e-02, tolrel=  6.000e-03, fld_options= -easy
#%% psp_files =  13al.981214.fhi 
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors = M. Verstraete 
#%% keywords = NC, DFPT, EPH
#%% description = 
#%%   the sequence of datasets makes the ground states and
#%%    all of the explicit perturbations of the single
#%%    Al atom in all directions, for the irreducible
#%%    qpoints in a 2x2x2 grid.
#%% 
#%%   Note that the q-point grid must be a sub-grid of the k-point grid (here 4x4x4)
#%%<END TEST_INFO>
