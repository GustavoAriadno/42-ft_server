FROM debian:buster

# Copying awakening script to container

COPY ["./srcs/setup.sh", \
	"./srcs/start_services.sh", \
	"./srcs/Wordpress/wp-config.php", \ 
	"./srcs/Wordpress/latest.tar.gz", \
	"./srcs/PhpMyAdmin/config.inc.php", \
	"./srcs/PhpMyAdmin/phpMyAdmin-4.9.0.1-all-languages.tar.gz", \
	"./srcs/Nginx/nginx-conf", \
	"/tmp/"]

#COPY ./srcs/Nginx/nginx-conf /etc/nginx/sites-available/localhost

ENV AUTO_INDEX on

# Install OS updates, softwares and clean
RUN apt-get update && apt-get upgrade -y; \
	apt-get install -y \
	nginx \
	openssl \
	default-mysql-server \
	php7.3 php-mysql php-fpm php-cli php-mbstring; \
	apt-get clean; \
	/tmp/setup.sh
#RUN /tmp/setup.sh

# The container gonna be exposed on 80 and 443 ports
EXPOSE 80/tcp 443/tcp
# Awakening the container
ENTRYPOINT ["sh", "/tmp/start_services.sh"]
