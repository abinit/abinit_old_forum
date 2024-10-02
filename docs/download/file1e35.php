  ABINIT 
  
  Give name for formatted input file: 
prim_bicro3.rf.in
  Give name for formatted output file:
prim_bicro3.rf.out
  Give root name for generic input files:
/fastfs/sschu/abinit/prim_rf/bicro3_i
  Give root name for generic output files:
/fastfs/sschu/abinit/prim_rf/bicro3_o
  Give root name for generic temporary files:
/fastfs/sschu/abinit/prim_rf/bicro3_tmp
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file prim_bicro3.rf.out
-P-0000  already exists.
-P-0000  new name assigned:prim_bicro3.rf.outA
-P-0000
-P-0040  leave_test : synchronization done...
-P-0002  leave_test : synchronization done...
-P-0044  leave_test : synchronization done...
-P-0012  leave_test : synchronization done...
-P-0032  leave_test : synchronization done...
-P-0010  leave_test : synchronization done...
-P-0026  leave_test : synchronization done...
-P-0042  leave_test : synchronization done...
-P-0036  leave_test : synchronization done...
-P-0006  leave_test : synchronization done...
-P-0022  leave_test : synchronization done...
-P-0000  leave_test : synchronization done...
-P-0038  leave_test : synchronization done...
-P-0028  leave_test : synchronization done...
-P-0024  leave_test : synchronization done...
-P-0030  leave_test : synchronization done...
-P-0016  leave_test : synchronization done...
-P-0018  leave_test : synchronization done...
-P-0020  leave_test : synchronization done...
-P-0008  leave_test : synchronization done...
-P-0004  leave_test : synchronization done...
-P-0034  leave_test : synchronization done...
-P-0014  leave_test : synchronization done...
-P-0033  leave_test : synchronization done...
-P-0019  leave_test : synchronization done...
-P-0017  leave_test : synchronization done...
-P-0027  leave_test : synchronization done...
-P-0003  leave_test : synchronization done...
-P-0035  leave_test : synchronization done...
-P-0039  leave_test : synchronization done...
-P-0025  leave_test : synchronization done...
-P-0021  leave_test : synchronization done...
-P-0007  leave_test : synchronization done...
-P-0011  leave_test : synchronization done...
-P-0009  leave_test : synchronization done...
-P-0043  leave_test : synchronization done...
-P-0023  leave_test : synchronization done...
-P-0015  leave_test : synchronization done...
-P-0031  leave_test : synchronization done...
-P-0029  leave_test : synchronization done...
-P-0041  leave_test : synchronization done...
-P-0013  leave_test : synchronization done...
-P-0001  leave_test : synchronization done...
-P-0045  leave_test : synchronization done...
-P-0005  leave_test : synchronization done...
-P-0037  leave_test : synchronization done...

.Version 5.8.4  of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel11.0 computer) 

.Copyright (C) 1998-2009 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Mon  8 Mar 2010.
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 5.8.4
  Build target  : x86_64_linux_intel11.0
  Build date    : 20100222
 
 === Compiler Suite === 
  C compiler       : gnu
  CFLAGS           : -O3 -mp1 -ip -xW
  C++ compiler     : gnuicpc
  CXXFLAGS         : -m64 -g -O2 -march=opteron
  Fortran compiler : intel11.0
  FCFLAGS          : -O3 -mp1 -ip -xW
  FC_LDFLAGS       : 
 
 === Optimizations === 
  Debug level        : symbols
  Optimization level : standard
  Architecture       : amd_opteron
 
 === MPI === 
  Parallel build : yes
  Parallel I/O   : no
  MPI CPPFLAGS   : -DMPI=1 -DMPI1=1      -DHAVE_SCALAPACK=1
 
 === Linear algebra === 
  Library type  : external
  Use ScaLAPACK : yes
 
 === Plug-ins === 
  BigDFT    : yes
  ETSF I/O  : yes
  LibXC     : yes
  FoX       : no
  NetCDF    : yes
  Wannier90 : yes
  XMLF90    : no
 
 === Experimental features === 
  Bindings            : no
  Error handlers      : no
  Exports             : no
  GW double-precision : no
  Macroave build      : yes
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
- input  file    -> prim_bicro3.rf.in
- output file    -> prim_bicro3.rf.outA
- root for input  files -> /fastfs/sschu/abinit/prim_rf/bicro3_i
- root for output files -> /fastfs/sschu/abinit/prim_rf/bicro3_o

 instrng :   132 lines of input have been read

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /work/home3/sschu/abinit_pot/Cr_LDA_abinit
  read the values zionpsp= 14.0 , pspcod=   7 , lmax=   2
 2 0.                                   : shape_type,rshape                     
  

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is /work/home3/sschu/abinit_pot/Bi_abinit.paw
  read the values zionpsp= 15.0 , pspcod=   7 , lmax=   2
 2 0. : shape_type,rshape                                                       
  

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   3 , psp file is /work/home3/sschu/abinit_pot/O_LDA_abinit
  read the values zionpsp=  6.0 , pspcod=   7 , lmax=   1
 2 0.                                   : shape_type,rshape                     
  

 iofn2 : deduce mpsang  =   3, n1xccc  =   1.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     1

 ingeo : use angdeg to generate rprim.
 ingeo : takes atomic coordinates from input array xred
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symaxes : the symmetry operation no.   3 is a 2-axis 
 symplanes : the symmetry operation no.   4 is an a,b, or c plane
 symspgr : the symmetry operation no.   5 is a pure translation 
 symspgr : the symmetry operation no.   6 is an inversion
 symaxes : the symmetry operation no.   7 is a 2_1-axis 
 symplanes : the symmetry operation no.   8 is an n plane
 symspgr : spgroup=  15  C2/c   (=C2h^6)
 getkgrid : length of smallest supercell vector (bohr)=    1.035381E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.788456E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.811302E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.070762E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.106143E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.576911E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.622605E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.141524E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.176905E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.365367E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.433907E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    6.212286E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.153823E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.245210E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.247667E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.283048E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.942279E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    9.056512E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    9.318429E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.035381E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.070762E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.576911E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.622605E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.141524E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    6.212286E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.153823E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.245210E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.283048E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.035381E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.070762E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.950319E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.622605E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.141524E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.226225E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.900637E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    6.832588E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.543152E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.157651E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.850956E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    9.723180E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.045245E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.141524E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.900637E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.245210E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.283048E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.045245E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.066540E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.101505E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.751158E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.133080E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.203011E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.203011E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.434339E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    6.304516E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    6.304516E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    6.304516E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.479822E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.406022E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.406022E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    9.549665E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.050753E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.133080E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.203011E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.502316E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.266160E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.406022E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.406022E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.086868E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.176905E+01
       Simple Lattice Grid
 npfft, npband and npkpt           1           1          46
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt          46          46
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    3 and mkmem  =    46, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    3 and mkqmem =    46, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    3 and mk1mem =    46, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 invars1m : enter jdtset=     2

 ingeo : use angdeg to generate rprim.
 ingeo : takes atomic coordinates from input array xred
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symaxes : the symmetry operation no.   3 is a 2-axis 
 symplanes : the symmetry operation no.   4 is an a,b, or c plane
 symspgr : the symmetry operation no.   5 is a pure translation 
 symspgr : the symmetry operation no.   6 is an inversion
 symaxes : the symmetry operation no.   7 is a 2_1-axis 
 symplanes : the symmetry operation no.   8 is an n plane
 symspgr : spgroup=  15  C2/c   (=C2h^6)
 getkgrid : length of smallest supercell vector (bohr)=    1.035381E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.788456E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.811302E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.070762E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.106143E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.576911E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.622605E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.141524E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.176905E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.365367E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.433907E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    6.212286E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.153823E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.245210E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.247667E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.283048E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.942279E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    9.056512E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    9.318429E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.035381E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.070762E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.576911E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.622605E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.141524E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    6.212286E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.153823E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.245210E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.283048E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.035381E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.070762E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.950319E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.622605E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.141524E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.226225E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.900637E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    6.832588E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.543152E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.157651E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.850956E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    9.723180E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.045245E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.141524E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.900637E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.245210E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.283048E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.045245E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.066540E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.101505E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    2.751158E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.133080E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.203011E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.203011E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.434339E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    6.304516E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    6.304516E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    6.304516E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    7.479822E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.406022E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.406022E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    9.549665E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.050753E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.133080E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.203011E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.502316E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.266160E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.406022E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.406022E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    1.086868E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.176905E+01
       Simple Lattice Grid
 npfft, npband and npkpt           1           1          46
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt          46          46
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    3 and mkmem  =    46, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    3 and mkqmem =    46, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    3 and mk1mem =    46, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 DATASET    1 : space group C2/c (# 15); Bravais mC (1-face-center monocl.)
 invars2: take the default value of fband=  1.25000000E-01
 getkgrid : length of smallest supercell vector (bohr)=    5.176905E+01
       Simple Lattice Grid

 inkpts : istwfk preprocessed, gives following first values (max. 6): 1 1 1 1 1 1
 chkneu : initialized the occupation numbers for occopt=    1
    spin up   values :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  0.00  0.00
  0.00
    spin down values :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  0.00  0.00
  0.00

 getng is called for the coarse grid:
 For input ecut=  3.500000E+01 best grid ngfft=     100      60      60
       max ecut=  3.760480E+01
 getng: value of mgfft=     100 and nfft=      360000
 getng: values of ngfft(4),ngfft(5),ngfft(6)     101      61      60
 getmpw: optimal value of mpw=   15734
 getmpw: optimal value of mpw=   15734

 getng is called for the fine grid:
 For input ecut=  4.500000E+01 best grid ngfft=     120      64      64
       max ecut=  4.733472E+01
 getng: value of mgfft=     120 and nfft=      491520
 getng: values of ngfft(4),ngfft(5),ngfft(6)     121      65      64

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 symq3 : found symmetry   1 preserves q
 symq3 : found symmetry    1 + TimeReversal preserves q
 symq3 : found symmetry   2 preserves q
 symq3 : found symmetry    2 + TimeReversal preserves q
 symq3 : found symmetry   3 preserves q
 symq3 : found symmetry    3 + TimeReversal preserves q
 symq3 : found symmetry   4 preserves q
 symq3 : found symmetry    4 + TimeReversal preserves q
 symq3 : able to use time-reversal symmetry.
  (except for gamma, not yet able to use time-reversal symmetry)
  memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1 (RF).
   intxc =         0    iscf =        -3 xclevel =         1  lmnmax =        18
   lnmax =         6   mband =        97  mffmem =         1   mgfft =       100
P  mkmem =         3  mkqmem =         3  mk1mem =         3 mpssoang=         3
     mpw =     15734  mqgrid =      3001   natom =        20    nfft =    360000
    nkpt =        46  nloalg =         4  nspden =         2 nspinor =         1
  nsppol =         2    nsym =         4  n1xccc =         1  ntypat =         3
  occopt =         1
================================================================================
P This job should need less than                     714.119 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :  -1953.508 Mbytes ; DEN or POT disk file :      5.495 Mbytes.
================================================================================

 Biggest array : cg(disk), with    139.7296 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of    139.730 Mbytes, for testing purposes.
 memana : allocated     714.119 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group C2/c (# 15); Bravais mC (1-face-center monocl.)
 invars2: take the default value of fband=  1.25000000E-01
 getkgrid : length of smallest supercell vector (bohr)=    5.176905E+01
       Simple Lattice Grid

 inkpts : istwfk preprocessed, gives following first values (max. 6): 1 1 1 1 1 1
 chkneu : initialized the occupation numbers for occopt=    1
    spin up   values :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  0.00  0.00
  0.00
    spin down values :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  0.00  0.00
  0.00

 getng is called for the coarse grid:
 For input ecut=  3.500000E+01 best grid ngfft=     100      60      60
       max ecut=  3.760480E+01
 getng: value of mgfft=     100 and nfft=      360000
 getng: values of ngfft(4),ngfft(5),ngfft(6)     101      61      60
 getmpw: optimal value of mpw=   15734
 getmpw: optimal value of mpw=   15734

 getng is called for the fine grid:
 For input ecut=  4.500000E+01 best grid ngfft=     120      64      64
       max ecut=  4.733472E+01
 getng: value of mgfft=     120 and nfft=      491520
 getng: values of ngfft(4),ngfft(5),ngfft(6)     121      65      64

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 symq3 : found symmetry   1 preserves q
 symq3 : found symmetry    1 + TimeReversal preserves q
 symq3 : found symmetry   2 preserves q
 symq3 : found symmetry    2 + TimeReversal preserves q
 symq3 : found symmetry   3 preserves q
 symq3 : found symmetry    3 + TimeReversal preserves q
 symq3 : found symmetry   4 preserves q
 symq3 : found symmetry    4 + TimeReversal preserves q
 symq3 : able to use time-reversal symmetry.
  (except for gamma, not yet able to use time-reversal symmetry)
  memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2 (RF).
   intxc =         0    iscf =         7 xclevel =         1  lmnmax =        18
   lnmax =         6   mband =        97  mffmem =         1   mgfft =       100
P  mkmem =         3  mkqmem =         3  mk1mem =         3 mpssoang=         3
     mpw =     15734  mqgrid =      3001   natom =        20    nfft =    360000
    nkpt =        46  nloalg =         4  nspden =         2 nspinor =         1
  nsppol =         2    nsym =         4  n1xccc =         1  ntypat =         3
  occopt =         1
================================================================================
P This job should need less than                    1153.199 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :  -1953.508 Mbytes ; DEN or POT disk file :      5.495 Mbytes.
================================================================================

 Biggest array : cg(disk), with    139.7296 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of    139.730 Mbytes, for testing purposes.
 memana : allocated    1153.199 Mbytes, for testing purposes.
 The job will continue.
 npband=            0           1
 npband=            1           1
 npband=            2           1
 -outvars: echo values of preprocessed input variables --------
 npband=            0           1
 npband=            1           1
 npband=            2           1
     acell    1.8113024984E+01  1.0332699956E+01  1.0332699956E+01 Bohr
       amu    5.19961000E+01  2.08980370E+02  1.59994000E+01
      ecut    3.50000000E+01 Hartree
    getddk1        0
    getddk2       -1
    getwfk1        0
    getwfk2       -1
    irdwfk1        1
    irdwfk2        0
      iscf1       -3
      iscf2        7
    istwfk      0    0    0    0    0    0    0    0    0    0
                0    0    0    0    0    0    0    0    0    0
                0    0    0    0    0    0    0    0    0    0
                0    0    1    0    0    1    0    0    0    0
                0    0    0    0    0    0
       ixc         7
    jdtset      1    2
       kpt    1.66666667E-01  6.66666667E-02  2.33333333E-01
              1.66666667E-01  2.33333333E-01  6.66666667E-02
              1.66666667E-01  0.00000000E+00  5.00000000E-01
              1.66666667E-01  1.66666667E-01  3.33333333E-01
              1.66666667E-01  3.33333333E-01  1.66666667E-01
              1.66666667E-01  5.00000000E-01  0.00000000E+00
              1.66666667E-01  1.00000000E-01 -4.00000000E-01
              1.66666667E-01  2.66666667E-01  4.33333333E-01
              1.66666667E-01  4.33333333E-01  2.66666667E-01
              1.66666667E-01 -4.00000000E-01  1.00000000E-01
              1.66666667E-01  3.33333333E-02 -1.33333333E-01
              1.66666667E-01  2.00000000E-01 -3.00000000E-01
              1.66666667E-01  3.66666667E-01 -4.66666667E-01
              1.66666667E-01 -4.66666667E-01  3.66666667E-01
              1.66666667E-01 -3.00000000E-01  2.00000000E-01
              1.66666667E-01 -1.33333333E-01  3.33333333E-02
              1.66666667E-01  1.33333333E-01 -3.33333333E-02
              1.66666667E-01  3.00000000E-01 -2.00000000E-01
              1.66666667E-01  4.66666667E-01 -3.66666667E-01
              1.66666667E-01 -3.66666667E-01  4.66666667E-01
              1.66666667E-01 -2.00000000E-01  3.00000000E-01
              1.66666667E-01 -3.33333333E-02  1.33333333E-01
              1.66666667E-01  4.00000000E-01 -1.00000000E-01
              1.66666667E-01 -4.33333333E-01 -2.66666667E-01
              1.66666667E-01 -2.66666667E-01 -4.33333333E-01
              1.66666667E-01 -1.00000000E-01  4.00000000E-01
              1.66666667E-01 -3.33333333E-01 -1.66666667E-01
              1.66666667E-01 -1.66666667E-01 -3.33333333E-01
              1.66666667E-01 -2.33333333E-01 -6.66666667E-02
              1.66666667E-01 -6.66666667E-02 -2.33333333E-01
              5.00000000E-01  6.66666667E-02  2.33333333E-01
              5.00000000E-01  2.33333333E-01  6.66666667E-02
              5.00000000E-01  0.00000000E+00  5.00000000E-01
              5.00000000E-01  1.66666667E-01  3.33333333E-01
              5.00000000E-01  3.33333333E-01  1.66666667E-01
              5.00000000E-01  5.00000000E-01  0.00000000E+00
              5.00000000E-01  1.00000000E-01 -4.00000000E-01
              5.00000000E-01  2.66666667E-01  4.33333333E-01
              5.00000000E-01  4.33333333E-01  2.66666667E-01
              5.00000000E-01 -4.00000000E-01  1.00000000E-01
              5.00000000E-01  3.33333333E-02 -1.33333333E-01
              5.00000000E-01  2.00000000E-01 -3.00000000E-01
              5.00000000E-01  3.66666667E-01 -4.66666667E-01
              5.00000000E-01 -4.66666667E-01  3.66666667E-01
              5.00000000E-01 -3.00000000E-01  2.00000000E-01
              5.00000000E-01 -1.33333333E-01  3.33333333E-02
   kptrlen    5.17690474E+01
    kptopt         2
  kptrlatt    0  3 -3   0  5  5   3  0  0
P    mkmem         3
P   mkqmem         3
P   mk1mem         3
     natom        20
     nband        97
    ndtset         2
     ngfft       100      60      60
   ngfftdg       120      64      64
      nkpt        46
      nqpt         1
    nspden         2
    nsppol         2
     nstep      1000
      nsym         4
    ntypat         3
       occ    1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
              0.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
              1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
              0.000000
 optdriver         1
 pawecutdg    4.50000000E+01 Hartree
   pawovlp    1.0000000000E+01
  pawxcdev         0
   usepawu         1
     jpawu    2.93994603E-02  0.00000000E+00  0.00000000E+00
     lpawu         2      -1      -1
     upawu    1.10247976E-01  0.00000000E+00  0.00000000E+00
 prtdensph         1
    prtdos         2
    ratsph    2.30299562E+00  2.60648143E+00  1.41465230E+00 Bohr
   rfatpol1        1       1
   rfatpol2        1      20
     rfdir         1       1       1
    rfelfd1        2
    rfelfd2        3
    rfphon1        0
    rfphon2        1
     rprim    1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
             -2.7558035251E-01  9.6127803954E-01  0.0000000000E+00
              2.7558035251E-01 -4.3900971634E-01  8.5517596919E-01
    shiftk    5.00000000E-01  5.00000000E-01  5.00000000E-01
   spgroup        15
    spinat    0.0000000000E+00  0.0000000000E+00 -2.5000000000E+00
              0.0000000000E+00  0.0000000000E+00 -2.5000000000E+00
              0.0000000000E+00  0.0000000000E+00  2.5000000000E+00
              0.0000000000E+00  0.0000000000E+00  2.5000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
    symrel    1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
             -1  0  0   0  0  1   0  1  0       1  0  0   0  0 -1   0 -1  0
     tnons    0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
              0.5000000  0.0000000  0.0000000     0.5000000  0.0000000  0.0000000
    tolvrs1   0.00000000E+00
    tolvrs2   1.00000000E-08
    tolwfr1   1.00000000E-22
    tolwfr2   0.00000000E+00
     typat    1  1  1  1  2  2  2  2  3  3  3  3  3  3  3  3  3  3  3  3
    useylm         1
       wtk      0.02222    0.02222    0.02222    0.02222    0.02222    0.02222
                0.02222    0.02222    0.02222    0.02222    0.02222    0.02222
                0.02222    0.02222    0.02222    0.02222    0.02222    0.02222
                0.02222    0.02222    0.02222    0.02222    0.02222    0.02222
                0.02222    0.02222    0.02222    0.02222    0.02222    0.02222
                0.02222    0.02222    0.01111    0.02222    0.02222    0.01111
                0.02222    0.02222    0.02222    0.02222    0.02222    0.02222
                0.02222    0.02222    0.02222    0.02222
    xangst    2.3962500000E+00  2.1674566044E+00  3.5490507847E+00
              7.1887500000E+00  6.8821744618E-01  1.1269054534E+00
              4.0390868343E+00  2.6280521246E+00  0.0000000000E+00
              7.5341316573E-01 -1.2002150994E+00  2.3379781190E+00
              8.7351332185E+00  1.2226442133E+00  4.3064621761E+00
              5.6423667815E+00  3.2727578771E+00  3.0544281338E+00
              8.4986678149E-01  1.6330298373E+00  3.6949406193E-01
              3.9426332185E+00 -4.1708382654E-01  1.6215281042E+00
              4.2143302427E+00  1.6105034838E+00  4.1414944401E+00
              5.7816975726E-01  2.9488657053E+00  3.3241372896E+00
              5.3706697573E+00  1.2451705668E+00  5.3446179801E-01
              9.0068302427E+00 -9.3191654762E-02  1.3518189484E+00
              6.5511802406E+00  1.6952507921E-01  2.9318245613E+00
              7.8263197594E+00  2.5308003030E+00  1.4897596575E+00
              3.0338197594E+00  2.6861489713E+00  1.7441316768E+00
              1.7586802406E+00  3.2487374756E-01  3.1861965806E+00
              9.1457868659E+00 -1.3671372834E+00  3.9081642238E+00
              5.2317131341E+00  4.1011596194E+00  5.6859627855E-01
              4.3921313407E-01  4.2228113339E+00  7.6779201429E-01
              4.3532868659E+00 -1.2454855688E+00  4.1073599595E+00
     xcart    4.5282562459E+00  4.0958993872E+00  6.7067340148E+00
              1.3584768738E+01  1.3005424932E+00  2.1295426845E+00
              7.6327679437E+00  4.9662987785E+00  0.0000000000E+00
              1.4237445481E+00 -2.2680778384E+00  4.4181383497E+00
              1.6507009517E+01  2.3104627211E+00  8.1380341145E+00
              1.0662527958E+01  6.1846160869E+00  5.7720326655E+00
              1.6060154664E+00  3.0859791593E+00  6.9824258478E-01
              7.4504970254E+00 -7.8817420662E-01  3.0642440338E+00
              7.9639299923E+00  3.0434105204E+00  7.8262902726E+00
              1.0925824995E+00  5.5725485857E+00  6.2817091056E+00
              1.0149094991E+01  2.3530313599E+00  1.0099864267E+00
              1.7020442484E+01 -1.7610670537E-01  2.5545675938E+00
              1.2379936502E+01  3.2035597237E-01  5.5403454905E+00
              1.4789600974E+01  4.7825194697E+00  2.8152377564E+00
              5.7330884818E+00  5.0760859080E+00  3.2959312088E+00
              3.3234240101E+00  6.1392241066E-01  6.0210389429E+00
              1.7283032446E+01 -2.5835150517E+00  7.3853600653E+00
              9.8865050292E+00  7.7500685079E+00  1.0744912466E+00
              8.2999253735E-01  7.9799569320E+00  1.4509166340E+00
              8.2265199545E+00 -2.3536266276E+00  7.7617854527E+00
      xred    2.5000000000E-01  7.5900000000E-01  7.5900000000E-01
              7.5000000000E-01  2.4100000000E-01  2.4100000000E-01
              5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
              6.9388939039E-18  0.0000000000E+00  5.0000000000E-01
              8.6924000000E-01  6.5322000000E-01  9.2098000000E-01
              6.3076000000E-01  9.2098000000E-01  6.5322000000E-01
              1.3076000000E-01  3.4678000000E-01  7.9020000000E-02
              3.6924000000E-01  7.9020000000E-02  3.4678000000E-01
              4.1220000000E-01  7.1090000000E-01  8.8570000000E-01
              8.7800000000E-02  8.8570000000E-01  7.1090000000E-01
              5.8780000000E-01  2.8910000000E-01  1.1430000000E-01
              9.1220000000E-01  1.1430000000E-01  2.8910000000E-01
              6.3500000000E-01  3.1860000000E-01  6.2700000000E-01
              8.6500000000E-01  6.2700000000E-01  3.1860000000E-01
              3.6500000000E-01  6.8140000000E-01  3.7300000000E-01
              1.3500000000E-01  3.7300000000E-01  6.8140000000E-01
              8.4190000000E-01  1.2160000000E-01  8.3580000000E-01
              6.5810000000E-01  8.3580000000E-01  1.2160000000E-01
              1.5810000000E-01  8.7840000000E-01  1.6420000000E-01
              3.4190000000E-01  1.6420000000E-01  8.7840000000E-01
     znucl     24.00000   83.00000    8.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset= 1.

 chkinp: Checking input parameters for consistency, jdtset= 2.
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  1 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     3) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    92) of the index (     1)  differs from its standard size (     2)
dtsetcopy : copying area  dmatpawu   the actual size (     0) of the index (     4)  differs from its standard size (     4)
dtsetcopy : copying area  mixalch    the actual size (     3) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     3) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size ( 14076) of the index (     1)  differs from its standard size (  8924)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 Unit cell volume ucvol=  1.5897291E+03 bohr^3
 Angles (23,13,12)=  1.19864791E+02  7.40033976E+01  1.05996602E+02 degrees
 setup1 : take into account q-point for computing boxcut.

 Coarse grid specifications (used for wave-functions):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 100  60  60
         ecut(hartree)=     35.000   => boxcut(ratio)=   2.07309

 Fine grid specifications (used for densities):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 120  64  64
         ecut(hartree)=     45.000   => boxcut(ratio)=   2.05123
-P-0000  leave_test : synchronization done...
kpgio: loop on k-points done in parallel
-P-0000  leave_test : synchronization done...
- pspatm: opening atomic psp file    /work/home3/sschu/abinit_pot/Cr_LDA_abinit
 Paw atomic data for element Cr - Generated by AtomPAW (N. Holzwarth) + AtomPAW2Abinit v3.1.1
  24.00000  14.00000  20070327                znucl, zion, pspdat
    7    7    2    0      1444   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw3
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.30299562
 3 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=1444 , AA= 0.26303E-03 BB= 0.63126E-02
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size=1439 , AA= 0.26303E-03 BB= 0.63126E-02
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size=1671 , AA= 0.26303E-03 BB= 0.63126E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions = sphere core radius
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 2
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 3
 pspatm: atomic psp has been read  and splines computed

- pspatm: opening atomic psp file    /work/home3/sschu/abinit_pot/Bi_abinit.paw
 Paw atomic data for element Bi - Generated by AtomPAW + AtomPAW2Abinit v3.2.1
  83.00000  15.00000  20090123                znucl, zion, pspdat
    7    7    2    0      1509   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw4
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.60648143
 4 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=1509 , AA= 0.83004E-04 BB= 0.68893E-02
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size=1504 , AA= 0.83004E-04 BB= 0.68893E-02
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size=1583 , AA= 0.83004E-04 BB= 0.68893E-02
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size=1699 , AA= 0.83004E-04 BB= 0.68893E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions = sphere core radius
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 2
 Radial grid used for (t)core density is grid 3
 Radial grid used for Vloc is grid 4
 Radial grid used for pseudo valence density is grid 4
 pspatm: atomic psp has been read  and splines computed

- pspatm: opening atomic psp file    /work/home3/sschu/abinit_pot/O_LDA_abinit
 Paw atomic data for element O - Generated by AtomPAW (N. Holzwarth) + AtomPAW2Abinit v3.1.1
   8.00000   6.00000  20070409                znucl, zion, pspdat
    7    7    1    0      1311   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw3
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.41465230
 4 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=1311 , AA= 0.72565E-03 BB= 0.58052E-02
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size=1306 , AA= 0.72565E-03 BB= 0.58052E-02
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size=1329 , AA= 0.72565E-03 BB= 0.58052E-02
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size=1642 , AA= 0.72565E-03 BB= 0.58052E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions = sphere core radius
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 2
 Radial grid used for (t)core density is grid 3
 Radial grid used for Vloc is grid 4
 pspatm: atomic psp has been read  and splines computed

   7.58470666E+04                                ecore*ucvol(ha*bohr**3)
-P-0000
-P-0000 ================================================================================
-P-0000
-P-0000           - hdr_check: checking restart file header for consistency -
-P-0000
-P-0000
-P-0000         current calculation                         restart file
-P-0000         -------------------                         ------------
-P-0000
-P-0000   calculation expects a wf_planewave    |  input file contains a wf_planewave
-P-0000 . ABINIT  code version 5.8.4            |  ABINIT  code version 5.8.4
-P-0000 . date 20100308 bantot 8924 natom   20  |  date 20100307 bantot 4462 natom   20
-P-0000   nkpt  46 nsym  4 ngfft 120,  64,  64  |  nkpt  23 nsym  4 ngfft 120,  64,  64
-P-0000   ntypat  3 ecut_eff  35.0000000        |  ntypat  3 ecut_eff  35.0000000
-P-0000   usepaw  1                             |  usepaw  1
-P-0000   usewvl  0                             |  usewvl  0
-P-0000   rprimd:                               |  rprimd:
-P-0000     18.1130250   0.0000000   0.0000000  |    18.1130250   0.0000000   0.0000000
-P-0000     -2.8474891   9.9325976   0.0000000  |    -2.8474891   9.9325976   0.0000000
-P-0000      2.8474891  -4.5361557   8.8362767  |     2.8474891  -4.5361557   8.8362767
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   input nkpt=      46 not equal disk file nkpt=      23
-P-0000   PAW: ecutdg   45.000000               |  PAW: ecutdg   45.000000
-P-0000   symafm:                               |  symafm:
-P-0000     1  1  1  1                          |    1  1  1  1
-P-0000   symrel:                               |  symrel:
-P-0000     1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
-P-0000    -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
-P-0000    -1  0  0  0  0  1  0  1  0           |   -1  0  0  0  0  1  0  1  0
-P-0000     1  0  0  0  0 -1  0 -1  0           |    1  0  0  0  0 -1  0 -1  0
-P-0000   typat:                                |  typat:
-P-0000     1  1  1  1  2  2  2  2  3  3  3  3  |    1  1  1  1  2  2  2  2  3  3  3  3
-P-0000     3  3  3  3  3  3  3  3              |    3  3  3  3  3  3  3  3
-P-0000   so_psp  :                             |  so_psp  :
-P-0000     1  1  1                             |    1  1  1
-P-0000   tnons:                                |  tnons:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
-P-0000      0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
-P-0000    znucl:                               |   znucl:
-P-0000    24.00 83.00  8.00                    |   24.00 83.00  8.00
-P-0000   pseudopotential atom type  1:         |  pseudopotential atom type  1:
-P-0000   pspso   0 pspxc   7  lmn_size  18     |  pspso   0 pspxc   7  lmn_size  18
-P-0000   pspdat ****** pspcod    7 zion  14.0  |  pspdat ****** pspcod    7 zion  14.0
-P-0000   pseudopotential atom type  2:         |  pseudopotential atom type  2:
-P-0000   pspso   0 pspxc   7  lmn_size  18     |  pspso   0 pspxc   7  lmn_size  18
-P-0000   pspdat ****** pspcod    7 zion  15.0  |  pspdat ****** pspcod    7 zion  15.0
-P-0000   pseudopotential atom type  3:         |  pseudopotential atom type  3:
-P-0000   pspso   0 pspxc   7  lmn_size   8     |  pspso   0 pspxc   7  lmn_size   8
-P-0000   pspdat ****** pspcod    7 zion   6.0  |  pspdat ****** pspcod    7 zion   6.0
-P-0000   xred:                                 |  xred:
-P-0000      0.2500000   0.7590000   0.7590000  |     0.2500000   0.7590000   0.7590000
-P-0000      0.7500000   0.2410000   0.2410000  |     0.7500000   0.2410000   0.2410000
-P-0000      0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000
-P-0000      0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
-P-0000      0.8692400   0.6532200   0.9209800  |     0.8692400   0.6532200   0.9209800
-P-0000      0.6307600   0.9209800   0.6532200  |     0.6307600   0.9209800   0.6532200
-P-0000      0.1307600   0.3467800   0.0790200  |     0.1307600   0.3467800   0.0790200
-P-0000      0.3692400   0.0790200   0.3467800  |     0.3692400   0.0790200   0.3467800
-P-0000      0.4122000   0.7109000   0.8857000  |     0.4122000   0.7109000   0.8857000
-P-0000      0.0878000   0.8857000   0.7109000  |     0.0878000   0.8857000   0.7109000
-P-0000      0.5878000   0.2891000   0.1143000  |     0.5878000   0.2891000   0.1143000
-P-0000      0.9122000   0.1143000   0.2891000  |     0.9122000   0.1143000   0.2891000
-P-0000      0.6350000   0.3186000   0.6270000  |     0.6350000   0.3186000   0.6270000
-P-0000      0.8650000   0.6270000   0.3186000  |     0.8650000   0.6270000   0.3186000
-P-0000      0.3650000   0.6814000   0.3730000  |     0.3650000   0.6814000   0.3730000
-P-0000      0.1350000   0.3730000   0.6814000  |     0.1350000   0.3730000   0.6814000
-P-0000      0.8419000   0.1216000   0.8358000  |     0.8419000   0.1216000   0.8358000
-P-0000      0.6581000   0.8358000   0.1216000  |     0.6581000   0.8358000   0.1216000
-P-0000      0.1581000   0.8784000   0.1642000  |     0.1581000   0.8784000   0.1642000
-P-0000      0.3419000   0.1642000   0.8784000  |     0.3419000   0.1642000   0.8784000
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   Restart of self-consistent calculation need translated wavefunctions.
-P-0000   Indeed, critical differences between current calculation and
-P-0000   restart file have been detected in:
-P-0000         * the number, position, or weight of k-points
-P-0000         * the format of wavefunctions (istwfk)
-P-0000 ================================================================================
-P-0000  initwf : disk file gives npw= 15720 nband=    97 for k pt number=    1
-P-0000  initwf :    97 bands have been initialized from disk
-P-0000  initwf : disk file gives npw= 15711 nband=    97 for k pt number=    2
-P-0000  initwf :    97 bands have been initialized from disk
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points and spins done in parallel
 pareigocc : MPI_ALLREDUCE
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points done in parallel
 newkpt: spin channel isppol2 =     1
-P-0000 - newkpt: read input wf with ikpt,npw=   1   15720, make ikpt,npw=   1   15720
-P-0000 - newkpt: read input wf with ikpt,npw=   2   15711, make ikpt,npw=   2   15711
 newkpt: spin channel isppol2 =     2
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 

 respfn : eigen0 array
 symatm: atom number    1 is reached starting at atom
   1  2  1  2
 symatm: atom number    2 is reached starting at atom
   2  1  2  1
 symatm: atom number    3 is reached starting at atom
   3  3  4  4
 symatm: atom number    4 is reached starting at atom
   4  4  3  3
 symatm: atom number    5 is reached starting at atom
   5  7  6  8
 symatm: atom number    6 is reached starting at atom
   6  8  5  7
 symatm: atom number    7 is reached starting at atom
   7  5  8  6
 symatm: atom number    8 is reached starting at atom
   8  6  7  5
 symatm: atom number    9 is reached starting at atom
   9 11 10 12
 symatm: atom number   10 is reached starting at atom
  10 12  9 11
 symatm: atom number   11 is reached starting at atom
  11  9 12 10
 symatm: atom number   12 is reached starting at atom
  12 10 11  9
 symatm: atom number   13 is reached starting at atom
  13 15 14 16
 symatm: atom number   14 is reached starting at atom
  14 16 13 15
 symatm: atom number   15 is reached starting at atom
  15 13 16 14
 symatm: atom number   16 is reached starting at atom
  16 14 15 13
 symatm: atom number   17 is reached starting at atom
  17 19 18 20
 symatm: atom number   18 is reached starting at atom
  18 20 17 19
 symatm: atom number   19 is reached starting at atom
  19 17 20 18
 symatm: atom number   20 is reached starting at atom
  20 18 19 17

 FFT (fine) grid used in SCF cycle:

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 120  64  64
         ecut(hartree)=     45.000   => boxcut(ratio)=   2.05123


******************************************
 LDA+U Method used: FLL
******************************************

 pawpuxinit : for species    1
   number of projectors is   2

 pawpuxinit : dmatpuopt=2 
   PAW+U: dens. mat. constructed by selecting contribution
          for each angular momentum to the density (inside PAW augm. region(s))
-P-0000  leave_test : synchronization done...
 mkrho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    6.3988E-01  at reduced coord.    0.4400    0.7333    0.8667
,     Minimum=    4.8283E-03  at reduced coord.    0.0000    0.5000    0.5000
 Spin up density      [el/Bohr^3]
,     Maximum=    3.2181E-01  at reduced coord.    0.8400    0.1167    0.8833
,     Minimum=    2.4015E-03  at reduced coord.    0.0000    0.5000    0.5000
 Spin down density    [el/Bohr^3]
,     Maximum=    3.2163E-01  at reduced coord.    0.4200    0.6667    0.8833
,     Minimum=    2.4267E-03  at reduced coord.    0.0000    0.5000    0.5000
 Magnetization (spin up - spin down) [el/Bohr^3]
,     Maximum=    4.9268E-02  at reduced coord.    0.4800    0.4333    0.8667
,     Minimum=   -4.9619E-02  at reduced coord.    0.7200    0.3667    0.3333
 Relative magnetization (=zeta, between -1 and 1)
,     Maximum=    4.8671E-01  at reduced coord.    0.4700    0.4167    0.8167
,     Minimum=   -5.0499E-01  at reduced coord.    0.7000    0.4167    0.3667

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   0.57287
Atom   1. Occupations for spin down =   3.25328
=> On atom   1, local Mag. is      0.26804112E+01

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.11217    0.02134    0.01048   -0.01882   -0.05968
     0.02134    0.08635   -0.03226    0.01594   -0.03305
     0.01048   -0.03226    0.15100   -0.05528    0.00493
    -0.01882    0.01594   -0.05528    0.09284    0.00823
    -0.05968   -0.03305    0.00493    0.00823    0.13050

Calculated occupation matrix for component down
     0.68384   -0.09763   -0.05799    0.07737    0.29104
    -0.09763    0.79279    0.16658   -0.07320    0.15898
    -0.05799    0.16658    0.46506    0.25948   -0.01626
     0.07737   -0.07320    0.25948    0.76328   -0.04838
     0.29104    0.15898   -0.01626   -0.04838    0.54831

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   0.57287
Atom   2. Occupations for spin down =   3.25328
=> On atom   2, local Mag. is      0.26804112E+01

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.11217    0.02134    0.01048   -0.01882   -0.05968
     0.02134    0.08635   -0.03226    0.01594   -0.03305
     0.01048   -0.03226    0.15100   -0.05528    0.00493
    -0.01882    0.01594   -0.05528    0.09284    0.00823
    -0.05968   -0.03305    0.00493    0.00823    0.13050

Calculated occupation matrix for component down
     0.68384   -0.09763   -0.05799    0.07737    0.29104
    -0.09763    0.79279    0.16658   -0.07320    0.15898
    -0.05799    0.16658    0.46506    0.25948   -0.01626
     0.07737   -0.07320    0.25948    0.76328   -0.04838
     0.29104    0.15898   -0.01626   -0.04838    0.54831

========== LDA+U DATA ===================================================

====== For Atom    3, occupations for correlated orbitals. l =   2

Atom   3. Occupations for spin up =   3.25051
Atom   3. Occupations for spin down =   0.56506
=> On atom   3, local Mag. is     -0.26854441E+01

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.37704   -0.25354   -0.00084    0.02132    0.06417
    -0.25354    0.80105    0.00382    0.00649    0.03084
    -0.00084    0.00382    0.59934    0.32638   -0.09031
     0.02132    0.00649    0.32638    0.58499    0.09148
     0.06417    0.03084   -0.09031    0.09148    0.88809

Calculated occupation matrix for component down
     0.17343    0.05366    0.00049   -0.00658   -0.01896
     0.05366    0.08192    0.00006    0.00218   -0.01035
     0.00049    0.00006    0.12088   -0.06461    0.01752
    -0.00658    0.00218   -0.06461    0.12245   -0.01938
    -0.01896   -0.01035    0.01752   -0.01938    0.06638

========== LDA+U DATA ===================================================

====== For Atom    4, occupations for correlated orbitals. l =   2

Atom   4. Occupations for spin up =   3.25051
Atom   4. Occupations for spin down =   0.56506
=> On atom   4, local Mag. is     -0.26854441E+01

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.52429   -0.29661    0.00456    0.09692    0.11842
    -0.29661    0.68163    0.05072   -0.01479    0.12092
     0.00456    0.05072    0.78095    0.25216   -0.09174
     0.09692   -0.01479    0.25216    0.43774    0.13234
     0.11842    0.12092   -0.09174    0.13234    0.82590

Calculated occupation matrix for component down
     0.13843    0.05725   -0.00080   -0.02455   -0.02520
     0.05725    0.10381   -0.00939    0.00250   -0.02540
    -0.00080   -0.00939    0.09045   -0.05737    0.01613
    -0.02455    0.00250   -0.05737    0.15745   -0.02418
    -0.02520   -0.02540    0.01613   -0.02418    0.07492

 ******  TOTAL Dij    in Ha (atom      1, component up) *****
  -1.70710   0.23240   0.00051   0.00083   0.00000  -0.00011  -0.00017   0.00000  -0.00014   0.00065   0.00009   0.00009 ...
   0.23240   0.10852  -0.00017  -0.00027   0.00000  -0.00001  -0.00002   0.00000   0.00001  -0.00005  -0.00001   0.00000 ...
   0.00051  -0.00017  -1.20960   0.00060  -0.00013   0.06056  -0.00007   0.00001   0.00000   0.00045  -0.00012   0.00000 ...
   0.00083  -0.00027   0.00060  -1.20898   0.00008  -0.00007   0.06049  -0.00001   0.00000   0.00030   0.00053   0.00000 ...
   0.00000   0.00000  -0.00013   0.00008  -1.20867   0.00001  -0.00001   0.06046   0.00023   0.00000   0.00000   0.00038 ...
  -0.00011  -0.00001   0.06056  -0.00007   0.00001   0.03521   0.00002  -0.00001   0.00004  -0.00014   0.00003   0.00002 ...
  -0.00017  -0.00002  -0.00007   0.06049  -0.00001   0.00002   0.03523   0.00000   0.00002  -0.00011  -0.00016  -0.00004 ...
   0.00000   0.00000   0.00001  -0.00001   0.06046  -0.00001   0.00000   0.03523  -0.00009   0.00002  -0.00004  -0.00014 ...
  -0.00014   0.00001   0.00000   0.00000   0.00023   0.00004   0.00002  -0.00009   0.00715  -0.00730  -0.00414   0.00629 ...
   0.00065  -0.00005   0.00045   0.00030   0.00000  -0.00014  -0.00011   0.00002  -0.00730   0.01540   0.01228  -0.00548 ...
   0.00009  -0.00001  -0.00012   0.00053   0.00000   0.00003  -0.00016  -0.00004  -0.00414   0.01228  -0.00826   0.01931 ...
   0.00009   0.00000   0.00000   0.00000   0.00038   0.00002  -0.00004  -0.00014   0.00629  -0.00548   0.01931   0.01361 ...
   ...  only 12  components have been written...

 ******  TOTAL Dij    in Ha (atom      1, component down) *****
  -1.77472   0.25164   0.00007   0.00012  -0.00001   0.00000   0.00000   0.00000   0.00013   0.00019  -0.00006  -0.00008 ...
   0.25164   0.10769   0.00000   0.00000   0.00000   0.00000   0.00001   0.00000  -0.00002  -0.00004  -0.00002   0.00001 ...
   0.00007   0.00000  -1.28867   0.00019   0.00012   0.07401  -0.00003  -0.00001   0.00022   0.00004  -0.00006   0.00011 ...
   0.00012   0.00000   0.00019  -1.28848  -0.00007  -0.00003   0.07398   0.00001   0.00011  -0.00005   0.00008  -0.00023 ...
  -0.00001   0.00000   0.00012  -0.00007  -1.28812  -0.00001   0.00001   0.07396  -0.00004   0.00011  -0.00019  -0.00005 ...
   0.00000   0.00000   0.07401  -0.00003  -0.00001   0.03400   0.00001   0.00000  -0.00002   0.00000   0.00001  -0.00001 ...
   0.00000   0.00001  -0.00003   0.07398   0.00001   0.00001   0.03401   0.00000  -0.00001   0.00001   0.00000   0.00002 ...
   0.00000   0.00000  -0.00001   0.00001   0.07396   0.00000   0.00000   0.03401   0.00000  -0.00001   0.00002   0.00001 ...
   0.00013  -0.00002   0.00022   0.00011  -0.00004  -0.00002  -0.00001   0.00000  -0.09918   0.01117   0.00656  -0.00837 ...
   0.00019  -0.00004   0.00004  -0.00005   0.00011   0.00000   0.00001  -0.00001   0.01117  -0.11166  -0.01832   0.00818 ...
  -0.00006  -0.00002  -0.00006   0.00008  -0.00019   0.00001   0.00000   0.00002   0.00656  -0.01832  -0.07459  -0.02932 ...
  -0.00008   0.00001   0.00011  -0.00023  -0.00005  -0.00001   0.00002   0.00001  -0.00837   0.00818  -0.02932  -0.10778 ...
   ...  only 12  components have been written...

 ******  TOTAL Dij    in Ha (atom     20, component up) *****
   0.88171  -2.71145   0.00004  -0.00018   0.00032  -0.00028   0.00116  -0.00209
  -2.71145   8.29236  -0.00011   0.00050  -0.00088   0.00073  -0.00326   0.00585
   0.00004  -0.00011  -0.20606  -0.00057  -0.00036   0.42984   0.00273   0.00168
  -0.00018   0.00050  -0.00057  -0.20487   0.00023   0.00273   0.42416  -0.00109
   0.00032  -0.00088  -0.00036   0.00023  -0.20553   0.00168  -0.00109   0.42723
  -0.00028   0.00073   0.42984   0.00273   0.00168   2.01141  -0.01290  -0.00780
   0.00116  -0.00326   0.00273   0.42416  -0.00109  -0.01290   2.03829   0.00519
  -0.00209   0.00585   0.00168  -0.00109   0.42723  -0.00780   0.00519   2.02402

 ******  TOTAL Dij    in Ha (atom     20, component down) *****
   0.88159  -2.71111  -0.00009  -0.00024   0.00026   0.00058   0.00154  -0.00171
  -2.71111   8.29128   0.00025   0.00065  -0.00072  -0.00165  -0.00431   0.00480
  -0.00009   0.00025  -0.20575  -0.00056  -0.00059   0.42819   0.00264   0.00289
  -0.00024   0.00065  -0.00056  -0.20471   0.00017   0.00264   0.42329  -0.00074
   0.00026  -0.00072  -0.00059   0.00017  -0.20565   0.00289  -0.00074   0.42780
   0.00058  -0.00165   0.42819   0.00264   0.00289   2.01983  -0.01246  -0.01379
   0.00154  -0.00431   0.00264   0.42329  -0.00074  -0.01246   2.04284   0.00347
  -0.00171   0.00480   0.00289  -0.00074   0.42780  -0.01379   0.00347   2.02132

 ==>  initialize data related to q vector <== 

 respfn : the norm of the phonon wavelength (as input) was small (<1.d-7).
  q has been set exactly to (0 0 0)
 symq3 : found symmetry   1 preserves q
 symq3 : found symmetry    1 + TimeReversal preserves q
 symq3 : found symmetry   2 preserves q
 symq3 : found symmetry    2 + TimeReversal preserves q
 symq3 : found symmetry   3 preserves q
 symq3 : found symmetry    3 + TimeReversal preserves q
 symq3 : found symmetry   4 preserves q
 symq3 : found symmetry    4 + TimeReversal preserves q
 symq3 : able to use time-reversal symmetry.
  (except for gamma, not yet able to use time-reversal symmetry)

================================================================================
  loper3: enter
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)= 18.1130250  0.0000000  0.0000000  G(1)=  0.0552089  0.0158274 -0.0096660
 R(2)= -2.8474891  9.9325976  0.0000000  G(2)=  0.0000000  0.1006786  0.0516840
 R(3)=  2.8474891 -4.5361557  8.8362767  G(3)=  0.0000000  0.0000000  0.1131698
 Unit cell volume ucvol=  1.5897291E+03 bohr^3
 Unit cell volume ucvol=  1.5897291E+03 bohr^3
 Angles (23,13,12)=  1.19864791E+02  7.40033976E+01  1.05996602E+02 degrees
 Angles (23,13,12)=  1.19864791E+02  7.40033976E+01  1.05996602E+02 degrees

--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : derivative vs k along direction   1
  loper3 2 nkpt          46
 insy3 : only one element in the set of symmetries for this perturbation :
   1   0   0   0   1   0   0   0   1
 symatm: atom number    1 is reached starting at atom
   1
 symatm: atom number    2 is reached starting at atom
   2
 symatm: atom number    3 is reached starting at atom
   3
 symatm: atom number    4 is reached starting at atom
   4
 symatm: atom number    5 is reached starting at atom
   5
 symatm: atom number    6 is reached starting at atom
   6
 symatm: atom number    7 is reached starting at atom
   7
 symatm: atom number    8 is reached starting at atom
   8
 symatm: atom number    9 is reached starting at atom
   9
 symatm: atom number   10 is reached starting at atom
  10
 symatm: atom number   11 is reached starting at atom
  11
 symatm: atom number   12 is reached starting at atom
  12
 symatm: atom number   13 is reached starting at atom
  13
 symatm: atom number   14 is reached starting at atom
  14
 symatm: atom number   15 is reached starting at atom
  15
 symatm: atom number   16 is reached starting at atom
  16
 symatm: atom number   17 is reached starting at atom
  17
 symatm: atom number   18 is reached starting at atom
  18
 symatm: atom number   19 is reached starting at atom
  19
 symatm: atom number   20 is reached starting at atom
  20
 symkpt : not enough symmetry to change the number of k points.
 getmpw: optimal value of mpw=   15734
-P-0000  leave_test : synchronization done...
kpgio: loop on k-points done in parallel
-P-0000  leave_test : synchronization done...
-P-0000
-P-0000 ================================================================================
-P-0000
-P-0000           - hdr_check: checking restart file header for consistency -
-P-0000
-P-0000
-P-0000         current calculation                         restart file
-P-0000         -------------------                         ------------
-P-0000
-P-0000   calculation expects a wf_planewave    |  input file contains a wf_planewave
-P-0000 . ABINIT  code version 5.8.4            |  ABINIT  code version 5.8.4
-P-0000 . date 20100308 bantot 8924 natom   20  |  date 20100307 bantot 4462 natom   20
-P-0000   nkpt  46 nsym  4 ngfft 120,  64,  64  |  nkpt  23 nsym  4 ngfft 120,  64,  64
-P-0000   ntypat  3 ecut_eff  35.0000000        |  ntypat  3 ecut_eff  35.0000000
-P-0000   usepaw  1                             |  usepaw  1
-P-0000   usewvl  0                             |  usewvl  0
-P-0000   rprimd:                               |  rprimd:
-P-0000     18.1130250   0.0000000   0.0000000  |    18.1130250   0.0000000   0.0000000
-P-0000     -2.8474891   9.9325976   0.0000000  |    -2.8474891   9.9325976   0.0000000
-P-0000      2.8474891  -4.5361557   8.8362767  |     2.8474891  -4.5361557   8.8362767
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   input nkpt=      46 not equal disk file nkpt=      23
-P-0000   PAW: ecutdg   45.000000               |  PAW: ecutdg   45.000000
-P-0000   symafm:                               |  symafm:
-P-0000     1  1  1  1                          |    1  1  1  1
-P-0000   symrel:                               |  symrel:
-P-0000     1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
-P-0000    -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
-P-0000    -1  0  0  0  0  1  0  1  0           |   -1  0  0  0  0  1  0  1  0
-P-0000     1  0  0  0  0 -1  0 -1  0           |    1  0  0  0  0 -1  0 -1  0
-P-0000   typat:                                |  typat:
-P-0000     1  1  1  1  2  2  2  2  3  3  3  3  |    1  1  1  1  2  2  2  2  3  3  3  3
-P-0000     3  3  3  3  3  3  3  3              |    3  3  3  3  3  3  3  3
-P-0000   so_psp  :                             |  so_psp  :
-P-0000     1  1  1                             |    1  1  1
-P-0000   tnons:                                |  tnons:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
-P-0000      0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
-P-0000    znucl:                               |   znucl:
-P-0000    24.00 83.00  8.00                    |   24.00 83.00  8.00
-P-0000   pseudopotential atom type  1:         |  pseudopotential atom type  1:
-P-0000   pspso   0 pspxc   7  lmn_size  18     |  pspso   0 pspxc   7  lmn_size  18
-P-0000   pspdat ****** pspcod    7 zion  14.0  |  pspdat ****** pspcod    7 zion  14.0
-P-0000   pseudopotential atom type  2:         |  pseudopotential atom type  2:
-P-0000   pspso   0 pspxc   7  lmn_size  18     |  pspso   0 pspxc   7  lmn_size  18
-P-0000   pspdat ****** pspcod    7 zion  15.0  |  pspdat ****** pspcod    7 zion  15.0
-P-0000   pseudopotential atom type  3:         |  pseudopotential atom type  3:
-P-0000   pspso   0 pspxc   7  lmn_size   8     |  pspso   0 pspxc   7  lmn_size   8
-P-0000   pspdat ****** pspcod    7 zion   6.0  |  pspdat ****** pspcod    7 zion   6.0
-P-0000   xred:                                 |  xred:
-P-0000      0.2500000   0.7590000   0.7590000  |     0.2500000   0.7590000   0.7590000
-P-0000      0.7500000   0.2410000   0.2410000  |     0.7500000   0.2410000   0.2410000
-P-0000      0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000
-P-0000      0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
-P-0000      0.8692400   0.6532200   0.9209800  |     0.8692400   0.6532200   0.9209800
-P-0000      0.6307600   0.9209800   0.6532200  |     0.6307600   0.9209800   0.6532200
-P-0000      0.1307600   0.3467800   0.0790200  |     0.1307600   0.3467800   0.0790200
-P-0000      0.3692400   0.0790200   0.3467800  |     0.3692400   0.0790200   0.3467800
-P-0000      0.4122000   0.7109000   0.8857000  |     0.4122000   0.7109000   0.8857000
-P-0000      0.0878000   0.8857000   0.7109000  |     0.0878000   0.8857000   0.7109000
-P-0000      0.5878000   0.2891000   0.1143000  |     0.5878000   0.2891000   0.1143000
-P-0000      0.9122000   0.1143000   0.2891000  |     0.9122000   0.1143000   0.2891000
-P-0000      0.6350000   0.3186000   0.6270000  |     0.6350000   0.3186000   0.6270000
-P-0000      0.8650000   0.6270000   0.3186000  |     0.8650000   0.6270000   0.3186000
-P-0000      0.3650000   0.6814000   0.3730000  |     0.3650000   0.6814000   0.3730000
-P-0000      0.1350000   0.3730000   0.6814000  |     0.1350000   0.3730000   0.6814000
-P-0000      0.8419000   0.1216000   0.8358000  |     0.8419000   0.1216000   0.8358000
-P-0000      0.6581000   0.8358000   0.1216000  |     0.6581000   0.8358000   0.1216000
-P-0000      0.1581000   0.8784000   0.1642000  |     0.1581000   0.8784000   0.1642000
-P-0000      0.3419000   0.1642000   0.8784000  |     0.3419000   0.1642000   0.8784000
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   Restart of self-consistent calculation need translated wavefunctions.
-P-0000   Indeed, critical differences between current calculation and
-P-0000   restart file have been detected in:
-P-0000         * the number, position, or weight of k-points
-P-0000         * the format of wavefunctions (istwfk)
-P-0000 ================================================================================
-P-0000  initwf : disk file gives npw= 15720 nband=    97 for k pt number=    1
-P-0000  initwf :    97 bands have been initialized from disk
-P-0000  initwf : disk file gives npw= 15711 nband=    97 for k pt number=    2
-P-0000  initwf :    97 bands have been initialized from disk
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points and spins done in parallel
 pareigocc : MPI_ALLREDUCE
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points done in parallel
 newkpt: spin channel isppol2 =     1
-P-0000 - newkpt: read input wf with ikpt,npw=   1   15720, make ikpt,npw=   1   15720
-P-0000 - newkpt: read input wf with ikpt,npw=   2   15711, make ikpt,npw=   2   15711
 newkpt: spin channel isppol2 =     2
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 
 getmpw: optimal value of mpw=   15734
-P-0000  leave_test : synchronization done...
kpgio: loop on k-points done in parallel
-P-0000  leave_test : synchronization done...
-P-0000
-P-0000 ================================================================================
-P-0000
-P-0000           - hdr_check: checking restart file header for consistency -
-P-0000
-P-0000
-P-0000         current calculation                         restart file
-P-0000         -------------------                         ------------
-P-0000
-P-0000   calculation expects a wf_planewave    |  input file contains a wf_planewave
-P-0000 . ABINIT  code version 5.8.4            |  ABINIT  code version 5.8.4
-P-0000 . date 20100308 bantot 8924 natom   20  |  date 20100307 bantot 4462 natom   20
-P-0000   nkpt  46 nsym  4 ngfft 120,  64,  64  |  nkpt  23 nsym  4 ngfft 120,  64,  64
-P-0000   ntypat  3 ecut_eff  35.0000000        |  ntypat  3 ecut_eff  35.0000000
-P-0000   usepaw  1                             |  usepaw  1
-P-0000   usewvl  0                             |  usewvl  0
-P-0000   rprimd:                               |  rprimd:
-P-0000     18.1130250   0.0000000   0.0000000  |    18.1130250   0.0000000   0.0000000
-P-0000     -2.8474891   9.9325976   0.0000000  |    -2.8474891   9.9325976   0.0000000
-P-0000      2.8474891  -4.5361557   8.8362767  |     2.8474891  -4.5361557   8.8362767
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   input nkpt=      46 not equal disk file nkpt=      23
-P-0000   PAW: ecutdg   45.000000               |  PAW: ecutdg   45.000000
-P-0000   symafm:                               |  symafm:
-P-0000     1  1  1  1                          |    1  1  1  1
-P-0000   symrel:                               |  symrel:
-P-0000     1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
-P-0000    -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
-P-0000    -1  0  0  0  0  1  0  1  0           |   -1  0  0  0  0  1  0  1  0
-P-0000     1  0  0  0  0 -1  0 -1  0           |    1  0  0  0  0 -1  0 -1  0
-P-0000   typat:                                |  typat:
-P-0000     1  1  1  1  2  2  2  2  3  3  3  3  |    1  1  1  1  2  2  2  2  3  3  3  3
-P-0000     3  3  3  3  3  3  3  3              |    3  3  3  3  3  3  3  3
-P-0000   so_psp  :                             |  so_psp  :
-P-0000     1  1  1                             |    1  1  1
-P-0000   tnons:                                |  tnons:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
-P-0000      0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
-P-0000    znucl:                               |   znucl:
-P-0000    24.00 83.00  8.00                    |   24.00 83.00  8.00
-P-0000   pseudopotential atom type  1:         |  pseudopotential atom type  1:
-P-0000   pspso   0 pspxc   7  lmn_size  18     |  pspso   0 pspxc   7  lmn_size  18
-P-0000   pspdat ****** pspcod    7 zion  14.0  |  pspdat ****** pspcod    7 zion  14.0
-P-0000   pseudopotential atom type  2:         |  pseudopotential atom type  2:
-P-0000   pspso   0 pspxc   7  lmn_size  18     |  pspso   0 pspxc   7  lmn_size  18
-P-0000   pspdat ****** pspcod    7 zion  15.0  |  pspdat ****** pspcod    7 zion  15.0
-P-0000   pseudopotential atom type  3:         |  pseudopotential atom type  3:
-P-0000   pspso   0 pspxc   7  lmn_size   8     |  pspso   0 pspxc   7  lmn_size   8
-P-0000   pspdat ****** pspcod    7 zion   6.0  |  pspdat ****** pspcod    7 zion   6.0
-P-0000   xred:                                 |  xred:
-P-0000      0.2500000   0.7590000   0.7590000  |     0.2500000   0.7590000   0.7590000
-P-0000      0.7500000   0.2410000   0.2410000  |     0.7500000   0.2410000   0.2410000
-P-0000      0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000
-P-0000      0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
-P-0000      0.8692400   0.6532200   0.9209800  |     0.8692400   0.6532200   0.9209800
-P-0000      0.6307600   0.9209800   0.6532200  |     0.6307600   0.9209800   0.6532200
-P-0000      0.1307600   0.3467800   0.0790200  |     0.1307600   0.3467800   0.0790200
-P-0000      0.3692400   0.0790200   0.3467800  |     0.3692400   0.0790200   0.3467800
-P-0000      0.4122000   0.7109000   0.8857000  |     0.4122000   0.7109000   0.8857000
-P-0000      0.0878000   0.8857000   0.7109000  |     0.0878000   0.8857000   0.7109000
-P-0000      0.5878000   0.2891000   0.1143000  |     0.5878000   0.2891000   0.1143000
-P-0000      0.9122000   0.1143000   0.2891000  |     0.9122000   0.1143000   0.2891000
-P-0000      0.6350000   0.3186000   0.6270000  |     0.6350000   0.3186000   0.6270000
-P-0000      0.8650000   0.6270000   0.3186000  |     0.8650000   0.6270000   0.3186000
-P-0000      0.3650000   0.6814000   0.3730000  |     0.3650000   0.6814000   0.3730000
-P-0000      0.1350000   0.3730000   0.6814000  |     0.1350000   0.3730000   0.6814000
-P-0000      0.8419000   0.1216000   0.8358000  |     0.8419000   0.1216000   0.8358000
-P-0000      0.6581000   0.8358000   0.1216000  |     0.6581000   0.8358000   0.1216000
-P-0000      0.1581000   0.8784000   0.1642000  |     0.1581000   0.8784000   0.1642000
-P-0000      0.3419000   0.1642000   0.8784000  |     0.3419000   0.1642000   0.8784000
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   Restart of self-consistent calculation need translated wavefunctions.
-P-0000   Indeed, critical differences between current calculation and
-P-0000   restart file have been detected in:
-P-0000         * the number, position, or weight of k-points
-P-0000         * the format of wavefunctions (istwfk)
-P-0000 ================================================================================
-P-0000  initwf : disk file gives npw= 15720 nband=    97 for k pt number=    1
-P-0000  initwf :    97 bands have been initialized from disk
-P-0000  initwf : disk file gives npw= 15711 nband=    97 for k pt number=    2
-P-0000  initwf :    97 bands have been initialized from disk
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points and spins done in parallel
 pareigocc : MPI_ALLREDUCE
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points done in parallel
 newkpt: spin channel isppol2 =     1
-P-0000 - newkpt: read input wf with ikpt,npw=   1   15720, make ikpt,npw=   1   15720
-P-0000 - newkpt: read input wf with ikpt,npw=   2   15711, make ikpt,npw=   2   15711
 newkpt: spin channel isppol2 =     2
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 

 loper3 : eigenq array
 Initialisation of the first-order wave-functions :
  ireadwf=   0
 newkpt: spin channel isppol2 =     1
-P-0000  wfconv :    97 bands set=0 with npw=  15720, for ikpt=   1
-P-0000  wfconv :    97 bands set=0 with npw=  15711, for ikpt=   2
 newkpt: spin channel isppol2 =     2
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 
  scfcv3 : enter

     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000

 FFT (fine) grid used for densities/potentials:
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 120  64  64
         ecut(hartree)=     45.000   => boxcut(ratio)=   2.05123
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000

 ******  TOTAL Dij(1) in Ha (atom      1, component up) *****
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   ...  only 12  components have been written...

 ******  TOTAL Dij(1) in Ha (atom      1, component down) *****
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   ...  only 12  components have been written...
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000
 scfcv3, nstep=        1000

 ******  TOTAL Dij(1) in Ha (atom     20, component up) *****
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000

 ******  TOTAL Dij(1) in Ha (atom     20, component down) *****
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  ****  In vtorho3 for isppol=           1
[p2d079:11710] *** Process received signal ***
[p2d079:11710] Signal: Segmentation fault (11)
[p2d079:11710] Signal code: Address not mapped (1)
[p2d079:11710] Failing at address: (nil)
[p2d079:11710] [ 0] /lib64/libpthread.so.0 [0x2ad322108c00]
[p2d079:11710] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d079:11710] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d079:11710] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d079:11710] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d079:11710] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d079:11710] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d079:11710] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d079:11710] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d079:11710] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d079:11710] [10] abinip(main+0x3c) [0x44458c]
[p2d079:11710] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ad322232184]
[p2d079:11710] [12] abinip [0x4444b9]
[p2d079:11710] *** End of error message ***
[p2s230:16284] *** Process received signal ***
[p2s230:16284] Signal: Segmentation fault (11)
[p2s230:16284] Signal code: Address not mapped (1)
[p2s230:16284] Failing at address: (nil)
[p2d030:31086] *** Process received signal ***
[p2d030:31086] Signal: Segmentation fault (11)
[p2d030:31086] Signal code: Address not mapped (1)
[p2d030:31086] Failing at address: (nil)
[p2s230:16284] [ 0] /lib64/libpthread.so.0 [0x2aac7382dc00]
[p2s230:16284] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2s230:16284] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2s230:16284] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2s230:16284] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2s230:16284] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2s230:16284] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2s230:16284] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2s230:16284] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2s230:16284] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2s230:16284] [10] abinip(main+0x3c) [0x44458c]
[p2s230:16284] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2aac73957184]
[p2s230:16284] [12] abinip [0x4444b9]
[p2s230:16284] *** End of error message ***
[p2d027:19401] *** Process received signal ***
[p2d027:19401] Signal: Segmentation fault (11)
[p2d027:19401] Signal code: Address not mapped (1)
[p2d027:19401] Failing at address: (nil)
[p2d030:31086] [ 0] /lib64/libpthread.so.0 [0x2ba150a86c00]
[p2d030:31086] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d030:31086] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d030:31086] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d030:31086] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d030:31086] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d030:31086] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d030:31086] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d030:31086] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d030:31086] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d030:31086] [10] abinip(main+0x3c) [0x44458c]
[p2d030:31086] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ba150bb0184]
[p2d030:31086] [12] abinip [0x4444b9]
[p2d030:31086] *** End of error message ***
[p2d030:31089] *** Process received signal ***
[p2d030:31087] *** Process received signal ***
[p2d030:31087] Signal: Segmentation fault (11)
[p2d030:31087] Signal code: Address not mapped (1)
[p2d030:31087] Failing at address: (nil)
[p2d030:31087] [ 0] /lib64/libpthread.so.0 [0x2b9c9e0a7c00]
[p2d030:31087] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d030:31087] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d030:31087] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d030:31087] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d030:31087] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d030:31087] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d030:31087] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d030:31087] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d030:31087] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d030:31087] [10] abinip(main+0x3c) [0x44458c]
[p2d030:31087] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b9c9e1d1184]
[p2d030:31087] [12] abinip [0x4444b9]
[p2d030:31087] *** End of error message ***
[p2d030:31088] *** Process received signal ***
[p2d030:31088] Signal: Segmentation fault (11)
[p2d030:31088] Signal code: Address not mapped (1)
[p2d030:31088] Failing at address: (nil)
[p2d030:31088] [ 0] /lib64/libpthread.so.0 [0x2b83efc45c00]
[p2d030:31088] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d030:31088] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d030:31088] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d030:31088] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d030:31088] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d030:31088] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d030:31088] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d030:31088] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d030:31088] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d030:31088] [10] abinip(main+0x3c) [0x44458c]
[p2d030:31088] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b83efd6f184]
[p2d030:31088] [12] abinip [0x4444b9]
[p2d030:31088] *** End of error message ***
[p2d030:31089] Signal: Segmentation fault (11)
[p2d030:31089] Signal code: Address not mapped (1)
[p2d030:31089] Failing at address: (nil)
[p2d030:31089] [ 0] /lib64/libpthread.so.0 [0x2b1d44983c00]
[p2d030:31089] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d030:31089] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d030:31089] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d030:31089] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d030:31089] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d030:31089] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d030:31089] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d030:31089] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d030:31089] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d030:31089] [10] abinip(main+0x3c) [0x44458c]
[p2d030:31089] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b1d44aad184]
[p2d030:31089] [12] abinip [0x4444b9]
[p2d030:31089] *** End of error message ***
[p2d027:19399] *** Process received signal ***
[p2d027:19399] Signal: Segmentation fault (11)
[p2d027:19399] Signal code: Address not mapped (1)
[p2d027:19399] Failing at address: (nil)
[p2d027:19399] [ 0] /lib64/libpthread.so.0 [0x2b90d74f0c00]
[p2d027:19399] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d027:19399] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d027:19399] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d027:19399] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d027:19399] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d027:19399] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d027:19399] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d027:19399] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d027:19399] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d027:19399] [10] abinip(main+0x3c) [0x44458c]
[p2d027:19399] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b90d761a184]
[p2d027:19399] [12] abinip [0x4444b9]
[p2d027:19399] *** End of error message ***
[p2d027:19400] *** Process received signal ***
[p2d027:19400] Signal: Segmentation fault (11)
[p2d027:19400] Signal code: Address not mapped (1)
[p2d027:19400] Failing at address: (nil)
[p2d027:19400] [ 0] /lib64/libpthread.so.0 [0x2ac47403cc00]
[p2d027:19400] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d027:19400] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d027:19400] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d027:19400] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d027:19400] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d027:19400] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d027:19400] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d027:19400] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d027:19400] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d027:19400] [10] abinip(main+0x3c) [0x44458c]
[p2d027:19400] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ac474166184]
[p2d027:19400] [12] abinip [0x4444b9]
[p2d027:19400] *** End of error message ***
[p2d027:19401] [ 0] /lib64/libpthread.so.0 [0x2b05437c5c00]
[p2d027:19401] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d027:19401] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d027:19401] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d027:19401] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d027:19401] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d027:19401] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d027:19401] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d027:19401] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d027:19401] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d027:19401] [10] abinip(main+0x3c) [0x44458c]
[p2d027:19401] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b05438ef184]
[p2d027:19401] [12] abinip [0x4444b9]
[p2d027:19401] *** End of error message ***
[p1s126:25035] *** Process received signal ***
[p1s126:25034] *** Process received signal ***
[p1s126:25034] Signal: Segmentation fault (11)
[p1s126:25034] Signal code: Address not mapped (1)
[p1s126:25034] Failing at address: (nil)
[p1s126:25035] Signal: Segmentation fault (11)
[p1s126:25035] Signal code: Address not mapped (1)
[p1s126:25035] Failing at address: (nil)
[p2d079:11709] *** Process received signal ***
[p2d079:11709] Signal: Segmentation fault (11)
[p2d079:11709] Signal code: Address not mapped (1)
[p2d079:11709] Failing at address: (nil)
[p2d079:11709] [ 0] /lib64/libpthread.so.0 [0x2b806ac6dc00]
[p2d079:11709] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d079:11709] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d079:11709] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d079:11709] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d079:11709] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d079:11709] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d079:11709] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d079:11709] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d079:11709] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d079:11709] [10] abinip(main+0x3c) [0x44458c]
[p2d079:11709] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b806ad97184]
[p2d079:11709] [12] abinip [0x4444b9]
[p2d079:11709] *** End of error message ***
[p2d079:11711] *** Process received signal ***
[p2d079:11711] Signal: Segmentation fault (11)
[p2d079:11711] Signal code: Address not mapped (1)
[p2d079:11711] Failing at address: (nil)
[p2d079:11711] [ 0] /lib64/libpthread.so.0 [0x2b676477ec00]
[p2d079:11711] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d079:11711] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d079:11711] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d079:11711] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d079:11711] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d079:11711] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d079:11711] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d079:11711] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d079:11711] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d079:11711] [10] abinip(main+0x3c) [0x44458c]
[p2d079:11711] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b67648a8184]
[p2d079:11711] [12] abinip [0x4444b9]
[p2d079:11711] *** End of error message ***
[p1s025:21423] *** Process received signal ***
[p1s025:21422] *** Process received signal ***
[p1s025:21423] Signal: Segmentation fault (11)
[p1s025:21423] Signal code: Address not mapped (1)
[p1s025:21423] Failing at address: (nil)
[p1s025:21422] Signal: Segmentation fault (11)
[p1s025:21422] Signal code: Address not mapped (1)
[p1s025:21422] Failing at address: (nil)
[p1s126:25035] [ 0] /lib64/libpthread.so.0 [0x2b0791b1ac00]
[p1s126:25034] [ 0] /lib64/libpthread.so.0 [0x2b96dd3d8c00]
[p1s126:25034] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1s126:25034] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1s126:25034] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1s126:25034] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1s126:25034] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1s126:25034] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1s126:25034] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1s126:25034] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1s126:25034] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1s126:25034] [10] abinip(main+0x3c) [0x44458c]
[p1s126:25034] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b96dd502184]
[p1s126:25034] [12] abinip [0x4444b9]
[p1s126:25034] *** End of error message ***
[p1s025:21423] [ 0] /lib64/libpthread.so.0 [0x2b6e88000c00]
[p1s025:21423] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1s025:21423] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1s025:21423] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1s025:21423] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1s025:21423] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1s025:21423] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1s025:21423] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1s025:21423] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1s025:21423] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1s025:21423] [10] abinip(main+0x3c) [0x44458c]
[p1s025:21423] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b6e8812a184]
[p1s025:21422] [ 0] /lib64/libpthread.so.0 [0x2af735287c00]
[p1s126:25035] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1s126:25035] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1s126:25035] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1s126:25035] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1s126:25035] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1s126:25035] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1s126:25035] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1s126:25035] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1s126:25035] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1s126:25035] [10] abinip(main+0x3c) [0x44458c]
[p1s126:25035] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b0791c44184]
[p1s126:25035] [12] abinip [0x4444b9]
[p1s126:25035] *** End of error message ***
[p1d065:10692] *** Process received signal ***
[p1d065:10693] *** Process received signal ***
[p1d065:10694] *** Process received signal ***
[p1d065:10694] Signal: Segmentation fault (11)
[p1d065:10694] Signal code: Address not mapped (1)
[p1d065:10694] Failing at address: (nil)
[p1d065:10695] *** Process received signal ***
[p1d065:10695] Signal: Segmentation fault (11)
[p1d065:10695] Signal code: Address not mapped (1)
[p1d065:10695] Failing at address: (nil)
[p1d065:10692] Signal: Segmentation fault (11)
[p1d065:10692] Signal code: Address not mapped (1)
[p1d065:10692] Failing at address: (nil)
[p1d065:10693] Signal: Segmentation fault (11)
[p1d065:10693] Signal code: Address not mapped (1)
[p1d065:10693] Failing at address: (nil)
[p2d006:02214] *** Process received signal ***
[p1s025:21423] [12] abinip [0x4444b9]
[p1s025:21423] *** End of error message ***
[p1s025:21422] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1s025:21422] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1s025:21422] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1s025:21422] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1s025:21422] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1s025:21422] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1s025:21422] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1s025:21422] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1s025:21422] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1s025:21422] [10] abinip(main+0x3c) [0x44458c]
[p1s025:21422] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2af7353b1184]
[p1s025:21422] [12] abinip [0x4444b9]
[p1s025:21422] *** End of error message ***
[p2d083:22451] *** Process received signal ***
[p2d083:22451] Signal: Segmentation fault (11)
[p2d083:22451] Signal code: Address not mapped (1)
[p2d083:22451] Failing at address: (nil)
[p2d083:22451] [ 0] /lib64/libpthread.so.0 [0x2b9f85601c00]
[p2d083:22451] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d083:22451] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d083:22451] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d083:22451] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d083:22451] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d083:22451] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d083:22451] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d083:22451] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d083:22451] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d083:22451] [10] abinip(main+0x3c) [0x44458c]
[p2d083:22451] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b9f8572b184]
[p2d083:22451] [12] abinip [0x4444b9]
[p2d083:22451] *** End of error message ***
[p2d006:02214] Signal: Segmentation fault (11)
[p2d006:02214] Signal code: Address not mapped (1)
[p2d006:02214] Failing at address: (nil)
[p2d006:02214] [ 0] /lib64/libpthread.so.0 [0x2aba08ccbc00]
[p2d006:02214] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d006:02214] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d006:02214] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d006:02214] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d006:02214] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d006:02214] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d006:02214] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d006:02214] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d006:02214] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d006:02214] [10] abinip(main+0x3c) [0x44458c]
[p2d006:02214] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2aba08df5184]
[p2d006:02214] [12] abinip [0x4444b9]
[p2d006:02214] *** End of error message ***
[p1d065:10694] [ 0] /lib64/libpthread.so.0 [0x2b2359d11c00]
[p1d065:10694] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1d065:10694] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1d065:10694] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1d065:10694] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1d065:10694] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1d065:10694] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1d065:10694] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1d065:10694] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1d065:10694] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2s028:12972] *** Process received signal ***
[p2s028:12972] Signal: Segmentation fault (11)
[p2s028:12972] Signal code: Address not mapped (1)
[p2s028:12972] Failing at address: (nil)
[p2s028:12972] [ 0] /lib64/libpthread.so.0 [0x2acc32344c00]
[p1d065:10692] [ 0] /lib64/libpthread.so.0 [0x2ad1ef37dc00]
[p1d065:10692] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1d065:10692] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1d065:10692] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1d065:10692] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1d065:10692] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1d065:10692] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1d065:10692] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1d065:10692] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1d065:10692] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1d065:10692] [10] abinip(main+0x3c) [0x44458c]
[p1d065:10692] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ad1ef4a7184]
[p1d065:10692] [12] abinip [0x4444b9]
[p1d065:10692] *** End of error message ***
[p1d065:10693] [ 0] /lib64/libpthread.so.0 [0x2b4f2039ac00]
[p1d065:10693] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1d065:10693] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1d065:10693] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1d065:10693] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1d065:10693] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1d065:10693] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1d065:10693] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1d065:10693] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1d065:10693] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1d065:10693] [10] abinip(main+0x3c) [0x44458c]
[p1d065:10693] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b4f204c4184]
[p1d065:10693] [12] abinip [0x4444b9]
[p1d065:10693] *** End of error message ***
[p1d065:10694] [10] abinip(main+0x3c) [0x44458c]
[p1d065:10694] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b2359e3b184]
[p1d065:10694] [12] abinip [0x4444b9]
[p1d065:10694] *** End of error message ***
[p1d065:10695] [ 0] /lib64/libpthread.so.0 [0x2b2c66e7cc00]
[p1d065:10695] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1d065:10695] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1d065:10695] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1d065:10695] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1d065:10695] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1d065:10695] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1d065:10695] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1d065:10695] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1d065:10695] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1d065:10695] [10] abinip(main+0x3c) [0x44458c]
[p1d065:10695] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b2c66fa6184]
[p1d065:10695] [12] abinip [0x4444b9]
[p1d065:10695] *** End of error message ***
[p2s028:12971] *** Process received signal ***
[p2s028:12971] Signal: Segmentation fault (11)
[p2s028:12971] Signal code: Address not mapped (1)
[p2s028:12971] Failing at address: (nil)
[p2s028:12971] [ 0] /lib64/libpthread.so.0 [0x2b756fc0cc00]
[p2s028:12971] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2s028:12971] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2s028:12971] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2s028:12971] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2s028:12971] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2s028:12971] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2s028:12971] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2s028:12971] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2s028:12971] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2s028:12971] [10] abinip(main+0x3c) [0x44458c]
[p2s028:12971] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b756fd36184]
[p2s028:12971] [12] abinip [0x4444b9]
[p2s028:12971] *** End of error message ***
[p2s028:12972] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2s028:12972] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2s028:12972] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2s028:12972] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2s028:12972] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2s028:12972] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2s028:12972] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2s028:12972] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2s028:12972] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2s028:12972] [10] abinip(main+0x3c) [0x44458c]
[p2s028:12972] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2acc3246e184]
[p2s028:12972] [12] abinip [0x4444b9]
[p2s028:12972] *** End of error message ***
[p2d027:19402] *** Process received signal ***
[p2d027:19402] Signal: Segmentation fault (11)
[p2d027:19402] Signal code: Address not mapped (1)
[p2d027:19402] Failing at address: (nil)
[p2d027:19402] [ 0] /lib64/libpthread.so.0 [0x2b4df81ffc00]
[p2d027:19402] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d027:19402] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d027:19402] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d027:19402] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d027:19402] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d027:19402] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d027:19402] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d027:19402] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d027:19402] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d027:19402] [10] abinip(main+0x3c) [0x44458c]
[p2d027:19402] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b4df8329184]
[p2d027:19402] [12] abinip [0x4444b9]
[p2d027:19402] *** End of error message ***
[p2d071:26027] *** Process received signal ***
[p2d042:07533] *** Process received signal ***
[p2d006:02215] *** Process received signal ***
[p2d006:02215] Signal: Segmentation fault (11)
[p2d006:02215] Signal code: Address not mapped (1)
[p2d006:02215] Failing at address: (nil)
[p2d006:02215] [ 0] /lib64/libpthread.so.0 [0x2ae9b6a56c00]
[p2d006:02215] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d006:02215] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d006:02215] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d006:02215] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d006:02215] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d006:02215] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d006:02215] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d006:02215] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d006:02215] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d006:02215] [10] abinip(main+0x3c) [0x44458c]
[p2d006:02215] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ae9b6b80184]
[p2d006:02215] [12] abinip [0x4444b9]
[p2d006:02215] *** End of error message ***
[p2d006:02213] *** Process received signal ***
[p2d006:02213] Signal: Segmentation fault (11)
[p2d006:02213] Signal code: Address not mapped (1)
[p2d006:02213] Failing at address: (nil)
[p2d006:02213] [ 0] /lib64/libpthread.so.0 [0x2b2caa3b9c00]
[p2d006:02213] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d006:02213] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d006:02213] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d006:02213] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d006:02213] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d006:02213] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d006:02213] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d006:02213] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d006:02213] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d006:02213] [10] abinip(main+0x3c) [0x44458c]
[p2d006:02213] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b2caa4e3184]
[p2d006:02213] [12] abinip [0x4444b9]
[p2d006:02213] *** End of error message ***
[p2d071:26028] *** Process received signal ***
[p2d071:26028] Signal: Segmentation fault (11)
[p2d071:26028] Signal code: Address not mapped (1)
[p2d071:26028] Failing at address: (nil)
[p2d071:26030] *** Process received signal ***
[p2d071:26030] Signal: Segmentation fault (11)
[p2d071:26030] Signal code: Address not mapped (1)
[p2d071:26030] Failing at address: (nil)
[p2d071:26030] [ 0] /lib64/libpthread.so.0 [0x2b8534debc00]
[p2d071:26030] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d071:26030] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d071:26030] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d071:26030] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d071:26030] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d071:26030] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d071:26030] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d071:26030] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d071:26030] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d071:26030] [10] abinip(main+0x3c) [0x44458c]
[p2d071:26030] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b8534f15184]
[p2d071:26030] [12] abinip [0x4444b9]
[p2d071:26030] *** End of error message ***
[p2d071:26027] Signal: Segmentation fault (11)
[p2d071:26027] Signal code: Address not mapped (1)
[p2d071:26027] Failing at address: (nil)
[p2d071:26027] [ 0] /lib64/libpthread.so.0 [0x2b4785c56c00]
[p2d071:26027] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d071:26027] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d071:26027] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d071:26027] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d071:26027] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d071:26027] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d071:26027] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d071:26027] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d071:26027] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d071:26027] [10] abinip(main+0x3c) [0x44458c]
[p2d071:26027] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b4785d80184]
[p2d071:26027] [12] abinip [0x4444b9]
[p2d071:26027] *** End of error message ***
[p2d071:26029] *** Process received signal ***
[p2d071:26029] Signal: Segmentation fault (11)
[p2d071:26029] Signal code: Address not mapped (1)
[p2d071:26029] Failing at address: (nil)
[p2d071:26029] [ 0] /lib64/libpthread.so.0 [0x2b175ccc9c00]
[p2d071:26029] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d071:26029] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d071:26029] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d071:26029] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d071:26029] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d071:26029] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d071:26029] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d071:26029] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d071:26029] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d071:26029] [10] abinip(main+0x3c) [0x44458c]
[p2d071:26029] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b175cdf3184]
[p2d071:26029] [12] abinip [0x4444b9]
[p2d071:26029] *** End of error message ***
[p2d071:26028] [ 0] /lib64/libpthread.so.0 [0x2b6081b48c00]
[p2d071:26028] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d071:26028] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d071:26028] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d071:26028] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d071:26028] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d071:26028] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d071:26028] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d071:26028] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d071:26028] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d071:26028] [10] abinip(main+0x3c) [0x44458c]
[p2d071:26028] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b6081c72184]
[p2d071:26028] [12] abinip [0x4444b9]
[p2d071:26028] *** End of error message ***
[p2d042:07533] Signal: Segmentation fault (11)
[p2d042:07533] Signal code: Address not mapped (1)
[p2d042:07533] Failing at address: (nil)
[p2d042:07533] [ 0] /lib64/libpthread.so.0 [0x2ab036ca5c00]
[p2d042:07533] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d042:07533] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d042:07533] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d042:07533] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d042:07533] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d042:07533] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d042:07533] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d042:07533] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d042:07533] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d042:07533] [10] abinip(main+0x3c) [0x44458c]
[p2d042:07533] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ab036dcf184]
[p2d042:07533] [12] abinip [0x4444b9]
[p2d042:07533] *** End of error message ***
[p2d042:07535] *** Process received signal ***
[p2d042:07535] Signal: Segmentation fault (11)
[p2d042:07535] Signal code: Address not mapped (1)
[p2d042:07535] Failing at address: (nil)
[p2d042:07535] [ 0] /lib64/libpthread.so.0 [0x2b46d212ec00]
[p2d042:07535] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d042:07535] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d042:07535] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d042:07535] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d042:07535] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d042:07535] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d042:07535] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d042:07535] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d042:07535] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d042:07535] [10] abinip(main+0x3c) [0x44458c]
[p2d042:07535] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b46d2258184]
[p2d042:07535] [12] abinip [0x4444b9]
[p2d042:07535] *** End of error message ***
[p2d042:07534] *** Process received signal ***
[p2d042:07534] Signal: Segmentation fault (11)
[p2d042:07534] Signal code: Address not mapped (1)
[p2d042:07534] Failing at address: (nil)
[p2d042:07534] [ 0] /lib64/libpthread.so.0 [0x2ab036ca5c00]
[p2d042:07534] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d042:07534] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d042:07534] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d042:07534] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d042:07534] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d042:07534] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d042:07534] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d042:07534] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d042:07534] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d042:07534] [10] abinip(main+0x3c) [0x44458c]
[p2d042:07534] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ab036dcf184]
[p2d042:07534] [12] abinip [0x4444b9]
[p2d042:07534] *** End of error message ***
[p2d042:07536] *** Process received signal ***
[p2d042:07536] Signal: Segmentation fault (11)
[p2d042:07536] Signal code: Address not mapped (1)
[p2d042:07536] Failing at address: (nil)
[p2d042:07536] [ 0] /lib64/libpthread.so.0 [0x2b13a0f8ec00]
[p2d042:07536] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2d042:07536] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2d042:07536] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2d042:07536] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2d042:07536] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2d042:07536] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2d042:07536] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2d042:07536] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2d042:07536] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2d042:07536] [10] abinip(main+0x3c) [0x44458c]
[p2d042:07536] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b13a10b8184]
[p2d042:07536] [12] abinip [0x4444b9]
[p2d042:07536] *** End of error message ***
[p2s109:24115] *** Process received signal ***
[p1d048:00878] *** Process received signal ***
[p2s109:24116] *** Process received signal ***
[p1d048:00879] *** Process received signal ***
[p1d048:00879] Signal: Segmentation fault (11)
[p1d048:00879] Signal code: Address not mapped (1)
[p1d048:00879] Failing at address: (nil)
[p1d048:00878] Signal: Segmentation fault (11)
[p1d048:00878] Signal code: Address not mapped (1)
[p1d048:00878] Failing at address: (nil)
[p1d048:00881] *** Process received signal ***
[p1d048:00881] Signal: Segmentation fault (11)
[p1d048:00881] Signal code: Address not mapped (1)
[p1d048:00881] Failing at address: (nil)
[p1d048:00880] *** Process received signal ***
[p1d048:00880] Signal: Segmentation fault (11)
[p1d048:00880] Signal code: Address not mapped (1)
[p1d048:00880] Failing at address: (nil)
[p1d048:00881] [ 0] /lib64/libpthread.so.0 [0x2b988aa7fc00]
[p1d048:00881] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1d048:00881] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1d048:00881] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1d048:00881] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1d048:00881] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1d048:00881] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1d048:00881] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2s109:24115] Signal: Segmentation fault (11)
[p2s109:24115] Signal code: Address not mapped (1)
[p2s109:24115] Failing at address: (nil)
[p2s109:24115] [ 0] /lib64/libpthread.so.0 [0x2ada2aff7c00]
[p2s109:24115] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2s109:24115] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2s109:24115] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2s109:24115] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2s109:24115] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2s109:24115] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2s109:24115] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2s109:24115] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2s109:24115] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2s109:24115] [10] abinip(main+0x3c) [0x44458c]
[p2s109:24115] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ada2b121184]
[p2s109:24115] [12] abinip [0x4444b9]
[p2s109:24115] *** End of error message ***
[p2s109:24116] Signal: Segmentation fault (11)
[p2s109:24116] Signal code: Address not mapped (1)
[p2s109:24116] Failing at address: (nil)
[p2s109:24116] [ 0] /lib64/libpthread.so.0 [0x2aadea570c00]
[p2s109:24116] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2s109:24116] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2s109:24116] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2s109:24116] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2s109:24116] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2s109:24116] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2s109:24116] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2s109:24116] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2s109:24116] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2s109:24116] [10] abinip(main+0x3c) [0x44458c]
[p2s109:24116] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2aadea69a184]
[p2s109:24116] [12] abinip [0x4444b9]
[p2s109:24116] *** End of error message ***
[p1d031:10905] *** Process received signal ***
[p1d031:10906] *** Process received signal ***
[p1d031:10908] *** Process received signal ***
[p1d031:10908] Signal: Segmentation fault (11)
[p1d031:10908] Signal code: Address not mapped (1)
[p1d031:10908] Failing at address: (nil)
[p1d031:10907] *** Process received signal ***
[p1d031:10907] Signal: Segmentation fault (11)
[p1d031:10907] Signal code: Address not mapped (1)
[p1d031:10907] Failing at address: (nil)
[p1d031:10905] Signal: Segmentation fault (11)
[p1d031:10905] Signal code: Address not mapped (1)
[p1d031:10905] Failing at address: (nil)
[p1d031:10906] Signal: Segmentation fault (11)
[p1d031:10906] Signal code: Address not mapped (1)
[p1d031:10906] Failing at address: (nil)
[p1d048:00878] [ 0] /lib64/libpthread.so.0 [0x2b66396f8c00]
[p1d048:00878] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1d048:00878] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1d048:00878] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1d048:00878] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1d048:00878] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1d048:00878] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1d048:00878] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1d048:00878] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1d048:00878] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1d048:00878] [10] abinip(main+0x3c) [0x44458c]
[p1d048:00878] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b6639822184]
[p1d048:00878] [12] abinip [0x4444b9]
[p1d048:00878] *** End of error message ***
[p1d048:00879] [ 0] /lib64/libpthread.so.0 [0x2afcb87fdc00]
[p1d048:00879] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1d048:00879] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1d048:00879] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1d048:00879] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1d048:00879] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1d048:00879] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1d048:00879] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1d048:00879] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1d048:00879] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1d048:00879] [10] abinip(main+0x3c) [0x44458c]
[p1d048:00879] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2afcb8927184]
[p1d048:00879] [12] abinip [0x4444b9]
[p1d048:00879] *** End of error message ***
[p1d048:00881] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1d048:00881] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1d048:00881] [10] abinip(main+0x3c) [0x44458c]
[p1d048:00881] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b988aba9184]
[p1d048:00881] [12] abinip [0x4444b9]
[p1d048:00881] *** End of error message ***
[p1d048:00880] [ 0] /lib64/libpthread.so.0 [0x2add4a635c00]
[p1d048:00880] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1d048:00880] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1d048:00880] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1d048:00880] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1d048:00880] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1d048:00880] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1d048:00880] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1d048:00880] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1d048:00880] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1d048:00880] [10] abinip(main+0x3c) [0x44458c]
[p1d048:00880] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2add4a75f184]
[p1d048:00880] [12] abinip [0x4444b9]
[p1d048:00880] *** End of error message ***
[p1d031:10905] [ 0] /lib64/libpthread.so.0 [0x2b7872980c00]
[p1d031:10905] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1d031:10905] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1d031:10905] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1d031:10905] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1d031:10905] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1d031:10905] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2s135:31854] *** Process received signal ***
[p2s135:31853] *** Process received signal ***
[p2s135:31854] Signal: Segmentation fault (11)
[p2s135:31854] Signal code: Address not mapped (1)
[p2s135:31854] Failing at address: (nil)
[p2s135:31853] Signal: Segmentation fault (11)
[p2s135:31853] Signal code: Address not mapped (1)
[p2s135:31853] Failing at address: (nil)
[p1d031:10905] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1d031:10905] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1d031:10905] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1d031:10905] [10] abinip(main+0x3c) [0x44458c]
[p1d031:10905] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b7872aaa184]
[p1d031:10905] [12] abinip [0x4444b9]
[p1d031:10905] *** End of error message ***
[p1d031:10906] [ 0] /lib64/libpthread.so.0 [0x2b8179ec3c00]
[p1d031:10906] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1d031:10906] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1d031:10906] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1d031:10906] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1d031:10906] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1d031:10906] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1d031:10906] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1d031:10906] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1d031:10906] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1d031:10906] [10] abinip(main+0x3c) [0x44458c]
[p1d031:10906] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b8179fed184]
[p1d031:10906] [12] abinip [0x4444b9]
[p1d031:10906] *** End of error message ***
[p1d031:10908] [ 0] /lib64/libpthread.so.0 [0x2ab410376c00]
[p1d031:10908] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1d031:10908] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1d031:10908] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1d031:10908] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1d031:10908] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1d031:10908] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1d031:10908] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1d031:10908] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1d031:10908] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1d031:10908] [10] abinip(main+0x3c) [0x44458c]
[p1d031:10908] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ab4104a0184]
[p1d031:10908] [12] abinip [0x4444b9]
[p1d031:10908] *** End of error message ***
[p1d031:10907] [ 0] /lib64/libpthread.so.0 [0x2b6fb1261c00]
[p1d031:10907] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p1d031:10907] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p1d031:10907] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p1d031:10907] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p1d031:10907] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p1d031:10907] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p1d031:10907] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p1d031:10907] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p1d031:10907] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p1d031:10907] [10] abinip(main+0x3c) [0x44458c]
[p1d031:10907] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b6fb138b184]
[p1d031:10907] [12] abinip [0x4444b9]
[p1d031:10907] *** End of error message ***
[p2s135:31854] [ 0] /lib64/libpthread.so.0 [0x2b499f0a9c00]
[p2s135:31854] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2s135:31854] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2s135:31854] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2s135:31854] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2s135:31854] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2s135:31854] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2s135:31853] [ 0] /lib64/libpthread.so.0 [0x2ae7263fdc00]
[p2s135:31854] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2s135:31854] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2s135:31854] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2s135:31854] [10] abinip(main+0x3c) [0x44458c]
[p2s135:31854] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b499f1d3184]
[p2s135:31854] [12] abinip [0x4444b9]
[p2s135:31854] *** End of error message ***
[p2s135:31853] [ 1] abinip(cprj_copy_+0xa5) [0xc058d5]
[p2s135:31853] [ 2] abinip(getgsc_+0xa0d) [0xb7b36d]
[p2s135:31853] [ 3] abinip(vtowfk3_+0x69c4) [0x774d04]
[p2s135:31853] [ 4] abinip(vtorho3_+0x9579) [0x764649]
[p2s135:31853] [ 5] abinip(scfcv3_+0x2d67) [0x74c857]
[p2s135:31853] [ 6] abinip(loper3_+0xb30d) [0x5da2ad]
[p2s135:31853] [ 7] abinip(respfn_+0xbcf6) [0x57b1c6]
[p2s135:31853] [ 8] abinip(driver_+0x66a9) [0x44f899]
[p2s135:31853] [ 9] abinip(MAIN__+0x247a) [0x446a1a]
[p2s135:31853] [10] abinip(main+0x3c) [0x44458c]
[p2s135:31853] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ae726527184]
[p2s135:31853] [12] abinip [0x4444b9]
[p2s135:31853] *** End of error message ***
Mar  8 08:06:11 2010 20325 4 6.2 handleTSRegisterTerm(): TS reports task <1> pid <11710> on host<p2d079> killed or core dumped
Job  /licsoft/lsf/6.2/linux2.6-glibc2.3-x86_64/bin/openmpi_wrapper abinip

TID   HOST_NAME   COMMAND_LINE            STATUS            TERMINATION_TIME
===== ========== ================  =======================  ===================
00000 p2d079     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00001 p2d079     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:09
00002 p2d079     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00003 p2s135     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00004 p2s135     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00005 p2s230     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00006 p1s126     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00007 p1s126     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00008 p2s028     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00009 p2s028     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00010 p1s025     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00011 p1s025     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00012 p2d030     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:09
00013 p2d030     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00014 p2d030     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00015 p2d030     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00016 p1d065     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00017 p1d065     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00018 p1d065     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00019 p1d065     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00020 p2d027     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00021 p2d027     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00022 p2d027     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00023 p2d027     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00024 p2d006     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00025 p2d006     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00026 p2d006     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00027 p1d048     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00028 p1d048     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00029 p1d048     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00030 p1d048     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00031 p2d071     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00032 p2d071     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00033 p2d071     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00034 p2d071     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00035 p2s109     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00036 p2s109     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00037 p1d031     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00038 p1d031     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00039 p1d031     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00040 p1d031     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00041 p2d042     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00042 p2d042     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00043 p2d042     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00044 p2d042     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:10
00045 p2d083     abinip            Signaled (SIGSEGV)       03/08/2010 08:06:14
