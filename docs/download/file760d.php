 
ndtset 11


#DS 1: Ground State
#*****************************************************
getwfk1   0             #no use of prev. computed wf

kptopt1   1             #rely on ngkpt shiftk for k-points
                        #take fully into account the symmetry to generate the k points in the Irreducible Brillouin Zone only, with the appropriate weights.
                        
nqpt1     0             #use kptopt and stuff
tolvrs1   1.0d-18       
rfphon1   0            #just 1 if we run phonon cal

nqpt   1               #If 1 and used in ground-state calculation, a global shift of all the k-points is applied
                       #to give calculation at k+q


#DS 2 : Response function calculation of d/dk wave function 
#*****************************************************
#since npqt=1 the qpt values are read
qpt2 0.00000000E+00  0.00000000E+00  0.00000000E+00

iscf2     -3         #non-self c. calculation, initialize occ and wtk
                     #depends  ngkpt 
                     
kptopt2   2          # rely on ngkpt, shiftk, only time-reversal sym
                     #Take into account only the time-reversal symmetry

rfphon2   0          # Cancel default

rfelfd2   2          # response func. w.r. to electric field, 
                     #only derivatives of GS wf with respect to k (d/dk)
                     
tolwfr2   1.0d-22    # Use wave function residual criterion instead


#DS 3 : Response function calculation of Q=0 phonons and electric field pert.
#*****************************************************

qpt3 0.00000000E+00  0.00000000E+00  0.00000000E+00

getddk3   2          # d/dk wave functions from last dataset

kptopt3   2          # Modify default to use time-reversal symmetry
                     #usual mode for RF cal at q=(0 0 0)



rfelfd3   3          # Electric-field perturbation response only
                     #this again needs step 2. 

                     
#DS 4 Strain Pertubation of Q=0 
#*************************************************
qpt4 0.00000000E+00  0.00000000E+00  0.00000000E+00

getddk4   2
getwfk4   1
kptopt4   2
rfstrs4   3
rfphon4    1          # Do phonon response
rfatpol4   1 12        # Treat displacements of all atoms
rfdir4     1 1 1      # Do all directions (symmetry will be used)
tolvrs4    1.0d-8     # This default is active for sets 3-67
                     
#DS 5-65 
#*****************************************************



qpt5  5.00000000E-01  0.00000000E+00  0.00000000E+00
qpt6  0.00000000E+00  5.00000000E-01  0.00000000E+00
qpt7  5.00000000E-01  5.00000000E-01  0.00000000E+00
qpt8  0.00000000E+00  0.00000000E+00  5.00000000E-01
qpt9  5.00000000E-01  0.00000000E+00  5.00000000E-01
qpt10  0.00000000E+00  5.00000000E-01  5.00000000E-01
qpt11 5.00000000E-01  5.00000000E-01  5.00000000E-01


getwfk    1          # Use GS wave functions from dataset1

kptopt    3          # Need full k-point set for finite-Q response
                     # rely on ngkpt or kptrlatt, as well as on nshiftk and shiftk to set up the k points.
                     # Do not take into account any symmetry
                     # Usual mode for RF cal. at q= non-zero

rfphon    1          # Do phonon response
rfatpol   1 12        # Treat displacements of all atoms
rfdir     1 1 1      # Do all directions (symmetry will be used)
tolvrs    1.0d-8     # This default is active for sets 3-67



#Definition of the unit cell
#*****************************************************
acell    1.0    1.0    1.0
 rprim
    9.5516206969    0.0000000000    0.0000000000
    0.0000000000    9.9613133207    0.0000000000
    0.0000000000    0.0000000000    9.6064227545

#Definition of the atoms
#*****************************************************
natom 12
 ntypat 2
 typat
 1 1 1
 1 2 2
 2 2 2
 2 2 2
 znucl 72 8
 xred
    0.0320000000    0.2670000000    0.3563500000
    0.9680000000    0.7330000000    0.8563500000
    0.5320000000    0.7330000000    0.3563500000
    0.4680000000    0.2670000000    0.8563500000
    0.1349800000    0.0681400000    0.0000000000
    0.8650200000    0.9318600000    0.5000000000
    0.6349800000    0.9318600000    0.0000000000
    0.3650200000    0.0681400000    0.5000000000
    0.2696000000    0.5375000000    0.1064500000
    0.7304000000    0.4625000000    0.6064500000
    0.7696000000    0.4625000000    0.1064500000
    0.2304000000    0.5375000000    0.6064500000

ixc 1

ecut    15
ecutsm 0.5

ngkpt 2 2 2
nshiftk 1
shiftk 0.0 0.0 0.0


#Definition of the SCF procedure
    nstep   25         # Maximal number of SCF cycles
   diemac   9.0
