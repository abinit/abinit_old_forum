  ABINIT 8.10.1
  
  Give name for formatted input file: 
h-BNC8Primitive.in
  Give name for formatted output file:
h-BNC8Primitive.out
  Give root name for generic input files:
h-BNC8Primitivei
  Give root name for generic output files:
h-BNC8Primitiveo
  Give root name for generic temporary files:
h-BNC8Primitive

.Version 8.10.1 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu7.4 computer) 

.Copyright (C) 1998-2018 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Sat  6 Mar 2021.
- ( at 00h59 )
  
- The starting date is more than 2 years after the initial release
- of this version of ABINIT, namely Oct 2018.
- Note that the use beyond 3 years after the release will not be supported.
- Action: please, switch to a more recent version of ABINIT.


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 8.10.1
  Build target  : x86_64_linux_gnu7.4
  Build date    : 20200115

 === Compiler Suite === 
  C compiler       : gnu7.4
  C++ compiler     : gnu7.4
  Fortran compiler : gnu7.4
  CFLAGS           :  -g -O2 -mtune=native -march=native
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown

 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+atompaw-fallback+wannier90-fallback
  FFT flavor    : fftw3
  LINALG flavor : atlas
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf

 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -mtune=native -march=native


 Optimizations for 43_ptgroups:
   -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
              HAVE_ATOMPAW HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC
 
         HAVE_FC_BACKTRACE  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE
 
        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME              HAVE_FC_EXIT
 
             HAVE_FC_FLUSH             HAVE_FC_GAMMA            HAVE_FC_GETENV
 
   HAVE_FC_IEEE_EXCEPTIONS          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG
 
     HAVE_FC_ISO_C_BINDING  HAVE_FC_ISO_FORTRAN_2008        HAVE_FC_LONG_LINES
 
        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED
 
         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM                  HAVE_FFT
 
            HAVE_FFT_FFTW3              HAVE_FFT_MPI           HAVE_FFT_SERIAL
 
          HAVE_FORTRAN2003               HAVE_GW_DPC        HAVE_LIBPAW_ABINIT
 
      HAVE_LIBTETRA_ABINIT                HAVE_LIBXC               HAVE_LINALG
 
        HAVE_LINALG_SERIAL                  HAVE_MPI                 HAVE_MPI2
 
       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV
 
        HAVE_MPI_INTEGER16               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...
 
               HAVE_NETCDF           HAVE_NETCDF_MPI             HAVE_OS_LINUX
 
         HAVE_TIMER_ABINIT            HAVE_WANNIER90              USE_MACROAVE
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> h-BNC8Primitive.in
- output file    -> h-BNC8Primitive.out
- root for input  files -> h-BNC8Primitivei
- root for output files -> h-BNC8Primitiveo


--- !WARNING
src_file: m_nctk.F90
src_line: 570
message: |
    netcdf lib does not support MPI-IO and: NetCDF: Parallel operation on file opened for non-parallel access
...

  Asked to delete not existent file: __TMP_FILE__

--- !WARNING
src_file: m_nctk.F90
src_line: 590
message: |
    The netcdf library does not support parallel IO, see message above
    Abinit won't be able to produce files in parallel e.g. when paral_kgb==1 is used.
    Action: install a netcdf4+HDF5 library with MPI-IO support.
...

-instrng: 107 lines of input have been read from file h-BNC8Primitive.in


 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is 5b.3.hgh

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is 7n.5.hgh

 Please give name of formatted atomic psp file
 iofn2 : for atom type 3, psp file is 6c.4.hgh
  read the values zionpsp=  3.0 , pspcod=   3 , lmax=   1
  read the values zionpsp=  5.0 , pspcod=   3 , lmax=   1
  read the values zionpsp=  4.0 , pspcod=   3 , lmax=   1

 inpspheads: deduce mpsang = 2, n1xccc = 0.
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is mP (primitive monoclinic)
  xangst is defined in input file
 ingeo: takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is mP (primitive monoclinic)

 symlatt : the Bravais lattice is mP (primitive monoclinic)

--- !COMMENT
src_file: m_symfind.F90
src_line: 815
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  2, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   1  P1   (=C1^1)
 ingeo: angdeg(1:3)=   90.00000000   90.00000000  120.00000000
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
  0.00  0.00  0.00  0.00
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=16 and mkmem  = 16, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=16 and mkqmem = 16, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=16 and mk1mem = 16, ground state wf handled in core.
 For input ecut=  7.260000E+01 best grid ngfft=     360      75      54
       max ecut=  7.567276E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   360   75   54
  Augmented FFT divisions ...................   361   75   54
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 70602

 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   4, lnmaxso=   2.
 For input ecut=  2.179184E+01 best grid ngfft=     180      40      30
       max ecut=  2.210896E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   180   40   30
  Augmented FFT divisions ...................   181   41   30
  FFT algorithm .............................   101
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 523
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
     intxc =       0    ionmov =       1      iscf =       1    lmnmax =       1
     lnmax =       1     mgfft =     360  mpssoang =       2    mqgrid =    3001
     natom =      41  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       1    n1xccc =       0    ntypat =       3
    occopt =       1   xclevel =       1
-    mband =          88        mffmem =           1         mkmem =          16
       mpw =       70602          nfft =     1458000          nkpt =          16
 For the susceptibility and dielectric matrices, or tddft :
   mgfft =       180  nbnd_in_blk=    11    nfft =    216000     npw =       523
================================================================================
P This job should need less than                    1798.616 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :   1516.842 Mbytes ; DEN or POT disk file :     11.126 Mbytes.
================================================================================

 Biggest array : cg(disk), with   1516.8418 MBytes.
 memana : allocated an array of   1516.842 Mbytes, for testing purposes.
 memana: allocated    1798.616Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (h-BNC8Primitiveo_OUT.nc)

            acell      4.2520000000E+01  9.4486000000E+00  6.8596000000E+00 Bohr
              amu      1.08110000E+01  1.40067400E+01  1.20110000E+01
           diemac      1.10000000E+01
          dilatmx      1.10000000E+00
             ecut      6.00000000E+01 Hartree
           ecutsm      1.83746627E-02 Hartree
-          fftalg         312
           getwfk          -1
           ionmov           1
           iprcel          21
             iscf           1
              kpt      0.00000000E+00  0.00000000E+00 -2.50000000E-01
                       0.00000000E+00  2.50000000E-01  5.00000000E-01
                       0.00000000E+00  5.00000000E-01 -2.50000000E-01
                       2.50000000E-01  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  2.50000000E-01 -2.50000000E-01
                       5.00000000E-01  0.00000000E+00 -2.50000000E-01
                       0.00000000E+00  2.50000000E-01  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       2.50000000E-01  5.00000000E-01  5.00000000E-01
                       2.50000000E-01 -2.50000000E-01 -2.50000000E-01
                       5.00000000E-01  2.50000000E-01  5.00000000E-01
                       5.00000000E-01  5.00000000E-01 -2.50000000E-01
                      -2.50000000E-01  2.50000000E-01 -2.50000000E-01
                       2.50000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
         kptrlatt       -2    2    2      2   -2    2      2    2   -2
          kptrlen      2.74384000E+01
P           mkmem          16
            natom          41
            nband          88
            ngfft         360      75      54
             nkpt          16
            nstep          12
             nsym           1
            ntime          12
           ntypat           3
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
        optforces           1
           prtcif           1
            rprim      8.6602540378E-01  5.0000000000E-01  0.0000000000E+00
                      -8.6602540378E-01  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           1
           toldff      5.00000000E-12
           tolmxf      5.00000000E-11
           tsmear      4.00000000E-02 Hartree
            typat      1  1  1  2  2  2  3  3  3  3  3  3  3  3  3  3  3  3  3  3
                       3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3
                       3
              wtk        0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250
           xangst      1.7500002000E+01  1.4433740000E+00  2.7225000000E+00
                       2.0000000000E+01  1.4433740000E+00  2.7225000000E+00
                       1.8750000000E+01  3.6084380000E+00  2.7225000000E+00
                       1.8750002000E+01  7.2168500000E-01  2.7225000000E+00
                       1.7500000000E+01  2.8867490000E+00  2.7225000000E+00
                       2.0000000000E+01  2.8867490000E+00  2.7225000000E+00
                       1.2500000000E+00  7.2168500000E-01  9.0750000000E-01
                       2.7110105332E-16  2.8867490000E+00  9.0750000000E-01
                       3.7500000000E+00  7.2168500000E-01  9.0750000000E-01
                       2.5000000000E+00  2.8867490000E+00  9.0750000000E-01
                       6.2500000000E+00  7.2168500000E-01  9.0750000000E-01
                       5.0000000000E+00  2.8867490000E+00  9.0750000000E-01
                       8.7500000000E+00  7.2168500000E-01  9.0750000000E-01
                       7.5000000000E+00  2.8867490000E+00  9.0750000000E-01
                       1.1250000000E+01  7.2168500000E-01  9.0750000000E-01
                       1.0000000000E+01  2.8867490000E+00  9.0750000000E-01
                       1.3750001000E+01  7.2168500000E-01  9.0750000000E-01
                       1.2500001000E+01  2.8867490000E+00  9.0750000000E-01
                       1.6250000000E+01  7.2168500000E-01  9.0750000000E-01
                       1.4999999000E+01  2.8867490000E+00  9.0750000000E-01
                       1.8750002000E+01  7.2168500000E-01  9.0750000000E-01
                       1.7500000000E+01  2.8867490000E+00  9.0750000000E-01
                       2.0000000000E+01  2.8867490000E+00  9.0750000000E-01
                       4.0260473328E-17  1.4433740000E+00  9.0750000000E-01
                      -1.2500000000E+00  3.6084380000E+00  9.0750000000E-01
                       2.5000000000E+00  1.4433740000E+00  9.0750000000E-01
                       1.2500000000E+00  3.6084380000E+00  9.0750000000E-01
                       5.0000000000E+00  1.4433740000E+00  9.0750000000E-01
                       3.7500000000E+00  3.6084380000E+00  9.0750000000E-01
                       7.5000000000E+00  1.4433740000E+00  9.0750000000E-01
                       6.2500000000E+00  3.6084380000E+00  9.0750000000E-01
                       1.0000000000E+01  1.4433740000E+00  9.0750000000E-01
                       8.7500000000E+00  3.6084380000E+00  9.0750000000E-01
                       1.2500001000E+01  1.4433740000E+00  9.0750000000E-01
                       1.1250000000E+01  3.6084380000E+00  9.0750000000E-01
                       1.5000001000E+01  1.4433740000E+00  9.0750000000E-01
                       1.3750000000E+01  3.6084380000E+00  9.0750000000E-01
                       1.7500002000E+01  1.4433740000E+00  9.0750000000E-01
                       1.6250002000E+01  3.6084380000E+00  9.0750000000E-01
                       2.0000000000E+01  1.4433740000E+00  9.0750000000E-01
                       1.8750000000E+01  3.6084380000E+00  9.0750000000E-01
            xcart      3.3070211105E+01  2.7275815673E+00  5.1447793968E+00
                       3.7794522658E+01  2.7275815673E+00  5.1447793968E+00
                       3.5432364992E+01  6.8189595875E+00  5.1447793968E+00
                       3.5432368771E+01  1.3637870042E+00  5.1447793968E+00
                       3.3070207325E+01  5.4551650244E+00  5.1447793968E+00
                       3.7794522658E+01  5.4551650244E+00  5.1447793968E+00
                       2.3621576661E+00  1.3637870042E+00  1.7149264656E+00
                       5.1230674510E-16  5.4551650244E+00  1.7149264656E+00
                       7.0864729983E+00  1.3637870042E+00  1.7149264656E+00
                       4.7243153322E+00  5.4551650244E+00  1.7149264656E+00
                       1.1810788331E+01  1.3637870042E+00  1.7149264656E+00
                       9.4486306644E+00  5.4551650244E+00  1.7149264656E+00
                       1.6535103663E+01  1.3637870042E+00  1.7149264656E+00
                       1.4172945997E+01  5.4551650244E+00  1.7149264656E+00
                       2.1259418995E+01  1.3637870042E+00  1.7149264656E+00
                       1.8897261329E+01  5.4551650244E+00  1.7149264656E+00
                       2.5983736217E+01  1.3637870042E+00  1.7149264656E+00
                       2.3621578551E+01  5.4551650244E+00  1.7149264656E+00
                       3.0708049659E+01  1.3637870042E+00  1.7149264656E+00
                       2.8345890104E+01  5.4551650244E+00  1.7149264656E+00
                       3.5432368771E+01  1.3637870042E+00  1.7149264656E+00
                       3.3070207325E+01  5.4551650244E+00  1.7149264656E+00
                       3.7794522658E+01  5.4551650244E+00  1.7149264656E+00
                       7.6081268571E-17  2.7275815673E+00  1.7149264656E+00
                      -2.3621576661E+00  6.8189595875E+00  1.7149264656E+00
                       4.7243153322E+00  2.7275815673E+00  1.7149264656E+00
                       2.3621576661E+00  6.8189595875E+00  1.7149264656E+00
                       9.4486306644E+00  2.7275815673E+00  1.7149264656E+00
                       7.0864729983E+00  6.8189595875E+00  1.7149264656E+00
                       1.4172945997E+01  2.7275815673E+00  1.7149264656E+00
                       1.1810788331E+01  6.8189595875E+00  1.7149264656E+00
                       1.8897261329E+01  2.7275815673E+00  1.7149264656E+00
                       1.6535103663E+01  6.8189595875E+00  1.7149264656E+00
                       2.3621578551E+01  2.7275815673E+00  1.7149264656E+00
                       2.1259418995E+01  6.8189595875E+00  1.7149264656E+00
                       2.8345893883E+01  2.7275815673E+00  1.7149264656E+00
                       2.5983734327E+01  6.8189595875E+00  1.7149264656E+00
                       3.3070211105E+01  2.7275815673E+00  1.7149264656E+00
                       3.0708053439E+01  6.8189595875E+00  1.7149264656E+00
                       3.7794522658E+01  2.7275815673E+00  1.7149264656E+00
                       3.5432364992E+01  6.8189595875E+00  1.7149264656E+00
             xred      5.1318619123E-01 -1.7320569943E+00  7.5001157455E-01
                       5.7733441669E-01 -2.0207328348E+00  7.5001157455E-01
                       6.4148271527E-01 -1.4433805938E+00  7.5001157455E-01
                       5.1318613952E-01 -2.0207332985E+00  7.5001157455E-01
                       5.7733438678E-01 -1.4433808265E+00  7.5001157455E-01
                       6.4148266356E-01 -1.7320568979E+00  7.5001157455E-01
                       6.4148150720E-02 -5.6729924749E-07  2.5000385818E-01
                       1.2829644930E-01  5.7735167373E-01  2.5000385818E-01
                       1.2829642750E-01 -2.8867663876E-01  2.5000385818E-01
                       1.9244472609E-01  2.8867560227E-01  2.5000385818E-01
                       1.9244470428E-01 -5.7735271022E-01  2.5000385818E-01
                       2.5659300287E-01 -4.6919114823E-07  2.5000385818E-01
                       2.5659298107E-01 -8.6602878168E-01  2.5000385818E-01
                       3.2074127965E-01 -2.8867654065E-01  2.5000385818E-01
                       3.2074125785E-01 -1.1547048531E+00  2.5000385818E-01
                       3.8488955643E-01 -5.7735261211E-01  2.5000385818E-01
                       3.8488956029E-01 -1.4433810401E+00  2.5000385818E-01
                       4.4903785888E-01 -8.6602879904E-01  2.5000385818E-01
                       4.4903781141E-01 -1.7320569961E+00  2.5000385818E-01
                       5.1318608434E-01 -1.1547046396E+00  2.5000385818E-01
                       5.1318613952E-01 -2.0207332985E+00  2.5000385818E-01
                       5.7733438678E-01 -1.4433808265E+00  2.5000385818E-01
                       6.4148266356E-01 -1.7320568979E+00  2.5000385818E-01
                       6.4148202430E-02  2.8867573686E-01  2.5000385818E-01
                       1.2829650101E-01  8.6602797789E-01  2.5000385818E-01
                       1.2829647921E-01 -3.3459589864E-07  2.5000385818E-01
                       1.9244477780E-01  5.7735190643E-01  2.5000385818E-01
                       1.9244475600E-01 -2.8867640606E-01  2.5000385818E-01
                       2.5659305458E-01  2.8867583497E-01  2.5000385818E-01
                       2.5659303278E-01 -5.7735247751E-01  2.5000385818E-01
                       3.2074133136E-01 -2.3648779935E-07  2.5000385818E-01
                       3.2074130956E-01 -8.6602854897E-01  2.5000385818E-01
                       3.8488960814E-01 -2.8867630795E-01  2.5000385818E-01
                       3.8488961200E-01 -1.1547047359E+00  2.5000385818E-01
                       4.4903788493E-01 -5.7735237941E-01  2.5000385818E-01
                       4.4903788878E-01 -1.4433808074E+00  2.5000385818E-01
                       5.1318616171E-01 -8.6602845087E-01  2.5000385818E-01
                       5.1318619123E-01 -1.7320569943E+00  2.5000385818E-01
                       5.7733448981E-01 -1.1547047533E+00  2.5000385818E-01
                       5.7733441669E-01 -2.0207328348E+00  2.5000385818E-01
                       6.4148271527E-01 -1.4433805938E+00  2.5000385818E-01
            znucl        5.00000    7.00000    6.00000

================================================================================

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
  MPI_WTICK ..................    1.0000000000000001E-009

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1


--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...


 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  2.3866577E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 360  75  54
         ecut(hartree)=     72.600   => boxcut(ratio)=   2.04189
- pspini: atom type   1  psp file is 5b.3.hgh
- pspatm: opening atomic psp file    5b.3.hgh
- Hartwigsen-Goedecker-Hutter psp for B,  from PRB58, 3641 (1998)
-  5.00000   3.00000     10605                znucl, zion, pspdat
    3    1    1    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.4339300
 cc1 =  -5.5786420; cc2 =   0.8042510; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.3738430; h11s=   6.2339280; h22s=   0.0000000; h33s=   0.0000000
 rrp =   0.3603930; h11p=   0.0000000; h22p=   0.0000000; h33p=   0.0000000
                    k11p=   0.0008780; k22p=   0.0000000; k33p=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
  pspatm : epsatm=   -0.52475100
         --- l  ekb(1:nproj) -->
             0    1.154608
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 7n.5.hgh
- pspatm: opening atomic psp file    7n.5.hgh
- Hartwigsen-Goedecker-Hutter psp for N,  from PRB58, 3641 (1998)
-  7.00000   5.00000     10605                znucl, zion, pspdat
    3    1    1    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2891790
 cc1 = -12.2348200; cc2 =   1.7664070; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.2566050; h11s=  13.5522430; h22s=   0.0000000; h33s=   0.0000000
 rrp =   0.2701340; h11p=   0.0000000; h22p=   0.0000000; h33p=   0.0000000
                    k11p=   0.0031310; k22p=   0.0000000; k33p=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
  pspatm : epsatm=   -0.01437983
         --- l  ekb(1:nproj) -->
             0    0.811730
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is 6c.4.hgh
- pspatm: opening atomic psp file    6c.4.hgh
- Hartwigsen-Goedecker-Hutter psp for C,  from PRB58, 3641 (1998)
-  6.00000   4.00000     10605                znucl, zion, pspdat
    3    1    1    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.3488300
 cc1 =  -8.5137710; cc2 =   1.2284320; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.3045530; h11s=   9.5228420; h22s=   0.0000000; h33s=   0.0000000
 rrp =   0.2326770; h11p=   0.0000000; h22p=   0.0000000; h33p=   0.0000000
                    k11p=   0.0041040; k22p=   0.0000000; k33p=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
  pspatm : epsatm=   -0.16969744
         --- l  ekb(1:nproj) -->
             0    0.953587
 pspatm: atomic psp has been read  and splines computed

  -1.23931568E+03                                ecore*ucvol(ha*bohr**3)
 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Number of pseudopotentials ..    3
  Number of types of atoms   ..    3
  Calculation with spin-orbit coupling 
  Max number of channels (spin-orbit included)   3
  - Atom type    1 has spin-orbit characteristics (pspso=  0)
  - Atom type    2 has spin-orbit characteristics (pspso=  0)
  - Atom type    3 has spin-orbit characteristics (pspso=  0)
  Nonlocal part applied using Legendre polynomials
  Max number of non-local projectors over l and type   1
  Highest angular momentum +1 .......   2
  Max number of (l,n)   components ..   2
  Max number of (l,m,n) components ..   2

 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..  14124
   Number of q-points for vlspl ...................  14124
   vloc is computed in Reciprocal Space
   model core charge treated in real-space

  XC functional for type 1 is 1
  Pseudo valence available: no
  XC functional for type 2 is 1
  Pseudo valence available: no
  XC functional for type 3 is 1
  Pseudo valence available: no

 wfconv:    88 bands initialized randomly with npw= 70538, for ikpt=     1
 wfconv:    88 bands initialized randomly with npw= 70574, for ikpt=     2
 wfconv:    88 bands initialized randomly with npw= 70528, for ikpt=     3
 wfconv:    88 bands initialized randomly with npw= 70470, for ikpt=     4
 wfconv:    88 bands initialized randomly with npw= 70515, for ikpt=     5
 wfconv:    88 bands initialized randomly with npw= 70556, for ikpt=     6
 wfconv:    88 bands initialized randomly with npw= 70516, for ikpt=     7
 wfconv:    88 bands initialized randomly with npw= 70530, for ikpt=     8
 wfconv:    88 bands initialized randomly with npw= 70515, for ikpt=     9
 wfconv:    88 bands initialized randomly with npw= 70602, for ikpt=    10
 wfconv:    88 bands initialized randomly with npw= 70538, for ikpt=    11
 wfconv:    88 bands initialized randomly with npw= 70580, for ikpt=    12
 wfconv:    88 bands initialized randomly with npw= 70502, for ikpt=    13
 wfconv:    88 bands initialized randomly with npw= 70538, for ikpt=    14
 wfconv:    88 bands initialized randomly with npw= 70505, for ikpt=    15
 wfconv:    88 bands initialized randomly with npw= 70447, for ikpt=    16
_setup2: Arith. and geom. avg. npw (full set) are   70528.375   70528.365
 initro: for itypat=  1, take decay length=      1.0000,
 initro: indeed, coreel=      2.0000, nval=  3 and densty=  0.0000E+00.
 initro: for itypat=  2, take decay length=      0.6000,
 initro: indeed, coreel=      2.0000, nval=  5 and densty=  0.0000E+00.
 initro: for itypat=  3, take decay length=      0.7000,
 initro: indeed, coreel=      2.0000, nval=  4 and densty=  0.0000E+00.

================================================================================

=== [ionmov= 1] Molecular dynamics with viscosity (vis= 1.00000E+02)        
================================================================================

--- Iteration: ( 1/12) Internal Cycle: (1/4)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  3.30702111049510E+01  2.72758156732768E+00  5.14477939678116E+00
  3.77945226577129E+01  2.72758156732768E+00  5.14477939678116E+00
  3.54323649916058E+01  6.81895958749761E+00  5.14477939678116E+00
  3.54323687710581E+01  1.36378700421158E+00  5.14477939678116E+00
  3.30702073254988E+01  5.45516502438150E+00  5.14477939678116E+00
  3.77945226577129E+01  5.45516502438150E+00  5.14477939678116E+00
  2.36215766610705E+00  1.36378700421158E+00  1.71492646559372E+00
  5.12306745103367E-16  5.45516502438150E+00  1.71492646559372E+00
  7.08647299832116E+00  1.36378700421158E+00  1.71492646559372E+00
  4.72431533221411E+00  5.45516502438150E+00  1.71492646559372E+00
  1.18107883305353E+01  1.36378700421158E+00  1.71492646559372E+00
  9.44863066442822E+00  5.45516502438150E+00  1.71492646559372E+00
  1.65351036627494E+01  1.36378700421158E+00  1.71492646559372E+00
  1.41729459966423E+01  5.45516502438150E+00  1.71492646559372E+00
  2.12594189949635E+01  1.36378700421158E+00  1.71492646559372E+00
  1.88972613288564E+01  5.45516502438150E+00  1.71492646559372E+00
  2.59837362169037E+01  1.36378700421158E+00  1.71492646559372E+00
  2.36215785507967E+01  5.45516502438150E+00  1.71492646559372E+00
  3.07080496593917E+01  1.36378700421158E+00  1.71492646559372E+00
  2.83458901035585E+01  5.45516502438150E+00  1.71492646559372E+00
  3.54323687710581E+01  1.36378700421158E+00  1.71492646559372E+00
  3.30702073254988E+01  5.45516502438150E+00  1.71492646559372E+00
  3.77945226577129E+01  5.45516502438150E+00  1.71492646559372E+00
  7.60812685709682E-17  2.72758156732768E+00  1.71492646559372E+00
 -2.36215766610705E+00  6.81895958749760E+00  1.71492646559372E+00
  4.72431533221411E+00  2.72758156732768E+00  1.71492646559372E+00
  2.36215766610705E+00  6.81895958749760E+00  1.71492646559372E+00
  9.44863066442822E+00  2.72758156732768E+00  1.71492646559372E+00
  7.08647299832116E+00  6.81895958749760E+00  1.71492646559372E+00
  1.41729459966423E+01  2.72758156732768E+00  1.71492646559372E+00
  1.18107883305353E+01  6.81895958749761E+00  1.71492646559372E+00
  1.88972613288564E+01  2.72758156732768E+00  1.71492646559372E+00
  1.65351036627494E+01  6.81895958749760E+00  1.71492646559372E+00
  2.36215785507967E+01  2.72758156732768E+00  1.71492646559372E+00
  2.12594189949635E+01  6.81895958749760E+00  1.71492646559372E+00
  2.83458938830108E+01  2.72758156732768E+00  1.71492646559372E+00
  2.59837343271776E+01  6.81895958749761E+00  1.71492646559372E+00
  3.30702111049510E+01  2.72758156732768E+00  1.71492646559372E+00
  3.07080534388440E+01  6.81895958749760E+00  1.71492646559372E+00
  3.77945226577129E+01  2.72758156732768E+00  1.71492646559372E+00
  3.54323649916058E+01  6.81895958749761E+00  1.71492646559372E+00
 Reduced coordinates (xred)
  5.13186191225985E-01 -1.73205699429265E+00  7.50011574549706E-01
  5.77334416689831E-01 -2.02073283481111E+00  7.50011574549706E-01
  6.41482715273431E-01 -1.44338059378438E+00  7.50011574549706E-01
  5.13186139515711E-01 -2.02073329845531E+00  7.50011574549706E-01
  5.77334386780690E-01 -1.44338082648773E+00  7.50011574549706E-01
  6.41482663563157E-01 -1.73205689794704E+00  7.50011574549706E-01
  6.41481507198217E-02 -5.67299247485290E-07  2.50003858183235E-01
  1.28296449303422E-01  5.77351673727483E-01  2.50003858183235E-01
  1.28296427502289E-01 -2.88676638758563E-01  2.50003858183235E-01
  1.92444726085889E-01  2.88675602268167E-01  2.50003858183235E-01
  1.92444704284755E-01 -5.77352710217879E-01  2.50003858183235E-01
  2.56593002868356E-01 -4.69191148228910E-07  2.50003858183235E-01
  2.56592981067222E-01 -8.66028781677194E-01  2.50003858183235E-01
  3.20741279650822E-01 -2.88676540650464E-01  2.50003858183235E-01
  3.20741257849689E-01 -1.15470485313651E+00  2.50003858183235E-01
  3.84889556433289E-01 -5.77352612109780E-01  2.50003858183235E-01
  3.84889560291467E-01 -1.44338104006625E+00  2.50003858183235E-01
  4.49037858875067E-01 -8.66028799039524E-01  2.50003858183235E-01
  4.49037811414623E-01 -1.73205699605514E+00  2.50003858183235E-01
  5.13186084338912E-01 -1.15470463955798E+00  2.50003858183235E-01
  5.13186139515711E-01 -2.02073329845531E+00  2.50003858183235E-01
  5.77334386780690E-01 -1.44338082648773E+00  2.50003858183235E-01
  6.41482663563157E-01 -1.73205689794704E+00  2.50003858183235E-01
  6.41482024300960E-02  2.88675736863417E-01  2.50003858183235E-01
  1.28296501013696E-01  8.66027977890148E-01  2.50003858183235E-01
  1.28296479212563E-01 -3.34595898635520E-07  2.50003858183235E-01
  1.92444777796163E-01  5.77351906430832E-01  2.50003858183235E-01
  1.92444755995030E-01 -2.88676406055214E-01  2.50003858183235E-01
  2.56593054578630E-01  2.88675834971516E-01  2.50003858183235E-01
  2.56593032777497E-01 -5.77352477514530E-01  2.50003858183235E-01
  3.20741331361097E-01 -2.36487799352005E-07  2.50003858183235E-01
  3.20741309559963E-01 -8.66028548973846E-01  2.50003858183235E-01
  3.84889608143563E-01 -2.88676307947115E-01  2.50003858183235E-01
  3.84889612001741E-01 -1.15470473590359E+00  2.50003858183235E-01
  4.49037884926030E-01 -5.77352379406431E-01  2.50003858183235E-01
  4.49037888784208E-01 -1.44338080736291E+00  2.50003858183235E-01
  5.13186161708497E-01 -8.66028450865746E-01  2.50003858183235E-01
  5.13186191225985E-01 -1.73205699429265E+00  2.50003858183235E-01
  5.77334489809585E-01 -1.15470475326592E+00  2.50003858183235E-01
  5.77334416689831E-01 -2.02073283481111E+00  2.50003858183235E-01
  6.41482715273431E-01 -1.44338059378438E+00  2.50003858183235E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Kinetic energy of ions (ekin) [Ha]=  0.00000000000000E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 For input ecut=  1.800978E+01 best grid ngfft=     180      40      30
       max ecut=  2.210896E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   180   40   30
  Augmented FFT divisions ...................   181   41   30
  FFT algorithm .............................   100
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 379

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 360  75  54
         ecut(hartree)=     60.000   => boxcut(ratio)=   2.24607

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   75.672765 Hartrees makes boxcut=2


 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 Total charge density [el/Bohr^3]
      Maximum=    2.0216E+00  at reduced coord.    0.5806    0.9200    0.2593
      Minimum=    1.6714E-04  at reduced coord.    0.8667    0.8933    0.9444
   Integrated=    1.6400E+02
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  1  -184.59489235206    -1.846E+02 1.130E-01 5.995E+05 3.754E+00 3.754E+00
 scprqt: <Vxc>= -3.0029363E-01 hartree

 dielmt : 15 largest eigenvalues of the hermitian RPA dielectric matrix
  1-5  : 3.29897E+01 1.05390E+01 7.28115E+00 5.81627E+00 4.14237E+00
  6-10 : 3.75749E+00 3.51115E+00 3.38567E+00 3.35319E+00 3.20459E+00
  11-15: 2.98581E+00 2.96979E+00 2.86073E+00 2.71083E+00 2.69757E+00

 dielmt : 5 smallest eigenvalues of the hermitian RPA dielectric matrix
  1-5  : 1.00000E+00 1.00190E+00 1.00191E+00 1.00197E+00 1.00200E+00
 scfeig : fixed PC_residual square =  1.0000E-04
    Note that fixed resid should always be much larger
    than initial PC resid square, still sufficiently
    small to reduce anharmonic effects 

 scfeig : initial PC_residual square =  6.4897E+04

--- !ERROR
src_file: m_newvtr.F90
src_line: 499
mpi_rank: 0
message: |
    
     scfeig : ERROR -
      This value is not good enough to allow
      the computation of the eigenvectors of the SCF cycle.
      It should be better than 1.0d-8 .
      Action : improve the accuracy of your starting wavefunctions.
...


 abi_abort: decision taken to exit ...
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------
