#!/bin/bash
sleep 10;
# if [ -f "/var/www/wordpress/wp-config.php" ]; then
# 	echo "${WP_URL} already created"
# else
	cp -f /tmp/wp-config.php /var/www/wordpress/
	chmod 644 /var/www/wordpress/wp-config.php/
	wp config create --dbname=$db_name--dbuser=$db_user --dbpass=$dp_password --dbhost=$db_host --dbcharset="utf8" --dbcollate="utf8_general_ci" --allow-root
	# create administrator
	wp core install --url="jalves-d.42.pt" --title="wordpress" --admin_name=${WP_ADMIN_LOGIN} --admin_user="jalves" --admin_email="jalves@42.pt" --admin_password="jalves12345" --allow-root
	# Create user
	wp user create "jalves-d" "jalves-d@42.pt" --user_pass="12345" --allow-root
# fi

service php7.4-fpm start
service php7.4-fpm stop

php-fpm7.4 -F -R;