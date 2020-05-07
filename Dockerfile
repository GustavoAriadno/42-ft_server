# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: saopaulo42 <saopaulo42@student.42.fr>      +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/04/08 23:12:12 by saopaulo42        #+#    #+#              #
#    Updated: 2020/05/03 19:48:42 by saopaulo42       ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#OS
FROM debian:buster

LABEL verions="1.0.0" maintainer="Gustavo Ariadno"

#install OS updates/upgrades
RUN ["apt-get", "update", "-y"]
RUN ["apt-get", "upgrade", "-y"]
#install nginx
RUN ["apt-get", "install", \
	"nginx", "-y"]
#delete packages already installed
RUN ["apt-get", "clean"]

ARG SSLPATH=/srcs/ssl

#copy ssl certficate and key
COPY ["$SSLPATH/self-signed.crt", "/etc/ssl/certs/"]
COPY ["$SSLPATH/self-signed.key", "/etc/ssl/private/"]

#configure nginx
#RUN ["rm", "-f", "/etc/nginx/sites-enabled/default"]
#RUN ["rm", "-f", "/etc/nginx/sites-avaible/default"]
#RUN ["rm", "-rf", "/var/www/html"]

#put the script to initiate the container
COPY ["./srcs/the_wake.sh", "/"]

#the container gonna be exposed on 80 and 443 port
EXPOSE 80/tcp 443/tcp



