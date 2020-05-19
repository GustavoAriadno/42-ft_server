FROM debian:buster

# Copying awakening script to container
COPY ./srcs/setup.sh ./
COPY ./srcs/start_services.sh ./

COPY ./srcs/Wordpress/wp-config.php /tmp/
COPY ./srcs/Wordpress/latest.tar.gz /tmp/
COPY ./srcs/PhpMyAdmin/config.inc.php /tmp/
COPY ./srcs/PhpMyAdmin/phpMyAdmin-4.9.0.1-all-languages.tar.gz /tmp/

COPY ./srcs/Nginx/nginx-conf /etc/nginx/sites-available/localhost

ENV AUTO_INDEX on

# Install OS updates, softwares and clean
RUN apt-get update && apt-get upgrade -y; \
	apt-get install -y \
	nginx \
	openssl \
	default-mysql-server \
	php7.3 php-mysql php-fpm php-cli php-mbstring; \
	apt-get clean
RUN /setup.sh

# The container gonna be exposed on 80 and 443 ports
EXPOSE 80/tcp 443/tcp
# Awakening the container
ENTRYPOINT ["sh", "start_services.sh"]
