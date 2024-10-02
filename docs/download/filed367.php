make  all-recursive
Making all in plugins
Making all in linalg
make -f ../../plugins/linalg/linalg.mk 
mkdir lapack-abinit_6.0
cd lapack-abinit_6.0; \
	  gzip -cd /Users/anna/Documents/anna/1projects/simulation/PROFESS/abinit-tarballs/lapack-abinit_6.0.tar.gz | tar xf -
touch uncompress-stamp
lapack-abinit_6.0 has been uncompressed.
touch configure-stamp
lapack-abinit_6.0 has been configured.
cd lapack-abinit_6.0/blas && make \
	  FC="gfortran" \
	  FCFLAGS="-g -ffree-line-length-none  -O2 -mtune=native -march=native -mfpmath=sse -ffixed-form" \
	  AR="ar" \
	  ARFLAGS="rc" \
	  RANLIB="ranlib"
gfortran -g -ffree-line-length-none  -O2 -mtune=native -march=native -mfpmath=sse -ffixed-form -c caxpy.f
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:40:no such instruction: `vucomiss LC0(%rip), %xmm0'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:75:no such instruction: `vmovss 4(%rbp), %xmm3'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:79:no such instruction: `vmovss 0(%rbp), %xmm2'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:92:no such instruction: `vmovss (%rdx), %xmm1'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:98:no such instruction: `vmovss 4(%rdx), %xmm0'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:103:no such instruction: `vmulss %xmm3, %xmm1,%xmm4'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:104:no such instruction: `vmulss %xmm2, %xmm0,%xmm5'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:105:no such instruction: `vmulss %xmm2, %xmm1,%xmm1'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:106:no such instruction: `vmulss %xmm3, %xmm0,%xmm0'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:107:no such instruction: `vaddss %xmm4, %xmm5,%xmm4'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:108:no such instruction: `vsubss %xmm0, %xmm1,%xmm0'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:109:no such instruction: `vaddss 4(%rax), %xmm4,%xmm4'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:110:no such instruction: `vaddss (%rax), %xmm0,%xmm0'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:112:no such instruction: `vmovss %xmm4, 4(%rax)'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:114:no such instruction: `vmovss %xmm0, (%rax)'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:186:no such instruction: `vmovss 4(%rbp), %xmm3'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:192:no such instruction: `vmovss 0(%rbp), %xmm2'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:197:no such instruction: `vmovss (%r12,%rax,8), %xmm1'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:198:no such instruction: `vmovss 4(%r12,%rax,8), %xmm0'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:203:no such instruction: `vmulss %xmm3, %xmm1,%xmm4'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:204:no such instruction: `vmulss %xmm2, %xmm0,%xmm5'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:205:no such instruction: `vmulss %xmm2, %xmm1,%xmm1'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:206:no such instruction: `vmulss %xmm3, %xmm0,%xmm0'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:207:no such instruction: `vaddss %xmm4, %xmm5,%xmm4'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:208:no such instruction: `vsubss %xmm0, %xmm1,%xmm0'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:209:no such instruction: `vaddss 4(%r14), %xmm4,%xmm4'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:210:no such instruction: `vaddss (%r14), %xmm0,%xmm0'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:212:no such instruction: `vmovss %xmm4, 4(%r14)'
/var/folders/bl/8wb0ry9x00g8k6v3l9z293r80000gp/T//ccUQr9fa.s:214:no such instruction: `vmovss %xmm0, (%r14)'
make[5]: *** [caxpy.o] Error 1
make[4]: *** [build-stamp] Error 2
make[3]: *** [package-ready] Error 2
make[2]: *** [all-recursive] Error 1
make[1]: *** [all-recursive] Error 1
make: *** [all] Error 2
