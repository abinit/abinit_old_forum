# Crystalline silicon : computation of the total energy
#
ixc 11 #use gga
irdwfk 1 #resume

#Definition of the unit cell

acell 32.488169196 40.194471777 68.030135589
angdeg 90 90 90

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 6          # The keyword "znucl" refers to the atomic number of the
                  # possible type(s) of atom. The pseudopotential(s)
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.

#Definition of the atoms
natom 140           # There are two atoms
typat 140*1
xangst

   0.00000   0.70901   0.00000
   0.00000   3.54499   0.00000
   1.22800   2.83601   0.00000
   1.22800   1.41799   0.00000
   0.00000   4.96301   0.00000
   0.00000   7.79899   0.00000
   1.22800   7.09001   0.00000
   1.22800   5.67199   0.00000
   0.00000   9.21701   0.00000
   0.00000  12.05299   0.00000
   1.22800  11.34401   0.00000
   1.22800   9.92599   0.00000
   0.00000  13.47101   0.00000
   0.00000  16.30699   0.00000
   1.22800  15.59801   0.00000
   1.22800  14.17999   0.00000
   0.00000  17.72501   0.00000
   0.00000  20.56099   0.00000
   1.22800  19.85201   0.00000
   1.22800  18.43399   0.00000
   2.45600   0.70901   0.00000
   2.45600   3.54499   0.00000
   3.68400   2.83601   0.00000
   3.68400   1.41799   0.00000
   2.45600   4.96301   0.00000
   2.45600   7.79899   0.00000
   3.68400   7.09001   0.00000
   3.68400   5.67199   0.00000
   2.45600   9.21701   0.00000
   2.45600  12.05299   0.00000
   3.68400  11.34401   0.00000
   3.68400   9.92599   0.00000
   2.45600  13.47101   0.00000
   2.45600  16.30699   0.00000
   3.68400  15.59801   0.00000
   3.68400  14.17999   0.00000
   2.45600  17.72501   0.00000
   2.45600  20.56099   0.00000
   3.68400  19.85201   0.00000
   3.68400  18.43399   0.00000
   4.91200   0.70901   0.00000
   4.91200   3.54499   0.00000
   6.14000   2.83601   0.00000
   6.14000   1.41799   0.00000
   4.91200   4.96301   0.00000
   4.91200   7.79899   0.00000
   6.14000   7.09001   0.00000
   6.14000   5.67199   0.00000
   4.91200   9.21701   0.00000
   4.91200  12.05299   0.00000
   6.14000  11.34401   0.00000
   6.14000   9.92599   0.00000
   4.91200  13.47101   0.00000
   4.91200  16.30699   0.00000
   6.14000  15.59801   0.00000
   6.14000  14.17999   0.00000
   4.91200  17.72501   0.00000
   4.91200  20.56099   0.00000
   6.14000  19.85201   0.00000
   6.14000  18.43399   0.00000
   7.36800   0.70901   0.00000
   7.36800   3.54499   0.00000
   8.59600   2.83601   0.00000
   8.59600   1.41799   0.00000
   7.36800   4.96301   0.00000
   7.36800   7.79899   0.00000
   8.59600   7.09001   0.00000
   8.59600   5.67199   0.00000
   7.36800   9.21701   0.00000
   7.36800  12.05299   0.00000
   8.59600  11.34401   0.00000
   8.59600   9.92599   0.00000
   7.36800  13.47101   0.00000
   7.36800  16.30699   0.00000
   8.59600  15.59801   0.00000
   8.59600  14.17999   0.00000
   7.36800  17.72501   0.00000
   7.36800  20.56099   0.00000
   8.59600  19.85201   0.00000
   8.59600  18.43399   0.00000
   9.82400   0.70901   0.00000
   9.82400   3.54499   0.00000
  11.05200   2.83601   0.00000
  11.05200   1.41799   0.00000
   9.82400   4.96301   0.00000
   9.82400   7.79899   0.00000
  11.05200   7.09001   0.00000
  11.05200   5.67199   0.00000
   9.82400   9.21701   0.00000
   9.82400  12.05299   0.00000
  11.05200  11.34401   0.00000
  11.05200   9.92599   0.00000
   9.82400  13.47101   0.00000
   9.82400  16.30699   0.00000
  11.05200  15.59801   0.00000
  11.05200  14.17999   0.00000
   9.82400  17.72501   0.00000
   9.82400  20.56099   0.00000
  11.05200  19.85201   0.00000
  11.05200  18.43399   0.00000
  12.28000   0.70901   0.00000
  12.28000   3.54499   0.00000
  13.50800   2.83601   0.00000
  13.50800   1.41799   0.00000
  12.28000   4.96301   0.00000
  12.28000   7.79899   0.00000
  13.50800   7.09001   0.00000
  13.50800   5.67199   0.00000
  12.28000   9.21701   0.00000
  12.28000  12.05299   0.00000
  13.50800  11.34401   0.00000
  13.50800   9.92599   0.00000
  12.28000  13.47101   0.00000
  12.28000  16.30699   0.00000
  13.50800  15.59801   0.00000
  13.50800  14.17999   0.00000
  12.28000  17.72501   0.00000
  12.28000  20.56099   0.00000
  13.50800  19.85201   0.00000
  13.50800  18.43399   0.00000
  14.73600   0.70901   0.00000
  14.73600   3.54499   0.00000
  15.96400   2.83601   0.00000
  15.96400   1.41799   0.00000
  14.73600   4.96301   0.00000
  14.73600   7.79899   0.00000
  15.96400   7.09001   0.00000
  15.96400   5.67199   0.00000
  14.73600   9.21701   0.00000
  14.73600  12.05299   0.00000
  15.96400  11.34401   0.00000
  15.96400   9.92599   0.00000
  14.73600  13.47101   0.00000
  14.73600  16.30699   0.00000
  15.96400  15.59801   0.00000
  15.96400  14.17999   0.00000
  14.73600  17.72501   0.00000
  14.73600  20.56099   0.00000
  15.96400  19.85201   0.00000
  15.96400  18.43399   0.00000

#Definition of the planewave basis set
ecut  40.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the k-point grid
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
ngkpt 6 6 1       # This is a 2x2x2 grid based on the primitive vectors
nshiftk 1         # of the reciprocal space (that form a BCC lattice !),
                  # repeated four times, with different shifts :
shiftk 0  0  0
                  # In cartesian coordinates, this grid is simple cubic, and
                  # actually corresponds to the
                  # so-called 4x4x4 Monkhorst-Pack grid

#Definition of the SCF procedure
nstep 2          # Maximal number of SCF cycles
toldfe 1.0d-6     # Will stop when, twice in a row, the difference
                  # between two consecutive evaluations of total energy
                  # differ by less than toldfe (in Hartree)
                  # This value is way too large for most realistic studies of materials
diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1

#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test =
#%%   tbase3_1.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00
#%% psp_files =  14si.pspnc
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors =
#%% keywords =
#%% description =
#%%<END TEST_INFO>
