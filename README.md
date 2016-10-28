# OnlineJudge

从代码上分为两大部分，core和web，分别对应判题和数据管理两大功能。

两者之间数据交换有两种方式：1、通过数据库，轮询。2、通过wget实现的http请求。

两种方式的选择在判题端的配置文件/home/judge/etc/judge.conf中，HTTP_JUDGE=1则启用后者，默认为前者。


core分3部分，judged、judge_client、sim

其中judged为服务进程，d即daemon。负责轮询数据库或web端，提取判题队列。

当发现新任务时产生judge_client进程。

judge_client进程为实际判题程序，负责准备运行环境、数据，运行并监控目标程序的系统调用，采集运行指标，判断运行结果。

当配置为启用抄袭检查时，judge_client将调用sim，判断相似性结果，并写回数据库或web端。

sim为第三方应用程序，可进行语法分析判断文本相似度，通过检验的程序将由judge_client复制进题目数据的ac目录，成为新的参考样本。

wget是linux下一个开源http客户端，提供了基于命令行的http交互功能，这里用做http客户端，用curl-lib应该也可以实现，本人熟悉wget不熟悉curl，因此偷懒。


web分两大部分，前端和admin目录下的管理程序。

前端无非是数据库的CRUD操作，关键功能是将用户提交的程序源码加入数据库的任务队列（solution表、souce_code表）。

管理程序提供具有administrator等高级权限的账号管理试题、账号等方面的功能。

其中FPS导入导出程序主要为XML格式的数据处理。


特别的，judged可以多重启动，通过增加基准目录参数指定启动位置（默认/home/judge），从而确定judge.conf的位置，并确定其他参数。

因此不但可以一个web服务器下挂多个判题服务器，也可以一台物理机器上同时启动任意多个相互独立的OJ系统。


实际使用中，使用开源的ispcp虚拟主机管理系统搭建多Web环境与hustoj协同工作取得了良好效果。


LiveCD的实现，通过uck工具解压出ubuntulivecd的chroot环境，并在其中删除oo、gnome等大型程序释放空间，然后用apt工具安装基础环境，安装配置lxde和hustoj。再使用uck重新打包形成iso。