# Self-consistent GW test including wannier90 interface for GW quasiparticles
#  This test is poorly converged (see GW and wannier90 tutorials).

# Silicon structure
     acell     10.263  10.263  10.263
     rprim      0.00   0.50   0.50
                0.50   0.00   0.50
                0.50   0.50   0.00
     natom      2
      xred      0.00   0.00   0.00
                0.25   0.25   0.25
    ntypat      1
     typat      1      1
     znucl     14.00
 symmorphi      0

# Parameters common to all runs
      ecut      6.00
#    istwfk      8*1
     ngkpt      4      4      4
#     nstep    100
   nshiftk      1
    shiftk      0.00   0.00   0.00
    enunit      2



# Calculation of the quasiparticle Wannier functions

    getden     1
    irdwfk     1   # Must point to lda wavefunction file completely
                    #  consistent with _KSS file generated for GW
    irdqps     1
    kptopt     3   # Must use full-zone k mesh for wannier90
    istwfk     64*1
      iscf     -2
     nstep     0   # Irreducible-zone wavefunctions will be transformed
                    #  using symmetry operations to fill the full zone,
                    #  and must not be modified (for consistency with GW)

    tolwfr     1.0d-10   # Dummy, but necessary
     nband     10  # Must be consistent with nband in quasiparticle GW above

   prtwant     3   # Flag for wannier90 interface with quaisparticles

 w90iniprj     4   # Flag to use hydrogenic or gaussian orbital initial
                   #  projectors (to be specified in *.win file)

 w90prtunk     0   # Flag for producing UNK files necessary for plotting
                    #  (suppressed here by 0 value)


