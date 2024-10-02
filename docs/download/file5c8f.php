A. Installation

 Requirements:
   python version >= 2.7
   PyQT4 
   Numpy
   Scipy

 1. Compile math.f90

 $ cd /path/to/abinit7.4.2../scripts/post_processing/appa/
 $ cd fortran
 $ f2py -c math.f90 -m math
 
 2. Edit the header of "appa_nw.py" to notify that the script will be read by Python2.7.5

    Default:  #!/usr/bin/env python
    Edit to:  #!/home/p_thanusit/apps/Python/2.7.5/bin/python
 
   Dont't forget to comment the default by removing "!".
 
 3. To get the "rdf" calculation work properly, modify line 623-629 as below:


        while True:
            try:                        
               prmax = input("Choose maximum radius (<= lattice constant, Bohrs): ")
            if prmax <= 20:   #Should make more general by using prmax <= lattice constant
               break
        except:
              pass; 
 

B. Running APPA with an APPA input file, e.g input.APPA. This way can do everything in one go, except "rdf".

In a working drectory
1. Prepare the molecular dynamic output files, *_out_HIST and *_OUT.nc from a run to be analysed.
2. Prepare an input file named "input.APPA" containing the required input keywords (referred to appa's README),
   for example:

   #APPA input file:

   file tmoldyn_out_HIST
   stepmin -1
   stepmax -1
   total_energy 2
   temperature
   stress 3
   vdos 2
   vdosres 8

3. To run the analysis, Launch

  $ /path/to/.../abinit-7.4.1/scripts/post_processing/appa/appa_nw.py input.APPA

  -If nothing's wrong, the following log comes up and the results *.pdf and/or *.dat are output.  

----------------------------------------------------------------------------------------

     /  /\         _____        ___          /__/\        ___           ___    
    /  /::\       /  /::\      /  /\         \  \:\      /  /\         /  /\   
   /  /:/\:\     /  /:/\:\    /  /:/          \  \:\    /  /:/        /  /:/   
  /  /:/~/::\   /  /:/~/::\  /__/::\      _____\__\:\  /__/::\       /  /:/    
 /__/:/ /:/\:\ /__/:/ /:/\:| \__\/\:\__  /__/::::::::\ \__\/\:\__   /  /::\    
 \  \:\/:/__\/ \  \:\/:/~/:/    \  \:\/\ \  \:\~~\~~\/    \  \:\/\ /__/:/\:\   
  \  \::/       \  \::/ /:/      \__\::/  \  \:\  ~~~      \__\::/ \__\/  \:\  
   \  \:\        \  \:\/:/       /__/:/    \  \:\          /__/:/       \  \:\ 
    \  \:\        \  \::/        \__\/      \  \:\         \__\/         \__\/ 
     \__\/         \__\/                     \__\/                             


File :tmoldyn_out_HIST
loading successful!

Set initial step to 1
Set final step to 50
vdos calculation
/home/p_thanusit/apps/Python/2.7.5/lib/python2.7/site-packages/matplotlib/axes.py:2536: UserWarning: Attempting to set identical left==right results
in singular transformations; automatically expanding.
left=0.0, right=0
  + 'left=%s, right=%s') % (left, right))
/local_scratch/AbinitWork7.4.1/test_Python_script_appa/tmoldyn_out_HIST_vdos.pdf
File save sucessful!
stress calculation
/local_scratch/AbinitWork7.4.1/test_Python_script_appa/tmoldyn_out_HIST_stress.dat
File save sucessful!
/local_scratch/AbinitWork7.4.1/test_Python_script_appa/tmoldyn_out_HIST_stress.pdf
File save sucessful!
temperatures calculation
/local_scratch/AbinitWork7.4.1/test_Python_script_appa/tmoldyn_out_HIST_temperatures.dat
File save sucessful!
total_energy calculation
/local_scratch/AbinitWork7.4.1/test_Python_script_appa/tmoldyn_out_HIST_total_energy.pdf
File save sucessful!
Thank you for using Abinit Post Process, see you soon!
[p_thanusit@phys213 test_Python_script_appa]$ 

----------------------------------------------------------------------------------------------

C. Run APPA manually

1. Prepare the molecular dynamic output files, *_out_HIST and *_OUT.nc from a run to be analysed.
2. In the working directory launch:

  $ /Path/to/..abinit7.4.2/appa/appa_nw.py

The following example is to calculate rdf, from r=0 t0 19 Bohrs, save data in ASCII (rdf.dat) and PDF (rdf.pdf). 

------------------------------------------------------------------------------------

  /  /\         _____        ___          /__/\        ___           ___    
    /  /::\       /  /::\      /  /\         \  \:\      /  /\         /  /\   
   /  /:/\:\     /  /:/\:\    /  /:/          \  \:\    /  /:/        /  /:/   
  /  /:/~/::\   /  /:/~/::\  /__/::\      _____\__\:\  /__/::\       /  /:/    
 /__/:/ /:/\:\ /__/:/ /:/\:| \__\/\:\__  /__/::::::::\ \__\/\:\__   /  /::\    
 \  \:\/:/__\/ \  \:\/:/~/:/    \  \:\/\ \  \:\~~\~~\/    \  \:\/\ /__/:/\:\   
  \  \::/       \  \::/ /:/      \__\::/  \  \:\  ~~~      \__\::/ \__\/  \:\  
   \  \:\        \  \:\/:/       /__/:/    \  \:\          /__/:/       \  \:\ 
    \  \:\        \  \::/        \__\/      \  \:\         \__\/         \__\/ 
     \__\/         \__\/                     \__\/                             

Loading File please wait...
loading successful!
File :tmoldyn_04_out_OUT.nc


------------Simulation datas:------------
Number of atoms : 108
Step: 100
Total Energy (Ha): -252.07 +/- 0.5
Volume (Bohr^3): 7094
Temperature (K): 3000.0 +/- 5.44e-12
Pressure (GPa): 125.69 +/- 3.71
initial step :  1
final   step :  100
-----------------------------------------
 
your options are:
 
1  => Open new File
2  => Change initial/final step
3  => Save simulation (XYZ format)
4  => Calculation of quantities
5  => Elastic constant calculation
6  => Clear
7  => Help
8  => Quit
 
Choose your option: 4

your options are:
 
1  => Total Energy
2  => Potential Energy
3  => Kinetic Energy
4  => Temperature
5  => Pressure
6  => Stress
7  => VACF
8  => VDOS
9  => RDF
10 => Help
11 => Return
 
Choose your option: 9

Choose format:
1  => ASCII
2  => PDF
3  => PDF+ASCII
4  => Return
Choose your format: 3
Choose maximum radius (<= lattice constant, Bohrs): 19
Choose radius incrementation (0.1) : 0.1
Choose time step incrementation (15) : 15

please wait....
Choose name file (dat) : rdf
/local_scratch/AbinitWork7.4.2/test_Python_script_appa/tutoparal_moldyn/tmoldyn_04_try_rdf/rdf.dat
File save sucessful!
Choose name file (pdf) : rdf
/local_scratch/AbinitWork7.4.2/test_Python_script_appa/tutoparal_moldyn/tmoldyn_04_try_rdf/rdf.pdf
File save sucessful!
 
your options are:
 
1  => Open new File
2  => Change initial/final step
3  => Save simulation (XYZ format)
4  => Calculation of quantities
5  => Elastic constant calculation
6  => Clear
7  => Help
8  => Quit
 
Choose your option: 8
Thank you for using Abinit Post Process, see you soon!
[p_thanusit@phys213 tmoldyn_04_try_rdf]$

--------------------------------------------------------------------




