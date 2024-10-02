
##############
# input file for performing energy calculation on a single aluminum atom!
##############


# parallelization over fft
npfft 4
fftalg 401 
fft_opt_lob 2
 # ngfft 108 108 108   # use default of 0 0 0 for optimal values


# parallelization over bands
npband 16 
 # nband 648   # should be set automatically, due to occopt=3 (per the documentation)
 # fband 0.5   # uses the default value when occopt=3, so this is commented also


# other stuff
wfoptalg 4
iprcch 0
timopt -1
istwfk 1
occopt 3       # for metals
tsmear 0.002   # converge this value. represents a physical temperature (but in hartree)
 # useylm 0   # this is set by default to 0
diemac 1000000.0  # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.


# cell size and energy cutoff
acell 80 80 80 
ecut 40


# scf cycling information
nstep 10
toldfe 1.0e-8
iscf 7
npulayit 10


# setup kpoints (just one)
kptopt 0
nkpt 1


# setup the atom
znucl  13
natom  1
ntypat 1
typat  1
xcart
0.0 0.0 0.0

