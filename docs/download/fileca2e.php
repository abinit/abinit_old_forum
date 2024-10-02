make  all-recursive
make[1]: Entering directory `/estruct/tmpbuild'
Making all in prereqs
make[2]: Entering directory `/estruct/tmpbuild/prereqs'
Making all in linalg
make[3]: Entering directory `/estruct/tmpbuild/prereqs/linalg'
make -f /estruct/abinit-6.4.1/prereqs/linalg/linalg.mk 
make[4]: Entering directory `/estruct/tmpbuild/prereqs/linalg'
lapack-abinit_6.0 has been uncompressed.
touch configure-stamp
lapack-abinit_6.0 has been configured.
cd blas && make FC="mpif90" FCFLAGS=" -ffixed-form -g -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math" AR="ar" ARFLAGS="rc" RANLIB="ranlib"
make[5]: Entering directory `/estruct/tmpbuild/prereqs/linalg/blas'
BLAS for ABINIT has been built.
make[5]: Leaving directory `/estruct/tmpbuild/prereqs/linalg/blas'
cd lapack && make FC="mpif90" FCFLAGS=" -ffixed-form -g -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math" AR="ar" ARFLAGS="rc" RANLIB="ranlib"
make[5]: Entering directory `/estruct/tmpbuild/prereqs/linalg/lapack'
mpif90 -ffixed-form -g -ffree-line-length-none  -O3 -mtune=native -march=native -funroll-loops -ffast-math -c cgttrf.f
make[5]: Leaving directory `/estruct/tmpbuild/prereqs/linalg/lapack'
make[4]: Leaving directory `/estruct/tmpbuild/prereqs/linalg'
make[3]: Leaving directory `/estruct/tmpbuild/prereqs/linalg'
make[2]: Leaving directory `/estruct/tmpbuild/prereqs'
make[1]: Leaving directory `/estruct/tmpbuild'
