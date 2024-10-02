#### PHONON PERT FOR QPOINT NUMBER 2, QPT = 0.5 0.0 0.0

ndtset              2

autoparal           1
pp_dirpath          "/projects/ngmd/tyst3273/program_files/JTH-LDA-atomicdata-1.1/ATOMICDATA/"
pseudos             "Y.LDA_PW-JTH.xml,Ba.LDA_PW-JTH.xml,Cu.LDA_PW-JTH.xml,O.LDA_PW-JTH.xml"
ntypat              4
natom               12
typat               1 2 2 3 3 3 4 4 4 4 4 4
znucl               39 56 29 8
acell               3.8715 3.8715 11.738 Angstrom
rprim               1.0 0.0 0.0
                    0.0 1.0 0.0
                    0.0 0.0 1.0
xred                0.5 0.5 0.5
                    0.5 0.5 0.197570882616
                    0.5 0.5 0.802429117384
                    0.0 0.0 0.368500187786
                    -0.0 -0.0 0.631499812214
                    0.0 0.0 -0.0
                    0.0 0.5 0.620376898913
                    0.5 0.0 0.379623101087
                    0.5 0.0 0.620376898913
                    -0.0 -0.0 0.150258429887
                    0.0 0.5 0.379623101087
                    0.0 0.0 0.849741570113

nband               80
nsppol              1
nspden              1
spinat              36*0

ngkpt               20 20 10
nshiftk             1
shiftk              0 0 0

ecut                650 eV
pawecutdg           1200 eV
nstep               100
occopt              7
tsmear              0.05 eV

ngfft               48 48 144

nqpt                1
qpt                 0.5 0.0 0.0
prtwf               1
prtden              0
kptopt              3

# nscf k+q
getden_filepath1    "../ground_state/gs.o_DS1_DEN"
iscf1              -2
tolwfr1             1.0d-20

# pert SCF
getwfk_filepath2    "../ground_state/gs.o_DS1_WFK"
prtwf2              0
getwfq2            -1
rfphon2             1
rfdir2              1 1 1
rfatpol2            1 12
tolvrs2             1.0d-10

