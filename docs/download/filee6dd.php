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
 
@@ -180,6 +198,32 @@
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
@@ -2297,7 +2341,7 @@
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
    n1=size(xval,dim=1)
-   my_tag = MOD(tag,MPI_TAG_UB)
+   my_tag = MOD(tag,xpaw_mpi_tag_ub)
    call MPI_RECV(xval,n1,MPI_INTEGER,source,my_tag,spaceComm,MPI_STATUS_IGNORE,ier)
  end if
 #endif
@@ -2358,7 +2402,7 @@
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
    n1=size(xval,dim=1)
-   my_tag = MOD(tag,MPI_TAG_UB)
+   my_tag = MOD(tag,xpaw_mpi_tag_ub)
    call MPI_RECV(xval,n1,MPI_DOUBLE_PRECISION,source,my_tag,spaceComm,MPI_STATUS_IGNORE,ier)
  end if
 #endif
@@ -2419,7 +2463,7 @@
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
    n1=size(xval,dim=1) ; n2=size(xval,dim=2)
-   my_tag=MOD(tag,MPI_TAG_UB)
+   my_tag=MOD(tag,xpaw_mpi_tag_ub)
    call MPI_RECV(xval,n1*n2,MPI_DOUBLE_PRECISION,source,my_tag,spaceComm,MPI_STATUS_IGNORE,ier)
  end if
 #endif
@@ -2480,7 +2524,7 @@
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
    n1=size(xval,dim=1) ; n2=size(xval,dim=2) ; n3=size(xval,dim=3)
-   my_tag=MOD(tag,MPI_TAG_UB)
+   my_tag=MOD(tag,xpaw_mpi_tag_ub)
    call MPI_RECV(xval,n1*n2*n3,MPI_DOUBLE_PRECISION,source,my_tag,spaceComm,MPI_STATUS_IGNORE,ier)
  end if
 #endif
@@ -2541,7 +2585,7 @@
  ierr=0
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
-   my_tag=MOD(tag,MPI_TAG_UB)
+   my_tag=MOD(tag,xpaw_mpi_tag_ub)
    n1=size(xval)
    call MPI_IRECV(xval,n1,MPI_INTEGER,source,my_tag,spaceComm,request,ier)
    ierr=ier
@@ -2604,7 +2648,7 @@
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
    n1=size(xval,dim=1)
-   my_tag=MOD(tag,MPI_TAG_UB)
+   my_tag=MOD(tag,xpaw_mpi_tag_ub)
    call MPI_IRECV(xval,n1,MPI_DOUBLE_PRECISION,source,my_tag,spaceComm,request,ier)
    ierr=ier
  end if
@@ -2666,7 +2710,7 @@
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
    n1=size(xval,dim=1);n2=size(xval,dim=2)
-   my_tag=MOD(tag,MPI_TAG_UB)
+   my_tag=MOD(tag,xpaw_mpi_tag_ub)
    call MPI_IRECV(xval,n1*n2,MPI_DOUBLE_PRECISION,source,my_tag,spaceComm,request,ier)
    ierr=ier
  end if
@@ -2727,7 +2771,7 @@
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
    n1=size(xval,dim=1)
-   my_tag = MOD(tag,MPI_TAG_UB)
+   my_tag = MOD(tag,xpaw_mpi_tag_ub)
    call MPI_SEND(xval,n1,MPI_INTEGER,dest,my_tag,spaceComm,ier)
  end if
 #endif
@@ -2785,7 +2829,7 @@
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
    n1=size(xval,dim=1)
-   my_tag = MOD(tag,MPI_TAG_UB)
+   my_tag = MOD(tag,xpaw_mpi_tag_ub)
    call MPI_SEND(xval,n1,MPI_DOUBLE_PRECISION,dest,my_tag,spaceComm,ier)
  end if
 #endif
@@ -2843,7 +2887,7 @@
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
    n1=size(xval,dim=1) ; n2=size(xval,dim=2)
-   my_tag = MOD(tag,MPI_TAG_UB)
+   my_tag = MOD(tag,xpaw_mpi_tag_ub)
    call MPI_SEND(xval,n1*n2,MPI_DOUBLE_PRECISION,dest,my_tag,spaceComm,ier)
  end if
 #endif
@@ -2901,7 +2945,7 @@
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
    n1=size(xval,dim=1) ; n2=size(xval,dim=2) ; n3=size(xval,dim=3)
-   my_tag = MOD(tag,MPI_TAG_UB)
+   my_tag = MOD(tag,xpaw_mpi_tag_ub)
    call MPI_SEND(xval,n1*n2*n3,MPI_DOUBLE_PRECISION,dest,my_tag,spaceComm,ier)
  end if
 #endif
@@ -2961,7 +3005,7 @@
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
    n1=size(xval,dim=1)
-   my_tag = MOD(tag,MPI_TAG_UB)
+   my_tag = MOD(tag,xpaw_mpi_tag_ub)
    call MPI_ISEND(xval,n1,MPI_INTEGER,dest,my_tag,spaceComm,request,ier)
    ierr=ier
  end if
@@ -3020,7 +3064,7 @@
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
    n1=size(xval,dim=1)
-   my_tag = MOD(tag,MPI_TAG_UB)
+   my_tag = MOD(tag,xpaw_mpi_tag_ub)
    call MPI_ISEND(xval,n1,MPI_DOUBLE_PRECISION,dest,my_tag,spaceComm,request,ier)
    ierr=ier
  end if
@@ -3079,7 +3123,7 @@
 #if defined HAVE_MPI
  if (spaceComm /= xpaw_mpi_comm_self .and. spaceComm /= xpaw_mpi_comm_null) then
    n1=size(xval,dim=1) ; n1=size(xval,dim=2)
-   my_tag = MOD(tag,MPI_TAG_UB)
+   my_tag = MOD(tag,xpaw_mpi_tag_ub)
    call MPI_ISEND(xval,n1*n2,MPI_DOUBLE_PRECISION,dest,my_tag,spaceComm,request,ier)
    ierr=ier
  end if
@@ -3145,7 +3189,7 @@
 #if defined HAVE_MPI
  if (sender==recever.or.spaceComm==xpaw_mpi_comm_null.or.(n1==0)) return
  call MPI_COMM_RANK(spaceComm,me,ier)
- tag = MOD(n1,MPI_TAG_UB)
+ tag = MOD(n1,xpaw_mpi_tag_ub)
  if (recever==me) then
    call MPI_RECV(vrecv,n1,MPI_INTEGER,sender,tag,spaceComm,status,ier)
  end if
@@ -3212,7 +3256,7 @@
 #if defined HAVE_MPI
  if (sender==recever.or.spaceComm==xpaw_mpi_comm_null.or.(n1==0)) return
  call MPI_COMM_RANK(spaceComm,me,ier)
- tag = MOD(n1,MPI_TAG_UB)
+ tag = MOD(n1,xpaw_mpi_tag_ub)
  if (recever==me) then
    call MPI_RECV(vrecv,n1,MPI_DOUBLE_PRECISION,sender,tag,spaceComm,status,ier)
  end if
@@ -3279,7 +3323,7 @@
 #if defined HAVE_MPI
  if (sender==recever.or.spaceComm==xpaw_mpi_comm_null.or.(nt==0)) return
  call MPI_COMM_RANK(spaceComm,me,ier)
- tag=MOD(nt,MPI_TAG_UB)
+ tag=MOD(nt,xpaw_mpi_tag_ub)
  if (recever==me) then
    call MPI_RECV(vrecv,nt,MPI_DOUBLE_PRECISION,sender,tag,spaceComm,status,ier)
  end if
@@ -3346,7 +3390,7 @@
 #if defined HAVE_MPI
  if (sender==recever.or.spaceComm==xpaw_mpi_comm_null.or.(nt==0)) return
  call MPI_COMM_RANK(spaceComm,me,ier)
- tag=MOD(nt,MPI_TAG_UB)
+ tag=MOD(nt,xpaw_mpi_tag_ub)
  if (recever==me) then
    call MPI_RECV(vrecv,nt,MPI_DOUBLE_PRECISION,sender,tag,spaceComm,status,ier)
  end if
