
==================================================================================================
mpiexec options:
----------------
  Base path: /opt/intel/impi/4.0.3.008/intel64/bin/
  Bootstrap server: ssh
  Debug level: 1
  Enable X: -1

  Global environment:
  -------------------
    I_MPI_PERHOST=allcores
    MKLROOT=/opt/intel/composer_xe_2013.0.079/mkl
    MANPATH=/opt/intel/itac/8.0.3.007/man:/opt/intel/impi/4.0.3.008/man:/opt/intel/composer_xe_2013.0.079/man/en_US:/opt/intel/composer_xe_2013.0.079/man/en_US:/usr/kerberos/man:/usr/java/latest/man:/usr/local/share/man:/usr/share/man/en:/usr/share/man:/opt/ganglia/man:/opt/pdsh/man:/opt/rocks/man:/opt/condor/man:/opt/tripwire/man:/opt/openmpi/share/man:/opt/sun-ct/man:/opt/gridengine/man::/opt/intel/vtune_amplifier_xe_2013/man
    PDSHROOT=/opt/pdsh
    SELINUX_INIT=YES
    CONSOLE=/dev/console
    VT_MPI=impi4
    HOSTNAME=compute-0-3.local
    INTEL_LICENSE_FILE=/opt/intel/licenses:/opt/intel/composer_xe_2013.0.079/licenses:/opt/intel/licenses:/home/x/intel/licenses
    IPPROOT=/opt/intel/composer_xe_2013.0.079/ipp
    SGE_TASK_STEPSIZE=undefined
    TERM=vt100
    SHELL=/bin/bash
    ECLIPSE_HOME=/opt/eclipse
    HISTSIZE=1000
    NHOSTS=2
    CONDOR_IDS=407.407
    TMPDIR=/tmp/421.1.all.q
    SGE_O_WORKDIR=/datos/x/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2
    LIBRARY_PATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/../compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/tbb/lib/intel64
    SGE_O_HOME=/home/x
    SGE_CELL=default
    SGE_ARCH=lx26-amd64
    MPICH_PROCESS_GROUP=no
    MIC_LD_LIBRARY_PATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/mic/coi/device-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/composer_xe_2013.0.079/mkl/lib/mic:/opt/intel/composer_xe_2013.0.079/tbb/lib/mic
    ROCKSROOT=/opt/rocks/share/devel
    SSH_TTY=/dev/pts/9
    RESTARTED=0
    ANT_HOME=/opt/rocks
    ARC=lx26-amd64
    USER=x
    LD_LIBRARY_PATH=/opt/intel/itac/8.0.3.007/itac/slib_impi4:/opt/intel/impi/4.0.3.008/intel64/lib:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/mic/coi/host-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/composer_xe_2013.0.079/mpirt/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/../compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/tbb/lib/intel64:/opt/gridengine/lib/lx26-amd64
    LS_COLORS=no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:bd=40;33;01:cd=40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=01;32:*.cmd=01;32:*.exe=01;32:*.com=01;32:*.btm=01;32:*.bat=01;32:*.sh=01;32:*.csh=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.gz=01;31:*.bz2=01;31:*.bz=01;31:*.tz=01;31:*.rpm=01;31:*.cpio=01;31:*.jpg=01;35:*.gif=01;35:*.bmp=01;35:*.xbm=01;35:*.xpm=01;35:*.png=01;35:*.tif=01;35:
    INIT_VERSION=sysvinit-2.86
    SGE_TASK_LAST=undefined
    ROCKS_ROOT=/opt/rocks
    QUEUE=all.q
    CPATH=/opt/intel/composer_xe_2013.0.079/mkl/include:/opt/intel/composer_xe_2013.0.079/tbb/include
    SGE_TASK_ID=undefined
    NLSPATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/debugger/intel64/locale/%l_%t/%N
    PATH=/tmp/421.1.all.q:/opt/intel/vtune_amplifier_xe_2013/bin64:/opt/intel/itac/8.0.3.007/bin:/opt/intel/impi/4.0.3.008/intel64/bin:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64_mic:/opt/intel/composer_xe_2013.0.079/debugger/gui/intel64:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/bin:/bin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/pdsh/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/condor/bin:/opt/condor/sbin:/opt/gridengine/bin/lx26-amd64:/home/x/bin
    VT_ADD_LIBS=-ldwarf -lelf -lvtunwind -lnsl -lm -ldl -lpthread
    MAVEN_HOME=/opt/maven
    MAIL=/var/spool/mail/x
    SGE_BINARY_PATH=/opt/gridengine/bin/lx26-amd64
    RUNLEVEL=3
    runlevel=3
    TBBROOT=/opt/intel/composer_xe_2013.0.079/tbb
    CONDOR_CONFIG=/opt/condor/etc/condor_config
    SGE_STDERR_PATH=/home/x/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2/atest.o421
    PWD=/home/x/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2
    INPUTRC=/etc/inputrc
    JAVA_HOME=/usr/java/latest
    SGE_EXECD_PORT=537
    SGE_ACCOUNT=sge
    SGE_STDOUT_PATH=/home/x/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2/atest.o421
    LANG=en_US.iso885915
    SGE_QMASTER_PORT=536
    JOB_NAME=atest
    JOB_SCRIPT=/opt/gridengine/default/spool/compute-0-3/job_scripts/421
    SGE_ROOT=/opt/gridengine
    VT_LIB_DIR=/opt/intel/itac/8.0.3.007/itac/lib_impi4
    CONDOR_ROOT=/opt/condor
    PREVLEVEL=N
    previous=N
    VT_ROOT=/opt/intel/itac/8.0.3.007
    REQNAME=atest
    VTUNE_AMPLIFIER_XE_2013_DIR=/opt/intel/vtune_amplifier_xe_2013
    SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass
    ENVIRONMENT=BATCH
    SGE_JOB_SPOOL_DIR=/opt/gridengine/default/spool/compute-0-3/active_jobs/421.1
    PE_HOSTFILE=/opt/gridengine/default/spool/compute-0-3/active_jobs/421.1/pe_hostfile
    HOME=/home/x
    SHLVL=3
    NQUEUES=2
    SGE_CWD_PATH=/datos/x/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2
    SGE_O_LOGNAME=x
    ROLLSROOT=/opt/rocks/share/devel/src/roll
    VT_SLIB_DIR=/opt/intel/itac/8.0.3.007/itac/slib_impi4
    SGE_O_MAIL=/var/spool/mail/x
    LOGNAME=x
    JOB_ID=421
    TMP=/tmp/421.1.all.q
    CVS_RSH=ssh
    CLASSPATH=/opt/intel/itac/8.0.3.007/itac/lib_impi4
    PE=impi
    I_MPI_HYDRA_BOOTSTRAP=sge
    SGE_TASK_FIRST=undefined
    LESSOPEN=|/usr/bin/lesspipe.sh %s
    SGE_O_PATH=/opt/intel/vtune_amplifier_xe_2013/bin64:/opt/intel/itac/8.0.3.007/bin:/opt/intel/impi/4.0.3.008/intel64/bin:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64_mic:/opt/intel/composer_xe_2013.0.079/debugger/gui/intel64:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/bin:/bin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/pdsh/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/condor/bin:/opt/condor/sbin:/opt/gridengine/bin/lx26-amd64:/home/x/bin
    SGE_O_SHELL=/bin/bash
    SGE_O_HOST=gamma
    REQUEST=atest
    INCLUDE=/opt/intel/composer_xe_2013.0.079/mkl/include
    NSLOTS=24
    G_BROKEN_FILENAMES=1
    SGE_STDIN_PATH=/dev/null
    I_MPI_ROOT=/opt/intel/impi/4.0.3.008
    _=/opt/intel/impi/4.0.3.008/intel64/bin/mpiexec.hydra

  User set environment:
  ---------------------
    I_MPI_FABRICS_LIST=ofa
    I_MPI_FALLBACK=0
    I_MPI_DEBUG=5


    Proxy information:
    *********************
      Proxy ID:  1
      -----------------
        Proxy name: compute-0-3
        Process count: 12
        Start PID: 0

        Proxy exec list:
        ....................
          Exec: abinit6.12.3b; Process count: 12
      Proxy ID:  2
      -----------------
        Proxy name: compute-0-4
        Process count: 12
        Start PID: 12

        Proxy exec list:
        ....................
          Exec: abinit6.12.3b; Process count: 12

==================================================================================================

[mpiexec@compute-0-3.local] Timeout set to -1 (-1 means infinite)
[mpiexec@compute-0-3.local] Got a control port string of compute-0-3.local:36811

Proxy launch args: /opt/intel/impi/4.0.3.008/intel64/bin/pmi_proxy --control-port compute-0-3.local:36811 --debug --pmi-connect lazy-cache --pmi-aggregate --preload libVTmc.so -s 0 --bootstrap ssh --demux poll --pgid 0 --enable-stdin 1 --proxy-id 

[mpiexec@compute-0-3.local] PMI FD: (null); PMI PORT: (null); PMI ID/RANK: -1
Arguments being passed to proxy 0:
--version 1.3 --interface-env-name MPICH_INTERFACE_HOSTNAME --hostname compute-0-3 --global-core-count 24 --global-process-count 24 --auto-cleanup 1 --pmi-rank -1 --pmi-kvsname kvs_10887_0 --pmi-process-mapping (vector,(0,2,12)) --bindlib ipl --ckpoint-num -1 --global-inherited-env 101 'I_MPI_PERHOST=allcores' 'MKLROOT=/opt/intel/composer_xe_2013.0.079/mkl' 'MANPATH=/opt/intel/itac/8.0.3.007/man:/opt/intel/impi/4.0.3.008/man:/opt/intel/composer_xe_2013.0.079/man/en_US:/opt/intel/composer_xe_2013.0.079/man/en_US:/usr/kerberos/man:/usr/java/latest/man:/usr/local/share/man:/usr/share/man/en:/usr/share/man:/opt/ganglia/man:/opt/pdsh/man:/opt/rocks/man:/opt/condor/man:/opt/tripwire/man:/opt/openmpi/share/man:/opt/sun-ct/man:/opt/gridengine/man::/opt/intel/vtune_amplifier_xe_2013/man' 'PDSHROOT=/opt/pdsh' 'SELINUX_INIT=YES' 'CONSOLE=/dev/console' 'VT_MPI=impi4' 'HOSTNAME=compute-0-3.local' 'INTEL_LICENSE_FILE=/opt/intel/licenses:/opt/intel/composer_xe_2013.0.079/licenses:/opt/intel/licenses:/home/x/intel/licenses' 'IPPROOT=/opt/intel/composer_xe_2013.0.079/ipp' 'SGE_TASK_STEPSIZE=undefined' 'TERM=vt100' 'SHELL=/bin/bash' 'ECLIPSE_HOME=/opt/eclipse' 'HISTSIZE=1000' 'NHOSTS=2' 'CONDOR_IDS=407.407' 'TMPDIR=/tmp/421.1.all.q' 'SGE_O_WORKDIR=/datos/x/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2' 'LIBRARY_PATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/../compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/tbb/lib/intel64' 'SGE_O_HOME=/home/x' 'SGE_CELL=default' 'SGE_ARCH=lx26-amd64' 'MPICH_PROCESS_GROUP=no' 'MIC_LD_LIBRARY_PATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/mic/coi/device-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/composer_xe_2013.0.079/mkl/lib/mic:/opt/intel/composer_xe_2013.0.079/tbb/lib/mic' 'ROCKSROOT=/opt/rocks/share/devel' 'SSH_TTY=/dev/pts/9' 'RESTARTED=0' 'ANT_HOME=/opt/rocks' 'ARC=lx26-amd64' 'USER=x' 'LD_LIBRARY_PATH=/opt/intel/itac/8.0.3.007/itac/slib_impi4:/opt/intel/impi/4.0.3.008/intel64/lib:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/mic/coi/host-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/composer_xe_2013.0.079/mpirt/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/../compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/tbb/lib/intel64:/opt/gridengine/lib/lx26-amd64' 'LS_COLORS=no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:bd=40;33;01:cd=40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=01;32:*.cmd=01;32:*.exe=01;32:*.com=01;32:*.btm=01;32:*.bat=01;32:*.sh=01;32:*.csh=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.gz=01;31:*.bz2=01;31:*.bz=01;31:*.tz=01;31:*.rpm=01;31:*.cpio=01;31:*.jpg=01;35:*.gif=01;35:*.bmp=01;35:*.xbm=01;35:*.xpm=01;35:*.png=01;35:*.tif=01;35:' 'INIT_VERSION=sysvinit-2.86' 'SGE_TASK_LAST=undefined' 'ROCKS_ROOT=/opt/rocks' 'QUEUE=all.q' 'CPATH=/opt/intel/composer_xe_2013.0.079/mkl/include:/opt/intel/composer_xe_2013.0.079/tbb/include' 'SGE_TASK_ID=undefined' 'NLSPATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/debugger/intel64/locale/%l_%t/%N' 'PATH=/tmp/421.1.all.q:/opt/intel/vtune_amplifier_xe_2013/bin64:/opt/intel/itac/8.0.3.007/bin:/opt/intel/impi/4.0.3.008/intel64/bin:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64_mic:/opt/intel/composer_xe_2013.0.079/debugger/gui/intel64:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/bin:/bin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/pdsh/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/condor/bin:/opt/condor/sbin:/opt/gridengine/bin/lx26-amd64:/home/x/bin' 'VT_ADD_LIBS=-ldwarf -lelf -lvtunwind -lnsl -lm -ldl -lpthread' 'MAVEN_HOME=/opt/maven' 'MAIL=/var/spool/mail/x' 'SGE_BINARY_PATH=/opt/gridengine/bin/lx26-amd64' 'RUNLEVEL=3' 'runlevel=3' 'TBBROOT=/opt/intel/composer_xe_2013.0.079/tbb' 'CONDOR_CONFIG=/opt/condor/etc/condor_config' 'SGE_STDERR_PATH=/home/x/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2/atest.o421' 'PWD=/home/x/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2' 'INPUTRC=/etc/inputrc' 'JAVA_HOME=/usr/java/latest' 'SGE_EXECD_PORT=537' 'SGE_ACCOUNT=sge' 'SGE_STDOUT_PATH=/home/x/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2/atest.o421' 'LANG=en_US.iso885915' 'SGE_QMASTER_PORT=536' 'JOB_NAME=atest' 'JOB_SCRIPT=/opt/gridengine/default/spool/compute-0-3/job_scripts/421' 'SGE_ROOT=/opt/gridengine' 'VT_LIB_DIR=/opt/intel/itac/8.0.3.007/itac/lib_impi4' 'CONDOR_ROOT=/opt/condor' 'PREVLEVEL=N' 'previous=N' 'VT_ROOT=/opt/intel/itac/8.0.3.007' 'REQNAME=atest' 'VTUNE_AMPLIFIER_XE_2013_DIR=/opt/intel/vtune_amplifier_xe_2013' 'SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass' 'ENVIRONMENT=BATCH' 'SGE_JOB_SPOOL_DIR=/opt/gridengine/default/spool/compute-0-3/active_jobs/421.1' 'PE_HOSTFILE=/opt/gridengine/default/spool/compute-0-3/active_jobs/421.1/pe_hostfile' 'HOME=/home/x' 'SHLVL=3' 'NQUEUES=2' 'SGE_CWD_PATH=/datos/x/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2' 'SGE_O_LOGNAME=x' 'ROLLSROOT=/opt/rocks/share/devel/src/roll' 'VT_SLIB_DIR=/opt/intel/itac/8.0.3.007/itac/slib_impi4' 'SGE_O_MAIL=/var/spool/mail/x' 'LOGNAME=x' 'JOB_ID=421' 'TMP=/tmp/421.1.all.q' 'CVS_RSH=ssh' 'CLASSPATH=/opt/intel/itac/8.0.3.007/itac/lib_impi4' 'PE=impi' 'I_MPI_HYDRA_BOOTSTRAP=sge' 'SGE_TASK_FIRST=undefined' 'LESSOPEN=|/usr/bin/lesspipe.sh %s' 'SGE_O_PATH=/opt/intel/vtune_amplifier_xe_2013/bin64:/opt/intel/itac/8.0.3.007/bin:/opt/intel/impi/4.0.3.008/intel64/bin:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64_mic:/opt/intel/composer_xe_2013.0.079/debugger/gui/intel64:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/bin:/bin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/pdsh/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/condor/bin:/opt/condor/sbin:/opt/gridengine/bin/lx26-amd64:/home/x/bin' 'SGE_O_SHELL=/bin/bash' 'SGE_O_HOST=gamma' 'REQUEST=atest' 'INCLUDE=/opt/intel/composer_xe_2013.0.079/mkl/include' 'NSLOTS=24' 'G_BROKEN_FILENAMES=1' 'SGE_STDIN_PATH=/dev/null' 'I_MPI_ROOT=/opt/intel/impi/4.0.3.008' '_=/opt/intel/impi/4.0.3.008/intel64/bin/mpiexec.hydra' --global-user-env 3 'I_MPI_FABRICS_LIST=ofa' 'I_MPI_FALLBACK=0' 'I_MPI_DEBUG=5' --global-system-env 0 --start-pid 0 --proxy-core-count 12 --exec --exec-appnum 0 --exec-proc-count 12 --exec-local-env 0 --exec-wdir /home/x/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2 --exec-args 1 abinit6.12.3b 

[mpiexec@compute-0-3.local] PMI FD: (null); PMI PORT: (null); PMI ID/RANK: -1
Arguments being passed to proxy 1:
--version 1.3 --interface-env-name MPICH_INTERFACE_HOSTNAME --hostname compute-0-4 --global-core-count 24 --global-process-count 24 --auto-cleanup 1 --pmi-rank -1 --pmi-kvsname kvs_10887_0 --pmi-process-mapping (vector,(0,2,12)) --bindlib ipl --ckpoint-num -1 --global-inherited-env 101 'I_MPI_PERHOST=allcores' 'MKLROOT=/opt/intel/composer_xe_2013.0.079/mkl' 'MANPATH=/opt/intel/itac/8.0.3.007/man:/opt/intel/impi/4.0.3.008/man:/opt/intel/composer_xe_2013.0.079/man/en_US:/opt/intel/composer_xe_2013.0.079/man/en_US:/usr/kerberos/man:/usr/java/latest/man:/usr/local/share/man:/usr/share/man/en:/usr/share/man:/opt/ganglia/man:/opt/pdsh/man:/opt/rocks/man:/opt/condor/man:/opt/tripwire/man:/opt/openmpi/share/man:/opt/sun-ct/man:/opt/gridengine/man::/opt/intel/vtune_amplifier_xe_2013/man' 'PDSHROOT=/opt/pdsh' 'SELINUX_INIT=YES' 'CONSOLE=/dev/console' 'VT_MPI=impi4' 'HOSTNAME=compute-0-3.local' 'INTEL_LICENSE_FILE=/opt/intel/licenses:/opt/intel/composer_xe_2013.0.079/licenses:/opt/intel/licenses:/home/x/intel/licenses' 'IPPROOT=/opt/intel/composer_xe_2013.0.079/ipp' 'SGE_TASK_STEPSIZE=undefined' 'TERM=vt100' 'SHELL=/bin/bash' 'ECLIPSE_HOME=/opt/eclipse' 'HISTSIZE=1000' 'NHOSTS=2' 'CONDOR_IDS=407.407' 'TMPDIR=/tmp/421.1.all.q' 'SGE_O_WORKDIR=/datos/x/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2' 'LIBRARY_PATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/../compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/tbb/lib/intel64' 'SGE_O_HOME=/home/x' 'SGE_CELL=default' 'SGE_ARCH=lx26-amd64' 'MPICH_PROCESS_GROUP=no' 'MIC_LD_LIBRARY_PATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/mic/coi/device-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/composer_xe_2013.0.079/mkl/lib/mic:/opt/intel/composer_xe_2013.0.079/tbb/lib/mic' 'ROCKSROOT=/opt/rocks/share/devel' 'SSH_TTY=/dev/pts/9' 'RESTARTED=0' 'ANT_HOME=/opt/rocks' 'ARC=lx26-amd64' 'USER=x' 'LD_LIBRARY_PATH=/opt/intel/itac/8.0.3.007/itac/slib_impi4:/opt/intel/impi/4.0.3.008/intel64/lib:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/mic/coi/host-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/composer_xe_2013.0.079/mpirt/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/../compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/tbb/lib/intel64:/opt/gridengine/lib/lx26-amd64' 'LS_COLORS=no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:bd=40;33;01:cd=40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=01;32:*.cmd=01;32:*.exe=01;32:*.com=01;32:*.btm=01;32:*.bat=01;32:*.sh=01;32:*.csh=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.gz=01;31:*.bz2=01;31:*.bz=01;31:*.tz=01;31:*.rpm=01;31:*.cpio=01;31:*.jpg=01;35:*.gif=01;35:*.bmp=01;35:*.xbm=01;35:*.xpm=01;35:*.png=01;35:*.tif=01;35:' 'INIT_VERSION=sysvinit-2.86' 'SGE_TASK_LAST=undefined' 'ROCKS_ROOT=/opt/rocks' 'QUEUE=all.q' 'CPATH=/opt/intel/composer_xe_2013.0.079/mkl/include:/opt/intel/composer_xe_2013.0.079/tbb/include' 'SGE_TASK_ID=undefined' 'NLSPATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/debugger/intel64/locale/%l_%t/%N' 'PATH=/tmp/421.1.all.q:/opt/intel/vtune_amplifier_xe_2013/bin64:/opt/intel/itac/8.0.3.007/bin:/opt/intel/impi/4.0.3.008/intel64/bin:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64_mic:/opt/intel/composer_xe_2013.0.079/debugger/gui/intel64:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/bin:/bin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/pdsh/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/condor/bin:/opt/condor/sbin:/opt/gridengine/bin/lx26-amd64:/home/x/bin' 'VT_ADD_LIBS=-ldwarf -lelf -lvtunwind -lnsl -lm -ldl -lpthread' 'MAVEN_HOME=/opt/maven' 'MAIL=/var/spool/mail/x' 'SGE_BINARY_PATH=/opt/gridengine/bin/lx26-amd64' 'RUNLEVEL=3' 'runlevel=3' 'TBBROOT=/opt/intel/composer_xe_2013.0.079/tbb' 'CONDOR_CONFIG=/opt/condor/etc/condor_config' 'SGE_STDERR_PATH=/home/x/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2/atest.o421' 'PWD=/home/x/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2' 'INPUTRC=/etc/inputrc' 'JAVA_HOME=/usr/java/latest' 'SGE_EXECD_PORT=537' 'SGE_ACCOUNT=sge' 'SGE_STDOUT_PATH=/home/x/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2/atest.o421' 'LANG=en_US.iso885915' 'SGE_QMASTER_PORT=536' 'JOB_NAME=atest' 'JOB_SCRIPT=/opt/gridengine/default/spool/compute-0-3/job_scripts/421' 'SGE_ROOT=/opt/gridengine' 'VT_LIB_DIR=/opt/intel/itac/8.0.3.007/itac/lib_impi4' 'CONDOR_ROOT=/opt/condor' 'PREVLEVEL=N' 'previous=N' 'VT_ROOT=/opt/intel/itac/8.0.3.007' 'REQNAME=atest' 'VTUNE_AMPLIFIER_XE_2013_DIR=/opt/intel/vtune_amplifier_xe_2013' 'SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass' 'ENVIRONMENT=BATCH' 'SGE_JOB_SPOOL_DIR=/opt/gridengine/default/spool/compute-0-3/active_jobs/421.1' 'PE_HOSTFILE=/opt/gridengine/default/spool/compute-0-3/active_jobs/421.1/pe_hostfile' 'HOME=/home/x' 'SHLVL=3' 'NQUEUES=2' 'SGE_CWD_PATH=/datos/x/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2' 'SGE_O_LOGNAME=x' 'ROLLSROOT=/opt/rocks/share/devel/src/roll' 'VT_SLIB_DIR=/opt/intel/itac/8.0.3.007/itac/slib_impi4' 'SGE_O_MAIL=/var/spool/mail/x' 'LOGNAME=x' 'JOB_ID=421' 'TMP=/tmp/421.1.all.q' 'CVS_RSH=ssh' 'CLASSPATH=/opt/intel/itac/8.0.3.007/itac/lib_impi4' 'PE=impi' 'I_MPI_HYDRA_BOOTSTRAP=sge' 'SGE_TASK_FIRST=undefined' 'LESSOPEN=|/usr/bin/lesspipe.sh %s' 'SGE_O_PATH=/opt/intel/vtune_amplifier_xe_2013/bin64:/opt/intel/itac/8.0.3.007/bin:/opt/intel/impi/4.0.3.008/intel64/bin:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64_mic:/opt/intel/composer_xe_2013.0.079/debugger/gui/intel64:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/bin:/bin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/pdsh/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/condor/bin:/opt/condor/sbin:/opt/gridengine/bin/lx26-amd64:/home/x/bin' 'SGE_O_SHELL=/bin/bash' 'SGE_O_HOST=gamma' 'REQUEST=atest' 'INCLUDE=/opt/intel/composer_xe_2013.0.079/mkl/include' 'NSLOTS=24' 'G_BROKEN_FILENAMES=1' 'SGE_STDIN_PATH=/dev/null' 'I_MPI_ROOT=/opt/intel/impi/4.0.3.008' '_=/opt/intel/impi/4.0.3.008/intel64/bin/mpiexec.hydra' --global-user-env 3 'I_MPI_FABRICS_LIST=ofa' 'I_MPI_FALLBACK=0' 'I_MPI_DEBUG=5' --global-system-env 0 --start-pid 12 --proxy-core-count 12 --exec --exec-appnum 0 --exec-proc-count 12 --exec-local-env 0 --exec-wdir /home/x/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/4x4x4.G.relax.wfk4kss2 --exec-args 1 abinit6.12.3b 

[mpiexec@compute-0-3.local] Launch arguments: /opt/intel/impi/4.0.3.008/intel64/bin/pmi_proxy --control-port compute-0-3.local:36811 --debug --pmi-connect lazy-cache --pmi-aggregate --preload libVTmc.so -s 0 --bootstrap ssh --demux poll --pgid 0 --enable-stdin 1 --proxy-id 0 
[mpiexec@compute-0-3.local] Launch arguments: /usr/bin/ssh -x -q compute-0-4 /opt/intel/impi/4.0.3.008/intel64/bin/pmi_proxy --control-port compute-0-3.local:36811 --debug --pmi-connect lazy-cache --pmi-aggregate --preload libVTmc.so -s 0 --bootstrap ssh --demux poll --pgid 0 --enable-stdin 1 --proxy-id 1 
[mpiexec@compute-0-3.local] STDIN will be redirected to 1 fd(s): 9 
[proxy:0:0@compute-0-3.local] Start PMI_proxy 0
[proxy:0:0@compute-0-3.local] STDIN will be redirected to 1 fd(s): 12 
[proxy:0:0@compute-0-3.local] got pmi command (from 9): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 10): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 17): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 29): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 35): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 6): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 9): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 17): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 20): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 23): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 26): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 29): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 32): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 38): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 6): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 9): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 10): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 17): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 20): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 23): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 26): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 29): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 32): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 35): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 41): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 6): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 20): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 23): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 26): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 32): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 38): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 35): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 41): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 38): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 41): barrier_in

[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[proxy:0:0@compute-0-3.local] forwarding command (cmd=barrier_in) upstream
[proxy:0:1@compute-0-4.local] Start PMI_proxy 1
[proxy:0:1@compute-0-4.local] got pmi command (from 10): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-4.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-4.local] got pmi command (from 13): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-4.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-4.local] got pmi command (from 25): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-4.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-4.local] got pmi command (from 4): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-4.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-4.local] got pmi command (from 5): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-4.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-4.local] got pmi command (from 7): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-4.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-4.local] got pmi command (from 10): get_maxes

[proxy:0:1@compute-0-4.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-4.local] got pmi command (from 16): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-4.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-4.local] got pmi command (from 19): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-4.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-4.local] got pmi command (from 22): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-4.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-4.local] got pmi command (from 28): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-4.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-4.local] got pmi command (from 31): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-4.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-4.local] got pmi command (from 34): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-4.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-4.local] got pmi command (from 4): get_maxes

[proxy:0:1@compute-0-4.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-4.local] got pmi command (from 5): get_maxes

[proxy:0:1@compute-0-4.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-4.local] got pmi command (from 7): get_maxes

[proxy:0:1@compute-0-4.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-4.local] got pmi command (from 10): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 13): get_maxes

[proxy:0:1@compute-0-4.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-4.local] got pmi command (from 16): get_maxes

[proxy:0:1@compute-0-4.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-4.local] got pmi command (from 19): get_maxes

[proxy:0:1@compute-0-4.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-4.local] got pmi command (from 22): get_maxes

[proxy:0:1@compute-0-4.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-4.local] got pmi command (from 25): get_maxes

[proxy:0:1@compute-0-4.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-4.local] got pmi command (from 28): get_maxes

[proxy:0:1@compute-0-4.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-4.local] got pmi command (from 31): get_maxes

[proxy:0:1@compute-0-4.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-4.local] got pmi command (from 4): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 5): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 7): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 13): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 16): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 19): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 22): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 25): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 28): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 34): get_maxes

[proxy:0:1@compute-0-4.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 34: cmd=barrier_out
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 34: cmd=barrier_out
[proxy:0:1@compute-0-4.local] got pmi command (from 31): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 34): barrier_in

[proxy:0:1@compute-0-4.local] forwarding command (cmd=barrier_in) upstream
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] got pmi command (from 4): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] got pmi command (from 6): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:1@compute-0-4.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:1@compute-0-4.local] got pmi command (from 5): get_ranks2hosts

[proxy:0:1@compute-0-4.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:1@compute-0-4.local] got pmi command (from 7): get_ranks2hosts

[proxy:0:1@compute-0-4.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:1@compute-0-4.local] got pmi command (from 10): get_ranks2hosts

[proxy:0:1@compute-0-4.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:1@compute-0-4.local] got pmi command (from 13): get_ranks2hosts

[proxy:0:1@compute-0-4.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:0@compute-0-3.local] got pmi command (from 9): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:1@compute-0-4.local] got pmi command (from 16): get_ranks2hosts

[proxy:0:1@compute-0-4.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:1@compute-0-4.local] got pmi command (from 19): get_ranks2hosts

[proxy:0:1@compute-0-4.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:1@compute-0-4.local] got pmi command (from 22): get_ranks2hosts

[proxy:0:1@compute-0-4.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:1@compute-0-4.local] got pmi command (from 25): get_ranks2hosts

[proxy:0:1@compute-0-4.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:0@compute-0-3.local] got pmi command (from 17): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:0@compute-0-3.local] got pmi command (from 20): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:0@compute-0-3.local] got pmi command (from 23): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:0@compute-0-3.local] got pmi command (from 26): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:0@compute-0-3.local] got pmi command (from 29): get_ranks2hosts
[proxy:0:1@compute-0-4.local] got pmi command (from 4): get_appnum

[proxy:0:1@compute-0-4.local] PMI response: cmd=appnum appnum=0

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:0@compute-0-3.local] got pmi command (from 32): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:0@compute-0-3.local] got pmi command (from 35): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:0@compute-0-3.local] got pmi command (from 6): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 9): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 17): get_appnum

[proxy:0:1@compute-0-4.local] got pmi command (from 5): get_appnum

[proxy:0:1@compute-0-4.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-4.local] got pmi command (from 7): get_appnum

[proxy:0:1@compute-0-4.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-4.local] got pmi command (from 10): get_appnum

[proxy:0:1@compute-0-4.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-4.local] got pmi command (from 13): get_appnum

[proxy:0:1@compute-0-4.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-4.local] got pmi command (from 16): get_appnum

[proxy:0:1@compute-0-4.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-4.local] got pmi command (from 19): get_appnum

[proxy:0:1@compute-0-4.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-4.local] got pmi command (from 22): get_appnum

[proxy:0:1@compute-0-4.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-4.local] got pmi command (from 25): get_appnum

[proxy:0:1@compute-0-4.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-4.local] got pmi command (from 28): get_ranks2hosts

[proxy:0:1@compute-0-4.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:1@compute-0-4.local] got pmi command (from 31): get_ranks2hosts

[proxy:0:1@compute-0-4.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 20): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 23): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-4.local] got pmi command (from 34): get_ranks2hosts

[proxy:0:1@compute-0-4.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:1@compute-0-4.local] got pmi command (from 4): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 5): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 7): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 10): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 13): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 16): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 19): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 26): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 29): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 38): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:1@compute-0-4.local] got pmi command (from 22): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 25): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 41): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 96 2
11 compute-0-3 0,1,2,3,4,5,6,7,8,9,10,11, 11 compute-0-4 12,13,14,15,16,17,18,19,20,21,22,23, 
[proxy:0:0@compute-0-3.local] got pmi command (from 6): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 9): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 28): get_appnum

[proxy:0:1@compute-0-4.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-4.local] got pmi command (from 31): get_appnum

[proxy:0:1@compute-0-4.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-4.local] got pmi command (from 4): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 5): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 7): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 17): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 20): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 23): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 26): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 29): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 10): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 13): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 16): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 19): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 22): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 25): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 32): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=put kvsname=kvs_10887_0 key=sharedFilename[12] value=/dev/shm/Intel_MPI_HM0wnn
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 4: cmd=put_result rc=0 msg=success
[proxy:0:0@compute-0-3.local] got pmi command (from 35): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 6): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 9): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 34): get_appnum

[proxy:0:1@compute-0-4.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 17): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 20): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 23): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 26): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 29): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 38): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 41): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 6): put
kvsname=kvs_10887_0 key=sharedFilename[0] value=/dev/shm/Intel_MPI_beqy96 
[proxy:0:0@compute-0-3.local] forwarding command (cmd=put kvsname=kvs_10887_0 key=sharedFilename[0] value=/dev/shm/Intel_MPI_beqy96) upstream
[proxy:0:0@compute-0-3.local] got pmi command (from 9): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 10): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 32): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 4): put
kvsname=kvs_10887_0 key=sharedFilename[12] value=/dev/shm/Intel_MPI_HM0wnn 
[proxy:0:1@compute-0-4.local] forwarding command (cmd=put kvsname=kvs_10887_0 key=sharedFilename[12] value=/dev/shm/Intel_MPI_HM0wnn) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=put kvsname=kvs_10887_0 key=sharedFilename[0] value=/dev/shm/Intel_MPI_beqy96
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 6: cmd=put_result rc=0 msg=success
[proxy:0:0@compute-0-3.local] got pmi command (from 35): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 38): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] we don't understand the response put_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 17): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 5): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 7): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 10): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 13): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 16): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 19): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 22): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 25): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 28): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 31): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] we don't understand the response put_result; forwarding downstream
[proxy:0:1@compute-0-4.local] got pmi command (from 28): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 34): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 20): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 23): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 26): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 4): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 31): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 34): get_my_kvsname

[proxy:0:1@compute-0-4.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 29): barrier_in

[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[proxy:0:0@compute-0-3.local] got pmi command (from 41): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 28): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 31): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 6): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 32): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 35): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 38): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:1@compute-0-4.local] got pmi command (from 34): barrier_in

[proxy:0:1@compute-0-4.local] forwarding command (cmd=barrier_in) upstream
[proxy:0:0@compute-0-3.local] got pmi command (from 32): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 35): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 41): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_10887_0
[proxy:0:0@compute-0-3.local] got pmi command (from 38): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 41): barrier_in

[proxy:0:0@compute-0-3.local] forwarding command (cmd=barrier_in) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 41: cmd=barrier_out
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 41: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] got pmi command (from 9): get
kvsname=kvs_10887_0 key=sharedFilename[0] 
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_beqy96
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get
kvsname=kvs_10887_0 key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_beqy96
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] got pmi command (from 17): get
kvsname=kvs_10887_0 key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_beqy96
[proxy:0:0@compute-0-3.local] got pmi command (from 20): get
kvsname=kvs_10887_0 key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_beqy96
[proxy:0:0@compute-0-3.local] got pmi command (from 23): get
kvsname=kvs_10887_0 key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_beqy96
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] got pmi command (from 5): get
kvsname=kvs_10887_0 key=sharedFilename[12] 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_HM0wnn
[proxy:0:1@compute-0-4.local] got pmi command (from 7): get
kvsname=kvs_10887_0 key=sharedFilename[12] 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_HM0wnn
[proxy:0:0@compute-0-3.local] got pmi command (from 26): get
kvsname=kvs_10887_0 key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_beqy96
[proxy:0:1@compute-0-4.local] got pmi command (from 10): get
kvsname=kvs_10887_0 key=sharedFilename[12] 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_HM0wnn
[proxy:0:1@compute-0-4.local] got pmi command (from 13): get
kvsname=kvs_10887_0 key=sharedFilename[12] 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_HM0wnn
[proxy:0:0@compute-0-3.local] got pmi command (from 29): get
kvsname=kvs_10887_0 key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_beqy96
[proxy:0:0@compute-0-3.local] got pmi command (from 32): get
kvsname=kvs_10887_0 key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_beqy96
[proxy:0:0@compute-0-3.local] got pmi command (from 35): get
kvsname=kvs_10887_0 key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_beqy96
[proxy:0:0@compute-0-3.local] got pmi command (from 38): get
kvsname=kvs_10887_0 [proxy:0:1@compute-0-4.local] got pmi command (from 16): get
kvsname=kvs_10887_0 key=sharedFilename[12] 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_HM0wnn
[proxy:0:1@compute-0-4.local] got pmi command (from 19): get
kvsname=kvs_10887_0 key=sharedFilename[12] 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_HM0wnn
[proxy:0:1@compute-0-4.local] got pmi command (from 22): get
kvsname=kvs_10887_0 key=sharedFilename[12] 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_HM0wnn
[proxy:0:1@compute-0-4.local] got pmi command (from 25): get
kvsname=kvs_10887_0 key=sharedFilename[12] 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_HM0wnn
key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_beqy96
[proxy:0:0@compute-0-3.local] got pmi command (from 41): get
kvsname=kvs_10887_0 key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_beqy96
[proxy:0:1@compute-0-4.local] got pmi command (from 28): get
kvsname=kvs_10887_0 key=sharedFilename[12] 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_HM0wnn
[proxy:0:1@compute-0-4.local] got pmi command (from 31): get
kvsname=kvs_10887_0 key=sharedFilename[12] 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_HM0wnn
[proxy:0:1@compute-0-4.local] got pmi command (from 34): get
kvsname=kvs_10887_0 key=sharedFilename[12] 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_HM0wnn
[7] MPI startup(): shm and ofa data transfer modes
[13] MPI startup(): shm and ofa data transfer modes
[2] MPI startup(): shm and ofa data transfer modes
[19] MPI startup(): shm and ofa data transfer modes
[4] MPI startup(): shm and ofa data transfer modes
[17] MPI startup(): shm and ofa data transfer modes
[9] MPI startup(): shm and ofa data transfer modes
[14] MPI startup(): shm and ofa data transfer modes
[3] MPI startup(): shm and ofa data transfer modes
[18] MPI startup(): shm and ofa data transfer modes
[0] MPI startup(): shm and ofa data transfer modes
[21] MPI startup(): shm and ofa data transfer modes
[6] MPI startup(): shm and ofa data transfer modes
[15] MPI startup(): shm and ofa data transfer modes
[8] MPI startup(): shm and ofa data transfer modes
[12] MPI startup(): shm and ofa data transfer modes
[1] MPI startup(): shm and ofa data transfer modes
[23] MPI startup(): shm and ofa data transfer modes
[20] MPI startup(): shm and ofa data transfer modes
[5] MPI startup(): shm and ofa data transfer modes
[10] MPI startup(): shm and ofa data transfer modes
[16] MPI startup(): shm and ofa data transfer modes
[11] MPI startup(): shm and ofa data transfer modes
[proxy:0:0@compute-0-3.local] got pmi command (from 6): put
kvsname=kvs_10887_0 key=P0-businesscard value=OFA#00000002:004800e3:004800e4:004800e2$fabrics_list#shm_and_ofa$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 9): put
kvsname=kvs_10887_0 key=P1-businesscard value=OFA#00000002:00480131:00480132:00480130$fabrics_list#shm_and_ofa$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 10): put
kvsname=kvs_10887_0 key=P2-businesscard value=OFA#00000002:0048007b:0048007c:0048007a$fabrics_list#shm_and_ofa$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 17): put
kvsname=kvs_10887_0 key=P3-businesscard value=OFA#00000002:004800c9:004800ca:004800c8$fabrics_list#shm_and_ofa$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 20): put
kvsname=kvs_10887_0 key=P4-businesscard value=OFA#00000002:00480095:00480096:00480094$fabrics_list#shm_and_ofa$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 26): put
kvsname=kvs_10887_0 key=P6-businesscard value=OFA#00000002:004800fd:004800fe:004800fc$fabrics_list#shm_and_ofa$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 23): put
kvsname=kvs_10887_0 key=P5-businesscard value=OFA#00000002:0048014b:0048014c:0048014a$fabrics_list#shm_and_ofa$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 32): put
kvsname=kvs_10887_0 key=P8-businesscard value=OFA#00000002:00480117:00480118:00480116$fabrics_list#shm_and_ofa$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 35): put
kvsname=kvs_10887_0 key=P9-businesscard value=OFA#00000002:004800af:004800b0:004800ae$fabrics_list#shm_and_ofa$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 38): put
kvsname=kvs_10887_0 key=P10-businesscard value=OFA#00000002:00480165:00480166:00480164$fabrics_list#shm_and_ofa$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 41): put
kvsname=kvs_10887_0 key=P11-businesscard value=OFA#00000002:0048017f:00480180:0048017e$fabrics_list#shm_and_ofa$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 29): put
kvsname=kvs_10887_0 key=P7-businesscard value=OFA#00000002:00480061:00480062:00480060$fabrics_list#shm_and_ofa$ 
[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P0-businesscard value=OFA#00000002:004800e3:004800e4:004800e2$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P1-businesscard value=OFA#00000002:00480131:00480132:00480130$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P2-businesscard value=OFA#00000002:0048007b:0048007c:0048007a$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P3-businesscard value=OFA#00000002:004800c9:004800ca:004800c8$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P4-businesscard value=OFA#00000002:00480095:00480096:00480094$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P6-businesscard value=OFA#00000002:004800fd:004800fe:004800fc$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P5-businesscard value=OFA#00000002:0048014b:0048014c:0048014a$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P8-businesscard value=OFA#00000002:00480117:00480118:00480116$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P9-businesscard value=OFA#00000002:004800af:004800b0:004800ae$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P10-businesscard value=OFA#00000002:00480165:00480166:00480164$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P11-businesscard value=OFA#00000002:0048017f:00480180:0048017e$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P7-businesscard value=OFA#00000002:00480061:00480062:00480060$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[proxy:0:0@compute-0-3.local] got pmi command (from 6): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 9): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 10): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 17): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 20): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 23): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 26): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 32): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 35): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 38): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 41): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 29): barrier_in

[proxy:0:0@compute-0-3.local] forwarding command (cmd=barrier_in) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[22] MPI startup(): shm and ofa data transfer modes
[proxy:0:1@compute-0-4.local] got pmi command (from 4): put
kvsname=kvs_10887_0 key=P12-businesscard value=OFA#00000003:006c0117:006c0118:006c0116$fabrics_list#shm_and_ofa$ 
[proxy:0:1@compute-0-4.local] got pmi command (from 5): put
kvsname=kvs_10887_0 key=P13-businesscard value=OFA#00000003:006c0061:006c0062:006c0060$fabrics_list#shm_and_ofa$ 
[proxy:0:1@compute-0-4.local] got pmi command (from 7): put
kvsname=kvs_10887_0 key=P14-businesscard value=OFA#00000003:006c00af:006c00b0:006c00ae$fabrics_list#shm_and_ofa$ 
[proxy:0:1@compute-0-4.local] got pmi command (from 10): put
kvsname=kvs_10887_0 key=P15-businesscard value=OFA#00000003:006c00fd:006c00fe:006c00fc$fabrics_list#shm_and_ofa$ 
[proxy:0:1@compute-0-4.local] got pmi command (from 16): put
kvsname=kvs_10887_0 key=P17-businesscard value=OFA#00000003:006c0095:006c0096:006c0094$fabrics_list#shm_and_ofa$ 
[proxy:0:1@compute-0-4.local] got pmi command (from 19): put
kvsname=kvs_10887_0 key=P18-businesscard value=OFA#00000003:006c00c9:006c00ca:006c00c8$fabrics_list#shm_and_ofa$ 
[proxy:0:1@compute-0-4.local] got pmi command (from 31): put
kvsname=kvs_10887_0 key=P22-businesscard value=OFA#00000003:006c017f:006c0180:006c017e$fabrics_list#shm_and_ofa$ 
[proxy:0:1@compute-0-4.local] got pmi command (from 34): put
kvsname=kvs_10887_0 key=P23-businesscard value=OFA#00000003:006c0132:006c0133:006c0130$fabrics_list#shm_and_ofa$ 
[proxy:0:1@compute-0-4.local] got pmi command (from 13): put
kvsname=kvs_10887_0 key=P16-businesscard value=OFA#00000003:006c0165:006c0166:006c0164$fabrics_list#shm_and_ofa$ 
[proxy:0:1@compute-0-4.local] got pmi command (from 25): put
kvsname=kvs_10887_0 key=P20-businesscard value=OFA#00000003:006c014b:006c014c:006c014a$fabrics_list#shm_and_ofa$ 
[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P12-businesscard value=OFA#00000003:006c0117:006c0118:006c0116$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P13-businesscard value=OFA#00000003:006c0061:006c0062:006c0060$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P14-businesscard value=OFA#00000003:006c00af:006c00b0:006c00ae$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P15-businesscard value=OFA#00000003:006c00fd:006c00fe:006c00fc$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P17-businesscard value=OFA#00000003:006c0095:006c0096:006c0094$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P18-businesscard value=OFA#00000003:006c00c9:006c00ca:006c00c8$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P22-businesscard value=OFA#00000003:006c017f:006c0180:006c017e$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P23-businesscard value=OFA#00000003:006c0132:006c0133:006c0130$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P16-businesscard value=OFA#00000003:006c0165:006c0166:006c0164$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P20-businesscard value=OFA#00000003:006c014b:006c014c:006c014a$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P19-businesscard value=OFA#00000003:006c007b:006c007c:006c007a$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_10887_0 key=P21-businesscard value=OFA#00000003:006c00e3:006c00e4:006c00e2$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[proxy:0:1@compute-0-4.local] got pmi command (from 22): put
kvsname=kvs_10887_0 key=P19-businesscard value=OFA#00000003:006c007b:006c007c:006c007a$fabrics_list#shm_and_ofa$ 
[proxy:0:1@compute-0-4.local] got pmi command (from 28): put
kvsname=kvs_10887_0 key=P21-businesscard value=OFA#00000003:006c00e3:006c00e4:006c00e2$fabrics_list#shm_and_ofa$ 
[proxy:0:1@compute-0-4.local] got pmi command (from 4): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 5): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 7): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 10): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 16): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 31): barrier_in

[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 25: cmd=barrier_out
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 25: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] got pmi command (from 13): barrier_in

[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] got pmi command (from 19): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 22): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 28): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 34): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 25): barrier_in

[proxy:0:1@compute-0-4.local] forwarding command (cmd=barrier_in) upstream
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] got pmi command (from 29): get
kvsname=kvs_10887_0 key=P6-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:004800fd:004800fe:004800fc$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 35): get
kvsname=kvs_10887_0 key=P8-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:00480117:00480118:00480116$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 13): get
kvsname=kvs_10887_0 key=P15-businesscard 
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get
kvsname=kvs_10887_0 key=P1-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:00480131:00480132:00480130$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_10887_0 key=P0-businesscard
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 34: cmd=get_result rc=0 msg=success value=OFA#00000002:004800e3:004800e4:004800e2$fabrics_list#shm_and_ofa$ key=P0-businesscard
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c00fd:006c00fe:006c00fc$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 19): get
kvsname=kvs_10887_0 key=P17-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c0095:006c0096:006c0094$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 28): get
kvsname=kvs_10887_0 key=P20-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c014b:006c014c:006c014a$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 34): get
kvsname=kvs_10887_0 key=P22-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c017f:006c0180:006c017e$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 20): get
kvsname=kvs_10887_0 key=P3-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:004800c9:004800ca:004800c8$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 23): get
kvsname=kvs_10887_0 key=P4-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:00480095:00480096:00480094$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 13): get
kvsname=kvs_10887_0 key=P17-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c0095:006c0096:006c0094$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 19): get
kvsname=kvs_10887_0 key=P19-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c007b:006c007c:006c007a$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 34): get
kvsname=kvs_10887_0 key=P0-businesscard 
[proxy:0:1@compute-0-4.local] forwarding command (cmd=get kvsname=kvs_10887_0 key=P0-businesscard) upstream
[proxy:0:0@compute-0-3.local] got pmi command (from 32): get
kvsname=kvs_10887_0 key=P7-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:00480061:00480062:00480060$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 41): get
kvsname=kvs_10887_0 key=P10-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:00480165:00480166:00480164$fabrics_list#shm_and_ofa$
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_10887_0 key=P11-businesscard
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 4: cmd=get_result rc=0 msg=success value=OFA#00000002:0048017f:00480180:0048017e$fabrics_list#shm_and_ofa$ key=P11-businesscard
[proxy:0:0@compute-0-3.local] got pmi command (from 6): get
kvsname=kvs_10887_0 key=P23-businesscard 
[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_10887_0 key=P23-businesscard) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_10887_0 key=P23-businesscard
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 6: cmd=get_result rc=0 msg=success value=OFA#00000003:006c0132:006c0133:006c0130$fabrics_list#shm_and_ofa$ key=P23-businesscard
[proxy:0:0@compute-0-3.local] got pmi command (from 9): get
kvsname=kvs_10887_0 key=P0-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:004800e3:004800e4:004800e2$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get
kvsname=kvs_10887_0 key=P3-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:004800c9:004800ca:004800c8$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 20): get
kvsname=kvs_10887_0 key=P5-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:0048014b:0048014c:0048014a$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 25): get
kvsname=kvs_10887_0 key=P19-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c007b:006c007c:006c007a$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 4): get
kvsname=kvs_10887_0 key=P11-businesscard 
[proxy:0:1@compute-0-4.local] forwarding command (cmd=get kvsname=kvs_10887_0 key=P11-businesscard) upstream
[proxy:0:1@compute-0-4.local] got pmi command (from 7): get
kvsname=kvs_10887_0 key=P13-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c0061:006c0062:006c0060$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 16): get
kvsname=kvs_10887_0 key=P16-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c0165:006c0166:006c0164$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 28): get
kvsname=kvs_10887_0 key=P22-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c017f:006c0180:006c017e$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] we don't understand the response get_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 23): get
kvsname=kvs_10887_0 key=P6-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:004800fd:004800fe:004800fc$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 26): get
kvsname=kvs_10887_0 key=P5-businesscard [proxy:0:1@compute-0-4.local] got pmi command (from 5): get
kvsname=kvs_10887_0 key=P12-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c0117:006c0118:006c0116$fabrics_list#shm_and_ofa$

[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:0048014b:0048014c:0048014a$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 32): get
kvsname=kvs_10887_0 key=P9-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:004800af:004800b0:004800ae$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 35): get
kvsname=kvs_10887_0 key=P10-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:00480165:00480166:00480164$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 38): get
kvsname=kvs_10887_0 key=P9-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:004800af:004800b0:004800ae$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 9): get
kvsname=kvs_10887_0 key=P2-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:0048007b:0048007c:0048007a$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 17): get
kvsname=kvs_10887_0 key=P2-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:0048007b:0048007c:0048007a$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 7): get
kvsname=kvs_10887_0 key=P15-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c00fd:006c00fe:006c00fc$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 25): get
kvsname=kvs_10887_0 key=P21-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c00e3:006c00e4:006c00e2$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] we don't understand the response get_result; forwarding downstream
[proxy:0:1@compute-0-4.local] got pmi command (from 5): get
kvsname=kvs_10887_0 key=P14-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c00af:006c00b0:006c00ae$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 10): get
kvsname=kvs_10887_0 key=P14-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c00af:006c00b0:006c00ae$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 16): get
kvsname=kvs_10887_0 key=P18-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c00c9:006c00ca:006c00c8$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 31): get
kvsname=kvs_10887_0 key=P21-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c00e3:006c00e4:006c00e2$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 4): get
kvsname=kvs_10887_0 key=P13-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c0061:006c0062:006c0060$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 10): get
kvsname=kvs_10887_0 key=P16-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c0165:006c0166:006c0164$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 31): get
kvsname=kvs_10887_0 key=P23-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c0132:006c0133:006c0130$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 26): get
kvsname=kvs_10887_0 key=P7-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:00480061:00480062:00480060$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 41): get
kvsname=kvs_10887_0 key=P12-businesscard 
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_10887_0 key=P12-businesscard
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 41: cmd=get_result rc=0 msg=success value=OFA#00000003:006c0117:006c0118:006c0116$fabrics_list#shm_and_ofa$ key=P12-businesscard
[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_10887_0 key=P12-businesscard) upstream
[proxy:0:0@compute-0-3.local] got pmi command (from 17): get
kvsname=kvs_10887_0 key=P4-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:00480095:00480096:00480094$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 22): get
kvsname=kvs_10887_0 key=P18-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c00c9:006c00ca:006c00c8$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 22): get
kvsname=kvs_10887_0 key=P20-businesscard 
[proxy:0:1@compute-0-4.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000003:006c014b:006c014c:006c014a$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 38): get
kvsname=kvs_10887_0 key=P11-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:0048017f:00480180:0048017e$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 29): get
kvsname=kvs_10887_0 key=P8-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:00480117:00480118:00480116$fabrics_list#shm_and_ofa$
[proxy:0:0@compute-0-3.local] got pmi command (from 6): get
kvsname=kvs_10887_0 key=P1-businesscard 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=OFA#00000002:00480131:00480132:00480130$fabrics_list#shm_and_ofa$
[proxy:0:1@compute-0-4.local] got pmi command (from 25): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 13): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 10): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 28): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 22): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 4): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 5): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 7): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 16): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 19): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 20): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 9): barrier_in

[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[proxy:0:1@compute-0-4.local] got pmi command (from 10): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 31): barrier_in

[proxy:0:1@compute-0-4.local] got pmi command (from 34): barrier_in

[proxy:0:1@compute-0-4.local] forwarding command (cmd=barrier_in) upstream
[proxy:0:0@compute-0-3.local] got pmi command (from 17): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 6): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 38): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 32): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 23): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 26): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 41): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 29): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 35): barrier_in

[proxy:0:0@compute-0-3.local] forwarding command (cmd=barrier_in) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 35: cmd=barrier_out
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 35: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-4.local] PMI response: cmd=barrier_out
[0] MPI startup(): Rank    Pid      Node name          Pin cpu
[0] MPI startup(): 0       10890    compute-0-3.local  0
[0] MPI startup(): 1       10891    compute-0-3.local  2
[0] MPI startup(): 2       10892    compute-0-3.local  4
[0] MPI startup(): 3       10893    compute-0-3.local  6
[0] MPI startup(): 4       10894    compute-0-3.local  8
[0] MPI startup(): 5       10895    compute-0-3.local  10
[0] MPI startup(): 6       10896    compute-0-3.local  1
[0] MPI startup(): 7       10897    compute-0-3.local  3
[0] MPI startup(): 8       10898    compute-0-3.local  5
[0] MPI startup(): 9       10899    compute-0-3.local  7
[0] MPI startup(): 10      10900    compute-0-3.local  9
[0] MPI startup(): 11      10901    compute-0-3.local  11
[0] MPI startup(): 12      2826     compute-0-4.local  0
[0] MPI startup(): 13      2827     compute-0-4.local  2
[0] MPI startup(): 14      2828     compute-0-4.local  4
[0] MPI startup(): 15      2829     compute-0-4.local  6
[0] MPI startup(): 16      2830     compute-0-4.local  8
[0] MPI startup(): 17      2831     compute-0-4.local  10
[0] MPI startup(): 18      2832     compute-0-4.local  1
[0] MPI startup(): 19      2833     compute-0-4.local  3
[0] MPI startup(): 20      2834     compute-0-4.local  5
[0] MPI startup(): 21      2835     compute-0-4.local  7
[0] MPI startup(): 22      2836     compute-0-4.local  9
[0] MPI startup(): 23      2837     compute-0-4.local  11
[0] MPI startup(): I_MPI_DEBUG=5
[0] MPI startup(): I_MPI_FABRICS_LIST=ofa
[0] MPI startup(): I_MPI_FALLBACK=0
[0] MPI startup(): I_MPI_PIN_MAPPING=12:0 0,1 2,2 4,3 6,4 8,5 10,6 1,7 3,8 5,9 7,10 9,11 11

[0] INFO: CHECK LOCAL:EXIT:SIGNAL ON
[0] INFO: CHECK LOCAL:EXIT:BEFORE_MPI_FINALIZE ON
[0] INFO: CHECK LOCAL:MPI:CALL_FAILED ON
[0] INFO: CHECK LOCAL:MEMORY:OVERLAP ON
[0] INFO: CHECK LOCAL:MEMORY:ILLEGAL_MODIFICATION ON
[0] INFO: CHECK LOCAL:MEMORY:INACCESSIBLE ON
[0] INFO: CHECK LOCAL:MEMORY:ILLEGAL_ACCESS OFF
[0] INFO: CHECK LOCAL:MEMORY:INITIALIZATION OFF
[0] INFO: CHECK LOCAL:REQUEST:ILLEGAL_CALL ON
[0] INFO: CHECK LOCAL:REQUEST:NOT_FREED ON
[0] INFO: CHECK LOCAL:REQUEST:PREMATURE_FREE ON
[0] INFO: CHECK LOCAL:DATATYPE:NOT_FREED ON
[0] INFO: CHECK LOCAL:BUFFER:INSUFFICIENT_BUFFER ON
[0] INFO: CHECK GLOBAL:DEADLOCK:HARD ON
[0] INFO: CHECK GLOBAL:DEADLOCK:POTENTIAL ON
[0] INFO: CHECK GLOBAL:DEADLOCK:NO_PROGRESS ON
[0] INFO: CHECK GLOBAL:MSG:DATATYPE:MISMATCH ON
[0] INFO: CHECK GLOBAL:MSG:DATA_TRANSMISSION_CORRUPTED ON
[0] INFO: CHECK GLOBAL:MSG:PENDING ON
[0] INFO: CHECK GLOBAL:COLLECTIVE:DATATYPE:MISMATCH ON
[0] INFO: CHECK GLOBAL:COLLECTIVE:DATA_TRANSMISSION_CORRUPTED ON
[0] INFO: CHECK GLOBAL:COLLECTIVE:OPERATION_MISMATCH ON
[0] INFO: CHECK GLOBAL:COLLECTIVE:SIZE_MISMATCH ON
[0] INFO: CHECK GLOBAL:COLLECTIVE:REDUCTION_OPERATION_MISMATCH ON
[0] INFO: CHECK GLOBAL:COLLECTIVE:ROOT_MISMATCH ON
[0] INFO: CHECK GLOBAL:COLLECTIVE:INVALID_PARAMETER ON
[0] INFO: CHECK GLOBAL:COLLECTIVE:COMM_FREE_MISMATCH ON
[0] INFO: maximum number of errors before aborting: CHECK-MAX-ERRORS 1
[0] INFO: maximum number of reports before aborting: CHECK-MAX-REPORTS 0 (= unlimited)
[0] INFO: maximum number of times each error is reported: CHECK-SUPPRESSION-LIMIT 10
[0] INFO: timeout for deadlock detection: DEADLOCK-TIMEOUT 60s
[0] INFO: timeout for deadlock warning: DEADLOCK-WARNING 300s
[0] INFO: maximum number of reported pending messages: CHECK-MAX-PENDING 20

  ABINIT 
  
  Give name for formatted input file: 
cSi216I3J.kss.in
  Give name for formatted output file:
cSi216I3J.kss.out
  Give root name for generic input files:
cSi216I3J.kss.xi
  Give root name for generic output files:
cSi216I3J.kss.xo
  Give root name for generic temporary files:
cSi216I3J.kss.xe
-P-0000  leave_test : synchronization done...

.Version 6.12.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel13.0 computer) 

.Copyright (C) 1998-2012 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Tue  9 Oct 2012.
- ( at 11h 4 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.12.3
  Build target  : x86_64_linux_intel13.0
  Build date    : 20121009
 
 === Compiler Suite === 
  C compiler       : intel13.0
  CFLAGS           :  -g -O2 -vec-report0
  C++ compiler     : gnu13.0
  CXXFLAGS         :  -g -O2 -xHost -mfpmath=sse
  Fortran compiler : intel13.0
  FCFLAGS          :  -g -extend-source -vec-report0 -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
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
  FFT flavor    : fftw3-mkl
  LINALG flavor : mkl
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf-fallback+etsf_io-fallback
 
 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -xHost


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                   CXX_GNU                  FC_INTEL

          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT            HAVE_DFT_LIBXC

        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...           HAVE_FC_CPUTIME

              HAVE_FC_EXIT             HAVE_FC_GAMMA     HAVE_FC_ISO_C_BINDING

        HAVE_FC_LONG_LINES              HAVE_FC_NULL         HAVE_FC_STREAM_IO

                  HAVE_FFT        HAVE_FFT_FFTW3_MKL              HAVE_FFT_MPI

           HAVE_FFT_SERIAL               HAVE_LINALG        HAVE_LINALG_SERIAL

                  HAVE_MPI                 HAVE_MPI2               HAVE_MPI_IO

 HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX                HAVE_TIMER

         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL

         HAVE_TRIO_ETSF_IO          HAVE_TRIO_NETCDF
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> cSi216I3J.kss.in
- output file    -> cSi216I3J.kss.out
- root for input  files -> cSi216I3J.kss.xi
- root for output files -> cSi216I3J.kss.xo

 instrng :   281 lines of input have been read
  m_ab6_invars_f90 (ab6_invars_load) : token%timopt=           0

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 14-Si.LDA.fhi
-P-0000   read the values zionpsp=  4.0 , pspcod=   6 , lmax=   3
-P-0000
-P-0000  inpspheads : deduce mpsang  =   4, n1xccc  =   0.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is hR (rhombohedral)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hR (rhombohedral)

 symlatt : the Bravais lattice is hR (rhombohedral)
 symspgr : the symmetry operation no.   1 is the identity
 symaxes : the symmetry operation no.   2 is a 3-axis
 symaxes : the symmetry operation no.   3 is a 3-axis
 symspgr : spgroup= 146  R3   (=C3^4)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    1.225941E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 

 abinit : WARNING -
  The product of npkpt, npfft, npband and npspinor is bigger than the number of processors.
  The user-defined values of npkpt, npfft, npband or npspinor will be modified,
  in order to bring this product below nproc .
  At present, only a very simple algorithm is used ...

 abinit : WARNING -
  Set npfft and npband to 1

 initmpi_grid : WARNING -
  The number of band*FFT*kpt*spinor processors, npband*npfft*npkpt*npspinor should be
  equal to the total number of processors, nproc.
  However, npband   =    1           npfft    =    1           npkpt    =    2           npspinor =    1  and nproc=   24
 npfft, npband, npspinor and npkpt           1           1           1
           2
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =           2           2
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    7 and mkmem  =    14, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    7 and mkqmem =    14, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    7 and mk1mem =    14, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 Symmetries : space group R3 (#146); Bravais hR (rhombohedral)

[2] ERROR: LOCAL:MPI:CALL_FAILED: error
[2] ERROR:    Null communicator.
[2] ERROR:    Error occurred at:
[2] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fffccbf7574)
[2] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[2] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[2] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[2] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[2] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[2] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[2] ERROR:       (/lib64/libc-2.5.so)
[2] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)

[3] ERROR: LOCAL:MPI:CALL_FAILED: error
[3] ERROR:    Null communicator.
[3] ERROR:    Error occurred at:
[3] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fffa2d35c74)
[3] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[3] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[3] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[3] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[3] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[3] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[3] ERROR:       (/lib64/libc-2.5.so)
[3] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)

[4] ERROR: LOCAL:MPI:CALL_FAILED: error
[4] ERROR:    Null communicator.
[4] ERROR:    Error occurred at:
[4] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fff7a1111f4)
[4] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[4] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[4] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[4] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[4] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[4] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[4] ERROR:       (/lib64/libc-2.5.so)
[4] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)

[5] ERROR: LOCAL:MPI:CALL_FAILED: error
[5] ERROR:    Null communicator.
[5] ERROR:    Error occurred at:
[5] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fffd2c82d74)
[5] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[5] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[5] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[5] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[5] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[5] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[5] ERROR:       (/lib64/libc-2.5.so)
[5] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[2] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting

[6] ERROR: LOCAL:MPI:CALL_FAILED: error
[6] ERROR:    Null communicator.
[6] ERROR:    Error occurred at:
[6] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fff127c9cf4)
[6] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[6] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[6] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[6] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[6] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[6] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[6] ERROR:       (/lib64/libc-2.5.so)
[6] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)

[7] ERROR: LOCAL:MPI:CALL_FAILED: error
[7] ERROR:    Null communicator.
[7] ERROR:    Error occurred at:
[7] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fffff74a5f4)
[7] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[7] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[7] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[7] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[7] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[7] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[7] ERROR:       (/lib64/libc-2.5.so)
[7] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[3] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting

[8] ERROR: LOCAL:MPI:CALL_FAILED: error
[8] ERROR:    Null communicator.
[8] ERROR:    Error occurred at:
[8] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fff154e40f4)
[8] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[8] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[8] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[8] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[8] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[8] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[8] ERROR:       (/lib64/libc-2.5.so)
[8] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[4] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting

[9] ERROR: LOCAL:MPI:CALL_FAILED: error
[9] ERROR:    Null communicator.
[9] ERROR:    Error occurred at:
[9] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fff6de65a74)
[9] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[9] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[9] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[9] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[9] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[9] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[9] ERROR:       (/lib64/libc-2.5.so)
[9] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)

[10] ERROR: LOCAL:MPI:CALL_FAILED: error
[10] ERROR:    Null communicator.
[10] ERROR:    Error occurred at:
[10] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fffe59795f4)
[10] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[10] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[10] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[10] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[10] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[10] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[10] ERROR:       (/lib64/libc-2.5.so)
[10] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
  inkpts : enter
[5] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting
 getkgrid : length of smallest supercell vector (bohr)=    1.225941E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
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

[11] ERROR: LOCAL:MPI:CALL_FAILED: error
[11] ERROR:    Null communicator.
[11] ERROR:    Error occurred at:
[11] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fffc5f088f4)
[11] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[11] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[11] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[11] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[11] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[11] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[11] ERROR:       (/lib64/libc-2.5.so)
[11] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[6] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting

[12] ERROR: LOCAL:MPI:CALL_FAILED: error
[12] ERROR:    Null communicator.
[12] ERROR:    Error occurred at:
[12] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fffb8133074)
[12] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[12] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[12] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[12] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[12] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[12] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[12] ERROR:       (/lib64/libc-2.5.so)
[12] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)

[13] ERROR: LOCAL:MPI:CALL_FAILED: error
[13] ERROR:    Null communicator.
[13] ERROR:    Error occurred at:
[13] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fff361e56f4)
[13] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[13] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[13] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[13] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[13] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[13] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[13] ERROR:       (/lib64/libc-2.5.so)
[13] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[7] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting

[14] ERROR: LOCAL:MPI:CALL_FAILED: error
[14] ERROR:    Null communicator.
[14] ERROR:    Error occurred at:
[14] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fffed707cf4)
[14] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[14] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[14] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[14] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[14] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[14] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[14] ERROR:       (/lib64/libc-2.5.so)
[14] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[8] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting

[15] ERROR: LOCAL:MPI:CALL_FAILED: error
[15] ERROR:    Null communicator.
[15] ERROR:    Error occurred at:
[15] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fff143139f4)
[15] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[15] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[15] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[15] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[15] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[15] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[15] ERROR:       (/lib64/libc-2.5.so)
[15] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)

[16] ERROR: LOCAL:MPI:CALL_FAILED: error
[16] ERROR:    Null communicator.
[16] ERROR:    Error occurred at:
[16] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fffc9c0eaf4)
[16] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[16] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[16] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[16] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[16] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[16] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[16] ERROR:       (/lib64/libc-2.5.so)
[16] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[9] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting

[17] ERROR: LOCAL:MPI:CALL_FAILED: error
[17] ERROR:    Null communicator.
[17] ERROR:    Error occurred at:
[17] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fff2319f0f4)
[17] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[17] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[17] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[17] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[17] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[17] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[17] ERROR:       (/lib64/libc-2.5.so)
[17] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[10] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting

[18] ERROR: LOCAL:MPI:CALL_FAILED: error
[18] ERROR:    Null communicator.
[18] ERROR:    Error occurred at:
[18] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fff80f780f4)
[18] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[18] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[18] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[18] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[18] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[18] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[18] ERROR:       (/lib64/libc-2.5.so)
[18] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[11] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting

[19] ERROR: LOCAL:MPI:CALL_FAILED: error
[19] ERROR:    Null communicator.
[19] ERROR:    Error occurred at:
[19] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fff81d5f5f4)
[19] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[19] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[19] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[19] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[19] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[19] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[19] ERROR:       (/lib64/libc-2.5.so)
[19] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)

[20] ERROR: LOCAL:MPI:CALL_FAILED: error
[20] ERROR:    Null communicator.
[20] ERROR:    Error occurred at:
[20] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fff5386bc74)
[20] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[20] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[20] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[20] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[20] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[20] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[20] ERROR:       (/lib64/libc-2.5.so)
[20] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[12] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting

[21] ERROR: LOCAL:MPI:CALL_FAILED: error
[21] ERROR:    Null communicator.
[21] ERROR:    Error occurred at:
[21] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fffeb7e9674)
[21] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[21] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[21] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[21] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[21] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[21] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[21] ERROR:       (/lib64/libc-2.5.so)
[21] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[13] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting

[22] ERROR: LOCAL:MPI:CALL_FAILED: error
[22] ERROR:    Null communicator.
[22] ERROR:    Error occurred at:
[22] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fff935e0e74)
[22] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[22] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[22] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[22] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[22] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[22] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[22] ERROR:       (/lib64/libc-2.5.so)
[22] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)

[23] ERROR: LOCAL:MPI:CALL_FAILED: error
[23] ERROR:    Null communicator.
[23] ERROR:    Error occurred at:
[23] ERROR:       mpi_comm_rank_(comm=MPI_COMM_NULL, *rank=0x29319b8, *ierr=0x7fff83fabb74)
[23] ERROR:       initmpi_grid_ (/home/x/programas/abinit/abinit-6.12.3b/src/51_manage_mpi/initmpi_grid.F90:178)
[23] ERROR:       invars1_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1.F90:1015)
[23] ERROR:       invars1m_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/invars1m.F90:186)
[23] ERROR:       m_ab6_invars_mp_ab6_invars_load_ (/home/x/programas/abinit/abinit-6.12.3b/src/57_iovars/m_ab6_invars_f90.F90:548)
[23] ERROR:       MAIN__ (/home/x/programas/abinit/abinit-6.12.3b/src/98_main/abinit.F90:260)
[23] ERROR:       main (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[23] ERROR:       (/lib64/libc-2.5.so)
[23] ERROR:       (/home/x/programas/abinit/abinit-6.12.3b/bin/abinit)
[14] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting
[15] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting
[16] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting
[17] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting
[18] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting
[19] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting
[20] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting
[21] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting
[22] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting
[23] INFO: 1 error, limit CHECK-MAX-ERRORS reached => aborting
[0] WARNING: starting premature shutdown

[0] INFO: LOCAL:MPI:CALL_FAILED: found 22 times (22 errors + 0 warnings), 0 reports were suppressed
[0] INFO: Found 22 problems (22 errors + 0 warnings), 0 reports were suppressed.

[proxy:0:0@compute-0-3.local] got crush from 6, 0
[proxy:0:1@compute-0-4.local] got crush from 4, 0
[proxy:0:1@compute-0-4.local] got crush from 5, 0
[proxy:0:0@compute-0-3.local] got crush from 9, 0
[proxy:0:0@compute-0-3.local] got crush from 35, 0
[proxy:0:1@compute-0-4.local] got crush from 31, 0
[proxy:0:1@compute-0-4.local] got crush from 34, 0
[proxy:0:0@compute-0-3.local] got crush from 17, 0
[proxy:0:1@compute-0-4.local] got crush from 10, 0
[proxy:0:1@compute-0-4.local] got crush from 28, 0
[proxy:0:0@compute-0-3.local] got crush from 29, 0
[proxy:0:1@compute-0-4.local] got crush from 16, 0
[proxy:0:0@compute-0-3.local] got crush from 23, 0
[proxy:0:1@compute-0-4.local] got crush from 25, 0
[proxy:0:0@compute-0-3.local] got crush from 20, 0
[proxy:0:0@compute-0-3.local] got crush from 26, 0
[proxy:0:1@compute-0-4.local] got crush from 7, 0
[proxy:0:1@compute-0-4.local] got crush from 19, 0
[proxy:0:0@compute-0-3.local] got crush from 38, 0
[proxy:0:0@compute-0-3.local] got crush from 32, 0
[proxy:0:0@compute-0-3.local] got crush from 41, 0
[proxy:0:0@compute-0-3.local] got crush from 10, 0
[proxy:0:1@compute-0-4.local] got crush from 22, 0
[proxy:0:1@compute-0-4.local] got crush from 13, 0
APPLICATION TERMINATED WITH THE EXIT STRING: Hangup (signal 1)
