#PAW

#paral_kgb 1 autoparal 1 max_ncpus 56
paral_kgb 1 npkpt 1 npfft 5 npband 10

# 1. Define physical system

#Definition of the unit cell (Bohr)
acell 23.0 23.0 23.0
  
rprim  1  0  0   # The primitive vectors for an FCC unit cell 
       0  1  0   
       0  0  1    

#Definition of the atom types
ntypat 3          # There are 3 atoms in CZT
znucl 48 25 52    # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom.                         

#Definition of the atoms
natom 64           # There three atoms in the unit cell
typat 1 1 2 2 1 2 1 2 2 2 1 1 1 1 2 1 1 2 1 2 2 1 1 1 2 1 2 2 2 1 2 2 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3
xred              # CdTe is also a Zinc-blende diamond structure
     0.000000000         0.000000000         0.000000000
     0.000000000         0.000000000         0.500000000
     0.000000000         0.500000000         0.000000000
     0.000000000         0.500000000         0.500000000
     0.500000000         0.000000000         0.000000000
     0.500000000         0.000000000         0.500000000
     0.500000000         0.500000000         0.000000000
     0.500000000         0.500000000         0.500000000
     0.000000000         0.250000000         0.250000000
    -0.000000000         0.250000000         0.750000018
    -0.000000000         0.750000018         0.250000000
    -0.000000000         0.750000018         0.750000018
     0.500000000         0.250000000         0.250000000
     0.500000000         0.250000000         0.750000018
     0.500000000         0.750000018         0.250000000
     0.500000000         0.750000018         0.750000018
     0.250000000         0.000000000         0.250000000
     0.250000000        -0.000000000         0.750000018
     0.250000000         0.500000000         0.250000000
     0.250000000         0.500000000         0.750000018
     0.750000018         0.000000000         0.250000000
     0.750000018        -0.000000000         0.750000018
     0.750000018         0.500000000         0.250000000
     0.750000018         0.500000000         0.750000018
     0.250000000         0.250000000         0.000000000
     0.250000000         0.250000000         0.500000000
     0.250000000         0.750000018         0.000000000
     0.250000000         0.750000018         0.500000000
     0.750000018         0.250000000         0.000000000
     0.750000018         0.250000000         0.500000000
     0.750000018         0.750000018         0.000000000
     0.750000018         0.750000018         0.500000000
     0.125000000         0.125000000         0.125000000
     0.125000000         0.125000000         0.625000028
     0.125000000         0.625000028         0.125000000
     0.125000000         0.625000028         0.625000028
     0.625000028         0.125000000         0.125000000
     0.625000028         0.125000000         0.625000028
     0.625000028         0.625000028         0.125000000
     0.625000028         0.625000028         0.625000028
     0.875000009         0.875000009         0.125000000
     0.875000009         0.875000009         0.625000028
     0.875000009         0.375000009         0.125000000
     0.875000009         0.375000009         0.625000028
     0.375000009         0.875000009         0.125000000
     0.375000009         0.875000009         0.625000028
     0.375000009         0.375000009         0.125000000
     0.375000009         0.375000009         0.625000028
     0.875000009         0.125000000         0.875000009
     0.875000009         0.125000000         0.375000009
     0.875000009         0.625000028         0.875000009
     0.875000009         0.625000028         0.375000009
     0.375000009         0.125000000         0.875000009
     0.375000009         0.125000000         0.375000009
     0.375000009         0.625000028         0.875000009
     0.375000009         0.625000028         0.375000009
     0.125000000         0.875000009         0.875000009
     0.125000000         0.875000009         0.375000009
     0.125000000         0.375000009         0.875000009
     0.125000000         0.375000009         0.375000009
     0.625000028         0.875000009         0.875000009
     0.625000028         0.875000009         0.375000009
     0.625000028         0.375000009         0.875000009
     0.625000028         0.375000009         0.375000009


# 2. Calculation parameters: cut-off energy, nbands and k-grid
nband 320          # Take twice the number of filled bands i.e. 2 e's per band

kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry		  
nsym 0
maxnsym 10000
chkprim 0

occopt 1
#tsmear 0.001

nshiftk 1         # of the reciprocal space (that form a BCC lattice !),
                  # repeated four times, with different shifts:
shiftk 0.5 0.5 0.5
       

# Converged parameters
ngkpt 2 2 2
ecutsm 0.5
pawecutdg 15
ecut 15


# 3. Calculation parameters: self-consistent field loop

#Definition of the SCF procedure
nstep 30          # Maximal number of SCF cycles
#toldfe 1.0d-6     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartrees) 
tolvrs 1.0d-6    # tolerance used in PAW1 tutorial; for potential residual
diemac 50.0       # Although this is not mandatory, it is often advantageous
                  # to precondition the SCF cycle. Here we follow the  
                  # prescription for bulk silicon.
#toldff 1.0d-6     # tolerance on forces
diemix 0.7

optcell 2
ionmov 2
tolmxf 1.0e-4
dilatmx 1.05
ntime 15

# 4. output
prteig 0
prtwf 0
prtden 0
