#!/bin/bash

docker build -t ft_server-image .
docker run -id -p 80:80 -p 433:433 --name ft_server-container ft_server-image
docker ps
