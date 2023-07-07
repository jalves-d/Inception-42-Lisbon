CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER IF NOT EXISTS 'jalves-d'@'%' IDENTIFIED BY 'jalves';
GRANT ALL PRIVILEGES ON wordpress.* TO 'jalves-d'@'%';
ALTER USER 'root'@'localhost' IDENTIFIED BY 'rootawesome';
FLUSH PRIVILEGES;
