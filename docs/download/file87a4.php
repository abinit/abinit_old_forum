Optimization and tuning options
       -qalias=<suboptions_list>
              Indicates  whether  a  program  contains  certain  categories of
              aliasing to determine whether  certain  optimizations  are  per-
              formed.  <suboptions_list> is a colon-separated list of the fol-
              lowing suboptions:

              aryovrlp | noaryovrlp
                   When enabled the  program  contains  array  assignments  of
                   overlapping or storage-associated arrays.
                   Default: aryovrlp
              intptr | nointptr
                   When enabled, the program contains integer pointer declara-
                   tions.
                   Default: nointptr
              pteovrlp | nopteovrlp
                   When selected, the program contains pointee variables  that
                   refer  to  non-pointee  variables, or two pointee variables
                   that refer to the same storage location.
                   Default: pteovrlp
              std | nostd
                   When selected, the program contains only  standard-conform-
                   ing aliasing.
                   Default: std

              Default:
                   ·  -qalias=aryovrlp:nointptr:pteovrlp:std  for  the  xlf90,
                   xlf90_r, f90, xlf95, xlf95_r, f95, xlf2003,  xlf2003_r  and
                   f2003 invocation commands.
                   ·  -qalias=aryovrlp:intptr:pteovrlp:std for the xlf, xlf_r,
                   f77, and fort77 invocation commands.

       -qarch=<suboption>
              Specifies the general processor architecture for which the  code
              (instructions)  should  be  generated.   In  general, the -qarch
              option allows you to target a specific architecture for the com-
              pilation.   For  any given -qarch setting, the compiler defaults
              to a specific, matching -qtune setting, which can provide  addi-
              tional performance improvements.  The suboptions are:

              auto
                   Automatically detects the specific architecture of the com-
                   piling machine. It assumes that the  execution  environment
                   will be the same as the compilation environment.
              pwr3
                   Produces  an  object that contains instructions that run on
                   the POWER3 hardware platforms.
              pwr4
                   Produces an object that contains instructions that  run  on
                   the POWER4 hardware platforms.
              pwr5
                   Produces  an  object that contains instructions that run on
                   the POWER5 hardware platforms.
              pwr5x
                   Produces an object that contains instructions that  run  on
                   the POWER5+ hardware platforms.
              pwr6
                   Produces  object code containing instructions that will run
                   on the POWER6 hardware platforms running in  POWER6  archi-
                   tected mode.
              pwr6e
                   Produces  object code containing instructions that will run
                   on the POWER6 hardware  platforms  running  in  POWER6  raw
                   mode.
              ppc
                   Produces  an  object that contains instructions that run on
                   any of the 32-bit PowerPC hardware  platforms.  Using  -q64
                   with ppc upgrades the architecture to ppc64.
              ppc64
                   Produces  object  code  that will run on any 64-bit PowerPC
                   hardware  platform.  When  compiled  in  32-bit  mode,  the
                   resulting object code may include instructions that are not
                   recognized or behave differently when run on 32-bit PowerPC
                   platforms.
              ppcgr
                   In  32-bit  mode,  produces object code containing optional
                   graphics instructions for PowerPC hardware platforms.
                   In 64-bit mode, produces object  code  containing  optional
                   graphics instructions that will run on 64-bit PowerPC plat-
                   forms, but not on 32-bit-only platforms.  Using  -q64  with
                   ppcgr upgrades the architecture to ppc64gr.
              ppc64gr
                   Produces  object  code  that will run on any 64-bit PowerPC
                   hardware  platform  that  supports  the  optional  graphics
                   instructions.
              ppc64grsq
                   Produces  object  code  that will run on any 64-bit PowerPC
                   hardware platform that supports the optional  graphics  and
                   square root instructions.
              ppc64v
                   Produces  object  code  that will run on any 64-bit PowerPC
                   hardware  platform  that  supports  the   optional   vector
                   instructions, such as a PowerPC 970.
              ppc970
                   Generates  instructions specific to PowerPC 970 processors.
              rs64b
                   Produces an object that contains instructions that  run  on
                   an RS64II hardware platform.
              rs64c
                   Produces  an  object that contains instructions that run on
                   an RS64III hardware platform.

              Default: -qarch=ppc64grsq

       -qassert={deps|nodeps|itercnt=<n>}
              Provides information about the program to help  fine-tune  opti-
              mizations. Suboptions include:

              deps
                   Loops can contain loop-carried dependencies.
              nodeps
                   No loops contain any loop-carried dependencies.
              itercnt=<n>
                   The iteration count of a typical loop is <n>.

              Default: -qassert=deps

       -qcache=<suboptions_list>
              Describes  the  cache configuration for a specific target execu-
              tion machine, where <suboptions_list> is a colon-separated  list
              of one or more of the following suboptions:

              assoc=<number>
                   Specifies  the  set associativity of the cache, where <num-
                   ber> is one of the following:
                        0         Direct-mapped cache
                        1         Fully associative cache
                        (n > 1)   n-way set associative cache
              auto
                   Automatically detects the specific cache  configuration  of
                   the  compiling machine. It assumes that the execution envi-
                   ronment will be the same as the compilation environment.
              cost=<cycles>
                   Specifies the performance penalty, in CPU cycles, resulting
                   from a cache miss.
              level=<level>
                   Specifies  which level of cache is affected, where level is
                   one of the following::
                        1     Basic cache
                        2     Level-2 cache
                        3     Table Lookaside Buffer (TLB)
                   If a machine has more than one level of cache, use a  sepa-
                   rate -qcache option.
              line=<bytes>
                   Specifies the line size of the cache.
              size=<Kbytes>
                   Specifies the total size of the cache.
              type=<cache_type>
                   The  settings  apply  to the specified type of cache, where
                   <cache_type> is one of the following:
                        C or c = Combined data and instruction cache
                        D or d = Data cache
                        I or i = Instruction cache

              Default:
                   The -qtune setting determines the optimal  default  -qcache
                   settings  for most typical compilations. -O4, -O5, or -qipa
                   must be specified with the -qcache option.

       -qcompact | -qnocompact
              Reduces code size where possible, at the  expense  of  execution
              speed.  Code  size  is  reduced by inhibiting optimizations that
              replicate or expand code inline. This option takes  effect  only
              if -O2 or higher is also used.

              Default: -qnocompact

       -qdirectstorage | -qnodirectstorage
              Informs  the compiler that write-through-enabled or cache-inhib-
              ited storage may be referenced.

              Default: -qnodirectstorage

       -qenablevmx | -qnoenablevmx
              Enables the generation of  vector  instructions  for  processors
              that  support  them. These instructions can offer higher perfor-
              mance when used with algorithmic-intensive tasks such as  multi-
              media applications.
              For  -qenablevmx  to  have effect, the architecture specified by
              the -qarch option must support vector instructions.

              Default: -qenablevmx

       -qessl | -qnoessl
              Specifies that, if either -lessl or -lesslsmp  are  also  speci-
              fied,  then Engineering and Scientific Subroutine Library (ESSL)
              routines should be used in place of some  Fortran  90  intrinsic
              procedures when there is a safe opportunity to do so.

              Default: -qnoessl

       -qfdpr | -qnofdpr
              Collects  information  about programs for use with the IBM Feed-
              back Directed Program  Restructuring  (FDPR)  performance-tuning
              utility.

              Default: -qnofdpr

       -qhot[=<suboption>] | -qnohot
              Specifies  whether  or not to perform high-order transformations
              during optimization. The suboptions are:

              arraypad[=<number>] | noarraypad
                   When <number> is specified, the  compiler  will  pad  every
                   array  in the code. The pad amount must be a positive inte-
                   ger value. Otherwise, the  compiler  will  pad  any  arrays
                   where it infers that there may be a benefit.
              level={0|1}
                   Specifies the level of high-order transformation to perform
                   during compilation.
                   0
                        The compiler  performs  a  subset  of  the  high-order
                        transformations. Some of these include early distribu-
                        tion, loop interchange, and loop tiling, as  examples.
                        Optimization level -O3 implies -qhot=level=0.
                   1
                        At  level=1,  full  high-order  transformation is per-
                        formed. -qhot=level=1 is equivalent to -qhot  and  the
                        compiler   options   that   imply   -qhot  also  imply
                        -qhot=level=1,  unless  -qhot=level=0  is   explicitly
                        specified.
              simd | nosimd
                   Converts certain operations in a loop that apply to succes-
                   sive elements of an array into a vector instruction.   This
                   call  calculates  several  results  at  one  time, which is
                   faster than calculating each result  sequentially.  If  you
                   specify  -qhot=nosimd,  the compiler performs optimizations
                   on loops and arrays, but avoids replacing certain code with
                   vector  instructions.  To enable -qhot=simd, you must spec-
                   ify an architecture that supports vector instructions.
              vector | novector
                   When specified with -qnostrict and -qignerrno, or an  opti-
                   mization level of -O3 or higher (otherwise -qhot=vector has
                   no effect), the compiler converts certain operations  in  a
                   loop  that  apply to successive elements of an array into a
                   call to a routine in the Mathematical Acceleration  Subsys-
                   tem (MASS) library, part of the libxlopt.a library.
                   If  you specify -qhot=novector, the compiler performs opti-
                   mizations on loops and arrays, but avoids replacing certain
                   code with calls to vector library routines.

              Specifying   -qhot   without  suboptions  implies  -qhot=nosimd,
              -qhot=noarraypad,  -qhot=vector  and  -qhot=level=1.  The  -qhot
              option is also implied by -qsmp, -O4 and -O5.

              Default: -qnohot

       -qipa[=<suboptions_list>] | -qnoipa
              Turns  on or customizes a class of optimizations known as inter-
              procedural analysis (IPA). <suboptions_list>  is  a  colon-sepa-
              rated list of the following suboptions:

              clonearch=<arch_name> | noclonearch
                   Specifies  the architectures for which multiple versions of
                   the same instruction set are produced, where <arch_name> is
                   a comma-separated list of architecture names. Use this sub-
                   option if you require optimal performance on multiple  dif-
                   fering  machines running the same copy of your application.
              cloneproc=<function_name> | nocloneproc=<function_name>
                   Specifies the name of the functions to clone for the archi-
                   tectures specified by the clonearch suboption, where <func-
                   tion_name> is a comma-separated list of function names.
              exits=<procedures>
                   Specifies names of functions which represent program exits.
                   <procedures> is a comma-separated list of procedures.
              inline[=<suboption>]
                   Specifying  ’inline’  with  no  suboption  asserts that all
                   appropriate procedures will be inlined. <suboption> can  be
                   one of the following:
                   auto|noauto
                        Enables or disables automatic function inlining by the
                        high-level optimizer.  When  -qipa=inline=auto  is  in
                        effect,  the compiler considers all functions that are
                        under the maximum size limit (see below) for inlining.
                        When -qipa=inline=noauto is in effect, only procedures
                        listed in the <procedures>  suboption  are  considered
                        for inlining.
                   <procedures>
                        Specifies  a  comma-separated  list  of  procedures to
                        attempt to inline.
                   limit=<num>
                        Specifies a limit on the size of  a  calling  function
                        after   inlining.   This   only   takes   effect  when
                        inline=auto is on. If you do not specify a  value  for
                        <num>, <num> is 8192 by default.
                   threshold=<num>
                        Specifies  the  upper  size  limit  on  procedures  to
                        inline. This only takes effect when inline=auto is on.
                        If you do not specify a value for <num>, <num> is 1024
                        by default.
                   Default: auto
              noinline[=<procedures>]
                   Specifies a comma-separated list of  procedures  which  are
                   not  to  be  inlined.  Specifying  noinline without <proce-
                   dures>, asserts that no procedures are to be inlined.
              isolated=<procedures>
                   Specifies a comma-separated list of procedures that are not
                   compiled with -qipa and do not directly refer to any global
                   variable.
              level=<level>
                   Determines the amount of IPA analysis and optimization per-
                   formed, where <level> can be equal to:
                   0
                        Performs  only  minimal  interprocedural  analysis and
                        optimization.
                   1
                        Turns on inlining, limited alias analysis, and limited
                        call-site tailoring.
                   2
                        Full interprocedural data flow and alias analysis.
                   Default: 1
              list[={<file_name>|short|long}]
                   Specifies  an  output  listing  file  name  during the link
                   phase. The default name is "a.lst".  Specifying  ’long’  or
                   the  listing  file to determine which listing sections will
                   be included.
                   Default: short
              lowfreq=<procedures>
                   Specifies a comma-separated list  of  procedures  that  are
                   likely  to  be  called  infrequently during the course of a
                   typical program run.
              missing={unknown|safe|isolated|pure}
                   Specifies the default assumption for  procedures  not  com-
                   piled with -qipa.
                   unknown
                        Greatly  restricts the amount of interprocedural opti-
                        mization for calls to unknown functions.
                   safe
                        Functions which do not indirectly call a visible  (not
                        missing)  function either through direct call or func-
                        tion pointer.
                   isolated
                        Functions which do not directly reference global vari-
                        ables accessible to visible functions.
                   pure
                        Functions which are safe and isolated and which do not
                        indirectly alter storage accessible to functions.
                   Default: missing=unknown
              object | noobject
                   Specifies whether to include standard object  code  in  the
                   object   files.  Specifying  ’noobject’  can  substantially
                   reduce overall compile time by not generating  object  code
                   during the first IPA phase.
              partition={small|medium|large}
                   Specifies  the  size  of program sections that are analyzed
                   together. Larger partitions may produce better analysis but
                   require more storage.
                   Default: partition=medium
                   pure=<procedures>
                        Specifies  a  comma-separated  list  of procedures not
                        compiled with -qipa and that are  "isolated",  "safe",
                        and do not modify any data objects that are visible to
                        the caller.
                   safe=<procedures>
                        Specifies a comma-separated  list  of  procedures  not
                        compiled  with  -qipa  and  that do not call any other
                        part of the program.
                   stdexits | nostdexits
                        Specifies that compiler-defined exit routines  can  be
                        optimized  as  with  the "exits" suboption. The proce-
                        dures are abort, exit, _exit, and _assert.
                        Default: nostdexits
                   threads[=<suboption>] | nothreads
                        Runs portions of the IPA optimization  process  during
                        pass  2  in  parallel  threads, which can speed up the
                        linking process on  multi-processor  systems.  <subop-
                        tion> can be one of the following:
                        auto | noauto
                             When  auto  is  in effect, the compiler selects a
                             number of threads heuristically based on  machine
                             load.  When  noauto  is  in  effect, the compiler
                             spawns one thread per machine processor.
                        <number>
                             Instructs the compiler to use a  specific  number
                             of  threads. <number> can be any integer value in
                             the range of 1 to  32767.  However,  <number>  is
                             effectively  limited  to the number of processors
                             available on your system.
                        Specifying  threads   with   no   suboptions   implies
                        threads=auto.
                        Default: -qipa=threads
                   unknown=<procedures>
                        Specifies  a  comma-separated  list of procedures that
                        are not compiled with -qipa and that may update global
                        variables  and dummy arguments and call other parts of
                        the program compiled with -qipa.
                   <file_name>
                        Specifies the name of a file that  contains  suboption
                        information in a special format.

                   Regular expressions are supported when specifying procedure
                   names for these suboptions:
                   cloneproc, nocloneproc, exits, inline, noinline,  isolated,
                   lowfreq, pure, safe, unknown.

                   Default:
                        · -qnoipa
                        ·   -qipa=inline=auto:level=1:missing=unknown:  parti-
                        tion=medium:threads=auto when -O4 is in effect.
                        ·  -qipa=inline=auto:level=2:missing=unknown:   parti-
                        tion=medium:threads=auto when -O5 is in effect.
                        ·   -qipa=inline=auto:level=0:missing=unknown:  parti-
                        tion=medium:threads=auto when -qpdf1 or -qpdf2  is  in
                        effect.

       -qlibansi | -qnolibansi
              Assumes  that  all  functions with the name of an ANSI C defined
              library function are, in fact, the library functions.

              Default: -qnolibansi

       -qlibposix | -qnolibposix
              Assumes that all functions with the name of an IEEE  1003.1-2001
              (POSIX)  defined library function are, in fact, the system func-
              tions.

              Default: -qnolibposix

       -qmaxmem=<size>
              Limits the amount of memory  used  by  certain  memory-intensive
              optimizations  to <size> kilobytes. When <size> is -1, the opti-
              mizer will use as much memory as needed.

              Default:
                   · -qmaxmem=8192 when -O2 level optimization is set.
                   · -qmaxmem=-1 when -O3 level  or  greater  optimization  is
                   set.

       -qminimaltoc | -qnominimaltoc
              Avoids  Table  of  Contents (TOC) overflow conditions by placing
              TOC entries into a separate data section for each  object  file.
              By  default,  the  compiler will allocate at least one TOC entry
              for each unique non-automatic variable reference  in  your  pro-
              gram.

              Default: -qnominimaltoc

       -O[<level>]
              Optimizes code at a choice of levels during compilation. This is
              equivalent to -qoptimize[=<level>]. <level> can be:

              0
                   Performs only quick local optimizations  such  as  constant
                   folding and elimination of local common subexpressions.
              2
                   Performs optimizations that the compiler developers consid-
                   ered the best combination for compilation speed and runtime
                   performance.  The  optimizations  may  change  from product
                   release to release.
              3
                   Performs some memory and compile-time  intensive  optimiza-
                   tions  in addition to those executed with -O2. The -O3 spe-
                   cific optimizations have the potential to alter the  seman-
                   tics  of a program. The compiler guards against these opti-
                   mizations at -O2 and the option -qstrict is provided at -O3
                   to turn off these aggressive optimizations.
                   Specifying -O3 implies -qhot=level=0.
              4
                   This option is the same as -O3, but also:
                     ·  sets the -qarch and -qtune options to the architecture
                     of the compiling machine.
                     · sets the -qcache option most appropriate to the charac-
                     teristics of the compiling machine.
              5
                   Equivalent to -O4 -qipa=level=2.

              Specifying -O with no <level> is equivalent to specifying -O2.

              Default: -O0

       -qoptimize[=<level>] | -qnooptimize
              The long form of the -O option. -qoptimize=<level> is equivalent
              to -O<level>. See the -O option.

              Default: -qnooptimize

       -p[g]  Sets up the object files produced by the compiler for profiling.
              -pg is like -p, but it produces more extensive statistics.

       -qpdf1[=pdfname=<file_path] | -qnopdf1
              Tunes  optimizations  through  profile-directed  feedback (PDF),
              where results from sample program execution are used to  improve
              optimization  near  conditional  branches and in frequently exe-
              cuted code sections.
              Used with a minimum optimization level of -O2,  -qpdf1  produces
              an  object  that  is  instrumented  to collect runtime execution
              information. This is phase 1 of  the  profile-directed  feedback
              optimization process.

              pdfname=<file_path>
                   Specifies  the  location  and name of the profile data file
                   containing the PDF profiling information.
                   Default:
                     If you do not specify <file_path>, the default file  name
                     is  ._pdf  and  the  file is saved in the current working
                     directory, or in the directory named by the PDFDIR  envi-
                     ronment variable, if it is set.

              Default: -qnopdf1

       -qpdf2[=pdfname=<file_path>] | -qnopdf2
              Tunes  optimizations  through  profile-directed  feedback (PDF),
              where results from sample program execution are used to  improve
              optimization  near  conditional  branches and in frequently exe-
              cuted code sections.
              Used with a minimum optimization  level  of  -O2,  -qpdf2  tunes
              application  performance  using  the data generated by running a
              program compiled with -qpdf1. This is phase 2  of  the  profile-
              directed feedback optimization process.

              pdfname=<file_path>
                   Specifies  the  location  and name of the profile data file
                   containing the PDF profiling information.
                   Default:
                     If you do not specify <file_path>, the default file  name
                     is  ._pdf  and  the  file is saved in the current working
                     directory, or in the directory named by the PDFDIR  envi-
                     ronment variable, if it is set.

              Default: -qnopdf2

       -qprefetch | -qnoprefetch
              Enables  generation of prefetching instructions such as dcbt and
              dcbz in compiled code.

              Default: -qprefetch

       -Q[<suboption>]
              Specifies whether  Fortran  90  or  Fortran  95  procedures  are
              inlined and/or the names of particular procedures that should or
              should not be inlined.

              This option can take the form:

              -Q
                   Attempts to inline all appropriate functions with  20  exe-
                   cutable  source statements or fewer, subject to the setting
                   of any of the suboptions to the -Q option. If -Q is  speci-
                   fied last, all functions are inlined.
              -Q!
                   Does not inline any functions. If -Q! is specified last, no
                   functions are inlined.
              -Q-<names>
                   Does not inline functions listed in <names>, where  <names>
                   is  a colon-separated list. All other appropriate functions
                   are inlined. The option implies -Q.
              -Q+<names>
                   Attempts to inline the functions listed in  <names>,  where
                   <names>  is  a  colon-separated list. All other appropriate
                   functions are inlined.

              Default: -Q!

       -qshowpdf | -qnoshowpdf
              Used with -qpdf1 and a minimum optimization level of -O2 to  add
              additional call and block count profiling information to an exe-
              cutable.

              Default: -qnoshowpdf

       -qsmallstack[=<suboption>] | -qnosmallstack
              Specifies that the compiler will minimize stack usage where pos-
              sible. This option can take the form:

              -qsmallstack
                   Enables only general small stack transformations.
              -qsmallstack=dynlenonheap
                   Asserts  that  automatic  variables  which are dynamically-
                   sized are allocated from the heap and enables general small
                   stack transformations.
              -qsmallstack=nodynlenonheap
                   Disables dynamic-length variable allocation.
              -qnosmallstack
                   Disables only the general small stack transformations.

              Default: -qnosmallstack

       -qsmp[=<suboptions_list>] | -qnosmp
              Enables  parallelization of program code. <suboptions_list> is a
              colon-separated list of one or more of the following suboptions:

              auto | noauto
                   Enables  automatic  parallelization  and  optimization.  If
                   noauto is specified, automatic parallelization  of  program
                   code is disabled; only program code explicitly parallelized
                   with OpenMP directives is optimized.
                   Default: auto
              nested_par | nonested_par
                   If nested_par is specified,  prescriptive  nested  parallel
                   constructs are parallelized by the compiler.
                   Default: nonested_par
              omp | noomp
                   Enables  strict OpenMP compliance. Only OpenMP paralleliza-
                   tion pragmas are recognized.
                   Default: noomp
              opt | noopt
                   Enables automatic parallelization but disables optimization
                   of  parallelized program code. If noopt is specified, opti-
                   mization of parallelized program code is disabled.
                   Default: opt
              rec_locks | norec_locks
                   Specifies whether to use recursive locks.
                   Default: norec_locks
              schedule=<type>
                   Specifies what kinds of scheduling algorithms and  chunking
                   are  used  for loops to which no other scheduling algorithm
                   has been explicitly assigned in the source code. <type> can
                   be:
                     · affinity[=<num>]
                     · dynamic[=<num>]
                     · guided[=<num>]
                     · runtime
                     · static[=<num>],
                   where <num> is the number of loop iterations.
                   Default: schedule=runtime
              stackcheck | nostackcheck
                   Causes  the  compiler  to check for stack overflow by slave
                   threads at run time, and issue a warning if  the  remaining
                   stack  size  is  less than the number of bytes specified by
                   the stackcheck option of the  XLSMPOPTS  environment  vari-
                   able.  This  suboption  is intended for debugging purposes,
                   and only takes effect  when  XLSMPOPTS=stackcheck  is  also
                   set.
                   Default: nostackcheck
              threshold[=<num>]
                   When  -qsmp=auto is in effect, controls the amount of auto-
                   matic loop parallelization that occurs. The value of  <num>
                   represents the lower limit allowed for parallelization of a
                   loop, based on the level of "work" present in a loop.
                   Default:
                     <num> must be a positive integer of 0 or greater. If  you
                     specify  threshold  with no suboption, the program uses a
                     default value of 100.

              Specifying -qsmp without suboptions is equivalent to
              -qsmp=auto:noomp:opt:norec_locks:nonested_par:
              schedule=runtime:nostackcheck:threshold=100

              Default: -qnosmp

       -qstacktemp=<num>
              Determines where to allocate applicable compiler temporaries  at
              run time. The allocation depends on the value of <num>. The val-
              ues are:

              0
                   Indicates that the compiler will decide whether to allocate
                   the  applicable  compiler  temporaries  on  the heap or the
                   stack.
              -1
                   Indicates that applicable compiler temporaries  are  to  be
                   always  allocated on the stack. This is the best-performing
                   setting but uses the most amount of stack storage.
              (1 or greater)
                   Indicates that applicable compiler  temporaries  less  than
                   this  value  (bytes)  should  be allocated on the stack and
                   those greater than or equal to this value should  be  allo-
                   cated on the heap.

              Default: -qstacktemp=0

       -qstrict | -qnostrict
              Turns  off  aggressive optimizations which have the potential to
              alter   the   semantics   of   your   program.   -qstrict   sets
              -qfloat=nofltint:norsqrt.  -qnostrict  sets  -qfloat=rsqrt. This
              option is only valid with -O2 or higher optimization levels.

              Default:
                   · -qnostrict at -O3 or higher.
                   · -qstrict otherwise.

       -qstrict_induction | -qnostrict_induction
              Turns off loop induction variable optimizations  that  have  the
              potential to alter the semantics of your program.

              Default:
                   · -qnostrict_induction at -O2 or higher.
                   · -qstrict_induction otherwise.

       -qtune=<suboption>
              Specifies  the architecture system for which the executable pro-
              gram is optimized.
              <suboption> must be one of the following:

              auto
                   Generates object code optimized for the  hardware  platform
                   on which the program is compiled.
              balanced
                   Optimizations  are  tuned across a selected range of recent
                   hardware.
              ppc970
                   Generates instructions specific  to  PowerPC  970  hardware
                   platforms.
              pwr3
                   Generates  object  code  optimized  for the POWER3 hardware
                   platforms.
              pwr4
                   Generates object code optimized  for  the  POWER4  hardware
                   platforms.
              pwr5
                   Generates  object  code  optimized  for the POWER5 hardware
                   platforms.
              pwr6
                   Generates object code optimized  for  the  POWER6  hardware
                   platforms.
              rs64b
                   Generates object code optimized for the RS64II processor.
              rs64c
                   Generates  object code optimized for the RS64III processor.

              Default: -qtune=balanced

       -qunroll[={auto|yes}] | -qnounroll
              Unrolls inner loops in the program. This can help  improve  pro-
              gram performance.

              auto
                   Instructs the compiler to perform basic loop unrolling.
              yes
                   Instructs the compiler to search for more opportunities for
                   loop unrolling than that performed with auto.  In  general,
                   this  suboption  is more likely to increase compile time or
                   program size than auto processing, but it may also  improve
                   your application’s performance.

              Default:
                   -qunroll=auto  if  -qunroll is not specified on the command
                   line.

       -qunwind | -qnounwind
              Informs the compiler that the stack can be unwound while a  rou-
              tine  in  the  compilation  is active. Specifying -qnounwind can
              improve the optimization  of  non-volatile  register  saves  and
              restores.

              Default: -qunwind

       -qzerosize | -qnozerosize
              Improves performance of some programs by preventing checking for
              zero-sized character strings and arrays.

              Default:
                   · -qzerosize for the xlf90, xlf90_r, f90,  xlf95,  xlf95_r,
                   f95, xlf2003, xlf2003_r and f2003 invocation commands.
                   ·  -qnozerosize  for the xlf, xlf_r, f77 and fort77 invoca-
                   tion commands.

Linking options
       -qbigdata | -qnobigdata
              Allows initialized data to be larger than 16MB in 32-bit mode.

              Default: -qnobigdata

       -L<dir>
              Searches the path directory for library files specified  by  the
              -l<key> option.

              Default:
                   The default is to search only the standard directories.

       -l<key>
              Searches  the  file  lib<key>.so and then lib<key>.a for dynamic
              linking, or only lib<key>.a for static linking.

              Default:
                   The default is to search only some of the compiler  runtime
                   libraries.

Portability and migration options
       -qalign=<suboption>
              Specifies the alignment of data objects in storage to avoid per-
              formance problems with misaligned data. Suboptions include:

              4k | no4k
                   Specifies whether to align large data objects  on  page  (4
                   KB)  boundaries, for improved performance with data-striped
                   I/O.
              bindc=<suboption>
                   Specifies that the alignment and padding for an XL  Fortran
                   derived  type with the BIND(C) attribute is compatible with
                   a C struct type that is compiled with the corresponding  XL
                   C alignment option. The compatible alignment options are:
                     · -qalign=bindc=bit_packed
                     (The corresponding XL C option is -qalign=bit_packed.)
                     · -qalign=bindc=linuxppc
                     (The corresponding XL C option is -qalign=linuxppc.)
              struct=natural
                   Objects of a derived type declared using a STRUCTURE decla-
                   ration are stored such that each component of each  element
                   is stored on its natural alignment boundary, unless storage
                   association requires otherwise.
              struct=packed
                   Objects of a derived type declared using a STRUCTURE decla-
                   ration  are  stored with no space between components, other
                   than any padding represented by %FILL components.
              struct=port
                   Storage padding is the same  as  described  above  for  the
                   struct=natural suboption, except that the alignment of com-
                   ponents of type complex is the same  as  the  alignment  of
                   components  of  type real of the same kind. The padding for
                   an object that  is  immediately  followed  by  a  union  is
                   inserted  at  the  beginning of the first map component for
                   each map in that union.

              Default: -qalign=no4k:struct=natural:bindc=linuxppc

       -qctyplss[={arg|noarg}] | -qnoctyplss
              Specifies whether character  constant  expressions  are  allowed
              wherever typeless constants may be used.

              arg
                   This  suboption provides the same behavior as the -qctyplss
                   option with no suboptions, with the  exception  that  if  a
                   Hollerith  constant  is  used  as an actual argument, it is
                   passed to the procedure as if it  were  an  integer  actual
                   argument.
              noarg
                   This  suboption provides the same behavior as the -qctyplss
                   option with no suboptions.

              Default: -qnoctyplss

       -qddim | -qnoddim
              Specifies that the bounds of  pointee  arrays  are  re-evaluated
              each  time  the  arrays are referenced and removes some restric-
              tions on the bounds expressions for pointee arrays.

              Default: -qnoddim

       -qdescriptor[={v1|v2}]
              Specifies which descriptor format the compiler will use for non-
              object-oriented compiler entities. The possible choices are:

              v1
                   All  object  code will use the version 1 descriptor format,
                   where possible, for backwards compatibility with V10.1  and
                   older XL Fortran object code.
              v2
                   All  object  code  will use the version 2 descriptor format
                   for all relevant code constructs.

              Default: -qdescriptor=v1

       -qescape | -qnoescape
              Specifies whether the backslash is treated as an escape  charac-
              ter  in  character strings, Hollerith constants, H edit descrip-
              tors, and character string edit descriptors.

              Default: -qescape

       -qextern=<procedures>
              Allows user-written procedures to be called instead of  XL  For-
              tran  intrinsics.  <procedures>  is a list of one or more colon-
              separated procedure names. The procedure names are treated as if
              they  appear  in  an EXTERNAL statement in each compilation unit
              being compiled.

       -qextname[=<names>] | -qnoextname
              Adds a trailing underscore to the names of the  global  entities
              (external names) specified by <names>, a colon-separated list of
              one or more names of global entities. If no names are specified,
              -qextname  adds  an  underscore to the names of all global enti-
              ties, except for main program names.

              Default: -qnoextname

       -qlog4 | -qnolog4
              Specifies whether the result of a logical operation with logical
              operands is a LOGICAL(4) or is a LOGICAL with the maximum length
              of the operands.

              Default: -qnolog4

       -qmodule=mangle81
              Provides compatibility for module files that are  compiled  with
              Version  11.1 compiler to be linked to an existing set of object
              files compiled with the Version 8.1 compiler. The naming conven-
              tion is not compatible with that used by version 8.1 of the com-
              piler.

       -qport=<suboption> | -qnoport
              Increases flexibility when porting programs to XL Fortran,  pro-
              viding a number of options to accommodate other Fortran language
              extensions. Suboptions include:

              clogicals | noclogicals
                   If you specify this option, the compiler  treats  all  non-
                   zero integers that are used in logical expressions as TRUE.
                   You must specify  -qintlog  for  -qport=clogicals  to  take
                   effect.
                   Default: noclogicals
              hexint | nohexint
                   If  you  specify this option, typeless constant hexadecimal
                   strings are converted to integers  when  passed  as  actual
                   arguments  to the int intrinsic function. Typeless constant
                   hexadecimal strings not passed as actual arguments  to  INT
                   remain unaffected.
                   Default: nohexint
              mod |nomod
                   Specifying  this option relaxes existing constraints on the
                   MOD intrinsic function, allowing two arguments of the  same
                   data  type  parameter  to be of different kind type parame-
                   ters. The result will be of the same type as the  argument,
                   but with the larger kind type parameter value.
                   Default: nomod
              nullarg | nonullarg
                   For an external or internal procedure reference, specifying
                   this option causes the compiler to treat an empty argument,
                   which  is  delimited by a left parenthesis and a comma, two
                   commas, or a comma and a right parenthesis, as a null argu-
                   ment.  This suboption has no effect if the argument list is
                   empty.
                   Default: nonullarg
              sce | nosce
                   By default, the compiler performs short circuit  evaluation
                   in  selected  logical  expressions  using XL Fortran rules.
                   Specifying sce allows the compiler to  use  non-XL  Fortran
                   rules.  The  compiler will perform short circuit evaluation
                   if the current rules allow it.
                   Default: nosce
              typestmt | notypestmt
                   The TYPE statement, which behaves in a  manner  similar  to
                   the  PRINT  statement, is supported whenever this option is
                   specified.
                   Default: notypestmt
              typlssarg | notyplssarg
                   Converts all typeless constants to default integers if  the
                   constants  are  actual  arguments to an intrinsic procedure
                   whose associated dummy arguments are of integer type. Dummy
                   arguments associated with typeless actual arguments of non-
                   integer type remain unaffected by this option.
                   Default: notyplssarg

              Default: -qnoport

       -qswapomp | -qnoswapomp
              Specifies that the compiler  should  reorganize  and  substitute
              OpenMP routines in XL Fortran programs.

              Default: -qswapomp

       -qxflag=oldtab
              For  fixed source form programs, interprets a tab incolumns 1 to
              5 as a single character.

Compiler customization options
       -qalias_size=<bytes>
              Specifies the initial size (in bytes)  of  the  aliasing  table.
              This option has effect only when optimization is enabled.

       -B[<prefix>]
              Determines substitute path names for programs used during compi-
              lation, such as the compiler,  assembler,  linkage  editor,  and
              preprocessor,  where <prefix> can be any program name recognized
              by the -t compiler option. The optional <prefix> defines part of
              a  path  name  to the new programs. The -t parameter, <program>,
              specifies the program to which the <prefix> is to  be  appended.
              When  specifying  <prefix>,  there must be a slash (/) after the
              folder name.

       -F[<config_file>][:<stanza>]
              Names an alternative configuration file (.cfg) for the compiler.
              <config_file>  is  the  name  of  a compiler configuration file.
              <stanza> is the name of the command used to invoke the compiler.
              This  directs  the compiler to use the entries under <stanza> in
              the <config_file> to set up the compiler environment.  At  least
              one of the arguments must be supplied.

       -NS<bytes>
              Specifies  the size of internal program storage areas, in bytes.

              Default: -NS512

       -qspillsize=<bytes>
              This is the long form of the -NS option. Refer to -NS  for  more
              information.

       -t<programs_list>
              Applies  the prefix from the -B option to the specified programs
              in <programs_list>. <programs_list> is a chain (i.e:  -tbcI)  of
              one or more of the following:

              a = Assembler
              b = Low-level optimizer
              c = Compiler front end
              d = Disassembler
              F = C preprocessor
              I = High-level optimizer - compile step
              l = Linker
              z = Binder

       -W<program>,<options_list>
              Gives  the  specified  option(s)  to the compiler program, <pro-
              gram>. <options_list> is a comma-separated list of one  or  more
              options. <program> can be one of the following:

              a = Assembler
              b = Low-level optimizer
              c = Compiler front end
              d = Disassembler
              F = C preprocessor
              h = Array language optimizer
              I = High-level optimizer - compile step
              l = Linker
              z = Binder


SEE ALSO
       showpdf(1), mergepdf(1), resetpdf(1), cleanpdf(1).

       For more information, refer to the following Web sites:
       http://www.ibm.com/software/awdtools/fortran/xlfortran/library/
       http://www.ibm.com/software/awdtools/fortran/xlfortran/support/


COPYRIGHT
       Licensed Materials - Property of IBM.

       IBM XL Fortran Advanced Edition for Linux, V11.1.

       5724-S74

       Copyright IBM Corp. 1991, 2007. All Rights Reserved.

       IBM,  POWER3,  POWER4,  POWER5,  POWER5+,  POWER6,  PowerPC and SAA are
       trademarks or registered trademarks of International Business  Machines
       Corporation in the United States, other countries, or both.

       Linux is a registered trademark of Linus Torvalds in the United States,
       other countries, or both.

       Windows is a trademarks of Microsoft Corporation in the United  States,
       other countries, or both.

       US  Government Users Restricted Rights - Use, duplication or disclosure
       restricted by GSA ADP Schedule Contract with IBM Corp.



IBM                                  2007                               xlf(1)
configure:14010: $? = 249
configure:13999: xlf -qversion >&5
IBM XL Fortran Advanced Edition for Linux, V11.1
Version: 11.01.0000.0004
configure:14010: $? = 0
configure:14019: checking whether we are using the GNU Fortran compiler
configure:14032: xlf -c   conftest.F >&5
"conftest.F", line 3.15: 1515-019 (S) Syntax is incorrect.
** main   === End of Compilation 1 ===
1501-511  Compilation failed for file conftest.F.
configure:14032: $? = 1
configure: failed program was:
|       program main
| #ifndef __GNUC__
|        choke me
| #endif
| 
|       end
configure:14041: result: no
configure:14047: checking whether xlf accepts -g
configure:14058: xlf -c -g  conftest.f >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.f.
configure:14058: $? = 0
configure:14066: result: yes
configure:14158: checking which type of Fortran compiler we have
configure:14517: result: ibm 11.1
configure:14530: checking fortran 90 modules extension
configure:14557: xlf -c -g  conftest.f >&5
** conftest_module   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.f.
configure:14557: $? = 0
configure:14580: result: mod
configure:14595: checking for Fortran flag to compile .F90 files
configure:14611: xlf -c -g  conftest.F90 >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:14611: $? = 0
configure:14620: result: none
configure:14656: determining Fortran module case
configure:14670: xlf -c -g  conftest.F90 >&5
** conftest   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:14670: $? = 0
configure:14694: checking whether Fortran modules are upper-case
configure:14696: result: no
configure:14714: checking how to get verbose linking output from xlf
configure:14724: xlf -c   conftest.F90 >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:14724: $? = 0
configure:14742: xlf -o conftest -v conftest.F90
exec: export(export,XL_CONFIG=/etc/opt/ibmcmp/xlf/11.1/xlf.cfg:xlf,NULL) 
exec: export(export,XL_DIS=/opt/ibmcmp/xlf/11.1/exe/dis -o "conftest" "conftest.o",NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/cpp(/opt/ibmcmp/xlf/11.1/exe/cpp,conftest.F90,/tmp/F815712ontSvA,-C,-I/opt/ibmcmp/xlf/11.1/include,NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/xlfentry(/opt/ibmcmp/xlf/11.1/exe/xlfentry,/tmp/F815712ontSvA,/tmp/F815712WGWfYN,/tmp/F815712WGWfYNF.lst,xlfsmsg.cat,xlfmsg.cat,conftest.F90,XLF90(noautodealloc,nosignedzero,oldpad),FREE(f90),XLF2003(nopolymorphic,nobozlitargs,nostopexcept,novolatile,noautorealloc,oldnaninf),32,GNU_VERSION(4.1.2),OSVAR(sles.10.0),WSTREAMS(/tmp/F815712qWYCknh1,/tmp/F815712qWYCknb1,/tmp/F815712qWYCkns1),DEFMSG(/opt/ibmcmp/xlf/11.1/msg/en_US),-I/opt/ibmcmp/xlf/11.1/include,NULL) 
** main   === End of Compilation 1 ===
unlink: /tmp/F815712ontSvA
exec: export(export,XL_FRONTEND=/opt/ibmcmp/xlf/11.1/exe/xlfentry,NULL) 
exec: export(export,XL_ASTI=/opt/ibmcmp/xlf/11.1/exe/xlfhot,NULL) 
exec: export(export,XL_BACKEND=/opt/ibmcmp/xlf/11.1/exe/xlfcode,NULL) 
exec: export(export,XL_LINKER=/usr/bin/ld,NULL) 
exec: export(export,XL_BOLT=/opt/ibmcmp/xlf/11.1/exe/bolt,NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/xlfhot(/opt/ibmcmp/xlf/11.1/exe/xlfhot,/tmp/F815712qWYCknh1,/tmp/F815712qWYCknh2,/tmp/F815712qWYCknb1,/tmp/F815712qWYCknb2,/tmp/F815712qWYCkns1,/tmp/F815712qWYCkns2,/tmp/F815712WGWfYN,/tmp/F815712WGWfYNA.lst,NULL) 
exec: export(export,XL_FRONTEND=/opt/ibmcmp/xlf/11.1/exe/xlfentry,NULL) 
exec: export(export,XL_ASTI=/opt/ibmcmp/xlf/11.1/exe/xlfhot,NULL) 
exec: export(export,XL_BACKEND=/opt/ibmcmp/xlf/11.1/exe/xlfcode,NULL) 
exec: export(export,XL_LINKER=/usr/bin/ld,NULL) 
exec: export(export,XL_BOLT=/opt/ibmcmp/xlf/11.1/exe/bolt,NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/xlfcode(/opt/ibmcmp/xlf/11.1/exe/xlfcode,/tmp/F815712qWYCknh2,/tmp/F815712qWYCknb2,conftest.o,/tmp/F815712WGWfYNB.lst,/tmp/F815712qWYCkns2,NULL) 
1501-510  Compilation successful for file conftest.F90.
exec: /usr/bin/ld(/usr/bin/ld,--eh-frame-hdr,-Qy,-melf32ppclinux,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/crt1.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/crti.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/crtbegin.o,-L/opt/ibmcmp/xlsmp/1.7/lib,-L/opt/ibmcmp/xlmass/4.4/lib,-L/opt/ibmcmp/xlf/11.1/lib,-R/opt/ibmcmp/lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib,-L/lib/../lib,-L/usr/lib/../lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../..,-o,conftest,conftest.o,-dynamic-linker,/lib/ld.so.1,-lxlf90,-lxlopt,-lxlomp_ser,-lxl,-lxlfmath,-ldl,-lrt,-lpthread,-lm,-lc,-lgcc_eh,-lc,-lgcc,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/crtsavres.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/crtend.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/crtn.o,NULL) 
unlink: conftest.o
configure:14808: result: -v
configure:14810: checking for Fortran libraries of xlf
configure:14833: xlf -o conftest -v conftest.F90
exec: export(export,XL_CONFIG=/etc/opt/ibmcmp/xlf/11.1/xlf.cfg:xlf,NULL) 
exec: export(export,XL_DIS=/opt/ibmcmp/xlf/11.1/exe/dis -o "conftest" "conftest.o",NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/cpp(/opt/ibmcmp/xlf/11.1/exe/cpp,conftest.F90,/tmp/F815735sGf3dQ,-C,-I/opt/ibmcmp/xlf/11.1/include,NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/xlfentry(/opt/ibmcmp/xlf/11.1/exe/xlfentry,/tmp/F815735sGf3dQ,/tmp/F815735HcqYa9,/tmp/F815735HcqYa9F.lst,xlfsmsg.cat,xlfmsg.cat,conftest.F90,XLF90(noautodealloc,nosignedzero,oldpad),FREE(f90),XLF2003(nopolymorphic,nobozlitargs,nostopexcept,novolatile,noautorealloc,oldnaninf),32,GNU_VERSION(4.1.2),OSVAR(sles.10.0),WSTREAMS(/tmp/F815735TZOHbvh1,/tmp/F815735TZOHbvb1,/tmp/F815735TZOHbvs1),DEFMSG(/opt/ibmcmp/xlf/11.1/msg/en_US),-I/opt/ibmcmp/xlf/11.1/include,NULL) 
** main   === End of Compilation 1 ===
unlink: /tmp/F815735sGf3dQ
exec: export(export,XL_FRONTEND=/opt/ibmcmp/xlf/11.1/exe/xlfentry,NULL) 
exec: export(export,XL_ASTI=/opt/ibmcmp/xlf/11.1/exe/xlfhot,NULL) 
exec: export(export,XL_BACKEND=/opt/ibmcmp/xlf/11.1/exe/xlfcode,NULL) 
exec: export(export,XL_LINKER=/usr/bin/ld,NULL) 
exec: export(export,XL_BOLT=/opt/ibmcmp/xlf/11.1/exe/bolt,NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/xlfhot(/opt/ibmcmp/xlf/11.1/exe/xlfhot,/tmp/F815735TZOHbvh1,/tmp/F815735TZOHbvh2,/tmp/F815735TZOHbvb1,/tmp/F815735TZOHbvb2,/tmp/F815735TZOHbvs1,/tmp/F815735TZOHbvs2,/tmp/F815735HcqYa9,/tmp/F815735HcqYa9A.lst,NULL) 
exec: export(export,XL_FRONTEND=/opt/ibmcmp/xlf/11.1/exe/xlfentry,NULL) 
exec: export(export,XL_ASTI=/opt/ibmcmp/xlf/11.1/exe/xlfhot,NULL) 
exec: export(export,XL_BACKEND=/opt/ibmcmp/xlf/11.1/exe/xlfcode,NULL) 
exec: export(export,XL_LINKER=/usr/bin/ld,NULL) 
exec: export(export,XL_BOLT=/opt/ibmcmp/xlf/11.1/exe/bolt,NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/xlfcode(/opt/ibmcmp/xlf/11.1/exe/xlfcode,/tmp/F815735TZOHbvh2,/tmp/F815735TZOHbvb2,conftest.o,/tmp/F815735HcqYa9B.lst,/tmp/F815735TZOHbvs2,NULL) 
1501-510  Compilation successful for file conftest.F90.
exec: /usr/bin/ld(/usr/bin/ld,--eh-frame-hdr,-Qy,-melf32ppclinux,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/crt1.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/crti.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/crtbegin.o,-L/opt/ibmcmp/xlsmp/1.7/lib,-L/opt/ibmcmp/xlmass/4.4/lib,-L/opt/ibmcmp/xlf/11.1/lib,-R/opt/ibmcmp/lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib,-L/lib/../lib,-L/usr/lib/../lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../..,-o,conftest,conftest.o,-dynamic-linker,/lib/ld.so.1,-lxlf90,-lxlopt,-lxlomp_ser,-lxl,-lxlfmath,-ldl,-lrt,-lpthread,-lm,-lc,-lgcc_eh,-lc,-lgcc,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/crtsavres.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/crtend.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/crtn.o,NULL) 
unlink: conftest.o
configure:15008: result:  -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm
configure:15024: checking for dummy main to link with Fortran libraries
configure:15058: gcc -o conftest    conftest.c   -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm >&5
configure:15058: $? = 0
configure:15103: result: none
configure:15136: checking for Fortran name-mangling scheme
configure:15149: xlf -c   conftest.F90 >&5
** foobar   === End of Compilation 1 ===
** foo_bar   === End of Compilation 2 ===
1501-510  Compilation successful for file conftest.F90.
configure:15149: $? = 0
configure:15190: gcc -o conftest    conftest.c cfortran_test.o   -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm >&5
configure:15190: $? = 0
configure:15248: gcc -o conftest    conftest.c cfortran_test.o   -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm >&5
configure:15248: $? = 0
configure:15290: result: lower case, no underscore, no extra underscore
configure:15397: checking for python
configure:15413: found /usr/bin/python
configure:15424: result: python
configure:15437: checking for Python CPPFLAGS
configure:15452: result: 
configure:15461: checking for bzr
configure:15491: result: no
configure:15508: checking for Python NumPy headers
configure:15536: gcc -c    conftest.c >&5
conftest.c:35:20: error: Python.h: No such file or directory
conftest.c:36:31: error: numpy/arrayobject.h: No such file or directory
configure:15536: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| /* end confdefs.h.  */
| 
| #include <Python.h>
| #include <numpy/arrayobject.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
| int main(int argc, char** argv)
| {
|     return 0;
| }
|   ;
|   return 0;
| }
configure:15547: result: not found
configure:15553: checking numarray/arrayobject.h usability
configure:15553: gcc -c    conftest.c >&5
conftest.c:67:34: error: numarray/arrayobject.h: No such file or directory
configure:15553: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <numarray/arrayobject.h>
configure:15553: result: no
configure:15553: checking numarray/arrayobject.h presence
configure:15553: gcc -E   conftest.c
conftest.c:34:34: error: numarray/arrayobject.h: No such file or directory
configure:15553: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| /* end confdefs.h.  */
| #include <numarray/arrayobject.h>
configure:15553: result: no
configure:15553: checking for numarray/arrayobject.h
configure:15553: result: no
configure:15850: checking for ar
configure:15866: found /usr/bin/ar
configure:15877: result: ar
configure:15938: checking for ranlib
configure:15954: found /usr/bin/ranlib
configure:15965: result: ranlib
configure:16036: checking for cpp
configure:16052: found /usr/bin/cpp
configure:16063: result: cpp
configure:16122: checking for a true C preprocessor
configure:16128: result: cpp
configure:16175: checking which cpp hints to apply
configure:16205: result: default/default/default
configure:16214: checking which cc hints to apply
configure:16275: result: gnu/default/default
configure:16286: checking which xpp hints to apply
configure:16290: result: none/none/none
configure:16299: checking which cxx hints to apply
configure:16352: result: gnu/default/default
configure:16363: checking which fpp hints to apply
configure:16381: result: ibm/default/default
configure:16390: checking which fc hints to apply
configure:16651: result: ibm/default/default
configure:16662: checking which ar hints to apply
configure:16681: result: none/none/none
configure:16694: checking which Fortran preprocessor to use
configure:16696: result: 
configure:16698: checking which Fortran preprocessor flags to apply
configure:16700: result: 
configure:16724: checking whether to wrap Fortran compiler calls
configure:16726: result: no
configure:16765: checking debugging status
configure:16788: result: enabled (profile mode: basic)
configure:16809: setting C debug flags to '-g'
configure:16817: setting C++ debug flags to '-g'
configure:16825: setting Fortran debug flags to '-g'
configure:16831: checking whether to activate debug mode in source files
configure:16842: result: no
configure:16854: checking which cc debug flags to apply
configure:16907: result: gnu/default/default
configure:16921: checking which cxx debug flags to apply
configure:16925: result: none/none/none
configure:16939: checking which fc debug flags to apply
configure:17275: result: ibm/default/default
configure:17295: checking whether to activate design-by-contract debugging
configure:17304: result: no
configure:17349: checking optimization status
configure:17372: result: enabled (profile mode: standard)
configure:17397: checking which cc optimizations to apply
configure:18456: result: gnu/default/default
configure:18470: checking which cxx optimizations to apply
configure:19472: result: gnu/default/default
configure:19486: checking which fc optimizations to apply
configure:21216: result: ibm/default/ibm_powerpc64
configure:21230: checking whether to apply per-directory optimizations
configure:21236: result: yes
configure:22575: checking for a 64-bit architecture
configure:22577: result: yes
configure:22579: checking whether to use 64-bit flags
configure:22581: result: no
configure:22583: checking for user-defined 64-bit flags
configure:22585: result: 
configure:22783: static builds may be performed
configure:22830: checking stddef.h usability
configure:22830: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22830: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <stddef.h>
configure:22830: result: no
configure:22830: checking stddef.h presence
configure:22830: gcc -E      conftest.c
configure:22830: $? = 0
configure:22830: result: yes
configure:22830: WARNING: stddef.h: present but cannot be compiled
configure:22830: WARNING: stddef.h:     check for missing prerequisite headers?
configure:22830: WARNING: stddef.h: see the Autoconf documentation
configure:22830: WARNING: stddef.h:     section "Present But Cannot Be Compiled"
configure:22830: WARNING: stddef.h: proceeding with the compiler's result
configure:22830: checking for stddef.h
configure:22830: result: no
configure:22830: checking stdarg.h usability
configure:22830: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22830: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <stdarg.h>
configure:22830: result: no
configure:22830: checking stdarg.h presence
configure:22830: gcc -E      conftest.c
configure:22830: $? = 0
configure:22830: result: yes
configure:22830: WARNING: stdarg.h: present but cannot be compiled
configure:22830: WARNING: stdarg.h:     check for missing prerequisite headers?
configure:22830: WARNING: stdarg.h: see the Autoconf documentation
configure:22830: WARNING: stdarg.h:     section "Present But Cannot Be Compiled"
configure:22830: WARNING: stdarg.h: proceeding with the compiler's result
configure:22830: checking for stdarg.h
configure:22830: result: no
configure:22843: checking stdio.h usability
configure:22843: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22843: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <stdio.h>
configure:22843: result: no
configure:22843: checking stdio.h presence
configure:22843: gcc -E      conftest.c
configure:22843: $? = 0
configure:22843: result: yes
configure:22843: WARNING: stdio.h: present but cannot be compiled
configure:22843: WARNING: stdio.h:     check for missing prerequisite headers?
configure:22843: WARNING: stdio.h: see the Autoconf documentation
configure:22843: WARNING: stdio.h:     section "Present But Cannot Be Compiled"
configure:22843: WARNING: stdio.h: proceeding with the compiler's result
configure:22843: checking for stdio.h
configure:22843: result: no
configure:22843: checking math.h usability
configure:22843: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22843: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <math.h>
configure:22843: result: no
configure:22843: checking math.h presence
configure:22843: gcc -E      conftest.c
configure:22843: $? = 0
configure:22843: result: yes
configure:22843: WARNING: math.h: present but cannot be compiled
configure:22843: WARNING: math.h:     check for missing prerequisite headers?
configure:22843: WARNING: math.h: see the Autoconf documentation
configure:22843: WARNING: math.h:     section "Present But Cannot Be Compiled"
configure:22843: WARNING: math.h: proceeding with the compiler's result
configure:22843: checking for math.h
configure:22843: result: no
configure:22843: checking termios.h usability
configure:22843: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22843: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <termios.h>
configure:22843: result: no
configure:22843: checking termios.h presence
configure:22843: gcc -E      conftest.c
configure:22843: $? = 0
configure:22843: result: yes
configure:22843: WARNING: termios.h: present but cannot be compiled
configure:22843: WARNING: termios.h:     check for missing prerequisite headers?
configure:22843: WARNING: termios.h: see the Autoconf documentation
configure:22843: WARNING: termios.h:     section "Present But Cannot Be Compiled"
configure:22843: WARNING: termios.h: proceeding with the compiler's result
configure:22843: checking for termios.h
configure:22843: result: no
configure:22855: checking errno.h usability
configure:22855: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22855: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <errno.h>
configure:22855: result: no
configure:22855: checking errno.h presence
configure:22855: gcc -E      conftest.c
configure:22855: $? = 0
configure:22855: result: yes
configure:22855: WARNING: errno.h: present but cannot be compiled
configure:22855: WARNING: errno.h:     check for missing prerequisite headers?
configure:22855: WARNING: errno.h: see the Autoconf documentation
configure:22855: WARNING: errno.h:     section "Present But Cannot Be Compiled"
configure:22855: WARNING: errno.h: proceeding with the compiler's result
configure:22855: checking for errno.h
configure:22855: result: no
configure:22868: checking malloc.h usability
configure:22868: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22868: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <malloc.h>
configure:22868: result: no
configure:22868: checking malloc.h presence
configure:22868: gcc -E      conftest.c
configure:22868: $? = 0
configure:22868: result: yes
configure:22868: WARNING: malloc.h: present but cannot be compiled
configure:22868: WARNING: malloc.h:     check for missing prerequisite headers?
configure:22868: WARNING: malloc.h: see the Autoconf documentation
configure:22868: WARNING: malloc.h:     section "Present But Cannot Be Compiled"
configure:22868: WARNING: malloc.h: proceeding with the compiler's result
configure:22868: checking for malloc.h
configure:22868: result: no
configure:22868: checking sys/malloc.h usability
configure:22868: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22868: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <sys/malloc.h>
configure:22868: result: no
configure:22868: checking sys/malloc.h presence
configure:22868: gcc -E      conftest.c
conftest.c:35:24: error: sys/malloc.h: No such file or directory
configure:22868: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| #include <sys/malloc.h>
configure:22868: result: no
configure:22868: checking for sys/malloc.h
configure:22868: result: no
configure:22880: checking mcheck.h usability
configure:22880: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22880: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <mcheck.h>
configure:22880: result: no
configure:22880: checking mcheck.h presence
configure:22880: gcc -E      conftest.c
configure:22880: $? = 0
configure:22880: result: yes
configure:22880: WARNING: mcheck.h: present but cannot be compiled
configure:22880: WARNING: mcheck.h:     check for missing prerequisite headers?
configure:22880: WARNING: mcheck.h: see the Autoconf documentation
configure:22880: WARNING: mcheck.h:     section "Present But Cannot Be Compiled"
configure:22880: WARNING: mcheck.h: proceeding with the compiler's result
configure:22880: checking for mcheck.h
configure:22880: result: no
configure:22892: checking sys/time.h usability
configure:22892: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22892: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <sys/time.h>
configure:22892: result: no
configure:22892: checking sys/time.h presence
configure:22892: gcc -E      conftest.c
configure:22892: $? = 0
configure:22892: result: yes
configure:22892: WARNING: sys/time.h: present but cannot be compiled
configure:22892: WARNING: sys/time.h:     check for missing prerequisite headers?
configure:22892: WARNING: sys/time.h: see the Autoconf documentation
configure:22892: WARNING: sys/time.h:     section "Present But Cannot Be Compiled"
configure:22892: WARNING: sys/time.h: proceeding with the compiler's result
configure:22892: checking for sys/time.h
configure:22892: result: no
configure:22904: checking sys/resource.h usability
configure:22904: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22904: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <sys/resource.h>
configure:22904: result: no
configure:22904: checking sys/resource.h presence
configure:22904: gcc -E      conftest.c
configure:22904: $? = 0
configure:22904: result: yes
configure:22904: WARNING: sys/resource.h: present but cannot be compiled
configure:22904: WARNING: sys/resource.h:     check for missing prerequisite headers?
configure:22904: WARNING: sys/resource.h: see the Autoconf documentation
configure:22904: WARNING: sys/resource.h:     section "Present But Cannot Be Compiled"
configure:22904: WARNING: sys/resource.h: proceeding with the compiler's result
configure:22904: checking for sys/resource.h
configure:22904: result: no
configure:22920: checking for abort
configure:22920: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22920: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| /* Define abort to an innocuous variant, in case <limits.h> declares abort.
|    For example, HP-UX 11i <limits.h> declares gettimeofday.  */
| #define abort innocuous_abort
| 
| /* System header to define __stub macros and hopefully few prototypes,
|     which can conflict with char abort (); below.
|     Prefer <limits.h> to <assert.h> if __STDC__ is defined, since
|     <limits.h> exists even on freestanding compilers.  */
| 
| #ifdef __STDC__
| # include <limits.h>
| #else
| # include <assert.h>
| #endif
| 
| #undef abort
| 
| /* Override any GCC internal prototype to avoid an error.
|    Use char because int might match the return type of a GCC
|    builtin and then its argument prototype would still apply.  */
| #ifdef __cplusplus
| extern "C"
| #endif
| char abort ();
| /* The GNU C library defines this for functions which it implements
|     to always fail with ENOSYS.  Some functions are actually named
|     something starting with __ and the normal name is an alias.  */
| #if defined __stub_abort || defined __stub___abort
| choke me
| #endif
| 
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| return abort ();
|   ;
|   return 0;
| }
configure:22920: result: no
configure:22931: checking for mallinfo
configure:22931: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22931: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| /* Define mallinfo to an innocuous variant, in case <limits.h> declares mallinfo.
|    For example, HP-UX 11i <limits.h> declares gettimeofday.  */
| #define mallinfo innocuous_mallinfo
| 
| /* System header to define __stub macros and hopefully few prototypes,
|     which can conflict with char mallinfo (); below.
|     Prefer <limits.h> to <assert.h> if __STDC__ is defined, since
|     <limits.h> exists even on freestanding compilers.  */
| 
| #ifdef __STDC__
| # include <limits.h>
| #else
| # include <assert.h>
| #endif
| 
| #undef mallinfo
| 
| /* Override any GCC internal prototype to avoid an error.
|    Use char because int might match the return type of a GCC
|    builtin and then its argument prototype would still apply.  */
| #ifdef __cplusplus
| extern "C"
| #endif
| char mallinfo ();
| /* The GNU C library defines this for functions which it implements
|     to always fail with ENOSYS.  Some functions are actually named
|     something starting with __ and the normal name is an alias.  */
| #if defined __stub_mallinfo || defined __stub___mallinfo
| choke me
| #endif
| 
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| return mallinfo ();
|   ;
|   return 0;
| }
configure:22931: result: no
configure:22948: checking size of char
configure:22953: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22953: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| static long int longval () { return (long int) (sizeof (char)); }
| static unsigned long int ulongval () { return (long int) (sizeof (char)); }
| #include <stdio.h>
| #include <stdlib.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
|   FILE *f = fopen ("conftest.val", "w");
|   if (! f)
|     return 1;
|   if (((long int) (sizeof (char))) < 0)
|     {
|       long int i = longval ();
|       if (i != ((long int) (sizeof (char))))
| 	return 1;
|       fprintf (f, "%ld", i);
|     }
|   else
|     {
|       unsigned long int i = ulongval ();
|       if (i != ((long int) (sizeof (char))))
| 	return 1;
|       fprintf (f, "%lu", i);
|     }
|   /* Do not output a trailing newline, as this causes \r\n confusion
|      on some platforms.  */
|   return ferror (f) || fclose (f) != 0;
| 
|   ;
|   return 0;
| }
configure:22967: result: 0
configure:22981: checking size of short
configure:22986: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22986: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| static long int longval () { return (long int) (sizeof (short)); }
| static unsigned long int ulongval () { return (long int) (sizeof (short)); }
| #include <stdio.h>
| #include <stdlib.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
|   FILE *f = fopen ("conftest.val", "w");
|   if (! f)
|     return 1;
|   if (((long int) (sizeof (short))) < 0)
|     {
|       long int i = longval ();
|       if (i != ((long int) (sizeof (short))))
| 	return 1;
|       fprintf (f, "%ld", i);
|     }
|   else
|     {
|       unsigned long int i = ulongval ();
|       if (i != ((long int) (sizeof (short))))
| 	return 1;
|       fprintf (f, "%lu", i);
|     }
|   /* Do not output a trailing newline, as this causes \r\n confusion
|      on some platforms.  */
|   return ferror (f) || fclose (f) != 0;
| 
|   ;
|   return 0;
| }
configure:23000: result: 0
configure:23014: checking size of int
configure:23019: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23019: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| static long int longval () { return (long int) (sizeof (int)); }
| static unsigned long int ulongval () { return (long int) (sizeof (int)); }
| #include <stdio.h>
| #include <stdlib.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
|   FILE *f = fopen ("conftest.val", "w");
|   if (! f)
|     return 1;
|   if (((long int) (sizeof (int))) < 0)
|     {
|       long int i = longval ();
|       if (i != ((long int) (sizeof (int))))
| 	return 1;
|       fprintf (f, "%ld", i);
|     }
|   else
|     {
|       unsigned long int i = ulongval ();
|       if (i != ((long int) (sizeof (int))))
| 	return 1;
|       fprintf (f, "%lu", i);
|     }
|   /* Do not output a trailing newline, as this causes \r\n confusion
|      on some platforms.  */
|   return ferror (f) || fclose (f) != 0;
| 
|   ;
|   return 0;
| }
configure:23033: result: 0
configure:23047: checking size of long
configure:23052: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23052: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| static long int longval () { return (long int) (sizeof (long)); }
| static unsigned long int ulongval () { return (long int) (sizeof (long)); }
| #include <stdio.h>
| #include <stdlib.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
|   FILE *f = fopen ("conftest.val", "w");
|   if (! f)
|     return 1;
|   if (((long int) (sizeof (long))) < 0)
|     {
|       long int i = longval ();
|       if (i != ((long int) (sizeof (long))))
| 	return 1;
|       fprintf (f, "%ld", i);
|     }
|   else
|     {
|       unsigned long int i = ulongval ();
|       if (i != ((long int) (sizeof (long))))
| 	return 1;
|       fprintf (f, "%lu", i);
|     }
|   /* Do not output a trailing newline, as this causes \r\n confusion
|      on some platforms.  */
|   return ferror (f) || fclose (f) != 0;
| 
|   ;
|   return 0;
| }
configure:23066: result: 0
configure:23080: checking size of long long
configure:23085: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23085: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| static long int longval () { return (long int) (sizeof (long long)); }
| static unsigned long int ulongval () { return (long int) (sizeof (long long)); }
| #include <stdio.h>
| #include <stdlib.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
|   FILE *f = fopen ("conftest.val", "w");
|   if (! f)
|     return 1;
|   if (((long int) (sizeof (long long))) < 0)
|     {
|       long int i = longval ();
|       if (i != ((long int) (sizeof (long long))))
| 	return 1;
|       fprintf (f, "%ld", i);
|     }
|   else
|     {
|       unsigned long int i = ulongval ();
|       if (i != ((long int) (sizeof (long long))))
| 	return 1;
|       fprintf (f, "%lu", i);
|     }
|   /* Do not output a trailing newline, as this causes \r\n confusion
|      on some platforms.  */
|   return ferror (f) || fclose (f) != 0;
| 
|   ;
|   return 0;
| }
configure:23099: result: 0
configure:23113: checking size of unsigned int
configure:23118: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23118: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| static long int longval () { return (long int) (sizeof (unsigned int)); }
| static unsigned long int ulongval () { return (long int) (sizeof (unsigned int)); }
| #include <stdio.h>
| #include <stdlib.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
|   FILE *f = fopen ("conftest.val", "w");
|   if (! f)
|     return 1;
|   if (((long int) (sizeof (unsigned int))) < 0)
|     {
|       long int i = longval ();
|       if (i != ((long int) (sizeof (unsigned int))))
| 	return 1;
|       fprintf (f, "%ld", i);
|     }
|   else
|     {
|       unsigned long int i = ulongval ();
|       if (i != ((long int) (sizeof (unsigned int))))
| 	return 1;
|       fprintf (f, "%lu", i);
|     }
|   /* Do not output a trailing newline, as this causes \r\n confusion
|      on some platforms.  */
|   return ferror (f) || fclose (f) != 0;
| 
|   ;
|   return 0;
| }
configure:23132: result: 0
configure:23146: checking size of unsigned long
configure:23151: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23151: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| static long int longval () { return (long int) (sizeof (unsigned long)); }
| static unsigned long int ulongval () { return (long int) (sizeof (unsigned long)); }
| #include <stdio.h>
| #include <stdlib.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
|   FILE *f = fopen ("conftest.val", "w");
|   if (! f)
|     return 1;
|   if (((long int) (sizeof (unsigned long))) < 0)
|     {
|       long int i = longval ();
|       if (i != ((long int) (sizeof (unsigned long))))
| 	return 1;
|       fprintf (f, "%ld", i);
|     }
|   else
|     {
|       unsigned long int i = ulongval ();
|       if (i != ((long int) (sizeof (unsigned long))))
| 	return 1;
|       fprintf (f, "%lu", i);
|     }
|   /* Do not output a trailing newline, as this causes \r\n confusion
|      on some platforms.  */
|   return ferror (f) || fclose (f) != 0;
| 
|   ;
|   return 0;
| }
configure:23165: result: 0
configure:23179: checking size of unsigned long long
configure:23184: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23184: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| static long int longval () { return (long int) (sizeof (unsigned long long)); }
| static unsigned long int ulongval () { return (long int) (sizeof (unsigned long long)); }
| #include <stdio.h>
| #include <stdlib.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
|   FILE *f = fopen ("conftest.val", "w");
|   if (! f)
|     return 1;
|   if (((long int) (sizeof (unsigned long long))) < 0)
|     {
|       long int i = longval ();
|       if (i != ((long int) (sizeof (unsigned long long))))
| 	return 1;
|       fprintf (f, "%ld", i);
|     }
|   else
|     {
|       unsigned long int i = ulongval ();
|       if (i != ((long int) (sizeof (unsigned long long))))
| 	return 1;
|       fprintf (f, "%lu", i);
|     }
|   /* Do not output a trailing newline, as this causes \r\n confusion
|      on some platforms.  */
|   return ferror (f) || fclose (f) != 0;
| 
|   ;
|   return 0;
| }
configure:23198: result: 0
configure:23212: checking size of float
configure:23217: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23217: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| static long int longval () { return (long int) (sizeof (float)); }
| static unsigned long int ulongval () { return (long int) (sizeof (float)); }
| #include <stdio.h>
| #include <stdlib.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
|   FILE *f = fopen ("conftest.val", "w");
|   if (! f)
|     return 1;
|   if (((long int) (sizeof (float))) < 0)
|     {
|       long int i = longval ();
|       if (i != ((long int) (sizeof (float))))
| 	return 1;
|       fprintf (f, "%ld", i);
|     }
|   else
|     {
|       unsigned long int i = ulongval ();
|       if (i != ((long int) (sizeof (float))))
| 	return 1;
|       fprintf (f, "%lu", i);
|     }
|   /* Do not output a trailing newline, as this causes \r\n confusion
|      on some platforms.  */
|   return ferror (f) || fclose (f) != 0;
| 
|   ;
|   return 0;
| }
configure:23231: result: 0
configure:23245: checking size of double
configure:23250: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23250: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| static long int longval () { return (long int) (sizeof (double)); }
| static unsigned long int ulongval () { return (long int) (sizeof (double)); }
| #include <stdio.h>
| #include <stdlib.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
|   FILE *f = fopen ("conftest.val", "w");
|   if (! f)
|     return 1;
|   if (((long int) (sizeof (double))) < 0)
|     {
|       long int i = longval ();
|       if (i != ((long int) (sizeof (double))))
| 	return 1;
|       fprintf (f, "%ld", i);
|     }
|   else
|     {
|       unsigned long int i = ulongval ();
|       if (i != ((long int) (sizeof (double))))
| 	return 1;
|       fprintf (f, "%lu", i);
|     }
|   /* Do not output a trailing newline, as this causes \r\n confusion
|      on some platforms.  */
|   return ferror (f) || fclose (f) != 0;
| 
|   ;
|   return 0;
| }
configure:23264: result: 0
configure:23278: checking size of long double
configure:23283: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23283: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| static long int longval () { return (long int) (sizeof (long double)); }
| static unsigned long int ulongval () { return (long int) (sizeof (long double)); }
| #include <stdio.h>
| #include <stdlib.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
|   FILE *f = fopen ("conftest.val", "w");
|   if (! f)
|     return 1;
|   if (((long int) (sizeof (long double))) < 0)
|     {
|       long int i = longval ();
|       if (i != ((long int) (sizeof (long double))))
| 	return 1;
|       fprintf (f, "%ld", i);
|     }
|   else
|     {
|       unsigned long int i = ulongval ();
|       if (i != ((long int) (sizeof (long double))))
| 	return 1;
|       fprintf (f, "%lu", i);
|     }
|   /* Do not output a trailing newline, as this causes \r\n confusion
|      on some platforms.  */
|   return ferror (f) || fclose (f) != 0;
| 
|   ;
|   return 0;
| }
configure:23297: result: 0
configure:23311: checking size of size_t
configure:23316: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23316: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| static long int longval () { return (long int) (sizeof (size_t)); }
| static unsigned long int ulongval () { return (long int) (sizeof (size_t)); }
| #include <stdio.h>
| #include <stdlib.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
|   FILE *f = fopen ("conftest.val", "w");
|   if (! f)
|     return 1;
|   if (((long int) (sizeof (size_t))) < 0)
|     {
|       long int i = longval ();
|       if (i != ((long int) (sizeof (size_t))))
| 	return 1;
|       fprintf (f, "%ld", i);
|     }
|   else
|     {
|       unsigned long int i = ulongval ();
|       if (i != ((long int) (sizeof (size_t))))
| 	return 1;
|       fprintf (f, "%lu", i);
|     }
|   /* Do not output a trailing newline, as this causes \r\n confusion
|      on some platforms.  */
|   return ferror (f) || fclose (f) != 0;
| 
|   ;
|   return 0;
| }
configure:23330: result: 0
configure:23344: checking size of ptrdiff_t
configure:23349: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23349: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| static long int longval () { return (long int) (sizeof (ptrdiff_t)); }
| static unsigned long int ulongval () { return (long int) (sizeof (ptrdiff_t)); }
| #include <stdio.h>
| #include <stdlib.h>
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| 
|   FILE *f = fopen ("conftest.val", "w");
|   if (! f)
|     return 1;
|   if (((long int) (sizeof (ptrdiff_t))) < 0)
|     {
|       long int i = longval ();
|       if (i != ((long int) (sizeof (ptrdiff_t))))
| 	return 1;
|       fprintf (f, "%ld", i);
|     }
|   else
|     {
|       unsigned long int i = ulongval ();
|       if (i != ((long int) (sizeof (ptrdiff_t))))
| 	return 1;
|       fprintf (f, "%lu", i);
|     }
|   /* Do not output a trailing newline, as this causes \r\n confusion
|      on some platforms.  */
|   return ferror (f) || fclose (f) != 0;
| 
|   ;
|   return 0;
| }
configure:23363: result: 0
configure:23374: checking for an ANSI C-conforming const
configure:23447: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23447: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| #define SIZEOF_PTRDIFF_T 0
| /* end confdefs.h.  */
| 
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| /* FIXME: Include the comments suggested by Paul. */
| #ifndef __cplusplus
|   /* Ultrix mips cc rejects this.  */
|   typedef int charset[2];
|   const charset cs;
|   /* SunOS 4.1.1 cc rejects this.  */
|   char const *const *pcpcc;
|   char **ppc;
|   /* NEC SVR4.0.2 mips cc rejects this.  */
|   struct point {int x, y;};
|   static struct point const zero = {0,0};
|   /* AIX XL C 1.02.0.0 rejects this.
|      It does not let you subtract one const X* pointer from another in
|      an arm of an if-expression whose if-part is not a constant
|      expression */
|   const char *g = "string";
|   pcpcc = &g + (g ? g-g : 0);
|   /* HPUX 7.0 cc rejects these. */
|   ++pcpcc;
|   ppc = (char**) pcpcc;
|   pcpcc = (char const *const *) ppc;
|   { /* SCO 3.2v4 cc rejects this.  */
|     char *t;
|     char const *s = 0 ? (char *) 0 : (char const *) 0;
| 
|     *t++ = 0;
|     if (s) return 0;
|   }
|   { /* Someone thinks the Sun supposedly-ANSI compiler will reject this.  */
|     int x[] = {25, 17};
|     const int *foo = &x[0];
|     ++foo;
|   }
|   { /* Sun SC1.0 ANSI compiler rejects this -- but not the above. */
|     typedef const int *iptr;
|     iptr p = 0;
|     ++p;
|   }
|   { /* AIX XL C 1.02.0.0 rejects this saying
|        "k.c", line 2.27: 1506-025 (S) Operand must be a modifiable lvalue. */
|     struct s { int j; const int *ap[3]; };
|     struct s *b; b->j = 5;
|   }
|   { /* ULTRIX-32 V3.1 (Rev 9) vcc rejects this */
|     const int foo = 10;
|     if (!foo) return 0;
|   }
|   return !cs[0] && !zero.x;
| #endif
| 
|   ;
|   return 0;
| }
configure:23454: result: no
configure:23462: checking for size_t
configure:23462: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23462: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| #define SIZEOF_PTRDIFF_T 0
| #define const /**/
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| if (sizeof (size_t))
| 	 return 0;
|   ;
|   return 0;
| }
configure:23462: result: no
configure:23480: checking whether the Fortran compiler supports allocatable arrays in datatypes
configure:23504: xlf -o conftest  -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23504: $? = 0
configure:23522: result: yes
configure:23528: checking whether the Fortran compiler provides the iso_c_binding module
configure:23550: xlf -o conftest  -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23550: $? = 0
configure:23568: result: yes
configure:23574: checking whether the Fortran compiler accepts exit()
configure:23589: xlf -o conftest  -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23589: $? = 0
configure:23607: result: yes
configure:23613: checking whether the Fortran compiler accepts flush()
configure:23628: xlf -o conftest  -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
conftest.o: In function `main':
/home/unimainz/maust/abinit-6.10.3/conftest.F90:3: undefined reference to `flush'
configure:23628: $? = 1
configure: failed program was:
|       program main
| 
|             call flush()
| 
|       end
configure:23646: result: no
configure:23652: checking whether the Fortran compiler accepts flush_()
configure:23667: xlf -o conftest  -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23667: $? = 0
configure:23685: result: yes
configure:23691: checking whether the Fortran compiler accepts gamma()
configure:23707: xlf -o conftest  -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23707: $? = 0
configure:23725: result: yes
configure:23731: checking whether the Fortran compiler accepts getenv()
configure:23748: xlf -o conftest  -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23748: $? = 0
configure:23766: result: yes
configure:23784: xlf -o conftest  -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23784: $? = 0
configure:23796: checking whether the Fortran compiler accepts getpid()
configure:23798: result: yes
configure:23809: checking whether the Fortran compiler accepts the null() intrinsic
configure:23828: xlf -o conftest  -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23828: $? = 0
configure:23846: result: yes
configure:23852: checking whether the Fortran compiler accepts quadruple integers
configure:23887: result: no
configure:23893: checking whether the Fortran compiler accepts long lines
configure:23908: xlf -o conftest  -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23908: $? = 0
configure:23926: result: yes
configure:23932: checking whether the Fortran compiler supports stream IO
configure:23956: xlf -o conftest  -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23956: $? = 0
configure:23974: result: yes
configure:23980: checking whether the Fortran compiler accepts cpu_time()
configure:23997: xlf -o conftest  -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23997: $? = 0
configure:24015: result: yes
configure:24023: checking whether the Fortran compiler accepts etime()
configure:24038: xlf -o conftest  -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
conftest.o: In function `main':
/home/unimainz/maust/abinit-6.10.3/conftest.F90:3: undefined reference to `etime'
configure:24038: $? = 1
configure: failed program was:
|       program main
| 
|             call etime(1)
| 
|       end
configure:24056: result: no
configure:24061: checking whether to use C clock for timings
configure:24063: result: no
configure:25625: checking whether MPI is usable
configure:25627: result: no
configure:25673: checking whether to build MPI code
configure:25675: result: no
configure:26235: checking whether the MPI library supports MPI_CREATE_TYPE_STRUCT
configure:26973: xlf -o conftest  -g -qzerosize        conftest.F90       -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
"conftest.F90", line 3.8: 1512-001 (S) Input file mpif.h was not found or is not defined.
1501-511  Compilation failed for file conftest.F90.
configure:26973: $? = 1
configure: failed program was:
|       program main
| 
|         include "mpif.h"
|         integer,parameter :: ncount=10
|         integer :: ierr,new_type
|         integer :: block_length(ncount),block_type(ncount)
|         integer(MPI_ADDRESS_KIND) :: block_displ(ncount)
| 
|         call mpi_init(ierr)
|         call MPI_TYPE_CREATE_STRUCT(ncount,block_length,block_displ,block_type,new_type,ierr)
|         call mpi_finalize(ierr)
| 
| 
|       end
configure:27211: result: no
configure:27241: checking whether to activate GPU support
configure:27243: result: no
configure:28099: checking for the requested transferable I/O support
configure:28101: result: netcdf+etsf_io
configure:28457: checking netcdf.h usability
configure:28457: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:28457: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| #define SIZEOF_PTRDIFF_T 0
| #define const /**/
| #define size_t unsigned int
| #define HAVE_FC_ALLOCATABLE_DTARRAYS 1
| #define HAVE_FC_ISO_C_BINDING 1
| #define HAVE_FC_EXIT 1
| #define HAVE_FC_FLUSH_ 1
| #define HAVE_FC_GAMMA 1
| #define HAVE_FC_GETENV 1
| #define HAVE_FC_GETPID 1
| #define HAVE_FC_NULL 1
| #define HAVE_FC_LONG_LINES 1
| #define HAVE_FC_STREAM_IO 1
| #define HAVE_FC_CPUTIME 1
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <netcdf.h>
configure:28457: result: no
configure:28457: checking netcdf.h presence
configure:28457: gcc -E       conftest.c
conftest.c:61:20: error: netcdf.h: No such file or directory
configure:28457: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| #define SIZEOF_PTRDIFF_T 0
| #define const /**/
| #define size_t unsigned int
| #define HAVE_FC_ALLOCATABLE_DTARRAYS 1
| #define HAVE_FC_ISO_C_BINDING 1
| #define HAVE_FC_EXIT 1
| #define HAVE_FC_FLUSH_ 1
| #define HAVE_FC_GAMMA 1
| #define HAVE_FC_GETENV 1
| #define HAVE_FC_GETPID 1
| #define HAVE_FC_NULL 1
| #define HAVE_FC_LONG_LINES 1
| #define HAVE_FC_STREAM_IO 1
| #define HAVE_FC_CPUTIME 1
| /* end confdefs.h.  */
| #include <netcdf.h>
configure:28457: result: no
configure:28457: checking for netcdf.h
configure:28457: result: no
configure:28482: checking for library containing nc_open
configure:28521: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse              conftest.c       -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:28521: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| #define SIZEOF_PTRDIFF_T 0
| #define const /**/
| #define size_t unsigned int
| #define HAVE_FC_ALLOCATABLE_DTARRAYS 1
| #define HAVE_FC_ISO_C_BINDING 1
| #define HAVE_FC_EXIT 1
| #define HAVE_FC_FLUSH_ 1
| #define HAVE_FC_GAMMA 1
| #define HAVE_FC_GETENV 1
| #define HAVE_FC_GETPID 1
| #define HAVE_FC_NULL 1
| #define HAVE_FC_LONG_LINES 1
| #define HAVE_FC_STREAM_IO 1
| #define HAVE_FC_CPUTIME 1
| /* end confdefs.h.  */
| 
| /* Override any GCC internal prototype to avoid an error.
|    Use char because int might match the return type of a GCC
|    builtin and then its argument prototype would still apply.  */
| #ifdef __cplusplus
| extern "C"
| #endif
| char nc_open ();
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| return nc_open ();
|   ;
|   return 0;
| }
configure:28521: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse              conftest.c -lnetcdf        -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:28521: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| #define SIZEOF_PTRDIFF_T 0
| #define const /**/
| #define size_t unsigned int
| #define HAVE_FC_ALLOCATABLE_DTARRAYS 1
| #define HAVE_FC_ISO_C_BINDING 1
| #define HAVE_FC_EXIT 1
| #define HAVE_FC_FLUSH_ 1
| #define HAVE_FC_GAMMA 1
| #define HAVE_FC_GETENV 1
| #define HAVE_FC_GETPID 1
| #define HAVE_FC_NULL 1
| #define HAVE_FC_LONG_LINES 1
| #define HAVE_FC_STREAM_IO 1
| #define HAVE_FC_CPUTIME 1
| /* end confdefs.h.  */
| 
| /* Override any GCC internal prototype to avoid an error.
|    Use char because int might match the return type of a GCC
|    builtin and then its argument prototype would still apply.  */
| #ifdef __cplusplus
| extern "C"
| #endif
| char nc_open ();
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| return nc_open ();
|   ;
|   return 0;
| }
configure:28538: result: no
configure:28612: checking for Fortran module includes
configure:28634: xlf -c  -g -qzerosize    conftest.F90 >&5
"conftest.F90", line 3.13: 1514-219 (S) Unable to access module symbol file for module netcdf. Check path and file permissions of file. Use association not done for this module.
1501-511  Compilation failed for file conftest.F90.
configure:28634: $? = 1
configure: failed program was:
|       program main
| 
|         use netcdf
| 
|       end
configure:28650: xlf -c  -g -qzerosize   -I/usr/include  conftest.F90 >&5
"conftest.F90", line 3.15: 1514-219 (S) Unable to access module symbol file for module netcdf. Check path and file permissions of file. Use association not done for this module.
1501-511  Compilation failed for file conftest.F90.
configure:28650: $? = 1
configure: failed program was:
|       program main
| 
|           use netcdf
| 
|       end
configure:28657: result: unknown
configure:28772: WARNING: falling back to internal netcdf version
configure:28263: WARNING: ETSF_IO requires missing NetCDF support
configure:28772: WARNING: falling back to internal etsf_io version
configure:29056: checking for the actual transferable I/O support
configure:29058: result: netcdf-fallback+etsf_io-fallback
configure:29315: checking for the requested timer support
configure:29317: result: abinit
configure:29714: checking for the actual timer support
configure:29716: result: abinit
configure:30034: checking for the requested linear algebra support
configure:30036: result: netlib
configure:30281: checking for library containing zgemm
configure:30299: xlf -o conftest  -g -qzerosize          conftest.F90        -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
conftest.o: In function `main':
/home/unimainz/maust/abinit-6.10.3/conftest.F90:2: undefined reference to `zgemm'
configure:30299: $? = 1
configure: failed program was:
|       program main
|       call zgemm
|       end
configure:30299: xlf -o conftest  -g -qzerosize          conftest.F90 -lblas          -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
/usr/bin/ld: cannot find -lblas
configure:30299: $? = 1
configure: failed program was:
|       program main
|       call zgemm
|       end
configure:30316: result: no
configure:30335: checking for library containing zhpev
configure:30353: xlf -o conftest  -g -qzerosize          conftest.F90        -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
conftest.o: In function `main':
/home/unimainz/maust/abinit-6.10.3/conftest.F90:2: undefined reference to `zhpev'
configure:30353: $? = 1
configure: failed program was:
|       program main
|       call zhpev
|       end
configure:30353: xlf -o conftest  -g -qzerosize          conftest.F90 -llapack          -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
/usr/bin/ld: cannot find -llapack
configure:30353: $? = 1
configure: failed program was:
|       program main
|       call zhpev
|       end
configure:30370: result: no
configure:30510: checking whether we have a serial linear algebra support
configure:30512: result: no
configure:30541: WARNING: falling back to internal linear algebra libraries
configure:30548: checking whether we have a parallel linear algebra support
configure:30550: result: no
configure:30794: checking for the actual linear algebra support
configure:30796: result: netlib-fallback
configure:31093: checking for the requested math support
configure:31095: result: none
configure:31654: checking for the actual math support
configure:31656: result: none
configure:31955: checking for the requested FFT support
configure:31957: result: none
configure:33061: checking for the actual FFT support
configure:33063: result: none
configure:33359: checking for the requested DFT support
configure:33361: result: atompaw+libxc+wannier90
configure:33730: checking xc.h usability
configure:33730: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:33730: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| #define SIZEOF_PTRDIFF_T 0
| #define const /**/
| #define size_t unsigned int
| #define HAVE_FC_ALLOCATABLE_DTARRAYS 1
| #define HAVE_FC_ISO_C_BINDING 1
| #define HAVE_FC_EXIT 1
| #define HAVE_FC_FLUSH_ 1
| #define HAVE_FC_GAMMA 1
| #define HAVE_FC_GETENV 1
| #define HAVE_FC_GETPID 1
| #define HAVE_FC_NULL 1
| #define HAVE_FC_LONG_LINES 1
| #define HAVE_FC_STREAM_IO 1
| #define HAVE_FC_CPUTIME 1
| #define HAVE_TRIO_NETCDF 1
| #define HAVE_TRIO_ETSF_IO 1
| #define HAVE_TIMER_ABINIT 1
| #define HAVE_TIMER 1
| #define HAVE_TIMER_SERIAL 1
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <xc.h>
configure:33730: result: no
configure:33730: checking xc.h presence
configure:33730: gcc -E       conftest.c
conftest.c:66:16: error: xc.h: No such file or directory
configure:33730: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| #define SIZEOF_PTRDIFF_T 0
| #define const /**/
| #define size_t unsigned int
| #define HAVE_FC_ALLOCATABLE_DTARRAYS 1
| #define HAVE_FC_ISO_C_BINDING 1
| #define HAVE_FC_EXIT 1
| #define HAVE_FC_FLUSH_ 1
| #define HAVE_FC_GAMMA 1
| #define HAVE_FC_GETENV 1
| #define HAVE_FC_GETPID 1
| #define HAVE_FC_NULL 1
| #define HAVE_FC_LONG_LINES 1
| #define HAVE_FC_STREAM_IO 1
| #define HAVE_FC_CPUTIME 1
| #define HAVE_TRIO_NETCDF 1
| #define HAVE_TRIO_ETSF_IO 1
| #define HAVE_TIMER_ABINIT 1
| #define HAVE_TIMER 1
| #define HAVE_TIMER_SERIAL 1
| /* end confdefs.h.  */
| #include <xc.h>
configure:33730: result: no
configure:33730: checking for xc.h
configure:33730: result: no
configure:33730: checking xc_funcs.h usability
configure:33730: gcc -c  -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:33730: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| #define SIZEOF_PTRDIFF_T 0
| #define const /**/
| #define size_t unsigned int
| #define HAVE_FC_ALLOCATABLE_DTARRAYS 1
| #define HAVE_FC_ISO_C_BINDING 1
| #define HAVE_FC_EXIT 1
| #define HAVE_FC_FLUSH_ 1
| #define HAVE_FC_GAMMA 1
| #define HAVE_FC_GETENV 1
| #define HAVE_FC_GETPID 1
| #define HAVE_FC_NULL 1
| #define HAVE_FC_LONG_LINES 1
| #define HAVE_FC_STREAM_IO 1
| #define HAVE_FC_CPUTIME 1
| #define HAVE_TRIO_NETCDF 1
| #define HAVE_TRIO_ETSF_IO 1
| #define HAVE_TIMER_ABINIT 1
| #define HAVE_TIMER 1
| #define HAVE_TIMER_SERIAL 1
| /* end confdefs.h.  */
| #include <stdio.h>
| #ifdef HAVE_SYS_TYPES_H
| # include <sys/types.h>
| #endif
| #ifdef HAVE_SYS_STAT_H
| # include <sys/stat.h>
| #endif
| #ifdef STDC_HEADERS
| # include <stdlib.h>
| # include <stddef.h>
| #else
| # ifdef HAVE_STDLIB_H
| #  include <stdlib.h>
| # endif
| #endif
| #ifdef HAVE_STRING_H
| # if !defined STDC_HEADERS && defined HAVE_MEMORY_H
| #  include <memory.h>
| # endif
| # include <string.h>
| #endif
| #ifdef HAVE_STRINGS_H
| # include <strings.h>
| #endif
| #ifdef HAVE_INTTYPES_H
| # include <inttypes.h>
| #endif
| #ifdef HAVE_STDINT_H
| # include <stdint.h>
| #endif
| #ifdef HAVE_UNISTD_H
| # include <unistd.h>
| #endif
| #include <xc_funcs.h>
configure:33730: result: no
configure:33730: checking xc_funcs.h presence
configure:33730: gcc -E       conftest.c
conftest.c:66:22: error: xc_funcs.h: No such file or directory
configure:33730: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| #define SIZEOF_PTRDIFF_T 0
| #define const /**/
| #define size_t unsigned int
| #define HAVE_FC_ALLOCATABLE_DTARRAYS 1
| #define HAVE_FC_ISO_C_BINDING 1
| #define HAVE_FC_EXIT 1
| #define HAVE_FC_FLUSH_ 1
| #define HAVE_FC_GAMMA 1
| #define HAVE_FC_GETENV 1
| #define HAVE_FC_GETPID 1
| #define HAVE_FC_NULL 1
| #define HAVE_FC_LONG_LINES 1
| #define HAVE_FC_STREAM_IO 1
| #define HAVE_FC_CPUTIME 1
| #define HAVE_TRIO_NETCDF 1
| #define HAVE_TRIO_ETSF_IO 1
| #define HAVE_TIMER_ABINIT 1
| #define HAVE_TIMER 1
| #define HAVE_TIMER_SERIAL 1
| /* end confdefs.h.  */
| #include <xc_funcs.h>
configure:33730: result: no
configure:33730: checking for xc_funcs.h
configure:33730: result: no
configure:33755: checking for library containing xc_func_init
configure:33794: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse              conftest.c       -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:33794: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| #define SIZEOF_PTRDIFF_T 0
| #define const /**/
| #define size_t unsigned int
| #define HAVE_FC_ALLOCATABLE_DTARRAYS 1
| #define HAVE_FC_ISO_C_BINDING 1
| #define HAVE_FC_EXIT 1
| #define HAVE_FC_FLUSH_ 1
| #define HAVE_FC_GAMMA 1
| #define HAVE_FC_GETENV 1
| #define HAVE_FC_GETPID 1
| #define HAVE_FC_NULL 1
| #define HAVE_FC_LONG_LINES 1
| #define HAVE_FC_STREAM_IO 1
| #define HAVE_FC_CPUTIME 1
| #define HAVE_TRIO_NETCDF 1
| #define HAVE_TRIO_ETSF_IO 1
| #define HAVE_TIMER_ABINIT 1
| #define HAVE_TIMER 1
| #define HAVE_TIMER_SERIAL 1
| /* end confdefs.h.  */
| 
| /* Override any GCC internal prototype to avoid an error.
|    Use char because int might match the return type of a GCC
|    builtin and then its argument prototype would still apply.  */
| #ifdef __cplusplus
| extern "C"
| #endif
| char xc_func_init ();
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| return xc_func_init ();
|   ;
|   return 0;
| }
configure:33794: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse              conftest.c -lxc        -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:33794: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| #define SIZEOF_PTRDIFF_T 0
| #define const /**/
| #define size_t unsigned int
| #define HAVE_FC_ALLOCATABLE_DTARRAYS 1
| #define HAVE_FC_ISO_C_BINDING 1
| #define HAVE_FC_EXIT 1
| #define HAVE_FC_FLUSH_ 1
| #define HAVE_FC_GAMMA 1
| #define HAVE_FC_GETENV 1
| #define HAVE_FC_GETPID 1
| #define HAVE_FC_NULL 1
| #define HAVE_FC_LONG_LINES 1
| #define HAVE_FC_STREAM_IO 1
| #define HAVE_FC_CPUTIME 1
| #define HAVE_TRIO_NETCDF 1
| #define HAVE_TRIO_ETSF_IO 1
| #define HAVE_TIMER_ABINIT 1
| #define HAVE_TIMER 1
| #define HAVE_TIMER_SERIAL 1
| /* end confdefs.h.  */
| 
| /* Override any GCC internal prototype to avoid an error.
|    Use char because int might match the return type of a GCC
|    builtin and then its argument prototype would still apply.  */
| #ifdef __cplusplus
| extern "C"
| #endif
| char xc_func_init ();
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| return xc_func_init ();
|   ;
|   return 0;
| }
configure:33794: gcc -o conftest  -g -O2 -mtune=native -march=native -mfpmath=sse              conftest.c -ldft_xc        -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:33794: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.10.3"
| #define PACKAGE_STRING "ABINIT 6.10.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.10.3"
| #define ABINIT_VERSION "6.10.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "10"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120402"
| #define ABINIT_VERSION_BASE "6.10"
| #define HAVE_OS_LINUX 1
| #define CC_GNU 1
| #define STDC_HEADERS 1
| #define HAVE_SYS_TYPES_H 1
| #define HAVE_SYS_STAT_H 1
| #define HAVE_STDLIB_H 1
| #define HAVE_STRING_H 1
| #define HAVE_MEMORY_H 1
| #define HAVE_STRINGS_H 1
| #define HAVE_INTTYPES_H 1
| #define HAVE_STDINT_H 1
| #define HAVE_UNISTD_H 1
| #define WORDS_BIGENDIAN 1
| #define CXX_GNU 1
| #define FC_IBM 1
| #define FC_FUNC(name,NAME) name
| #define FC_FUNC_(name,NAME) name
| #define ABINIT_TARGET "powerpc64_linux_ibm11.1"
| #define SIZEOF_CHAR 0
| #define SIZEOF_SHORT 0
| #define SIZEOF_INT 0
| #define SIZEOF_LONG 0
| #define SIZEOF_LONG_LONG 0
| #define SIZEOF_UNSIGNED_INT 0
| #define SIZEOF_UNSIGNED_LONG 0
| #define SIZEOF_UNSIGNED_LONG_LONG 0
| #define SIZEOF_FLOAT 0
| #define SIZEOF_DOUBLE 0
| #define SIZEOF_LONG_DOUBLE 0
| #define SIZEOF_SIZE_T 0
| #define SIZEOF_PTRDIFF_T 0
| #define const /**/
| #define size_t unsigned int
| #define HAVE_FC_ALLOCATABLE_DTARRAYS 1
| #define HAVE_FC_ISO_C_BINDING 1
| #define HAVE_FC_EXIT 1
| #define HAVE_FC_FLUSH_ 1
| #define HAVE_FC_GAMMA 1
| #define HAVE_FC_GETENV 1
| #define HAVE_FC_GETPID 1
| #define HAVE_FC_NULL 1
| #define HAVE_FC_LONG_LINES 1
| #define HAVE_FC_STREAM_IO 1
| #define HAVE_FC_CPUTIME 1
| #define HAVE_TRIO_NETCDF 1
| #define HAVE_TRIO_ETSF_IO 1
| #define HAVE_TIMER_ABINIT 1
| #define HAVE_TIMER 1
| #define HAVE_TIMER_SERIAL 1
| /* end confdefs.h.  */
| 
| /* Override any GCC internal prototype to avoid an error.
|    Use char because int might match the return type of a GCC
|    builtin and then its argument prototype would still apply.  */
| #ifdef __cplusplus
| extern "C"
| #endif
| char xc_func_init ();
| #ifdef FC_DUMMY_MAIN
| #ifndef FC_DUMMY_MAIN_EQ_F77
| #  ifdef __cplusplus
|      extern "C"
| #  endif
|    int FC_DUMMY_MAIN() { return 1; }
| #endif
| #endif
| int
| main ()
| {
| return xc_func_init ();
|   ;
|   return 0;
| }
configure:33811: result: no
configure:33834: checking for Fortran module includes
configure:33856: xlf -c  -g -qzerosize    conftest.F90 >&5
"conftest.F90", line 3.13: 1514-219 (S) Unable to access module symbol file for module xc_f90_lib_m. Check path and file permissions of file. Use association not done for this module.
1501-511  Compilation failed for file conftest.F90.
configure:33856: $? = 1
configure: failed program was:
|       program main
| 
|         use xc_f90_lib_m
| 
|       end
configure:33872: xlf -c  -g -qzerosize   -I/usr/include  conftest.F90 >&5
"conftest.F90", line 3.15: 1514-219 (S) Unable to access module symbol file for module xc_f90_lib_m. Check path and file permissions of file. Use association not done for this module.
1501-511  Compilation failed for file conftest.F90.
configure:33872: $? = 1
configure: failed program was:
|       program main
| 
|           use xc_f90_lib_m
| 
|       end
configure:33879: result: unknown
configure:34178: WARNING: falling back to internal libxc version
configure:33382: WARNING: AtomPAW recommends missing LibXC support
configure:33507: WARNING: BigDFT requires missing linear algebra support
configure:34178: WARNING: falling back to internal atompaw version
configure:34145: WARNING: wannier90 requires missing linear algebra support
configure:34178: WARNING: falling back to internal wannier90 version
configure:34462: checking for the actual DFT support
configure:34464: result: libxc-fallback+atompaw-fallback+wannier90-fallback
configure:34504: using former plugins as a temporary workaround
configure:34514: fallbacks to enable => atompaw etsf_io libxc linalg netcdf wannier90
configure:34521: checking whether to build atompaw
configure:34523: result: yes
configure:34521: checking whether to build bigdft
configure:34523: result: no
configure:34521: checking whether to build etsf_io
configure:34523: result: yes
configure:34521: checking whether to build fox
configure:34523: result: no
configure:34521: checking whether to build libxc
configure:34523: result: yes
configure:34521: checking whether to build linalg
configure:34523: result: yes
configure:34521: checking whether to build netcdf
configure:34523: result: yes
configure:34521: checking whether to build wannier90
configure:34523: result: yes
configure:34582: using tarball repository /home/unimainz/maust/abinit-6.10.3/tarballs
configure:34786: checking for a source tarball of LINALG
configure:34789: result: yes
configure:34797: checking for md5sum
configure:34813: found /usr/bin/md5sum
configure:34824: result: md5sum
configure:34858: tarball MD5 check succeeded
configure:35051: applying LINALG tricks (vendor: ibm, version: 11.1)
configure:35060: checking whether to enable the LINALG fallback
configure:35062: result: yes
configure:35064: checking whether to build the LINALG fallback
configure:35066: result: yes
configure:35482: checking whether to enable the FOX fallback
configure:35484: result: no
configure:35486: checking whether to build the FOX fallback
configure:35488: result: no
configure:35616: checking for a source tarball of NETCDF
configure:35619: result: yes
configure:35688: tarball MD5 check succeeded
configure:35898: applying NetCDF tricks (vendor: ibm, version: 11.1)
configure:35960: checking whether to enable the NETCDF fallback
configure:35962: result: yes
configure:35964: checking whether to build the NETCDF fallback
configure:35966: result: yes
configure:36090: checking for a source tarball of ETSF_IO
configure:36093: result: yes
configure:36162: tarball MD5 check succeeded
configure:36358: applying ETSF_IO tricks (vendor: ibm, version: 11.1)
configure:36373: checking whether to enable the ETSF_IO fallback
configure:36375: result: yes
configure:36377: checking whether to build the ETSF_IO fallback
configure:36379: result: yes
configure:36489: checking for a source tarball of LIBXC
configure:36492: result: yes
configure:36561: tarball MD5 check succeeded
configure:36763: applying LIBXC tricks
configure:36783: checking whether to enable the LIBXC fallback
configure:36785: result: yes
configure:36787: checking whether to build the LIBXC fallback
configure:36789: result: yes
configure:36899: checking for a source tarball of ATOMPAW
configure:36902: result: yes
configure:36971: tarball MD5 check succeeded
configure:37178: applying AtomPAW tricks (vendor: ibm, version: 11.1)
configure:37198: checking whether to enable the ATOMPAW fallback
configure:37200: result: yes
configure:37202: checking whether to build the ATOMPAW fallback
configure:37204: result: yes
configure:37596: checking whether to enable the BIGDFT fallback
configure:37598: result: no
configure:37600: checking whether to build the BIGDFT fallback
configure:37602: result: no
configure:37708: checking for a source tarball of WANNIER90
configure:37711: result: yes
configure:37780: tarball MD5 check succeeded
configure:37986: applying Wannier90 tricks (vendor: ibm, version: 11.1)
configure:38015: checking whether to enable the WANNIER90 fallback
configure:38017: result: yes
configure:38019: checking whether to build the WANNIER90 fallback
configure:38021: result: yes
configure:38089: checking whether to build test timeout code
configure:38091: result: no
configure:38260: checking timeout for automatic tests
configure:38263: result: none
configure:38306: checking whether to enable bindings
configure:38308: result: no
configure:38974: checking whether to enable BSE unpacking
configure:38981: result: no
configure:38985: checking whether to enable CLib
configure:38992: result: no
configure:39004: checking whether to build exports
configure:39006: result: no
configure:39018: checking whether to accelerate 'make check'
configure:39020: result: no
configure:39032: checking whether to enable GW cut-off
configure:39039: result: no
configure:39043: checking whether to enable GW double-precision calculations
configure:39050: result: no
configure:39062: checking whether to enable openmp in the GW
configure:39069: result: no
configure:39074: checking whether to enable optimal GW
configure:39081: result: no
configure:39085: checking whether to enable GW wrapper
configure:39092: result: no
configure:39096: checking whether to activate maintainer checks
configure:39098: result: no
configure:39118: checking whether to use macroave
configure:39125: result: yes
configure:39145: checking whether to reduce 'make check' for packaging
configure:39147: result: no
configure:39159: checking whether to read input from stdin
configure:39166: result: yes
configure:39170: checking whether to activate Symmetric Multi-Processing
configure:39177: result: no
configure:39191: checking whether to activate ZDOTC and ZDOTU workaround
configure:39201: result: no
configure:39237: the Abinit GUI will never be built
configure:39563: creating ./config.status

## ---------------------- ##
## Running config.status. ##
## ---------------------- ##

This file was extended by ABINIT config.status 6.10.3, which was
generated by GNU Autoconf 2.68.  Invocation command line was

  CONFIG_FILES    = 
  CONFIG_HEADERS  = 
  CONFIG_LINKS    = 
  CONFIG_COMMANDS = 
  $ ./config.status 

on p590-tic-1-unimz1

config.status:1626: creating config.dump
config.status:1626: creating config.mk
config.status:1626: creating config.pc
config.status:1626: creating config.sh
config.status:1626: creating config/wrappers/wrap-fc
config.status:1626: creating src/incs/Makefile
config.status:1626: creating src/mods/Makefile
config.status:1626: creating src/16_hideleave/m_build_info.F90
config.status:1626: creating tests/tests.env
config.status:1626: creating tests/tests-install.env
config.status:1626: creating Makefile
config.status:1626: creating src/Makefile
config.status:1626: creating src/01_gsl_ext/Makefile
config.status:1626: creating src/01_interfaces_ext/Makefile
config.status:1626: creating src/01_macroavnew_ext/Makefile
config.status:1626: creating src/02_clib/Makefile
config.status:1626: creating src/10_defs/Makefile
config.status:1626: creating src/10_memory_mpi/Makefile
config.status:1626: creating src/11_qespresso_ext/Makefile
config.status:1626: creating src/12_hide_mpi/Makefile
config.status:1626: creating src/14_hidewrite/Makefile
config.status:1626: creating src/15_gpu_toolbox/Makefile
config.status:1626: creating src/16_hideleave/Makefile
config.status:1626: creating src/18_timing/Makefile
config.status:1626: creating src/27_toolbox_oop/Makefile
config.status:1626: creating src/28_numeric_noabirule/Makefile
config.status:1626: creating src/32_contract/Makefile
config.status:1626: creating src/32_util/Makefile
config.status:1626: creating src/42_geometry/Makefile
config.status:1626: creating src/42_nlstrain/Makefile
config.status:1626: creating src/42_parser/Makefile
config.status:1626: creating src/43_abitypes_defs/Makefile
config.status:1626: creating src/43_ptgroups/Makefile
config.status:1626: creating src/44_geomoptim/Makefile
config.status:1626: creating src/45_psp_parser/Makefile
config.status:1626: creating src/47_xml/Makefile
config.status:1626: creating src/49_gw_toolbox_oop/Makefile
config.status:1626: creating src/51_manage_cuda/Makefile
config.status:1626: creating src/51_manage_mpi/Makefile
config.status:1626: creating src/52_fft_mpi_noabirule/Makefile
config.status:1626: creating src/53_abiutil/Makefile
config.status:1626: creating src/53_ffts/Makefile
config.status:1626: creating src/53_spacepar/Makefile
config.status:1626: creating src/56_mixing/Makefile
config.status:1626: creating src/56_recipspace/Makefile
config.status:1626: creating src/56_xc/Makefile
config.status:1626: creating src/57_iovars/Makefile
config.status:1626: creating src/59_io_mpi/Makefile
config.status:1626: creating src/61_ionetcdf/Makefile
config.status:1626: creating src/62_cg_noabirule/Makefile
config.status:1626: creating src/62_iowfdenpot/Makefile
config.status:1626: creating src/62_occeig/Makefile
config.status:1626: creating src/62_poisson/Makefile
config.status:1626: creating src/62_wvl_wfs/Makefile
config.status:1626: creating src/63_bader/Makefile
config.status:1626: creating src/64_atompaw/Makefile
config.status:1626: creating src/65_nonlocal/Makefile
config.status:1626: creating src/65_psp/Makefile
config.status:1626: creating src/66_paw/Makefile
config.status:1626: creating src/66_wfs/Makefile
config.status:1626: creating src/67_common/Makefile
config.status:1626: creating src/68_dmft/Makefile
config.status:1626: creating src/68_recursion/Makefile
config.status:1626: creating src/68_rsprc/Makefile
config.status:1626: creating src/69_wfdesc/Makefile
config.status:1626: creating src/70_gw/Makefile
config.status:1626: creating src/71_bse/Makefile
config.status:1626: creating src/72_response/Makefile
config.status:1626: creating src/77_ddb/Makefile
config.status:1626: creating src/77_lwf/Makefile
config.status:1626: creating src/77_suscep/Makefile
config.status:1626: creating src/79_seqpar_mpi/Makefile
config.status:1626: creating src/83_cut3d/Makefile
config.status:1626: creating src/93_rdm/Makefile
config.status:1626: creating src/95_drive/Makefile
config.status:1626: creating src/98_main/Makefile
config.status:1626: creating src/libs/Makefile
config.status:1626: creating tests/Nightly/Makefile
config.status:1626: creating plugins/Makefile
config.status:1626: creating plugins/atompaw/Makefile
config.status:1626: creating plugins/bigdft/Makefile
config.status:1626: creating plugins/etsf_io/Makefile
config.status:1626: creating plugins/fox/Makefile
config.status:1626: creating plugins/libxc/Makefile
config.status:1626: creating plugins/linalg/Makefile
config.status:1626: creating plugins/netcdf/Makefile
config.status:1626: creating plugins/wannier90/Makefile
config.status:1626: creating bindings/Makefile
config.status:1626: creating bindings/parser/Makefile
config.status:1626: creating doc/Makefile
config.status:1626: creating tests/Makefile
config.status:1626: creating config.h
config.status:1807: config.h is unchanged
config.status:1855: executing depfiles commands
config.status:1855: executing dump-optim commands
config.status:1855: executing script-perms commands
config.status:1855: executing long-lines commands

## ---------------- ##
## Cache variables. ##
## ---------------- ##

ac_cv_build=powerpc64-unknown-linux-gnu
ac_cv_c_bigendian=yes
ac_cv_c_compiler_gnu=yes
ac_cv_c_const=no
ac_cv_cxx_compiler_gnu=yes
ac_cv_env_ARFLAGS_DEBUG_set=
ac_cv_env_ARFLAGS_DEBUG_value=
ac_cv_env_ARFLAGS_EXTRA_set=
ac_cv_env_ARFLAGS_EXTRA_value=
ac_cv_env_ARFLAGS_OPTIM_set=
ac_cv_env_ARFLAGS_OPTIM_value=
ac_cv_env_CCC_set=
ac_cv_env_CCC_value=
ac_cv_env_CC_LDFLAGS_DEBUG_set=
ac_cv_env_CC_LDFLAGS_DEBUG_value=
ac_cv_env_CC_LDFLAGS_OPTIM_set=
ac_cv_env_CC_LDFLAGS_OPTIM_value=
ac_cv_env_CC_LDFLAGS_set=
ac_cv_env_CC_LDFLAGS_value=
ac_cv_env_CC_LIBS_DEBUG_set=
ac_cv_env_CC_LIBS_DEBUG_value=
ac_cv_env_CC_LIBS_OPTIM_set=
ac_cv_env_CC_LIBS_OPTIM_value=
ac_cv_env_CC_LIBS_set=
ac_cv_env_CC_LIBS_value=
ac_cv_env_CC_set=
ac_cv_env_CC_value=
ac_cv_env_CFLAGS_DEBUG_set=
ac_cv_env_CFLAGS_DEBUG_value=
ac_cv_env_CFLAGS_EXTRA_set=
ac_cv_env_CFLAGS_EXTRA_value=
ac_cv_env_CFLAGS_OPTIM_set=
ac_cv_env_CFLAGS_OPTIM_value=
ac_cv_env_CFLAGS_set=
ac_cv_env_CFLAGS_value=
ac_cv_env_CPPFLAGS_DEBUG_set=
ac_cv_env_CPPFLAGS_DEBUG_value=
ac_cv_env_CPPFLAGS_EXTRA_set=
ac_cv_env_CPPFLAGS_EXTRA_value=
ac_cv_env_CPPFLAGS_OPTIM_set=
ac_cv_env_CPPFLAGS_OPTIM_value=
ac_cv_env_CPPFLAGS_set=
ac_cv_env_CPPFLAGS_value=
ac_cv_env_CPP_set=
ac_cv_env_CPP_value=
ac_cv_env_CXXFLAGS_DEBUG_set=
ac_cv_env_CXXFLAGS_DEBUG_value=
ac_cv_env_CXXFLAGS_EXTRA_set=
ac_cv_env_CXXFLAGS_EXTRA_value=
ac_cv_env_CXXFLAGS_OPTIM_set=
ac_cv_env_CXXFLAGS_OPTIM_value=
ac_cv_env_CXXFLAGS_set=
ac_cv_env_CXXFLAGS_value=
ac_cv_env_CXX_LDFLAGS_DEBUG_set=
ac_cv_env_CXX_LDFLAGS_DEBUG_value=
ac_cv_env_CXX_LDFLAGS_EXTRA_set=
ac_cv_env_CXX_LDFLAGS_EXTRA_value=
ac_cv_env_CXX_LDFLAGS_OPTIM_set=
ac_cv_env_CXX_LDFLAGS_OPTIM_value=
ac_cv_env_CXX_LDFLAGS_set=
ac_cv_env_CXX_LDFLAGS_value=
ac_cv_env_CXX_LIBS_DEBUG_set=
ac_cv_env_CXX_LIBS_DEBUG_value=
ac_cv_env_CXX_LIBS_OPTIM_set=
ac_cv_env_CXX_LIBS_OPTIM_value=
ac_cv_env_CXX_LIBS_set=
ac_cv_env_CXX_LIBS_value=
ac_cv_env_CXX_set=
ac_cv_env_CXX_value=
ac_cv_env_FCFLAGS_DEBUG_set=
ac_cv_env_FCFLAGS_DEBUG_value=
ac_cv_env_FCFLAGS_EXTRA_set=
ac_cv_env_FCFLAGS_EXTRA_value=
ac_cv_env_FCFLAGS_OPTIM_set=
ac_cv_env_FCFLAGS_OPTIM_value=
ac_cv_env_FCFLAGS_set=
ac_cv_env_FCFLAGS_value=
ac_cv_env_FC_LDFLAGS_DEBUG_set=
ac_cv_env_FC_LDFLAGS_DEBUG_value=
ac_cv_env_FC_LDFLAGS_EXTRA_set=
ac_cv_env_FC_LDFLAGS_EXTRA_value=
ac_cv_env_FC_LDFLAGS_OPTIM_set=
ac_cv_env_FC_LDFLAGS_OPTIM_value=
ac_cv_env_FC_LDFLAGS_set=
ac_cv_env_FC_LDFLAGS_value=
ac_cv_env_FC_LIBS_DEBUG_set=
ac_cv_env_FC_LIBS_DEBUG_value=
ac_cv_env_FC_LIBS_OPTIM_set=
ac_cv_env_FC_LIBS_OPTIM_value=
ac_cv_env_FC_LIBS_set=
ac_cv_env_FC_LIBS_value=
ac_cv_env_FC_set=set
ac_cv_env_FC_value=xlf
ac_cv_env_FPPFLAGS_DEBUG_set=
ac_cv_env_FPPFLAGS_DEBUG_value=
ac_cv_env_FPPFLAGS_EXTRA_set=
ac_cv_env_FPPFLAGS_EXTRA_value=
ac_cv_env_FPPFLAGS_OPTIM_set=
ac_cv_env_FPPFLAGS_OPTIM_value=
ac_cv_env_FPPFLAGS_set=
ac_cv_env_FPPFLAGS_value=
ac_cv_env_FPP_set=
ac_cv_env_FPP_value=
ac_cv_env_LDFLAGS_set=
ac_cv_env_LDFLAGS_value=
ac_cv_env_LIBS_set=
ac_cv_env_LIBS_value=
ac_cv_env_MPI_RUNNER_set=
ac_cv_env_MPI_RUNNER_value=
ac_cv_env_SERIAL_RUNNER_set=
ac_cv_env_SERIAL_RUNNER_value=
ac_cv_env_XPPFLAGS_DEBUG_set=
ac_cv_env_XPPFLAGS_DEBUG_value=
ac_cv_env_XPPFLAGS_EXTRA_set=
ac_cv_env_XPPFLAGS_EXTRA_value=
ac_cv_env_XPPFLAGS_OPTIM_set=
ac_cv_env_XPPFLAGS_OPTIM_value=
ac_cv_env_XPPFLAGS_set=
ac_cv_env_XPPFLAGS_value=
ac_cv_env_XPP_set=
ac_cv_env_XPP_value=
ac_cv_env_build_alias_set=
ac_cv_env_build_alias_value=
ac_cv_env_host_alias_set=
ac_cv_env_host_alias_value=
ac_cv_env_target_alias_set=
ac_cv_env_target_alias_value=
ac_cv_fc_compiler_gnu=no
ac_cv_fc_dummy_main=none
ac_cv_fc_libs=' -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm'
ac_cv_fc_mangling='lower case, no underscore, no extra underscore'
ac_cv_fc_srcext_F90=none
ac_cv_fortran_dummy_main=none
ac_cv_func_abort=no
ac_cv_func_mallinfo=no
ac_cv_header_errno_h=no
ac_cv_header_inttypes_h=yes
ac_cv_header_malloc_h=no
ac_cv_header_math_h=no
ac_cv_header_mcheck_h=no
ac_cv_header_memory_h=yes
ac_cv_header_netcdf_h=no
ac_cv_header_numarray_arrayobject_h=no
ac_cv_header_stdarg_h=no
ac_cv_header_stdc=yes
ac_cv_header_stddef_h=no
ac_cv_header_stdint_h=yes
ac_cv_header_stdio_h=no
ac_cv_header_stdlib_h=yes
ac_cv_header_string_h=yes
ac_cv_header_strings_h=yes
ac_cv_header_sys_malloc_h=no
ac_cv_header_sys_resource_h=no
ac_cv_header_sys_stat_h=yes
ac_cv_header_sys_time_h=no
ac_cv_header_sys_types_h=yes
ac_cv_header_termios_h=no
ac_cv_header_unistd_h=yes
ac_cv_header_xc_funcs_h=no
ac_cv_header_xc_h=no
ac_cv_host=powerpc64-unknown-linux-gnu
ac_cv_objext=o
ac_cv_path_BOURNE_SHELL=/bin/sh
ac_cv_path_EGREP='/usr/bin/grep -E'
ac_cv_path_GREP=/usr/bin/grep
ac_cv_path_MV=/bin/mv
ac_cv_path_PERL=/usr/bin/perl
ac_cv_path_RM=/bin/rm
ac_cv_path_SED=/usr/bin/sed
ac_cv_path_abi_fc_path=/usr/bin/xlf
ac_cv_path_install='/usr/bin/install -c'
ac_cv_path_mkdir=/bin/mkdir
ac_cv_prog_AR=ar
ac_cv_prog_AWK=gawk
ac_cv_prog_CPP='gcc -E'
ac_cv_prog_CURL=curl
ac_cv_prog_DVI2PDF=dvipdf
ac_cv_prog_MD5SUM=md5sum
ac_cv_prog_PATCH=patch
ac_cv_prog_PS2PDF=ps2pdf
ac_cv_prog_PYTHON=python
ac_cv_prog_TAR=tar
ac_cv_prog_TRUE_CPP=cpp
ac_cv_prog_WGET=wget
ac_cv_prog_ac_ct_CC=gcc
ac_cv_prog_ac_ct_CXX=g++
ac_cv_prog_ac_ct_RANLIB=ranlib
ac_cv_prog_cc_c89=
ac_cv_prog_cc_c99=no
ac_cv_prog_cc_g=yes
ac_cv_prog_cxx_g=yes
ac_cv_prog_fc_g=yes
ac_cv_prog_fc_v=-v
ac_cv_prog_make_make_set=yes
ac_cv_search_nc_open=no
ac_cv_search_xc_func_init=no
ac_cv_search_zgemm=no
ac_cv_search_zhpev=no
ac_cv_sizeof_char=0
ac_cv_sizeof_double=0
ac_cv_sizeof_float=0
ac_cv_sizeof_int=0
ac_cv_sizeof_long=0
ac_cv_sizeof_long_double=0
ac_cv_sizeof_long_long=0
ac_cv_sizeof_ptrdiff_t=0
ac_cv_sizeof_short=0
ac_cv_sizeof_size_t=0
ac_cv_sizeof_unsigned_int=0
ac_cv_sizeof_unsigned_long=0
ac_cv_sizeof_unsigned_long_long=0
ac_cv_target=powerpc64-unknown-linux-gnu
ac_cv_type_size_t=no
am_cv_CC_dependencies_compiler_type=gcc3
am_cv_CXX_dependencies_compiler_type=gcc3
ax_cv_f90_modext=mod

## ----------------- ##
## Output variables. ##
## ----------------- ##

ABINIT_BINARY_PACKAGE='abinit-6.10.3_powerpc64_linux_ibm11.1'
ABINIT_TARGET='powerpc64_linux_ibm11.1'
ABINIT_VERSION='6.10.3'
ABINIT_VERSION_BASE='6.10'
ABINIT_VERSION_BUILD='20120402'
ABINIT_VERSION_MAJOR='6'
ABINIT_VERSION_MICRO='3'
ABINIT_VERSION_MINOR='10'
ABI_CPPFLAGS='    '
ACLOCAL='${SHELL} /home/unimainz/maust/abinit-6.10.3/config/gnu/missing --run aclocal-1.11'
AMDEPBACKSLASH='\'
AMDEP_FALSE='#'
AMDEP_TRUE=''
AMTAR='${SHELL} /home/unimainz/maust/abinit-6.10.3/config/gnu/missing --run tar'
AR='ar'
ARFLAGS='     rc'
ARFLAGS_64BITS=''
ARFLAGS_CMD='rc'
ARFLAGS_DEBUG=''
ARFLAGS_EXTRA=''
ARFLAGS_HINTS=''
ARFLAGS_OPTIM=''
ATOMPAW_BIN='/home/unimainz/maust/abinit-6.10.3/plugins/atompaw/atompaw'
AUTOCONF='${SHELL} /home/unimainz/maust/abinit-6.10.3/config/gnu/missing --run autoconf'
AUTOHEADER='${SHELL} /home/unimainz/maust/abinit-6.10.3/config/gnu/missing --run autoheader'
AUTOMAKE='${SHELL} /home/unimainz/maust/abinit-6.10.3/config/gnu/missing --run automake-1.11'
AWK='gawk'
BAZAAR=''
BOURNE_SHELL='/bin/sh'
CC='gcc'
CCDEPMODE='depmode=gcc3'
CC_LDFLAGS='    '
CC_LDFLAGS_64BITS=''
CC_LDFLAGS_DEBUG=''
CC_LDFLAGS_EXTRA=''
CC_LDFLAGS_GPU=''
CC_LDFLAGS_HINTS=''
CC_LDFLAGS_OPTIM=''
CC_LIBS='    '
CC_LIBS_64BITS=''
CC_LIBS_DEBUG=''
CC_LIBS_EXTRA=''
CC_LIBS_GPU=''
CC_LIBS_HINTS=''
CC_LIBS_OPTIM=''
CFGFLAGS_ATOMPAW=' --with-linalg-libs="-L$(abinit_builddir)/plugins/linalg -llapack -lblas" --enable-libxc --with-libxc-incs="-I$(abinit_builddir)/plugins/libxc" --with-libxc-libs="-L$(abinit_builddir)/plugins/libxc -lxc" --enable-static --disable-shared'
CFGFLAGS_BIGDFT=''
CFGFLAGS_ETSF_IO=''
CFGFLAGS_FOX=''
CFGFLAGS_LIBXC='--enable-fortran --disable-shared'
CFGFLAGS_LINALG=''
CFGFLAGS_NETCDF=' --disable-cxx --disable-cxx-4 --disable-dap --disable-hdf4 --disable-netcdf4 --disable-v2 --enable-fortran'
CFGFLAGS_WANNIER90=''
CFLAGS=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CFLAGS_64BITS=''
CFLAGS_ATOMPAW=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CFLAGS_BIGDFT=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CFLAGS_DEBUG='-g'
CFLAGS_ETSF_IO=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CFLAGS_EXTRA=''
CFLAGS_FOX=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CFLAGS_GPU=''
CFLAGS_HINTS=''
CFLAGS_LIBXC=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CFLAGS_LINALG=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CFLAGS_NETCDF=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CFLAGS_OPTIM='-O2 -mtune=native -march=native -mfpmath=sse'
CFLAGS_WANNIER90=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CPP='gcc -E'
CPPFLAGS=''
CPPFLAGS_64BITS=''
CPPFLAGS_ATOMPAW=''
CPPFLAGS_BIGDFT=''
CPPFLAGS_DEBUG=''
CPPFLAGS_ETSF_IO=''
CPPFLAGS_EXTRA=''
CPPFLAGS_FOX=''
CPPFLAGS_GPU=''
CPPFLAGS_HINTS=''
CPPFLAGS_LIBXC=''
CPPFLAGS_LINALG=''
CPPFLAGS_NETCDF=' -DNDEBUG -DIBMR2Fortran'
CPPFLAGS_OPTIM=''
CPPFLAGS_WANNIER90=' '
CURL='curl'
CXX='g++'
CXXDEPMODE='depmode=gcc3'
CXXFLAGS=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CXXFLAGS_64BITS=''
CXXFLAGS_ATOMPAW=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CXXFLAGS_BIGDFT=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CXXFLAGS_DEBUG='-g'
CXXFLAGS_ETSF_IO=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CXXFLAGS_EXTRA=''
CXXFLAGS_FOX=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CXXFLAGS_GPU=''
CXXFLAGS_HINTS=''
CXXFLAGS_LIBXC=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CXXFLAGS_LINALG=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CXXFLAGS_NETCDF=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CXXFLAGS_OPTIM='-O2 -mtune=native -march=native -mfpmath=sse'
CXXFLAGS_WANNIER90=' -g -O2 -mtune=native -march=native -mfpmath=sse  '
CXX_LDFLAGS='    '
CXX_LDFLAGS_64BITS=''
CXX_LDFLAGS_DEBUG=''
CXX_LDFLAGS_EXTRA=''
CXX_LDFLAGS_GPU=''
CXX_LDFLAGS_HINTS=''
CXX_LDFLAGS_OPTIM=''
CXX_LIBS='    '
CXX_LIBS_64BITS=''
CXX_LIBS_DEBUG=''
CXX_LIBS_EXTRA=''
CXX_LIBS_GPU=''
CXX_LIBS_HINTS=''
CXX_LIBS_OPTIM=''
CYGPATH_W='echo'
DEFS='-DHAVE_CONFIG_H'
DEPDIR='.deps'
DO_BUILD_01_GSL_EXT_FALSE=''
DO_BUILD_01_GSL_EXT_TRUE='#'
DO_BUILD_01_MACROAVNEW_EXT_FALSE='#'
DO_BUILD_01_MACROAVNEW_EXT_TRUE=''
DO_BUILD_02_CLIB_FALSE=''
DO_BUILD_02_CLIB_TRUE='#'
DO_BUILD_15_GPU_TOOLBOX_FALSE=''
DO_BUILD_15_GPU_TOOLBOX_TRUE='#'
DO_BUILD_32_CONTRACT_FALSE=''
DO_BUILD_32_CONTRACT_TRUE='#'
DO_BUILD_51_MANAGE_CUDA_FALSE=''
DO_BUILD_51_MANAGE_CUDA_TRUE='#'
DO_BUILD_ATOMPAW_FALSE='#'
DO_BUILD_ATOMPAW_TRUE=''
DO_BUILD_BIGDFT_FALSE=''
DO_BUILD_BIGDFT_TRUE='#'
DO_BUILD_BINDINGS_FALSE=''
DO_BUILD_BINDINGS_TRUE='#'
DO_BUILD_CCLOCK_FALSE=''
DO_BUILD_CCLOCK_TRUE='#'
DO_BUILD_ETSF_IO_FALSE='#'
DO_BUILD_ETSF_IO_TRUE=''
DO_BUILD_EXPORTS_FALSE=''
DO_BUILD_EXPORTS_TRUE='#'
DO_BUILD_FOX_FALSE=''
DO_BUILD_FOX_TRUE='#'
DO_BUILD_LIBXC_FALSE='#'
DO_BUILD_LIBXC_TRUE=''
DO_BUILD_LINALG_FALSE='#'
DO_BUILD_LINALG_TRUE=''
DO_BUILD_MACROAVE_FALSE='#'
DO_BUILD_MACROAVE_TRUE=''
DO_BUILD_NETCDF_FALSE='#'
DO_BUILD_NETCDF_TRUE=''
DO_BUILD_NIGHTLY_FALSE=''
DO_BUILD_NIGHTLY_TRUE='#'
DO_BUILD_WANNIER90_FALSE='#'
DO_BUILD_WANNIER90_TRUE=''
DO_CHECK_FAST_FALSE=''
DO_CHECK_FAST_TRUE='#'
DO_CHECK_PKG_FALSE=''
DO_CHECK_PKG_TRUE='#'
DO_TEST_ABIRULES_FALSE=''
DO_TEST_ABIRULES_TRUE='#'
DO_TEST_ATOMPAW_FALSE='#'
DO_TEST_ATOMPAW_TRUE=''
DO_TEST_BIGDFT_FALSE=''
DO_TEST_BIGDFT_TRUE='#'
DO_TEST_BUILDSYS_FALSE=''
DO_TEST_BUILDSYS_TRUE='#'
DO_TEST_ETSF_IO_FALSE='#'
DO_TEST_ETSF_IO_TRUE=''
DO_TEST_FOX_FALSE=''
DO_TEST_FOX_TRUE='#'
DO_TEST_GUI_FALSE=''
DO_TEST_GUI_TRUE='#'
DO_TEST_GWDP_FALSE=''
DO_TEST_GWDP_TRUE='#'
DO_TEST_LIBXC_FALSE='#'
DO_TEST_LIBXC_TRUE=''
DO_TEST_MPI_FALSE=''
DO_TEST_MPI_TRUE='#'
DO_TEST_NETCDF_FALSE='#'
DO_TEST_NETCDF_TRUE=''
DO_TEST_VDWXC_FALSE=''
DO_TEST_VDWXC_TRUE='#'
DO_TEST_WANNIER90_FALSE='#'
DO_TEST_WANNIER90_TRUE=''
DVI2PDF='dvipdf'
DVI2PS=''
ECHO_C=''
ECHO_N='-n'
ECHO_T=''
EGREP='/usr/bin/grep -E'
EXEEXT=''
F77='xlf'
FC='xlf'
FCFLAGS=' -g -qzerosize '
FCFLAGS_64BITS=''
FCFLAGS_ATOMPAW=' -g -qzerosize  -O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
FCFLAGS_BIGDFT=' -g -qzerosize  -O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
FCFLAGS_DEBUG='-g'
FCFLAGS_ETSF_IO=' -g -qzerosize  -O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031 -qsuffix=cpp=f90:f=f'
FCFLAGS_EXTRA=''
FCFLAGS_F90=''
FCFLAGS_FIXEDFORM='-qsuffix=cpp=F:f=f -qfixed'
FCFLAGS_FOX=' -g -qzerosize  -O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
FCFLAGS_FREEFORM='-qsuffix=cpp=F90:f=f90 -qfree=f90'
FCFLAGS_HINTS='-qzerosize'
FCFLAGS_LIBXC=' -g -qzerosize  -O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
FCFLAGS_LINALG=' -g -qzerosize  -O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031 -qsuffix=cpp=F:f=f -qfixed'
FCFLAGS_MODDIR='-qmoddir=$(abinit_moddir) -I$(abinit_moddir)'
FCFLAGS_NETCDF=' -g -qzerosize  -O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031 -WF,-DIBMR2Fortran,-DNDEBUG'
FCFLAGS_OPTIM='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
FCFLAGS_WANNIER90=' -g -qzerosize  -O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
FCLIBS=' -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm'
FCLIBS_ATOMPAW=''
FCLIBS_ETSF_IO=''
FCLIBS_FOX=''
FCLIBS_NETCDF=''
FCLIBS_WANNIER90='-L$(abinit_builddir)/plugins/linalg -llapack -lblas '
FC_LDFLAGS='    '
FC_LDFLAGS_64BITS=''
FC_LDFLAGS_DEBUG=''
FC_LDFLAGS_EXTRA=''
FC_LDFLAGS_HINTS=''
FC_LDFLAGS_OPTIM=''
FC_LIBS='      -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm'
FC_LIBS_64BITS=''
FC_LIBS_DEBUG=''
FC_LIBS_EXTRA=''
FC_LIBS_HINTS=''
FC_LIBS_OPTIM=''
FC_NOWRAP='xlf'
FFLAGS=' -g -qzerosize '
FPP=''
FPPFLAGS='   -WF,-DHAVE_CONFIG_H '
FPPFLAGS_ATOMPAW='   -WF,-DHAVE_CONFIG_H '
FPPFLAGS_BIGDFT='   -WF,-DHAVE_CONFIG_H '
FPPFLAGS_DEBUG=''
FPPFLAGS_ETSF_IO='   -WF,-DHAVE_CONFIG_H '
FPPFLAGS_EXTRA=''
FPPFLAGS_FOX='   -WF,-DHAVE_CONFIG_H '
FPPFLAGS_HINTS='-WF,-DHAVE_CONFIG_H'
FPPFLAGS_LIBXC='-P -std=c99'
FPPFLAGS_LINALG='   -WF,-DHAVE_CONFIG_H '
FPPFLAGS_NETCDF='   -WF,-DHAVE_CONFIG_H '
FPPFLAGS_OPTIM=''
FPPFLAGS_WANNIER90='   -WF,-DHAVE_CONFIG_H '
GRAPHATOM_BIN='/home/unimainz/maust/abinit-6.10.3/plugins/atompaw/graphatom'
GREP='/usr/bin/grep'
GSL_CONFIG=''
INSTALL_DATA='${INSTALL} -m 644'
INSTALL_PROGRAM='${INSTALL}'
INSTALL_SCRIPT='${INSTALL}'
INSTALL_STRIP_PROGRAM='$(install_sh) -c -s'
LATEX=''
LDFLAGS='    '
LIBOBJS=''
LIBS='      -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm '
LN_S='ln -s'
LTLIBOBJS=''
LTXFLAGS=''
MAKEINFO='${SHELL} /home/unimainz/maust/abinit-6.10.3/config/gnu/missing --run makeinfo'
MARKDOWN='/usr/bin/perl /home/unimainz/maust/abinit-6.10.3/util/developers/markdown.pl'
MD5SUM='md5sum'
MDFLAGS=''
MKDIR_P='/bin/mkdir -p'
MODEXT='mod'
MPI_RUNNER=''
MV='/bin/mv'
NVCC=''
NVCC_CFLAGS=''
NVCC_CPPFLAGS=''
NVCC_LDFLAGS=''
NVCC_LIBS=''
OBJEXT='o'
PACKAGE='abinit'
PACKAGE_BUGREPORT='https://bugs.launchpad.net/abinit/'
PACKAGE_NAME='ABINIT'
PACKAGE_STRING='ABINIT 6.10.3'
PACKAGE_TARNAME='abinit'
PACKAGE_URL=''
PACKAGE_VERSION='6.10.3'
PATCH='patch'
PATH_SEPARATOR=':'
PDFFLAGS=''
PERL='/usr/bin/perl'
PS2PDF='ps2pdf'
PYTHON='python'
PYTHON_CPPFLAGS=''
RANLIB='ranlib'
RM='/bin/rm'
SED='/usr/bin/sed'
SERIAL_RUNNER=''
SET_MAKE=''
SHELL='/bin/sh'
STRIP=''
TAR='tar'
TRUE_CPP='cpp'
VERSION='6.10.3'
WANNIER90_BIN=''
WGET='wget'
XPP=''
XPPFLAGS='    '
XPPFLAGS_DEBUG=''
XPPFLAGS_EXTRA=''
XPPFLAGS_OPTIM=''
abi_ac_version='026800'
abi_am_version='011100'
abi_cc_path=''
abi_cc_vendor='gnu'
abi_cc_version='(SUSE'
abi_cpp_path=''
abi_cpu_64bits='yes'
abi_cpu_bits='64'
abi_cpu_model='powerpc64'
abi_cpu_platform='unknown'
abi_cpu_spec='ibm_powerpc64'
abi_cpu_vendor='ibm'
abi_cxx_path=''
abi_cxx_vendor='gnu'
abi_cxx_version='(SUSE'
abi_fc_path='/usr/bin/xlf'
abi_fc_vendor='ibm'
abi_fc_version='11.1'
abi_fc_wrap='no'
abi_fpp_path=''
abi_lt_version='020204'
abi_m4_version='010416'
abi_mpi_runner_works=''
abi_sys_spec='linux-powerpc64'
abinit_bindir='/usr/local/bin'
abinit_builddir='/home/unimainz/maust/abinit-6.10.3'
abinit_chkdir='/usr/local/share/abinit/tests'
abinit_datdir='/usr/local/share/abinit'
abinit_docdir='/usr/local/doc/abinit'
abinit_incdir='/usr/local/include'
abinit_libdir='/usr/local/lib'
abinit_mandir='/usr/local/share/man'
abinit_moddir='/home/unimainz/maust/abinit-6.10.3/src/mods'
abinit_prefix='/usr/local'
abinit_srcdir='/home/unimainz/maust/abinit-6.10.3'
abinit_tardir='/home/unimainz/maust/abinit-6.10.3/tarballs'
ac_ct_CC='gcc'
ac_ct_CXX='g++'
ac_ct_FC=''
am__EXEEXT_FALSE=''
am__EXEEXT_TRUE='#'
am__fastdepCC_FALSE='#'
am__fastdepCC_TRUE=''
am__fastdepCXX_FALSE='#'
am__fastdepCXX_TRUE=''
am__include='include'
am__isrc=''
am__leading_dot='.'
am__quote=''
am__tar='${AMTAR} chof - "$$tardir"'
am__untar='${AMTAR} xf -'
atompaw_pkg_name='atompaw-3.0.1.2'
atompaw_pkg_string='AtomPAW version 3.0.1.2'
bigdft_pkg_name='bigdft-1.2.0.6'
bigdft_pkg_string='BigDFT library 1.2.0.6 (upstream release)'
bindir='${exec_prefix}/bin'
build='powerpc64-unknown-linux-gnu'
build_alias=''
build_atompaw='yes'
build_bigdft='no'
build_cpu='powerpc64'
build_etsf_io='yes'
build_fox='no'
build_libxc='yes'
build_linalg='yes'
build_netcdf='yes'
build_os='linux-gnu'
build_vendor='unknown'
build_wannier90='yes'
bzr_branch=''
bzr_clean=''
bzr_revno=''
cc_for_timeout=''
cc_info_string='gcc (GCC) 4.1.2 20070115 (prerelease) (SUSE Linux)'
cxx_info_string='g++ (GCC) 4.1.2 20070115 (prerelease) (SUSE Linux)'
datadir='${datarootdir}'
datarootdir='${prefix}/share'
docdir='${datarootdir}/doc/${PACKAGE_TARNAME}'
dvidir='${docdir}'
enable_64bit_flags='no'
enable_bindings='no'
enable_bse_unpacked='no'
enable_cclock='no'
enable_clib='no'
enable_config_file='yes'
enable_connectors='yes'
enable_debug='basic'
enable_exports='no'
enable_fallbacks='yes'
enable_fast_check='no'
enable_fc_wrapper='no'
enable_gpu='no'
enable_gw_cutoff='no'
enable_gw_dpc='no'
enable_gw_openmp='no'
enable_gw_optimal='no'
enable_gw_wrapper='no'
enable_hints='yes'
enable_macroave='yes'
enable_maintainer_checks='no'
enable_mpi='no'
enable_mpi_io='no'
enable_mpi_trace='no'
enable_optim='standard'
enable_pkg_check='no'
enable_shared=''
enable_smp='no'
enable_static=''
enable_stdin='yes'
enable_test_timeout='no'
enable_vdwxc='no'
enable_zdot_bugfix='no'
etsf_io_pkg_name='etsf_io-1.0.3'
etsf_io_pkg_string='ETSF I/O library 1.0.3 (upstream release)'
exec_prefix='${prefix}'
fc_info_string='IBM XL Fortran Advanced Edition for Linux, V11.1'
fc_mod_incs=''
fc_timing='standard'
fcflags_opt_01_gsl_ext='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_01_interfaces_ext='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_01_macroavnew_ext='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_02_clib='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_10_defs='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_10_memory_mpi='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_11_qespresso_ext='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_12_hide_mpi='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_14_hidewrite='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_15_gpu_toolbox='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_16_hideleave='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_18_timing='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_27_toolbox_oop='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_28_numeric_noabirule='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_32_contract='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_32_util='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_42_geometry='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_42_nlstrain='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_42_parser='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_43_abitypes_defs='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_43_ptgroups='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_44_geomoptim='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_45_psp_parser='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_47_xml='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_49_gw_toolbox_oop='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_51_manage_cuda='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_51_manage_mpi='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_52_fft_mpi_noabirule='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_53_abiutil='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_53_ffts='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_53_spacepar='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_56_mixing='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_56_recipspace='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_56_xc='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_57_iovars='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_59_io_mpi='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_61_ionetcdf='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_62_cg_noabirule='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_62_iowfdenpot='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_62_occeig='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_62_poisson='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_62_wvl_wfs='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_63_bader='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_64_atompaw='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_65_nonlocal='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_65_psp='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_66_paw='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_66_wfs='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_67_common='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_68_dmft='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_68_recursion='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_68_rsprc='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_69_wfdesc='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_70_gw='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_71_bse='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_72_response='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_77_ddb='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_77_lwf='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_77_suscep='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_79_seqpar_mpi='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_83_cut3d='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_93_rdm='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_95_drive='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_98_main='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_atompaw='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_bigdft='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_etsf_io='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_fox='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_libxc='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_linalg='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_netcdf='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_wannier90='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fox_pkg_name='FoX-4.1.0'
fox_pkg_string='FoX Fortran XML library 4.1.0 (upstream release)'
host='powerpc64-unknown-linux-gnu'
host_alias=''
host_cpu='powerpc64'
host_os='linux-gnu'
host_vendor='unknown'
htmldir='${docdir}'
includedir='${prefix}/include'
infodir='${datarootdir}/info'
install_sh='${SHELL} /home/unimainz/maust/abinit-6.10.3/config/gnu/install-sh'
lib_atompaw_bins=''
lib_atompaw_incs=''
lib_atompaw_libs='-L$(abinit_builddir)/plugins/atompaw -latompaw'
lib_bigdft_incs=''
lib_bigdft_libs=''
lib_dft_flavor='libxc-fallback+atompaw-fallback+wannier90-fallback'
lib_etsf_io_incs='-I$(abinit_builddir)/plugins/etsf_io'
lib_etsf_io_libs='-L$(abinit_builddir)/plugins/etsf_io -letsf_io_low_level -letsf_io_utils -letsf_io'
lib_fft_fcflags=''
lib_fft_flavor='none'
lib_fft_incs=''
lib_fft_ldflags=''
lib_fft_libs=''
lib_fox_incs=''
lib_fox_libs=''
lib_gpu_fcflags=''
lib_gpu_flavor='none'
lib_gpu_incs=''
lib_gpu_ldflags=''
lib_gpu_libs=''
lib_libxc_incs='-I$(abinit_builddir)/plugins/libxc'
lib_libxc_libs='-L$(abinit_builddir)/plugins/libxc -lxc'
lib_linalg_fcflags=''
lib_linalg_flavor='netlib-fallback'
lib_linalg_incs=''
lib_linalg_ldflags=''
lib_linalg_libs='-L$(abinit_builddir)/plugins/linalg -llapack -lblas'
lib_math_fcflags=''
lib_math_flavor='none'
lib_math_incs=''
lib_math_ldflags=''
lib_math_libs=''
lib_mpi_fcflags=''
lib_mpi_incs=''
lib_mpi_ldflags=''
lib_mpi_libs=''
lib_netcdf_incs='-I$(abinit_builddir)/plugins/netcdf'
lib_netcdf_libs='-L$(abinit_builddir)/plugins/netcdf -lnetcdf'
lib_timer_fcflags=''
lib_timer_flavor='abinit'
lib_timer_incs=''
lib_timer_ldflags=''
lib_timer_libs=''
lib_trio_flavor='netcdf-fallback+etsf_io-fallback'
lib_wannier90_bins=''
lib_wannier90_incs=''
lib_wannier90_libs='-L$(abinit_builddir)/plugins/wannier90 -lwannier'
libdir='${exec_prefix}/lib'
libexecdir='${exec_prefix}/libexec'
libxc_pkg_name='libxc-1.0'
libxc_pkg_string='LibXC library 1.0 (upstream release)'
linalg_pkg_name='lapack-abinit_6.0'
linalg_pkg_string='Oldish BLAS/LAPACK implementation customized for Abinit'
localedir='${datarootdir}/locale'
localstatedir='${prefix}/var'
mandir='${datarootdir}/man'
mkdir_p='/bin/mkdir -p'
netcdf_pkg_name='netcdf-4.1.1'
netcdf_pkg_string='NetCDF library 4.1.1 (upstream release)'
nightly_timeout='0'
oldincludedir='/usr/include'
pdfdir='${docdir}'
prefix='/usr/local'
program_transform_name='s,x,x,'
psdir='${docdir}'
sbindir='${exec_prefix}/sbin'
sharedstatedir='${prefix}/com'
src_01_gsl_ext_incs='-I$(top_builddir)/src/01_gsl_ext -I$(top_srcdir)/src/01_gsl_ext'
src_01_interfaces_ext_incs='-I$(top_builddir)/src/01_interfaces_ext -I$(top_srcdir)/src/01_interfaces_ext'
src_01_macroavnew_ext_incs='-I$(top_builddir)/src/01_macroavnew_ext -I$(top_srcdir)/src/01_macroavnew_ext'
src_02_clib_incs='-I$(top_builddir)/src/02_clib -I$(top_srcdir)/src/02_clib'
src_10_defs_incs='-I$(top_builddir)/src/10_defs -I$(top_srcdir)/src/10_defs'
src_10_memory_mpi_incs='-I$(top_builddir)/src/10_memory_mpi -I$(top_srcdir)/src/10_memory_mpi'
src_11_qespresso_ext_incs='-I$(top_builddir)/src/11_qespresso_ext -I$(top_srcdir)/src/11_qespresso_ext'
src_12_hide_mpi_incs='-I$(top_builddir)/src/12_hide_mpi -I$(top_srcdir)/src/12_hide_mpi'
src_14_hidewrite_incs='-I$(top_builddir)/src/14_hidewrite -I$(top_srcdir)/src/14_hidewrite'
src_15_gpu_toolbox_incs='-I$(top_builddir)/src/15_gpu_toolbox -I$(top_srcdir)/src/15_gpu_toolbox'
src_16_hideleave_incs='-I$(top_builddir)/src/16_hideleave -I$(top_srcdir)/src/16_hideleave'
src_18_timing_incs='-I$(top_builddir)/src/18_timing -I$(top_srcdir)/src/18_timing'
src_27_toolbox_oop_incs='-I$(top_builddir)/src/27_toolbox_oop -I$(top_srcdir)/src/27_toolbox_oop'
src_28_numeric_noabirule_incs='-I$(top_builddir)/src/28_numeric_noabirule -I$(top_srcdir)/src/28_numeric_noabirule'
src_32_contract_incs='-I$(top_builddir)/src/32_contract -I$(top_srcdir)/src/32_contract'
src_32_util_incs='-I$(top_builddir)/src/32_util -I$(top_srcdir)/src/32_util'
src_42_geometry_incs='-I$(top_builddir)/src/42_geometry -I$(top_srcdir)/src/42_geometry'
src_42_nlstrain_incs='-I$(top_builddir)/src/42_nlstrain -I$(top_srcdir)/src/42_nlstrain'
src_42_parser_incs='-I$(top_builddir)/src/42_parser -I$(top_srcdir)/src/42_parser'
src_43_abitypes_defs_incs='-I$(top_builddir)/src/43_abitypes_defs -I$(top_srcdir)/src/43_abitypes_defs'
src_43_ptgroups_incs='-I$(top_builddir)/src/43_ptgroups -I$(top_srcdir)/src/43_ptgroups'
src_44_geomoptim_incs='-I$(top_builddir)/src/44_geomoptim -I$(top_srcdir)/src/44_geomoptim'
src_45_psp_parser_incs='-I$(top_builddir)/src/45_psp_parser -I$(top_srcdir)/src/45_psp_parser'
src_47_xml_incs='-I$(top_builddir)/src/47_xml -I$(top_srcdir)/src/47_xml'
src_49_gw_toolbox_oop_incs='-I$(top_builddir)/src/49_gw_toolbox_oop -I$(top_srcdir)/src/49_gw_toolbox_oop'
src_51_manage_cuda_incs='-I$(top_builddir)/src/51_manage_cuda -I$(top_srcdir)/src/51_manage_cuda'
src_51_manage_mpi_incs='-I$(top_builddir)/src/51_manage_mpi -I$(top_srcdir)/src/51_manage_mpi'
src_52_fft_mpi_noabirule_incs='-I$(top_builddir)/src/52_fft_mpi_noabirule -I$(top_srcdir)/src/52_fft_mpi_noabirule'
src_53_abiutil_incs='-I$(top_builddir)/src/53_abiutil -I$(top_srcdir)/src/53_abiutil'
src_53_ffts_incs='-I$(top_builddir)/src/53_ffts -I$(top_srcdir)/src/53_ffts'
src_53_spacepar_incs='-I$(top_builddir)/src/53_spacepar -I$(top_srcdir)/src/53_spacepar'
src_56_mixing_incs='-I$(top_builddir)/src/56_mixing -I$(top_srcdir)/src/56_mixing'
src_56_recipspace_incs='-I$(top_builddir)/src/56_recipspace -I$(top_srcdir)/src/56_recipspace'
src_56_xc_incs='-I$(top_builddir)/src/56_xc -I$(top_srcdir)/src/56_xc'
src_57_iovars_incs='-I$(top_builddir)/src/57_iovars -I$(top_srcdir)/src/57_iovars'
src_59_io_mpi_incs='-I$(top_builddir)/src/59_io_mpi -I$(top_srcdir)/src/59_io_mpi'
src_61_ionetcdf_incs='-I$(top_builddir)/src/61_ionetcdf -I$(top_srcdir)/src/61_ionetcdf'
src_62_cg_noabirule_incs='-I$(top_builddir)/src/62_cg_noabirule -I$(top_srcdir)/src/62_cg_noabirule'
src_62_iowfdenpot_incs='-I$(top_builddir)/src/62_iowfdenpot -I$(top_srcdir)/src/62_iowfdenpot'
src_62_occeig_incs='-I$(top_builddir)/src/62_occeig -I$(top_srcdir)/src/62_occeig'
src_62_poisson_incs='-I$(top_builddir)/src/62_poisson -I$(top_srcdir)/src/62_poisson'
src_62_wvl_wfs_incs='-I$(top_builddir)/src/62_wvl_wfs -I$(top_srcdir)/src/62_wvl_wfs'
src_63_bader_incs='-I$(top_builddir)/src/63_bader -I$(top_srcdir)/src/63_bader'
src_64_atompaw_incs='-I$(top_builddir)/src/64_atompaw -I$(top_srcdir)/src/64_atompaw'
src_65_nonlocal_incs='-I$(top_builddir)/src/65_nonlocal -I$(top_srcdir)/src/65_nonlocal'
src_65_psp_incs='-I$(top_builddir)/src/65_psp -I$(top_srcdir)/src/65_psp'
src_66_paw_incs='-I$(top_builddir)/src/66_paw -I$(top_srcdir)/src/66_paw'
src_66_wfs_incs='-I$(top_builddir)/src/66_wfs -I$(top_srcdir)/src/66_wfs'
src_67_common_incs='-I$(top_builddir)/src/67_common -I$(top_srcdir)/src/67_common'
src_68_dmft_incs='-I$(top_builddir)/src/68_dmft -I$(top_srcdir)/src/68_dmft'
src_68_recursion_incs='-I$(top_builddir)/src/68_recursion -I$(top_srcdir)/src/68_recursion'
src_68_rsprc_incs='-I$(top_builddir)/src/68_rsprc -I$(top_srcdir)/src/68_rsprc'
src_69_wfdesc_incs='-I$(top_builddir)/src/69_wfdesc -I$(top_srcdir)/src/69_wfdesc'
src_70_gw_incs='-I$(top_builddir)/src/70_gw -I$(top_srcdir)/src/70_gw'
src_71_bse_incs='-I$(top_builddir)/src/71_bse -I$(top_srcdir)/src/71_bse'
src_72_response_incs='-I$(top_builddir)/src/72_response -I$(top_srcdir)/src/72_response'
src_77_ddb_incs='-I$(top_builddir)/src/77_ddb -I$(top_srcdir)/src/77_ddb'
src_77_lwf_incs='-I$(top_builddir)/src/77_lwf -I$(top_srcdir)/src/77_lwf'
src_77_suscep_incs='-I$(top_builddir)/src/77_suscep -I$(top_srcdir)/src/77_suscep'
src_79_seqpar_mpi_incs='-I$(top_builddir)/src/79_seqpar_mpi -I$(top_srcdir)/src/79_seqpar_mpi'
src_83_cut3d_incs='-I$(top_builddir)/src/83_cut3d -I$(top_srcdir)/src/83_cut3d'
src_93_rdm_incs='-I$(top_builddir)/src/93_rdm -I$(top_srcdir)/src/93_rdm'
src_95_drive_incs='-I$(top_builddir)/src/95_drive -I$(top_srcdir)/src/95_drive'
src_incs_incs='-I$(top_builddir)/src/incs -I$(top_srcdir)/src/incs'
src_mods_incs='-I$(top_builddir)/src/mods -I$(top_srcdir)/src/mods'
sysconfdir='${prefix}/etc'
target='powerpc64-unknown-linux-gnu'
target_alias=''
target_cpu='powerpc64'
target_os='linux-gnu'
target_vendor='unknown'
wannier90_pkg_name='wannier90-1.2'
wannier90_pkg_string='Wannier90 program 1.2 (upstream release)'
with_atompaw_bins=''
with_atompaw_incs=''
with_atompaw_libs=''
with_bigdft_incs=''
with_bigdft_libs=''
with_config_file=''
with_dft_flavor='atompaw+libxc+wannier90'
with_etsf_io_incs=''
with_etsf_io_libs=''
with_fallbacks_tardir='/home/unimainz/maust/abinit-6.10.3/tarballs'
with_fc_vendor=''
with_fc_version=''
with_fft_flavor='none'
with_fft_incs=''
with_fft_libs=''
with_fox_incs=''
with_fox_libs=''
with_gnu_ld=''
with_gpu_cflags=''
with_gpu_cppflags=''
with_gpu_flavor='cuda-single'
with_gpu_incs=''
with_gpu_ldflags=''
with_gpu_libs=''
with_gpu_prefix=''
with_libxc_incs=''
with_libxc_libs=''
with_linalg_flavor='netlib'
with_linalg_incs=''
with_linalg_libs=''
with_math_flavor='none'
with_math_incs=''
with_math_libs=''
with_mpi_incs=''
with_mpi_level=''
with_mpi_libs=''
with_mpi_prefix=''
with_netcdf_incs=''
with_netcdf_libs=''
with_test_timeout='0'
with_timer_flavor='abinit'
with_timer_incs=''
with_timer_libs=''
with_trio_flavor='netcdf+etsf_io'
with_wannier90_bins=''
with_wannier90_incs=''
with_wannier90_libs=''

## ----------- ##
## confdefs.h. ##
## ----------- ##

/* confdefs.h */
#define PACKAGE_NAME "ABINIT"
#define PACKAGE_TARNAME "abinit"
#define PACKAGE_VERSION "6.10.3"
#define PACKAGE_STRING "ABINIT 6.10.3"
#define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
#define PACKAGE_URL ""
#define PACKAGE "abinit"
#define VERSION "6.10.3"
#define ABINIT_VERSION "6.10.3"
#define ABINIT_VERSION_MAJOR "6"
#define ABINIT_VERSION_MINOR "10"
#define ABINIT_VERSION_MICRO "3"
#define ABINIT_VERSION_BUILD "20120402"
#define ABINIT_VERSION_BASE "6.10"
#define HAVE_OS_LINUX 1
#define CC_GNU 1
#define STDC_HEADERS 1
#define HAVE_SYS_TYPES_H 1
#define HAVE_SYS_STAT_H 1
#define HAVE_STDLIB_H 1
#define HAVE_STRING_H 1
#define HAVE_MEMORY_H 1
#define HAVE_STRINGS_H 1
#define HAVE_INTTYPES_H 1
#define HAVE_STDINT_H 1
#define HAVE_UNISTD_H 1
#define WORDS_BIGENDIAN 1
#define CXX_GNU 1
#define FC_IBM 1
#define FC_FUNC(name,NAME) name
#define FC_FUNC_(name,NAME) name
#define ABINIT_TARGET "powerpc64_linux_ibm11.1"
#define SIZEOF_CHAR 0
#define SIZEOF_SHORT 0
#define SIZEOF_INT 0
#define SIZEOF_LONG 0
#define SIZEOF_LONG_LONG 0
#define SIZEOF_UNSIGNED_INT 0
#define SIZEOF_UNSIGNED_LONG 0
#define SIZEOF_UNSIGNED_LONG_LONG 0
#define SIZEOF_FLOAT 0
#define SIZEOF_DOUBLE 0
#define SIZEOF_LONG_DOUBLE 0
#define SIZEOF_SIZE_T 0
#define SIZEOF_PTRDIFF_T 0
#define const /**/
#define size_t unsigned int
#define HAVE_FC_ALLOCATABLE_DTARRAYS 1
#define HAVE_FC_ISO_C_BINDING 1
#define HAVE_FC_EXIT 1
#define HAVE_FC_FLUSH_ 1
#define HAVE_FC_GAMMA 1
#define HAVE_FC_GETENV 1
#define HAVE_FC_GETPID 1
#define HAVE_FC_NULL 1
#define HAVE_FC_LONG_LINES 1
#define HAVE_FC_STREAM_IO 1
#define HAVE_FC_CPUTIME 1
#define HAVE_TRIO_NETCDF 1
#define HAVE_TRIO_ETSF_IO 1
#define HAVE_TIMER_ABINIT 1
#define HAVE_TIMER 1
#define HAVE_TIMER_SERIAL 1
#define HAVE_DFT_LIBXC 1
#define HAVE_DFT_ATOMPAW 1
#define HAVE_DFT_WANNIER90 1
#define USE_MACROAVE 1

configure: exit 0
