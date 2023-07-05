FROM debian:bullseye

RUN apt-get -y update && apt-get -y install mariadb-server

EXPOSE 3306

COPY ./conf/mysql.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools /var/www/

RUN service mysql start && mysql < /var/www/dbsetup.sql && rm -f /var/www/dbsetup.sql;

CMD ["mysqld"]
