# =======================================
# Cu, FCC test compute parameters U & J
# =======================================

#Tested input keywords
     irdden  1                  # Read input density
    prtdosm  1                  # print m-decomposed LDOS
     natsph  1                  # on first atom using PAW radius
     iatsph  1                  #

#Unit cell
      acell  3*3.61 angstrom
    chkprim  0                  # 0: do not check if uc primitive
      rprim  0.5 0.5 0.0
             0.5 0.0 0.5
             0.0 0.5 0.5

#Spin polarization
      nsppol  2                    #1 unpolarized / 2 polarized

#Definition of the atom types
     ntypat  1
      znucl  29

#Definition of the atoms
      natom  2
      typat  2*1                 # atomic types
       xred
             0.0 0.0 0.0
             0.5 0.5 0.5
       ecut  8                   # Energy cutoff
  pawecutdg  20                  # pawecutdg > 2*ecut
      nband  25                  # Fe_2 minband=17

#Definition of the SCF procedure
      nstep  10                  # max  number SCF cycles
     tolwfr  10d-12
       iscf  -3

#Definition of the k-point grid
     kptopt  1                    # 1:  automatic generation of k points
      ngkpt  3 3 3                # n x n x n
    nshiftk  1
     shiftk  0.5 0.5 0.5

#Smearing
     occopt  4
     tsmear  0.05 eV

#DFT+U
    usepawu  1                    # 1 at lim dble cnt / 2 rnd m fld dle cnt
      lpawu  2                    # ang moments corrrected
  dmatpuopt  4                    # normalization of occupation operator and hamiltonian

#Save disk space & Miscelaneous
     prteig  0
     prtden  0                    
      prtwf  0
  optforces  2
     prtdos  3                    # Mandatory with prtdosm=1
