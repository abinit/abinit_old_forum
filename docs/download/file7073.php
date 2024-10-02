 ###############################################################################
#Test strain perturbation in paw.  AlAs crystal, finite difference and response
#function 2DTE wrt strain are compared.
##############################################################################
   ndtset   3 
   jdtset 1 2 3     
 
#tolsym  1.0e-8
 chkprim 0
  chkdilatmx 0
#wfoptalg 4  # larger symstem 14
#use_gpu_cuda 0

# Set 1 : Initial self-consistent run 
    iscf1   7
  kptopt1   1
#tolvrs1   6d-18   #1.0d-11  #need excellent convergence of GS quantities for RF runs
toldfe1   1d-12   #1.0d-11  #need excellent convergence of GS quantities for RF runs
 prtposcar1  1
prtcif1      1
prtgeo1      1

########################################
#   getcell2  1
#   getxred2 1
#   getcell3  1
#   getxred3 1
##########################################

# Set 2 : Calculate the ddk wf's - needed for piezoelectric tensor and 
#         Born effective charges in dataset 3

  getwfk2  1
  getden2  1
    iscf2  -3        #this option is needed for ddk
  kptopt2   2        #use time-reversal symmetry only for k points
    nqpt2   1        #one wave vector will be specified
     qpt2   0 0 0    #need to specify gamma point
  rfelfd2   2        #set for ddk wf's only
   rfdir2   1 1 1    #full set of directions needed
  tolwfr2   1.0d-18 #2.0d-14  #only wf convergence can be monitored here yinggaixiao sange shuliangji
  nstep2   40
# Set 3 : response-function calculations for all needed perturbations

  getddk3  2
  getwfk3  1
    iscf3   7
  kptopt3   2        #use time-reversal symmetry only for k points
    nqpt3   1
     qpt3   0 0 0
  rfphon3   1        #do atomic displacement perturbation 
 rfatpol3   1 3      #do for all atoms           @@@  改
  rfstrs3   3        #do strain perturbation
   rfdir3   1 1 1    #the full set of directions is needed
#  tolvrs3   6.0d-18  #need reasonable convergence of 1st-order quantities  xiao liangge shuliang ji
  toldfe3 1.0e-12
  nstep3   40

#Gives the number of bands, explicitely (do not take the default)
 dilatmx   1.1
#  nband   10                   # For an insulator (if described corrpp_dirpath "./"
pawecutdg 40
#pawxcdev 0     
   ecut    20          ##@  改
  ecutsm   0.5
#  ngfft   36  36 216      ##@@@
 nshiftk   1              # Use one copy of grid only (default)
 shiftk   0.0 0.0 0.0    # This choice of origin for the k point grid

#Definition of the k-point grid
 kptopt   1              
 ngkpt   5 5 3  ##@  改

#Definition of the self-consistency procedure
 diemac   8.0            # Model dielectric preconditioner
   iscf   7              # Use conjugate-gradient SCF cycle
  nstep   40            # Maxiumum number of SCF iterations
    ntime   300
 optforces1 1
#occopt 7
#tsmear 0.2 eV
# acell      3*1.0 Angstrom
##################################  structure #####

 
 natom 3
 ntypat 2
 typat
 1 1  2
 znucl 34 42
 xred
    0.66666666666667E+00     0.33333333333333E+00     0.41286112506311E+00
    0.66666666666667E+00     0.33333333333333E+00    -0.41286112506311E+00
    0.33333333333333E+00     0.66666666666667E+00     0.50000000000000E+00
 acell    1.0    1.0    1.0 Angstrom
 rprim
    0.27718755350109E+01   -0.16003430862987E+01    0.00000000000000E+00
    0.00000000000000E+00    0.32006861725974E+01    0.00000000000000E+00
    0.00000000000000E+00    0.00000000000000E+00    0.18410000000000E+02

##################################  potential ########
  #pp_dirpath "/home/gswylq/soft_10/nc-sr_pbe_standard_psp8/pbe_s_sr"
# pseudos "Sn.psp8, Te.psp8"
#   pp_dirpath "/home/gswylq/soft_10/nc-sr-04_pw_standard_psp8_buyong"
 #pseudos "Sn.psp8, Te.psp8"
 pp_dirpath "/home/gswylq/qe_soft/JTH-PBE-atomicdata/JTH-PBE-atomicdata-1.1/ATOMICDATA"
 pseudos "Se.GGA_PBE-JTH.xml,Mo.GGA_PBE-JTH.xml"
 pawxcdev 0



