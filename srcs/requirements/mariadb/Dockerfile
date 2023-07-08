FROM debian:bullseye

RUN apt-get update \
    && apt-get install -y mariadb-server procps \
    && apt-get upgrade -y

RUN rm -rf /var/lib/apt/lists/* \
    && apt-get autoremove

RUN mkdir -p /var/lib/mysql

COPY ./tools/dbsetup.sh /usr/local/bin/dbsetup.sh
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d

RUN chmod +x /usr/local/bin/dbsetup.sh

ENTRYPOINT ["dbsetup.sh"]

WORKDIR /usr

CMD ["mysqld_safe", "--datadir=/var/lib/mysql"]