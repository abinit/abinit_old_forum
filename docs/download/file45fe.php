#technicalities
chkprim 0             # abinit determines whether or not cell is primitive (1: abinit stops if not prim)
#autoparal 1           # automatically detect parallelism settings for ground state calcs, see npimage, nkpt, npspinor, npfft, npband, bandpp
ndtset 5
jdtset 
11
21 22
31 32

#berry+field stuff
#symmorphi 0
kptopt 3
ngkpt 4 4 4 
nband 48

#1 berryphase at 0 field
berryopt11 -1 rfdir11 1 1 1
#21 berryphase at small positive field. 
berryopt21 6 dfield21 0.0 0.0 0.0001 getwfk21 11
#22stronger fields have to be applied consecutively by using the wfk of the previous step
berryopt22 6 dfield22 0.0 0.0 0.0002 getwfk22 21
#31 field in the other direction
berryopt31 6 dfield31 0.0 0.0 -0.0001 getwfk31 11
berryopt32 6 dfield32 0.0 0.0 -0.0002 getwfk32 31

#model
ecut 26             # Ha
ecutsm 0.5            # Ha smoothing of pw basis for cell relaxation
occopt 1              # handling occupations (smearing etc), use 1 for semiconductors
ixc 7                 # LDA
pawecutdg 26          # cutoff for fine grid around atoms in Ha, test for conv
usepawu 1             # off=0, 1=FLL, 2=AMF
lpawu 3 -1            # l for each species to use U on -1=off, 2=d, 3=f
upawu 6 0 eV          # 

#electronic relaxation
nstep 250             # number of (n)scf steps
toldfe 5.0d-6         # E0 scf criterion
iscf 17               # mixer, default pulay mixers 7 for NC, 17 for PAW
#npulayit 40 

##relaxation
#ionmov 2              # relax ion positions, 0=off, 2=bfgs
#tolmxf 5.0d-5         # threshold on max. force ~0.0025 eV/A
#ntime 100            # maximal number of optimaztion steps
#optcell 1             # relax unit cell shape and dimensions, 0=off, 1=vol, 2=all, 3=const. vol
#dilatmx 1.03         # maximal change in cell vector 5%

#kpoints
#kptopt 1
#ngkpt 6 6 6
#ngkpt 12 12 12
#kpoints didnt stay fixed, enforce
              kpt      1.25000000E-01  1.25000000E-01  1.25000000E-01
                       3.75000000E-01  1.25000000E-01  1.25000000E-01
                       3.75000000E-01  3.75000000E-01  1.25000000E-01
                       1.25000000E-01  1.25000000E-01  3.75000000E-01
                       3.75000000E-01  1.25000000E-01  3.75000000E-01
                       3.75000000E-01  3.75000000E-01  3.75000000E-01
#system
ntypat 2              # number of atom types
natom 12
typat 4*1 8*2 
znucl 58 8
nsppol 1              # 1-closed shell

            acell      1.0162191655E+01  1.0162191655E+01  1.0162191655E+01 Bohr

rprim
        1.0000000000         0.0000000000         0.0000000000
        0.0000000000         1.0000000000         0.0000000000
        0.0000000000         0.0000000000         1.0000000000

            xcart      3.2776987594E-32  3.2356239399E-33  2.9245637391E-33
                       3.2776987594E-32  5.0810958274E+00  5.0810958274E+00
                       5.0810958274E+00  3.2356239399E-33  5.0810958274E+00
                       5.0810958274E+00  5.0810958274E+00  2.9245637391E-33
                       2.5405479137E+00  2.5405479137E+00  2.5405479137E+00
                       7.6216437411E+00  7.6216437411E+00  7.6216437411E+00
                       7.6216437411E+00  7.6216437411E+00  2.5405479137E+00
                       2.5405479137E+00  2.5405479137E+00  7.6216437411E+00
                       7.6216437411E+00  2.5405479137E+00  7.6216437411E+00
                       2.5405479137E+00  7.6216437411E+00  2.5405479137E+00
                       2.5405479137E+00  7.6216437411E+00  7.6216437411E+00
                       7.6216437411E+00  2.5405479137E+00  2.5405479137E+00
