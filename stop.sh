#!/bin/bash

docker stop ft_server-container
docker rm ft_server-container
docker rmi ft_server-image
