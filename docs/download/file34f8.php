Fer 26
LDA-PW scalarrelativistic point-nucleus loggrid 1500 80. 1.8 logderivrange -20 20 500
4 4 3 0 0 ! Up to 4s, 4p and 3d; Fe:1s2 2s2 2p6 3s2 3p6 3d6 4s2
3 2 7.0  ! Electronic configuration 3d7 4s1 4p0
4 0 1.0
4 1 0
0 0 0
c ! 1s
c ! 2s
c ! 3s
v ! 4s valence
c ! 2p
c ! 3p
v ! 4p valence
v ! 3d valence
2 ! Basis contains s, p and d partial-waves
1.7 1.7 1.7 1.7  !1.78 rpaw=1.8, rshape=1.8, rveff=1.8, rcore=1.8
y ! Additional s partial-wave
0 ! at Eref=7.0 Rydberg
n
y ! Additional p partial-wave
0 ! at Eref=10.0 Ry
n
y ! Additional d partial-wave
0 ! at Eref=0.0 Ry
n
vanderbilt
3 0. ultrasoft
1.7 ! Matching radius for Phi1 (l=0)
1.7 ! Matching radius for Phi2 (l=0)
1.7 ! Matching radius for Phi3 (l=1)
1.7 ! Matching radius for Phi4 (l=1)
1.7 ! Matching radius for Phi5 (l=2)
1.7 ! Matching radius for Phi6 (l=2)
1
3 2 6 ! Test configuration 3d7 4s1
4 0 2
0 0 0
2     ! Output for abinit
0 ! END
