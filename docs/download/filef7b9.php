
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
configure:13767: $? = 249
configure:13756: xlf -qversion >&5
IBM XL Fortran Advanced Edition for Linux, V11.1
Version: 11.01.0000.0004
configure:13767: $? = 0
configure:13776: checking whether we are using the GNU Fortran compiler
configure:13789: xlf -c   conftest.F >&5
"conftest.F", line 3.15: 1515-019 (S) Syntax is incorrect.
** main   === End of Compilation 1 ===
1501-511  Compilation failed for file conftest.F.
configure:13789: $? = 1
configure: failed program was:
|       program main
| #ifndef __GNUC__
|        choke me
| #endif
| 
|       end
configure:13798: result: no
configure:13804: checking whether xlf accepts -g
configure:13815: xlf -c -g  conftest.f >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.f.
configure:13815: $? = 0
configure:13823: result: yes
configure:13915: checking which type of Fortran compiler we have
configure:14274: result: ibm 11.1
configure:14287: checking fortran 90 modules extension
configure:14314: xlf -c -g  conftest.f >&5
** conftest_module   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.f.
configure:14314: $? = 0
configure:14337: result: mod
configure:14352: checking for Fortran flag to compile .F90 files
configure:14368: xlf -c -g  conftest.F90 >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:14368: $? = 0
configure:14377: result: none
configure:14413: determining Fortran module case
configure:14427: xlf -c -g  conftest.F90 >&5
** conftest   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:14427: $? = 0
configure:14451: checking whether Fortran modules are upper-case
configure:14453: result: no
configure:14471: checking how to get verbose linking output from xlf
configure:14481: xlf -c   conftest.F90 >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:14481: $? = 0
configure:14499: xlf -o conftest -v conftest.F90
exec: export(export,XL_CONFIG=/etc/opt/ibmcmp/xlf/11.1/xlf.cfg:xlf,NULL) 
exec: export(export,XL_DIS=/opt/ibmcmp/xlf/11.1/exe/dis -o "conftest" "conftest.o",NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/cpp(/opt/ibmcmp/xlf/11.1/exe/cpp,conftest.F90,/tmp/F83886iSMW0L,-C,-I/opt/ibmcmp/xlf/11.1/include,NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/xlfentry(/opt/ibmcmp/xlf/11.1/exe/xlfentry,/tmp/F83886iSMW0L,/tmp/F83886o18jd5,/tmp/F83886o18jd5F.lst,xlfsmsg.cat,xlfmsg.cat,conftest.F90,XLF90(noautodealloc,nosignedzero,oldpad),FREE(f90),XLF2003(nopolymorphic,nobozlitargs,nostopexcept,novolatile,noautorealloc,oldnaninf),32,GNU_VERSION(4.1.2),OSVAR(sles.10.0),WSTREAMS(/tmp/F83886QJ0Y5sh1,/tmp/F83886QJ0Y5sb1,/tmp/F83886QJ0Y5ss1),DEFMSG(/opt/ibmcmp/xlf/11.1/msg/en_US),-I/opt/ibmcmp/xlf/11.1/include,NULL) 
** main   === End of Compilation 1 ===
unlink: /tmp/F83886iSMW0L
exec: export(export,XL_FRONTEND=/opt/ibmcmp/xlf/11.1/exe/xlfentry,NULL) 
exec: export(export,XL_ASTI=/opt/ibmcmp/xlf/11.1/exe/xlfhot,NULL) 
exec: export(export,XL_BACKEND=/opt/ibmcmp/xlf/11.1/exe/xlfcode,NULL) 
exec: export(export,XL_LINKER=/usr/bin/ld,NULL) 
exec: export(export,XL_BOLT=/opt/ibmcmp/xlf/11.1/exe/bolt,NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/xlfhot(/opt/ibmcmp/xlf/11.1/exe/xlfhot,/tmp/F83886QJ0Y5sh1,/tmp/F83886QJ0Y5sh2,/tmp/F83886QJ0Y5sb1,/tmp/F83886QJ0Y5sb2,/tmp/F83886QJ0Y5ss1,/tmp/F83886QJ0Y5ss2,/tmp/F83886o18jd5,/tmp/F83886o18jd5A.lst,NULL) 
exec: export(export,XL_FRONTEND=/opt/ibmcmp/xlf/11.1/exe/xlfentry,NULL) 
exec: export(export,XL_ASTI=/opt/ibmcmp/xlf/11.1/exe/xlfhot,NULL) 
exec: export(export,XL_BACKEND=/opt/ibmcmp/xlf/11.1/exe/xlfcode,NULL) 
exec: export(export,XL_LINKER=/usr/bin/ld,NULL) 
exec: export(export,XL_BOLT=/opt/ibmcmp/xlf/11.1/exe/bolt,NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/xlfcode(/opt/ibmcmp/xlf/11.1/exe/xlfcode,/tmp/F83886QJ0Y5sh2,/tmp/F83886QJ0Y5sb2,conftest.o,/tmp/F83886o18jd5B.lst,/tmp/F83886QJ0Y5ss2,NULL) 
1501-510  Compilation successful for file conftest.F90.
exec: /usr/bin/ld(/usr/bin/ld,--eh-frame-hdr,-Qy,-melf32ppclinux,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/crt1.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/crti.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/crtbegin.o,-L/opt/ibmcmp/xlsmp/1.7/lib,-L/opt/ibmcmp/xlmass/4.4/lib,-L/opt/ibmcmp/xlf/11.1/lib,-R/opt/ibmcmp/lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib,-L/lib/../lib,-L/usr/lib/../lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../..,-o,conftest,conftest.o,-dynamic-linker,/lib/ld.so.1,-lxlf90,-lxlopt,-lxlomp_ser,-lxl,-lxlfmath,-ldl,-lrt,-lpthread,-lm,-lc,-lgcc_eh,-lc,-lgcc,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/crtsavres.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/crtend.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/crtn.o,NULL) 
unlink: conftest.o
configure:14565: result: -v
configure:14567: checking for Fortran libraries of xlf
configure:14590: xlf -o conftest -v conftest.F90
exec: export(export,XL_CONFIG=/etc/opt/ibmcmp/xlf/11.1/xlf.cfg:xlf,NULL) 
exec: export(export,XL_DIS=/opt/ibmcmp/xlf/11.1/exe/dis -o "conftest" "conftest.o",NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/cpp(/opt/ibmcmp/xlf/11.1/exe/cpp,conftest.F90,/tmp/F839082HUGd7,-C,-I/opt/ibmcmp/xlf/11.1/include,NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/xlfentry(/opt/ibmcmp/xlf/11.1/exe/xlfentry,/tmp/F839082HUGd7,/tmp/F839088pR20A,/tmp/F839088pR20AF.lst,xlfsmsg.cat,xlfmsg.cat,conftest.F90,XLF90(noautodealloc,nosignedzero,oldpad),FREE(f90),XLF2003(nopolymorphic,nobozlitargs,nostopexcept,novolatile,noautorealloc,oldnaninf),32,GNU_VERSION(4.1.2),OSVAR(sles.10.0),WSTREAMS(/tmp/F83908KHlmHDh1,/tmp/F83908KHlmHDb1,/tmp/F83908KHlmHDs1),DEFMSG(/opt/ibmcmp/xlf/11.1/msg/en_US),-I/opt/ibmcmp/xlf/11.1/include,NULL) 
** main   === End of Compilation 1 ===
unlink: /tmp/F839082HUGd7
exec: export(export,XL_FRONTEND=/opt/ibmcmp/xlf/11.1/exe/xlfentry,NULL) 
exec: export(export,XL_ASTI=/opt/ibmcmp/xlf/11.1/exe/xlfhot,NULL) 
exec: export(export,XL_BACKEND=/opt/ibmcmp/xlf/11.1/exe/xlfcode,NULL) 
exec: export(export,XL_LINKER=/usr/bin/ld,NULL) 
exec: export(export,XL_BOLT=/opt/ibmcmp/xlf/11.1/exe/bolt,NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/xlfhot(/opt/ibmcmp/xlf/11.1/exe/xlfhot,/tmp/F83908KHlmHDh1,/tmp/F83908KHlmHDh2,/tmp/F83908KHlmHDb1,/tmp/F83908KHlmHDb2,/tmp/F83908KHlmHDs1,/tmp/F83908KHlmHDs2,/tmp/F839088pR20A,/tmp/F839088pR20AA.lst,NULL) 
exec: export(export,XL_FRONTEND=/opt/ibmcmp/xlf/11.1/exe/xlfentry,NULL) 
exec: export(export,XL_ASTI=/opt/ibmcmp/xlf/11.1/exe/xlfhot,NULL) 
exec: export(export,XL_BACKEND=/opt/ibmcmp/xlf/11.1/exe/xlfcode,NULL) 
exec: export(export,XL_LINKER=/usr/bin/ld,NULL) 
exec: export(export,XL_BOLT=/opt/ibmcmp/xlf/11.1/exe/bolt,NULL) 
exec: /opt/ibmcmp/xlf/11.1/exe/xlfcode(/opt/ibmcmp/xlf/11.1/exe/xlfcode,/tmp/F83908KHlmHDh2,/tmp/F83908KHlmHDb2,conftest.o,/tmp/F839088pR20AB.lst,/tmp/F83908KHlmHDs2,NULL) 
1501-510  Compilation successful for file conftest.F90.
exec: /usr/bin/ld(/usr/bin/ld,--eh-frame-hdr,-Qy,-melf32ppclinux,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/crt1.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/crti.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/crtbegin.o,-L/opt/ibmcmp/xlsmp/1.7/lib,-L/opt/ibmcmp/xlmass/4.4/lib,-L/opt/ibmcmp/xlf/11.1/lib,-R/opt/ibmcmp/lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib,-L/lib/../lib,-L/usr/lib/../lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib,-L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../..,-o,conftest,conftest.o,-dynamic-linker,/lib/ld.so.1,-lxlf90,-lxlopt,-lxlomp_ser,-lxl,-lxlfmath,-ldl,-lrt,-lpthread,-lm,-lc,-lgcc_eh,-lc,-lgcc,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/crtsavres.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/crtend.o,/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/crtn.o,NULL) 
unlink: conftest.o
configure:14765: result:  -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm
configure:14781: checking for dummy main to link with Fortran libraries
configure:14815: gcc -o conftest    conftest.c   -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm >&5
configure:14815: $? = 0
configure:14860: result: none
configure:14893: checking for Fortran name-mangling scheme
configure:14906: xlf -c   conftest.F90 >&5
** foobar   === End of Compilation 1 ===
** foo_bar   === End of Compilation 2 ===
1501-510  Compilation successful for file conftest.F90.
configure:14906: $? = 0
configure:14947: gcc -o conftest    conftest.c cfortran_test.o   -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm >&5
configure:14947: $? = 0
configure:15005: gcc -o conftest    conftest.c cfortran_test.o   -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm >&5
configure:15005: $? = 0
configure:15047: result: lower case, no underscore, no extra underscore
configure:15154: checking for python
configure:15170: found /usr/bin/python
configure:15181: result: python
configure:15194: checking for Python CPPFLAGS
configure:15209: result: 
configure:15218: checking for bzr
configure:15248: result: no
configure:15265: checking for Python NumPy headers
configure:15293: gcc -c    conftest.c >&5
conftest.c:35:20: error: Python.h: No such file or directory
conftest.c:36:31: error: numpy/arrayobject.h: No such file or directory
configure:15293: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:15304: result: not found
configure:15310: checking numarray/arrayobject.h usability
configure:15310: gcc -c    conftest.c >&5
conftest.c:67:34: error: numarray/arrayobject.h: No such file or directory
configure:15310: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:15310: result: no
configure:15310: checking numarray/arrayobject.h presence
configure:15310: gcc -E   conftest.c
conftest.c:34:34: error: numarray/arrayobject.h: No such file or directory
configure:15310: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:15310: result: no
configure:15310: checking for numarray/arrayobject.h
configure:15310: result: no
configure:15607: checking for ar
configure:15623: found /usr/bin/ar
configure:15634: result: ar
configure:15695: checking for ranlib
configure:15711: found /usr/bin/ranlib
configure:15722: result: ranlib
configure:15793: checking for cpp
configure:15809: found /usr/bin/cpp
configure:15820: result: cpp
configure:15879: checking for a true C preprocessor
configure:15885: result: cpp
configure:15932: checking which cpp hints to apply
configure:15962: result: default/default/default
configure:15971: checking which cc hints to apply
configure:16032: result: gnu/default/default
configure:16043: checking which xpp hints to apply
configure:16047: result: none/none/none
configure:16056: checking which cxx hints to apply
configure:16109: result: gnu/default/default
configure:16120: checking which fpp hints to apply
configure:16138: result: ibm/default/default
configure:16147: checking which fc hints to apply
configure:16408: result: ibm/default/default
configure:16419: checking which ar hints to apply
configure:16438: result: none/none/none
configure:16451: checking which Fortran preprocessor to use
configure:16453: result: 
configure:16455: checking which Fortran preprocessor flags to apply
configure:16457: result: 
configure:16481: checking whether to wrap Fortran compiler calls
configure:16483: result: no
configure:16525: checking debugging status
configure:16548: result: enabled (profile mode: basic)
configure:16569: setting C debug flags to '-g'
configure:16577: setting C++ debug flags to '-g'
configure:16585: setting Fortran debug flags to '-g'
configure:16591: checking whether to activate debug mode in source files
configure:16602: result: no
configure:16614: checking which cc debug flags to apply
configure:16667: result: gnu/default/default
configure:16681: checking which cxx debug flags to apply
configure:16685: result: none/none/none
configure:16699: checking which fc debug flags to apply
configure:17035: result: ibm/default/default
configure:17055: checking whether to activate design-by-contract debugging
configure:17064: result: no
configure:17109: checking optimization status
configure:17132: result: enabled (profile mode: standard)
configure:17157: checking which cc optimizations to apply
configure:18216: result: gnu/default/default
configure:18230: checking which cxx optimizations to apply
configure:19232: result: gnu/default/default
configure:19246: checking which fc optimizations to apply
configure:20976: result: ibm/default/ibm_powerpc64
configure:20990: checking whether to apply per-directory optimizations
configure:20996: result: yes
configure:22389: checking for a 64-bit architecture
configure:22391: result: yes
configure:22393: checking whether to use 64-bit flags
configure:22395: result: yes
configure:22397: checking for user-defined 64-bit flags
configure:22399: result: 
configure:22404: checking for 64-bit C preprocessor flags
configure:22407: result: none
configure:22420: checking for 64-bit C flags
configure:22426: result: -m64
configure:22455: checking for 64-bit C++ flags
configure:22461: result: -m64
configure:22490: checking for 64-bit Fortran flags
configure:22496: result: -q64
configure:22506: checking for 64-bit archiver flags
configure:22509: result: none
configure:22597: static builds may be performed
configure:22644: checking stddef.h usability
configure:22644: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22644: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22644: result: no
configure:22644: checking stddef.h presence
configure:22644: gcc -E      conftest.c
configure:22644: $? = 0
configure:22644: result: yes
configure:22644: WARNING: stddef.h: present but cannot be compiled
configure:22644: WARNING: stddef.h:     check for missing prerequisite headers?
configure:22644: WARNING: stddef.h: see the Autoconf documentation
configure:22644: WARNING: stddef.h:     section "Present But Cannot Be Compiled"
configure:22644: WARNING: stddef.h: proceeding with the compiler's result
configure:22644: checking for stddef.h
configure:22644: result: no
configure:22644: checking stdarg.h usability
configure:22644: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22644: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22644: result: no
configure:22644: checking stdarg.h presence
configure:22644: gcc -E      conftest.c
configure:22644: $? = 0
configure:22644: result: yes
configure:22644: WARNING: stdarg.h: present but cannot be compiled
configure:22644: WARNING: stdarg.h:     check for missing prerequisite headers?
configure:22644: WARNING: stdarg.h: see the Autoconf documentation
configure:22644: WARNING: stdarg.h:     section "Present But Cannot Be Compiled"
configure:22644: WARNING: stdarg.h: proceeding with the compiler's result
configure:22644: checking for stdarg.h
configure:22644: result: no
configure:22657: checking stdio.h usability
configure:22657: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22657: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22657: result: no
configure:22657: checking stdio.h presence
configure:22657: gcc -E      conftest.c
configure:22657: $? = 0
configure:22657: result: yes
configure:22657: WARNING: stdio.h: present but cannot be compiled
configure:22657: WARNING: stdio.h:     check for missing prerequisite headers?
configure:22657: WARNING: stdio.h: see the Autoconf documentation
configure:22657: WARNING: stdio.h:     section "Present But Cannot Be Compiled"
configure:22657: WARNING: stdio.h: proceeding with the compiler's result
configure:22657: checking for stdio.h
configure:22657: result: no
configure:22657: checking math.h usability
configure:22657: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22657: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22657: result: no
configure:22657: checking math.h presence
configure:22657: gcc -E      conftest.c
configure:22657: $? = 0
configure:22657: result: yes
configure:22657: WARNING: math.h: present but cannot be compiled
configure:22657: WARNING: math.h:     check for missing prerequisite headers?
configure:22657: WARNING: math.h: see the Autoconf documentation
configure:22657: WARNING: math.h:     section "Present But Cannot Be Compiled"
configure:22657: WARNING: math.h: proceeding with the compiler's result
configure:22657: checking for math.h
configure:22657: result: no
configure:22657: checking termios.h usability
configure:22657: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22657: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22657: result: no
configure:22657: checking termios.h presence
configure:22657: gcc -E      conftest.c
configure:22657: $? = 0
configure:22657: result: yes
configure:22657: WARNING: termios.h: present but cannot be compiled
configure:22657: WARNING: termios.h:     check for missing prerequisite headers?
configure:22657: WARNING: termios.h: see the Autoconf documentation
configure:22657: WARNING: termios.h:     section "Present But Cannot Be Compiled"
configure:22657: WARNING: termios.h: proceeding with the compiler's result
configure:22657: checking for termios.h
configure:22657: result: no
configure:22669: checking errno.h usability
configure:22669: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22669: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22669: result: no
configure:22669: checking errno.h presence
configure:22669: gcc -E      conftest.c
configure:22669: $? = 0
configure:22669: result: yes
configure:22669: WARNING: errno.h: present but cannot be compiled
configure:22669: WARNING: errno.h:     check for missing prerequisite headers?
configure:22669: WARNING: errno.h: see the Autoconf documentation
configure:22669: WARNING: errno.h:     section "Present But Cannot Be Compiled"
configure:22669: WARNING: errno.h: proceeding with the compiler's result
configure:22669: checking for errno.h
configure:22669: result: no
configure:22682: checking malloc.h usability
configure:22682: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22682: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22682: result: no
configure:22682: checking malloc.h presence
configure:22682: gcc -E      conftest.c
configure:22682: $? = 0
configure:22682: result: yes
configure:22682: WARNING: malloc.h: present but cannot be compiled
configure:22682: WARNING: malloc.h:     check for missing prerequisite headers?
configure:22682: WARNING: malloc.h: see the Autoconf documentation
configure:22682: WARNING: malloc.h:     section "Present But Cannot Be Compiled"
configure:22682: WARNING: malloc.h: proceeding with the compiler's result
configure:22682: checking for malloc.h
configure:22682: result: no
configure:22682: checking sys/malloc.h usability
configure:22682: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22682: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22682: result: no
configure:22682: checking sys/malloc.h presence
configure:22682: gcc -E      conftest.c
conftest.c:35:24: error: sys/malloc.h: No such file or directory
configure:22682: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22682: result: no
configure:22682: checking for sys/malloc.h
configure:22682: result: no
configure:22694: checking mcheck.h usability
configure:22694: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22694: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22694: result: no
configure:22694: checking mcheck.h presence
configure:22694: gcc -E      conftest.c
configure:22694: $? = 0
configure:22694: result: yes
configure:22694: WARNING: mcheck.h: present but cannot be compiled
configure:22694: WARNING: mcheck.h:     check for missing prerequisite headers?
configure:22694: WARNING: mcheck.h: see the Autoconf documentation
configure:22694: WARNING: mcheck.h:     section "Present But Cannot Be Compiled"
configure:22694: WARNING: mcheck.h: proceeding with the compiler's result
configure:22694: checking for mcheck.h
configure:22694: result: no
configure:22706: checking sys/time.h usability
configure:22706: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22706: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22706: result: no
configure:22706: checking sys/time.h presence
configure:22706: gcc -E      conftest.c
configure:22706: $? = 0
configure:22706: result: yes
configure:22706: WARNING: sys/time.h: present but cannot be compiled
configure:22706: WARNING: sys/time.h:     check for missing prerequisite headers?
configure:22706: WARNING: sys/time.h: see the Autoconf documentation
configure:22706: WARNING: sys/time.h:     section "Present But Cannot Be Compiled"
configure:22706: WARNING: sys/time.h: proceeding with the compiler's result
configure:22706: checking for sys/time.h
configure:22706: result: no
configure:22718: checking sys/resource.h usability
configure:22718: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22718: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22718: result: no
configure:22718: checking sys/resource.h presence
configure:22718: gcc -E      conftest.c
configure:22718: $? = 0
configure:22718: result: yes
configure:22718: WARNING: sys/resource.h: present but cannot be compiled
configure:22718: WARNING: sys/resource.h:     check for missing prerequisite headers?
configure:22718: WARNING: sys/resource.h: see the Autoconf documentation
configure:22718: WARNING: sys/resource.h:     section "Present But Cannot Be Compiled"
configure:22718: WARNING: sys/resource.h: proceeding with the compiler's result
configure:22718: checking for sys/resource.h
configure:22718: result: no
configure:22734: checking for abort
configure:22734: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22734: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22734: result: no
configure:22745: checking for mallinfo
configure:22745: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22745: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22745: result: no
configure:22762: checking size of char
configure:22767: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22767: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22781: result: 0
configure:22795: checking size of short
configure:22800: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22800: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22814: result: 0
configure:22828: checking size of int
configure:22833: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22833: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22847: result: 0
configure:22861: checking size of long
configure:22866: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22866: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22880: result: 0
configure:22894: checking size of long long
configure:22899: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22899: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22913: result: 0
configure:22927: checking size of unsigned int
configure:22932: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22932: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22946: result: 0
configure:22960: checking size of unsigned long
configure:22965: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22965: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:22979: result: 0
configure:22993: checking size of unsigned long long
configure:22998: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:22998: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:23012: result: 0
configure:23026: checking size of float
configure:23031: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23031: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:23045: result: 0
configure:23059: checking size of double
configure:23064: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23064: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:23078: result: 0
configure:23092: checking size of long double
configure:23097: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23097: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:23111: result: 0
configure:23125: checking size of size_t
configure:23130: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23130: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:23144: result: 0
configure:23158: checking size of ptrdiff_t
configure:23163: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23163: $? = 1
configure: program exited with status 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:23177: result: 0
configure:23188: checking for an ANSI C-conforming const
configure:23261: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23261: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:23268: result: no
configure:23276: checking for size_t
configure:23276: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse        conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:23276: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
configure:23276: result: no
configure:23294: checking whether the Fortran compiler supports allocatable arrays in datatypes
configure:23318: xlf -q64 -o conftest -q64 -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23318: $? = 0
configure:23336: result: yes
configure:23342: checking whether the Fortran compiler provides the iso_c_binding module
configure:23364: xlf -q64 -o conftest -q64 -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23364: $? = 0
configure:23382: result: yes
configure:23388: checking whether the Fortran compiler accepts exit()
configure:23403: xlf -q64 -o conftest -q64 -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23403: $? = 0
configure:23421: result: yes
configure:23427: checking whether the Fortran compiler accepts flush()
configure:23442: xlf -q64 -o conftest -q64 -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
conftest.o: In function `main':
/home/unimainz/maust/abinit-6.12.3/conftest.F90:3: undefined reference to `flush'
configure:23442: $? = 1
configure: failed program was:
|       program main
| 
|             call flush()
| 
|       end
configure:23460: result: no
configure:23466: checking whether the Fortran compiler accepts flush_()
configure:23481: xlf -q64 -o conftest -q64 -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23481: $? = 0
configure:23499: result: yes
configure:23505: checking whether the Fortran compiler accepts gamma()
configure:23521: xlf -q64 -o conftest -q64 -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23521: $? = 0
configure:23539: result: yes
configure:23545: checking whether the Fortran compiler accepts getenv()
configure:23562: xlf -q64 -o conftest -q64 -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23562: $? = 0
configure:23580: result: yes
configure:23598: xlf -q64 -o conftest -q64 -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23598: $? = 0
configure:23610: checking whether the Fortran compiler accepts getpid()
configure:23612: result: yes
configure:23623: checking whether the Fortran compiler accepts the null() intrinsic
configure:23642: xlf -q64 -o conftest -q64 -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23642: $? = 0
configure:23660: result: yes
configure:23666: checking whether the Fortran compiler accepts quadruple integers
configure:23701: result: no
configure:23707: checking whether the Fortran compiler accepts long lines
configure:23722: xlf -q64 -o conftest -q64 -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23722: $? = 0
configure:23740: result: yes
configure:23746: checking whether the Fortran compiler supports stream IO
configure:23770: xlf -q64 -o conftest -q64 -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23770: $? = 0
configure:23788: result: yes
configure:23794: checking whether the Fortran compiler accepts cpu_time()
configure:23811: xlf -q64 -o conftest -q64 -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
configure:23811: $? = 0
configure:23829: result: yes
configure:23837: checking whether the Fortran compiler accepts etime()
configure:23852: xlf -q64 -o conftest -q64 -g -qzerosize    conftest.F90  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
conftest.o: In function `main':
/home/unimainz/maust/abinit-6.12.3/conftest.F90:3: undefined reference to `etime'
configure:23852: $? = 1
configure: failed program was:
|       program main
| 
|             call etime(1)
| 
|       end
configure:23870: result: no
configure:23875: checking whether to use C clock for timings
configure:23877: result: no
configure:25427: checking whether MPI is usable
configure:25429: result: no
configure:25475: checking whether to build MPI code
configure:25477: result: no
configure:26031: checking whether the MPI library supports MPI_CREATE_TYPE_STRUCT
configure:26769: xlf -q64 -o conftest -q64 -g -qzerosize        conftest.F90       -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
"conftest.F90", line 3.8: 1512-001 (S) Input file mpif.h was not found or is not defined.
1501-511  Compilation failed for file conftest.F90.
configure:26769: $? = 1
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
configure:27007: result: no
configure:27037: checking whether to activate GPU support
configure:27039: result: no
configure:27968: checking for the requested transferable I/O support
configure:27970: result: none
configure:29010: checking for the actual transferable I/O support
configure:29012: result: none
configure:29275: checking for the requested timer support
configure:29277: result: abinit
configure:29453: checking time.h usability
configure:29453: gcc -m64 -c -m64 -g -O2 -mtune=native -march=native -mfpmath=sse         conftest.c >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:29453: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
| #include <time.h>
configure:29453: result: no
configure:29453: checking time.h presence
configure:29453: gcc -E       conftest.c
configure:29453: $? = 0
configure:29453: result: yes
configure:29453: WARNING: time.h: present but cannot be compiled
configure:29453: WARNING: time.h:     check for missing prerequisite headers?
configure:29453: WARNING: time.h: see the Autoconf documentation
configure:29453: WARNING: time.h:     section "Present But Cannot Be Compiled"
configure:29453: WARNING: time.h: proceeding with the compiler's result
configure:29453: checking for time.h
configure:29453: result: no
configure:29463: checking for clock_gettime in -lrt
configure:29496: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse              conftest.c -lrt         -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:29496: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
| char clock_gettime ();
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
| return clock_gettime ();
|   ;
|   return 0;
| }
configure:29505: result: no
configure:29516: checking for clock_gettime
configure:29516: gcc -m64 -o conftest -m64 -g -O2 -mtune=native -march=native -mfpmath=sse              conftest.c        -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
cc1: error: unrecognized command line option "-march=native"
cc1: error: unrecognized command line option "-mfpmath=sse"
conftest.c:1: error: bad value (native) for -mtune= switch
configure:29516: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "ABINIT"
| #define PACKAGE_TARNAME "abinit"
| #define PACKAGE_VERSION "6.12.3"
| #define PACKAGE_STRING "ABINIT 6.12.3"
| #define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
| #define PACKAGE_URL ""
| #define PACKAGE "abinit"
| #define VERSION "6.12.3"
| #define ABINIT_VERSION "6.12.3"
| #define ABINIT_VERSION_MAJOR "6"
| #define ABINIT_VERSION_MINOR "12"
| #define ABINIT_VERSION_MICRO "3"
| #define ABINIT_VERSION_BUILD "20120417"
| #define ABINIT_VERSION_BASE "6.12"
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
| #define HAVE_TIMER_ABINIT 1
| #define HAVE_TIMER 1
| #define HAVE_TIMER_SERIAL 1
| /* end confdefs.h.  */
| /* Define clock_gettime to an innocuous variant, in case <limits.h> declares clock_gettime.
|    For example, HP-UX 11i <limits.h> declares gettimeofday.  */
| #define clock_gettime innocuous_clock_gettime
| 
| /* System header to define __stub macros and hopefully few prototypes,
|     which can conflict with char clock_gettime (); below.
|     Prefer <limits.h> to <assert.h> if __STDC__ is defined, since
|     <limits.h> exists even on freestanding compilers.  */
| 
| #ifdef __STDC__
| # include <limits.h>
| #else
| # include <assert.h>
| #endif
| 
| #undef clock_gettime
| 
| /* Override any GCC internal prototype to avoid an error.
|    Use char because int might match the return type of a GCC
|    builtin and then its argument prototype would still apply.  */
| #ifdef __cplusplus
| extern "C"
| #endif
| char clock_gettime ();
| /* The GNU C library defines this for functions which it implements
|     to always fail with ENOSYS.  Some functions are actually named
|     something starting with __ and the normal name is an alias.  */
| #if defined __stub_clock_gettime || defined __stub___clock_gettime
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
| return clock_gettime ();
|   ;
|   return 0;
| }
configure:29516: result: no
configure:29760: checking for the actual timer support
configure:29762: result: abinit
configure:30084: checking for the requested linear algebra support
configure:30086: result: netlib
configure:30117: checking whether to select a fallback for linear algebra
configure:30125: result: no
configure:30392: checking for library containing zgemm
configure:30410: xlf -q64 -o conftest -q64 -g -qzerosize          conftest.F90        -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.so when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.a when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlopt.a when searching for -lxlopt
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.so when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.a when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxl.a when searching for -lxl
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.so when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.a when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.so when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.a when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlopt.a when searching for -lxlopt
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.so when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.a when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxl.a when searching for -lxl
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.so when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.a when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/libgcc_eh.a when searching for -lgcc_eh
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/libgcc.a when searching for -lgcc
conftest.o: In function `main':
/home/unimainz/maust/abinit-6.12.3/conftest.F90:2: undefined reference to `zgemm'
configure:30410: $? = 1
configure: failed program was:
|       program main
|       call zgemm
|       end
configure:30410: xlf -q64 -o conftest -q64 -g -qzerosize          conftest.F90 -lblas          -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.so when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.a when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlopt.a when searching for -lxlopt
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.so when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.a when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxl.a when searching for -lxl
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.so when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.a when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.so when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.a when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlopt.a when searching for -lxlopt
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.so when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.a when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxl.a when searching for -lxl
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.so when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.a when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/libgcc_eh.a when searching for -lgcc_eh
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/libgcc.a when searching for -lgcc
configure:30410: $? = 0
configure:30427: result: -lblas
configure:30446: checking for library containing zhpev
configure:30464: xlf -q64 -o conftest -q64 -g -qzerosize          conftest.F90 -lblas        -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.so when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.a when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlopt.a when searching for -lxlopt
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.so when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.a when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxl.a when searching for -lxl
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.so when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.a when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.so when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.a when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlopt.a when searching for -lxlopt
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.so when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.a when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxl.a when searching for -lxl
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.so when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.a when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/libgcc_eh.a when searching for -lgcc_eh
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/libgcc.a when searching for -lgcc
conftest.o: In function `main':
/home/unimainz/maust/abinit-6.12.3/conftest.F90:2: undefined reference to `zhpev'
configure:30464: $? = 1
configure: failed program was:
|       program main
|       call zhpev
|       end
configure:30464: xlf -q64 -o conftest -q64 -g -qzerosize          conftest.F90 -llapack  -lblas   -lblas        -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm  >&5
** main   === End of Compilation 1 ===
1501-510  Compilation successful for file conftest.F90.
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.so when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.a when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlopt.a when searching for -lxlopt
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.so when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.a when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxl.a when searching for -lxl
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.so when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.a when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.so when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlf90.a when searching for -lxlf90
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlopt.a when searching for -lxlopt
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.so when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlsmp/1.7/lib/libxlomp_ser.a when searching for -lxlomp_ser
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxl.a when searching for -lxl
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.so when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /opt/ibmcmp/xlf/11.1/lib/libxlfmath.a when searching for -lxlfmath
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.so when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libdl.a when searching for -ldl
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/../lib/librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.so when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../librt.a when searching for -lrt
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.so when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libpthread.a when searching for -lpthread
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.so when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libm.a when searching for -lm
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/libgcc_eh.a when searching for -lgcc_eh
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/../lib/libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.so when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../libc.a when searching for -lc
/usr/bin/ld: skipping incompatible /usr/lib/gcc/powerpc64-suse-linux/4.1.2/libgcc.a when searching for -lgcc
configure:30464: $? = 0
configure:30481: result: -llapack
configure:30701: checking whether we have a serial linear algebra support
configure:30703: result: yes
configure:30739: checking whether we have a MPI linear algebra support
configure:30741: result: no
configure:30761: checking whether we have a GPU linear algebra support
configure:30763: result: no
configure:31011: checking for the actual linear algebra support
configure:31013: result: netlib
configure:31310: checking for the requested algorithmic support
configure:31312: result: none
configure:31756: checking for the actual algorithmic support
configure:31758: result: none
configure:32057: checking for the requested math support
configure:32059: result: none
configure:32618: checking for the actual math support
configure:32620: result: none
configure:32919: checking for the requested FFT support
configure:32921: result: none
configure:34025: checking for the actual FFT support
configure:34027: result: none
configure:34323: checking for the requested DFT support
configure:34325: result: none
configure:35549: checking for the actual DFT support
configure:35551: result: 
configure:35606: fallbacks to enable => 
configure:35613: checking whether to build atompaw
configure:35615: result: no
configure:35613: checking whether to build bigdft
configure:35615: result: no
configure:35613: checking whether to build etsf_io
configure:35615: result: no
configure:35613: checking whether to build fox
configure:35615: result: no
configure:35613: checking whether to build libxc
configure:35615: result: no
configure:35613: checking whether to build linalg
configure:35615: result: no
configure:35613: checking whether to build netcdf
configure:35615: result: no
configure:35613: checking whether to build wannier90
configure:35615: result: no
configure:35630: using tarball repository /home/unimainz/.abinit/tarballs
configure:36388: checking whether to accelerate 'make check'
configure:36390: result: no
configure:36394: checking whether to reduce 'make check' for packaging
configure:36396: result: no
configure:36400: checking whether to activate maintainer checks
configure:36402: result: no
configure:36407: setting triggers associated to command-line options
configure:36411: checking whether to activate support for bindings (EXPERIMENTAL)
configure:36413: result: no
configure:36436: checking whether to activate Bethe-Salpeter unpacking (EXPERIMENTAL)
configure:36438: result: no
configure:36449: checking whether to enable the Abinit C library (EXPERIMENTAL)
configure:36451: result: no
configure:36474: checking whether to activate build of exported libraries (EXPERIMENTAL)
configure:36476: result: no
configure:36492: checking whether to activate the use of cut-offs for GW calculations (EXPERIMENTAL)
configure:36494: result: no
configure:36505: checking whether to activate double-precision GW calculations (EXPERIMENTAL)
configure:36507: result: no
configure:36518: checking whether to activate OpenMP-assisted GW calculations (EXPERIMENTAL)
configure:36520: result: no
configure:36531: checking whether to activate optimal GW calculations (EXPERIMENTAL)
configure:36533: result: no
configure:36544: checking whether to activate wrapped GW calculations (EXPERIMENTAL)
configure:36546: result: no
configure:36557: checking whether to enable build of macroave (EXPERIMENTAL)
configure:36559: result: yes
configure:36563: triggering the 'DO_BUILD_01_MACROAVNEW_EXT' conditional
configure:36575: triggering the 'DO_BUILD_MACROAVE' conditional
configure:36587: defining the 'USE_MACROAVE' preprocessing macro
configure:36594: checking whether to activate support for Symmetric Multi-Processing (EXPERIMENTAL)
configure:36596: result: no
configure:36607: checking whether to tell Abinit to read file lists from standard input
configure:36609: result: yes
configure:36620: checking whether to activate workaround for bugged ZDOTC and ZDOTU
configure:36622: result: no
configure:36677: the Abinit Documentation will never be built
configure:36710: the Abinit FALLBACKS may be built when necessary
configure:36817: the Abinit GUI will never be built
configure:36897: the Abinit Documentation may be built upon request
configure:37199: creating ./config.status

## ---------------------- ##
## Running config.status. ##
## ---------------------- ##

This file was extended by ABINIT config.status 6.12.3, which was
generated by GNU Autoconf 2.68.  Invocation command line was

  CONFIG_FILES    = 
  CONFIG_HEADERS  = 
  CONFIG_LINKS    = 
  CONFIG_COMMANDS = 
  $ ./config.status 

on p590-tic-1-unimz1

config.status:1539: creating doc/Makefile
config.status:1539: creating config.dump
config.status:1539: creating config.pc
config.status:1539: creating config.sh
config.status:1539: creating config/wrappers/wrap-fc
config.status:1539: creating fallbacks/config.mk
config.status:1539: creating src/incs/Makefile
config.status:1539: creating src/mods/Makefile
config.status:1539: creating src/16_hideleave/m_build_info.F90
config.status:1539: creating tests/config.sh
config.status:1539: creating tests/tests.env
config.status:1539: creating tests/tests-install.env
config.status:1539: creating Makefile
config.status:1539: creating src/Makefile
config.status:1539: creating src/01_gsl_ext/Makefile
config.status:1539: creating src/01_interfaces_ext/Makefile
config.status:1539: creating src/01_linalg_ext/Makefile
config.status:1539: creating src/01_macroavnew_ext/Makefile
config.status:1539: creating src/02_clib/Makefile
config.status:1539: creating src/10_defs/Makefile
config.status:1539: creating src/11_qespresso_ext/Makefile
config.status:1539: creating src/12_hide_mpi/Makefile
config.status:1539: creating src/13_memory_mpi/Makefile
config.status:1539: creating src/14_hidewrite/Makefile
config.status:1539: creating src/15_gpu_toolbox/Makefile
config.status:1539: creating src/16_hideleave/Makefile
config.status:1539: creating src/18_timing/Makefile
config.status:1539: creating src/27_toolbox_oop/Makefile
config.status:1539: creating src/28_numeric_noabirule/Makefile
config.status:1539: creating src/32_contract/Makefile
config.status:1539: creating src/32_util/Makefile
config.status:1539: creating src/42_geometry/Makefile
config.status:1539: creating src/42_nlstrain/Makefile
config.status:1539: creating src/42_parser/Makefile
config.status:1539: creating src/43_ptgroups/Makefile
config.status:1539: creating src/43_wvl_wrappers/Makefile
config.status:1539: creating src/44_abitypes_defs/Makefile
config.status:1539: creating src/45_geomoptim/Makefile
config.status:1539: creating src/45_psp_parser/Makefile
config.status:1539: creating src/47_xml/Makefile
config.status:1539: creating src/49_gw_toolbox_oop/Makefile
config.status:1539: creating src/51_manage_mpi/Makefile
config.status:1539: creating src/52_fft_mpi_noabirule/Makefile
config.status:1539: creating src/52_manage_cuda/Makefile
config.status:1539: creating src/53_abiutil/Makefile
config.status:1539: creating src/53_ffts/Makefile
config.status:1539: creating src/53_spacepar/Makefile
config.status:1539: creating src/56_mixing/Makefile
config.status:1539: creating src/56_recipspace/Makefile
config.status:1539: creating src/56_xc/Makefile
config.status:1539: creating src/57_iovars/Makefile
config.status:1539: creating src/59_io_mpi/Makefile
config.status:1539: creating src/61_ionetcdf/Makefile
config.status:1539: creating src/62_cg_noabirule/Makefile
config.status:1539: creating src/62_iowfdenpot/Makefile
config.status:1539: creating src/62_occeig/Makefile
config.status:1539: creating src/62_poisson/Makefile
config.status:1539: creating src/62_wvl_wfs/Makefile
config.status:1539: creating src/63_bader/Makefile
config.status:1539: creating src/64_atompaw/Makefile
config.status:1539: creating src/65_nonlocal/Makefile
config.status:1539: creating src/65_psp/Makefile
config.status:1539: creating src/66_paw/Makefile
config.status:1539: creating src/66_wfs/Makefile
config.status:1539: creating src/67_common/Makefile
config.status:1539: creating src/68_dmft/Makefile
config.status:1539: creating src/68_recursion/Makefile
config.status:1539: creating src/68_rsprc/Makefile
config.status:1539: creating src/69_wfdesc/Makefile
config.status:1539: creating src/70_gw/Makefile
config.status:1539: creating src/71_bse/Makefile
config.status:1539: creating src/72_response/Makefile
config.status:1539: creating src/77_ddb/Makefile
config.status:1539: creating src/77_lwf/Makefile
config.status:1539: creating src/77_suscep/Makefile
config.status:1539: creating src/79_seqpar_mpi/Makefile
config.status:1539: creating src/83_cut3d/Makefile
config.status:1539: creating src/93_rdm/Makefile
config.status:1539: creating src/95_drive/Makefile
config.status:1539: creating src/98_main/Makefile
config.status:1539: creating src/libs/Makefile
config.status:1539: creating tests/Nightly/Makefile
config.status:1539: creating bindings/Makefile
config.status:1539: creating bindings/parser/Makefile
config.status:1539: creating config.h
config.status:1768: executing depfiles commands
config.status:1768: executing dump-optim commands
config.status:1768: executing script-perms commands
config.status:1768: executing long-lines commands
configure:38684: === configuring in fallbacks (/home/unimainz/maust/abinit-6.12.3/fallbacks)
configure:38747: running /bin/sh ./configure --disable-option-checking '--prefix=/usr/local'  'FC=xlf' 'enable_64bit_flags=yes' 'with_trio_flavor=none' 'with_dft_flavor=none' '--enable-gui-build=yes' '--enable-atompaw=no' '--enable-bigdft=no' '--enable-etsf-io=no' '--enable-fox=no' '--enable-libxc=no' '--enable-linalg=no' '--enable-netcdf=no' '--enable-wannier90=no' '--with-fc-vendor=ibm' '--with-fc-version=11.1' '--with-tardir=/home/unimainz/.abinit/tarballs' --cache-file=/dev/null --srcdir=.
configure:38684: === configuring in tests (/home/unimainz/maust/abinit-6.12.3/tests)
configure:38747: running /bin/sh ./configure --disable-option-checking '--prefix=/usr/local'  'FC=xlf' 'enable_64bit_flags=yes' 'with_trio_flavor=none' 'with_dft_flavor=none' '--enable-gui-build=yes' '--enable-atompaw=no' '--enable-bigdft=no' '--enable-etsf-io=no' '--enable-fox=no' '--enable-libxc=no' '--enable-linalg=no' '--enable-netcdf=no' '--enable-wannier90=no' '--with-fc-vendor=ibm' '--with-fc-version=11.1' '--with-tardir=/home/unimainz/.abinit/tarballs' --cache-file=/dev/null --srcdir=.

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
ac_cv_func_clock_gettime=no
ac_cv_func_mallinfo=no
ac_cv_header_errno_h=no
ac_cv_header_inttypes_h=yes
ac_cv_header_malloc_h=no
ac_cv_header_math_h=no
ac_cv_header_mcheck_h=no
ac_cv_header_memory_h=yes
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
ac_cv_header_time_h=no
ac_cv_header_unistd_h=yes
ac_cv_host=powerpc64-unknown-linux-gnu
ac_cv_lib_rt_clock_gettime=no
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
ac_cv_prog_PATCH=patch
ac_cv_prog_PYTHON=python
ac_cv_prog_TAR=tar
ac_cv_prog_TRUE_CPP=cpp
ac_cv_prog_ac_ct_CC=gcc
ac_cv_prog_ac_ct_CXX=g++
ac_cv_prog_ac_ct_RANLIB=ranlib
ac_cv_prog_cc_c89=
ac_cv_prog_cc_g=yes
ac_cv_prog_cxx_g=yes
ac_cv_prog_fc_g=yes
ac_cv_prog_fc_v=-v
ac_cv_prog_make_make_set=yes
ac_cv_search_zgemm=-lblas
ac_cv_search_zhpev=-llapack
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

ABINIT_BINARY_PACKAGE='abinit-6.12.3_powerpc64_linux_ibm11.1'
ABINIT_TARGET='powerpc64_linux_ibm11.1'
ABINIT_VERSION='6.12.3'
ABINIT_VERSION_BASE='6.12'
ABINIT_VERSION_BUILD='20120417'
ABINIT_VERSION_MAJOR='6'
ABINIT_VERSION_MICRO='3'
ABINIT_VERSION_MINOR='12'
ABI_CPPFLAGS='    '
ACLOCAL='${SHELL} /home/unimainz/maust/abinit-6.12.3/config/gnu/missing --run aclocal-1.11'
AMDEPBACKSLASH='\'
AMDEP_FALSE='#'
AMDEP_TRUE=''
AMTAR='${SHELL} /home/unimainz/maust/abinit-6.12.3/config/gnu/missing --run tar'
AR='ar'
ARFLAGS='     rc'
ARFLAGS_64BITS=''
ARFLAGS_CMD='rc'
ARFLAGS_DEBUG=''
ARFLAGS_EXTRA=''
ARFLAGS_HINTS=''
ARFLAGS_OPTIM=''
ATOMPAW_BIN=''
AUTOCONF='${SHELL} /home/unimainz/maust/abinit-6.12.3/config/gnu/missing --run autoconf'
AUTOHEADER='${SHELL} /home/unimainz/maust/abinit-6.12.3/config/gnu/missing --run autoheader'
AUTOMAKE='${SHELL} /home/unimainz/maust/abinit-6.12.3/config/gnu/missing --run automake-1.11'
AWK='gawk'
BAZAAR=''
BOURNE_SHELL='/bin/sh'
CC='gcc -m64'
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
CFLAGS='-m64 -g -O2 -mtune=native -march=native -mfpmath=sse  '
CFLAGS_64BITS='-m64'
CFLAGS_DEBUG='-g'
CFLAGS_EXTRA=''
CFLAGS_GPU=''
CFLAGS_HINTS=''
CFLAGS_OPTIM='-O2 -mtune=native -march=native -mfpmath=sse'
CPP='gcc -E'
CPPFLAGS=''
CPPFLAGS_64BITS=''
CPPFLAGS_DEBUG=''
CPPFLAGS_EXTRA=''
CPPFLAGS_GPU=''
CPPFLAGS_HINTS=''
CPPFLAGS_HINTS_EXT='-P -std=c99'
CPPFLAGS_OPTIM=''
CXX='g++ -m64'
CXXDEPMODE='depmode=gcc3'
CXXFLAGS='-m64 -g -O2 -mtune=native -march=native -mfpmath=sse  '
CXXFLAGS_64BITS='-m64'
CXXFLAGS_DEBUG='-g'
CXXFLAGS_EXTRA=''
CXXFLAGS_GPU=''
CXXFLAGS_HINTS=''
CXXFLAGS_OPTIM='-O2 -mtune=native -march=native -mfpmath=sse'
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
DO_BUILD_52_MANAGE_CUDA_FALSE=''
DO_BUILD_52_MANAGE_CUDA_TRUE='#'
DO_BUILD_BINDINGS_FALSE=''
DO_BUILD_BINDINGS_TRUE='#'
DO_BUILD_CCLOCK_FALSE=''
DO_BUILD_CCLOCK_TRUE='#'
DO_BUILD_DOC_FALSE=''
DO_BUILD_DOC_TRUE='#'
DO_BUILD_EXPORTS_FALSE=''
DO_BUILD_EXPORTS_TRUE='#'
DO_BUILD_GUI_FALSE='#'
DO_BUILD_GUI_TRUE=''
DO_BUILD_MACROAVE_FALSE='#'
DO_BUILD_MACROAVE_TRUE=''
DO_BUILD_TESTS_FALSE=''
DO_BUILD_TESTS_TRUE='#'
DO_TEST_MPI_FALSE=''
DO_TEST_MPI_TRUE='#'
ECHO_C=''
ECHO_N='-n'
ECHO_T=''
EGREP='/usr/bin/grep -E'
EXEEXT=''
F77='xlf -q64'
FC='xlf -q64'
FCFLAGS='-q64 -g -qzerosize '
FCFLAGS_64BITS='-q64'
FCFLAGS_DEBUG='-g'
FCFLAGS_EXTRA=''
FCFLAGS_F90=''
FCFLAGS_FIXEDFORM='-qsuffix=cpp=F:f=f -qfixed'
FCFLAGS_FREEFORM='-qsuffix=cpp=F90:f=f90 -qfree=f90'
FCFLAGS_HINTS='-qzerosize'
FCFLAGS_MODDIR='-qmoddir=$(abinit_moddir) -I$(abinit_moddir)'
FCFLAGS_OPTIM='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
FCLIBS=' -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm'
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
FC_NOWRAP='xlf -q64'
FFLAGS='-q64 -g -qzerosize '
FPP=''
FPPFLAGS='   -WF,-DHAVE_CONFIG_H '
FPPFLAGS_DEBUG=''
FPPFLAGS_EXTRA=''
FPPFLAGS_HINTS='-WF,-DHAVE_CONFIG_H'
FPPFLAGS_OPTIM=''
GRAPHATOM_BIN=''
GREP='/usr/bin/grep'
GSL_CONFIG=''
INSTALL_DATA='${INSTALL} -m 644'
INSTALL_PROGRAM='${INSTALL}'
INSTALL_SCRIPT='${INSTALL}'
INSTALL_STRIP_PROGRAM='$(install_sh) -c -s'
JAVA=''
LDFLAGS='    '
LIBOBJS=''
LIBS='      -L/opt/ibmcmp/xlsmp/1.7/lib -L/opt/ibmcmp/xlmass/4.4/lib -L/opt/ibmcmp/xlf/11.1/lib -R/opt/ibmcmp/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2 -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../../../powerpc64-suse-linux/lib -L/usr/lib/gcc/powerpc64-suse-linux/4.1.2/../../.. -lxlf90 -lxlopt -lxlomp_ser -lxl -lxlfmath -ldl -lrt -lpthread -lm '
LN_S='ln -s'
LTLIBOBJS=''
LTXFLAGS=''
MAKEINFO='${SHELL} /home/unimainz/maust/abinit-6.12.3/config/gnu/missing --run makeinfo'
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
PACKAGE_STRING='ABINIT 6.12.3'
PACKAGE_TARNAME='abinit'
PACKAGE_URL=''
PACKAGE_VERSION='6.12.3'
PATCH='patch'
PATH_SEPARATOR=':'
PDFFLAGS=''
PERL='/usr/bin/perl'
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
VERSION='6.12.3'
WANNIER90_X_BIN=''
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
abi_test_atompaw='no'
abi_test_bigdft='no'
abi_test_etsf_io='no'
abi_test_fox='no'
abi_test_gui=''
abi_test_libxc='no'
abi_test_netcdf='no'
abi_test_wannier90='no'
abinit_bindir='/usr/local/bin'
abinit_builddir='/home/unimainz/maust/abinit-6.12.3'
abinit_chkdir='/usr/local/share/abinit/tests'
abinit_datdir='/usr/local/share/abinit'
abinit_docdir='/usr/local/doc/abinit'
abinit_incdir='/usr/local/include'
abinit_libdir='/usr/local/lib'
abinit_mandir='/usr/local/share/man'
abinit_moddir='/home/unimainz/maust/abinit-6.12.3/src/mods'
abinit_prefix='/usr/local'
abinit_srcdir='/home/unimainz/maust/abinit-6.12.3'
abinit_tardir='/home/unimainz/.abinit/tarballs'
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
bindir='${exec_prefix}/bin'
build='powerpc64-unknown-linux-gnu'
build_alias=''
build_cpu='powerpc64'
build_os='linux-gnu'
build_vendor='unknown'
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
enable_64bit_flags='yes'
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
enable_gui='no'
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
exec_prefix='${prefix}'
fallbacks_incs='-I$(fallbacks_instdir)/include'
fallbacks_instdir='/home/unimainz/maust/abinit-6.12.3/fallbacks/exports'
fc_info_string='IBM XL Fortran Advanced Edition for Linux, V11.1'
fc_mod_incs=''
fc_timing='standard'
fcflags_opt_01_gsl_ext='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_01_interfaces_ext='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_01_linalg_ext='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_01_macroavnew_ext='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_02_clib='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_10_defs='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_11_qespresso_ext='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_12_hide_mpi='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_13_memory_mpi='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
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
fcflags_opt_43_ptgroups='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_43_wvl_wrappers='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_44_abitypes_defs='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_45_geomoptim='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_45_psp_parser='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_47_xml='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_49_gw_toolbox_oop='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_51_manage_mpi='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_52_fft_mpi_noabirule='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_52_manage_cuda='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
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
fcflags_opt_algo='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_atompaw='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_bigdft='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_etsf_io='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_fox='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_libxc='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_linalg='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_netcdf='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
fcflags_opt_wannier90='-O3 -qmaxmem=65536 -qspill=2000 -qarch=auto -qtune=auto -qcache=auto -qstrict -qsuppress=1520-022:1520-031'
host='powerpc64-unknown-linux-gnu'
host_alias=''
host_cpu='powerpc64'
host_os='linux-gnu'
host_vendor='unknown'
htmldir='${docdir}'
includedir='${prefix}/include'
infodir='${datarootdir}/info'
install_sh='${SHELL} /home/unimainz/maust/abinit-6.12.3/config/gnu/install-sh'
lib_algo_fcflags=''
lib_algo_flavor='none'
lib_algo_incs=''
lib_algo_ldflags=''
lib_algo_libs=''
lib_atompaw_bins=''
lib_atompaw_fcflags=''
lib_atompaw_incs=''
lib_atompaw_ldflags=''
lib_atompaw_libs=''
lib_bigdft_fcflags=''
lib_bigdft_incs=''
lib_bigdft_ldflags=''
lib_bigdft_libs=''
lib_dft_flavor=''
lib_etsf_io_fcflags=''
lib_etsf_io_incs=''
lib_etsf_io_ldflags=''
lib_etsf_io_libs=''
lib_fft_fcflags=''
lib_fft_flavor='none'
lib_fft_incs=''
lib_fft_ldflags=''
lib_fft_libs=''
lib_fox_fcflags=''
lib_fox_incs=''
lib_fox_ldflags=''
lib_fox_libs=''
lib_gpu_fcflags=''
lib_gpu_flavor='none'
lib_gpu_incs=''
lib_gpu_ldflags=''
lib_gpu_libs=''
lib_libxc_fcflags=''
lib_libxc_incs=''
lib_libxc_ldflags=''
lib_libxc_libs=''
lib_linalg_fcflags=''
lib_linalg_flavor='netlib'
lib_linalg_incs=''
lib_linalg_ldflags=''
lib_linalg_libs='-llapack  -lblas  '
lib_math_fcflags=''
lib_math_flavor='none'
lib_math_incs=''
lib_math_ldflags=''
lib_math_libs=''
lib_mpi_fcflags=''
lib_mpi_incs=''
lib_mpi_ldflags=''
lib_mpi_libs=''
lib_netcdf_fcflags=''
lib_netcdf_incs=''
lib_netcdf_ldflags=''
lib_netcdf_libs=''
lib_timer_fcflags=''
lib_timer_flavor='abinit'
lib_timer_incs=''
lib_timer_ldflags=''
lib_timer_libs=' '
lib_trio_flavor='none'
lib_wannier90_bins=''
lib_wannier90_fcflags=''
lib_wannier90_incs=''
lib_wannier90_ldflags=''
lib_wannier90_libs=''
libdir='${exec_prefix}/lib'
libexecdir='${exec_prefix}/libexec'
localedir='${datarootdir}/locale'
localstatedir='${prefix}/var'
mandir='${datarootdir}/man'
mkdir_p='/bin/mkdir -p'
nightly_timeout='0'
oldincludedir='/usr/include'
pdfdir='${docdir}'
prefix='/usr/local'
program_transform_name='s,x,x,'
psdir='${docdir}'
run_atompaw=''
run_etsf_io=''
run_fox_config=''
run_graphatom=''
run_nc_config=''
run_nccopy=''
run_ncdump=''
run_ncgen3=''
run_ncgen=''
run_wannier90_x=''
sbindir='${exec_prefix}/sbin'
sharedstatedir='${prefix}/com'
src_01_gsl_ext_incs='-I$(top_builddir)/src/01_gsl_ext -I$(top_srcdir)/src/01_gsl_ext'
src_01_interfaces_ext_incs='-I$(top_builddir)/src/01_interfaces_ext -I$(top_srcdir)/src/01_interfaces_ext'
src_01_linalg_ext_incs='-I$(top_builddir)/src/01_linalg_ext -I$(top_srcdir)/src/01_linalg_ext'
src_01_macroavnew_ext_incs='-I$(top_builddir)/src/01_macroavnew_ext -I$(top_srcdir)/src/01_macroavnew_ext'
src_02_clib_incs='-I$(top_builddir)/src/02_clib -I$(top_srcdir)/src/02_clib'
src_10_defs_incs='-I$(top_builddir)/src/10_defs -I$(top_srcdir)/src/10_defs'
src_11_qespresso_ext_incs='-I$(top_builddir)/src/11_qespresso_ext -I$(top_srcdir)/src/11_qespresso_ext'
src_12_hide_mpi_incs='-I$(top_builddir)/src/12_hide_mpi -I$(top_srcdir)/src/12_hide_mpi'
src_13_memory_mpi_incs='-I$(top_builddir)/src/13_memory_mpi -I$(top_srcdir)/src/13_memory_mpi'
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
src_43_ptgroups_incs='-I$(top_builddir)/src/43_ptgroups -I$(top_srcdir)/src/43_ptgroups'
src_43_wvl_wrappers_incs='-I$(top_builddir)/src/43_wvl_wrappers -I$(top_srcdir)/src/43_wvl_wrappers'
src_44_abitypes_defs_incs='-I$(top_builddir)/src/44_abitypes_defs -I$(top_srcdir)/src/44_abitypes_defs'
src_45_geomoptim_incs='-I$(top_builddir)/src/45_geomoptim -I$(top_srcdir)/src/45_geomoptim'
src_45_psp_parser_incs='-I$(top_builddir)/src/45_psp_parser -I$(top_srcdir)/src/45_psp_parser'
src_47_xml_incs='-I$(top_builddir)/src/47_xml -I$(top_srcdir)/src/47_xml'
src_49_gw_toolbox_oop_incs='-I$(top_builddir)/src/49_gw_toolbox_oop -I$(top_srcdir)/src/49_gw_toolbox_oop'
src_51_manage_mpi_incs='-I$(top_builddir)/src/51_manage_mpi -I$(top_srcdir)/src/51_manage_mpi'
src_52_fft_mpi_noabirule_incs='-I$(top_builddir)/src/52_fft_mpi_noabirule -I$(top_srcdir)/src/52_fft_mpi_noabirule'
src_52_manage_cuda_incs='-I$(top_builddir)/src/52_manage_cuda -I$(top_srcdir)/src/52_manage_cuda'
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
subdirs=' fallbacks tests'
sysconfdir='${prefix}/etc'
target='powerpc64-unknown-linux-gnu'
target_alias=''
target_cpu='powerpc64'
target_os='linux-gnu'
target_vendor='unknown'
with_algo_flavor='none'
with_algo_incs=''
with_algo_libs=''
with_atompaw_bins=''
with_atompaw_incs=''
with_atompaw_libs=''
with_bigdft_incs=''
with_bigdft_libs=''
with_config_file=''
with_dft_flavor='none'
with_etsf_io_incs=''
with_etsf_io_libs=''
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
with_gpu_flavor='cuda-double'
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
with_tardir=''
with_test_timeout='0'
with_timer_flavor='abinit'
with_timer_incs=''
with_timer_libs=''
with_trio_flavor='none'
with_wannier90_bins=''
with_wannier90_incs=''
with_wannier90_libs=''

## ----------- ##
## confdefs.h. ##
## ----------- ##

/* confdefs.h */
#define PACKAGE_NAME "ABINIT"
#define PACKAGE_TARNAME "abinit"
#define PACKAGE_VERSION "6.12.3"
#define PACKAGE_STRING "ABINIT 6.12.3"
#define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"
#define PACKAGE_URL ""
#define PACKAGE "abinit"
#define VERSION "6.12.3"
#define ABINIT_VERSION "6.12.3"
#define ABINIT_VERSION_MAJOR "6"
#define ABINIT_VERSION_MINOR "12"
#define ABINIT_VERSION_MICRO "3"
#define ABINIT_VERSION_BUILD "20120417"
#define ABINIT_VERSION_BASE "6.12"
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
#define HAVE_TIMER_ABINIT 1
#define HAVE_TIMER 1
#define HAVE_TIMER_SERIAL 1
#define HAVE_LINALG 1
#define HAVE_LINALG_SERIAL 1
#define USE_MACROAVE 1

configure: exit 0