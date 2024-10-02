#!/bin/bash

# Specification (required!)
# - Number of tasks
# - Numer of logical processors per task
# - Amound of swap space per task
#PBS -L tasks=65:lprocs=1:swap=4gb

# Walltime: The maximum time a job can run before being stopped. 
# If not used a default of a few minutes is used. 
# Use this flag to prevent jobs that go bad running for hundreds of hours. 
# Format is HH:MM:SS
#PBS -l walltime=72:00:00

# Give your job a unique name
#PBS -N Pd111_5M5V2x2_Ofcc_TO_Ohcp_test

# Make sure that the environment in which the job runs is the same as 
# the environment in which it was submitted.
## PBS -V

# redirect standard output (-o) and error (-e) (optional)
# if omitted, the name of the job (specified by -N) or
# a generic name (name of the script followed by .o or .e and 
# job number) will be used
#PBS -o stdout.$PBS_JOBID
#PBS -e stderr.$PBS_JOBID

# send mail notification (optional)
#   a        when job is aborted
#   b        when job begins
#   e        when job ends
#   M        your e-mail address (should always be specified)
#PBS -m ae
#PBS -M Willem.Offermans@Vito.be

# Using PBS - Environment Variables :
#
# When a batch job starts execution, a number of environment variables are
# predefined, which include:
#      Variables defined on the execution host.
#      Variables exported from the submission host with
#                -v (selected variables) and -V (all variables).
#      Variables defined by PBS.
#
# The following reflect the environment where the user ran qsub:
# PBS_O_HOST    The host where you ran the qsub command.
# PBS_O_LOGNAME Your user ID where you ran qsub.
# PBS_O_HOME    Your home directory where you ran qsub.
# PBS_O_WORKDIR The working directory where you ran qsub.
#
# These reflect the environment where the job is executing:
# PBS_ENVIRONMENT       Set to PBS_BATCH to indicate the job is a batch job,
#         or to PBS_INTERACTIVE to indicate the job is a PBS interactive job.
# PBS_O_QUEUE   The original queue you submitted to.
# PBS_QUEUE     The queue the job is executing from.
# PBS_JOBID     The job's PBS identifier.
# PBS_JOBNAME   The job's name.


# First load the appropriate cluster module
# Then, activate the appropriate software packages

module load hopper/2018b
module load torque-tools
module load netCDF/4.6.1-intel-2018b-MPI 
module load ABINIT/8.8.4-intel-2018b 

# go to the (current) working directory (optional, if this is the
# directory where you submitted the job)
cd "$PBS_O_WORKDIR"
echo Start Job
export MY_WORKING_DIRECTORY='.'
export OMP_NUM_THREADS=$(torque-lprocs)
export torqueTasks=$(torque-tasks)
torque-host-per-line > machinefile.$PBS_JOBID
date
mpirun -np ${torqueTasks} -machinefile machinefile.${PBS_JOBID} /apps/antwerpen/ivybridge/centos7/ABINIT/8.8.4-intel-2018b/bin/abinit < pd.files > pd.log
echo End Job
