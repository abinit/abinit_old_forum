#Prepare the computation of linear optic properties (for the imaginary spectrum only)
# ground-state with few bands,
#then non-SCF with a larger number of bands, then ddk for different directions
#Note that the k point sampling shoud be finer for significant results. The cut-off energy is also too low.

## parallel keywords
paral_kgb 1
npkpt 1
npband 6
npfft 1
wfoptalg 14
nloalg 4
fftalg 401
fft_opt_lob 2
accesswff 1
####



 ndtset 6

#First dataset : SC run with kpoints in the IBZ, only occupied bands
   iscf1  3
# n. occ. bands + 10 
  nband1 246   
  nstep1 25   
 kptopt1 0
 nbdbuf1 0
 prtden1 1   getden1 0   getwfk1 0    ! Usual file handling data

#Second dataset : NSC run with large number of bands, and points in the IBZ
    iscf2 -2  
# n. occ. bands + 400
   nband2 636   ! Minimal number of bands for linear optics (imaginary part of the spectrum)
   nstep2 25
  kptopt2  0
  getwfk2  1   getden2 1   ! Usual file handling data

#Third dataset : NSC run with large number of bands, and points in the the full BZ
    iscf3 -2  
   nband3  636  ! Minimal number of bands for linear optics (imaginary part of the spectrum)
   nstep3 25
  kptopt3  0  ! Time-reversal symmetry can be used in the present implementation for linear optics
  getwfk3  2   getden3 1   ! Usual file handling data


#Fourth dataset : ddk response function along axis 1
   iscf4 -3
  nband4  636   ! Minimal number of bands for linear optics (imaginary part of the spectrum)
  nstep4  1  nline4  0
 kptopt4  0   ! Time-reversal symmetry can be used in the present implementation for linear optics

   nqpt4  1  qpt4  0.0d0 0.0d0 0.0d0 
  rfdir4  1 0 0
 rfelfd4  2
 getwfk4  3

#Fifth dataset : ddk response function along axis 2
   iscf5 -3
  nband5  636   ! Minimal number of bands for linear optics (imaginary part of the spectrum)
  nstep5  1  nline5  0
 kptopt5  0   ! Time-reversal symmetry can be used in the present implementation for linear optics

   nqpt5  1  qpt5  0.0d0 0.0d0 0.0d0
  rfdir5  0 1 0
 rfelfd5  2
 getwfk5  3

#Sixth dataset : ddk response function along axis 3
   iscf6 -3
  nband6  636   ! Minimal number of bands for linear optics (imaginary part of the spectrum)
  nstep6  1  nline6  0
 kptopt6  0   ! Time-reversal symmetry can be used in the present implementation for linear optics

   nqpt6  1  qpt6  0.0d0 0.0d0 0.0d0
  rfdir6  0 0 1
 rfelfd6  2
 getwfk6  3


##Data common to all datasets
# nshiftk 4
# shiftk  0.5 0.5 0.5
#         0.5 0.0 0.0
#         0.0 0.5 0.0
#         0.0 0.0 0.5
# ngkpt  3*4        ! This is much too low : should be at least 24x24x24
nkpt 1
kpt 0. 0. 0.

# minimum cell for peptide 
 acell 21 24.5 16.6    angstrom
 diemac 10.0
 ecut 4.00             
 iscf 3
 ixc 1
 natom  175  nbdbuf 2
 ntypat  4
## coords  
 xcart   
4.742 8.788 -0.826
4.116 9.367 -0.146
5.811 8.922 -0.664
4.470 9.061 -1.846
4.329 7.332 -0.660
3.844 6.675 -1.579
4.514 6.821 0.559
4.953 7.393 1.266
4.143 5.483 0.974
4.720 4.916 0.243
4.621 5.349 2.417
4.543 4.275 2.588
3.925 5.759 3.149
6.071 5.772 2.603
6.330 6.928 2.930
7.077 4.898 2.528
6.921 3.935 2.270
7.913 5.040 3.078
2.712 5.035 0.713
2.595 3.908 0.238
1.756 5.923 0.996
1.994 6.781 1.472
0.347 5.590 1.057
0.141 4.662 1.591
-0.437 6.669 1.799
-1.513 6.540 1.680
-0.105 6.676 3.288
-0.709 7.449 3.762
-0.242 5.664 3.670
0.919 7.024 3.428
-0.115 8.027 1.182
-0.073 7.883 0.102
0.871 8.408 1.448
-1.148 9.116 1.455
-0.738 9.912 0.835
-2.150 8.844 1.123
-1.128 9.383 2.512
-0.275 5.291 -0.300
-1.353 4.709 -0.399
0.360 5.671 -1.411
1.267 6.064 -1.202
0.007 5.147 -2.715
-0.861 4.504 -2.568
-0.288 6.235 -3.743
-0.496 5.814 -4.727
-1.599 6.931 -3.385
-1.587 7.213 -2.332
-1.792 7.820 -3.984
-2.431 6.228 -3.420
0.926 7.154 -3.850
0.898 7.538 -4.869
1.858 6.590 -3.887
0.981 8.326 -2.874
1.390 7.890 -1.963
1.574 9.175 -3.213
0.029 8.802 -2.640
0.972 4.162 -3.359
0.544 3.492 -4.297
2.185 3.984 -2.831
2.534 4.618 -2.127
2.986 2.851 -3.249
4.027 3.104 -3.048
2.802 2.593 -4.292
2.858 1.560 -2.453
2.998 0.444 -2.948
2.479 1.598 -1.173
2.297 2.521 -0.805
1.924 0.496 -0.413
2.478 -0.439 -0.495
2.109 0.755 1.080
1.392 0.143 1.627
1.924 1.796 1.341
3.471 0.542 1.736
4.226 1.012 1.105
3.495 -0.539 1.869
3.534 1.069 3.167
2.919 0.423 3.793
3.231 2.115 3.193
4.879 1.032 3.742
5.480 0.249 3.527
5.344 1.971 4.577
4.671 3.044 5.014
5.162 3.715 5.587
3.756 3.273 4.651
6.577 1.799 5.072
7.209 1.102 4.704
6.861 2.362 5.860
0.475 0.280 -0.825
-0.181 1.200 -1.309
-0.050 -0.915 -0.546
0.429 -1.658 -0.057
-1.310 -1.362 -1.106
-2.095 -0.664 -0.816
-1.246 -1.448 -2.629
-0.416 -2.042 -3.011
-1.203 -0.435 -3.030
-2.481 -2.110 -3.223
-3.552 -2.061 -2.622
-2.354 -2.727 -4.400
-1.622 -2.614 -5.087
-3.137 -3.274 -4.727
-1.688 -2.721 -0.533
-0.996 -3.723 -0.698
-2.793 -2.826 0.209
-3.383 -2.006 0.215
-3.272 -3.949 0.990
-2.544 -4.175 1.769
-4.519 -3.445 1.712
-5.205 -3.086 0.945
-4.309 -2.551 2.298
-5.197 -4.516 2.561
-5.448 -5.364 1.922
-4.425 -5.039 3.768
-3.943 -4.215 4.295
-5.059 -5.537 4.502
-3.670 -5.737 3.405
-6.449 -3.898 3.177
-7.166 -3.512 2.454
-6.961 -4.642 3.787
-6.246 -3.050 3.831
-3.406 -5.282 0.267
-3.142 -6.311 0.884
-3.697 -5.250 -1.036
-3.873 -4.381 -1.520
-3.920 -6.438 -1.835
-4.401 -7.174 -1.191
-4.798 -5.968 -2.990
-4.810 -6.785 -3.712
-4.457 -4.998 -3.352
-6.266 -5.802 -2.606
-6.587 -6.811 -2.350
-6.541 -4.895 -1.410
-6.268 -5.341 -0.454
-5.922 -4.014 -1.579
-7.599 -4.631 -1.409
-7.095 -5.372 -3.814
-7.026 -6.113 -4.610
-8.132 -5.193 -3.531
-6.702 -4.438 -4.215
-2.615 -7.064 -2.307
-2.669 -8.022 -3.075
-1.475 -6.491 -1.914
-1.676 -5.659 -1.377
-0.132 -6.844 -2.327
-0.050 -7.890 -2.625
0.325 -6.036 -3.538
1.413 -6.007 -3.487
-0.192 -6.568 -4.872
-1.282 -6.555 -4.861
0.241 -6.099 -5.755
0.118 -7.609 -4.968
-0.101 -4.692 -3.541
-0.188 -4.421 -4.458
0.868 -6.933 -1.182
2.068 -6.967 -1.444
0.365 -6.787 0.046
-0.644 -6.831 0.073
0.968 -6.862 1.361
1.955 -6.405 1.296
0.122 -6.099 2.377
-0.898 -6.479 2.428
-0.063 -5.089 2.011
0.648 -6.043 3.808
1.416 -5.285 3.963
1.087 -7.001 4.087
-0.514 -5.695 4.728
-1.093 -6.546 5.399
-0.890 -4.427 4.910
-0.479 -3.723 4.314
-1.503 -4.210 5.683
1.196 -8.318 1.744
0.296 -9.127 1.534
2.336 -8.661 2.348
3.137 -8.059 2.475 
2.545 -9.632 2.534    angstrom
##
# tnons 72*0.0
 typat  2 1 1 1 2 4 3 1 2 1 2 1 1 2 4 3 1 1 2 4  # res 1-2
         3 1 2 1 2 1 2 1 1 1 2 1 1 2 1 1 1 2 4    # res 3
         3 1 2 1 2 1 2 1 1 1 2 1 1 2 1 1 1 2 4    # res 4
         3 1 2 1 1 2 4 3 1 2 1 2 1 1 2 1 1 2 1 1 3 1 2 3 1 1 3 1 1 2 4 # res 5-6
         3 1 2 1 2 1 1 2 4 3 1 1 2 4 3 1 2 1 2 1 1 2 1 2 1 1 1 2 1 1 1 2 4 # res 7-8
         3 1 2 1 2 1 1 2 1 2 1 1 1 2 1 1 1 2 4 3 1 2 1 2 1 2 1 1 1 4 1 2 4 # res 9-10
         3 1 2 1 2 1 1 2 1 1 2 4 3 1 1 2 4 3 1 1  # res 11-12            

  
 tolwfr  1.e-20
 znucl  1 6 7 8 
