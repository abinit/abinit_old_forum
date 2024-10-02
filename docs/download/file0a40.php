# input file for Abinit ionic optimization - first step in geom opt

#Definition of the planewave basis set
ecut      22            # Maximal kinetic energy cut-off, in Hartree
pawecutdg 55            # double grid cutoff
nband     38            # increase number of bands to avoid problems with convergence

#Definition of the SCF procedure
nstep  75         # Maximal number of SCF cycles
toldfe 1.0d-8     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
diemac 4.0        # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon. (diamond though)
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
optforces 1
 
# #Optimization of the lattice parameters
optcell 2       # 1 = vol optimization only
                # 2 = full cell optimization
ionmov  3       # BFGS geometry algorithm no Energy gradient contribution
                # 3 = BFGS with energy gradient consistency
ntime   150      # max number of iterations
dilatmx 1.25    # scaling parameter for effective cut off energy
ecutsm  0.6     # smoothing parameter
tolmxf  5.0d-5  # force convergence parameter

#Definition of the k-point grids
kptrlatt  # nkpt = 14
            3   0   0
            3   3   0
            0   0   3
nshiftk 1       # number of shifts for kpoint grids
shiftk 5.0E-01  # shifts for kpoints ; along with nshiftk
       5.0E-01  # these are the recommended values by abinit doccumentation
       5.0E-01

#DFT & SCF section
ixc 11        # PBE functional

#scalar factor; lattice constant for the conventional unit cell (Bohr)
acell   3*9.284223782
#
#Primitive vectors (to be scaled by acell)
chkprim 0   # work on a non primitive cell
rprim # original rprim
        0.8686315561630059 -0.5076723057446573 -0.0041186943034638
        0.0000000000000000  1.0153446114893145  0.0000000000000000
       -0.0051920773861671  0.0000000000000000  1.1200869400909945

#Definition of the atom types
npsp    2                  #Number of pseudopotential used
znucl  14 8                #Nuclear charge of Si and O
ntypat  2                  #Number of types of atoms. NOTE: except when
                           #alchemical mixing of pseudopotentials is used, the
                           #number of types of atoms will be equal to the number
                           #of pseudopotentials npsp to be provided by the user.
                           #Thus, the code will try to read the same number of
                           #pseudopotential files, whose names should have been
                           #in the given in the "*.files" file. The first
                           #pseudopotential will be assigned the type 1, and
                           #so on ...
#
#Definition of the atoms
natom   9                  #Total number of atoms in the "conventional" unit
                           #cell. NOTE THAT natom REFERES TO ALL ATOMS IN THE
                           #UNIT CELL, NOT ONLY TO THE IRRIDUCIBLE SET OF ATOMS
                           #IN THE UNIT CELL (THE SET THAT, USING SYMMETRIES,
                           #ALLOWS TO RECOVER ALL ATOMS IN THE CELL).
                           #
typat   3*1  6*2           #Integer array indicating the type of atoms.
                           #See the above comment on "ntypat".
                           #The nuclear charge of the elements (see the "znucl"
                           #array), also must agree with the type of atoms
                           #designated in "typat".
                           #Therefore: in the *.files file we must put
                           #  - path to the Si pseudopotential
                           #  - path to the O pseudopotential
                           #and "3*1  6*2" means 3 atoms of type 1 (Si with
                           #Z=14) and 6 atoms of type 2 (O with Z=8).
                           #         WHY SO ELABORATED???!!!  :-|
#
#Reduced coordinates of atoms in the primitive unit cell and relative
xred    0.4681759838507773  0.9976307540240796  0.3314560841717764 #Si
       0.0000000000000000  0.4792145947257964  0.6666669999999968 #Si
       0.5318240161492227  0.5294547701733023  0.0018769158282268 #Si
       0.4027052555589066  0.2464022158645136  0.1938616600156919 #O
       0.7322951935554372  0.1564902651745967  0.5447880028043954 #O
       0.8604676689643256  0.5916915185386316  0.8875167554313066 #O
       0.2677048064445628  0.4241950716191596  0.7885449971956007 #O
       0.1395323310356744  0.7312238495742989  0.4458172445686941 #O
       0.5972947444410934  0.8436969603056070  0.1394713399843113 #O

