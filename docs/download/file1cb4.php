--- m_libpaw_mpi.F90.orig	2018-07-27 08:35:44.000000000 +0200
+++ m_libpaw_mpi.F90	2018-10-07 11:14:02.047380612 +0200
@@ -54,6 +54,24 @@
  integer,public,parameter :: xpaw_mpi_comm_null = 0
 #endif

+ type xpaw_mpi_attr
+   integer :: attr_data
+ end type
+
+ interface xpaw_mpi_attr
+   module procedure new_xpaw_mpi_attr
+ end interface
+
+ interface mod
+   module procedure mod_xpaw_mpi_attr
+ end interface
+
+#ifdef HAVE_MPI
+ type(xpaw_mpi_attr),public,parameter :: xpaw_mpi_tag_ub = xpaw_mpi_attr(MPI_TAG_UB)
+#else
+ integer,public,parameter :: xpaw_mpi_tag_ub = 1
+#endif
+
 !----------------------------------------------------------------------
 !MPI public procedures.

@@ -184,6 +202,32 @@
 CONTAINS  !===========================================================
 !!***

+function new_xpaw_mpi_attr(key_val)
+  type(xpaw_mpi_attr) :: new_xpaw_mpi_attr
+  integer, intent(in) :: key_val
+!Local variables-------------------
+  integer :: mpierr
+#ifdef HAVE_MPI
+  integer :: attribute_val
+  logical :: lflag
+#endif
+
+  ! Deprecated in MPI2 but not all MPI2 implementations provide MPI_Comm_get_attr !
+  call MPI_ATTR_GET(xpaw_mpi_world, key_val, attribute_val, lflag, mpierr)
+  !call MPI_Comm_get_attr(xpaw_mpi_world, key_val, attribute_val, lflag, mpierr)
+
+  if (lflag) new_xpaw_mpi_attr%attr_data = attribute_val
+end function
+
+
+function mod_xpaw_mpi_attr(a, p)
+  integer :: mod_xpaw_mpi_attr
+  integer, intent(in) :: a
+  type(xpaw_mpi_attr), intent(in) :: p
+
+  mod_xpaw_mpi_attr = mod(a, p%attr_data)
+end function
+
 !!****f* m_libpaw_mpi/xpaw_mpi_abort
 !! NAME
 !!  xpaw_mpi_abort
