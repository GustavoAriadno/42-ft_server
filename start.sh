#!/bin/bash

docker build -t ft_server-image .
docker run --name ft_server-container -itd -p 80:80 -p 443:443 ft_server-image
docker ps
