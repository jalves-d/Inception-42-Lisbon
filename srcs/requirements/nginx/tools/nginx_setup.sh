#!/bin/bash

#Creating a public and a private key pair using openssl to ssl certificate to use tls protocol
if [ ! -f /etc/ssl/certs/nginx.crt ]; then
echo "Nginx: setting up ssl certificate ...";
openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=PT/ST=Portugal/L=Lisbon/O=wordpress/CN=jalves-d";
echo "Nginx: the certificate is set up!";
fi

exec "$@"
