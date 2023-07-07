FROM debian:bullseye

RUN apt-get -y update && apt-get install -y mariadb-server

EXPOSE 3306

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

COPY ./tools/dbsetup.sh /

CMD ["./dbsetup.sh"]
