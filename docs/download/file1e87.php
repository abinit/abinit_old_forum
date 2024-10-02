# 1 free-standing graphene layer 
#
# Calculation of the G_0 W_0 corrections
 
ndtset  3

#################################################################################################
#################################################################################################
# Usual self-consistent ground-state calculation
    prtden1     1               # Print out density
    prtvha1     1               # Print out the Hartree potential
     nband1     16
  nbandkss1     16              # Number of bands in KSS file (the maximum possible)
   kssform1     3               # conjugate gradient algorithm
     
# Calculation of the  dielectric matrix
 optdriver2     3
    getkss2    -1 
   ecuteps2     3.0
   ecutwfn2    25.0
      awtr2     1
     nband2     16
    gw_EET2     2   # switch on energy effective technique (EET) by Berger et al. PRB 82, 041103 (2010).
    
# Calculation of the GW corrections
 optdriver3     4 
    getkss3    -2
    getscr3    -1
     nband3     16
   ecutwfn3    25.0
  ecutsigx3    25.0
    gw_EET3     2   # switch on energy effective technique (EET) by Berger et al. PRB 82, 041103 (2010).  
    nkptgw3     2
     kptgw3     0.0000  0.0000  0.0000
                1/3     1/3     0.0000
  
     bdgw3     4  14
               4  14 

#################################################################################################
# GW calculation general parameters
icutcoul   2        #  => surface
vcutgeo    1 1 0    # along the z-axis, Beigi's approach, PRB 73, 233103
rcut      20.0      #  rcut = c/2
gw_nqlwl   1        # defines the number of directions in reciprocal space used to describe 
                    # the non-analytical behaviour of the heads (G = G'=0) and the wings (G=0 or G'=0) 
                    # of the dielectric matrix in the optical limit (i.e. for q tending to zero).
gw_qlwl 0.001 0.002 0.00000  # defines the set of q-points around Gamma that are considered during the evaluation 
                    # of the non-analytical behaviour of the dielectrix matrix.

inclvkb    2        # When inclvkb==2 the commutator F(r1,r2) = [Vnl(r1,r2),r2] is rewritten 
                    # in reciprocal space in a fully separable form so that the storage 
                    # of the huge two-dimensional matrix F(G1,G2) is not needed.
                    # On the contrary Inclvkb==1 requires the entire F(G1,G2) matrix hence 
                    # it is much more memory demanding and much slower for large cutoff energies.
mffmem     1        # if mffmem==0, some arrays of size double precision :: xx(nfft,nsppol)
                    # will be saved on disk when the wavefunctions are optimized or when the 
                    # Hartree and xc potential is computed (which can require some 
                    # sizeable memory space also). 
gwmem      0        # gwmem governs the memory strategy during a screening and/or a sigma run.
                    # * gwmem = 1x , the screening matrix are read for all q-vectors and stored in the memory.
                    # * gwmem = 0x , the screening matrix are read just a q-vector after another.
                    # * gwmem = x1 , the real-space wavefunctions are stored in the memory.
                    # * gwmem = x0 , the real-space wavefunctions are not stored, 
                    #                but rather recalculated on-fly each abinit needs them using FFTs. 
                    # The default is gwmem = 11, which is the fastest, but also the most memory consuming. 
                    # When experiencing memory shortage, one should try gwmem = 0. The first digit is 
                    # only meaningful when performing sigma calculations. 
# mkmem     0         # Sets the maximum number of k points for which the ground state wavefunctions 
                    # are kept in core memory at one time.
                    # This value should either be 0, in which case an out-of-core solution will be used
                    # A reduction of the requireed memory can be achieved by opting for an out-of-core 
                    # solution (mkmem=0, only coded for optdriver=3) at the price of a drastic worsening 
                    # of the performance.      
gwpara    2         # => parallelisation on k-points 

# Definition of the SCF procedure
ecut     25.0         # Maximal kinetic energy cut-off, in Hartree
nstep   100        
toldfe  1e-10
diemac    2.0       
iscf      7

#Definition of occupation numbers
occopt 6                   # Methfessel and Paxton (PRB40,3616(1989))
tsmear 0.01

# BZ sampling     
kptopt     1               # Option for the automatic generation of k points, 
nshiftk    1
shiftk     0.0 0.0 0.0     # These shifts will be the same for all grids
istwfk     *1        
ngkpt      6 6 1  
#symmorphi  1               # Use only symmorphic operations


####################################################################################
# Definition of the structure
#################################################################################### 

acell  4.639114  4.639114   40.000000

rprim  1.000000  0.000000       0.000000   # hexagonal lattice (to be scaled by acell)
      -0.500000  0.86602540378  0.000000
       0.000000  0.000000       1.000000
    
# Definition of the atom types
ntypat 1          
znucl  6          
natom  4                      # There are two atoms
typat  1 1 1 1                # They both are of type 1, that is, Carbon.

xangst   0.000000000  1.417344000   0.000000000
         1.227456000  0.708672000   0.000000000
         0.000000000  1.417344000   3.460000000
         1.227456000  0.708672000   3.460000000

