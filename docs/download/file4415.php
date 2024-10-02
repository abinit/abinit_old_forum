--------------------------------------------------------------------------
By default, for Open MPI 4.0 and later, infiniband ports on a device
are not used by default.  The intent is to use UCX for these devices.
You can override this policy by setting the btl_openib_allow_ib MCA parameter
to true.

  Local host:              lxir127
  Local adapter:           mlx4_0
  Local port:              1

--------------------------------------------------------------------------
--------------------------------------------------------------------------
WARNING: There was an error initializing an OpenFabrics device.

  Local host:   lxir127
  Local device: mlx4_0
--------------------------------------------------------------------------
 
--- !ERROR
src_file: m_pspheads.F90
src_line: 519
mpi_rank: 0
message: |
    list-directed I/O syntax error, unit 1024, file /u/milias/Work/qch/projects/open-collection/theoretical_chemistry/software_runs/abinit/runs/H2_in_box/paw/H.rel-pbe-kjpaw_psl.1.0.0.UPF
...
 
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------
