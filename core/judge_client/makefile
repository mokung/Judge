all: judge_client.cc
	g++ -Wall -c -I/usr/include/ judge_client.cc
	g++ -Wall -o judge_client judge_client.o -L/usr/local/mysql/lib/mysql -L/usr/lib/mysql  -L/usr/lib64/mysql -lmysqlclient
