#iscf -2
#irdden 1
#prtdos 1
#dosdeltae 0.02
#toldfe 1.D-9
#tolwfr 1.D-6
ndtset 14 udtset 7 2
iscf?1 7 getden?1 0 prtdos?1 0 dosdeltae?1 0.0 toldfe?1 1.D-9
iscf?2 -2 getden?2 -1 prtdos?2 1 dosdeltae?2 0.02 tolwfr?2 1.D-6
tsmear11 0.062388353531289
tsmear12 0.003166921499064
tsmear21 0.07030565727895
tsmear22 0.003166921499064
tsmear31 0.078222961026612
tsmear32 0.003166921499064
tsmear41 0.094057568521934
tsmear42 0.003166921499064
tsmear51 0.11780947976492
tsmear52 0.003166921499064
tsmear61 0.1415613910079
tsmear62 0.003166921499064
tsmear71 0.17323060599855
tsmear72 0.003166921499064
 occopt 3            # 3 = Fermi-Dirac smearing
nband  25                # number of bands

acell  3*6.93270035                # V/V0 = 1

rprim  0.   0.5   0.5           # FCC primitive vectors (to be scaled by acell)
       0.5  0.    0.5
       0.5  0.5   0.
chkprim 0
ntypat 1          # There is only one type of atom
znucl 28          # The keyword "znucl" refers to the atomic number of the
#Definition of the atoms
natom 1           # There is only one atom per cell
typat 1           # This atom is of type 1, that is, Nickel (Aluminum)
xred              # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom
 0.  0.   0.      # Triplet giving the REDUCED coordinate of atom 1.

#Definition of the planewave basis set
ecut  75.0        # Maximal kinetic energy cut-off, in Hartree

strfact  10000.

ixc 11             # GGA, Perdew-Burke-Ernzerhof GGA functional
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
ngkpt 21 21 21    # This is a 2x2x2 FCC grid, based on the primitive vectors
nshiftk 4         # of the reciprocal space. For a FCC real space lattice,
shiftk 0.5 0.5 0.5
       0.5 0.0 0.0
       0.0 0.5 0.0
       0.0 0.0 0.5

nstep 99          # Maximal number of SCF cycles


