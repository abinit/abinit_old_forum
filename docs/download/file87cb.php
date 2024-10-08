GENE                      # Format of input: generic format, with Symmetries
0 0 0 0.0                 # iskip (not presently used) idebug setgap shiftgap
    0.00000E+00 0.0005 0.4     60.0000  # Fermilevel (Ry), energy grid spacing, energy span around Fermilevel, number of electrons for this spin
CALC                      # CALC (calculate expansion coeff), NOCALC read from file
3                         # lpfac, number of latt-points per k-point
BOLTZ                     # run mode (only BOLTZ is supported)
.15                       # (efcut) energy range of chemical potential
300. 10.                  # Tmax, temperature grid spacing
-1                        # energyrange of bands given individual DOS output sig_xxx and dos_xxx (xxx is band number)
HISTO                     # DOS calculation method. Other possibility is TETRA
No                        # not using model for relaxation time
3                         # Number of doping levels coefficients will be output for
-1.e16 0.0d0 1.e16        # Values of doping levels (in carriers / cm^3
