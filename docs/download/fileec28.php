# to find k points
ngkpt  4 4 4
#######################################################################
#Common input variables

#Definition of the unit cell
acell   3*22.885870123         # This is equivalent to   10.61 10.61 10.61
rprim  
       -0.5  0.5  0.5          # BCC 
        0.5 -0.5  0.5
        0.5  0.5 -0.5

#Definition of the atom types
npsp   3                 ! 3 pseudopotentials should be read.
znucl  50 50 31          ! The nuclear charges. Note that the two
                         ! atoms whose pseudopotentials are to be mixed
                         ! are mentioned at the end of the series.
ntypat  2                ! There will be two types of atoms.
ntypalch   1             ! One pseudoatom will be alchemical.
                         ! Hence, there will be ntyppure=1 pure pseudoatoms,
                         ! with znucl 63 (Eu), corresponding to
                         ! the first pseudopotential. Out of the
                         ! three pseudopotentials, npspalch=2 are left
                         ! for alchemical purposes, with znucl 31 (Ga)
                         ! and 32 (Ge).
mixalch  0.4667 0.5333    ! For that unique pseudoatom to be
                              ! generated, here are the mixing coeeficients,
                              ! to be used to combine the Ga and Ge pseudopotentials.
                         

#Definition of the atoms
natom 46          # There are 54 atoms
typat  1 1 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2
                       
      xred    3.5107502397E-02  3.5107502397E-02  3.5107502397E-02
              5.3564487553E-01  5.3564487553E-01  5.3564487553E-01
              2.8076518966E-01  2.8076518966E-01  2.8076518966E-01
              7.4413978697E-01  7.4413978697E-01  4.7667876355E-01
              7.4413978697E-01  4.7667876355E-01  7.4413978697E-01
              4.7667876355E-01  7.4413978697E-01  7.4413978697E-01
              7.8047495827E-01  7.8047495827E-01  7.8047495827E-01
              2.4323421402E-01  2.4323421402E-01  9.7989295302E-01
              2.4323421402E-01  9.7989295302E-01  2.4323421402E-01
              9.7989295302E-01  2.4323421402E-01  2.4323421402E-01
              4.8406796968E-01  4.8406796968E-01  2.4136749410E-01
              6.5730073259E-01  6.5730073259E-01  1.5272445284E-01
              4.9290897639E-01  3.3747204347E-01  7.7554245157E-01
              3.3747204347E-01  4.9290897639E-01  7.7554245157E-01
              2.4136749410E-01  4.8406796968E-01  4.8406796968E-01
              1.5272445284E-01  6.5730073259E-01  6.5730073259E-01
              7.7554245157E-01  4.9290897639E-01  3.3747204347E-01
              7.7554245157E-01  3.3747204347E-01  4.9290897639E-01
              4.8406796968E-01  2.4136749410E-01  4.8406796968E-01
              6.5730073259E-01  1.5272445284E-01  6.5730073259E-01
              3.3747204347E-01  7.7554245157E-01  4.9290897639E-01
              4.9290897639E-01  7.7554245157E-01  3.3747204347E-01
              9.8281839216E-01  9.8281839216E-01  7.3994948605E-01
              1.6255110203E-01  1.6255110203E-01  6.6070366161E-01
             -9.2738121770E-03  8.3580235895E-01  2.7159087699E-01
              8.3580235895E-01 -9.2738121770E-03  2.7159087699E-01
              7.3994948605E-01  9.8281839216E-01  9.8281839216E-01
              6.6070366161E-01  1.6255110203E-01  1.6255110203E-01
              2.7159087699E-01 -9.2738121770E-03  8.3580235895E-01
              2.7159087699E-01  8.3580235895E-01 -9.2738121770E-03
              9.8281839216E-01  7.3994948605E-01  9.8281839216E-01
              1.6255110203E-01  6.6070366161E-01  1.6255110203E-01
              8.3580235895E-01  2.7159087699E-01 -9.2738121770E-03
             -9.2738121770E-03  2.7159087699E-01  8.3580235895E-01
              3.0393763326E-01  5.3992118667E-01  2.6697735743E-02
              8.0533304715E-01  5.2441368160E-01  4.1399508995E-02
              2.6697735743E-02  3.0393763326E-01  5.3992118667E-01
              4.1399508995E-02  8.0533304715E-01  5.2441368160E-01
              5.3992118667E-01  2.6697735743E-02  3.0393763326E-01
              5.2441368160E-01  4.1399508995E-02  8.0533304715E-01
              5.3992118667E-01  3.0393763326E-01  2.6697735743E-02
              5.2441368160E-01  8.0533304715E-01  4.1399508995E-02
              3.0393763326E-01  2.6697735743E-02  5.3992118667E-01
              8.0533304715E-01  4.1399508995E-02  5.2441368160E-01
              2.6697735743E-02  5.3992118667E-01  3.0393763326E-01
              4.1399508995E-02  5.2441368160E-01  8.0533304715E-01 

#Gives the number of band, explicitely (do not take the default)
    nband   100         

#Exchange-correlation functional

      ixc   1             # LDA Teter Pade parametrization

#Definition of the planewave basis set

     ecut   20.0           # Maximal kinetic energy cut-off, in Hartree

#Definition of the k-point grid
  kptopt 1        
  nshiftk   1              # Use one copy of grid only (default)
  shiftk   0.0 0.0 0.0     # This gives the usual fcc Monkhorst-Pack grid
           

#Definition of the SCF procedure
     iscf   5          # Self-consistent calculation, using algorithm 5
    nstep   1          # Maximal number of SCF cycles
    nline   1
   diemac   12.0        # Although this is not mandatory, it is worth to
                       # precondition the SCF cycle. The model dielectric
                       # function used as the standard preconditioner
                       # is described in the "dielng" input variable section.
                       # The dielectric constant of AlAs is smaller that the one of Si (=12).