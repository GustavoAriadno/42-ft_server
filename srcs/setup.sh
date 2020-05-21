#!/bin/bash

# Config access
chown -R www-data:www-data /var/www/*
chmod -R 755 /var/www/*

# SSL key and certificate
mkdir /etc/nginx/ssl
openssl req -x509 -newkey rsa:4096 -sha256 -days 365 -nodes \
        -out /etc/nginx/ssl/localhost.pem -keyout /etc/nginx/ssl/localhost.key \
        -subj "/C=BR/ST=Sao Paulo/L=Sao Paulo/O=42 Sao Paulo/OU=gariadno/CN=localhost"

# PhpMyAdmin configure
mkdir -p /var/www/localhost/phpmyadmin
tar -xvf /tmp/phpMyAdmin-4.9.0.1-all-languages.tar.gz --strip-components 1 -C /var/www/localhost/phpmyadmin
mv /tmp/config.inc.php /var/www/localhost/phpmyadmin/

# Wordpress config
tar -xvf /tmp/latest.tar.gz
mv wordpress/ /var/www/localhost/
mv /tmp/wp-config.php /var/www/localhost/wordpress/

# Nginx configure
ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/
rm -rf /etc/nginx/sites-enabled/default
if [ "$AUTO_INDEX" == "on" ] || [ "$AUTO_INDEX" == "off" ];
then
    sed -i "/autoindex/ s/on\|off/$AUTO_INDEX/" /etc/nginx/sites-enabled/localhost
    echo "Autoindex is $AUTO_INDEX now"
fi
