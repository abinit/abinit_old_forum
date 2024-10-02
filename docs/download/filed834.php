Sender: LSF System <lsfadmin@gwdd124>
Subject: Job 9102322: <test_v1_parallel> in cluster <gwd_hpc> Done

Job <test_v1_parallel> was submitted from host <gwdu101> by user <hgibhar> in cluster <gwd_hpc>.
Job was executed on host(s) <8*gwdd124>, in queue <mpi-short>, as user <hgibhar> in cluster <gwd_hpc>.
</usr/users/hgibhar> was used as the home directory.
</home/uni08/hgibhar/abinit_tutorials_863p/make_test_v1> was used as the working directory.
Started at Results reported on 
Your job looked like:

------------------------------------------------------------
# LSBATCH: User input
#!/bin/sh

##parallel job
#BSUB -q mpi-short
#BSUB -n 8

#BSUB -x

#BSUB -R same[model]
#BSUB -R span[ptile='!']

#BSUB -W 02:00

#BSUB -a intelmpi

#BSUB -J test_v1_parallel
#BSUB -o test_v1_parallel.%J.out
#BSUB -e test_v1_parallel.%J.err 

module load intel/compiler intel/mkl intel/mpi namd
cp $HOME/abinit-8.6.3.parallel/myabinitparallel/src/98_main/abinit abinit 

mpirun.lsf ./abinit < testin_v1.files > testin_v1.${LSB_JOBID}.log 

rm -f abinit *DDB *EIG *nc *WFK
------------------------------------------------------------

Successfully completed.

Resource usage summary:

    CPU time :                                   581.00 sec.
    Max Memory :                                 293 MB
    Average Memory :                             182.06 MB
    Total Requested Memory :                     -
    Delta Memory :                               -
    Max Swap :                                   1364 MB
    Max Processes :                              21
    Max Threads :                                23
    Run time :                                   277 sec.
    Turnaround time :                            303 sec.

The output (if any) follows:



PS:

Read file <test_v1_parallel.9102322.err> for stderr output of this job.

