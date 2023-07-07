FROM debian:bullseye

RUN apt-get -y update && apt-get install -y mariadb-server

EXPOSE 3306

COPY ./conf/mysql.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools /var/www/

RUN service mysql start && mysql < /var/www/dbsetup.sql && rm -rf /var/www/dbsetup.sql;

CMD ["mysqld"]
