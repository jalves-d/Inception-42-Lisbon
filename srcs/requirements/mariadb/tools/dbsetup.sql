CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER IF NOT EXISTS 'jalves-d'@'%' IDENTIFIED BY 'jalves-d';
GRANT ALL PRIVILEGES ON wordpress.* TO 'jalves-d'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'jalves-d';
