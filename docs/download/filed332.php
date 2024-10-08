# In this input file, the location of the information on this or that line
# is not important : a keyword is located by the parser, and the related
# information should follow. 
# The "#" symbol indicate the beginning of a comment : the remaining
# of the line will be skipped.

# Fe normal bcc structure for test of a ferromagnetic calculation
# The first dataset is without magnetization for comparison

 ndtset 2
#spin related quantities (only second dataset)
 spinat2   0.0 0.0 4.0
 nsppol2   2
! pawspnorb2 1
#generate the total density of states in both cases
 prtdos 1
#Rather standard input for a bcc metal 
 prtden   1
 tolvrs   1.0d-10
  acell   3*5.42
   ecut   18.0
pawecutdg 20.0
  natom   1
  nband   8
  ngkpt   4 4 4
nshiftk   1

  nstep   50
 ntypat   1
 occopt   3
  rprim   -0.5  0.5  0.5
           0.5 -0.5  0.5
           0.5  0.5 -0.5
 shiftk   0.5 0.5 0.5
 tsmear   0.01
  typat   1
   xred   0.0  0.0  0.0
 znucl    26

