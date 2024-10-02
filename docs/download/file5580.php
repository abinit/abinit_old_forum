From 2eaead002c3d298ecd0185fcb24626314c9b2b24 Mon Sep 17 00:00:00 2001
From: ldamewood <damewood@physics.ucdavis.edu>
Date: Wed, 14 May 2014 16:11:05 -0700
Subject: [PATCH] Fix NetCDF bug

From here:
http://www.unidata.ucar.edu/software/netcdf/docs/known_problems.html#cla
ng-ncgen3
---
 fallbacks/Makefile.am                     |  2 +-
 fallbacks/Makefile.in                     |  3 ++-
 fallbacks/configure                       |  3 +++
 fallbacks/patches/netcdf-4.1.1-0001.patch | 11 +++++++++++
 4 files changed, 17 insertions(+), 2 deletions(-)
 create mode 100644 fallbacks/patches/netcdf-4.1.1-0001.patch

diff --git a/fallbacks/Makefile.am b/fallbacks/Makefile.am
index 9d7076c..7e81920 100644
--- a/fallbacks/Makefile.am
+++ b/fallbacks/Makefile.am
@@ -289,7 +289,7 @@ stamps/netcdf-config-stamp: stamps/netcdf-patch-stamp
 	@touch stamps/netcdf-config-stamp
 
 stamps/netcdf-patch-stamp: stamps/netcdf-unfold-stamp
-	@echo "No patch to apply"
+	$(PATCH) -d sources/$(netcdf_pkg_name) -p1 <$(top_srcdir)/patches/netcdf-4.1.1-0001.patch
 	@touch stamps/netcdf-patch-stamp
 
 stamps/netcdf-unfold-stamp:
diff --git a/fallbacks/Makefile.in b/fallbacks/Makefile.in
index b82e2df..16c8e60 100644
--- a/fallbacks/Makefile.in
+++ b/fallbacks/Makefile.in
@@ -336,6 +336,7 @@ EXTRA_DIST = \
 	patches/bigdft-1.2.0.2-0003.patch \
 	patches/bigdft-abi-1.0.4-0004.patch \
 	patches/atompaw-3.0.1.8-0001.patch \
+	patches/netcdf-4.1.1-0001.patch \
 	transient/lapack-abinit_6.10.tar.gz
 
 all: all-am
@@ -896,7 +897,7 @@ clean_linalg:
 @DO_BUILD_NETCDF_TRUE@	@touch stamps/netcdf-config-stamp
 
 @DO_BUILD_NETCDF_TRUE@stamps/netcdf-patch-stamp: stamps/netcdf-unfold-stamp
-@DO_BUILD_NETCDF_TRUE@	@echo "No patch to apply"
+@DO_BUILD_NETCDF_TRUE@	$(PATCH) -d sources/$(netcdf_pkg_name) -p1 <$(top_srcdir)/patches/netcdf-4.1.1-0001.patch
 @DO_BUILD_NETCDF_TRUE@	@touch stamps/netcdf-patch-stamp
 
 @DO_BUILD_NETCDF_TRUE@stamps/netcdf-unfold-stamp:
diff --git a/fallbacks/configure b/fallbacks/configure
index 7ed213a..96b8955 100755
--- a/fallbacks/configure
+++ b/fallbacks/configure
@@ -3421,6 +3421,9 @@ $as_echo "$as_me: WARNING: no 'patch' command available" >&2;}
   if test "${enable_wannier90}" = "yes"; then
     as_fn_error $? "Wannier90 requires patch - disable Wannier90 or install patch" "$LINENO" 5
   fi
+  if test "${enable_netcdf}" = "yes"; then
+    as_fn_error $? "NetCDF requires patch - disable NetCDF or install patch" "$LINENO" 5
+  fi
 fi
 
 # ---------------------------------------------------------------------------- #
diff --git a/fallbacks/patches/netcdf-4.1.1-0001.patch b/fallbacks/patches/netcdf-4.1.1-0001.patch
new file mode 100644
index 0000000..d4116ab
--- /dev/null
+++ b/fallbacks/patches/netcdf-4.1.1-0001.patch
@@ -0,0 +1,11 @@
+diff -urN netcdf-4.1.1.old/ncgen3/genlib.h netcdf-4.1.1.new/ncgen3/genlib.h
+--- netcdf-4.1.1.old/ncgen3/genlib.h	2009-12-29 10:42:35.000000000 -0800
++++ netcdf-4.1.1.new/ncgen3/genlib.h	2014-05-14 15:58:04.000000000 -0700
+@@ -5,6 +5,7 @@
+  *   See netcdf/COPYRIGHT file for copying and redistribution conditions.
+  *   $Header: /upc/share/CVS/netcdf-3/ncgen3/genlib.h,v 1.15 2009/12/29 18:42:35 dmh Exp $
+  *********************************************************************/
++#include <config.h>
+ #include <stdlib.h>
+ #include <limits.h>
+ 
-- 
1.8.5.2 (Apple Git-48)

