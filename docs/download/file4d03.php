autoparal 1

ecut 20                       
pawecutdg 80

acell 20.49385 20.49385  34.82724             
                                     
rprim 1 0 0  0 1 0  0 0 1     
                             

#Definition of the atom types
ntypat 2          
znucl  29 27            


irdwfk 1
nband 930






#Definition of the atoms
natom 91           
typat 90*1 1*2
xangst             
                  



   1.807445   9.037225  -7.229780
   0.000000   7.229780  -7.229780
   0.000000   9.037225  -5.422335
   1.807445   9.037225  -3.614890
   0.000000   7.229780  -3.614890
   1.807445   7.229780  -5.422335
   0.000000   9.037225  -1.807445
   1.807445   9.037225   0.000000
   0.000000   7.229780   0.000000
   1.807445   7.229780  -1.807445
   5.422335   9.037225  -7.229780
   3.614890   7.229780  -7.229780
   3.614890   9.037225  -5.422335
   5.422335   9.037225  -3.614890
   3.614890   7.229780  -3.614890
   5.422335   7.229780  -5.422335
   3.614890   9.037225  -1.807445
   5.422335   9.037225   0.000000
   3.614890   7.229780   0.000000
   5.422335   7.229780  -1.807445
   9.037225   9.037225  -7.229780
   7.229780   7.229780  -7.229780
   7.229780   9.037225  -5.422335
   9.037225   9.037225  -3.614890
   7.229780   7.229780  -3.614890
   9.037225   7.229780  -5.422335
   7.229780   9.037225  -1.807445
   9.037225   9.037225   0.000000
   7.229780   7.229780   0.000000
   9.037225   7.229780  -1.807445
   1.807445   5.422335  -7.229780
   0.000000   3.614890  -7.229780
   0.000000   5.422335  -5.422335
   1.807445   5.422335  -3.614890
   0.000000   3.614890  -3.614890
   1.807445   3.614890  -5.422335
   0.000000   5.422335  -1.807445
   1.807445   5.422335   0.000000
   0.000000   3.614890   0.000000
   1.807445   3.614890  -1.807445
   5.422335   5.422335  -7.229780
   3.614890   3.614890  -7.229780
   3.614890   5.422335  -5.422335
   5.422335   5.422335  -3.614890
   3.614890   3.614890  -3.614890
   5.422335   3.614890  -5.422335
   3.614890   5.422335  -1.807445
   5.422335   5.422335   0.000000
   3.614890   3.614890   0.000000
   5.422335   3.614890  -1.807445
   9.037225   5.422335  -7.229780
   7.229780   3.614890  -7.229780
   7.229780   5.422335  -5.422335
   9.037225   5.422335  -3.614890
   7.229780   3.614890  -3.614890
   9.037225   3.614890  -5.422335
   7.229780   5.422335  -1.807445
   9.037225   5.422335   0.000000
   7.229780   3.614890   0.000000
   9.037225   3.614890  -1.807445
   1.807445   1.807445  -7.229780
   0.000000   0.000000  -7.229780
   0.000000   1.807445  -5.422335
   1.807445   1.807445  -3.614890
   0.000000   0.000000  -3.614890
   1.807445  -0.000000  -5.422335
   0.000000   1.807445  -1.807445
   1.807445   1.807445   0.000000
   0.000000   0.000000   0.000000
   1.807445  -0.000000  -1.807445
   5.422335   1.807445  -7.229780
   3.614890  -0.000000  -7.229780
   3.614890   1.807445  -5.422335
   5.422335   1.807445  -3.614890
   3.614890  -0.000000  -3.614890
   5.422335  -0.000000  -5.422335
   3.614890   1.807445  -1.807445
   5.422335   1.807445   0.000000
   3.614890  -0.000000   0.000000
   5.422335  -0.000000  -1.807445
   9.037225   1.807445  -7.229780
   7.229780  -0.000000  -7.229780
   7.229780   1.807445  -5.422335
   9.037225   1.807445  -3.614890
   7.229780  -0.000000  -3.614890
   9.037225  -0.000000  -5.422335
   7.229780   1.807445  -1.807445
   9.037225   1.807445   0.000000
   7.229780  -0.000000   0.000000
   9.037225  -0.000000  -1.807445
   5.422335   3.614890   1.200000






nshiftk 1
shiftk  0.0 0.0 0.0

ngkpt 4 4 1



nstep 1          
toldfe 1.0d-7     
ixc 2                  
occopt 3                  
tsmear 0.01 eV                 
nline 5
nnsclo 5



istwfk *1

#LDA+U stuff

lpawu -1 2
dmatpuopt 1
upawu   0.0 4.0 eV # Values for U
jpawu    0.0 0.9 eV # Values for J
f4of2_sla    0.0  0.625


# DMFT stuff



usedmft  1
dmft_solv 5          # CTQMC
dmft_mxsf 1.0        
dmftbandi 1         
dmftbandf 890         
dmft_nwli 1000000        
dmft_nwlo 4000        
dmft_tollc 0.000001  
dmft_iter 1         
dmft_dc 1            
dmft_entropy 0
dmft_nlambda 6       
dmftqmc_l 200         
dmftqmc_n 1000000000    
dmftqmc_therm 10000   
#dmft_t2g 0
dmft_rslf 0
#dmftctqmc_grnns 1    
