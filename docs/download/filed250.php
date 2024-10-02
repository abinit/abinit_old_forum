#-----------------------------------------------------------
acell  4.6312140452E+00  4.6312140452E+00  1.8897261329E+01 Bohr  ####
angdeg 90 90 120
ntypat 1
znucl  6
natom  2
typat  2*1
xred   1.3333333333E+00  1.6666666667E+00  5.0000000000E-01
      -1.3333333333E+00 -1.6666666667E+00  5.0000000000E-01

#-----------------------------------------------------------
   ecut  600 eV
    ixc  3
  nstep  1000
 iprcel  45
 occopt  1

 kptopt  1
  ngkpt  18  18  1  ##
nshiftk  1
 shiftk  0  0  0
 istwfk  *1      ## equal nkpt

symmorphi  0

#-----------------------------------------------------------
   ndtset  1 jdtset 4

    iscf1  7
   nband1  4   ## 4 no conduction bands
  toldfe1  1.0d-10

#----------------------------------------------------------
    iscf2 -2
nbandkss2  130  ##
   nband2  130  ## Usually less than nbandkss
 kssform2  3    ## Must be 3 to use wannier90.
                ## npwkss: planewave number to build KSS.

  getden2  1
  getwfk2  1
  tolwfr2  1.0d-16

  nbdbuf2  3

#--------------------------------------------------GW iteration1_1
     iscf3  7
    nband3  60     ##
   gwcomp3  1      ## Method to reduce the nbands
 gwencomp3  2
optdriver3  3

  ecutwfn3  200 eV ## 
  ecuteps3  200 eV ##
   ppmfrq3  15 eV  ##

   getkss3  2
     awtr3  1  ## speed calcualtion
   symchi3  1  ## speed calcualtion 
  inclvkb3  2  ## speed calcualtion 
   gwpara3  2  ## parallel over bands 

 # nqptdm3  1  ## split into pieces
 #  qptdm3  0  0  0
 
#--------------------------------------------------GW iteration1_2
     iscf4  7
    nband4  60     ##
   gwcomp4  1      ## Method to reduce the nbands
 gwencomp4  2
optdriver4  4

  ecutwfn4  200 eV ##
 ecutsigx4  200 eV ##

   getkss4  2
   getscr4  3  ## use this instead of getscr in coulomb truncation
 symsigma4  1  ## speed calcualtion greatly, but inapplicable in SC-GW right now
   gwpara4  2  ## parallel over bands 
    gwmem4  0  ## decrease memory consuming

#-------------------------------------------------------common data for DS3-DS4
 icutcoul  2             ## Coulomb force truncation in a 2D system
  vcutgeo  1 1 0         ## so the results converge faster with the vacuum size
 gw_nqlwl  1
  gw_qlwl  0.00001 0.00001 0.00000 
 
#-------------------------------------------------------data for DS4
     bdgw  1 8
           1 8
           1 8
           1 8
           1 8
           1 8
           1 8
           1 8
           1 8
           1 8
           1 8
           1 8
           1 8
           1 8
           1 8
           1 8
           1 8
           1 8

   nkptgw  18
    kptgw
  0.00000000E+00  0.00000000E+00  0.00000000E+00
  5.55555556E-02  0.00000000E+00  0.00000000E+00
  1.11111111E-01  0.00000000E+00  0.00000000E+00
  1.66666667E-01  0.00000000E+00  0.00000000E+00
  2.22222222E-01  0.00000000E+00  0.00000000E+00
  2.77777778E-01  0.00000000E+00  0.00000000E+00
  3.33333333E-01  0.00000000E+00  0.00000000E+00
  3.88888889E-01  0.00000000E+00  0.00000000E+00
  4.44444444E-01  0.00000000E+00  0.00000000E+00
  5.00000000E-01  0.00000000E+00  0.00000000E+00
  4.44444444E-01  1.11111111E-01  0.00000000E+00
  3.88888889E-01  2.22222222E-01  0.00000000E+00
  3.33333333E-01  3.33333333E-01  0.00000000E+00
  2.77777778E-01  2.77777778E-01  0.00000000E+00
  2.22222222E-01  2.22222222E-01  0.00000000E+00
  1.66666667E-01  1.66666667E-01  0.00000000E+00
  1.11111111E-01  1.11111111E-01  0.00000000E+00
  5.55555556E-02  5.55555556E-02  0.00000000E+00
