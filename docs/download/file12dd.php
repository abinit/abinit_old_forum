! PbTiO3 - drh

!comment out for second run
!postproc_setup = .true.
num_iter = 100

!comment out for first run
!restart = plot
!restart = wannierise

!optional for first run
!wannier_plot = .true.
!wannier_plot_supercell = 3
bands_plot = .true.

begin kpoint_path
G 0.00000 0.00000 0.0000 X 0.50000 0.00000 0.0000
X 0.50000 0.00000 0.0000 M 0.50000 0.50000 0.0000
M 0.50000 0.50000 0.0000 R 0.50000 0.50000 0.5000
R 0.50000 0.50000 0.5000 G 0.00000 0.00000 0.0000
end kpoint_path

wvfn_formatted = .false.

num_wann = 20
num_bands = 50
exclude_bands = 21-50

begin projections
!site:ang_mtm:zaxis:xaxis:radial:zona:box-size
random
O:p

!f=0.125,0.125,0.125 : l=0, mr=1 : r=4, zona= 0.5
!f=0.625,0.125,0.125 : l=0, mr=1 : r=4, zona= 0.5
!f=0.125,0.625,0.125 : l=0, mr=1 : r=4, zona= 0.5
!f=0.125,0.125,0.625 : l=0, mr=1 : r=4, zona= 0.5

end projections

mp_grid = 6 6 6

begin unit_cell_cart

3.87123787 0.00000000 0.00000000
0.00000000 3.87123787 0.00000000
0.00000000 0.00000000 4.26239634

!0.0000000000E+00 0.0000000000E+00 0.0000000000E+00
!3.6590150000E+00 3.6590150000E+00 4.3454665559E+00
!3.6590150000E+00 3.6590150000E+00 1.0008831463E+00
!0.0000000000E+00 3.6590150000E+00 5.0590278769E+00
!3.6590150000E+00 0.0000000000E+00 5.0590278769E+00

end unit_cell_cart

begin atoms_frac
Pb 0.0000000000E+00 0.0000000000E+00 0.0000000000E+00
Ti 5.0000000000E-01 5.0000000000E-01 5.3930972737E-01
O 5.0000000000E-01 5.0000000000E-01 1.2421819610E-01
O 0.0000000000E+00 5.0000000000E-01 6.2786881684E-01
O 5.0000000000E-01 0.0000000000E+00 6.2786881684E-01
end atoms_frac

begin kpoints
0.00000000E+00 0.00000000E+00 0.00000000E+00
1.66666667E-01 0.00000000E+00 0.00000000E+00
3.33333333E-01 0.00000000E+00 0.00000000E+00
5.00000000E-01 0.00000000E+00 0.00000000E+00
-3.33333333E-01 0.00000000E+00 0.00000000E+00
-1.66666667E-01 0.00000000E+00 0.00000000E+00
0.00000000E+00 1.66666667E-01 0.00000000E+00
1.66666667E-01 1.66666667E-01 0.00000000E+00
3.33333333E-01 1.66666667E-01 0.00000000E+00
5.00000000E-01 1.66666667E-01 0.00000000E+00
-3.33333333E-01 1.66666667E-01 0.00000000E+00
-1.66666667E-01 1.66666667E-01 0.00000000E+00
0.00000000E+00 3.33333333E-01 0.00000000E+00
1.66666667E-01 3.33333333E-01 0.00000000E+00
3.33333333E-01 3.33333333E-01 0.00000000E+00
5.00000000E-01 3.33333333E-01 0.00000000E+00
-3.33333333E-01 3.33333333E-01 0.00000000E+00
-1.66666667E-01 3.33333333E-01 0.00000000E+00
0.00000000E+00 5.00000000E-01 0.00000000E+00
1.66666667E-01 5.00000000E-01 0.00000000E+00
3.33333333E-01 5.00000000E-01 0.00000000E+00
5.00000000E-01 5.00000000E-01 0.00000000E+00
-3.33333333E-01 5.00000000E-01 0.00000000E+00
-1.66666667E-01 5.00000000E-01 0.00000000E+00
0.00000000E+00 -3.33333333E-01 0.00000000E+00
1.66666667E-01 -3.33333333E-01 0.00000000E+00
3.33333333E-01 -3.33333333E-01 0.00000000E+00
5.00000000E-01 -3.33333333E-01 0.00000000E+00
-3.33333333E-01 -3.33333333E-01 0.00000000E+00
-1.66666667E-01 -3.33333333E-01 0.00000000E+00
0.00000000E+00 -1.66666667E-01 0.00000000E+00
1.66666667E-01 -1.66666667E-01 0.00000000E+00
3.33333333E-01 -1.66666667E-01 0.00000000E+00
5.00000000E-01 -1.66666667E-01 0.00000000E+00
-3.33333333E-01 -1.66666667E-01 0.00000000E+00
-1.66666667E-01 -1.66666667E-01 0.00000000E+00
0.00000000E+00 0.00000000E+00 1.66666667E-01
1.66666667E-01 0.00000000E+00 1.66666667E-01
3.33333333E-01 0.00000000E+00 1.66666667E-01
5.00000000E-01 0.00000000E+00 1.66666667E-01
-3.33333333E-01 0.00000000E+00 1.66666667E-01
-1.66666667E-01 0.00000000E+00 1.66666667E-01
0.00000000E+00 1.66666667E-01 1.66666667E-01
1.66666667E-01 1.66666667E-01 1.66666667E-01
3.33333333E-01 1.66666667E-01 1.66666667E-01
5.00000000E-01 1.66666667E-01 1.66666667E-01
-3.33333333E-01 1.66666667E-01 1.66666667E-01
-1.66666667E-01 1.66666667E-01 1.66666667E-01
0.00000000E+00 3.33333333E-01 1.66666667E-01
1.66666667E-01 3.33333333E-01 1.66666667E-01
3.33333333E-01 3.33333333E-01 1.66666667E-01
5.00000000E-01 3.33333333E-01 1.66666667E-01
-3.33333333E-01 3.33333333E-01 1.66666667E-01
-1.66666667E-01 3.33333333E-01 1.66666667E-01
0.00000000E+00 5.00000000E-01 1.66666667E-01
1.66666667E-01 5.00000000E-01 1.66666667E-01
3.33333333E-01 5.00000000E-01 1.66666667E-01
5.00000000E-01 5.00000000E-01 1.66666667E-01
-3.33333333E-01 5.00000000E-01 1.66666667E-01
-1.66666667E-01 5.00000000E-01 1.66666667E-01
0.00000000E+00 -3.33333333E-01 1.66666667E-01
1.66666667E-01 -3.33333333E-01 1.66666667E-01
3.33333333E-01 -3.33333333E-01 1.66666667E-01
5.00000000E-01 -3.33333333E-01 1.66666667E-01
-3.33333333E-01 -3.33333333E-01 1.66666667E-01
-1.66666667E-01 -3.33333333E-01 1.66666667E-01
0.00000000E+00 -1.66666667E-01 1.66666667E-01
1.66666667E-01 -1.66666667E-01 1.66666667E-01
3.33333333E-01 -1.66666667E-01 1.66666667E-01
5.00000000E-01 -1.66666667E-01 1.66666667E-01
-3.33333333E-01 -1.66666667E-01 1.66666667E-01
-1.66666667E-01 -1.66666667E-01 1.66666667E-01
0.00000000E+00 0.00000000E+00 3.33333333E-01
1.66666667E-01 0.00000000E+00 3.33333333E-01
3.33333333E-01 0.00000000E+00 3.33333333E-01
5.00000000E-01 0.00000000E+00 3.33333333E-01
-3.33333333E-01 0.00000000E+00 3.33333333E-01
-1.66666667E-01 0.00000000E+00 3.33333333E-01
0.00000000E+00 1.66666667E-01 3.33333333E-01
1.66666667E-01 1.66666667E-01 3.33333333E-01
3.33333333E-01 1.66666667E-01 3.33333333E-01
5.00000000E-01 1.66666667E-01 3.33333333E-01
-3.33333333E-01 1.66666667E-01 3.33333333E-01
-1.66666667E-01 1.66666667E-01 3.33333333E-01
0.00000000E+00 3.33333333E-01 3.33333333E-01
1.66666667E-01 3.33333333E-01 3.33333333E-01
3.33333333E-01 3.33333333E-01 3.33333333E-01
5.00000000E-01 3.33333333E-01 3.33333333E-01
-3.33333333E-01 3.33333333E-01 3.33333333E-01
-1.66666667E-01 3.33333333E-01 3.33333333E-01
0.00000000E+00 5.00000000E-01 3.33333333E-01
1.66666667E-01 5.00000000E-01 3.33333333E-01
3.33333333E-01 5.00000000E-01 3.33333333E-01
5.00000000E-01 5.00000000E-01 3.33333333E-01
-3.33333333E-01 5.00000000E-01 3.33333333E-01
-1.66666667E-01 5.00000000E-01 3.33333333E-01
0.00000000E+00 -3.33333333E-01 3.33333333E-01
1.66666667E-01 -3.33333333E-01 3.33333333E-01
3.33333333E-01 -3.33333333E-01 3.33333333E-01
5.00000000E-01 -3.33333333E-01 3.33333333E-01
-3.33333333E-01 -3.33333333E-01 3.33333333E-01
-1.66666667E-01 -3.33333333E-01 3.33333333E-01
0.00000000E+00 -1.66666667E-01 3.33333333E-01
1.66666667E-01 -1.66666667E-01 3.33333333E-01
3.33333333E-01 -1.66666667E-01 3.33333333E-01
5.00000000E-01 -1.66666667E-01 3.33333333E-01
-3.33333333E-01 -1.66666667E-01 3.33333333E-01
-1.66666667E-01 -1.66666667E-01 3.33333333E-01
0.00000000E+00 0.00000000E+00 5.00000000E-01
1.66666667E-01 0.00000000E+00 5.00000000E-01
3.33333333E-01 0.00000000E+00 5.00000000E-01
5.00000000E-01 0.00000000E+00 5.00000000E-01
-3.33333333E-01 0.00000000E+00 5.00000000E-01
-1.66666667E-01 0.00000000E+00 5.00000000E-01
0.00000000E+00 1.66666667E-01 5.00000000E-01
1.66666667E-01 1.66666667E-01 5.00000000E-01
3.33333333E-01 1.66666667E-01 5.00000000E-01
5.00000000E-01 1.66666667E-01 5.00000000E-01
-3.33333333E-01 1.66666667E-01 5.00000000E-01
-1.66666667E-01 1.66666667E-01 5.00000000E-01
0.00000000E+00 3.33333333E-01 5.00000000E-01
1.66666667E-01 3.33333333E-01 5.00000000E-01
3.33333333E-01 3.33333333E-01 5.00000000E-01
5.00000000E-01 3.33333333E-01 5.00000000E-01
-3.33333333E-01 3.33333333E-01 5.00000000E-01
-1.66666667E-01 3.33333333E-01 5.00000000E-01
0.00000000E+00 5.00000000E-01 5.00000000E-01
1.66666667E-01 5.00000000E-01 5.00000000E-01
3.33333333E-01 5.00000000E-01 5.00000000E-01
5.00000000E-01 5.00000000E-01 5.00000000E-01
-3.33333333E-01 5.00000000E-01 5.00000000E-01
-1.66666667E-01 5.00000000E-01 5.00000000E-01
0.00000000E+00 -3.33333333E-01 5.00000000E-01
1.66666667E-01 -3.33333333E-01 5.00000000E-01
3.33333333E-01 -3.33333333E-01 5.00000000E-01
5.00000000E-01 -3.33333333E-01 5.00000000E-01
-3.33333333E-01 -3.33333333E-01 5.00000000E-01
-1.66666667E-01 -3.33333333E-01 5.00000000E-01
0.00000000E+00 -1.66666667E-01 5.00000000E-01
1.66666667E-01 -1.66666667E-01 5.00000000E-01
3.33333333E-01 -1.66666667E-01 5.00000000E-01
5.00000000E-01 -1.66666667E-01 5.00000000E-01
-3.33333333E-01 -1.66666667E-01 5.00000000E-01
-1.66666667E-01 -1.66666667E-01 5.00000000E-01
0.00000000E+00 0.00000000E+00 -3.33333333E-01
1.66666667E-01 0.00000000E+00 -3.33333333E-01
3.33333333E-01 0.00000000E+00 -3.33333333E-01
5.00000000E-01 0.00000000E+00 -3.33333333E-01
-3.33333333E-01 0.00000000E+00 -3.33333333E-01
-1.66666667E-01 0.00000000E+00 -3.33333333E-01
0.00000000E+00 1.66666667E-01 -3.33333333E-01
1.66666667E-01 1.66666667E-01 -3.33333333E-01
3.33333333E-01 1.66666667E-01 -3.33333333E-01
5.00000000E-01 1.66666667E-01 -3.33333333E-01
-3.33333333E-01 1.66666667E-01 -3.33333333E-01
-1.66666667E-01 1.66666667E-01 -3.33333333E-01
0.00000000E+00 3.33333333E-01 -3.33333333E-01
1.66666667E-01 3.33333333E-01 -3.33333333E-01
3.33333333E-01 3.33333333E-01 -3.33333333E-01
5.00000000E-01 3.33333333E-01 -3.33333333E-01
-3.33333333E-01 3.33333333E-01 -3.33333333E-01
-1.66666667E-01 3.33333333E-01 -3.33333333E-01
0.00000000E+00 5.00000000E-01 -3.33333333E-01
1.66666667E-01 5.00000000E-01 -3.33333333E-01
3.33333333E-01 5.00000000E-01 -3.33333333E-01
5.00000000E-01 5.00000000E-01 -3.33333333E-01
-3.33333333E-01 5.00000000E-01 -3.33333333E-01
-1.66666667E-01 5.00000000E-01 -3.33333333E-01
0.00000000E+00 -3.33333333E-01 -3.33333333E-01
1.66666667E-01 -3.33333333E-01 -3.33333333E-01
3.33333333E-01 -3.33333333E-01 -3.33333333E-01
5.00000000E-01 -3.33333333E-01 -3.33333333E-01
-3.33333333E-01 -3.33333333E-01 -3.33333333E-01
-1.66666667E-01 -3.33333333E-01 -3.33333333E-01
0.00000000E+00 -1.66666667E-01 -3.33333333E-01
1.66666667E-01 -1.66666667E-01 -3.33333333E-01
3.33333333E-01 -1.66666667E-01 -3.33333333E-01
5.00000000E-01 -1.66666667E-01 -3.33333333E-01
-3.33333333E-01 -1.66666667E-01 -3.33333333E-01
-1.66666667E-01 -1.66666667E-01 -3.33333333E-01
0.00000000E+00 0.00000000E+00 -1.66666667E-01
1.66666667E-01 0.00000000E+00 -1.66666667E-01
3.33333333E-01 0.00000000E+00 -1.66666667E-01
5.00000000E-01 0.00000000E+00 -1.66666667E-01
-3.33333333E-01 0.00000000E+00 -1.66666667E-01
-1.66666667E-01 0.00000000E+00 -1.66666667E-01
0.00000000E+00 1.66666667E-01 -1.66666667E-01
1.66666667E-01 1.66666667E-01 -1.66666667E-01
3.33333333E-01 1.66666667E-01 -1.66666667E-01
5.00000000E-01 1.66666667E-01 -1.66666667E-01
-3.33333333E-01 1.66666667E-01 -1.66666667E-01
-1.66666667E-01 1.66666667E-01 -1.66666667E-01
0.00000000E+00 3.33333333E-01 -1.66666667E-01
1.66666667E-01 3.33333333E-01 -1.66666667E-01
3.33333333E-01 3.33333333E-01 -1.66666667E-01
5.00000000E-01 3.33333333E-01 -1.66666667E-01
-3.33333333E-01 3.33333333E-01 -1.66666667E-01
-1.66666667E-01 3.33333333E-01 -1.66666667E-01
0.00000000E+00 5.00000000E-01 -1.66666667E-01
1.66666667E-01 5.00000000E-01 -1.66666667E-01
3.33333333E-01 5.00000000E-01 -1.66666667E-01
5.00000000E-01 5.00000000E-01 -1.66666667E-01
-3.33333333E-01 5.00000000E-01 -1.66666667E-01
-1.66666667E-01 5.00000000E-01 -1.66666667E-01
0.00000000E+00 -3.33333333E-01 -1.66666667E-01
1.66666667E-01 -3.33333333E-01 -1.66666667E-01
3.33333333E-01 -3.33333333E-01 -1.66666667E-01
5.00000000E-01 -3.33333333E-01 -1.66666667E-01
-3.33333333E-01 -3.33333333E-01 -1.66666667E-01
-1.66666667E-01 -3.33333333E-01 -1.66666667E-01
0.00000000E+00 -1.66666667E-01 -1.66666667E-01
1.66666667E-01 -1.66666667E-01 -1.66666667E-01
3.33333333E-01 -1.66666667E-01 -1.66666667E-01
5.00000000E-01 -1.66666667E-01 -1.66666667E-01
-3.33333333E-01 -1.66666667E-01 -1.66666667E-01
-1.66666667E-01 -1.66666667E-01 -1.66666667E-01
end kpoints
