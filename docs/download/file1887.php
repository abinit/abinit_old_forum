diff -rupN src/62_ctqmc/m_Ctqmc.F90 src/62_ctqmc_new/m_Ctqmc.F90
--- src/62_ctqmc/m_Ctqmc.F90	2014-06-12 11:01:25.619292932 -0400
+++ src/62_ctqmc_new/m_Ctqmc.F90	2014-06-12 11:24:18.223293597 -0400
@@ -2415,6 +2415,8 @@ include 'mpif.h'
 !  INTEGER                                       :: fin
 #ifdef HAVE_MPI
   INTEGER                                       :: ierr
+  DOUBLE PRECISION, ALLOCATABLE, DIMENSION(:,:) :: buffer_tmp
+  DOUBLE PRECISION, ALLOCATABLE, DIMENSION(:)   :: freqs_tmp
 #endif
   DOUBLE PRECISION                              :: inv_size
   DOUBLE PRECISION, ALLOCATABLE, DIMENSION(:,:) :: buffer 
@@ -2540,9 +2542,12 @@ include 'mpif.h'
     counts(:) = n1
     displs(:) = (/ ( iflavor*n1, iflavor=0, op%size-1 ) /)
 #ifdef HAVE_MPI
-    CALL MPI_ALLGATHERV(MPI_IN_PLACE, 0, MPI_DOUBLE_PRECISION, &
-                        freqs, counts, displs, &
+    MALLOC(freqs_tmp,(1:op%size*n1))
+    CALL MPI_ALLGATHERV(freqs, op%size*n1, MPI_DOUBLE_PRECISION, &
+                        freqs_tmp, counts, displs, &
                         MPI_DOUBLE_PRECISION, op%MY_COMM, ierr)
+    freqs(:) = freqs_tmp(:)
+    FREE(freqs_tmp)
 #endif
     n1 = op%size*n1
     CALL Vector_setSize(op%measNoise(1),n1)
@@ -2555,9 +2560,12 @@ include 'mpif.h'
     counts(:) = n2
     displs(:) = (/ ( iflavor*n2, iflavor=0, op%size-1 ) /)
 #ifdef HAVE_MPI
-    CALL MPI_ALLGATHERV(MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, &
-                        freqs, counts, displs, &
+    MALLOC(freqs_tmp,(1:op%size*n2))
+    CALL MPI_ALLGATHERV(freqs, op%size*n2, MPI_DOUBLE_PRECISION, &
+                        freqs_tmp, counts, displs, &
                         MPI_DOUBLE_PRECISION, op%MY_COMM, ierr)
+    freqs(:) = freqs_tmp(:)
+    FREE(freqs_tmp)
 #endif
     n2 = op%size*n2
     CALL Vector_setSize(op%measNoise(2),n2)
@@ -2698,9 +2706,13 @@ include 'mpif.h'
 !#endif
 
 #ifdef HAVE_MPI
-    CALL MPI_ALLREDUCE(MPI_IN_PLACE, buffer, spAll*flavors, &
+    MALLOC(buffer_tmp,(1:spAll,1:flavors))
+    CALL MPI_ALLREDUCE(buffer, buffer_tmp, spAll*flavors, &
                      MPI_DOUBLE_PRECISION, MPI_SUM, op%MY_COMM, ierr)
-    CALL MPI_ALLREDUCE(MPI_IN_PLACE, op%runTime, 1, MPI_DOUBLE_PRECISION, MPI_MAX, &
+    buffer(:,:) = buffer_tmp(:,:)
+    FREE(buffer_tmp)
+    a = op%runtime
+    CALL MPI_ALLREDUCE(a, op%runTime, 1, MPI_DOUBLE_PRECISION, MPI_MAX, &
              op%MY_COMM, ierr)
 #endif
 
diff -rupN src/62_ctqmc/m_GreenHyb.F90 src/62_ctqmc_new/m_GreenHyb.F90
--- src/62_ctqmc/m_GreenHyb.F90	2014-06-12 11:01:25.619292932 -0400
+++ src/62_ctqmc_new/m_GreenHyb.F90	2014-06-12 11:14:32.195293313 -0400
@@ -795,6 +795,7 @@ include 'mpif.h'
   DOUBLE PRECISION :: correction
   DOUBLE PRECISION, ALLOCATABLE, DIMENSION(:) :: Domega
   DOUBLE PRECISION, ALLOCATABLE, DIMENSION(:) :: A_omega
+  DOUBLE PRECISION, ALLOCATABLE, DIMENSION(:) :: oper
 
   IF ( op%set .EQV. .FALSE. ) &
     CALL ERROR("GreenHyb_backFourier : Uninitialized GreenHyb structure")
@@ -808,6 +809,8 @@ include 'mpif.h'
   tauSamples   = op%samples-1
 
   op%oper = 0.d0
+  MALLOC(oper,(1:tauSamples)) !Don't need the last tau
+  oper(:) = 0.d0
 
   pi         = ACOS(-1.d0)
   twoPi        = 2.d0 * pi
@@ -856,24 +859,29 @@ include 'mpif.h'
       minusOmegaTau = MOD(omega*minusTau, TwoPi)
       sumTerm       = REAL(( op%oper_w(iomega) - CMPLX(0.d0, A_omega(iomega),8) ) &
                       * EXP( CMPLX(0.d0, minusOmegaTau, 8)))
-      op%oper(itau)    = op%oper(itau) + sumTerm
+      oper(itau)    = oper(itau) + sumTerm
     END DO
-    op%oper(itau) = correction + two_invBeta*op%oper(itau)
+    oper(itau) = correction + two_invBeta*oper(itau)
   END DO
   IF ( op%have_MPI .EQV. .TRUE. ) THEN
 ! rassembler les resultats
 #ifdef HAVE_MPI
-    CALL MPI_ALLGATHERV(MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, &
+    CALL MPI_ALLGATHERV(oper, tauSamples, MPI_DOUBLE_PRECISION, &
                       op%oper, counts, displs, &
                       MPI_DOUBLE_PRECISION, op%MY_COMM, residu)
+#else
+    op%oper(1:tauSamples) = oper(1:tauSamples)
 #endif
     FREE(counts)
     FREE(displs)
+  ELSE
+    op%oper(1:tauSamples) = oper(1:tauSamples)
   END IF
   op%oper(tauSamples+1) = A - op%oper(1) !G(0+)-G(0-)=G(0+)+G(beta-)=A
   op%setT = .TRUE.
   FREE(Domega)
   FREE(A_omega)
+  FREE(oper)
 
 END SUBROUTINE GreenHyb_backFourier
 !!***
@@ -957,6 +965,9 @@ include 'mpif.h'
   DOUBLE PRECISION :: iw
   COMPLEX(KIND=8) :: iwtau
   COMPLEX(KIND=8), ALLOCATABLE, DIMENSION(:) :: Gwtmp  
+#ifdef HAVE_MPI
+  COMPLEX(KIND=8), ALLOCATABLE, DIMENSION(:) :: Gwtmpmpi
+#endif
   DOUBLE PRECISION, ALLOCATABLE, DIMENSION(:) :: omegatmp
 
   IF ( op%set .EQV. .FALSE. ) &
@@ -1158,10 +1169,15 @@ include 'mpif.h'
   FREE(X2)
   IF ( op%have_MPI .EQV. .TRUE. ) THEN
 #ifdef HAVE_MPI
-    CALL MPI_ALLGATHERV(MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, &
-                      Gwtmp  , counts, displs, &
+    MALLOC(Gwtmpmpi,(1:Nom))
+    CALL MPI_ALLGATHERV(Gwtmp, Nom, MPI_DOUBLE_COMPLEX, &
+                      Gwtmpmpi  , counts, displs, &
                       MPI_DOUBLE_COMPLEX, op%MY_COMM, residu)
+    Gwtmp(1:Nom) = Gwtmpmpi(1:Nom)
+    FREE(Gwtmpmpi)
 #endif
+
+    FREE(Gwtmpmpi)
     FREE(counts)
     FREE(displs)
   END IF
