# Crystalline aluminum : computation of the total energy
#
# Determination of the surface energy of aluminum :
# convergence with respect to the number of vacuum layers and Al layers.

#定义晶体Al的晶体结构和基矢方向
ndtset  16           #定义程序代码中共有16个数据集
jdtset               #定义真实计算的16个数据集
11 12 13 14 22 23 24 25 33 34 35 36 44 45 46 47
acell                #定义晶体Al的惯用元胞，单位Bohr
3*7.5081523
rprim?:              #超胞结构的初基矢量的初始值：3原子层+3真空层
0.5  -0.5  0.0
0.5   0.5  0.0
0.0   0.0  3.0
rprim?+              #超胞结构初基矢量的增量，厚度增长沿Z轴方向
0.0  0.0  0.0
0.0  0.0  0.0
0.0  0.0  0.5
chkprim      0      #允许使用非初基元胞的基矢，加快代码初始化
chksymbreak  0      #不检测计算体系的对称性，用于非标准周期结构
iprcel   45         #SCF preconditioner，介电常数矩阵的初始化
#下面定义超胞中原子类型和数目
ntypat  1           #指定晶胞中不同原子的种类数
znucl   13          #指定元胞中不同原子的核电荷数
natom:?  3          #指定计算体系中所有原子的总数的初始值
natom+?  1           #指定计算体系中所有原子的总数的增量
typat  1 1 1 1 1 1   #指定元胞中每一个原子的种类
#下面定义超胞中原子坐标，注意要使用绝对坐标！
xcart
0.0      0.0   0.0          #定义超胞中第一层Al原子的坐标
3.754076 0.0   3.754076     #定义超胞中第二层Al原子的坐标
0.0     0.0    7.508152     #定义超胞中第三层Al原子的坐标
3.754076 0.0   11.26223     #定义超胞中第四层Al原子的坐标
0.0     0.0    15.016305    #定义超胞中第五层Al原子的坐标
3.754076 0.0   18.770381    #定义超胞中第六层Al原子的坐标
0.0     0.0    22.524457    #第七层Al原子的坐标，此处为多余的
#下面定义计算时的K空间网格点的划分
occopt  4         #指明为金属，轨道占据方式采用Cold smearing函数
tsmear  0.04       #定义金属铝的温度展宽系数
kptopt   1       #定义网格点划分的方式
#1为根据ngkpt、nshiftk和shiftk自动划分
ngkpt  4 4 1       #定义K空间网格点的划分，注意Z轴方向为1
nshiftk  2
shiftk              #这些shifts值对所有的网格点都相同
0.5 0.0 0.0
0.0 0.5 0.0
#下面定义收敛判据和其它的控制参数
ixc   1              #指定交换相关函数采用LDA近似
ionmov  2            #指定优化原子坐标的方法，2为使用BFGS优化方法
ntime   20           #SCF优化时最大的优化次数
toldff  1.0d-6       #两次迭代之间容许的最大受力误差
ecut   10.0          #截断动能的最大值，单位Hartree 
tolmxf  5.0d-5      #BFGS优化计算时容许的最大受力
nstep   20          #自洽计算时最大迭代次数
optforces 1         #自洽计算时考虑原子受力的分析，可提高收敛速度
