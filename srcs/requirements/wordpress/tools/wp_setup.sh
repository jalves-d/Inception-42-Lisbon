#!/bin/bash

# if [ -f "/var/www/wordpress/wp-config.php" ]; then
# 	echo "${WP_URL} already created"
# else
	cp -f /tmp/wp-config.php /var/www/wordpress/
	chmod 644 /var/www/wordpress/wp-config.php/
	wp config create --dbname=$db_name--dbuser=$db_user --dbpass=$dp_password --dbhost="mariadb" --dbcharset="utf8" --dbcollate="utf8_general_ci" --allow-root
	# create administrator
	wp core install --url=${WP_URL} --title=${WP_TITLE} --admin_name=${WP_ADMIN_LOGIN} --admin_user=${WP_ADMIN_LOGIN} --admin_email=${WP_ADMIN_EMAIL} --admin_password=${WP_ADMIN_PASSWORD} --allow-root
	# Create user
	wp user create "$WP_USER_LOGIN" "$WP_USER_EMAIL" --user_pass="$WP_USER_PASSWORD" --allow-root
# fi

service php7.4-fpm start
service php7.4-fpm stop

php-fpm7.4 -F -R;