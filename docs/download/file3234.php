# Potassium Niobate : Simple cubic perovskite structure (ABX3) above 435 C
 # Assumes a tetragonal structure above 225 C 
 # Takes up an orthorombic form at room temperature (till -10 C) 


accesswff 1
ndtset 2

# parallelization variables

paral_kgb 1
npband 1
npfft 4
npkpt 2

wfoptalg 4
fft_opt_lob 2
fftalg 401
iprcch 0
istwfk 4*1

# Geometric optimization has been done first with less stringent
# SCF stopping criterion 
# Then a single SCF total energy calculation was done with
# tolvrs 1.0d-18 to yield the necessary accurate wave function set
# Here only the response functions are evaluated

 #natfix    1           # 1 atom is fixed inposition during relaxation
 #iatfix  79

# ionmov    2
 #optcell   2  

# ntime   150
 #dilatmx   1.4
# tolmxf    5.0d-3



# Set 1: Response Function Calculation (d/dk)

rfelfd1   2            # activate the calculation of the d/dk perturbation
rfdir1     1 1 1      # perturbation direction

getwfk1  50 

kptopt1   2

nqpt1     1
qpt1       0.0  0.0  0.0    # calculation at the Gamma point

iscf1  -3    # d/dk must be treated in a non self consistent way

tolwfr1  1.0d-20  # must use tolwfr for non SCF calculations ; value is vey low

# Set 3: Response Function Calculation (electric field perturbation)

rfelfd2   3   # activate the calculation of electric field perturbation
rfdir2    1 1 1

getwfk2  -2
getddk2  -1

kptopt2 2

tolvrs2  1.0d-8
iscf2   7
nqpt2   1
qpt2    0.0  0.0  0.0




##############################Common input vaiables#########################
# Information about bands, metallic or insulating  properties, occupation numbers

 occopt    1
 tsmear    0.01 

#Definition of the unit cell
 
 chkprim 0               # the code will run even for a non- primitive
   
 
acell   1.5094076729E+01  2.1900312356E+01  2.2041549033E+01 Bohr
  
 
 rprim      1.0  0.0  0.0
            0.0  1.0  0.0
            0.0  0.0  1.0

 #angdeg 90 90 90

#Definition of the atom types

 natom    79 
 ntypat     4  
 znucl     19     41        8       26
 typat   16*1   15*2     47*3      1*4                    

#Position of the atoms in the unit cell


 xred   -2.0291092899E-03 -2.2785999551E-03  8.7105210115E-03
                    -3.8020377495E-03  2.4940515633E-01  2.6055618012E-01
                     5.0202910929E-01 -2.2785999551E-03  8.7105210115E-03
                     5.0380203775E-01  2.4940515633E-01  2.6055618012E-01
                    -2.4881072821E-03  5.0395002837E-01  7.8058807368E-03
                     3.8135854786E-03  7.5657147437E-01  2.5586486531E-01
                     5.0248810728E-01  5.0395002837E-01  7.8058807368E-03
                     4.9618641452E-01  7.5657147437E-01  2.5586486531E-01
                     2.4214568579E-03  5.8370907869E-04  5.0169943971E-01
                    -1.8514519810E-03  2.4982833935E-01  7.5517862406E-01
                     4.9757854314E-01  5.8370907869E-04  5.0169943971E-01
                     5.0185145198E-01  2.4982833935E-01  7.5517862406E-01
                     3.6218155564E-04  4.9997822803E-01  5.0711737305E-01
                     4.2049510552E-04  7.4998539387E-01  7.5778828723E-01
                     4.9963781844E-01  4.9997822803E-01  5.0711737305E-01
                     4.9957950489E-01  7.4998539387E-01  7.5778828723E-01
                     2.5000000000E-01  2.6255409121E-01 -7.2806072486E-03
                     7.5000000000E-01  2.5728763490E-03  2.4733684884E-01
                     7.5000000000E-01  2.4637608563E-01  3.7607618929E-03
                     2.5000000000E-01  4.9845538645E-01  2.5056975577E-01
                     2.5000000000E-01  7.5634951340E-01  1.9828957448E-03
                     7.5000000000E-01  5.0078184459E-01  2.5003714341E-01
                     7.5000000000E-01  7.5114077787E-01  7.9432253276E-04
                     2.5000000000E-01 -1.7073204502E-03  7.4982999440E-01
                     2.5000000000E-01  2.4689872627E-01  4.9595096527E-01
                     7.5000000000E-01 -5.1163375122E-04  7.4948260636E-01
                     7.5000000000E-01  2.5000806781E-01  5.0097816652E-01
                     2.5000000000E-01  5.0488282922E-01  7.4576119795E-01
                     2.5000000000E-01  7.5404206332E-01  4.9426468433E-01
                     7.5000000000E-01  5.0086681479E-01  7.5113787161E-01
                     7.5000000000E-01  7.5087923833E-01  4.9889029950E-01
                     6.0872881393E-05  8.9381358175E-03  2.5457109441E-01
                     6.5318626502E-03  2.4660070510E-01  2.5790951111E-02
                     4.9993912712E-01  8.9381358175E-03  2.5457109441E-01
                     4.9346813735E-01  2.4660070510E-01  2.5790951111E-02
                     3.0815740434E-04  4.9878507051E-01  2.6977104744E-01
                    -7.2257479643E-04  7.4995170640E-01  2.0585200834E-02
                     4.9969184260E-01  4.9878507051E-01  2.6977104744E-01
                     5.0072257480E-01  7.4995170640E-01  2.0585200834E-02
                    -1.7190115813E-04  5.4410559020E-04  7.7068630907E-01
                     1.0200707106E-03  2.4925881744E-01  5.1965619591E-01
                     5.0017190116E-01  5.4410559020E-04  7.7068630907E-01
                     4.9897992929E-01  2.4925881744E-01  5.1965619591E-01
                     4.3700171088E-06  5.0101227305E-01  7.7048689578E-01
                     6.3228337974E-04  7.5108197681E-01  5.1851268086E-01
                     4.9999562998E-01  5.0101227305E-01  7.7048689578E-01
                     4.9936771662E-01  7.5108197681E-01  5.1851268086E-01
                     2.5000000000E-01  3.7365437456E-01  3.9504832377E-01
                     7.5000000000E-01  1.2735010312E-01  1.4078682755E-01
                     7.5000000000E-01  3.7187589002E-01  3.9533204785E-01
                     2.5000000000E-01  6.1961446249E-01  1.4541318405E-01
                     2.5000000000E-01  8.7564939224E-01  3.8733596324E-01
                     7.5000000000E-01  6.2267209082E-01  1.4468396786E-01
                     7.5000000000E-01  8.7299348394E-01  3.9334054256E-01
                     2.5000000000E-01  1.2200075147E-01  6.4412954239E-01
                     2.5000000000E-01  3.7791734806E-01  8.8800019170E-01
                     7.5000000000E-01  1.2245499472E-01  6.4445391565E-01
                     7.5000000000E-01  3.7008195250E-01  8.9891658503E-01
                     2.5000000000E-01  6.2585662597E-01  6.4085511072E-01
                     2.5000000000E-01  8.7317786159E-01  8.8967086744E-01
                     7.5000000000E-01  6.2186081414E-01  6.4513583982E-01
                     7.5000000000E-01  8.7261805445E-01  8.9429847125E-01
                     2.5000000000E-01  3.7093412319E-01  1.4559096526E-01
                     2.5000000000E-01  1.3285090905E-01  3.8323634565E-01
                     7.5000000000E-01  3.7783936485E-01  1.4546302002E-01
                     7.5000000000E-01  1.2810391038E-01  3.9467220309E-01
                     2.5000000000E-01  8.8976598279E-01  1.3081837302E-01
                     2.5000000000E-01  6.2911237320E-01  3.9243021720E-01
                     7.5000000000E-01  8.7736891614E-01  1.4344670805E-01
                     7.5000000000E-01  6.2768818895E-01  3.9470003248E-01
                     2.5000000000E-01  3.8117090090E-01  6.4382963715E-01
                     2.5000000000E-01  1.2939433166E-01  9.0230739542E-01
                     7.5000000000E-01  3.7765736748E-01  6.4541384693E-01
                     7.5000000000E-01  1.2747019838E-01  8.9525281713E-01
                     2.5000000000E-01  8.7948312551E-01  6.4275603856E-01
                     2.5000000000E-01  6.3101525353E-01  8.9639622608E-01
                     7.5000000000E-01  8.7751247505E-01  6.4415267984E-01
                     7.5000000000E-01  6.2759187846E-01  8.9492637709E-01
                     2.5000000000E-01  0.0000000000E+00  2.5000000000E-01
# Definition of plane wave basis set

ecut  30.0         # Maximal kinetic energy cut-off, in Hartree
ecutsm 0.5


#Exchange-correlation functional

ixc 11             # GGA, Perdew-Burke-Ernzerhof GGA functional


#Definition of the k-point grid

#prtkpt 1
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry

kptrlatt 0 -2  0    -2  0  0    0 0 -2

#ngkpt 4 4 4       # KNbO3 is an insulator. So fewer k points are enough
                 
#nshiftk 1             
                           
#shiftk 0.5 0.5 0.5
       

#Definition of the SCF procedure

diemac    4.0d0        #suitable for wide gap insulators ; although this is not mandatory, 
                       #it is worth to precondition the SCF cycle. The model dielectric function used
                       #as the standard preconditioner is described in the 'dielng' input variaable section  
  
nstep   2000            #Maximal number of SCF cycles

                 
