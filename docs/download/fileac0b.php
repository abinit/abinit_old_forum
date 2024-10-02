make  all-recursive
make[1]: Entering directory `/estruct/tmpbuild'
Making all in prereqs
make[2]: Entering directory `/estruct/tmpbuild/prereqs'
Making all in linalg
make[3]: Entering directory `/estruct/tmpbuild/prereqs/linalg'
make -f /estruct/abinit-6.4.1/prereqs/linalg/linalg.mk 
make[4]: Entering directory `/estruct/tmpbuild/prereqs/linalg'
gzip -cd /estruct/abinit-6.4.1/prereqs/linalg/lapack-abinit_6.0.tar.gz | tar xf -
touch uncompress-stamp
lapack-abinit_6.0 has been uncompressed.
touch configure-stamp
lapack-abinit_6.0 has been configured.
cd blas && make FC="/usr/local/bin/mpif90 -m64" FCFLAGS="-m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math" AR="ar" ARFLAGS="rc" RANLIB="ranlib"
make[5]: Entering directory `/estruct/tmpbuild/prereqs/linalg/blas'
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c caxpy.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ccopy.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cdotc.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cdotu.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgbmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgemm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgemv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgerc.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgeru.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c chbmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c chemm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c chemv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cher.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cher2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cher2k.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cherk.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c chpmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c chpr.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c chpr2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c crotg.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cscal.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c csscal.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cswap.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c csymm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c csyr2k.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c csyrk.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ctbmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ctbsv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ctpmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ctpsv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ctrmm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ctrmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ctrsm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ctrsv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dasum.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c daxpy.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dcabs1.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dcopy.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ddot.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dgbmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dgemm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dgemv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dger.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dnrm2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c drot.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c drotm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c drotmg.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dsbmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dscal.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dsdot.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dspmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dspr.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dspr2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dswap.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dsymm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dsymv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dsyr.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dsyr2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dsyr2k.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dsyrk.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dtbmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dtbsv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dtpmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dtpsv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dtrmm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dtrmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dtrsm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dtrsv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dzasum.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c dznrm2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c icamax.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c idamax.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c isamax.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c izamax.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c lsame.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c sasum.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c saxpy.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c scasum.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c scabs1.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c scnrm2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c scopy.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c sdot.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c sdsdot.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c sgbmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c sgemm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c sgemv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c sger.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c snrm2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c srot.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c srotm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c srotmg.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ssbmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c sscal.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c sspmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c sspr.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c sspr2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c sswap.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ssymm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ssymv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ssyr.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ssyr2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ssyr2k.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ssyrk.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c stbmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c stbsv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c stpmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c stpsv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c strmm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c strmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c strsm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c strsv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c xerbla.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c xerbla_array.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zaxpy.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zcopy.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zdotc.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zdotu.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zdrot.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zdscal.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zgbmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zgemm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zgemv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zgerc.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zgeru.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zhbmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zhemm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zhemv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zher.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zher2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zher2k.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zherk.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zhpmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zhpr.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zhpr2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zrotg.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zscal.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zswap.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zsymm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zsyr2k.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c zsyrk.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ztbmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ztbsv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ztpmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ztpsv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ztrmm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ztrmv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ztrsm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c ztrsv.f
ar rc libblas.a caxpy.o ccopy.o cdotc.o cdotu.o cgbmv.o cgemm.o cgemv.o cgerc.o cgeru.o chbmv.o chemm.o chemv.o cher.o cher2.o cher2k.o cherk.o chpmv.o chpr.o chpr2.o crotg.o cscal.o csscal.o cswap.o csymm.o csyr2k.o csyrk.o ctbmv.o ctbsv.o ctpmv.o ctpsv.o ctrmm.o ctrmv.o ctrsm.o ctrsv.o dasum.o daxpy.o dcabs1.o dcopy.o ddot.o dgbmv.o dgemm.o dgemv.o dger.o dnrm2.o drot.o drotm.o drotmg.o dsbmv.o dscal.o dsdot.o dspmv.o dspr.o dspr2.o dswap.o dsymm.o dsymv.o dsyr.o dsyr2.o dsyr2k.o dsyrk.o dtbmv.o dtbsv.o dtpmv.o dtpsv.o dtrmm.o dtrmv.o dtrsm.o dtrsv.o dzasum.o dznrm2.o icamax.o idamax.o isamax.o izamax.o lsame.o sasum.o saxpy.o scasum.o scabs1.o scnrm2.o scopy.o sdot.o sdsdot.o sgbmv.o sgemm.o sgemv.o sger.o snrm2.o srot.o srotm.o srotmg.o ssbmv.o sscal.o sspmv.o sspr.o sspr2.o sswap.o ssymm.o ssymv.o ssyr.o ssyr2.o ssyr2k.o ssyrk.o stbmv.o stbsv.o stpmv.o stpsv.o strmm.o strmv.o strsm.o strsv.o xerbla.o xerbla_array.o zaxpy.o zcopy.o zdotc.o zdotu.o zdrot.o zdscal.o zgbmv.o zgemm.o zgemv.o zgerc.o zgeru.o zhbmv.o zhemm.o zhemv.o zher.o zher2.o zher2k.o zherk.o zhpmv.o zhpr.o zhpr2.o zrotg.o zscal.o zswap.o zsymm.o zsyr2k.o zsyrk.o ztbmv.o ztbsv.o ztpmv.o ztpsv.o ztrmm.o ztrmv.o ztrsm.o ztrsv.o
ranlib libblas.a
BLAS for ABINIT has been built.
make[5]: Leaving directory `/estruct/tmpbuild/prereqs/linalg/blas'
cd lapack && make FC="/usr/local/bin/mpif90 -m64" FCFLAGS="-m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math" AR="ar" ARFLAGS="rc" RANLIB="ranlib"
make[5]: Entering directory `/estruct/tmpbuild/prereqs/linalg/lapack'
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cbdsqr.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgbbrd.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgbcon.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgbequb.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgbequ.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgbrfs.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgbrfsx.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgbsv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgbsvx.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgbsvxx.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgbtf2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgbtrf.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgbtrs.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgebak.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgebal.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgebd2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgebrd.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgecon.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgeequb.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgeequ.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgees.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgeesx.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgeev.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgeevx.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgegs.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgegv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgehd2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgehrd.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgelq2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgelqf.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgelsd.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgels.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgelss.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgelsx.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgelsy.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgeql2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgeqlf.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgeqp3.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgeqpf.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgeqr2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgeqrf.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgerfs.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgerfsx.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgerq2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgerqf.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgesc2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgesdd.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgesvd.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgesv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgesvx.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgesvxx.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgetc2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgetf2.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgetrf.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgetri.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgetrs.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cggbak.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cggbal.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgges.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cggesx.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cggev.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cggevx.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cggglm.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgghrd.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgglse.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cggqrf.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cggrqf.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cggsvd.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cggsvp.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgtcon.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgtrfs.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgtsv.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgtsvx.f
/usr/local/bin/mpif90 -m64 -m64 -ffixed-form -m64  -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgttrf.f
make[5]: Leaving directory `/estruct/tmpbuild/prereqs/linalg/lapack'
make[4]: Leaving directory `/estruct/tmpbuild/prereqs/linalg'
make[3]: Leaving directory `/estruct/tmpbuild/prereqs/linalg'
make[2]: Leaving directory `/estruct/tmpbuild/prereqs'
make[1]: Leaving directory `/estruct/tmpbuild'
