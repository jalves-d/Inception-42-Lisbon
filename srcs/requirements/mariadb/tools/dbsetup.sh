#!/bin/bash

service mariadb start 

echo "CREATE DATABASE IF NOT EXISTS wordpress;" >> db1.sql
echo "CREATE USER IF NOT EXISTS 'jalves-d'@'%' IDENTIFIED BY 'jalves';" >> db1.sql
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'jalves-d'@'%';" >> db1.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY 'rootawesome';" >> db1.sql
echo "FLUSH PRIVILEGES;" >> db1.sql

mysql < db1.sql

kill $(cat /var/run/mysqld/mysqld.pid)

mysqld
