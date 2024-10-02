diff --git a/src/elpa1/elpa1.F90 b/src/elpa1/elpa1.F90
index 872692d..b57635c 100644
--- a/src/elpa1/elpa1.F90
+++ b/src/elpa1/elpa1.F90
@@ -91,8 +91,6 @@ module elpa1_impl
   ! The following routines are public:
   private
 
-  public :: elpa_get_communicators_impl               !< Sets MPI row/col communicators as needed by ELPA
-
   public :: elpa_solve_evp_real_1stage_double_impl    !< Driver routine for real double-precision 1-stage eigenvalue problem
 
 #ifdef WANT_SINGLE_PRECISION_REAL
@@ -135,64 +133,6 @@ module elpa1_impl
 
 contains
 
-!-------------------------------------------------------------------------------
-
-! All ELPA routines need MPI communicators for communicating within
-! rows or columns of processes, these are set here.
-! mpi_comm_rows/mpi_comm_cols can be free'd with MPI_Comm_free if not used any more.
-!
-!  Parameters
-!
-!> \param  mpi_comm_global   Global communicator for the calculations (in)
-!>
-!> \param  my_prow           Row coordinate of the calling process in the process grid (in)
-!>
-!> \param  my_pcol           Column coordinate of the calling process in the process grid (in)
-!>
-!> \param  mpi_comm_rows     Communicator for communicating within rows of processes (out)
-!>
-!> \param  mpi_comm_cols     Communicator for communicating within columns of processes (out)
-!> \result mpierr            integer error value of mpi_comm_split function
-
-
-function elpa_get_communicators_impl(mpi_comm_global, my_prow, my_pcol, mpi_comm_rows, mpi_comm_cols) result(mpierr)
-   ! use precision
-   use elpa_mpi
-   use iso_c_binding
-   implicit none
-
-   integer(kind=c_int), intent(in)     :: mpi_comm_global, my_prow, my_pcol
-   integer(kind=c_int), intent(out)    :: mpi_comm_rows, mpi_comm_cols
-
-   integer                             :: mpierr, mpi_string_length, mpierr2
-#ifdef WITH_MPI
-   character(len=MPI_MAX_ERROR_STRING) :: mpierr_string
-#endif
-   ! mpi_comm_rows is used for communicating WITHIN rows, i.e. all processes
-   ! having the same column coordinate share one mpi_comm_rows.
-   ! So the "color" for splitting is my_pcol and the "key" is my row coordinate.
-   ! Analogous for mpi_comm_cols
-
-   call mpi_comm_split(mpi_comm_global,my_pcol,my_prow,mpi_comm_rows,mpierr)
-#ifdef WITH_MPI
-   if (mpierr .ne. MPI_SUCCESS) then
-     call MPI_ERROR_STRING(mpierr,mpierr_string, mpi_string_length, mpierr2)
-     print *,"MPI ERROR occured during mpi_comm_split for row communicator: ", trim(mpierr_string)
-     stop
-   endif
-#endif
-
-   call mpi_comm_split(mpi_comm_global,my_prow,my_pcol,mpi_comm_cols, mpierr)
-#ifdef WITH_MPI
-   if (mpierr .ne. MPI_SUCCESS) then
-     call MPI_ERROR_STRING(mpierr,mpierr_string, mpi_string_length, mpierr2)
-     print *,"MPI ERROR occured during mpi_comm_split for col communicator: ", trim(mpierr_string)
-     stop
-   endif
-#endif
-
-end function elpa_get_communicators_impl
-
 
 !> \brief elpa_solve_evp_real_1stage_double_impl: Fortran function to solve the real double-precision eigenvalue problem with 1-stage solver
 !>
diff --git a/src/elpa1/legacy_interface/elpa1_template.F90 b/src/elpa1/legacy_interface/elpa1_template.F90
index ebc019c..899b4da 100644
--- a/src/elpa1/legacy_interface/elpa1_template.F90
+++ b/src/elpa1/legacy_interface/elpa1_template.F90
@@ -119,8 +119,8 @@ function elpa_solve_evp_&
    call e%set("nblk", nblk)
 
    call e%set("mpi_comm_parent", mpi_comm_all)
-   call e%set("process_row", my_prow)
-   call e%set("process_col", my_pcol)
+   call e%set("mpi_comm_rows", mpi_comm_rows)
+   call e%set("mpi_comm_cols", mpi_comm_cols)
 
    call e%set("timings",1)
 
diff --git a/src/elpa2/legacy_interface/elpa2_template.F90 b/src/elpa2/legacy_interface/elpa2_template.F90
index 3898397..749a12d 100644
--- a/src/elpa2/legacy_interface/elpa2_template.F90
+++ b/src/elpa2/legacy_interface/elpa2_template.F90
@@ -111,8 +111,8 @@
     call e%set("nblk", nblk)
 
     call e%set("mpi_comm_parent", mpi_comm_all)
-    call e%set("process_row", my_prow)
-    call e%set("process_col", my_pcol)
+    call e%set("mpi_comm_rows", mpi_comm_rows)
+    call e%set("mpi_comm_cols", mpi_comm_cols)
 
     call e%set("timings",1)
 
diff --git a/src/elpa_impl.F90 b/src/elpa_impl.F90
index ffd6802..9811409 100644
--- a/src/elpa_impl.F90
+++ b/src/elpa_impl.F90
@@ -59,6 +59,7 @@ module elpa_impl
 !> \brief Definition of the extended elpa_impl_t type
   type, extends(elpa_abstract_impl_t) :: elpa_impl_t
    private
+   integer :: communicators_owned
 
    !> \brief methods available with the elpa_impl_t type
    contains
@@ -197,14 +198,20 @@ module elpa_impl
     !> \param   self       class(elpa_impl_t), the allocated ELPA object
     !> \result  error      integer, the error code
     function elpa_setup(self) result(error)
-      use elpa1_impl, only : elpa_get_communicators_impl
-      class(elpa_impl_t), intent(inout) :: self
-      integer                           :: error
-      integer                           :: mpi_comm_parent, mpi_comm_rows, mpi_comm_cols, &
-                                           mpierr, process_row, process_col, timings
+      use elpa_utilities, only : error_unit
+#ifdef WITH_MPI
+      use elpa_mpi
+#endif
+      class(elpa_impl_t), intent(inout)   :: self
+      integer                             :: error, timings
 
 #ifdef WITH_MPI
+      integer                             :: mpi_comm_parent, mpi_comm_rows, mpi_comm_cols, &
+                                             mpierr, mpierr2, process_row, process_col, mpi_string_length
+      character(len=MPI_MAX_ERROR_STRING) :: mpierr_string
+
       error = ELPA_ERROR
+
       if (self%is_set("mpi_comm_parent") == 1 .and. &
           self%is_set("process_row") == 1 .and. &
           self%is_set("process_col") == 1) then
@@ -212,23 +219,40 @@ module elpa_impl
         call self%get("mpi_comm_parent", mpi_comm_parent)
         call self%get("process_row", process_row)
         call self%get("process_col", process_col)
-        mpierr = elpa_get_communicators_impl(&
-                        mpi_comm_parent, &
-                        process_row, &
-                        process_col, &
-                        mpi_comm_rows, &
-                        mpi_comm_cols)
+
+        ! mpi_comm_rows is used for communicating WITHIN rows, i.e. all processes
+        ! having the same column coordinate share one mpi_comm_rows.
+        ! So the "color" for splitting is process_col and the "key" is my row coordinate.
+        ! Analogous for mpi_comm_cols
+
+        call mpi_comm_split(mpi_comm_parent,process_col,process_row,mpi_comm_rows,mpierr)
+        if (mpierr .ne. MPI_SUCCESS) then
+          call MPI_ERROR_STRING(mpierr,mpierr_string, mpi_string_length, mpierr2)
+          write(error_unit,*) "MPI ERROR occured during mpi_comm_split for row communicator: ", trim(mpierr_string)
+          return
+        endif
+
+        call mpi_comm_split(mpi_comm_parent,process_row,process_col,mpi_comm_cols, mpierr)
+        if (mpierr .ne. MPI_SUCCESS) then
+          call MPI_ERROR_STRING(mpierr,mpierr_string, mpi_string_length, mpierr2)
+          write(error_unit,*) "MPI ERROR occured during mpi_comm_split for col communicator: ", trim(mpierr_string)
+          return
+        endif
 
         call self%set("mpi_comm_rows", mpi_comm_rows)
         call self%set("mpi_comm_cols", mpi_comm_cols)
 
+        ! remember that we created those communicators and we need to free them later
+        self%communicators_owned = 1
+
         error = ELPA_OK
       endif
 
       if (self%is_set("mpi_comm_rows") == 1 .and. self%is_set("mpi_comm_cols") == 1) then
+        self%communicators_owned = 0
         error = ELPA_OK
       endif
-#else
+#else /* !WITH_MPI */
       error = ELPA_OK
 #endif
 
@@ -2071,9 +2095,22 @@ module elpa_impl
 
     subroutine elpa_destroy(self)
       use elpa_generated_fortran_interfaces
+#ifdef WITH_MPI
+      integer :: mpi_comm_rows, mpi_comm_cols, mpierr
+#endif
       class(elpa_impl_t) :: self
       call timer_free(self%timer)
       call elpa_index_free_c(self%index)
+
+#ifdef WITH_MPI
+      if (self%communicators_owned == 1) then
+        call self%get("mpi_comm_rows", mpi_comm_rows)
+        call self%get("mpi_comm_cols", mpi_comm_cols)
+        call mpi_comm_free(mpi_comm_rows, mpierr)
+        call mpi_comm_free(mpi_comm_cols, mpierr)
+      endif
+#endif
+
     end subroutine
 
 
