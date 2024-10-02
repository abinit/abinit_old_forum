#------------------------#
# INPUT FILE FOR ABINIT  #
#64Ne - gamma            #
#------------------------#
#
# - Options for link
#--------------------
autoparal 1
 ndtset 5  #Number of DaTaSETs 
#
# - Options for output
#----------------------
 enunit 2
 prtvol 1
#
# - Parameters governing the convergence
#----------------------------------------
 ecut   35.  #1 Ha=27.2113845 eV
 nband 264
 occopt 3  #Metallic occupation of levels, using different occupation schemes,3,Fermi-Dirac smearing (finite-temperature metal) Smeared delta function : 0.25d0/(cosh(xx/2.0d0)**2)
 tsmear 0.0002
#
# - Options for the choice of calculations
#-----------------------------------------
 ixc   11 #Integer for eXchange-Correlation choice
 nstep 500 #Number of self-consistent field STEPS
#
# SC run
 iscf1   3 #SCF cycle, anderson mixing
 toldfe1 1.d-10 #TOLerance on the DiFference of total Energy 
 nqpt1   0
 prtden1 1 #If set to 1 or a larger value , provide output of electron density in real space
#
# NSC run
 iscf2 -2 #a non-self-consistent calculation is to be done
 tolwfr2 1.0d-22 # TOLerance on WaveFunction squared Residual 
 nqpt2 0 #Determines whether one q point must be read (See the variable qptn). 
 getden2 1 #If getden is positive, its value gives the index of the dataset from which the output density is to be used as input
 getwfk2 1 #GET the wavefunctions from _WFK file
#
# ddk response function
 iscf3 -3 # non-self-consistent calculation is to be done
 tolwfr3 1.0d-22
 nqpt3 1 #If 1 and used in ground-state calculation, a global shift of all the k-points is applied, to give calculation at k+q.
 qpt3 0.0d0 0.0d0 0.0d0 #Q PoinT 
 rfdir3 1 0 0  #Response Function : DIRections 
 rfelfd3 2  #Response Function with respect to the ELectric FielD , only the derivative of ground-state wavefunctions with respect to k
 getwfk3 2

# ddk response function
 iscf4 -3
 tolwfr4 1.0d-22
 nqpt4 1
 qpt4 0.0d0 0.0d0 0.0d0
 rfdir4 0 1 0
 rfelfd4 2
 getwfk4 2


# ddk response function
 iscf5 -3
 tolwfr5 1.0d-22
 nqpt5 1
 qpt5 0.0d0 0.0d0 0.0d0
 rfdir5 0 0 1
 rfelfd5 2
 getwfk5 2

#
# - Definition of special k-points
#----------------------------------
# kptopt 0  #read directly nkpt, kpt, kptnrm and wtk.
# nkpt 1 #Number of K - Points 
# kpt 0.0 0.0 0.0
# wtk 1.0
# kptnrm 1  #Establishes a normalizing denominator for each k point
ngkpt 2 2 2
nshiftk  1  
shiftk  0.5  0.5  0.5 
# - Definition of the unit cell
#--------------------------------
 acell   13.3825617   13.3825617   13.3825617  angstrom #CELL lattice vector scaling 
# rprim 0.0 0.5 0.5
 #      0.5 0.0 0.5
  #     0.5 0.5 0.0
 natom 64
 ntypat 1  # Number of TYPEs of atoms 
 typat 64*1 #TYPE of atoms 
 znucl 10.0
amu 20.1797 #Atomic Mass Units 
 #x red 0.0 0.0 0.0  #vectors (X) of atom positions in REDuced coordinates 

nsym 1 #Number of SYMmetry operations 
#xcart
xred
   0.20824518  0.14377473  0.04508535
   0.56159176  0.06222794  0.21126053
   0.38170509  0.40738940  0.26305639
   0.06908482  0.21632939  0.23513450
   0.15880498  0.35469018  0.97116621
   0.54520762  0.04055340  0.94651540
   0.61683673  0.46285443  0.97983711
   0.67420026  0.24296691  0.25073056
   0.06292186  0.59259635  0.98292387
   0.19665254  0.50148863  0.13457818
   0.65808138  0.73048084  0.37847066
   0.93014431  0.82595270  0.22516900
   0.28414980  0.73200475  0.12414633
   0.60872979  0.92379382  0.06761547
   0.83488856  0.81383123  0.06168155
   0.70026259  0.07197800  0.32350645
   0.15210390  0.00191532  0.91590318
   0.29978146  0.10704791  0.47124491
   0.46770223  0.95409755  0.34045650
   0.28964460  0.91532023  0.68264119
   0.82452097  0.35199200  0.32858710
   0.14630094  0.54836837  0.51663193
   0.65510370  0.25662222  0.63091230
   0.76655405  0.57054759  0.22245011
   0.07795349  0.74565271  0.28262364
   0.48869842  0.67291715  0.22520128
   0.57464959  0.74007811  0.53228836
   0.85856296  0.71488011  0.36803169
   0.21405299  0.89826551  0.32417799
   0.29985745  0.54136898  0.38766874
   0.63329516  0.89803129  0.47375874
   0.78818098  0.91014513  0.30204375
   0.15675543  0.33027410  0.66764513
   0.41920249  0.23072979  0.50449230
   0.61989488  0.32606150  0.86936413
   0.98611133  0.04384358  0.79109608
   0.20561359  0.75895435  0.51570545
   0.37377321  0.37353674  0.60891351
   0.76189644  0.46963003  0.65122303
   0.01160498  0.98763454  0.36090053
   0.03414165  0.75578524  0.45242882
   0.53940750  0.54004169  0.43142684
   0.47318581  0.54920419  0.59575454
   0.96494963  0.53425387  0.51567175
   0.40186377  0.79339881  0.56342259
   0.44466376  0.68690724  0.92275566
   0.49808276  0.98650832  0.59447437
   0.84073068  0.86088991  0.55299855
   0.84020509  0.22400393  0.03820456
   0.17367519  0.20066761  0.75887987
   0.63433326  0.88672948  0.86216313
   0.70281575  0.20927150  0.78147741
   0.00582111  0.25550271  0.83877784
   0.31436566  0.39279075  0.79463618
   0.62388198  0.52317721  0.75020462
   0.91663973  0.52452929  0.73297232
   0.07075086  0.83107409  0.75104070
   0.41742542  0.46794900  0.11509257
   0.81690007  0.66433243  0.75519571
   0.80777523  0.52282916  0.05177271
   0.96693059  0.90309520  0.92107112
   0.43235649  0.82994003  0.06220387
   0.56626786  0.65674493  0.07524107
   0.94950761  0.72954586  0.90729405



# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
 iscf 5
