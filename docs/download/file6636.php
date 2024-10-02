# MoS2 Monolayer

natom      3 
ntypat      2 
znucl      42 16 
typat      1 2 2 
nsppol      1 
chkprim    0 
chksymbreak    0 

nstep       2000 
diemac     4 

prtvol      10 

iscf       7 
ecut       10 
nband      80 
toldfe     1.0d-12 

nshiftk   1 
kptopt     1 
shiftk    0.0 0.0 0.0 

so_psp    1 1 
nspinor     1 

acell      5.97153412390940 5.97153412390940 20.0 
rprim      0.5  -0.866025403784440  0.0 
0.5   0.866025403784440  0.0 
0.0   0.0     1.0 
xangst      1.5799998794E+00  9.1221335568E-01  0.0000000000E+00
      1.5799998794E+00 -9.1221335564E-01  1.5649998805E+00
      1.5799998794E+00 -9.1221335564E-01 -1.5649998805E+00
 
prtwf      1 
prtden      1 

# GW general variables
ndtset    4 

gw_sctype     1 
gw_nstep     2000 
nsym      0 
gwpara     2 
fftgw     21 
symmorphi       0 
istwfk    8*1 
gw_toldfeig     1.0d-6 
inclvkb     0 
gw_nqlwl     1 
gw_qlwl     0.00001 0.00001 0.00000 


icutcoul     2 
vcutgeo     1 1 0 
rcut     10.0 


ngkpt     6 6 1


# SCF DATASET 1
nband1     130 

# no SCF & KSS, DATASET 2
iscf2     -2 

getden2     -1 
getwfk2     -1 

nbandkss2     80 
kssform2     3 

tolwfr2     1.0d-10 


# SCREENING, DATASET 3
optdriver3     3 
prtsuscep3     1 

getkss3     -1   # for V7.10
#getwfk3    -2   # for V8.4

ppmfrq3      8.6 eV 
ecutwfn3     4. 
ecuteps3     4. 
nband3      80 


# SELF ENERGY,  DATASET 4
optdriver4       4 

getkss4     -2 # for V7.10
#getwfk4    -3 #  for V8.4

#getscr4     -1 
 getsuscep4    -1 # 

ecutwfn4     4. 
ecutsigx4     4. 
nband4      80 

nkptgw4      1 
kptgw4     0.0 0.0 0.0 
bdgw4     9 10 




