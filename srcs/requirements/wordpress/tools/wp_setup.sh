#!/bin/bash

# if [ -f "/var/www/wordpress/wp-config.php" ]; then
# 	echo "${WP_URL} already created"
# else
	cp -f /tmp/wp-config.php /var/www/wordpress/
	chmod 644 /var/www/wordpress/wp-config.php;
	# create administrator
	wp core install --url=${WP_URL} --title=${WP_TITLE}--admin_name=${WP_ADMIN_LOGIN} --admin_email=${WP_ADMIN_EMAIL} --admin_password=${WP_ADMIN_PASSWORD} --allow-root
	# Create user
	wp user create ${WP_USER_LOGIN} ${WP_USER_EMAIL} --user_pass=${WP_USER_PASSWORD} --allow-root
# fi

service php7.3-fpm start;
service php7.3-fpm stop;

php-fpm7.3 -F -R;