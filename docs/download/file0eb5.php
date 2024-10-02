#Input for self
#Ground state calculation (self consistent part)

ndtset 2

 
toldfe1   1.0d-10
#iomode1   3
prtden1   1        # Print the density, for use by dataset 2
kptopt1   1        # Option for the automatic generation of k points
nshiftk1  1
shiftk1   0 0 0.0
ngkpt1    12 12 1

kssform2 3  # 1 is diago
iscf2    -2
getden2  -1
tolwfr2  1.0d-10
nband2   23
nbandkss2 -1        # Number of bands in KSS file (the maximum possible)
istwfk2  *1
kptopt2  1            # Option for the automatic generation of k points,
ngkpt2   10 10 1
nshiftk2 1
shiftk2  0 0 0
symmorphi2     0


#supercell 
acell    4.7177372151 4.7177372151 20.0 
rprim    1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
        -5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
         0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
 
#Definition of the atom types
ntypat  2           # There are two types of atoms
znucl   5 7         # The keyword "zatnum" refers to the atomic number of the
                    # possible type(s) of atom. The pseudopotential(s)
                    # mentioned in the "files" file must correspond
                    # to the type(s) of atom.
                           
 
#Definition of the atoms
natom   2           # There are two atoms
typat   1 2
xred
  6.6666666666E-01  3.3333333333E-01  0.0000000000E+00
 -6.6666666666E-01 -3.3333333333E-01  0.0000000000E+00

# KSS file
kssform   3 
iomode 3

#Definition of the planewave basis set
ecut  25.0         # Maximal kinetic energy cut-off, in Hartree
pawecutdg  25.0
pawovlp 5 
 
#Definition of the SCF procedure
nstep       100          # Maximal number of SCF cycles
diemac      4.50
tolsym      1.0d-5

 pp_dirpath "$ABI_PSPDIR"
 pseudos "B.GGA_PBE-JTH.xml,N.GGA_PBE-JTH.xml"

