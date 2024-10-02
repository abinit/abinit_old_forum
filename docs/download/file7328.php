===============================================================================
=         This file describes how to install ABINIT on Mac OS X               =
=          - Using MacPorts package manager                                   =
=          - Using Homebrew package manager                                   =
=          - Compiling by yourself                                            =
===============================================================================
This manpage is available as ~abinit_src_dir/README.MacOSX


===============================================================================
=  1- USING HOMEBREW    (http://brew.sh)                                      =
===============================================================================
Available from ABINIT v7.10.2
Tested with mac OS X v10.10 (Yosemite)
Should be OK for v10.8 (Mountain Lion), v10.9 (Mavericks)

A Homebrew formula for ABINIT has been released (authors: D. Davydov + M. Torrent).

----- Prerequesites -----

* Homebrew installed (see: http://brew.sh/#install)

* Notes:
  - Homebrew needs Xcode and "Xcode command line tools" to be installed; just type:
    xcode-select --install

----- Installing ABINIT -----

* Just type:
    brew install homebrew/science/abinit

* ABINIT should install smoothly... with its dependencies.

----- Comments -----

* LibXC, ETSF_IO and netCDF fallbacks (plugins) are used by default.
  FoX, Wannier90, BigDFT and AtomPAW are not available in Homebrew.

* The following options are available for ABINIT formula:
  --with-testsuite
    Run full test suite (time consuming)
  --without-check
    Skip build-time tests (not recommended)
  --without-etsf_io
    Build without etsf_io support
  --without-netcdf
    Build without netcdf support
  --without-fftw
    Build without fftw support
  --without-gsl
    Build without gsl support


===============================================================================
=  2- USING MACPORTS    (http://www.macports.org)                             =
===============================================================================
Available from ABINIT v7.4.3
Tested with mac OS X v10.8 (Mountain Lion), v10.9 (Mavericks), v10.10 (Yosemite)

----- Prerequesites -----

* MacPorts installed (see: https://www.macports.org/install.php)

* Some basic ports already installed:
   gcc with Fortran variant (Fortran compiler),
   mpich or openmpi (MPI)

* Before starting, it is preferable to update MacPorts system:
    sudo port selfupdate
    sudo port upgrade outdated

* Notes:
  - It is recommended to completely reinstall MacPorts after a MacOS upgrade.
  - MacPorts needs Xcode and "Xcode command line tools" to be installed; just type:
    xcode-select --install

----- 1- Using official ABINIT port -----

* There are available ports in the MacPorts system for some ABINIT versions.
  They have been originally created by ABINIT developers.
  But it they are not necessarily maintained for all ABINIT versions.

* Try first to install official ABINIT port:
  sudo port install abinit

* If the lastest ABINIT is successfully installed, it's OK for you.
  If not, follow the procedure 2- below.


----- 2- Using ABINIT port from ftp.abinit.org -----

>>> 2.a- Preparing your MacPorts installation <<<<

* You need to create a local repository designed to receive local ports.
  Let's name it LOCAL_REPOSITORY in the following. This might be:
    LOCAL_REPOSITORY=/Users/my_login/ports   or /opt/local/localports
  Replace LOCAL_REPOSITORY by the correct string in the following...

* Edit the file /opt/local/etc/macports/sources.conf (with administrator privileges)
  and add these two lines at the end:
    file://LOCAL_REPOSITORY
    rsync://rsync.macports.org/release/ports [default]

* Create the directory: LOCAL_REPOSITORY/science/abinit
  
>>> 2.b- Installing ABINIT <<<<

* Download the "portfile" corresponding to your ABINIT version
  and copy it in the LOCAL_REPOSITORY/science/abinit directory.

  The portfile for ABINIT vX.Y.Z is available at:
    http://ftp.abinit.org/MacPorts/X.Y.Z/Portfile.tar.gz

* Untar the file in the local repository:
    cd LOCAL_REPOSITORY/science/abinit
    tar -xvzf Portfile.tar.gz

* Update your local repository index:
    cd LOCAL_REPOSITORY
    sudo portindex

* Install ABINIT port:
    sudo port install abinit @X.Y.Z

----- ABINIT port variants -----

* By default, ABINIT is installed with the following plugins/fallbacks:
    libXC, ETSF_IO, Wannier90

* Linking ABINIT to FFTW3 library:
    sudo port install abinit @X.Y.Z +fftw3

* Installing a multi-threaded (openMP) version of ABINIT:
    sudo port install abinit @X.Y.Z +threads

* Installing atompaw PAW atomic dataset generator:
    sudo port install abinit @X.Y.Z +atompaw

* It is possible to mix all previous variants: 
    sudo port install abinit @X.Y.Z +fftw3+threads+atompaw

* Other options available by typing:
    port info abinit


===============================================================================
=  3- COMPILING ABINIT BY YOURSELF under MacOSX                               =
===============================================================================

----- Prerequesites -----

* Mac OSX

* Xcode installed with "Xcode command line tools"; just type:
    xcode-select --install

* A Fortran compiler installed.
  Possible options:
  - gfortran binary from: http://hpc.sourceforge.net
  - gfortran binary from: https://gcc.gnu.org/wiki/GFortranBinaries#MacOS
  - gfortran installed via a package manager (MacPorts, Homebrew, Fink)
  - Intel Fortran compiler
  - ...

* A MPI library installed  (If you want to benefit from parallelism; recommended)
  Possible options:
  - mpich from http://www.mpich.org, or via a package manager
  - openmpi from http://www.open-mpi.org, or via a package manager
  - ...

----- Installing ABINIT -----

* Create a working directory:
    cd abinit_src_dir
    mkdir build && cd build

* Configure:
    Sequential ABINIT:
    ../configure FC=gfortran CC=clang FCFLAGS_EXTRA="-ffree-line-length-none"
    Parallel ABINIT (only with MPI installed):
    ../configure FC=mpif90 CC=mpicc FCFLAGS_EXTRA="-ffree-line-length-none" \
                --enable-mpi  --enable-mpi-io

* Compile:
    make mj4

* Install (optional):
    make install

----- Comments -----

* To benefit from the "fallbacks" (libXC, netCDF, ...), consult the configure
  script help : ../configure --help
  The --with-dft-flavor and --with-trio-flavor have to be adjusted.



===============================================================================
Author: M. Torrent, April 2015
