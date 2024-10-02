ndtset 2

#Dataset 1 : usual self-consistent calculation
kptopt1 1          # Option for the automatic generation of k points,
                   # taking into account the symmetry
nshiftk1 1
shiftk1  0 0 0
ngkpt1  8 8 1 
prtden1  1         # Print the density, for use by dataset 2
toldff1 2.0D-6    # This value is way too large for most realistic studies of materials

#Dataset 2 : the band structure
iscf2    -2
getden2  -1
kptopt2  -3
nband2   40
ndivk2   10 12 17      # 10, 12 and 17 divisions of the 3 segments, delimited
                       # by 4 points.
kptbounds2  0.5  0.0  0.0 # L point
            0.0  0.0  0.0 # Gamma point
            0.0  0.5  0.5 # X point
            1.0  1.0  1.0 # Gamma point in another cell.
tolwfr2  1.0d-12
enunit2  1             # Will output the eigenenergies in eV 
#Definition of the SCF procedure
nstep 10999999          # Maximal number of SCF cycles

chksymbreak 0




ecut 75
ecutsm 0.5

#===================================================================================
# Structural parameters
#acell1 from cif2cell    3*10.7223058914  

#rprim1 from cif2cell   0.500000000000000   0.000000000000000   0.500000000000000 
                        0.500000000000000   0.500000000000000   0.000000000000000 
                        0.000000000000000   3.000000000000000   3.000000000000000 

#xred1 from cif2cell 
          #0.250000000000000   0.250000000000000   0.083666666666667 
          #0.250000000000000   0.250000000000000   0.417000000000000 
          #0.250000000000000   0.250000000000000   0.250333333333333 
          #0.000000000000000   0.000000000000000   0.042000000000000 
          #0.000000000000000   0.000000000000000   0.375333333333333 
          #0.000000000000000   0.000000000000000   0.208666666666667 
#xred2 from optcell=o , ionmov=2
                        #2.6416264466E-01  2.6416264466E-01  7.6585344335E-02
                        #2.7427808202E-01  2.7427808202E-01  4.0486095899E-01
                        #2.6699813088E-01  2.6699813088E-01  2.4183426789E-01
                        #-4.1992111583E-02 -4.1992111583E-02  6.2996055791E-02
                        #-3.5100548121E-03 -3.5100548121E-03  3.7708836074E-01
                        #-9.9366911724E-03 -9.9366911724E-03  2.1363501225E-01
#=============================================================================================
#Scale of Primitive Cell (acell) [bohr]: from optcell=2, ionmov2
  acell 7.5410932633E+00  7.5410932633E+00  4.5474769766E+01 Bohr

#Reduced coordinates (xred) from optcell=2, ionmov2

xred                   2.6414245801E-01  2.6414245801E-01  7.6595437659E-02
                       2.7424228809E-01  2.7424228809E-01  4.0487885595E-01
                       2.6696800711E-01  2.6696800711E-01  2.4184932978E-01
                      -4.1966147908E-02 -4.1966147908E-02  6.2983073952E-02
                      -3.4845597720E-03 -3.4845597720E-03  3.7707561322E-01
                      -9.9020455468E-03 -9.9020455468E-03  2.1361768944E-01

rprim # using acell and rmrimd which were obtained from optcell=2, ionmov2
                       7.0710678119E-01  0.0000000000E+00  7.0710678119E-01
                       7.0710678119E-01  7.0710678119E-01  0.0000000000E+00
                      -3.5440976086E-03  7.0710234032E-01  7.0710234032E-01
natom    6  
ntypat   2  
typat    1 1 1 2 2 2  
znucl   34 30  

