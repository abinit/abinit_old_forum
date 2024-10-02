#Sn 100% ldambj

# Global setting
ndtset    1
jdtset 2
ixc         -208012
#xc_tb09_c   1.019111
usekden     1
nspinor     2
so_psp      2
occopt      1  
tsmear      0.01
enunit      1
intxc       0
#istwfk     1
#istwfk       605*1 
chksymbreak 0
chkprim     0      # rprim set up as hexagonal structure, not FCC primitive cell, to simply the positioning in reciprocal space
nband   48


#Dataset 1 : usual self-consistent calculation
iscf1 7
kptopt1  1         # Option for the automatic generation of k points,
                   # taking into account the symmetry
istwfk1 68*1
ngkpt1   11 11 5
nshiftk1 1
shiftk1  0.0 0.0 0.0 
prtden1  1         # Print the density, for use by dataset 2
prtkden1 1
prtwf1   1
toldfe1  1.0d-10
#Dataset 2: band structure calculation
iscf2    -2
ngkpt2   11 11 5
nshiftk2 1
shiftk2  0.0 0.0 0.0 
nstep2 0
tolwfr2  1.0e-18
getwfk2 1
getden2  1
prtwf2    0
kptopt2  3
prtwant2 2
w90iniprj2 2
w90prtunk2     0 
istwfk2       605*1

## unit cell

acell  3*1 angstrom # -1% diamond structure, a = 6.4892 angstrom,  
                                                     # (111) face, in-plane lattice constant: 4.588557324 without strain
                                                     # (111) face, in-plane lattice constant: 4.581344835, with strain from InSb(111) substrate; 
                                                     #  out of plane: 4.598201749 (simple estimation, not very accurate)   distance between adjacent BL: 3.765274076
                                                     #  GM=0.79; GK=0.91
                                                     # Bulk

rprim     
    4.604206500000    0.0000000000000000    0.0000000000000000
    -2.30210325000000    3.98735979326943    0.0000000000000000
     0.0000000000000000    0.0000000000000000    11.174090811931            

ntypat  1
znucl   50 
natom   6
typat   6*1




xred #The center of slab is moved to the center of the unit cell
  1.0000000000000000   1.0000000000000000   0.1256314258503330 ###001 (No.001)  Sn
  0.3333333333333330   0.6666666666666670   0.2077019074830000 ###002 (No.002)  Sn
  0.3333333333333330   0.6666666666666670   0.4589647591836670 ###003 (No.003)  Sn
  0.6666666666666670   0.3333333333333330   0.5410352408163330 ###004 (No.004)  Sn
  0.6666666666666670   0.3333333333333330   0.7922980925170000 ###005 (No.005)  Sn
  1.0000000000000000   1.0000000000000000   0.8743685741496670 ###006 (No.006)  Sn

nline   5 
nstep   1000
ecut    18.6
