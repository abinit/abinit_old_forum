use etsf_io_low_level
      1
Fatal Error: Cannot read module file 'etsf_io_low_level.mod' opened at (1), because it was created by a different version of GNU Fortran
make[4]: *** [etsf_io_tools.o] Error 1
make[4]: *** Waiting for unfinished jobs....
etsf_io_file.f90:29.6:

  use etsf_io_low_level
      1
Fatal Error: Cannot read module file 'etsf_io_low_level.mod' opened at (1), because it was created by a different version of GNU Fortran
make[4]: *** [etsf_io_file.o] Error 1
make[4]: Leaving directory `/tmp/abinit/fallbacks/sources/etsf_io-1.0.4/src/utils'
make[3]: *** [all-recursive] Error 1
make[3]: Leaving directory `/tmp/abinit/fallbacks/sources/etsf_io-1.0.4'
make[2]: *** [stamps/etsf_io-build-stamp] Error 2
make[2]: Leaving directory `/tmp/abinit/fallbacks'
make[1]: [all-local] Error 2 (ignored)
Checking build of etsf_io fallback
test -e stamps/etsf_io-install-stamp
make[1]: *** [all-local] Error 1
make[1]: Leaving directory `/tmp/abinit/fallbacks'
make: *** [multi] Error 2

