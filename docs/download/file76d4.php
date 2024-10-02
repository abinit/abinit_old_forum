optdriver   3   # Screening run
irdkss      1   # To read the KSS file
symchi      1   # Use symmetries to speedup the BZ integration
gwpara      2   # Parallelization over bands
awtr        1   # Take advantage of time-reversal. Mandatory when gwpara=2 is used.
ecutwfn     40
ecuteps     8   # Cutoff for the polarizability.
nband       100  # Number of bands in the RPA expression (24 occupied bands)
inclvkb     2   # Correct treatment of the optical limit.
gwcalctyp 2
nfreqim 10
nfreqre 10
freqremax 1.0


# number of self-consistent field steps
nstep        2000
#diemac       4.0

# energy cutoff [Ha]:
ecut         100

#Definition of the k-point grid
occopt 4       
tsmear 0.01
kptopt 1           # Option for the automatic generation of k points, taking
                   # into account the symmetry

ngkpt   6 6 6
nshiftk  1
shiftk  0.0 0.0 0.0

#spinat 0.0 0.0  1.0
#       0.0 0.0 -1.0
#nsppol   2

spinat 0 0 1
       0 0 -1
       0 0 0
       0 0 0
nsppol  1
nspden  2
#nspinor 1
                      
istwfk  *1

# Definition of the atom types
npsp   2
znucl  28  8
ntypat 2
chkprim 0

# Definition of the atoms
#natom 8
#natrd 2
#spgroup 225
#natom 2
natom 4
#typat 1 2
typat 1 1 2 2
#acell  4.4081 4.4081 4.4081  Angstrom
#angdeg 90 90 90
#xred 0.0000 0.0000 0.0000
#     0.5000 0.5000 0.5000

xred 0 0 0
    0.0 0.0 0.5
    0.5 0.5 0.25
    0.5 0.5 0.75
acell   3*7.92
rprim 0.0 1/2 1/2
      1/2 0.0 1/2
      1.0 1.0 0.0


