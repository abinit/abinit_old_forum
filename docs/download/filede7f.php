acell 2*7.4331186300  1*7.0322206319
rprim
      1.00000000000  0.00000000000  0.00000000000
      0.00000000000  1.00000000000  0.00000000000
      0.00000000000  0.00000000000  1.00000000000

ntypat 3
znucl  57 13 8

natom 5
typat  1 2 3 3 3
xred
 0.000000000000000 0.000000000000000 0.000000000000000
 0.500000000000000 0.500000000000000 0.500000000000000
 0.500000000000000 0.500000000000000 0.000000000000000
 0.500000000000000 0.000000000000000 0.500000000000000
 0.000000000000000 0.500000000000000 0.500000000000000


kptopt 1
ngkpt 6 6 6
nshiftk 1
shiftk 0.5 0.5 0.5

ecut 40 Ha

chksymbreak 0                      # Checks if there is a potential to break symmetry
chkprim 0                          # Checks if the cell is primitive
              
#Exchange-correlation

ixc    11                          # -63 = PBEsol from libxc
                                   # Integer for exchange-correlation choice
                                   # 0 = No xc
                                   # 1 = LDA or LSD, Teter Pade parametrization
                                   # 2 = LDA, Perdew-Zunger-Ceperley-Alder
                                   #     -1009 in notation of libxc
                                   # 3 = LDA, old Teter rational polynomial 
                                   #     parametrization, fit to Ceperley-Alder
                                   #     data (no spin-polarization: no sp)
                                   # 4 = LDA, Wigner functional (no sp)
                                   # 5 = LDA, Hedin-Lundqvist functional (no sp)
                                   # 6 = LDA, "X-alpha" functional (no sp)
                                   # 7 = LDA or LSD, Perdew-Wang 92 functional
                                   # 8 = LDA or LSD, x-only part of the PW 92
                                   # 9 = LDA or LSD, x- and RPA part of the PW92
                                   # 10= GGA, Perdew-Burke-Ernzerhof

#Convergence parameters

#iscf    5                          # Integer for self-consistent-field cycles
                                   # 1 = get the largest eigenvalue 
                                   #     of the SCF cycle
                                   # 2 = SCF cycle, simple mixing
                                   # 3 = SCF cycle, anderson mixing
                                   # 5 = SCF cycle, CG based on the minim. 
                                   #     of the energy
                                   # -2= non-self-consistent calculation is 
                                   #     to be done. An electron density rho(r)
                                   #     on a real space grid will be read.
nstep   200                        # Max number of SCF cycles
toldfe  1.0d-8                     # Tolerance on the difference of 
                                   #     total energy (Ha)
tolmxf  1.0d-05                   # Tolerance on the maximal force (Ha/bohr)
diemac  25.0                       # Model dielectric macroscopic constant
                                   # 1 = simple mixing
                                   # A very large value (typically 10^6) 
                                   #     will damp all the long wavelength
                                   #     components of the potential. METALS
                                   # Dielectric constant of LAO is ~ 25

ecutsm 0.5                        # Energy cutoff smearing (Ha)

#Dynamical variables

ionmov  2                          # Ionic moves
                                   # 0 = do not move ions
                                   # 1 = move atoms using molecular dynamics 
                                   #     with optional viscous damping
                                   # 2 = conduct structural optimization using 
                                   #     the Broyden-Fletcher-Goldfarb-Shanno 
                                   #     minimization (BFGS)
                                   # 3 = 2 + take into account the total energy
                                   #     as well as the gradients 
                                   # 4 = conjugate gradient algorithm for 
                                   #     simultaneous optimization of 
                                   #     potential and ionic degrees of freedom.
                                   # 5 = Simple relaxation of ionic positions 
                                   #     according to (converged) forces
                                   # 6 = Verlet algorithm
                                   # 7 = Quenched Molecular dynamics using 
                                   #     the Verlet algorithm
                                   # 8 = Nose-Hoover thermostat, using 
                                   #     the Verlet algorithm.
                                   # 9 = Langevin molecular dynamics
ntime    200                         # Max number of steps

#Structural relaxation variables.

optcell 6                          # Optimize the cell shape and dimensions:
                                   # 0 = modify nuclear positions
                                   # 1 = optimisation of volume only
                                   # 2 = full optimization of cell geometry
                                   # 3 = constant-volume optimization of cell 
                                   # 4 = optimize acell(1)
                                   # 5 = optimize acell(2)
                                   # 6 = optimize acell(3)
                                   # 7 = optimize the cell geometry 
                                   #     while keeping the first vector unchang.
dilatmx 1.1                        # Maximal permitted scaling 
                                   # of the lattice parameters

# Berry Phase / Electric field


nband  16                         # need to specify the number of bands for finite field calculation
nbdbuf         0

ndtset   11     getwfk -1    getxred -1     getcell -1 # copy wavefunction, atomic positions and cell from previous calc.

berryopt1  -1       rfdir1    0 0 1
berryopt2  16       rfdir2    0 0 1         red_dfield2   0.0000  0.0000  0.005 
berryopt3  16       rfdir3    0 0 1         red_dfield3   0.0000  0.0000  0.010 
berryopt4  16       rfdir4    0 0 1         red_dfield4   0.0000  0.0000  0.015 
berryopt5  16       rfdir5    0 0 1         red_dfield5   0.0000  0.0000  0.020 
berryopt6  16       rfdir6    0 0 1         red_dfield6   0.0000  0.0000  0.025 
berryopt7  16       rfdir7    0 0 1         red_dfield7   0.0000  0.0000  0.030 
berryopt8  16       rfdir8    0 0 1         red_dfield8   0.0000  0.0000  0.035
berryopt9  16       rfdir9    0 0 1         red_dfield9   0.0000  0.0000  0.040
berryopt10 16       rfdir10   0 0 1         red_dfield10  0.0000  0.0000  0.045
berryopt11 16       rfdir11   0 0 1         red_dfield11  0.0000  0.0000  0.050
