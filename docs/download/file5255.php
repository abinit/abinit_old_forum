O 8.
LDA-PW scalarrelativistic loggrid 1500 logderivrange -20 20 500
2 2 0 0 0 ! Up to 2s and 2p; O:1s2 2s2 2p4
1 0 2.0 ! Electronic configuration 2s2 2p4
2 0 2.0
2 1 4.0
0 0 0
c ! 1s
v ! 2s valence
v ! 2p valence
1 ! Basis contains s and p partial-waves
1.0   ! rpaw=1.1, rshape=1.1, rveff=1.1, rcore=1.1
y ! Additional s partial-wave
4.38 ! at Eref=0.0 Rydberg
n
y ! Additional p partial-wave
4 ! at Eref=0.0 Ry
n
vanderbilt
2 0. ultrasoft
1.0 ! Matching radius for Phi1 (l=0)
1.0 ! Matching radius for Phi2 (l=0)
1.0 ! Matching radius for Phi3 (l=1)
1.0 ! Matching radius for Phi4 (l=1)
2     ! Output for abinit
0 ! END
