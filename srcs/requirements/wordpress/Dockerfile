FROM debian:bullseye

RUN apt-get update -y

# installing wordpress
# https://make.wordpress.org/hosting/handbook/server-environment/#system-packages
RUN apt-get install -y php7.3
RUN apt-get install -y php7.3-fpm
                   php7.3-mysql \
                   php7.3-json \
                   php7.3-common \
                   php7.3-mbstring \
                   php7.3-curl \
                   php7.3-dom \
                   php7.3-exif \
                   php7.3-fileinfo \
                   php7.3-imagick \
				   php7.3-cli \
                   php7.3-xml \
                   php7.3-zip
# installing netcat
RUN apt-get install -y netcat
# installing curl
RUN apt-get install -y curl
# installing vim
RUN apt-get install -y vim

# setting the right conf file for php
COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d/

RUN mkdir -p /var/www/wordpress
WORKDIR /var/www/wordpress

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

RUN wp core download --allow-root

# create server root dir
COPY ./tools/wp-config.php /tmp/
# copying wordpress-setup.sh to the container
COPY ./tools/wp_setup.sh /tmp/

CMD ["/bin/bash", "/tmp/wp_setup.sh"]