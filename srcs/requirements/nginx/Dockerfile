FROM debian:bullseye

RUN apt-get -y update && apt-get -y install nginx openssl

EXPOSE 443

COPY ./conf/default /etc/nginx/sites-enabled/default
COPY ./tools/nginx_setup.sh /var/www

RUN chmod +x /var/www/nginx_setup.sh

ENTRYPOINT [ "var/www/nginx_setup.sh" ]

CMD ["nginx", "-g", "daemon off;"]
