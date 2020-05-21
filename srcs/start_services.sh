#!/bin/bash

# MySQL configure
service mysql start
echo "CREATE DATABASE wordpress;" | mysql -u root --skip-password
echo "UPDATE mysql.user SET plugin = 'mysql_native_password' WHERE user='root';" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* to 'root'@'localhost';" |  mysql -u root --skip-password
echo "FLUSH PRIVILEGES" | mysql -u root --skip-password

service php7.3-fpm start
service nginx start

tail -F /dev/null
