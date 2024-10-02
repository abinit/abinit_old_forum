SYSTEM = SrMoO3 Pm3m Polarized LDA
ALGO = FAST
NPAR = 4
KPAR = 7
ISMEAR = -1 ! Fermi Smearing
ISTART = 0
ICHARG = 11

lda+u:
LDAU = .TRUE.
LDAUTYPE = 2
LDAUL = -1 2 -1
LDAUU = 0.0 5.0 0.0
LDAUJ = 0.0 0.5 0.0

spin:
ISPIN = 2 ! Spin Polarized - comment out in the case of Non-collinear
# MAGMOM 1 10 1 1 1

bandstructure:
NSW = 0 ! Ionic Steps
IBRION = -1 ! No move
NBANDS = 50

