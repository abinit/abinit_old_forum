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
    istwfk      8*1
     ngkpt      4      4      4
     nstep    100
   nshiftk      1
    shiftk      0.00   0.00   0.00
    enunit      2

    ndtset     6 

# Self-consistent run to get the density
      iscf1     5
    toldfe1     1.00d-6

# Non-self-consistent run to get all cg wavefunctions
    getden2     1
    getwfk2     1
      iscf2     -2
    tolwfr2     1.0d-10
     nband2     30

   kssform2     3   # This option MUST be set to 3 so that conjugate-gradient
                    #  wavefunctions are used as basis functions in the
                    #  GW calculation. Otherwise, the wannier90 interface
                    #  will produce inconsistent, probably random results.
  nbandkss2     27
    npwkss2     89


# Calculation of the dielectric matrix - iteration 1
 optdriver3     3
 gwcalctyp3    28
    getkss3     2

     nband3    10
    npweps3    27 
    npwwfn3    27
      awtr3       0       # Note : the default awtr 1 is better

# Calculation of the model GW corrections - iteration 1
 optdriver4     4
 gwcalctyp4    28
    getkss4     2
    getscr4     3
     nband4    10
   npwsigx4    27 
    npwwfn4    27 

# Calculation of the dielectric matrix - iteration 2
 optdriver5     3
 gwcalctyp5    28
    getkss5     2
    getqps5     4

     nband5    10
    npweps5    27 
    npwwfn5    27 
      awtr5       0       # Note : the default awtr 1 is better

# Calculation of the model GW corrections - iteration 2

 optdriver6     4
 gwcalctyp6    28
    getkss6     2
    getqps6     4
    getscr6     5
     nband6    10
   npwsigx6    27 
    npwwfn6    27 

# Calculation of the quasiparticle Wannier functions

#    getden7     1
#    getwfk7     2   # Must point to lda wavefunction file completely
                    #  consistent with _KSS file generated for GW
#    getqps7     6
#    kptopt7     3   # Must use full-zone k mesh for wannier90
#    istwfk7     64*1
#      iscf7     -2
#     nstep7     0   # Irreducible-zone wavefunctions will be transformed
                    #  using symmetry operations to fill the full zone,
                    #  and must not be modified (for consistency with GW)

#    tolwfr7     1.0d-10   # Dummy, but necessary
#     nband7     10  # Must be consistent with nband in quasiparticle GW above

#   prtwant7     3   # Flag for wannier90 interface with quaisparticles

# w90iniprj7     2   # Flag to use hydrogenic or gaussian orbital initial
                    #  projectors (to be specified in *.win file)

# w90prtunk7     0   # Flag for producing UNK files necessary for plotting
                    #  (suppressed here by 0 value)


#Common to all model GW calculations
   rhoqpmix     0.5
     nkptgw     8
      kptgw     
              0.00000000E+00  0.00000000E+00  0.00000000E+00
              2.50000000E-01  0.00000000E+00  0.00000000E+00
              5.00000000E-01  0.00000000E+00  0.00000000E+00
              2.50000000E-01  2.50000000E-01  0.00000000E+00
              5.00000000E-01  2.50000000E-01  0.00000000E+00
             -2.50000000E-01  2.50000000E-01  0.00000000E+00
              5.00000000E-01  5.00000000E-01  0.00000000E+00
             -2.50000000E-01  5.00000000E-01  2.50000000E-01
       bdgw   
              1  8   # Only bands 1-8 are quasiparticle.  LDA will be used for
                    #  bands 9 and 10 in the wannier90 calculation.
              1  8
              1  8
              1  8
              1  8
              1  8
              1  8
              1  8

