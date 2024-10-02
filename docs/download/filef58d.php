#!/bin/bash -l

#SBATCH  --nodes 16    # each node has 32 cores
#SBATCH  --constraint=haswell
#SBATCH  --time=10:30:00  
#SBATCH  --job-name=XX
#SBATCH  --mail-type=END,FAIL
#SBATCH  --partition=regular             # partition of nodes to be used



cd $SLURM_SUBMIT_DIR

module load abinit

MPIRUN='srun -n 512    -c 2 --cpu_bind=cores'



$MPIRUN abinit < gese.files &> gese.log


