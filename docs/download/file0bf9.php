#### This is a PBE0 calculation for Fe bcc, acell 5.40461887
#### space group P6_3/m m c (#194); Bravais hP (primitive hexag.)
# 
###########################################
# ndtset 5
ndtset 2
# ndtset 3
# === SCF cycle options
fftgw 31
nstep 100  tolvrs 1.d-8
ecut 24.0 pawecutdg 80.0
diemix 0.9 iscf 17 npulayit 6
# === This is ferro
nsppol 2  nspden 2
istwfk *1
# === Structure and cell
kptopt 1
spinat 0 0 5
natom 1 ntypat 1 typat 1
znucl  26.0
xred
0.0 0.0 0.0
acell 3*5.40461887
 # nshiftk   1
 # shiftk    0 0 0              # Mesh centered on gamma, not optimal for BSE calculations
 rprim -0.5  0.5  0.5
        0.5 -0.5  0.5
        0.5  0.5 -0.5
## K-POINTS
chksymbreak 0
occopt 3 tsmear 2.5d-3
# === K-points and syms
nsym 0
# === Other options
optforces 2
nband 64
ngkpt 8 8 8
# Dataset1: usual self-consistent ground-state calculation
prtden1 1         # Print the density, for use by dataset 2

#Dataset 2 : total DOS calculation
 iscf2   -3
 getden2  1
 getwfk2  1
 prtdos2  2
 dosdeltae2 0.00367493  # This is also the default value for prtdos2=2, =0.0204 eV
                    # but the presence of dosdeltae is there for checking purposes
tolwfr2  1.0d-10

#Dataset 3 : Partial DOS
iscf3   -3
getden3  1
getwfk3  1
prtdos3  3
natsph3  1
iatsph3  1 
dosdeltae3 0.00367493  # This is also the default value for prtdos2=2, =0.0204 eV, but the presence of dosdeltae is there for checking purposes
prtdensph3 1   ratsph 2.85
tolwfr3  1.0d-10

#Dataset 4 : the band structure Ek
kptopt4  -3
iscf4    -2 
getden4  1
getwfk4  1
ndivk4 7 7 7      # 11, 11 and 11 divisions of the 4 segments, delimited by 11 points.
kptbounds4  0 1 0  # H  space group Im-3m (#229)
            0 0 0   # GM
            1/2 1/2 0  # N
            0 1 0   # H
tolwfr4  1.0d-10
nband4  36
#Dataset 5 : the band structure Ek
kptopt5  -2
iscf5    -2 
getden5  1
getwfk5  1
ndivk5 7 7 7      # 11, 11 and 11 divisions of the 4 segments, delimited by 11 points.
kptbounds5   0 1 0     # H  space group Im-3m (#229)
            1/2 1/2 1/2  # P
            0 0 0        # GM
tolwfr5  1.0d-10
nband5  36
##### Exact Exchange
useexexch 1
lexexch 2 
# exchmix 0.0
# exchmix 0.01
# exchmix 0.015
 exchmix 0.02
# exchmix 0.03
intxc 1
pawmixdg 1