  ABINIT 
  
  Give name for formatted input file: 
At line 163 of file iofn1.F90 (unit = 5, file = 'stdin')
Fortran runtime error: End of file
  ABINIT 
  
  Give name for formatted input file: 
nap_bse.in
  Give name for formatted output file:
nap_bse.out
  Give root name for generic input files:
nap_bse_1i
  Give root name for generic output files:
nap_bse_1o
  Give root name for generic temporary files:
nap_bse_1t
 leave_test : synchronization done...

.Version 7.2.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.5 computer) 

.Copyright (C) 1998-2013 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Sun 28 Jul 2013.
- ( at 09h42 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.2.2
  Build target  : x86_64_linux_gnu4.5
  Build date    : 20130518

 === Compiler Suite === 
  C compiler       : gnu4.5
  CFLAGS           :  -g -O2 -mtune=native -march=native
  C++ compiler     : gnu4.5
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  Fortran compiler : gnu4.5
  FCFLAGS          :  -g -ffree-line-length-none -march=native -funroll-loops -O3 -ffast-math -Wstrict-aliasing=2 -ftree-vectorize -mtune=native
  FC_LDFLAGS       :     -static-libgcc -static-libgfortran

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : none
  LINALG flavor : custom
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf+etsf_io-fallback+fox-fallback

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes

 === Bazaar branch information === 
  Branch ID : 
  Revision  : 
  Committed : 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -mtune=native -march=native


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

           HAVE_BZR_BRANCH          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT

            HAVE_DFT_LIBXC        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...

           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH

             HAVE_FC_GAMMA            HAVE_FC_GETENV          HAVE_FC_INT_QUAD

             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES

              HAVE_FC_NULL         HAVE_FC_STREAM_IO          HAVE_FORTRAN2003

               HAVE_LINALG        HAVE_LINALG_GEMM3M        HAVE_LINALG_SERIAL

                  HAVE_MPI                 HAVE_MPI2               HAVE_MPI_IO

 HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX                HAVE_TIMER

         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL

         HAVE_TRIO_ETSF_IO             HAVE_TRIO_FOX          HAVE_TRIO_NETCDF

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> nap_bse.in
- output file    -> nap_bse.out
- root for input  files -> nap_bse_1i
- root for output files -> nap_bse_1o

-instrng :   161 lines of input have been read from file nap_bse.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../Psps_for_tests/6c.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is ../Psps_for_tests/1h.pspnc
  read the values zionpsp=  4.0 , pspcod=   1 , lmax=   1
  read the values zionpsp=  1.0 , pspcod=   1 , lmax=   0

 inpspheads : deduce mpsang  =   2, n1xccc  =2501.
 leave_test : synchronization done...

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is cP (primitive cubic)

 symlatt : the Bravais lattice is cP (primitive cubic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  7, is more symmetric
  than the real one, iholohedry=  1, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is hR (rhombohedral)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  5, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  2, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
 getkgrid : length of smallest supercell vector (bohr)=    1.500000E+01
       Simple Lattice Grid
 getkgrid : length of smallest supercell vector (bohr)=    1.500000E+01
       Simple Lattice Grid
  dtset%nelect=   54.000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00
 setshells : ecut_trial =    10.00
 setshells : ecut_trial =    10.00

 m_gsphere.F90:2589:COMMENT
  One of the three variables ecutsigx, npwsigx, or nshsigx
 must be non-null. Returning.
  mpi_setup : enter 
 getmpw sequential formula gave:     5032
 mpi_setup1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 mpi_setup1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 mpi_setup1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 mpi_setup1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 mpi_setup1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 mpi_setup1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.
 For input ecut=  9.913469E+00 best grid ngfft=      45      45      45
       max ecut=  1.061531E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    45   45   45
  Augmented FFT divisions ...................    45   45   45
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    4945

 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =       150  mffmem =         1
P  mgfft =        45   mkmem =         1 mpssoang=         2     mpw =      4945
  mqgrid =      3001   natom =        21    nfft =     91125    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      37.432 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     11.320 Mbytes ; DEN or POT disk file :      0.697 Mbytes.
================================================================================

 Biggest array : cg(disk), with     11.3202 MBytes.
 leave_test : synchronization done...
 memana : allocated an array of     11.320 Mbytes, for testing purposes.
 memana : allocated      37.432 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (nap_bse_1o_OUT.nc)

            acell      1.5000000000E+01  1.5000000000E+01  1.5000000000E+01 Bohr
              amu      1.20110000E+01  1.00794000E+00
      bs_calctype           2
  bs_coulomb_term          10
      bs_coupling           0
           diemac      2.00000000E+00
             ecut      9.91346931E+00 Hartree
          ecuteps      9.91346931E+00 Hartree
          ecutwfn      9.91346931E+00 Hartree
            gwmem           0
           irdkss           1
           irdscr           1
           istwfk        1
         kptrlatt        1    0    0      0    1    0      0    0    1
          kptrlen      1.50000000E+01
P           mkmem           1
            natom          21
            nband         150
            ngfft          45      45      45
             nkpt           1
           npweps        5041
           npwwfn        5041
           nsheps        5041
            nstep          50
             nsym           1
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
        optdriver          99
          spgroup           1
            typat      1  1  1  1  1  1  1  1  1  1  1  2  2  2  2  2  2  2  2  2
                       2
           xangst      5.5583070000E-01  3.9988530000E-01  3.1391266000E+00
                      -3.5504975000E+00 -3.8473463000E+00  5.1895577000E+00
                      -3.1233653000E+00 -2.6225250000E+00  4.7146903000E+00
                      -1.7506934000E+00 -2.3886731000E+00  4.4318399000E+00
                      -8.0930410000E-01 -3.4515151000E+00  4.6495343000E+00
                      -1.2796999000E+00 -4.6982881000E+00  5.1407836000E+00
                      -2.6212624000E+00 -4.8941149000E+00  5.4045372000E+00
                      -1.2784637000E+00 -1.1409098000E+00  3.9407533000E+00
                       6.0014500000E-02 -9.2157590000E-01  3.6680379000E+00
                       9.8147840000E-01 -1.9843142000E+00  3.8906119000E+00
                       5.6188520000E-01 -3.2087183000E+00  4.3648220000E+00
                       9.7745780000E-01  2.8741300000E-01  2.1279349000E+00
                       1.3554752000E+00  8.0742720000E-01  3.7762549000E+00
                      -4.6071939000E+00 -4.0117781000E+00  5.4060107000E+00
                      -3.8386557000E+00 -1.8135523000E+00  4.5512340000E+00
                      -2.9694210000E+00 -5.8564324000E+00  5.7832287000E+00
                      -2.0023740000E+00 -3.3765060000E-01  3.7794787000E+00
                       2.0397911000E+00 -1.8197918000E+00  3.6752799000E+00
                       1.2829390000E+00 -4.0128196000E+00  4.5274977000E+00
                      -5.6114250000E-01 -5.5040911000E+00  5.3059003000E+00
                      -2.5266370000E-01  1.1409409000E+00  3.0877338000E+00
            xcart      1.0503677993E+00  7.5567370157E-01  5.9320895705E+00
                      -6.7094679105E+00 -7.2704308454E+00  9.8068428038E+00
                      -5.9023050300E+00 -4.9558540266E+00  8.9094734684E+00
                      -3.3083310687E+00 -4.5139379800E+00  8.3749636758E+00
                      -1.5293631072E+00 -6.5224182825E+00  8.7863464725E+00
                      -2.4182823433E+00 -8.8784778024E+00  9.7146731124E+00
                      -4.9534680584E+00 -9.2485368239E+00  1.0213095183E+01
                      -2.4159462638E+00 -2.1560070643E+00  7.4469444943E+00
                       1.1341096900E-01 -1.7415260617E+00  6.9315870760E+00
                       1.8547253813E+00 -3.7498103996E+00  7.3521909803E+00
                       1.0618091461E+00 -6.0635988246E+00  8.2483181988E+00
                       1.8471275485E+00  5.4313185703E-01  4.0212141896E+00
                       2.5614769079E+00  1.5258162802E+00  7.1360875690E+00
                      -8.7063347121E+00 -7.5811619149E+00  1.0215879694E+01
                      -7.2540079914E+00 -3.4271171747E+00  8.6005858267E+00
                      -5.6113924632E+00 -1.1067053352E+01  1.0928718407E+01
                      -3.7839384756E+00 -6.3806716260E-01  7.1421796681E+00
                       3.8546465473E+00 -3.4389081209E+00  6.9452724727E+00
                       2.4244033552E+00 -7.5831300647E+00  8.5557307203E+00
                      -1.0604056465E+00 -1.0401224789E+01  1.0026698455E+01
                      -4.7746519672E-01  2.1560658348E+00  5.8349712533E+00
             xred      7.0024519950E-02  5.0378246771E-02  3.9547263803E-01
                      -4.4729786070E-01 -4.8469538969E-01  6.5378952025E-01
                      -3.9348700200E-01 -3.3039026844E-01  5.9396489789E-01
                      -2.2055540458E-01 -3.0092919867E-01  5.5833091172E-01
                      -1.0195754048E-01 -4.3482788550E-01  5.8575643150E-01
                      -1.6121882289E-01 -5.9189852016E-01  6.4764487416E-01
                      -3.3023120390E-01 -6.1656912159E-01  6.8087301220E-01
                      -1.6106308426E-01 -1.4373380429E-01  4.9646296628E-01
                       7.5607312668E-03 -1.1610173744E-01  4.6210580507E-01
                       1.2364835876E-01 -2.4998735997E-01  4.9014606536E-01
                       7.0787276408E-02 -4.0423992164E-01  5.4988787992E-01
                       1.2314183656E-01  3.6208790469E-02  2.6808094597E-01
                       1.7076512719E-01  1.0172108535E-01  4.7573917126E-01
                      -5.8042231414E-01 -5.0541079433E-01  6.8105864630E-01
                      -4.8360053276E-01 -2.2847447831E-01  5.7337238845E-01
                      -3.7409283088E-01 -7.3780355678E-01  7.2858122712E-01
                      -2.5226256504E-01 -4.2537810840E-02  4.7614531120E-01
                       2.5697643649E-01 -2.2926054139E-01  4.6301816485E-01
                       1.6162689035E-01 -5.0554200431E-01  5.7038204802E-01
                      -7.0693709768E-02 -6.9341498596E-01  6.6844656369E-01
                      -3.1831013115E-02  1.4373772232E-01  3.8899808355E-01
            znucl        6.00000    1.00000

================================================================================
 leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
 DATA TYPE INFORMATION: 
 REAL:      Data type name: REAL(DP) 
            Kind value:      8
            Precision:      15
            Smallest nonnegligible quantity relative to 1:  0.22204460E-15
            Smallest positive number:                       0.22250739-307
            Largest representable number:                   0.17976931+309
 INTEGER:   Data type name: INTEGER(default) 
            Kind value: 4
            Bit size:   32
            Largest representable number: 2147483647
 LOGICAL:   Data type name: LOGICAL 
            Kind value: 4
 CHARACTER: Data type name: CHARACTER             Kind value: 1
 ==== OpenMP parallelism is OFF ====
 
  ==== Using MPI-2 specifications ==== 
  MPI-IO support is ON
  xmpi_tag_ub ................   2147483647
  xmpi_bsize_ch ..............            1
  xmpi_bsize_int .............            4
  xmpi_bsize_sp ..............            4
  xmpi_bsize_dp ..............            8
  xmpi_bsize_spc .............            8
  xmpi_bsize_dpc .............           16
  xmpio_bsize_frm ............            4
  xmpi_address_kind ..........            8
  xmpi_offset_kind ...........            8
  MPI_WTICK ..................   9.99999999999999955E-007

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1

 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Exciton: Calculation of dielectric properties by solving the Bethe-Salpeter equation
 in frequency domain and reciprocal space on a transitions basis set.
 Based on a program developed by L. Reining, V. Olevano, F. Sottile,
 S. Albrecht, and G. Onida. Incorporated in ABINIT by M. Giantomassi.

.Using double precision arithmetic ; gwpc =  8

 Unit cell volume ucvol=  3.3750000E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=      9.913   => boxcut(ratio)=   2.06959

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    45   45   45
  Augmented FFT divisions ...................    45   45   45
  FFT algorithm .............................   112
  FFT cache size ............................    16
- pspini: atom type   1  psp file is ../Psps_for_tests/6c.pspnc
- pspatm: opening atomic psp file    ../Psps_for_tests/6c.pspnc
-  Troullier-Martins psp for element  C         Thu Oct 27 17:29:33 EDT 1994
-  6.00000   4.00000    940714                znucl, zion, pspdat
    1    1    1    1      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0  10.372  24.987    1   1.4850707        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1  15.431  21.987    0   1.4850707        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.83985002509544    0.99012430797080    0.51184907750884   rchrg,fchrg,qchrg
 pspatm: epsatm=    0.92590353
         --- l  ekb(1:nproj) -->
             0    4.921466
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is ../Psps_for_tests/1h.pspnc
- pspatm: opening atomic psp file    ../Psps_for_tests/1h.pspnc
-  Troullier-Martins psp for element  H         Thu Oct 27 17:28:54 EDT 1994
-  1.00000   1.00000    940714                znucl, zion, pspdat
    1    1    0    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   7.740  11.990    0   1.5855604        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
 Note: local psp for atom with Z=  1.0
 pspatm: epsatm=    0.04198703
         --- l  ekb(1:nproj) -->
 pspatm: atomic psp has been read  and splines computed

   5.72659693E+02                                ecore*ucvol(ha*bohr**3)

 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Max number of Kleinman-Bylander energies    1
  Number of pseudopotentials ..    2
  Number of types of atoms   ..    2
  Calculation without spin-orbit
  Nonlocal part applied using Legendre polynomials
  Highest angular momentum +1 .......   2
  Max number of (l,n)   components ..   1
  Max number of (l,m,n) components ..   1

 *** Pseudo-Core Charge Info *** 
  Number of radial points for pseudo-core charge .. 2501
  XC core-correction treatment (optnlxccc) ........    1
  Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius ..  2.5196
  - Atom type    2 has pseudo-core radius ..  0.0000

 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   3001
  Number of q-points for vlspl ...................   3001
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is   1
 XC functional for type   2 is   1
 symatm: atom number     1 is reached starting at atom
   1
 symatm: atom number     2 is reached starting at atom
   2
 symatm: atom number     3 is reached starting at atom
   3
 symatm: atom number     4 is reached starting at atom
   4
 symatm: atom number     5 is reached starting at atom
   5
 symatm: atom number     6 is reached starting at atom
   6
 symatm: atom number     7 is reached starting at atom
   7
 symatm: atom number     8 is reached starting at atom
   8
 symatm: atom number     9 is reached starting at atom
   9
 symatm: atom number    10 is reached starting at atom
  10
 symatm: atom number    11 is reached starting at atom
  11
 symatm: atom number    12 is reached starting at atom
  12
 symatm: atom number    13 is reached starting at atom
  13
 symatm: atom number    14 is reached starting at atom
  14
 symatm: atom number    15 is reached starting at atom
  15
 symatm: atom number    16 is reached starting at atom
  16
 symatm: atom number    17 is reached starting at atom
  17
 symatm: atom number    18 is reached starting at atom
  18
 symatm: atom number    19 is reached starting at atom
  19
 symatm: atom number    20 is reached starting at atom
  20
 symatm: atom number    21 is reached starting at atom
  21
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)= 15.0000000  0.0000000  0.0000000  G(1)=  0.0666667  0.0000000  0.0000000
 R(2)=  0.0000000 15.0000000  0.0000000  G(2)=  0.0000000  0.0666667  0.0000000
 R(3)=  0.0000000  0.0000000 15.0000000  G(3)=  0.0000000  0.0000000  0.0666667
 Unit cell volume ucvol=  3.3750000E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1
  0  1  0   0.000  1
  0  0  1   0.000  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :     1
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       1.00000

 Together with  1 symmetry operations and time-reversal symmetry 
 yields     1 points in the full Brillouin Zone.


 Testing file: nap_bse_1i_SCR

 setup_bse.F90:302:COMMENT
  The Header of the screening file does not contain the list of q-point for the optical limit 
 Using nqlwl=  1 and qlwl =  0.000010 0.000020 0.000030
 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :     1
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       1.00000

 Together with  1 symmetry operations and time-reversal symmetry 
 yields     1 points in the full Brillouin Zone.


RESONANT ONLY CALCULATION
W is read from an external SCR file
Using diagonal approximation W_GG

 m_gsphere.F90:440:WARNING
 Init from ecut has to be tested

 ==== Info on the G-sphere ==== 
  Number of G vectors ...     4945
  Number of shells ......       95

 Time reversal symmetry is used

 vcoul_init : cutoff-mode = CRYSTAL
 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030
 top of valence       [eV]  -3.11
 bottom of conduction [eV]   0.32
 Fermi energy         [eV]  -1.39

 ==== Band structure read from the WFK file ====
  Number of spinorial components ......     1
  Number of spin polarizations ........     1
  Number of k-points in the IBZ .......     1
  Maximum number of bands .............   150
  Occupation option ...................     1

  Number of valence electrons .........          54.00
  Fermi level  ........................      -0.051234
  Entropy .............................       0.000000
  Tsmear value ........................       0.040000
  Tphysel value .......................       0.000000


 === KS band structure ===
  >>>> For spin  1
   Minimum optical gap =   3.4297 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   3.4297 [eV], Top of valence bands at :   0.0000  0.0000  0.0000
                                        Bottom of conduction at :   0.0000  0.0000  0.0000
 For spin :  1 val_idx 27

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a screening       |  input file contains a screening
. ABINIT  code version 7.2.2            |  ABINIT  code version 7.0.3
. date 20130728 bantot  150 natom   21  |  date 20130705 bantot  150 natom   21
  nkpt   1 nsym  1 ngfft  45,  45,  45  |  nkpt   1 nsym  1 ngfft  45,  45,  45
  ntypat  2 ecut_eff   9.9134693        |  ntypat  2 ecut_eff  10.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
    15.0000000   0.0000000   0.0000000  |    15.0000000   0.0000000   0.0000000
     0.0000000  15.0000000   0.0000000  |     0.0000000  15.0000000   0.0000000
     0.0000000   0.0000000  15.0000000  |     0.0000000   0.0000000  15.0000000

 hdr_check: WARNING -
  input ecut_eff=    9.913469 /= disk file ecut_eff=   10.000000.
  nband:                                |  nband:
   150                                  |   150
  symafm:                               |  symafm:
    1                                   |    1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
  typat:                                |  typat:
    1  1  1  1  1  1  1  1  1  1  1  2  |    1  1  1  1  1  1  1  1  1  1  1  2
    2  2  2  2  2  2  2  2  2           |    2  2  2  2  2  2  2  2  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
  istwfk:                               |  istwfk:
    1                                   |    1
  kpt:                                  |  kpt:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
  wtk:                                  |  wtk:
    1.000                               |    1.000
  occ:                                  |  occ:
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
   znucl:                               |   znucl:
    6.00  1.00                          |    6.00  1.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   4.0  |  pspdat 940714 pspcod    1 zion   4.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   1.0  |  pspdat 940714 pspcod    1 zion   1.0
  xred:                                 |  xred:
     0.0700245   0.0503782   0.3954726  |     0.0700245   0.0503782   0.3954726
    -0.4472979  -0.4846954   0.6537895  |    -0.4472979  -0.4846954   0.6537895
    -0.3934870  -0.3303903   0.5939649  |    -0.3934870  -0.3303903   0.5939649
    -0.2205554  -0.3009292   0.5583309  |    -0.2205554  -0.3009292   0.5583309
    -0.1019575  -0.4348279   0.5857564  |    -0.1019575  -0.4348279   0.5857564
    -0.1612188  -0.5918985   0.6476449  |    -0.1612188  -0.5918985   0.6476449
    -0.3302312  -0.6165691   0.6808730  |    -0.3302312  -0.6165691   0.6808730
    -0.1610631  -0.1437338   0.4964630  |    -0.1610631  -0.1437338   0.4964630
     0.0075607  -0.1161017   0.4621058  |     0.0075607  -0.1161017   0.4621058
     0.1236484  -0.2499874   0.4901461  |     0.1236484  -0.2499874   0.4901461
     0.0707873  -0.4042399   0.5498879  |     0.0707873  -0.4042399   0.5498879
     0.1231418   0.0362088   0.2680809  |     0.1231418   0.0362088   0.2680809
     0.1707651   0.1017211   0.4757392  |     0.1707651   0.1017211   0.4757392
    -0.5804223  -0.5054108   0.6810586  |    -0.5804223  -0.5054108   0.6810586
    -0.4836005  -0.2284745   0.5733724  |    -0.4836005  -0.2284745   0.5733724
    -0.3740928  -0.7378036   0.7285812  |    -0.3740928  -0.7378036   0.7285812
    -0.2522626  -0.0425378   0.4761453  |    -0.2522626  -0.0425378   0.4761453
     0.2569764  -0.2292605   0.4630182  |     0.2569764  -0.2292605   0.4630182
     0.1616269  -0.5055420   0.5703820  |     0.1616269  -0.5055420   0.5703820
    -0.0706937  -0.6934150   0.6684466  |    -0.0706937  -0.6934150   0.6684466
    -0.0318310   0.1437377   0.3889981  |    -0.0318310   0.1437377   0.3889981
================================================================================
 optimal value for ng0sh =  0 0 0

 setmesh: npwwfn        =     4945; Max (m1,m2,m3)   =     10    10    10
          npweps/npwsigx=     5041; Max (mm1,mm2,mm3)=  39569   282   283
          mG0 added     =   0  0  0
 calculated ecutwfn          =   9.650 [Ha]
 calculated ecutsigx/ecuteps = ******* [Ha]
 using method =  2 with ecuteff = ******* [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 
 size_goed_fft : ERROR-
 nbest =    79159
 is larger than any allowable FFT                                                                                                                                                                                                                                                                                                                                                                                                                                        
 setmesh: FFT mesh size selected  = ***x600x600
          total number of points  = ********


 ==== FFT mesh for oscillator matrix elements ====
  FFT mesh divisions ........................ *****  600  600
  Augmented FFT divisions ................... *****  601  600
  FFT algorithm .............................   112
  FFT cache size ............................    16
Calculation type:  RPA L0 with QP energies and KS wavefunctions
 Reading GW corrections from file __in.gw__
 k   s    GW eigenvalues [eV]
  1   1         -25.88 -24.50 -23.02 -22.52 -21.59 -20.46 -18.34 -17.50 -17.51 -14.74
                -14.76 -13.96 -13.11 -12.78 -12.15 -12.17 -11.87 -11.01 -11.28 -11.14
                -10.43  -9.29  -9.33  -9.25  -7.98  -6.67  -6.04   1.85   2.14   2.52
                  3.37   3.80   4.17   4.26   4.62   5.03   5.04   5.26   5.62   5.78
                  6.04   6.30   6.51   6.59   6.74   6.80   7.24   7.43   7.49   7.47
                  7.84   8.00   8.50   8.58   8.75   8.85   9.27   9.33   9.48  10.01
                  9.96   9.95  10.36  10.34  10.67  10.77  11.01  11.11  11.15  10.95
                 11.46  11.73  11.70  12.16  12.25  12.27  12.10  12.39  12.67  12.97
                 12.83  13.18  13.05  13.56  13.52  13.40  13.65  13.84  13.81  14.31
                 14.23  14.46  14.66  14.57  14.78  14.63  14.88  14.96  15.05  15.15
                 13.98  14.05  14.39  14.55  14.72  14.81  14.94  15.09  15.14  15.26
                 15.33  15.50  15.55  15.70  15.88  16.11  16.28  16.43  16.48  16.62
                 16.78  16.84  17.02  17.20  17.28  17.61  17.80  17.89  18.01  18.09
                 18.22  18.37  18.50  18.65  18.82  18.97  19.01  19.29  19.34  19.57
                 19.65  19.85  19.90  20.11  20.22  20.24  20.41  20.51  20.62  20.74

  k       GW energies [eV]
  1        -25.88 -24.50 -23.02 -22.52 -21.59 -20.46 -18.34 -17.50 -17.51 -14.74
           -14.76 -13.96 -13.11 -12.78 -12.15 -12.17 -11.87 -11.01 -11.28 -11.14
           -10.43  -9.29  -9.33  -9.25  -7.98  -6.67  -6.04   1.85   2.14   2.52
             3.37   3.80   4.17   4.26   4.62   5.03   5.04   5.26   5.62   5.78
             6.04   6.30   6.51   6.59   6.74   6.80   7.24   7.43   7.49   7.47
             7.84   8.00   8.50   8.58   8.75   8.85   9.27   9.33   9.48  10.01
             9.96   9.95  10.36  10.34  10.67  10.77  11.01  11.11  11.15  10.95
            11.46  11.73  11.70  12.16  12.25  12.27  12.10  12.39  12.67  12.97
            12.83  13.18  13.05  13.56  13.52  13.40  13.65  13.84  13.81  14.31
            14.23  14.46  14.66  14.57  14.78  14.63  14.88  14.96  15.05  15.15
            13.98  14.05  14.39  14.55  14.72  14.81  14.94  15.09  15.14  15.26
            15.33  15.50  15.55  15.70  15.88  16.11  16.28  16.43  16.48  16.62
            16.78  16.84  17.02  17.20  17.28  17.61  17.80  17.89  18.01  18.09
            18.22  18.37  18.50  18.65  18.82  18.97  19.01  19.29  19.34  19.57
            19.65  19.85  19.90  20.11  20.22  20.24  20.41  20.51  20.62  20.74

  k       Im GW energies [eV]
  1          0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00
             0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00


 === QP band structure ===
  >>>> For spin  1
   Minimum optical gap =   7.8960 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   7.8960 [eV], Top of valence bands at :   0.0000  0.0000  0.0000
                                        Bottom of conduction at :   0.0000  0.0000  0.0000
 For spin:  1 the number of resonant e-h transitions is: 3348
 ==== Fundamental parameters for the solution of the Bethe-Salpeter equation: ====
 Algorithm: Direct diagonalization.
 Dimension of the v, W matrices,  npweps  =  5041
 Cutoff for the wavefunctions,    npwwfn  =  4945
 Highest empty band included,     nband   =   150
 Lowest occupied band included,   loband  =     0
 Number of k-points in the IBZ,   nkibz   =     1
 Minimum frequency [eV]           Emin    =   0.00
 Maximum frequency [eV]           Emax    =   0.00
 Frequency step [eV]              dE      =   0.01
 Lorentzian broadening [eV]       eta     =   0.10
 Lowest occupied state                       0
 Highest occupied state                     27
 Lowest unoccupied state                    28
 Highest unoccupied state                  150
 Number of valence bands                    28
 Number of conduction bands                123
 Number of resonant transitions   nreh(1) =  3348
 RPA L0 with QP energies and KS wavefunctions
 Local fields effects (v term) included
 Excitonic effects (W term) included
 Only diagonal term W_GG included
 W is read from an external SCR file
 Resonant-only calculation (Hermitian case)


 Calculating epsilon_Macro(q-->0,w), along the following directions:
 q = (  2.387324  0.000000  0.000000) [r.l.u.]
 q = (  0.000000  2.387324  0.000000) [r.l.u.]
 q = (  0.000000  0.000000  2.387324) [r.l.u.]
 q = (  2.387324  0.000000  0.000000) [r.l.u.]
 q = (  0.000000  2.387324  0.000000) [r.l.u.]
 q = (  0.000000  0.000000  2.387324) [r.l.u.]
 ==== Files used for the Bethe-Salpeter calculation  ====

 ==== FFT mesh used for oscillator strengths ====
  FFT mesh divisions ........................ *****  600  600
  Augmented FFT divisions ................... *****  601  600
  FFT algorithm .............................   112
  FFT cache size ............................    16

 m_wfs.F90:1129:WARNING
 Using k-centered G-spheres.
 Memory needed for Fourier components ug =         11.3 [Mb]
 Memory needed for real space ur =          0.0 [Mb]
 DATA TYPE INFORMATION: 
 REAL:      Data type name: REAL(DP) 
            Kind value:      8
            Precision:      15
            Smallest nonnegligible quantity relative to 1:  0.22204460E-15
            Smallest positive number:                       0.22250739-307
            Largest representable number:                   0.17976931+309
 INTEGER:   Data type name: INTEGER(default) 
            Kind value: 4
            Bit size:   32
            Largest representable number: 2147483647
 LOGICAL:   Data type name: LOGICAL 
            Kind value: 4
 CHARACTER: Data type name: CHARACTER             Kind value: 1
  ==== Using MPI-2 specifications ==== 
  MPI-IO support is ON
  xmpi_tag_ub ................   2147483647
  xmpi_bsize_ch ..............            1
  xmpi_bsize_int .............            4
  xmpi_bsize_sp ..............            4
  xmpi_bsize_dp ..............            8
  xmpi_bsize_spc .............            8
  xmpi_bsize_dpc .............           16
  xmpio_bsize_frm ............            4
  xmpi_address_kind ..........            8
  xmpi_offset_kind ...........            8
  MPI_WTICK ..................   9.99999999999999955E-007

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.2.2
  Build target  : x86_64_linux_gnu4.5
  Build date    : 20130518

 === Compiler Suite === 
  C compiler       : gnu4.5
  CFLAGS           :  -g -O2 -mtune=native -march=native
  C++ compiler     : gnu4.5
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  Fortran compiler : gnu4.5
  FCFLAGS          :  -g -ffree-line-length-none -march=native -funroll-loops -O3 -ffast-math -Wstrict-aliasing=2 -ftree-vectorize -mtune=native
  FC_LDFLAGS       :     -static-libgcc -static-libgfortran

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : none
  LINALG flavor : custom
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf+etsf_io-fallback+fox-fallback

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes

 === Bazaar branch information === 
  Branch ID : 
  Revision  : 
  Committed : 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 getph.F90:83:BUG
 Wrong ph1d sizes !
  Action : contact ABINIT group.

.Delivered    3 WARNINGs and   7 COMMENTs to log file.

 leave_new : decision taken to exit ...

 getph.F90:83:BUG
 Wrong ph1d sizes !
  Action : contact ABINIT group.

