# ABINIT=/home/jzwanzig/code/abinit/6.6.0-private/tmp-intel/src/98_main/abinit
# PSPBASE=/home/jzwanzig/MyPP/hgh
# PSPLIST=Bi/83bi.5.hgh

toldff 2.0D-6
tolmxf 2.0D-5
ntime 20
ecutsm 1.0
dilatmx 1.05
optcell 2
ionmov 2


ecut 20

occopt 7
tsmear 0.01

prtgeo 2

#so_psp 2
#nspinor 2

kptopt 1
kptrlen 50

acell 4.546 4.546 11.862 angstrom
angdeg 90.0 90.0 120.0
spgroup 166
brvltt -1

znucl 83
natom 2
ntypat 1
typat 1
natrd 1
xred 0 0 0.23389

nstep 30
