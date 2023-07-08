FROM debian:bullseye

RUN apt update -y

# installing wordpress
# https://make.wordpress.org/hosting/handbook/server-environment/#system-packages
RUN apt install -y php \
                   php-fpm \
                   php-mysql \
                   php-json \
                   php-common \
                   php-mbstring \
                   php-curl \
                   php-dom \
                   php-exif \
                   php-fileinfo \
                   php-imagick \
				   php-cli \
                   php-xml \
                   php-zip
# installing netcat
RUN apt install -y netcat
# installing curl
RUN apt install -y curl
# installing vim
RUN apt install -y vim

# setting the right conf file for php
COPY ./conf/www.conf /etc/php/7.4/fpm/pool.d/

RUN mkdir -p /var/www/wordpress
WORKDIR /var/www/wordpress

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

RUN wp core download --allow-root

# create server root dir
COPY ./tools/wp-config.php /tmp/
# copying wp-setup.sh to the container
COPY ./tools/wp_setup.sh /tmp/

CMD ["/bin/bash", "/tmp/wp_setup.sh"]
