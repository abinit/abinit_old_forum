diff -Naur ./abinit8-sp.patch ../abinit-8.0.8-SP/abinit8-sp.patch
--- ./abinit8-sp.patch	1970-01-01 08:00:00.000000000 +0800
+++ ../abinit-8.0.8-SP/abinit8-sp.patch	2017-01-14 09:52:14.314046078 +0800
@@ -0,0 +1,2582 @@
+diff -Naur ./README.GPU_SINGLE ../abinit-8.0.8-SP/README.GPU_SINGLE
+--- ./README.GPU_SINGLE	1970-01-01 08:00:00.000000000 +0800
++++ ../abinit-8.0.8-SP/README.GPU_SINGLE	2017-01-08 12:23:14.538649800 +0800
+@@ -0,0 +1,12 @@
++Changed files
++
++invars0.F90
++gpu_linalg.cu
++gpu_apply_local_potential.cu
++gpu_compute_nl_hamiltonian.cu
++gpu_compute_nl_projections.cu
++gpu_density_accumulation.cu
++gpu_fourwf.cu
++gpu_mkkpg.cu
++gpu_nonlop.cu
++gpu_sphere.cu
+diff -Naur ./src/15_gpu_toolbox/gpu_linalg.cu ../abinit-8.0.8-SP/src/15_gpu_toolbox/gpu_linalg.cu
+--- ./src/15_gpu_toolbox/gpu_linalg.cu	2016-08-06 16:05:01.000000000 +0800
++++ ../abinit-8.0.8-SP/src/15_gpu_toolbox/gpu_linalg.cu	2017-01-08 10:58:16.566670316 +0800
+@@ -12,6 +12,10 @@
+  *
+  */
+ 
++#if defined HAVE_CONFIG_H
++#include "config.h"
++#endif
++
+ #include <cublas.h>
+ #include "gpu_four_header.h"
+ 
+@@ -77,6 +81,7 @@
+ //            the correct one is in xx_gpu_toolbox/gpu_linalg.cu
+ /*=========================================================================*/
+ 
++#if defined HAVE_GPU_CUDA_DP
+ extern "C" void gpu_xgemm_(int* cplx,char *transA,char *transB,int *N,int *M,int *K,cuDoubleComplex *alpha,
+ 			   void **A_ptr,int *lda,void** B_ptr,int *ldb,cuDoubleComplex *beta,void** C_ptr,int *ldc){
+   (*cplx==1)?
+@@ -85,6 +90,17 @@
+ 		(cuDoubleComplex *)(*B_ptr),*ldb,*beta,(cuDoubleComplex *)(*C_ptr),*ldc);
+ }
+ 
++#else
++extern "C" void gpu_xgemm_(int* cplx,char *transA,char *transB,int *N,int *M,int *K,cuFloatComplex *alpha,
++			   void **A_ptr,int *lda,void** B_ptr,int *ldb,cuFloatComplex *beta,void** C_ptr,int *ldc){
++  (*cplx==1)?
++    cublasDgemm(*transA,*transB,*N,*M,*K,(*alpha).x,(float *)(*A_ptr),*lda,(float *)(*B_ptr),*ldb,(*beta).x,(float *)(*C_ptr),*ldc):
++    cublasZgemm(*transA,*transB,*N,*M,*K,*alpha,(cuFloatComplex *)(*A_ptr),*lda,
++		(cuFloatComplex *)(*B_ptr),*ldb,*beta,(cuFloatComplex *)(*C_ptr),*ldc);
++}
++
++#endif
++
+ /*=========================================================================*/
+ // NAME
+ //  gpu_xtrsm
+@@ -131,10 +147,18 @@
+ // OUTPUT
+ //  b_gpu
+ /*=========================================================================*/
+-
++#if defined HAVE_GPU_CUDA_DP
+ extern "C" void gpu_xtrsm_(int* cplx,char *side,char *uplo,char *transA,char *diag,int *N,int *M,cuDoubleComplex *alpha,
+ 			   void **A_ptr,int *ldA,void** B_ptr,int *ldB){
+   (*cplx==1)?
+     cublasDtrsm(*side,*uplo,*transA,*diag,*N,*M,(*alpha).x,(double *)(*A_ptr),*ldA,(double *)(*B_ptr),*ldB):
+     cublasZtrsm(*side,*uplo,*transA,*diag,*N,*M,*alpha,(cuDoubleComplex *)(*A_ptr),*ldA,(cuDoubleComplex *)(*B_ptr),*ldB);
+ }
++#else
++extern "C" void gpu_xtrsm_(int* cplx,char *side,char *uplo,char *transA,char *diag,int *N,int *M,cuFloatComplex *alpha,
++			   void **A_ptr,int *ldA,void** B_ptr,int *ldB){
++  (*cplx==1)?
++    cublasDtrsm(*side,*uplo,*transA,*diag,*N,*M,(*alpha).x,(float *)(*A_ptr),*ldA,(float *)(*B_ptr),*ldB):
++    cublasZtrsm(*side,*uplo,*transA,*diag,*N,*M,*alpha,(cuFloatComplex *)(*A_ptr),*ldA,(cuFloatComplex *)(*B_ptr),*ldB);
++}
++#endif
+diff -Naur ./src/52_manage_cuda/gpu_apply_local_potential.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_apply_local_potential.cu
+--- ./src/52_manage_cuda/gpu_apply_local_potential.cu	2016-08-06 16:05:01.000000000 +0800
++++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_apply_local_potential.cu	2017-01-08 11:42:44.244390756 +0800
+@@ -48,6 +48,7 @@
+ /*******                                                 **********/
+ /******************************************************************/
+ 
++#if defined HAVE_GPU_CUDA_DP
+ __global__ void kernel_apply_local_potential(double2 *fofr,double* denpot,int nfft_tot){
+   int thread_id = threadIdx.x + blockDim.x*blockIdx.x;
+   int idat = blockIdx.y;
+@@ -57,6 +58,17 @@
+   }
+ }
+ 
++#else
++__global__ void kernel_apply_local_potential(float2 *fofr,float* denpot,int nfft_tot){
++  int thread_id = threadIdx.x + blockDim.x*blockIdx.x;
++  int idat = blockIdx.y;
++  for(int id=thread_id;id<nfft_tot;id+=blockDim.x*gridDim.x){
++    fofr[id + idat*nfft_tot].x *= denpot[id] ;
++    fofr[id + idat*nfft_tot].y *= denpot[id] ;
++  }
++}
++#endif
++
+ 
+ 
+ /******************************************************************/
+@@ -65,6 +77,7 @@
+ /*******                                                 **********/
+ /******************************************************************/
+ 
++#if defined HAVE_GPU_CUDA_DP
+ extern "C" void gpu_apply_local_potential_(double2 *fofr,double* denpot,int* nfft_tot,int *ndat,cudaStream_t *compute_stream)
+ {
+ 
+@@ -87,4 +100,29 @@
+ 
+ }//end subroutine gpu_apply_local_potential
+ 
++#else
++extern "C" void gpu_apply_local_potential_(float2 *fofr,float* denpot,int* nfft_tot,int *ndat,cudaStream_t *compute_stream)
++{
++
++  //Arguments ------------------------------------
++  //scalars
++  // integer intent(int) :: nfft_tot,ndat
++  //arrays
++  // Complex intent(inout) :: fofr
++  // double intent(in) :: denpot
++  //Locals
++  dim3 grid,bloc;
++  // *************************************************************************
++
++  bloc.x = BLOCK_SIZE;
++  grid.x = min(( *nfft_tot + bloc.x - 1 )/bloc.x,MAX_GRID_SIZE);
++  grid.y = *ndat;
++
++  //Call To Kernel
++  kernel_apply_local_potential<<<grid,bloc,0,*compute_stream>>>(fofr,denpot,*nfft_tot);
++
++}//end subroutine gpu_apply_local_potential
++
++#endif
++
+ //***
+diff -Naur ./src/52_manage_cuda/gpu_compute_nl_hamiltonian.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_compute_nl_hamiltonian.cu
+--- ./src/52_manage_cuda/gpu_compute_nl_hamiltonian.cu	2016-08-06 16:05:01.000000000 +0800
++++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_compute_nl_hamiltonian.cu	2017-01-08 11:44:14.256381323 +0800
+@@ -22,6 +22,10 @@
+ //
+ // SOURCE
+ 
++#if defined HAVE_CONFIG_H
++#include "config.h"
++#endif
++
+ #include <stdio.h>
+ #include <stdlib.h>
+ 
+@@ -31,6 +35,7 @@
+ /**********                                      *******************/
+ /*******************************************************************/
+ 
++#if defined HAVE_GPU_CUDA_DP
+ __device__ static inline void reduce_complex_64(volatile double *sh_vect_x,volatile double *sh_vect_y){
+   //We have only 2 warps, the first reduce the real part, the second the imaginary one
+   //No more synchronization is needed
+@@ -641,4 +646,621 @@
+   }//end choice!=1
+ }//End of gpu_compute_nl_hamiltonian
+ 
++
++
++
++
++
++#else
++__device__ static inline void reduce_complex_64(volatile float *sh_vect_x,volatile float *sh_vect_y){
++  //We have only 2 warps, the first reduce the real part, the second the imaginary one
++  //No more synchronization is needed
++  if(threadIdx.x < 32)
++    sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + 32];
++  else//if(threadIdx.x > 31)
++    sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - 32];
++
++  if(threadIdx.x < 16)
++    sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + 16];
++  if(threadIdx.x > 47)
++    sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - 16];
++
++  if(threadIdx.x < 8)
++    sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + 8];
++  if(threadIdx.x > 55)
++    sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - 8];
++
++  if(threadIdx.x < 4)
++    sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + 4];
++  if(threadIdx.x > 59)
++    sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - 4];
++
++  if(threadIdx.x < 2)
++    sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + 2];
++  if(threadIdx.x > 61)
++    sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - 2];
++
++  if(threadIdx.x < 1)
++    sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + 1];
++  if(threadIdx.x > 62)
++    sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - 1];
++}
++
++__device__ static inline  void reduce_double_32(volatile float *sh_vect){
++  //We have only 1 active warp,
++  //No more synchronization is needed
++  if(threadIdx.x < 16)
++    sh_vect[threadIdx.x] += sh_vect[threadIdx.x + 16];
++  if(threadIdx.x < 8)
++    sh_vect[threadIdx.x] += sh_vect[threadIdx.x + 8];
++  if(threadIdx.x < 4)
++    sh_vect[threadIdx.x] += sh_vect[threadIdx.x + 4];
++  if(threadIdx.x < 2)
++    sh_vect[threadIdx.x] += sh_vect[threadIdx.x + 2];
++  if(threadIdx.x < 1)
++    sh_vect[threadIdx.x] += sh_vect[threadIdx.x + 1];
++}
++
++__global__ void kernel_compute_proj_factor(float2 *proj,float2 *dproj,
++					   float2 *val_ajlmn,float2 *val_sajlmn,
++					   float *enl,float *sij,
++					   float *rdlmn,float *rdproj,
++					   const int *atindx1,const unsigned char *nlmn,
++					   const int *indlmn,const unsigned short int* atoms,
++					   const unsigned char *lmn,const unsigned char *typat,
++					   const int paw_opt,const int dimenl1,const int lmnmax,
++					   const int nb_projections,const int natoms,
++					   const int choice, const int signs, const float lambda
++					   ){
++
++  int iproj=threadIdx.x + blockIdx.x*blockDim.x;
++  float2 a_jlmn,sa_jlmn;
++  float tmp_loc;
++  unsigned short int iatom,jatom;
++  unsigned char jlmn,itypat;
++
++  if(iproj<nb_projections){
++
++    //Get the couple (iatom,ilmn) of the thread's projection
++    iatom=atoms[iproj];//atoms's indice sorted by type
++    jatom=atindx1[iatom] - 1; //atoms's indice not sorted (-1 because of fortran cpu storage)
++    jlmn =lmn[iproj];
++    itypat=typat[iproj];
++    int l=indlmn[ 0 + 6*(jlmn + lmnmax*itypat)];
++    //Norm Conserving Pseudo Potential
++    if(paw_opt==0){
++      float2 proj_ilmn_R;
++      float val_enl; //enl is real when norm conserving
++      int iln=indlmn[ 4 + 6*(jlmn + lmnmax*itypat)]; // iln=indlmn(5,ilmn) (pour un type fixe)
++      val_enl = enl[(iln-1) + dimenl1*itypat]; //enl_(1)=enl(iln,itypat,ispinor)
++      proj_ilmn_R = proj[iproj];
++      a_jlmn.x = val_enl * proj_ilmn_R.x ;//gxfac(1:cplex,ilmn,ia,ispinor)=enl_(1)*gx(1:cplex,ilmn,ia,ispinor)
++      a_jlmn.y = val_enl * proj_ilmn_R.y ;
++    }
++    else{ //PAW
++      a_jlmn.x=0.;
++      a_jlmn.y=0.;
++      sa_jlmn.x=0.;
++      sa_jlmn.y=0.;
++      //Accumulate projection;
++      for(int ilmn=0;ilmn<nlmn[itypat];ilmn++){
++	int ijlmn= (ilmn<jlmn? ilmn +  jlmn*(jlmn+1)/2 : jlmn +  ilmn*(ilmn+1)/2 );
++	float val_enl = enl[ijlmn + dimenl1*jatom];
++	float2 proj_ilmn_R = proj[ iproj + ilmn - jlmn];
++	a_jlmn.x +=  val_enl*proj_ilmn_R.x;
++	a_jlmn.y +=  val_enl*proj_ilmn_R.y;
++	float val_sij= sij[ijlmn + dimenl1*itypat];
++	sa_jlmn.x +=  val_sij*proj_ilmn_R.x;
++	sa_jlmn.y +=  val_sij*proj_ilmn_R.y;
++      }
++    }
++    if(paw_opt==2){
++      a_jlmn.x -= lambda*sa_jlmn.x;
++      a_jlmn.y -= lambda*sa_jlmn.y;
++    }
++
++    //Cas choice==1 && signs==2 :  a_jlmn = a_jlmn*i^(-l)
++    if(choice==1){
++      tmp_loc = a_jlmn.x;
++      switch (l%4){
++	//case 0: //i^(-l) = 1 : Nothing to do
++      case 1: //i^(-l) = -i
++	a_jlmn.x = a_jlmn.y;
++	a_jlmn.y = -tmp_loc;
++	tmp_loc = sa_jlmn.x;
++	sa_jlmn.x = sa_jlmn.y;
++	sa_jlmn.y = -tmp_loc;
++	break;
++      case 2: //i^(-l) = -1
++	a_jlmn.x =  -a_jlmn.x ;
++	a_jlmn.y =  -a_jlmn.y ;
++	sa_jlmn.x = -sa_jlmn.x;
++	sa_jlmn.y = -sa_jlmn.y;
++	break;
++      case 3: //i^(-l) = i
++	a_jlmn.x = -a_jlmn.y;
++	a_jlmn.y = tmp_loc;
++	tmp_loc = sa_jlmn.x;
++	sa_jlmn.x = -sa_jlmn.y;
++	sa_jlmn.y = tmp_loc;
++	break;
++      default:
++	break;
++      }
++      //Store computed values
++      val_ajlmn[iproj]=a_jlmn;
++      val_sajlmn[iproj]=sa_jlmn;
++    }//End choice==1 && signs==2
++
++    //Case choice==2 && signs==1: a_jlmn_alpha = a_jlmn*conjuguate(dproj(jlmn,alpha))
++    else if(choice==2){
++      if(paw_opt==3){
++	a_jlmn.x = sa_jlmn.x;
++	a_jlmn.y = sa_jlmn.y;
++      }
++      float2 val_dproj;
++      //Alpha1 : ialpha=0
++      val_dproj=dproj[iproj + 0*nb_projections];
++      rdlmn[jlmn + lmnmax*(iatom + 0*natoms)] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
++      //Alpha2 : ialpha=1
++      val_dproj=dproj[iproj + 1*nb_projections];
++      rdlmn[jlmn + lmnmax*(iatom + 1*natoms)] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
++      //Alpha3 : ialpha=2
++      val_dproj=dproj[iproj + 2*nb_projections];
++      rdlmn[jlmn + lmnmax*(iatom + 2*natoms)] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
++    }
++
++    //Cas choice==3 && signs==1: a_jlmn_R_alphabeta = a_jlmn_R*conjuguate(dproj(iproj,alphabeta))
++    else if(choice==3){
++      if(paw_opt==3){
++	a_jlmn.x = sa_jlmn.x;
++	a_jlmn.y = sa_jlmn.y;
++      }
++      float2 val_dproj;
++      for(int ialphabeta=0;ialphabeta<7;ialphabeta++){
++	//ialphabeta=0
++	val_dproj=dproj[iproj + ialphabeta*nb_projections];
++	rdproj[iproj + ialphabeta*nb_projections] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
++      }
++    }
++    //Case choice==23: both choice 2 and choice 3
++    else if(choice==23){
++      if(paw_opt==3){
++	a_jlmn.x = sa_jlmn.x;
++	a_jlmn.y = sa_jlmn.y;
++      }
++      //Choice 2 part
++      float2 val_dproj;
++      //Alpha1 : ialpha=0
++      val_dproj=dproj[iproj + 1*nb_projections];
++      rdlmn[jlmn + lmnmax*(iatom + 0*natoms)] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
++      //Alpha2 : ialpha=1
++      val_dproj=dproj[iproj + 2*nb_projections];
++      rdlmn[jlmn + lmnmax*(iatom + 1*natoms)] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
++      //Alpha3 : ialpha=2
++      val_dproj=dproj[iproj + 3*nb_projections];
++      rdlmn[jlmn + lmnmax*(iatom + 2*natoms)] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
++
++
++      //choice 3 part
++      //ialphabeta =0
++      val_dproj=dproj[iproj];
++      rdproj[iproj] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
++      //others
++      for(int ialphabeta=1;ialphabeta<7;ialphabeta++){
++	val_dproj=dproj[iproj + (ialphabeta+3)*nb_projections];
++	rdproj[iproj + ialphabeta*nb_projections] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
++      }
++    }//end choice 23
++  }//end if thread's global id < nb_projection
++}//End of kernel_compute_proj_factor
++
++
++//Note that we assume in a first time we have only one block in X direction,
++// So we have gridDim.x = 1 and blockIdx.x=0
++// Blocks in Y direction represent a plane wave couple indexed by jpw
++// threads of the blocks take care of a couple (iaton,ilmn)
++//The primary compute and the reduction are made over the threads of this block
++__global__ void kernel_compute_nl_hamiltonian(float2 *vectin,float2 *vectout,float2 *svectout,
++					      float2 *val_ajlmn,float2 *val_sajlmn,
++					      float2 *ph3dout,float *ffnlout,
++					      const unsigned short int* atoms,
++					      const unsigned char *lmn,const unsigned char *typat,
++					      const int paw_opt,const int dimffnlout,const int npwout,
++					      const int nb_projections,const int lmnmax,
++					      const float four_pi_by_ucvol,const float lambda
++					      ){
++  //Definition of locals
++  unsigned short int jpw,iatom;
++  unsigned char jlmn,itypat;
++  float2 vect_loc,svect_loc;
++
++  //Shared memory areas to compute and reduce
++  extern __shared__ float sh_mem[];
++  float *sh_vect_x = sh_mem ;
++  float *sh_vect_y = &(sh_mem[blockDim.x]);
++
++  jpw=blockIdx.y;
++
++  vect_loc.x = 0.;
++  vect_loc.y = 0.;
++  svect_loc.x = 0.;
++  svect_loc.y = 0.;
++
++  //Step 1: Compute value for each plane wave and reduce by thread in sh mem
++  for(int iproj=threadIdx.x ; iproj<nb_projections ; iproj+=blockDim.x){
++    float2 a_jlmn,sa_jlmn,ph3d;
++    float ffnl;
++
++    //Get the couple (iatom,ilmn) of the thread's projection
++    iatom=atoms[iproj];//atoms's indice sorted by type
++    jlmn =lmn[iproj];
++    itypat=typat[iproj];
++
++    //Read the projections factor
++    a_jlmn =val_ajlmn[iproj];
++    sa_jlmn=val_sajlmn[iproj];
++
++    //Accumulate the contribution of the projection for this thread in register
++    ffnl = ffnlout[jpw + npwout*(0 + dimffnlout*(jlmn + lmnmax*itypat))]; //ffnlout(npwout,dimffnlout,lmnmax,ntypat)
++    ph3d = ph3dout[jpw + npwout*iatom];
++
++    ph3d.x *= ffnl;
++    ph3d.y *= ffnl;
++
++    //Warning: the product is between a_jlmn and conjuguate(ph3d)
++    vect_loc.x += a_jlmn.x*ph3d.x + a_jlmn.y*ph3d.y;
++    vect_loc.y += a_jlmn.y*ph3d.x - a_jlmn.x*ph3d.y;
++    svect_loc.x += sa_jlmn.x*ph3d.x + sa_jlmn.y*ph3d.y;
++    svect_loc.y += sa_jlmn.y*ph3d.x - sa_jlmn.x*ph3d.y;
++
++  }//End loop to performs all projections
++
++  if(paw_opt!=3){
++    //Step2: We reduce in Shared Memory
++    sh_vect_x[threadIdx.x]=vect_loc.x;
++    sh_vect_y[threadIdx.x]=vect_loc.y;
++    for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
++      //We ensure every access in shared mem is accomplished in the block
++      __syncthreads();
++      if( threadIdx.x <  decalage)
++	sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + decalage];
++      else if(threadIdx.x >= (blockDim.x - decalage))
++	sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - decalage];
++    }
++    __syncthreads();
++    //Step3: Thread 0 writes the results for the block (ie for the plane wave)
++    if(threadIdx.x==0){
++      if(paw_opt==2){
++	vect_loc.x = -lambda*vectin[jpw].x + four_pi_by_ucvol * sh_vect_x[0];
++	vect_loc.x = -lambda*vectin[jpw].y + four_pi_by_ucvol * sh_vect_y[blockDim.x-1];
++      }
++      else{
++	vect_loc.x = four_pi_by_ucvol * sh_vect_x[0];
++	vect_loc.y = four_pi_by_ucvol * sh_vect_y[blockDim.x-1];
++      }
++      vectout[jpw] = vect_loc;
++    }
++  }
++
++  if(paw_opt>2){
++    //Step4: We reduce for overlap
++    __syncthreads();
++    sh_vect_x[threadIdx.x]=svect_loc.x;
++    sh_vect_y[threadIdx.x]=svect_loc.y;
++    for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
++      //We ensure every access in shared mem is accomplished in the block
++      __syncthreads();
++      if( threadIdx.x <  decalage)
++	sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + decalage];
++      else if(threadIdx.x >= (blockDim.x - decalage))
++	sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - decalage];
++    }
++    __syncthreads();
++    //Step5: Thread 0 writes the results for the block (ie for the plane wave)
++    if(threadIdx.x==0){
++      svect_loc = vectin[jpw];
++      svect_loc.x += four_pi_by_ucvol * sh_vect_x[0];
++      svect_loc.y += four_pi_by_ucvol * sh_vect_y[blockDim.x-1];
++      svectout[jpw] = svect_loc;
++    }
++  }//End of overlap calculation
++
++}//end of kernel_compute_nl_hamiltonian
++
++__global__ void kernel_compute_nl_hamiltonian_64(float2 *vectin,float2 *vectout,float2 *svectout,
++						 float2 *val_ajlmn,float2 *val_sajlmn,
++						 float2 *ph3dout,float *ffnlout,
++						 const unsigned short int* atoms,
++						 const unsigned char *lmn,const unsigned char *typat,
++						 const int paw_opt,const int dimffnlout,const int npwout,
++						 const int nb_projections,const int lmnmax,
++						 const float four_pi_by_ucvol,const float lambda
++						 ){
++
++  //Definition of locals
++  unsigned short int jpw,iatom;
++  unsigned char jlmn,itypat;
++
++  float2 vect_loc,svect_loc;
++
++  //Shared memory areas to compute and reduce
++  extern __shared__ float sh_mem[];
++  float *sh_vect_x = sh_mem ;
++  float *sh_vect_y = &(sh_mem[64]);
++
++  jpw=blockIdx.y;
++
++  vect_loc.x = 0.;
++  vect_loc.y = 0.;
++  svect_loc.x = 0.;
++  svect_loc.y = 0.;
++
++  //Step 1: Compute value for each plane wave and reduce by thread in sh mem
++  for(int iproj=threadIdx.x ; iproj<nb_projections ; iproj+=64){
++    float2 a_jlmn,sa_jlmn,ph3d;
++    float ffnl;
++
++    //Get the couple (iatom,ilmn) of the thread's projection
++    iatom=atoms[iproj];//atoms's indice sorted by type
++    jlmn =lmn[iproj];
++    itypat=typat[iproj];
++
++    //Read the projections factor
++    a_jlmn =val_ajlmn[iproj];
++    sa_jlmn=val_sajlmn[iproj];
++
++    //Accumulate the contribution of the projection for this thread in register
++    //These 2 loads are'nt coalesced and may be costly
++    ffnl = ffnlout[jpw + npwout*(0 + dimffnlout*(jlmn + lmnmax*itypat))]; //ffnlout(npwout,dimffnlout,lmnmax,ntypat)
++    ph3d = ph3dout[jpw + npwout*iatom];
++
++    ph3d.x *= ffnl;
++    ph3d.y *= ffnl;
++
++    //Warning: the product is between a_jlmn and conjuguate(ph3d)
++    vect_loc.x += a_jlmn.x*ph3d.x + a_jlmn.y*ph3d.y;
++    vect_loc.y += a_jlmn.y*ph3d.x - a_jlmn.x*ph3d.y;
++    svect_loc.x += sa_jlmn.x*ph3d.x + sa_jlmn.y*ph3d.y;
++    svect_loc.y += sa_jlmn.y*ph3d.x - sa_jlmn.x*ph3d.y;
++
++  }//End loop to performs all projections
++
++  //if(paw_opt!=3){
++    //Step2: We reduce in Shared Memory
++    sh_vect_x[threadIdx.x]=vect_loc.x;
++    sh_vect_y[threadIdx.x]=vect_loc.y;
++    __syncthreads();
++    reduce_complex_64(sh_vect_x,sh_vect_y);
++    __syncthreads();
++    //Step3: Thread 0 writes the results for the block (ie for the plane wave)
++    if(threadIdx.x==0){
++      if(paw_opt==2){
++	vect_loc.x = -lambda*vectin[jpw].x + four_pi_by_ucvol * sh_vect_x[0];
++	vect_loc.x = -lambda*vectin[jpw].y + four_pi_by_ucvol * sh_vect_y[63];
++      }
++      else{
++	vect_loc.x = four_pi_by_ucvol * sh_vect_x[0];
++	vect_loc.y = four_pi_by_ucvol * sh_vect_y[63];
++      }
++      vectout[jpw] = vect_loc;
++    }
++    //}
++
++    //  if(paw_opt>2){
++    //Step4: We reduce for overlap
++    __syncthreads();
++    sh_vect_x[threadIdx.x]=svect_loc.x;
++    sh_vect_y[threadIdx.x]=svect_loc.y;
++     __syncthreads();
++     reduce_complex_64(sh_vect_x,sh_vect_y);
++     __syncthreads();
++
++    //Step5: Thread 0 writes the results for the block (ie for the plane wave)
++    if(threadIdx.x==0){
++      svect_loc = vectin[jpw];
++      svect_loc.x += four_pi_by_ucvol * sh_vect_x[0];
++      svect_loc.y += four_pi_by_ucvol * sh_vect_y[63];
++      svectout[jpw] = svect_loc;
++    }
++    //  }//End of overlap calculation
++
++}//end of kernel_compute_nl_hamiltonian_64
++
++
++//Accumulate previously calculate factors to get forces
++__global__ void kernel_compute_forces(float *rdlmn,float *enlout,
++				      const int decalage_enlout,
++				      const int natoms,const int lmnmax
++				      ){
++
++  extern __shared__ float enl_sh_sum[];
++  enl_sh_sum[threadIdx.x] = 0.;
++  int ialpha=blockIdx.x;
++  int iatom=blockIdx.y;
++
++  //Load in shared memory
++  for(int jlmn=threadIdx.x; jlmn<lmnmax; jlmn+=blockDim.x)
++    //rdlmn is set to 0 if jlmn >= nlmn(type(iatoms))
++    enl_sh_sum[threadIdx.x] += rdlmn[jlmn + lmnmax*(iatom + ialpha*natoms)];
++
++  //Reduce in shared memory
++  __syncthreads();
++  reduce_double_32(enl_sh_sum);
++  // for(int decalage=blockDim.x/2;decalage>0;decalage=decalage/2){
++  //     __syncthreads();
++  //     if(threadIdx.x < decalage)
++  //       enl_sh_sum[threadIdx.x] += enl_sh_sum[threadIdx.x + decalage];
++  //   }
++
++  //Write results
++  if(threadIdx.x==0)
++    enlout[decalage_enlout + ialpha + 3*iatom] = 2*enl_sh_sum[0];
++
++}//end of kernel_compute_forces
++
++
++//Compute the stress tensor in reduced coordinates
++__global__ void kernel_reduce_stress(float *rdproj,float *d_enlk,
++				     const int nb_projections){
++  extern __shared__ float sh_mem[];
++  int ialphabeta=blockIdx.x;
++
++  sh_mem[threadIdx.x]=0.;
++
++  //Acumulate in Shared Mem
++  for(int iproj= threadIdx.x; iproj < nb_projections ; iproj+=blockDim.x){
++    sh_mem[threadIdx.x] += rdproj[iproj + ialphabeta*nb_projections];
++  }
++
++  //Reduce in shared memory
++  for(int decalage=blockDim.x/2;decalage>0;decalage=decalage/2){
++    __syncthreads();
++    if(threadIdx.x < decalage)
++      sh_mem[threadIdx.x] += sh_mem[threadIdx.x + decalage];
++  }
++
++  //Write results
++  if(threadIdx.x==0)
++    d_enlk[ialphabeta] = sh_mem[0];
++}
++
++__constant__ unsigned char imunu[] = {0,1,2,3,4,5,3,4,5};
++__constant__ unsigned char imu[] = {0,1,2,1,0,0,2,2,1};
++__constant__ unsigned char inu[] = {0,1,2,2,2,1,1,0,0};
++__constant__ unsigned char ialpha[] = {0,1,2,1,0,0};
++__constant__ unsigned char ibeta[]= {0,1,2,2,2,1};
++
++//Convert stress tensor to cartesian coordinates
++__global__ void kernel_stress_convert(float *gprimd,float *d_enlk,float *enlout){
++
++  __shared__ float sh_gprim[9];
++  __shared__ float sh_stress[6];
++  __shared__ float sh_enl[9];
++
++  sh_gprim[threadIdx.x] = gprimd[threadIdx.x];
++
++  if(threadIdx.x < 6)
++    sh_stress[threadIdx.x] = d_enlk[threadIdx.x+1];
++
++  sh_enl[threadIdx.x] = sh_stress[imunu[threadIdx.x]] * sh_gprim[ialpha[blockIdx.x] + 3*imu[threadIdx.x]] * sh_gprim[ibeta[blockIdx.x] + 3*inu[threadIdx.x]];
++
++  if(threadIdx.x < 3 )
++    sh_enl[threadIdx.x] += sh_enl[threadIdx.x + 3] + sh_enl[threadIdx.x + 6];
++
++  if(threadIdx.x == 0 )
++    sh_enl[0] += sh_enl[1] + sh_enl[2];
++
++  if(threadIdx.x==0){
++    if(blockIdx.x < 3 )
++      enlout[blockIdx.x] = 2*sh_enl[0] - d_enlk[0];
++    else
++      enlout[blockIdx.x] = 2*sh_enl[0];
++  }
++}
++
++
++/*******************************************************************/
++/**********                                      *******************/
++/**********          calling fonction            *******************/
++/**********                                      *******************/
++/*******************************************************************/
++
++extern "C" void gpu_compute_nl_hamiltonian_(float2 *proj_gpu,float2 *dproj_gpu,
++					    float2 *vectin_gpu,
++					    float2 *vectout_gpu,float2 *svectout_gpu,
++					    float2 *val_ajlmn_gpu,float2 *val_sajlmn_gpu,
++					    float2 *ph3dout_gpu,float *ffnlout_gpu,
++					    float *rdlmn_gpu, float *rdproj_gpu,
++					    float *enlout_gpu, float *d_enlk_gpu,
++					    float *enl_gpu,float *sij_gpu,float *gprimd_gpu,
++					    int *atindx1_gpu,unsigned char *nlmn_gpu,
++					    int *indlmn_gpu,unsigned short int *atoms_gpu,
++					    unsigned char *lmn_gpu, unsigned char *typat_gpu,
++					    int *paw_opt,int *dimffnlout,int *dimenl1,
++					    int *npw,int *nb_projections,int *lmnmax,
++					    int *natoms, int *choice, int *signs,
++					    const float *four_pi_by_ucvol,const float *lambda
++					    ){
++
++  /************* Accumulate the projection factors ***********************/
++  //Configuration of the cuda grid
++  dim3 grid,block;
++  block.x= 64;
++  grid.x=((*nb_projections) + 64 - 1)/64 ;
++
++  float2 *effective_proj_gpu=proj_gpu;
++  //If choice = 3 or 23 proj is stored in dproj
++  if( ((*choice)==3) || ((*choice)==23) )
++    effective_proj_gpu=dproj_gpu;
++
++  kernel_compute_proj_factor<<<grid,block>>>(effective_proj_gpu,dproj_gpu,
++					     val_ajlmn_gpu,val_sajlmn_gpu,
++					     enl_gpu,sij_gpu,
++					     rdlmn_gpu,rdproj_gpu,
++					     atindx1_gpu,nlmn_gpu,
++					     indlmn_gpu,atoms_gpu,lmn_gpu,typat_gpu,
++					     *paw_opt,*dimenl1,*lmnmax,
++					     *nb_projections,*natoms,
++					     *choice,*signs,*lambda
++					     );
++
++  /************* Compute output needed with signs ***********************/
++
++  if( ((*choice)==1) && (*signs==2)) {
++    //One thread in block by projection and plane waves split amongs blocks
++    block.x = 64;
++    grid.x = 1;
++    grid.y=*npw;
++
++    //kernel_compute_nl_hamiltonian<<<grid,block,block.x*2*sizeof(double),0>>>(vectin_gpu,vectout_gpu,svectout_gpu,
++    kernel_compute_nl_hamiltonian_64<<<grid,block,block.x*2*sizeof(float),0>>>(vectin_gpu,vectout_gpu,svectout_gpu,
++									       val_ajlmn_gpu,val_sajlmn_gpu,
++									       ph3dout_gpu,ffnlout_gpu,
++									       atoms_gpu,lmn_gpu,typat_gpu,
++									       *paw_opt,*dimffnlout,*npw,
++									       *nb_projections,*lmnmax,
++									       *four_pi_by_ucvol,*lambda
++									       );
++
++  }//End choice==1,signs==2
++
++  else {
++    //Compute forces
++    if( (((*choice)==2)&&(*signs==1)) || ((*choice)==23) ) {
++      //Threads In blocks will take care of lmnmax
++      block.x= 32;
++
++      grid.x= 3; //Nb alpha directions
++      grid.y= *natoms ;
++
++      int decalage_enlout_gpu = 0;
++      if( (*choice)==23)
++	decalage_enlout_gpu = 6;
++
++      kernel_compute_forces<<<grid,block,block.x*sizeof(float),0>>>(rdlmn_gpu,enlout_gpu,
++								     decalage_enlout_gpu,
++								     *natoms,*lmnmax);
++    }//End choice2 / signs1 or choice 23
++
++    //Compute stress tensor
++    if( (((*choice)==3) && ((*signs)==1))  || ((*choice)==23) ) {
++
++      grid.x= 7; //Nb alphabeta directions
++      block.x= 512; // Enough threads to reduce on projection
++      while(block.x > (unsigned int)(*nb_projections)){
++	block.x /= 2;
++      }
++      block.x=64;
++
++      kernel_reduce_stress<<<grid,block,block.x*sizeof(float),0>>>(rdproj_gpu,d_enlk_gpu,*nb_projections);
++
++      kernel_stress_convert<<<6,9>>>(gprimd_gpu,d_enlk_gpu,enlout_gpu);
++
++    }
++
++  }//end choice!=1
++}//End of gpu_compute_nl_hamiltonian
++#endif
++
+ //***
+diff -Naur ./src/52_manage_cuda/gpu_compute_nl_projections.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_compute_nl_projections.cu
+--- ./src/52_manage_cuda/gpu_compute_nl_projections.cu	2016-08-06 16:05:01.000000000 +0800
++++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_compute_nl_projections.cu	2017-01-08 11:45:10.207375460 +0800
+@@ -4,6 +4,11 @@
+ //   With:
+ //   <p_lmn|c>=4pi/sqr(vol) (i)^l Sum_g[c(g).f_nl(g).Y_lm(g).exp(2pi.i.g.R)]
+ 
++
++#if defined HAVE_CONFIG_H
++#include "config.h"
++#endif
++
+ #include <stdio.h>
+ #include <stdlib.h>
+ 
+@@ -22,6 +27,9 @@
+ // Blocks in Y direction represente a couple (iaton,ilmn) for which we have
+ // to compute C_ilmn^iaton
+ //The primary compute and the reduction are made over the threads of this block
++
++#if defined HAVE_GPU_CUDA_DP
++
+ __global__ void kernel_compute_nl_projections(double2 *proj,double2 *vectin,double2 *ph3din,double *ffnlin,
+ 					      const int *indlmn,const unsigned short int* atoms,
+ 					      const unsigned char *lmn,const unsigned char * typat,
+@@ -542,3 +550,526 @@
+ 											       );
+   }
+ }//end of routine gpu_compute_nl_projections_
++
++#else
++__global__ void kernel_compute_nl_projections(float2 *proj,float2 *vectin,float2 *ph3din,float *ffnlin,
++					      const int *indlmn,const unsigned short int* atoms,
++					      const unsigned char *lmn,const unsigned char * typat,
++					      const int dimffnlin,const int npw,
++					      const int lmnmax,const char cplex,const float four_pi_by_squcvol
++					      ){
++  
++  //Definition of locals
++  int ilmn,ipw,itypat;
++  int dec_iatom_ph3d,dec_ffnl;
++  float2 vect,ph3d;
++  float ffnl;
++  
++  //Shared memory areas to compute and reduce
++  extern __shared__ float sh_mem[];
++  float *sh_proj_x = sh_mem ;
++  float *sh_proj_y = &(sh_mem[blockDim.x]);
++  
++  //Get the couple (iatom,ilmn) of the block
++  //iatom = atoms[blockIdx.y];// we don't need it because we use it only in dec_iatom_ph3d
++  ilmn =lmn[blockIdx.y];
++  itypat=typat[blockIdx.y];
++  dec_iatom_ph3d = npw * atoms[blockIdx.y];
++  dec_ffnl= npw*(0 + dimffnlin*(ilmn + lmnmax*itypat));
++  
++  //Initialisation of Shared mem
++  sh_proj_x[threadIdx.x]=0.;
++  sh_proj_y[threadIdx.x]=0.;
++  
++  //Step 1: Compute value for each plane wave and reduce by thread in sh mem
++  for(ipw=threadIdx.x ;ipw<npw; ipw+=blockDim.x){
++    //ffnl= ffnlin[ipw + npw*(0 + dimffnlin*(ilmn + lmnmax*itypat))];
++    ffnl= ffnlin[ipw + dec_ffnl];
++    vect= vectin[ipw];
++    //ph3d= ph3din[ipw + npw*iatom];
++    ph3d= ph3din[ipw + dec_iatom_ph3d];
++    
++    //We add the complex product in shared mem
++    sh_proj_x[threadIdx.x] += ffnl*(vect.x*ph3d.x - vect.y*ph3d.y) ;
++    sh_proj_y[threadIdx.x] += ffnl*(vect.y*ph3d.x + vect.x*ph3d.y) ;
++  }
++  
++  //Step 2: Reduce between threads
++  for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
++    //We ensure every load on shared mem is accomplished in the block
++    __syncthreads();
++    if( threadIdx.x <  decalage) 
++      sh_proj_x[threadIdx.x] += sh_proj_x[threadIdx.x + decalage];
++    else if(threadIdx.x >= (blockDim.x - decalage))
++      sh_proj_y[threadIdx.x] += sh_proj_y[threadIdx.x - decalage];
++  }
++  
++  __syncthreads();
++  
++  //Write results for the block
++  if(threadIdx.x == 0){
++    //We need to know l;
++    int l=indlmn[ 0 + 6*(ilmn + lmnmax*itypat)];
++    //We write the result as a complex in register before storing it in glob mem
++    switch (l%4){
++    case 0: //i^l = 1
++      vect.x = four_pi_by_squcvol * sh_proj_x[0] ;
++      vect.y = four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
++      break;
++    case 1: //i^l = i
++      vect.x = -four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
++      vect.y = four_pi_by_squcvol * sh_proj_x[0] ;
++      break;
++    case 2: //i^l = -1
++      vect.x = -four_pi_by_squcvol * sh_proj_x[0] ;
++      vect.y = -four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
++      break;
++    case 3: //i^l = -i
++      vect.x = four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
++      vect.y = -four_pi_by_squcvol * sh_proj_x[0] ;
++      break;
++    default:
++      break;
++    }
++    if(cplex==1){
++      vect.x *= 2.;
++      vect.y = 0.;
++    }
++    proj[blockIdx.y] = vect;
++  }
++  
++}//end of kernel_compute_nl_projections
++
++
++//Simultaneous computing of proj and Dproj
++__global__ void kernel_compute_nl_projections_and_derivates_choice2(float2 *proj,float2 *dproj,
++								    float2 *vectin,float2 *ph3din,
++								    float *ffnlin,float *kpgin,
++								    const int *indlmn,const unsigned short int* atoms,
++								    const unsigned char *lmn,const unsigned char * typat,
++								    const int dimffnlin,const int npw, const int nb_projections,
++								    const int lmnmax,const char cplex,
++								    const float four_pi_by_squcvol,const float height_pi2_by_squcvol
++								    //,double *debug
++								    ){
++  
++  //Definition of locals
++  int iatom,ilmn,ipw,itypat;
++  float2 vect,ph3d;//,proj_loc;
++  float2 dproj0,dproj1,dproj2,dproj3;
++  float ffnl,kpg1,kpg2,kpg3;
++  //int idebug=0;
++  //Shared memory areas to compute and reduce
++  extern __shared__ float sh_mem[];
++  float *sh_proj_x = sh_mem ;
++  float *sh_proj_y = &(sh_mem[blockDim.x]);
++  
++  //Get the couple (iatom,ilmn) of the block
++  iatom=atoms[blockIdx.y];
++  ilmn =lmn[blockIdx.y];
++  itypat=typat[blockIdx.y];
++  
++  //Initialisation of Shared mem
++  sh_proj_x[threadIdx.x]=0.;
++  sh_proj_y[threadIdx.x]=0.;
++  dproj1.x=0.;dproj2.x=0.;dproj3.x=0.;
++  dproj1.y=0.;dproj2.y=0.;dproj3.y=0.;
++  
++  //Step 1: Compute value for each plane wave and reduce by thread in sh mem
++  for(ipw=threadIdx.x + blockIdx.x*gridDim.x;ipw<npw; ipw+=blockDim.x*gridDim.x){
++    
++    ffnl= ffnlin[ipw + npw*(0 + dimffnlin*(ilmn + lmnmax*itypat))];
++    vect= vectin[ipw];
++    ph3d= ph3din[ipw + npw*iatom];
++    kpg1= kpgin[ipw + 0*npw];
++    kpg2= kpgin[ipw + 1*npw];
++    kpg3= kpgin[ipw + 2*npw];
++    
++    //We add the complex product in shared mem and derivates part in register
++    dproj0.x = ffnl*(vect.x*ph3d.x - vect.y*ph3d.y);
++    dproj0.y = ffnl*(vect.y*ph3d.x + vect.x*ph3d.y);
++    sh_proj_x[threadIdx.x] += dproj0.x ;
++    sh_proj_y[threadIdx.x] += dproj0.y ;
++    dproj1.x  += kpg1*dproj0.x ;
++    dproj1.y  += kpg1*dproj0.y ;
++    dproj2.x  += kpg2*dproj0.x ;
++    dproj2.y  += kpg2*dproj0.y ;
++    dproj3.x  += kpg3*dproj0.x ;
++    dproj3.y  += kpg3*dproj0.y ;
++    //     if(blockIdx.y==0)
++    //       debug[ipw]=-kpg1*dproj0.y;
++  }
++    
++  //Step 2: Reduce between threads
++  for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
++    //We ensure every load on shared mem is accomplished in the block
++    __syncthreads();
++    if( threadIdx.x <  decalage) 
++      sh_proj_x[threadIdx.x] += sh_proj_x[threadIdx.x + decalage];
++    else if(threadIdx.x >= (blockDim.x - decalage))
++      sh_proj_y[threadIdx.x] += sh_proj_y[threadIdx.x - decalage];
++  }
++  __syncthreads();
++  //Store locally the sum pro projection
++  if(threadIdx.x==0){
++    dproj0.x=sh_proj_x[0] ;
++    dproj0.y=sh_proj_y[blockDim.x -1] ;
++  }
++  
++  //Step 3: Reduce for first derivate
++  __syncthreads();
++  sh_proj_x[threadIdx.x]= dproj1.x;
++  sh_proj_y[threadIdx.x]= dproj1.y;;
++  for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
++    //We ensure every load on shared mem is accomplished in the block
++    __syncthreads();
++    if( threadIdx.x <  decalage) 
++      sh_proj_x[threadIdx.x] += sh_proj_x[threadIdx.x + decalage];
++    else if(threadIdx.x >= (blockDim.x - decalage))
++      sh_proj_y[threadIdx.x] += sh_proj_y[threadIdx.x - decalage];
++  }
++  __syncthreads();
++  
++  //Store locally the sum for first derivate
++  if(threadIdx.x==0){
++    dproj1.x=sh_proj_x[0] ;
++    dproj1.y=sh_proj_y[blockDim.x -1];
++  }
++  
++  //Step 4: Reduce for second derivate
++  __syncthreads();
++  sh_proj_x[threadIdx.x]= dproj2.x;
++  sh_proj_y[threadIdx.x]= dproj2.y;
++  for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
++    //We ensure every load on shared mem is accomplished in the block
++    __syncthreads();
++    if( threadIdx.x <  decalage) 
++      sh_proj_x[threadIdx.x] += sh_proj_x[threadIdx.x + decalage];
++    else if(threadIdx.x >= (blockDim.x - decalage))
++      sh_proj_y[threadIdx.x] += sh_proj_y[threadIdx.x - decalage];
++  }
++  __syncthreads();
++  
++  //Store locally the sum for second derivate
++  if(threadIdx.x==0){
++    dproj2.x=sh_proj_x[0] ;
++    dproj2.y=sh_proj_y[blockDim.x -1];
++  }
++  
++  //Step 5: Reduce for third derivate
++  __syncthreads();
++  sh_proj_x[threadIdx.x]= dproj3.x;
++  sh_proj_y[threadIdx.x]= dproj3.y;;
++  for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
++    //We ensure every load on shared mem is accomplished in the block
++    __syncthreads();
++    if( threadIdx.x <  decalage) 
++      sh_proj_x[threadIdx.x] += sh_proj_x[threadIdx.x + decalage];
++    else if(threadIdx.x >= (blockDim.x - decalage))
++      sh_proj_y[threadIdx.x] += sh_proj_y[threadIdx.x - decalage];
++  }
++  __syncthreads();
++  
++   //Write results for the block
++  //At this moment, proj,dproj1 and dproj2 are in register for tx0 and dproj3 in ShMem
++  //We use the dproj3 varaible name to store tmp permutation
++  if(threadIdx.x == 0){
++    //We need to know l;
++    int l=indlmn[ 0 + 6*(ilmn + lmnmax*itypat)];
++    //We write the result as a complex in registers before storing it in glob mem
++    float tmp;
++    switch (l%4){
++    case 0: //i^l = 1 ==> i^(l+1) = i 
++      vect.x = four_pi_by_squcvol * dproj0.x;    
++      vect.y = four_pi_by_squcvol * dproj0.y;
++      
++      tmp = dproj1.x;
++      dproj1.x = -height_pi2_by_squcvol * dproj1.y;
++      dproj1.y = height_pi2_by_squcvol * tmp;
++      
++      tmp = dproj2.x;
++      dproj2.x = -height_pi2_by_squcvol * dproj2.y;
++      dproj2.y = height_pi2_by_squcvol * tmp;
++      
++      dproj3.x = -height_pi2_by_squcvol *sh_proj_y[blockDim.x -1] ;
++      dproj3.y = height_pi2_by_squcvol * sh_proj_x[0] ;
++      break;
++    case 1: //i^l = i ==> i^(l+1)=-1
++      vect.x = -four_pi_by_squcvol * dproj0.y;    
++      vect.y = four_pi_by_squcvol * dproj0.x;
++      
++      dproj1.x = -height_pi2_by_squcvol * dproj1.x;
++      dproj1.y = -height_pi2_by_squcvol * dproj1.y;
++      
++      dproj2.x = -height_pi2_by_squcvol * dproj2.x;
++      dproj2.y = -height_pi2_by_squcvol * dproj2.y;
++      
++      dproj3.x = -height_pi2_by_squcvol * sh_proj_x[0] ;
++      dproj3.y = -height_pi2_by_squcvol * sh_proj_y[blockDim.x -1] ;
++      break;
++    case 2: //i^l = -1 ==> i^(l+1)=-i
++      vect.x = -four_pi_by_squcvol * dproj0.x;    
++      vect.y = -four_pi_by_squcvol * dproj0.y;
++      
++      tmp = dproj1.x;
++      dproj1.x = height_pi2_by_squcvol * dproj1.y;
++      dproj1.y = -height_pi2_by_squcvol * tmp;
++
++      tmp = dproj2.x;
++      dproj2.x = height_pi2_by_squcvol * dproj2.y;
++      dproj2.y = -height_pi2_by_squcvol * tmp;
++      
++      dproj3.x = height_pi2_by_squcvol *sh_proj_y[blockDim.x -1] ;
++      dproj3.y = -height_pi2_by_squcvol * sh_proj_x[0] ;
++      break;
++    case 3: //i^l = -i == i^(l+1)=1
++      vect.x = four_pi_by_squcvol * dproj0.y;    
++      vect.y = -four_pi_by_squcvol * dproj0.x;
++      
++      dproj1.x = height_pi2_by_squcvol * dproj1.x;
++      dproj1.y = height_pi2_by_squcvol * dproj1.y;
++      
++      dproj2.x = height_pi2_by_squcvol * dproj2.x;
++      dproj2.y = height_pi2_by_squcvol * dproj2.y;
++      
++      dproj3.x = height_pi2_by_squcvol * sh_proj_x[0] ;
++      dproj3.y = height_pi2_by_squcvol * sh_proj_y[blockDim.x -1] ;
++      break;
++    default:
++      break;
++    }
++    if(cplex==1){
++      vect.x *= 2.;
++      vect.y = 0.;
++      dproj1.x *= 2;
++      dproj1.y = 0.;
++      dproj2.x *= 2;
++      dproj2.y = 0.;
++      dproj3.x *= 2;
++      dproj3.y = 0.;
++    }
++    proj[blockIdx.y] = vect;
++    dproj[blockIdx.y + 0*nb_projections] = dproj1;;
++    dproj[blockIdx.y + 1*nb_projections] = dproj2;
++    dproj[blockIdx.y + 2*nb_projections] = dproj3;
++  }
++  
++}//end of kernel_compute_nl_projections_and_derivates_choice2
++
++
++//Simultaneous computing of proj and Dproj second version 
++//One thread's block compute one derivative of one projection
++//A order 0 on derivation is the projection itself  
++//Each block is indiced by (iproj,ialphabeta) where iproj is the projection's indice
++//ialphabeta correspond to a unique couple (ialpha,ibeta) 
++//We derivate ffnlin relatively to ialpha and kpg to ibeta
++//The reduction over planewaves for each derivative is split among threads of the block
++__global__ void kernel_compute_nl_projections_and_derivates_all(float2 *dproj,
++								float2 *vectin,float2 *ph3din,
++								float *ffnlin,float *kpgin,
++								const int *indlmn,const unsigned short int* atoms,
++								const unsigned char *lmn,const unsigned char * typat,
++								const int dimffnlin,const int npw, const int nb_projections,
++								const int lmnmax,const char cplex,const int choice,
++								const float four_pi_by_squcvol,const float two_pi
++								){
++  
++  //Definition of locals
++  int iatom,ilmn,ipw,itypat;
++  int iproj,ialphabeta;
++  unsigned char ialpha,ibeta;
++  float2 vect,ph3d;
++  float ffnl_alpha,kpg_beta,fact_alphabeta;
++  
++  //Shared memory areas to compute and reduce
++  extern __shared__ float sh_mem[];
++  float *sh_proj_x = sh_mem ;
++  float *sh_proj_y = &(sh_mem[blockDim.x]);
++  
++  //Get indices
++  iproj=blockIdx.y;
++  ialphabeta = blockIdx.x;
++
++  //Compute alpha and beta from ialphabeta
++  if(choice==2){
++    ialpha=0;
++    ibeta=ialphabeta;
++  }
++  else if(choice==3){
++    ialpha = indalpha_c3[ialphabeta];
++    ibeta  =  indbeta_c3[ialphabeta];
++  }
++  else if(choice==23){
++    if(ialphabeta<4){
++      ialpha=0;
++      ibeta=ialphabeta;
++    }
++    else{
++      ialpha = indalpha_c3[ialphabeta - 3];
++      ibeta  =  indbeta_c3[ialphabeta - 3];
++    }
++  }
++  
++  //Get the couple (iatom,ilmn) of the block
++  iatom=atoms[iproj];
++  ilmn =lmn[iproj];
++  itypat=typat[iproj];
++  
++  //Initialisation of Shared mem
++  sh_proj_x[threadIdx.x]=0.;
++  sh_proj_y[threadIdx.x]=0.;
++  
++  //Step 1: Compute value for each plane wave and reduce by thread in sh mem
++  for(ipw=threadIdx.x ;ipw<npw; ipw+=blockDim.x){
++    
++    ffnl_alpha = ffnlin[ipw + npw*(ialpha + dimffnlin*(ilmn + lmnmax*itypat))];
++    vect= vectin[ipw];
++    ph3d= ph3din[ipw + npw*iatom];
++    if(ibeta>0)
++      kpg_beta = kpgin[ipw + (ibeta-1)*npw];
++    else
++      kpg_beta = 1.;
++    
++    fact_alphabeta = kpg_beta*ffnl_alpha; 
++    
++    if( ((choice==3)&&(ialphabeta>3)) || ((choice==23)&&(ialphabeta>6)) ){
++      //We switch the alpha beta symetry
++      ffnl_alpha = ffnlin[ipw + npw*(ibeta + dimffnlin*(ilmn + lmnmax*itypat))];
++      kpg_beta = kpgin[ipw + (ialpha-1)*npw];
++      fact_alphabeta = (fact_alphabeta + kpg_beta*ffnl_alpha)/2 ;
++    }
++    
++    //We add the complex product in shared mem and derivates part in register
++    sh_proj_x[threadIdx.x] += fact_alphabeta*(vect.x*ph3d.x - vect.y*ph3d.y);
++    sh_proj_y[threadIdx.x] += fact_alphabeta*(vect.y*ph3d.x + vect.x*ph3d.y);
++  }
++  
++  //Step 2: Reduce between threads
++  for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
++    //We ensure every load on shared mem is accomplished in the block
++    __syncthreads();
++    if( threadIdx.x <  decalage) 
++      sh_proj_x[threadIdx.x] += sh_proj_x[threadIdx.x + decalage];
++    else if(threadIdx.x >= (blockDim.x - decalage))
++      sh_proj_y[threadIdx.x] += sh_proj_y[threadIdx.x - decalage];
++  }
++  __syncthreads();
++  
++  //Step 3: Write results for the block
++  if(threadIdx.x == 0){
++    //We need to know l;
++    int l=indlmn[ 0 + 6*(ilmn + lmnmax*itypat)];
++    if( ((ialphabeta>0)&&(choice==2)) || ((choice==23)&&(ialphabeta>0)&&(ialphabeta<4)) )
++      l++;
++    //We write the result as a complex in registers before storing it in glob mem
++    switch (l%4){
++    case 0: //i^l = 1 
++      vect.x = four_pi_by_squcvol * sh_proj_x[0] ;
++      vect.y = four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
++      break;
++    case 1: //i^l = i
++      vect.x = -four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
++      vect.y = four_pi_by_squcvol * sh_proj_x[0] ;
++      break;
++    case 2: //i^l = -1
++      vect.x = -four_pi_by_squcvol * sh_proj_x[0] ;
++      vect.y = -four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
++      break;
++    case 3: //i^l = -i
++      vect.x = four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
++      vect.y = -four_pi_by_squcvol * sh_proj_x[0] ;
++      break;
++    default:
++      break;
++    }
++    
++    if(cplex==1){
++      vect.x *= 2.;
++      vect.y = 0.;
++    }
++    if( ((ialphabeta>0)&&(choice==2)) || ((choice==23)&&(ialphabeta>0)&&(ialphabeta<4)) ){
++      vect.x *= two_pi;
++      vect.y *= two_pi;
++    }
++    if( ((ialphabeta>0)&&(choice==3)) || ((choice==23)&&(ialphabeta>3)) ){
++      vect.x = -vect.x;
++      vect.y = -vect.y;
++    }
++    dproj[iproj + ialphabeta*nb_projections] = vect;
++  }
++  
++}//end of kernel_compute_nl_projections_and_derivates_all
++
++
++
++/*******************************************************************/
++/**********                                      *******************/
++/**********          calling fonction            *******************/
++/**********                                      *******************/
++/*******************************************************************/
++
++extern "C" void gpu_compute_nl_projections_(float2 *proj_gpu,float2 *dproj_gpu,
++					    float2 *vectin_gpu,float2 *ph3din_gpu,
++					    float *ffnlin_gpu,float *kpgin_gpu,
++					    int *indlmn_gpu,unsigned short int *atoms_gpu,
++					    unsigned char *lmn_gpu, unsigned char *typat_gpu,
++					    int *nb_proj_to_compute,int *npw,int *choice,
++					    int *dimffnlin,int *lmnmax,
++					    const char *cplex,const float *pi,const float *ucvol
++					    ){
++  
++  //Configuration of the cuda grid
++  dim3 grid,block;
++  float four_pi_by_squcvol = 4*(*pi)/sqrt(*ucvol);
++  if((*choice)<2){
++    //One block by projection to compute and plane waves split among a batch of threads by block   
++    block.x=64;
++    grid.x=1;
++    grid.y=*nb_proj_to_compute;
++    
++    kernel_compute_nl_projections<<<grid,block,block.x*2*sizeof(float),0>>>(proj_gpu,vectin_gpu,ph3din_gpu,ffnlin_gpu,
++									     indlmn_gpu,atoms_gpu,lmn_gpu,typat_gpu,
++									     *dimffnlin,*npw,*lmnmax,
++									     *cplex,four_pi_by_squcvol);
++  }
++  else if((*choice)==2){
++    
++    block.x=64;
++    grid.x=1;
++    grid.y=*nb_proj_to_compute;
++    
++    float height_pi2_by_squcvol  = 2*(*pi)*four_pi_by_squcvol; 
++    
++    kernel_compute_nl_projections_and_derivates_choice2<<<grid,block,block.x*2*sizeof(float),0>>>(proj_gpu,dproj_gpu,
++												   vectin_gpu,ph3din_gpu,
++												   ffnlin_gpu,kpgin_gpu,
++												   indlmn_gpu,atoms_gpu,lmn_gpu,typat_gpu,
++												   *dimffnlin,*npw,*nb_proj_to_compute,
++												   *lmnmax,*cplex,
++												   four_pi_by_squcvol,height_pi2_by_squcvol
++												   );
++  }
++  else if( ((*choice)==3) || ((*choice)==23) ){
++    
++    float two_pi = 2*(*pi);
++    block.x=64;
++    
++    //Grid.x = Nb derivates to compute (order 0 included)
++    if((*choice)==3)
++      grid.x = 7 ;
++    else
++      grid.x = 10;
++    
++    grid.y = *nb_proj_to_compute;
++    
++    kernel_compute_nl_projections_and_derivates_all<<<grid,block,block.x*2*sizeof(float),0>>>(dproj_gpu,
++											       vectin_gpu,ph3din_gpu,
++											       ffnlin_gpu,kpgin_gpu,
++											       indlmn_gpu,atoms_gpu,lmn_gpu,typat_gpu,
++											       *dimffnlin,*npw,*nb_proj_to_compute,
++											       *lmnmax,*cplex,*choice,
++											       four_pi_by_squcvol,two_pi
++											       );
++  }
++}//end of routine gpu_compute_nl_projections_
++#endif
+diff -Naur ./src/52_manage_cuda/gpu_density_accumulation.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_density_accumulation.cu
+--- ./src/52_manage_cuda/gpu_density_accumulation.cu	2016-08-06 16:05:01.000000000 +0800
++++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_density_accumulation.cu	2017-01-08 11:35:24.567436832 +0800
+@@ -51,6 +51,7 @@
+ /**********                                      *******************/
+ /*******************************************************************/
+ 
++#if defined HAVE_GPU_CUDA_DP
+ __global__ void kernel_accumulate_density(double *fofr,double* denpot,double* weight_r,double* weight_i,int nfft_tot,int ndat
+ 					  ){
+   int thread_id= threadIdx.x + blockDim.x*blockIdx.x;
+@@ -100,4 +101,55 @@
+ 
+ }//end subroutine gpu_density_accumulation
+ 
++#else
++__global__ void kernel_accumulate_density(float *fofr,float* denpot,float* weight_r,float* weight_i,int nfft_tot,int ndat
++					  ){
++  int thread_id= threadIdx.x + blockDim.x*blockIdx.x;
++
++  for(int id=thread_id; id <nfft_tot; id+=blockDim.x*gridDim.x){
++    //double2 loc=fofr[id];
++    //    denpot[id] += weight_r*loc.x*loc.x + weight_i*loc.y*loc.y ;
++    int idat;
++    float sum=0.;
++    for(idat=0;idat<ndat;idat++){
++      float loc_x=fofr[2*(id + nfft_tot*idat) ];
++      float loc_y=fofr[1+2*(id + nfft_tot*idat)];
++      sum += weight_r[idat]*loc_x*loc_x + weight_i[idat]*loc_y*loc_y ;
++    }
++
++    denpot[id] += sum ;
++  }
++}
++
++
++/*******************************************************************/
++/**********                                      *******************/
++/**********          calling fonction            *******************/
++/**********                                      *******************/
++/*******************************************************************/
++
++extern "C" void gpu_density_accumulation_(float *fofr,float* denpot, float* weight_r,
++                   float* weight_i,int* nfft_tot,int *ndat,cudaStream_t *compute_stream)
++{
++
++  //Arguments ------------------------------------
++  //scalars
++  // integer intent(int) :: nfft_tot,ndat
++  // double intent(int) :: weight_r,weight_i
++  //arrays
++  // double intent(inout) :: denpot
++  // double intent(in) :: fofr
++  //Locals
++  dim3 grid,bloc;
++  // *************************************************************************
++
++  bloc.x = BLOCK_SIZE;
++  grid.x = min(( *nfft_tot + bloc.x - 1 )/bloc.x,MAX_GRID_SIZE);
++
++  //Call To Kernel
++  kernel_accumulate_density<<<grid,bloc,0,*compute_stream>>>(fofr,denpot,weight_r,weight_i,*nfft_tot,*ndat);
++
++}//end subroutine gpu_density_accumulation
++#endif
++
+ //***
+diff -Naur ./src/52_manage_cuda/gpu_fourwf.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_fourwf.cu
+--- ./src/52_manage_cuda/gpu_fourwf.cu	2016-08-06 16:05:01.000000000 +0800
++++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_fourwf.cu	2017-01-08 11:47:26.965378772 +0800
+@@ -110,6 +110,7 @@
+ static int npw=-1;
+ static cufftHandle plan_fft;
+ 
++#if defined HAVE_GPU_CUDA_DP
+ //GPU ffts buffers
+ static double *work_gpu;
+ static double *fofr_gpu;
+@@ -449,6 +450,350 @@
+ 
+   gpu_initialized = 0;
+ }//end of free_gpu_fourwf_()
++
++#else
++//GPU ffts buffers
++static float *work_gpu;
++static float *fofr_gpu;
++static float *denpot_gpu;
++static float *weightr_gpu;
++static float *weighti_gpu;
++static float *fofgin_gpu;
++static float *fofgout_gpu;
++static int *kg_kin_gpu;
++static int *kg_kout_gpu;
++
++
++//Transfers buffers in pinned memory for async memcopy between cpu & gpu
++static float *buff_denpot;
++static float *buff_weightr;
++static float *buff_weighti;
++//static float *buff_kgkout;
++
++
++extern "C" void gpu_fourwf_(int *cplex,float *denpot,float *fofgin,float *fofgout,float *fofr,int *gboundin,int *gboundout,int *istwf_k,
++			    int *kg_kin,int *kg_kout,int *mgfft,void *mpi_enreg,int *ndat,int *ngfft,int *npwin,int *npwout,int *n4,int *n5,int *n6,int *option,
++			    int *paral_kgb,int * tim_fourwf,float *weight_r,float *weight_i)/*,
++												int *use_ndo,float *fofginb)*/
++{
++  // !Arguments ------------------------------------
++  //   !scalars
++  //   integer,intent(in) :: cplex,istwf_k,mgfft,n4,n5,n6,ndat,npwin,npwout,option,paral_kgb
++  //   integer,intent(in) :: tim_fourwf
++  //   integer,intent(in),optional :: use_ndo
++  //   real(dp),intent(in) :: weight_r,weight_i
++  //   type(MPI_type),intent(in) :: mpi_enreg
++  //   !arrays
++  //   integer,intent(in) :: gboundin(2*mgfft+8,2),gboundout(2*mgfft+8,2)
++  //   integer,intent(in) :: kg_kin(3,npwin),kg_kout(3,npwout),ngfft(18)
++  //   real(dp),intent(inout) :: denpot(cplex*n4,n5,n6),fofgin(2,npwin*ndat)
++  //   ! real(dp) :: fofginb(2,npwin*ndat)
++  //   real(dp),intent(inout),optional :: fofginb(:,:)
++  //   real(dp),intent(inout) :: fofr(2,n4,n5,n6*ndat)
++  //   real(dp),intent(out) :: fofgout(2,npwout*ndat)
++
++
++
++
++  //Cuda return code
++  cufftResult cufft_state;
++  cudaError_t cuda_return;
++
++  //Gpu buffers
++
++  //Local integer
++  int n1,n2,n3,nfft_tot;
++
++
++  //*************** CUDA INITIALISATION STAGE ****
++  if(!(gpu_initialized)){
++    alloc_gpu_fourwf_(ngfft,ndat,npwin,npwout);
++  }//end of initialisation
++
++
++  //***********  GPU ALLOCATIONS  ***********************
++  n1=ngfft[0];
++  n2=ngfft[1];
++  n3=ngfft[2];
++  nfft_tot=n1*n2*n3;
++
++  //*********** CHECK some compatibilities **************
++  if((n1!=(*n4)) || (n2!=(*n5)) || (n3!=(*n6))){
++    printf("FFT SIZE ERROR: \n when gpu mode is on the fft grid must not be augmented\n");
++    printf("(n1,n2,n3) = (%d,%d,%d) whereas (n4,n5,n6) = (%d,%d,%d) \n",n1,n2,n3,*n4,*n5,*n6);
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  if((*cplex)==2){
++    printf("gpu_fourwf: cplex == 2 is not treated in GPU mode\n");
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  //If fft size has changed, we realloc our buffers
++  if((nfft_tot!=fft_size)||(*ndat>ndat_loc)||((*npwin)>npw)||((*npwout)>npw)){
++    free_gpu_fourwf_();
++    alloc_gpu_fourwf_(ngfft,ndat,npwin,npwout);
++  }//end if "fft size changed"
++
++
++  //memcpy cpu => buffer
++  if(*option == 1 || *option == 2)
++    memcpy(buff_denpot,denpot,nfft_tot*sizeof(float));
++  if(*option==1){
++    memcpy(buff_weightr,weight_r,(*ndat)*sizeof(float));
++    memcpy(buff_weighti,weight_i,(*ndat)*sizeof(float));
++  }
++  if (*option == 3){
++    cuda_return = cudaMemcpy(fofr_gpu,fofr,2*(*ndat)*nfft_tot*sizeof(float),cudaMemcpyHostToDevice);
++    if(cuda_return != cudaSuccess){
++      printf("ERROR while copying fofr to gpu: %s \n",cudaGetErrorString(cuda_return));
++      fflush(stdout);
++      leave_new_("COLL");
++    }
++  }
++
++  if(*option!=3){
++    cuda_return = cudaMemcpy(kg_kin_gpu,kg_kin,3*(*npwin)*sizeof(int),cudaMemcpyHostToDevice);
++    cuda_return = cudaMemcpy(fofgin_gpu,fofgin,2*(*npwin)*(*ndat)*sizeof(float),cudaMemcpyHostToDevice);
++    if(cuda_return != cudaSuccess){
++      printf("ERROR while copying input data to gpu: %s \n",cudaGetErrorString(cuda_return));
++      fflush(stdout);
++      leave_new_("COLL");
++    }
++
++    //We launch async transfert of denpot
++    if(*option == 1 || *option == 2){
++      cuda_return = cudaMemcpyAsync(denpot_gpu,buff_denpot,nfft_tot*sizeof(float),cudaMemcpyHostToDevice,stream_cpy);
++      if(cuda_return != cudaSuccess){
++	printf("ERROR while copying denpot to gpu: %s \n",cudaGetErrorString(cuda_return));
++	fflush(stdout);
++	leave_new_("COLL");
++      }
++    }
++    //We launch async transfert of denpot
++    if(*option == 1){
++      cuda_return = cudaMemcpyAsync(weightr_gpu,buff_weightr,(*ndat)*sizeof(float),cudaMemcpyHostToDevice,stream_cpy);
++      cuda_return = cudaMemcpyAsync(weighti_gpu,buff_weighti,(*ndat)*sizeof(float),cudaMemcpyHostToDevice,stream_cpy);
++      if(cuda_return != cudaSuccess){
++	printf("ERROR while copying weight to gpu: %s \n",cudaGetErrorString(cuda_return));
++	fflush(stdout);
++	leave_new_("COLL");
++      }
++    }
++
++    //call preprocessing routine on gpu
++    gpu_sphere_in_(fofgin_gpu,work_gpu,kg_kin_gpu,npwin,&n1,&n2,&n3,ndat,istwf_k,&stream_compute);
++
++    //call backward fourrier transform on gpu work_gpu => fofr_gpu
++    cufft_state = FFTEXECC2C(plan_fft,(cucmplx *)work_gpu,(cucmplx *)fofr_gpu,CUFFT_INVERSE);
++    if(cufft_state!=CUFFT_SUCCESS){
++      printf("ERROR while fft work_gpu ==> fofr:\n%s\n",cufftGetErrorString(cufft_state));
++      //printf("last cudaError was : %s \n",cudaGetErrorString(cudaGetLastError()));
++      fflush(stdout);
++      leave_new_("COLL");
++    }
++  }
++
++  if(*option==0){
++    //We copy back fofr
++    //cuda_return = cudaStreamSynchronize(stream_compute);
++    cuda_return = cudaThreadSynchronize();
++    if(cuda_return != cudaSuccess){
++      printf("ERROR when synchronizing after FFT on gpu: %s \n",cudaGetErrorString(cuda_return));
++      fflush(stdout);
++      leave_new_("COLL");
++    }
++    cuda_return = cudaMemcpy(fofr,fofr_gpu,2*(*ndat)*nfft_tot*sizeof(float),cudaMemcpyDeviceToHost);
++    if(cuda_return != cudaSuccess){
++      printf("ERROR while copying fofr from gpu: %s \n",cudaGetErrorString(cuda_return));
++      fflush(stdout);
++      leave_new_("COLL");
++    }
++  }
++
++  if(*option==1){
++    //We finish denpot and weight transferts
++    cuda_return = cudaStreamSynchronize(stream_cpy);
++    if(cuda_return != cudaSuccess){
++      printf("ERROR while getting denpot and weight on gpu: %s \n",cudaGetErrorString(cuda_return));
++      fflush(stdout);
++      leave_new_("COLL");
++    }
++
++    //call density accumulation routine on gpu
++    gpu_density_accumulation_(fofr_gpu,denpot_gpu,weightr_gpu,weighti_gpu,&nfft_tot,ndat,&stream_compute);
++
++    //We get denpot back on cpu
++    cuda_return = cudaMemcpy(denpot,denpot_gpu,nfft_tot*sizeof(float),cudaMemcpyDeviceToHost);
++    if(cuda_return != cudaSuccess){
++      printf("ERROR while copying denpot from gpu: %s \n",cudaGetErrorString(cuda_return));
++      fflush(stdout);
++      leave_new_("COLL");
++    }
++  }
++
++  if(*option==2){
++    //We finished denpot transfert
++    cudaStreamSynchronize(stream_cpy);
++    //call gpu routine to  Apply local potential
++    gpu_apply_local_potential_((float2*)fofr_gpu,denpot_gpu,&nfft_tot,ndat,&stream_compute);
++  }
++
++  if(*option==2 || *option==3){
++
++    //call forward fourier transform on gpu: fofr_gpu ==> work_gpu
++    cufft_state = FFTEXECC2C(plan_fft,(cucmplx *)fofr_gpu,(cucmplx *)work_gpu,CUFFT_FORWARD);
++    if(cufft_state!=CUFFT_SUCCESS){
++      printf("ERROR while fft fofr ==> work_gpu:\n%s\n",cufftGetErrorString(cufft_state));
++      fflush(stdout);
++      leave_new_("COLL");
++    }
++
++    //call post processing  routine on gpu
++    cuda_return = cudaMemcpy(kg_kout_gpu,kg_kout,3*(*npwout)*sizeof(int),cudaMemcpyHostToDevice);
++    gpu_sphere_out_(fofgout_gpu,work_gpu,kg_kout_gpu,npwout,&n1,&n2,&n3,ndat,&stream_compute);
++
++    //We get fofgout back on cpu
++    cuda_return = cudaMemcpy(fofgout,fofgout_gpu,2*(*npwout)*(*ndat)*sizeof(float),cudaMemcpyDeviceToHost);
++    if(cuda_return != cudaSuccess){
++      printf("ERROR while copying fofgout from gpu: %s \n",cudaGetErrorString(cuda_return));
++      fflush(stdout);
++      leave_new_("COLL");
++    }
++  }
++
++}//end subroutine gpu_fourwf
++
++
++
++//Memory allocation routine
++extern "C" void alloc_gpu_fourwf_(int *ngfft,int *ndat,int *npwin,int *npwout){
++
++//   printf("alloc_gpu_fourwf called with (nfft,ndat,npwin,npwout)=(%d,%d,%d,%d)\n",ngfft[0]*ngfft[1]*ngfft[2],*ndat,*npwin,*npwout);
++//   fflush(stdout);
++
++  cufftResult cufft_state;
++  cudaError_t cuda_return;
++
++  gpu_initialized = 1;
++
++  //Creation des streams cuda
++  cuda_return = cudaStreamCreate(&stream_cpy);
++  cuda_return = cudaStreamCreate(&stream_compute);
++  if(cuda_return != cudaSuccess){
++    printf("ERROR: when creating cuda streams:\n%s\n",cudaGetErrorString(cuda_return));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  //Size modification if too little memory allocation
++  int n1=ngfft[0];
++  int n2=ngfft[1];
++  int n3=ngfft[2];
++  fft_size=n1*n2*n3;
++  if (ndat_loc < *ndat)
++    ndat_loc=*ndat;
++  if(npw < *npwin)
++    npw = *npwin;
++  if(npw < *npwout)
++    npw = *npwout;
++
++
++  //Initialisation des plans FFT
++  int t_fft[3];
++  t_fft[0]=n3;
++  t_fft[1]=n2;
++  t_fft[2]=n1;
++
++  //Creation du plan
++  cufft_state=cufftPlanMany(&plan_fft,3,t_fft,NULL,1,0,NULL,1,0,FFT_C2C,*ndat);
++  if(cufft_state!=CUFFT_SUCCESS){
++    printf("alloc_gpu_fourwf:\n ERROR: At creation of cufftPlan:\n%s\n",cufftGetErrorString(cufft_state));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  //Association du plan au stream de calcul
++  cufft_state = cufftSetStream(plan_fft,stream_compute);
++  if(cufft_state!=CUFFT_SUCCESS){
++    printf("alloc_gpu_fourwf:\n ERROR: while associating cufftPlan to a stream:\n%s\n",cufftGetErrorString(cufft_state));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  cuda_return = cudaMalloc(&work_gpu,2*ndat_loc*fft_size*sizeof(float));
++  cuda_return = cudaMalloc(&fofr_gpu,2*ndat_loc*fft_size*sizeof(float));
++  cuda_return = cudaMalloc(&denpot_gpu,fft_size*sizeof(float));
++  cuda_return = cudaMalloc(&weightr_gpu,ndat_loc*sizeof(float));
++  cuda_return = cudaMalloc(&weighti_gpu,ndat_loc*sizeof(float));
++  cuda_return = cudaMalloc(&kg_kin_gpu,3*npw*sizeof(int));
++  cuda_return = cudaMalloc(&fofgin_gpu,2*npw*ndat_loc*sizeof(float));
++  cuda_return = cudaMalloc(&kg_kout_gpu,3*npw*sizeof(int));
++  cuda_return = cudaMalloc(&fofgout_gpu,2*npw*ndat_loc*sizeof(float));
++  if(cuda_return != cudaSuccess){
++    printf("alloc_gpu_fourwf: ERROR while allocating memory on gpu: %s \n",cudaGetErrorString(cuda_return));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++
++  //Allocation des buffers cpu "pinned"
++  cuda_return = cudaMallocHost(&buff_denpot,fft_size*sizeof(float));
++  cuda_return = cudaMallocHost(&buff_weightr,ndat_loc*sizeof(float));
++  cuda_return = cudaMallocHost(&buff_weighti,ndat_loc*sizeof(float));
++  if(cuda_return != cudaSuccess){
++    printf("alloc_gpu_fourwf:\n ERROR while allocating pinned memory for transfert to gpu: %s \n",cudaGetErrorString(cuda_return));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++}//End of alloc_gpu_fourwf_
++
++
++extern "C" void free_gpu_fourwf_(){
++  cufftResult cufft_state;
++  cudaError_t cuda_return;
++
++  //On detruit l'ancien plan
++  cufft_state = cufftDestroy(plan_fft);
++  if(cufft_state!=CUFFT_SUCCESS){
++    printf("free_gpu_fourwf:\n ERROR: at destruction of cufftPlan \n");
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  cuda_return = cudaFree(work_gpu);
++  cuda_return = cudaFree(fofr_gpu);
++  cuda_return = cudaFree(denpot_gpu);
++  cuda_return = cudaFree(weightr_gpu);
++  cuda_return = cudaFree(weighti_gpu);
++  cuda_return = cudaFree(kg_kin_gpu);
++  cuda_return = cudaFree(fofgin_gpu);
++  cuda_return = cudaFree(kg_kout_gpu);
++  cuda_return = cudaFree(fofgout_gpu);
++  cuda_return = cudaFreeHost(buff_denpot);
++  cuda_return = cudaFreeHost(buff_weightr);
++  cuda_return = cudaFreeHost(buff_weighti);
++  if(cuda_return != cudaSuccess){
++    printf("free_gpu_fourwf:\n ERROR while freeing memory on gpu: %s \n",cudaGetErrorString(cuda_return));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  cuda_return = cudaStreamDestroy(stream_cpy);
++  cuda_return = cudaStreamDestroy(stream_compute);
++  if(cuda_return != cudaSuccess){
++    printf("free_gpu_fourwf:\n ERROR: at destruction of streams: %s \n",cudaGetErrorString(cuda_return));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  gpu_initialized = 0;
++}//end of free_gpu_fourwf_()
++#endif
++
++
+ //***
+ 
+ 
+diff -Naur ./src/52_manage_cuda/gpu_mkkpg.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_mkkpg.cu
+--- ./src/52_manage_cuda/gpu_mkkpg.cu	2016-08-06 16:05:01.000000000 +0800
++++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_mkkpg.cu	2017-01-08 11:49:14.327385296 +0800
+@@ -38,7 +38,7 @@
+ #include "config.h"
+ #endif
+ 
+-
++#if defined HAVE_GPU_CUDA_DP
+ __global__ void kernel_mkkpg(double *kpg,int *kg,
+ 			     const int npw,
+ 			     const double kpt_0,const double kpt_1,const double kpt_2
+@@ -72,4 +72,40 @@
+   grid.x = ((*npw) + block.x - 1)/block.x;
+   kernel_mkkpg<<<grid,block>>>(kpg_gpu,kg_gpu,*npw,kpt[0],kpt[1],kpt[2]);
+ }
++
++#else
++__global__ void kernel_mkkpg(float *kpg,int *kg,
++			     const int npw,
++			     const float kpt_0,const float kpt_1,const float kpt_2
++			     ){
++
++  int ipw = threadIdx.x + blockIdx.x*blockDim.x;
++  if(ipw<npw){
++    //-- Compute (k+G) -- for mu = 1 --> 3
++    kpg[ipw + 0*npw ] = kpt_0 + kg[0 + 3*ipw];
++    kpg[ipw + 1*npw ] = kpt_1 + kg[1 + 3*ipw];
++    kpg[ipw + 2*npw ] = kpt_2 + kg[2 + 3*ipw];
++  }
++}
++
++extern "C" void gpu_mkkpg_(int *kg_gpu,float *kpg_gpu,float *kpt,int *npw){
++
++
++//Arguments ------------------------------------
++//scalars
++// integer,intent(in) :: nkpg,npw
++//arrays
++// integer,intent(in) :: kg(3,npw)
++// real(dp),intent(in) :: kpt(3)
++// real(dp),intent(out) :: kpg(npw,nkpg)
++
++//Local variables-------------------------------
++//integer,parameter :: alpha(6)=(/1,2,3,3,3,2/),beta(6)=(/1,2,3,2,1,1/)
++
++  dim3 grid,block;
++  block.x = 64;
++  grid.x = ((*npw) + block.x - 1)/block.x;
++  kernel_mkkpg<<<grid,block>>>(kpg_gpu,kg_gpu,*npw,kpt[0],kpt[1],kpt[2]);
++}
++#endif
+ //***
+diff -Naur ./src/52_manage_cuda/gpu_nonlop.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_nonlop.cu
+--- ./src/52_manage_cuda/gpu_nonlop.cu	2016-08-06 16:05:01.000000000 +0800
++++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_nonlop.cu	2017-01-08 11:55:10.877406963 +0800
+@@ -228,7 +228,7 @@
+ 
+ #include "gpu_four_header.h"
+ 
+-
++#if defined HAVE_GPU_CUDA_DP
+ //GPU memory areas
+ static double2 *vectin_gpu,*ph3din_gpu,*proj_gpu,*dproj_gpu;
+ static double2 *vectout_gpu,*svectout_gpu,*ph3dout_gpu;
+@@ -724,6 +724,503 @@
+   ffnl_ph3d_updated = 1;
+ }
+ 
++#else
++//GPU memory areas
++static float2 *vectin_gpu,*ph3din_gpu,*proj_gpu,*dproj_gpu;
++static float2 *vectout_gpu,*svectout_gpu,*ph3dout_gpu;
++static float2 *val_ajlmn_gpu,*val_sajlmn_gpu;
++static float *ffnlin_gpu,*kpgin_gpu,*ffnlout_gpu,*enl_gpu,*sij_gpu,*rdlmn_gpu,*rdproj_gpu,*enlout_gpu,*d_enlk_gpu,*gprimd_gpu;
++static unsigned char *typat_gpu,*lmn_gpu,*nlmn_gpu;
++static unsigned short int *atoms_gpu;
++static int *indlmn_gpu,*atindx1_gpu,*kgin_gpu;
++
++//CPU Transfert buffers
++static unsigned char *typat,*lmn,*nlmn;
++static unsigned short int *atoms;
++
++//
++static int gpu_initialization=0;
++static int nb_proj_to_compute=0;
++static int m_ham_used=0;
++static int ffnl_ph3d_updated=0;
++
++
++//Compute Routine
++extern "C" void gpu_nonlop_(int *atindx1,int *choice,int *cpopt,float *proj,int *dimenl1,int *dimenl2,int *dimffnlin,int *dimffnlout,
++			    float *enl,float *enlout,float *ffnlin,float *ffnlout,float *gprimd,int *idir,int *indlmn,int *istwf_k,
++			    int *kgin,int *kgout,float *kpgin,float *kpgout,float *kptin,float *kptout,float *lambda,int *lmnmax,int *matblk,int *mgfft,
++			    int *mpi_enreg_me_g0,int *natom,int *nattyp,int *ngfft,int *nkpgin,int *nkpgout,int *nloalg,
++			    int *nnlout,int *npwin,int *npwout,int *nspinor,int *ntypat,int *paw_opt,float *phkxredin,
++			    float *phkxredout,float *ph1d,float *ph3din,float *ph3dout,int *signs,float *sij,float *svectout,
++			    float *pi,float *ucvol,float *vectin,float *vectout)
++{
++
++  //  use defs_basis
++  //  use defs_datatypes
++  //  use defs_abitypes
++
++  // !This section has been created automatically by the script Abilint (TD).
++  // !Do not modify the following lines by hand.
++  //  use interfaces_14_hidewrite
++  //  use interfaces_16_hideleave
++  //  use interfaces_18_timing
++  //  use interfaces_65_nonlocal, except_this_one => nonlop
++  // !End of the abilint section
++
++  //  implicit none
++
++  // !Arguments ------------------------------------
++  // !scalars
++  //  integer,intent(in) :: choice,cpopt,dimenl1,dimenl2,dimffnlin,dimffnlout,idir
++  //  integer,intent(in) :: istwf_k,lmnmax,matblk,mgfft,mpsang,mpssoang,natom,nkpgin
++  //  integer,intent(in) :: nkpgout,nnlout,npwin,npwout,nspinor,ntypat,only_SO
++  //  integer,intent(in) :: paw_opt,signs,tim_nonlop,useylm
++  //  real(dp),intent(in) :: lambda,ucvol
++  //  type(MPI_type),intent(inout) :: mpi_enreg
++  // !arrays
++  //  integer,intent(in) :: atindx1(natom),indlmn(6,lmnmax,ntypat),kgin(3,npwin)
++  //  integer,intent(in) :: kgout(3,npwout),nattyp(ntypat),ngfft(18),nloalg(5)
++  // !integer,intent(in) :: pspso(ntypat) ! Unused
++  //  real(dp),intent(in) :: enl(dimenl1,dimenl2,nspinor**2)
++  //  real(dp),intent(in) :: ffnlin(npwin,dimffnlin,lmnmax,ntypat)
++  //  real(dp),intent(in) :: ffnlout(npwout,dimffnlout,lmnmax,ntypat),gmet(3,3)
++  //  real(dp),intent(in) :: gprimd(3,3),kpgin(npwin,nkpgin*useylm)
++  //  real(dp),intent(in) :: kpgout(npwout,nkpgout*useylm),kptin(3),kptout(3)
++  //  real(dp),intent(in) :: ph1d(2,3*(2*mgfft+1)*natom),phkxredin(2,natom)
++  //  real(dp),intent(in) :: phkxredout(2,natom),sij(dimenl1,ntypat*((paw_opt+1)/3))
++  //  real(dp),intent(inout) :: ph3din(2,npwin,matblk),ph3dout(2,npwout,matblk)
++  //  real(dp),intent(inout) :: vectin(2,npwin*nspinor)
++  //  real(dp),intent(out) :: enlout(nnlout),svectout(2,npwout*nspinor*(paw_opt/3))
++  //  real(dp),intent(out) :: vectout(2,npwout*nspinor)
++  //  type(cprj_type),intent(inout) :: cprjin(natom,nspinor*((cpopt+5)/5))
++
++  // Local variables-------------------------------
++  // scalars
++  //  character(len=500) :: message
++  //  integer :: i
++  //arrays
++  //  real(dp) :: tsec(2)
++
++  cudaError_t cuda_state;
++  float2 vectin_0={0.,0.};
++
++
++  //We check for functionality
++  if(((*choice)!=0)&&((*choice)!=1)&&((*choice)!=2)&&((*choice)!=3)&&((*choice)!=23)){
++    printf("gpu_nonlop: Error:\n choice %d was used but only choice 0,1,2,3 and 23 are available on GPU\n",(*choice));
++    printf(" Try to change your input files with correct optforces & optstress ...\n");
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  if((*nspinor)!=1){
++    printf("gpu_nonlop: Error:\n Only nspinor = 1 is allowed at the moment but you used %d\n",(*nspinor));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  if(((*choice)==1)&&((*signs)!=2)){
++    printf("gpu_nonlop: Error:\n when choice is 1 only signs=2 is implemented. ( %d was used) \n",(*signs));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++  if((((*choice)==2)||((*choice)==3)||((*choice)==23))&&((*signs)!=1)){
++    printf("gpu_nonlop: Error:\n when choice is 2,3 or 23 only signs=1 is implemented. ( %d was used) \n",(*signs));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  if((*nloalg)<=0){
++    printf("gpu_nonlop: Error:\n Only nloalg(1)>0 is allowed at the moment but you used %d\n",(*nloalg));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  if( ((*paw_opt)>0) && ((2*(*dimenl1)/((*lmnmax)*((*lmnmax)+1)))!=1) ){
++    printf("gpu_nonlop: Error:\n only the real case for enl has been implemented on gpu and complex was used\n");
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  //GPU allocation
++  if(!gpu_initialization)
++    alloc_nonlop_gpu_(npwin,npwout,nspinor,
++		      natom,ntypat,lmnmax,
++		      indlmn,nattyp,
++		      atindx1,gprimd,
++		      dimffnlin,
++		      dimenl1,dimenl2,dimffnlout);
++
++  //If no projections everything is zero
++  if (nb_proj_to_compute==0){
++    int i;
++    if((*signs)==1){
++      for (i=0;i<(*nnlout);i++) {enlout[i]=0.;}
++    }
++    if((*signs)==2){
++      if (((*paw_opt)==0)||((*paw_opt)==1)||((*paw_opt)==4)){
++        for (i=0;i<2*(*npwout);i++) {vectout[i]=0.;}
++      }
++      if (((*paw_opt)==2)&&((*choice)==1)){
++        for (i=0;i<2*(*npwout);i++) {vectout[i]=-(*lambda)*vectin[i];}
++      }
++      if (((*paw_opt)==2)&&((*choice)>1)){
++        for (i=0;i<2*(*npwout);i++) {vectout[i]=0.;}
++      }
++      if (((*paw_opt)==3)||((*paw_opt)==4)){
++        if ((*choice)==1){
++          for (i=0;i<2*(*npwout);i++) {svectout[i]=vectin[i];}
++        }
++        if ((*choice)>1){
++          for (i=0;i<2*(*npwout);i++) {svectout[i]=0.;}
++        }
++      }
++    }
++    return;
++  }
++
++  //Trick to avoid complex branchement in cuda kernels
++  if( ((*istwf_k)==2) && ((*mpi_enreg_me_g0)==1) ){
++    vectin_0.x  = vectin[0];
++    vectin_0.y  = vectin[1];
++    vectin[0] = vectin_0.x/2;
++    vectin[1] = 0.;
++  }
++
++  //Memcopies
++  cuda_state=cudaMemcpy(vectin_gpu,vectin,(*npwin)*sizeof(float2),cudaMemcpyHostToDevice);
++
++  if(ffnl_ph3d_updated!=1){
++    cuda_state=cudaMemcpy(ph3din_gpu,ph3din,(*natom)*(*npwin)*sizeof(float2),cudaMemcpyHostToDevice);
++    cuda_state=cudaMemcpy(ffnlin_gpu,ffnlin,(*npwin)*(*dimffnlin)*(*lmnmax)*(*ntypat)*sizeof(float),cudaMemcpyHostToDevice);
++  }
++
++  if((*choice)>=2){
++    if((*nkpgin)>0)
++      cuda_state=cudaMemcpy(kpgin_gpu,kpgin,(*npwin)*(*nkpgin)*sizeof(float),cudaMemcpyHostToDevice);
++    else{
++      cuda_state=cudaMemcpy(kgin_gpu,kgin,3*(*npwin)*sizeof(int),cudaMemcpyHostToDevice);
++      gpu_mkkpg_(kgin_gpu,kpgin_gpu,kptin,npwin);
++    }
++  }
++
++  if(cuda_state!=cudaSuccess){
++    printf("gpu_nonlop: Error while copying data to gpu : %s \n",cudaGetErrorString(cuda_state));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  //Compute Projection
++  char cplex;
++  if((*istwf_k)>1)
++    cplex=1;
++  else
++    cplex=2;
++
++  gpu_compute_nl_projections_(proj_gpu,dproj_gpu,
++			      vectin_gpu,ph3din_gpu,
++			      ffnlin_gpu,kpgin_gpu,
++			      indlmn_gpu,atoms_gpu,lmn_gpu,typat_gpu,
++			      &nb_proj_to_compute,npwin,choice,
++			      dimffnlin,lmnmax,&cplex,pi,ucvol);
++
++  //Copy back projections if wanted
++  if(((*cpopt)==0)||((*cpopt)==1))
++    cudaMemcpy(proj , proj_gpu,nb_proj_to_compute*sizeof(float2),cudaMemcpyDeviceToHost);
++
++  if((*choice)>0){
++    const float four_pi_by_ucvol=4*(*pi)/sqrt(*ucvol);
++
++    //Memcopies
++    //No need since ffnlout=ffnlin and ph3dout=ph3din
++    //     if((*choice)==1){
++    //       cuda_state=cudaMemcpy(ph3dout_gpu,ph3dout,(*natom)*(*npwout)*sizeof(float2),cudaMemcpyHostToDevice);
++    //       cuda_state=cudaMemcpy(ffnlout_gpu,ffnlout,(*npwout)*(*dimffnlout)*(*lmnmax)*(*ntypat)*sizeof(float),cudaMemcpyHostToDevice);
++    //     }
++
++    if(m_ham_used != 1) {
++      if((*paw_opt)!=3)
++	cuda_state=cudaMemcpy(enl_gpu, enl, (*dimenl1)*(*dimenl2)*(*nspinor)*(*nspinor)*sizeof(float),cudaMemcpyHostToDevice);
++      if((*paw_opt)>1)
++      cuda_state=cudaMemcpy(sij_gpu, sij, (*dimenl1)*(*ntypat)*sizeof(float),cudaMemcpyHostToDevice);
++
++      if((*choice==3)||((*choice==23)))
++	cuda_state=cudaMemcpy(gprimd_gpu,gprimd,9*sizeof(float),cudaMemcpyHostToDevice);
++
++      if(cuda_state!=cudaSuccess){
++	printf("gpu_nonlop: Error while copying data 2 to gpu :\n %s \n",cudaGetErrorString(cuda_state));
++	fflush(stdout);
++	leave_new_("COLL");
++      }
++    }
++
++    gpu_compute_nl_hamiltonian_(proj_gpu,dproj_gpu,
++				vectin_gpu,
++				vectout_gpu,svectout_gpu,
++				val_ajlmn_gpu,val_sajlmn_gpu,
++				ph3din_gpu,ffnlin_gpu,// <== ph3dout_gpu,ffnlout_gpu,
++				rdlmn_gpu,rdproj_gpu,
++				enlout_gpu,d_enlk_gpu,
++				enl_gpu,sij_gpu,gprimd_gpu,
++				atindx1_gpu,nlmn_gpu,
++				indlmn_gpu,atoms_gpu,
++				lmn_gpu,typat_gpu,
++				paw_opt,dimffnlout,dimenl1,
++				npwout,&nb_proj_to_compute,lmnmax,
++				natom,choice,signs,
++				&four_pi_by_ucvol,lambda);
++
++    //We copy back results
++    if((*choice)==1){
++      if((*paw_opt)!=3)
++	cuda_state=cudaMemcpy(vectout,vectout_gpu,(*npwout)*sizeof(float2),cudaMemcpyDeviceToHost);
++      if((*paw_opt)>2)
++	cuda_state=cudaMemcpy(svectout,svectout_gpu,(*npwout)*sizeof(float2),cudaMemcpyDeviceToHost);
++    }
++    else if(((*choice)==2) && ((*signs)==1))
++      cuda_state=cudaMemcpy(enlout,enlout_gpu,3*(*natom)*sizeof(float),cudaMemcpyDeviceToHost);
++    else if(((*choice)==3) && ((*signs)==1))
++      cuda_state=cudaMemcpy(enlout,enlout_gpu,6*sizeof(float),cudaMemcpyDeviceToHost);
++    else if(((*choice)==23) && ((*signs)==1))
++      cuda_state=cudaMemcpy(enlout,enlout_gpu,(6+3*(*natom))*sizeof(float),cudaMemcpyDeviceToHost);
++
++    if(cuda_state!=cudaSuccess){
++      printf("gpu_nonlop: Error while retrieving results from gpu :\n %s \n",cudaGetErrorString(cuda_state));
++      fflush(stdout);
++      leave_new_("COLL");
++    }
++  }
++
++  //We put back the correct value of vectin and correct svectout if needed
++  if( ((*istwf_k)==2) && ((*mpi_enreg_me_g0)==1) ){
++    vectin[0] = vectin_0.x;
++    vectin[1] = vectin_0.y;
++    if((*paw_opt)>2){
++      svectout[0] += vectin[0]/2;
++      svectout[1] += vectin[1];
++    }
++  }
++
++  //Impossible
++  if(!gpu_initialization)
++    free_nonlop_gpu_();
++
++}// end subroutine gpu_nonlop
++
++
++
++//Allocation routine
++extern "C" void alloc_nonlop_gpu_(int *npwin,int *npwout,int *nspinor,
++				  int *natom,int *ntypat,int *lmnmax,
++				  int *indlmn,int *nattyp,
++				  int *atindx1,float *gprimd,
++				  int *dimffnlin,int *dimffnlout,
++				  int *dimenl1, int *dimenl2 ){
++
++//   printf("calling alloc_nonlop_gpu with npw=%d \n",*npwin);
++//   fflush(stdout);
++
++  //Si on avait deja alloue
++  if(gpu_initialization==1)
++    free_nonlop_gpu_();
++  else
++    gpu_initialization = 1;
++
++  nb_proj_to_compute=0;
++
++  cudaError_t cuda_state;
++
++  cudaMallocHost(&nlmn,(*ntypat)*sizeof(char));
++  //Calcul du nombre de projections
++  for(int itypat=0;itypat<(*ntypat);itypat++){
++    int count_ilmn=0;
++    for(int ilmn=0;ilmn<(*lmnmax);ilmn++){
++      if(indlmn[2+6*(ilmn + (*lmnmax)*(itypat))] > 0)
++	count_ilmn++;
++    }
++    nlmn[itypat]=count_ilmn;
++    nb_proj_to_compute+=count_ilmn*nattyp[itypat];
++  }
++
++  cuda_state=cudaMalloc(&vectin_gpu, (*npwin)*sizeof(float2));
++  cuda_state=cudaMalloc(&vectout_gpu, (*npwout)*sizeof(float2));
++  cuda_state=cudaMalloc(&svectout_gpu, (*npwout)*sizeof(float2));
++  cuda_state=cudaMalloc(&ph3din_gpu, (*natom)*(*npwin)*sizeof(float2));
++  cuda_state=cudaMalloc(&ffnlin_gpu, (*npwin)*(*dimffnlin)*(*lmnmax)*(*ntypat)*sizeof(float));
++  cuda_state=cudaMalloc(&kpgin_gpu, (*npwin)*3*sizeof(float));
++  cuda_state=cudaMalloc(&kgin_gpu, (*npwin)*3*sizeof(int));
++  cuda_state=cudaMalloc(&ph3dout_gpu, (*npwout)*(*natom)*sizeof(float2));
++  cuda_state=cudaMalloc(&ffnlout_gpu, (*npwout)*(*dimffnlout)*(*lmnmax)*(*ntypat)*sizeof(float));
++  cuda_state=cudaMalloc(&enl_gpu,(*dimenl1)*(*dimenl2)*(*nspinor)*(*nspinor)*sizeof(float));
++  cuda_state=cudaMalloc(&sij_gpu,(*dimenl1)*(*ntypat)*sizeof(float));
++
++  cuda_state=cudaMalloc(&indlmn_gpu, 6*(*lmnmax)*(*ntypat)*sizeof(int));
++  cuda_state=cudaMalloc(&atindx1_gpu, (*natom)*sizeof(int));
++  cuda_state=cudaMalloc(&typat_gpu, nb_proj_to_compute*sizeof(char));
++  cuda_state=cudaMalloc(&nlmn_gpu,(*ntypat)*sizeof(char));
++  cuda_state=cudaMalloc(&lmn_gpu, nb_proj_to_compute*sizeof(char));
++  cuda_state=cudaMalloc(&atoms_gpu, nb_proj_to_compute*sizeof(short int));
++
++  cuda_state=cudaMalloc(&proj_gpu, nb_proj_to_compute*sizeof(float2));
++  cuda_state=cudaMalloc(&dproj_gpu, 10*nb_proj_to_compute*sizeof(float2));
++  cuda_state=cudaMalloc(&rdproj_gpu, 7*nb_proj_to_compute*sizeof(float));
++  cuda_state=cudaMalloc(&rdlmn_gpu, 3*(*natom)*(*lmnmax)*sizeof(float));
++
++  cuda_state=cudaMalloc(&d_enlk_gpu, 7*sizeof(float));
++  cuda_state=cudaMalloc(&gprimd_gpu, 9*sizeof(float));
++  cuda_state=cudaMalloc(&enlout_gpu, (6+3*(*natom))*sizeof(float));
++  cuda_state=cudaMalloc(&val_ajlmn_gpu, nb_proj_to_compute*sizeof(float2));
++  cuda_state=cudaMalloc(&val_sajlmn_gpu, nb_proj_to_compute*sizeof(float2));
++
++
++  cuda_state=cudaMallocHost(&typat, nb_proj_to_compute*sizeof(char));
++  cuda_state=cudaMallocHost(&lmn, nb_proj_to_compute*sizeof(char));
++  cuda_state=cudaMallocHost(&atoms, nb_proj_to_compute*sizeof(short int));
++
++  if(cuda_state!=cudaSuccess){
++    printf("alloc_nonlop_gpu: Error during gpu memory allocation :\n %s \n",cudaGetErrorString(cuda_state));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  //Precompute couple (atom,lmn) for each projection
++  int iproj=0;
++  int iatom=0;
++  for(int itypat=0;itypat<(*ntypat);itypat++){
++    for(int iat=0;iat<nattyp[itypat];iat++){
++      for(int ilmn=0;ilmn<nlmn[itypat];ilmn++){
++	typat[iproj]=itypat;
++	lmn[iproj]=ilmn;
++	atoms[iproj]=iatom;
++	iproj++;
++      }
++      iatom++;
++    }
++  }
++  assert(iproj==nb_proj_to_compute);
++
++  cuda_state=cudaMemcpy(indlmn_gpu,indlmn, 6*(*lmnmax)*(*ntypat)*sizeof(int),cudaMemcpyHostToDevice);
++  cuda_state=cudaMemcpy(typat_gpu,typat, nb_proj_to_compute*sizeof(char),cudaMemcpyHostToDevice);
++  cuda_state=cudaMemcpy(lmn_gpu,lmn, nb_proj_to_compute*sizeof(char),cudaMemcpyHostToDevice);
++  cuda_state=cudaMemcpy(atoms_gpu,atoms,nb_proj_to_compute*sizeof(short int),cudaMemcpyHostToDevice);
++  cuda_state=cudaMemcpy(atindx1_gpu, atindx1, (*natom)*sizeof(int),cudaMemcpyHostToDevice);
++  cuda_state=cudaMemcpy(nlmn_gpu, nlmn, (*ntypat)*sizeof(char),cudaMemcpyHostToDevice);
++  cuda_state=cudaMemcpy(gprimd_gpu,gprimd,9*sizeof(float),cudaMemcpyHostToDevice);
++  if(cuda_state!=cudaSuccess){
++    printf("alloc_nonlop_gpu: Error while copying data to gpu :\n %s \n",cudaGetErrorString(cuda_state));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++  cuda_state=cudaMemset(rdlmn_gpu,0,3*(*natom)*(*lmnmax)*sizeof(float));
++  if(cuda_state!=cudaSuccess){
++    printf("alloc_nonlop_gpu: Error while set tabs to 0:\n %s \n",cudaGetErrorString(cuda_state));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++}
++
++
++//Deallocation routine
++extern "C" void free_nonlop_gpu_(){
++
++  gpu_initialization=0;
++
++  cudaError_t cuda_state;
++
++  //Free Memory
++  cuda_state=cudaFreeHost(nlmn);
++
++  cuda_state=cudaFree(vectin_gpu);
++  cuda_state=cudaFree(vectout_gpu);
++  cuda_state=cudaFree(svectout_gpu);
++  cuda_state=cudaFree(ph3din_gpu);
++  cuda_state=cudaFree(ffnlin_gpu);
++  cuda_state=cudaFree(kpgin_gpu);
++  cuda_state=cudaFree(kgin_gpu);
++  cuda_state=cudaFree(ph3dout_gpu);
++  cuda_state=cudaFree(ffnlout_gpu);
++  cuda_state=cudaFree(enl_gpu);
++  cuda_state=cudaFree(sij_gpu);
++
++  cuda_state=cudaFree(indlmn_gpu);
++  cuda_state=cudaFree(atindx1_gpu);
++  cuda_state=cudaFree(typat_gpu);
++  cuda_state=cudaFree(nlmn_gpu);
++  cuda_state=cudaFree(lmn_gpu);
++  cuda_state=cudaFree(atoms_gpu);
++
++  cuda_state=cudaFree(proj_gpu);
++  cuda_state=cudaFree(dproj_gpu);
++  cuda_state=cudaFree(rdproj_gpu);
++  cuda_state=cudaFree(rdlmn_gpu);
++
++  cuda_state=cudaFree(d_enlk_gpu);
++  cuda_state=cudaFree(gprimd_gpu);
++  cuda_state=cudaFree(enlout_gpu);
++  cuda_state=cudaFree(val_ajlmn_gpu);
++  cuda_state=cudaFree(val_sajlmn_gpu);
++
++  cuda_state=cudaFreeHost(typat);
++  cuda_state=cudaFreeHost(lmn);
++  cuda_state=cudaFreeHost(atoms);
++
++  if(cuda_state!=cudaSuccess){
++    printf("free_nonlop_gpu: Error while freeing gpu data:\n %s \n",cudaGetErrorString(cuda_state));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++}
++
++extern "C" void gpu_update_ham_data_(float *enl,int *size_enl, float *sij,int *size_sij,
++                                     float *gprimd,int *size_gprimd){
++
++  cudaError_t cuda_state;
++
++  cuda_state=cudaMemcpy(enl_gpu, enl, (*size_enl)*sizeof(float),cudaMemcpyHostToDevice);
++  if(cuda_state!=cudaSuccess){
++    printf("gpu_update_ham_data: Error while copying data 1 to gpu :\n %s \n",cudaGetErrorString(cuda_state));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++  if((*size_sij)>0){
++    cuda_state=cudaMemcpy(sij_gpu, sij, (*size_sij)*sizeof(float),cudaMemcpyHostToDevice);
++    if(cuda_state!=cudaSuccess){
++      printf("gpu_update_ham_data: Error while copying data 2 to gpu :\n %s \n",cudaGetErrorString(cuda_state));
++      fflush(stdout);
++      leave_new_("COLL");
++    }
++  }
++
++  cuda_state=cudaMemcpy(gprimd_gpu,gprimd,(*size_gprimd)*sizeof(float),cudaMemcpyHostToDevice);
++  if(cuda_state!=cudaSuccess){
++    printf("gpu_update_ham_data: Error while copying data 3 to gpu :\n %s \n",cudaGetErrorString(cuda_state));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++  m_ham_used = 1;
++}
++
++extern "C" void gpu_update_ffnl_ph3d_(float *ph3din,int *dimph3din,float *ffnlin,int *dimffnlin){
++
++  cudaError_t cuda_state;
++
++  cuda_state=cudaMemcpy(ffnlin_gpu,ffnlin,(*dimffnlin)*sizeof(float),cudaMemcpyHostToDevice);
++  if(cuda_state!=cudaSuccess){
++    printf("gpu_update_ffnl_ph3d: Error while copying data 1 to gpu :\n %s \n",cudaGetErrorString(cuda_state));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++  cuda_state=cudaMemcpy(ph3din_gpu,ph3din,(*dimph3din)*sizeof(float),cudaMemcpyHostToDevice);
++  if(cuda_state!=cudaSuccess){
++    printf("gpu_update_ffnl_ph3d: Error while copying data 2 to gpu :\n %s \n",cudaGetErrorString(cuda_state));
++    fflush(stdout);
++    leave_new_("COLL");
++  }
++
++  ffnl_ph3d_updated = 1;
++}
++#endif
++
+ extern "C" void gpu_finalize_ffnl_ph3d_(){
+   ffnl_ph3d_updated = 0;
+ }
+@@ -732,4 +1229,6 @@
+ extern "C" void gpu_finalize_ham_data_(){
+   m_ham_used = 0;
+ }
++
++
+ //***
+diff -Naur ./src/52_manage_cuda/gpu_sphere.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_sphere.cu
+--- ./src/52_manage_cuda/gpu_sphere.cu	2016-08-06 16:05:01.000000000 +0800
++++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_sphere.cu	2017-01-08 11:58:07.733417710 +0800
+@@ -64,6 +64,7 @@
+ /*******                                                 **********/
+ /******************************************************************/
+ 
++#if defined HAVE_GPU_CUDA_DP
+ __global__ void kernel_set_zero(double *tab,int n){
+   int id= threadIdx.x + blockDim.x*(blockIdx.x + gridDim.x*blockIdx.y);
+   if(id<n)
+@@ -265,4 +266,208 @@
+ 
+ }//end subroutine gpu_sphere_out
+ 
++
++#else
++__global__ void kernel_set_zero(float *tab,int n){
++  int id= threadIdx.x + blockDim.x*(blockIdx.x + gridDim.x*blockIdx.y);
++  if(id<n)
++    tab[id]=0.;
++}
++
++__global__ void kernel_sphere_in(float *cfft,float *cg, const int *kg_k,
++				 const int npw,const int ndat,const int n1,const int n2,const int n3,
++				 const int shift_inv1,const int shift_inv2,const int shift_inv3,
++				 const int istwfk){
++
++  int ipw,idat,thread_id;
++  int i1,i2,i3;
++  thread_id  = threadIdx.x + blockIdx.x*blockDim.x;
++  idat = blockIdx.y;
++
++  for(ipw=thread_id; ipw<npw; ipw+=blockDim.x*gridDim.x){
++    i1=kg_k[ipw*3];//kg_k(1,ipw)
++    i2=kg_k[ipw*3 + 1];//kg_k(2,ipw)
++    i3=kg_k[ipw*3 + 2];//kg_k(3,ipw)
++    if(i1<0)
++      i1+=n1;
++    if(i2<0)
++      i2+=n2;
++    if(i3<0)
++      i3+=n3;
++
++    //We write cfft(i1,i2,i3)
++    //(float2): cfft[i1 + n1*(i2 + n2*(i3 + n3*idat))] = cg[ipw + npw*idat]
++    cfft[2*(i1 + n1*(i2 + n2*(i3+n3*idat)))] = cg[2*(ipw + npw*idat)];
++    cfft[1+ 2*(i1 + n1*(i2 + n2*(i3+n3*idat)))] = cg[1 + 2*(ipw + npw*idat)];
++
++    if(istwfk > 1){
++      int i1inv,i2inv,i3inv;
++      i1inv = (shift_inv1 - i1) % n1;
++      i2inv = (shift_inv2 - i2) % n2;
++      i3inv = (shift_inv3 - i3) % n3;
++      //cfft(1,i1inv,i2inv,i3inv+n6*(idat-1))= cg(1,ipw+npw*(idat-1))
++      //cfft(2,i1inv,i2inv,i3inv+n6*(idat-1))=-cg(2,ipw+npw*(idat-1))
++      cfft[2*(i1inv + n1*(i2inv + n2*(i3inv+n3*idat)))] = cg[2*(ipw + npw*idat)];
++      cfft[1+ 2*(i1inv + n1*(i2inv + n2*(i3inv+n3*idat)))] = -cg[1 + 2*(ipw + npw*idat)];
++    }
++  }
++}
++
++__global__ void kernel_sphere_out(float *cfft,float *cg, int *kg_k,int npw,int ndat,int n1,int n2,int n3,float norm){
++
++  int ig,idat,thread_id;
++  int i1,i2,i3;
++  thread_id = threadIdx.x + blockIdx.x*blockDim.x;
++  idat = blockIdx.y;
++
++  for(ig=thread_id; ig<npw; ig+=blockDim.x*gridDim.x){
++    i1=kg_k[ig*3];//kg_k(1,ipw)
++    i2=kg_k[ig*3 + 1];//kg_k(2,ipw)
++    i3=kg_k[ig*3 + 2];//kg_k(3,ipw)
++    if(i1<0)
++      i1+=n1;
++    if(i2<0)
++      i2+=n2;
++    if(i3<0)
++      i3+=n3;
++
++    //We write cg(ig)
++    cg[2*(ig + npw*idat)]     = norm * cfft[2*(i1 + n1*(i2 + n2*(i3+n3*idat)))] ;
++    cg[1 + 2*(ig + npw*idat)] = norm * cfft[1+ 2*(i1 + n1*(i2 + n2*(i3+n3*idat)))] ;
++  }
++}
++
++/******************************************************************/
++/*******                                                 **********/
++/*******          FUNCTIONS TO BE CALLED                 **********/
++/*******                                                 **********/
++/******************************************************************/
++
++extern "C" void gpu_sphere_in_(float *cg,float *cfft,int *kg_k,int *npw,int *n1,int *n2,int *n3,int *ndat,int *istwfk,cudaStream_t *compute_stream)
++{
++
++  //Arguments ------------------------------------
++  //scalars
++  //  integer,intent(in) :: istwfk,n1,n2,n3,ndat,npw
++  //  cuda_stream_t, intent(in) :: compute_stream
++  //arrays
++  //  integer,intent(in) :: kg_k(3,npw)
++  //  real(dp),intent(in) :: cg(2,npw*ndat)
++  //  real(dp),intent(inout) :: cfft(2,n1,n2,n3*ndat)
++
++  // //Local variables-------------------------------
++  dim3 grid,bloc;
++  int cfft_size=2*(*n1)*(*n2)*(*n3)*(*ndat);
++  int shift_inv1,shift_inv2,shift_inv3;
++  int istwf_k = *istwfk;
++  // *************************************************************************
++
++  //Set all work tab to zero
++  bloc.x = BLOCK_SIZE;
++  grid.x = min((cfft_size + bloc.x - 1 )/bloc.x,MAX_GRID_SIZE);
++  grid.y = (cfft_size + bloc.x*grid.x - 1)/(bloc.x*grid.x);
++  kernel_set_zero<<<grid,bloc,0,*compute_stream>>>(cfft,cfft_size);
++
++
++  //During GPU calculation we do some pre-calculation on symetries
++  if((istwf_k==2) || (istwf_k==4) || (istwf_k==6) || (istwf_k==8)){
++    shift_inv1 = *n1;
++  }
++  else{
++    shift_inv1 = *n1-1;
++  }
++
++  if((istwf_k>=2) && (istwf_k<=5)) {
++    shift_inv2 = *n2;
++  }
++  else{
++    shift_inv2 = *n2-1;
++  }
++
++  if((istwf_k==2) || (istwf_k==3) || (istwf_k==6) || (istwf_k==7)){
++    shift_inv3 = *n3;
++  }else{
++    shift_inv3 = *n3-1;
++  }
++
++
++  grid.x = min((*npw  + bloc.x - 1 )/bloc.x,MAX_GRID_SIZE);
++  grid.y = *ndat;
++  //Call kernel to put cg into cfft
++  kernel_sphere_in<<<grid,bloc,0,*compute_stream>>>(cfft,cg,kg_k,*npw,*ndat,*n1,*n2,*n3,shift_inv1,shift_inv2,shift_inv3,*istwfk);
++
++}//end subroutine gpu_sphere_in
++
++
++
++//{\src2tex{textfont=tt}}
++//****f* ABINIT/sphere
++// NAME
++// gpu_sphere_out
++//
++// FUNCTION
++// Array cg is defined in sphere with npw points. Extract cg from box
++// of n1*n2*n3 points defined by array cfft for fft box.
++//
++// COPYRIGHT
++// Copyright (C) 1998-2016 ABINIT group (DCA, XG, GMR, AR)
++// This file is distributed under the terms of the
++// GNU General Public License, see ~abinit/COPYING
++// or http://www.gnu.org/copyleft/gpl.txt .
++// For the initials of contributors, see ~abinit/doc/developers/contributors.txt .
++//
++// INPUTS
++// cfft(2,n1,n2,n3) = fft box
++// cg(2,npw)= contains values for npw G vectors in basis sphere
++// compute_stream= stream cuda for kernels' execution
++// istwfk=option parameter that describes the storage of wfs
++// kg_k(3,npw)=integer coordinates of G vectors in basis sphere
++// n1,n2,n3=physical dimension of the box (cfft)
++// ndat=number of FFT to do in //
++// npw=number of G vectors in basis at this k point
++//
++// NOTES
++// cg and cfft are assumed to be of type COMPLEX, although this routine treats
++// them as real of twice the length to avoid nonstandard complex*16.
++// If istwf_k differs from 1, then special storage modes must be taken
++// into account, for symmetric wavefunctions coming from k=(0 0 0) or other
++// special k points.
++//
++// TODO
++// Order arguments
++//
++// PARENTS
++//      gpu_fourwf
++//
++// CHILDREN
++//
++// SOURCE
++
++extern "C" void gpu_sphere_out_(float *cg,float *cfft,int *kg_k,int *npw,int *n1,int *n2,int *n3,int* ndat,cudaStream_t *compute_stream)
++{
++
++   //Arguments ------------------------------------
++  //scalars
++  //  integer,intent(in) :: istwfk,n1,n2,n3,ndat,npw
++  //  cuda_stream_t, intent(in) :: compute_stream
++  //arrays
++  //  integer,intent(in) :: kg_k(3,npw)
++  //  real(dp),intent(in) :: cg(2,npw*ndat)
++  //  real(dp),intent(inout) :: cfft(2,n1,n2,n3*ndat)
++
++  // //Local variables-------------------------------
++  dim3 grid,bloc;
++  int cfft_size=(*n1)*(*n2)*(*n3);
++  float norme=1./cfft_size;
++  // *************************************************************************
++
++  bloc.x = BLOCK_SIZE;
++  grid.x = min((*npw  + bloc.x - 1 )/bloc.x ,MAX_GRID_SIZE);
++  grid.y = *ndat;
++  //Extract wave functions and appy fft normalisation factor before storing
++  kernel_sphere_out<<<grid,bloc,0,*compute_stream>>>(cfft,cg,kg_k,*npw,*ndat,*n1,*n2,*n3,norme);
++
++}//end subroutine gpu_sphere_out
++#endif
++
+ //***
+diff -Naur ./src/57_iovars/invars0.F90 ../abinit-8.0.8-SP/src/57_iovars/invars0.F90
+--- ./src/57_iovars/invars0.F90	2016-08-06 16:05:01.000000000 +0800
++++ ../abinit-8.0.8-SP/src/57_iovars/invars0.F90	2017-01-08 09:29:12.364364327 +0800
+@@ -426,9 +426,11 @@
+    write(message,'(7a)')&
+ &   '   Input variables use_gpu_cuda is on but abinit hasn''t been built',ch10,&
+ &   '   with (double precision) gpu mode enabled !',ch10,&
+-&   '   Action : change the input variable use_gpu_cuda',ch10,&
+-&   '            or re-compile ABINIT with double-precision Cuda enabled.'
+-   MSG_ERROR(message)
++&   '   Overall precision can be less than 1e-7.'
++
++!Changed from MSG_ERROR to MSG_WARNING
++
++   MSG_WARNING(message)
+ #endif
+  end if
+ 
diff -Naur ./src/15_gpu_toolbox/gpu_linalg.cu ../abinit-8.0.8-SP/src/15_gpu_toolbox/gpu_linalg.cu
--- ./src/15_gpu_toolbox/gpu_linalg.cu	2016-08-06 16:05:01.000000000 +0800
+++ ../abinit-8.0.8-SP/src/15_gpu_toolbox/gpu_linalg.cu	2017-01-14 14:54:44.441416572 +0800
@@ -12,6 +12,10 @@
  *
  */
 
+#if defined HAVE_CONFIG_H
+#include "config.h"
+#endif
+
 #include <cublas.h>
 #include "gpu_four_header.h"
 
@@ -77,6 +81,7 @@
 //            the correct one is in xx_gpu_toolbox/gpu_linalg.cu
 /*=========================================================================*/
 
+#if defined HAVE_GPU_CUDA_DP
 extern "C" void gpu_xgemm_(int* cplx,char *transA,char *transB,int *N,int *M,int *K,cuDoubleComplex *alpha,
 			   void **A_ptr,int *lda,void** B_ptr,int *ldb,cuDoubleComplex *beta,void** C_ptr,int *ldc){
   (*cplx==1)?
@@ -85,6 +90,17 @@
 		(cuDoubleComplex *)(*B_ptr),*ldb,*beta,(cuDoubleComplex *)(*C_ptr),*ldc);
 }
 
+#else
+extern "C" void gpu_xgemm_(int* cplx,char *transA,char *transB,int *N,int *M,int *K,cuFloatComplex *alpha,
+			   void **A_ptr,int *lda,void** B_ptr,int *ldb,cuFloatComplex *beta,void** C_ptr,int *ldc){
+  (*cplx==1)?
+    cublasSgemm(*transA,*transB,*N,*M,*K,(*alpha).x,(float *)(*A_ptr),*lda,(float *)(*B_ptr),*ldb,(*beta).x,(float *)(*C_ptr),*ldc):
+    cublasCgemm(*transA,*transB,*N,*M,*K,*alpha,(cuFloatComplex *)(*A_ptr),*lda,
+		(cuFloatComplex *)(*B_ptr),*ldb,*beta,(cuFloatComplex *)(*C_ptr),*ldc);
+}
+
+#endif
+
 /*=========================================================================*/
 // NAME
 //  gpu_xtrsm
@@ -131,10 +147,18 @@
 // OUTPUT
 //  b_gpu
 /*=========================================================================*/
-
+#if defined HAVE_GPU_CUDA_DP
 extern "C" void gpu_xtrsm_(int* cplx,char *side,char *uplo,char *transA,char *diag,int *N,int *M,cuDoubleComplex *alpha,
 			   void **A_ptr,int *ldA,void** B_ptr,int *ldB){
   (*cplx==1)?
     cublasDtrsm(*side,*uplo,*transA,*diag,*N,*M,(*alpha).x,(double *)(*A_ptr),*ldA,(double *)(*B_ptr),*ldB):
     cublasZtrsm(*side,*uplo,*transA,*diag,*N,*M,*alpha,(cuDoubleComplex *)(*A_ptr),*ldA,(cuDoubleComplex *)(*B_ptr),*ldB);
 }
+#else
+extern "C" void gpu_xtrsm_(int* cplx,char *side,char *uplo,char *transA,char *diag,int *N,int *M,cuFloatComplex *alpha,
+			   void **A_ptr,int *ldA,void** B_ptr,int *ldB){
+  (*cplx==1)?
+    cublasStrsm(*side,*uplo,*transA,*diag,*N,*M,(*alpha).x,(float *)(*A_ptr),*ldA,(float *)(*B_ptr),*ldB):
+    cublasCtrsm(*side,*uplo,*transA,*diag,*N,*M,*alpha,(cuFloatComplex *)(*A_ptr),*ldA,(cuFloatComplex *)(*B_ptr),*ldB);
+}
+#endif
diff -Naur ./src/52_manage_cuda/density.cu ../abinit-8.0.8-SP/src/52_manage_cuda/density.cu
--- ./src/52_manage_cuda/density.cu	2016-08-06 16:05:01.000000000 +0800
+++ ../abinit-8.0.8-SP/src/52_manage_cuda/density.cu	2017-01-14 15:24:20.987718313 +0800
@@ -9,6 +9,10 @@
  *
  */
 
+#if defined HAVE_CONFIG_H
+#include "config.h"
+#endif
+
 #include "cuda_common.h"
 #include "cuda_header.h"
 #include "cuda_rec_head.h"
@@ -76,15 +80,24 @@
 //     Modification by MT - October,24th 2011
 //     cucmplx Nnew = cuCaddf(cuCmul(zj,facrec0),cuCaddf(cuCmul(N,cuCaddf(zj,an_c)),cuCmul(Nold,bn_c)));
 //     cucmplx Dnew = cuCaddf(cuCmul(D,cuCaddf(zj,an_c)),cuCmul(Dold,bn_c));
+#if defined HAVE_GPU_CUDA_DP
        cucmplx Nnew = cuCadd(cuCmul(zj,facrec0),cuCadd(cuCmul(N,cuCadd(zj,an_c)),cuCmul(Nold,bn_c)));
        cucmplx Dnew = cuCadd(cuCmul(D,cuCadd(zj,an_c)),cuCmul(Dold,bn_c));
+#else
+       cucmplx Nnew = cuCaddf(cuCmulf(zj,facrec0),cuCaddf(cuCmulf(N,cuCaddf(zj,an_c)),cuCmulf(Nold,bn_c)));
+       cucmplx Dnew = cuCaddf(cuCmulf(D,cuCaddf(zj,an_c)),cuCmulf(Dold,bn_c));
+#endif
        Nold = N;
        Dold = D;
        N = Nnew;
        D = Dnew;
        facrec0.x = 0.;
      }
+#if defined HAVE_GPU_CUDA_DP
      cucmplx ratio = cuCmul(cuCdiv(N,D),cinv2rtrotter);
+#else
+     cucmplx ratio = cuCmulf(cuCdivf(N,D),cinv2rtrotter);
+#endif
      rho_d[idx] -= mult*ratio.x ;
    }
  }
diff -Naur ./src/52_manage_cuda/gpu_apply_local_potential.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_apply_local_potential.cu
--- ./src/52_manage_cuda/gpu_apply_local_potential.cu	2016-08-06 16:05:01.000000000 +0800
+++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_apply_local_potential.cu	2017-01-14 09:55:46.822498962 +0800
@@ -48,6 +48,7 @@
 /*******                                                 **********/
 /******************************************************************/
 
+#if defined HAVE_GPU_CUDA_DP
 __global__ void kernel_apply_local_potential(double2 *fofr,double* denpot,int nfft_tot){
   int thread_id = threadIdx.x + blockDim.x*blockIdx.x;
   int idat = blockIdx.y;
@@ -57,6 +58,17 @@
   }
 }
 
+#else
+__global__ void kernel_apply_local_potential(float2 *fofr,float* denpot,int nfft_tot){
+  int thread_id = threadIdx.x + blockDim.x*blockIdx.x;
+  int idat = blockIdx.y;
+  for(int id=thread_id;id<nfft_tot;id+=blockDim.x*gridDim.x){
+    fofr[id + idat*nfft_tot].x *= denpot[id] ;
+    fofr[id + idat*nfft_tot].y *= denpot[id] ;
+  }
+}
+#endif
+
 
 
 /******************************************************************/
@@ -65,6 +77,7 @@
 /*******                                                 **********/
 /******************************************************************/
 
+#if defined HAVE_GPU_CUDA_DP
 extern "C" void gpu_apply_local_potential_(double2 *fofr,double* denpot,int* nfft_tot,int *ndat,cudaStream_t *compute_stream)
 {
 
@@ -87,4 +100,29 @@
 
 }//end subroutine gpu_apply_local_potential
 
+#else
+extern "C" void gpu_apply_local_potential_(float2 *fofr,float* denpot,int* nfft_tot,int *ndat,cudaStream_t *compute_stream)
+{
+
+  //Arguments ------------------------------------
+  //scalars
+  // integer intent(int) :: nfft_tot,ndat
+  //arrays
+  // Complex intent(inout) :: fofr
+  // double intent(in) :: denpot
+  //Locals
+  dim3 grid,bloc;
+  // *************************************************************************
+
+  bloc.x = BLOCK_SIZE;
+  grid.x = min(( *nfft_tot + bloc.x - 1 )/bloc.x,MAX_GRID_SIZE);
+  grid.y = *ndat;
+
+  //Call To Kernel
+  kernel_apply_local_potential<<<grid,bloc,0,*compute_stream>>>(fofr,denpot,*nfft_tot);
+
+}//end subroutine gpu_apply_local_potential
+
+#endif
+
 //***
diff -Naur ./src/52_manage_cuda/gpu_compute_nl_hamiltonian.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_compute_nl_hamiltonian.cu
--- ./src/52_manage_cuda/gpu_compute_nl_hamiltonian.cu	2016-08-06 16:05:01.000000000 +0800
+++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_compute_nl_hamiltonian.cu	2017-01-14 09:55:46.823498960 +0800
@@ -22,6 +22,10 @@
 //
 // SOURCE
 
+#if defined HAVE_CONFIG_H
+#include "config.h"
+#endif
+
 #include <stdio.h>
 #include <stdlib.h>
 
@@ -31,6 +35,7 @@
 /**********                                      *******************/
 /*******************************************************************/
 
+#if defined HAVE_GPU_CUDA_DP
 __device__ static inline void reduce_complex_64(volatile double *sh_vect_x,volatile double *sh_vect_y){
   //We have only 2 warps, the first reduce the real part, the second the imaginary one
   //No more synchronization is needed
@@ -641,4 +646,621 @@
   }//end choice!=1
 }//End of gpu_compute_nl_hamiltonian
 
+
+
+
+
+
+#else
+__device__ static inline void reduce_complex_64(volatile float *sh_vect_x,volatile float *sh_vect_y){
+  //We have only 2 warps, the first reduce the real part, the second the imaginary one
+  //No more synchronization is needed
+  if(threadIdx.x < 32)
+    sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + 32];
+  else//if(threadIdx.x > 31)
+    sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - 32];
+
+  if(threadIdx.x < 16)
+    sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + 16];
+  if(threadIdx.x > 47)
+    sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - 16];
+
+  if(threadIdx.x < 8)
+    sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + 8];
+  if(threadIdx.x > 55)
+    sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - 8];
+
+  if(threadIdx.x < 4)
+    sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + 4];
+  if(threadIdx.x > 59)
+    sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - 4];
+
+  if(threadIdx.x < 2)
+    sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + 2];
+  if(threadIdx.x > 61)
+    sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - 2];
+
+  if(threadIdx.x < 1)
+    sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + 1];
+  if(threadIdx.x > 62)
+    sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - 1];
+}
+
+__device__ static inline  void reduce_double_32(volatile float *sh_vect){
+  //We have only 1 active warp,
+  //No more synchronization is needed
+  if(threadIdx.x < 16)
+    sh_vect[threadIdx.x] += sh_vect[threadIdx.x + 16];
+  if(threadIdx.x < 8)
+    sh_vect[threadIdx.x] += sh_vect[threadIdx.x + 8];
+  if(threadIdx.x < 4)
+    sh_vect[threadIdx.x] += sh_vect[threadIdx.x + 4];
+  if(threadIdx.x < 2)
+    sh_vect[threadIdx.x] += sh_vect[threadIdx.x + 2];
+  if(threadIdx.x < 1)
+    sh_vect[threadIdx.x] += sh_vect[threadIdx.x + 1];
+}
+
+__global__ void kernel_compute_proj_factor(float2 *proj,float2 *dproj,
+					   float2 *val_ajlmn,float2 *val_sajlmn,
+					   float *enl,float *sij,
+					   float *rdlmn,float *rdproj,
+					   const int *atindx1,const unsigned char *nlmn,
+					   const int *indlmn,const unsigned short int* atoms,
+					   const unsigned char *lmn,const unsigned char *typat,
+					   const int paw_opt,const int dimenl1,const int lmnmax,
+					   const int nb_projections,const int natoms,
+					   const int choice, const int signs, const float lambda
+					   ){
+
+  int iproj=threadIdx.x + blockIdx.x*blockDim.x;
+  float2 a_jlmn,sa_jlmn;
+  float tmp_loc;
+  unsigned short int iatom,jatom;
+  unsigned char jlmn,itypat;
+
+  if(iproj<nb_projections){
+
+    //Get the couple (iatom,ilmn) of the thread's projection
+    iatom=atoms[iproj];//atoms's indice sorted by type
+    jatom=atindx1[iatom] - 1; //atoms's indice not sorted (-1 because of fortran cpu storage)
+    jlmn =lmn[iproj];
+    itypat=typat[iproj];
+    int l=indlmn[ 0 + 6*(jlmn + lmnmax*itypat)];
+    //Norm Conserving Pseudo Potential
+    if(paw_opt==0){
+      float2 proj_ilmn_R;
+      float val_enl; //enl is real when norm conserving
+      int iln=indlmn[ 4 + 6*(jlmn + lmnmax*itypat)]; // iln=indlmn(5,ilmn) (pour un type fixe)
+      val_enl = enl[(iln-1) + dimenl1*itypat]; //enl_(1)=enl(iln,itypat,ispinor)
+      proj_ilmn_R = proj[iproj];
+      a_jlmn.x = val_enl * proj_ilmn_R.x ;//gxfac(1:cplex,ilmn,ia,ispinor)=enl_(1)*gx(1:cplex,ilmn,ia,ispinor)
+      a_jlmn.y = val_enl * proj_ilmn_R.y ;
+    }
+    else{ //PAW
+      a_jlmn.x=0.;
+      a_jlmn.y=0.;
+      sa_jlmn.x=0.;
+      sa_jlmn.y=0.;
+      //Accumulate projection;
+      for(int ilmn=0;ilmn<nlmn[itypat];ilmn++){
+	int ijlmn= (ilmn<jlmn? ilmn +  jlmn*(jlmn+1)/2 : jlmn +  ilmn*(ilmn+1)/2 );
+	float val_enl = enl[ijlmn + dimenl1*jatom];
+	float2 proj_ilmn_R = proj[ iproj + ilmn - jlmn];
+	a_jlmn.x +=  val_enl*proj_ilmn_R.x;
+	a_jlmn.y +=  val_enl*proj_ilmn_R.y;
+	float val_sij= sij[ijlmn + dimenl1*itypat];
+	sa_jlmn.x +=  val_sij*proj_ilmn_R.x;
+	sa_jlmn.y +=  val_sij*proj_ilmn_R.y;
+      }
+    }
+    if(paw_opt==2){
+      a_jlmn.x -= lambda*sa_jlmn.x;
+      a_jlmn.y -= lambda*sa_jlmn.y;
+    }
+
+    //Cas choice==1 && signs==2 :  a_jlmn = a_jlmn*i^(-l)
+    if(choice==1){
+      tmp_loc = a_jlmn.x;
+      switch (l%4){
+	//case 0: //i^(-l) = 1 : Nothing to do
+      case 1: //i^(-l) = -i
+	a_jlmn.x = a_jlmn.y;
+	a_jlmn.y = -tmp_loc;
+	tmp_loc = sa_jlmn.x;
+	sa_jlmn.x = sa_jlmn.y;
+	sa_jlmn.y = -tmp_loc;
+	break;
+      case 2: //i^(-l) = -1
+	a_jlmn.x =  -a_jlmn.x ;
+	a_jlmn.y =  -a_jlmn.y ;
+	sa_jlmn.x = -sa_jlmn.x;
+	sa_jlmn.y = -sa_jlmn.y;
+	break;
+      case 3: //i^(-l) = i
+	a_jlmn.x = -a_jlmn.y;
+	a_jlmn.y = tmp_loc;
+	tmp_loc = sa_jlmn.x;
+	sa_jlmn.x = -sa_jlmn.y;
+	sa_jlmn.y = tmp_loc;
+	break;
+      default:
+	break;
+      }
+      //Store computed values
+      val_ajlmn[iproj]=a_jlmn;
+      val_sajlmn[iproj]=sa_jlmn;
+    }//End choice==1 && signs==2
+
+    //Case choice==2 && signs==1: a_jlmn_alpha = a_jlmn*conjuguate(dproj(jlmn,alpha))
+    else if(choice==2){
+      if(paw_opt==3){
+	a_jlmn.x = sa_jlmn.x;
+	a_jlmn.y = sa_jlmn.y;
+      }
+      float2 val_dproj;
+      //Alpha1 : ialpha=0
+      val_dproj=dproj[iproj + 0*nb_projections];
+      rdlmn[jlmn + lmnmax*(iatom + 0*natoms)] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
+      //Alpha2 : ialpha=1
+      val_dproj=dproj[iproj + 1*nb_projections];
+      rdlmn[jlmn + lmnmax*(iatom + 1*natoms)] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
+      //Alpha3 : ialpha=2
+      val_dproj=dproj[iproj + 2*nb_projections];
+      rdlmn[jlmn + lmnmax*(iatom + 2*natoms)] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
+    }
+
+    //Cas choice==3 && signs==1: a_jlmn_R_alphabeta = a_jlmn_R*conjuguate(dproj(iproj,alphabeta))
+    else if(choice==3){
+      if(paw_opt==3){
+	a_jlmn.x = sa_jlmn.x;
+	a_jlmn.y = sa_jlmn.y;
+      }
+      float2 val_dproj;
+      for(int ialphabeta=0;ialphabeta<7;ialphabeta++){
+	//ialphabeta=0
+	val_dproj=dproj[iproj + ialphabeta*nb_projections];
+	rdproj[iproj + ialphabeta*nb_projections] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
+      }
+    }
+    //Case choice==23: both choice 2 and choice 3
+    else if(choice==23){
+      if(paw_opt==3){
+	a_jlmn.x = sa_jlmn.x;
+	a_jlmn.y = sa_jlmn.y;
+      }
+      //Choice 2 part
+      float2 val_dproj;
+      //Alpha1 : ialpha=0
+      val_dproj=dproj[iproj + 1*nb_projections];
+      rdlmn[jlmn + lmnmax*(iatom + 0*natoms)] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
+      //Alpha2 : ialpha=1
+      val_dproj=dproj[iproj + 2*nb_projections];
+      rdlmn[jlmn + lmnmax*(iatom + 1*natoms)] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
+      //Alpha3 : ialpha=2
+      val_dproj=dproj[iproj + 3*nb_projections];
+      rdlmn[jlmn + lmnmax*(iatom + 2*natoms)] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
+
+
+      //choice 3 part
+      //ialphabeta =0
+      val_dproj=dproj[iproj];
+      rdproj[iproj] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
+      //others
+      for(int ialphabeta=1;ialphabeta<7;ialphabeta++){
+	val_dproj=dproj[iproj + (ialphabeta+3)*nb_projections];
+	rdproj[iproj + ialphabeta*nb_projections] = val_dproj.x*a_jlmn.x + val_dproj.y*a_jlmn.y;
+      }
+    }//end choice 23
+  }//end if thread's global id < nb_projection
+}//End of kernel_compute_proj_factor
+
+
+//Note that we assume in a first time we have only one block in X direction,
+// So we have gridDim.x = 1 and blockIdx.x=0
+// Blocks in Y direction represent a plane wave couple indexed by jpw
+// threads of the blocks take care of a couple (iaton,ilmn)
+//The primary compute and the reduction are made over the threads of this block
+__global__ void kernel_compute_nl_hamiltonian(float2 *vectin,float2 *vectout,float2 *svectout,
+					      float2 *val_ajlmn,float2 *val_sajlmn,
+					      float2 *ph3dout,float *ffnlout,
+					      const unsigned short int* atoms,
+					      const unsigned char *lmn,const unsigned char *typat,
+					      const int paw_opt,const int dimffnlout,const int npwout,
+					      const int nb_projections,const int lmnmax,
+					      const float four_pi_by_ucvol,const float lambda
+					      ){
+  //Definition of locals
+  unsigned short int jpw,iatom;
+  unsigned char jlmn,itypat;
+  float2 vect_loc,svect_loc;
+
+  //Shared memory areas to compute and reduce
+  extern __shared__ float sh_mem[];
+  float *sh_vect_x = sh_mem ;
+  float *sh_vect_y = &(sh_mem[blockDim.x]);
+
+  jpw=blockIdx.y;
+
+  vect_loc.x = 0.;
+  vect_loc.y = 0.;
+  svect_loc.x = 0.;
+  svect_loc.y = 0.;
+
+  //Step 1: Compute value for each plane wave and reduce by thread in sh mem
+  for(int iproj=threadIdx.x ; iproj<nb_projections ; iproj+=blockDim.x){
+    float2 a_jlmn,sa_jlmn,ph3d;
+    float ffnl;
+
+    //Get the couple (iatom,ilmn) of the thread's projection
+    iatom=atoms[iproj];//atoms's indice sorted by type
+    jlmn =lmn[iproj];
+    itypat=typat[iproj];
+
+    //Read the projections factor
+    a_jlmn =val_ajlmn[iproj];
+    sa_jlmn=val_sajlmn[iproj];
+
+    //Accumulate the contribution of the projection for this thread in register
+    ffnl = ffnlout[jpw + npwout*(0 + dimffnlout*(jlmn + lmnmax*itypat))]; //ffnlout(npwout,dimffnlout,lmnmax,ntypat)
+    ph3d = ph3dout[jpw + npwout*iatom];
+
+    ph3d.x *= ffnl;
+    ph3d.y *= ffnl;
+
+    //Warning: the product is between a_jlmn and conjuguate(ph3d)
+    vect_loc.x += a_jlmn.x*ph3d.x + a_jlmn.y*ph3d.y;
+    vect_loc.y += a_jlmn.y*ph3d.x - a_jlmn.x*ph3d.y;
+    svect_loc.x += sa_jlmn.x*ph3d.x + sa_jlmn.y*ph3d.y;
+    svect_loc.y += sa_jlmn.y*ph3d.x - sa_jlmn.x*ph3d.y;
+
+  }//End loop to performs all projections
+
+  if(paw_opt!=3){
+    //Step2: We reduce in Shared Memory
+    sh_vect_x[threadIdx.x]=vect_loc.x;
+    sh_vect_y[threadIdx.x]=vect_loc.y;
+    for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
+      //We ensure every access in shared mem is accomplished in the block
+      __syncthreads();
+      if( threadIdx.x <  decalage)
+	sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + decalage];
+      else if(threadIdx.x >= (blockDim.x - decalage))
+	sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - decalage];
+    }
+    __syncthreads();
+    //Step3: Thread 0 writes the results for the block (ie for the plane wave)
+    if(threadIdx.x==0){
+      if(paw_opt==2){
+	vect_loc.x = -lambda*vectin[jpw].x + four_pi_by_ucvol * sh_vect_x[0];
+	vect_loc.x = -lambda*vectin[jpw].y + four_pi_by_ucvol * sh_vect_y[blockDim.x-1];
+      }
+      else{
+	vect_loc.x = four_pi_by_ucvol * sh_vect_x[0];
+	vect_loc.y = four_pi_by_ucvol * sh_vect_y[blockDim.x-1];
+      }
+      vectout[jpw] = vect_loc;
+    }
+  }
+
+  if(paw_opt>2){
+    //Step4: We reduce for overlap
+    __syncthreads();
+    sh_vect_x[threadIdx.x]=svect_loc.x;
+    sh_vect_y[threadIdx.x]=svect_loc.y;
+    for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
+      //We ensure every access in shared mem is accomplished in the block
+      __syncthreads();
+      if( threadIdx.x <  decalage)
+	sh_vect_x[threadIdx.x] += sh_vect_x[threadIdx.x + decalage];
+      else if(threadIdx.x >= (blockDim.x - decalage))
+	sh_vect_y[threadIdx.x] += sh_vect_y[threadIdx.x - decalage];
+    }
+    __syncthreads();
+    //Step5: Thread 0 writes the results for the block (ie for the plane wave)
+    if(threadIdx.x==0){
+      svect_loc = vectin[jpw];
+      svect_loc.x += four_pi_by_ucvol * sh_vect_x[0];
+      svect_loc.y += four_pi_by_ucvol * sh_vect_y[blockDim.x-1];
+      svectout[jpw] = svect_loc;
+    }
+  }//End of overlap calculation
+
+}//end of kernel_compute_nl_hamiltonian
+
+__global__ void kernel_compute_nl_hamiltonian_64(float2 *vectin,float2 *vectout,float2 *svectout,
+						 float2 *val_ajlmn,float2 *val_sajlmn,
+						 float2 *ph3dout,float *ffnlout,
+						 const unsigned short int* atoms,
+						 const unsigned char *lmn,const unsigned char *typat,
+						 const int paw_opt,const int dimffnlout,const int npwout,
+						 const int nb_projections,const int lmnmax,
+						 const float four_pi_by_ucvol,const float lambda
+						 ){
+
+  //Definition of locals
+  unsigned short int jpw,iatom;
+  unsigned char jlmn,itypat;
+
+  float2 vect_loc,svect_loc;
+
+  //Shared memory areas to compute and reduce
+  extern __shared__ float sh_mem[];
+  float *sh_vect_x = sh_mem ;
+  float *sh_vect_y = &(sh_mem[64]);
+
+  jpw=blockIdx.y;
+
+  vect_loc.x = 0.;
+  vect_loc.y = 0.;
+  svect_loc.x = 0.;
+  svect_loc.y = 0.;
+
+  //Step 1: Compute value for each plane wave and reduce by thread in sh mem
+  for(int iproj=threadIdx.x ; iproj<nb_projections ; iproj+=64){
+    float2 a_jlmn,sa_jlmn,ph3d;
+    float ffnl;
+
+    //Get the couple (iatom,ilmn) of the thread's projection
+    iatom=atoms[iproj];//atoms's indice sorted by type
+    jlmn =lmn[iproj];
+    itypat=typat[iproj];
+
+    //Read the projections factor
+    a_jlmn =val_ajlmn[iproj];
+    sa_jlmn=val_sajlmn[iproj];
+
+    //Accumulate the contribution of the projection for this thread in register
+    //These 2 loads are'nt coalesced and may be costly
+    ffnl = ffnlout[jpw + npwout*(0 + dimffnlout*(jlmn + lmnmax*itypat))]; //ffnlout(npwout,dimffnlout,lmnmax,ntypat)
+    ph3d = ph3dout[jpw + npwout*iatom];
+
+    ph3d.x *= ffnl;
+    ph3d.y *= ffnl;
+
+    //Warning: the product is between a_jlmn and conjuguate(ph3d)
+    vect_loc.x += a_jlmn.x*ph3d.x + a_jlmn.y*ph3d.y;
+    vect_loc.y += a_jlmn.y*ph3d.x - a_jlmn.x*ph3d.y;
+    svect_loc.x += sa_jlmn.x*ph3d.x + sa_jlmn.y*ph3d.y;
+    svect_loc.y += sa_jlmn.y*ph3d.x - sa_jlmn.x*ph3d.y;
+
+  }//End loop to performs all projections
+
+  //if(paw_opt!=3){
+    //Step2: We reduce in Shared Memory
+    sh_vect_x[threadIdx.x]=vect_loc.x;
+    sh_vect_y[threadIdx.x]=vect_loc.y;
+    __syncthreads();
+    reduce_complex_64(sh_vect_x,sh_vect_y);
+    __syncthreads();
+    //Step3: Thread 0 writes the results for the block (ie for the plane wave)
+    if(threadIdx.x==0){
+      if(paw_opt==2){
+	vect_loc.x = -lambda*vectin[jpw].x + four_pi_by_ucvol * sh_vect_x[0];
+	vect_loc.x = -lambda*vectin[jpw].y + four_pi_by_ucvol * sh_vect_y[63];
+      }
+      else{
+	vect_loc.x = four_pi_by_ucvol * sh_vect_x[0];
+	vect_loc.y = four_pi_by_ucvol * sh_vect_y[63];
+      }
+      vectout[jpw] = vect_loc;
+    }
+    //}
+
+    //  if(paw_opt>2){
+    //Step4: We reduce for overlap
+    __syncthreads();
+    sh_vect_x[threadIdx.x]=svect_loc.x;
+    sh_vect_y[threadIdx.x]=svect_loc.y;
+     __syncthreads();
+     reduce_complex_64(sh_vect_x,sh_vect_y);
+     __syncthreads();
+
+    //Step5: Thread 0 writes the results for the block (ie for the plane wave)
+    if(threadIdx.x==0){
+      svect_loc = vectin[jpw];
+      svect_loc.x += four_pi_by_ucvol * sh_vect_x[0];
+      svect_loc.y += four_pi_by_ucvol * sh_vect_y[63];
+      svectout[jpw] = svect_loc;
+    }
+    //  }//End of overlap calculation
+
+}//end of kernel_compute_nl_hamiltonian_64
+
+
+//Accumulate previously calculate factors to get forces
+__global__ void kernel_compute_forces(float *rdlmn,float *enlout,
+				      const int decalage_enlout,
+				      const int natoms,const int lmnmax
+				      ){
+
+  extern __shared__ float enl_sh_sum[];
+  enl_sh_sum[threadIdx.x] = 0.;
+  int ialpha=blockIdx.x;
+  int iatom=blockIdx.y;
+
+  //Load in shared memory
+  for(int jlmn=threadIdx.x; jlmn<lmnmax; jlmn+=blockDim.x)
+    //rdlmn is set to 0 if jlmn >= nlmn(type(iatoms))
+    enl_sh_sum[threadIdx.x] += rdlmn[jlmn + lmnmax*(iatom + ialpha*natoms)];
+
+  //Reduce in shared memory
+  __syncthreads();
+  reduce_double_32(enl_sh_sum);
+  // for(int decalage=blockDim.x/2;decalage>0;decalage=decalage/2){
+  //     __syncthreads();
+  //     if(threadIdx.x < decalage)
+  //       enl_sh_sum[threadIdx.x] += enl_sh_sum[threadIdx.x + decalage];
+  //   }
+
+  //Write results
+  if(threadIdx.x==0)
+    enlout[decalage_enlout + ialpha + 3*iatom] = 2*enl_sh_sum[0];
+
+}//end of kernel_compute_forces
+
+
+//Compute the stress tensor in reduced coordinates
+__global__ void kernel_reduce_stress(float *rdproj,float *d_enlk,
+				     const int nb_projections){
+  extern __shared__ float sh_mem[];
+  int ialphabeta=blockIdx.x;
+
+  sh_mem[threadIdx.x]=0.;
+
+  //Acumulate in Shared Mem
+  for(int iproj= threadIdx.x; iproj < nb_projections ; iproj+=blockDim.x){
+    sh_mem[threadIdx.x] += rdproj[iproj + ialphabeta*nb_projections];
+  }
+
+  //Reduce in shared memory
+  for(int decalage=blockDim.x/2;decalage>0;decalage=decalage/2){
+    __syncthreads();
+    if(threadIdx.x < decalage)
+      sh_mem[threadIdx.x] += sh_mem[threadIdx.x + decalage];
+  }
+
+  //Write results
+  if(threadIdx.x==0)
+    d_enlk[ialphabeta] = sh_mem[0];
+}
+
+__constant__ unsigned char imunu[] = {0,1,2,3,4,5,3,4,5};
+__constant__ unsigned char imu[] = {0,1,2,1,0,0,2,2,1};
+__constant__ unsigned char inu[] = {0,1,2,2,2,1,1,0,0};
+__constant__ unsigned char ialpha[] = {0,1,2,1,0,0};
+__constant__ unsigned char ibeta[]= {0,1,2,2,2,1};
+
+//Convert stress tensor to cartesian coordinates
+__global__ void kernel_stress_convert(float *gprimd,float *d_enlk,float *enlout){
+
+  __shared__ float sh_gprim[9];
+  __shared__ float sh_stress[6];
+  __shared__ float sh_enl[9];
+
+  sh_gprim[threadIdx.x] = gprimd[threadIdx.x];
+
+  if(threadIdx.x < 6)
+    sh_stress[threadIdx.x] = d_enlk[threadIdx.x+1];
+
+  sh_enl[threadIdx.x] = sh_stress[imunu[threadIdx.x]] * sh_gprim[ialpha[blockIdx.x] + 3*imu[threadIdx.x]] * sh_gprim[ibeta[blockIdx.x] + 3*inu[threadIdx.x]];
+
+  if(threadIdx.x < 3 )
+    sh_enl[threadIdx.x] += sh_enl[threadIdx.x + 3] + sh_enl[threadIdx.x + 6];
+
+  if(threadIdx.x == 0 )
+    sh_enl[0] += sh_enl[1] + sh_enl[2];
+
+  if(threadIdx.x==0){
+    if(blockIdx.x < 3 )
+      enlout[blockIdx.x] = 2*sh_enl[0] - d_enlk[0];
+    else
+      enlout[blockIdx.x] = 2*sh_enl[0];
+  }
+}
+
+
+/*******************************************************************/
+/**********                                      *******************/
+/**********          calling fonction            *******************/
+/**********                                      *******************/
+/*******************************************************************/
+
+extern "C" void gpu_compute_nl_hamiltonian_(float2 *proj_gpu,float2 *dproj_gpu,
+					    float2 *vectin_gpu,
+					    float2 *vectout_gpu,float2 *svectout_gpu,
+					    float2 *val_ajlmn_gpu,float2 *val_sajlmn_gpu,
+					    float2 *ph3dout_gpu,float *ffnlout_gpu,
+					    float *rdlmn_gpu, float *rdproj_gpu,
+					    float *enlout_gpu, float *d_enlk_gpu,
+					    float *enl_gpu,float *sij_gpu,float *gprimd_gpu,
+					    int *atindx1_gpu,unsigned char *nlmn_gpu,
+					    int *indlmn_gpu,unsigned short int *atoms_gpu,
+					    unsigned char *lmn_gpu, unsigned char *typat_gpu,
+					    int *paw_opt,int *dimffnlout,int *dimenl1,
+					    int *npw,int *nb_projections,int *lmnmax,
+					    int *natoms, int *choice, int *signs,
+					    const float *four_pi_by_ucvol,const float *lambda
+					    ){
+
+  /************* Accumulate the projection factors ***********************/
+  //Configuration of the cuda grid
+  dim3 grid,block;
+  block.x= 64;
+  grid.x=((*nb_projections) + 64 - 1)/64 ;
+
+  float2 *effective_proj_gpu=proj_gpu;
+  //If choice = 3 or 23 proj is stored in dproj
+  if( ((*choice)==3) || ((*choice)==23) )
+    effective_proj_gpu=dproj_gpu;
+
+  kernel_compute_proj_factor<<<grid,block>>>(effective_proj_gpu,dproj_gpu,
+					     val_ajlmn_gpu,val_sajlmn_gpu,
+					     enl_gpu,sij_gpu,
+					     rdlmn_gpu,rdproj_gpu,
+					     atindx1_gpu,nlmn_gpu,
+					     indlmn_gpu,atoms_gpu,lmn_gpu,typat_gpu,
+					     *paw_opt,*dimenl1,*lmnmax,
+					     *nb_projections,*natoms,
+					     *choice,*signs,*lambda
+					     );
+
+  /************* Compute output needed with signs ***********************/
+
+  if( ((*choice)==1) && (*signs==2)) {
+    //One thread in block by projection and plane waves split amongs blocks
+    block.x = 64;
+    grid.x = 1;
+    grid.y=*npw;
+
+    //kernel_compute_nl_hamiltonian<<<grid,block,block.x*2*sizeof(double),0>>>(vectin_gpu,vectout_gpu,svectout_gpu,
+    kernel_compute_nl_hamiltonian_64<<<grid,block,block.x*2*sizeof(float),0>>>(vectin_gpu,vectout_gpu,svectout_gpu,
+									       val_ajlmn_gpu,val_sajlmn_gpu,
+									       ph3dout_gpu,ffnlout_gpu,
+									       atoms_gpu,lmn_gpu,typat_gpu,
+									       *paw_opt,*dimffnlout,*npw,
+									       *nb_projections,*lmnmax,
+									       *four_pi_by_ucvol,*lambda
+									       );
+
+  }//End choice==1,signs==2
+
+  else {
+    //Compute forces
+    if( (((*choice)==2)&&(*signs==1)) || ((*choice)==23) ) {
+      //Threads In blocks will take care of lmnmax
+      block.x= 32;
+
+      grid.x= 3; //Nb alpha directions
+      grid.y= *natoms ;
+
+      int decalage_enlout_gpu = 0;
+      if( (*choice)==23)
+	decalage_enlout_gpu = 6;
+
+      kernel_compute_forces<<<grid,block,block.x*sizeof(float),0>>>(rdlmn_gpu,enlout_gpu,
+								     decalage_enlout_gpu,
+								     *natoms,*lmnmax);
+    }//End choice2 / signs1 or choice 23
+
+    //Compute stress tensor
+    if( (((*choice)==3) && ((*signs)==1))  || ((*choice)==23) ) {
+
+      grid.x= 7; //Nb alphabeta directions
+      block.x= 512; // Enough threads to reduce on projection
+      while(block.x > (unsigned int)(*nb_projections)){
+	block.x /= 2;
+      }
+      block.x=64;
+
+      kernel_reduce_stress<<<grid,block,block.x*sizeof(float),0>>>(rdproj_gpu,d_enlk_gpu,*nb_projections);
+
+      kernel_stress_convert<<<6,9>>>(gprimd_gpu,d_enlk_gpu,enlout_gpu);
+
+    }
+
+  }//end choice!=1
+}//End of gpu_compute_nl_hamiltonian
+#endif
+
 //***
diff -Naur ./src/52_manage_cuda/gpu_compute_nl_projections.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_compute_nl_projections.cu
--- ./src/52_manage_cuda/gpu_compute_nl_projections.cu	2016-08-06 16:05:01.000000000 +0800
+++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_compute_nl_projections.cu	2017-01-14 09:55:46.823498960 +0800
@@ -4,6 +4,11 @@
 //   With:
 //   <p_lmn|c>=4pi/sqr(vol) (i)^l Sum_g[c(g).f_nl(g).Y_lm(g).exp(2pi.i.g.R)]
 
+
+#if defined HAVE_CONFIG_H
+#include "config.h"
+#endif
+
 #include <stdio.h>
 #include <stdlib.h>
 
@@ -22,6 +27,9 @@
 // Blocks in Y direction represente a couple (iaton,ilmn) for which we have
 // to compute C_ilmn^iaton
 //The primary compute and the reduction are made over the threads of this block
+
+#if defined HAVE_GPU_CUDA_DP
+
 __global__ void kernel_compute_nl_projections(double2 *proj,double2 *vectin,double2 *ph3din,double *ffnlin,
 					      const int *indlmn,const unsigned short int* atoms,
 					      const unsigned char *lmn,const unsigned char * typat,
@@ -542,3 +550,526 @@
 											       );
   }
 }//end of routine gpu_compute_nl_projections_
+
+#else
+__global__ void kernel_compute_nl_projections(float2 *proj,float2 *vectin,float2 *ph3din,float *ffnlin,
+					      const int *indlmn,const unsigned short int* atoms,
+					      const unsigned char *lmn,const unsigned char * typat,
+					      const int dimffnlin,const int npw,
+					      const int lmnmax,const char cplex,const float four_pi_by_squcvol
+					      ){
+  
+  //Definition of locals
+  int ilmn,ipw,itypat;
+  int dec_iatom_ph3d,dec_ffnl;
+  float2 vect,ph3d;
+  float ffnl;
+  
+  //Shared memory areas to compute and reduce
+  extern __shared__ float sh_mem[];
+  float *sh_proj_x = sh_mem ;
+  float *sh_proj_y = &(sh_mem[blockDim.x]);
+  
+  //Get the couple (iatom,ilmn) of the block
+  //iatom = atoms[blockIdx.y];// we don't need it because we use it only in dec_iatom_ph3d
+  ilmn =lmn[blockIdx.y];
+  itypat=typat[blockIdx.y];
+  dec_iatom_ph3d = npw * atoms[blockIdx.y];
+  dec_ffnl= npw*(0 + dimffnlin*(ilmn + lmnmax*itypat));
+  
+  //Initialisation of Shared mem
+  sh_proj_x[threadIdx.x]=0.;
+  sh_proj_y[threadIdx.x]=0.;
+  
+  //Step 1: Compute value for each plane wave and reduce by thread in sh mem
+  for(ipw=threadIdx.x ;ipw<npw; ipw+=blockDim.x){
+    //ffnl= ffnlin[ipw + npw*(0 + dimffnlin*(ilmn + lmnmax*itypat))];
+    ffnl= ffnlin[ipw + dec_ffnl];
+    vect= vectin[ipw];
+    //ph3d= ph3din[ipw + npw*iatom];
+    ph3d= ph3din[ipw + dec_iatom_ph3d];
+    
+    //We add the complex product in shared mem
+    sh_proj_x[threadIdx.x] += ffnl*(vect.x*ph3d.x - vect.y*ph3d.y) ;
+    sh_proj_y[threadIdx.x] += ffnl*(vect.y*ph3d.x + vect.x*ph3d.y) ;
+  }
+  
+  //Step 2: Reduce between threads
+  for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
+    //We ensure every load on shared mem is accomplished in the block
+    __syncthreads();
+    if( threadIdx.x <  decalage) 
+      sh_proj_x[threadIdx.x] += sh_proj_x[threadIdx.x + decalage];
+    else if(threadIdx.x >= (blockDim.x - decalage))
+      sh_proj_y[threadIdx.x] += sh_proj_y[threadIdx.x - decalage];
+  }
+  
+  __syncthreads();
+  
+  //Write results for the block
+  if(threadIdx.x == 0){
+    //We need to know l;
+    int l=indlmn[ 0 + 6*(ilmn + lmnmax*itypat)];
+    //We write the result as a complex in register before storing it in glob mem
+    switch (l%4){
+    case 0: //i^l = 1
+      vect.x = four_pi_by_squcvol * sh_proj_x[0] ;
+      vect.y = four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
+      break;
+    case 1: //i^l = i
+      vect.x = -four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
+      vect.y = four_pi_by_squcvol * sh_proj_x[0] ;
+      break;
+    case 2: //i^l = -1
+      vect.x = -four_pi_by_squcvol * sh_proj_x[0] ;
+      vect.y = -four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
+      break;
+    case 3: //i^l = -i
+      vect.x = four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
+      vect.y = -four_pi_by_squcvol * sh_proj_x[0] ;
+      break;
+    default:
+      break;
+    }
+    if(cplex==1){
+      vect.x *= 2.;
+      vect.y = 0.;
+    }
+    proj[blockIdx.y] = vect;
+  }
+  
+}//end of kernel_compute_nl_projections
+
+
+//Simultaneous computing of proj and Dproj
+__global__ void kernel_compute_nl_projections_and_derivates_choice2(float2 *proj,float2 *dproj,
+								    float2 *vectin,float2 *ph3din,
+								    float *ffnlin,float *kpgin,
+								    const int *indlmn,const unsigned short int* atoms,
+								    const unsigned char *lmn,const unsigned char * typat,
+								    const int dimffnlin,const int npw, const int nb_projections,
+								    const int lmnmax,const char cplex,
+								    const float four_pi_by_squcvol,const float height_pi2_by_squcvol
+								    //,double *debug
+								    ){
+  
+  //Definition of locals
+  int iatom,ilmn,ipw,itypat;
+  float2 vect,ph3d;//,proj_loc;
+  float2 dproj0,dproj1,dproj2,dproj3;
+  float ffnl,kpg1,kpg2,kpg3;
+  //int idebug=0;
+  //Shared memory areas to compute and reduce
+  extern __shared__ float sh_mem[];
+  float *sh_proj_x = sh_mem ;
+  float *sh_proj_y = &(sh_mem[blockDim.x]);
+  
+  //Get the couple (iatom,ilmn) of the block
+  iatom=atoms[blockIdx.y];
+  ilmn =lmn[blockIdx.y];
+  itypat=typat[blockIdx.y];
+  
+  //Initialisation of Shared mem
+  sh_proj_x[threadIdx.x]=0.;
+  sh_proj_y[threadIdx.x]=0.;
+  dproj1.x=0.;dproj2.x=0.;dproj3.x=0.;
+  dproj1.y=0.;dproj2.y=0.;dproj3.y=0.;
+  
+  //Step 1: Compute value for each plane wave and reduce by thread in sh mem
+  for(ipw=threadIdx.x + blockIdx.x*gridDim.x;ipw<npw; ipw+=blockDim.x*gridDim.x){
+    
+    ffnl= ffnlin[ipw + npw*(0 + dimffnlin*(ilmn + lmnmax*itypat))];
+    vect= vectin[ipw];
+    ph3d= ph3din[ipw + npw*iatom];
+    kpg1= kpgin[ipw + 0*npw];
+    kpg2= kpgin[ipw + 1*npw];
+    kpg3= kpgin[ipw + 2*npw];
+    
+    //We add the complex product in shared mem and derivates part in register
+    dproj0.x = ffnl*(vect.x*ph3d.x - vect.y*ph3d.y);
+    dproj0.y = ffnl*(vect.y*ph3d.x + vect.x*ph3d.y);
+    sh_proj_x[threadIdx.x] += dproj0.x ;
+    sh_proj_y[threadIdx.x] += dproj0.y ;
+    dproj1.x  += kpg1*dproj0.x ;
+    dproj1.y  += kpg1*dproj0.y ;
+    dproj2.x  += kpg2*dproj0.x ;
+    dproj2.y  += kpg2*dproj0.y ;
+    dproj3.x  += kpg3*dproj0.x ;
+    dproj3.y  += kpg3*dproj0.y ;
+    //     if(blockIdx.y==0)
+    //       debug[ipw]=-kpg1*dproj0.y;
+  }
+    
+  //Step 2: Reduce between threads
+  for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
+    //We ensure every load on shared mem is accomplished in the block
+    __syncthreads();
+    if( threadIdx.x <  decalage) 
+      sh_proj_x[threadIdx.x] += sh_proj_x[threadIdx.x + decalage];
+    else if(threadIdx.x >= (blockDim.x - decalage))
+      sh_proj_y[threadIdx.x] += sh_proj_y[threadIdx.x - decalage];
+  }
+  __syncthreads();
+  //Store locally the sum pro projection
+  if(threadIdx.x==0){
+    dproj0.x=sh_proj_x[0] ;
+    dproj0.y=sh_proj_y[blockDim.x -1] ;
+  }
+  
+  //Step 3: Reduce for first derivate
+  __syncthreads();
+  sh_proj_x[threadIdx.x]= dproj1.x;
+  sh_proj_y[threadIdx.x]= dproj1.y;;
+  for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
+    //We ensure every load on shared mem is accomplished in the block
+    __syncthreads();
+    if( threadIdx.x <  decalage) 
+      sh_proj_x[threadIdx.x] += sh_proj_x[threadIdx.x + decalage];
+    else if(threadIdx.x >= (blockDim.x - decalage))
+      sh_proj_y[threadIdx.x] += sh_proj_y[threadIdx.x - decalage];
+  }
+  __syncthreads();
+  
+  //Store locally the sum for first derivate
+  if(threadIdx.x==0){
+    dproj1.x=sh_proj_x[0] ;
+    dproj1.y=sh_proj_y[blockDim.x -1];
+  }
+  
+  //Step 4: Reduce for second derivate
+  __syncthreads();
+  sh_proj_x[threadIdx.x]= dproj2.x;
+  sh_proj_y[threadIdx.x]= dproj2.y;
+  for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
+    //We ensure every load on shared mem is accomplished in the block
+    __syncthreads();
+    if( threadIdx.x <  decalage) 
+      sh_proj_x[threadIdx.x] += sh_proj_x[threadIdx.x + decalage];
+    else if(threadIdx.x >= (blockDim.x - decalage))
+      sh_proj_y[threadIdx.x] += sh_proj_y[threadIdx.x - decalage];
+  }
+  __syncthreads();
+  
+  //Store locally the sum for second derivate
+  if(threadIdx.x==0){
+    dproj2.x=sh_proj_x[0] ;
+    dproj2.y=sh_proj_y[blockDim.x -1];
+  }
+  
+  //Step 5: Reduce for third derivate
+  __syncthreads();
+  sh_proj_x[threadIdx.x]= dproj3.x;
+  sh_proj_y[threadIdx.x]= dproj3.y;;
+  for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
+    //We ensure every load on shared mem is accomplished in the block
+    __syncthreads();
+    if( threadIdx.x <  decalage) 
+      sh_proj_x[threadIdx.x] += sh_proj_x[threadIdx.x + decalage];
+    else if(threadIdx.x >= (blockDim.x - decalage))
+      sh_proj_y[threadIdx.x] += sh_proj_y[threadIdx.x - decalage];
+  }
+  __syncthreads();
+  
+   //Write results for the block
+  //At this moment, proj,dproj1 and dproj2 are in register for tx0 and dproj3 in ShMem
+  //We use the dproj3 varaible name to store tmp permutation
+  if(threadIdx.x == 0){
+    //We need to know l;
+    int l=indlmn[ 0 + 6*(ilmn + lmnmax*itypat)];
+    //We write the result as a complex in registers before storing it in glob mem
+    float tmp;
+    switch (l%4){
+    case 0: //i^l = 1 ==> i^(l+1) = i 
+      vect.x = four_pi_by_squcvol * dproj0.x;    
+      vect.y = four_pi_by_squcvol * dproj0.y;
+      
+      tmp = dproj1.x;
+      dproj1.x = -height_pi2_by_squcvol * dproj1.y;
+      dproj1.y = height_pi2_by_squcvol * tmp;
+      
+      tmp = dproj2.x;
+      dproj2.x = -height_pi2_by_squcvol * dproj2.y;
+      dproj2.y = height_pi2_by_squcvol * tmp;
+      
+      dproj3.x = -height_pi2_by_squcvol *sh_proj_y[blockDim.x -1] ;
+      dproj3.y = height_pi2_by_squcvol * sh_proj_x[0] ;
+      break;
+    case 1: //i^l = i ==> i^(l+1)=-1
+      vect.x = -four_pi_by_squcvol * dproj0.y;    
+      vect.y = four_pi_by_squcvol * dproj0.x;
+      
+      dproj1.x = -height_pi2_by_squcvol * dproj1.x;
+      dproj1.y = -height_pi2_by_squcvol * dproj1.y;
+      
+      dproj2.x = -height_pi2_by_squcvol * dproj2.x;
+      dproj2.y = -height_pi2_by_squcvol * dproj2.y;
+      
+      dproj3.x = -height_pi2_by_squcvol * sh_proj_x[0] ;
+      dproj3.y = -height_pi2_by_squcvol * sh_proj_y[blockDim.x -1] ;
+      break;
+    case 2: //i^l = -1 ==> i^(l+1)=-i
+      vect.x = -four_pi_by_squcvol * dproj0.x;    
+      vect.y = -four_pi_by_squcvol * dproj0.y;
+      
+      tmp = dproj1.x;
+      dproj1.x = height_pi2_by_squcvol * dproj1.y;
+      dproj1.y = -height_pi2_by_squcvol * tmp;
+
+      tmp = dproj2.x;
+      dproj2.x = height_pi2_by_squcvol * dproj2.y;
+      dproj2.y = -height_pi2_by_squcvol * tmp;
+      
+      dproj3.x = height_pi2_by_squcvol *sh_proj_y[blockDim.x -1] ;
+      dproj3.y = -height_pi2_by_squcvol * sh_proj_x[0] ;
+      break;
+    case 3: //i^l = -i == i^(l+1)=1
+      vect.x = four_pi_by_squcvol * dproj0.y;    
+      vect.y = -four_pi_by_squcvol * dproj0.x;
+      
+      dproj1.x = height_pi2_by_squcvol * dproj1.x;
+      dproj1.y = height_pi2_by_squcvol * dproj1.y;
+      
+      dproj2.x = height_pi2_by_squcvol * dproj2.x;
+      dproj2.y = height_pi2_by_squcvol * dproj2.y;
+      
+      dproj3.x = height_pi2_by_squcvol * sh_proj_x[0] ;
+      dproj3.y = height_pi2_by_squcvol * sh_proj_y[blockDim.x -1] ;
+      break;
+    default:
+      break;
+    }
+    if(cplex==1){
+      vect.x *= 2.;
+      vect.y = 0.;
+      dproj1.x *= 2;
+      dproj1.y = 0.;
+      dproj2.x *= 2;
+      dproj2.y = 0.;
+      dproj3.x *= 2;
+      dproj3.y = 0.;
+    }
+    proj[blockIdx.y] = vect;
+    dproj[blockIdx.y + 0*nb_projections] = dproj1;;
+    dproj[blockIdx.y + 1*nb_projections] = dproj2;
+    dproj[blockIdx.y + 2*nb_projections] = dproj3;
+  }
+  
+}//end of kernel_compute_nl_projections_and_derivates_choice2
+
+
+//Simultaneous computing of proj and Dproj second version 
+//One thread's block compute one derivative of one projection
+//A order 0 on derivation is the projection itself  
+//Each block is indiced by (iproj,ialphabeta) where iproj is the projection's indice
+//ialphabeta correspond to a unique couple (ialpha,ibeta) 
+//We derivate ffnlin relatively to ialpha and kpg to ibeta
+//The reduction over planewaves for each derivative is split among threads of the block
+__global__ void kernel_compute_nl_projections_and_derivates_all(float2 *dproj,
+								float2 *vectin,float2 *ph3din,
+								float *ffnlin,float *kpgin,
+								const int *indlmn,const unsigned short int* atoms,
+								const unsigned char *lmn,const unsigned char * typat,
+								const int dimffnlin,const int npw, const int nb_projections,
+								const int lmnmax,const char cplex,const int choice,
+								const float four_pi_by_squcvol,const float two_pi
+								){
+  
+  //Definition of locals
+  int iatom,ilmn,ipw,itypat;
+  int iproj,ialphabeta;
+  unsigned char ialpha,ibeta;
+  float2 vect,ph3d;
+  float ffnl_alpha,kpg_beta,fact_alphabeta;
+  
+  //Shared memory areas to compute and reduce
+  extern __shared__ float sh_mem[];
+  float *sh_proj_x = sh_mem ;
+  float *sh_proj_y = &(sh_mem[blockDim.x]);
+  
+  //Get indices
+  iproj=blockIdx.y;
+  ialphabeta = blockIdx.x;
+
+  //Compute alpha and beta from ialphabeta
+  if(choice==2){
+    ialpha=0;
+    ibeta=ialphabeta;
+  }
+  else if(choice==3){
+    ialpha = indalpha_c3[ialphabeta];
+    ibeta  =  indbeta_c3[ialphabeta];
+  }
+  else if(choice==23){
+    if(ialphabeta<4){
+      ialpha=0;
+      ibeta=ialphabeta;
+    }
+    else{
+      ialpha = indalpha_c3[ialphabeta - 3];
+      ibeta  =  indbeta_c3[ialphabeta - 3];
+    }
+  }
+  
+  //Get the couple (iatom,ilmn) of the block
+  iatom=atoms[iproj];
+  ilmn =lmn[iproj];
+  itypat=typat[iproj];
+  
+  //Initialisation of Shared mem
+  sh_proj_x[threadIdx.x]=0.;
+  sh_proj_y[threadIdx.x]=0.;
+  
+  //Step 1: Compute value for each plane wave and reduce by thread in sh mem
+  for(ipw=threadIdx.x ;ipw<npw; ipw+=blockDim.x){
+    
+    ffnl_alpha = ffnlin[ipw + npw*(ialpha + dimffnlin*(ilmn + lmnmax*itypat))];
+    vect= vectin[ipw];
+    ph3d= ph3din[ipw + npw*iatom];
+    if(ibeta>0)
+      kpg_beta = kpgin[ipw + (ibeta-1)*npw];
+    else
+      kpg_beta = 1.;
+    
+    fact_alphabeta = kpg_beta*ffnl_alpha; 
+    
+    if( ((choice==3)&&(ialphabeta>3)) || ((choice==23)&&(ialphabeta>6)) ){
+      //We switch the alpha beta symetry
+      ffnl_alpha = ffnlin[ipw + npw*(ibeta + dimffnlin*(ilmn + lmnmax*itypat))];
+      kpg_beta = kpgin[ipw + (ialpha-1)*npw];
+      fact_alphabeta = (fact_alphabeta + kpg_beta*ffnl_alpha)/2 ;
+    }
+    
+    //We add the complex product in shared mem and derivates part in register
+    sh_proj_x[threadIdx.x] += fact_alphabeta*(vect.x*ph3d.x - vect.y*ph3d.y);
+    sh_proj_y[threadIdx.x] += fact_alphabeta*(vect.y*ph3d.x + vect.x*ph3d.y);
+  }
+  
+  //Step 2: Reduce between threads
+  for(int decalage=blockDim.x>>1;decalage>0;decalage=decalage>>1){
+    //We ensure every load on shared mem is accomplished in the block
+    __syncthreads();
+    if( threadIdx.x <  decalage) 
+      sh_proj_x[threadIdx.x] += sh_proj_x[threadIdx.x + decalage];
+    else if(threadIdx.x >= (blockDim.x - decalage))
+      sh_proj_y[threadIdx.x] += sh_proj_y[threadIdx.x - decalage];
+  }
+  __syncthreads();
+  
+  //Step 3: Write results for the block
+  if(threadIdx.x == 0){
+    //We need to know l;
+    int l=indlmn[ 0 + 6*(ilmn + lmnmax*itypat)];
+    if( ((ialphabeta>0)&&(choice==2)) || ((choice==23)&&(ialphabeta>0)&&(ialphabeta<4)) )
+      l++;
+    //We write the result as a complex in registers before storing it in glob mem
+    switch (l%4){
+    case 0: //i^l = 1 
+      vect.x = four_pi_by_squcvol * sh_proj_x[0] ;
+      vect.y = four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
+      break;
+    case 1: //i^l = i
+      vect.x = -four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
+      vect.y = four_pi_by_squcvol * sh_proj_x[0] ;
+      break;
+    case 2: //i^l = -1
+      vect.x = -four_pi_by_squcvol * sh_proj_x[0] ;
+      vect.y = -four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
+      break;
+    case 3: //i^l = -i
+      vect.x = four_pi_by_squcvol * sh_proj_y[blockDim.x -1] ;
+      vect.y = -four_pi_by_squcvol * sh_proj_x[0] ;
+      break;
+    default:
+      break;
+    }
+    
+    if(cplex==1){
+      vect.x *= 2.;
+      vect.y = 0.;
+    }
+    if( ((ialphabeta>0)&&(choice==2)) || ((choice==23)&&(ialphabeta>0)&&(ialphabeta<4)) ){
+      vect.x *= two_pi;
+      vect.y *= two_pi;
+    }
+    if( ((ialphabeta>0)&&(choice==3)) || ((choice==23)&&(ialphabeta>3)) ){
+      vect.x = -vect.x;
+      vect.y = -vect.y;
+    }
+    dproj[iproj + ialphabeta*nb_projections] = vect;
+  }
+  
+}//end of kernel_compute_nl_projections_and_derivates_all
+
+
+
+/*******************************************************************/
+/**********                                      *******************/
+/**********          calling fonction            *******************/
+/**********                                      *******************/
+/*******************************************************************/
+
+extern "C" void gpu_compute_nl_projections_(float2 *proj_gpu,float2 *dproj_gpu,
+					    float2 *vectin_gpu,float2 *ph3din_gpu,
+					    float *ffnlin_gpu,float *kpgin_gpu,
+					    int *indlmn_gpu,unsigned short int *atoms_gpu,
+					    unsigned char *lmn_gpu, unsigned char *typat_gpu,
+					    int *nb_proj_to_compute,int *npw,int *choice,
+					    int *dimffnlin,int *lmnmax,
+					    const char *cplex,const float *pi,const float *ucvol
+					    ){
+  
+  //Configuration of the cuda grid
+  dim3 grid,block;
+  float four_pi_by_squcvol = 4*(*pi)/sqrt(*ucvol);
+  if((*choice)<2){
+    //One block by projection to compute and plane waves split among a batch of threads by block   
+    block.x=64;
+    grid.x=1;
+    grid.y=*nb_proj_to_compute;
+    
+    kernel_compute_nl_projections<<<grid,block,block.x*2*sizeof(float),0>>>(proj_gpu,vectin_gpu,ph3din_gpu,ffnlin_gpu,
+									     indlmn_gpu,atoms_gpu,lmn_gpu,typat_gpu,
+									     *dimffnlin,*npw,*lmnmax,
+									     *cplex,four_pi_by_squcvol);
+  }
+  else if((*choice)==2){
+    
+    block.x=64;
+    grid.x=1;
+    grid.y=*nb_proj_to_compute;
+    
+    float height_pi2_by_squcvol  = 2*(*pi)*four_pi_by_squcvol; 
+    
+    kernel_compute_nl_projections_and_derivates_choice2<<<grid,block,block.x*2*sizeof(float),0>>>(proj_gpu,dproj_gpu,
+												   vectin_gpu,ph3din_gpu,
+												   ffnlin_gpu,kpgin_gpu,
+												   indlmn_gpu,atoms_gpu,lmn_gpu,typat_gpu,
+												   *dimffnlin,*npw,*nb_proj_to_compute,
+												   *lmnmax,*cplex,
+												   four_pi_by_squcvol,height_pi2_by_squcvol
+												   );
+  }
+  else if( ((*choice)==3) || ((*choice)==23) ){
+    
+    float two_pi = 2*(*pi);
+    block.x=64;
+    
+    //Grid.x = Nb derivates to compute (order 0 included)
+    if((*choice)==3)
+      grid.x = 7 ;
+    else
+      grid.x = 10;
+    
+    grid.y = *nb_proj_to_compute;
+    
+    kernel_compute_nl_projections_and_derivates_all<<<grid,block,block.x*2*sizeof(float),0>>>(dproj_gpu,
+											       vectin_gpu,ph3din_gpu,
+											       ffnlin_gpu,kpgin_gpu,
+											       indlmn_gpu,atoms_gpu,lmn_gpu,typat_gpu,
+											       *dimffnlin,*npw,*nb_proj_to_compute,
+											       *lmnmax,*cplex,*choice,
+											       four_pi_by_squcvol,two_pi
+											       );
+  }
+}//end of routine gpu_compute_nl_projections_
+#endif
diff -Naur ./src/52_manage_cuda/gpu_density_accumulation.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_density_accumulation.cu
--- ./src/52_manage_cuda/gpu_density_accumulation.cu	2016-08-06 16:05:01.000000000 +0800
+++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_density_accumulation.cu	2017-01-14 09:55:46.824498959 +0800
@@ -51,6 +51,7 @@
 /**********                                      *******************/
 /*******************************************************************/
 
+#if defined HAVE_GPU_CUDA_DP
 __global__ void kernel_accumulate_density(double *fofr,double* denpot,double* weight_r,double* weight_i,int nfft_tot,int ndat
 					  ){
   int thread_id= threadIdx.x + blockDim.x*blockIdx.x;
@@ -100,4 +101,55 @@
 
 }//end subroutine gpu_density_accumulation
 
+#else
+__global__ void kernel_accumulate_density(float *fofr,float* denpot,float* weight_r,float* weight_i,int nfft_tot,int ndat
+					  ){
+  int thread_id= threadIdx.x + blockDim.x*blockIdx.x;
+
+  for(int id=thread_id; id <nfft_tot; id+=blockDim.x*gridDim.x){
+    //double2 loc=fofr[id];
+    //    denpot[id] += weight_r*loc.x*loc.x + weight_i*loc.y*loc.y ;
+    int idat;
+    float sum=0.;
+    for(idat=0;idat<ndat;idat++){
+      float loc_x=fofr[2*(id + nfft_tot*idat) ];
+      float loc_y=fofr[1+2*(id + nfft_tot*idat)];
+      sum += weight_r[idat]*loc_x*loc_x + weight_i[idat]*loc_y*loc_y ;
+    }
+
+    denpot[id] += sum ;
+  }
+}
+
+
+/*******************************************************************/
+/**********                                      *******************/
+/**********          calling fonction            *******************/
+/**********                                      *******************/
+/*******************************************************************/
+
+extern "C" void gpu_density_accumulation_(float *fofr,float* denpot, float* weight_r,
+                   float* weight_i,int* nfft_tot,int *ndat,cudaStream_t *compute_stream)
+{
+
+  //Arguments ------------------------------------
+  //scalars
+  // integer intent(int) :: nfft_tot,ndat
+  // double intent(int) :: weight_r,weight_i
+  //arrays
+  // double intent(inout) :: denpot
+  // double intent(in) :: fofr
+  //Locals
+  dim3 grid,bloc;
+  // *************************************************************************
+
+  bloc.x = BLOCK_SIZE;
+  grid.x = min(( *nfft_tot + bloc.x - 1 )/bloc.x,MAX_GRID_SIZE);
+
+  //Call To Kernel
+  kernel_accumulate_density<<<grid,bloc,0,*compute_stream>>>(fofr,denpot,weight_r,weight_i,*nfft_tot,*ndat);
+
+}//end subroutine gpu_density_accumulation
+#endif
+
 //***
diff -Naur ./src/52_manage_cuda/gpu_fourwf.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_fourwf.cu
--- ./src/52_manage_cuda/gpu_fourwf.cu	2016-08-06 16:05:01.000000000 +0800
+++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_fourwf.cu	2017-01-14 09:55:46.824498959 +0800
@@ -110,6 +110,7 @@
 static int npw=-1;
 static cufftHandle plan_fft;
 
+#if defined HAVE_GPU_CUDA_DP
 //GPU ffts buffers
 static double *work_gpu;
 static double *fofr_gpu;
@@ -449,6 +450,350 @@
 
   gpu_initialized = 0;
 }//end of free_gpu_fourwf_()
+
+#else
+//GPU ffts buffers
+static float *work_gpu;
+static float *fofr_gpu;
+static float *denpot_gpu;
+static float *weightr_gpu;
+static float *weighti_gpu;
+static float *fofgin_gpu;
+static float *fofgout_gpu;
+static int *kg_kin_gpu;
+static int *kg_kout_gpu;
+
+
+//Transfers buffers in pinned memory for async memcopy between cpu & gpu
+static float *buff_denpot;
+static float *buff_weightr;
+static float *buff_weighti;
+//static float *buff_kgkout;
+
+
+extern "C" void gpu_fourwf_(int *cplex,float *denpot,float *fofgin,float *fofgout,float *fofr,int *gboundin,int *gboundout,int *istwf_k,
+			    int *kg_kin,int *kg_kout,int *mgfft,void *mpi_enreg,int *ndat,int *ngfft,int *npwin,int *npwout,int *n4,int *n5,int *n6,int *option,
+			    int *paral_kgb,int * tim_fourwf,float *weight_r,float *weight_i)/*,
+												int *use_ndo,float *fofginb)*/
+{
+  // !Arguments ------------------------------------
+  //   !scalars
+  //   integer,intent(in) :: cplex,istwf_k,mgfft,n4,n5,n6,ndat,npwin,npwout,option,paral_kgb
+  //   integer,intent(in) :: tim_fourwf
+  //   integer,intent(in),optional :: use_ndo
+  //   real(dp),intent(in) :: weight_r,weight_i
+  //   type(MPI_type),intent(in) :: mpi_enreg
+  //   !arrays
+  //   integer,intent(in) :: gboundin(2*mgfft+8,2),gboundout(2*mgfft+8,2)
+  //   integer,intent(in) :: kg_kin(3,npwin),kg_kout(3,npwout),ngfft(18)
+  //   real(dp),intent(inout) :: denpot(cplex*n4,n5,n6),fofgin(2,npwin*ndat)
+  //   ! real(dp) :: fofginb(2,npwin*ndat)
+  //   real(dp),intent(inout),optional :: fofginb(:,:)
+  //   real(dp),intent(inout) :: fofr(2,n4,n5,n6*ndat)
+  //   real(dp),intent(out) :: fofgout(2,npwout*ndat)
+
+
+
+
+  //Cuda return code
+  cufftResult cufft_state;
+  cudaError_t cuda_return;
+
+  //Gpu buffers
+
+  //Local integer
+  int n1,n2,n3,nfft_tot;
+
+
+  //*************** CUDA INITIALISATION STAGE ****
+  if(!(gpu_initialized)){
+    alloc_gpu_fourwf_(ngfft,ndat,npwin,npwout);
+  }//end of initialisation
+
+
+  //***********  GPU ALLOCATIONS  ***********************
+  n1=ngfft[0];
+  n2=ngfft[1];
+  n3=ngfft[2];
+  nfft_tot=n1*n2*n3;
+
+  //*********** CHECK some compatibilities **************
+  if((n1!=(*n4)) || (n2!=(*n5)) || (n3!=(*n6))){
+    printf("FFT SIZE ERROR: \n when gpu mode is on the fft grid must not be augmented\n");
+    printf("(n1,n2,n3) = (%d,%d,%d) whereas (n4,n5,n6) = (%d,%d,%d) \n",n1,n2,n3,*n4,*n5,*n6);
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  if((*cplex)==2){
+    printf("gpu_fourwf: cplex == 2 is not treated in GPU mode\n");
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  //If fft size has changed, we realloc our buffers
+  if((nfft_tot!=fft_size)||(*ndat>ndat_loc)||((*npwin)>npw)||((*npwout)>npw)){
+    free_gpu_fourwf_();
+    alloc_gpu_fourwf_(ngfft,ndat,npwin,npwout);
+  }//end if "fft size changed"
+
+
+  //memcpy cpu => buffer
+  if(*option == 1 || *option == 2)
+    memcpy(buff_denpot,denpot,nfft_tot*sizeof(float));
+  if(*option==1){
+    memcpy(buff_weightr,weight_r,(*ndat)*sizeof(float));
+    memcpy(buff_weighti,weight_i,(*ndat)*sizeof(float));
+  }
+  if (*option == 3){
+    cuda_return = cudaMemcpy(fofr_gpu,fofr,2*(*ndat)*nfft_tot*sizeof(float),cudaMemcpyHostToDevice);
+    if(cuda_return != cudaSuccess){
+      printf("ERROR while copying fofr to gpu: %s \n",cudaGetErrorString(cuda_return));
+      fflush(stdout);
+      leave_new_("COLL");
+    }
+  }
+
+  if(*option!=3){
+    cuda_return = cudaMemcpy(kg_kin_gpu,kg_kin,3*(*npwin)*sizeof(int),cudaMemcpyHostToDevice);
+    cuda_return = cudaMemcpy(fofgin_gpu,fofgin,2*(*npwin)*(*ndat)*sizeof(float),cudaMemcpyHostToDevice);
+    if(cuda_return != cudaSuccess){
+      printf("ERROR while copying input data to gpu: %s \n",cudaGetErrorString(cuda_return));
+      fflush(stdout);
+      leave_new_("COLL");
+    }
+
+    //We launch async transfert of denpot
+    if(*option == 1 || *option == 2){
+      cuda_return = cudaMemcpyAsync(denpot_gpu,buff_denpot,nfft_tot*sizeof(float),cudaMemcpyHostToDevice,stream_cpy);
+      if(cuda_return != cudaSuccess){
+	printf("ERROR while copying denpot to gpu: %s \n",cudaGetErrorString(cuda_return));
+	fflush(stdout);
+	leave_new_("COLL");
+      }
+    }
+    //We launch async transfert of denpot
+    if(*option == 1){
+      cuda_return = cudaMemcpyAsync(weightr_gpu,buff_weightr,(*ndat)*sizeof(float),cudaMemcpyHostToDevice,stream_cpy);
+      cuda_return = cudaMemcpyAsync(weighti_gpu,buff_weighti,(*ndat)*sizeof(float),cudaMemcpyHostToDevice,stream_cpy);
+      if(cuda_return != cudaSuccess){
+	printf("ERROR while copying weight to gpu: %s \n",cudaGetErrorString(cuda_return));
+	fflush(stdout);
+	leave_new_("COLL");
+      }
+    }
+
+    //call preprocessing routine on gpu
+    gpu_sphere_in_(fofgin_gpu,work_gpu,kg_kin_gpu,npwin,&n1,&n2,&n3,ndat,istwf_k,&stream_compute);
+
+    //call backward fourrier transform on gpu work_gpu => fofr_gpu
+    cufft_state = FFTEXECC2C(plan_fft,(cucmplx *)work_gpu,(cucmplx *)fofr_gpu,CUFFT_INVERSE);
+    if(cufft_state!=CUFFT_SUCCESS){
+      printf("ERROR while fft work_gpu ==> fofr:\n%s\n",cufftGetErrorString(cufft_state));
+      //printf("last cudaError was : %s \n",cudaGetErrorString(cudaGetLastError()));
+      fflush(stdout);
+      leave_new_("COLL");
+    }
+  }
+
+  if(*option==0){
+    //We copy back fofr
+    //cuda_return = cudaStreamSynchronize(stream_compute);
+    cuda_return = cudaThreadSynchronize();
+    if(cuda_return != cudaSuccess){
+      printf("ERROR when synchronizing after FFT on gpu: %s \n",cudaGetErrorString(cuda_return));
+      fflush(stdout);
+      leave_new_("COLL");
+    }
+    cuda_return = cudaMemcpy(fofr,fofr_gpu,2*(*ndat)*nfft_tot*sizeof(float),cudaMemcpyDeviceToHost);
+    if(cuda_return != cudaSuccess){
+      printf("ERROR while copying fofr from gpu: %s \n",cudaGetErrorString(cuda_return));
+      fflush(stdout);
+      leave_new_("COLL");
+    }
+  }
+
+  if(*option==1){
+    //We finish denpot and weight transferts
+    cuda_return = cudaStreamSynchronize(stream_cpy);
+    if(cuda_return != cudaSuccess){
+      printf("ERROR while getting denpot and weight on gpu: %s \n",cudaGetErrorString(cuda_return));
+      fflush(stdout);
+      leave_new_("COLL");
+    }
+
+    //call density accumulation routine on gpu
+    gpu_density_accumulation_(fofr_gpu,denpot_gpu,weightr_gpu,weighti_gpu,&nfft_tot,ndat,&stream_compute);
+
+    //We get denpot back on cpu
+    cuda_return = cudaMemcpy(denpot,denpot_gpu,nfft_tot*sizeof(float),cudaMemcpyDeviceToHost);
+    if(cuda_return != cudaSuccess){
+      printf("ERROR while copying denpot from gpu: %s \n",cudaGetErrorString(cuda_return));
+      fflush(stdout);
+      leave_new_("COLL");
+    }
+  }
+
+  if(*option==2){
+    //We finished denpot transfert
+    cudaStreamSynchronize(stream_cpy);
+    //call gpu routine to  Apply local potential
+    gpu_apply_local_potential_((float2*)fofr_gpu,denpot_gpu,&nfft_tot,ndat,&stream_compute);
+  }
+
+  if(*option==2 || *option==3){
+
+    //call forward fourier transform on gpu: fofr_gpu ==> work_gpu
+    cufft_state = FFTEXECC2C(plan_fft,(cucmplx *)fofr_gpu,(cucmplx *)work_gpu,CUFFT_FORWARD);
+    if(cufft_state!=CUFFT_SUCCESS){
+      printf("ERROR while fft fofr ==> work_gpu:\n%s\n",cufftGetErrorString(cufft_state));
+      fflush(stdout);
+      leave_new_("COLL");
+    }
+
+    //call post processing  routine on gpu
+    cuda_return = cudaMemcpy(kg_kout_gpu,kg_kout,3*(*npwout)*sizeof(int),cudaMemcpyHostToDevice);
+    gpu_sphere_out_(fofgout_gpu,work_gpu,kg_kout_gpu,npwout,&n1,&n2,&n3,ndat,&stream_compute);
+
+    //We get fofgout back on cpu
+    cuda_return = cudaMemcpy(fofgout,fofgout_gpu,2*(*npwout)*(*ndat)*sizeof(float),cudaMemcpyDeviceToHost);
+    if(cuda_return != cudaSuccess){
+      printf("ERROR while copying fofgout from gpu: %s \n",cudaGetErrorString(cuda_return));
+      fflush(stdout);
+      leave_new_("COLL");
+    }
+  }
+
+}//end subroutine gpu_fourwf
+
+
+
+//Memory allocation routine
+extern "C" void alloc_gpu_fourwf_(int *ngfft,int *ndat,int *npwin,int *npwout){
+
+//   printf("alloc_gpu_fourwf called with (nfft,ndat,npwin,npwout)=(%d,%d,%d,%d)\n",ngfft[0]*ngfft[1]*ngfft[2],*ndat,*npwin,*npwout);
+//   fflush(stdout);
+
+  cufftResult cufft_state;
+  cudaError_t cuda_return;
+
+  gpu_initialized = 1;
+
+  //Creation des streams cuda
+  cuda_return = cudaStreamCreate(&stream_cpy);
+  cuda_return = cudaStreamCreate(&stream_compute);
+  if(cuda_return != cudaSuccess){
+    printf("ERROR: when creating cuda streams:\n%s\n",cudaGetErrorString(cuda_return));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  //Size modification if too little memory allocation
+  int n1=ngfft[0];
+  int n2=ngfft[1];
+  int n3=ngfft[2];
+  fft_size=n1*n2*n3;
+  if (ndat_loc < *ndat)
+    ndat_loc=*ndat;
+  if(npw < *npwin)
+    npw = *npwin;
+  if(npw < *npwout)
+    npw = *npwout;
+
+
+  //Initialisation des plans FFT
+  int t_fft[3];
+  t_fft[0]=n3;
+  t_fft[1]=n2;
+  t_fft[2]=n1;
+
+  //Creation du plan
+  cufft_state=cufftPlanMany(&plan_fft,3,t_fft,NULL,1,0,NULL,1,0,FFT_C2C,*ndat);
+  if(cufft_state!=CUFFT_SUCCESS){
+    printf("alloc_gpu_fourwf:\n ERROR: At creation of cufftPlan:\n%s\n",cufftGetErrorString(cufft_state));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  //Association du plan au stream de calcul
+  cufft_state = cufftSetStream(plan_fft,stream_compute);
+  if(cufft_state!=CUFFT_SUCCESS){
+    printf("alloc_gpu_fourwf:\n ERROR: while associating cufftPlan to a stream:\n%s\n",cufftGetErrorString(cufft_state));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  cuda_return = cudaMalloc(&work_gpu,2*ndat_loc*fft_size*sizeof(float));
+  cuda_return = cudaMalloc(&fofr_gpu,2*ndat_loc*fft_size*sizeof(float));
+  cuda_return = cudaMalloc(&denpot_gpu,fft_size*sizeof(float));
+  cuda_return = cudaMalloc(&weightr_gpu,ndat_loc*sizeof(float));
+  cuda_return = cudaMalloc(&weighti_gpu,ndat_loc*sizeof(float));
+  cuda_return = cudaMalloc(&kg_kin_gpu,3*npw*sizeof(int));
+  cuda_return = cudaMalloc(&fofgin_gpu,2*npw*ndat_loc*sizeof(float));
+  cuda_return = cudaMalloc(&kg_kout_gpu,3*npw*sizeof(int));
+  cuda_return = cudaMalloc(&fofgout_gpu,2*npw*ndat_loc*sizeof(float));
+  if(cuda_return != cudaSuccess){
+    printf("alloc_gpu_fourwf: ERROR while allocating memory on gpu: %s \n",cudaGetErrorString(cuda_return));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+
+  //Allocation des buffers cpu "pinned"
+  cuda_return = cudaMallocHost(&buff_denpot,fft_size*sizeof(float));
+  cuda_return = cudaMallocHost(&buff_weightr,ndat_loc*sizeof(float));
+  cuda_return = cudaMallocHost(&buff_weighti,ndat_loc*sizeof(float));
+  if(cuda_return != cudaSuccess){
+    printf("alloc_gpu_fourwf:\n ERROR while allocating pinned memory for transfert to gpu: %s \n",cudaGetErrorString(cuda_return));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+}//End of alloc_gpu_fourwf_
+
+
+extern "C" void free_gpu_fourwf_(){
+  cufftResult cufft_state;
+  cudaError_t cuda_return;
+
+  //On detruit l'ancien plan
+  cufft_state = cufftDestroy(plan_fft);
+  if(cufft_state!=CUFFT_SUCCESS){
+    printf("free_gpu_fourwf:\n ERROR: at destruction of cufftPlan \n");
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  cuda_return = cudaFree(work_gpu);
+  cuda_return = cudaFree(fofr_gpu);
+  cuda_return = cudaFree(denpot_gpu);
+  cuda_return = cudaFree(weightr_gpu);
+  cuda_return = cudaFree(weighti_gpu);
+  cuda_return = cudaFree(kg_kin_gpu);
+  cuda_return = cudaFree(fofgin_gpu);
+  cuda_return = cudaFree(kg_kout_gpu);
+  cuda_return = cudaFree(fofgout_gpu);
+  cuda_return = cudaFreeHost(buff_denpot);
+  cuda_return = cudaFreeHost(buff_weightr);
+  cuda_return = cudaFreeHost(buff_weighti);
+  if(cuda_return != cudaSuccess){
+    printf("free_gpu_fourwf:\n ERROR while freeing memory on gpu: %s \n",cudaGetErrorString(cuda_return));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  cuda_return = cudaStreamDestroy(stream_cpy);
+  cuda_return = cudaStreamDestroy(stream_compute);
+  if(cuda_return != cudaSuccess){
+    printf("free_gpu_fourwf:\n ERROR: at destruction of streams: %s \n",cudaGetErrorString(cuda_return));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  gpu_initialized = 0;
+}//end of free_gpu_fourwf_()
+#endif
+
+
 //***
 
 
diff -Naur ./src/52_manage_cuda/gpu_mkkpg.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_mkkpg.cu
--- ./src/52_manage_cuda/gpu_mkkpg.cu	2016-08-06 16:05:01.000000000 +0800
+++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_mkkpg.cu	2017-01-14 09:55:46.824498959 +0800
@@ -38,7 +38,7 @@
 #include "config.h"
 #endif
 
-
+#if defined HAVE_GPU_CUDA_DP
 __global__ void kernel_mkkpg(double *kpg,int *kg,
 			     const int npw,
 			     const double kpt_0,const double kpt_1,const double kpt_2
@@ -72,4 +72,40 @@
   grid.x = ((*npw) + block.x - 1)/block.x;
   kernel_mkkpg<<<grid,block>>>(kpg_gpu,kg_gpu,*npw,kpt[0],kpt[1],kpt[2]);
 }
+
+#else
+__global__ void kernel_mkkpg(float *kpg,int *kg,
+			     const int npw,
+			     const float kpt_0,const float kpt_1,const float kpt_2
+			     ){
+
+  int ipw = threadIdx.x + blockIdx.x*blockDim.x;
+  if(ipw<npw){
+    //-- Compute (k+G) -- for mu = 1 --> 3
+    kpg[ipw + 0*npw ] = kpt_0 + kg[0 + 3*ipw];
+    kpg[ipw + 1*npw ] = kpt_1 + kg[1 + 3*ipw];
+    kpg[ipw + 2*npw ] = kpt_2 + kg[2 + 3*ipw];
+  }
+}
+
+extern "C" void gpu_mkkpg_(int *kg_gpu,float *kpg_gpu,float *kpt,int *npw){
+
+
+//Arguments ------------------------------------
+//scalars
+// integer,intent(in) :: nkpg,npw
+//arrays
+// integer,intent(in) :: kg(3,npw)
+// real(dp),intent(in) :: kpt(3)
+// real(dp),intent(out) :: kpg(npw,nkpg)
+
+//Local variables-------------------------------
+//integer,parameter :: alpha(6)=(/1,2,3,3,3,2/),beta(6)=(/1,2,3,2,1,1/)
+
+  dim3 grid,block;
+  block.x = 64;
+  grid.x = ((*npw) + block.x - 1)/block.x;
+  kernel_mkkpg<<<grid,block>>>(kpg_gpu,kg_gpu,*npw,kpt[0],kpt[1],kpt[2]);
+}
+#endif
 //***
diff -Naur ./src/52_manage_cuda/gpu_nonlop.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_nonlop.cu
--- ./src/52_manage_cuda/gpu_nonlop.cu	2016-08-06 16:05:01.000000000 +0800
+++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_nonlop.cu	2017-01-14 17:07:08.125077077 +0800
@@ -228,7 +228,7 @@
 
 #include "gpu_four_header.h"
 
-
+#if defined HAVE_GPU_CUDA_DP
 //GPU memory areas
 static double2 *vectin_gpu,*ph3din_gpu,*proj_gpu,*dproj_gpu;
 static double2 *vectout_gpu,*svectout_gpu,*ph3dout_gpu;
@@ -724,6 +724,503 @@
   ffnl_ph3d_updated = 1;
 }
 
+#else
+//GPU memory areas
+static float2 *vectin_gpu,*ph3din_gpu,*proj_gpu,*dproj_gpu;
+static float2 *vectout_gpu,*svectout_gpu,*ph3dout_gpu;
+static float2 *val_ajlmn_gpu,*val_sajlmn_gpu;
+static float *ffnlin_gpu,*kpgin_gpu,*ffnlout_gpu,*enl_gpu,*sij_gpu,*rdlmn_gpu,*rdproj_gpu,*enlout_gpu,*d_enlk_gpu,*gprimd_gpu;
+static unsigned char *typat_gpu,*lmn_gpu,*nlmn_gpu;
+static unsigned short int *atoms_gpu;
+static int *indlmn_gpu,*atindx1_gpu,*kgin_gpu;
+
+//CPU Transfert buffers
+static unsigned char *typat,*lmn,*nlmn;
+static unsigned short int *atoms;
+
+//
+static int gpu_initialization=0;
+static int nb_proj_to_compute=0;
+static int m_ham_used=0;
+static int ffnl_ph3d_updated=0;
+
+//gprimd = __double2float_rz(gprimd);
+//Compute Routine
+extern "C" void gpu_nonlop_(int *atindx1,int *choice,int *cpopt,float *proj,int *dimenl1,int *dimenl2,int *dimffnlin,int *dimffnlout,
+			    float *enl,float *enlout,float *ffnlin,float *ffnlout,float *gprimd,int *idir,int *indlmn,int *istwf_k,
+			    int *kgin,int *kgout,float *kpgin,float *kpgout,float *kptin,float *kptout,float *lambda,int *lmnmax,int *matblk,int *mgfft,
+			    int *mpi_enreg_me_g0,int *natom,int *nattyp,int *ngfft,int *nkpgin,int *nkpgout,int *nloalg,
+			    int *nnlout,int *npwin,int *npwout,int *nspinor,int *ntypat,int *paw_opt,float *phkxredin,
+			    float *phkxredout,float *ph1d,float *ph3din,float *ph3dout,int *signs,float *sij,float *svectout,
+			    float *pi,float *ucvol,float *vectin,float *vectout)
+{
+
+  //  use defs_basis
+  //  use defs_datatypes
+  //  use defs_abitypes
+
+  // !This section has been created automatically by the script Abilint (TD).
+  // !Do not modify the following lines by hand.
+  //  use interfaces_14_hidewrite
+  //  use interfaces_16_hideleave
+  //  use interfaces_18_timing
+  //  use interfaces_65_nonlocal, except_this_one => nonlop
+  // !End of the abilint section
+
+  //  implicit none
+
+  // !Arguments ------------------------------------
+  // !scalars
+  //  integer,intent(in) :: choice,cpopt,dimenl1,dimenl2,dimffnlin,dimffnlout,idir
+  //  integer,intent(in) :: istwf_k,lmnmax,matblk,mgfft,mpsang,mpssoang,natom,nkpgin
+  //  integer,intent(in) :: nkpgout,nnlout,npwin,npwout,nspinor,ntypat,only_SO
+  //  integer,intent(in) :: paw_opt,signs,tim_nonlop,useylm
+  //  real(dp),intent(in) :: lambda,ucvol
+  //  type(MPI_type),intent(inout) :: mpi_enreg
+  // !arrays
+  //  integer,intent(in) :: atindx1(natom),indlmn(6,lmnmax,ntypat),kgin(3,npwin)
+  //  integer,intent(in) :: kgout(3,npwout),nattyp(ntypat),ngfft(18),nloalg(5)
+  // !integer,intent(in) :: pspso(ntypat) ! Unused
+  //  real(dp),intent(in) :: enl(dimenl1,dimenl2,nspinor**2)
+  //  real(dp),intent(in) :: ffnlin(npwin,dimffnlin,lmnmax,ntypat)
+  //  real(dp),intent(in) :: ffnlout(npwout,dimffnlout,lmnmax,ntypat),gmet(3,3)
+  //  real(dp),intent(in) :: gprimd(3,3),kpgin(npwin,nkpgin*useylm)
+  //  real(dp),intent(in) :: kpgout(npwout,nkpgout*useylm),kptin(3),kptout(3)
+  //  real(dp),intent(in) :: ph1d(2,3*(2*mgfft+1)*natom),phkxredin(2,natom)
+  //  real(dp),intent(in) :: phkxredout(2,natom),sij(dimenl1,ntypat*((paw_opt+1)/3))
+  //  real(dp),intent(inout) :: ph3din(2,npwin,matblk),ph3dout(2,npwout,matblk)
+  //  real(dp),intent(inout) :: vectin(2,npwin*nspinor)
+  //  real(dp),intent(out) :: enlout(nnlout),svectout(2,npwout*nspinor*(paw_opt/3))
+  //  real(dp),intent(out) :: vectout(2,npwout*nspinor)
+  //  type(cprj_type),intent(inout) :: cprjin(natom,nspinor*((cpopt+5)/5))
+
+  // Local variables-------------------------------
+  // scalars
+  //  character(len=500) :: message
+  //  integer :: i
+  //arrays
+  //  real(dp) :: tsec(2)
+
+  cudaError_t cuda_state;
+  float2 vectin_0={0.,0.};
+
+
+  //We check for functionality
+  if(((*choice)!=0)&&((*choice)!=1)&&((*choice)!=2)&&((*choice)!=3)&&((*choice)!=23)){
+    printf("gpu_nonlop: Error:\n choice %d was used but only choice 0,1,2,3 and 23 are available on GPU\n",(*choice));
+    printf(" Try to change your input files with correct optforces & optstress ...\n");
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  if((*nspinor)!=1){
+    printf("gpu_nonlop: Error:\n Only nspinor = 1 is allowed at the moment but you used %d\n",(*nspinor));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  if(((*choice)==1)&&((*signs)!=2)){
+    printf("gpu_nonlop: Error:\n when choice is 1 only signs=2 is implemented. ( %d was used) \n",(*signs));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+  if((((*choice)==2)||((*choice)==3)||((*choice)==23))&&((*signs)!=1)){
+    printf("gpu_nonlop: Error:\n when choice is 2,3 or 23 only signs=1 is implemented. ( %d was used) \n",(*signs));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  if((*nloalg)<=0){
+    printf("gpu_nonlop: Error:\n Only nloalg(1)>0 is allowed at the moment but you used %d\n",(*nloalg));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  if( ((*paw_opt)>0) && ((2*(*dimenl1)/((*lmnmax)*((*lmnmax)+1)))!=1) ){
+    printf("gpu_nonlop: Error:\n only the real case for enl has been implemented on gpu and complex was used\n");
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  //GPU allocation
+  if(!gpu_initialization)
+    alloc_nonlop_gpu_(npwin,npwout,nspinor,
+		      natom,ntypat,lmnmax,
+		      indlmn,nattyp,
+		      atindx1,gprimd,
+		      dimffnlin,
+		      dimenl1,dimenl2,dimffnlout);
+
+  //If no projections everything is zero
+  if (nb_proj_to_compute==0){
+    int i;
+    if((*signs)==1){
+      for (i=0;i<(*nnlout);i++) {enlout[i]=0.;}
+    }
+    if((*signs)==2){
+      if (((*paw_opt)==0)||((*paw_opt)==1)||((*paw_opt)==4)){
+        for (i=0;i<2*(*npwout);i++) {vectout[i]=0.;}
+      }
+      if (((*paw_opt)==2)&&((*choice)==1)){
+        for (i=0;i<2*(*npwout);i++) {vectout[i]=-(*lambda)*vectin[i];}
+      }
+      if (((*paw_opt)==2)&&((*choice)>1)){
+        for (i=0;i<2*(*npwout);i++) {vectout[i]=0.;}
+      }
+      if (((*paw_opt)==3)||((*paw_opt)==4)){
+        if ((*choice)==1){
+          for (i=0;i<2*(*npwout);i++) {svectout[i]=vectin[i];}
+        }
+        if ((*choice)>1){
+          for (i=0;i<2*(*npwout);i++) {svectout[i]=0.;}
+        }
+      }
+    }
+    return;
+  }
+
+  //Trick to avoid complex branchement in cuda kernels
+  if( ((*istwf_k)==2) && ((*mpi_enreg_me_g0)==1) ){
+    vectin_0.x  = vectin[0];
+    vectin_0.y  = vectin[1];
+    vectin[0] = vectin_0.x/2;
+    vectin[1] = 0.;
+  }
+
+  //Memcopies
+  cuda_state=cudaMemcpy(vectin_gpu,vectin,(*npwin)*sizeof(float2),cudaMemcpyHostToDevice);
+
+  if(ffnl_ph3d_updated!=1){
+    cuda_state=cudaMemcpy(ph3din_gpu,ph3din,(*natom)*(*npwin)*sizeof(float2),cudaMemcpyHostToDevice);
+    cuda_state=cudaMemcpy(ffnlin_gpu,ffnlin,(*npwin)*(*dimffnlin)*(*lmnmax)*(*ntypat)*sizeof(float),cudaMemcpyHostToDevice);
+  }
+
+  if((*choice)>=2){
+    if((*nkpgin)>0)
+      cuda_state=cudaMemcpy(kpgin_gpu,kpgin,(*npwin)*(*nkpgin)*sizeof(float),cudaMemcpyHostToDevice);
+    else{
+      cuda_state=cudaMemcpy(kgin_gpu,kgin,3*(*npwin)*sizeof(int),cudaMemcpyHostToDevice);
+      gpu_mkkpg_(kgin_gpu,kpgin_gpu,kptin,npwin);
+    }
+  }
+
+  if(cuda_state!=cudaSuccess){
+    printf("gpu_nonlop: Error while copying data to gpu : %s \n",cudaGetErrorString(cuda_state));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  //Compute Projection
+  char cplex;
+  if((*istwf_k)>1)
+    cplex=1;
+  else
+    cplex=2;
+
+  gpu_compute_nl_projections_(proj_gpu,dproj_gpu,
+			      vectin_gpu,ph3din_gpu,
+			      ffnlin_gpu,kpgin_gpu,
+			      indlmn_gpu,atoms_gpu,lmn_gpu,typat_gpu,
+			      &nb_proj_to_compute,npwin,choice,
+			      dimffnlin,lmnmax,&cplex,pi,ucvol);
+
+  //Copy back projections if wanted
+  if(((*cpopt)==0)||((*cpopt)==1))
+    cudaMemcpy(proj , proj_gpu,nb_proj_to_compute*sizeof(float2),cudaMemcpyDeviceToHost);
+
+  if((*choice)>0){
+    const float four_pi_by_ucvol=4*(*pi)/sqrt(*ucvol);
+
+    //Memcopies
+    //No need since ffnlout=ffnlin and ph3dout=ph3din
+    //     if((*choice)==1){
+    //       cuda_state=cudaMemcpy(ph3dout_gpu,ph3dout,(*natom)*(*npwout)*sizeof(float2),cudaMemcpyHostToDevice);
+    //       cuda_state=cudaMemcpy(ffnlout_gpu,ffnlout,(*npwout)*(*dimffnlout)*(*lmnmax)*(*ntypat)*sizeof(float),cudaMemcpyHostToDevice);
+    //     }
+
+    if(m_ham_used != 1) {
+      if((*paw_opt)!=3)
+	cuda_state=cudaMemcpy(enl_gpu, enl, (*dimenl1)*(*dimenl2)*(*nspinor)*(*nspinor)*sizeof(float),cudaMemcpyHostToDevice);
+      if((*paw_opt)>1)
+      cuda_state=cudaMemcpy(sij_gpu, sij, (*dimenl1)*(*ntypat)*sizeof(float),cudaMemcpyHostToDevice);
+
+      if((*choice==3)||((*choice==23)))
+	cuda_state=cudaMemcpy(gprimd_gpu,gprimd,9*sizeof(float),cudaMemcpyHostToDevice);
+
+      if(cuda_state!=cudaSuccess){
+	printf("gpu_nonlop: Error while copying data 2 to gpu :\n %s \n",cudaGetErrorString(cuda_state));
+	fflush(stdout);
+	leave_new_("COLL");
+      }
+    }
+
+    gpu_compute_nl_hamiltonian_(proj_gpu,dproj_gpu,
+				vectin_gpu,
+				vectout_gpu,svectout_gpu,
+				val_ajlmn_gpu,val_sajlmn_gpu,
+				ph3din_gpu,ffnlin_gpu,// <== ph3dout_gpu,ffnlout_gpu,
+				rdlmn_gpu,rdproj_gpu,
+				enlout_gpu,d_enlk_gpu,
+				enl_gpu,sij_gpu,gprimd_gpu,
+				atindx1_gpu,nlmn_gpu,
+				indlmn_gpu,atoms_gpu,
+				lmn_gpu,typat_gpu,
+				paw_opt,dimffnlout,dimenl1,
+				npwout,&nb_proj_to_compute,lmnmax,
+				natom,choice,signs,
+				&four_pi_by_ucvol,lambda);
+
+    //We copy back results
+    if((*choice)==1){
+      if((*paw_opt)!=3)
+	cuda_state=cudaMemcpy(vectout,vectout_gpu,(*npwout)*sizeof(float2),cudaMemcpyDeviceToHost);
+      if((*paw_opt)>2)
+	cuda_state=cudaMemcpy(svectout,svectout_gpu,(*npwout)*sizeof(float2),cudaMemcpyDeviceToHost);
+    }
+    else if(((*choice)==2) && ((*signs)==1))
+      cuda_state=cudaMemcpy(enlout,enlout_gpu,3*(*natom)*sizeof(float),cudaMemcpyDeviceToHost);
+    else if(((*choice)==3) && ((*signs)==1))
+      cuda_state=cudaMemcpy(enlout,enlout_gpu,6*sizeof(float),cudaMemcpyDeviceToHost);
+    else if(((*choice)==23) && ((*signs)==1))
+      cuda_state=cudaMemcpy(enlout,enlout_gpu,(6+3*(*natom))*sizeof(float),cudaMemcpyDeviceToHost);
+
+    if(cuda_state!=cudaSuccess){
+      printf("gpu_nonlop: Error while retrieving results from gpu :\n %s \n",cudaGetErrorString(cuda_state));
+      fflush(stdout);
+      leave_new_("COLL");
+    }
+  }
+
+  //We put back the correct value of vectin and correct svectout if needed
+  if( ((*istwf_k)==2) && ((*mpi_enreg_me_g0)==1) ){
+    vectin[0] = vectin_0.x;
+    vectin[1] = vectin_0.y;
+    if((*paw_opt)>2){
+      svectout[0] += vectin[0]/2;
+      svectout[1] += vectin[1];
+    }
+  }
+
+  //Impossible
+  if(!gpu_initialization)
+    free_nonlop_gpu_();
+
+}// end subroutine gpu_nonlop
+
+
+
+//Allocation routine
+extern "C" void alloc_nonlop_gpu_(int *npwin,int *npwout,int *nspinor,
+				  int *natom,int *ntypat,int *lmnmax,
+				  int *indlmn,int *nattyp,
+				  int *atindx1,float *gprimd,
+				  int *dimffnlin,int *dimffnlout,
+				  int *dimenl1, int *dimenl2 ){
+
+//   printf("calling alloc_nonlop_gpu with npw=%d \n",*npwin);
+//   fflush(stdout);
+
+  //Si on avait deja alloue
+  if(gpu_initialization==1)
+    free_nonlop_gpu_();
+  else
+    gpu_initialization = 1;
+
+  nb_proj_to_compute=0;
+
+  cudaError_t cuda_state;
+
+  cudaMallocHost(&nlmn,(*ntypat)*sizeof(char));
+  //Calcul du nombre de projections
+  for(int itypat=0;itypat<(*ntypat);itypat++){
+    int count_ilmn=0;
+    for(int ilmn=0;ilmn<(*lmnmax);ilmn++){
+      if(indlmn[2+6*(ilmn + (*lmnmax)*(itypat))] > 0)
+	count_ilmn++;
+    }
+    nlmn[itypat]=count_ilmn;
+    nb_proj_to_compute+=count_ilmn*nattyp[itypat];
+  }
+
+  cuda_state=cudaMalloc(&vectin_gpu, (*npwin)*sizeof(float2));
+  cuda_state=cudaMalloc(&vectout_gpu, (*npwout)*sizeof(float2));
+  cuda_state=cudaMalloc(&svectout_gpu, (*npwout)*sizeof(float2));
+  cuda_state=cudaMalloc(&ph3din_gpu, (*natom)*(*npwin)*sizeof(float2));
+  cuda_state=cudaMalloc(&ffnlin_gpu, (*npwin)*(*dimffnlin)*(*lmnmax)*(*ntypat)*sizeof(float));
+  cuda_state=cudaMalloc(&kpgin_gpu, (*npwin)*3*sizeof(float));
+  cuda_state=cudaMalloc(&kgin_gpu, (*npwin)*3*sizeof(int));
+  cuda_state=cudaMalloc(&ph3dout_gpu, (*npwout)*(*natom)*sizeof(float2));
+  cuda_state=cudaMalloc(&ffnlout_gpu, (*npwout)*(*dimffnlout)*(*lmnmax)*(*ntypat)*sizeof(float));
+  cuda_state=cudaMalloc(&enl_gpu,(*dimenl1)*(*dimenl2)*(*nspinor)*(*nspinor)*sizeof(float));
+  cuda_state=cudaMalloc(&sij_gpu,(*dimenl1)*(*ntypat)*sizeof(float));
+
+  cuda_state=cudaMalloc(&indlmn_gpu, 6*(*lmnmax)*(*ntypat)*sizeof(int));
+  cuda_state=cudaMalloc(&atindx1_gpu, (*natom)*sizeof(int));
+  cuda_state=cudaMalloc(&typat_gpu, nb_proj_to_compute*sizeof(char));
+  cuda_state=cudaMalloc(&nlmn_gpu,(*ntypat)*sizeof(char));
+  cuda_state=cudaMalloc(&lmn_gpu, nb_proj_to_compute*sizeof(char));
+  cuda_state=cudaMalloc(&atoms_gpu, nb_proj_to_compute*sizeof(short int));
+
+  cuda_state=cudaMalloc(&proj_gpu, nb_proj_to_compute*sizeof(float2));
+  cuda_state=cudaMalloc(&dproj_gpu, 10*nb_proj_to_compute*sizeof(float2));
+  cuda_state=cudaMalloc(&rdproj_gpu, 7*nb_proj_to_compute*sizeof(float));
+  cuda_state=cudaMalloc(&rdlmn_gpu, 3*(*natom)*(*lmnmax)*sizeof(float));
+
+  cuda_state=cudaMalloc(&d_enlk_gpu, 7*sizeof(float));
+  cuda_state=cudaMalloc(&gprimd_gpu, 9*sizeof(float));
+  cuda_state=cudaMalloc(&enlout_gpu, (6+3*(*natom))*sizeof(float));
+  cuda_state=cudaMalloc(&val_ajlmn_gpu, nb_proj_to_compute*sizeof(float2));
+  cuda_state=cudaMalloc(&val_sajlmn_gpu, nb_proj_to_compute*sizeof(float2));
+
+
+  cuda_state=cudaMallocHost(&typat, nb_proj_to_compute*sizeof(char));
+  cuda_state=cudaMallocHost(&lmn, nb_proj_to_compute*sizeof(char));
+  cuda_state=cudaMallocHost(&atoms, nb_proj_to_compute*sizeof(short int));
+
+  if(cuda_state!=cudaSuccess){
+    printf("alloc_nonlop_gpu: Error during gpu memory allocation :\n %s \n",cudaGetErrorString(cuda_state));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  //Precompute couple (atom,lmn) for each projection
+  int iproj=0;
+  int iatom=0;
+  for(int itypat=0;itypat<(*ntypat);itypat++){
+    for(int iat=0;iat<nattyp[itypat];iat++){
+      for(int ilmn=0;ilmn<nlmn[itypat];ilmn++){
+	typat[iproj]=itypat;
+	lmn[iproj]=ilmn;
+	atoms[iproj]=iatom;
+	iproj++;
+      }
+      iatom++;
+    }
+  }
+  assert(iproj==nb_proj_to_compute);
+
+  cuda_state=cudaMemcpy(indlmn_gpu,indlmn, 6*(*lmnmax)*(*ntypat)*sizeof(int),cudaMemcpyHostToDevice);
+  cuda_state=cudaMemcpy(typat_gpu,typat, nb_proj_to_compute*sizeof(char),cudaMemcpyHostToDevice);
+  cuda_state=cudaMemcpy(lmn_gpu,lmn, nb_proj_to_compute*sizeof(char),cudaMemcpyHostToDevice);
+  cuda_state=cudaMemcpy(atoms_gpu,atoms,nb_proj_to_compute*sizeof(short int),cudaMemcpyHostToDevice);
+  cuda_state=cudaMemcpy(atindx1_gpu, atindx1, (*natom)*sizeof(int),cudaMemcpyHostToDevice);
+  cuda_state=cudaMemcpy(nlmn_gpu, nlmn, (*ntypat)*sizeof(char),cudaMemcpyHostToDevice);
+  cuda_state=cudaMemcpy(gprimd_gpu,gprimd,9*sizeof(float),cudaMemcpyHostToDevice);
+  if(cuda_state!=cudaSuccess){
+    printf("alloc_nonlop_gpu: Error while copying data to gpu :\n %s \n",cudaGetErrorString(cuda_state));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+  cuda_state=cudaMemset(rdlmn_gpu,0,3*(*natom)*(*lmnmax)*sizeof(float));
+  if(cuda_state!=cudaSuccess){
+    printf("alloc_nonlop_gpu: Error while set tabs to 0:\n %s \n",cudaGetErrorString(cuda_state));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+}
+
+
+//Deallocation routine
+extern "C" void free_nonlop_gpu_(){
+
+  gpu_initialization=0;
+
+  cudaError_t cuda_state;
+
+  //Free Memory
+  cuda_state=cudaFreeHost(nlmn);
+
+  cuda_state=cudaFree(vectin_gpu);
+  cuda_state=cudaFree(vectout_gpu);
+  cuda_state=cudaFree(svectout_gpu);
+  cuda_state=cudaFree(ph3din_gpu);
+  cuda_state=cudaFree(ffnlin_gpu);
+  cuda_state=cudaFree(kpgin_gpu);
+  cuda_state=cudaFree(kgin_gpu);
+  cuda_state=cudaFree(ph3dout_gpu);
+  cuda_state=cudaFree(ffnlout_gpu);
+  cuda_state=cudaFree(enl_gpu);
+  cuda_state=cudaFree(sij_gpu);
+
+  cuda_state=cudaFree(indlmn_gpu);
+  cuda_state=cudaFree(atindx1_gpu);
+  cuda_state=cudaFree(typat_gpu);
+  cuda_state=cudaFree(nlmn_gpu);
+  cuda_state=cudaFree(lmn_gpu);
+  cuda_state=cudaFree(atoms_gpu);
+
+  cuda_state=cudaFree(proj_gpu);
+  cuda_state=cudaFree(dproj_gpu);
+  cuda_state=cudaFree(rdproj_gpu);
+  cuda_state=cudaFree(rdlmn_gpu);
+
+  cuda_state=cudaFree(d_enlk_gpu);
+  cuda_state=cudaFree(gprimd_gpu);
+  cuda_state=cudaFree(enlout_gpu);
+  cuda_state=cudaFree(val_ajlmn_gpu);
+  cuda_state=cudaFree(val_sajlmn_gpu);
+
+  cuda_state=cudaFreeHost(typat);
+  cuda_state=cudaFreeHost(lmn);
+  cuda_state=cudaFreeHost(atoms);
+
+  if(cuda_state!=cudaSuccess){
+    printf("free_nonlop_gpu: Error while freeing gpu data:\n %s \n",cudaGetErrorString(cuda_state));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+}
+
+extern "C" void gpu_update_ham_data_(float *enl,int *size_enl, float *sij,int *size_sij,
+                                     float *gprimd,int *size_gprimd){
+
+  cudaError_t cuda_state;
+
+  cuda_state=cudaMemcpy(enl_gpu, enl, (*size_enl)*sizeof(float),cudaMemcpyHostToDevice);
+  if(cuda_state!=cudaSuccess){
+    printf("gpu_update_ham_data: Error while copying data 1 to gpu :\n %s \n",cudaGetErrorString(cuda_state));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+  if((*size_sij)>0){
+    cuda_state=cudaMemcpy(sij_gpu, sij, (*size_sij)*sizeof(float),cudaMemcpyHostToDevice);
+    if(cuda_state!=cudaSuccess){
+      printf("gpu_update_ham_data: Error while copying data 2 to gpu :\n %s \n",cudaGetErrorString(cuda_state));
+      fflush(stdout);
+      leave_new_("COLL");
+    }
+  }
+
+  cuda_state=cudaMemcpy(gprimd_gpu,gprimd,(*size_gprimd)*sizeof(float),cudaMemcpyHostToDevice);
+  if(cuda_state!=cudaSuccess){
+    printf("gpu_update_ham_data: Error while copying data 3 to gpu :\n %s \n",cudaGetErrorString(cuda_state));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+  m_ham_used = 1;
+}
+
+extern "C" void gpu_update_ffnl_ph3d_(float *ph3din,int *dimph3din,float *ffnlin,int *dimffnlin){
+
+  cudaError_t cuda_state;
+
+  cuda_state=cudaMemcpy(ffnlin_gpu,ffnlin,(*dimffnlin)*sizeof(float),cudaMemcpyHostToDevice);
+  if(cuda_state!=cudaSuccess){
+    printf("gpu_update_ffnl_ph3d: Error while copying data 1 to gpu :\n %s \n",cudaGetErrorString(cuda_state));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+  cuda_state=cudaMemcpy(ph3din_gpu,ph3din,(*dimph3din)*sizeof(float),cudaMemcpyHostToDevice);
+  if(cuda_state!=cudaSuccess){
+    printf("gpu_update_ffnl_ph3d: Error while copying data 2 to gpu :\n %s \n",cudaGetErrorString(cuda_state));
+    fflush(stdout);
+    leave_new_("COLL");
+  }
+
+  ffnl_ph3d_updated = 1;
+}
+#endif
+
 extern "C" void gpu_finalize_ffnl_ph3d_(){
   ffnl_ph3d_updated = 0;
 }
@@ -732,4 +1229,6 @@
 extern "C" void gpu_finalize_ham_data_(){
   m_ham_used = 0;
 }
+
+
 //***
diff -Naur ./src/52_manage_cuda/gpu_sphere.cu ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_sphere.cu
--- ./src/52_manage_cuda/gpu_sphere.cu	2016-08-06 16:05:01.000000000 +0800
+++ ../abinit-8.0.8-SP/src/52_manage_cuda/gpu_sphere.cu	2017-01-14 09:55:46.825498958 +0800
@@ -64,6 +64,7 @@
 /*******                                                 **********/
 /******************************************************************/
 
+#if defined HAVE_GPU_CUDA_DP
 __global__ void kernel_set_zero(double *tab,int n){
   int id= threadIdx.x + blockDim.x*(blockIdx.x + gridDim.x*blockIdx.y);
   if(id<n)
@@ -265,4 +266,208 @@
 
 }//end subroutine gpu_sphere_out
 
+
+#else
+__global__ void kernel_set_zero(float *tab,int n){
+  int id= threadIdx.x + blockDim.x*(blockIdx.x + gridDim.x*blockIdx.y);
+  if(id<n)
+    tab[id]=0.;
+}
+
+__global__ void kernel_sphere_in(float *cfft,float *cg, const int *kg_k,
+				 const int npw,const int ndat,const int n1,const int n2,const int n3,
+				 const int shift_inv1,const int shift_inv2,const int shift_inv3,
+				 const int istwfk){
+
+  int ipw,idat,thread_id;
+  int i1,i2,i3;
+  thread_id  = threadIdx.x + blockIdx.x*blockDim.x;
+  idat = blockIdx.y;
+
+  for(ipw=thread_id; ipw<npw; ipw+=blockDim.x*gridDim.x){
+    i1=kg_k[ipw*3];//kg_k(1,ipw)
+    i2=kg_k[ipw*3 + 1];//kg_k(2,ipw)
+    i3=kg_k[ipw*3 + 2];//kg_k(3,ipw)
+    if(i1<0)
+      i1+=n1;
+    if(i2<0)
+      i2+=n2;
+    if(i3<0)
+      i3+=n3;
+
+    //We write cfft(i1,i2,i3)
+    //(float2): cfft[i1 + n1*(i2 + n2*(i3 + n3*idat))] = cg[ipw + npw*idat]
+    cfft[2*(i1 + n1*(i2 + n2*(i3+n3*idat)))] = cg[2*(ipw + npw*idat)];
+    cfft[1+ 2*(i1 + n1*(i2 + n2*(i3+n3*idat)))] = cg[1 + 2*(ipw + npw*idat)];
+
+    if(istwfk > 1){
+      int i1inv,i2inv,i3inv;
+      i1inv = (shift_inv1 - i1) % n1;
+      i2inv = (shift_inv2 - i2) % n2;
+      i3inv = (shift_inv3 - i3) % n3;
+      //cfft(1,i1inv,i2inv,i3inv+n6*(idat-1))= cg(1,ipw+npw*(idat-1))
+      //cfft(2,i1inv,i2inv,i3inv+n6*(idat-1))=-cg(2,ipw+npw*(idat-1))
+      cfft[2*(i1inv + n1*(i2inv + n2*(i3inv+n3*idat)))] = cg[2*(ipw + npw*idat)];
+      cfft[1+ 2*(i1inv + n1*(i2inv + n2*(i3inv+n3*idat)))] = -cg[1 + 2*(ipw + npw*idat)];
+    }
+  }
+}
+
+__global__ void kernel_sphere_out(float *cfft,float *cg, int *kg_k,int npw,int ndat,int n1,int n2,int n3,float norm){
+
+  int ig,idat,thread_id;
+  int i1,i2,i3;
+  thread_id = threadIdx.x + blockIdx.x*blockDim.x;
+  idat = blockIdx.y;
+
+  for(ig=thread_id; ig<npw; ig+=blockDim.x*gridDim.x){
+    i1=kg_k[ig*3];//kg_k(1,ipw)
+    i2=kg_k[ig*3 + 1];//kg_k(2,ipw)
+    i3=kg_k[ig*3 + 2];//kg_k(3,ipw)
+    if(i1<0)
+      i1+=n1;
+    if(i2<0)
+      i2+=n2;
+    if(i3<0)
+      i3+=n3;
+
+    //We write cg(ig)
+    cg[2*(ig + npw*idat)]     = norm * cfft[2*(i1 + n1*(i2 + n2*(i3+n3*idat)))] ;
+    cg[1 + 2*(ig + npw*idat)] = norm * cfft[1+ 2*(i1 + n1*(i2 + n2*(i3+n3*idat)))] ;
+  }
+}
+
+/******************************************************************/
+/*******                                                 **********/
+/*******          FUNCTIONS TO BE CALLED                 **********/
+/*******                                                 **********/
+/******************************************************************/
+
+extern "C" void gpu_sphere_in_(float *cg,float *cfft,int *kg_k,int *npw,int *n1,int *n2,int *n3,int *ndat,int *istwfk,cudaStream_t *compute_stream)
+{
+
+  //Arguments ------------------------------------
+  //scalars
+  //  integer,intent(in) :: istwfk,n1,n2,n3,ndat,npw
+  //  cuda_stream_t, intent(in) :: compute_stream
+  //arrays
+  //  integer,intent(in) :: kg_k(3,npw)
+  //  real(dp),intent(in) :: cg(2,npw*ndat)
+  //  real(dp),intent(inout) :: cfft(2,n1,n2,n3*ndat)
+
+  // //Local variables-------------------------------
+  dim3 grid,bloc;
+  int cfft_size=2*(*n1)*(*n2)*(*n3)*(*ndat);
+  int shift_inv1,shift_inv2,shift_inv3;
+  int istwf_k = *istwfk;
+  // *************************************************************************
+
+  //Set all work tab to zero
+  bloc.x = BLOCK_SIZE;
+  grid.x = min((cfft_size + bloc.x - 1 )/bloc.x,MAX_GRID_SIZE);
+  grid.y = (cfft_size + bloc.x*grid.x - 1)/(bloc.x*grid.x);
+  kernel_set_zero<<<grid,bloc,0,*compute_stream>>>(cfft,cfft_size);
+
+
+  //During GPU calculation we do some pre-calculation on symetries
+  if((istwf_k==2) || (istwf_k==4) || (istwf_k==6) || (istwf_k==8)){
+    shift_inv1 = *n1;
+  }
+  else{
+    shift_inv1 = *n1-1;
+  }
+
+  if((istwf_k>=2) && (istwf_k<=5)) {
+    shift_inv2 = *n2;
+  }
+  else{
+    shift_inv2 = *n2-1;
+  }
+
+  if((istwf_k==2) || (istwf_k==3) || (istwf_k==6) || (istwf_k==7)){
+    shift_inv3 = *n3;
+  }else{
+    shift_inv3 = *n3-1;
+  }
+
+
+  grid.x = min((*npw  + bloc.x - 1 )/bloc.x,MAX_GRID_SIZE);
+  grid.y = *ndat;
+  //Call kernel to put cg into cfft
+  kernel_sphere_in<<<grid,bloc,0,*compute_stream>>>(cfft,cg,kg_k,*npw,*ndat,*n1,*n2,*n3,shift_inv1,shift_inv2,shift_inv3,*istwfk);
+
+}//end subroutine gpu_sphere_in
+
+
+
+//{\src2tex{textfont=tt}}
+//****f* ABINIT/sphere
+// NAME
+// gpu_sphere_out
+//
+// FUNCTION
+// Array cg is defined in sphere with npw points. Extract cg from box
+// of n1*n2*n3 points defined by array cfft for fft box.
+//
+// COPYRIGHT
+// Copyright (C) 1998-2016 ABINIT group (DCA, XG, GMR, AR)
+// This file is distributed under the terms of the
+// GNU General Public License, see ~abinit/COPYING
+// or http://www.gnu.org/copyleft/gpl.txt .
+// For the initials of contributors, see ~abinit/doc/developers/contributors.txt .
+//
+// INPUTS
+// cfft(2,n1,n2,n3) = fft box
+// cg(2,npw)= contains values for npw G vectors in basis sphere
+// compute_stream= stream cuda for kernels' execution
+// istwfk=option parameter that describes the storage of wfs
+// kg_k(3,npw)=integer coordinates of G vectors in basis sphere
+// n1,n2,n3=physical dimension of the box (cfft)
+// ndat=number of FFT to do in //
+// npw=number of G vectors in basis at this k point
+//
+// NOTES
+// cg and cfft are assumed to be of type COMPLEX, although this routine treats
+// them as real of twice the length to avoid nonstandard complex*16.
+// If istwf_k differs from 1, then special storage modes must be taken
+// into account, for symmetric wavefunctions coming from k=(0 0 0) or other
+// special k points.
+//
+// TODO
+// Order arguments
+//
+// PARENTS
+//      gpu_fourwf
+//
+// CHILDREN
+//
+// SOURCE
+
+extern "C" void gpu_sphere_out_(float *cg,float *cfft,int *kg_k,int *npw,int *n1,int *n2,int *n3,int* ndat,cudaStream_t *compute_stream)
+{
+
+   //Arguments ------------------------------------
+  //scalars
+  //  integer,intent(in) :: istwfk,n1,n2,n3,ndat,npw
+  //  cuda_stream_t, intent(in) :: compute_stream
+  //arrays
+  //  integer,intent(in) :: kg_k(3,npw)
+  //  real(dp),intent(in) :: cg(2,npw*ndat)
+  //  real(dp),intent(inout) :: cfft(2,n1,n2,n3*ndat)
+
+  // //Local variables-------------------------------
+  dim3 grid,bloc;
+  int cfft_size=(*n1)*(*n2)*(*n3);
+  float norme=1./cfft_size;
+  // *************************************************************************
+
+  bloc.x = BLOCK_SIZE;
+  grid.x = min((*npw  + bloc.x - 1 )/bloc.x ,MAX_GRID_SIZE);
+  grid.y = *ndat;
+  //Extract wave functions and appy fft normalisation factor before storing
+  kernel_sphere_out<<<grid,bloc,0,*compute_stream>>>(cfft,cg,kg_k,*npw,*ndat,*n1,*n2,*n3,norme);
+
+}//end subroutine gpu_sphere_out
+#endif
+
 //***
diff -Naur ./src/57_iovars/invars0.F90 ../abinit-8.0.8-SP/src/57_iovars/invars0.F90
--- ./src/57_iovars/invars0.F90	2016-08-06 16:05:01.000000000 +0800
+++ ../abinit-8.0.8-SP/src/57_iovars/invars0.F90	2017-01-14 09:55:46.825498958 +0800
@@ -426,9 +426,11 @@
    write(message,'(7a)')&
 &   '   Input variables use_gpu_cuda is on but abinit hasn''t been built',ch10,&
 &   '   with (double precision) gpu mode enabled !',ch10,&
-&   '   Action : change the input variable use_gpu_cuda',ch10,&
-&   '            or re-compile ABINIT with double-precision Cuda enabled.'
-   MSG_ERROR(message)
+&   '   Overall precision can be less than 1e-7.'
+
+!Changed from MSG_ERROR to MSG_WARNING
+
+   MSG_WARNING(message)
 #endif
  end if
 
diff -Naur ./src/incs/gpu_four_header.h ../abinit-8.0.8-SP/src/incs/gpu_four_header.h
--- ./src/incs/gpu_four_header.h	2016-08-06 16:05:01.000000000 +0800
+++ ../abinit-8.0.8-SP/src/incs/gpu_four_header.h	2017-01-14 17:13:33.174769390 +0800
@@ -30,6 +30,7 @@
   //Headers for Fourwf :
   void alloc_gpu_fourwf_(int *ngfft,int *ndat,int *npwin,int *npwout);
   void free_gpu_fourwf_();
+#if defined HAVE_GPU_CUDA_DP
   void gpu_fourwf_(int *cplex,double *denpot,double *fofgin,double *fofgout,double *fofr,int *gboundin,int *gboundout,int *istwf_k,
 		   int *kg_kin,int *kg_kout,int *mgfft,void *mpi_enreg,int *ndat,int *ngfft,int *npwin,int *npwout,int *n4,int *n5,int *n6,int *option,
 		   int *paral_kgb,int * tim_fourwf,double *weight_r,double *weight_i);/*,
@@ -91,7 +92,69 @@
 				   const char *cplex,const double *pi,const double *ucvol
 				   );
   void gpu_mkkpg_(int *kg_gpu,double *kpg_gpu,double *kpt,int *npw);
+#else
+  void gpu_fourwf_(int *cplex,float *denpot,float *fofgin,float *fofgout,float *fofr,int *gboundin,int *gboundout,int *istwf_k,
+		   int *kg_kin,int *kg_kout,int *mgfft,void *mpi_enreg,int *ndat,int *ngfft,int *npwin,int *npwout,int *n4,int *n5,int *n6,int *option,
+		   int *paral_kgb,int * tim_fourwf,float *weight_r,float *weight_i);/*,
+											int *use_ndo,float *fofginb)*/
+  //Put wf function from cg to sphere in cfft
+  void gpu_sphere_in_(float *cg,float *cfft,int *kg_k,int *npw,int *n1,int *n2,int *n3,int* ndat,int *istwfk,cudaStream_t *compute_stream);
+
+  //Extract wf functions from sphere in cfft to cg
+  void gpu_sphere_out_(float *cg,float *cfft,int *kg_k,int *npw,int *n1,int *n2,int *n3,int* ndat,cudaStream_t *compute_stream);
+  
+  void gpu_density_accumulation_(float *fofr,float* denpot, float* weight_r,float* weight_i,int* nfft_tot,int *ndat,cudaStream_t *compute_stream);
+  
+  void gpu_apply_local_potential_(float2 *fofr,float* denpot,int* nfft_tot,int *ndat,cudaStream_t *compute_stream);
+
+  
+  //Headers for nonlop:
+ void alloc_nonlop_gpu_(int *npwin,int *npwout,int *nspinor,
+				  int *natom,int *ntypat,int *lmnmax,
+				  int *indlmn,int *nattyp,
+				  int *atindx1,float *gprimd,
+				  int *dimffnlin,int *dimffnlout,
+				  int *dimenl1, int *dimenl2 );
+
+  void free_nonlop_gpu_();
+
+  void gpu_update_ham_data_(float *enl,int *size_enl, float *sij,int *size_sij,
+                            float *gprimd,int *size_gprimd);
+  
+  void gpu_update_ffnl_ph3d_(float *ph3din,int *dimph3din,float *ffnlin,int *dimffnlin);
   
+  void gpu_finalize_ham_data_();
+  
+  void gpu_finalize_ffnl_ph3d_();
+  
+  void gpu_compute_nl_hamiltonian_(float2 *proj_gpu,float2 *dproj_gpu,
+				   float2 *vectin_gpu,
+				   float2 *vectout_gpu,float2 *svectout_gpu,
+				   float2 *val_ajlmn_gpu,float2 *val_sajlmn_gpu,
+				   float2 *ph3dout_gpu,float *ffnlout_gpu,
+				   float *rdlmn_gpu, float *rdproj_gpu,
+				   float *enlout_gpu, float *d_enlk_gpu,
+				   float *enl_gpu,float *sij_gpu,float *gprimd_gpu,
+				   int *atindx1_gpu,unsigned char *nlmn_gpu,
+				   int *indlmn_gpu,unsigned short int *atoms_gpu,
+				   unsigned char *lmn_gpu, unsigned char *typat_gpu,
+				   int *paw_opt,int *dimffnlout,int *dimenl1,
+				   int *npw,int *nb_projections,int *lmnmax,
+				   int *natoms, int *choice, int *signs,
+				   const float *four_pi_by_ucvol,const float *lambda
+				   );
+  
+  void gpu_compute_nl_projections_(float2 *proj_gpu,float2 *dproj_gpu,
+				   float2 *vectin_gpu,float2 *ph3din_gpu,
+				   float *ffnlin_gpu,float *kpgin_gpu,
+				   int *indlmn_gpu,unsigned short int *atoms_gpu,
+				   unsigned char *lmn_gpu, unsigned char *typat_gpu,
+				   int *nb_proj_to_compute,int *npw,int *choice,
+				   int *dimffnlin,int *lmnmax,
+				   const char *cplex,const float *pi,const float *ucvol
+				   );
+  void gpu_mkkpg_(int *kg_gpu,float *kpg_gpu,float *kpt,int *npw);
+#endif  
   
 #ifdef __cplusplus
 }
