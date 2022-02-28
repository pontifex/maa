#!/bin/sh

docker exec -it container_nginx_maa cp /var/www/maa/docker/nginx/maa.conf /etc/nginx/sites-available/
docker exec -it container_nginx_maa service nginx reload
