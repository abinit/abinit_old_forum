host: compute-0-3
host: compute-0-5

==================================================================================================
mpiexec options:
----------------
  Base path: /opt/intel/impi/4.1.0.024/intel64/bin/
  Launcher: ssh
  Debug level: 1
  Enable X: -1

  Global environment:
  -------------------
    I_MPI_PERHOST=allcores
    LD_LIBRARY_PATH=/opt/intel/itac/8.0.3.007/itac/slib_impi4:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/impi/4.1.0.024/intel64/lib:/opt/intel/impi/4.1.0.024/intel64/lib:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/mic/coi/host-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/composer_xe_2013.0.079/mpirt/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/../compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/tbb/lib/intel64:/opt/gridengine/lib/lx26-amd64:/opt/intel/impi/4.1.0.024/intel64/lib:/opt/intel/impi/4.1.0.024/intel64/lib:/opt/intel/impi/4.1.0.024/mic/lib
    SET_HOST_TYPE= -x 
    MKLROOT=/opt/intel/composer_xe_2013.0.079/mkl
    MANPATH=/opt/intel/itac/8.0.3.007/man:/opt/intel/composer_xe_2013.0.079/man/en_US:/opt/intel/impi/4.1.0.024/man:/opt/intel/composer_xe_2013.0.079/man/en_US:/opt/intel/composer_xe_2013.0.079/man/en_US:/opt/intel/impi/4.1.0.024/man:/usr/kerberos/man:/usr/java/latest/man:/usr/local/share/man:/usr/share/man/en:/usr/share/man:/opt/ganglia/man:/opt/rocks/man:/opt/condor/man:/opt/tripwire/man:/opt/openmpi/share/man:/opt/sun-ct/man:/opt/gridengine/man::/opt/intel/vtune_amplifier_xe_2013/man
    PDSHROOT=/opt/pdsh
    SELINUX_INIT=YES
    CONSOLE=/dev/console
    VT_MPI=impi4
    HOSTNAME=compute-0-3.local
    SGE_INFOTEXT_MAX_COLUMN=5000
    INTEL_LICENSE_FILE=/opt/intel/licenses:/opt/intel/composer_xe_2013.0.079/licenses:/opt/intel/licenses:/home/ivasan/intel/licenses
    IPPROOT=/opt/intel/composer_xe_2013.0.079/ipp
    SGE_TASK_STEPSIZE=undefined
    TERM=vt100
    SHELL=/bin/bash
    ECLIPSE_HOME=/opt/eclipse
    HISTSIZE=1000
    NHOSTS=2
    CONDOR_IDS=407.407
    SSH_CLIENT=157.88.111.46 1176 22
    TMPDIR=/tmp/653.1.all.q
    SGE_O_WORKDIR=/datos/ivasan/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test
    LIBRARY_PATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/../compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/tbb/lib/intel64
    SGE_O_HOME=/home/ivasan
    SGE_CELL=default
    SGE_ARCH=lx26-amd64
    MPICH_PROCESS_GROUP=no
    MIC_LD_LIBRARY_PATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/composer_xe_2013.0.079/mkl/lib/mic:/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/mic/coi/device-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/composer_xe_2013.0.079/mkl/lib/mic:/opt/intel/composer_xe_2013.0.079/tbb/lib/mic
    ROCKSROOT=/opt/rocks/share/devel
    SSH_TTY=/dev/pts/2
    RESTARTED=0
    ANT_HOME=/opt/rocks
    ARC=lx26-amd64
    USER=ivasan
    LS_COLORS=no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:bd=40;33;01:cd=40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=01;32:*.cmd=01;32:*.exe=01;32:*.com=01;32:*.btm=01;32:*.bat=01;32:*.sh=01;32:*.csh=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.gz=01;31:*.bz2=01;31:*.bz=01;31:*.tz=01;31:*.rpm=01;31:*.cpio=01;31:*.jpg=01;35:*.gif=01;35:*.bmp=01;35:*.xbm=01;35:*.xpm=01;35:*.png=01;35:*.tif=01;35:
    INIT_VERSION=sysvinit-2.86
    SGE_TASK_LAST=undefined
    ROCKS_ROOT=/opt/rocks
    QUEUE=all.q
    CPATH=/opt/intel/composer_xe_2013.0.079/mkl/include:/opt/intel/composer_xe_2013.0.079/mkl/include:/opt/intel/composer_xe_2013.0.079/tbb/include
    SGE_TASK_ID=undefined
    NLSPATH=/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/debugger/intel64/locale/%l_%t/%N
    PATH=/tmp/653.1.all.q:/opt/intel/vtune_amplifier_xe_2013/bin64:/opt/intel/itac/8.0.3.007/bin:/opt/intel/impi/4.1.0.024/intel64/bin:/opt/intel/impi/4.1.0.024/intel64/bin:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64_mic:/opt/intel/composer_xe_2013.0.079/debugger/gui/intel64:/opt/intel/impi/4.1.0.024/intel64/bin:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/bin:/bin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/pdsh/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/condor/bin:/opt/condor/sbin:/opt/gridengine/bin/lx26-amd64:/usr/sbin:/home/ivasan/bin:/home/ivasan/binvasp
    VT_ADD_LIBS=-ldwarf -lelf -lvtunwind -lnsl -lm -ldl -lpthread
    MAVEN_HOME=/opt/maven
    MAIL=/var/spool/mail/ivasan
    SGE_BINARY_PATH=/opt/gridengine/bin/lx26-amd64
    RUNLEVEL=3
    TBBROOT=/opt/intel/composer_xe_2013.0.079/tbb
    CONDOR_CONFIG=/opt/condor/etc/condor_config
    SGE_STDERR_PATH=/home/ivasan/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test/atest.o653
    PWD=/home/ivasan/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test
    INPUTRC=/etc/inputrc
    JAVA_HOME=/usr/java/latest
    SGE_EXECD_PORT=537
    SGE_ACCOUNT=sge
    SGE_STDOUT_PATH=/home/ivasan/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test/atest.o653
    LANG=en_US.iso885915
    SGE_QMASTER_PORT=536
    JOB_NAME=atest
    JOB_SCRIPT=/opt/gridengine/default/spool/compute-0-3/job_scripts/653
    SGE_ROOT=/opt/gridengine
    SGE_NOMSG=1
    VT_LIB_DIR=/opt/intel/itac/8.0.3.007/itac/lib_impi4
    CONDOR_ROOT=/opt/condor
    PREVLEVEL=N
    VT_ROOT=/opt/intel/itac/8.0.3.007
    REQNAME=atest
    VTUNE_AMPLIFIER_XE_2013_DIR=/opt/intel/vtune_amplifier_xe_2013
    SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass
    ENVIRONMENT=BATCH
    SGE_JOB_SPOOL_DIR=/opt/gridengine/default/spool/compute-0-3/active_jobs/653.1
    PE_HOSTFILE=/opt/gridengine/default/spool/compute-0-3/active_jobs/653.1/pe_hostfile
    HOME=/home/ivasan
    SHLVL=3
    NQUEUES=2
    SGE_CWD_PATH=/datos/ivasan/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test
    SGE_O_LOGNAME=ivasan
    ROLLSROOT=/opt/rocks/share/devel/src/roll
    VT_SLIB_DIR=/opt/intel/itac/8.0.3.007/itac/slib_impi4
    SGE_O_MAIL=/var/spool/mail/ivasan
    LOGNAME=ivasan
    JOB_ID=653
    TMP=/tmp/653.1.all.q
    CVS_RSH=ssh
    CLASSPATH=/opt/intel/itac/8.0.3.007/itac/lib_impi4
    SSH_CONNECTION=157.88.111.46 1176 157.88.111.174 22
    PE=impi
    I_MPI_HYDRA_BOOTSTRAP=sge
    SGE_TASK_FIRST=undefined
    LESSOPEN=|/usr/bin/lesspipe.sh %s
    SGE_O_PATH=/opt/intel/vtune_amplifier_xe_2013/bin64:/opt/intel/itac/8.0.3.007/bin:/opt/intel/impi/4.1.0.024/intel64/bin:/opt/intel/impi/4.1.0.024/intel64/bin:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64_mic:/opt/intel/composer_xe_2013.0.079/debugger/gui/intel64:/opt/intel/impi/4.1.0.024/intel64/bin:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/bin:/bin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/pdsh/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/condor/bin:/opt/condor/sbin:/opt/gridengine/bin/lx26-amd64:/usr/sbin:/home/ivasan/bin:/home/ivasan/binvasp
    SGE_CLUSTER_NAME=gamma
    SGE_O_SHELL=/bin/bash
    SGE_O_HOST=gamma
    REQUEST=atest
    INCLUDE=/opt/intel/composer_xe_2013.0.079/mkl/include:/opt/intel/composer_xe_2013.0.079/mkl/include
    NSLOTS=12
    G_BROKEN_FILENAMES=1
    SGE_STDIN_PATH=/dev/null
    I_MPI_ROOT=/opt/intel/impi/4.1.0.024
    _=/opt/intel/impi/4.1.0.024/intel64/bin/mpiexec.hydra

  Hydra internal environment:
  ---------------------------
    MPICH_ENABLE_CKPOINT=1
    GFORTRAN_UNBUFFERED_PRECONNECTED=y

  User set environment:
  ---------------------
    I_MPI_DEBUG=100


    Proxy information:
    *********************
      [1] proxy: compute-0-3 (6 cores)
      Exec list: abinit6.12.3stack (6 processes); 

      [2] proxy: compute-0-5 (6 cores)
      Exec list: abinit6.12.3stack (6 processes); 


==================================================================================================

[mpiexec@compute-0-3.local] Timeout set to -1 (-1 means infinite)
[mpiexec@compute-0-3.local] Got a control port string of compute-0-3:45347

Proxy launch args: /opt/intel/impi/4.1.0.024/intel64/bin/pmi_proxy --control-port compute-0-3:45347 --debug --pmi-connect lazy-cache --pmi-aggregate -s 0 --rmk sge --launcher ssh --demux poll --pgid 0 --enable-stdin 1 --retries 10 --proxy-id 

[mpiexec@compute-0-3.local] PMI FD: (null); PMI PORT: (null); PMI ID/RANK: -1
Arguments being passed to proxy 0:
--version 1.4.1p1 --iface-ip-env-name MPICH_INTERFACE_HOSTNAME --hostname compute-0-3 --global-core-map 0,6,6 --filler-process-map 0,6,6 --global-process-count 12 --auto-cleanup 1 --pmi-rank -1 --pmi-kvsname kvs_20295_0 --pmi-process-mapping (vector,(0,2,6)) --topolib ipl --ckpointlib blcr --ckpoint-prefix /tmp --ckpoint-preserve -1 --ckpoint off --ckpoint-num -1 --global-inherited-env 103 'I_MPI_PERHOST=allcores' 'LD_LIBRARY_PATH=/opt/intel/itac/8.0.3.007/itac/slib_impi4:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/impi/4.1.0.024/intel64/lib:/opt/intel/impi/4.1.0.024/intel64/lib:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/mic/coi/host-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/composer_xe_2013.0.079/mpirt/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/../compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/tbb/lib/intel64:/opt/gridengine/lib/lx26-amd64:/opt/intel/impi/4.1.0.024/intel64/lib:/opt/intel/impi/4.1.0.024/intel64/lib:/opt/intel/impi/4.1.0.024/mic/lib' 'SET_HOST_TYPE= -x ' 'MKLROOT=/opt/intel/composer_xe_2013.0.079/mkl' 'MANPATH=/opt/intel/itac/8.0.3.007/man:/opt/intel/composer_xe_2013.0.079/man/en_US:/opt/intel/impi/4.1.0.024/man:/opt/intel/composer_xe_2013.0.079/man/en_US:/opt/intel/composer_xe_2013.0.079/man/en_US:/opt/intel/impi/4.1.0.024/man:/usr/kerberos/man:/usr/java/latest/man:/usr/local/share/man:/usr/share/man/en:/usr/share/man:/opt/ganglia/man:/opt/rocks/man:/opt/condor/man:/opt/tripwire/man:/opt/openmpi/share/man:/opt/sun-ct/man:/opt/gridengine/man::/opt/intel/vtune_amplifier_xe_2013/man' 'PDSHROOT=/opt/pdsh' 'SELINUX_INIT=YES' 'CONSOLE=/dev/console' 'VT_MPI=impi4' 'HOSTNAME=compute-0-3.local' 'SGE_INFOTEXT_MAX_COLUMN=5000' 'INTEL_LICENSE_FILE=/opt/intel/licenses:/opt/intel/composer_xe_2013.0.079/licenses:/opt/intel/licenses:/home/ivasan/intel/licenses' 'IPPROOT=/opt/intel/composer_xe_2013.0.079/ipp' 'SGE_TASK_STEPSIZE=undefined' 'TERM=vt100' 'SHELL=/bin/bash' 'ECLIPSE_HOME=/opt/eclipse' 'HISTSIZE=1000' 'NHOSTS=2' 'CONDOR_IDS=407.407' 'SSH_CLIENT=157.88.111.46 1176 22' 'TMPDIR=/tmp/653.1.all.q' 'SGE_O_WORKDIR=/datos/ivasan/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test' 'LIBRARY_PATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/../compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/tbb/lib/intel64' 'SGE_O_HOME=/home/ivasan' 'SGE_CELL=default' 'SGE_ARCH=lx26-amd64' 'MPICH_PROCESS_GROUP=no' 'MIC_LD_LIBRARY_PATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/composer_xe_2013.0.079/mkl/lib/mic:/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/mic/coi/device-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/composer_xe_2013.0.079/mkl/lib/mic:/opt/intel/composer_xe_2013.0.079/tbb/lib/mic' 'ROCKSROOT=/opt/rocks/share/devel' 'SSH_TTY=/dev/pts/2' 'RESTARTED=0' 'ANT_HOME=/opt/rocks' 'ARC=lx26-amd64' 'USER=ivasan' 'LS_COLORS=no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:bd=40;33;01:cd=40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=01;32:*.cmd=01;32:*.exe=01;32:*.com=01;32:*.btm=01;32:*.bat=01;32:*.sh=01;32:*.csh=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.gz=01;31:*.bz2=01;31:*.bz=01;31:*.tz=01;31:*.rpm=01;31:*.cpio=01;31:*.jpg=01;35:*.gif=01;35:*.bmp=01;35:*.xbm=01;35:*.xpm=01;35:*.png=01;35:*.tif=01;35:' 'INIT_VERSION=sysvinit-2.86' 'SGE_TASK_LAST=undefined' 'ROCKS_ROOT=/opt/rocks' 'QUEUE=all.q' 'CPATH=/opt/intel/composer_xe_2013.0.079/mkl/include:/opt/intel/composer_xe_2013.0.079/mkl/include:/opt/intel/composer_xe_2013.0.079/tbb/include' 'SGE_TASK_ID=undefined' 'NLSPATH=/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/debugger/intel64/locale/%l_%t/%N' 'PATH=/tmp/653.1.all.q:/opt/intel/vtune_amplifier_xe_2013/bin64:/opt/intel/itac/8.0.3.007/bin:/opt/intel/impi/4.1.0.024/intel64/bin:/opt/intel/impi/4.1.0.024/intel64/bin:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64_mic:/opt/intel/composer_xe_2013.0.079/debugger/gui/intel64:/opt/intel/impi/4.1.0.024/intel64/bin:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/bin:/bin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/pdsh/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/condor/bin:/opt/condor/sbin:/opt/gridengine/bin/lx26-amd64:/usr/sbin:/home/ivasan/bin:/home/ivasan/binvasp' 'VT_ADD_LIBS=-ldwarf -lelf -lvtunwind -lnsl -lm -ldl -lpthread' 'MAVEN_HOME=/opt/maven' 'MAIL=/var/spool/mail/ivasan' 'SGE_BINARY_PATH=/opt/gridengine/bin/lx26-amd64' 'RUNLEVEL=3' 'TBBROOT=/opt/intel/composer_xe_2013.0.079/tbb' 'CONDOR_CONFIG=/opt/condor/etc/condor_config' 'SGE_STDERR_PATH=/home/ivasan/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test/atest.o653' 'PWD=/home/ivasan/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test' 'INPUTRC=/etc/inputrc' 'JAVA_HOME=/usr/java/latest' 'SGE_EXECD_PORT=537' 'SGE_ACCOUNT=sge' 'SGE_STDOUT_PATH=/home/ivasan/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test/atest.o653' 'LANG=en_US.iso885915' 'SGE_QMASTER_PORT=536' 'JOB_NAME=atest' 'JOB_SCRIPT=/opt/gridengine/default/spool/compute-0-3/job_scripts/653' 'SGE_ROOT=/opt/gridengine' 'SGE_NOMSG=1' 'VT_LIB_DIR=/opt/intel/itac/8.0.3.007/itac/lib_impi4' 'CONDOR_ROOT=/opt/condor' 'PREVLEVEL=N' 'VT_ROOT=/opt/intel/itac/8.0.3.007' 'REQNAME=atest' 'VTUNE_AMPLIFIER_XE_2013_DIR=/opt/intel/vtune_amplifier_xe_2013' 'SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass' 'ENVIRONMENT=BATCH' 'SGE_JOB_SPOOL_DIR=/opt/gridengine/default/spool/compute-0-3/active_jobs/653.1' 'PE_HOSTFILE=/opt/gridengine/default/spool/compute-0-3/active_jobs/653.1/pe_hostfile' 'HOME=/home/ivasan' 'SHLVL=3' 'NQUEUES=2' 'SGE_CWD_PATH=/datos/ivasan/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test' 'SGE_O_LOGNAME=ivasan' 'ROLLSROOT=/opt/rocks/share/devel/src/roll' 'VT_SLIB_DIR=/opt/intel/itac/8.0.3.007/itac/slib_impi4' 'SGE_O_MAIL=/var/spool/mail/ivasan' 'LOGNAME=ivasan' 'JOB_ID=653' 'TMP=/tmp/653.1.all.q' 'CVS_RSH=ssh' 'CLASSPATH=/opt/intel/itac/8.0.3.007/itac/lib_impi4' 'SSH_CONNECTION=157.88.111.46 1176 157.88.111.174 22' 'PE=impi' 'I_MPI_HYDRA_BOOTSTRAP=sge' 'SGE_TASK_FIRST=undefined' 'LESSOPEN=|/usr/bin/lesspipe.sh %s' 'SGE_O_PATH=/opt/intel/vtune_amplifier_xe_2013/bin64:/opt/intel/itac/8.0.3.007/bin:/opt/intel/impi/4.1.0.024/intel64/bin:/opt/intel/impi/4.1.0.024/intel64/bin:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64_mic:/opt/intel/composer_xe_2013.0.079/debugger/gui/intel64:/opt/intel/impi/4.1.0.024/intel64/bin:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/bin:/bin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/pdsh/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/condor/bin:/opt/condor/sbin:/opt/gridengine/bin/lx26-amd64:/usr/sbin:/home/ivasan/bin:/home/ivasan/binvasp' 'SGE_CLUSTER_NAME=gamma' 'SGE_O_SHELL=/bin/bash' 'SGE_O_HOST=gamma' 'REQUEST=atest' 'INCLUDE=/opt/intel/composer_xe_2013.0.079/mkl/include:/opt/intel/composer_xe_2013.0.079/mkl/include' 'NSLOTS=12' 'G_BROKEN_FILENAMES=1' 'SGE_STDIN_PATH=/dev/null' 'I_MPI_ROOT=/opt/intel/impi/4.1.0.024' '_=/opt/intel/impi/4.1.0.024/intel64/bin/mpiexec.hydra' --global-user-env 1 'I_MPI_DEBUG=100' --global-system-env 2 'MPICH_ENABLE_CKPOINT=1' 'GFORTRAN_UNBUFFERED_PRECONNECTED=y' --proxy-core-count 6 --exec --exec-appnum 0 --exec-proc-count 6 --exec-local-env 0 --exec-wdir /home/ivasan/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test --exec-args 1 abinit6.12.3stack 

[mpiexec@compute-0-3.local] PMI FD: (null); PMI PORT: (null); PMI ID/RANK: -1
Arguments being passed to proxy 1:
--version 1.4.1p1 --iface-ip-env-name MPICH_INTERFACE_HOSTNAME --hostname compute-0-5 --global-core-map 6,6,0 --filler-process-map 6,6,0 --global-process-count 12 --auto-cleanup 1 --pmi-rank -1 --pmi-kvsname kvs_20295_0 --pmi-process-mapping (vector,(0,2,6)) --topolib ipl --ckpointlib blcr --ckpoint-prefix /tmp --ckpoint-preserve -1 --ckpoint off --ckpoint-num -1 --global-inherited-env 103 'I_MPI_PERHOST=allcores' 'LD_LIBRARY_PATH=/opt/intel/itac/8.0.3.007/itac/slib_impi4:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/impi/4.1.0.024/intel64/lib:/opt/intel/impi/4.1.0.024/intel64/lib:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/mic/coi/host-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/composer_xe_2013.0.079/mpirt/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/../compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/tbb/lib/intel64:/opt/gridengine/lib/lx26-amd64:/opt/intel/impi/4.1.0.024/intel64/lib:/opt/intel/impi/4.1.0.024/intel64/lib:/opt/intel/impi/4.1.0.024/mic/lib' 'SET_HOST_TYPE= -x ' 'MKLROOT=/opt/intel/composer_xe_2013.0.079/mkl' 'MANPATH=/opt/intel/itac/8.0.3.007/man:/opt/intel/composer_xe_2013.0.079/man/en_US:/opt/intel/impi/4.1.0.024/man:/opt/intel/composer_xe_2013.0.079/man/en_US:/opt/intel/composer_xe_2013.0.079/man/en_US:/opt/intel/impi/4.1.0.024/man:/usr/kerberos/man:/usr/java/latest/man:/usr/local/share/man:/usr/share/man/en:/usr/share/man:/opt/ganglia/man:/opt/rocks/man:/opt/condor/man:/opt/tripwire/man:/opt/openmpi/share/man:/opt/sun-ct/man:/opt/gridengine/man::/opt/intel/vtune_amplifier_xe_2013/man' 'PDSHROOT=/opt/pdsh' 'SELINUX_INIT=YES' 'CONSOLE=/dev/console' 'VT_MPI=impi4' 'HOSTNAME=compute-0-3.local' 'SGE_INFOTEXT_MAX_COLUMN=5000' 'INTEL_LICENSE_FILE=/opt/intel/licenses:/opt/intel/composer_xe_2013.0.079/licenses:/opt/intel/licenses:/home/ivasan/intel/licenses' 'IPPROOT=/opt/intel/composer_xe_2013.0.079/ipp' 'SGE_TASK_STEPSIZE=undefined' 'TERM=vt100' 'SHELL=/bin/bash' 'ECLIPSE_HOME=/opt/eclipse' 'HISTSIZE=1000' 'NHOSTS=2' 'CONDOR_IDS=407.407' 'SSH_CLIENT=157.88.111.46 1176 22' 'TMPDIR=/tmp/653.1.all.q' 'SGE_O_WORKDIR=/datos/ivasan/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test' 'LIBRARY_PATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/../compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64:/opt/intel/composer_xe_2013.0.079/tbb/lib/intel64' 'SGE_O_HOME=/home/ivasan' 'SGE_CELL=default' 'SGE_ARCH=lx26-amd64' 'MPICH_PROCESS_GROUP=no' 'MIC_LD_LIBRARY_PATH=/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/composer_xe_2013.0.079/mkl/lib/mic:/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/mic/coi/device-linux-release/lib:/opt/intel/mic/myo/lib:/opt/intel/composer_xe_2013.0.079/compiler/lib/mic:/opt/intel/composer_xe_2013.0.079/mkl/lib/mic:/opt/intel/composer_xe_2013.0.079/tbb/lib/mic' 'ROCKSROOT=/opt/rocks/share/devel' 'SSH_TTY=/dev/pts/2' 'RESTARTED=0' 'ANT_HOME=/opt/rocks' 'ARC=lx26-amd64' 'USER=ivasan' 'LS_COLORS=no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:bd=40;33;01:cd=40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=01;32:*.cmd=01;32:*.exe=01;32:*.com=01;32:*.btm=01;32:*.bat=01;32:*.sh=01;32:*.csh=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.gz=01;31:*.bz2=01;31:*.bz=01;31:*.tz=01;31:*.rpm=01;31:*.cpio=01;31:*.jpg=01;35:*.gif=01;35:*.bmp=01;35:*.xbm=01;35:*.xpm=01;35:*.png=01;35:*.tif=01;35:' 'INIT_VERSION=sysvinit-2.86' 'SGE_TASK_LAST=undefined' 'ROCKS_ROOT=/opt/rocks' 'QUEUE=all.q' 'CPATH=/opt/intel/composer_xe_2013.0.079/mkl/include:/opt/intel/composer_xe_2013.0.079/mkl/include:/opt/intel/composer_xe_2013.0.079/tbb/include' 'SGE_TASK_ID=undefined' 'NLSPATH=/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/compiler/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/ipp/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/mkl/lib/intel64/locale/%l_%t/%N:/opt/intel/composer_xe_2013.0.079/debugger/intel64/locale/%l_%t/%N' 'PATH=/tmp/653.1.all.q:/opt/intel/vtune_amplifier_xe_2013/bin64:/opt/intel/itac/8.0.3.007/bin:/opt/intel/impi/4.1.0.024/intel64/bin:/opt/intel/impi/4.1.0.024/intel64/bin:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64_mic:/opt/intel/composer_xe_2013.0.079/debugger/gui/intel64:/opt/intel/impi/4.1.0.024/intel64/bin:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/bin:/bin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/pdsh/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/condor/bin:/opt/condor/sbin:/opt/gridengine/bin/lx26-amd64:/usr/sbin:/home/ivasan/bin:/home/ivasan/binvasp' 'VT_ADD_LIBS=-ldwarf -lelf -lvtunwind -lnsl -lm -ldl -lpthread' 'MAVEN_HOME=/opt/maven' 'MAIL=/var/spool/mail/ivasan' 'SGE_BINARY_PATH=/opt/gridengine/bin/lx26-amd64' 'RUNLEVEL=3' 'TBBROOT=/opt/intel/composer_xe_2013.0.079/tbb' 'CONDOR_CONFIG=/opt/condor/etc/condor_config' 'SGE_STDERR_PATH=/home/ivasan/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test/atest.o653' 'PWD=/home/ivasan/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test' 'INPUTRC=/etc/inputrc' 'JAVA_HOME=/usr/java/latest' 'SGE_EXECD_PORT=537' 'SGE_ACCOUNT=sge' 'SGE_STDOUT_PATH=/home/ivasan/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test/atest.o653' 'LANG=en_US.iso885915' 'SGE_QMASTER_PORT=536' 'JOB_NAME=atest' 'JOB_SCRIPT=/opt/gridengine/default/spool/compute-0-3/job_scripts/653' 'SGE_ROOT=/opt/gridengine' 'SGE_NOMSG=1' 'VT_LIB_DIR=/opt/intel/itac/8.0.3.007/itac/lib_impi4' 'CONDOR_ROOT=/opt/condor' 'PREVLEVEL=N' 'VT_ROOT=/opt/intel/itac/8.0.3.007' 'REQNAME=atest' 'VTUNE_AMPLIFIER_XE_2013_DIR=/opt/intel/vtune_amplifier_xe_2013' 'SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass' 'ENVIRONMENT=BATCH' 'SGE_JOB_SPOOL_DIR=/opt/gridengine/default/spool/compute-0-3/active_jobs/653.1' 'PE_HOSTFILE=/opt/gridengine/default/spool/compute-0-3/active_jobs/653.1/pe_hostfile' 'HOME=/home/ivasan' 'SHLVL=3' 'NQUEUES=2' 'SGE_CWD_PATH=/datos/ivasan/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test' 'SGE_O_LOGNAME=ivasan' 'ROLLSROOT=/opt/rocks/share/devel/src/roll' 'VT_SLIB_DIR=/opt/intel/itac/8.0.3.007/itac/slib_impi4' 'SGE_O_MAIL=/var/spool/mail/ivasan' 'LOGNAME=ivasan' 'JOB_ID=653' 'TMP=/tmp/653.1.all.q' 'CVS_RSH=ssh' 'CLASSPATH=/opt/intel/itac/8.0.3.007/itac/lib_impi4' 'SSH_CONNECTION=157.88.111.46 1176 157.88.111.174 22' 'PE=impi' 'I_MPI_HYDRA_BOOTSTRAP=sge' 'SGE_TASK_FIRST=undefined' 'LESSOPEN=|/usr/bin/lesspipe.sh %s' 'SGE_O_PATH=/opt/intel/vtune_amplifier_xe_2013/bin64:/opt/intel/itac/8.0.3.007/bin:/opt/intel/impi/4.1.0.024/intel64/bin:/opt/intel/impi/4.1.0.024/intel64/bin:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64:/opt/intel/composer_xe_2013.0.079/bin/intel64_mic:/opt/intel/composer_xe_2013.0.079/debugger/gui/intel64:/opt/intel/impi/4.1.0.024/intel64/bin:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/bin:/bin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maven/bin:/opt/pdsh/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/condor/bin:/opt/condor/sbin:/opt/gridengine/bin/lx26-amd64:/usr/sbin:/home/ivasan/bin:/home/ivasan/binvasp' 'SGE_CLUSTER_NAME=gamma' 'SGE_O_SHELL=/bin/bash' 'SGE_O_HOST=gamma' 'REQUEST=atest' 'INCLUDE=/opt/intel/composer_xe_2013.0.079/mkl/include:/opt/intel/composer_xe_2013.0.079/mkl/include' 'NSLOTS=12' 'G_BROKEN_FILENAMES=1' 'SGE_STDIN_PATH=/dev/null' 'I_MPI_ROOT=/opt/intel/impi/4.1.0.024' '_=/opt/intel/impi/4.1.0.024/intel64/bin/mpiexec.hydra' --global-user-env 1 'I_MPI_DEBUG=100' --global-system-env 2 'MPICH_ENABLE_CKPOINT=1' 'GFORTRAN_UNBUFFERED_PRECONNECTED=y' --proxy-core-count 6 --exec --exec-appnum 0 --exec-proc-count 6 --exec-local-env 0 --exec-wdir /home/ivasan/datos/Fotoluminiscencia/00-Abinit-Conv-Ecut/LDA-ab/15Ha/test --exec-args 1 abinit6.12.3stack 

[mpiexec@compute-0-3.local] Launch arguments: /opt/intel/impi/4.1.0.024/intel64/bin/pmi_proxy --control-port compute-0-3:45347 --debug --pmi-connect lazy-cache --pmi-aggregate -s 0 --rmk sge --launcher ssh --demux poll --pgid 0 --enable-stdin 1 --retries 10 --proxy-id 0 
[mpiexec@compute-0-3.local] Launch arguments: /usr/bin/ssh -x -q compute-0-5 /opt/intel/impi/4.1.0.024/intel64/bin/pmi_proxy --control-port compute-0-3:45347 --debug --pmi-connect lazy-cache --pmi-aggregate -s 0 --rmk sge --launcher ssh --demux poll --pgid 0 --enable-stdin 1 --retries 10 --proxy-id 1 
[mpiexec@compute-0-3.local] STDIN will be redirected to 1 fd(s): 9 
[proxy:0:0@compute-0-3.local] Start PMI_proxy 0
[proxy:0:0@compute-0-3.local] STDIN will be redirected to 1 fd(s): 15 
[proxy:0:0@compute-0-3.local] got pmi command (from 10): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 12): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 14): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 19): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 22): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 25): init
pmi_version=1 pmi_subversion=1 
[proxy:0:0@compute-0-3.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 12): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 10): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 14): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 25): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 12): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 19): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 14): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 25): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 22): get_maxes

[proxy:0:0@compute-0-3.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:0@compute-0-3.local] got pmi command (from 22): barrier_in

[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[proxy:0:0@compute-0-3.local] forwarding command (cmd=barrier_in) upstream
[proxy:0:1@compute-0-5.local] Start PMI_proxy 1
[proxy:0:1@compute-0-5.local] got pmi command (from 6): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-5.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-5.local] got pmi command (from 7): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-5.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-5.local] got pmi command (from 9): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-5.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-5.local] got pmi command (from 15): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-5.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-5.local] got pmi command (from 18): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-5.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-5.local] got pmi command (from 6): get_maxes

[proxy:0:1@compute-0-5.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-5.local] got pmi command (from 7): get_maxes

[proxy:0:1@compute-0-5.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-5.local] got pmi command (from 9): get_maxes

[proxy:0:1@compute-0-5.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-5.local] got pmi command (from 15): get_maxes

[proxy:0:1@compute-0-5.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-5.local] got pmi command (from 6): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 7): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 9): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 18): get_maxes

[proxy:0:1@compute-0-5.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-5.local] got pmi command (from 15): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 18): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 12): init
pmi_version=1 pmi_subversion=1 
[proxy:0:1@compute-0-5.local] PMI response: cmd=response_to_init pmi_version=1 pmi_subversion=1 rc=0
[proxy:0:1@compute-0-5.local] got pmi command (from 12): get_maxes

[proxy:0:1@compute-0-5.local] PMI response: cmd=maxes kvsname_max=256 keylen_max=64 vallen_max=1024
[proxy:0:1@compute-0-5.local] [mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 12: cmd=barrier_out
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 12: cmd=barrier_out
got pmi command (from 12): barrier_in

[proxy:0:1@compute-0-5.local] forwarding command (cmd=barrier_in) upstream
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 60 2
11 compute-0-3 0,1,2,3,4,5, 11 compute-0-5 6,7,8,9,10,11, 
[proxy:0:0@compute-0-3.local] got pmi command (from 12): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 60 2
11 compute-0-3 0,1,2,3,4,5, 11 compute-0-5 6,7,8,9,10,11, 
[proxy:0:0@compute-0-3.local] got pmi command (from 14): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 60 2
11 compute-0-3 0,1,2,3,4,5, 11 compute-0-5 6,7,8,9,10,11, 
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get_ranks2hosts

[proxy:0:0@compute-0-3.local] [proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] got pmi command (from 6): get_ranks2hosts

[proxy:0:1@compute-0-5.local] PMI response: put_ranks2hosts 60 2
11 compute-0-3 0,1,2,3,4,5, 11 compute-0-5 6,7,8,9,10,11, 
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 12): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
PMI response: put_ranks2hosts 60 2
11 compute-0-3 0,1,2,3,4,5, 11 compute-0-5 6,7,8,9,10,11, 
[proxy:0:0@compute-0-3.local] got pmi command (from 22): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 60 2
11 compute-0-3 0,1,2,3,4,5, 11 compute-0-5 6,7,8,9,10,11, 
[proxy:0:1@compute-0-5.local] got pmi command (from 7): get_ranks2hosts

[proxy:0:1@compute-0-5.local] PMI response: put_ranks2hosts 60 2
11 compute-0-3 0,1,2,3,4,5, 11 compute-0-5 6,7,8,9,10,11, 
[proxy:0:1@compute-0-5.local] got pmi command (from 9): get_ranks2hosts

[proxy:0:1@compute-0-5.local] PMI response: put_ranks2hosts 60 2
11 compute-0-3 0,1,2,3,4,5, 11 compute-0-5 6,7,8,9,10,11, 
[proxy:0:0@compute-0-3.local] got pmi command (from 25): get_ranks2hosts

[proxy:0:0@compute-0-3.local] PMI response: put_ranks2hosts 60 2
11 compute-0-3 0,1,2,3,4,5, 11 compute-0-5 6,7,8,9,10,11, 
[proxy:0:1@compute-0-5.local] got pmi command (from 12): get_ranks2hosts

[proxy:0:1@compute-0-5.local] PMI response: put_ranks2hosts 60 2
11 compute-0-3 0,1,2,3,4,5, 11 compute-0-5 6,7,8,9,10,11, 
[proxy:0:1@compute-0-5.local] got pmi command (from 15): get_ranks2hosts

[proxy:0:1@compute-0-5.local] PMI response: put_ranks2hosts 60 2
11 compute-0-3 0,1,2,3,4,5, 11 compute-0-5 6,7,8,9,10,11, 
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get_my_kvsname
[proxy:0:1@compute-0-5.local] got pmi command (from 6): get_appnum

[proxy:0:1@compute-0-5.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-5.local] got pmi command (from 7): get_appnum

[proxy:0:1@compute-0-5.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-5.local] got pmi command (from 9): get_appnum

[proxy:0:1@compute-0-5.local] PMI response: cmd=appnum appnum=0

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:0@compute-0-3.local] got pmi command (from 12): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:0@compute-0-3.local] got pmi command (from 14): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 22): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-5.local] got pmi command (from 18): get_ranks2hosts

[proxy:0:1@compute-0-5.local] PMI response: put_ranks2hosts 60 2
11 compute-0-3 0,1,2,3,4,5, 11 compute-0-5 6,7,8,9,10,11, 
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:0@compute-0-3.local] got pmi command (from 12): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:1@compute-0-5.local] got pmi command (from 6): get_my_kvsname

[proxy:0:1@compute-0-5.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:1@compute-0-5.local] got pmi command (from 7): get_my_kvsname

[proxy:0:1@compute-0-5.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:0@compute-0-3.local] got pmi command (from 14): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:0@compute-0-3.local] got pmi command (from 22): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:0@compute-0-3.local] got pmi command (from 25): get_appnum

[proxy:0:0@compute-0-3.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] got pmi command (from 12): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 14): get_my_kvsname

[proxy:0:1@compute-0-5.local] got pmi command (from 9): get_my_kvsname

[proxy:0:1@compute-0-5.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:1@compute-0-5.local] got pmi command (from 12): get_appnum

[proxy:0:1@compute-0-5.local] PMI response: cmd=appnum appnum=0
[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:0@compute-0-3.local] got pmi command (from 22): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:1@compute-0-5.local] got pmi command (from 15): get_appnum

[proxy:0:1@compute-0-5.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-5.local] got pmi command (from 6): get_my_kvsname

[proxy:0:1@compute-0-5.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:1@compute-0-5.local] got pmi command (from 7): get_my_kvsname

[proxy:0:1@compute-0-5.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:1@compute-0-5.local] got pmi command (from 9): get_my_kvsname

[proxy:0:1@compute-0-5.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=put kvsname=kvs_20295_0 key=sharedFilename[6] value=/dev/shm/Intel_MPI_pPjbqK
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 6: cmd=put_result rc=0 msg=success
[proxy:0:0@compute-0-3.local] got pmi command (from 10): put
kvsname=kvs_20295_0 key=sharedFilename[0] value=/dev/shm/Intel_MPI_MlG0U0 
[proxy:0:1@compute-0-5.local] got pmi command (from 18): get_appnum

[proxy:0:1@compute-0-5.local] PMI response: cmd=appnum appnum=0
[proxy:0:1@compute-0-5.local] got pmi command (from 6): put
kvsname=kvs_20295_0 key=sharedFilename[6] value=/dev/shm/Intel_MPI_pPjbqK 
[proxy:0:1@compute-0-5.local] forwarding command (cmd=put kvsname=kvs_20295_0 key=sharedFilename[6] value=/dev/shm/Intel_MPI_pPjbqK) upstream
[0] MPI startup(): Intel(R) MPI Library, Version 4.1.0  Build 20120822
[0] MPI startup(): Copyright (C) 2003-2012 Intel Corporation.  All rights reserved.
[proxy:0:0@compute-0-3.local] forwarding command (cmd=put kvsname=kvs_20295_0 key=sharedFilename[0] value=/dev/shm/Intel_MPI_MlG0U0) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=put kvsname=kvs_20295_0 key=sharedFilename[0] value=/dev/shm/Intel_MPI_MlG0U0
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 10: cmd=put_result rc=0 msg=success
[proxy:0:0@compute-0-3.local] got pmi command (from 19): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 22): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 25): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:1@compute-0-5.local] got pmi command (from 7): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 9): barrier_in

[proxy:0:0@compute-0-3.local] we don't understand the response put_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 25): get_my_kvsname

[proxy:0:0@compute-0-3.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:0@compute-0-3.local] got pmi command (from 10): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 12): get_my_kvsname

[proxy:0:1@compute-0-5.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:1@compute-0-5.local] got pmi command (from 15): get_my_kvsname

[proxy:0:1@compute-0-5.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:0@compute-0-3.local] got pmi command (from 14): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 18): get_my_kvsname

[proxy:0:1@compute-0-5.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:1@compute-0-5.local] we don't understand the response put_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 25): barrier_in

[proxy:0:0@compute-0-3.local] forwarding command (cmd=barrier_in) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[proxy:0:1@compute-0-5.local] got pmi command (from 12): get_my_kvsname

[proxy:0:1@compute-0-5.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:1@compute-0-5.local] got pmi command (from 15): get_my_kvsname

[proxy:0:1@compute-0-5.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:1@compute-0-5.local] got pmi command (from 6): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 18): get_my_kvsname

[proxy:0:1@compute-0-5.local] PMI response: cmd=my_kvsname kvsname=kvs_20295_0
[proxy:0:1@compute-0-5.local] got pmi command (from 12): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 18): barrier_in

[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 15: cmd=barrier_out
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 15: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] got pmi command (from 15): barrier_in

[proxy:0:1@compute-0-5.local] forwarding command (cmd=barrier_in) upstream
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] got pmi command (from 12): get
kvsname=kvs_20295_0 key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_MlG0U0
[proxy:0:0@compute-0-3.local] got pmi command (from 14): get
kvsname=kvs_20295_0 key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_MlG0U0
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
kvsname=kvs_20295_0 key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_MlG0U0
[proxy:0:0@compute-0-3.local] got pmi command (from 22): get
kvsname=kvs_20295_0 key=sharedFilename[0] [proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out

[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_MlG0U0
[proxy:0:0@compute-0-3.local] got pmi command (from 25): get
kvsname=kvs_20295_0 [proxy:0:1@compute-0-5.local] got pmi command (from 7): get
kvsname=kvs_20295_0 key=sharedFilename[6] 
[proxy:0:1@compute-0-5.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_pPjbqK
[proxy:0:1@compute-0-5.local] got pmi command (from 9): get
kvsname=kvs_20295_0 key=sharedFilename[0] 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_MlG0U0
key=sharedFilename[6] 
[proxy:0:1@compute-0-5.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_pPjbqK
[proxy:0:1@compute-0-5.local] got pmi command (from 12): get
kvsname=kvs_20295_0 key=sharedFilename[6] 
[proxy:0:1@compute-0-5.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_pPjbqK
[proxy:0:1@compute-0-5.local] got pmi command (from 15): get
kvsname=kvs_20295_0 key=sharedFilename[6] 
[proxy:0:1@compute-0-5.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_pPjbqK
[proxy:0:1@compute-0-5.local] got pmi command (from 18): get
kvsname=kvs_20295_0 key=sharedFilename[6] 
[proxy:0:1@compute-0-5.local] PMI response: cmd=get_result rc=0 msg=success value=/dev/shm/Intel_MPI_pPjbqK
[0] MPI startup():  DAPL  rdma_rndv_buf_align_mask=63
[0] MPI startup():  DAPL  rdma_rndv_copy_with_align_threshold=131072
[0] MPI startup():  DAPL  rdma_max_msg_size=16777216
[0] MPI startup():  DAPL  rdma_max_fragment_num=16
[0] MPI startup():  DAPL  req_evd_qlen=2000
[2] MPI startup():  DAPL  rdma_rndv_buf_align_mask=63
[2] MPI startup():  DAPL  rdma_rndv_copy_with_align_threshold=131072
[2] MPI startup():  DAPL  rdma_max_msg_size=16777216
[0] MPI startup():  DAPL  conn_evd_qlen=56
[0] MPI startup():  DAPL  dapl_connection_timeout=4294967295
[0] MPI startup():  DAPL  dapl_disconnection_timeout=10000000
[6] MPI startup():  DAPL  rdma_rndv_buf_align_mask=63
[6] MPI startup():  DAPL  rdma_rndv_copy_with_align_threshold=131072
[6] MPI startup():  DAPL  rdma_max_msg_size=16777216
[6] MPI startup():  DAPL  rdma_max_fragment_num=16
[6] MPI startup():  DAPL  req_evd_qlen=2000
[6] MPI startup():  DAPL  conn_evd_qlen=56
[6] MPI startup():  DAPL  dapl_connection_timeout=4294967295
[6] MPI startup():  DAPL  dapl_disconnection_timeout=10000000
[6] MPI startup():  DAPL  service_id=0
[6] MPI startup():  DAPL  create_conn_qual=-1
[6] MPI startup():  DAPL  rdma_use_mreg_cache=1
[6] MPI startup():  DAPL  rtc_use_avl_tree=0
[6] MPI startup():  DAPL  rtc_max_cache_entries=1024
[6] MPI startup():  DAPL  rtc_max_memory_size=0
[6] MPI startup():  DAPL  conn_desired_num=256
[6] MPI startup():  DAPL  disconn_desired_num=1024
[6] my_dlopen(): trying to dlopen: libdat2.so.2
[7] MPI startup():  DAPL  rdma_rndv_buf_align_mask=63
[7] MPI startup():  DAPL  rdma_rndv_copy_with_align_threshold=131072
[7] MPI startup():  DAPL  rdma_max_msg_size=16777216
[7] MPI startup():  DAPL  rdma_max_fragment_num=16
[7] MPI startup():  DAPL  req_evd_qlen=2000
[7] MPI startup():  DAPL  conn_evd_qlen=56
[7] MPI startup():  DAPL  dapl_connection_timeout=4294967295
[7] MPI startup():  DAPL  dapl_disconnection_timeout=10000000
[7] MPI startup():  DAPL  service_id=0
[7] MPI startup():  DAPL  create_conn_qual=-1
[7] MPI startup():  DAPL  rdma_use_mreg_cache=1
[7] MPI startup():  DAPL  rtc_use_avl_tree=0
[7] MPI startup():  DAPL  rtc_max_cache_entries=1024
[7] MPI startup():  DAPL  rtc_max_memory_size=0
[7] MPI startup():  DAPL  conn_desired_num=256
[7] MPI startup():  DAPL  disconn_desired_num=1024
[7] my_dlopen(): trying to dlopen: libdat2.so.2
[8] MPI startup():  DAPL  rdma_rndv_buf_align_mask=63
[8] MPI startup():  DAPL  rdma_rndv_copy_with_align_threshold=131072
[8] MPI startup():  DAPL  rdma_max_msg_size=16777216
[8] MPI startup():  DAPL  rdma_max_fragment_num=16
[8] MPI startup():  DAPL  req_evd_qlen=2000
[8] MPI startup():  DAPL  conn_evd_qlen=56
[8] MPI startup():  DAPL  dapl_connection_timeout=4294967295
[8] MPI startup():  DAPL  dapl_disconnection_timeout=10000000
[8] MPI startup():  DAPL  service_id=0
[8] MPI startup():  DAPL  create_conn_qual=-1
[8] MPI startup():  DAPL  rdma_use_mreg_cache=1
[8] MPI startup():  DAPL  rtc_use_avl_tree=0
[8] MPI startup():  DAPL  rtc_max_cache_entries=1024
[8] MPI startup():  DAPL  rtc_max_memory_size=0
[8] MPI startup():  DAPL  conn_desired_num=256
[8] MPI startup():  DAPL  disconn_desired_num=1024
[8] my_dlopen(): trying to dlopen: libdat2.so.2
[0] MPI startup():  DAPL  service_id=0
[0] MPI startup():  DAPL  create_conn_qual=-1
[0] MPI startup():  DAPL  rdma_use_mreg_cache=1
[0] MPI startup():  DAPL  rtc_use_avl_tree=0
[0] MPI startup():  DAPL  rtc_max_cache_entries=1024
[0] MPI startup():  DAPL  rtc_max_memory_size=0
[0] MPI startup():  DAPL  conn_desired_num=256
[0] MPI startup():  DAPL  disconn_desired_num=1024
[0] my_dlopen(): trying to dlopen: libdat2.so.2
[10] MPI startup():  DAPL  rdma_rndv_buf_align_mask=63
[10] MPI startup():  DAPL  rdma_rndv_copy_with_align_threshold=131072
[10] MPI startup():  DAPL  rdma_max_msg_size=16777216
[10] MPI startup():  DAPL  rdma_max_fragment_num=16
[10] MPI startup():  DAPL  req_evd_qlen=2000
[10] MPI startup():  DAPL  conn_evd_qlen=56
[10] MPI startup():  DAPL  dapl_connection_timeout=4294967295
[10] MPI startup():  DAPL  dapl_disconnection_timeout=10000000
[10] MPI startup():  DAPL  service_id=0
[10] MPI startup():  DAPL  create_conn_qual=-1
[10] MPI startup():  DAPL  rdma_use_mreg_cache=1
[10] MPI startup():  DAPL  rtc_use_avl_tree=0
[10] MPI startup():  DAPL  rtc_max_cache_entries=1024
[10] MPI startup():  DAPL  rtc_max_memory_size=0
[10] MPI startup():  DAPL  conn_desired_num=256
[10] MPI startup():  DAPL  disconn_desired_num=1024
[10] my_dlopen(): trying to dlopen: libdat2.so.2
[1] MPI startup():  DAPL  rdma_rndv_buf_align_mask=63
[1] MPI startup():  DAPL  rdma_rndv_copy_with_align_threshold=131072
[1] MPI startup():  DAPL  rdma_max_msg_size=16777216
[1] MPI startup():  DAPL  rdma_max_fragment_num=16
[1] MPI startup():  DAPL  req_evd_qlen=2000
[1] MPI startup():  DAPL  conn_evd_qlen=56
[1] MPI startup():  DAPL  dapl_connection_timeout=4294967295
[1] MPI startup():  DAPL  dapl_disconnection_timeout=10000000
[1] MPI startup():  DAPL  service_id=0
[1] MPI startup():  DAPL  create_conn_qual=-1
[1] MPI startup():  DAPL  rdma_use_mreg_cache=1
[1] MPI startup():  DAPL  rtc_use_avl_tree=0
[1] MPI startup():  DAPL  rtc_max_cache_entries=1024
[1] MPI startup():  DAPL  rtc_max_memory_size=0
[1] MPI startup():  DAPL  conn_desired_num=256
[1] MPI startup():  DAPL  disconn_desired_num=1024
[1] my_dlopen(): trying to dlopen: libdat2.so.2
[11] MPI startup():  DAPL  rdma_rndv_buf_align_mask=63
[11] MPI startup():  DAPL  rdma_rndv_copy_with_align_threshold=131072
[11] MPI startup():  DAPL  rdma_max_msg_size=16777216
[11] MPI startup():  DAPL  rdma_max_fragment_num=16
[11] MPI startup():  DAPL  req_evd_qlen=2000
[11] MPI startup():  DAPL  conn_evd_qlen=56
[11] MPI startup():  DAPL  dapl_connection_timeout=4294967295
[11] MPI startup():  DAPL  dapl_disconnection_timeout=10000000
[11] MPI startup():  DAPL  service_id=0
[11] MPI startup():  DAPL  create_conn_qual=-1
[11] MPI startup():  DAPL  rdma_use_mreg_cache=1
[11] MPI startup():  DAPL  rtc_use_avl_tree=0
[11] MPI startup():  DAPL  rtc_max_cache_entries=1024
[11] MPI startup():  DAPL  rtc_max_memory_size=0
[11] MPI startup():  DAPL  conn_desired_num=256
[11] MPI startup():  DAPL  disconn_desired_num=1024
[11] my_dlopen(): trying to dlopen: libdat2.so.2
[2] MPI startup():  DAPL  rdma_max_fragment_num=16
[2] MPI startup():  DAPL  req_evd_qlen=2000
[2] MPI startup():  DAPL  conn_evd_qlen=56
[2] MPI startup():  DAPL  dapl_connection_timeout=4294967295
[2] MPI startup():  DAPL  dapl_disconnection_timeout=10000000
[2] MPI startup():  DAPL  service_id=0
[2] MPI startup():  DAPL  create_conn_qual=-1
[2] MPI startup():  DAPL  rdma_use_mreg_cache=1
[2] MPI startup():  DAPL  rtc_use_avl_tree=0
[2] MPI startup():  DAPL  rtc_max_cache_entries=1024
[2] MPI startup():  DAPL  rtc_max_memory_size=0
[2] MPI startup():  DAPL  conn_desired_num=256
[2] MPI startup():  DAPL  disconn_desired_num=1024
[2] my_dlopen(): trying to dlopen: libdat2.so.2
[3] MPI startup():  DAPL  rdma_rndv_buf_align_mask=63
[3] MPI startup():  DAPL  rdma_rndv_copy_with_align_threshold=131072
[3] MPI startup():  DAPL  rdma_max_msg_size=16777216
[3] MPI startup():  DAPL  rdma_max_fragment_num=16
[3] MPI startup():  DAPL  req_evd_qlen=2000
[3] MPI startup():  DAPL  conn_evd_qlen=56
[3] MPI startup():  DAPL  dapl_connection_timeout=4294967295
[3] MPI startup():  DAPL  dapl_disconnection_timeout=10000000
[3] MPI startup():  DAPL  service_id=0
[3] MPI startup():  DAPL  create_conn_qual=-1
[3] MPI startup():  DAPL  rdma_use_mreg_cache=1
[3] MPI startup():  DAPL  rtc_use_avl_tree=0
[3] MPI startup():  DAPL  rtc_max_cache_entries=1024
[3] MPI startup():  DAPL  rtc_max_memory_size=0
[3] MPI startup():  DAPL  conn_desired_num=256
[3] MPI startup():  DAPL  disconn_desired_num=1024
[3] my_dlopen(): trying to dlopen: libdat2.so.2
[4] MPI startup():  DAPL  rdma_rndv_buf_align_mask=63
[4] MPI startup():  DAPL  rdma_rndv_copy_with_align_threshold=131072
[4] MPI startup():  DAPL  rdma_max_msg_size=16777216
[4] MPI startup():  DAPL  rdma_max_fragment_num=16
[4] MPI startup():  DAPL  req_evd_qlen=2000
[4] MPI startup():  DAPL  conn_evd_qlen=56
[4] MPI startup():  DAPL  dapl_connection_timeout=4294967295
[4] MPI startup():  DAPL  dapl_disconnection_timeout=10000000
[4] MPI startup():  DAPL  service_id=0
[4] MPI startup():  DAPL  create_conn_qual=-1
[4] MPI startup():  DAPL  rdma_use_mreg_cache=1
[4] MPI startup():  DAPL  rtc_use_avl_tree=0
[4] MPI startup():  DAPL  rtc_max_cache_entries=1024
[4] MPI startup():  DAPL  rtc_max_memory_size=0
[4] MPI startup():  DAPL  conn_desired_num=256
[4] MPI startup():  DAPL  disconn_desired_num=1024
[4] my_dlopen(): trying to dlopen: libdat2.so.2
[5] MPI startup():  DAPL  rdma_rndv_buf_align_mask=63
[5] MPI startup():  DAPL  rdma_rndv_copy_with_align_threshold=131072
[5] MPI startup():  DAPL  rdma_max_msg_size=16777216
[5] MPI startup():  DAPL  rdma_max_fragment_num=16
[5] MPI startup():  DAPL  req_evd_qlen=2000
[5] MPI startup():  DAPL  conn_evd_qlen=56
[5] MPI startup():  DAPL  dapl_connection_timeout=4294967295
[5] MPI startup():  DAPL  dapl_disconnection_timeout=10000000
[5] MPI startup():  DAPL  service_id=0
[5] MPI startup():  DAPL  create_conn_qual=-1
[5] MPI startup():  DAPL  rdma_use_mreg_cache=1
[5] MPI startup():  DAPL  rtc_use_avl_tree=0
[5] MPI startup():  DAPL  rtc_max_cache_entries=1024
[5] MPI startup():  DAPL  rtc_max_memory_size=0
[5] MPI startup():  DAPL  conn_desired_num=256
[5] MPI startup():  DAPL  disconn_desired_num=1024
[5] my_dlopen(): trying to dlopen: libdat2.so.2
[7] DAPL startup(): trying to open default DAPL provider from dat registry: ofa-v2-mlx4_0-1
[9] MPI startup():  DAPL  rdma_rndv_buf_align_mask=63
[9] MPI startup():  DAPL  rdma_rndv_copy_with_align_threshold=131072
[9] MPI startup():  DAPL  rdma_max_msg_size=16777216
[9] MPI startup():  DAPL  rdma_max_fragment_num=16
[6] DAPL startup(): trying to open default DAPL provider from dat registry: ofa-v2-mlx4_0-1
[7] I_MPI_dlopen_dat(): trying to load default dat library: libdat2.so.2
[7] my_dlopen(): trying to dlopen: libdat2.so.2
[8] DAPL startup(): trying to open default DAPL provider from dat registry: ofa-v2-mlx4_0-1
[8] I_MPI_dlopen_dat(): trying to load default dat library: libdat2.so.2
[8] my_dlopen(): trying to dlopen: libdat2.so.2
[11] DAPL startup(): trying to open default DAPL provider from dat registry: ofa-v2-mlx4_0-1
[11] I_MPI_dlopen_dat(): trying to load default dat library: libdat2.so.2
[6] I_MPI_dlopen_dat(): trying to load default dat library: libdat2.so.2
[6] my_dlopen(): trying to dlopen: libdat2.so.2
[9] MPI startup():  DAPL  req_evd_qlen=2000
[9] MPI startup():  DAPL  conn_evd_qlen=56
[9] MPI startup():  DAPL  dapl_connection_timeout=4294967295
[9] MPI startup():  DAPL  dapl_disconnection_timeout=10000000
[11] my_dlopen(): trying to dlopen: libdat2.so.2
[9] MPI startup():  DAPL  service_id=0
[9] MPI startup():  DAPL  create_conn_qual=-1
[9] MPI startup():  DAPL  rdma_use_mreg_cache=1
[0] DAPL startup(): trying to open default DAPL provider from dat registry: ofa-v2-mlx4_0-1
[0] I_MPI_dlopen_dat(): trying to load default dat library: libdat2.so.2
[0] my_dlopen(): trying to dlopen: libdat2.so.2
[3] DAPL startup(): trying to open default DAPL provider from dat registry: ofa-v2-mlx4_0-1
[3] I_MPI_dlopen_dat(): trying to load default dat library: libdat2.so.2
[3] my_dlopen(): trying to dlopen: libdat2.so.2
[10] DAPL startup(): trying to open default DAPL provider from dat registry: ofa-v2-mlx4_0-1
[10] I_MPI_dlopen_dat(): trying to load default dat library: libdat2.so.2
[10] my_dlopen(): trying to dlopen: libdat2.so.2
[1] DAPL startup(): trying to open default DAPL provider from dat registry: ofa-v2-mlx4_0-1
[1] I_MPI_dlopen_dat(): trying to load default dat library: libdat2.so.2
[1] my_dlopen(): trying to dlopen: libdat2.so.2
[2] DAPL startup(): trying to open default DAPL provider from dat registry: ofa-v2-mlx4_0-1
[2] I_MPI_dlopen_dat(): trying to load default dat library: libdat2.so.2
[2] my_dlopen(): trying to dlopen: libdat2.so.2
[4] DAPL startup(): trying to open default DAPL provider from dat registry: ofa-v2-mlx4_0-1
[4] I_MPI_dlopen_dat(): trying to load default dat library: libdat2.so.2
[4] my_dlopen(): trying to dlopen: libdat2.so.2
[5] DAPL startup(): trying to open default DAPL provider from dat registry: ofa-v2-mlx4_0-1
[5] I_MPI_dlopen_dat(): trying to load default dat library: libdat2.so.2
[5] my_dlopen(): trying to dlopen: libdat2.so.2
[9] MPI startup():  DAPL  rtc_use_avl_tree=0
[9] MPI startup():  DAPL  rtc_max_cache_entries=1024
[9] MPI startup():  DAPL  rtc_max_memory_size=0
[9] MPI startup():  DAPL  conn_desired_num=256
[9] MPI startup():  DAPL  disconn_desired_num=1024
[9] my_dlopen(): trying to dlopen: libdat2.so.2
[9] DAPL startup(): trying to open default DAPL provider from dat registry: ofa-v2-mlx4_0-1
[9] I_MPI_dlopen_dat(): trying to load default dat library: libdat2.so.2
[9] my_dlopen(): trying to dlopen: libdat2.so.2
[0] MPI startup(): DAPL provider ofa-v2-mlx4_0-1
[0] MPI startup(): DAPL provider ofa-v2-mlx4_0-1 will use RDMA_READ direct copy protocol
[0] RTC():  setup malloc hooks
[proxy:0:0@compute-0-3.local] got pmi command (from 10): put
kvsname=kvs_20295_0 key=DAPL_PROVIDER value=ofa-v2-mlx4_0-1(v2.0) 
[proxy:0:0@compute-0-3.local] forwarding command (cmd=put kvsname=kvs_20295_0 key=DAPL_PROVIDER value=ofa-v2-mlx4_0-1(v2.0)) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=put kvsname=kvs_20295_0 key=DAPL_PROVIDER value=ofa-v2-mlx4_0-1(v2.0)
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 10: cmd=put_result rc=0 msg=success
[proxy:0:0@compute-0-3.local] we don't understand the response put_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 10): barrier_in

[7] MPI startup(): DAPL provider ofa-v2-mlx4_0-1
[7] MPI startup(): DAPL provider ofa-v2-mlx4_0-1 will use RDMA_READ direct copy protocol
[7] RTC():  setup malloc hooks
[2] MPI startup(): DAPL provider ofa-v2-mlx4_0-1
[2] MPI startup(): DAPL provider ofa-v2-mlx4_0-1 will use RDMA_READ direct copy protocol
[3] MPI startup(): DAPL provider ofa-v2-mlx4_0-1
[3] MPI startup(): DAPL provider ofa-v2-mlx4_0-1 will use RDMA_READ direct copy protocol
[5] MPI startup(): DAPL provider ofa-v2-mlx4_0-1
[5] MPI startup(): DAPL provider ofa-v2-mlx4_0-1 will use RDMA_READ direct copy protocol
[proxy:0:0@compute-0-3.local] got pmi command (from 12): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 14): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 19): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 22): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 25): barrier_in

[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[proxy:0:0@compute-0-3.local] forwarding command (cmd=barrier_in) upstream
[1] MPI startup(): DAPL provider ofa-v2-mlx4_0-1
[1] MPI startup(): DAPL provider ofa-v2-mlx4_0-1 will use RDMA_READ direct copy protocol
[1] RTC():  setup malloc hooks
[2] RTC():  setup malloc hooks
[3] RTC():  setup malloc hooks
[4] MPI startup(): DAPL provider ofa-v2-mlx4_0-1
[4] MPI startup(): DAPL provider ofa-v2-mlx4_0-1 will use RDMA_READ direct copy protocol
[4] RTC():  setup malloc hooks
[5] RTC():  setup malloc hooks
[8] MPI startup(): DAPL provider ofa-v2-mlx4_0-1
[8] MPI startup(): DAPL provider ofa-v2-mlx4_0-1 will use RDMA_READ direct copy protocol
[8] RTC():  setup malloc hooks
[9] MPI startup(): DAPL provider ofa-v2-mlx4_0-1
[9] MPI startup(): DAPL provider ofa-v2-mlx4_0-1 will use RDMA_READ direct copy protocol
[9] RTC():  setup malloc hooks
[10] MPI startup(): DAPL provider ofa-v2-mlx4_0-1
[10] MPI startup(): DAPL provider ofa-v2-mlx4_0-1 will use RDMA_READ direct copy protocol
[10] RTC():  setup malloc hooks
[6] MPI startup(): DAPL provider ofa-v2-mlx4_0-1
[6] MPI startup(): DAPL provider ofa-v2-mlx4_0-1 will use RDMA_READ direct copy protocol
[6] RTC():  setup malloc hooks
[11] MPI startup(): DAPL provider ofa-v2-mlx4_0-1
[11] MPI startup(): DAPL provider ofa-v2-mlx4_0-1 will use RDMA_READ direct copy protocol
[11] RTC():  setup malloc hooks
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 18: cmd=barrier_out
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 18: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] got pmi command (from 10): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 12): get
kvsname=kvs_20295_0 key=DAPL_PROVIDER 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=ofa-v2-mlx4_0-1(v2.0)
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get
kvsname=kvs_20295_0 key=DAPL_PROVIDER 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=ofa-v2-mlx4_0-1(v2.0)
[proxy:0:0@compute-0-3.local] got pmi command (from 12): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 14): get
kvsname=kvs_20295_0 key=DAPL_PROVIDER 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=ofa-v2-mlx4_0-1(v2.0)
[proxy:0:0@compute-0-3.local] got pmi command (from 25): get
kvsname=kvs_20295_0 key=DAPL_PROVIDER 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=ofa-v2-mlx4_0-1(v2.0)
[proxy:0:0@compute-0-3.local] got pmi command (from 19): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 22): get
kvsname=kvs_20295_0 key=DAPL_PROVIDER 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=ofa-v2-mlx4_0-1(v2.0)
[proxy:0:0@compute-0-3.local] got pmi command (from 14): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 25): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 22): barrier_in

[proxy:0:0@compute-0-3.local] forwarding command (cmd=barrier_in) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[proxy:0:1@compute-0-5.local] got pmi command (from 7): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 9): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 6): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 12): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 15): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 18): barrier_in

[proxy:0:1@compute-0-5.local] forwarding command (cmd=barrier_in) upstream
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_PROVIDER
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 6: cmd=get_result rc=0 msg=success value=ofa-v2-mlx4_0-1(v2.0) key=DAPL_PROVIDER
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] got pmi command (from 6): get
kvsname=kvs_20295_0 key=DAPL_PROVIDER 
[proxy:0:1@compute-0-5.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_PROVIDER) upstream
[proxy:0:1@compute-0-5.local] got pmi command (from 7): get
kvsname=kvs_20295_0 [mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_PROVIDER
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 7: cmd=get_result rc=0 msg=success value=ofa-v2-mlx4_0-1(v2.0) key=DAPL_PROVIDER
key=DAPL_PROVIDER 
[proxy:0:1@compute-0-5.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_PROVIDER) upstream
[proxy:0:1@compute-0-5.local] got pmi command (from 9): get
kvsname=kvs_20295_0 [mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_PROVIDER
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 9: cmd=get_result rc=0 msg=success value=ofa-v2-mlx4_0-1(v2.0) key=DAPL_PROVIDER
key=DAPL_PROVIDER 
[proxy:0:1@compute-0-5.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_PROVIDER) upstream
[proxy:0:1@compute-0-5.local] got pmi command (from 12): get
kvsname=kvs_20295_0 key=DAPL_PROVIDER [mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_PROVIDER
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 12: cmd=get_result rc=0 msg=success value=ofa-v2-mlx4_0-1(v2.0) key=DAPL_PROVIDER

[proxy:0:1@compute-0-5.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_PROVIDER) upstream
[proxy:0:1@compute-0-5.local] got pmi command (from 15): get
kvsname=kvs_20295_0 [mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_PROVIDER
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 15: cmd=get_result rc=0 msg=success value=ofa-v2-mlx4_0-1(v2.0) key=DAPL_PROVIDER
key=DAPL_PROVIDER 
[proxy:0:1@compute-0-5.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_PROVIDER) upstream
[proxy:0:1@compute-0-5.local] we don't understand the response get_result; forwarding downstream
[proxy:0:1@compute-0-5.local] got pmi command (from 18): get
kvsname=kvs_20295_0 key=DAPL_PROVIDER 
[proxy:0:1@compute-0-5.local] PMI response: cmd=get_result rc=0 msg=success value=ofa-v2-mlx4_0-1(v2.0)
[proxy:0:1@compute-0-5.local] we don't understand the response get_result; forwarding downstream
[proxy:0:1@compute-0-5.local] got pmi command (from 6): barrier_in

[proxy:0:1@compute-0-5.local] we don't understand the response get_result; forwarding downstream
[proxy:0:1@compute-0-5.local] got pmi command (from 7): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 18): barrier_in

[proxy:0:1@compute-0-5.local] we don't understand the response get_result; forwarding downstream
[proxy:0:1@compute-0-5.local] got pmi command (from 9): barrier_in

[proxy:0:1@compute-0-5.local] we don't understand the response get_result; forwarding downstream
[proxy:0:1@compute-0-5.local] got pmi command (from 12): barrier_in

[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 15: cmd=barrier_out
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 15: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] got pmi command (from 15): barrier_in

[proxy:0:1@compute-0-5.local] forwarding command (cmd=barrier_in) upstream
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get
kvsname=kvs_20295_0 key=DAPL_MISMATCH 
[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 10: cmd=get_result rc=-1 msg=key_DAPL_MISMATCH_not_found value=unknown
[proxy:0:0@compute-0-3.local] got pmi command (from 12): get
kvsname=kvs_20295_0 key=DAPL_MISMATCH 
[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH) upstream
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get
kvsname=kvs_20295_0 key=DAPL_MISMATCH [proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 12: cmd=get_result rc=-1 msg=key_DAPL_MISMATCH_not_found value=unknown

[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH) upstream
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 19: cmd=get_result rc=-1 msg=key_DAPL_MISMATCH_not_found value=unknown
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] got pmi command (from 14): get
kvsname=kvs_20295_0 key=DAPL_MISMATCH [proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out

[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 14: cmd=get_result rc=-1 msg=key_DAPL_MISMATCH_not_found value=unknown
[proxy:0:0@compute-0-3.local] got pmi command (from 25): get
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 6: cmd=get_result rc=-1 msg=key_DAPL_MISMATCH_not_found value=unknown
kvsname=kvs_20295_0 key=DAPL_MISMATCH 
[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH) upstream
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 22): get
kvsname=kvs_20295_0 key=DAPL_MISMATCH 
[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH) upstream
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 25: cmd=get_result rc=-1 msg=key_DAPL_MISMATCH_not_found value=unknown
[proxy:0:1@compute-0-5.local] got pmi command (from 6): get
kvsname=kvs_20295_0 key=DAPL_MISMATCH 
[proxy:0:1@compute-0-5.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 22: cmd=get_result rc=-1 msg=key_DAPL_MISMATCH_not_found value=unknown
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[0] MPI startup(): shm and dapl data transfer modes
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 7: cmd=get_result rc=-1 msg=key_DAPL_MISMATCH_not_found value=unknown
[proxy:0:1@compute-0-5.local] got pmi command (from 7): get
kvsname=kvs_20295_0 key=DAPL_MISMATCH 
[proxy:0:1@compute-0-5.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH) upstream
[1] MPI startup(): shm and dapl data transfer modes
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 9: cmd=get_result rc=-1 msg=key_DAPL_MISMATCH_not_found value=unknown
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[3] MPI startup(): shm and dapl data transfer modes
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 12: cmd=get_result rc=-1 msg=key_DAPL_MISMATCH_not_found value=unknown
[proxy:0:1@compute-0-5.local] got pmi command (from 9): get
kvsname=kvs_20295_0 key=DAPL_MISMATCH 
[proxy:0:1@compute-0-5.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH) upstream
[4] MPI startup(): shm and dapl data transfer modes
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 15: cmd=get_result rc=-1 msg=key_DAPL_MISMATCH_not_found value=unknown
[5] MPI startup(): shm and dapl data transfer modes
[proxy:0:1@compute-0-5.local] got pmi command (from 12): get
kvsname=kvs_20295_0 key=DAPL_MISMATCH 
[proxy:0:1@compute-0-5.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH) upstream
[proxy:0:1@compute-0-5.local] got pmi command (from 15): get
kvsname=kvs_20295_0 key=DAPL_MISMATCH 
[proxy:0:1@compute-0-5.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 18: cmd=get_result rc=-1 msg=key_DAPL_MISMATCH_not_found value=unknown
[proxy:0:1@compute-0-5.local] we don't understand the response get_result; forwarding downstream
[2] MPI startup(): shm and dapl data transfer modes
[proxy:0:1@compute-0-5.local] got pmi command (from 18): get
kvsname=kvs_20295_0 key=DAPL_MISMATCH 
[proxy:0:1@compute-0-5.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=DAPL_MISMATCH) upstream
[proxy:0:1@compute-0-5.local] we don't understand the response get_result; forwarding downstream
[6] MPI startup(): shm and dapl data transfer modes
[proxy:0:0@compute-0-3.local] got pmi command (from 10): put
kvsname=kvs_20295_0 key=P0-businesscard-0 [proxy:0:1@compute-0-5.local] we don't understand the response get_result; forwarding downstream
value=rdma_port0#20298$rdma_host0#2:0:0:10:1:255:251:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ 
[proxy:0:1@compute-0-5.local] we don't understand the response get_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 12): put
kvsname=kvs_20295_0 [7] MPI startup(): shm and dapl data transfer modes
key=P1-businesscard-0 value=rdma_port0#20299$rdma_host0#2:0:0:10:1:255:251:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ 
[8] MPI startup(): shm and dapl data transfer modes
[9] MPI startup(): shm and dapl data transfer modes
[proxy:0:0@compute-0-3.local] got pmi command (from 14): put
kvsname=kvs_20295_0 key=P2-businesscard-0 value=rdma_port0#20300$rdma_host0#2:0:0:10:1:255:251:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ 
[proxy:0:1@compute-0-5.local] we don't understand the response get_result; forwarding downstream
[proxy:0:1@compute-0-5.local] we don't understand the response get_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 19): put
kvsname=kvs_20295_0 key=P3-businesscard-0 value=rdma_port0#20301$rdma_host0#2:0:0:10:1:255:251:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ [10] MPI startup(): shm and dapl data transfer modes

[proxy:0:0@compute-0-3.local] got pmi command (from 22): put
kvsname=kvs_20295_0 key=P4-businesscard-0 value=rdma_port0#20302$rdma_host0#2:0:0:10:1:255:251:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 25): put
kvsname=kvs_20295_0 key=P5-businesscard-0 value=rdma_port0#20303$rdma_host0#2:0:0:10:1:255:251:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ 
[11] MPI startup(): shm and dapl data transfer modes
[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_20295_0 key=P0-businesscard-0 value=rdma_port0#20298$rdma_host0#2:0:0:10:1:255:251:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_20295_0 key=P1-businesscard-0 value=rdma_port0#20299$rdma_host0#2:0:0:10:1:255:251:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_20295_0 key=P2-businesscard-0 value=rdma_port0#20300$rdma_host0#2:0:0:10:1:255:251:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_20295_0 key=P3-businesscard-0 value=rdma_port0#20301$rdma_host0#2:0:0:10:1:255:251:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_20295_0 key=P4-businesscard-0 value=rdma_port0#20302$rdma_host0#2:0:0:10:1:255:251:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_20295_0 key=P5-businesscard-0 value=rdma_port0#20303$rdma_host0#2:0:0:10:1:255:251:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[proxy:0:0@compute-0-3.local] got pmi command (from 10): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 12): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 14): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 6): put
kvsname=kvs_20295_0 key=P6-businesscard-0 value=rdma_port0#27503$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 19): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 7): put
kvsname=kvs_20295_0 key=P7-businesscard-0 value=rdma_port0#27504$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ 
[proxy:0:0@compute-0-3.local] got pmi command (from 25): barrier_in

[proxy:0:0@compute-0-3.local] got pmi command (from 22): barrier_in

[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[proxy:0:0@compute-0-3.local] forwarding command (cmd=barrier_in) upstream
[proxy:0:1@compute-0-5.local] got pmi command (from 9): put
kvsname=kvs_20295_0 key=P8-businesscard-0 value=rdma_port0#27505$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ 
[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_20295_0 key=P6-businesscard-0 value=rdma_port0#27503$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_20295_0 key=P7-businesscard-0 value=rdma_port0#27504$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_20295_0 key=P8-businesscard-0 value=rdma_port0#27505$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_20295_0 key=P9-businesscard-0 value=rdma_port0#27506$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_20295_0 key=P11-businesscard-0 value=rdma_port0#27508$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[mpiexec@compute-0-3.local] [pgid: 0] got aggregated PMI command (part of it): cmd=put kvsname=kvs_20295_0 key=P10-businesscard-0 value=rdma_port0#27507$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[mpiexec@compute-0-3.local] reply: cmd=put_result rc=0 msg=success

[proxy:0:1@compute-0-5.local] got pmi command (from 12): put
kvsname=kvs_20295_0 key=P9-businesscard-0 value=rdma_port0#27506$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ 
[proxy:0:1@compute-0-5.local] got pmi command (from 18): put
kvsname=kvs_20295_0 key=P11-businesscard-0 value=rdma_port0#27508$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ 
[proxy:0:1@compute-0-5.local] got pmi command (from 15): put
kvsname=kvs_20295_0 key=P10-businesscard-0 value=rdma_port0#27507$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ 
[proxy:0:1@compute-0-5.local] got pmi command (from 6): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 7): barrier_in

[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=barrier_in
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 9: cmd=barrier_out
[mpiexec@compute-0-3.local] PMI response to fd 0 pid 9: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] [proxy:0:1@compute-0-5.local] got pmi command (from 12): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 15): barrier_in

[proxy:0:1@compute-0-5.local] got pmi command (from 18): barrier_in

PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] got pmi command (from 9): barrier_in

[proxy:0:1@compute-0-5.local] forwarding command (cmd=barrier_in) upstream
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:1@compute-0-5.local] PMI response: cmd=barrier_out
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get
kvsname=kvs_20295_0 key=P6-businesscard-0 
[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=P6-businesscard-0) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=P6-businesscard-0
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 10: cmd=get_result rc=0 msg=success value=rdma_port0#27503$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ key=P6-businesscard-0
[proxy:0:0@compute-0-3.local] got pmi command (from 14): get
kvsname=kvs_20295_0 key=P6-businesscard-0 
[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=P6-businesscard-0) upstream
[0] MPI startup(): static connections storm algo
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=P6-businesscard-0
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 14: cmd=get_result rc=0 msg=success value=rdma_port0#27503$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ key=P6-businesscard-0
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 12): get
kvsname=kvs_20295_0 key=P6-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27503$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 25): get
kvsname=kvs_20295_0 key=P6-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27503$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get
kvsname=kvs_20295_0 key=P6-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27503$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 22): get
kvsname=kvs_20295_0 key=P6-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27503$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get
kvsname=kvs_20295_0 key=P7-businesscard-0 
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=P7-businesscard-0
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 10: cmd=get_result rc=0 msg=success value=rdma_port0#27504$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ key=P7-businesscard-0
[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=P7-businesscard-0) upstream
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 14): get
kvsname=kvs_20295_0 key=P7-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27504$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 12): get
kvsname=kvs_20295_0 key=P7-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27504$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 25): get
kvsname=kvs_20295_0 key=P7-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27504$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get
kvsname=kvs_20295_0 key=P7-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27504$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 22): get
kvsname=kvs_20295_0 key=P7-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27504$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get
kvsname=kvs_20295_0 key=P8-businesscard-0 
[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=P8-businesscard-0) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=P8-businesscard-0
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 10: cmd=get_result rc=0 msg=success value=rdma_port0#27505$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ key=P8-businesscard-0
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 14): get
kvsname=kvs_20295_0 key=P8-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27505$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 12): get
kvsname=kvs_20295_0 key=P8-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27505$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 25): get
kvsname=kvs_20295_0 key=P8-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27505$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get
kvsname=kvs_20295_0 key=P9-businesscard-0 
[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=P9-businesscard-0) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=P9-businesscard-0
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 10: cmd=get_result rc=0 msg=success value=rdma_port0#27506$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ key=P9-businesscard-0
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 22): get
kvsname=kvs_20295_0 key=P8-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27505$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get
kvsname=kvs_20295_0 key=P8-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27505$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 12): get
kvsname=kvs_20295_0 key=P9-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27506$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 14): get
kvsname=kvs_20295_0 key=P9-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27506$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 25): get
kvsname=kvs_20295_0 key=P9-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27506$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get
kvsname=kvs_20295_0 key=P10-businesscard-0 
[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=P10-businesscard-0) upstream
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=P10-businesscard-0
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 10: cmd=get_result rc=0 msg=success value=rdma_port0#27507$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ key=P10-businesscard-0
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 22): get
kvsname=kvs_20295_0 key=P9-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27506$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get
kvsname=kvs_20295_0 key=P9-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27506$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 12): get
kvsname=kvs_20295_0 key=P10-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27507$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 14): get
kvsname=kvs_20295_0 key=P10-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27507$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 10): get
kvsname=kvs_20295_0 key=P11-businesscard-0 
[mpiexec@compute-0-3.local] [pgid: 0] got PMI command: cmd=get kvsname=kvs_20295_0 key=P11-businesscard-0
[mpiexec@compute-0-3.local] PMI response to fd 6 pid 10: cmd=get_result rc=0 msg=success value=rdma_port0#27508$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$ key=P11-businesscard-0
[proxy:0:0@compute-0-3.local] forwarding command (cmd=get kvsname=kvs_20295_0 key=P11-businesscard-0) upstream
[proxy:0:0@compute-0-3.local] we don't understand the response get_result; forwarding downstream
[proxy:0:0@compute-0-3.local] got pmi command (from 25): get
kvsname=kvs_20295_0 key=P10-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27507$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 22): get
kvsname=kvs_20295_0 key=P10-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27507$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get
kvsname=kvs_20295_0 key=P10-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27507$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 14): get
kvsname=kvs_20295_0 key=P11-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27508$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 12): get
kvsname=kvs_20295_0 key=P11-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27508$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 25): get
kvsname=kvs_20295_0 key=P11-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27508$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 22): get
kvsname=kvs_20295_0 key=P11-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27508$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[proxy:0:0@compute-0-3.local] got pmi command (from 19): get
kvsname=kvs_20295_0 key=P11-businesscard-0 
[proxy:0:0@compute-0-3.local] PMI response: cmd=get_result rc=0 msg=success value=rdma_port0#27508$rdma_host0#2:0:0:10:1:255:249:0:0:0:0:0:0:0:0$fabrics_list#shm_and_dapl$
[0] MPI startup(): Successful pinning (x0,2) on node compute-0-3.local
[6] MPI startup(): Successful pinning (x0,2) on node compute-0-5.local
[7] MPI startup(): Successful pinning (x4,6) on node compute-0-5.local
[5] MPI startup(): Successful pinning (x9,11) on node compute-0-3.local
[8] MPI startup(): Successful pinning (x8,10) on node compute-0-5.local
[9] MPI startup(): Successful pinning (x1,3) on node compute-0-5.local
[2] MPI startup(): Successful pinning (x8,10) on node compute-0-3.local
[4] MPI startup(): Successful pinning (x5,7) on node compute-0-3.local
[10] MPI startup(): Successful pinning (x5,7) on node compute-0-5.local
[3] MPI startup(): Successful pinning (x1,3) on node compute-0-3.local
[1] MPI startup(): Successful pinning (x4,6) on node compute-0-3.local
[11] MPI startup(): Successful pinning (x9,11) on node compute-0-5.local
[0] MPI startup(): Recognition mode: 2, selected platform: 4 own platform: 4
[1] MPI startup(): Recognition mode: 2, selected platform: 4 own platform: 4
[4] MPI startup(): Recognition mode: 2, selected platform: 4 own platform: 4
[5] MPI startup(): Recognition mode: 2, selected platform: 4 own platform: 4
[0] MPI startup(): Device_reset_idx=0

[0] MPI startup(): Allgather: 1: 0-2015 & 0-8

[0] MPI startup(): Allgather: 3: 2015-63618 & 0-8

[0] MPI startup(): Allgather: 4: 63618-143214 & 0-8

[0] MPI startup(): Allgather: 3: 143214-305944 & 0-8

[0] MPI startup(): Allgather: 4: 0-2147483647 & 0-8

[0] MPI startup(): Allgather: 1: 0-308 & 9-16

[0] MPI startup(): Allgather: 3: 0-2147483647 & 9-16

[0] MPI startup(): Allgather: 1: 0-312 & 17-32

[0] MPI startup(): Allgather: 3: 0-2147483647 & 17-32

[0] MPI startup(): Allgather: 1: 0-200 & 33-64

[0] MPI startup(): Allgather: 3: 0-2147483647 & 33-64

[0] MPI startup(): Allgather: 1: 0-273 & 65-128

[0] MPI startup(): Allgather: 3: 0-2147483647 & 65-128

[0] MPI startup(): Allgather: 1: 0-6 & 129-512

[0] MPI startup(): Allgather: 2: 6-58 & 129-512

[0] MPI startup(): Allgather: 1: 58-121 & 129-512

[0] MPI startup(): Allgather: 3: 0-2147483647 & 129-512

[0] MPI startup(): Allgather: 1: 0-1 & 513-2147483647

[0] MPI startup(): Allgather: 2: 1-32 & 513-2147483647

[0] MPI startup(): Allgather: 1: 32-140 & 513-2147483647

[0] MPI startup(): Allgather: 3: 0-2147483647 & 513-2147483647

[0] MPI startup(): Allgatherv: 1: 0-23 & 0-8

[0] MPI startup(): Allgatherv: 4: 23-48 & 0-8

[0] MPI startup(): Allgatherv: 1: 48-1331 & 0-8

[0] MPI startup(): Allgatherv: 3: 1331-963108 & 0-8

[0] MPI startup(): Allgatherv: 4: 963108-2658684 & 0-8

[0] MPI startup(): Allgatherv: 3: 0-2147483647 & 0-8

[0] MPI startup(): Allgatherv: 1: 0-276 & 9-16

[0] MPI startup(): Allgatherv: 3: 0-2147483647 & 9-16

[0] MPI startup(): Allgatherv: 1: 0-195 & 17-32

[0] MPI startup(): Allgatherv: 3: 0-2147483647 & 17-32

[0] MPI startup(): Allgatherv: 1: 0-13 & 33-2147483647

[0] MPI startup(): Allgatherv: 4: 13-59 & 33-2147483647

[0] MPI startup(): Allgatherv: 2: 59-72 & 33-2147483647

[0] MPI startup(): Allgatherv: 1: 72-131 & 33-2147483647

[0] MPI startup(): Allgatherv: 4: 131-256 & 33-2147483647

[0] MPI startup(): Allgatherv: 3: 0-2147483647 & 33-2147483647

[0] MPI startup(): Allreduce: 6: 0-384 & 0-8

[0] MPI startup(): Allreduce: 1: 384-2167 & 0-8

[0] MPI startup(): Allreduce: 6: 2167-4468 & 0-8

[0] MPI startup(): Allreduce: 2: 4468-43100 & 0-8

[0] MPI startup(): Allreduce: 6: 43100-481673 & 0-8

[0] MPI startup(): Allreduce: 2: 481673-558753 & 0-8

[0] MPI startup(): Allreduce: 6: 558753-2670619 & 0-8

[0] MPI startup(): Allreduce: 4: 0-2147483647 & 0-8

[0] MPI startup(): Allreduce: 1: 0-1201 & 9-16

[0] MPI startup(): Allreduce: 2: 1201-359720 & 9-16

[0] MPI startup(): Allreduce: 3: 359720-1076962 & 9-16

[0] MPI startup(): Allreduce: 2: 1076962-2782274 & 9-16

[0] MPI startup(): Allreduce: 4: 0-2147483647 & 9-16

[0] MPI startup(): Allreduce: 1: 0-906 & 17-32

[0] MPI startup(): Allreduce: 2: 906-400031 & 17-32

[0] MPI startup(): Allreduce: 3: 400031-1635627 & 17-32

[0] MPI startup(): Allreduce: 2: 1635627-2422942 & 17-32

[0] MPI startup(): Allreduce: 3: 0-2147483647 & 17-32

[0] MPI startup(): Allreduce: 1: 0-484 & 33-2147483647

[0] MPI startup(): Allreduce: 2: 484-422014 & 33-2147483647

[0] MPI startup(): Allreduce: 4: 422014-897216 & 33-2147483647

[0] MPI startup(): Allreduce: 3: 897216-1197116 & 33-2147483647

[0] MPI startup(): Allreduce: 4: 0-2147483647 & 33-2147483647

[0] MPI startup(): Alltoall: 2: 0-25067 & 0-8

[0] MPI startup(): Alltoall: 4: 25067-36035 & 0-8

[0] MPI startup(): Alltoall: 2: 0-2147483647 & 0-8

[0] MPI startup(): Alltoall: 1: 0-990 & 9-16

[0] MPI startup(): Alltoall: 4: 990-2746 & 9-16

[0] MPI startup(): Alltoall: 2: 2746-23522 & 9-16

[0] MPI startup(): Alltoall: 4: 23522-49617 & 9-16

[0] MPI startup(): Alltoall: 2: 0-2147483647 & 9-16

[0] MPI startup(): Alltoall: 1: 0-836 & 17-32

[0] MPI startup(): Alltoall: 4: 836-7887 & 17-32

[0] MPI startup(): Alltoall: 3: 7887-18323 & 17-32

[0] MPI startup(): Alltoall: 4: 18323-86223 & 17-32

[0] MPI startup(): Alltoall: 3: 0-2147483647 & 17-32

[0] MPI startup(): Alltoall: 1: 0-573 & 33-64

[0] MPI startup(): Alltoall: 4: 573-8039 & 33-64

[0] MPI startup(): Alltoall: 3: 8039-38581 & 33-64

[0] MPI startup(): Alltoall: 4: 38581-126391 & 33-64

[0] MPI startup(): Alltoall: 3: 0-2147483647 & 33-64

[0] MPI startup(): Alltoall: 1: 0-67 & 65-2147483647

[0] MPI startup(): Alltoall: 4: 67-253 & 65-2147483647

[0] MPI startup(): Alltoall: 1: 253-263 & 65-2147483647

[0] MPI startup(): Alltoall: 4: 263-8064 & 65-2147483647

[0] MPI startup(): Alltoall: 3: 8064-10757 & 65-2147483647

[0] MPI startup(): Alltoall: 4: 10757-26438 & 65-2147483647

[0] MPI startup(): Alltoall: 3: 26438-38292 & 65-2147483647

[0] MPI startup(): Alltoall: 4: 0-2147483647 & 65-2147483647

[0] MPI startup(): Alltoallv: 2: 0-2147483647 & 0-8

[0] MPI startup(): Alltoallv: 2: 0-2147483647 & 9-16

[0] MPI startup(): Alltoallv: 1: 0-2147483647 & 17-2147483647

[0] MPI startup(): Alltoallw: 0: 0-2147483647 & 0-2147483647

[0] MPI startup(): Barrier: 5: 0-2147483647 & 0-16

[0] MPI startup(): Barrier: 3: 0-2147483647 & 17-128

[0] MPI startup(): Barrier: 3: 0-2147483647 & 129-512

[0] MPI startup(): Barrier: 1: 0-2147483647 & 513-2147483647

[0] MPI startup(): Bcast: 1: 0-27 & 0-8

[0] MPI startup(): Bcast: 7: 27-11870 & 0-8

[0] MPI startup(): Bcast: 1: 11870-17883 & 0-8

[0] MPI startup(): Bcast: 7: 0-2147483647 & 0-8

[0] MPI startup(): Bcast: 1: 0-1 & 9-16

[0] MPI startup(): Bcast: 7: 1-333 & 9-16

[0] MPI startup(): Bcast: 1: 333-841 & 9-16

[0] MPI startup(): Bcast: 7: 0-2147483647 & 9-16

[0] MPI startup(): Bcast: 7: 0-422 & 17-32

[0] MPI startup(): Bcast: 1: 422-851 & 17-32

[0] MPI startup(): Bcast: 7: 0-2147483647 & 17-32

[0] MPI startup(): Bcast: 7: 0-468 & 33-64

[0] MPI startup(): Bcast: 1: 468-699 & 33-64

[0] MPI startup(): Bcast: 7: 0-2147483647 & 33-64

[0] MPI startup(): Bcast: 7: 0-2147483647 & 65-128

[0] MPI startup(): Bcast: 7: 0-2147483647 & 129-512

[0] MPI startup(): Bcast: 7: 0-2147483647 & 513-2147483647

[0] MPI startup(): Exscan: 0: 0-2147483647 & 0-2147483647

[0] MPI startup(): Gather: 2: 0-2170 & 0-32

[0] MPI startup(): Gather: 3: 0-2147483647 & 0-32

[0] MPI startup(): Gather: 2: 0-2276 & 33-64

[0] MPI startup(): Gather: 3: 0-2147483647 & 33-64

[0] MPI startup(): Gather: 2: 0-860 & 65-2147483647

[0] MPI startup(): Gather: 3: 0-2147483647 & 65-2147483647

[0] MPI startup(): Gatherv: 2: 0-2147483647 & 0-16

[0] MPI startup(): Gatherv: 1: 0-2147483647 & 17-2147483647

[0] MPI startup(): Reduce_scatter: 4: 0-6 & 0-8

[0] MPI startup(): Reduce_scatter: 1: 6-13 & 0-8

[0] MPI startup(): Reduce_scatter: 5: 13-31 & 0-8

[0] MPI startup(): Reduce_scatter: 1: 31-157 & 0-8

[0] MPI startup(): Reduce_scatter: 3: 157-79993 & 0-8

[0] MPI startup(): Reduce_scatter: 2: 79993-520692 & 0-8

[0] MPI startup(): Reduce_scatter: 5: 520692-1516146 & 0-8

[0] MPI startup(): Reduce_scatter: 2: 0-2147483647 & 0-8

[0] MPI startup(): Reduce_scatter: 4: 0-4 & 9-32

[0] MPI startup(): Reduce_scatter: 1: 4-297 & 9-32

[0] MPI startup(): Reduce_scatter: 3: 297-298554 & 9-32

[0] MPI startup(): Reduce_scatter: 4: 0-2147483647 & 9-32

[0] MPI startup(): Reduce_scatter: 4: 0-4 & 33-64

[0] MPI startup(): Reduce_scatter: 1: 4-476 & 33-64

[0] MPI startup(): Reduce_scatter: 3: 476-394066 & 33-64

[0] MPI startup(): Reduce_scatter: 4: 0-2147483647 & 33-64

[0] MPI startup(): Reduce_scatter: 4: 0-4 & 65-128

[0] MPI startup(): Reduce_scatter: 1: 4-1008 & 65-128

[0] MPI startup(): Reduce_scatter: 3: 1008-625824 & 65-128

[0] MPI startup(): Reduce_scatter: 4: 625824-3388985 & 65-128

[0] MPI startup(): Reduce_scatter: 5: 0-2147483647 & 65-128

[0] MPI startup(): Reduce_scatter: 4: 0-4 & 129-512

[0] MPI startup(): Reduce_scatter: 1: 4-6389 & 129-512

[0] MPI startup(): Reduce_scatter: 3: 6389-3255181 & 129-512

[0] MPI startup(): Reduce_scatter: 4: 0-2147483647 & 129-512

[0] MPI startup(): Reduce_scatter: 4: 0-4 & 513-2147483647

[0] MPI startup(): Reduce_scatter: 1: 4-31 & 513-2147483647

[0] MPI startup(): Reduce_scatter: 5: 31-32 & 513-2147483647

[0] MPI startup(): Reduce_scatter: 1: 32-16355 & 513-2147483647

[0] MPI startup(): Reduce_scatter: 3: 0-2147483647 & 513-2147483647

[0] MPI startup(): Reduce: 1: 0-2147483647 & 0-8

[0] MPI startup(): Reduce: 1: 0-2147483647 & 9-16

[0] MPI startup(): Reduce: 3: 0-23 & 17-2147483647

[0] MPI startup(): Reduce: 1: 0-2147483647 & 17-2147483647

[0] MPI startup(): Scan: 0: 0-2147483647 & 0-2147483647

[0] MPI startup(): Scatter: 3: 0-2147483647 & 0-16

[0] MPI startup(): Scatter: 1: 0-1034 & 17-32

[0] MPI startup(): Scatter: 2: 1034-2215 & 17-32

[0] MPI startup(): Scatter: 3: 0-2147483647 & 17-32

[0] MPI startup(): Scatter: 1: 0-162 & 33-2147483647

[0] MPI startup(): Scatter: 2: 162-480 & 33-2147483647

[0] MPI startup(): Scatter: 1: 480-531 & 33-2147483647

[0] MPI startup(): Scatter: 2: 531-1559 & 33-2147483647

[0] MPI startup(): Scatter: 3: 0-2147483647 & 33-2147483647

[0] MPI startup(): Scatterv: 2: 0-2147483647 & 0-2147483647

[6] MPI startup(): Recognition mode: 2, selected platform: 4 own platform: 4
[7] MPI startup(): Recognition mode: 2, selected platform: 4 own platform: 4
[8] MPI startup(): Recognition mode: 2, selected platform: 4 own platform: 4
[10] MPI startup(): Recognition mode: 2, selected platform: 4 own platform: 4
[11] MPI startup(): Recognition mode: 2, selected platform: 4 own platform: 4
[2] MPI startup(): Recognition mode: 2, selected platform: 4 own platform: 4
[3] MPI startup(): Recognition mode: 2, selected platform: 4 own platform: 4
[9] MPI startup(): Recognition mode: 2, selected platform: 4 own platform: 4
[3] MPI startup(): Recognition=2 Platform(code=4 ippn=3 dev=6) Fabric(intra=1 inter=4 flags=0x0)

[5] MPI startup(): Recognition=2 Platform(code=4 ippn=3 dev=6) Fabric(intra=1 inter=4 flags=0x0)

[1] MPI startup(): Recognition=2 Platform(code=4 ippn=3 dev=6) Fabric(intra=1 inter=4 flags=0x0)

[4] MPI startup(): Recognition=2 Platform(code=4 ippn=3 dev=6) Fabric(intra=1 inter=4 flags=0x0)

[2] MPI startup(): Recognition=2 Platform(code=4 ippn=3 dev=6) Fabric(intra=1 inter=4 flags=0x0)

[0] MPI startup(): Rank    Pid      Node name          Pin cpu

[0] MPI startup(): 0       20298    compute-0-3.local  {0,2}

[0] MPI startup(): 1       20299    compute-0-3.local  {4,6}

[0] MPI startup(): 2       20300    compute-0-3.local  {8,10}

[0] MPI startup(): 3       20301    compute-0-3.local  {1,3}

[0] MPI startup(): 4       20302    compute-0-3.local  {5,7}

[0] MPI startup(): 5       20303    compute-0-3.local  {9,11}

[0] MPI startup(): 6       27503    compute-0-5.local  {0,2}

[0] MPI startup(): 7       27504    compute-0-5.local  {4,6}

[0] MPI startup(): 8       27505    compute-0-5.local  {8,10}

[0] MPI startup(): 9       27506    compute-0-5.local  {1,3}

[0] MPI startup(): 10      27507    compute-0-5.local  {5,7}

[0] MPI startup(): 11      27508    compute-0-5.local  {9,11}

[0] MPI startup(): Recognition=2 Platform(code=4 ippn=3 dev=6) Fabric(intra=1 inter=4 flags=0x0)

[0] MPI startup(): Topology split mode = 1

| rank | node | space=2
|  0  |  0  |
|  1  |  0  |
|  2  |  0  |
|  3  |  0  |
|  4  |  0  |
|  5  |  0  |
|  6  |  1  |
|  7  |  1  |
|  8  |  1  |
|  9  |  1  |
|  10  |  1  |
|  11  |  1  |
[0] MPI startup(): I_MPI_DEBUG=100
[0] MPI startup(): I_MPI_INFO_BRAND=Intel(R) Xeon(R) 
[0] MPI startup(): I_MPI_INFO_CACHE1=0,16,1,17,2,18,8,24,9,25,10,26
[0] MPI startup(): I_MPI_INFO_CACHE2=0,16,1,17,2,18,8,24,9,25,10,26
[0] MPI startup(): I_MPI_INFO_CACHE3=0,1,0,1,0,1,0,1,0,1,0,1
[0] MPI startup(): I_MPI_INFO_CACHES=3
[0] MPI startup(): I_MPI_INFO_CACHE_SHARE=2,2,32
[0] MPI startup(): I_MPI_INFO_CACHE_SIZE=32768,262144,12582912
[0] MPI startup(): I_MPI_INFO_CORE=0,0,1,1,2,2,8,8,9,9,10,10
[0] MPI startup(): I_MPI_INFO_C_NAME=Westmere-EP
[0] MPI startup(): I_MPI_INFO_DESC=1342182930
[0] MPI startup(): I_MPI_INFO_FLGB=0
[0] MPI startup(): I_MPI_INFO_FLGC=43967487
[0] MPI startup(): I_MPI_INFO_FLGD=-1075053569
[0] MPI startup(): I_MPI_INFO_LCPU=12
[0] MPI startup(): I_MPI_INFO_MODE=263
[0] MPI startup(): I_MPI_INFO_PACK=0,1,0,1,0,1,0,1,0,1,0,1
[0] MPI startup(): I_MPI_INFO_SERIAL=X5650  
[0] MPI startup(): I_MPI_INFO_SIGN=132802
[0] MPI startup(): I_MPI_INFO_STATE=0
[0] MPI startup(): I_MPI_INFO_THREAD=0,0,0,0,0,0,0,0,0,0,0,0
[0] MPI startup(): I_MPI_INFO_VEND=1
[0] MPI startup(): I_MPI_PIN_DOM=0,2
[0] MPI startup(): I_MPI_PIN_INFO=x0,2
[0] MPI startup(): I_MPI_PIN_MAPPING=6:0 0,1 1,2 4,3 5,4 8,5 9
[6] MPI startup(): Recognition=2 Platform(code=4 ippn=3 dev=6) Fabric(intra=1 inter=4 flags=0x0)

[7] MPI startup(): Recognition=2 Platform(code=4 ippn=3 dev=6) Fabric(intra=1 inter=4 flags=0x0)

[8] MPI startup(): Recognition=2 Platform(code=4 ippn=3 dev=6) Fabric(intra=1 inter=4 flags=0x0)

[9] MPI startup(): Recognition=2 Platform(code=4 ippn=3 dev=6) Fabric(intra=1 inter=4 flags=0x0)

[10] MPI startup(): Recognition=2 Platform(code=4 ippn=3 dev=6) Fabric(intra=1 inter=4 flags=0x0)

[11] MPI startup(): Recognition=2 Platform(code=4 ippn=3 dev=6) Fabric(intra=1 inter=4 flags=0x0)

  ABINIT 
  
  Give name for formatted input file: 
cSi216I3J.rel.in
  Give name for formatted output file:
cSi216I3J.rel.out
  Give root name for generic input files:
cSi216I3J.rel.xi
  Give root name for generic output files:
cSi216I3J.rel.xo
  Give root name for generic temporary files:
cSi216I3J.rel.xe
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

.Starting date : Wed 31 Oct 2012.
- ( at 18h50 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.12.3
  Build target  : x86_64_linux_intel13.0
  Build date    : 20121030
 
 === Compiler Suite === 
  C compiler       : intel13.0
  CFLAGS           :  -g -O2 -vec-report0
  C++ compiler     : gnu13.0
  CXXFLAGS         :  -g -O2 -mtune=native -march=native -mfpmath=sse
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
  LINALG flavor : mkl+scalapack
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

           HAVE_FFT_SERIAL               HAVE_LINALG           HAVE_LINALG_MPI

     HAVE_LINALG_SCALAPACK        HAVE_LINALG_SERIAL                  HAVE_MPI

                 HAVE_MPI2               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...

             HAVE_OS_LINUX                HAVE_TIMER         HAVE_TIMER_ABINIT

            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL         HAVE_TRIO_ETSF_IO

          HAVE_TRIO_NETCDF
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> cSi216I3J.rel.in
- output file    -> cSi216I3J.rel.out
- root for input  files -> cSi216I3J.rel.xi
- root for output files -> cSi216I3J.rel.xo

 instrng :   295 lines of input have been read
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
 npfft, npband, npspinor and npkpt           1           6           1
           2
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           6           6
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
  inkpts : enter
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
  0.00  0.00  0.00  0.00  0.00  0.00
 npfft, npband, npspinor and npkpt           1           6           1
           2
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           6           6
 mpi_enreg%sizecart(3),np_kpt   =           2           2
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0

 getng.F90:199:WARNING
   The second and third dimension of the FFT grid,    0    0  were imposed to be multiple of the number of processors for the FFT,    1
 For input ecut=  1.653750E+01 best grid ngfft=     120     120     120
       max ecut=  1.891412E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   120  120  120
  Augmented FFT divisions ...................   121  121  120
  FFT algorithm .............................   401
  FFT cache size ............................    16
 getmpw: optimal value of mpw=   15421

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     5610.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         2    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =       498  mffmem =         1
P  mgfft =       120   mkmem =         7 mpssoang=         4     mpw =     15421
  mqgrid =      5610   natom =       219    nfft =   1728000    nkpt =        14
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         3  n1xccc =         0  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                    1380.273 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :   1640.554 Mbytes ; DEN or POT disk file :     13.186 Mbytes.
================================================================================

 Biggest array : cg(disk), with    820.2780 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of    820.278 Mbytes, for testing purposes.
 memana : allocated    1380.273 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =   12
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (cSi216I3J.rel.xo_OUT.nc)

        accesswff           1
            acell      3.0648516688E+01  3.0648516688E+01  3.0648516688E+01 Bohr
              amu      2.80855000E+01
           diemac      1.20000000E+01
          dilatmx      1.05000000E+00
             ecut      1.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           fftalg         401
      fft_opt_lob           2
           ionmov           2
           iprcch           6
           istwfk        1    0    1    0    0    0    0    1    0    0
                         0    0    0    1
              ixc           7
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                       2.50000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                      -2.50000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                      -2.50000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
          kptrlen      1.22594067E+02
         kptrlatt      4  0  0   0  4  0   0  0  4
P           mkmem           7
            natom         219
            nband         498
            ngfft         120     120     120
             nkpt          14
           npband           6
            npkpt           2
            nstep          40
             nsym           3
            ntime          40
           ntypat           1
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
          optcell           2
        optforces           1
        paral_kgb           1
           prtcif           1
           prtdos           2
           prtgeo           6
        prtposcar           1
            rprim      9.9997260721E-01  5.2337768142E-03  5.2337768142E-03
                       5.2337768142E-03  9.9997260721E-01  5.2337768142E-03
                       5.2337768142E-03  5.2337768142E-03  9.9997260721E-01
          spgroup         146
           symrel      1  0  0   0  1  0   0  0  1       0  0  1   1  0  0   0  1  0
                       0  1  0   0  0  1   1  0  0
           toldff      5.00000000E-05
            typat      1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
         wfoptalg           4
              wtk        0.01563    0.09375    0.04688    0.09375    0.09375    0.09375
                         0.09375    0.04688    0.03125    0.09375    0.09375    0.09375
                         0.09375    0.01563
           xangst      6.8260599369E-01  6.8260599369E-01  6.8260599369E-01
                       6.7848015132E-01  3.3835278175E+00  3.3835291157E+00
                       3.3835291157E+00  6.7848015132E-01  3.3835278175E+00
                       3.3835278175E+00  3.3835291157E+00  6.7848015132E-01
                       2.0357024821E+00  2.0357024821E+00  2.0357024821E+00
                       2.0269747673E+00  4.7349786752E+00  4.7349800304E+00
                       4.7349800304E+00  2.0269747673E+00  4.7349786752E+00
                       4.7349786752E+00  4.7349800304E+00  2.0269747673E+00
                       6.0700823595E+00  6.8466339688E-01  6.8466037549E-01
                       6.0792511721E+00  3.3210758860E+00  3.3210736456E+00
                       8.7896901145E+00  6.9802096844E-01  3.4000180596E+00
                       8.7896894441E+00  3.4000371781E+00  6.9803256124E-01
                       7.4417035515E+00  2.0055133044E+00  2.0055092500E+00
                       7.4401623761E+00  4.6355235929E+00  4.6355236334E+00
                       1.0159682294E+01  2.0317027393E+00  4.7221857361E+00
                       1.0159675911E+01  4.7222068292E+00  2.0317252603E+00
                       1.1495438897E+01  7.6154599063E-01  7.6154454095E-01
                       1.1507340599E+01  3.4657277136E+00  3.4657273437E+00
                       1.4200406471E+01  7.6854828857E-01  3.4606920707E+00
                       1.4200407425E+01  3.4606926170E+00  7.6854878924E-01
                       1.2852082545E+01  2.1156189505E+00  2.1156178322E+00
                       1.2837910828E+01  4.8505292481E+00  4.8505329579E+00
                       1.5546027887E+01  2.1254794931E+00  4.8178204035E+00
                       1.5546026205E+01  4.8178199937E+00  2.1254828997E+00
                       6.8466037549E-01  6.0700823595E+00  6.8466339688E-01
                       6.9803256124E-01  8.7896894441E+00  3.4000371781E+00
                       3.3210736456E+00  6.0792511721E+00  3.3210758860E+00
                       3.4000180596E+00  8.7896901145E+00  6.9802096844E-01
                       2.0055092500E+00  7.4417035515E+00  2.0055133044E+00
                       2.0317252603E+00  1.0159675911E+01  4.7222068292E+00
                       4.6355236334E+00  7.4401623761E+00  4.6355235929E+00
                       4.7221857361E+00  1.0159682294E+01  2.0317027393E+00
                       6.1027665192E+00  6.1027664656E+00  7.0968818086E-01
                       6.0402906198E+00  8.8070075026E+00  3.3460137626E+00
                       8.8070098687E+00  6.0403201448E+00  3.3460472223E+00
                       8.8346250567E+00  8.8346261296E+00  7.6757839126E-01
                       7.4579998679E+00  7.4580010620E+00  2.0635756087E+00
                       7.3695848611E+00  1.0171555796E+01  4.6728058552E+00
                       1.0171569249E+01  7.3696092104E+00  4.6728533201E+00
                       1.0193821503E+01  1.0193818941E+01  2.1248703780E+00
                       1.1519392771E+01  6.1455274680E+00  7.7269587761E-01
                       1.1529093156E+01  8.8631119729E+00  3.4930088016E+00
                       1.4214084876E+01  6.1718320327E+00  3.4984093272E+00
                       1.4269622982E+01  8.8645237253E+00  8.4062624767E-01
                       1.2873384139E+01  7.5102331273E+00  2.1395089174E+00
                       1.2903911407E+01  1.0212549536E+01  4.8659838463E+00
                       1.5570900112E+01  7.5340044028E+00  4.8487919081E+00
                       1.5597617751E+01  1.0235539779E+01  2.1679497465E+00
                       7.6154454095E-01  1.1495438897E+01  7.6154599063E-01
                       7.6854878924E-01  1.4200407425E+01  3.4606926170E+00
                       3.4657273437E+00  1.1507340599E+01  3.4657277136E+00
                       3.4606920707E+00  1.4200406471E+01  7.6854828857E-01
                       2.1156178322E+00  1.2852082545E+01  2.1156189505E+00
                       2.1254828997E+00  1.5546026205E+01  4.8178199937E+00
                       4.8505329579E+00  1.2837910828E+01  4.8505292481E+00
                       4.8178204035E+00  1.5546027887E+01  2.1254794931E+00
                       6.1455229896E+00  1.1519396334E+01  7.7268836935E-01
                       6.1718327040E+00  1.4214087087E+01  3.4984055449E+00
                       8.8631067289E+00  1.1529091018E+01  3.4929981015E+00
                       8.8645237441E+00  1.4269615727E+01  8.4061215772E-01
                       7.5102303370E+00  1.2873386331E+01  2.1395013147E+00
                       7.5340046021E+00  1.5570904241E+01  4.8487863766E+00
                       1.0212542404E+01  1.2903911074E+01  4.8659771092E+00
                       1.0235541608E+01  1.5597605983E+01  2.1679359055E+00
                       1.1571276726E+01  1.1571272157E+01  8.3219875526E-01
                       1.1577924158E+01  1.4267532083E+01  3.5380172434E+00
                       1.4267537868E+01  1.1577923881E+01  3.5380225005E+00
                       1.4281698990E+01  1.4281698949E+01  8.5144173744E-01
                       1.2922668503E+01  1.2922663755E+01  2.1884288816E+00
                       1.2941705534E+01  1.5630201854E+01  4.8887726441E+00
                       1.5630209206E+01  1.2941702635E+01  4.8887760674E+00
                       1.5635601238E+01  1.5635601374E+01  2.2007066895E+00
                       6.8466339688E-01  6.8466037549E-01  6.0700823595E+00
                       6.9802096844E-01  3.4000180596E+00  8.7896901145E+00
                       3.4000371781E+00  6.9803256124E-01  8.7896894441E+00
                       3.3210758860E+00  3.3210736456E+00  6.0792511721E+00
                       2.0055133044E+00  2.0055092500E+00  7.4417035515E+00
                       2.0317027393E+00  4.7221857361E+00  1.0159682294E+01
                       4.7222068292E+00  2.0317252603E+00  1.0159675911E+01
                       4.6355235929E+00  4.6355236334E+00  7.4401623761E+00
                       6.1027664656E+00  7.0968818086E-01  6.1027665192E+00
                       6.0403201448E+00  3.3460472223E+00  8.8070098687E+00
                       8.8346261296E+00  7.6757839126E-01  8.8346250567E+00
                       8.8070075026E+00  3.3460137626E+00  6.0402906198E+00
                       7.4580010620E+00  2.0635756087E+00  7.4579998679E+00
                       7.3696092104E+00  4.6728533201E+00  1.0171569249E+01
                       1.0193818941E+01  2.1248703780E+00  1.0193821503E+01
                       1.0171555796E+01  4.6728058552E+00  7.3695848611E+00
                       1.1519396334E+01  7.7268836935E-01  6.1455229896E+00
                       1.1529091018E+01  3.4929981015E+00  8.8631067289E+00
                       1.4269615727E+01  8.4061215772E-01  8.8645237441E+00
                       1.4214087087E+01  3.4984055449E+00  6.1718327040E+00
                       1.2873386331E+01  2.1395013147E+00  7.5102303370E+00
                       1.2903911074E+01  4.8659771092E+00  1.0212542404E+01
                       1.5597605983E+01  2.1679359055E+00  1.0235541608E+01
                       1.5570904241E+01  4.8487863766E+00  7.5340046021E+00
                       7.0968818086E-01  6.1027665192E+00  6.1027664656E+00
                       7.6757839126E-01  8.8346250567E+00  8.8346261296E+00
                       3.3460137626E+00  6.0402906198E+00  8.8070075026E+00
                       3.3460472223E+00  8.8070098687E+00  6.0403201448E+00
                       2.0635756087E+00  7.4579998679E+00  7.4580010620E+00
                       2.1248703780E+00  1.0193821503E+01  1.0193818941E+01
                       4.6728058552E+00  7.3695848611E+00  1.0171555796E+01
                       4.6728533201E+00  1.0171569249E+01  7.3696092104E+00
                       5.7438421678E+00  5.7438421678E+00  5.7438421678E+00
                       5.6614269306E+00  8.3654602607E+00  8.3654744427E+00
                       8.3654744427E+00  5.6614269306E+00  8.3654602607E+00
                       8.3654602607E+00  8.3654744427E+00  5.6614269306E+00
                       7.0189185354E+00  7.0189185354E+00  7.0189185354E+00
                       7.9902134217E+00  1.0691377123E+01  1.0691371367E+01
                       1.0691371367E+01  7.9902134217E+00  1.0691377123E+01
                       1.0691377123E+01  1.0691371367E+01  7.9902134217E+00
                       1.1487634251E+01  6.2204045506E+00  6.2204250878E+00
                       1.1937350808E+01  9.1236579727E+00  9.1236615765E+00
                       1.4259076494E+01  6.2325102065E+00  8.8967310392E+00
                       1.4259069734E+01  8.8967291330E+00  6.2325169702E+00
                       1.2873198093E+01  7.5942578524E+00  7.5942684721E+00
                       1.3224298088E+01  1.0439138366E+01  1.0439123026E+01
                       1.5634159919E+01  7.5759960068E+00  1.0266182335E+01
                       1.5634160775E+01  1.0266181087E+01  7.5759966624E+00
                       7.7269587761E-01  1.1519392771E+01  6.1455274680E+00
                       8.4062624767E-01  1.4269622982E+01  8.8645237253E+00
                       3.4930088016E+00  1.1529093156E+01  8.8631119729E+00
                       3.4984093272E+00  1.4214084876E+01  6.1718320327E+00
                       2.1395089174E+00  1.2873384139E+01  7.5102331273E+00
                       2.1679497465E+00  1.5597617751E+01  1.0235539779E+01
                       4.8659838463E+00  1.2903911407E+01  1.0212549536E+01
                       4.8487919081E+00  1.5570900112E+01  7.5340044028E+00
                       6.2204250878E+00  1.1487634251E+01  6.2204045506E+00
                       6.2325169702E+00  1.4259069734E+01  8.8967291330E+00
                       9.1236615765E+00  1.1937350808E+01  9.1236579727E+00
                       8.8967310392E+00  1.4259076494E+01  6.2325102065E+00
                       7.5942684721E+00  1.2873198093E+01  7.5942578524E+00
                       7.5759966624E+00  1.5634160775E+01  1.0266181087E+01
                       1.0439123026E+01  1.3224298088E+01  1.0439138366E+01
                       1.0266182335E+01  1.5634159919E+01  7.5759960068E+00
                       1.1693859026E+01  1.1693866989E+01  6.2023026535E+00
                       1.1718630105E+01  1.4417190923E+01  8.9452454644E+00
                       1.4417201468E+01  1.1718641752E+01  8.9452398759E+00
                       1.4343562012E+01  1.4343558523E+01  6.2391552036E+00
                       1.3023697274E+01  1.3023699096E+01  7.5903019281E+00
                       1.3041846679E+01  1.5736482150E+01  1.0310159063E+01
                       1.5736489189E+01  1.3041858071E+01  1.0310156786E+01
                       1.5672959218E+01  1.5672955505E+01  7.6076710061E+00
                       7.6154599063E-01  7.6154454095E-01  1.1495438897E+01
                       7.6854828857E-01  3.4606920707E+00  1.4200406471E+01
                       3.4606926170E+00  7.6854878924E-01  1.4200407425E+01
                       3.4657277136E+00  3.4657273437E+00  1.1507340599E+01
                       2.1156189505E+00  2.1156178322E+00  1.2852082545E+01
                       2.1254794931E+00  4.8178204035E+00  1.5546027887E+01
                       4.8178199937E+00  2.1254828997E+00  1.5546026205E+01
                       4.8505292481E+00  4.8505329579E+00  1.2837910828E+01
                       6.1455274680E+00  7.7269587761E-01  1.1519392771E+01
                       6.1718320327E+00  3.4984093272E+00  1.4214084876E+01
                       8.8645237253E+00  8.4062624767E-01  1.4269622982E+01
                       8.8631119729E+00  3.4930088016E+00  1.1529093156E+01
                       7.5102331273E+00  2.1395089174E+00  1.2873384139E+01
                       7.5340044028E+00  4.8487919081E+00  1.5570900112E+01
                       1.0235539779E+01  2.1679497465E+00  1.5597617751E+01
                       1.0212549536E+01  4.8659838463E+00  1.2903911407E+01
                       1.1571272157E+01  8.3219875526E-01  1.1571276726E+01
                       1.1577923881E+01  3.5380225005E+00  1.4267537868E+01
                       1.4281698949E+01  8.5144173744E-01  1.4281698990E+01
                       1.4267532083E+01  3.5380172434E+00  1.1577924158E+01
                       1.2922663755E+01  2.1884288816E+00  1.2922668503E+01
                       1.2941702635E+01  4.8887760674E+00  1.5630209206E+01
                       1.5635601374E+01  2.2007066895E+00  1.5635601238E+01
                       1.5630201854E+01  4.8887726441E+00  1.2941705534E+01
                       7.7268836935E-01  6.1455229896E+00  1.1519396334E+01
                       8.4061215772E-01  8.8645237441E+00  1.4269615727E+01
                       3.4984055449E+00  6.1718327040E+00  1.4214087087E+01
                       3.4929981015E+00  8.8631067289E+00  1.1529091018E+01
                       2.1395013147E+00  7.5102303370E+00  1.2873386331E+01
                       2.1679359055E+00  1.0235541608E+01  1.5597605983E+01
                       4.8487863766E+00  7.5340046021E+00  1.5570904241E+01
                       4.8659771092E+00  1.0212542404E+01  1.2903911074E+01
                       6.2204045506E+00  6.2204250878E+00  1.1487634251E+01
                       6.2325102065E+00  8.8967310392E+00  1.4259076494E+01
                       8.8967291330E+00  6.2325169702E+00  1.4259069734E+01
                       9.1236579727E+00  9.1236615765E+00  1.1937350808E+01
                       7.5942578524E+00  7.5942684721E+00  1.2873198093E+01
                       7.5759960068E+00  1.0266182335E+01  1.5634159919E+01
                       1.0266181087E+01  7.5759966624E+00  1.5634160775E+01
                       1.0439138366E+01  1.0439123026E+01  1.3224298088E+01
                       1.1693866989E+01  6.2023026535E+00  1.1693859026E+01
                       1.1718641752E+01  8.9452398759E+00  1.4417201468E+01
                       1.4343558523E+01  6.2391552036E+00  1.4343562012E+01
                       1.4417190923E+01  8.9452454644E+00  1.1718630105E+01
                       1.3023699096E+01  7.5903019281E+00  1.3023697274E+01
                       1.3041858071E+01  1.0310156786E+01  1.5736489189E+01
                       1.5672955505E+01  7.6076710061E+00  1.5672959218E+01
                       1.5736482150E+01  1.0310159063E+01  1.3041846679E+01
                       8.3219875526E-01  1.1571276726E+01  1.1571272157E+01
                       8.5144173744E-01  1.4281698990E+01  1.4281698949E+01
                       3.5380172434E+00  1.1577924158E+01  1.4267532083E+01
                       3.5380225005E+00  1.4267537868E+01  1.1577923881E+01
                       2.1884288816E+00  1.2922668503E+01  1.2922663755E+01
                       2.2007066895E+00  1.5635601238E+01  1.5635601374E+01
                       4.8887726441E+00  1.2941705534E+01  1.5630201854E+01
                       4.8887760674E+00  1.5630209206E+01  1.2941702635E+01
                       6.2023026535E+00  1.1693859026E+01  1.1693866989E+01
                       6.2391552036E+00  1.4343562012E+01  1.4343558523E+01
                       8.9452454644E+00  1.1718630105E+01  1.4417190923E+01
                       8.9452398759E+00  1.4417201468E+01  1.1718641752E+01
                       7.5903019281E+00  1.3023697274E+01  1.3023699096E+01
                       7.6076710061E+00  1.5672959218E+01  1.5672955505E+01
                       1.0310159063E+01  1.3041846679E+01  1.5736482150E+01
                       1.0310156786E+01  1.5736489189E+01  1.3041858071E+01
                       1.1708227768E+01  1.1708227768E+01  1.1708227768E+01
                       1.1665219262E+01  1.4378114621E+01  1.4378115637E+01
                       1.4378115637E+01  1.1665219262E+01  1.4378114621E+01
                       1.4378114621E+01  1.4378115637E+01  1.1665219262E+01
                       1.3046399088E+01  1.3046399088E+01  1.3046399088E+01
                       1.3021759976E+01  1.5723086123E+01  1.5723086014E+01
                       1.5723086014E+01  1.3021759976E+01  1.5723086123E+01
                       1.5723086123E+01  1.5723086014E+01  1.3021759976E+01
                       9.1597681359E+00  7.5432118759E+00  9.1594687482E+00
                       7.5432118759E+00  9.1594687482E+00  9.1597681359E+00
                       9.1594687482E+00  9.1597681359E+00  7.5432118759E+00
            xcart      1.2899383847E+00  1.2899383847E+00  1.2899383847E+00
                       1.2821416726E+00  6.3939409381E+00  6.3939433914E+00
                       6.3939433914E+00  1.2821416726E+00  6.3939409381E+00
                       6.3939409381E+00  6.3939433914E+00  1.2821416726E+00
                       3.8469201792E+00  3.8469201792E+00  3.8469201792E+00
                       3.8304271884E+00  8.9478129412E+00  8.9478155022E+00
                       8.9478155022E+00  3.8304271884E+00  8.9478129412E+00
                       8.9478129412E+00  8.9478155022E+00  3.8304271884E+00
                       1.1470793264E+01  1.2938263133E+00  1.2938206037E+00
                       1.1488119808E+01  6.2759238911E+00  6.2759196573E+00
                       1.6610107109E+01  1.3190684654E+00  6.4251029795E+00
                       1.6610105843E+01  6.4251391083E+00  1.3190903726E+00
                       1.4062781674E+01  3.7898709012E+00  3.7898632394E+00
                       1.4059869275E+01  8.7598700730E+00  8.7598701496E+00
                       1.9199017133E+01  3.8393617607E+00  8.9236377899E+00
                       1.9199005070E+01  8.9236776500E+00  3.8394043192E+00
                       2.1723231292E+01  1.4391133599E+00  1.4391106204E+00
                       2.1745722251E+01  6.5492762299E+00  6.5492755308E+00
                       2.6834879205E+01  1.4523457853E+00  6.5397602438E+00
                       2.6834881009E+01  6.5397612762E+00  1.4523467314E+00
                       2.4286916248E+01  3.9979404180E+00  3.9979383046E+00
                       2.4260135584E+01  9.1661718784E+00  9.1661788889E+00
                       2.9377735161E+01  4.0165741430E+00  9.1043611200E+00
                       2.9377731982E+01  9.1043603457E+00  4.0165805805E+00
                       1.2938206037E+00  1.1470793264E+01  1.2938263133E+00
                       1.3190903726E+00  1.6610105843E+01  6.4251391083E+00
                       6.2759196573E+00  1.1488119808E+01  6.2759238911E+00
                       6.4251029795E+00  1.6610107109E+01  1.3190684654E+00
                       3.7898632394E+00  1.4062781674E+01  3.7898709012E+00
                       3.8394043192E+00  1.9199005070E+01  8.9236776500E+00
                       8.7598701496E+00  1.4059869275E+01  8.7598700730E+00
                       8.9236377899E+00  1.9199017133E+01  3.8393617607E+00
                       1.1532557374E+01  1.1532557273E+01  1.3411163016E+00
                       1.1414495034E+01  1.6642832230E+01  6.3230496482E+00
                       1.6642836701E+01  1.1414550829E+01  6.3231128779E+00
                       1.6695021844E+01  1.6695023871E+01  1.4505129450E+00
                       1.4093577249E+01  1.4093579506E+01  3.8995927549E+00
                       1.3926497101E+01  1.9221454800E+01  8.8303233385E+00
                       1.9221480222E+01  1.3926543114E+01  8.8304130341E+00
                       1.9263530888E+01  1.9263526047E+01  4.0154230823E+00
                       2.1768497555E+01  1.1613363857E+01  1.4601835927E+00
                       2.1786828625E+01  1.6748854314E+01  6.6008300147E+00
                       2.6860727646E+01  1.1663072280E+01  6.6110355291E+00
                       2.6965679456E+01  1.6751522139E+01  1.5885533882E+00
                       2.4327170425E+01  1.4192283805E+01  4.0430859127E+00
                       2.4384858602E+01  1.9298921741E+01  9.1953768365E+00
                       2.9424736855E+01  1.4237205005E+01  9.1628887817E+00
                       2.9475225875E+01  1.9342367005E+01  4.0968312908E+00
                       1.4391106204E+00  2.1723231292E+01  1.4391133599E+00
                       1.4523467314E+00  2.6834881009E+01  6.5397612762E+00
                       6.5492755308E+00  2.1745722251E+01  6.5492762299E+00
                       6.5397602438E+00  2.6834879205E+01  1.4523457853E+00
                       3.9979383046E+00  2.4286916248E+01  3.9979404180E+00
                       4.0165805805E+00  2.9377731982E+01  9.1043603457E+00
                       9.1661788889E+00  2.4260135584E+01  9.1661718784E+00
                       9.1043611200E+00  2.9377735161E+01  4.0165741430E+00
                       1.1613355394E+01  2.1768504288E+01  1.4601694041E+00
                       1.1663073549E+01  2.6860731823E+01  6.6110283817E+00
                       1.6748844404E+01  2.1786824585E+01  6.6008097945E+00
                       1.6751522175E+01  2.6965665745E+01  1.5885267621E+00
                       1.4192278532E+01  2.4327174568E+01  4.0430715458E+00
                       1.4237205382E+01  2.9424744657E+01  9.1628783287E+00
                       1.9298908265E+01  2.4384857973E+01  9.1953641053E+00
                       1.9342370461E+01  2.9475203637E+01  4.0968051350E+00
                       2.1866544019E+01  2.1866535386E+01  1.5726277356E+00
                       2.1879105845E+01  2.6961728230E+01  6.6858836435E+00
                       2.6961739160E+01  2.1879105323E+01  6.6858935780E+00
                       2.6988499804E+01  2.6988499726E+01  1.6089917019E+00
                       2.4420304378E+01  2.4420295404E+01  4.1355312476E+00
                       2.4456279152E+01  2.9536800906E+01  9.2384414233E+00
                       2.9536814799E+01  2.4456273673E+01  9.2384478923E+00
                       2.9547004263E+01  2.9547004520E+01  4.1587329419E+00
                       1.2938263133E+00  1.2938206037E+00  1.1470793264E+01
                       1.3190684654E+00  6.4251029795E+00  1.6610107109E+01
                       6.4251391083E+00  1.3190903726E+00  1.6610105843E+01
                       6.2759238911E+00  6.2759196573E+00  1.1488119808E+01
                       3.7898709012E+00  3.7898632394E+00  1.4062781674E+01
                       3.8393617607E+00  8.9236377899E+00  1.9199017133E+01
                       8.9236776500E+00  3.8394043192E+00  1.9199005070E+01
                       8.7598700730E+00  8.7598701496E+00  1.4059869275E+01
                       1.1532557273E+01  1.3411163016E+00  1.1532557374E+01
                       1.1414550829E+01  6.3231128779E+00  1.6642836701E+01
                       1.6695023871E+01  1.4505129450E+00  1.6695021844E+01
                       1.6642832230E+01  6.3230496482E+00  1.1414495034E+01
                       1.4093579506E+01  3.8995927549E+00  1.4093577249E+01
                       1.3926543114E+01  8.8304130341E+00  1.9221480222E+01
                       1.9263526047E+01  4.0154230823E+00  1.9263530888E+01
                       1.9221454800E+01  8.8303233385E+00  1.3926497101E+01
                       2.1768504288E+01  1.4601694041E+00  1.1613355394E+01
                       2.1786824585E+01  6.6008097945E+00  1.6748844404E+01
                       2.6965665745E+01  1.5885267621E+00  1.6751522175E+01
                       2.6860731823E+01  6.6110283817E+00  1.1663073549E+01
                       2.4327174568E+01  4.0430715458E+00  1.4192278532E+01
                       2.4384857973E+01  9.1953641053E+00  1.9298908265E+01
                       2.9475203637E+01  4.0968051350E+00  1.9342370461E+01
                       2.9424744657E+01  9.1628783287E+00  1.4237205382E+01
                       1.3411163016E+00  1.1532557374E+01  1.1532557273E+01
                       1.4505129450E+00  1.6695021844E+01  1.6695023871E+01
                       6.3230496482E+00  1.1414495034E+01  1.6642832230E+01
                       6.3231128779E+00  1.6642836701E+01  1.1414550829E+01
                       3.8995927549E+00  1.4093577249E+01  1.4093579506E+01
                       4.0154230823E+00  1.9263530888E+01  1.9263526047E+01
                       8.8303233385E+00  1.3926497101E+01  1.9221454800E+01
                       8.8304130341E+00  1.9221480222E+01  1.3926543114E+01
                       1.0854288648E+01  1.0854288648E+01  1.0854288648E+01
                       1.0698546420E+01  1.5808428868E+01  1.5808455668E+01
                       1.5808455668E+01  1.0698546420E+01  1.5808428868E+01
                       1.5808428868E+01  1.5808455668E+01  1.0698546420E+01
                       1.3263833781E+01  1.3263833781E+01  1.3263833781E+01
                       1.5099315110E+01  2.0203774746E+01  2.0203763869E+01
                       2.0203763869E+01  1.5099315110E+01  2.0203774746E+01
                       2.0203774746E+01  2.0203763869E+01  1.5099315110E+01
                       2.1708482649E+01  1.1754861036E+01  1.1754899846E+01
                       2.2558323778E+01  1.7241214898E+01  1.7241221709E+01
                       2.6945749482E+01  1.1777737411E+01  1.6812385142E+01
                       2.6945736706E+01  1.6812381540E+01  1.1777750192E+01
                       2.4326818849E+01  1.4351067524E+01  1.4351087592E+01
                       2.4990301686E+01  1.9727112574E+01  1.9727083587E+01
                       2.9544280564E+01  1.4316557637E+01  1.9400273042E+01
                       2.9544282183E+01  1.9400270685E+01  1.4316558876E+01
                       1.4601835927E+00  2.1768497555E+01  1.1613363857E+01
                       1.5885533882E+00  2.6965679456E+01  1.6751522139E+01
                       6.6008300147E+00  2.1786828625E+01  1.6748854314E+01
                       6.6110355291E+00  2.6860727646E+01  1.1663072280E+01
                       4.0430859127E+00  2.4327170425E+01  1.4192283805E+01
                       4.0968312908E+00  2.9475225875E+01  1.9342367005E+01
                       9.1953768365E+00  2.4384858602E+01  1.9298921741E+01
                       9.1628887817E+00  2.9424736855E+01  1.4237205005E+01
                       1.1754899846E+01  2.1708482649E+01  1.1754861036E+01
                       1.1777750192E+01  2.6945736706E+01  1.6812381540E+01
                       1.7241221709E+01  2.2558323778E+01  1.7241214898E+01
                       1.6812385142E+01  2.6945749482E+01  1.1777737411E+01
                       1.4351087592E+01  2.4326818849E+01  1.4351067524E+01
                       1.4316558876E+01  2.9544282183E+01  1.9400270685E+01
                       1.9727083587E+01  2.4990301686E+01  1.9727112574E+01
                       1.9400273042E+01  2.9544280564E+01  1.4316557637E+01
                       2.2098190995E+01  2.2098206043E+01  1.1720653408E+01
                       2.2145001552E+01  2.7244542450E+01  1.6904064119E+01
                       2.7244562377E+01  2.2145023560E+01  1.6904053558E+01
                       2.7105403972E+01  2.7105397379E+01  1.1790294635E+01
                       2.4611221086E+01  2.4611224528E+01  1.4343591910E+01
                       2.4645518491E+01  2.9737641559E+01  1.9483377016E+01
                       2.9737654861E+01  2.4645540018E+01  1.9483372713E+01
                       2.9617600615E+01  2.9617593597E+01  1.4376414711E+01
                       1.4391133599E+00  1.4391106204E+00  2.1723231292E+01
                       1.4523457853E+00  6.5397602438E+00  2.6834879205E+01
                       6.5397612762E+00  1.4523467314E+00  2.6834881009E+01
                       6.5492762299E+00  6.5492755308E+00  2.1745722251E+01
                       3.9979404180E+00  3.9979383046E+00  2.4286916248E+01
                       4.0165741430E+00  9.1043611200E+00  2.9377735161E+01
                       9.1043603457E+00  4.0165805805E+00  2.9377731982E+01
                       9.1661718784E+00  9.1661788889E+00  2.4260135584E+01
                       1.1613363857E+01  1.4601835927E+00  2.1768497555E+01
                       1.1663072280E+01  6.6110355291E+00  2.6860727646E+01
                       1.6751522139E+01  1.5885533882E+00  2.6965679456E+01
                       1.6748854314E+01  6.6008300147E+00  2.1786828625E+01
                       1.4192283805E+01  4.0430859127E+00  2.4327170425E+01
                       1.4237205005E+01  9.1628887817E+00  2.9424736855E+01
                       1.9342367005E+01  4.0968312908E+00  2.9475225875E+01
                       1.9298921741E+01  9.1953768365E+00  2.4384858602E+01
                       2.1866535386E+01  1.5726277356E+00  2.1866544019E+01
                       2.1879105323E+01  6.6858935780E+00  2.6961739160E+01
                       2.6988499726E+01  1.6089917019E+00  2.6988499804E+01
                       2.6961728230E+01  6.6858836435E+00  2.1879105845E+01
                       2.4420295404E+01  4.1355312476E+00  2.4420304378E+01
                       2.4456273673E+01  9.2384478923E+00  2.9536814799E+01
                       2.9547004520E+01  4.1587329419E+00  2.9547004263E+01
                       2.9536800906E+01  9.2384414233E+00  2.4456279152E+01
                       1.4601694041E+00  1.1613355394E+01  2.1768504288E+01
                       1.5885267621E+00  1.6751522175E+01  2.6965665745E+01
                       6.6110283817E+00  1.1663073549E+01  2.6860731823E+01
                       6.6008097945E+00  1.6748844404E+01  2.1786824585E+01
                       4.0430715458E+00  1.4192278532E+01  2.4327174568E+01
                       4.0968051350E+00  1.9342370461E+01  2.9475203637E+01
                       9.1628783287E+00  1.4237205382E+01  2.9424744657E+01
                       9.1953641053E+00  1.9298908265E+01  2.4384857973E+01
                       1.1754861036E+01  1.1754899846E+01  2.1708482649E+01
                       1.1777737411E+01  1.6812385142E+01  2.6945749482E+01
                       1.6812381540E+01  1.1777750192E+01  2.6945736706E+01
                       1.7241214898E+01  1.7241221709E+01  2.2558323778E+01
                       1.4351067524E+01  1.4351087592E+01  2.4326818849E+01
                       1.4316557637E+01  1.9400273042E+01  2.9544280564E+01
                       1.9400270685E+01  1.4316558876E+01  2.9544282183E+01
                       1.9727112574E+01  1.9727083587E+01  2.4990301686E+01
                       2.2098206043E+01  1.1720653408E+01  2.2098190995E+01
                       2.2145023560E+01  1.6904053558E+01  2.7244562377E+01
                       2.7105397379E+01  1.1790294635E+01  2.7105403972E+01
                       2.7244542450E+01  1.6904064119E+01  2.2145001552E+01
                       2.4611224528E+01  1.4343591910E+01  2.4611221086E+01
                       2.4645540018E+01  1.9483372713E+01  2.9737654861E+01
                       2.9617593597E+01  1.4376414711E+01  2.9617600615E+01
                       2.9737641559E+01  1.9483377016E+01  2.4645518491E+01
                       1.5726277356E+00  2.1866544019E+01  2.1866535386E+01
                       1.6089917019E+00  2.6988499804E+01  2.6988499726E+01
                       6.6858836435E+00  2.1879105845E+01  2.6961728230E+01
                       6.6858935780E+00  2.6961739160E+01  2.1879105323E+01
                       4.1355312476E+00  2.4420304378E+01  2.4420295404E+01
                       4.1587329419E+00  2.9547004263E+01  2.9547004520E+01
                       9.2384414233E+00  2.4456279152E+01  2.9536800906E+01
                       9.2384478923E+00  2.9536814799E+01  2.4456273673E+01
                       1.1720653408E+01  2.2098190995E+01  2.2098206043E+01
                       1.1790294635E+01  2.7105403972E+01  2.7105397379E+01
                       1.6904064119E+01  2.2145001552E+01  2.7244542450E+01
                       1.6904053558E+01  2.7244562377E+01  2.2145023560E+01
                       1.4343591910E+01  2.4611221086E+01  2.4611224528E+01
                       1.4376414711E+01  2.9617600615E+01  2.9617593597E+01
                       1.9483377016E+01  2.4645518491E+01  2.9737641559E+01
                       1.9483372713E+01  2.9737654861E+01  2.4645540018E+01
                       2.2125343982E+01  2.2125343982E+01  2.2125343982E+01
                       2.2044069684E+01  2.7170698940E+01  2.7170700861E+01
                       2.7170700861E+01  2.2044069684E+01  2.7170698940E+01
                       2.7170698940E+01  2.7170700861E+01  2.2044069684E+01
                       2.4654121297E+01  2.4654121297E+01  2.4654121297E+01
                       2.4607560122E+01  2.9712326737E+01  2.9712326531E+01
                       2.9712326531E+01  2.4607560122E+01  2.9712326737E+01
                       2.9712326737E+01  2.9712326531E+01  2.4607560122E+01
                       1.7309453218E+01  1.4254604608E+01  1.7308887457E+01
                       1.4254604608E+01  1.7308887457E+01  1.7309453218E+01
                       1.7308887457E+01  1.7309453218E+01  1.4254604608E+01
             xred      4.1653251287E-02  4.1653251287E-02  4.1653251287E-02
                       3.9664527990E-02  2.0733448746E-01  2.0733456793E-01
                       2.0733456793E-01  3.9664527990E-02  2.0733448746E-01
                       2.0733448746E-01  2.0733456793E-01  3.9664527990E-02
                       1.2422045487E-01  1.2422045487E-01  1.2422045487E-01
                       1.2194902277E-01  2.8980222224E-01  2.8980230624E-01
                       2.8980230624E-01  1.2194902277E-01  2.8980222224E-01
                       2.8980222224E-01  2.8980230624E-01  1.2194902277E-01
                       3.7386013557E-01  4.0049759332E-02  4.0049572054E-02
                       3.7273262398E-01  2.0176959652E-01  2.0176945765E-01
                       5.4068335563E-01  3.9128482963E-02  2.0660935527E-01
                       5.4068330443E-01  2.0661053067E-01  3.9129191887E-02
                       4.5759033525E-01  1.2063294637E-01  1.2063269506E-01
                       4.5580652308E-01  2.8196349732E-01  2.8196349983E-01
                       6.2430856223E-01  1.2050302138E-01  2.8727020285E-01
                       6.2430815461E-01  2.8727149833E-01  1.2050440537E-01
                       7.0835477853E-01  4.3024030012E-02  4.3023940155E-02
                       7.0735226932E-01  2.0890008916E-01  2.0890006623E-01
                       8.7428248526E-01  4.1720772891E-02  2.0859089665E-01
                       8.7428254378E-01  2.0859092987E-01  4.1720803282E-02
                       7.9114008370E-01  1.2564999334E-01  1.2564992402E-01
                       7.8851007542E-01  2.9341937422E-01  2.9341960417E-01
                       9.5638622750E-01  1.2452554223E-01  2.9140788481E-01
                       9.5638612282E-01  2.9140785899E-01  1.2452575296E-01
                       4.0049572054E-02  3.7386013557E-01  4.0049759332E-02
                       3.9129191887E-02  5.4068330443E-01  2.0661053067E-01
                       2.0176945765E-01  3.7273262398E-01  2.0176959652E-01
                       2.0660935527E-01  5.4068335563E-01  3.9128482963E-02
                       1.2063269506E-01  4.5759033525E-01  1.2063294637E-01
                       1.2050440537E-01  6.2430815461E-01  2.8727149833E-01
                       2.8196349983E-01  4.5580652308E-01  2.8196349732E-01
                       2.8727020285E-01  6.2430856223E-01  1.2050302138E-01
                       3.7412797391E-01  3.7412797059E-01  3.9842838123E-02
                       3.6856088231E-01  5.4005335300E-01  2.0155854180E-01
                       5.4005347868E-01  3.6856269141E-01  2.0156059479E-01
                       5.4168701882E-01  5.4168708532E-01  4.1658348588E-02
                       4.5682600241E-01  4.5682607643E-01  1.2245744092E-01
                       4.4966513539E-01  6.2334279697E-01  2.8250770143E-01
                       6.2334360343E-01  4.4966661728E-01  2.8251061612E-01
                       6.2462706009E-01  6.2462690131E-01  1.2448034365E-01
                       7.0809969110E-01  3.7500545811E-01  4.1975298875E-02
                       7.0695196010E-01  5.4170350165E-01  2.0884246103E-01
                       8.7337905473E-01  3.7488720736E-01  2.0917749278E-01
                       8.7679249578E-01  5.4176225412E-01  4.4408147691E-02
                       7.9071394460E-01  4.5828382740E-01  1.2538429226E-01
                       7.9085338628E-01  6.2403172858E-01  2.9262963771E-01
                       9.5617352504E-01  4.5801373484E-01  2.9157324073E-01
                       9.5781437228E-01  6.2545076649E-01  1.2538841612E-01
                       4.3023940155E-02  7.0835477853E-01  4.3024030012E-02
                       4.1720803282E-02  8.7428254378E-01  2.0859092987E-01
                       2.0890006623E-01  7.0735226932E-01  2.0890008916E-01
                       2.0859089665E-01  8.7428248526E-01  4.1720772891E-02
                       1.2564992402E-01  7.9114008370E-01  1.2564999334E-01
                       1.2452575296E-01  9.5638612282E-01  2.9140785899E-01
                       2.9341960417E-01  7.8851007542E-01  2.9341937422E-01
                       2.9140788481E-01  9.5638622750E-01  1.2452554223E-01
                       3.7500518322E-01  7.0809991465E-01  4.1974836187E-02
                       3.7488724926E-01  8.7337919202E-01  2.0917725863E-01
                       5.4170318241E-01  7.0695183341E-01  2.0884180360E-01
                       5.4176226213E-01  8.7679205292E-01  4.4407281185E-02
                       4.5828365708E-01  7.9071408311E-01  1.2538382365E-01
                       4.5801374758E-01  9.5617378136E-01  2.9157289825E-01
                       6.2403129110E-01  7.9085337022E-01  2.9262922468E-01
                       6.2545088749E-01  9.5781365050E-01  1.2538756583E-01
                       7.0953792533E-01  7.0953764216E-01  4.3885785242E-02
                       7.0821343999E-01  8.7492638097E-01  2.0986700296E-01
                       8.7492673604E-01  7.0821341942E-01  2.0986732536E-01
                       8.7579443362E-01  8.7579443107E-01  4.3331953412E-02
                       7.9199955255E-01  7.9199925821E-01  1.2664731317E-01
                       7.9143718437E-01  9.5808122345E-01  2.9228334387E-01
                       9.5808167660E-01  7.9143700212E-01  2.9228355353E-01
                       9.5841229416E-01  9.5841230260E-01  1.2566237534E-01
                       4.0049759332E-02  4.0049572054E-02  3.7386013557E-01
                       3.9128482963E-02  2.0660935527E-01  5.4068335563E-01
                       2.0661053067E-01  3.9129191887E-02  5.4068330443E-01
                       2.0176959652E-01  2.0176945765E-01  3.7273262398E-01
                       1.2063294637E-01  1.2063269506E-01  4.5759033525E-01
                       1.2050302138E-01  2.8727020285E-01  6.2430856223E-01
                       2.8727149833E-01  1.2050440537E-01  6.2430815461E-01
                       2.8196349732E-01  2.8196349983E-01  4.5580652308E-01
                       3.7412797059E-01  3.9842838123E-02  3.7412797391E-01
                       3.6856269141E-01  2.0156059479E-01  5.4005347868E-01
                       5.4168708532E-01  4.1658348588E-02  5.4168701882E-01
                       5.4005335300E-01  2.0155854180E-01  3.6856088231E-01
                       4.5682607643E-01  1.2245744092E-01  4.5682600241E-01
                       4.4966661728E-01  2.8251061612E-01  6.2334360343E-01
                       6.2462690131E-01  1.2448034365E-01  6.2462706009E-01
                       6.2334279697E-01  2.8250770143E-01  4.4966513539E-01
                       7.0809991465E-01  4.1974836187E-02  3.7500518322E-01
                       7.0695183341E-01  2.0884180360E-01  5.4170318241E-01
                       8.7679205292E-01  4.4407281185E-02  5.4176226213E-01
                       8.7337919202E-01  2.0917725863E-01  3.7488724926E-01
                       7.9071408311E-01  1.2538382365E-01  4.5828365708E-01
                       7.9085337022E-01  2.9262922468E-01  6.2403129110E-01
                       9.5781365050E-01  1.2538756583E-01  6.2545088749E-01
                       9.5617378136E-01  2.9157289825E-01  4.5801374758E-01
                       3.9842838123E-02  3.7412797391E-01  3.7412797059E-01
                       4.1658348588E-02  5.4168701882E-01  5.4168708532E-01
                       2.0155854180E-01  3.6856088231E-01  5.4005335300E-01
                       2.0156059479E-01  5.4005347868E-01  3.6856269141E-01
                       1.2245744092E-01  4.5682600241E-01  4.5682607643E-01
                       1.2448034365E-01  6.2462706009E-01  6.2462690131E-01
                       2.8250770143E-01  4.4966513539E-01  6.2334279697E-01
                       2.8251061612E-01  6.2334360343E-01  4.4966661728E-01
                       3.5049458015E-01  3.5049458015E-01  3.5049458015E-01
                       3.4372921251E-01  5.1133629926E-01  5.1133717832E-01
                       5.1133717832E-01  3.4372921251E-01  5.1133629926E-01
                       5.1133629926E-01  5.1133717832E-01  3.4372921251E-01
                       4.2830092355E-01  4.2830092355E-01  4.2830092355E-01
                       4.8583577467E-01  6.5326499004E-01  6.5326463327E-01
                       6.5326463327E-01  4.8583577467E-01  6.5326499004E-01
                       6.5326499004E-01  6.5326463327E-01  4.8583577467E-01
                       7.0436828117E-01  3.7788376063E-01  3.7788503361E-01
                       7.3023494780E-01  5.5583071475E-01  5.5583093813E-01
                       8.7440071354E-01  3.7688118331E-01  5.4202052803E-01
                       8.7440029511E-01  5.4202041049E-01  3.7688160316E-01
                       7.8892419553E-01  4.6171380764E-01  4.6171446589E-01
                       8.0874734978E-01  6.3611171617E-01  6.3611076538E-01
                       9.5832153332E-01  4.5884345262E-01  6.2559224532E-01
                       9.5832158634E-01  6.2559216791E-01  4.5884349317E-01
                       4.1975298875E-02  7.0809969110E-01  3.7500545811E-01
                       4.4408147691E-02  8.7679249578E-01  5.4176225412E-01
                       2.0884246103E-01  7.0695196010E-01  5.4170350165E-01
                       2.0917749278E-01  8.7337905473E-01  3.7488720736E-01
                       1.2538429226E-01  7.9071394460E-01  4.5828382740E-01
                       1.2538841612E-01  9.5781437228E-01  6.2545076649E-01
                       2.9262963771E-01  7.9085338628E-01  6.2403172858E-01
                       2.9157324073E-01  9.5617352504E-01  4.5801373484E-01
                       3.7788503361E-01  7.0436828117E-01  3.7788376063E-01
                       3.7688160316E-01  8.7440029511E-01  5.4202041049E-01
                       5.5583093813E-01  7.3023494780E-01  5.5583071475E-01
                       5.4202052803E-01  8.7440071354E-01  3.7688118331E-01
                       4.6171446589E-01  7.8892419553E-01  4.6171380764E-01
                       4.5884349317E-01  9.5832158634E-01  6.2559216791E-01
                       6.3611076538E-01  8.0874734978E-01  6.3611171617E-01
                       6.2559224532E-01  9.5832153332E-01  4.5884345262E-01
                       7.1533324266E-01  7.1533373623E-01  3.7494403404E-01
                       7.1510570839E-01  8.8237358635E-01  5.4319994268E-01
                       8.8237423463E-01  7.1510642495E-01  5.4319959095E-01
                       8.7785946113E-01  8.7785924487E-01  3.7551505589E-01
                       7.9646253569E-01  7.9646264859E-01  4.5967838625E-01
                       7.9583748492E-01  9.6286205377E-01  6.2651627199E-01
                       9.6286248491E-01  7.9583818585E-01  6.2651612568E-01
                       9.5896795325E-01  9.5896772306E-01  4.5904827916E-01
                       4.3024030012E-02  4.3023940155E-02  7.0835477853E-01
                       4.1720772891E-02  2.0859089665E-01  8.7428248526E-01
                       2.0859092987E-01  4.1720803282E-02  8.7428254378E-01
                       2.0890008916E-01  2.0890006623E-01  7.0735226932E-01
                       1.2564999334E-01  1.2564992402E-01  7.9114008370E-01
                       1.2452554223E-01  2.9140788481E-01  9.5638622750E-01
                       2.9140785899E-01  1.2452575296E-01  9.5638612282E-01
                       2.9341937422E-01  2.9341960417E-01  7.8851007542E-01
                       3.7500545811E-01  4.1975298875E-02  7.0809969110E-01
                       3.7488720736E-01  2.0917749278E-01  8.7337905473E-01
                       5.4176225412E-01  4.4408147691E-02  8.7679249578E-01
                       5.4170350165E-01  2.0884246103E-01  7.0695196010E-01
                       4.5828382740E-01  1.2538429226E-01  7.9071394460E-01
                       4.5801373484E-01  2.9157324073E-01  9.5617352504E-01
                       6.2545076649E-01  1.2538841612E-01  9.5781437228E-01
                       6.2403172858E-01  2.9262963771E-01  7.9085338628E-01
                       7.0953764216E-01  4.3885785242E-02  7.0953792533E-01
                       7.0821341942E-01  2.0986732536E-01  8.7492673604E-01
                       8.7579443107E-01  4.3331953412E-02  8.7579443362E-01
                       8.7492638097E-01  2.0986700296E-01  7.0821343999E-01
                       7.9199925821E-01  1.2664731317E-01  7.9199955255E-01
                       7.9143700212E-01  2.9228355353E-01  9.5808167660E-01
                       9.5841230260E-01  1.2566237534E-01  9.5841229416E-01
                       9.5808122345E-01  2.9228334387E-01  7.9143718437E-01
                       4.1974836187E-02  3.7500518322E-01  7.0809991465E-01
                       4.4407281185E-02  5.4176226213E-01  8.7679205292E-01
                       2.0917725863E-01  3.7488724926E-01  8.7337919202E-01
                       2.0884180360E-01  5.4170318241E-01  7.0695183341E-01
                       1.2538382365E-01  4.5828365708E-01  7.9071408311E-01
                       1.2538756583E-01  6.2545088749E-01  9.5781365050E-01
                       2.9157289825E-01  4.5801374758E-01  9.5617378136E-01
                       2.9262922468E-01  6.2403129110E-01  7.9085337022E-01
                       3.7788376063E-01  3.7788503361E-01  7.0436828117E-01
                       3.7688118331E-01  5.4202052803E-01  8.7440071354E-01
                       5.4202041049E-01  3.7688160316E-01  8.7440029511E-01
                       5.5583071475E-01  5.5583093813E-01  7.3023494780E-01
                       4.6171380764E-01  4.6171446589E-01  7.8892419553E-01
                       4.5884345262E-01  6.2559224532E-01  9.5832153332E-01
                       6.2559216791E-01  4.5884349317E-01  9.5832158634E-01
                       6.3611171617E-01  6.3611076538E-01  8.0874734978E-01
                       7.1533373623E-01  3.7494403404E-01  7.1533324266E-01
                       7.1510642495E-01  5.4319959095E-01  8.8237423463E-01
                       8.7785924487E-01  3.7551505589E-01  8.7785946113E-01
                       8.8237358635E-01  5.4319994268E-01  7.1510570839E-01
                       7.9646264859E-01  4.5967838625E-01  7.9646253569E-01
                       7.9583818585E-01  6.2651612568E-01  9.6286248491E-01
                       9.5896772306E-01  4.5904827916E-01  9.5896795325E-01
                       9.6286205377E-01  6.2651627199E-01  7.9583748492E-01
                       4.3885785242E-02  7.0953792533E-01  7.0953764216E-01
                       4.3331953412E-02  8.7579443362E-01  8.7579443107E-01
                       2.0986700296E-01  7.0821343999E-01  8.7492638097E-01
                       2.0986732536E-01  8.7492673604E-01  7.0821341942E-01
                       1.2664731317E-01  7.9199955255E-01  7.9199925821E-01
                       1.2566237534E-01  9.5841229416E-01  9.5841230260E-01
                       2.9228334387E-01  7.9143718437E-01  9.5808122345E-01
                       2.9228355353E-01  9.5808167660E-01  7.9143700212E-01
                       3.7494403404E-01  7.1533324266E-01  7.1533373623E-01
                       3.7551505589E-01  8.7785946113E-01  8.7785924487E-01
                       5.4319994268E-01  7.1510570839E-01  8.8237358635E-01
                       5.4319959095E-01  8.8237423463E-01  7.1510642495E-01
                       4.5967838625E-01  7.9646253569E-01  7.9646264859E-01
                       4.5904827916E-01  9.5896795325E-01  9.5896772306E-01
                       6.2651627199E-01  7.9583748492E-01  9.6286205377E-01
                       6.2651612568E-01  9.6286248491E-01  7.9583818585E-01
                       7.1444692523E-01  7.1444692523E-01  7.1444692523E-01
                       7.1008050664E-01  8.7823689833E-01  8.7823696135E-01
                       8.7823696135E-01  7.1008050664E-01  8.7823689833E-01
                       8.7823689833E-01  8.7823696135E-01  7.1008050664E-01
                       7.9610338121E-01  7.9610338121E-01  7.9610338121E-01
                       7.9286530923E-01  9.6030459371E-01  9.6030458695E-01
                       9.6030458695E-01  7.9286530923E-01  9.6030459371E-01
                       9.6030459371E-01  9.6030458695E-01  7.9286530923E-01
                       5.5945665934E-01  4.5925586584E-01  5.5943810206E-01
                       4.5925586584E-01  5.5943810206E-01  5.5945665934E-01
                       5.5943810206E-01  5.5945665934E-01  4.5925586584E-01
            znucl       14.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (   219)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    14) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
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
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  1 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (   219)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    14) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     5610.

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)
 
 npfft, npband, npspinor and npkpt           1           6           1
           2
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           6           6
 mpi_enreg%sizecart(3),np_kpt   =           2           2
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0
 Unit cell volume ucvol=  2.8784396E+04 bohr^3
 Angles (23,13,12)=  8.93986893E+01  8.93986893E+01  8.93986893E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 120 120 120
         ecut(hartree)=     16.538   => boxcut(ratio)=   2.13889
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    14-Si.LDA.fhi
 silicon, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 2 local
- 14.00000   4.00000     21003                znucl, zion, pspdat
    6    7    3    2       495   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   -1.09879859
         --- l  ekb(1:nproj) -->
             0    3.561079
             1    1.887246
             3   -1.290084
 pspatm: atomic psp has been read  and splines computed

  -2.10797917E+05                                ecore*ucvol(ha*bohr**3)
-P-0000  wfconv:   498 bands initialized randomly with npw= 15404, for ikpt=     1
-P-0000  wfconv:   498 bands initialized randomly with npw= 15405, for ikpt=     2
-P-0000  wfconv:   498 bands initialized randomly with npw= 15396, for ikpt=     3
-P-0000  wfconv:   498 bands initialized randomly with npw= 15409, for ikpt=     4
-P-0000  wfconv:   498 bands initialized randomly with npw= 15409, for ikpt=     5
-P-0000  wfconv:   498 bands initialized randomly with npw= 15409, for ikpt=     6
-P-0000  wfconv:   498 bands initialized randomly with npw= 15409, for ikpt=     7
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 
 setup2: Arith. and geom. avg. npw (full set) are   15410.422   15410.421
 symatm: atom number     1 is reached starting at atom
      1     1     1
 symatm: atom number     2 is reached starting at atom
      2     3     4
 symatm: atom number     3 is reached starting at atom
      3     4     2
 symatm: atom number     4 is reached starting at atom
      4     2     3
 symatm: atom number     5 is reached starting at atom
      5     5     5
 symatm: atom number     6 is reached starting at atom
      6     7     8
 symatm: atom number     7 is reached starting at atom
      7     8     6
 symatm: atom number     8 is reached starting at atom
      8     6     7
 symatm: atom number     9 is reached starting at atom
      9    25    73
 symatm: atom number    10 is reached starting at atom
     10    27    76
 symatm: atom number    11 is reached starting at atom
     11    28    74
 symatm: atom number    12 is reached starting at atom
     12    26    75
 symatm: atom number    13 is reached starting at atom
     13    29    77
 symatm: atom number    14 is reached starting at atom
     14    31    80
 symatm: atom number    15 is reached starting at atom
     15    32    78
 symatm: atom number    16 is reached starting at atom
     16    30    79
 symatm: atom number    17 is reached starting at atom
     17    49   145
 symatm: atom number    18 is reached starting at atom
     18    51   148
 symatm: atom number    19 is reached starting at atom
     19    52   146
 symatm: atom number    20 is reached starting at atom
     20    50   147
 symatm: atom number    21 is reached starting at atom
     21    53   149
 symatm: atom number    22 is reached starting at atom
     22    55   152
 symatm: atom number    23 is reached starting at atom
     23    56   150
 symatm: atom number    24 is reached starting at atom
     24    54   151
 symatm: atom number    25 is reached starting at atom
     25    73     9
 symatm: atom number    26 is reached starting at atom
     26    75    12
 symatm: atom number    27 is reached starting at atom
     27    76    10
 symatm: atom number    28 is reached starting at atom
     28    74    11
 symatm: atom number    29 is reached starting at atom
     29    77    13
 symatm: atom number    30 is reached starting at atom
     30    79    16
 symatm: atom number    31 is reached starting at atom
     31    80    14
 symatm: atom number    32 is reached starting at atom
     32    78    15
 symatm: atom number    33 is reached starting at atom
     33    97    81
 symatm: atom number    34 is reached starting at atom
     34    99    84
 symatm: atom number    35 is reached starting at atom
     35   100    82
 symatm: atom number    36 is reached starting at atom
     36    98    83
 symatm: atom number    37 is reached starting at atom
     37   101    85
 symatm: atom number    38 is reached starting at atom
     38   103    88
 symatm: atom number    39 is reached starting at atom
     39   104    86
 symatm: atom number    40 is reached starting at atom
     40   102    87
 symatm: atom number    41 is reached starting at atom
     41   121   153
 symatm: atom number    42 is reached starting at atom
     42   123   156
 symatm: atom number    43 is reached starting at atom
     43   124   154
 symatm: atom number    44 is reached starting at atom
     44   122   155
 symatm: atom number    45 is reached starting at atom
     45   125   157
 symatm: atom number    46 is reached starting at atom
     46   127   160
 symatm: atom number    47 is reached starting at atom
     47   128   158
 symatm: atom number    48 is reached starting at atom
     48   126   159
 symatm: atom number    49 is reached starting at atom
     49   145    17
 symatm: atom number    50 is reached starting at atom
     50   147    20
 symatm: atom number    51 is reached starting at atom
     51   148    18
 symatm: atom number    52 is reached starting at atom
     52   146    19
 symatm: atom number    53 is reached starting at atom
     53   149    21
 symatm: atom number    54 is reached starting at atom
     54   151    24
 symatm: atom number    55 is reached starting at atom
     55   152    22
 symatm: atom number    56 is reached starting at atom
     56   150    23
 symatm: atom number    57 is reached starting at atom
     57   169    89
 symatm: atom number    58 is reached starting at atom
     58   171    92
 symatm: atom number    59 is reached starting at atom
     59   172    90
 symatm: atom number    60 is reached starting at atom
     60   170    91
 symatm: atom number    61 is reached starting at atom
     61   173    93
 symatm: atom number    62 is reached starting at atom
     62   175    96
 symatm: atom number    63 is reached starting at atom
     63   176    94
 symatm: atom number    64 is reached starting at atom
     64   174    95
 symatm: atom number    65 is reached starting at atom
     65   193   161
 symatm: atom number    66 is reached starting at atom
     66   195   164
 symatm: atom number    67 is reached starting at atom
     67   196   162
 symatm: atom number    68 is reached starting at atom
     68   194   163
 symatm: atom number    69 is reached starting at atom
     69   197   165
 symatm: atom number    70 is reached starting at atom
     70   199   168
 symatm: atom number    71 is reached starting at atom
     71   200   166
 symatm: atom number    72 is reached starting at atom
     72   198   167
 symatm: atom number    73 is reached starting at atom
     73     9    25
 symatm: atom number    74 is reached starting at atom
     74    11    28
 symatm: atom number    75 is reached starting at atom
     75    12    26
 symatm: atom number    76 is reached starting at atom
     76    10    27
 symatm: atom number    77 is reached starting at atom
     77    13    29
 symatm: atom number    78 is reached starting at atom
     78    15    32
 symatm: atom number    79 is reached starting at atom
     79    16    30
 symatm: atom number    80 is reached starting at atom
     80    14    31
 symatm: atom number    81 is reached starting at atom
     81    33    97
 symatm: atom number    82 is reached starting at atom
     82    35   100
 symatm: atom number    83 is reached starting at atom
     83    36    98
 symatm: atom number    84 is reached starting at atom
     84    34    99
 symatm: atom number    85 is reached starting at atom
     85    37   101
 symatm: atom number    86 is reached starting at atom
     86    39   104
 symatm: atom number    87 is reached starting at atom
     87    40   102
 symatm: atom number    88 is reached starting at atom
     88    38   103
 symatm: atom number    89 is reached starting at atom
     89    57   169
 symatm: atom number    90 is reached starting at atom
     90    59   172
 symatm: atom number    91 is reached starting at atom
     91    60   170
 symatm: atom number    92 is reached starting at atom
     92    58   171
 symatm: atom number    93 is reached starting at atom
     93    61   173
 symatm: atom number    94 is reached starting at atom
     94    63   176
 symatm: atom number    95 is reached starting at atom
     95    64   174
 symatm: atom number    96 is reached starting at atom
     96    62   175
 symatm: atom number    97 is reached starting at atom
     97    81    33
 symatm: atom number    98 is reached starting at atom
     98    83    36
 symatm: atom number    99 is reached starting at atom
     99    84    34
 symatm: atom number   100 is reached starting at atom
    100    82    35
 symatm: atom number   101 is reached starting at atom
    101    85    37
 symatm: atom number   102 is reached starting at atom
    102    87    40
 symatm: atom number   103 is reached starting at atom
    103    88    38
 symatm: atom number   104 is reached starting at atom
    104    86    39
 symatm: atom number   105 is reached starting at atom
    105   105   105
 symatm: atom number   106 is reached starting at atom
    106   107   108
 symatm: atom number   107 is reached starting at atom
    107   108   106
 symatm: atom number   108 is reached starting at atom
    108   106   107
 symatm: atom number   109 is reached starting at atom
    109   109   109
 symatm: atom number   110 is reached starting at atom
    110   111   112
 symatm: atom number   111 is reached starting at atom
    111   112   110
 symatm: atom number   112 is reached starting at atom
    112   110   111
 symatm: atom number   113 is reached starting at atom
    113   129   177
 symatm: atom number   114 is reached starting at atom
    114   131   180
 symatm: atom number   115 is reached starting at atom
    115   132   178
 symatm: atom number   116 is reached starting at atom
    116   130   179
 symatm: atom number   117 is reached starting at atom
    117   133   181
 symatm: atom number   118 is reached starting at atom
    118   135   184
 symatm: atom number   119 is reached starting at atom
    119   136   182
 symatm: atom number   120 is reached starting at atom
    120   134   183
 symatm: atom number   121 is reached starting at atom
    121   153    41
 symatm: atom number   122 is reached starting at atom
    122   155    44
 symatm: atom number   123 is reached starting at atom
    123   156    42
 symatm: atom number   124 is reached starting at atom
    124   154    43
 symatm: atom number   125 is reached starting at atom
    125   157    45
 symatm: atom number   126 is reached starting at atom
    126   159    48
 symatm: atom number   127 is reached starting at atom
    127   160    46
 symatm: atom number   128 is reached starting at atom
    128   158    47
 symatm: atom number   129 is reached starting at atom
    129   177   113
 symatm: atom number   130 is reached starting at atom
    130   179   116
 symatm: atom number   131 is reached starting at atom
    131   180   114
 symatm: atom number   132 is reached starting at atom
    132   178   115
 symatm: atom number   133 is reached starting at atom
    133   181   117
 symatm: atom number   134 is reached starting at atom
    134   183   120
 symatm: atom number   135 is reached starting at atom
    135   184   118
 symatm: atom number   136 is reached starting at atom
    136   182   119
 symatm: atom number   137 is reached starting at atom
    137   201   185
 symatm: atom number   138 is reached starting at atom
    138   203   188
 symatm: atom number   139 is reached starting at atom
    139   204   186
 symatm: atom number   140 is reached starting at atom
    140   202   187
 symatm: atom number   141 is reached starting at atom
    141   205   189
 symatm: atom number   142 is reached starting at atom
    142   207   192
 symatm: atom number   143 is reached starting at atom
    143   208   190
 symatm: atom number   144 is reached starting at atom
    144   206   191
 symatm: atom number   145 is reached starting at atom
    145    17    49
 symatm: atom number   146 is reached starting at atom
    146    19    52
 symatm: atom number   147 is reached starting at atom
    147    20    50
 symatm: atom number   148 is reached starting at atom
    148    18    51
 symatm: atom number   149 is reached starting at atom
    149    21    53
 symatm: atom number   150 is reached starting at atom
    150    23    56
 symatm: atom number   151 is reached starting at atom
    151    24    54
 symatm: atom number   152 is reached starting at atom
    152    22    55
 symatm: atom number   153 is reached starting at atom
    153    41   121
 symatm: atom number   154 is reached starting at atom
    154    43   124
 symatm: atom number   155 is reached starting at atom
    155    44   122
 symatm: atom number   156 is reached starting at atom
    156    42   123
 symatm: atom number   157 is reached starting at atom
    157    45   125
 symatm: atom number   158 is reached starting at atom
    158    47   128
 symatm: atom number   159 is reached starting at atom
    159    48   126
 symatm: atom number   160 is reached starting at atom
    160    46   127
 symatm: atom number   161 is reached starting at atom
    161    65   193
 symatm: atom number   162 is reached starting at atom
    162    67   196
 symatm: atom number   163 is reached starting at atom
    163    68   194
 symatm: atom number   164 is reached starting at atom
    164    66   195
 symatm: atom number   165 is reached starting at atom
    165    69   197
 symatm: atom number   166 is reached starting at atom
    166    71   200
 symatm: atom number   167 is reached starting at atom
    167    72   198
 symatm: atom number   168 is reached starting at atom
    168    70   199
 symatm: atom number   169 is reached starting at atom
    169    89    57
 symatm: atom number   170 is reached starting at atom
    170    91    60
 symatm: atom number   171 is reached starting at atom
    171    92    58
 symatm: atom number   172 is reached starting at atom
    172    90    59
 symatm: atom number   173 is reached starting at atom
    173    93    61
 symatm: atom number   174 is reached starting at atom
    174    95    64
 symatm: atom number   175 is reached starting at atom
    175    96    62
 symatm: atom number   176 is reached starting at atom
    176    94    63
 symatm: atom number   177 is reached starting at atom
    177   113   129
 symatm: atom number   178 is reached starting at atom
    178   115   132
 symatm: atom number   179 is reached starting at atom
    179   116   130
 symatm: atom number   180 is reached starting at atom
    180   114   131
 symatm: atom number   181 is reached starting at atom
    181   117   133
 symatm: atom number   182 is reached starting at atom
    182   119   136
 symatm: atom number   183 is reached starting at atom
    183   120   134
 symatm: atom number   184 is reached starting at atom
    184   118   135
 symatm: atom number   185 is reached starting at atom
    185   137   201
 symatm: atom number   186 is reached starting at atom
    186   139   204
 symatm: atom number   187 is reached starting at atom
    187   140   202
 symatm: atom number   188 is reached starting at atom
    188   138   203
 symatm: atom number   189 is reached starting at atom
    189   141   205
 symatm: atom number   190 is reached starting at atom
    190   143   208
 symatm: atom number   191 is reached starting at atom
    191   144   206
 symatm: atom number   192 is reached starting at atom
    192   142   207
 symatm: atom number   193 is reached starting at atom
    193   161    65
 symatm: atom number   194 is reached starting at atom
    194   163    68
 symatm: atom number   195 is reached starting at atom
    195   164    66
 symatm: atom number   196 is reached starting at atom
    196   162    67
 symatm: atom number   197 is reached starting at atom
    197   165    69
 symatm: atom number   198 is reached starting at atom
    198   167    72
 symatm: atom number   199 is reached starting at atom
    199   168    70
 symatm: atom number   200 is reached starting at atom
    200   166    71
 symatm: atom number   201 is reached starting at atom
    201   185   137
 symatm: atom number   202 is reached starting at atom
    202   187   140
 symatm: atom number   203 is reached starting at atom
    203   188   138
 symatm: atom number   204 is reached starting at atom
    204   186   139
 symatm: atom number   205 is reached starting at atom
    205   189   141
 symatm: atom number   206 is reached starting at atom
    206   191   144
 symatm: atom number   207 is reached starting at atom
    207   192   142
 symatm: atom number   208 is reached starting at atom
    208   190   143
 symatm: atom number   209 is reached starting at atom
    209   209   209
 symatm: atom number   210 is reached starting at atom
    210   211   212
 symatm: atom number   211 is reached starting at atom
    211   212   210
 symatm: atom number   212 is reached starting at atom
    212   210   211
 symatm: atom number   213 is reached starting at atom
    213   213   213
 symatm: atom number   214 is reached starting at atom
    214   215   216
 symatm: atom number   215 is reached starting at atom
    215   216   214
 symatm: atom number   216 is reached starting at atom
    216   214   215
 symatm: atom number   217 is reached starting at atom
    217   219   218
 symatm: atom number   218 is reached starting at atom
    218   217   219
 symatm: atom number   219 is reached starting at atom
    219   218   217
 initro : for itypat=  1, take decay length=      1.1000,
 initro : indeed, coreel=     10.0000, nval=  4 and densty=  0.0000E+00.

================================================================================
 Could no open cSi216I3J.rel.xo_HIST, starting from scratch

=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================

--- Iteration: ( 1/40) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  1.28993838474040E+00  1.28993838474040E+00  1.28993838474040E+00
  1.28214167258965E+00  6.39394093808089E+00  6.39394339139148E+00
  6.39394339139148E+00  1.28214167258965E+00  6.39394093808089E+00
  6.39394093808089E+00  6.39394339139148E+00  1.28214167258965E+00
  3.84692017923544E+00  3.84692017923544E+00  3.84692017923544E+00
  3.83042718844882E+00  8.94781294122955E+00  8.94781550216020E+00
  8.94781550216020E+00  3.83042718844882E+00  8.94781294122955E+00
  8.94781294122955E+00  8.94781550216020E+00  3.83042718844882E+00
  1.14707932635048E+01  1.29382631330956E+00  1.29382060371468E+00
  1.14881198083721E+01  6.27592389111509E+00  6.27591965734795E+00
  1.66101071094249E+01  1.31906846537098E+00  6.42510297953770E+00
  1.66101058425235E+01  6.42513910832127E+00  1.31909037257496E+00
  1.40627816743720E+01  3.78987090118832E+00  3.78986323943259E+00
  1.40598692750452E+01  8.75987007304299E+00  8.75987014956604E+00
  1.91990171325718E+01  3.83936176074456E+00  8.92363778992150E+00
  1.91990050697728E+01  8.92367764999135E+00  3.83940431924264E+00
  2.17232312921265E+01  1.43911335988848E+00  1.43911062039390E+00
  2.17457222508635E+01  6.54927622989159E+00  6.54927553081850E+00
  2.68348792052103E+01  1.45234578528982E+00  6.53976024378923E+00
  2.68348810089160E+01  6.53976127616706E+00  1.45234673141916E+00
  2.42869162479450E+01  3.99794041800440E+00  3.99793830462687E+00
  2.42601355839055E+01  9.16617187838843E+00  9.16617888893608E+00
  2.93777351607450E+01  4.01657414301919E+00  9.10436112000916E+00
  2.93777319822071E+01  9.10436034569735E+00  4.01658058047102E+00
  1.29382060371468E+00  1.14707932635048E+01  1.29382631330956E+00
  1.31909037257496E+00  1.66101058425235E+01  6.42513910832127E+00
  6.27591965734795E+00  1.14881198083721E+01  6.27592389111509E+00
  6.42510297953770E+00  1.66101071094249E+01  1.31906846537098E+00
  3.78986323943259E+00  1.40627816743720E+01  3.78987090118832E+00
  3.83940431924264E+00  1.91990050697728E+01  8.92367764999135E+00
  8.75987014956604E+00  1.40598692750452E+01  8.75987007304299E+00
  8.92363778992150E+00  1.91990171325718E+01  3.83936176074456E+00
  1.15325573741490E+01  1.15325572729313E+01  1.34111630156755E+00
  1.14144950344017E+01  1.66428322301727E+01  6.32304964816316E+00
  1.66428367014810E+01  1.14145508285894E+01  6.32311287789107E+00
  1.66950218438923E+01  1.66950238712957E+01  1.45051294500493E+00
  1.40935772493546E+01  1.40935795060223E+01  3.89959275487057E+00
  1.39264971006026E+01  1.92214548002598E+01  8.83032333853396E+00
  1.92214802216299E+01  1.39265431139892E+01  8.83041303408054E+00
  1.92635308877304E+01  1.92635260469617E+01  4.01542308226929E+00
  2.17684975546176E+01  1.16133638567276E+01  1.46018359268335E+00
  2.17868286248952E+01  1.67488543139429E+01  6.60083001471591E+00
  2.68607276459400E+01  1.16630722800409E+01  6.61103552907851E+00
  2.69656794555080E+01  1.67515221392633E+01  1.58855338821700E+00
  2.43271704254830E+01  1.41922838047573E+01  4.04308591271922E+00
  2.43848586019587E+01  1.92989217412685E+01  9.19537683646624E+00
  2.94247368546857E+01  1.42372050052655E+01  9.16288878172200E+00
  2.94752258745285E+01  1.93423670050938E+01  4.09683129075761E+00
  1.43911062039390E+00  2.17232312921265E+01  1.43911335988848E+00
  1.45234673141916E+00  2.68348810089160E+01  6.53976127616706E+00
  6.54927553081850E+00  2.17457222508635E+01  6.54927622989159E+00
  6.53976024378923E+00  2.68348792052103E+01  1.45234578528982E+00
  3.99793830462687E+00  2.42869162479450E+01  3.99794041800440E+00
  4.01658058047102E+00  2.93777319822071E+01  9.10436034569735E+00
  9.16617888893608E+00  2.42601355839055E+01  9.16617187838843E+00
  9.10436112000915E+00  2.93777351607450E+01  4.01657414301919E+00
  1.16133553936281E+01  2.17685042875928E+01  1.46016940413559E+00
  1.16630735486415E+01  2.68607318227213E+01  6.61102838166833E+00
  1.67488444041997E+01  2.17868245854758E+01  6.60080979448301E+00
  1.67515221747191E+01  2.69656657451685E+01  1.58852676206767E+00
  1.41922785318944E+01  2.43271745680036E+01  4.04307154580867E+00
  1.42372053818962E+01  2.94247446574056E+01  9.16287832866477E+00
  1.92989082646935E+01  2.43848579733288E+01  9.19536410530494E+00
  1.93423704612909E+01  2.94752036366645E+01  4.09680513497460E+00
  2.18665440192695E+01  2.18665353861893E+01  1.57262773557569E+00
  2.18791058451796E+01  2.69617282299124E+01  6.68588364352505E+00
  2.69617391603989E+01  2.18791053234282E+01  6.68589357799246E+00
  2.69884998041319E+01  2.69884997263893E+01  1.60899170186116E+00
  2.44203043775275E+01  2.44202954039046E+01  4.13553124758485E+00
  2.44562791522306E+01  2.95368009061590E+01  9.23844142327490E+00
  2.95368147985507E+01  2.44562736730111E+01  9.23844789232128E+00
  2.95470042626561E+01  2.95470045199686E+01  4.15873294191532E+00
  1.29382631330956E+00  1.29382060371468E+00  1.14707932635048E+01
  1.31906846537098E+00  6.42510297953770E+00  1.66101071094249E+01
  6.42513910832127E+00  1.31909037257496E+00  1.66101058425235E+01
  6.27592389111509E+00  6.27591965734795E+00  1.14881198083721E+01
  3.78987090118832E+00  3.78986323943259E+00  1.40627816743720E+01
  3.83936176074456E+00  8.92363778992150E+00  1.91990171325718E+01
  8.92367764999135E+00  3.83940431924264E+00  1.91990050697727E+01
  8.75987007304299E+00  8.75987014956604E+00  1.40598692750452E+01
  1.15325572729313E+01  1.34111630156755E+00  1.15325573741490E+01
  1.14145508285894E+01  6.32311287789107E+00  1.66428367014810E+01
  1.66950238712957E+01  1.45051294500493E+00  1.66950218438923E+01
  1.66428322301727E+01  6.32304964816316E+00  1.14144950344017E+01
  1.40935795060223E+01  3.89959275487057E+00  1.40935772493546E+01
  1.39265431139892E+01  8.83041303408054E+00  1.92214802216299E+01
  1.92635260469617E+01  4.01542308226929E+00  1.92635308877304E+01
  1.92214548002598E+01  8.83032333853396E+00  1.39264971006026E+01
  2.17685042875928E+01  1.46016940413559E+00  1.16133553936281E+01
  2.17868245854758E+01  6.60080979448301E+00  1.67488444041997E+01
  2.69656657451685E+01  1.58852676206767E+00  1.67515221747191E+01
  2.68607318227213E+01  6.61102838166833E+00  1.16630735486415E+01
  2.43271745680036E+01  4.04307154580867E+00  1.41922785318944E+01
  2.43848579733288E+01  9.19536410530494E+00  1.92989082646935E+01
  2.94752036366645E+01  4.09680513497460E+00  1.93423704612909E+01
  2.94247446574056E+01  9.16287832866477E+00  1.42372053818962E+01
  1.34111630156755E+00  1.15325573741490E+01  1.15325572729313E+01
  1.45051294500493E+00  1.66950218438923E+01  1.66950238712957E+01
  6.32304964816316E+00  1.14144950344017E+01  1.66428322301727E+01
  6.32311287789107E+00  1.66428367014810E+01  1.14145508285894E+01
  3.89959275487057E+00  1.40935772493546E+01  1.40935795060223E+01
  4.01542308226929E+00  1.92635308877304E+01  1.92635260469617E+01
  8.83032333853396E+00  1.39264971006026E+01  1.92214548002598E+01
  8.83041303408054E+00  1.92214802216299E+01  1.39265431139892E+01
  1.08542886475721E+01  1.08542886475721E+01  1.08542886475721E+01
  1.06985464202580E+01  1.58084288681814E+01  1.58084556683206E+01
  1.58084556683206E+01  1.06985464202580E+01  1.58084288681814E+01
  1.58084288681814E+01  1.58084556683206E+01  1.06985464202580E+01
  1.32638337809499E+01  1.32638337809499E+01  1.32638337809499E+01
  1.50993151103285E+01  2.02037747455279E+01  2.02037638685847E+01
  2.02037638685847E+01  1.50993151103285E+01  2.02037747455279E+01
  2.02037747455279E+01  2.02037638685847E+01  1.50993151103285E+01
  2.17084826485488E+01  1.17548610363885E+01  1.17548998460731E+01
  2.25583237784131E+01  1.72412148984347E+01  1.72412217086810E+01
  2.69457494818409E+01  1.17777374107680E+01  1.68123851420120E+01
  2.69457367064262E+01  1.68123815399118E+01  1.17777501922217E+01
  2.43268188493582E+01  1.43510675235730E+01  1.43510875918182E+01
  2.49903016862397E+01  1.97271125742801E+01  1.97270835872890E+01
  2.95442805640490E+01  1.43165576366867E+01  1.94002730424742E+01
  2.95442821830763E+01  1.94002706850469E+01  1.43165588755377E+01
  1.46018359268335E+00  2.17684975546176E+01  1.16133638567276E+01
  1.58855338821700E+00  2.69656794555080E+01  1.67515221392633E+01
  6.60083001471591E+00  2.17868286248952E+01  1.67488543139429E+01
  6.61103552907851E+00  2.68607276459400E+01  1.16630722800409E+01
  4.04308591271922E+00  2.43271704254830E+01  1.41922838047573E+01
  4.09683129075761E+00  2.94752258745285E+01  1.93423670050938E+01
  9.19537683646624E+00  2.43848586019587E+01  1.92989217412685E+01
  9.16288878172200E+00  2.94247368546857E+01  1.42372050052655E+01
  1.17548998460731E+01  2.17084826485488E+01  1.17548610363885E+01
  1.17777501922217E+01  2.69457367064262E+01  1.68123815399118E+01
  1.72412217086810E+01  2.25583237784131E+01  1.72412148984347E+01
  1.68123851420120E+01  2.69457494818409E+01  1.17777374107680E+01
  1.43510875918182E+01  2.43268188493582E+01  1.43510675235730E+01
  1.43165588755377E+01  2.95442821830763E+01  1.94002706850469E+01
  1.97270835872890E+01  2.49903016862397E+01  1.97271125742801E+01
  1.94002730424742E+01  2.95442805640490E+01  1.43165576366867E+01
  2.20981909953877E+01  2.20982060429894E+01  1.17206534084224E+01
  2.21450015516351E+01  2.72445424497123E+01  1.69040641191470E+01
  2.72445623765099E+01  2.21450235601035E+01  1.69040535583701E+01
  2.71054039718466E+01  2.71053973786697E+01  1.17902946353473E+01
  2.46112210856899E+01  2.46112245277026E+01  1.43435919100264E+01
  2.46455184909157E+01  2.97376415585496E+01  1.94833770159396E+01
  2.97376548609543E+01  2.46455400184810E+01  1.94833727134705E+01
  2.96176006146952E+01  2.96175935968306E+01  1.43764147105791E+01
  1.43911335988848E+00  1.43911062039390E+00  2.17232312921265E+01
  1.45234578528982E+00  6.53976024378923E+00  2.68348792052103E+01
  6.53976127616706E+00  1.45234673141916E+00  2.68348810089160E+01
  6.54927622989159E+00  6.54927553081850E+00  2.17457222508635E+01
  3.99794041800440E+00  3.99793830462687E+00  2.42869162479450E+01
  4.01657414301919E+00  9.10436112000915E+00  2.93777351607450E+01
  9.10436034569735E+00  4.01658058047102E+00  2.93777319822071E+01
  9.16617187838843E+00  9.16617888893608E+00  2.42601355839055E+01
  1.16133638567276E+01  1.46018359268335E+00  2.17684975546176E+01
  1.16630722800409E+01  6.61103552907851E+00  2.68607276459400E+01
  1.67515221392633E+01  1.58855338821700E+00  2.69656794555080E+01
  1.67488543139429E+01  6.60083001471591E+00  2.17868286248952E+01
  1.41922838047573E+01  4.04308591271922E+00  2.43271704254830E+01
  1.42372050052655E+01  9.16288878172200E+00  2.94247368546857E+01
  1.93423670050938E+01  4.09683129075761E+00  2.94752258745285E+01
  1.92989217412685E+01  9.19537683646624E+00  2.43848586019587E+01
  2.18665353861893E+01  1.57262773557569E+00  2.18665440192695E+01
  2.18791053234282E+01  6.68589357799246E+00  2.69617391603989E+01
  2.69884997263893E+01  1.60899170186116E+00  2.69884998041319E+01
  2.69617282299124E+01  6.68588364352505E+00  2.18791058451796E+01
  2.44202954039046E+01  4.13553124758485E+00  2.44203043775275E+01
  2.44562736730111E+01  9.23844789232128E+00  2.95368147985507E+01
  2.95470045199686E+01  4.15873294191532E+00  2.95470042626561E+01
  2.95368009061590E+01  9.23844142327490E+00  2.44562791522306E+01
  1.46016940413559E+00  1.16133553936281E+01  2.17685042875928E+01
  1.58852676206767E+00  1.67515221747191E+01  2.69656657451685E+01
  6.61102838166833E+00  1.16630735486415E+01  2.68607318227213E+01
  6.60080979448301E+00  1.67488444041997E+01  2.17868245854758E+01
  4.04307154580867E+00  1.41922785318944E+01  2.43271745680036E+01
  4.09680513497460E+00  1.93423704612909E+01  2.94752036366645E+01
  9.16287832866477E+00  1.42372053818962E+01  2.94247446574056E+01
  9.19536410530494E+00  1.92989082646935E+01  2.43848579733288E+01
  1.17548610363885E+01  1.17548998460731E+01  2.17084826485488E+01
  1.17777374107680E+01  1.68123851420120E+01  2.69457494818409E+01
  1.68123815399118E+01  1.17777501922217E+01  2.69457367064262E+01
  1.72412148984347E+01  1.72412217086810E+01  2.25583237784131E+01
  1.43510675235730E+01  1.43510875918182E+01  2.43268188493582E+01
  1.43165576366867E+01  1.94002730424742E+01  2.95442805640490E+01
  1.94002706850469E+01  1.43165588755377E+01  2.95442821830763E+01
  1.97271125742801E+01  1.97270835872890E+01  2.49903016862397E+01
  2.20982060429894E+01  1.17206534084224E+01  2.20981909953877E+01
  2.21450235601035E+01  1.69040535583701E+01  2.72445623765099E+01
  2.71053973786697E+01  1.17902946353473E+01  2.71054039718466E+01
  2.72445424497123E+01  1.69040641191470E+01  2.21450015516351E+01
  2.46112245277026E+01  1.43435919100264E+01  2.46112210856899E+01
  2.46455400184810E+01  1.94833727134705E+01  2.97376548609543E+01
  2.96175935968306E+01  1.43764147105791E+01  2.96176006146952E+01
  2.97376415585496E+01  1.94833770159396E+01  2.46455184909157E+01
  1.57262773557569E+00  2.18665440192695E+01  2.18665353861893E+01
  1.60899170186116E+00  2.69884998041319E+01  2.69884997263893E+01
  6.68588364352505E+00  2.18791058451796E+01  2.69617282299124E+01
  6.68589357799246E+00  2.69617391603989E+01  2.18791053234282E+01
  4.13553124758485E+00  2.44203043775275E+01  2.44202954039046E+01
  4.15873294191532E+00  2.95470042626561E+01  2.95470045199686E+01
  9.23844142327490E+00  2.44562791522306E+01  2.95368009061590E+01
  9.23844789232128E+00  2.95368147985507E+01  2.44562736730111E+01
  1.17206534084224E+01  2.20981909953877E+01  2.20982060429893E+01
  1.17902946353473E+01  2.71054039718466E+01  2.71053973786697E+01
  1.69040641191470E+01  2.21450015516351E+01  2.72445424497123E+01
  1.69040535583701E+01  2.72445623765099E+01  2.21450235601035E+01
  1.43435919100264E+01  2.46112210856899E+01  2.46112245277026E+01
  1.43764147105791E+01  2.96176006146952E+01  2.96175935968306E+01
  1.94833770159396E+01  2.46455184909157E+01  2.97376415585496E+01
  1.94833727134705E+01  2.97376548609543E+01  2.46455400184810E+01
  2.21253439824890E+01  2.21253439824890E+01  2.21253439824890E+01
  2.20440696843152E+01  2.71706989400609E+01  2.71707008613686E+01
  2.71707008613686E+01  2.20440696843152E+01  2.71706989400609E+01
  2.71706989400609E+01  2.71707008613686E+01  2.20440696843152E+01
  2.46541212970066E+01  2.46541212970066E+01  2.46541212970066E+01
  2.46075601220092E+01  2.97123267368803E+01  2.97123265307864E+01
  2.97123265307864E+01  2.46075601220092E+01  2.97123267368803E+01
  2.97123267368803E+01  2.97123265307864E+01  2.46075601220092E+01
  1.73094532176749E+01  1.42546046077390E+01  1.73088874568757E+01
  1.42546046077390E+01  1.73088874568757E+01  1.73094532176749E+01
  1.73088874568757E+01  1.73094532176749E+01  1.42546046077390E+01
 Reduced coordinates (xred)
  4.16532512870000E-02  4.16532512870000E-02  4.16532512870000E-02
  3.96645279900000E-02  2.07334487460000E-01  2.07334567930000E-01
  2.07334567930000E-01  3.96645279900000E-02  2.07334487460000E-01
  2.07334487460000E-01  2.07334567930000E-01  3.96645279900000E-02
  1.24220454870000E-01  1.24220454870000E-01  1.24220454870000E-01
  1.21949022770000E-01  2.89802222240000E-01  2.89802306240000E-01
  2.89802306240000E-01  1.21949022770000E-01  2.89802222240000E-01
  2.89802222240000E-01  2.89802306240000E-01  1.21949022770000E-01
  3.73860135570000E-01  4.00497593320000E-02  4.00495720540000E-02
  3.72732623980000E-01  2.01769596520000E-01  2.01769457650000E-01
  5.40683355630000E-01  3.91284829630000E-02  2.06609355270000E-01
  5.40683304430000E-01  2.06610530670000E-01  3.91291918870000E-02
  4.57590335250000E-01  1.20632946370000E-01  1.20632695060000E-01
  4.55806523080000E-01  2.81963497320000E-01  2.81963499830000E-01
  6.24308562230000E-01  1.20503021380000E-01  2.87270202850000E-01
  6.24308154610000E-01  2.87271498330000E-01  1.20504405370000E-01
  7.08354778530000E-01  4.30240300120000E-02  4.30239401550000E-02
  7.07352269320000E-01  2.08900089160000E-01  2.08900066230000E-01
  8.74282485260000E-01  4.17207728910000E-02  2.08590896650000E-01
  8.74282543780000E-01  2.08590929870000E-01  4.17208032820000E-02
  7.91140083700000E-01  1.25649993340000E-01  1.25649924020000E-01
  7.88510075420000E-01  2.93419374220000E-01  2.93419604170000E-01
  9.56386227500000E-01  1.24525542230000E-01  2.91407884810000E-01
  9.56386122820000E-01  2.91407858990000E-01  1.24525752960000E-01
  4.00495720540000E-02  3.73860135570000E-01  4.00497593320000E-02
  3.91291918870000E-02  5.40683304430000E-01  2.06610530670000E-01
  2.01769457650000E-01  3.72732623980000E-01  2.01769596520000E-01
  2.06609355270000E-01  5.40683355630000E-01  3.91284829630000E-02
  1.20632695060000E-01  4.57590335250000E-01  1.20632946370000E-01
  1.20504405370000E-01  6.24308154610000E-01  2.87271498330000E-01
  2.81963499830000E-01  4.55806523080000E-01  2.81963497320000E-01
  2.87270202850000E-01  6.24308562230000E-01  1.20503021380000E-01
  3.74127973910000E-01  3.74127970590000E-01  3.98428381230000E-02
  3.68560882310000E-01  5.40053353000000E-01  2.01558541800000E-01
  5.40053478680000E-01  3.68562691410000E-01  2.01560594790000E-01
  5.41687018820000E-01  5.41687085320000E-01  4.16583485880000E-02
  4.56826002410000E-01  4.56826076430000E-01  1.22457440920000E-01
  4.49665135390000E-01  6.23342796970000E-01  2.82507701430000E-01
  6.23343603430000E-01  4.49666617280000E-01  2.82510616120000E-01
  6.24627060090000E-01  6.24626901310000E-01  1.24480343650000E-01
  7.08099691100000E-01  3.75005458110000E-01  4.19752988750000E-02
  7.06951960100000E-01  5.41703501650000E-01  2.08842461030000E-01
  8.73379054730000E-01  3.74887207360000E-01  2.09177492780000E-01
  8.76792495780000E-01  5.41762254120000E-01  4.44081476910000E-02
  7.90713944600000E-01  4.58283827400000E-01  1.25384292260000E-01
  7.90853386280000E-01  6.24031728580000E-01  2.92629637710000E-01
  9.56173525040000E-01  4.58013734840000E-01  2.91573240730000E-01
  9.57814372280000E-01  6.25450766490000E-01  1.25388416120000E-01
  4.30239401550000E-02  7.08354778530000E-01  4.30240300120000E-02
  4.17208032820000E-02  8.74282543780000E-01  2.08590929870000E-01
  2.08900066230000E-01  7.07352269320000E-01  2.08900089160000E-01
  2.08590896650000E-01  8.74282485260000E-01  4.17207728910000E-02
  1.25649924020000E-01  7.91140083700000E-01  1.25649993340000E-01
  1.24525752960000E-01  9.56386122820000E-01  2.91407858990000E-01
  2.93419604170000E-01  7.88510075420000E-01  2.93419374220000E-01
  2.91407884810000E-01  9.56386227500000E-01  1.24525542230000E-01
  3.75005183220000E-01  7.08099914650000E-01  4.19748361870000E-02
  3.74887249260000E-01  8.73379192020000E-01  2.09177258630000E-01
  5.41703182410000E-01  7.06951833410000E-01  2.08841803600000E-01
  5.41762262130000E-01  8.76792052920000E-01  4.44072811850000E-02
  4.58283657080000E-01  7.90714083110000E-01  1.25383823650000E-01
  4.58013747580000E-01  9.56173781360000E-01  2.91572898250000E-01
  6.24031291100000E-01  7.90853370220000E-01  2.92629224680000E-01
  6.25450887490000E-01  9.57813650500000E-01  1.25387565830000E-01
  7.09537925330000E-01  7.09537642160000E-01  4.38857852420000E-02
  7.08213439990000E-01  8.74926380970000E-01  2.09867002960000E-01
  8.74926736040000E-01  7.08213419420000E-01  2.09867325360000E-01
  8.75794433620000E-01  8.75794431070000E-01  4.33319534120000E-02
  7.91999552550000E-01  7.91999258210000E-01  1.26647313170000E-01
  7.91437184370000E-01  9.58081223450000E-01  2.92283343870000E-01
  9.58081676600000E-01  7.91437002120000E-01  2.92283553530000E-01
  9.58412294160000E-01  9.58412302600000E-01  1.25662375340000E-01
  4.00497593320000E-02  4.00495720540000E-02  3.73860135570000E-01
  3.91284829630000E-02  2.06609355270000E-01  5.40683355630000E-01
  2.06610530670000E-01  3.91291918870000E-02  5.40683304430000E-01
  2.01769596520000E-01  2.01769457650000E-01  3.72732623980000E-01
  1.20632946370000E-01  1.20632695060000E-01  4.57590335250000E-01
  1.20503021380000E-01  2.87270202850000E-01  6.24308562230000E-01
  2.87271498330000E-01  1.20504405370000E-01  6.24308154610000E-01
  2.81963497320000E-01  2.81963499830000E-01  4.55806523080000E-01
  3.74127970590000E-01  3.98428381230000E-02  3.74127973910000E-01
  3.68562691410000E-01  2.01560594790000E-01  5.40053478680000E-01
  5.41687085320000E-01  4.16583485880000E-02  5.41687018820000E-01
  5.40053353000000E-01  2.01558541800000E-01  3.68560882310000E-01
  4.56826076430000E-01  1.22457440920000E-01  4.56826002410000E-01
  4.49666617280000E-01  2.82510616120000E-01  6.23343603430000E-01
  6.24626901310000E-01  1.24480343650000E-01  6.24627060090000E-01
  6.23342796970000E-01  2.82507701430000E-01  4.49665135390000E-01
  7.08099914650000E-01  4.19748361870000E-02  3.75005183220000E-01
  7.06951833410000E-01  2.08841803600000E-01  5.41703182410000E-01
  8.76792052920000E-01  4.44072811850000E-02  5.41762262130000E-01
  8.73379192020000E-01  2.09177258630000E-01  3.74887249260000E-01
  7.90714083110000E-01  1.25383823650000E-01  4.58283657080000E-01
  7.90853370220000E-01  2.92629224680000E-01  6.24031291100000E-01
  9.57813650500000E-01  1.25387565830000E-01  6.25450887490000E-01
  9.56173781360000E-01  2.91572898250000E-01  4.58013747580000E-01
  3.98428381230000E-02  3.74127973910000E-01  3.74127970590000E-01
  4.16583485880000E-02  5.41687018820000E-01  5.41687085320000E-01
  2.01558541800000E-01  3.68560882310000E-01  5.40053353000000E-01
  2.01560594790000E-01  5.40053478680000E-01  3.68562691410000E-01
  1.22457440920000E-01  4.56826002410000E-01  4.56826076430000E-01
  1.24480343650000E-01  6.24627060090000E-01  6.24626901310000E-01
  2.82507701430000E-01  4.49665135390000E-01  6.23342796970000E-01
  2.82510616120000E-01  6.23343603430000E-01  4.49666617280000E-01
  3.50494580150000E-01  3.50494580150000E-01  3.50494580150000E-01
  3.43729212510000E-01  5.11336299260000E-01  5.11337178320000E-01
  5.11337178320000E-01  3.43729212510000E-01  5.11336299260000E-01
  5.11336299260000E-01  5.11337178320000E-01  3.43729212510000E-01
  4.28300923550000E-01  4.28300923550000E-01  4.28300923550000E-01
  4.85835774670000E-01  6.53264990040000E-01  6.53264633270000E-01
  6.53264633270000E-01  4.85835774670000E-01  6.53264990040000E-01
  6.53264990040000E-01  6.53264633270000E-01  4.85835774670000E-01
  7.04368281170000E-01  3.77883760630000E-01  3.77885033610000E-01
  7.30234947800000E-01  5.55830714750000E-01  5.55830938130000E-01
  8.74400713540000E-01  3.76881183310000E-01  5.42020528030000E-01
  8.74400295110000E-01  5.42020410490000E-01  3.76881603160000E-01
  7.88924195530000E-01  4.61713807640000E-01  4.61714465890000E-01
  8.08747349780000E-01  6.36111716170000E-01  6.36110765380000E-01
  9.58321533320000E-01  4.58843452620000E-01  6.25592245320000E-01
  9.58321586340000E-01  6.25592167910000E-01  4.58843493170000E-01
  4.19752988750000E-02  7.08099691100000E-01  3.75005458110000E-01
  4.44081476910000E-02  8.76792495780000E-01  5.41762254120000E-01
  2.08842461030000E-01  7.06951960100000E-01  5.41703501650000E-01
  2.09177492780000E-01  8.73379054730000E-01  3.74887207360000E-01
  1.25384292260000E-01  7.90713944600000E-01  4.58283827400000E-01
  1.25388416120000E-01  9.57814372280000E-01  6.25450766490000E-01
  2.92629637710000E-01  7.90853386280000E-01  6.24031728580000E-01
  2.91573240730000E-01  9.56173525040000E-01  4.58013734840000E-01
  3.77885033610000E-01  7.04368281170000E-01  3.77883760630000E-01
  3.76881603160000E-01  8.74400295110000E-01  5.42020410490000E-01
  5.55830938130000E-01  7.30234947800000E-01  5.55830714750000E-01
  5.42020528030000E-01  8.74400713540000E-01  3.76881183310000E-01
  4.61714465890000E-01  7.88924195530000E-01  4.61713807640000E-01
  4.58843493170000E-01  9.58321586340000E-01  6.25592167910000E-01
  6.36110765380000E-01  8.08747349780000E-01  6.36111716170000E-01
  6.25592245320000E-01  9.58321533320000E-01  4.58843452620000E-01
  7.15333242660000E-01  7.15333736230000E-01  3.74944034040000E-01
  7.15105708390000E-01  8.82373586350000E-01  5.43199942680000E-01
  8.82374234630000E-01  7.15106424950000E-01  5.43199590950000E-01
  8.77859461130000E-01  8.77859244870000E-01  3.75515055890000E-01
  7.96462535690000E-01  7.96462648590000E-01  4.59678386250000E-01
  7.95837484920000E-01  9.62862053770000E-01  6.26516271990000E-01
  9.62862484910000E-01  7.95838185850000E-01  6.26516125680000E-01
  9.58967953250000E-01  9.58967723060000E-01  4.59048279160000E-01
  4.30240300120000E-02  4.30239401550000E-02  7.08354778530000E-01
  4.17207728910000E-02  2.08590896650000E-01  8.74282485260000E-01
  2.08590929870000E-01  4.17208032820000E-02  8.74282543780000E-01
  2.08900089160000E-01  2.08900066230000E-01  7.07352269320000E-01
  1.25649993340000E-01  1.25649924020000E-01  7.91140083700000E-01
  1.24525542230000E-01  2.91407884810000E-01  9.56386227500000E-01
  2.91407858990000E-01  1.24525752960000E-01  9.56386122820000E-01
  2.93419374220000E-01  2.93419604170000E-01  7.88510075420000E-01
  3.75005458110000E-01  4.19752988750000E-02  7.08099691100000E-01
  3.74887207360000E-01  2.09177492780000E-01  8.73379054730000E-01
  5.41762254120000E-01  4.44081476910000E-02  8.76792495780000E-01
  5.41703501650000E-01  2.08842461030000E-01  7.06951960100000E-01
  4.58283827400000E-01  1.25384292260000E-01  7.90713944600000E-01
  4.58013734840000E-01  2.91573240730000E-01  9.56173525040000E-01
  6.25450766490000E-01  1.25388416120000E-01  9.57814372280000E-01
  6.24031728580000E-01  2.92629637710000E-01  7.90853386280000E-01
  7.09537642160000E-01  4.38857852420000E-02  7.09537925330000E-01
  7.08213419420000E-01  2.09867325360000E-01  8.74926736040000E-01
  8.75794431070000E-01  4.33319534120000E-02  8.75794433620000E-01
  8.74926380970000E-01  2.09867002960000E-01  7.08213439990000E-01
  7.91999258210000E-01  1.26647313170000E-01  7.91999552550000E-01
  7.91437002120000E-01  2.92283553530000E-01  9.58081676600000E-01
  9.58412302600000E-01  1.25662375340000E-01  9.58412294160000E-01
  9.58081223450000E-01  2.92283343870000E-01  7.91437184370000E-01
  4.19748361870000E-02  3.75005183220000E-01  7.08099914650000E-01
  4.44072811850000E-02  5.41762262130000E-01  8.76792052920000E-01
  2.09177258630000E-01  3.74887249260000E-01  8.73379192020000E-01
  2.08841803600000E-01  5.41703182410000E-01  7.06951833410000E-01
  1.25383823650000E-01  4.58283657080000E-01  7.90714083110000E-01
  1.25387565830000E-01  6.25450887490000E-01  9.57813650500000E-01
  2.91572898250000E-01  4.58013747580000E-01  9.56173781360000E-01
  2.92629224680000E-01  6.24031291100000E-01  7.90853370220000E-01
  3.77883760630000E-01  3.77885033610000E-01  7.04368281170000E-01
  3.76881183310000E-01  5.42020528030000E-01  8.74400713540000E-01
  5.42020410490000E-01  3.76881603160000E-01  8.74400295110000E-01
  5.55830714750000E-01  5.55830938130000E-01  7.30234947800000E-01
  4.61713807640000E-01  4.61714465890000E-01  7.88924195530000E-01
  4.58843452620000E-01  6.25592245320000E-01  9.58321533320000E-01
  6.25592167910000E-01  4.58843493170000E-01  9.58321586340000E-01
  6.36111716170000E-01  6.36110765380000E-01  8.08747349780000E-01
  7.15333736230000E-01  3.74944034040000E-01  7.15333242660000E-01
  7.15106424950000E-01  5.43199590950000E-01  8.82374234630000E-01
  8.77859244870000E-01  3.75515055890000E-01  8.77859461130000E-01
  8.82373586350000E-01  5.43199942680000E-01  7.15105708390000E-01
  7.96462648590000E-01  4.59678386250000E-01  7.96462535690000E-01
  7.95838185850000E-01  6.26516125680000E-01  9.62862484910000E-01
  9.58967723060000E-01  4.59048279160000E-01  9.58967953250000E-01
  9.62862053770000E-01  6.26516271990000E-01  7.95837484920000E-01
  4.38857852420000E-02  7.09537925330000E-01  7.09537642160000E-01
  4.33319534120000E-02  8.75794433620000E-01  8.75794431070000E-01
  2.09867002960000E-01  7.08213439990000E-01  8.74926380970000E-01
  2.09867325360000E-01  8.74926736040000E-01  7.08213419420000E-01
  1.26647313170000E-01  7.91999552550000E-01  7.91999258210000E-01
  1.25662375340000E-01  9.58412294160000E-01  9.58412302600000E-01
  2.92283343870000E-01  7.91437184370000E-01  9.58081223450000E-01
  2.92283553530000E-01  9.58081676600000E-01  7.91437002120000E-01
  3.74944034040000E-01  7.15333242660000E-01  7.15333736230000E-01
  3.75515055890000E-01  8.77859461130000E-01  8.77859244870000E-01
  5.43199942680000E-01  7.15105708390000E-01  8.82373586350000E-01
  5.43199590950000E-01  8.82374234630000E-01  7.15106424950000E-01
  4.59678386250000E-01  7.96462535690000E-01  7.96462648590000E-01
  4.59048279160000E-01  9.58967953250000E-01  9.58967723060000E-01
  6.26516271990000E-01  7.95837484920000E-01  9.62862053770000E-01
  6.26516125680000E-01  9.62862484910000E-01  7.95838185850000E-01
  7.14446925230000E-01  7.14446925230000E-01  7.14446925230000E-01
  7.10080506640000E-01  8.78236898330000E-01  8.78236961350000E-01
  8.78236961350000E-01  7.10080506640000E-01  8.78236898330000E-01
  8.78236898330000E-01  8.78236961350000E-01  7.10080506640000E-01
  7.96103381210000E-01  7.96103381210000E-01  7.96103381210000E-01
  7.92865309230000E-01  9.60304593710000E-01  9.60304586950000E-01
  9.60304586950000E-01  7.92865309230000E-01  9.60304593710000E-01
  9.60304593710000E-01  9.60304586950000E-01  7.92865309230000E-01
  5.59456659340000E-01  4.59255865840000E-01  5.59438102060000E-01
  4.59255865840000E-01  5.59438102060000E-01  5.59456659340000E-01
  5.59438102060000E-01  5.59456659340000E-01  4.59255865840000E-01
 Scale of Primitive Cell (acell) [bohr]
  3.06485166880000E+01  3.06485166880000E+01  3.06485166880000E+01
 Real space primitive translations (rprimd) [bohr]
  3.06476771396186E+01  1.60407496031276E-01  1.60407496031276E-01
  1.60407496031276E-01  3.06476771396186E+01  1.60407496031276E-01
  1.60407496031276E-01  1.60407496031276E-01  3.06476771396186E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  2.87843961878249E+04
 Angles (23,13,12)= [degrees]
  8.93986892757719E+01  8.93986892757719E+01  8.93986892757719E+01
 Lengths [Bohr]
  3.06485166881509E+01  3.06485166881509E+01  3.06485166881509E+01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 120 120 120
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.24583

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   18.914117 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=  0.000000000000000E+000

 ewald : nr and ng are    3 and   15
  mklocl_recipspace : will add potential with strength vprtrb(:)=
  0.000000000000000E+000  0.000000000000000E+000
  setvtr : istep,n1xccc,moved_rhor=           1           0           0
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
  scfcv : after setvtr, energies%e_hartree=  0.000000000000000E+000

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
[1:compute-0-3] unexpected disconnect completion event from [9:compute-0-5]
Assertion failed in file ../../dapl_conn_rc.c at line 1128: 0
internal ABORT - process 1
[2:compute-0-3] unexpected disconnect completion event from [9:compute-0-5]
Assertion failed in file ../../dapl_conn_rc.c at line 1128: 0
internal ABORT - process 2
[0:compute-0-3] unexpected disconnect completion event from [9:compute-0-5]
Assertion failed in file ../../dapl_conn_rc.c at line 1128: 0
internal ABORT - process 0
[3:compute-0-3] unexpected disconnect completion event from [9:compute-0-5]
Assertion failed in file ../../dapl_conn_rc.c at line 1128: 0
internal ABORT - process 3
[4:compute-0-3] unexpected disconnect completion event from [9:compute-0-5]
[5:compute-0-3] unexpected disconnect completion event from [9:compute-0-5]
Assertion failed in file ../../dapl_conn_rc.c at line 1128: 0
internal ABORT - process 5
Assertion failed in file ../../dapl_conn_rc.c at line 1128: 0
internal ABORT - process 4
APPLICATION TERMINATED WITH THE EXIT STRING: Segmentation fault (signal 11)
